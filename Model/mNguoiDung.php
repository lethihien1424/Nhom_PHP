<?php
include_once(__DIR__ . "/ketnoi.php");

class modelTaiKhoan
{
    private $conn;

    public function __construct()
    {
        $db = new clsKetNoi();
        $this->conn = $db->moketnoi();
    }

    public function mDangNhap($tdn, $mk)
    {
        $sql = "SELECT * FROM TaiKhoan WHERE username = ?";
        $stmt = $this->conn->prepare($sql);
        if (!$stmt) {
            die("Lỗi truy vấn: " . $this->conn->error);
        }
        $stmt->bind_param("s", $tdn);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($mk, $row['password'])) { // Kiểm tra mật khẩu đã băm
                return $row; // Đăng nhập thành công
            }
        }
        return false; // Đăng nhập thất bại
    }

    public function mDangKy($tdn, $hashedPwd)
    {
        $sql = "INSERT INTO TaiKhoan (username, password) VALUES (?, ?)";
        $stmt = $this->conn->prepare($sql);
        if (!$stmt) {
            die("Lỗi truy vấn: " . $this->conn->error);
        }
        $stmt->bind_param("ss", $tdn, $hashedPwd); // Lưu mật khẩu đã băm
        return $stmt->execute();
    }

    public function mCheckID($tdn)
    {
        $sql = "SELECT * FROM TaiKhoan WHERE username = ?";
        $stmt = $this->conn->prepare($sql);
        if (!$stmt) {
            die("Lỗi truy vấn: " . $this->conn->error);
        }
        $stmt->bind_param("s", $tdn);
        $stmt->execute();
        return $stmt->get_result();
    }
}
