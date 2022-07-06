-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2022 at 06:13 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_mata_kuliah`
--

CREATE TABLE `daftar_mata_kuliah` (
  `id_mata_kuliah` int(11) NOT NULL,
  `kode_mata_kuliah` varchar(50) NOT NULL,
  `nama_mata_kuliah` varchar(50) NOT NULL,
  `deskripsi_mata_kuliah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_mata_kuliah`
--

INSERT INTO `daftar_mata_kuliah` (`id_mata_kuliah`, `kode_mata_kuliah`, `nama_mata_kuliah`, `deskripsi_mata_kuliah`) VALUES
(2, 'DT170', 'PERANCANGAN WEB ', 'Dosen : Firman Asharudin, S.Kom, M.Kom'),
(7, 'DT032', 'METODOLOGI PENELITIAN', 'Dosen : Ria Andriani, M.Kom'),
(10, 'awg', 'a', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `pertemuan`
--

CREATE TABLE `pertemuan` (
  `id_pertemuan` int(11) NOT NULL,
  `id_kode_mata_kuliah` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `pertemuan_ke` int(11) DEFAULT NULL,
  `deskripsi_pertemuan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pertemuan`
--

INSERT INTO `pertemuan` (`id_pertemuan`, `id_kode_mata_kuliah`, `judul`, `pertemuan_ke`, `deskripsi_pertemuan`) VALUES
(1, 1, 'Mengenal Database', 10, 'Sak karepmu ya'),
(2, 1, 'Mengenal Database Msqli', 4, 'Sak karepmu lah'),
(15, 2, 'Percabangan', 3, 'Setelah praktikum ini, praktikan diharapkan dapat :  1. Mahasiswa dapat mengimplementasikan pernyataan if.  2. Mahasiswa dapat mengimplementasikan pernyataan if else.  3. Mahasiswa dapat mengimplementasikan pernyataan if else if.  4. Mahasiswa dapat mengimplementasikan pernyataan switch.'),
(19, 7, 'Gambaran Umum Perkuliahan Metodologi Penelitian', 1, '1. Perkuliahan ini diselenggarakan 14 kali pertemuan secara teori dan 2 kali pertemuan untuk melaksanakan UTS (Ujian Tengah Semester) dan UAS (Ujian Akhir Semester) secara sinkronus menggunakan Zoom atau Google Meet dan Asinkronus menggunakan LMS.  2. Materi yang disampaikan meliputi: Konsep dasar penelitian, Metode dan Metodologi Penelitian, Topik Penelitian, Literatur Review, Identifikasi Masalah dan Perumusan Masalah, Teknik Pengumpulan, Pengolahan Data dan Teknik Menulis Jurnal, Paper ataupun Proposal Tugas Akhir.  3. Pada akhir perkuliahan mahasiswa diwajibkan untuk menulis jurnal, paper ataupun proposal Tugas Akhir yang akan dikerjakan.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_mata_kuliah`
--
ALTER TABLE `daftar_mata_kuliah`
  ADD PRIMARY KEY (`id_mata_kuliah`);

--
-- Indexes for table `pertemuan`
--
ALTER TABLE `pertemuan`
  ADD PRIMARY KEY (`id_pertemuan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_mata_kuliah`
--
ALTER TABLE `daftar_mata_kuliah`
  MODIFY `id_mata_kuliah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pertemuan`
--
ALTER TABLE `pertemuan`
  MODIFY `id_pertemuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
