-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 20 Feb 2023 pada 03.57
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simrey`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemasukan`
--

CREATE TABLE `pemasukan` (
  `mId` int(12) NOT NULL,
  `mJenis` varchar(50) NOT NULL,
  `mNominal` decimal(14,0) NOT NULL DEFAULT '0',
  `mDate` date NOT NULL,
  `mDay` int(5) NOT NULL,
  `mMonth` int(5) NOT NULL,
  `myear` int(5) NOT NULL,
  `mTimestamp` int(12) NOT NULL,
  `mDeleted` int(12) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemasukan`
--

INSERT INTO `pemasukan` (`mId`, `mJenis`, `mNominal`, `mDate`, `mDay`, `mMonth`, `myear`, `mTimestamp`, `mDeleted`) VALUES
(1, 'Gaji Bulanan', '2200000', '2022-11-01', 1, 11, 2022, 0, 0),
(4, 'Jajan dari Mama', '1250000', '2022-11-28', 0, 9, 2022, 0, 0),
(5, 'gaji bulanan', '2300000', '2022-11-28', 28, 10, 2022, 0, 0),
(9, 'Jajan dari Mama', '100000', '2022-12-09', 9, 12, 2022, 1675840739, 0),
(22, 'Duit dari Orangtua :\')', '500000', '2023-02-16', 16, 2, 2023, 1676540353, 0),
(23, 'Jajan dari Mama', '1000000', '2023-01-18', 18, 1, 2023, 1676695385, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `pId` int(10) UNSIGNED NOT NULL,
  `pNama` varchar(50) NOT NULL,
  `pJenis` varchar(50) NOT NULL,
  `pHarga` decimal(14,0) NOT NULL,
  `pDate` date NOT NULL,
  `pYear` int(5) UNSIGNED NOT NULL,
  `pMonth` int(5) UNSIGNED NOT NULL,
  `pDay` int(5) UNSIGNED NOT NULL,
  `pTimestamp` int(10) UNSIGNED NOT NULL,
  `pDeleted` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengeluaran`
--

INSERT INTO `pengeluaran` (`pId`, `pNama`, `pJenis`, `pHarga`, `pDate`, `pYear`, `pMonth`, `pDay`, `pTimestamp`, `pDeleted`) VALUES
(8, 'Makan Siang', 'Konsumsi', '13000', '2021-10-04', 2021, 10, 4, 1633329502, 0),
(9, 'Kopi', 'Konsumsi', '13000', '2021-10-03', 2021, 10, 3, 1633329658, 0),
(10, 'Roma Sari Gandum', 'Konsumsi', '9000', '2021-10-03', 2021, 10, 3, 1633329672, 0),
(11, 'Bbm', 'Trasnportasi', '15000', '2021-10-04', 2021, 10, 4, 1633329702, 0),
(12, 'Isi Pulsa', 'Listrik dan Internet', '60000', '2021-10-03', 2021, 11, 3, 1633331276, 0),
(13, 'Telor 8 Butir', 'Dapur', '10000', '2021-10-03', 2021, 10, 3, 1633331992, 0),
(14, 'kopi good day', 'Konsumsi', '6000', '2021-10-05', 2021, 10, 5, 1633414146, 0),
(15, 'makan siang', 'Konsumsi', '13000', '2021-10-05', 2021, 10, 5, 1633414156, 0),
(16, 'makan malam kfc', 'Konsumsi', '9000', '2021-10-05', 2021, 12, 5, 1633414171, 0),
(17, 'bakso bakar', 'Konsumsi', '5000', '2021-10-05', 2021, 1, 5, 1633414182, 0),
(18, 'kopi good day', 'Konsumsi', '6000', '2021-10-06', 2021, 10, 6, 1633500975, 0),
(19, 'mie ayam', 'Konsumsi', '20000', '2021-10-05', 2021, 8, 5, 1633500986, 0),
(20, 'makan siang', 'Konsumsi', '13000', '2021-10-06', 2021, 10, 6, 1633500998, 0),
(21, 'BBM', 'Trasnportasi', '10000', '2021-10-06', 2021, 10, 6, 1633501012, 0),
(22, 'Makan Siang Kfc', 'Konsumsi', '16000', '2021-10-07', 2021, 9, 7, 1633587375, 0),
(23, 'Bensin', 'Trasnportasi', '15000', '2021-10-07', 2021, 10, 7, 1633587385, 0),
(24, 'Soto Padang', 'Konsumsi', '14000', '2021-10-06', 2021, 10, 6, 1633587463, 0),
(30, 'Ganti LCD Hp', 'Elektronik', '500000', '2023-02-16', 2023, 2, 16, 1676539813, 0),
(31, 'Token Rumah Pku', 'Listrik dan Internet', '100000', '2023-02-16', 2023, 2, 16, 1676599897, 0),
(32, 'Makan Siang', 'Konsumsi', '10000', '2023-02-17', 2023, 2, 17, 1676599964, 0),
(33, 'Makan Malam', 'Konsumsi', '15000', '2023-02-17', 2023, 2, 17, 1676599987, 0),
(34, 'Makan Siang', 'Konsumsi', '30000', '2023-02-18', 2023, 2, 18, 1676695103, 0),
(35, '  Kuota Internet 75', 'Listrik dan Internet', '174000', '2023-02-18', 2023, 2, 18, 1676695336, 0),
(36, 'Token ', 'Listrik dan Internet', '100000', '2023-01-18', 2023, 1, 18, 1676695404, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran_m`
--

CREATE TABLE `pengeluaran_m` (
  `expId` int(10) NOT NULL,
  `expName` varchar(50) NOT NULL,
  `expTimestamp` int(10) UNSIGNED NOT NULL,
  `expDeleted` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengeluaran_m`
--

INSERT INTO `pengeluaran_m` (`expId`, `expName`, `expTimestamp`, `expDeleted`) VALUES
(1, 'Konsumsi', 1632150023, 0),
(2, 'Trasnportasi', 1632150023, 0),
(3, 'Hobi', 1633330797, 0),
(6, 'Listrik dan Internet', 1633331036, 0),
(7, 'Dapur', 1633331972, 0),
(8, 'Asuransi', 1669607966, 0),
(9, 'Kucing', 1669608277, 0),
(10, 'Elektronik', 1676539792, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `userId` int(10) UNSIGNED DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `userDeleted` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`userId`, `username`, `password`, `userDeleted`) VALUES
(1, 'reyhan', 'admin', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `wName` varchar(200) NOT NULL,
  `wHarga` int(11) NOT NULL DEFAULT '0',
  `wTimestamp` int(11) NOT NULL DEFAULT '0',
  `wDeleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wishlist`
--

INSERT INTO `wishlist` (`id`, `wName`, `wHarga`, `wTimestamp`, `wDeleted`) VALUES
(1, 'Pegboard', 250000, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD PRIMARY KEY (`mId`);

--
-- Indeks untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`pId`);

--
-- Indeks untuk tabel `pengeluaran_m`
--
ALTER TABLE `pengeluaran_m`
  ADD PRIMARY KEY (`expId`);

--
-- Indeks untuk tabel `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pemasukan`
--
ALTER TABLE `pemasukan`
  MODIFY `mId` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `pId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `pengeluaran_m`
--
ALTER TABLE `pengeluaran_m`
  MODIFY `expId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
