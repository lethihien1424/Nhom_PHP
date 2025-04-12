<?php
include("Model/mNguoiDung.php");

class controlNguoiDung
{
    public function cDangNhap($tdn, $mk)
    {
        $p = new modelTaiKhoan();
        $tblTK = $p->mDangNhap($tdn, $mk);

        if (!$tblTK) {
            return false; // Đăng nhập thất bại
        } else {
            return $tblTK; // Trả về thông tin người dùng
        }
    }

    public function cDangKy($tdn, $hashedPwd)
    {
        $p = new modelTaiKhoan();

        $chk = $p->mCheckID($tdn);
        if ($chk->num_rows > 0) {
            echo "<script>alert('Tài khoản đã tồn tại!');</script>";
            return false;
        } else {
            $result = $p->mDangKy($tdn, $hashedPwd); // Lưu mật khẩu đã băm vào cơ sở dữ liệu
            if ($result) {
                echo "<script>alert('Đăng ký thành công!');</script>";
                header("Location: index.php?page=dangnhap"); // Chuyển hướng về trang đăng nhập
                exit();
            }
            return $result; // Trả về kết quả đăng ký
        }
    }
}
