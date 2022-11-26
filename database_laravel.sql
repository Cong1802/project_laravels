-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 25, 2022 lúc 10:31 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `database_laravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `city2`
--

CREATE TABLE `city2` (
  `cit_id` int(11) NOT NULL,
  `cit_name` varchar(255) DEFAULT NULL,
  `cit_order` int(11) NOT NULL DEFAULT 0,
  `cit_type` int(11) DEFAULT NULL,
  `cit_count` int(11) DEFAULT 0,
  `cit_parent` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `city2`
--

INSERT INTO `city2` (`cit_id`, `cit_name`, `cit_order`, `cit_type`, `cit_count`, `cit_parent`) VALUES
(1, 'Hà Nội', 10, 1, 4289, 0),
(2, 'Hải Phòng', 0, 1, 76, 0),
(3, 'Bắc Giang', 0, 1, 52, 0),
(4, 'Bắc Kạn', 0, 1, 2, 0),
(5, 'Bắc Ninh', 7, 1, 85, 0),
(6, 'Cao Bằng', 0, 1, 9, 0),
(7, 'Điện Biên', 0, 1, 11, 0),
(8, 'Hòa Bình', 0, 1, 22, 0),
(9, 'Hải Dương', 3, 1, 33, 0),
(10, 'Hà Giang', 0, 1, 6, 0),
(11, 'Hà Nam', 0, 1, 60, 0),
(12, 'Hưng Yên', 5, 1, 76, 0),
(13, 'Lào Cai', 0, 1, 20, 0),
(14, 'Lai Châu', 0, 1, 6, 0),
(15, 'Lạng Sơn', 0, 1, 5, 0),
(16, 'Ninh Bình', 0, 1, 11, 0),
(17, 'Nam Định', 0, 1, 26, 0),
(18, 'Phú Thọ', 0, 1, 20, 0),
(19, 'Quảng Ninh', 0, 1, 38, 0),
(20, 'Sơn La', 0, 1, 6, 0),
(21, 'Thái Bình', 0, 1, 16, 0),
(22, 'Thái Nguyên', 0, 1, 19, 0),
(23, 'Tuyên Quang', 0, 1, 6, 0),
(24, 'Vĩnh Phúc', 0, 1, 63, 0),
(25, 'Yên Bái', 0, 1, 3, 0),
(26, 'Đà Nẵng', 0, 2, 126, 0),
(27, 'Thừa Thiên Huế', 0, 2, 1, 0),
(28, 'Khánh Hòa', 0, 2, 51, 0),
(29, 'Lâm Đồng', 0, 2, 15, 0),
(30, 'Bình Định', 0, 2, 27, 0),
(31, 'Bình Thuận', 0, 2, 11, 0),
(32, 'Đắk Lắk', 0, 2, 17, 0),
(33, 'Đắk Nông', 0, 2, 2, 0),
(34, 'Gia Lai', 0, 2, 7, 0),
(35, 'Hà Tĩnh', 0, 2, 23, 0),
(36, 'Kon Tum', 0, 2, 4, 0),
(37, 'Nghệ An', 0, 2, 34, 0),
(38, 'Ninh Thuận', 0, 2, 0, 0),
(39, 'Phú Yên', 0, 2, 18, 0),
(40, 'Quảng Bình', 0, 2, 12, 0),
(41, 'Quảng Nam', 0, 2, 12, 0),
(42, 'Quảng Ngãi', 0, 2, 2, 0),
(43, 'Quảng Trị', 0, 2, 13, 0),
(44, 'Thanh Hóa', 0, 2, 32, 0),
(45, 'Hồ Chí Minh', 9, 3, 4013, 0),
(46, 'Bình Dương', 8, 3, 376, 0),
(47, 'Bà Rịa Vũng Tàu', 0, 3, 9, 0),
(48, 'Cần Thơ', 0, 3, 32, 0),
(49, 'An Giang', 0, 3, 17, 0),
(50, 'Bạc Liêu', 0, 3, 17, 0),
(51, 'Bình Phước', 0, 3, 18, 0),
(52, 'Bến Tre', 0, 3, 6, 0),
(53, 'Cà Mau', 0, 3, 4, 0),
(54, 'Đồng Tháp', 0, 3, 22, 0),
(55, 'Đồng Nai', 6, 3, 188, 0),
(56, 'Hậu Giang', 0, 3, 4, 0),
(57, 'Kiên Giang', 0, 3, 13, 0),
(58, 'Long An', 4, 3, 75, 0),
(59, 'Sóc Trăng', 0, 3, 13, 0),
(60, 'Tiền Giang', 0, 3, 21, 0),
(61, 'Tây Ninh', 0, 3, 21, 0),
(62, 'Trà Vinh', 0, 3, 6, 0),
(63, 'Vĩnh Long', 0, 3, 4, 0),
(66, 'Quận Ba Đình', 0, NULL, 0, 1),
(67, 'Quận Hoàn Kiếm', 0, NULL, 0, 1),
(68, 'Quận Tây Hồ', 0, NULL, 0, 1),
(69, 'Quận Long Biên', 0, NULL, 0, 1),
(70, 'Quận Cầu Giấy', 0, NULL, 0, 1),
(71, 'Quận Đống Đa', 0, NULL, 0, 1),
(72, 'Quận Hai Bà Trưng', 0, NULL, 0, 1),
(73, 'Quận Hoàng Mai', 0, NULL, 0, 1),
(74, 'Quận Thanh Xuân', 0, NULL, 0, 1),
(75, 'Huyện Sóc Sơn', 0, NULL, 0, 1),
(76, 'Huyện Đông Anh', 0, NULL, 0, 1),
(77, 'Huyện Gia Lâm', 0, NULL, 0, 1),
(78, 'Quận Nam Từ Liêm', 0, NULL, 0, 1),
(79, 'Huyện Thanh Trì', 0, NULL, 0, 1),
(80, 'Quận Bắc Từ Liêm', 0, NULL, 0, 1),
(81, 'Huyện Mê Linh', 0, NULL, 0, 1),
(82, 'Quận Hà Đông', 0, NULL, 0, 1),
(83, 'Thị xã Sơn Tây', 0, NULL, 0, 1),
(84, 'Huyện Ba Vì', 0, NULL, 0, 1),
(85, 'Huyện Phúc Thọ', 0, NULL, 0, 1),
(86, 'Huyện Đan Phượng', 0, NULL, 0, 1),
(87, 'Huyện Hoài Đức', 0, NULL, 0, 1),
(88, 'Huyện Quốc Oai', 0, NULL, 0, 1),
(89, 'Huyện Thạch Thất', 0, NULL, 0, 1),
(90, 'Huyện Chương Mỹ', 0, NULL, 0, 1),
(91, 'Huyện Thanh Oai', 0, NULL, 0, 1),
(92, 'Huyện Thường Tín', 0, NULL, 0, 1),
(93, 'Huyện Phú Xuyên', 0, NULL, 0, 1),
(94, 'Huyện Ứng Hòa', 0, NULL, 0, 1),
(95, 'Huyện Mỹ Đức', 0, NULL, 0, 1),
(96, 'Thành phố Hà Giang', 0, NULL, 0, 10),
(97, 'Huyện Đồng Văn', 0, NULL, 0, 10),
(98, 'Huyện Mèo Vạc', 0, NULL, 0, 10),
(99, 'Huyện Yên Minh', 0, NULL, 0, 10),
(100, 'Huyện Quản Bạ', 0, NULL, 0, 10),
(101, 'Huyện Vị Xuyên', 0, NULL, 0, 10),
(102, 'Huyện Bắc Mê', 0, NULL, 0, 10),
(103, 'Huyện Hoàng Su Phì', 0, NULL, 0, 10),
(104, 'Huyện Xín Mần', 0, NULL, 0, 10),
(105, 'Huyện Bắc Quang', 0, NULL, 0, 10),
(106, 'Huyện Quang Bình', 0, NULL, 0, 10),
(107, 'Thành phố Cao Bằng', 0, NULL, 0, 6),
(108, 'Huyện Bảo Lâm', 0, NULL, 0, 6),
(109, 'Huyện Bảo Lạc', 0, NULL, 0, 6),
(110, 'Huyện Thông Nông', 0, NULL, 0, 6),
(111, 'Huyện Hà Quảng', 0, NULL, 0, 6),
(112, 'Huyện Trà Lĩnh', 0, NULL, 0, 6),
(113, 'Huyện Trùng Khánh', 0, NULL, 0, 6),
(114, 'Huyện Hạ Lang', 0, NULL, 0, 6),
(115, 'Huyện Quảng Uyên', 0, NULL, 0, 6),
(116, 'Huyện Phục Hoà', 0, NULL, 0, 6),
(117, 'Huyện Hoà An', 0, NULL, 0, 6),
(118, 'Huyện Nguyên Bình', 0, NULL, 0, 6),
(119, 'Huyện Thạch An', 0, NULL, 0, 6),
(120, 'Thành Phố Bắc Kạn', 0, NULL, 0, 4),
(121, 'Huyện Pác Nặm', 0, NULL, 0, 4),
(122, 'Huyện Ba Bể', 0, NULL, 0, 4),
(123, 'Huyện Ngân Sơn', 0, NULL, 0, 4),
(124, 'Huyện Bạch Thông', 0, NULL, 0, 4),
(125, 'Huyện Chợ Đồn', 0, NULL, 0, 4),
(126, 'Huyện Chợ Mới', 0, NULL, 0, 4),
(127, 'Huyện Na Rì', 0, NULL, 0, 4),
(128, 'Thành phố Tuyên Quang', 0, NULL, 0, 23),
(129, 'Huyện Lâm Bình', 0, NULL, 0, 23),
(130, 'Huyện Nà Hang', 0, NULL, 0, 23),
(131, 'Huyện Chiêm Hóa', 0, NULL, 0, 23),
(132, 'Huyện Hàm Yên', 0, NULL, 0, 23),
(133, 'Huyện Yên Sơn', 0, NULL, 0, 23),
(134, 'Huyện Sơn Dương', 0, NULL, 0, 23),
(135, 'Thành phố Lào Cai', 0, NULL, 0, 13),
(136, 'Huyện Bát Xát', 0, NULL, 0, 13),
(137, 'Huyện Mường Khương', 0, NULL, 0, 13),
(138, 'Huyện Si Ma Cai', 0, NULL, 0, 13),
(139, 'Huyện Bắc Hà', 0, NULL, 0, 13),
(140, 'Huyện Bảo Thắng', 0, NULL, 0, 13),
(141, 'Huyện Bảo Yên', 0, NULL, 0, 13),
(142, 'Thị xã Sa Pa', 0, NULL, 0, 13),
(143, 'Huyện Văn Bàn', 0, NULL, 0, 13),
(144, 'Thành phố Điện Biên Phủ', 0, NULL, 0, 7),
(145, 'Thị Xã Mường Lay', 0, NULL, 0, 7),
(146, 'Huyện Mường Nhé', 0, NULL, 0, 7),
(147, 'Huyện Mường Chà', 0, NULL, 0, 7),
(148, 'Huyện Tủa Chùa', 0, NULL, 0, 7),
(149, 'Huyện Tuần Giáo', 0, NULL, 0, 7),
(150, 'Huyện Điện Biên', 0, NULL, 0, 7),
(151, 'Huyện Điện Biên Đông', 0, NULL, 0, 7),
(152, 'Huyện Mường Ảng', 0, NULL, 0, 7),
(153, 'Huyện Nậm Pồ', 0, NULL, 0, 7),
(154, 'Thành phố Lai Châu', 0, NULL, 0, 14),
(155, 'Huyện Tam Đường', 0, NULL, 0, 14),
(156, 'Huyện Mường Tè', 0, NULL, 0, 14),
(157, 'Huyện Sìn Hồ', 0, NULL, 0, 14),
(158, 'Huyện Phong Thổ', 0, NULL, 0, 14),
(159, 'Huyện Than Uyên', 0, NULL, 0, 14),
(160, 'Huyện Tân Uyên', 0, NULL, 0, 14),
(161, 'Huyện Nậm Nhùn', 0, NULL, 0, 14),
(162, 'Thành phố Sơn La', 0, NULL, 0, 20),
(163, 'Huyện Quỳnh Nhai', 0, NULL, 0, 20),
(164, 'Huyện Thuận Châu', 0, NULL, 0, 20),
(165, 'Huyện Mường La', 0, NULL, 0, 20),
(166, 'Huyện Bắc Yên', 0, NULL, 0, 20),
(167, 'Huyện Phù Yên', 0, NULL, 0, 20),
(168, 'Huyện Mộc Châu', 0, NULL, 0, 20),
(169, 'Huyện Yên Châu', 0, NULL, 0, 20),
(170, 'Huyện Mai Sơn', 0, NULL, 0, 20),
(171, 'Huyện Sông Mã', 0, NULL, 0, 20),
(172, 'Huyện Sốp Cộp', 0, NULL, 0, 20),
(173, 'Huyện Vân Hồ', 0, NULL, 0, 20),
(174, 'Thành phố Yên Bái', 0, NULL, 0, 25),
(175, 'Thị xã Nghĩa Lộ', 0, NULL, 0, 25),
(176, 'Huyện Lục Yên', 0, NULL, 0, 25),
(177, 'Huyện Văn Yên', 0, NULL, 0, 25),
(178, 'Huyện Mù Căng Chải', 0, NULL, 0, 25),
(179, 'Huyện Trấn Yên', 0, NULL, 0, 25),
(180, 'Huyện Trạm Tấu', 0, NULL, 0, 25),
(181, 'Huyện Văn Chấn', 0, NULL, 0, 25),
(182, 'Huyện Yên Bình', 0, NULL, 0, 25),
(183, 'Thành phố Hòa Bình', 0, NULL, 0, 8),
(184, 'Huyện Đà Bắc', 0, NULL, 0, 8),
(185, 'Huyện Kỳ Sơn', 0, NULL, 0, 8),
(186, 'Huyện Lương Sơn', 0, NULL, 0, 8),
(187, 'Huyện Kim Bôi', 0, NULL, 0, 8),
(188, 'Huyện Cao Phong', 0, NULL, 0, 8),
(189, 'Huyện Tân Lạc', 0, NULL, 0, 8),
(190, 'Huyện Mai Châu', 0, NULL, 0, 8),
(191, 'Huyện Lạc Sơn', 0, NULL, 0, 8),
(192, 'Huyện Yên Thủy', 0, NULL, 0, 8),
(193, 'Huyện Lạc Thủy', 0, NULL, 0, 8),
(194, 'Thành phố Thái Nguyên', 0, NULL, 0, 22),
(195, 'Thành phố Sông Công', 0, NULL, 0, 22),
(196, 'Huyện Định Hóa', 0, NULL, 0, 22),
(197, 'Huyện Phú Lương', 0, NULL, 0, 22),
(198, 'Huyện Đồng Hỷ', 0, NULL, 0, 22),
(199, 'Huyện Võ Nhai', 0, NULL, 0, 22),
(200, 'Huyện Đại Từ', 0, NULL, 0, 22),
(201, 'Thị xã Phổ Yên', 0, NULL, 0, 22),
(202, 'Huyện Phú Bình', 0, NULL, 0, 22),
(203, 'Thành phố Lạng Sơn', 0, NULL, 0, 15),
(204, 'Huyện Tràng Định', 0, NULL, 0, 15),
(205, 'Huyện Bình Gia', 0, NULL, 0, 15),
(206, 'Huyện Văn Lãng', 0, NULL, 0, 15),
(207, 'Huyện Cao Lộc', 0, NULL, 0, 15),
(208, 'Huyện Văn Quan', 0, NULL, 0, 15),
(209, 'Huyện Bắc Sơn', 0, NULL, 0, 15),
(210, 'Huyện Hữu Lũng', 0, NULL, 0, 15),
(211, 'Huyện Chi Lăng', 0, NULL, 0, 15),
(212, 'Huyện Lộc Bình', 0, NULL, 0, 15),
(213, 'Huyện Đình Lập', 0, NULL, 0, 15),
(214, 'Thành phố Hạ Long', 0, NULL, 0, 19),
(215, 'Thành phố Móng Cái', 0, NULL, 0, 19),
(216, 'Thành phố Cẩm Phả', 0, NULL, 0, 19),
(217, 'Thành phố Uông Bí', 0, NULL, 0, 19),
(218, 'Huyện Bình Liêu', 0, NULL, 0, 19),
(219, 'Huyện Tiên Yên', 0, NULL, 0, 19),
(220, 'Huyện Đầm Hà', 0, NULL, 0, 19),
(221, 'Huyện Hải Hà', 0, NULL, 0, 19),
(222, 'Huyện Ba Chẽ', 0, NULL, 0, 19),
(223, 'Huyện Vân Đồn', 0, NULL, 0, 19),
(225, 'Thị xã Đông Triều', 0, NULL, 0, 19),
(226, 'Thị xã Quảng Yên', 0, NULL, 0, 19),
(227, 'Huyện Cô Tô', 0, NULL, 0, 19),
(228, 'Thành phố Bắc Giang', 0, NULL, 0, 3),
(229, 'Huyện Yên Thế', 0, NULL, 0, 3),
(230, 'Huyện Tân Yên', 0, NULL, 0, 3),
(231, 'Huyện Lạng Giang', 0, NULL, 0, 3),
(232, 'Huyện Lục Nam', 0, NULL, 0, 3),
(233, 'Huyện Lục Ngạn', 0, NULL, 0, 3),
(234, 'Huyện Sơn Động', 0, NULL, 0, 3),
(235, 'Huyện Yên Dũng', 0, NULL, 0, 3),
(236, 'Huyện Việt Yên', 0, NULL, 0, 3),
(237, 'Huyện Hiệp Hòa', 0, NULL, 0, 3),
(238, 'Thành phố Việt Trì', 0, NULL, 0, 18),
(239, 'Thị xã Phú Thọ', 0, NULL, 0, 18),
(240, 'Huyện Đoan Hùng', 0, NULL, 0, 18),
(241, 'Huyện Hạ Hoà', 0, NULL, 0, 18),
(242, 'Huyện Thanh Ba', 0, NULL, 0, 18),
(243, 'Huyện Phù Ninh', 0, NULL, 0, 18),
(244, 'Huyện Yên Lập', 0, NULL, 0, 18),
(245, 'Huyện Cẩm Khê', 0, NULL, 0, 18),
(246, 'Huyện Tam Nông', 0, NULL, 0, 18),
(247, 'Huyện Lâm Thao', 0, NULL, 0, 18),
(248, 'Huyện Thanh Sơn', 0, NULL, 0, 18),
(249, 'Huyện Thanh Thuỷ', 0, NULL, 0, 18),
(250, 'Huyện Tân Sơn', 0, NULL, 0, 18),
(251, 'Thành phố Vĩnh Yên', 0, NULL, 0, 24),
(252, 'Thành phố Phúc Yên', 0, NULL, 0, 24),
(253, 'Huyện Lập Thạch', 0, NULL, 0, 24),
(254, 'Huyện Tam Dương', 0, NULL, 0, 24),
(255, 'Huyện Tam Đảo', 0, NULL, 0, 24),
(256, 'Huyện Bình Xuyên', 0, NULL, 0, 24),
(257, 'Huyện Yên Lạc', 0, NULL, 0, 24),
(258, 'Huyện Vĩnh Tường', 0, NULL, 0, 24),
(259, 'Huyện Sông Lô', 0, NULL, 0, 24),
(260, 'Thành phố Bắc Ninh', 0, NULL, 0, 5),
(261, 'Huyện Yên Phong', 0, NULL, 0, 5),
(262, 'Huyện Quế Võ', 0, NULL, 0, 5),
(263, 'Huyện Tiên Du', 0, NULL, 0, 5),
(264, 'Thị xã Từ Sơn', 0, NULL, 0, 5),
(265, 'Huyện Thuận Thành', 0, NULL, 0, 5),
(266, 'Huyện Gia Bình', 0, NULL, 0, 5),
(267, 'Huyện Lương Tài', 0, NULL, 0, 5),
(268, 'Thành phố Hải Dương', 0, NULL, 0, 9),
(269, 'Thành phố Chí Linh', 0, NULL, 0, 9),
(270, 'Huyện Nam Sách', 0, NULL, 0, 9),
(271, 'Huyện Kinh Môn', 0, NULL, 0, 9),
(272, 'Huyện Kim Thành', 0, NULL, 0, 9),
(273, 'Huyện Thanh Hà', 0, NULL, 0, 9),
(274, 'Huyện Cẩm Giàng', 0, NULL, 0, 9),
(275, 'Huyện Bình Giang', 0, NULL, 0, 9),
(276, 'Huyện Gia Lộc', 0, NULL, 0, 9),
(277, 'Huyện Tứ Kỳ', 0, NULL, 0, 9),
(278, 'Huyện Ninh Giang', 0, NULL, 0, 9),
(279, 'Huyện Thanh Miện', 0, NULL, 0, 9),
(280, 'Quận Hồng Bàng', 0, NULL, 0, 2),
(281, 'Quận Ngô Quyền', 0, NULL, 0, 2),
(282, 'Quận Lê Chân', 0, NULL, 0, 2),
(283, 'Quận Hải An', 0, NULL, 0, 2),
(284, 'Quận Kiến An', 0, NULL, 0, 2),
(285, 'Quận Đồ Sơn', 0, NULL, 0, 2),
(286, 'Quận Dương Kinh', 0, NULL, 0, 2),
(287, 'Huyện Thuỷ Nguyên', 0, NULL, 0, 2),
(288, 'Huyện An Dương', 0, NULL, 0, 2),
(289, 'Huyện An Lão', 0, NULL, 0, 2),
(290, 'Huyện Kiến Thuỵ', 0, NULL, 0, 2),
(291, 'Huyện Tiên Lãng', 0, NULL, 0, 2),
(292, 'Huyện Vĩnh Bảo', 0, NULL, 0, 2),
(293, 'Huyện Cát Hải', 0, NULL, 0, 2),
(294, 'Thành phố Hưng Yên', 0, NULL, 0, 12),
(295, 'Huyện Văn Lâm', 0, NULL, 0, 12),
(296, 'Huyện Văn Giang', 0, NULL, 0, 12),
(297, 'Huyện Yên Mỹ', 0, NULL, 0, 12),
(298, 'Thị xã Mỹ Hào', 0, NULL, 0, 12),
(299, 'Huyện Ân Thi', 0, NULL, 0, 12),
(300, 'Huyện Khoái Châu', 0, NULL, 0, 12),
(301, 'Huyện Kim Động', 0, NULL, 0, 12),
(302, 'Huyện Tiên Lữ', 0, NULL, 0, 12),
(303, 'Huyện Phù Cừ', 0, NULL, 0, 12),
(304, 'Thành phố Thái Bình', 0, NULL, 0, 21),
(305, 'Huyện Quỳnh Phụ', 0, NULL, 0, 21),
(306, 'Huyện Hưng Hà', 0, NULL, 0, 21),
(307, 'Huyện Đông Hưng', 0, NULL, 0, 21),
(308, 'Huyện Thái Thụy', 0, NULL, 0, 21),
(309, 'Huyện Tiền Hải', 0, NULL, 0, 21),
(310, 'Huyện Kiến Xương', 0, NULL, 0, 21),
(311, 'Huyện Vũ Thư', 0, NULL, 0, 21),
(312, 'Thành phố Phủ Lý', 0, NULL, 0, 11),
(313, 'Thị xã Duy Tiên', 0, NULL, 0, 11),
(314, 'Huyện Kim Bảng', 0, NULL, 0, 11),
(315, 'Huyện Thanh Liêm', 0, NULL, 0, 11),
(316, 'Huyện Bình Lục', 0, NULL, 0, 11),
(317, 'Huyện Lý Nhân', 0, NULL, 0, 11),
(318, 'Thành phố Nam Định', 0, NULL, 0, 17),
(319, 'Huyện Mỹ Lộc', 0, NULL, 0, 17),
(320, 'Huyện Vụ Bản', 0, NULL, 0, 17),
(321, 'Huyện Ý Yên', 0, NULL, 0, 17),
(322, 'Huyện Nghĩa Hưng', 0, NULL, 0, 17),
(323, 'Huyện Nam Trực', 0, NULL, 0, 17),
(324, 'Huyện Trực Ninh', 0, NULL, 0, 17),
(325, 'Huyện Xuân Trường', 0, NULL, 0, 17),
(326, 'Huyện Giao Thủy', 0, NULL, 0, 17),
(327, 'Huyện Hải Hậu', 0, NULL, 0, 17),
(328, 'Thành phố Ninh Bình', 0, NULL, 0, 16),
(329, 'Thành phố Tam Điệp', 0, NULL, 0, 16),
(330, 'Huyện Nho Quan', 0, NULL, 0, 16),
(331, 'Huyện Gia Viễn', 0, NULL, 0, 16),
(332, 'Huyện Hoa Lư', 0, NULL, 0, 16),
(333, 'Huyện Yên Khánh', 0, NULL, 0, 16),
(334, 'Huyện Kim Sơn', 0, NULL, 0, 16),
(335, 'Huyện Yên Mô', 0, NULL, 0, 16),
(336, 'Thành phố Thanh Hóa', 0, NULL, 0, 44),
(337, 'Thị xã Bỉm Sơn', 0, NULL, 0, 44),
(338, 'Thành phố Sầm Sơn', 0, NULL, 0, 44),
(339, 'Huyện Mường Lát', 0, NULL, 0, 44),
(340, 'Huyện Quan Hóa', 0, NULL, 0, 44),
(341, 'Huyện Bá Thước', 0, NULL, 0, 44),
(342, 'Huyện Quan Sơn', 0, NULL, 0, 44),
(343, 'Huyện Lang Chánh', 0, NULL, 0, 44),
(344, 'Huyện Ngọc Lặc', 0, NULL, 0, 44),
(345, 'Huyện Cẩm Thủy', 0, NULL, 0, 44),
(346, 'Huyện Thạch Thành', 0, NULL, 0, 44),
(347, 'Huyện Hà Trung', 0, NULL, 0, 44),
(348, 'Huyện Vĩnh Lộc', 0, NULL, 0, 44),
(349, 'Huyện Yên Định', 0, NULL, 0, 44),
(350, 'Huyện Thọ Xuân', 0, NULL, 0, 44),
(351, 'Huyện Thường Xuân', 0, NULL, 0, 44),
(352, 'Huyện Triệu Sơn', 0, NULL, 0, 44),
(353, 'Huyện Thiệu Hóa', 0, NULL, 0, 44),
(354, 'Huyện Hoằng Hóa', 0, NULL, 0, 44),
(355, 'Huyện Hậu Lộc', 0, NULL, 0, 44),
(356, 'Huyện Nga Sơn', 0, NULL, 0, 44),
(357, 'Huyện Như Xuân', 0, NULL, 0, 44),
(358, 'Huyện Như Thanh', 0, NULL, 0, 44),
(359, 'Huyện Nông Cống', 0, NULL, 0, 44),
(360, 'Huyện Đông Sơn', 0, NULL, 0, 44),
(361, 'Huyện Quảng Xương', 0, NULL, 0, 44),
(362, 'Huyện Tĩnh Gia', 0, NULL, 0, 44),
(363, 'Thành phố Vinh', 0, NULL, 0, 37),
(364, 'Thị xã Cửa Lò', 0, NULL, 0, 37),
(365, 'Thị xã Thái Hoà', 0, NULL, 0, 37),
(366, 'Huyện Quế Phong', 0, NULL, 0, 37),
(367, 'Huyện Quỳ Châu', 0, NULL, 0, 37),
(368, 'Huyện Tương Dương', 0, NULL, 0, 37),
(369, 'Huyện Nghĩa Đàn', 0, NULL, 0, 37),
(370, 'Huyện Quỳ Hợp', 0, NULL, 0, 37),
(371, 'Huyện Quỳnh Lưu', 0, NULL, 0, 37),
(372, 'Huyện Con Cuông', 0, NULL, 0, 37),
(373, 'Huyện Tân Kỳ', 0, NULL, 0, 37),
(374, 'Huyện Anh Sơn', 0, NULL, 0, 37),
(375, 'Huyện Diễn Châu', 0, NULL, 0, 37),
(376, 'Huyện Yên Thành', 0, NULL, 0, 37),
(377, 'Huyện Đô Lương', 0, NULL, 0, 37),
(378, 'Huyện Thanh Chương', 0, NULL, 0, 37),
(379, 'Huyện Nghi Lộc', 0, NULL, 0, 37),
(380, 'Huyện Nam Đàn', 0, NULL, 0, 37),
(381, 'Huyện Hưng Nguyên', 0, NULL, 0, 37),
(382, 'Thị xã Hoàng Mai', 0, NULL, 0, 37),
(383, 'Thành phố Hà Tĩnh', 0, NULL, 0, 35),
(384, 'Thị xã Hồng Lĩnh', 0, NULL, 0, 35),
(385, 'Huyện Hương Sơn', 0, NULL, 0, 35),
(386, 'Huyện Đức Thọ', 0, NULL, 0, 35),
(387, 'Huyện Vũ Quang', 0, NULL, 0, 35),
(388, 'Huyện Nghi Xuân', 0, NULL, 0, 35),
(389, 'Huyện Can Lộc', 0, NULL, 0, 35),
(390, 'Huyện Hương Khê', 0, NULL, 0, 35),
(391, 'Huyện Thạch Hà', 0, NULL, 0, 35),
(392, 'Huyện Cẩm Xuyên', 0, NULL, 0, 35),
(393, 'Huyện Kỳ Anh', 0, NULL, 0, 35),
(394, 'Huyện Lộc Hà', 0, NULL, 0, 35),
(395, 'Thị xã Kỳ Anh', 0, NULL, 0, 35),
(396, 'Thành Phố Đồng Hới', 0, NULL, 0, 40),
(397, 'Huyện Minh Hóa', 0, NULL, 0, 40),
(398, 'Huyện Tuyên Hóa', 0, NULL, 0, 40),
(399, 'Huyện Quảng Trạch', 0, NULL, 0, 40),
(400, 'Huyện Bố Trạch', 0, NULL, 0, 40),
(401, 'Huyện Quảng Ninh', 0, NULL, 0, 40),
(402, 'Huyện Lệ Thủy', 0, NULL, 0, 40),
(403, 'Thị xã Ba Đồn', 0, NULL, 0, 40),
(404, 'Thành phố Đông Hà', 0, NULL, 0, 43),
(405, 'Thị xã Quảng Trị', 0, NULL, 0, 43),
(406, 'Huyện Vĩnh Linh', 0, NULL, 0, 43),
(407, 'Huyện Hướng Hóa', 0, NULL, 0, 43),
(408, 'Huyện Gio Linh', 0, NULL, 0, 43),
(409, 'Huyện Đa Krông', 0, NULL, 0, 43),
(410, 'Huyện Cam Lộ', 0, NULL, 0, 43),
(411, 'Huyện Triệu Phong', 0, NULL, 0, 43),
(412, 'Huyện Hải Lăng', 0, NULL, 0, 43),
(413, 'Thành phố Huế', 0, NULL, 0, 27),
(414, 'Huyện Phong Điền', 0, NULL, 0, 27),
(415, 'Huyện Quảng Điền', 0, NULL, 0, 27),
(416, 'Huyện Phú Vang', 0, NULL, 0, 27),
(417, 'Thị xã Hương Thủy', 0, NULL, 0, 27),
(418, 'Thị xã Hương Trà', 0, NULL, 0, 27),
(419, 'Huyện A Lưới', 0, NULL, 0, 27),
(420, 'Huyện Phú Lộc', 0, NULL, 0, 27),
(421, 'Huyện Nam Đông', 0, NULL, 0, 27),
(422, 'Quận Liên Chiểu', 0, NULL, 0, 26),
(423, 'Quận Thanh Khê', 0, NULL, 0, 26),
(424, 'Quận Hải Châu', 0, NULL, 0, 26),
(425, 'Quận Sơn Trà', 0, NULL, 0, 26),
(426, 'Quận Ngũ Hành Sơn', 0, NULL, 0, 26),
(427, 'Quận Cẩm Lệ', 0, NULL, 0, 26),
(428, 'Huyện Hòa Vang', 0, NULL, 0, 26),
(429, 'Thành phố Tam Kỳ', 0, NULL, 0, 41),
(430, 'Thành phố Hội An', 0, NULL, 0, 41),
(431, 'Huyện Tây Giang', 0, NULL, 0, 41),
(432, 'Huyện Đông Giang', 0, NULL, 0, 41),
(433, 'Huyện Đại Lộc', 0, NULL, 0, 41),
(434, 'Thị xã Điện Bàn', 0, NULL, 0, 41),
(435, 'Huyện Duy Xuyên', 0, NULL, 0, 41),
(436, 'Huyện Quế Sơn', 0, NULL, 0, 41),
(437, 'Huyện Nam Giang', 0, NULL, 0, 41),
(438, 'Huyện Phước Sơn', 0, NULL, 0, 41),
(439, 'Huyện Hiệp Đức', 0, NULL, 0, 41),
(440, 'Huyện Thăng Bình', 0, NULL, 0, 41),
(441, 'Huyện Tiên Phước', 0, NULL, 0, 41),
(442, 'Huyện Bắc Trà My', 0, NULL, 0, 41),
(443, 'Huyện Nam Trà My', 0, NULL, 0, 41),
(444, 'Huyện Núi Thành', 0, NULL, 0, 41),
(445, 'Huyện Phú Ninh', 0, NULL, 0, 41),
(446, 'Huyện Nông Sơn', 0, NULL, 0, 41),
(447, 'Thành phố Quảng Ngãi', 0, NULL, 0, 42),
(448, 'Huyện Bình Sơn', 0, NULL, 0, 42),
(449, 'Huyện Trà Bồng', 0, NULL, 0, 42),
(450, 'Huyện Tây Trà', 0, NULL, 0, 42),
(451, 'Huyện Sơn Tịnh', 0, NULL, 0, 42),
(452, 'Huyện Tư Nghĩa', 0, NULL, 0, 42),
(453, 'Huyện Sơn Hà', 0, NULL, 0, 42),
(454, 'Huyện Sơn Tây', 0, NULL, 0, 42),
(455, 'Huyện Minh Long', 0, NULL, 0, 42),
(456, 'Huyện Nghĩa Hành', 0, NULL, 0, 42),
(457, 'Huyện Mộ Đức', 0, NULL, 0, 42),
(458, 'Thị xã Đức Phổ', 0, NULL, 0, 42),
(459, 'Huyện Ba Tơ', 0, NULL, 0, 42),
(460, 'Huyện Lý Sơn', 0, NULL, 0, 42),
(461, 'Thành phố Quy Nhơn', 0, NULL, 0, 30),
(462, 'Huyện Hoài Nhơn', 0, NULL, 0, 30),
(463, 'Huyện Hoài Ân', 0, NULL, 0, 30),
(464, 'Huyện Phù Mỹ', 0, NULL, 0, 30),
(465, 'Huyện Vĩnh Thạnh', 0, NULL, 0, 30),
(466, 'Huyện Tây Sơn', 0, NULL, 0, 30),
(467, 'Huyện Phù Cát', 0, NULL, 0, 30),
(468, 'Thị xã An Nhơn', 0, NULL, 0, 30),
(469, 'Huyện Tuy Phước', 0, NULL, 0, 30),
(470, 'Huyện Vân Canh', 0, NULL, 0, 30),
(471, 'Thành phố Tuy Hoà', 0, NULL, 0, 39),
(472, 'Thị xã Sông Cầu', 0, NULL, 0, 39),
(473, 'Huyện Đồng Xuân', 0, NULL, 0, 39),
(474, 'Huyện Tuy An', 0, NULL, 0, 39),
(475, 'Huyện Sơn Hòa', 0, NULL, 0, 39),
(476, 'Huyện Sông Hinh', 0, NULL, 0, 39),
(477, 'Huyện Tây Hoà', 0, NULL, 0, 39),
(478, 'Huyện Phú Hoà', 0, NULL, 0, 39),
(479, 'Huyện Đông Hòa', 0, NULL, 0, 39),
(480, 'Thành phố Nha Trang', 0, NULL, 0, 28),
(481, 'Thành phố Cam Ranh', 0, NULL, 0, 28),
(482, 'Huyện Cam Lâm', 0, NULL, 0, 28),
(483, 'Huyện Vạn Ninh', 0, NULL, 0, 28),
(484, 'Thị xã Ninh Hòa', 0, NULL, 0, 28),
(485, 'Huyện Khánh Vĩnh', 0, NULL, 0, 28),
(486, 'Huyện Diên Khánh', 0, NULL, 0, 28),
(487, 'Huyện Khánh Sơn', 0, NULL, 0, 28),
(488, 'Huyện Trường Sa', 0, NULL, 0, 28),
(489, 'Thành phố Phan Rang-Tháp Chàm', 0, NULL, 0, 38),
(490, 'Huyện Bác Ái', 0, NULL, 0, 38),
(491, 'Huyện Ninh Sơn', 0, NULL, 0, 38),
(492, 'Huyện Ninh Hải', 0, NULL, 0, 38),
(493, 'Huyện Ninh Phước', 0, NULL, 0, 38),
(494, 'Huyện Thuận Bắc', 0, NULL, 0, 38),
(495, 'Huyện Thuận Nam', 0, NULL, 0, 38),
(496, 'Thành phố Phan Thiết', 0, NULL, 0, 31),
(497, 'Thị xã La Gi', 0, NULL, 0, 31),
(498, 'Huyện Tuy Phong', 0, NULL, 0, 31),
(499, 'Huyện Bắc Bình', 0, NULL, 0, 31),
(500, 'Huyện Hàm Thuận Bắc', 0, NULL, 0, 31),
(501, 'Huyện Hàm Thuận Nam', 0, NULL, 0, 31),
(502, 'Huyện Tánh Linh', 0, NULL, 0, 31),
(503, 'Huyện Đức Linh', 0, NULL, 0, 31),
(504, 'Huyện Hàm Tân', 0, NULL, 0, 31),
(505, 'Huyện Phú Quí', 0, NULL, 0, 31),
(506, 'Thành phố Kon Tum', 0, NULL, 0, 36),
(507, 'Huyện Đắk Glei', 0, NULL, 0, 36),
(508, 'Huyện Ngọc Hồi', 0, NULL, 0, 36),
(509, 'Huyện Đắk Tô', 0, NULL, 0, 36),
(510, 'Huyện Kon Plông', 0, NULL, 0, 36),
(511, 'Huyện Kon Rẫy', 0, NULL, 0, 36),
(512, 'Huyện Đắk Hà', 0, NULL, 0, 36),
(513, 'Huyện Sa Thầy', 0, NULL, 0, 36),
(514, 'Huyện Tu Mơ Rông', 0, NULL, 0, 36),
(515, 'Huyện Ia H\' Drai', 0, NULL, 0, 36),
(516, 'Thành phố Pleiku', 0, NULL, 0, 34),
(517, 'Thị xã An Khê', 0, NULL, 0, 34),
(518, 'Thị xã Ayun Pa', 0, NULL, 0, 34),
(519, 'Huyện KBang', 0, NULL, 0, 34),
(520, 'Huyện Đăk Đoa', 0, NULL, 0, 34),
(521, 'Huyện Chư Păh', 0, NULL, 0, 34),
(522, 'Huyện Ia Grai', 0, NULL, 0, 34),
(523, 'Huyện Mang Yang', 0, NULL, 0, 34),
(524, 'Huyện Kông Chro', 0, NULL, 0, 34),
(525, 'Huyện Đức Cơ', 0, NULL, 0, 34),
(526, 'Huyện Chư Prông', 0, NULL, 0, 34),
(527, 'Huyện Chư Sê', 0, NULL, 0, 34),
(528, 'Huyện Đăk Pơ', 0, NULL, 0, 34),
(529, 'Huyện Ia Pa', 0, NULL, 0, 34),
(530, 'Huyện Krông Pa', 0, NULL, 0, 34),
(531, 'Huyện Phú Thiện', 0, NULL, 0, 34),
(532, 'Huyện Chư Pưh', 0, NULL, 0, 34),
(533, 'Thành phố Buôn Ma Thuột', 0, NULL, 0, 32),
(534, 'Thị Xã Buôn Hồ', 0, NULL, 0, 32),
(535, 'Huyện Ea H\'leo', 0, NULL, 0, 32),
(536, 'Huyện Ea Súp', 0, NULL, 0, 32),
(537, 'Huyện Buôn Đôn', 0, NULL, 0, 32),
(538, 'Huyện Cư M\'gar', 0, NULL, 0, 32),
(539, 'Huyện Krông Búk', 0, NULL, 0, 32),
(679, 'Thành phố Vĩnh Long', 0, NULL, 0, 63),
(541, 'Huyện Krông Năng', 0, NULL, 0, 32),
(542, 'Huyện Ea Kar', 0, NULL, 0, 32),
(543, 'Huyện M\'Đrắk', 0, NULL, 0, 32),
(544, 'Huyện Krông Bông', 0, NULL, 0, 32),
(545, 'Huyện Krông Pắc', 0, NULL, 0, 32),
(546, 'Huyện Krông A Na', 0, NULL, 0, 32),
(547, 'Huyện Lắk', 0, NULL, 0, 32),
(548, 'Huyện Cư Kuin', 0, NULL, 0, 32),
(549, 'Thị xã Gia Nghĩa', 0, NULL, 0, 33),
(550, 'Huyện Đăk Glong', 0, NULL, 0, 33),
(551, 'Huyện Cư Jút', 0, NULL, 0, 33),
(552, 'Huyện Đắk Mil', 0, NULL, 0, 33),
(553, 'Huyện Krông Nô', 0, NULL, 0, 33),
(554, 'Huyện Đắk Song', 0, NULL, 0, 33),
(555, 'Huyện Đắk R\'Lấp', 0, NULL, 0, 33),
(556, 'Huyện Tuy Đức', 0, NULL, 0, 33),
(557, 'Thành phố Đà Lạt', 0, NULL, 0, 29),
(558, 'Thành phố Bảo Lộc', 0, NULL, 0, 29),
(559, 'Huyện Đam Rông', 0, NULL, 0, 29),
(560, 'Huyện Lạc Dương', 0, NULL, 0, 29),
(561, 'Huyện Lâm Hà', 0, NULL, 0, 29),
(562, 'Huyện Đơn Dương', 0, NULL, 0, 29),
(563, 'Huyện Đức Trọng', 0, NULL, 0, 29),
(564, 'Huyện Di Linh', 0, NULL, 0, 29),
(565, 'Huyện Đạ Huoai', 0, NULL, 0, 29),
(566, 'Huyện Đạ Tẻh', 0, NULL, 0, 29),
(567, 'Huyện Cát Tiên', 0, NULL, 0, 29),
(568, 'Thị xã Phước Long', 0, NULL, 0, 51),
(569, 'Thị xã Đồng Xoài', 0, NULL, 0, 51),
(570, 'Thị xã Bình Long', 0, NULL, 0, 51),
(571, 'Huyện Bù Gia Mập', 0, NULL, 0, 51),
(572, 'Huyện Lộc Ninh', 0, NULL, 0, 51),
(573, 'Huyện Bù Đốp', 0, NULL, 0, 51),
(574, 'Huyện Hớn Quản', 0, NULL, 0, 51),
(575, 'Huyện Đồng Phú', 0, NULL, 0, 51),
(576, 'Huyện Bù Đăng', 0, NULL, 0, 51),
(577, 'Huyện Chơn Thành', 0, NULL, 0, 51),
(578, 'Huyện Phú Riềng', 0, NULL, 0, 51),
(579, 'Thành phố Tây Ninh', 0, NULL, 0, 61),
(580, 'Huyện Tân Biên', 0, NULL, 0, 61),
(581, 'Huyện Tân Châu', 0, NULL, 0, 61),
(582, 'Huyện Dương Minh Châu', 0, NULL, 0, 61),
(583, 'Huyện Châu Thành', 0, NULL, 0, 61),
(584, 'Thị xã Hòa Thành', 0, NULL, 0, 61),
(585, 'Huyện Gò Dầu', 0, NULL, 0, 61),
(586, 'Huyện Bến Cầu', 0, NULL, 0, 61),
(587, 'Thị xã Trảng Bàng', 0, NULL, 0, 61),
(588, 'Thành phố Thủ Dầu Một', 0, NULL, 0, 46),
(589, 'Huyện Bàu Bàng', 0, NULL, 0, 46),
(590, 'Huyện Dầu Tiếng', 0, NULL, 0, 46),
(591, 'Thị xã Bến Cát', 0, NULL, 0, 46),
(592, 'Huyện Phú Giáo', 0, NULL, 0, 46),
(593, 'Thị xã Tân Uyên', 0, NULL, 0, 46),
(594, 'Thành phố Dĩ An', 0, NULL, 0, 46),
(595, 'Thành phố Thuận An', 0, NULL, 0, 46),
(596, 'Huyện Bắc Tân Uyên', 0, NULL, 0, 46),
(597, 'Thành phố Biên Hòa', 0, NULL, 0, 55),
(598, 'Thành phố Long Khánh', 0, NULL, 0, 55),
(599, 'Huyện Tân Phú', 0, NULL, 0, 55),
(600, 'Huyện Vĩnh Cửu', 0, NULL, 0, 55),
(601, 'Huyện Định Quán', 0, NULL, 0, 55),
(602, 'Huyện Trảng Bom', 0, NULL, 0, 55),
(603, 'Huyện Thống Nhất', 0, NULL, 0, 55),
(604, 'Huyện Cẩm Mỹ', 0, NULL, 0, 55),
(605, 'Huyện Long Thành', 0, NULL, 0, 55),
(606, 'Huyện Xuân Lộc', 0, NULL, 0, 55),
(607, 'Huyện Nhơn Trạch', 0, NULL, 0, 55),
(608, 'Thành phố Vũng Tàu', 0, NULL, 0, 47),
(609, 'Thành phố Bà Rịa', 0, NULL, 0, 47),
(610, 'Huyện Châu Đức', 0, NULL, 0, 47),
(611, 'Huyện Xuyên Mộc', 0, NULL, 0, 47),
(612, 'Huyện Long Điền', 0, NULL, 0, 47),
(613, 'Huyện Đất Đỏ', 0, NULL, 0, 47),
(614, 'Huyện Tân Thành', 0, NULL, 0, 47),
(615, 'Quận 1', 0, NULL, 0, 45),
(616, 'Quận 12', 0, NULL, 0, 45),
(617, 'Thành phố Thủ Đức', 0, NULL, 0, 45),
(618, 'Quận 9', 0, NULL, 0, 45),
(619, 'Quận Gò Vấp', 0, NULL, 0, 45),
(620, 'Quận Bình Thạnh', 0, NULL, 0, 45),
(621, 'Quận Tân Bình', 0, NULL, 0, 45),
(622, 'Quận Tân Phú', 0, NULL, 0, 45),
(623, 'Quận Phú Nhuận', 0, NULL, 0, 45),
(624, 'Quận 2', 0, NULL, 0, 45),
(625, 'Quận 3', 0, NULL, 0, 45),
(626, 'Quận 10', 0, NULL, 0, 45),
(627, 'Quận 11', 0, NULL, 0, 45),
(628, 'Quận 4', 0, NULL, 0, 45),
(629, 'Quận 5', 0, NULL, 0, 45),
(630, 'Quận 6', 0, NULL, 0, 45),
(631, 'Quận 8', 0, NULL, 0, 45),
(632, 'Quận Bình Tân', 0, NULL, 0, 45),
(633, 'Quận 7', 0, NULL, 0, 45),
(634, 'Huyện Củ Chi', 0, NULL, 0, 45),
(635, 'Huyện Hóc Môn', 0, NULL, 0, 45),
(636, 'Huyện Bình Chánh', 0, NULL, 0, 45),
(637, 'Huyện Nhà Bè', 0, NULL, 0, 45),
(638, 'Huyện Cần Giờ', 0, NULL, 0, 45),
(639, 'Thành phố Tân An', 0, NULL, 0, 58),
(640, 'Thị xã Kiến Tường', 0, NULL, 0, 58),
(641, 'Huyện Tân Hưng', 0, NULL, 0, 58),
(781, 'Huyện Chợ Gạo', 0, NULL, 0, 60),
(643, 'Huyện Mộc Hóa', 0, NULL, 0, 58),
(644, 'Huyện Tân Thạnh', 0, NULL, 0, 58),
(645, 'Huyện Thạnh Hóa', 0, NULL, 0, 58),
(646, 'Huyện Đức Huệ', 0, NULL, 0, 58),
(647, 'Huyện Đức Hòa', 0, NULL, 0, 58),
(648, 'Huyện Bến Lức', 0, NULL, 0, 58),
(649, 'Huyện Thủ Thừa', 0, NULL, 0, 58),
(650, 'Huyện Tân Trụ', 0, NULL, 0, 58),
(651, 'Huyện Cần Đước', 0, NULL, 0, 58),
(652, 'Huyện Cần Giuộc', 0, NULL, 0, 58),
(653, 'Thành phố Mỹ Tho', 0, NULL, 0, 60),
(654, 'Thị xã Gò Công', 0, NULL, 0, 60),
(655, 'Thị xã Cai Lậy', 0, NULL, 0, 60),
(656, 'Huyện Tân Phước', 0, NULL, 0, 60),
(657, 'Huyện Cái Bè', 0, NULL, 0, 60),
(658, 'Huyện Cai Lậy', 0, NULL, 0, 60),
(772, 'Huyện Châu Thành', 0, NULL, 0, 52),
(660, 'Huyện Gò Công Tây', 0, NULL, 0, 60),
(661, 'Huyện Gò Công Đông', 0, NULL, 0, 60),
(662, 'Huyện Tân Phú Đông', 0, NULL, 0, 60),
(663, 'Thành phố Bến Tre', 0, NULL, 0, 52),
(664, 'Huyện Chợ Lách', 0, NULL, 0, 52),
(665, 'Huyện Mỏ Cày Nam', 0, NULL, 0, 52),
(666, 'Huyện Giồng Trôm', 0, NULL, 0, 52),
(667, 'Huyện Bình Đại', 0, NULL, 0, 52),
(668, 'Huyện Ba Tri', 0, NULL, 0, 52),
(669, 'Huyện Thạnh Phú', 0, NULL, 0, 52),
(670, 'Huyện Mỏ Cày Bắc', 0, NULL, 0, 52),
(671, 'Thành phố Trà Vinh', 0, NULL, 0, 62),
(672, 'Huyện Càng Long', 0, NULL, 0, 62),
(673, 'Huyện Cầu Kè', 0, NULL, 0, 62),
(674, 'Huyện Tiểu Cần', 0, NULL, 0, 62),
(675, 'Huyện Cầu Ngang', 0, NULL, 0, 62),
(676, 'Huyện Trà Cú', 0, NULL, 0, 62),
(677, 'Huyện Duyên Hải', 0, NULL, 0, 62),
(678, 'Thị xã Duyên Hải', 0, NULL, 0, 62),
(680, 'Huyện Long Hồ', 0, NULL, 0, 63),
(681, 'Huyện Mang Thít', 0, NULL, 0, 63),
(682, 'Huyện  Vũng Liêm', 0, NULL, 0, 63),
(683, 'Huyện Tam Bình', 0, NULL, 0, 63),
(684, 'Thị xã Bình Minh', 0, NULL, 0, 63),
(685, 'Huyện Trà Ôn', 0, NULL, 0, 63),
(686, 'Huyện Bình Tân', 0, NULL, 0, 63),
(687, 'Thành phố Cao Lãnh', 0, NULL, 0, 54),
(688, 'Thành phố Sa Đéc', 0, NULL, 0, 54),
(689, 'Thành phố Hồng Ngự', 0, NULL, 0, 54),
(690, 'Huyện Tân Hồng', 0, NULL, 0, 54),
(691, 'Huyện Hồng Ngự', 0, NULL, 0, 54),
(692, 'Huyện Tháp Mười', 0, NULL, 0, 54),
(693, 'Huyện Cao Lãnh', 0, NULL, 0, 54),
(694, 'Huyện Thanh Bình', 0, NULL, 0, 54),
(695, 'Huyện Lấp Vò', 0, NULL, 0, 54),
(696, 'Huyện Lai Vung', 0, NULL, 0, 54),
(697, 'Thành phố Long Xuyên', 0, NULL, 0, 49),
(698, 'Thành phố Châu Đốc', 0, NULL, 0, 49),
(699, 'Huyện An Phú', 0, NULL, 0, 49),
(700, 'Thị xã Tân Châu', 0, NULL, 0, 49),
(701, 'Huyện Phú Tân', 0, NULL, 0, 49),
(702, 'Huyện Châu Phú', 0, NULL, 0, 49),
(703, 'Huyện Tịnh Biên', 0, NULL, 0, 49),
(704, 'Huyện Tri Tôn', 0, NULL, 0, 49),
(705, 'Huyện Thoại Sơn', 0, NULL, 0, 49),
(706, 'Thành phố Rạch Giá', 0, NULL, 0, 57),
(707, 'Thành phố Hà Tiên', 0, NULL, 0, 57),
(708, 'Huyện Kiên Lương', 0, NULL, 0, 57),
(709, 'Huyện Hòn Đất', 0, NULL, 0, 57),
(717, 'Huyện Phú Quốc', 0, NULL, 0, 57),
(711, 'Huyện Tân Hiệp', 0, NULL, 0, 57),
(712, 'Huyện Giồng Riềng', 0, NULL, 0, 57),
(713, 'Huyện Gò Quao', 0, NULL, 0, 57),
(714, 'Huyện An Biên', 0, NULL, 0, 57),
(715, 'Huyện An Minh', 0, NULL, 0, 57),
(716, 'Huyện Vĩnh Thuận', 0, NULL, 0, 57),
(718, 'Huyện Kiên Hải', 0, NULL, 0, 57),
(719, 'Huyện U Minh Thượng', 0, NULL, 0, 57),
(720, 'Huyện Giang Thành', 0, NULL, 0, 57),
(721, 'Quận Ninh Kiều', 0, NULL, 0, 48),
(722, 'Quận Ô Môn', 0, NULL, 0, 48),
(723, 'Quận Bình Thuỷ', 0, NULL, 0, 48),
(724, 'Quận Cái Răng', 0, NULL, 0, 48),
(725, 'Quận Thốt Nốt', 0, NULL, 0, 48),
(726, 'Huyện Cờ Đỏ', 0, NULL, 0, 48),
(727, 'Huyện Thới Lai', 0, NULL, 0, 48),
(728, 'Thành phố Vị Thanh', 0, NULL, 0, 56),
(729, 'Thành phố Ngã Bảy', 0, NULL, 0, 56),
(730, 'Huyện Châu Thành A', 0, NULL, 0, 56),
(731, 'Huyện Phụng Hiệp', 0, NULL, 0, 56),
(732, 'Huyện Vị Thuỷ', 0, NULL, 0, 56),
(733, 'Huyện Long Mỹ', 0, NULL, 0, 56),
(734, 'Thị xã Long Mỹ', 0, NULL, 0, 56),
(735, 'Thành phố Sóc Trăng', 0, NULL, 0, 59),
(736, 'Huyện Kế Sách', 0, NULL, 0, 59),
(737, 'Huyện Mỹ Tú', 0, NULL, 0, 59),
(738, 'Huyện Cù Lao Dung', 0, NULL, 0, 59),
(739, 'Huyện Long Phú', 0, NULL, 0, 59),
(740, 'Huyện Mỹ Xuyên', 0, NULL, 0, 59),
(741, 'Thị xã Ngã Năm', 0, NULL, 0, 59),
(742, 'Huyện Thạnh Trị', 0, NULL, 0, 59),
(743, 'Thị xã Vĩnh Châu', 0, NULL, 0, 59),
(744, 'Huyện Trần Đề', 0, NULL, 0, 59),
(745, 'Thành phố Bạc Liêu', 0, NULL, 0, 50),
(746, 'Huyện Hồng Dân', 0, NULL, 0, 50),
(747, 'Huyện Phước Long', 0, NULL, 0, 50),
(748, 'Huyện Vĩnh Lợi', 0, NULL, 0, 50),
(749, 'Thị xã Giá Rai', 0, NULL, 0, 50),
(750, 'Huyện Đông Hải', 0, NULL, 0, 50),
(751, 'Huyện Hoà Bình', 0, NULL, 0, 50),
(752, 'Thành phố Cà Mau', 0, NULL, 0, 53),
(753, 'Huyện U Minh', 0, NULL, 0, 53),
(754, 'Huyện Thới Bình', 0, NULL, 0, 53),
(755, 'Huyện Trần Văn Thời', 0, NULL, 0, 53),
(756, 'Huyện Cái Nước', 0, NULL, 0, 53),
(757, 'Huyện Đầm Dơi', 0, NULL, 0, 53),
(758, 'Huyện Năm Căn', 0, NULL, 0, 53),
(759, 'Huyện Ngọc Hiển', 0, NULL, 0, 53),
(760, 'Huyện Chợ Mới', 0, NULL, 0, 49),
(761, 'Huyện Châu Thành', 0, NULL, 0, 56),
(762, 'Huyện Châu Thành', 0, NULL, 0, 49),
(763, 'Thành phố Cam Đường', 0, NULL, 0, 13),
(764, 'Huyện Châu Thành', 0, NULL, 0, 54),
(765, 'Huyện Tam Nông', 0, NULL, 0, 54),
(766, 'Huyện Bạch Long Vĩ', 0, NULL, 0, 2),
(767, 'Huyện Bảo Lâm', 0, NULL, 0, 29),
(768, 'Huyện Vĩnh Hưng', 0, NULL, 0, 58),
(769, 'Huyện Châu Thành', 0, NULL, 0, 58),
(771, 'Huyện Châu Thành', 0, NULL, 0, 60),
(780, 'Thị xã Phú Mỹ', 0, NULL, 0, 47),
(775, 'Huyện Châu Thành', 0, NULL, 0, 62),
(777, 'Huyện Phong Điền', 0, NULL, 0, 48),
(779, 'Huyện Vĩnh Thạnh', 0, NULL, 0, 48),
(782, 'Thị xã Nghi Sơn', 0, NULL, 0, 44),
(783, 'Huyện Châu Thành', 0, NULL, 0, 57),
(784, 'Huyện Châu Thành', 0, NULL, 0, 59),
(785, 'Huyện Phú Tân', 0, NULL, 0, 53);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_07_075348_create_tbl_admins', 1),
(6, '2022_11_12_043537_tbl_setting', 2),
(7, '2022_11_15_021345_tbl__education', 3),
(8, '2022_11_15_023009_tbl_post', 4),
(9, '2022_11_16_042032_tbl_skill', 4),
(10, '2022_11_16_082551_tbl_profile', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admins`
--

