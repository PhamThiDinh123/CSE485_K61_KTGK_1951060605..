-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 06, 2022 lúc 10:11 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `1951060605_university`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qldh`
--

CREATE TABLE `qldh` (
  `mamh` int(11) NOT NULL,
  `ten_mh` varchar(50) CHARACTER SET utf8 NOT NULL,
  `sotinchi` varchar(20) CHARACTER SET utf8 NOT NULL,
  `sotiet_lt` varchar(20) CHARACTER SET utf8 NOT NULL,
  `sotiet_bt` varchar(20) CHARACTER SET utf8 NOT NULL,
  `sotiet_thtn` varchar(20) CHARACTER SET utf8 NOT NULL,
  `sogio_tuhoc` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qldh`
--

INSERT INTO `qldh` (`mamh`, `ten_mh`, `sotinchi`, `sotiet_lt`, `sotiet_bt`, `sotiet_thtn`, `sogio_tuhoc`) VALUES
(1, 'Pepon', '8', '9', '4', '9', '8'),
(2, 'Housiaux', '8', '9', '4', '1', '4'),
(3, 'McMillan', '10', '6', '2', '4', '10'),
(4, 'Arrington', '8', '6', '4', '4', '9'),
(5, 'Blay', '8', '7', '8', '10', '5'),
(6, 'Ferran', '2', '10', '9', '10', '3'),
(7, 'Picknett', '4', '5', '10', '6', '7'),
(8, 'Cogger', '3', '10', '10', '5', '3'),
(9, 'Kopfer', '1', '7', '5', '1', '2'),
(10, 'Benoi', '8', '6', '8', '8', '1');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `qldh`
--
ALTER TABLE `qldh`
  ADD PRIMARY KEY (`mamh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
