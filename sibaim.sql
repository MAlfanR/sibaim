-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2020 at 11:29 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sibaim`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(3) NOT NULL,
  `username_admin` varchar(12) NOT NULL,
  `password_admin` varchar(12) NOT NULL,
  `kontak_admin` varchar(14) NOT NULL,
  `email_admin` varchar(50) NOT NULL,
  `nama_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username_admin`, `password_admin`, `kontak_admin`, `email_admin`, `nama_admin`) VALUES
(1, 'admin', '12345', '082245667666', 'admin@gmail.com', 'andre');

-- --------------------------------------------------------

--
-- Table structure for table `barangtemu`
--

CREATE TABLE `barangtemu` (
  `id_barangtemu` int(11) NOT NULL,
  `nama_barangtemu` varchar(50) NOT NULL,
  `tanggal_barangtemu` date NOT NULL,
  `foto_barangtemu` varchar(50) NOT NULL,
  `lokasi_barangtemu` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `civitas`
--

CREATE TABLE `civitas` (
  `id_civitas` int(40) NOT NULL,
  `nama_civitas` varchar(50) NOT NULL,
  `kontak_civitas` int(14) NOT NULL,
  `instansi_civitas` varchar(50) NOT NULL,
  `jaminan_civitas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE `donasi` (
  `id_donasi` int(10) NOT NULL,
  `nama_donasi` varchar(50) NOT NULL DEFAULT 'Hamba Allah',
  `jumlah_donasi` varchar(12) NOT NULL,
  `tanggal_donasi` date NOT NULL,
  `total_langsung_donasi` int(12) NOT NULL,
  `total_kitabisa_donasi` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id_inventory` int(11) NOT NULL,
  `nama_inventory` varchar(50) NOT NULL,
  `jumlah_inventory` int(10) NOT NULL,
  `harga_inventory` int(10) NOT NULL,
  `foto_inventory` varchar(50) NOT NULL,
  `denda_inventory` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lampiran`
--

CREATE TABLE `lampiran` (
  `id_lampiran` int(11) NOT NULL,
  `foto_lampiran` varchar(50) NOT NULL,
  `keterangan_lampiran` varchar(30) NOT NULL,
  `file_lampiran` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_civitas` int(40) NOT NULL,
  `id_inventory` int(10) NOT NULL,
  `nama_peminjaman` varchar(50) NOT NULL,
  `noidentitas_peminjaman` int(40) NOT NULL,
  `instansi_peminjaman` varchar(50) NOT NULL,
  `acara_peminjaman` varchar(100) NOT NULL,
  `keperluan_peminjaman` varchar(300) NOT NULL,
  `jaminan_peminjaman` varchar(50) NOT NULL,
  `barang1_peminjaman` varchar(50) NOT NULL,
  `barang2_peminjaman` varchar(50) DEFAULT NULL,
  `barang3_peminjaman` varchar(50) DEFAULT NULL,
  `barang4_peminjaman` varchar(50) DEFAULT NULL,
  `barang5_peminjaman` varchar(50) DEFAULT NULL,
  `jumlah1_peminjaman` int(4) NOT NULL,
  `jumlah2_peminjaman` int(4) DEFAULT NULL,
  `jumlah3_peminjaman` int(4) DEFAULT NULL,
  `jumlah4_peminjaman` int(4) DEFAULT NULL,
  `jumlah5_peminjaman` int(4) DEFAULT NULL,
  `denda_peminjaman` int(10) NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `totalbayar_peminjaman` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengambil`
--

CREATE TABLE `pengambil` (
  `id_pengambil` int(11) NOT NULL,
  `id_civitas` int(11) NOT NULL,
  `id_barangtemu` int(11) NOT NULL,
  `nama_pengambil` varchar(50) NOT NULL,
  `noidentitas_pengambil` int(40) NOT NULL,
  `kontak_pengambil` int(14) NOT NULL,
  `jaminan_pengambil` varchar(50) NOT NULL,
  `fotobarang_pengambil` varchar(50) DEFAULT NULL,
  `keterangan_pengambil` varchar(200) DEFAULT NULL,
  `namabarang_pengambil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE `tentang` (
  `id_tentang` int(3) NOT NULL,
  `organisasi_tentang` text NOT NULL,
  `sejarah_tentang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `barangtemu`
--
ALTER TABLE `barangtemu`
  ADD PRIMARY KEY (`id_barangtemu`);

--
-- Indexes for table `civitas`
--
ALTER TABLE `civitas`
  ADD PRIMARY KEY (`id_civitas`);

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id_donasi`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id_inventory`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- Indexes for table `pengambil`
--
ALTER TABLE `pengambil`
  ADD PRIMARY KEY (`id_pengambil`);

--
-- Indexes for table `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id_tentang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `barangtemu`
--
ALTER TABLE `barangtemu`
  MODIFY `id_barangtemu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id_donasi` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id_inventory` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengambil`
--
ALTER TABLE `pengambil`
  MODIFY `id_pengambil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id_tentang` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
