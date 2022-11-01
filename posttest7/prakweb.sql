-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Okt 2022 pada 04.43
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(11) NOT NULL,
  `id_pemilik` int(11) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gambar`
--

INSERT INTO `gambar` (`id_gambar`, `id_pemilik`, `nama_file`, `file`, `waktu`) VALUES
(22, 65, 'Me', 'Me.jpg', '2022-10-27 10:43:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `handphone`
--

CREATE TABLE `handphone` (
  `id_hp` int(11) NOT NULL,
  `id_pemilik` int(11) NOT NULL,
  `merk_hp` varchar(50) NOT NULL,
  `tahun_pemakaian` int(11) NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `handphone`
--

INSERT INTO `handphone` (`id_hp`, `id_pemilik`, `merk_hp`, `tahun_pemakaian`, `harga`) VALUES
(63, 65, 'iphone 11', 2021, '7.500.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilik`
--

CREATE TABLE `pemilik` (
  `id_pemilik` int(11) NOT NULL,
  `nama_pemilik` varchar(50) NOT NULL,
  `no_telepon` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemilik`
--

INSERT INTO `pemilik` (`id_pemilik`, `nama_pemilik`, `no_telepon`, `alamat`) VALUES
(65, 'lutfi', '082352089835', 'Jalan Pelita');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`),
  ADD KEY `fk_gambar` (`id_pemilik`);

--
-- Indeks untuk tabel `handphone`
--
ALTER TABLE `handphone`
  ADD PRIMARY KEY (`id_hp`),
  ADD KEY `fk_pemilik` (`id_pemilik`);

--
-- Indeks untuk tabel `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`id_pemilik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `handphone`
--
ALTER TABLE `handphone`
  MODIFY `id_hp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT untuk tabel `pemilik`
--
ALTER TABLE `pemilik`
  MODIFY `id_pemilik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `gambar`
--
ALTER TABLE `gambar`
  ADD CONSTRAINT `fk_gambar` FOREIGN KEY (`id_pemilik`) REFERENCES `pemilik` (`id_pemilik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `handphone`
--
ALTER TABLE `handphone`
  ADD CONSTRAINT `fk_pemilik` FOREIGN KEY (`id_pemilik`) REFERENCES `pemilik` (`id_pemilik`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
