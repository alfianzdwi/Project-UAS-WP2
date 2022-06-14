-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2022 at 04:19 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adoy_bakery_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(11) NOT NULL,
  `cus_name` varchar(55) NOT NULL,
  `cus_email` varchar(55) NOT NULL,
  `cus_password` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `cus_name`, `cus_email`, `cus_password`) VALUES
(67, 'user0004', 'user0004@gmail.com', '3cbff8ff5c86b82d5e476eb24c353a34'),
(64, 'user0001', 'user0001@gmail.com', '54a29633c81054529dc24b7605008b25'),
(65, 'user0002', 'user0002@gmail.com', '36fff8d16de220b6122e675b1e72afc1'),
(66, 'user0003', 'user0003@gmail.com', '64969d97f2cde87dd96042c4292ee78e'),
(68, 'user01', 'user01@gmail.com', '66796b60527d0165430cb551b8cbf144'),
(69, 'user001', 'user001@gmail.com', 'ed2b1f468c5f915f3f1cf75d7068baae'),
(70, 'user0008', 'user0008@gmail.com', '14f68955a26e6b6e061ff1ed9034d549'),
(71, 'user0009', 'user0009@gmail.com', '4e01e9b60cd80e165246ea58ab448988'),
(72, 'user0010', 'user0010@gmail.com', '60425f025ce2eb8fe82ee83e5f74b428'),
(73, 'Zartan', 'zartanzicko09@gmail.com', 'b48bf7a9b66555cf767222c5a7dd6d01'),
(75, 'Alfian', 'alfianzzdwip@gmail.com', '43d93b7b2bb05e388f47e9c188a84864'),
(76, 'user00011', 'user00011@gmail.com', '7042737a2852a75d6086066191f32094'),
(77, 'user00001', 'user00001@gmail.com', '20d569411aefdef68b61e937668ab00f'),
(78, 'user00002', 'user00002@gmail.com', '396777eb63757ae1307b1e0a8161e770'),
(79, 'user00003', 'user00003@gmail.com', '3852c06fe7e30511ef93398dfa6fbe07'),
(80, 'user1', 'user1@gmail.com', 'c3154c5ade255b20220f88685620dc7e'),
(81, 'user000111', 'user000111@gmail.com', '4fe551f7b358462b27b5227c3b23d501');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pesanan`
--

CREATE TABLE `detail_pesanan` (
  `id_detail_pesanan` int(12) NOT NULL,
  `id_pesanan` int(11) NOT NULL,
  `id_produk` int(5) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` float NOT NULL,
  `jumlah` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_pesanan`
--

INSERT INTO `detail_pesanan` (`id_detail_pesanan`, `id_pesanan`, `id_produk`, `nama_produk`, `harga_produk`, `jumlah`) VALUES
(35, 38, 8, 'Kue Coklat', 90000, 3),
(36, 39, 9, 'Kue Keju', 50000, 5),
(37, 40, 8, 'Kue Coklat', 90000, 1),
(38, 41, 5, 'Kue Putu Mayang', 5000, 15),
(39, 42, 7, 'Kue Red Velvet', 105000, 3),
(34, 37, 4, 'Kue Cucur', 5000, 12),
(33, 36, 8, 'Kue Coklat', 90000, 1),
(32, 35, 6, 'Kue Nastar', 50000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `status_pembayaran` varchar(20) NOT NULL DEFAULT 'pending',
  `metode_pembayaran` varchar(20) NOT NULL,
  `tanggal_pembayaran` timestamp NOT NULL DEFAULT current_timestamp(),
  `catatan_pembayaran` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `status_pembayaran`, `metode_pembayaran`, `tanggal_pembayaran`, `catatan_pembayaran`) VALUES
(1, 'pending', 'cash_on_delivery', '2022-06-07 03:01:16', NULL),
(2, 'pending', 'cash_on_delivery', '2022-06-07 03:02:50', NULL),
(3, 'pending', 'cash_on_delivery', '2022-06-07 03:03:31', NULL),
(45, 'pending', 'cash_on_delivery', '2022-06-12 02:19:27', NULL),
(44, 'pending', 'cash_on_delivery', '2022-06-12 02:18:33', NULL),
(43, 'pending', 'cash_on_delivery', '2022-06-12 02:16:11', NULL),
(42, 'pending', 'cash_on_delivery', '2022-06-12 02:15:06', NULL),
(41, 'pending', 'cash_on_delivery', '2022-06-12 02:14:27', NULL),
(40, 'pending', 'cash_on_delivery', '2022-06-12 02:12:17', NULL),
(39, 'pending', 'cash_on_delivery', '2022-06-12 02:11:34', NULL),
(38, 'pending', 'cash_on_delivery', '2022-06-10 08:26:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id_pengiriman` int(11) NOT NULL,
  `cus_name` varchar(55) NOT NULL,
  `cus_email` varchar(55) NOT NULL,
  `cus_notelp` varchar(14) NOT NULL,
  `cus_alamat` text NOT NULL,
  `cus_kec` varchar(55) NOT NULL,
  `cus_kota` varchar(55) NOT NULL,
  `cus_kodepos` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengiriman`
--

INSERT INTO `pengiriman` (`id_pengiriman`, `cus_name`, `cus_email`, `cus_notelp`, `cus_alamat`, `cus_kec`, `cus_kota`, `cus_kodepos`) VALUES
(25, 'user01', 'user0001@gmail.com', '028329641822', 'Cikempong Raya', 'Cibinong', 'Bogor', '23140'),
(19, 'user01', 'alfiandwiprayoga32552312@gmail.com', '08589235', 'Jl.Raya Bojonggede Rt.01/Rw.01 No.21,Kel.Bojonggede,Kec.Bojonggede', 'Bedahan', '-- Kota --', '16922'),
(26, 'user01', 'alfiandwiprayoga12@gmail.com', '085893713278', 'Jl.Raya Bojonggede Rt.01/Rw.01 No.21,Kel.Bojonggede,Kec.Bojonggede', 'Bojonggede', 'Bogor', '16922'),
(27, 'user0001', 'user0001@gmail.com', '01801280128', 'Cikempong', 'Cibinong', 'Bogor', '12441'),
(28, 'user0001', 'user0001@gmail.com', '01801280128', 'Cikempong', 'Cibinong', 'Bogor', '12441'),
(29, 'user01', 'alfiandwiprayoga32552312@gmail.com', '08589235', 'Jl.Raya Bojonggede Rt.01/Rw.01 No.21,Kel.Bojonggede,Kec.Bojonggede', 'Bojonggede', 'Bogor', '16922'),
(30, 'user001', 'user001@gmail.com', '0895674356', 'Solomanise', 'Cibinong', 'Jakarta', '16920'),
(31, 'Zartan', 'zartanzicko09@gmail.com', '089613123141ad', 'Solomanisefdsada', 'Bojong Gede', 'Depok', '16900'),
(32, 'user00011', 'user0001@gmail.com', '01801280128', 'Cikempong', 'Cibinong', 'Bogor', '12441');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `id_pengiriman` int(11) NOT NULL,
  `id_pembayaran` int(11) NOT NULL,
  `total_pesanan` float NOT NULL,
  `status_pesanan` varchar(20) NOT NULL DEFAULT 'pending',
  `tanggal_pesanan` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `cus_id`, `id_pengiriman`, `id_pembayaran`, `total_pesanan`, `status_pesanan`, `tanggal_pesanan`) VALUES
(42, 81, 32, 45, 325000, 'pending', '2022-06-12 02:19:27'),
(41, 65, 31, 44, 85000, 'pending', '2022-06-12 02:18:33'),
(40, 64, 30, 43, 100000, 'pending', '2022-06-12 02:16:11'),
(39, 78, 29, 42, 260000, 'pending', '2022-06-12 02:15:06'),
(38, 64, 28, 41, 280000, 'pending', '2022-06-12 02:14:27'),
(37, 64, 27, 40, 70000, 'pending', '2022-06-12 02:12:17'),
(36, 64, 26, 39, 100000, 'pending', '2022-06-12 02:11:34'),
(35, 64, 25, 38, 110000, 'pending', '2022-06-10 08:26:17');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_pro` int(11) NOT NULL,
  `judul_pro` varchar(255) NOT NULL,
  `desk_pro` text NOT NULL,
  `harga_pro` float NOT NULL,
  `jumlah_pro` tinyint(4) NOT NULL,
  `ketersediaan_pro` tinyint(4) NOT NULL COMMENT 'status 1=instock, 2=outof stock, 3= up coming',
  `status_pro` tinyint(1) NOT NULL DEFAULT 1 COMMENT 'status=1 enable status=2 disable',
  `gambar_pro` text DEFAULT NULL,
  `pro_top` tinyint(1) DEFAULT 0 COMMENT 'show top value=1 other wise value=0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_pro`, `judul_pro`, `desk_pro`, `harga_pro`, `jumlah_pro`, `ketersediaan_pro`, `status_pro`, `gambar_pro`, `pro_top`) VALUES
