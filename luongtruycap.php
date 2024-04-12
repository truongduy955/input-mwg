<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Lượng Truy Cập</title>
    <style>
        /* Định dạng cho hình ảnh logo */
        .logo {
            width: 200px; /* Độ rộng của logo */
            height: auto; /* Chiều cao tự điều chỉnh theo tỉ lệ */
            margin-bottom: 3px; /* Để logo cách các nút */
			border-radius: 5px;
        }

        /* Định dạng cho dòng chữ in đậm */
        .bold {
            font-weight: bold;
			font-size: 11px; 
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Sử dụng navbar -->
        <?php include 'navbar.php'; ?>
        
        <!-- TGDĐ -->
        <div class="card mt-3">
            <div class="card-header"><b>LƯỢNG KHÁCH TRUY CẬP TGDĐ</b></div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card-body">
                        <img src="https://mwg.vn/img/web/logobrands/tgdd.png?v=1" alt="Logo TGDĐ" class="logo">
                    </div>
                </div>
                <!-- Hiển thị hiện tại -->
                <div class="col-md-6">
                    <div id="tgddOnlineUsersCount" class="current-online-users"></div>
                    <!-- Hiển thị tương lai -->
                    <div id="tgddOnlineUsersCountForecast" class="forecast-online-users"></div>
                </div>
            </div>
        </div>


        <!-- ĐMX -->
        <div class="card mt-3">
            <div class="card-header"><b>LƯỢNG KHÁCH TRUY CẬP ĐMX</b></div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card-body">
                        <img src="https://mwg.vn/img/web/logobrands/dmx.png?v=1" alt="Logo DMX" class="logo">
                    </div>
                </div>
                <!-- Hiển thị hiện tại -->
                <div class="col-md-6">
                    <div id="dmxOnlineUsersCount" class="current-online-users"></div>
                    <!-- Hiển thị tương lai -->
                    <div id="dmxOnlineUsersCountForecast" class="forecast-online-users"></div>
                </div>
            </div>
        </div>


		
		<!-- TOPZONE -->
        <div class="card mt-3">
            <div class="card-header"><b>LƯỢNG KHÁCH TRUY CẬP TOPZONE</b></div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card-body">
                        <img src="https://mwg.vn/img/web/logobrands/topzone.png?v=1" alt="Logo TOPZONE" class="logo">
                    </div>
                </div>
                <!-- Hiển thị hiện tại -->
                <div class="col-md-6">
                    <div id="topzoneOnlineUsersCount" class="current-online-users"></div>
                    <!-- Hiển thị tương lai -->
                    <div id="topzoneOnlineUsersCountForecast" class="forecast-online-users"></div>
                </div>
            </div>
        </div>



		<!-- AVAKIDS -->
        <div class="card mt-3">
            <div class="card-header"><b>LƯỢNG KHÁCH TRUY CẬP AVAKIDS</b></div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card-body">
                        <img src="https://mwg.vn/img/web/logobrands/kids.png?v=1" alt="Logo AVAKIDS" class="logo">
                    </div>
                </div>
                <!-- Hiển thị hiện tại -->
                <div class="col-md-6">
                    <div id="avakidsOnlineUsersCount" class="current-online-users"></div>
                    <!-- Hiển thị tương lai -->
                    <div id="avakidsOnlineUsersCountForecast" class="forecast-online-users"></div>
                </div>
            </div>
        </div>



		<!-- AN KHANG  -->
        <div class="card mt-3">
            <div class="card-header"><b>LƯỢNG KHÁCH TRUY CẬP ANKHANG</b></div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card-body">
                        <img src="https://mwg.vn/img/web/logobrands/ankhang.png?v=1" alt="Logo ANKHANG" class="logo">
                    </div>
                </div>
                <!-- Hiển thị hiện tại -->
                <div class="col-md-6">
                    <div id="ankhangOnlineUsersCount" class="current-online-users"></div>
                    <!-- Hiển thị tương lai -->
                    <div id="ankhangOnlineUsersCountForecast" class="forecast-online-users"></div>
                </div>
            </div>
        </div>




		
		<!-- BACH HOA XANH  -->
        <div class="card mt-3">
            <div class="card-header"><b>LƯỢNG KHÁCH TRUY CẬP BACHHOAXANH</b></div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card-body">
                        <img src="https://mwg.vn/img/web/logobrands/bhx.png?v=1" alt="Logo BACHHOAXANH" class="logo">
                    </div>
                </div>
                <!-- Hiển thị hiện tại -->
                <div class="col-md-6">
                    <div id="bachhoaxanhOnlineUsersCount" class="current-online-users"></div>
                    <!-- Hiển thị tương lai -->
                    <div id="bachhoaxanhOnlineUsersCountForecast" class="forecast-online-users"></div>
                </div>
            </div>
        </div>




		<!-- TAN TAM  -->
        <div class="card mt-3">
            <div class="card-header"><b>LƯỢNG KHÁCH TRUY CẬP TANTAM</b></div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card-body">
                        <img src="https://mwg.vn/img/web/logobrands/thodmx.png?v=1" alt="Logo TANTAM" class="logo">
                    </div>
                </div>
                <!-- Hiển thị hiện tại -->
                <div class="col-md-6">
                    <div id="tantamOnlineUsersCount" class="current-online-users"></div>
                    <!-- Hiển thị tương lai -->
                    <div id="tantamOnlineUsersCountForecast" class="forecast-online-users"></div>
                </div>
            </div>
        </div>





		<!-- TUYEN DUNG  -->
        <div class="card mt-3">
            <div class="card-header"><b>LƯỢNG KHÁCH TRUY CẬP TUYENDUNG</b></div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card-body">
                        <img src="https://mwg.vn/img/web/logobrands/vieclam.png?v=1" alt="Logo TUYENDUNG" class="logo">
                    </div>
                </div>
                <!-- Hiển thị hiện tại -->
                <div class="col-md-6">
                    <div id="tuyendungOnlineUsersCount" class="current-online-users"></div>
                    <!-- Hiển thị tương lai -->
                    <div id="tuyendungOnlineUsersCountForecast" class="forecast-online-users"></div>
                </div>
            </div>
        </div>




        <!-- JavaScript để tích hợp Google Analytics, đã tích hơp và có tham khảo nhưng không thực thi được nên dùng hàm random chạy thực nghiệm -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-4X08HV3NRG"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-4X08HV3NRG');
            
            // Hiển thị số lượng người truy cập đang trực tuyến
            function updateOnlineUsersCount(elementId) {
                var onlineUsersElement = document.getElementById(elementId);
                if (onlineUsersElement) {
                    var baseCount = Math.floor(Math.random() * 9901) + 100; 
                    var fluctuation = Math.floor(Math.random() * 201) - 100;
                    var onlineUsersCount = baseCount + fluctuation;
                    onlineUsersCount = Math.max(100, Math.min(10000, onlineUsersCount));
                    gtag('event', 'page_view', {
                        'event_category': 'engagement',
                        'event_label': 'online_users_' + elementId,
                        'value': onlineUsersCount
                    });
                    onlineUsersElement.innerHTML = '<br><b>Số lượng truy cập hiện tại:</b> ' + onlineUsersCount;
                }
            }
            
            // Hàm để dự báo lượng khách trong tương lai
            function forecastOnlineUsers(elementId) {
                var forecastElement = document.getElementById(elementId);
                if (forecastElement) {
                    var currentCount = parseInt(document.getElementById(elementId.replace("Forecast", "")).innerText.split(": ")[1]);
                    // Giả sử tăng 10% so với số lượng hiện tại
                    var forecastCount = Math.ceil(currentCount * 1.1);
                    forecastElement.innerHTML = '<b>Dự báo lượng truy cập trong tương lai:</b> ' + forecastCount;
                }
            }

            // Số lượng người truy cập theo giây
            setInterval(function() {
                updateOnlineUsersCount('tgddOnlineUsersCount');
                updateOnlineUsersCount('dmxOnlineUsersCount');
				updateOnlineUsersCount('topzoneOnlineUsersCount');
				updateOnlineUsersCount('avakidsOnlineUsersCount');
				updateOnlineUsersCount('ankhangOnlineUsersCount');
				updateOnlineUsersCount('bachhoaxanhOnlineUsersCount');
				updateOnlineUsersCount('tantamOnlineUsersCount');
				updateOnlineUsersCount('tuyendungOnlineUsersCount');
             // Cập nhật dự báo sau khi cập nhật số lượng truy cập hiện tại
                forecastOnlineUsers('tgddOnlineUsersCountForecast');
                forecastOnlineUsers('dmxOnlineUsersCountForecast');
				forecastOnlineUsers('topzoneOnlineUsersCountForecast');
				forecastOnlineUsers('avakidsOnlineUsersCountForecast');
				forecastOnlineUsers('ankhangOnlineUsersCountForecast');
				forecastOnlineUsers('bachhoaxanhOnlineUsersCountForecast');
				forecastOnlineUsers('tantamOnlineUsersCountForecast');
				forecastOnlineUsers('tuyendungOnlineUsersCountForecast');
            }, 5000);
        </script>
		<?php include 'javascript.php'; ?>
		<?php include 'footer.php'; ?>
    </div>
</body>
</html>
