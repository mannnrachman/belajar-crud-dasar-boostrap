-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 06, 2019 at 12:47 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan_barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `idKaryawan` int(9) NOT NULL,
  `nmKaryawan` varchar(50) NOT NULL,
  `tglLahir` date DEFAULT NULL,
  `telp` char(15) DEFAULT NULL,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`idKaryawan`, `nmKaryawan`, `tglLahir`, `telp`, `alamat`) VALUES
(1, 'rachman', '1990-08-17', '08123456789', 'jl. sutoyo'),
(2, 'muhammadrachman', '1998-11-19', '08412121', 'jl. hksn');

-- --------------------------------------------------------

--
-- Table structure for table `kustomer`
--

CREATE TABLE `kustomer` (
  `idKustomer` int(9) NOT NULL,
  `nmKustomer` varchar(50) NOT NULL,
  `telp` char(15) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kota` varchar(30) DEFAULT NULL,
  `kodePos` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kustomer`
--

INSERT INTO `kustomer` (`idKustomer`, `nmKustomer`, `telp`, `alamat`, `kota`, `kodePos`) VALUES
(1, 'Rahman', '01234567', 'jl.sfdsfs', 'bjm', 70123);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `idPesan` int(9) NOT NULL,
  `idKustomer` int(9) DEFAULT NULL,
  `idKaryawan` int(9) DEFAULT NULL,
  `tglPesan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `idProduk` int(9) NOT NULL,
  `nmProduk` varchar(50) NOT NULL,
  `idSuplier` int(8) DEFAULT NULL,
  `satuan` char(30) DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staf`
--

CREATE TABLE `staf` (
  `idKaryawan` int(9) NOT NULL,
  `nmKaryawan` varchar(50) NOT NULL,
  `tglLahir` date DEFAULT NULL,
  `telp` char(15) DEFAULT NULL,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `suplier`
--

CREATE TABLE `suplier` (
  `idSuplier` int(8) NOT NULL,
  `nmSuplier` varchar(50) NOT NULL,
  `perusahaan` char(45) NOT NULL,
  `alamat` text DEFAULT NULL,
  `kota` char(30) DEFAULT NULL,
  `kodepos` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`idKaryawan`);

--
-- Indexes for table `kustomer`
--
ALTER TABLE `kustomer`
  ADD PRIMARY KEY (`idKustomer`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`idPesan`),
  ADD KEY `idKustomer` (`idKustomer`),
  ADD KEY `idKaryawan` (`idKaryawan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idProduk`),
  ADD KEY `idSuplier` (`idSuplier`);

--
-- Indexes for table `staf`
--
ALTER TABLE `staf`
  ADD PRIMARY KEY (`idKaryawan`);

--
-- Indexes for table `suplier`
--
ALTER TABLE `suplier`
  ADD PRIMARY KEY (`idSuplier`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `idProduk` int(9) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`idKustomer`) REFERENCES `kustomer` (`idKustomer`),
  ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`idKaryawan`) REFERENCES `karyawan` (`idKaryawan`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`idSuplier`) REFERENCES `suplier` (`idSuplier`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
