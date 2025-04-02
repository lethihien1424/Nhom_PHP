<?php
include_once("model/mNguoiDung.php");

class controlNguoiDung {
    public function cDangNhap($tdn, $mk) {
        $p = new modelTaiKhoan();
        $mk = md5($mk); // Mã hóa mật khẩu
        $tblTK = $p->mDangNhap($tdn, $mk);

        if (!$tblTK) {
            echo "<script>alert('Lỗi kết nối! Vui lòng liên hệ admin.'); window.location.href='index.php?page=dangnhap';</script>";
            exit();
        } else if ($tblTK->num_rows > 0) {
            session_start();
            $_SESSION["dn"] = true;
            $_SESSION["username"] = $tdn; // Lưu tên đăng nhập vào session
            header('Location: View/admin.php');
            exit();
        } else {
            echo "<script>alert('Sai thông tin tài khoản!'); window.location.href='index.php?page=dangnhap';</script>";
            exit();
        }
    }

    public function cDangKy($tdn, $pwd) {
        $p = new modelTaiKhoan();
        $pwd = md5($pwd); // Mã hóa mật khẩu

        // Kiểm tra xem tài khoản đã tồn tại chưa
        $chk = $p->mCheckID($tdn);
        if ($chk->num_rows > 0) {
            echo "<script>alert('Tài khoản đã tồn tại!'); window.location.href='index.php?page=dangky';</script>";
            exit();
        } else {
            $result = $p->mDangKy($tdn, $pwd);
            if ($result) {
                echo "<script>alert('Đăng ký thành công!'); window.location.href='index.php?page=dangnhap';</script>";
                exit();
            } else {
                echo "<script>alert('Đăng ký thất bại!'); window.location.href='index.php?page=dangky';</script>";
                exit();
            }
        }
    }
}
?>

