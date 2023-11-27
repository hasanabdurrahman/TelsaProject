-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2023 at 12:53 PM
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
-- Table structure for table `agen`
--

CREATE TABLE `agen` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `distrik` varchar(25) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `latitude` text NOT NULL,
  `longitude` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agen`
--

INSERT INTO `agen` (`id`, `nama`, `alamat`, `distrik`, `telp`, `latitude`, `longitude`) VALUES
(1, 'Telur Ayam Negeri', 'Jl. Asisor No.87, RT.02/RW.03, Kedung Jaya, Kec. Tanah Sereal, Kota Bogor, Jawa Barat 16162', 'Tanah Sereal', '082343884339', '-6.5701103', '106.7903381'),
(2, 'Telur Ayam', 'Gg. Hidayah Blok Masjid No.3, RT.2/RW.04, Sukamantri, Kec. Tamansari, Kota Bogor, Jawa Barat 16610', 'Taman Sari', '082211119805', '6.6450351', '106.7804216'),
(3, 'Telur Ayam Alyssa', 'Jl. Gn. Gadung/Rancamaya No.14, RT.01/RW.04, Cipaku, Kec. Bogor Sel., Kota Bogor, Jawa Barat 16133', 'Bogor Selatan', '08197546869', '-6.6379955', '106.8140091'),
(4, 'Telur dan Ayam', 'Ruko orchard, Jl. Bogor Nirwana Residence, RT.06/RW.12, Mulyaharja, Kec. Bogor Sel., Kota Bogor, Jawa Barat 16135', 'Bogor Selatan', '087789516070', '-6.6310787', '106.7933953'),
(5, 'Telur Raja Makmur Bogor', 'Jl. Artzimar II No.59-60, RT.01/RW.18, Tegal Gundil, Kec. Bogor Utara, Kota Bogor, Jawa Barat 16152', 'Bogor Utara', '085781227799', '-6.5769499', '106.8056358'),
(6, 'Telur Raja Makmur 2 Bogor', 'Blok Balong No.26, Jl. Ciremei Ujung, RT.04/RW.10, Bantarjati, Bogor Utara, Bogor City, West Java 16153', 'Bogor Utara', '085781227799', '-6.5786074', '106.7991066');

-- --------------------------------------------------------

--
-- Table structure for table `distributor`
--

CREATE TABLE `distributor` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `distrik` varchar(25) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `latitude` text NOT NULL,
  `longitude` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `distributor`
--

INSERT INTO `distributor` (`id`, `nama`, `alamat`, `distrik`, `telp`, `latitude`, `longitude`) VALUES
(1, 'Telur Bogor', 'Cimanggu Pabuaran Jalan Akasia 2, Jl. Cimanggu Barata Jl. Cimanggu Pabuaran, Kota Bogor, Jawa Barat', 'Cimanggu', '081295206633', '', '0'),
(2, 'Telur Bogor IMSA Poetra', 'Jl. Raya Dramaga Komplek HE Suradi No.KM 07, RT.03/RW.02, Margajaya, Kec. Bogor Barat., Kota Bogor, Jawa Barat 16116', 'Bogor Barat', '081211705918', '-6.5719453', '106.7435357'),
(3, 'Telur Bogor', 'Jalan Lingkar Dramaga Lingkar, Kecamatan Dramaga, Kabupaten Bogor, Jawa Barat 16680', 'Dramaga', '081517028196', '-6.5781145', '106.7350732'),
(4, 'Agen Telur Prawira 88', 'Jl. Kp. Laladon Kadoya No.08, RT.1/RW.5, Parakan, Kec. Ciomas, Kabupaten Bogor, Jawa Barat 16610', 'Ciomas', '081212130550', '-6.6226879', '106.7619689');

-- --------------------------------------------------------

--
-- Table structure for table `peternak`
--

CREATE TABLE `peternak` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `distrik` varchar(25) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `latitude` text NOT NULL,
  `longitude` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peternak`
--

