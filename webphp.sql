-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 02, 2025 lúc 09:53 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webphp`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idsp` int(11) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `loai` varchar(50) NOT NULL,
  `gia` float NOT NULL,
  `mota` text NOT NULL,
  `hinh` varchar(100) NOT NULL,
  `giamgia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idsp`, `tensp`, `loai`, `gia`, `mota`, `hinh`, `giamgia`) VALUES
(1, 'Bao da iPhone 13 Pro OU Trong suốt', 'ỐP ĐIỆN THOẠI', 7, 'Ốp lưng iPhone 13 Pro OU trong suốt – Lựa chọn tối ưu\\r\\nỐp lưng luôn là một phụ kiện cần thiết, một sự bảo vệ thầm lặng dành cho bất kỳ chiếc điện thoại nào. Và một chiếc điện thoại cao cấp của Apple như iPhone 13 Pro sẽ rất cần một chiếc ốp lưng iPhone 13 Pro OU trong suốt. OU xứng đáng là chiếc ốp lưng nên được lựa chọn để có thể được thể hiện trọn vẹn vẻ đẹp và bảo vệ toàn diện cho chiếc điện thoại.', '11.jpg', 5),
(2, 'Bao da Samsung Galaxy S24 Ultra Smartview chính hã', 'ỐP ĐIỆN THOẠI', 14, 'Ốp lưng iPhone 15 Pro Max Silicone hỗ trợ sạc Magsafe - Bảo vệ bền bỉ dưới mọi tác động\\r\\nỐp lưng iPhone 15 Pro Max Silicone hỗ trợ sạc Magsafe là sản phẩm chính hãng đến từ Apple dành riêng cho iPhone 15 Pro Max. Do đó, ốp được hoàn thiện tỉ mỉ mang tới vẻ ngoài đẹp, bảo vệ toàn diện góc cạnh và có hỗ trợ sạc MagSafe tiện lợi.', '12.jpg', 11),
(3, 'Bao da iPhone 15 Pro Max Silicone hỗ trợ sạc Magsa', 'ỐP ĐIỆN THOẠI', 12, 'Ốp lưng iPhone 15 Pro Max Silicone hỗ trợ sạc Magsafe - Bảo vệ bền bỉ dưới mọi tác động\\r\\nỐp lưng iPhone 15 Pro Max Silicone hỗ trợ sạc Magsafe là sản phẩm chính hãng đến từ Apple dành riêng cho iPhone 15 Pro Max. Do đó, ốp được hoàn thiện tỉ mỉ mang tới vẻ ngoài đẹp, bảo vệ toàn diện góc cạnh và có hỗ trợ sạc MagSafe tiện lợi.', '13.jpg', 10),
(4, 'Bao da Samsung Galaxy S24 Plus silicon chính hãng\\', 'ỐP ĐIỆN THOẠI', 6, 'Ốp lưng Samsung Galaxy S24 Plus Silicon - Màu sắc trẻ trung, năng động\\r\\nNếu bạn đang tìm một phụ kiện bảo vệ cho điện thoại Galaxy S24 Plus thì đừng bỏ qua mẫu ốp lưng silicon chính hãng từ Samsung. Sản phẩm được nghiên cứu riêng cho phiên bản Plus của bộ sưu tập S24 series với những ưu điểm vượt trội về thiết kế và chất liệu. ', '14.jpg', 5),
(5, 'Bao da iPhone 11 Filada trong viền màu\\r\\n', 'ỐP ĐIỆN THOẠI', 12, 'Ốp lưng iPhone 11 Filada trong viền màu - Thiết kế đổi mới, bảo vệ toàn diện\\r\\niPhone 11 được thiết kế với mặt lưng bằng kính và khung viền kim loại rất dễ bị trầy xước hoặc nứt vỡ trong quá trình sử dụng. Một trong nhưng phụ kiện có thể giúp bạn bảo vệ toàn diện được chiếc iPhone 11 đang được nhiều iFan lựa chọn đó là ốp lưng Filada trong viền màu.', '15.jpg', 10),
(6, 'Cáp Baseus Crystal Shine USB-A to Lightning 1.2M', 'CÁP SẠC', 30, 'Cáp Baseus Crystal Shine USB-A to Lightning dài 1.2m - Sạc nhanh, siêu bền\\r\\nCáp Baseus Crystal Shine USB-A to Lightning dài 1.2m là phụ kiện cần thiết, với tác dụng để sạc pin và đồng bộ dữ liệu cao cho các thiết bị của Apple thông qua cổng sạc Lightning. Vì thế một khi bạn làm mất hay hỏng chiếc cáp sạc hãy trang bị ngay cáp Baseus Crystal Shine USB-A to Lightning.', '21.jpg', 90),
(7, 'Cáp Anker Powerline Flow III USB-C to Lightning A8', 'CÁP SẠC', 48, 'Cáp USB-C to Lightning Anker Powerline Flow III 0.9m A8662 – Cáp sạc bền bỉ, sạc nhanh tiện lợi\\r\\nCáp USB-C to Lightning Anker Powerline Flow III 0.9m A8662 nổi bật với thiết kế hoàn thiện bền bỉ. Với khả năng sạc nhanh ấn tượng, sản phẩm cáp sạc lightning trên hứa hẹn sẽ là sự lựa chọn tuyệt vời giúp người dùng dễ dàng sạc nhanh các thiết bị chỉ trong thời gian ngắn.', '22.jpg', 27),
(8, 'Cáp sạc nhanh tự ngắt Baseus Explorer Series Type-', 'CÁP SẠC', 29, 'ĐẶC ĐIỂM NỔI BẬT\\r\\nHỗ trợ sạc nhanh Power Delivery công suất 20W cho tốc độ truyền tải dữ liệu 480 Mbps\\r\\nTính năng tự động ngắt sạc khi đầy giúp chống chai pin, phù pin và tối ưu tuổi thọ pin thiết bị\\r\\nThiết kế đầu cáp trong suốt nhìn thấy linh kiện, đèn LED báo hiệu bên trong siêu hiện đại\\r\\nĐầu cáp và các tiếp điểm thiết kế lại để đảm bảo bền hơn, chống gãy tốt', '23.jpg', 17),
(9, 'Củ sạc Samsung Type-C 45W kèm cáp Type C to Type C', 'CÁP SẠC', 11, 'Củ sạc nhanh Samsung T4511 4W kèm cáp Type-C to Type-C 1.8m công suất 45W, hỗ trợ sạc nhanh\\r\\nBộ sạc T4511 là sản phẩm được chính Samsung thiết kế dành riêng cho các thiết bị có cổng sạc Type-C, nhất là các dòng sản phẩm của Samsung. Bộ sạc sẽ giúp người dùng nhanh chóng làm đầy dung lượng pin trong thời gian ngắn.', '24.jpg', 8),
(10, 'Cáp Baseus Golden Loop 3 trong 1 Elastic 3.5A 1.2M', 'CÁP SẠC', 30, 'Cáp Baseus Golden Loop 3 in 1 Elastic 3.5A 1.2M - Tiện dụng để sạc 3 thiết bị dễ dàng hơn\\r\\nCáp Baseus Golden Loop 3 in 1 Elastic 3.5A 1.2M được thiết kế dưới dạng dây rút, đa năng với 3 đầu sạc trong 1. Cáp được hỗ trợ dòng lên đến 3.5 A nên tốc độ sạc được cải thiện hơn 30% và đảm bảo độ ổn định bởi bộ xử lý tiên tiến.', '25.jpg', 22),
(11, '\'Pin sạc dự phòng không dây Baseus Magnetic Mini F', 'PIN', 14, 'Pin sạc dự phòng không dây Baseus Magnetic Miniedition 10000mAh 30W - Thiết kế nhỏ gọn, dung lượng khủng\\r\\nPin sạc dự phòng không dây Baseus Magnetic Miniedition 10000mAh 30Wnhỏ gọn nhưng có dung lượng khủng để hỗ trợ nhu cầu của bạn. Với những điểm nổi trội về tính năng sản phẩm này sẽ làm người dùng hài lòng khi sử dụng trong thời gian dài.\\r\\n\\r\\n', '32.jpg', 13),
(12, 'Pin dự phòng Anker Nano 10000mAh 30W USB-C tích hợ', 'PIN', 13, 'Pin dự phòng Anker Nano 10000mAh 30W USB-C tích hợp A1259\', \'33.jpg\', \'930000\', \'1350000\', \'Pin dự phòng Anker Nano 10000mAh 30W USB-C tích hợp A1259 - Sạc siêu nhanh 2 chiều 30W\\r\\nPin dự phòng Anker Nano 10000mAh 30W USB-C tích hợp A1259 trải nghiệm ấn tượng sạc nhanh cho các thiết bị công nghệ khác nhau. Bạn có thể yên tâm sử dụng sạc dự phòng Anker này trong thời gian dài nhờ thương hiệu Anker ', '33.jpg', 9),
(13, 'Pin sạc dự phòng Golf 10.000mAh tích hợp dây L106', 'PIN', 64, 'Sạc dự phòng Golf 10.000mAh tích hợp dây L106 - Thiết kế nhỏ gọn, vô cùng tiện lợi', '34.jpg', 27),
(14, '\'Pin sạc dự phòng Energizer 20000mAh QE20013PQ', 'PIN', 12, 'Pin dự phòng Energizer 20.000 mAh QE20013PQ - Pin trâu cùng thiết kế nhỏ gọn\\r\\nPin dự phòng Energizer 20.000 mAh QE20013PQ là một chiếc pin được sản xuất “đa-zi-năng” dành cho dế yêu và thiết bị. Thiết kế nhỏ gọn, pin dung lượng lớn và công nghệ sạc nhanh đã giúp cho pin dự phòng Energizer được nhiều người tiêu dùng lựa chọn.', '35.jpg', 8),
(15, 'Miếng Dán PPF Full Viền Mặt sau cho iPhone 11 Pro ', 'KÍNH CƯỜNG LỰC', 18, 'Miếng dán PPF full viền mặt sau cho iPhone 11 Pro Max giá rẻ, chất lượng cao.\\r\\nKhông thể phủ định rằng mặt lưng của iPhone 11 Pro Max chính là một điểm nổi bật và thu hút nhất. Sở hữu những màu sắc của máy hiện được đánh giá đẹp nhất. Bạn muốn bảo vệ mặt lưng của máy nhưng vẫn khoe được vẻ đẹp nguyên bản của nó. Miếng dán PPF full viền mặt lưng iPhone 11 Pro Max là một lựa chọn mà bạn nên cân nhắc.', '41.jpg', 13),
(16, 'Dán chống va đập Samsung Galaxy M34 Full Màn', 'KÍNH CƯỜNG LỰC', 15, 'Kính cường lực Samsung Galaxy M34 - Full màn thẩm mỹ, bảo vệ tối ưu \\r\\nKính cường lực Samsung Galaxy M34 là một lựa chọn đáng cân nhắc để bảo vệ màn hình toàn diện thiết bị. Các góc cạnh của màn hình sẽ được đảm bảo an toàn tối đa trước mọi tình huống không mong muốn như va đập, rơi rớt, hoặc tiếp xúc với nước.', '43.jpg', 12),
(17, 'Dán chống va đập cho Samsung Galaxy S21 FE Zeelot ', 'KÍNH CƯỜNG LỰC', 29, 'Dán chống va đập Zeelot Full cho Samsung Galaxy S21 FE - Lớp skin bền bỉ\\r\\nSamsung Galaxy S21 FE là chiếc điện thoại flagship sở hữu công nghệ màn hình rất phức tạp, thậm chí là cong nhẹ để tăng trải nghiệm người dùng. Vì thế không ít khó khăn cho nhà cung cấp dán cường lực trong quá trình sản xuất. ', '42.jpg', 17),
(18, 'Dán cường lực Xiaomi Redmi Note 13 Full', 'KÍNH CƯỜNG LỰC', 13, 'Dán cường lực Xiaomi Redmi Note 13 13 full an toàn, chất lượng\\r\\nDán cường lực Xiaomi Redmi Note 13 chống va đập full là một loại miếng dán màn hình được thiết kế dành riêng cho dòng điện thoại Redmi Note 13. Miếng dán này được làm từ chất liệu kính cường lực cao cấp, có độ cứng gấp 4 lần kính thông thường, giúp bảo vệ màn hình điện thoại một cách tối ưu khỏi hầu hết va đập và trầy xước.', '44.jpg', 12),
(19, 'Dán cường lực Xiaomi Redmi 13C chống va đập Full m', 'KÍNH CƯỜNG LỰC', 19, 'Dán cường lực Xiaomi Redmi 13C - Thiết kế siêu mỏng, chống trầy xước, va đập ấn tượng\\r\\nDán cường lực Xiaomi Redmi 13C được đánh giá là lựa chọn xuất sắc để bảo vệ màn hình của Xiaomi Redmi 13C an toàn khỏi những va chạm không đáng có. Với độ cứng vượt trội, miếng dán màn hình Xiaomi này giúp duy trì sự sáng bóng và khả năng hiển thị chân thực,tạo nên trải nghiệm xem hình ảnh rõ nét và không hề bị giảm chất lượng.', '45.jpg', 12),
(20, 'Thẻ nhớ SanDisk Class 10 64GB 100MB/s', 'THẺ NHỚ', 23, 'Thẻ nhớ SanDisk Class 10 64GB 100MB/s - Dung lượng lớn, tốc độ cao\\r\\nĐể mở rộng dung lượng bộ nhớ cho các thiết bị của bạn trong quá trình sử dụng hằng ngày. Trang bị thẻ nhớ SanDisk Class 10 64GB 100MB/s là một giải pháp tối ưu nhất cho bạn. Với dung lượng khá cao kèm tốc độ đọc ghi nhanh sẽ giúp bạn mở rộng bộ nhớ tốt nhất cho thiết bị của mình.', '51.jpg', 14),
(21, 'Thẻ nhớ SanDisk Class 10 128GB 100MB/s', 'THẺ NHỚ', 44, 'Thiết kế bền bỉ, lưu trữ và truyền tải nhanh chóng\\r\\nHiện nay nhu cầu lưu trữ dữ liệu và hình ảnh của người dùng ngày càng lớn, bộ nhớ của thiết bị không đủ đáp ứng nhu cầu của bạn. Chính vì thế thẻ nhớ SanDisk Class 10 128GB 100MB/s ra đời. SanDisk Class 10 với thiết kế nhỏ gọn bền bỉ dung lượng lưu trữ lớn truyền tải dữ liệu nhanh chóng khiến chiếc thẻ nhớ ngày nổi bật trong thị trường hiện nay', '52.jpg', 26),
(22, 'Thẻ nhớ MicroSDXC Sandisk Ultra A1 256GB 150MB/s', 'THẺ NHỚ', 89, 'Thẻ nhớ MicroSDXC Sandisk Ultra A1 256GB 150Mbs - Truyền tải độ phân giải cao, tốc độ nhanh\\r\\nThẻ nhớ MicroSDXC Sandisk Ultra A1 256GB 150Mbs cho phép truyền tải hình ảnh và video có độ phân giải cao. Với dung lượng 256GB, người dùng có thể lưu giữ thoải mái và an toàn nhiều dữ liệu, do thẻ nhớ có khả năng chống thấm, chống nhiệt tốt.', '53.jpg', 79),
(23, 'Thẻ nhớ MicroSDXC Sandisk Extreme V30 A2 1TB 190MB', 'THẺ NHỚ', 35, 'Tốc độ đọc cực nhanh\\r\\nThẻ nhớ MicroSDXC Sandisk Extreme V30 A2 1TB 190MB/s có khả năng đọc, ghi cực kỳ nhanh chóng, và mở rộng dung lượng khá lớn, giúp bạn lưu trữ hàng loạt các tài liệu quan trọng. Nếu bạn quan tâm tới thẻ nhớ này, thì hãy tham khảo phần nội dung phía bên dưới nhé.', '54.jpg', 23),
(25, 'Pin sạc dự phòng Anker 633 Magnetic A1641 10.000mA', 'SẢN PHẨM BÁN CHẠY', 20, 'Pin Dự Phòng Anker 633 Magnetic (Mago) 10.000MAH - A1641 luôn là cái tên nằm trong top những chiếc pin sạc không dây được yêu thích bậc nhất trên thị trường. Sản phẩm pin dự phòng Anker mang đến thiết kế nhỏ gọn cùng khả năng sạc có thể làm hài lòng nhiều khách hàng.', '31.jpg', 10),
(26, 'Bao da Samsung Galaxy S21 FE Clear View Cover\\r\\n', 'SẢN PHẨM BÁN CHẠY', 1, 'Thiết kế dạng ốp 2 mặt bảo vệ toàn diện góc cạnh\\r\\nBao da Samsung S21 FE ôm trọn từng chi tiết, góc cạnh của chiếc điện thoại. Mặt trước của bao da làm bằng chất liệu mềm mịn xịn tiếp xúc êm ái màn hình cảm ứng, mặt sau được làm từ chất liệu chắc chắn bền tốt nhằm giúp bảo vệ thiết bị khỏi các va chạm.', '16.jpg', 7),
(27, 'Bao da iPad Air 10.9 Zagg kèm bàn phím Trackpad\\r\\n', 'SẢN PHẨM BÁN CHẠY', 3, 'Bao da iPad Air 10.9 ZAGG kèm bàn phím Trackpad - Tích hợp đèn LED bàn phím ấn tượng\\r\\nBao da iPad Air 10.9 ZAGG kèm bàn phím Trackpad là mẫu ốp lưng kèm bàn phím đời mới rất thuận tiện cho học tập và làm việc. Sản phẩm bao da iPad Air 10.9 được sản xuất bởi thương hiệu cao cấp cho iPad từ Mỹ và phù hợp cho các dòng iPad Air 10.9 inch.', '17.jpg', 2),
(33, 'Bao Da Mutural Design Folio cho iPad Pro 11 2021\\r\\n', 'SẢN PHẨM BÁN CHẠY', 2, 'Bao da iPad Air 10.9 ZAGG kèm bàn phím Trackpad - Tích hợp đèn LED bàn phím ấn tượng\\r\\nBao da iPad Air 10.9 ZAGG kèm bàn phím Trackpad là mẫu ốp lưng kèm bàn phím đời mới rất thuận tiện cho học tập và làm việc. Sản phẩm bao da iPad Air 10.9 được sản xuất bởi thương hiệu cao cấp cho iPad từ Mỹ và phù hợp cho các dòng iPad Air 10.9 inch.', '18.jpg', 1),
(34, 'Cáp Ugreen Type-C to Type-C 100W 1M US288', 'SẢN PHẨM BÁN CHẠY', 3, 'Dây cáp DEVIA Smart 3 đầu sạc - Thiết kế độc đáo, nâng cao hiệu quả sạc\\r\\nDây cáp DEVIA Smart 3 đầu sạc là một trong những sản phẩm cáp sạc nổi bật của thương hiệu DEVIA. Với thiết kế độc đáo tích hợp 3 đầu sạc khác nhau vào chung một dây sạc, chiếc cáp nhiều cổng này mang lại cho người dùng sự tiện lợi cùng khả năng sạc cực kỳ nhanh chóng.', '26.jpg', 2),
(35, 'Cáp 3 in 1 Devia Smart Series', 'SẢN PHẨM BÁN CHẠY', 12, 'Dây cáp DEVIA Smart 3 đầu sạc - Thiết kế độc đáo, nâng cao hiệu quả sạc\\r\\nDây cáp DEVIA Smart 3 đầu sạc là một trong những sản phẩm cáp sạc nổi bật của thương hiệu DEVIA. Với thiết kế độc đáo tích hợp 3 đầu sạc khác nhau vào chung một dây sạc, chiếc cáp nhiều cổng này mang lại cho người dùng sự tiện lợi cùng khả năng sạc cực kỳ nhanh chóng.', '27.jpg', 11),
(38, 'Dán chống va đập Samsung Galaxy S24 Ultra Mipow Premium Full cao cấp\\r\\n', 'SẢN PHẨM BÁN CHẠY', 14, 'Dán chống va đập Full màn hình Samsung Galaxy A53 – Bảo vệ màn hình hiệu quả\\r\\nKính cường lực Samsung Galaxy A53 là lựa chọn lý tưởng để bạn an tâm dùng smartphone mỗi ngày. Miếng dán với độ bền cao, thẩm mỹ cho điện thoại và giúp điện thoại sạch sẽ hơn. Vậy miếng dán này có nên mua hay không, hãy tìm câu trả lời trong phần mô tả dưới đây!', '48.jpg', 4),
(41, 'Samsung Galaxy A55 dán chống va đập Mocoll Full cao cấp', 'KÍNH CƯỜNG LỰC', 20, 'Dán cường lực Samsung Galaxy A55 Mocoll Full: độ cứng đáng tin cậy, chạm mượt mà\\r\\nNếu bạn đang tìm kiếm miếng dán cường lực cho Samsung Galaxy A55 thì đừng bỏ qua sản phẩm của Mocoll. Dán cường lực Mocoll Full hứa hẹn sẽ mang tới trải nghiệm hài lòng cho bạn nhờ được sản xuất từ chất liệu kính cứng với kích thước lý tưởng cho Galaxy A55.', '47.jpg', 18),
(43, 'Thẻ nhớ MicroSDXC Sandisk Ultra A1 256GB 150MB/s\\r', 'THẺ NHỚ', 89, 'Thẻ nhớ MicroSDXC Sandisk Ultra A1 256GB 150Mbs - Truyền tải độ phân giải cao, tốc độ nhanh\\r\\nThẻ nhớ MicroSDXC Sandisk Ultra A1 256GB 150Mbs cho phép truyền tải hình ảnh và video có độ phân giải cao. Với dung lượng 256GB, người dùng có thể lưu giữ thoải mái và an toàn nhiều dữ liệu, do thẻ nhớ có khả năng chống thấm, chống nhiệt tốt', '56.jpg', 57),
(44, 'Thẻ nhớ microSD Kingston Class 10 128GB (Không kèm', 'THẺ NHỚ', 39, 'Thẻ nhớ MicroSD Kingston Class 10 128GB (non adapter) - Dung lượng 128GB, sử dụng bền bỉ\\r\\nThẻ nhớ MicroSD Kingston Class 10 128GB (non adapter) 128GB là một trong những sản phẩm thẻ nhớ được đánh giá cao về dung lượng lớn và tốc độ xử lý nhanh chóng, phục vụ tốt cho các nhu cầu lưu trữ dữ liệu đa dạng của người dùng hiện đại. Sản phẩm không chỉ đáp ứng được các yêu cầu kỹ thuật mà còn mang lại sự tiện lợi và đáng tin cậy trong mọi ', '57.jpg', 24),
(45, 'Thẻ nhớ Micro SDXC Sandisk Extreme Pro V30 A2 200M', 'THẺ NHỚ', 69, 'Thẻ nhớ Micro SDXC Sandisk Extreme V30 A2 200MB/S 128GB – Tăng dung lượng lưu trữ\\r\\nThẻ nhớ Micro SDXC Sandisk Extreme V30 A2 200MB/S 128GB được thiết kế chất lượng cao, bền bỉ, bảo vệ những tài liệu được lưu trữ một cách tốt nhất. Với dung lượng lưu trữ lên đến 128GB cùng tốc độ đọc/ ghi dữ liệu cực nhanh, chiếc thẻ nhớ này sẽ là phụ kiện cần thiết cho nhiều người dùng.', '58.jpg', 54);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `iduser` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`iduser`, `username`, `password`) VALUES
(1, 'hien', 244),
(7, 'lethihien', 111),
(8, 'usertmdt', 999),
(9, 'hh', 2147483647),
(10, 'vv', 0),
(11, '1', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idsp`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idsp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
