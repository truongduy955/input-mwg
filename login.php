<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Đăng nhập</title>
    
    <style>
        /* Định dạng cho form đăng nhập */
        .login-form {
            max-width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-form">
            <h2 class="text-center mb-4">Đăng nhập</h2>
            <form action="login.php" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Tên đăng nhập</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mật khẩu</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Đăng nhập</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-b2EHW8MxvaF4s3XjOA4W/PDZSd6EKgIUKiQ/2rsxHYy9Oe/g+JF3LGh+H6Z+wOqJ" crossorigin="anonymous"></script>
</body>
</html>

<?php
session_start();

// Kiểm tra đã đăng nhập chưa
if(isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}

// Xử lý đăng nhập nếu có dữ liệu gửi từ form
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kiểm tra tên đăng nhập và mật khẩu
    $username = "admin"; // tên đăng nhập
    $password = "admin"; // mật khẩu 
    
    // Kiểm tra dữ liệu gửi từ form
    if($_POST['username'] == $username && $_POST['password'] == $password) {
        // Đăng nhập thành công, lưu tên đăng nhập vào session và chuyển hướng tới trang chính
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit;
    } else {
        // Đăng nhập không thành công, hiển thị thông báo lỗi
        $error_message = "Tên đăng nhập hoặc mật khẩu không đúng!";
    }
}
?>
