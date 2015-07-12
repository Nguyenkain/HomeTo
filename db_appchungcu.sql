-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 09, 2015 at 08:58 AM
-- Server version: 5.5.41-MariaDB-1ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_appchungcu`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookmarks`
--

CREATE TABLE IF NOT EXISTS `bookmarks` (
  `id` int(11) NOT NULL,
  `target_id` bigint(20) NOT NULL,
  `target_type` int(11) NOT NULL,
  `username` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookmarks`
--

INSERT INTO `bookmarks` (`id`, `target_id`, `target_type`, `username`, `created_date`) VALUES
(0, 1, 1, '112564176262507617201@google', '2015-06-09 17:27:58'),
(0, 1, 1, 'longphikhac@timtro', '2015-06-28 14:19:03'),
(0, 1, 2, 'longphikhac@timtro', '2015-06-28 14:19:14');

-- --------------------------------------------------------

--
-- Table structure for table `design_company`
--

CREATE TABLE IF NOT EXISTS `design_company` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `design_company`
--

INSERT INTO `design_company` (`ID`, `name`) VALUES
(1, 'Campbell ShillingLaw and Partners');

-- --------------------------------------------------------

--
-- Table structure for table `direction`
--

CREATE TABLE IF NOT EXISTS `direction` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `direction`
--

INSERT INTO `direction` (`ID`, `name`) VALUES
(1, 'Liên Hệ'),
(2, 'Đông'),
(3, 'Tây'),
(4, 'Nam'),
(5, 'Bắc'),
(6, 'Đông Nam'),
(7, 'Đông Bắc'),
(8, 'Tây Nam'),
(9, 'Tây Bắc');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ID`, `email`, `content`, `created_date`) VALUES
(1, 'khacphilong@gmail.com', 'phản hồi', '2015-06-10 11:42:54'),
(2, 'khacphilong@gmail.com', 'Noi dung phan hoi', '2015-06-28 11:18:24');

-- --------------------------------------------------------

--
-- Table structure for table `floor_material`
--

CREATE TABLE IF NOT EXISTS `floor_material` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `floor_material`
--

INSERT INTO `floor_material` (`ID`, `name`) VALUES
(1, 'Gỗ'),
(2, 'Gạch'),
(3, 'Kết hợp');

-- --------------------------------------------------------

--
-- Table structure for table `furniture`
--

CREATE TABLE IF NOT EXISTS `furniture` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `furniture`
--

INSERT INTO `furniture` (`ID`, `name`) VALUES
(1, 'Bao gồm'),
(2, 'Không bao gồm'),
(3, 'Khác');

-- --------------------------------------------------------

--
-- Table structure for table `image_apartment`
--

CREATE TABLE IF NOT EXISTS `image_apartment` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `apartment` bigint(20) NOT NULL,
  `type` int(11) NOT NULL,
  `image` text NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `image_apartment`
--

