-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2023 at 03:25 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatbot`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `pertanyaan` varchar(300) NOT NULL,
  `jawaban` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `pertanyaan`, `jawaban`) VALUES
(1, 'Halo|hallo|hai|hay|hi|woy|', 'Hai teman, apa kabarnya nih?'),
(2, 'Telsa adalah|Apa itu Telsa?|Telsa', 'Telsa merupakan web distribusi telur yang membantu peternak, distributor, dan agen telur lokal untuk mengakses konsumen di daerah terdekat'),
(3, 'Apa tujuan telsa dibuat?|Tujuan Pembuatan Telsa?', 'TELSA dibuat untuk tujuan membantu ketahanan pangan di daerah sekitar yang pada bidang pendistribusian telur agar pendistribusian telur lebih terstruktur dan tidak mencegah lonjakan kenaikan harga yang tidak normal karena pendistribusian yang tidak merata kepada masyarakat'),
(4, 'Sampai jumpa|sampai jumpa lagi|sampai ketemu lagi', 'Baiklah, sampai jumpa :)'),
(5, 'Assalamualaikum | assalam | aslm | ass', 'WaAlaikumsalam..'),
(6, 'Selamat pagi | pagi | ', 'Hai, Selamat Pagi teman..'),
(7, 'Selamat siang', 'Hai, Selamat siang teman..'),
(8, 'Baik|sehat|', 'Syurkurlah, semoga sehat selalu ya..');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
