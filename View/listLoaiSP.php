<?php 
include("Controller/cLoaiSP.php");
$p = new controlTOP();
$tbl = $p->getAllLoai();

while ($r = $tbl->fetch_assoc()) {
    $loai = urlencode($r["loai"]); // Mã hóa URL
    echo '<li><a href="index.php?page=listsanpham&loai=' . $loai . '">' . htmlspecialchars($r["loai"]) . '</a></li>';
}
?>
