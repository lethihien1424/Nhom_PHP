<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start(); // Khởi tạo session nếu chưa được khởi tạo
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["dn"])) {
    include_once(__DIR__ . "/../Controller/cNguoiDung.php");
    $p = new controlNguoiDung();
    $result = $p->cDangNhap($_POST["tdn"], $_POST["mk"]);

    if ($result) {
        // Lưu thông tin đăng nhập vào session
        $_SESSION['dn'] = true;
        $_SESSION['username'] = $result['username']; // Giả sử cột username trong cơ sở dữ liệu là 'username'

        echo "<script>alert('Đăng nhập thành công!');</script>";
        header("Location: index.php"); // Chuyển hướng về trang chủ
        exit();
    } else {
        $error = "Tên đăng nhập hoặc mật khẩu không đúng!";
    }
}
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>

<body>
    <div class="register-container">
        <h2>Đăng nhập</h2>
        <?php if (isset($error)): ?>
            <p style="color:red;"><?php echo htmlspecialchars($error); ?></p>
        <?php endif; ?>
        <form method="post" action="">
            <input type="text" id="tdn" name="tdn" placeholder="Tên đăng nhập" required>
            <input type="password" id="mk" name="mk" placeholder="Mật khẩu" required>
            <input type="submit" value="Đăng nhập" name="dn">
        </form>
    </div>
</body>

</html>