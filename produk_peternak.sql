-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2023 at 04:52 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
  `nama_produk` varchar(20) NOT NULL,
  `kategori_produk` varchar(20) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `stok` double NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `harga` double NOT NULL,
  `berat` double NOT NULL,
  `terjual` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk_peternak`
--

INSERT INTO `produk_peternak` (`id`, `nama_produk`, `kategori_produk`, `jenis`, `gambar`, `stok`, `deskripsi`, `harga`, `berat`, `terjual`) VALUES
(2, 'Telur Ayam Kampung', 'Telur Ayam', 'Satu Variasi', 'image/98-telur-ayam-kampung.jpg', 55, 'Telur ayam kampung ', 40000, 900, 68),
(60, 'Telur Ayam Negeri', 'Telur Ayam', 'Satu Variasi', 'image/kedua.png', 55, 'Telur ayam Negeri', 50000, 900, 100);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
