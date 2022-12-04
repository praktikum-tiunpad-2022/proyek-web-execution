-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2022 at 07:35 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `tipe_harga` int(3) NOT NULL,
  `harga` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`tipe_harga`, `harga`) VALUES
(1, 15000),
(2, 20000),
(3, 25000);

-- --------------------------------------------------------

--
-- Table structure for table `icecream`
--

CREATE TABLE `icecream` (
  `id_iceCream` int(3) NOT NULL,
  `nama_iceCream` varchar(20) DEFAULT NULL,
  `topping` varchar(20) DEFAULT NULL,
  `tipe_harga` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `icecream`
--

INSERT INTO `icecream` (`id_iceCream`, `nama_iceCream`, `topping`, `tipe_harga`) VALUES
(1, 'Chocolate', 'Oreo', 1),
(2, 'Vanilla', 'Caramel', 1),
(5, 'Chocochips Ice Cream', 'Kacang', 28000),
(6, 'Snow Oreo Ice Cream', 'Oreo', 17000),
(7, 'Choco-Mocca Ice Crea', 'Cokelat', 21000),
(8, 'Sweet Corn Ice Cream', 'Kacang', 25000),
(9, 'Sweet Vanilla Ice Cr', 'Kismis', 32000),
(10, 'Biscuit Ice Cream', 'Cokelat', 18000),
(11, 'Wealth Chocolate Ice', 'Cokelat', 27000),
(12, 'Sweet Cutton Ice Cre', 'Susu', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(3) NOT NULL,
  `nama_pelanggan` varchar(30) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_telp` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat`, `no_telp`) VALUES
(1, 'Andi', 'Bandung', 162099000),
(2, 'Budi', 'Jakarta', 18246098),
(3, 'Candra', 'Padang', 134665270),
(4, 'Dina', 'Semarang', 146864653),
(5, 'Emil', 'Lampung', 130182291),
(6, 'Lim', 'Bandung', 112376324),
(7, 'Vina', 'Surabaya', 2147483647),
(8, 'Rika', 'Bandung', 231435643),
(9, 'Aen', 'Lampung', 2147483647),
(10, 'Kenneth', 'Surakarta', 2147483647),
(11, 'Serena', 'Aceh', 493827267),
(12, 'Serena', 'Aceh', 493827267),
(13, 'Sisca', 'Bandung', 839462787),
(14, 'Nicho', 'Yogyakarta', 2147483647),
(15, 'Mika', 'Yogyakarta', 2147483647),
(16, 'Villenn', 'Jakarta', 34456322),
(17, 'Eilen', 'Sumatra Barat', 24243251),
(18, 'Elsa', 'Bandung', 12433),
(19, NULL, NULL, NULL),
(20, 'qwe', 'sdad', 1222),
(21, NULL, NULL, NULL),
(22, NULL, NULL, NULL),
(23, NULL, NULL, NULL),
(24, NULL, NULL, NULL),
(25, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `no_transaksi` int(3) NOT NULL,
  `id_pelanggan` int(3) DEFAULT NULL,
  `id_iceCream` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`no_transaksi`, `id_pelanggan`, `id_iceCream`) VALUES
(1, 1, 2),
(2, 2, 3),
(3, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(2, 'diona12@gmail.com', 'diona12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`tipe_harga`);

--
-- Indexes for table `icecream`
--
ALTER TABLE `icecream`
  ADD PRIMARY KEY (`id_iceCream`),
  ADD KEY `tipe_harga` (`tipe_harga`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no_transaksi`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_iceCream` (`id_iceCream`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `no_transaksi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
