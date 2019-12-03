-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 30, 2019 at 03:49 PM
-- Server version: 5.7.28-log
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dsvwblqt_pro1014`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `admin` varchar(16) COLLATE utf8_unicode_520_ci NOT NULL,
  `adminPass` varchar(16) COLLATE utf8_unicode_520_ci NOT NULL,
  `adminAvatar` varchar(45) COLLATE utf8_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idAdmin`, `admin`, `adminPass`, `adminAvatar`) VALUES
(1, 'tn0luong', '123', 'tn-logo.jpg'),
(2, 'tien', '123', 'tien-logo.jpg'),
(3, 'nhon', '123', 'nhon-logo.jpg'),
(4, 'minh', '123', 'minh-logo,jpg'),
(5, 'nhat', '123', 'nhat-logo.jpg'),
(6, 'admin', 'admin', 'admin.png');

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_gio_hang`
--

CREATE TABLE `chi_tiet_gio_hang` (
  `ma_gio_hang` int(9) NOT NULL,
  `ten_san_pham` varchar(50) NOT NULL,
  `so_luong` int(9) NOT NULL,
  `gia` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `ma_comment` int(9) NOT NULL,
  `noi_dung` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ma_san_pham` int(9) NOT NULL,
  `ten` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) NOT NULL,
  `tra_loi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `admin` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gio_hang`
--

CREATE TABLE `gio_hang` (
  `ma_gio_hang` int(9) NOT NULL,
  `ten_khach` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) NOT NULL,
  `so_luong` int(9) NOT NULL,
  `tong_cong` int(9) NOT NULL,
  `tinh_trang` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `ma_loai` int(3) NOT NULL,
  `ten_loai` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`ma_loai`, `ten_loai`) VALUES
(2, 'Giày Thể Thao'),
(3, 'Giày Cao Gót');

-- --------------------------------------------------------

--
-- Table structure for table `mau`
--

