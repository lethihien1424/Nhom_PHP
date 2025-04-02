<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Kiểm tra trạng thái đăng nhập
$daDangNhap = isset($_SESSION["dn"]) && $_SESSION["dn"] === true;

echo '<div class="navngang">';
if ($daDangNhap) {
    echo '<a href="/Project/View/dangxuat.php" onclick="return confirm("Bạn thật sự muốn thoát?");">Đăng xuất</a>';
} else {
    echo '<a href="index.php?page=dangky">Đăng ký</a> | <a href="index.php?page=dangnhap">Đăng nhập</a>';
}
echo '</div>';
?>
