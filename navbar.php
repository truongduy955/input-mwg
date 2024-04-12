<nav class="navbar navbar-expand-lg navbar-light bg-warning">
	<div class="container-fluid">
		<a class="navbar-brand" href="index.php"><b>MWG</b></a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			
			
			
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="luongtruycap.php"><b>Lượng Truy Cập</b></a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="lienhe.php"><b>Liên Hệ</b></a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="tinhdoitra.php"><b>Tính đổi trả</b></a>
				</li>
				
				
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						<b>Quản Lý</b>
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="diadiem.php">Danh sách cửa hàng</a></li>
					</ul>
				</li>
				
				
				
				
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						<b>CRM & QTV</b>
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<div class="dropdown-item">
							<a href="https://crm.thegioididong.com/ctv" target="_blank" rel="noopener noreferrer" >CRM</a>
						</div>
						<div class="dropdown-item">
							<a href="https://www.thegioididong.com/qtcm" target="_blank" rel="noopener noreferrer" >QTV TOOL</a>
						</div>
						<div class="dropdown-item">
							<a href="https://www.thegioididong.com/qtcm/Account/login?returnurl=/qtcm/fb/home" target="_blank" rel="noopener noreferrer" >FB TOOL</a>
						</div>
						<div class="dropdown-item">
							<a href="https://newinsite.thegioididong.com/" target="_blank" rel="noopener noreferrer" >BCNB</a>
						</div>
					</ul>
				</li>
				
				
				
				
				
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						<b>Xem Thêm</b>
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<div class="dropdown-item">
							<a href="https://www.thegioididong.com/tin-tuc/tat-tan-tat-ve-chuong-trinh-uu-dai-app-qua-tang-vip-link-tai-va-cach-su-dung-1481677#gioithieu" target="_blank" rel="noopener noreferrer" >Tích điểm quà tặng Vip</a>
						</div>
						<div class="dropdown-item">
							<a href="https://www.thegioididong.com/lich-su-mua-hang/dang-nhap" target="_blank" rel="noopener noreferrer" >Lịch sử mua hàng</a>
						</div>
						<div class="dropdown-item">
							<a href="https://www.thegioididong.com/tra-gop/" target="_blank" rel="noopener noreferrer" >Tìm hiểu về mua trả góp</a>
						</div>
						<div class="dropdown-item">
							<a href="https://www.thegioididong.com/bao-hanh" target="_blank" rel="noopener noreferrer" >Chính sách bảo hành</a>
						</div>
						<div class="dropdown-item">
							<a href="https://www.thegioididong.com/chinh-sach-bao-hanh-san-pham" target="_blank" rel="noopener noreferrer" >Chính sách đổi trả</a>
						</div>
						<div class="dropdown-item">
							<a href="https://www.thegioididong.com/giao-hang" target="_blank" rel="noopener noreferrer" >Giao hàng & thanh toán</a>
						</div>
						<div class="dropdown-item">
							<a href="https://www.thegioididong.com/huong-dan-mua-hang" target="_blank" rel="noopener noreferrer" >Hướng dẫn mua online</a>
						</div>
						<div class="dropdown-item">
							<a href="https://www.thegioididong.com/b2b/" target="_blank" rel="noopener noreferrer" >Bán hàng doanh nghiệp</a>
						</div>
						<div class="dropdown-item">
							<a href="https://www.thegioididong.com/phieu-mua-hang" target="_blank" rel="noopener noreferrer" >Phiếu mua hàng</a>
						</div>
						<div class="dropdown-item">
							<a href="https://hddt.thegioididong.com/" target="_blank" rel="noopener noreferrer" >In hóa đơn điện tử</a>
						</div>
						<div class="dropdown-item">
							<a href="https://www.thegioididong.com/chinh-sach-khui-hop-apple" target="_blank" rel="noopener noreferrer" >Chính sách khui hộp sản phẩm Apple</a>
						</div>
					</ul>
				</li>
			</ul>
			<div id="clock"></div>
			<div id="date"></div>
            <!-- Logout button -->
            <button class="btn btn-danger" onclick="logout()">Đăng xuất</button>
		</div>
	</div>
</nav>
<script>

    // Function to handle logout
	function logout() {
    // Redirect to logout page
    window.location.href = 'logout.php';
}
</script>






<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        #clock {
            font-weight: bold;
            margin-right: 10px;
        }
        #date {
            font-weight: bold;
            margin-right: 50px;
        }
    </style>
</head>
<body>
    <!-- Đồng hồ -->
    <div class="container">
        <div class="row">
            <div class="col" id="clock"></div>
            <div class="col" id="date"></div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-b2EHW8MxvaF4s3XjOA4W/PDZSd6EKgIUKiQ/2rsxHYy9Oe/g+JF3LGh+H6Z+wOqJ" crossorigin="anonymous"></script>

    <script>
        function updateClock() {
            var now = new Date();
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds();
            var timeString = hours + ':' + (minutes < 10 ? '0' + minutes : minutes) + ':' + (seconds < 10 ? '0' + seconds : seconds);
            document.getElementById('clock').textContent = timeString;

            var date = now.getDate();
            var month = now.getMonth() + 1;
            var year = now.getFullYear();
            var dateString = date + '/' + month + '/' + year;
            document.getElementById('date').textContent = dateString;
        }
        setInterval(updateClock, 500);
    </script>
</body>
</html>






