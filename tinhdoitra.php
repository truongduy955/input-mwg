<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Liên hệ</title>
    <style>
        label {
            display: block;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Sử dụng navbar -->
        <?php include 'navbar.php'; ?>
        
        <!-- Sử dụng card -->
        <div class="card mt-3">
            <div class="card-header"><b>TÍNH ĐỔI TRẢ</b></div>
            <a> 
                <b> Ghi chú</b><br> 
                <a href="https://www.thegioididong.com/chinh-sach-bao-hanh-san-pham" target="_blank" rel="noopener noreferrer" class="custom-button">Xem thêm chính sách</a>
                - Vui lòng F5(reset) lại trang tính khi thực hiện qua tra cứu mới<br>
                - Bảng tính chỉ áp dụng cho website TGDĐ & ĐMX<br>
                - Nhóm sản phẩm TGDĐ kinh doanh TRỪ nhóm Phụ kiện không điện, Sản phẩm đã sử dụng & Sản phẩm khuyến mãi<br>
                - Áp dụng cho sản phẩm lỗi và không lỗi<br>
                - Giá trị sản phẩm thu lại chỉ là GIÁ THAM KHẢO<br><br>
            </a>
            <form id="delayForm">
                <label for="purchaseDate"><b>Ngày mua hàng:</b></label>
                <input type="date" id="purchaseDate" required><br><br>
                <label for="currentDateOption"><b>Chọn ngày hiện tại:</b></label>
                <select id="currentDateOption">
                    <option value="current">Ngày hiện tại</option>
                    <option value="custom">Chọn ngày</option>
                </select><br>
                <div id="customDate" style="display: none;">
                    <label for="customCurrentDate"><b>Ngày chọn:</b></label>
                    <input type="date" id="customCurrentDate">
                </div><br>
                <label for="price"><b>Số tiền (VNĐ):</b></label>
                <input type="text" id="price" required><br>
                <button type="button" onclick="calculateDelay()"><b>XEM KẾT QUẢ</b></button>
                <button type="button" onclick="resetForm()"><b>LÀM MỚI</b></button>
            </form>
            <div id="result" style="display: none;">
                <h3>Kết quả</h3>
                <p><b>Thời gian đã sử dụng:</b> <span id="usedTimeMonths"></span> tháng <span id="usedTimeDays"></span> ngày</p>
                <p><b>Phần trăm phí:</b> <span id="feePercentage"></span>%</p>
                <p><b>Số tiền còn lại:</b> <span id="remainingPrice"></span> VNĐ</p>
                <p id="errorMessage" style="color: red;"></p>
            </div>
            <script>
            // Hàm để lấy ngày hiện tại
            function getCurrentDate() {
                var today = new Date();
                var dd = String(today.getDate()).padStart(2, '0');
                var mm = String(today.getMonth() + 1).padStart(2, '0');
                var yyyy = today.getFullYear();
                return yyyy + '-' + mm + '-' + dd;
            }

            // Cập nhật giá trị của trường ngày hiện tại khi chọn tùy chọn "Ngày hiện tại"
            document.getElementById("currentDateOption").addEventListener("change", function() {
                if (this.value === "current") {
                    document.getElementById("customDate").style.display = "none";
                    document.getElementById("customCurrentDate").value = getCurrentDate();
                } else {
                    document.getElementById("customDate").style.display = "block";
                }
            });

            // Hàm tính toán kết quả
            function calculateDelay() {
                var purchaseDate = new Date(document.getElementById("purchaseDate").value);
                var currentDateOption = document.getElementById("currentDateOption").value;
                var currentDate;
                if (currentDateOption === "current") {
                    currentDate = new Date(getCurrentDate());
                } else {
                    currentDate = new Date(document.getElementById("customCurrentDate").value);
                }
                
                var timeDiff = currentDate.getTime() - purchaseDate.getTime();
                var monthsElapsed = Math.floor(timeDiff / (1000 * 3600 * 24 * 30)); // Số tháng trôi qua
                var daysElapsed = Math.floor(timeDiff / (1000 * 3600 * 24) % 30); // Số ngày trôi qua
                
                var feePercentage;
                if (monthsElapsed == 0) {
                    feePercentage = 20;
                } else if (monthsElapsed >= 1 && monthsElapsed <= 11) {
                    feePercentage = 20 + (monthsElapsed * 10);
                } else {
                    document.getElementById("errorMessage").innerText = "Đã quá thời gian thu lại!";
                    return;
                }
                
                var usedTimeMonths = monthsElapsed == 0 ? "1" : monthsElapsed;
                var usedTimeDays = daysElapsed;
                var remainingPrice = (100 - feePercentage) / 100 * parseFloat(document.getElementById("price").value.replace(/\./g, ""));
                
                document.getElementById("usedTimeMonths").innerText = usedTimeMonths;
                document.getElementById("usedTimeDays").innerText = usedTimeDays;
                document.getElementById("feePercentage").innerText = feePercentage;
                document.getElementById("remainingPrice").innerText = remainingPrice.toLocaleString();
                document.getElementById("result").style.display = "block";
                document.getElementById("errorMessage").innerText = "";
                
                if (remainingPrice < 0) {
                    document.getElementById("errorMessage").innerText = "Số tiền còn lại đã âm!";
                }
            }

            // Hàm làm mới form
            function resetForm() {
                document.getElementById("delayForm").reset();
                document.getElementById("result").style.display = "none";
                document.getElementById("errorMessage").innerText = "";
            }

            // Bắt sự kiện nhấn Enter
            document.addEventListener("keydown", function(event) {
                if (event.key === "Enter") {
                    event.preventDefault();
                    calculateDelay();
                }
            });

            </script>
        </div>
        <?php include 'javascript.php'; ?>
        <?php include 'footer.php'; ?><br>
    </div>
</body>
</html>
