-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2023 at 05:52 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logreg`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_best`
--

CREATE TABLE `product_best` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` float NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `merk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_best`
--

INSERT INTO `product_best` (`product_id`, `product_name`, `product_price`, `product_image`, `kategori`, `merk`) VALUES
(1, 'Asus ROG Strix SCAR 18 G8', 69249, './img/1.0/produk/rog1.png', 'laptop', 'Asus'),
(2, 'Asus TUF Gaming F15 FX507', 22429, './img/1.0/produk/rog2.png', 'laptop', 'Asus'),
(3, 'MSI Katana 15 B13VFK (9S7', 24499, './img/1.0/produk/msi2.png', 'laptop', 'MSI'),
(4, 'Asus ROG Zephyrus M16 GU6', 41749, './img/1.0/produk/rog3.png', 'laptop', 'Asus');

-- --------------------------------------------------------

--
-- Table structure for table `product_u3`
--

CREATE TABLE `product_u3` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` float NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `merk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_u3`
--

INSERT INTO `product_u3` (`product_id`, `product_name`, `product_price`, `product_image`, `kategori`, `merk`) VALUES
(1, 'Rexus Headset Gaming Thun', 419, './img/1.0/produk/headset1.png', 'aksesoris', 'Rexus'),
(2, 'ASUS TUF Gaming Mouse, De', 429, './img/1.0/produk/mouse1.jpg', 'aksesoris', 'Asus'),
(3, 'Logitech G502 X Plus Mous', 2209, './img/1.0/produk/mouse2.jpg', 'aksesoris', 'Logitech'),
(4, 'Razer BlackWidow V3 Mini ', 2199, './img/1.0/produk/keyboard1.png', 'aksesoris', 'Razer'),
(5, 'JBL FLIP 5 Speaker Blueto', 1233, './img/1.0/produk/speaker1.jpg', 'aksesoris', 'JBL'),
(6, 'ASUS ROG Strix Scope RX E', 2249, './img/1.0/produk/keyboard2.png', 'aksesoris', 'Asus'),
(7, 'Monster N1S Wired USB 7.1', 2856, './img/1.0/produk/headset2.png', 'aksesoris', 'Monster'),
(8, 'Speaker ROBOT RS200 Lapto', 661, './img/1.0/produk/speaker4.jpg', 'aksesoris', 'Robot');

-- --------------------------------------------------------

--
-- Table structure for table `product_u10`
--

CREATE TABLE `product_u10` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` float NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `merk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_u10`
--

INSERT INTO `product_u10` (`product_id`, `product_name`, `product_price`, `product_image`, `kategori`, `merk`) VALUES
(1, 'MSI Modern 14 B10MW - Car', 7499, './img/1.0/produk/msi3.png', 'laptop', 'MSI'),
(2, 'Acer Aspire 5 Slim (A514-', 6693, './img/1.0/produk/acer1.png', 'laptop', 'Acer'),
(3, 'Asus A416JAO-VIPS525/VIPS', 7799, './img/1.0/produk/asus1.jpg', 'laptop', 'Asus'),
(4, 'Asus VivoBook Pro 14X Ole', 9049, './img/1.0/produk/asus2.png', 'laptop', 'Asus'),
(5, 'Asus A416JAO-VIPS325/VIPS', 5749, './img/1.0/produk/asus3.png', 'laptop', 'Asus'),
(6, 'Dell Inspiron 3515 AMD Ry', 7779, './img/1.0/produk/dell1.png', 'laptop', 'Dell'),
(7, 'Lenovo IdeaPad 1 14AMN7-3', 7889, './img/1.0/produk/lenovo1.png', 'laptop', 'Lenovo'),
(8, 'HP 14s-dk1515AU /AMD Ryze', 6446, './img/1.0/produk/hp1.png', 'laptop', 'HP');

-- --------------------------------------------------------

--
-- Table structure for table `reg_user`
--

CREATE TABLE `reg_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `no_tlp` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `rpass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reg_user`
--

INSERT INTO `reg_user` (`id_user`, `username`, `no_tlp`, `email`, `password`, `rpass`) VALUES
(5, 'admin', '012345678912', 'admin@gmail.com', '123', '123'),
(13, 'PANDAR', '081283882607', 'pandar@gmail.com', '123', '123'),
(29, 'Zwei', '123', 'amir@gmail.com', 'asd', 'asd'),
(30, 'arvin', '1234567', 'arvin@gmail.com', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `No` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subjek` varchar(50) NOT NULL,
  `pesan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`No`, `nama`, `email`, `subjek`, `pesan`) VALUES
(30, 'Irvandharsyah Madiyatama', 'admin@gmail.com', 'test', '1234'),
(34, 'Aufa Fakhri Tiyo Widodo', 'opak@gmail.com', 'barang ilang', 'bang barang saya ilang di duga kurir ngantuk'),
(36, 'Arvin ', 'arvin@gmail.com', 'barang rusak', 'ppppppppppppppppppppp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_best`
--
ALTER TABLE `product_best`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_u3`
--
ALTER TABLE `product_u3`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_u10`
--
ALTER TABLE `product_u10`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `reg_user`
--
ALTER TABLE `reg_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_best`
--
ALTER TABLE `product_best`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product_u3`
--
ALTER TABLE `product_u3`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_u10`
--
ALTER TABLE `product_u10`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reg_user`
--
ALTER TABLE `reg_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
