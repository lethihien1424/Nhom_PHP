<div class="register-container">
    <h2>Đăng ký</h2>
    <form method="post">
        <input type="text" id="username" name="tdn" placeholder="Tên đăng nhập" required>
        <input type="password" id="password" name="mk" placeholder="Mật khẩu" required>
        <input type="password" id="confirm_password" name="nlmk" placeholder="Nhập lại mật khẩu" required>
        <input type="submit" value="Đăng ký" name="dk">
    </form>
</div>


<?php
if (isset($_POST['dk'])) {
    include("Controller/cNguoiDung.php");
    $p = new controlNguoiDung();

    $tdn = $_POST["tdn"];
    $pwd = $_POST["mk"];
    $nlmk = $_POST["nlmk"];

    // Kiểm tra mật khẩu nhập lại
    if ($pwd !== $nlmk) {
        echo "<script>alert('Mật khẩu nhập lại không khớp!')</script>";
    } else {
        $p->cDangKy($tdn, $pwd);
    }
}
?>