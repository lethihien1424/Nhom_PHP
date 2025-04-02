<?php
include_once("ketnoi.php");

class modelTaiKhoan {
    private $conn;

    public function __construct() {
        $db = new clsKetNoi();
        $this->conn = $db->moketnoi();
    }

    public function mDangNhap($tdn, $mk) {
        $sql = "SELECT * FROM TaiKhoan WHERE username = ? AND password = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ss", $tdn, $mk);
        $stmt->execute();
        return $stmt->get_result();
    }

    public function mDangKy($tdn, $mk) {
        $sql = "INSERT INTO TaiKhoan (username, password) VALUES (?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ss", $tdn, $mk);
        return $stmt->execute();
    }

    public function mCheckID($tdn) {
        $sql = "SELECT * FROM TaiKhoan WHERE username = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $tdn);
        $stmt->execute();
        return $stmt->get_result();
    }
}
?>
