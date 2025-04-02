<?php
session_start();
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Quản Trị</title>
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="Css/footer.css">
    <style>
        /* Reset CSS */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f4f4f4;
            color: #333;
        }

        /* Container chính */
        .container {
            max-width: 1200px;
            margin: 20px auto;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Header */
        header {
            text-align: center;
            padding: 15px 0;
            margin-top: -100px;
            color: white;
        }

        header img {
            width: 100%;
            height: 450px;
        }

        /* Thanh điều hướng */
        nav {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            margin: 10px 0;
        }

        nav ul li a {
            color: black;
            font-weight: bold;
            text-decoration: none;
            transition: 0.3s;
        }

        nav ul li a:hover {
            color: #007bff;
            text-decoration: underline;
        }

        /* Nội dung chính */
        .content {
            display: flex;
            padding: 20px;
        }

        section {
            width: 75%;
            text-align: center;
            padding: 20px;
        }

        /* Footer */
        /* Footer chung */

        footer {
            text-align: center;
            padding: 20px;
            color: black;
            background: #e1e6eb;
            /* Màu nền tối hơn */
            font-size: 16px;
            font-weight: bold;
        }

        /* Footer chính */

        .main-footer {
            background: #eff3f7;
            /* Màu nền hiện đại */
            color: black;
            padding: 20px 0;
            font-size: 14px;
            width: 100%;
            flex-shrink: 0;
        }

        /* Container linh hoạt */

        .footer-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Cột trong footer */

        .footer-column {
            flex: 1;
            min-width: 220px;
            margin-bottom: 15px;
            padding: 0 15px;
        }

        /* Tiêu đề từng cột */

        .footer-column h3 {
            font-size: 16px;
            color: black;
            /* Màu vàng nổi bật */
            border-bottom: 2px solid #070707;
            padding-bottom: 8px;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        /* Danh sách liên kết */

        .footer-column ul {
            list-style: none;
            padding: 0;
        }

        .footer-column ul li {
            margin: 8px 0;
        }

        /* Liên kết */

        .footer-column ul li a {
            color: black;
            text-decoration: none;
            transition: color 0.3s ease-in-out;
        }

        .footer-column ul li a:hover {
            color: #ddeff4;
        }

        /* Số điện thoại */

        .footer-contact p {
            margin: 5px 0;
        }

        .footer-contact a {
            color: #f39c12;
            font-weight: bold;
            text-decoration: none;
            transition: color 0.3s ease-in-out;
        }

        .footer-contact a:hover {
            color: #f1c40f;
        }

        /* Responsive cho màn hình nhỏ */

        @media (max-width: 768px) {
            .footer-container {
                flex-direction: column;
                text-align: center;
            }
        }

        .footer-column img {
            width: 24px;
            /* Chiều rộng 24px */
            height: 24px;
            /* Chiều cao 24px */
            margin-right: 5px;
            /* Khoảng cách giữa icon và chữ */
        }

        .quangcao video {
            width: 100%;
            height: 30%;
            object-fit: cover;
            /* Cắt video để khớp kích thước */
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <div class="quangcao">
                <video id="quangcaoVideo" autoplay muted loop>
                    <source src="../video/quangcao2.mp4" type="video/mp4">
                </video>
            </div>

            <script>
                const videos = ["../video/quangcao2.mp4"];
                let currentVideo = 0;
                const videoElement = document.getElementById("quangcaoVideo");

                videoElement.addEventListener("ended", function() {
                    currentVideo = (currentVideo + 1) % videos.length;
                    videoElement.src = videos[currentVideo];
                    videoElement.play();
                });
            </script>
        </header>

        <?php include 'navngang.php'; ?>

        <div class="content">
            <nav>
                <ul>
                    <li><a href="">THÊM SẢN PHẨM</a></li>
                    <li><a href="">SỬA SẢN PHẨM</a></li>
                    <li><a href="">XOÁ SẢN PHẨM</a></li>
                </ul>
            </nav>

            <section>
                <h2>Trang Quản Trị</h2>
                <p>Chào mừng bạn đến với trang quản trị.</p>
            </section>
        </div>

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
                                <img src="../img/facebook.png" alt=""> Facebook
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../img/inta.png" alt=""> Instagram
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../img/zalo.png" alt=""> Zalo
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>

    </div>

    <?php
    if (isset($_GET['logout'])) {
        session_unset();
        session_destroy();
        header("Location: index.php");
        exit();
    }
    ?>
</body>

</html>