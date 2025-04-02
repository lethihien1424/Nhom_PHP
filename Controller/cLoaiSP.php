<?php 
include("Model/mLoaiSP.php");

class controlTOP {
    public function getAllLoai(){
        $p = new modelTOP();
        return $p->selectAllLoai(); // Trả về danh sách loại sản phẩm
    }
}
?>
