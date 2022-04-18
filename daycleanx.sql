-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2019 at 07:41 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

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
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail` int(11) NOT NULL,
  `invoice` varchar(30) NOT NULL,
  `id_treatment` int(11) NOT NULL,
  `nama_treatment` varchar(30) NOT NULL,
  `jumlah_sepatu` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_detail`, `invoice`, `id_treatment`, `nama_treatment`, `jumlah_sepatu`, `total`) VALUES
(53, 'TR251220190040', 1, 'Deep Clean', 1, 25000),
(54, 'TR251220190040', 2, 'Fast Clean', 1, 15000),
(61, 'TR251220190045', 1, 'Deep Clean', 1, 25000),
(62, 'TR251220190046', 1, 'Deep Clean', 3, 75000),
(63, 'TR251220190047', 1, 'Deep Clean', 1, 25000),
(64, 'TR251220190048', 1, 'Deep Clean', 1, 25000),
(65, 'TR251220190048', 1, 'Deep Clean', 1, 25000),
(66, 'TR251220190048', 1, 'Deep Clean', 1, 25000),
(78, 'TR261220190054', 1, 'Deep Clean', 2, 50000),
(88, 'TR261220190054', 2, 'Fast Clean', 3, 45000),
(95, 'TR181220190001', 1, 'Deep Clean', 1, 25000);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(5) NOT NULL,
  `nm_pegawai` varchar(50) NOT NULL,
  `alamat_pegawai` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `level` varchar(10) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(10) NOT NULL,
  `invoice` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `alamat_user` varchar(30) NOT NULL,
  `jumlah_sepatu` int(11) NOT NULL,
  `status` text NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `invoice`, `tanggal`, `nama_user`, `no_hp`, `alamat_user`, `jumlah_sepatu`, `status`, `total`) VALUES
(13, 'TR181220190001', '2019-12-18', 'erwr', 231, 'err', 3, 'Belum', 75000),
(14, 'TR181220190014', '2019-12-18', 'erwr2', 231, 'err', 0, 'Belum', 0),
(15, 'TR181220190015', '2019-12-18', 'erwr2', 231, 'err', 0, 'Belum', 0),
(16, 'TR181220190016', '2019-12-18', 'erwr2', 231, 'err', 0, 'Belum', 0),
(17, 'TR181220190017', '2019-12-18', 'erwr2', 231, 'err', 0, 'Belum', 0),
(18, 'TR181220190018', '2019-12-18', 'erwr2', 231, 'err', 0, 'Belum', 0),
(19, 'TR181220190019', '2019-12-18', 'erwr2', 231, 'err', 0, 'Belum', 0),
(20, 'TR181220190020', '2019-12-18', 'erwr2', 231, 'err', 0, 'Belum', 0),
(21, 'TR181220190021', '2019-12-18', 'erwr2', 231, 'err', 0, 'Belum', 0),
(22, 'TR181220190022', '2019-12-18', 'erwr2', 231, 'err', 0, 'Belum', 0),
(23, 'TR181220190023', '2019-12-18', 'erwr2', 231, 'err', 0, 'Belum', 0),
(24, 'TR181220190024', '2019-12-18', 'erwr2', 231, 'err', 0, 'Belum', 0),
(25, 'TR181220190025', '2019-12-18', 'erwr2', 231, 'err', 0, 'Belum', 0),
(26, 'TR181220190026', '2019-12-18', 'erwr2', 231, 'err', 0, 'Belum', 0),
(27, 'TR181220190027', '2019-12-18', 'erwr2', 231, 'err', 0, 'Belum', 0),
(28, 'TR181220190028', '2019-12-18', 'erwr2', 231, 'err', 0, 'Belum', 0),
(29, 'TR181220190029', '2019-12-18', 'erwr2', 231, 'err', 0, 'Belum', 0),
(30, 'TR181220190030', '2019-12-18', 'erwr2', 231, 'err', 0, 'Belum', 0),
(31, 'TR241220190031', '2019-12-24', 'dsfs', 324, 'dsf', 5, 'Belum', 95000),
(32, 'TR241220190032', '2019-12-24', 'gg', 111, 'ggg', 2, 'Belum', 40000),
(33, 'TR241220190033', '2019-12-24', 'erwr2', 3, 'err', 6, 'Belum', 130000),
(34, 'TR251220190034', '2019-12-25', 'rererererere', 2121212, 'rerrerer', 0, 'Belum', 0),
(35, 'TR251220190034', '2019-12-25', 'rererererere', 2121212, 'rerrerer', 0, 'Belum', 0),
(36, 'TR251220190036', '2019-12-25', 'wewrwrwewewew', 1, 'wewewe', 0, 'Belum', 0),
(37, 'TR251220190037', '2019-12-25', 'erwr2', 1, '3223', 0, 'Belum', 0),
(38, 'TR251220190038', '2019-12-25', 'wewewr', 111, 'ewrewr', 0, 'Belum', 0),
(39, 'TR251220190039', '2019-12-25', 'ee', 222, 'er3erwr3w', 0, 'Belum', 0),
(40, 'TR251220190040', '2019-12-25', 'weeweweewewee', 2222, 'asdsd', 2, 'Belum', 40000),
(41, 'TR251220190040', '2019-12-25', 'weeweweewewee', 2222, 'asdsd', 2, 'Belum', 40000),
(42, 'TR251220190042', '2019-12-25', '324', 22, 'ewrwr', 0, 'Belum', 0),
(43, 'TR251220190043', '2019-12-25', '324', 22, 'asdsd', 0, 'Belum', 0),
(44, 'TR251220190044', '2019-12-25', 'erwr2', 2, 'err', 0, 'Belum', 0),
(45, 'TR251220190045', '2019-12-25', 'dsdsd', 2233, 'sdsd', 1, 'Belum', 25000),
(46, 'TR251220190046', '2019-12-25', 'dsdsd', 2233, 'sdsd', 3, 'Belum', 75000),
(47, 'TR251220190047', '2019-12-25', 'dsdsd', 2233, 'sdsd', 0, 'Belum', 0),
(48, 'TR251220190048', '2019-12-25', 'dsdsd', 2233, 'sdsd', 0, 'Belum', 0),
(49, 'TR251220190049', '2019-12-25', 'dsdsd', 2233, 'sdsd', 0, 'Belum', 0),
(50, 'TR251220190050', '2019-12-25', 'erwr2', 2, 'asdsd', 0, 'Belum', 0),
(51, 'TR251220190051', '2019-12-25', 'erwr2', 2, 'asdsd', 0, 'Belum', 0),
(52, 'TR251220190052', '2019-12-25', 'erwr2', 2, 'asdsd', 0, 'Belum', 0),
(53, 'TR251220190053', '2019-12-25', 'erwr2', 3, 'err', 0, 'Belum', 0),
(54, 'TR261220190054', '2019-12-26', '324', 112, 'err', 0, 'Belum', 0);

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `id_treatment` int(3) NOT NULL,
  `nama_treatment` varchar(15) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`id_treatment`, `nama_treatment`, `deskripsi`, `harga`) VALUES
(1, 'Deep Clean', 'Pembersihan hingga ke insole sepatu', 25000),
(2, 'Fast Clean', 'Adalah treatment pembersihan secara cepat dan bersih hanya pada bagian MIDSOLE dan UPPER sepatu. Waktu pengerjaan maksimal 1-2 hari', 15000),
(3, 'Re-Glue', 'Adalah proses perbaikan sepatu bagian SOLE yang sudah rusak akbiat kegiatan sehari-hari dengan menggunakan lem khusus sepatu.', 20000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`id_treatment`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `id_treatment` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
