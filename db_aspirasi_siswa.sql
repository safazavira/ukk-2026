-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Mar 2026 pada 16.57
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_aspirasi_siswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aspirasi1`
--

CREATE TABLE `aspirasi1` (
  `id_aspirasi` int(5) NOT NULL,
  `status` enum('menunggu','proses','selesai') NOT NULL,
  `id_pelaporan` int(5) NOT NULL,
  `feedback` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `aspirasi1`
--

INSERT INTO `aspirasi1` (`id_aspirasi`, `status`, `id_pelaporan`, `feedback`) VALUES
(1, 'selesai', 1, 'sudah diperbaiki'),
(2, 'selesai', 3, 'sudah dilengkapi'),
(3, 'menunggu', 2, 'harap menunggu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `input_aspirasi1`
--

CREATE TABLE `input_aspirasi1` (
  `id_pelaporan` int(5) NOT NULL,
  `nis` int(10) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `input_aspirasi1`
--

INSERT INTO `input_aspirasi1` (`id_pelaporan`, `nis`, `id_kategori`, `lokasi`, `ket`, `tanggal`) VALUES
(1, 111, 0, 'kelas 10 a', 'kursi rusak', '2026-03-31 04:09:36'),
(2, 111, 0, 'di perpustakaan', 'lambat', '2026-03-31 13:44:13'),
(3, 111, 0, 'gudang atas', 'kekurangan bola', '2026-03-31 13:45:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori1`
--

CREATE TABLE `kategori1` (
  `id_kategori` int(5) NOT NULL,
  `ket_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori1`
--

INSERT INTO `kategori1` (`id_kategori`, `ket_kategori`) VALUES
(1, 'laboratorium'),
(2, 'ruang kelas'),
(3, 'perpustakaan'),
(5, 'toilet'),
(6, 'jaringan internet'),
(7, 'fasilitas olahraga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa1`
--

CREATE TABLE `siswa1` (
  `nis` int(10) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `siswa1`
--

INSERT INTO `siswa1` (`nis`, `kelas`, `password`) VALUES
(111, '12', 'bcd724d15cde8c47650fda962968f102');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin1`
--

CREATE TABLE `tb_admin1` (
  `admin_id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_admin1`
--

INSERT INTO `tb_admin1` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aspirasi1`
--
ALTER TABLE `aspirasi1`
  ADD PRIMARY KEY (`id_aspirasi`),
  ADD KEY `id_pelaporan` (`id_pelaporan`);

--
-- Indeks untuk tabel `input_aspirasi1`
--
ALTER TABLE `input_aspirasi1`
  ADD PRIMARY KEY (`id_pelaporan`),
  ADD KEY `nis` (`nis`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `kategori1`
--
ALTER TABLE `kategori1`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `siswa1`
--
ALTER TABLE `siswa1`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `tb_admin1`
--
ALTER TABLE `tb_admin1`
  ADD PRIMARY KEY (`admin_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aspirasi1`
--
ALTER TABLE `aspirasi1`
  MODIFY `id_aspirasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `input_aspirasi1`
--
ALTER TABLE `input_aspirasi1`
  MODIFY `id_pelaporan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kategori1`
--
ALTER TABLE `kategori1`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `siswa1`
--
ALTER TABLE `siswa1`
  MODIFY `nis` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT untuk tabel `tb_admin1`
--
ALTER TABLE `tb_admin1`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
