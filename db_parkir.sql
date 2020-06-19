-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jun 2020 pada 12.50
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_parkir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_konsumen`
--

CREATE TABLE `tb_konsumen` (
  `id` int(11) NOT NULL,
  `konsumen` varchar(100) NOT NULL,
  `jenis_kendaraan` enum('Motor','Mobil') NOT NULL,
  `no_polisi` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `no_hp` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_konsumen`
--

INSERT INTO `tb_konsumen` (`id`, `konsumen`, `jenis_kendaraan`, `no_polisi`, `tgl_lahir`, `jenis_kelamin`, `no_hp`) VALUES
(2, 'asfad', 'Mobil', '11423', '2020-06-27', 'P', 3434534),
(3, 'zxczx', 'Motor', '15124', '2020-06-19', 'L', 14125);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id` int(11) NOT NULL,
  `konsumen` varchar(100) NOT NULL,
  `no_polisi` varchar(100) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `waktu_masuk` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `waktu_keluar` timestamp NULL DEFAULT NULL,
  `biaya` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id`, `konsumen`, `no_polisi`, `tgl_masuk`, `waktu_masuk`, `waktu_keluar`, `biaya`) VALUES
(0, '', '15124', '2020-06-19', '2020-06-19 10:44:32', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_konsumen`
--
ALTER TABLE `tb_konsumen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_polisi` (`no_polisi`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_polisi` (`no_polisi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_konsumen`
--
ALTER TABLE `tb_konsumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`no_polisi`) REFERENCES `tb_konsumen` (`no_polisi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
