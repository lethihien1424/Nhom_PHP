<?php
include("Controller/cSanPham.php");
$p = new controlSanPham();

$loai = $_GET['loai'] ?? null;

// Debug kiểm tra biến `loai`
echo "<strong>" . htmlspecialchars($loai) . "</strong></p>";

if ($loai) {
    $tbl = $p->getALLSPTheoLoai($loai);
} else {
    $tbl = $p->getAllSanPham();
}

echo '<div class="product-list">';
if ($tbl->num_rows > 0) {
    while ($r = $tbl->fetch_assoc()) {
        $productName = htmlspecialchars($r['tensp'] ?? "Sản phẩm không tên");
        $promoPrice = isset($r['giamgia']) ? number_format($r['giamgia'] * 10000, 0, '.', '.') . "đ" : "Liên hệ";
        $originalPrice = isset($r['gia']) ? '<del>' . number_format($r['gia'] * 10000, 0, '.', '.') . 'đ</del>' : "";
        $imagePath = !empty($r['hinh']) ? 'img/' . htmlspecialchars($r['hinh']) : 'img/no-image.png';

        echo '<div class="product-item">';
        echo '<img src="' . $imagePath . '" alt="' . $productName . '" width="150" height="150">';
        echo '<h3>' . $productName . '</h3>';
        echo '<p>Giá khuyến mãi: <strong>' . $promoPrice . '</strong></p>';
        echo '<p>Giá gốc: ' . $originalPrice . '</p>';
        echo '</div>';
    }
} else {
    echo "<p>Không có sản phẩm nào thuộc loại này.</p>";
}
echo '</div>';
