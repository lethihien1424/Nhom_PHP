<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["dn"])) {
    include_once("Controller/cNguoiDung.php");
    $p = new controlNguoiDung();
    $p->cDangNhap($_POST["tdn"], $_POST["mk"]);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dang nhap </title>
</head>

<body>
    <div class="login-container">
        <h2>Đăng nhập</h2>
        <form method="post" action="">
            <input type="text" id="tdn" name="tdn" placeholder="Tên đăng nhập" required>
            <input type="password" id="mk" name="mk" placeholder="Mật khẩu" required>
            <input type="submit" value="Đăng nhập" name="dn" id="dn">

            <!-- Hiển thị tên đăng nhập bên dưới -->
            <p class="username-display">Tên đăng nhập của bạn sẽ hiển thị ở đây sau khi nhập</p>

            <a href="index.php?page=dangky">Chưa có tài khoản? Đăng ký ngay</a>
        </form>
    </div>
</body>

</html>