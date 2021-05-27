-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2021 at 10:23 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `novel`
--

-- --------------------------------------------------------

--
-- Table structure for table `prakpw_novel_203040083`
--

CREATE TABLE `prakpw_novel_203040083` (
  `id` int(11) NOT NULL,
  `judul` varchar(99) NOT NULL,
  `gambar` varchar(99) NOT NULL,
  `pengarang` varchar(99) NOT NULL,
  `sinopsis` varchar(99) NOT NULL,
  `harga` int(99) NOT NULL,
  `kategori` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prakpw_novel_203040083`
--

INSERT INTO `prakpw_novel_203040083` (`id`, `judul`, `gambar`, `pengarang`, `sinopsis`, `harga`, `kategori`) VALUES
(1, 'Danur', 'danur.jpg', 'Risa Saraswati', 'Buku ini menceritakan tentang persahabatan Risa dan kelima sahabatnya yang berbeda dimensi lain.', 66000, 'Novel'),
(2, 'Ayat - ayat cinta', 'ayat-ayat cinta.png', 'Habiburrahman El Shirazy', 'mengisahkan tentang seorang pemuda indonesia yang bernama Fahri, berasal dari keluarga sederhana...', 56000, 'Novel'),
(3, 'Teman Berjuang ', 'berjuang.jpg', 'Indra Sugiarto', 'Novel untuk Para pejuang yang berjuang menggapai tujuan dan membutuhkan dukungan...', 84000, 'Novel'),
(4, 'Tumbuh Dari Luka ', 'tumbuh.jpg', 'Indra Sugiarto', 'Novel ini untuk para pejuang yang ingin memilih tumbuh atas hancur dari luka', 99000, 'Novel'),
(5, 'Laskar Pelangi', 'pelangi.jpg', 'Andrea Hirata', 'Novel Laskar Pelangi bercerita tentang kehidupan anak-anak di Belitong...', 89000, 'Novel'),
(6, 'Sang Pemimpin ', 'pemimpin.jpg', 'Andrea Hirata', 'Buku Kedua Andrea Hirata ini bercerita tentang masa SMA tiga orang pemuda, yaitu Ikal, Arai dan Jim', 63000, 'Novel'),
(7, 'Perahu kertas', 'kertas.jpg', 'Dee Lestari', 'Perahu Kertas mengisahkan pasang surut hubungan dua anak manusia, yaitu Kugy dan Keenan...', 66000, 'Novel'),
(8, 'Sabtu Bersama Bapak ', 'sabtu.jpg', 'Aditya Mulya', 'Berawal dari keluarga kecil seorang ayah bernama Gunawan Garnida yang divonis sakit...', 45000, 'Novel'),
(9, 'Dilan 1991', 'dilan.jpg', 'Pidi baiq', 'Novel Dilan ini menceritakan sebuah kisah seorang perempuan yang bernama Milea...', 79000, 'Novel'),
(10, 'Milea: Suara Dari Dilan ', 'milea.jpg', 'Pidi baiq', 'Novel ini menceritakan pengenalan singkat Dilan waktu dia masih kecil...', 99000, 'Novel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prakpw_novel_203040083`
--
ALTER TABLE `prakpw_novel_203040083`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prakpw_novel_203040083`
--
ALTER TABLE `prakpw_novel_203040083`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
