-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 12:22 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xinawangspeed`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin-01', '$2y$10$bNA49X4Kqo/llapWAwooleHCBKRqOzcHftBiPcadffJ4QGFMJLZxu'),
(2, 'admin-02', '$2y$10$pkhu78jpvZga0oRYfB3SseKJgzkd3W15u1Rx7VUstYsfKJ1h.xXba'),
(3, 'admin-04', '$2y$10$QctSpiZ9FU6mIe7mMdy5l.zuzbnEGsfxpLI5chSa40.G1.D8OBo8.');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `category`, `price`, `stok`, `gambar`) VALUES
(15, 'Experience T-Shirt V1', 'T-Shirt', 'Rp. 120.000', 12, '629af5181d4ef.jpg'),
(16, 'Experience T-Shirt V2', 't-Shirt', 'Rp. 120.000', 24, '629db1e45a21e.jpg'),
(17, 'Experience T-Shirt V3', 'T-Shirt', 'Rp. 120.000', 24, '629db20ce4e0e.jpg'),
(18, 'Retro Samurai V1', 'Hoodie', 'Rp. 200.000', 12, '629db31e147c7.jpg'),
(19, 'Oni Series V1', 'Hoodie  ', 'Rp. 220.000 ', 24, '629db50f1d2dd.jpg'),
(20, 'Overwatch Series V1', 'Hoodie', 'Rp. 220.000', 24, '629db5a3943b9.jpg'),
(21, 'Oni Series V2', 'Hoodie', 'Rp. 220.000', 24, '629db5ec85c93.jpg'),
(22, 'Experience T-Shirt V4', 'T-Shirt', 'Rp. 120.000', 12, '629db64911d31.jpg'),
(23, 'Experience T-Shirt V5', 'T-Shirt', 'Rp. 120.000', 12, '629db7bbe31ae.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
