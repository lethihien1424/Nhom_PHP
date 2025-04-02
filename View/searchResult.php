<?php
include_once("Controller/cSanPham.php");
$p = new controlSanPham();

$keyword = $_GET['search'] ?? '';

if (!empty($keyword)) {
    $result = $p->getSanPhamByName($keyword);

    echo '<div class="search-results">';
    echo "<h2 class='search-result-title'>Kết quả tìm kiếm cho: '<span style='color: red;'>$keyword</span>'</h2>";

    echo '<div class="product-list">';
    if ($result !== false && $result->num_rows > 0) {
        while ($r = $result->fetch_assoc()) {
            $productName = htmlspecialchars($r['tensp'] ?? "Sản phẩm không tên");
            $promoPrice = isset($r['giamgia']) ? number_format($r['giamgia'] * 100, 0, '.', '.') . "đ" : "Liên hệ";
            $originalPrice = isset($r['gia']) ? '<del>' . number_format($r['gia'] * 100, 0, '.', '.') . 'đ</del>' : "";
            $imagePath = !empty($r['hinh']) ? 'img/' . htmlspecialchars($r['hinh']) : 'img/no-image.png';

            echo '<div class="product-item">';
            echo '<img src="' . $imagePath . '" alt="' . $productName . '" width="150" height="150">';
            echo '<h3>' . $productName . '</h3>';
            echo '<p>Giá khuyến mãi: <strong>' . $promoPrice . '</strong></p>';
            echo '<p>Giá gốc: ' . $originalPrice . '</p>';
            echo '</div>';
        }
    } else {
        echo "<p>Không tìm thấy sản phẩm nào.</p>";
    }
    echo '</div>'; // Đóng product-list
    echo '</div>'; // Đóng search-results
}
