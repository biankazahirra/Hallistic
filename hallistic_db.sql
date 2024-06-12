-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2024 at 08:35 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hallistic_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_akun`
--

CREATE TABLE `daftar_akun` (
  `id_penyewa` int(11) NOT NULL,
  `nama_penyewa` varchar(255) DEFAULT NULL,
  `email_penyewa` varchar(255) DEFAULT NULL,
  `password_penyewa` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daftar_akun`
--

INSERT INTO `daftar_akun` (`id_penyewa`, `nama_penyewa`, `email_penyewa`, `password_penyewa`) VALUES
(16, 'Jeon Jungkook', 'jk@gmail.com', '$2y$10$ZdYmHUT5HbK6d0J0OMFsY.Hr56LOzEatQwBJ68g4t9zTy8fwCkOG6'),
(17, 'Bianka Zahirra Putri', 'biankazipper@gmail.com', '$2y$10$Yjig5Jthl077K98W/NvPKuRkc4jzR5.u7xdZhEvm.i8xXlsBmnO5u'),
(18, 'Agam Fardhan Herdian', 'Agamffrdhan@gmail.com', '$2y$10$N5Dr/OHO89mM4DTMeVLy1umVK6xnnO28kb5pAlIwnAplNk4gsSptC'),
(19, 'park jimin', 'jimin123@gmail.com', '$2y$10$JMkRhmTedy.VLkbx9wrBb.BbzYED8uMjHlZe5Ujxgdh0PfOFYHo26'),
(20, 'Serrendie', 'serrendie123@gmail.com', '$2y$10$mwPJA180DUdjty1Hwk/6jOVT2HSdd7bnNxeFe.AJbeJ7WHPj27Q5e'),
(21, 'kim seokjin', 'kim123@gmail.com', '$2y$10$/mcAUXFi2TsCIWUrPmH6T.E9b7J318NltvrqGK9Hv.JNn7EilI3Bi'),
(22, 'namjoon', 'nj@gmail.com', '$2y$10$93pihSGxzJus2Cu8dO0lVOnMT3q64xGJUJXvPelx8OKaZrAvoQ6PW'),
(23, 'eric', 'eric@gmail.com', '$2y$10$dgiZ6QnYyOWcz.IBG7dJ1uKPiaZbllgbXgiLslfQZ1WnlT0BuHlgm'),
(24, 'irma', 'irma@gmail.com', '$2y$10$H.jFOapCd2Y/vRc5gQTLQOjOP3z5uAYyIXKUP6baJP9eVyzjnognu');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_gedung`
--

CREATE TABLE `daftar_gedung` (
  `id_gedung` int(11) NOT NULL,
  `nama_gedung` varchar(255) NOT NULL,
  `deskripsi_gedung` text NOT NULL,
  `status_gedung` enum('Available','Unavailable','','') NOT NULL,
  `gambar_gedung` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_pembayaran`
--

CREATE TABLE `daftar_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `tgl_checkin` date NOT NULL,
  `tgl_checkout` date NOT NULL,
  `nama_penyewa` varchar(255) NOT NULL, -- Kolom untuk nama penyewa
  `telpon` varchar(20) NOT NULL, -- Kolom untuk nomor telepon
  `status_pembayaran` enum('Sudah Terverifikasi','Belum Terverifikasi') NOT NULL DEFAULT 'Belum Terverifikasi' -- Kolom status_pembayaran tidak memerlukan nilai kosong yang tidak dibutuhkan
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `daftar_pesan`
--

CREATE TABLE `daftar_pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subjek` varchar(255) DEFAULT NULL,
  `pesan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daftar_pesan`
--

INSERT INTO `daftar_pesan` (`id`, `nama`, `email`, `subjek`, `pesan`) VALUES
(3, 'mitha', 'mitha@gmail.com', 'harga', 'bisa nego gak kak?'),
(4, 'Bianka', 'biankazipper@gmail.com', 'bangunan', 'bisa ga kalo gedungnya gaada di aplikasi?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_akun`
--
ALTER TABLE `daftar_akun`
  ADD PRIMARY KEY (`id_penyewa`);

--
-- Indexes for table `daftar_gedung`
--
ALTER TABLE `daftar_gedung`
  ADD PRIMARY KEY (`id_gedung`);

--
-- Indexes for table `daftar_pembayaran`
--
ALTER TABLE `daftar_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `daftar_pesan`
--
ALTER TABLE `daftar_pesan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_akun`
--
ALTER TABLE `daftar_akun`
  MODIFY `id_penyewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `daftar_pesan`
--
ALTER TABLE `daftar_pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
