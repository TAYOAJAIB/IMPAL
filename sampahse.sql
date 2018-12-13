-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2018 at 07:57 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sampahse`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanggal` varchar(2) NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`username`, `password`, `email`, `nama`, `tanggal`, `bulan`, `tahun`, `hp`, `level`) VALUES
('admin', '123', '', '', '', '', '', '', 'admin'),
('nopal', 'a', 'nopal@gmail.com', '', '', '', '', '', 'users'),
('rez', '123', 'rezkyriadhishalhan@yahoo.co.id', '', '', '', '', '', 'users');

-- --------------------------------------------------------

--
-- Table structure for table `almt`
--

CREATE TABLE `almt` (
  `id_alamat` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `anama` varchar(50) NOT NULL,
  `ahp` varchar(15) NOT NULL,
  `aalamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `almt`
--

INSERT INTO `almt` (`id_alamat`, `username`, `anama`, `ahp`, `aalamat`) VALUES
(1, 'ikbal', 'dsad', '082215224296', 'cigadung kuningan'),
(3, 'mahesa', 'dafa', '0832131241', 'galunggung'),
(7, 'ikbal', 'Ikbal', '0822164480', 'kuningan'),
(9, 'ikbal', 'guna', '123141324', 'adasd'),
(12, 'mahesa', 'ursa', '082215224296', 'qweqwr'),
(13, 'mahesa', 'dasd', 'dasda', 'dasdas'),
(14, 'persib', 'andik', '082215224296', 'ada'),
(15, 'itawakal', 'andiks', '085524227865', 'kuningan'),
(17, 'ttt', 'andre', '082215224296', 'kuningan'),
(18, 'ttt', 'ikbal', '082215224296', 'ada');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `username`, `nama`, `harga`, `jumlah`, `jenis`) VALUES
(11, 'itawakal', 'Tas Rajut', 250000, 1, 'tas'),
(12, 'ulum', 'Tas Pesta Batik Jogya', 300000, 1, 'tas'),
(13, 'ulum', 'Tas Rajut', 250000, 1, 'tas'),
(16, 'itawakal', 'Tas Pesta Batik Jogya', 300000, 1, 'tas'),
(17, 'itawakal', 'Tas Pesta Batik Jogya', 300000, 1, 'tas'),
(19, 'itawakal', 'Lampu Gantung 1', 75000, 1, 'lampu'),
(30, 'nopal', 'Boeing 777', 90000, 1, 'Boeing'),
(33, 'rez', 'DODO Limited Edition II', 450, 1, 'Boeing'),
(34, 'nopal', 'AIRBUS GABAN 112', 80000, 3, 'AirBus');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `username`, `email`, `pesan`) VALUES
(1, 'itawakal', 'tawakal11@ymail.com', 'agar lebih diperbaiki sistemnya'),
(2, 'itawakal', 'tvas@gmail.com', 'adasdsadsad');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama`, `harga`, `jenis`, `keterangan`, `foto`) VALUES
(1, 'Boeing 777', 90000, 'Boeing', 'Mantap ini mah', '777.png'),
(8, 'AIRBUS GABAN 112', 80000, 'AirBus', 'wah gede banget ini mah', 'gambar_1543626104.jpg'),
(9, 'SUDO SU', 1700, 'Helicopter', 'HELI LINCAH NAN KENCANG', 'gambar_1543626235.jpg'),
(10, 'DODO', 500, 'Boeing', 'Pesawat Legenda Mesin 2 TAK', 'gambar_1543628267.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `almt`
--
ALTER TABLE `almt`
  ADD PRIMARY KEY (`id_alamat`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `almt`
--
ALTER TABLE `almt`
  MODIFY `id_alamat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