CREATE TABLE `tbl_admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` int(11) NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `ward` int(11) NOT NULL,
  `district` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admins`
--

INSERT INTO `tbl_admins` (`id`, `username`, `email`, `password`, `sex`, `avatar`, `birthday`, `city`, `ward`, `district`, `address`, `level`, `status`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$ymWlDAT8PSlneSfWIyf1eeb8uYC.6taOnAyO7yyos/80CSoX6MLTq', 0, '', 0, 0, 0, 0, '', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_education`
--

CREATE TABLE `tbl_education` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` text CHARACTER SET utf8 NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_education` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_education`
--

INSERT INTO `tbl_education` (`id`, `title`, `time`, `content`, `type_education`, `user_id`) VALUES
(14, 'Trường Cao đẳng Thực hành FPT Polytechnic Hà Nội', '11/16/2022 12:00 AM - 11/16/2022 11:59 PM', '<p><span style=\"font-family: &quot;PT Sans&quot;, sans-serif; font-size: 16px;\">Tốt nghiệp</span><br style=\"padding: 0px; margin: 0px; color: rgb(238, 238, 238); font-family: &quot;PT Sans&quot;, sans-serif; font-size: 16px; background-color: rgb(15, 16, 19);\" />\r\n<span style=\"font-family: &quot;PT Sans&quot;, sans-serif; font-size: 16px;\">Chuy&ecirc;n ng&agrave;nh: Thiết Kế Website</span><br style=\"padding: 0px; margin: 0px; color: rgb(238, 238, 238); font-family: &quot;PT Sans&quot;, sans-serif; font-size: 16px; background-color: rgb(15, 16, 19);\" />\r\n<span style=\"font-family: &quot;PT Sans&quot;, sans-serif; font-size: 16px;\">Điểm trung b&igrave;nh: 7.0</span></p>', '1', 8),
(15, 'Làm việc tại Theanh28 Entertainment', '11/16/2022 12:00 AM - 11/16/2022 11:59 PM', '<p class=\"info\" style=\"padding: 0px; margin-bottom: 0px; color: rgb(238, 238, 238); line-height: 1.8; font-family: &quot;PT Sans&quot;, sans-serif; font-size: 16px;\"><span style=\"color:#000000;\">Vị tr&iacute;: Nh&acirc;n vi&ecirc;n lập tr&igrave;nh PHP</span></p>\r\n\r\n<p><br style=\"padding: 0px; margin: 0px; color: rgb(255, 255, 255); font-family: &quot;PT Sans&quot;, sans-serif; font-size: 16px;\" />\r\n<span style=\"color:#000000;\"><span style=\"font-family: &quot;PT Sans&quot;, sans-serif; font-size: 16px;\">- L&agrave;m dự &aacute;n 28land v&agrave; nhiều dự &aacute;n kh&aacute;c của c&ocirc;ng ty giao m&agrave; m&igrave;nh được giao.</span></span></p>', '2', 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_profile`
--