CREATE TABLE `mau` (
  `ma_mau` int(2) NOT NULL,
  `ten_mau` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ma_san_pham` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE `san_pham` (
  `ma_san_pham` int(9) NOT NULL,
  `ten_san_pham` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `loai_san_pham` int(3) NOT NULL,
  `hinh` varchar(255) NOT NULL,
  `hinh_1` varchar(255) NOT NULL,
  `hinh_2` varchar(255) NOT NULL,
  `gia` int(9) NOT NULL,
  `mo_ta` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`ma_san_pham`, `ten_san_pham`, `loai_san_pham`, `hinh`, `hinh_1`, `hinh_2`, `gia`, `mo_ta`) VALUES
(2, 'Giày Thể Thao Nam MWC NATT - 5226Giày Thể Thao Nam', 2, 'mwc.jpg', 'mwc.jpg', 'mwc.jpg', 280000, 'sản phẩm chất lượng, độc đáo..'),
(3, 'Giày Thể Thao Nam MWC NATT - 5226 ĐỎ ĐEN', 2, 'mwc_1.jpg', 'mwc_1.jpg', 'mwc_1.jpg', 285000, 'sản phẩm được thiết kế đọc đáo, mới mẻ phù hợp với xu hướng hiện nay'),
(4, 'Giày Thể Thao Nam MWC NATT - 5226 ĐỎ ĐEN', 2, 'mwc_2.jpg', 'mwc_2.jpg', 'mwc_2.jpg', 0, 'đọc đáo mới lạ, theo xu hướng\r\n'),
(5, 'Giày Thể Thao Nam MWC NATT - 5226 ĐỎ ĐEN', 2, 'mwc_3.jpg', 'mwc_3.jpg', 'mwc_3.jpg', 250000, 'đọc đáo mới lạ, theo xu hướng'),
(6, 'Giày Thể Thao Nam MWC NATT - 5226 XÁM', 2, 'mwc_4.jpg', 'mwc_4.jpg', 'mwc_4.jpg', 265000, 'phong cách đọc đáo mới mẻ'),
(7, 'Giày Thể Thao Nam MWC NATT - 5226 ĐEN', 2, 'mwc_5.jpg', 'mwc_5.jpg', 'mwc_5.jpg', 200000, 'phong cách đọc đáo mới mẻ'),
(8, 'Giày Thể Thao Nam MWC NATT - 5226 ĐỎ ĐEN', 2, 'mwc_6.jpg', 'mwc_7.jpg', 'mwc_7.jpg', 295000, 'phong cách đọc đáo mới mẻ'),
(9, 'Giày Thể Thao Nam MWC NATT - 5226 ĐỎ ĐEN', 2, 'mwc_7.jpg', 'mwc_7.jpg', 'mwc_7.jpg', 300000, 'phong cách đọc đáo mới mẻ'),
(10, 'Giày cao gót MWC NUCG-3880 ĐEN', 3, 'mwc_8.jpg', 'mwc_8.jpg', 'mwc_8.jpg', 260000, 'quý phái, sang trọng, là sản phẩm được tiết kế rất công phu, theo xu hướng!'),
(11, 'Giày cao gót MWC NUCG-3880 ĐEN ĐỎ', 3, 'mwc_9.jpg', 'mwc_9.jpg', 'mwc_9.jpg', 295000, 'quý phái, sang trọng, là sản phẩm được tiết kế rất công phu, theo xu hướng!'),
(12, 'Giày cao gót MWC NUCG-3580 ĐỎ', 3, 'mwc_10.jpg', 'mwc_10.jpg', 'mwc_10.jpg', 255000, 'quý phái, sang trọng, là sản phẩm được tiết kế rất công phu, theo xu hướng!'),
(13, 'Giày cao gót MWC NUCG-3885 KEM', 3, 'mwc_11.jpg', 'mwc_11.jpg', 'mwc_11.jpg', 350000, 'quý phái, sang trọng, là sản phẩm được tiết kế rất công phu, theo xu hướng!'),
(14, '', 3, 'mwc_12.jpg', 'mwc_12.jpg', 'mwc_12.jpg', 270000, 'quý phái, sang trọng, là sản phẩm được tiết kế rất công phu, theo xu hướng!'),
(15, 'Giày cao gót MWC NUCG-3879 ĐEN', 3, 'mwc_13.jpg', 'mwc_13.jpg', 'mwc_13.jpg', 295000, 'quý phái, sang trọng, là sản phẩm được tiết kế rất công phu, theo xu hướng!'),
(16, 'Giày cao gót MWC NUCG-3879 ĐEN XÁM', 3, 'mwc_14.jpg', 'mwc_14.jpg', 'mwc_14.jpg', 300000, 'quý phái, sang trọng, là sản phẩm được tiết kế rất công phu, theo xu hướng!'),
(17, 'Giày cao gót MWC NUCG-3879  KEM', 3, 'mwc_15.jpg', 'mwc_15.jpg', 'mwc_15.jpg', 280000, 'quý phái, sang trọng, là sản phẩm được tiết kế rất công phu, theo xu hướng!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `chi_tiet_gio_hang`
--
ALTER TABLE `chi_tiet_gio_hang`
  ADD PRIMARY KEY (`ma_gio_hang`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`ma_comment`);

--
-- Indexes for table `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD PRIMARY KEY (`ma_gio_hang`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Indexes for table `mau`
--
ALTER TABLE `mau`
  ADD PRIMARY KEY (`ma_mau`),
  ADD KEY `ma_san_pham` (`ma_san_pham`);

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`ma_san_pham`),
  ADD KEY `loai_san_pham` (`loai_san_pham`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `ma_comment` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gio_hang`
--
ALTER TABLE `gio_hang`
  MODIFY `ma_gio_hang` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
  MODIFY `ma_loai` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mau`
--
ALTER TABLE `mau`
  MODIFY `ma_mau` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `ma_san_pham` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chi_tiet_gio_hang`
--
ALTER TABLE `chi_tiet_gio_hang`
  ADD CONSTRAINT `chi_tiet_gio_hang_ibfk_1` FOREIGN KEY (`ma_gio_hang`) REFERENCES `gio_hang` (`ma_gio_hang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`loai_san_pham`) REFERENCES `loai` (`ma_loai`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
