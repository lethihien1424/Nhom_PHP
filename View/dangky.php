<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start(); // Khởi tạo session nếu chưa được khởi tạo
}

if (isset($_POST['dk'])) {
    include("Controller/cNguoiDung.php");
    $p = new controlNguoiDung();

    $tdn = htmlspecialchars(trim($_POST["tdn"]), ENT_QUOTES, 'UTF-8');
    $pwd = htmlspecialchars(trim($_POST["mk"]), ENT_QUOTES, 'UTF-8');
    $nlmk = htmlspecialchars(trim($_POST["nlmk"]), ENT_QUOTES, 'UTF-8');

    // Biểu thức chính quy kiểm tra tên đăng nhập và mật khẩu
    $usernameRegex = "/^[a-zA-Z0-9_]{5,20}$/"; // Tên đăng nhập từ 5-20 ký tự, chỉ chứa chữ, số và dấu gạch dưới
    $passwordRegex = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/"; // Mật khẩu ít nhất 8 ký tự, gồm chữ hoa, chữ thường, số và ký tự đặc biệt

    if (!preg_match($usernameRegex, $tdn)) {
        echo "<script>alert('Tên đăng nhập không hợp lệ! Tên đăng nhập phải từ 5-20 ký tự, chỉ chứa chữ, số và dấu gạch dưới.');</script>";
    } elseif (!preg_match($passwordRegex, $pwd)) {
        echo "<script>alert('Mật khẩu không hợp lệ! Mật khẩu phải ít nhất 8 ký tự, gồm chữ hoa, chữ thường, số và ký tự đặc biệt.');</script>";
    } elseif ($pwd !== $nlmk) {
        echo "<script>alert('Mật khẩu nhập lại không khớp!');</script>";
    } else {
        // Băm mật khẩu trước khi gửi đến lớp xử lý
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
        $result = $p->cDangKy($tdn, $hashedPwd);

        if ($result) {
            $_SESSION['username'] = $tdn; // Lưu tên đăng nhập vào session
            echo "<script>alert('Đăng ký thành công!');</script>";
            header("Location: index.php"); // Chuyển hướng về trang đăng nhập
            exit();
        } else {
            echo "<script>alert('Đăng ký thất bại!');</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="Css/footer.css">
</head>

<body>
    <div class="login-container">
        <h2>Đăng ký</h2>
        <form method="post">
            <input type="text" id="username" name="tdn" placeholder="Tên đăng nhập" required>
            <input type="password" id="password" name="mk" placeholder="Mật khẩu" required>
            <input type="password" id="confirm_password" name="nlmk" placeholder="Nhập lại mật khẩu" required>
            <input type="submit" value="Đăng ký" name="dk">
        </form>
    </div>
</body>

</html>