INSERT INTO `peternak` (`id`, `nama`, `alamat`, `distrik`, `telp`, `latitude`, `longitude`) VALUES
(1, 'UD. Aneka Unggas', 'Jl. Setu Asem Raya, RT.01/RW.03, Mekarwangi, Kec. Tanah Sereal, Kota Bogor, Jawa Barat 16168', 'Tanah Sereal', '081806201869', '-6.5346029', '106.7758902'),
(2, 'Kandang Ayam Pelung Cilendek', 'RT.04/RW.04, West Cilendek, Bogor Barat, Bogor City, West Java 16112', 'Bogor Barat', '0895365371036', '-6.5759256', '106.7639214'),
(3, 'Peternak Ayam Kampung Kang Isan', 'Jl. Balubur Sari No.34, RT.03/RW.01, Muarasari, Kec. Bogor Sel., Kota Bogor, Jawa Barat 16137', 'Bogor Selatan', '081212034258', '-6.6454481', '106.8292741');

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
(54, 'Telur Ayam ', 'gambar/98-telur-ayam-kampung.jpg', 55, 'Telur ayam kampung ', 40000);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_admin`
--

CREATE TABLE `tabel_admin` (
  `id` int(7) NOT NULL,
  `fnama` varchar(20) NOT NULL,
  `lnama` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_admin`
--

INSERT INTO `tabel_admin` (`id`, `fnama`, `lnama`, `email`, `password`, `status`) VALUES
(37, 'Nadhila', 'Shafaresta', 'shafarestanadhila@apps.ipb.ac.', '7tujuhtahun', 'Peternak');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_customer`
--

CREATE TABLE `tabel_customer` (
  `id` int(11) NOT NULL,
  `fnama` varchar(10) NOT NULL,
  `lnama` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_customer`
--

INSERT INTO `tabel_customer` (`id`, `fnama`, `lnama`, `email`, `password`, `status`) VALUES
(25, 'Nadhila', 'Shafaresta', 'nadhshafres@gmail.com', '$2y$10$aFrmPo9N0Wlgr', 'customer'),
(26, 'Adele', 'Mayasi', 'mindahendra@gmail.com', '$2y$10$BPmhmaArlhSOn', 'customer'),
(27, 'Nadhila', 'Shafaresta', 'shafarestanadhila@apps.ipb.ac.id', '$2y$10$z8Fy8KOgD.xjP', 'customer'),
(29, 'khairunnis', 'kusnadi', 'khairunnisahayyukusnadi@gmail.com', '$2y$10$MXmNzVJOrcO5t', 'customer'),
(30, 'khairunnis', 'kusnadi', '20_aulia.irna@apps.ipb.ac.id', '$2y$10$uh6UAVtnRHzOe', 'customer'),
(31, 'dany', 'fadhilah', 'danyfadhilah@gmail.com', '$2y$10$KQQPdFF9n/nk9', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `track`
--

CREATE TABLE `track` (
  `id` int(11) NOT NULL,
  `resi` varchar(15) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `status` text NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `track`
--

INSERT INTO `track` (`id`, `resi`, `id_barang`, `id_customer`, `status`, `waktu`) VALUES
(1, 'TLS123', 1, 1, 'Dikirim dari gudang', '2023-10-18 11:51:57'),
(2, 'TLS123', 1, 1, 'Barang berada di gudang Jakarta', '2023-10-18 12:07:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agen`
--
ALTER TABLE `agen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `distributor`
--
ALTER TABLE `distributor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peternak`
--
ALTER TABLE `peternak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk_peternak`
--
ALTER TABLE `produk_peternak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_admin`
--
ALTER TABLE `tabel_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_customer`
--
ALTER TABLE `tabel_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `track`
--
ALTER TABLE `track`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agen`
--
ALTER TABLE `agen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `distributor`
--
ALTER TABLE `distributor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `peternak`
--
ALTER TABLE `peternak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produk_peternak`
--
ALTER TABLE `produk_peternak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tabel_admin`
--
ALTER TABLE `tabel_admin`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tabel_customer`
--
ALTER TABLE `tabel_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `track`
--
ALTER TABLE `track`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
