<?php
session_start();

// Kiểm tra đăng nhập
if(!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Trang chủ</title>
	<style>
        #welcome-message {
            font-size: 24px; /* Thiết lập kích thước chữ là 20px */
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Nội dung trang chính -->
        <h1 id="welcome-message" class="text-center mt-3">Chào mừng bạn đến với trang chính</h1>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-b2EHW8MxvaF4s3XjOA4W/PDZSd6EKgIUKiQ/2rsxHYy9Oe/g+JF3LGh+H6Z+wOqJ" crossorigin="anonymous"></script>
    
    <!-- Mã JavaScript ẩn chữ -->
    <script>
        setTimeout(function() {
            // hiện nội dung "Chào mừng bạn đến với trang chính"
            var welcomeMessage = document.getElementById("welcome-message");
            // Ẩn chữ 
            welcomeMessage.style.display = "none";
        }, 1000); //
    </script>
</body>
</html>









<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>MWG</title>
    
    <style>
        /* Định dạng cho nút */
        .custom-button {
            color: black; 
            background-color: #fcdf00; 
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 20px;
            display: inline-block;
            margin-bottom: 10px; /* Để các nút cách nhau */
        }
        /* Định dạng hover cho nút */
        .custom-button:hover {
            background-color: #fffffc; 
        }
        
        /* Định dạng cho hình ảnh logo */
        .logo {
            width: 150px; /* Độ rộng của logo */
            height: auto; /* Chiều cao tự điều chỉnh theo tỉ lệ */
            margin-bottom: 3px; /* Để logo cách các nút */
			border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!--sử dụng navbar -->
        <?php include 'navbar.php'; ?>
        
        <!--sử dụng card -->
        <div class="card mt-3">
            <div class="card-header"><b>TRANG CHỦ</b></div>
		<div class="row">
		<div class="col-md-6">
            <div class="card-body">
                <img src="https://mwg.vn/img/web/logobrands/tgdd.png?v=1" alt="Logo" class="logo"> 
                <a href="https://www.thegioididong.com/" target="_blank" rel="noopener noreferrer" class="custom-button">THẾ GIỚI DI ĐỘNG</a>
            </div>
			<div class="card-body">
			 <img src="https://mwg.vn/img/web/logobrands/dmx.png?v=1" alt="Logo" class="logo"> 
				<a href="https://www.dienmayxanh.com/" target="_blue" rel="noopener noreferrer" class="custom-button">ĐIỆN MÁY XANH</a>
            </div>
			<div class="card-body">
			 <img src="https://mwg.vn/img/web/logobrands/topzone.png?v=1" alt="Logo" class="logo"> 
				<a href="https://www.topzone.vn/" target="_blue" rel="noopener noreferrer" class="custom-button">TOPZONE</a>
            </div>
			<div class="card-body">
			 <img src="https://mwg.vn/img/web/logobrands/kids.png?v=1" alt="Logo" class="logo"> 
				<a href="https://www.avakids.com/" target="_blue" rel="noopener noreferrer" class="custom-button">AVAKIDS</a>
            </div>
		</div>
		<div class="col-md-6">
			<div class="card-body">
			 <img src="https://mwg.vn/img/web/logobrands/ankhang.png?v=1" alt="Logo" class="logo"> 
				<a href="https://www.nhathuocankhang.com/" target="_blue" rel="noopener noreferrer" class="custom-button">AN KHANG</a>
			</div>
			<div class="card-body">
			 <img src="https://mwg.vn/img/web/logobrands/bhx.png?v=1" alt="Logo" class="logo"> 
				<a href="https://www.bachhoaxanh.com/" target="_blue" rel="noopener noreferrer" class="custom-button">BÁCH HÓA XANH</a>
			</div>
			<div class="card-body">
			 <img src="https://mwg.vn/img/web/logobrands/thodmx.png?v=1" alt="Logo" class="logo"> 
				<a href="https://www.dichvutantam.com/" target="_blue" rel="noopener noreferrer" class="custom-button">DỊCH VỤ TẬN TÂM</a>
			</div>
			<div class="card-body">
			 <img src="https://mwg.vn/img/web/logobrands/vieclam.png?v=1" alt="Logo" class="logo"> 
				<a href="https://vieclam.thegioididong.com/" target="_blue" rel="noopener noreferrer" class="custom-button">VIỆC LÀM</a>
			</div>
		</div>
		</div>
    </div>
    <?php include 'javascript.php'; ?>
	<?php include 'footer.php'; ?>
</body>
</html>