CREATE TABLE `tbl_profile` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `information` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `avatar` text CHARACTER SET utf8 NOT NULL,
  `job` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_profile`
--

INSERT INTO `tbl_profile` (`id`, `name`, `email`, `phone`, `address`, `birthday`, `information`, `user_id`, `avatar`, `job`) VALUES
(2, 'Nguyễn bá công', 'conguyen6262@gmail.com', 966990354, 'hà nội', '2022-11-20', '<p><span pt=\"\" sans=\"\">Sinh ra tại một l&agrave;ng qu&ecirc; ngh&egrave;o trong v&ugrave;ng th&ocirc;n d&atilde;, lớn l&ecirc;n trong một gia đ&igrave;nh cần lao, gi&agrave;u l&ograve;ng y&ecirc;u nước, sớm gi&aacute;c ngộ l&yacute; tưởng c&aacute;ch mạng. Tuổi trẻ th&ocirc;ng minh đỉnh ngộ. Tương truyền mới sinh Hiếu kh&ocirc;ng kh&oacute;c kh&ocirc;ng cười. Một h&ocirc;m c&oacute; 1 vị đạo sĩ đi qua thấy Hiếu chơi trước cửa, liền n&oacute;i. Người n&agrave;y c&oacute; dung mạo tọa thi&ecirc;n long, đầu gối sơn, ch&acirc;n đạp thủy, b&ecirc;n tả c&oacute; thanh long, b&ecirc;n phải c&oacute; bạch hổ, con nh&agrave; n&agrave;y chỉ mười t&aacute;m năm sau, chắc chắn sẽ th&agrave;nh người lớn. Mọi người thấy vậy, cho l&agrave; sự lạ, hết sức chăm s&oacute;c. Quả nhi&ecirc;n, Hiếu 6 tuổi đ&atilde; đi học lớp 1, 8 tuổi đ&atilde; đọc th&ocirc;ng viết thạo, l&ecirc;n 9 tuổi đ&atilde; biết cộng trừ nh&acirc;n chia. Ai gặp cũng phải trầm trồ kh&acirc;m phục. Giới học vấn uy&ecirc;n th&acirc;m, 18 tuổi đ&atilde; xong t&uacute; t&agrave;i, tr&ecirc;n th&ocirc;ng thi&ecirc;n văn, dưới tường địa l&yacute;, giữa hiểu nh&acirc;n lu&acirc;n, ai hỏi g&igrave; cũng trả lời được, tuyệt nhi&ecirc;n kh&ocirc;ng sai c&acirc;u n&agrave;o. Đến năm 19 tuổi Hiếu lui về ở ẩn. Thăm th&uacute; sự đời, thấy việc g&igrave; c&oacute; lợi l&agrave; l&agrave;m</span></p>\r\n\r\n<div class=\"ddict_btn\" style=\"top: 16px; left: 33.7375px;\"><img alt=\"\" src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>\r\n\r\n<div class=\"ddict_btn\" style=\"top: 20px; left: 134.925px;\"><img alt=\"\" src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>', 8, '1668685063new_images2022070209312621356.jpg', 'Software Engineer');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_setting`
--

