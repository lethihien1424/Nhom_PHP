<?php 
include("ketnoi.php");

class modelTOP {
    private $conn;

    public function __construct() {
        $db = new clsKetNoi();
        $this->conn = $db->moketnoi();
        if (!$this->conn) {
            die("Kết nối thất bại: " . mysqli_connect_error());
        }
    }

    public function selectAllLoai() {
        $sql = "SELECT DISTINCT loai FROM sanpham"; // Chỉ lấy danh sách loại sản phẩm không trùng
        $result = $this->conn->query($sql);
        if (!$result) {
            die("Lỗi truy vấn: " . $this->conn->error);
        }
        return $result;
    }
}
?>
