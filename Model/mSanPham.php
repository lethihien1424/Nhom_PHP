<?php
include_once("ketnoi.php");

class modelSanPham {
    private $conn;

    public function __construct() {
        $db = new clsKetNoi();
        $this->conn = $db->moketnoi();

        if (!$this->conn) {
            die("Kết nối thất bại: " . mysqli_connect_error());
        }
    }

    public function selectAllSanPham() {
        $sql = "SELECT idsp, tensp, gia, mota, hinh, giamgia FROM sanpham";
        return mysqli_query($this->conn, $sql);
    }

    public function selectAllSPTheoLoai($loai) {
        $sql = "SELECT idsp, tensp, gia, mota, hinh, giamgia FROM sanpham WHERE loai = ?"; // Đổi từ LoaiSP thành loai
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $loai);
        $stmt->execute();
        $result = $stmt->get_result();
    
        // Ghi log nếu không có sản phẩm nào
        if ($result->num_rows == 0) {
            error_log("Không tìm thấy sản phẩm thuộc loại: " . $loai);
        }
    
        return $result;
    }

    public function searchSanPham($keyword) {
        $sql = "SELECT * FROM sanpham WHERE tensp LIKE ?";
        $stmt = $this->conn->prepare($sql); // Sử dụng $this->conn thay vì $conn
        $searchTerm = "%$keyword%";
        $stmt->bind_param("s", $searchTerm);
        $stmt->execute();
        return $stmt->get_result();
    }
    
    
    

    public function closeConnection() {
        mysqli_close($this->conn);
    }
}
?>
