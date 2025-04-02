<?php
include("Model/mSanPham.php");

class controlSanPham {
    public function getAllSanPham() {
        $p = new modelSanPham();
        return $p->selectAllSanPham();
    }

    public function getALLSPTheoLoai($loai) {
        $p = new modelSanPham();
        return $p->selectAllSPTheoLoai($loai);
    }

    public function getSanPhamByName($keyword) {
        include_once("Model/mSanPham.php");
        $m = new modelSanPham();
        return $m->searchSanPham($keyword);
    }
    

    
    
}

    
?>

