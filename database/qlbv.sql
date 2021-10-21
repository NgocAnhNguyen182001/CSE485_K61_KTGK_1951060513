-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2021 lúc 10:15 AM
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
-- Cơ sở dữ liệu: `qlbv`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `patient`
--

CREATE TABLE `patient` (
  `patientid` varchar(20) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `dateofbirth` date NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `height` varchar(20) NOT NULL,
  `weight` float NOT NULL,
  `blood_type` varchar(10) NOT NULL,
  `created_on` datetime NOT NULL,
  `modified_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `patient`
--

INSERT INTO `patient` (`patientid`, `firstname`, `lastname`, `dateofbirth`, `gender`, `mobile`, `email`, `height`, `weight`, `blood_type`, `created_on`, `modified_on`) VALUES
('2', 'Lê', 'Thùy Linh', '2001-08-08', 0, '0972342544', ' 0972342505', '1M65', 50, 'B', '2021-10-08 00:00:00', '2021-10-08 00:00:00'),
('3', 'Đỗ', 'Tiến Anh', '2001-10-02', 1, '0388888888', 'tienanh@gmail.com', '1M7', 65, 'O', '2021-01-21 08:16:01', '2021-01-21 08:16:01'),
('4', 'Đặng', 'Thu Hương', '2003-10-05', 0, '054444444444', 'thuhuong@gmail.com', '1M65', 48, 'AB', '2020-10-21 08:17:22', '2020-10-21 08:17:22');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patientid`),
  ADD UNIQUE KEY `mobile` (`mobile`),
  ADD KEY `patientid` (`patientid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
