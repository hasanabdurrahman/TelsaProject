-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2023 at 07:49 AM
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
-- Database: `telsa`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk_peternak`
--

CREATE TABLE `produk_peternak` (
  `id` int(11) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `stok` double NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk_peternak`
--

INSERT INTO `produk_peternak` (`id`, `jenis`, `gambar`, `stok`, `deskripsi`, `harga`) VALUES
(2, 'Telur Ayam Negeri', 'gambar/telur-ayam-negeri.png', 100, 'Telur ayam negeri', 32000),
(54, 'Telur Ayam ', 'gambar/98-telur-ayam-kampung.jpg', 55, 'Telur ayam kampung ', 40000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk_peternak`
--
ALTER TABLE `produk_peternak`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk_peternak`
--
ALTER TABLE `produk_peternak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