(4, 'Kue Cucur', '', 5000, 33, 1, 1, 'uploads/WhatsApp_Image_2022-06-04_at_22_03_401.jpeg', NULL),
(5, 'Kue Putu Mayang', '', 5000, -26, 1, 1, 'uploads/WhatsApp_Image_2022-06-04_at_22_09_262.jpeg', 1),
(6, 'Kue Nastar', '', 50000, 8, 1, 1, 'uploads/WhatsApp_Image_2022-06-04_at_22_01_49_(2)2.jpeg', 1),
(7, 'Kue Red Velvet', '', 105000, -19, 1, 1, 'uploads/WhatsApp_Image_2022-06-04_at_22_01_49_(4)2.jpeg', 1),
(8, 'Kue Coklat', '', 90000, -28, 1, 1, 'uploads/WhatsApp_Image_2022-06-04_at_22_01_49_(5)2.jpeg', NULL),
(9, 'Kue Keju', '', 50000, 3, 1, 1, 'uploads/WhatsApp_Image_2022-06-04_at_22_01_49_(1)2.jpeg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_role` tinyint(3) NOT NULL,
  `user_status` tinyint(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `user_email`, `user_password`, `user_role`, `user_status`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$fikf2sCL0Wvc28cs0ECT/eKnfMlHuXCzu2UyyDvUX81tQQwo0ZlWO', 1, 1),
(16, 'Admin Kelompok 4', 'kelompok4@gmail.com', '$2y$10$fikf2sCL0Wvc28cs0ECT/eKnfMlHuXCzu2UyyDvUX81tQQwo0ZlWO', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD PRIMARY KEY (`id_detail_pesanan`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_pro`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  MODIFY `id_detail_pesanan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id_pengiriman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
