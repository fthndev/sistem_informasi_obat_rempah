-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Des 2024 pada 10.20
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
-- Database: `obat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(12) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `penyakit` varchar(100) NOT NULL,
  `penggunaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id_obat`, `nama`, `penyakit`, `penggunaan`) VALUES
(1, 'Jahe', 'Masuk Angin', 'Rebus jahe dengan air panas, tambahkan madu dan minum hangat.'),
(2, 'Kunyit', 'Radang atau Luka', 'Haluskan kunyit, peras airnya, minum dengan madu atau gunakan sebagai salep pada luka.'),
(3, 'Temulawak', 'Gangguan Pencernaan', 'Iris temulawak tipis, rebus dengan air, tambahkan gula aren, lalu minum.'),
(4, 'Daun Sirih', 'Bau Mulut atau Infeksi', 'Rebus beberapa daun sirih, gunakan air rebusan untuk berkumur atau membasuh area infeksi.'),
(5, 'Sereh', 'Stres dan Relaksasi', 'Rebus sereh dengan air, tambahkan teh atau jeruk nipis, minum untuk meredakan stres.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
