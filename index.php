<?php

session_start(); // Bắt đầu session

?>


<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="Css/footer.css">
    <style>
        header {
            position: relative;
            margin-top: -60px;
            width: 100%;
            height: 400px;
            overflow: hidden;
        }

        .quangcao video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .username-highlight {
            color: black;
            font-weight: bold;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php if (isset($_SESSION['dn']) && $_SESSION['dn'] === true): ?>
            <p class="username-highlight">Xin chào, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
            <a href="dangxuat.php">Đăng xuất</a>
        <?php else: ?>
            <a href="View/dangnhap.php">Đăng nhập</a>
        <?php endif; ?>

        <!-- Video quảng cáo -->
        <header>
            <div class="quangcao">
                <video id="quangcaoVideo" autoplay muted loop>
                    <source src="video/quangcao2.mp4" type="video/mp4">
                </video>
            </div>
            <script>
                const videos = ["video/quangcao2.mp4"];
                let currentVideo = 0;
                const videoElement = document.getElementById("quangcaoVideo");

                videoElement.addEventListener("ended", function() {
                    currentVideo = (currentVideo + 1) % videos.length;
                    videoElement.src = videos[currentVideo];
                    videoElement.play();
                });
            </script>
        </header>

        <!-- Thanh công cụ -->
        <div class="toolbar">
            <div class="auth-group">
                <?php include 'View/navngang.php'; ?>
            </div>

            <div class="search-bar">
                <form method="GET" action="index.php" class="search-form">
                    <input type="hidden" name="page" value="searchResult">
                    <input type="text" name="search" placeholder="Tìm kiếm sản phẩm..." required>
                    <button type="submit">🔍</button>
                </form>

                <!-- Giỏ hàng -->
                <div class="cart">
                    <a href="cart.php" class="cart-link">
                        <span class="cart-icon">🛒</span>
                        <span class="cart-count">0</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Nội dung chính -->
        <div class="content">
            <nav>
                <ul>
                    <li><a href="index.php">TRANG CHỦ</a></li>
                    <?php include 'View/listLoaiSP.php'; ?>
                </ul>
            </nav>

            <section>
                <?php
                // Các trang được phép truy cập
                $allowedPages = ['dangky', 'dangnhap', 'dangxuat', 'listsanpham', 'searchResult', 'admin'];
                $page = $_GET['page'] ?? 'listsanpham';

                if ($page == "listsanpham" && isset($_GET['search'])) {
                    include "View/searchResult.php";
                } elseif (in_array($page, $allowedPages) && file_exists("View/$page.php")) {
                    include "View/$page.php";
                } else {
                    echo "<h2>Trang không tồn tại!</h2>";
                }
                ?>
            </section>
        </div>

        <!-- Footer -->
        <footer class="main-footer">
            <div class="footer-container">
                <div class="footer-column">
                    <h3>Tổng đài hỗ trợ</h3>
                    <div class="footer-contact">
                        <p>Gọi mua: <a href="tel:1900232460">1900 232 460</a><br>(8:00 - 21:30)</p>
                        <p>Khiếu nại: <a href="tel:18001062">1800.1062</a><br>(8:00 - 21:30)</p>
                        <p>Bảo hành: <a href="tel:1900232464">1900 232 464</a><br>(8:00 - 21:00)</p>
                    </div>
                </div>

                <div class="footer-column">
                    <h3>Về công ty</h3>
                    <ul>
                        <li><a href="#">Giới thiệu công ty</a></li>
                        <li><a href="#">Tuyển dụng</a></li>
                        <li><a href="#">Gửi góp ý, khiếu nại</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>Thông tin khác</h3>
                    <ul>
                        <li><a href="#">Tích điểm Quà tặng VIP</a></li>
                        <li><a href="#">Lịch sử mua hàng</a></li>
                        <li><a href="#">Đăng ký bán hàng CTV</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>Website liên hệ</h3>
                    <ul>
                        <li>
                            <a href="#">
                                <img src="img/facebook.png" width="20px" height="20px" alt="Facebook"> Facebook
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/inta.png" width="20px" height="20px" alt="Instagram"> Instagram
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/zalo.png" width="20px" height="20px" alt="Zalo"> Zalo
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>