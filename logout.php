<?php
session_start();

// Kiểm tra xem người dùng đã đăng nhập chưa
if(!isset($_SESSION['username'])) {
    // Nếu chưa đăng nhập, chuyển hướng về trang đăng nhập
    header("Location: login.php");
    exit;
}

// Xử lý đăng xuất khi nhận yêu cầu GET
if($_SERVER["REQUEST_METHOD"] == "GET") {
    // Hủy bỏ session và chuyển hướng về trang đăng nhập
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng xuất</title>
</head>
<body>
    <h1>Bạn đã đăng xuất thành công!</h1>
    <p><a href="login.php">Đăng nhập lại</a></p>
</body>
</html>
