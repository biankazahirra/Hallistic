-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jun 2024 pada 19.40
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`ID`, `nama`, `email`, `password`) VALUES
(1, 'eric', 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_akun`
--

CREATE TABLE `daftar_akun` (
  `id_penyewa` int(11) NOT NULL,
  `nama_penyewa` varchar(255) DEFAULT NULL,
  `email_penyewa` varchar(255) DEFAULT NULL,
  `password_penyewa` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `daftar_akun`
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
(24, 'irma', 'irma@gmail.com', '$2y$10$H.jFOapCd2Y/vRc5gQTLQOjOP3z5uAYyIXKUP6baJP9eVyzjnognu'),
(25, 'anggie armelia', 'anggie123@gmail.com', '$2y$10$fJ19ttMbFnAYBJlFHHekRu4zjfRj/cgNxLXEB3LgcEY2t3l8iaYMu'),
(26, 'Eric', 'eric1@gmail.com', '$2y$10$yueMTEdMMpjnW8BuRTC7oOS1pXlT11DucRaV6FE1EHLWIkTd.z3EO');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_gedung`
--

CREATE TABLE `daftar_gedung` (
  `id_gedung` int(11) NOT NULL,
  `nama_gedung` varchar(255) NOT NULL,
  `deskripsi_gedung` text NOT NULL,
  `status_gedung` enum('Available','Unavailable') NOT NULL,
  `gambar_gedung` text NOT NULL,
  `kota_gedung` varchar(255) NOT NULL,
  `harga_sewa` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `daftar_gedung`
--

INSERT INTO `daftar_gedung` (`id_gedung`, `nama_gedung`, `deskripsi_gedung`, `status_gedung`, `gambar_gedung`, `kota_gedung`, `harga_sewa`) VALUES
(1, 'Grand Mercure Lampung', 'Grand Mercure Lampung merupakan landmark hotel bintang 5 di jantung Bandar Lampung, di jalan utama kota dan dekat dari Monumen Adipura.', 'Unavailable', 'grand mercure.jpeg', 'Bandar Lampung', 1500),
(2, 'Puri Kencana', 'Puri Kencana adalah sebuah Gedung modern yang terdiri dari tiga menara tinggi dengan fasilitas lengkap seperti ruang pertemuan, pusat kebugaran, dan area parkir luas.', 'Available', 'WhatsApp Image 2024-06-11 at 22.01.08.jpeg', 'Jakarta', 10000),
(3, 'Bali Pavilion', 'Bali Pavilion adalah sebuah gedung pesta dengan desain bergaya Bali yang eksotis, dilengkapi dengan taman tropis, kolam renang, dan ruang terbuka untuk acara-acara outdoor.', 'Unavailable', 'bali.jpg', 'Bali', 5000),
(4, 'Emerald Gardenia', 'Emerald Gardenia adalah salah satu gedung pesta yang populer di Medan. Gedung ini menawarkan fasilitas yang lengkap dan mewah, cocok untuk berbagai jenis acara seperti pernikahan, ulang tahun, atau acara perusahaan.', 'Available', 'medan.jpg', 'Medan', 4000),
(5, 'Crystal Ballroom', 'Crystal Ballroom adalah gedung mewah dengan lantai dansa yang berkilauan, langit-langit tinggi berlampu kristal, dan dekorasi elegan yang cocok untuk acara pesta bergengsi.', 'Available', 'cristal.jpg', 'Jakarta', 5000),
(6, 'Ayana Resort and Spa Bali', 'Terletak di Jimbaran, Bali, Ayana Resort memiliki beberapa lokasi pesta yang menakjubkan, termasuk Rock Bar Bali yang ikonik dengan pemandangan laut yang spektakuler, serta villas-villas pribadi untuk acara-acara eksklusif.', 'Available', 'ayana bali.jpg', 'Bali', 8000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_pembayaran`
--

CREATE TABLE `daftar_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `tgl_checkin` date NOT NULL,
  `tgl_checkout` date NOT NULL,
  `status_pembayaran` enum('Sudah Terverifikasi','Belum Terverifikasi') NOT NULL,
  `nama_penyewa` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `daftar_pembayaran`
--

INSERT INTO `daftar_pembayaran` (`id_pembayaran`, `tgl_pembayaran`, `tgl_checkin`, `tgl_checkout`, `status_pembayaran`, `nama_penyewa`, `no_telp`) VALUES
(1, '2024-06-15', '2024-06-15', '2024-06-15', 'Sudah Terverifikasi', 'eric', '082127181469');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_pesan`
--

CREATE TABLE `daftar_pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subjek` varchar(255) DEFAULT NULL,
  `pesan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `daftar_pesan`
--

INSERT INTO `daftar_pesan` (`id`, `nama`, `email`, `subjek`, `pesan`) VALUES
(3, 'mitha', 'mitha@gmail.com', 'harga', 'bisa nego gak kak?'),
(4, 'Bianka', 'biankazipper@gmail.com', 'bangunan', 'bisa ga kalo gedungnya gaada di aplikasi?'),
(5, 'jimin', 'jimin123@gmail.com', 'cicilan', 'mau bayar cicilan bulanan gimana ya?');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `daftar_akun`
--
ALTER TABLE `daftar_akun`
  ADD PRIMARY KEY (`id_penyewa`);

--
-- Indeks untuk tabel `daftar_gedung`
--
ALTER TABLE `daftar_gedung`
  ADD PRIMARY KEY (`id_gedung`);

--
-- Indeks untuk tabel `daftar_pembayaran`
--
ALTER TABLE `daftar_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `daftar_pesan`
--
ALTER TABLE `daftar_pesan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `daftar_akun`
--
ALTER TABLE `daftar_akun`
  MODIFY `id_penyewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `daftar_pesan`
--
ALTER TABLE `daftar_pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