INSERT INTO `image_apartment` (`ID`, `apartment`, `type`, `image`, `description`) VALUES
(1, 1, 0, 'c81.jpg', ''),
(2, 1, 0, 'c53.jpg', ''),
(3, 1, 0, 'c23.jpg', ''),
(4, 1, 0, 'a145.jpg', ''),
(5, 2, 0, 'c23.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `image_project`
--

CREATE TABLE IF NOT EXISTS `image_project` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `project` bigint(20) NOT NULL,
  `type` int(11) NOT NULL,
  `image` text NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `image_project`
--

INSERT INTO `image_project` (`ID`, `project`, `type`, `image`, `description`) VALUES
(1, 1, 1, '32121.jpg', ''),
(2, 1, 0, '32323.jpg', ''),
(3, 1, 0, '323232.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `investor`
--

CREATE TABLE IF NOT EXISTS `investor` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `investor`
--

INSERT INTO `investor` (`ID`, `name`) VALUES
(1, 'Tổng Công Ty Viglacera');

-- --------------------------------------------------------

--
-- Table structure for table `list_apartment`
--

CREATE TABLE IF NOT EXISTS `list_apartment` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8 NOT NULL,
  `province` int(11) NOT NULL,
  `district` int(11) NOT NULL,
  `project` bigint(20) NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `code` text NOT NULL,
  `price_square` int(11) NOT NULL,
  `price_total` bigint(20) NOT NULL,
  `area` int(11) NOT NULL,
  `furniture` int(11) NOT NULL,
  `direction_door` int(11) NOT NULL,
  `direction_balcony` int(11) NOT NULL,
  `direction_side_balcony` int(11) NOT NULL,
  `floor_material` int(11) NOT NULL,
  `floor_number` int(11) NOT NULL,
  `block` text NOT NULL,
  `bedroom` int(11) NOT NULL,
  `transfer_year` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `list_apartment`
--

INSERT INTO `list_apartment` (`ID`, `title`, `province`, `district`, `project`, `description`, `code`, `price_square`, `price_total`, `area`, `furniture`, `direction_door`, `direction_balcony`, `direction_side_balcony`, `floor_material`, `floor_number`, `block`, `bedroom`, `transfer_year`, `username`, `email`, `phone`, `created_date`) VALUES
(1, 'Bán căn hộ Vincom Bà Triệu thêm cho được 2 dòng', 1, 1, 1, 'Đặt mua căn hộ The Pride vào ở ngay mặt Lê Văn Lương ngay hôm nay để có cơ nhận ngay gói khuyến mãi cực khủng lên đến 200 triệu.\nĐặc biệt quý khách hàng có cơ hội sở hữu ngay cặp vé du lịch khám phá thiên đường Châu Âu rực nắng\n\nLưu ý: Chương trình áp dụng đến hết ngày 20/06/2015.\n\n- Vị trí dự án: Chỉ 5 phút lái xe đến Big C, mặt Lê Văn Lương kéo dài, là tòa nhà cao nhất Hà Đông.\n- Thiết kế: Hiện đại, thoáng mát, tất cả các phòng đều có ánh sáng tự nhiên dưới sự tư vấn từ các kỹ sư đến từ Singapore.\n+ Loại 2 phòng ngủ: 74m2, 80m2, 88m2.\n+ Loại 3 phòng ngủ: 97m2 ; 101m2, 145m2.\n- Hiện vẫn còn đủ các tầng, căn đẹp,\n\n- Tiến độ dự án: nhận nhà vào ở ngay\n\n- Tiến độ đóng tiền linh hoạt:\n+ Thanh toán 100% nhận ngay gói khuyến mãi cực khủng lên đến 200 triệu\n+ Thanh toán 50% nhận nhà ngay và vay vốn với lãi suất 0%/năm\n- Đặc biệt tặng ngay 9 năm phí dịch vụ cho tất cả các khách hàng đặt mua căn hộ trước ngày 20/06\n\nChúng tôi cam kết:\n* Ký HĐ trực tiếp.\n* Không thu bất cứ một khoản phí nào của khách hàng.\n* Hỗ trợ, tư vấn cho đến khi khách hàng sở hữu căn hộ.\n* Tất cả các thông tin là chính xác, trực tiếp.\n\nĐể đăng ký tham quan nhà mẫu và có thêm thông tin chi tiết vui lòng liên hệ:\n\nĐT: 0916 102 555\nPhòng kinh doanh\nCông ty CP ĐT Hải Phát\nSàn giao dịch bất động sản Hải Phát - Sàn trực tiếp của chủ đầu tư.\nAdd: Tầng 3 số 169 Nguyễn Ngọc Vũ, Cầu Giấy, Hà Nội.\nhttp://haiphatplus.vn', '12513', 76400000, 1230000000000, 161, 1, 2, 3, 5, 1, 1, 'Block info here', 3, 2014, '100000245208403@facebook', 'khacphilong@gmail.com', '01674659037', '2015-05-25 20:04:05'),
(2, 'Bán căn hộ TimCity', 1, 2, 1, 'Đại lý Tân Thời Đại độc quyền phân phối căn hộ tòa Park 2 có tổng số căn hộ là 17 căn trên 1 sàn. Tòa Park 2 là một trong những tòa có không gian thoáng 3 mặt, tòa căn hộ Park 2 sở hữu "tầm nhìn xanh mở rộng" là Tòa nhà đầu tiên của Park Hill có Shophouse tại 2 tầng đế gồm tổng 34 tầng, 10 thang máy, thang đi bộ, là tòa có vị trí trắc địa tại dự án Park Hill.\n\nHiện tại chúng tôi bắt đầu nhận cọc giữ chỗ xin liên hệ:\nMs Huệ 0967 94 6666.\nMs Lan: 0904 354 636.\nMr Thành 0934 666 239.\n\n1. Vị trí Park 2.\n\n- Hướng Bắc: Nhìn ra sân chơi, vườn hoa, sân thể thao, ra đường lớn, nhìn ra sông Hồng và toàn cảnh times city giai đoạn 1.\n- Hướng Nam: Nhìn ra tuyến phố đi bộ, quảng trường, nhà hàng ngoài trời.\n- Hướng Đông: Nhìn ra giàn hoa, sông Hồng, cầu vĩnh tuy, vườn nướng BBQ.\n- Hướng Tây: Nhìn ra Tuyến phố đi bộ, vườn hoa, toàn cảnh giai đoạn 1.\n\n2. Thiết kế căn hộ.\n\n- Căn hộ số 1, DT 80,3m2, 2 PN, hướng Bắc.\n- Căn hộ số 2, DT 86m2, 2 PN, hướng Bắc.\n- Căn hộ số 3, DT 73m2, 2 PN, hướng Bắc.\n- Căn hộ số 4, DT 122,2 m2, 3 PN, hướng Đông Bắc (góc).\n- Căn hộ số 5, DT 79m2, 2 PN, hướng Đông.\n- Căn hộ số 6, DT 136m2, 4 PN, hướng Đông Nam (góc).\n- Căn hộ số 7, DT 81,9m, 2 PN, hướng Nam.\n- Căn hộ số 8 + căn hộ số 11 DT 106m2, 3 PN, hướng Nam.\n- Căn hộ số 9 + căn hộ số 10 DT 81,8m2, 2 PN, hướng Nam.\n- Căn hộ số 12, DT 81,9m2, 2 PN, hướng Nam.\n- Căn hộ số 12A, DT 136,1, 4 PN, hướng Tây Nam (góc).\n- Căn hộ số 12B, DT 79m2, 2 PN, hướng Tây.\n- Căn hộ số 15, DT 128, 4 PN, hướng Tây Bắc (góc).\n- Căn hộ số 16, DT 115,9m2, 3 PN, hướng Bắc.\n- Căn hộ số 17, DT 117m2, 3 PN, hướng Bắc.\n\n3. Giá bán căn hộ:\n\n- Căn hộ: 2 PN, giá bán 2,7 tỷ - 3,4 tỷ.\n- Căn hộ: 3 PN, giá bán 3,9 tỷ - 5 tỷ.\n- Căn hộ: 4 PN, giá bán 4,9 tỷ - 5,8 tỷ.\n\n4. Tiến độ thanh toán.\n\nThanh toán:\nĐợt 1: Thanh toán 20%, ngày 6/2015.\nĐợt 2: Thanh toán 10%, ngày 15/6/2015.\nĐợt 3: Thanh toán 10%, ngày 15/7/2015.\nĐợt 4: Thanh toán 10%, ngày 15/9/2016.\nĐợt 5: Thanh toán 10%, ngày 15/12/2016.\nĐợt 6: Thanh toán 10%, tháng 3/2016.\nĐợt 7: Thanh toán 30%, tháng 2/2017.\n\n5. Chính sách ngân hàng.\n\n- Hỗ trợ vay vốn ngân hàng 70% giá trị căn hộ.\n- Tặng 2 % tiền mặt/ khoản vay tương đương 40.000.000.\n- Ân hạn nợ gốc 24 tháng,\n- Miễn phí phạt trả nợ trước hạn 24 tháng.\n- Ưu đãi lãi suất 0% theo tiến độ thanh toán của chủ đầu tư.\n\nHỗ trợ mua căn hộ và giải đáp thắc mắc quý khách hàng tốt nhất!\n- Thủ tục đặt cọc, ký kết hợp đồng.\n- Thủ tục ngân hàng, chứng minh tài chính.\n- Thủ tục làm sổ đỏ.\n- Và các thủ tục pháp lý liên quan đến quá trình mua bán.\n\nQuản lý bán hàng dự án Vinhomes Times City.\nMs Huệ 0967 94 6666.\nMs Lan: 0904 354 636.\nMr Thành 0934 666 239.', '63464', 76400000, 42300000000, 30000, 1, 2, 3, 5, 1, 1, 'Block info here', 5, 2014, '100000245208403@facebook', 'khacphilong@gmail.com', '01674659037', '2015-05-25 20:04:05');

-- --------------------------------------------------------

--
-- Table structure for table `list_district`
--

CREATE TABLE IF NOT EXISTS `list_district` (
  `id_district` int(11) NOT NULL,
  `id_province` int(11) NOT NULL,
  `name_district` text CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_district`
--

INSERT INTO `list_district` (`id_district`, `id_province`, `name_district`) VALUES
(1, 1, 'Ba Đình'),
(2, 1, 'Ba Vì'),
(3, 1, 'Cầu Giấy'),
(4, 1, 'Chương Mỹ'),
(5, 1, 'Đan Phượng'),
(6, 1, 'Đông Anh'),
(7, 1, 'Đống Đa'),
(8, 1, 'Gia Lâm'),
(9, 1, 'Hà Đông'),
(10, 1, 'Hai Bà Trưng'),
(11, 1, 'Hoài Đức'),
(12, 1, 'Hoàn Kiếm'),
(13, 1, 'Hoàng Mai'),
(14, 1, 'Long Biên'),
(15, 1, 'Mê Linh'),
(16, 1, 'Mỹ Đức'),
(17, 1, 'Phú Xuyên'),
(18, 1, 'Phúc Thọ'),
(19, 1, 'Quốc Oai'),
(20, 1, 'Sóc Sơn'),
(21, 1, 'Sơn Tây'),
(22, 1, 'Tây Hồ'),
(23, 1, 'Thạch Thất'),
(24, 1, 'Thanh Oai'),
(25, 1, 'Thanh Trì'),
(26, 1, 'Thanh Xuân'),
(27, 1, 'Thường Tín'),
(28, 1, 'Từ Liêm'),
(29, 1, 'Ứng Hòa'),
(30, 2, 'Bình Chánh'),
(31, 2, 'Bình Tân'),
(32, 2, 'Bình Thạnh'),
(33, 2, 'Cần Giờ'),
(34, 2, 'Củ Chi'),
(35, 2, 'Gò Vấp'),
(36, 2, 'Hóc Môn'),
(37, 2, 'Nhà Bè'),
(38, 2, 'Phú Nhuận'),
(39, 2, 'Quận 1'),
(40, 2, 'Quận 2'),
(41, 2, 'Quận 3'),
(42, 2, 'Quận 4'),
(43, 2, 'Quận 5'),
(44, 2, 'Quận 6'),
(45, 2, 'Quận 7'),
(46, 2, 'Quận 8'),
(47, 2, 'Quận 9'),
(48, 2, 'Quận 10'),
(49, 2, 'Quận 11'),
(50, 2, 'Quận 12'),
(51, 2, 'Tân Bình'),
(52, 2, 'Tân Phú'),
(53, 2, 'Thủ Đức'),
(54, 3, 'Cẩm Lệ'),
(55, 3, 'Hải Châu'),
(56, 3, 'Hoà Vang'),
(57, 3, 'Hoàng Sa'),
(58, 3, 'Liên Chiểu'),
(59, 3, 'Ngũ Hành Sơn'),
(60, 3, 'Sơn Trà'),
(61, 3, 'Thanh Khê'),
(62, 4, 'An Phú'),
(63, 4, 'Châu Đốc'),
(64, 4, 'Châu Phú'),
(65, 4, 'Châu Thành'),
(66, 4, 'Chợ Mới'),
(67, 4, 'Long Xuyên'),
(68, 4, 'Phú Tân'),
(69, 4, 'Tân Châu'),
(70, 4, 'Thoại Sơn'),
(71, 4, 'Tịnh Biên'),
(72, 4, 'Tri Tôn'),
(73, 5, 'Bắc Giang'),
(74, 5, 'Hiệp Hòa'),
(75, 5, 'Lạng Giang'),
(76, 5, 'Lục Nam'),
(77, 5, 'Lục Ngạn'),
(78, 5, 'Sơn Động'),
(79, 5, 'Tân Yên'),
(80, 5, 'Việt Yên'),
(81, 5, 'Yên Dũng'),
(82, 5, 'Yên Thế'),
(83, 6, 'Ba Bể'),
(84, 6, 'Bạch Thông'),
(85, 6, 'Bắc Kạn'),
(86, 6, 'Chợ Đồn'),
(87, 6, 'Chợ Mới'),
(88, 6, 'Na Rì'),
(89, 6, 'Ngân Sơn'),
(90, 6, 'Pác Nặm'),
(91, 7, 'Bạc Liêu'),
(92, 7, 'Đông Hải'),
(93, 7, 'Giá Rai'),
(94, 7, 'Hoà Bình'),
(95, 7, 'Hồng Dân'),
(96, 7, 'Phước Long'),
(97, 7, 'Vĩnh Lợi'),
(98, 8, 'Bắc Ninh'),
(99, 8, 'Gia Bình'),
(100, 8, 'Lương Tài'),
(101, 8, 'Quế Võ'),
(102, 8, 'Thuận Thành'),
(103, 8, 'Tiên Du'),
(104, 8, 'Từ Sơn'),
(105, 8, 'Yên Phong'),
(106, 9, 'Ba Tri'),
(107, 9, 'Bến Tre'),
(108, 9, 'Bình Đại'),
(109, 9, 'Châu Thành'),
(110, 9, 'Chợ Lách'),
(111, 9, 'Giồng Trôm'),
(112, 9, 'Mỏ Cày Bắc'),
(113, 9, 'Mỏ Cày Nam'),
(114, 9, 'Thạnh Phú'),
(115, 10, 'An Lão'),
(116, 10, 'An Nhơn'),
(117, 10, 'Hoài Ân'),
(118, 10, 'Hoài Nhơn'),
(119, 10, 'Phù Cát'),
(120, 10, 'Phù Mỹ'),
(121, 10, 'Qui Nhơn'),
(122, 10, 'Tây Sơn'),
(123, 10, 'Tuy Phước'),
(124, 10, 'Vân Canh'),
(125, 10, 'Vĩnh Thạnh'),
(126, 11, 'Bến Cát'),
(127, 11, 'Dầu Tiếng'),
(128, 11, 'Dĩ An'),
(129, 11, 'Phú Giáo'),
(130, 11, 'Tân Uyên'),
(131, 11, 'Thủ Dầu Một'),
(132, 11, 'Thuận An'),
(133, 12, 'Bình Long'),
(134, 12, 'Bù Đăng'),
(135, 12, 'Bù Đốp'),
(136, 12, 'Bù Gia Mập'),
(137, 12, 'Chơn Thành'),
(138, 12, 'Đồng Phú'),
(139, 12, 'Đồng Xoài'),
(140, 12, 'Hớn Quản'),
(141, 12, 'Lộc Ninh'),
(142, 12, 'Phước Long'),
(143, 13, 'Bắc Bình'),
(144, 13, 'Đức Linh'),
(145, 13, 'Hàm Tân'),
(146, 13, 'Hàm Thuận Bắc'),
(147, 13, 'Hàm Thuận Nam'),
(148, 13, 'La Gi'),
(149, 13, 'Phan Thiết'),
(150, 13, 'Phú Quý'),
(151, 13, 'Tánh Linh'),
(152, 13, 'Tuy Phong'),
(153, 14, 'Cà Mau'),
(154, 14, 'Cái Nước'),
(155, 14, 'Đầm Dơi'),
(156, 14, 'Năm Căn'),
(157, 14, 'Ngọc Hiển'),
(158, 14, 'Phú Tân'),
(159, 14, 'Thới Bình'),
(160, 14, 'Trần Văn Thời'),
(161, 14, 'U Minh'),
(162, 15, 'Bình Thủy'),
(163, 15, 'Cái Răng'),
(164, 15, 'Cờ Đỏ'),
(165, 15, 'Ninh Kiều'),
(166, 15, 'Ô Môn'),
(167, 15, 'Phong Điền'),
(168, 15, 'Thốt Nốt'),
(169, 15, 'Thới Lai'),
(170, 15, 'Vĩnh Thạnh'),
(171, 16, 'Bảo Lạc'),
(172, 16, 'Bảo Lâm'),
(173, 16, 'Cao Bằng'),
(174, 16, 'Hà Quảng'),
(175, 16, 'Hạ Lang'),
(176, 16, 'Hòa An'),
(177, 16, 'Nguyên Bình'),
(178, 16, 'Phục Hòa'),
(179, 16, 'Quảng Uyên'),
(180, 16, 'Thạch An'),
(181, 16, 'Thông Nông'),
(182, 16, 'Trà Lĩnh'),
(183, 16, 'Trùng Khánh'),
(184, 17, 'Buôn Đôn'),
(185, 17, 'Buôn Hồ'),
(186, 17, 'Buôn Ma Thuột'),
(187, 17, 'Cư Kuin'),
(188, 17, 'Cư M''gar'),
(189, 17, 'Ea H''leo'),
(190, 17, 'Ea Kar'),
(191, 17, 'Ea Súp'),
(192, 17, 'Krông Ana'),
(193, 17, 'Krông Bông'),
(194, 17, 'Krông Búk'),
(195, 17, 'Krông Năng'),
(196, 17, 'Krông Pắk'),
(197, 17, 'Lắk'),
(198, 17, 'M''Đrăk'),
(199, 18, 'Cư Jút'),
(200, 18, 'Đăk Glong'),
(201, 18, 'Đăk Mil'),
(202, 18, 'Đăk R''Lấp'),
(203, 18, 'Đăk Song'),
(204, 18, 'Gia Nghĩa'),
(205, 18, 'Krông Nô'),
(206, 18, 'Tuy Đức'),
(207, 19, 'Điện Biên'),
(208, 19, 'Điện Biên Đông'),
(209, 19, 'Điện Biên Phủ'),
(210, 19, 'Mường Ảng'),
(211, 19, 'Mường Chà'),
(212, 19, 'Mường Lay'),
(213, 19, 'Mường Nhé'),
(214, 19, 'Nậm Pồ'),
(215, 19, 'Tủa Chùa'),
(216, 19, 'Tuần Giáo'),
(217, 20, 'Biên Hòa'),
(218, 20, 'Cẩm Mỹ'),
(219, 20, 'Định Quán'),
(220, 20, 'Long Khánh'),
(221, 20, 'Long Thành'),
(222, 20, 'Nhơn Trạch'),
(223, 20, 'Tân Phú'),
(224, 20, 'Thống Nhất'),
(225, 20, 'Trảng Bom'),
(226, 20, 'Vĩnh Cửu'),
(227, 20, 'Xuân Lộc'),
(228, 21, 'Cao Lãnh'),
(229, 21, 'Cao Lãnh'),
(230, 21, 'Châu Thành'),
(231, 21, 'Hồng Ngự'),
(232, 21, 'Hồng Ngự'),
(233, 21, 'Lai Vung'),
(234, 21, 'Lấp Vò'),
(235, 21, 'Sa Đéc'),
(236, 21, 'Tam Nông'),
(237, 21, 'Tân Hồng'),
(238, 21, 'Thanh Bình'),
(239, 21, 'Tháp Mười'),
(240, 22, 'An Khê'),
(241, 22, 'Ayun Pa'),
(242, 22, 'Chư Păh'),
(243, 22, 'Chư Prông'),
(244, 22, 'Chư Pưh'),
(245, 22, 'Chư Sê'),
(246, 22, 'Đắk Pơ'),
(247, 22, 'Đăk Đoa'),
(248, 22, 'Đức Cơ'),
(249, 22, 'Ia Grai'),
(250, 22, 'Ia Pa'),
(251, 22, 'KBang'),
(252, 22, 'Kông Chro'),
(253, 22, 'Krông Pa'),
(254, 22, 'Mang Yang'),
(255, 22, 'Phú Thiện'),
(256, 22, 'Pleiku'),
(257, 23, 'Bắc Mê'),
(258, 23, 'Bắc Quang'),
(259, 23, 'Đồng Văn'),
(260, 23, 'Hà Giang'),
(261, 23, 'Hoàng Su Phì'),
(262, 23, 'Mèo Vạc'),
(263, 23, 'Quản Bạ'),
(264, 23, 'Quang Bình'),
(265, 23, 'Vị Xuyên'),
(266, 23, 'Xín Mần'),
(267, 23, 'Yên Minh'),
(268, 24, 'Bình Lục'),
(269, 24, 'Duy Tiên'),
(270, 24, 'Kim Bảng'),
(271, 24, 'Lý Nhân'),
(272, 24, 'Phủ Lý'),
(273, 24, 'Thanh Liêm'),
(274, 25, 'Can Lộc'),
(275, 25, 'Cẩm Xuyên'),
(276, 25, 'Đức Thọ'),
(277, 25, 'Hà Tĩnh'),
(278, 25, 'Hồng Lĩnh'),
(279, 25, 'Hương Khê'),
(280, 25, 'Hương Sơn'),
(281, 25, 'Kỳ Anh'),
(282, 25, 'Lộc Hà'),
(283, 25, 'Nghi Xuân'),
(284, 25, 'Thạch Hà'),
(285, 25, 'Vũ Quang'),
(286, 26, 'Bình Giang'),
(287, 26, 'Cẩm Giàng'),
(288, 26, 'Chí Linh'),
(289, 26, 'Gia Lộc'),
(290, 26, 'Hải Dương'),
(291, 26, 'Kim Thành'),
(292, 26, 'Kinh Môn'),
(293, 26, 'Nam Sách'),
(294, 26, 'Ninh Giang'),
(295, 26, 'Thanh Hà'),
(296, 26, 'Thanh Miện'),
(297, 26, 'Tứ Kỳ'),
(298, 27, 'An Dương'),
(299, 27, 'An Lão'),
(300, 27, 'Bạch Long Vĩ'),
(301, 27, 'Cát Hải'),
(302, 27, 'Dương Kinh'),
(303, 27, 'Đồ Sơn'),
(304, 27, 'Hải An'),
(305, 27, 'Hồng Bàng'),
(306, 27, 'Kiến An'),
(307, 27, 'Kiến Thụy'),
(308, 27, 'Lê Chân'),
(309, 27, 'Ngô Quyền'),
(310, 27, 'Thuỷ Nguyên'),
(311, 27, 'Tiên Lãng'),
(312, 27, 'Vĩnh Bảo'),
(313, 28, 'Châu Thành'),
(314, 28, 'Châu Thành A'),
(315, 28, 'Long Mỹ'),
(316, 28, 'Ngã Bảy'),
(317, 28, 'Phụng Hiệp'),
(318, 28, 'Vị Thanh'),
(319, 28, 'Vị Thủy'),
(320, 29, 'Cao Phong'),
(321, 29, 'Đà Bắc'),
(322, 29, 'Hoà Bình'),
(323, 29, 'Kim Bôi'),
(324, 29, 'Kỳ Sơn'),
(325, 29, 'Lạc Sơn'),
(326, 29, 'Lạc Thủy'),
(327, 29, 'Lương Sơn'),
(328, 29, 'Mai Châu'),
(329, 29, 'Tân Lạc'),
(330, 29, 'Yên Thủy'),
(331, 30, 'TP Huế'),
(332, 30, 'Hương Thủy'),
(333, 30, 'Hương Trà'),
(334, 30, 'Nam Đông'),
(335, 30, 'A Lưới'),
(336, 30, 'Phong Điền'),
(337, 30, 'Phú Lộc'),
(338, 30, 'Phú Vang'),
(339, 30, 'Quảng Điền'),
(340, 31, 'Ân Thi'),
(341, 31, 'Hưng Yên'),
(342, 31, 'Khoái Châu'),
(343, 31, 'Kim Động'),
(344, 31, 'Mỹ Hào'),
(345, 31, 'Phù Cừ'),
(346, 31, 'Tiên Lữ'),
(347, 31, 'Văn Giang'),
(348, 31, 'Văn Lâm'),
(349, 31, 'Yên Mỹ'),
(350, 32, 'Cam Lâm'),
(351, 32, 'Cam Ranh'),
(352, 32, 'Diên Khánh'),
(353, 32, 'Khánh Sơn'),
(354, 32, 'Khánh Vĩnh'),
(355, 32, 'Nha Trang'),
(356, 32, 'Ninh Hòa'),
(357, 32, 'Trường Sa'),
(358, 32, 'Vạn Ninh'),
(359, 33, 'An Biên'),
(360, 33, 'An Minh'),
(361, 33, 'Châu Thành'),
(362, 33, 'Giang Thành'),
(363, 33, 'Giồng Riềng'),
(364, 33, 'Gò Quao'),
(365, 33, 'Hà Tiên'),
(366, 33, 'Hòn Đất'),
(367, 33, 'Kiên Hải'),
(368, 33, 'Kiên Lương'),
(369, 33, 'Phú Quốc'),
(370, 33, 'Rạch Giá'),
(371, 33, 'Tân Hiệp'),
(372, 33, 'U Minh Thượng'),
(373, 33, 'Vĩnh Thuận'),
(374, 34, 'Đắk Glei'),
(375, 34, 'Đắk Hà'),
(376, 34, 'Đăk Tô'),
(377, 34, 'Kon Plông'),
(378, 34, 'Kon Rẫy'),
(379, 34, 'Kon Tum'),
(380, 34, 'Ngọc Hồi'),
(381, 34, 'Sa Thầy'),
(382, 34, 'Tu Mơ Rông'),
(383, 35, 'Lai Châu'),
(384, 35, 'Mường Tè'),
(385, 35, 'Nậm Nhùn'),
(386, 35, 'Phong Thổ'),
(387, 35, 'Sìn Hồ'),
(388, 35, 'Tam Đường'),
(389, 35, 'Tân Uyên'),
(390, 35, 'Than Uyên'),
(391, 36, 'Bảo Lâm'),
(392, 36, 'Bảo Lộc'),
(393, 36, 'Cát Tiên'),
(394, 36, 'Di Linh'),
(395, 36, 'Đà Lạt'),
(396, 36, 'Đạ Huoai'),
(397, 36, 'Đạ Tẻh'),
(398, 36, 'Đam Rông'),
(399, 36, 'Đơn Dương'),
(400, 36, 'Đức Trọng'),
(401, 36, 'Lạc Dương'),
(402, 36, 'Lâm Hà'),
(403, 37, 'Bắc Sơn'),
(404, 37, 'Bình Gia'),
(405, 37, 'Cao Lộc'),
(406, 37, 'Chi Lăng'),
(407, 37, 'Đình Lập'),
(408, 37, 'Hữu Lũng'),
(409, 37, 'Lạng Sơn'),
(410, 37, 'Lộc Bình'),
(411, 37, 'Tràng Định'),
(412, 37, 'Vãn Lãng'),
(413, 37, 'Văn Quan'),
(414, 38, 'Bảo Thắng'),
(415, 38, 'Bảo Yên'),
(416, 38, 'Bát Xát'),
(417, 38, 'Bắc Hà'),
(418, 38, 'Lào Cai'),
(419, 38, 'Mường Khương'),
(420, 38, 'Sa Pa'),
(421, 38, 'Si Ma Cai'),
(422, 38, 'Văn Bàn'),
(423, 39, 'Bến Lức'),
(424, 39, 'Cần Đước'),
(425, 39, 'Cần Giuộc'),
(426, 39, 'Châu Thành'),
(427, 39, 'Đức Hòa'),
(428, 39, 'Đức Huệ'),
(429, 39, 'Kiến Tường'),
(430, 39, 'Mộc Hóa'),
(431, 39, 'Tân An'),
(432, 39, 'Tân Hưng'),
(433, 39, 'Tân Thạnh'),
(434, 39, 'Tân Trụ'),
(435, 39, 'Thạnh Hóa'),
(436, 39, 'Thủ Thừa'),
(437, 39, 'Vĩnh Hưng'),
(438, 40, 'Giao Thủy'),
(439, 40, 'Hải Hậu'),
(440, 40, 'Mỹ Lộc'),
(441, 40, 'Nam Định'),
(442, 40, 'Nam Trực'),
(443, 40, 'Nghĩa Hưng'),
(444, 40, 'Trực Ninh'),
(445, 40, 'Vụ Bản'),
(446, 40, 'Xuân Trường'),
(447, 40, 'Ý Yên'),
(448, 41, 'Anh Sơn'),
(449, 41, 'Con Cuông'),
(450, 41, 'Cửa Lò'),
(451, 41, 'Diễn Châu'),
(452, 41, 'Đô Lương'),
(453, 41, 'Hoàng Mai'),
(454, 41, 'Hưng Nguyên'),
(455, 41, 'Kỳ Sơn'),
(456, 41, 'Nam Đàn'),
(457, 41, 'Nghi Lộc'),
(458, 41, 'Nghĩa Đàn'),
(459, 41, 'Quế Phong'),
(460, 41, 'Quỳ Châu'),
(461, 41, 'Quỳ Hợp'),
(462, 41, 'Quỳnh Lưu'),
(463, 41, 'Tân Kỳ'),
(464, 41, 'Thái Hòa'),
(465, 41, 'Thanh Chương'),
(466, 41, 'Tương Dương'),
(467, 41, 'Vinh'),
(468, 41, 'Yên Thành'),
(469, 42, 'Gia Viễn'),
(470, 42, 'Hoa Lư'),
(471, 42, 'Kim Sơn'),
(472, 42, 'Nho Quan'),
(473, 42, 'Ninh Bình'),
(474, 42, 'Tam Điệp'),
(475, 42, 'Yên Khánh'),
(476, 42, 'Yên Mô'),
(477, 43, 'Bác Ái'),
(478, 43, 'Ninh Hải'),
(479, 43, 'Ninh Phước'),
(480, 43, 'Ninh Sơn'),
(481, 43, 'Phan Rang-Tháp Chàm'),
(482, 43, 'Thuận Bắc'),
(483, 43, 'Thuận Nam'),
(484, 44, 'Cẩm Khê'),
(485, 44, 'Đoan Hùng'),
(486, 44, 'Hạ Hòa'),
(487, 44, 'Lâm Thao'),
(488, 44, 'Phú Thọ'),
(489, 44, 'Phù Ninh'),
(490, 44, 'Tam Nông'),
(491, 44, 'Tân Sơn'),
(492, 44, 'Thanh Ba'),
(493, 44, 'Thanh Sơn'),
(494, 44, 'Thanh Thủy'),
(495, 44, 'Việt Trì'),
(496, 44, 'Yên Lập'),
(497, 45, 'Đông Hòa'),
(498, 45, 'Đồng Xuân'),
(499, 45, 'Phú Hòa'),
(500, 45, 'Sông Cầu'),
(501, 45, 'Sông Hinh'),
(502, 45, 'Sơn Hòa'),
(503, 45, 'Tây Hòa'),
(504, 45, 'Tuy An'),
(505, 45, 'Tuy Hòa'),
(506, 46, 'Bố Trạch'),
(507, 46, 'Đồng Hới'),
(508, 46, 'Lệ Thủy'),
(509, 46, 'Minh Hóa'),
(510, 46, 'Quảng Ninh'),
(511, 46, 'Quảng Trạch'),
(512, 46, 'Tuyên Hóa'),
(513, 47, 'Bắc Trà My'),
(514, 47, 'Duy Xuyên'),
(515, 47, 'Đại Lộc'),
(516, 47, 'Điện Bàn'),
(517, 47, 'Đông Giang'),
(518, 47, 'Hiệp Đức'),
(519, 47, 'Hội An'),
(520, 47, 'Nam Giang'),
(521, 47, 'Nam Trà My'),
(522, 47, 'Nông Sơn'),
(523, 47, 'Núi Thành'),
(524, 47, 'Phú Ninh'),
(525, 47, 'Phước Sơn'),
(526, 47, 'Quế Sơn'),
(527, 47, 'Tam Kỳ'),
(528, 47, 'Tây Giang'),
(529, 47, 'Thăng Bình'),
(530, 47, 'Tiên Phước'),
(531, 48, 'Ba Tơ'),
(532, 48, 'Bình Sơn'),
(533, 48, 'Đức Phổ'),
(534, 48, 'Lý Sơn'),
(535, 48, 'Minh Long'),
(536, 48, 'Mộ Đức'),
(537, 48, 'Nghĩa Hành'),
(538, 48, 'Quảng Ngãi'),
(539, 48, 'Sơn Hà'),
(540, 48, 'Sơn Tây'),
(541, 48, 'Sơn Tịnh'),
(542, 48, 'Tây Trà'),
(543, 48, 'Trà Bồng'),
(544, 48, 'Tư Nghĩa'),
(545, 49, 'Ba Chẽ'),
(546, 49, 'Bình Liêu'),
(547, 49, 'Cẩm Phả'),
(548, 49, 'Cô Tô'),
(549, 49, 'Đầm Hà'),
(550, 49, 'Đông Triều'),
(551, 49, 'Hạ Long'),
(552, 49, 'Hải Hà'),
(553, 49, 'Hoành Bồ'),
(554, 49, 'Móng Cái'),
(555, 49, 'Quảng Yên'),
(556, 49, 'Tiên Yên'),
(557, 49, 'Uông Bí'),
(558, 49, 'Vân Đồn'),
(559, 50, 'Cam Lộ'),
(560, 50, 'Cồn Cỏ'),
(561, 50, 'Đa Krông'),
(562, 50, 'Đông Hà'),
(563, 50, 'Gio Linh'),
(564, 50, 'Hải Lăng'),
(565, 50, 'Hướng Hóa'),
(566, 50, 'Quảng Trị'),
(567, 50, 'Triệu Phong'),
(568, 50, 'Vĩnh Linh'),
(569, 51, 'Châu Thành'),
(570, 51, 'Cù Lao Dung'),
(571, 51, 'Kế Sách'),
(572, 51, 'Long Phú'),
(573, 51, 'Mỹ Tú'),
(574, 51, 'Mỹ Xuyên'),
(575, 51, 'Ngã Năm'),
(576, 51, 'Sóc Trăng'),
(577, 51, 'Thạnh Trị'),
(578, 51, 'Trần Đề'),
(579, 51, 'Vĩnh Châu'),
(580, 52, 'Bắc Yên'),
(581, 52, 'Mai Sơn'),
(582, 52, 'Mộc Châu'),
(583, 52, 'Mường La'),
(584, 52, 'Phù Yên'),
(585, 52, 'Quỳnh Nhai'),
(586, 52, 'Sông Mã'),
(587, 52, 'Sốp Cộp'),
(588, 52, 'Sơn La'),
(589, 52, 'Thuận Châu'),
(590, 52, 'Vân Hồ'),
(591, 52, 'Yên Châu'),
(592, 53, 'Bến Cầu'),
(593, 53, 'Châu Thành'),
(594, 53, 'Dương Minh Châu'),
(595, 53, 'Gò Dầu'),
(596, 53, 'Hòa Thành'),
(597, 53, 'Tân Biên'),
(598, 53, 'Tân Châu'),
(599, 53, 'Tây Ninh'),
(600, 53, 'Trảng Bàng'),
(601, 54, 'Đông Hưng'),
(602, 54, 'Hưng Hà'),
(603, 54, 'Kiến Xương'),
(604, 54, 'Quỳnh Phụ'),
(605, 54, 'Thái Bình'),
(606, 54, 'Thái Thụy'),
(607, 54, 'Tiền Hải'),
(608, 54, 'Vũ Thư'),
(609, 55, 'Đại Từ'),
(610, 55, 'Định Hóa'),
(611, 55, 'Đồng Hỷ'),
(612, 55, 'Phổ Yên'),
(613, 55, 'Phú Bình'),
(614, 55, 'Phú Lương'),
(615, 55, 'Sông Công'),
(616, 55, 'Thái Nguyên'),
(617, 55, 'Võ Nhai'),
(618, 56, 'Bá Thước'),
(619, 56, 'Bỉm Sơn'),
(620, 56, 'Cẩm Thủy'),
(621, 56, 'Đông Sơn'),
(622, 56, 'Hà Trung'),
(623, 56, 'Hậu Lộc'),
(624, 56, 'Hoằng Hóa'),
(625, 56, 'Lang Chánh'),
(626, 56, 'Mường Lát'),
(627, 56, 'Nga Sơn'),
(628, 56, 'Ngọc Lặc'),
(629, 56, 'Như Thanh'),
(630, 56, 'Như Xuân'),
(631, 56, 'Nông Cống'),
(632, 56, 'Quan Hóa'),
(633, 56, 'Quan Sơn'),
(634, 56, 'Quảng Xương'),
(635, 56, 'Sầm Sơn'),
(636, 56, 'Thạch Thành'),
(637, 56, 'Thanh Hóa'),
(638, 56, 'Thiệu Hóa'),
(639, 56, 'Thọ Xuân'),
(640, 56, 'Thường Xuân'),
(641, 56, 'Tĩnh Gia'),
(642, 56, 'Triệu Sơn'),
(643, 56, 'Vĩnh Lộc'),
(644, 56, 'Yên Định'),
(645, 57, 'Cai Lậy'),
(646, 57, 'Cái Bè'),
(647, 57, 'Châu Thành'),
(648, 57, 'Chợ Gạo'),
(649, 57, 'Gò Công'),
(650, 57, 'Gò Công Đông'),
(651, 57, 'Gò Công Tây'),
(652, 57, 'Mỹ Tho'),
(653, 57, 'Tân Phú Đông'),
(654, 57, 'Tân Phước'),
(655, 58, 'Càng Long'),
(656, 58, 'Cầu Kè'),
(657, 58, 'Cầu Ngang'),
(658, 58, 'Châu Thành'),
(659, 58, 'Duyên Hải'),
(660, 58, 'Tiểu Cần'),
(661, 58, 'Trà Cú'),
(662, 58, 'Trà Vinh'),
(663, 59, 'Chiêm Hóa'),
(664, 59, 'Hàm Yên'),
(665, 59, 'Lâm Bình'),
(666, 59, 'Na Hang'),
(667, 59, 'Sơn Dương'),
(668, 59, 'Tuyên Quang'),
(669, 59, 'Yên Sơn'),
(670, 60, 'Bình Minh'),
(671, 60, 'Bình Tân'),
(672, 60, 'Long Hồ'),
(673, 60, 'Mang Thít'),
(674, 60, 'Tam Bình'),
(675, 60, 'Trà Ôn'),
(676, 60, 'Vĩnh Long'),
(677, 60, 'Vũng Liêm'),
(678, 61, 'Bình Xuyên'),
(679, 61, 'Lập Thạch'),
(680, 61, 'Phúc Yên'),
(681, 61, 'Sông Lô'),
(682, 61, 'Tam Dương'),
(683, 61, 'Tam Đảo'),
(684, 61, 'Vĩnh Tường'),
(685, 61, 'Vĩnh Yên'),
(686, 61, 'Yên Lạc'),
(687, 62, 'Tân Thành'),
(688, 62, 'Vũng Tàu'),
(689, 62, 'Xuyên Mộc'),
(690, 62, 'Bà Rịa'),
(691, 62, 'Châu Đức'),
(692, 62, 'Côn Đảo'),
(693, 62, 'Đất Đỏ'),
(694, 62, 'Long Điền'),
(695, 63, 'Lục Yên'),
(696, 63, 'Mù Căng Chải'),
(697, 63, 'Nghĩa Lộ'),
(698, 63, 'Trạm Tấu'),
(699, 63, 'Trấn Yên'),
(700, 63, 'Văn Chấn'),
(701, 63, 'Văn Yên'),
(702, 63, 'Yên Bái'),
(703, 63, 'Yên Bình');

-- --------------------------------------------------------

--
-- Table structure for table `list_project`
--

CREATE TABLE IF NOT EXISTS `list_project` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `province` int(11) NOT NULL,
  `district` int(11) NOT NULL,
  `management_company` bigint(20) NOT NULL,
  `management_fee` bigint(20) NOT NULL,
  `oto_fee` bigint(20) NOT NULL,
  `cable_tv` text NOT NULL,
  `internet` text NOT NULL,
  `gas` text NOT NULL,
  `address` text NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `investor` bigint(20) NOT NULL,
  `design_company` bigint(20) NOT NULL,
  `number_floors` text NOT NULL,
  `total_area` int(11) NOT NULL,
  `apartment_types` text NOT NULL,
  `transfer_year` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `list_project`
--

INSERT INTO `list_project` (`ID`, `name`, `province`, `district`, `management_company`, `management_fee`, `oto_fee`, `cable_tv`, `internet`, `gas`, `address`, `latitude`, `longitude`, `investor`, `design_company`, `number_floors`, `total_area`, `apartment_types`, `transfer_year`) VALUES
(1, 'Times City', 1, 1, 1, 5000, 800000, 'Chưa có', 'Chưa có', 'Gas bình hoặc bếp điện từ', '102 Đường Trường Chinh, Đống Đa, Hà Nội', 21.000618, 105.829496, 1, 1, '3', 5026, 'Loại căn hộ', 2014);

-- --------------------------------------------------------

--
-- Table structure for table `list_province`
--

CREATE TABLE IF NOT EXISTS `list_province` (
  `id_province` int(11) NOT NULL,
  `name_province` text CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_province`
--

INSERT INTO `list_province` (`id_province`, `name_province`) VALUES
(1, 'Hà Nội'),
(2, 'Hồ Chí Minh'),
(3, 'Đà Nẵng'),
(4, 'An Giang'),
(5, 'Bắc Giang'),
(6, 'Bắc Kạn'),
(7, 'Bạc Liêu'),
(8, 'Bắc Ninh'),
(9, 'Bến Tre'),
(10, 'Bình Định'),
(11, 'Bình Dương'),
(12, 'Bình Phước'),
(13, 'Bình Thuận'),
(14, 'Cà Mau'),
(15, 'Cần Thơ'),
(16, 'Cao Bằng'),
(17, 'Đăk Lăk'),
(18, 'Đăk Nông'),
(19, 'Điện Biên'),
(20, 'Đồng Nai'),
(21, 'Đồng Tháp'),
(22, 'Gia Lai'),
(23, 'Hà Giang'),
(24, 'Hà Nam'),
(25, 'Hà Tĩnh'),
(26, 'Hải Dương'),
(27, 'Hải Phòng'),
(28, 'Hậu Giang'),
(29, 'Hoà Bình'),
(30, 'Huế'),
(31, 'Hưng Yên'),
(32, 'Khánh Hòa'),
(33, 'Kiên Giang'),
(34, 'Kon Tum'),
(35, 'Lai Châu'),
(36, 'Lâm Đồng'),
(37, 'Lạng Sơn'),
(38, 'Lào Cai'),
(39, 'Long An'),
(40, 'Nam Định'),
(41, 'Nghệ An'),
(42, 'Ninh Bình'),
(43, 'Ninh Thuận'),
(44, 'Phú Thọ'),
(45, 'Phú Yên'),
(46, 'Quảng Bình'),
(47, 'Quảng Nam'),
(48, 'Quảng Ngãi'),
(49, 'Quảng Ninh'),
(50, 'Quảng Trị'),
(51, 'Sóc Trăng'),
(52, 'Sơn La'),
(53, 'Tây Ninh'),
(54, 'Thái Bình'),
(55, 'Thái Nguyên'),
(56, 'Thanh Hóa'),
(57, 'Tiền Giang'),
(58, 'Trà Vinh'),
(59, 'Tuyên Quang'),
(60, 'Vĩnh Long'),
(61, 'Vĩnh Phúc'),
(62, 'Vũng Tàu'),
(63, 'Yên Bái');

-- --------------------------------------------------------

--
-- Table structure for table `list_utilities`
--

CREATE TABLE IF NOT EXISTS `list_utilities` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `list_utilities`
--

INSERT INTO `list_utilities` (`ID`, `name`) VALUES
(1, 'Phòng gym'),
(2, 'Phòng Yoga'),
(3, 'Bể bơi'),
(4, 'Sân chơi trẻ em'),
(5, 'Trung tâm thương mại'),
(6, 'Nhà hàng'),
(7, 'Quán cafe');

-- --------------------------------------------------------

--
-- Table structure for table `management_company`
--

CREATE TABLE IF NOT EXISTS `management_company` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `management_company`
--

INSERT INTO `management_company` (`ID`, `name`) VALUES
(1, 'CBRE');

-- --------------------------------------------------------

--
-- Table structure for table `reason_report`
--

CREATE TABLE IF NOT EXISTS `reason_report` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `reason_report`
--

INSERT INTO `reason_report` (`ID`, `name`) VALUES
(1, 'Tin sai chuyên mục'),
(2, 'Không có thông tin liên hệ'),
(3, 'Đăng tin sai quy định'),
(4, 'Đăng tin khống');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `target_id` bigint(20) NOT NULL,
  `target_type` bigint(20) NOT NULL,
  `email` text NOT NULL,
  `reason` int(11) NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`ID`, `target_id`, `target_type`, `email`, `reason`, `content`) VALUES
(1, 1, 1, 'longphikhac@gmail.com', 3, 'nội dung'),
(3, 1, 2, 'khacphilong@gmail.com', 2, 'Noi dung phan hoi can ho'),
(4, 1, 2, 'longphikhac@gmail.com', 2, 'abc'),
(5, 1, 1, 'longkhac@gmail.com', 3, 'abcaxa'),
(6, 1, 2, 'longkhac@gmail.com', 4, 'abcsebz');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `user_type` int(11) NOT NULL DEFAULT '1',
  `first_name` text CHARACTER SET utf8 NOT NULL,
  `last_name` text CHARACTER SET utf8 NOT NULL,
  `full_name` text CHARACTER SET utf8 NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` text NOT NULL,
  `gcm_regid` text NOT NULL,
  `apn_regid` text NOT NULL,
  `password_hash` varchar(256) NOT NULL,
  `api_key` text NOT NULL,
  `image` text CHARACTER SET utf8 NOT NULL,
  `cover_image` text NOT NULL,
  `gender` text CHARACTER SET utf8 NOT NULL,
  `birth_date` date NOT NULL,
  `address` varchar(256) NOT NULL,
  `city` text CHARACTER SET utf8 NOT NULL,
  `country` varchar(256) NOT NULL,
  `state` varchar(256) NOT NULL,
  `zip` varchar(256) NOT NULL,
  `phone` varchar(256) NOT NULL,
  `active_key` varchar(256) NOT NULL,
  `salt` varchar(256) NOT NULL,
  `password_strategy` varchar(255) NOT NULL,
  `requires_new_password` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_seen` int(11) NOT NULL,
  `os` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `first_name`, `last_name`, `full_name`, `username`, `email`, `gcm_regid`, `apn_regid`, `password_hash`, `api_key`, `image`, `cover_image`, `gender`, `birth_date`, `address`, `city`, `country`, `state`, `zip`, `phone`, `active_key`, `salt`, `password_strategy`, `requires_new_password`, `timestamp`, `last_seen`, `os`) VALUES
(1, 1, '', '', 'Nguyễn Khắc Phi Long', '100000245208403@facebook', 'khacphilong@gmail.com', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '01674659037', '', '', '', '', '2015-05-06 17:21:59', 0, 1),
(3, 1, '', '', 'Nguyễn Khắc Phi Long', '1024055077612656@facebook', 'khacphilong@gmail.com', 'APA91bEW0ME2ArOZIBeofi1gkjMIloKM_xFRoy3he3xwC7GjA-q1YiLhQU7YRXNt3jBvsxMtchxyF8YJ7dLpBbwbqQMIAPLTwawiUSXYQlPld4ODFc2bjG_CGeaJnVN-AylrRu_NIQQu', '', '$2a$10$434c0148f96e39f5e10ebubU7JjhYu6P5i8T2Wuv.Om3u6lu9Dt6e', '02a4f71fd721c3e5b1532aec25ce1a4e', 'https://graph.facebook.com/1024055077612656/picture?width=160&height=160', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '2015-06-09 08:00:24', 1435482186, 2),
(9, 1, '', '', 'Nguyễn Khắc Phi Long', '112564176262507617201@google', 'khacphilong@gmail.com', 'APA91bHF3Vl8FHbXQnxPqWlcDVYx6SYxV9km5aapc5rJSJnKFIvbuo_0ayJK0g0b80521hpAyqq3eJjzwvbgmpDqo0pkDmPRcLEWBSqXQ-ahpz-mMxGpb1oihy_qGYdlQwOIGbLl8JBj', '', '$2a$10$07fcd004f7f345419b509euplBzX7WiLkiEgeRMQ2CMukELC8qenK', '4369991cc6c4ab50f995374309814f4d', 'https://lh5.googleusercontent.com/-H1sM6Sx3Q8E/AAAAAAAAAAI/AAAAAAAAAGg/ZFQBDLlnyf8/photo.jpg', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '2015-06-09 08:49:22', 1435482846, 2),
(10, 1, '', '', 'Khac Long', 'longphikhac@hometo', 'longphikhac@gmail.com', 'APA91bEW0ME2ArOZIBeofi1gkjMIloKM_xFRoy3he3xwC7GjA-q1YiLhQU7YRXNt3jBvsxMtchxyF8YJ7dLpBbwbqQMIAPLTwawiUSXYQlPld4ODFc2bjG_CGeaJnVN-AylrRu_NIQQu', '', '$2a$10$06c1c19b228b7c8167d79u9i9Kkk44/2biuMqlmm5HE47JgPDlF7S', '27d750ccfd278302ae934ce3652ca3b9', 'http://timtro.vn/images/upload/no_avata_facebook.png', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '2015-06-09 10:01:02', 1433844062, 1);

-- --------------------------------------------------------

--
-- Table structure for table `utilities`
--

CREATE TABLE IF NOT EXISTS `utilities` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `project` bigint(20) NOT NULL,
  `image` text NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `utilities`
--

INSERT INTO `utilities` (`ID`, `type`, `project`, `image`, `description`) VALUES
(3, 1, 1, 'gym1.jpg', 'Gym1 description here'),
(4, 1, 1, 'gym2.jpg', 'Gym2 description here'),
(5, 1, 1, 'gym3.jpg', 'Gym3 description here'),
(6, 2, 1, 'yoga1.jpg', 'Yoga1 desciption here'),
(7, 3, 1, 'pool1.jpg', ''),
(8, 5, 1, 'market1.jpg', ''),
(9, 6, 1, 'restaurant1.jpg', ''),
(10, 7, 1, 'coffe1.jpg', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