CREATE TABLE `tbl_setting` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Introduce` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Footer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` int(11) NOT NULL,
  `images` int(11) NOT NULL,
  `feedback` int(11) NOT NULL,
  `post` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `project` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_setting`
--

INSERT INTO `tbl_setting` (`id`, `title`, `email`, `phone`, `address`, `logo`, `Introduce`, `Footer`, `job`, `images`, `feedback`, `post`, `time`, `project`) VALUES
(1, 'NBC', 'conguyen6262@gmail.com', '0966990354', 'hà nội', '1668481706new_images2022070209352329517.png', '<p>nguyễn b&aacute; c&ocirc;ng 1</p>', 'coppy right', 1, 1, 1, 0, 1668481706, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_skill`
--

CREATE TABLE `tbl_skill` (
  `id` int(10) UNSIGNED NOT NULL,
  `skillname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `process` int(11) NOT NULL,
  `user_id` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_skill`
--

INSERT INTO `tbl_skill` (`id`, `skillname`, `process`, `user_id`) VALUES
(13, 'Html', 50, '8'),
(39, 'css', 50, '69'),
(41, 'js', 50, '69');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `avatar` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `city` int(11) DEFAULT NULL,
  `district` int(11) DEFAULT NULL,
  `ward` int(11) DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `sex` int(11) DEFAULT NULL,
  `token` varchar(20) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `level`, `status`, `avatar`, `city`, `district`, `ward`, `address`, `sex`, `token`) VALUES
