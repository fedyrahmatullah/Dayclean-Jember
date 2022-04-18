-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jan 2020 pada 16.58
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dayclean`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail` int(11) NOT NULL,
  `invoice` varchar(30) NOT NULL,
  `id_treatment` int(11) NOT NULL,
  `nama_treatment` varchar(30) NOT NULL,
  `jumlah_sepatu` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(5) NOT NULL,
  `nm_pegawai` varchar(50) NOT NULL,
  `alamat_pegawai` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `level` varchar(10) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nm_pegawai`, `alamat_pegawai`, `no_hp`, `level`, `username`, `password`) VALUES
(1, 'novando', 'jember', '087852459366', 'pegawai', 'novan', '85db37771715be103a787ae6c9fe3d08'),
(3, 'root', 'jember', '081244553535', 'superadmin', 'root', '41851c2c39e9729d51870dc74e098950');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `invoice` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `alamat_user` varchar(30) NOT NULL,
  `jumlah_sepatu` int(11) NOT NULL,
  `status` text NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `treatment`
--

CREATE TABLE `treatment` (
  `id_treatment` int(3) NOT NULL,
  `nama_treatment` varchar(15) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `treatment`
--

INSERT INTO `treatment` (`id_treatment`, `nama_treatment`, `deskripsi`, `harga`) VALUES
(5, 'Deep Clean', 'Adalah treatment pembersihan secara menyeluruh pada bagian sepatu sehingga dapat membersihkan sepatu. Waktu Pengerjaan maksimal 2-3 hari.', 25000),
(6, 'Fast Clean', 'Adalah treatment pembersihan secara cepat dan bersih hanya pada bagian MIDSOLE dan UPPER sepatu. Waktu pengerjaan maksimal 1-2 hari.', 15000),
(7, 'Re-Glue', 'Adalah proses perbaikan sepatu bagian SOLE yang sudah rusak akbiat kegiatan sehari-hari dengan menggunakan lem khusus sepatu.', 15000),
(8, 'Unyellowing', 'Adalah proses penghilangan noda kuning pada OUTSOLE atau MIDSOLE yang terjadi akibat proses oksidasi.', 35000),
(9, 'Re-Paint', 'Adalah proses pengecatan ulang pada sepatu yang warnanya sudah memudar dengan menggunakan cat khusus sepatu.', 80000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `detail_transaksi_ibfk_1` (`id_treatment`),
  ADD KEY `detail_transaksi_ibfk_2` (`invoice`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`invoice`);

--
-- Indeks untuk tabel `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`id_treatment`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `treatment`
--
ALTER TABLE `treatment`
  MODIFY `id_treatment` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`id_treatment`) REFERENCES `treatment` (`id_treatment`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`invoice`) REFERENCES `transaksi` (`invoice`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
