-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2021 at 03:52 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `username` varchar(50) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `password`, `fullname`, `email`) VALUES
('admin', '$2y$10$1e/N0VSBZ8iG.Jb3tRhNqeCMdWkkuep8SeAw.M3n3UsrdABL1r2Du', 'admin', 'admin@gmail.com'),
('bao', '$2y$10$FlIhfnYcJZizVHPkijq8GeCqDbsC94dYAUUQSh7iCsnT0zdQuSmNi', 'Lê Quốc Bảo', 'lequocbao102000@gmail.com'),
('quocbao1010', '$2y$10$EutvI8qYXiZWk3FC5dnNiOnqsbWNGeg16sFInMgC9fzWmUsu0WGbC', 'admin', 'lequocbao102000@gmail.com'),
('tuthanh', '$2y$10$Dq0J1OoC.Th0ZIJ4RY3yGOebqKTEMlXE2XEzZ/gDNfbX3aZf5HBNe', 'Phạm Tú Thanh', 'tuthanh@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `id_cate` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`, `id_cate`) VALUES
(1, 'Laptop MSI', 2),
(2, 'Macbook', 2),
(3, 'Laptop Asus', 2),
(4, 'Iphone', 3),
(5, 'Xiaomi', 3),
(8, 'Samsung', 3),
(9, 'Mouse', 4),
(10, 'Keyboard', 4);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(2, 'Laptops'),
(3, 'SmartPhone'),
(4, 'Gaming');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `id_brand` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `image` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `stock`, `id_brand`, `created_at`, `updated_at`, `image`) VALUES
(7, 'TUF F15 FX506LH', '          Intel Core i5-10300H 2.5GHz up to 4.5GHz 8MB\r\n8GB DDR4 2933MHz (2x SO-DIMM socket, up to 32GB SDRAM)\r\n512GB SSD M.2 PCIE G3X2, 1x slot SATA3 2.5\"\r\nNVIDIA GeForce GTX 1650 4GB GDDR6 + Intel® UHD Graphics              ', 500, 140, 3, '2021-07-29 06:38:45', '2021-07-29 06:38:45', 'asus_tuf.png'),
(8, 'Zenbook Dou 14', 'Intel Core i5-1135G7 2.4GHz up to 4.2GHz 8MB \n8GB LPDDR4X 3200MHz\n512GB M.2 NVMe™ PCIe® 3.0 SSD\n	NVIDIA GeForce MX450 2GB GDDR6 + Intel® Iris Xe Graphics', 1400, 100, 3, '2021-07-29 06:20:49', '2021-07-29 06:20:49', 'asus_zenbook.jpg'),
(9, 'ROG Strix G15 G513QC', '	AMD Ryzen R7-5800H (8 cores, up to 4.3GHz)\r\n8GB DDR4 3200MHz (2x SO-DIMM socket, up to 64GB SDRAM)\r\n512GB M.2 NVMe™ PCIe® 3.0 SSD\r\nNVIDIA GeForce RTX 3050 4GB GDDR6 + AMD Radeon™ Graphics           ', 1100, 200, 3, '2021-07-29 06:31:56', '2021-07-29 06:31:56', 'ausu_rog.png'),
(10, 'ROG Flow X13', '          	AMD Ryzen™ 9 5980HS Processor 3.1 GHz (16M cache, up to 4.8GHz)\r\n32GB(16GB + 16GB On board) DDR4 3200MHz \r\n	1TB M.2 2230 NVMe™ PCIe® 3.0 SSD\r\n	\r\nNVIDIA® GeForce® GTX 1650 Max-Q 4GB GDDR6\r\nNVIDIA GeForce RTX 3080 (1810MHz at 150W)              ', 4100, 50, 3, '2021-07-29 07:22:06', '2021-07-29 07:22:06', 'ausu_rog_gaming.png'),
(11, 'Vivo Book A515EA', '                 	Intel Core i3-1115G4 1.7GHz up to 4.1GHz 8MB\r\n4GB DDR4 2666MHz Onboard (1x SO-DIMM socket, up to 12GB SDRAM)\r\n	512GB SSD M.2 PCIE G3X4\r\nIntel® UHD Graphics for 11th Gen Intel® Processors       ', 600, 120, 3, '2021-07-29 07:57:07', '2021-07-29 07:57:07', 'vivobooke.jpg'),
(12, 'Vivo Book A515EA', '                 	Intel Core i3-1115G4 1.7GHz up to 4.1GHz 8MB\r\n4GB DDR4 2666MHz Onboard (1x SO-DIMM socket, up to 12GB SDRAM)\r\n	512GB SSD M.2 PCIE G3X4\r\nIntel® UHD Graphics for 11th Gen Intel® Processors       ', 600, 120, 3, '2021-07-29 07:11:08', '2021-07-29 07:11:08', 'vivobooke.jpg'),
(13, 'GF65 Thin 10UE', '                                        Intel Core i7-10750H 2.6GHz up to 5.0GHz 12MB+char(40)\r\n	2 x 8GB DDR4 3200MHz (2x SO-DIMM socket, up to 32GB SDRAM)+char(20)\r\n	512GB SSD M.2 PCIE\r\n	NVIDIA GeForce RTX 3060 6GB GDDR6                                    ', 2500, 98, 1, '2021-07-29 07:09:11', '2021-07-29 18:27:11', 'msi_gf65.png'),
(14, 'GL65 Leopard 10SCXK', '                        Intel Core i7-10750H 2.6GHz up to 5.0GHz 12MB</br>\r\n	8GB DDR4 3200MHz (2x SO-DIMM socket, up to 32GB SDRAM)</br>\r\n512GB SSD M.2 PCIE, x1 slot 2.5\" SATA (HDD/SSD)</br>\r\nNVIDIA GeForce GTX 1650 4GB GDDR6 + Intel UHD Graphics</br>', 1050, 400, 1, '2021-07-29 07:25:12', '2021-07-29 07:25:12', 'msi_gl65_leopard.jpg'),
(15, 'Modern 14 B10MW', ' Intel Core i3-10110U 2.1GHz up to 4.1GHz 4MB\r\n	8GB DDR4 3200MHz (1x SO-DIMM socket, up to 32GB SDRAM)\r\n256GB PCIe NVMe™ M.2 SSD\r\n	Intel UHD Graphics\r\n', 510, 42, 1, '2021-07-29 07:51:13', '2021-07-29 07:51:13', 'msi_modern_14_b10mw_605vn_fe23d498903a46089fddc0c0e2fd10d0.jpg'),
(16, 'Pulse GL66 11UDK', '  Intel® Core™ i7-11800H upto 4.60GHz, 8 cores 16 threads\r\n16GB (8GB x 2) DDR4 3200MHz (2 khe, tối đa 64GB)\r\n	512GB NVMe PCIe Gen3x4 SSD       \r\n	NVIDIA GeForce RTX 3050 Ti 4GB GDDR6 + Intel UHD Graphics               ', 1560, 444, 1, '2021-07-29 07:36:16', '2021-07-29 07:36:16', 'msi_pulse.png'),
(17, 'Katana GF76 11UC', '                    Intel Core i5-10300H 2.5GHz up to 4.5GHz 8MB 8GB DDR4 2933MHz (2x SO-DIMM socket, up to 32GB SDRAM) 512GB SSD M.2 PCIE G3X2, 1x slot SATA3 2.5\" NVIDIA GeForce GTX 1650 4GB GDDR6 + Intel® UHD Graphics    ', 1000, 119, 1, '2021-07-29 07:07:18', '2021-07-29 07:07:18', 'mso_katana.png'),
(18, 'Macbook Pro 13', '          	8 nhân với 4 nhân hiệu năng cao và 4 nhân tiết kiệm điện\r\n	8 nhân GPU, 16 nhân Neural Engine\r\n	8GB\r\n	256GB SSD              ', 1600, 44, 2, '2021-07-29 07:33:19', '2021-07-29 07:33:19', 'mbp13touch-space-select-202005_10.jpg'),
(19, 'Redmi Note 9s', '  Qualcomm SM7125 Snapdragon 720G (8 nm)\r\n	4 GB RAM\r\n64 GB ROM                      ', 200, 88, 5, '2021-07-29 07:41:21', '2021-07-29 07:41:21', 'redmi_note_9s_0002_layer_1.jpg'),
(20, 'Poco X3', '   	Qualcomm SM7150-AC Snapdragon 732G (8 nm)\r\n	6 GB RAM\r\n128 GB ROM                     ', 300, 100, 5, '2021-07-29 07:52:22', '2021-07-29 07:52:22', 'xiaomi-poco-x3_2_.jpg'),
(21, 'Redmi note 10', '   Snapdragon 732G (8 nm)\r\n	8 GB RAM\r\n128 GB ROM                     ', 310, 100, 5, '2021-07-29 07:30:25', '2021-07-29 07:30:25', 'xiaomi-redmi-note-10_1.jpg'),
(22, 'Iphone 11', '  	A13 Bionic\r\n	4 GB RAM\r\n	64 GB ROM                      ', 700, 100, 4, '2021-07-29 07:04:27', '2021-07-29 07:04:27', 'iphone11.jpg'),
(23, 'Iphone XR', '  Apple A12 Bionic      \r\n3 GB RAM\r\n	64 GB ROM                ', 500, 99, 4, '2021-07-29 07:58:27', '2021-07-29 07:58:27', 'apple-iphone-xr-64-gb-chinh-hang-vn_3_.jpg'),
(24, 'Iphone 12', ' Apple A14 Bionic (5 nm)\r\n	4 GB RAM\r\n	64 GB ROM                       ', 800, 59, 4, '2021-07-29 07:15:29', '2021-07-29 07:15:29', 'iphone-12_2__3.jpg'),
(25, 'Iphone 12 ProMax', ' 	Apple A14 Bionic (5 nm)\r\n6 GB RAM\r\n128 GB ROM                       ', 1100, 98, 4, '2021-07-29 07:09:30', '2021-07-29 07:09:30', '12_promax.jpg'),
(26, 'Mistel X8 Bumbleble', '   Hãng sản xuất: Mistel\r\nTình trạng: Mới\r\nBảo hành: 24 Tháng\r\nSwitch: Cherry MX Red/Blue/Brown                    ', 100, 97, 10, '2021-07-29 07:54:31', '2021-07-29 07:54:31', 'mistelx8.png'),
(27, 'Leopold FC660MPD Light Pink', '  Hãng sản xuất: Leopold\r\n\r\nTình trạng: Mới 100%\r\n\r\nBảo hành: 24 Tháng\r\n\r\nSwitch: Red                      ', 140, 41, 10, '2021-07-29 07:33:32', '2021-07-29 07:33:32', 'leopard_pink.jpg'),
(28, 'Leopold FC980M PD Dark Yellow', '     Nhà sản xuất: Leopold\r\nTình trạng: Mới\r\nBảo hành: 24 Tháng\r\nSwitch: Cherry MX Brown/ Red                   ', 200, 22, 10, '2021-07-29 07:14:33', '2021-07-29 07:14:33', 'leopold_darkyellow.png'),
(29, 'Logitech G102 Lightsync RGB Black', ' Nhà Sản Xuất : Logitech\r\n\r\n· Tình Trạng : Mới 100% - Fullbox\r\n\r\n· Bảo Hành : 24 tháng \r\n\r\n· Led : RGB                       ', 25, 100, 9, '2021-07-29 07:07:34', '2021-07-29 07:07:34', 'logitech_102_black.jpg'),
(30, 'Logitech G102 Lightsync RGB White', 'Nhà Sản Xuất : Logitech\r\n\r\nTình Trạng : Mới 100% - Fullbox\r\n\r\n Bảo Hành : 24 tháng \r\n\r\n Led : RGB\r\n\r\n         ', 20, 190, 9, '2021-07-29 07:47:34', '2021-07-29 07:47:34', 'logitech_102_white.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`id`, `username`, `created_at`, `address`, `total`) VALUES
(263175007, 'tuthanh', '2021-07-31 16:13:46', ', , ', 2500),
(281923711, 'tuthanh', '2021-08-01 14:33:45', ', , ', 1600),
(472867615, 'tuthanh', '2021-07-31 16:11:47', 'Ap Chien Luoc, Binh Tan, HoCHiMinh', 3010),
(677347716, 'bao', '2021-07-31 17:07:00', 'Ap Chien Luoc, Binh Tan, HoCHiMinh', 1800),
(738887070, 'bao', '2021-07-31 17:45:28', ', , ', 3310);

-- --------------------------------------------------------

--
-- Table structure for table `receipt_details`
--

CREATE TABLE `receipt_details` (
  `id_receipt` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `money` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `receipt_details`
--

INSERT INTO `receipt_details` (`id_receipt`, `id_product`, `price`, `amount`, `money`) VALUES
(263175007, 13, 2500, 1, 2500),
(281923711, 18, 1600, 1, 1600),
(472867615, 13, 2500, 1, 2500),
(472867615, 15, 510, 1, 510),
(677347716, 17, 1000, 1, 1000),
(677347716, 24, 800, 1, 800),
(738887070, 13, 2500, 1, 2500),
(738887070, 15, 510, 1, 510),
(738887070, 26, 100, 3, 300);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_f1` (`id_cate`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_f2` (`id_brand`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_3` (`username`);

--
-- Indexes for table `receipt_details`
--
ALTER TABLE `receipt_details`
  ADD PRIMARY KEY (`id_receipt`,`id_product`),
  ADD KEY `fk_key2` (`id_product`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `brand`
--
ALTER TABLE `brand`
  ADD CONSTRAINT `fk_f1` FOREIGN KEY (`id_cate`) REFERENCES `category` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_f2` FOREIGN KEY (`id_brand`) REFERENCES `brand` (`id`);

--
-- Constraints for table `receipt`
--
ALTER TABLE `receipt`
  ADD CONSTRAINT `fk_3` FOREIGN KEY (`username`) REFERENCES `account` (`username`);

--
-- Constraints for table `receipt_details`
--
ALTER TABLE `receipt_details`
  ADD CONSTRAINT `fk_key1` FOREIGN KEY (`id_receipt`) REFERENCES `receipt` (`id`),
  ADD CONSTRAINT `fk_key2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