(69, 'Nguyễn Bá Công', 'conguyen6262@gmail.com', NULL, '$2y$10$M5vrF8JUXjdQHjx7/OudxOsbdo8PRHS344nxqlilTRoc87WaYiGMu', NULL, NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 'vzGfVBOz7QXCts1Dd8Ii'),
(70, 'conguyen', 'conguyen6464@gmail', NULL, '$2y$10$xTgTQFzjGTDi.ePXn6TGJem7uLMdizDl4h3cTd2j4tg.jLCueubKm', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'OeJgNK4Wj7lqND00ejtW'),
(71, '2wad', 'betavsbg@gmail.com', NULL, '$2y$10$Q3FGxwwaZzqjVOmTW7LK2uqbmizy4GNtMCUutPO1Ckl7bE48/IX1.', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '1Y9UvwU9P9Zu33v2H5KG');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `city2`
--
ALTER TABLE `city2`
  ADD PRIMARY KEY (`cit_id`),
  ADD KEY `cit_order` (`cit_order`),
  ADD KEY `cit_parent` (`cit_parent`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `tbl_admins`
--
ALTER TABLE `tbl_admins`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_education`
--
ALTER TABLE `tbl_education`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_profile`
--
ALTER TABLE `tbl_profile`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_setting`
--
ALTER TABLE `tbl_setting`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_skill`
--
ALTER TABLE `tbl_skill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `city2`
--
ALTER TABLE `city2`
  MODIFY `cit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=786;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_admins`
--
ALTER TABLE `tbl_admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_education`
--
ALTER TABLE `tbl_education`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `tbl_profile`
--
ALTER TABLE `tbl_profile`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_setting`
--
ALTER TABLE `tbl_setting`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_skill`
--
ALTER TABLE `tbl_skill`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
