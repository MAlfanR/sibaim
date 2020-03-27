-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Mar 2020 pada 10.17
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

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
-- Struktur dari tabel `admin`
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
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username_admin`, `password_admin`, `kontak_admin`, `email_admin`, `nama_admin`) VALUES
(1, 'admin', '54321', '082245667666', 'janatri1398@gmail.com', 'nardiyansah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_token`
--

CREATE TABLE `admin_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `time_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangtemu`
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
-- Struktur dari tabel `civitas`
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
-- Struktur dari tabel `donasi`
--

CREATE TABLE `donasi` (
  `id_donasi` int(10) NOT NULL,
  `nama_donasi` varchar(50) NOT NULL DEFAULT 'Hamba Allah',
  `jumlah_donasi` varchar(12) NOT NULL,
  `tanggal_donasi` date NOT NULL,
  `total_langsung_donasi` int(12) NOT NULL,
  `total_kitabisa_donasi` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `donasi`
--

INSERT INTO `donasi` (`id_donasi`, `nama_donasi`, `jumlah_donasi`, `tanggal_donasi`, `total_langsung_donasi`, `total_kitabisa_donasi`) VALUES
(1, 'Hamba Allah', '1000000', '2020-03-19', 1000000, 6854162),
(21, 'mawar', '1000000', '2020-03-21', 2000000, 6854162),
(22, 'mawar', '1000000', '2020-03-26', 3000000, 6854162),
(23, 'aldi', '50000000', '2020-03-26', 53000000, 6854162);

-- --------------------------------------------------------

--
-- Struktur dari tabel `inventory`
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
-- Struktur dari tabel `lampiran`
--

CREATE TABLE `lampiran` (
  `id_lampiran` int(11) NOT NULL,
  `foto_lampiran` varchar(50) NOT NULL,
  `keterangan_lampiran` varchar(30) NOT NULL,
  `file_lampiran` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
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
-- Struktur dari tabel `pengambil`
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
-- Struktur dari tabel `tentang`
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
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `admin_token`
--
ALTER TABLE `admin_token`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `barangtemu`
--
ALTER TABLE `barangtemu`
  ADD PRIMARY KEY (`id_barangtemu`);

--
-- Indeks untuk tabel `civitas`
--
ALTER TABLE `civitas`
  ADD PRIMARY KEY (`id_civitas`);

--
-- Indeks untuk tabel `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id_donasi`);

--
-- Indeks untuk tabel `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id_inventory`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- Indeks untuk tabel `pengambil`
--
ALTER TABLE `pengambil`
  ADD PRIMARY KEY (`id_pengambil`);

--
-- Indeks untuk tabel `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id_tentang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `admin_token`
--
ALTER TABLE `admin_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `barangtemu`
--
ALTER TABLE `barangtemu`
  MODIFY `id_barangtemu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id_donasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id_inventory` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengambil`
--
ALTER TABLE `pengambil`
  MODIFY `id_pengambil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id_tentang` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
