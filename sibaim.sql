-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Apr 2020 pada 07.18
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
  `password_admin` varchar(255) NOT NULL,
  `kontak_admin` varchar(14) NOT NULL,
  `email_admin` varchar(50) NOT NULL,
  `nama_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username_admin`, `password_admin`, `kontak_admin`, `email_admin`, `nama_admin`) VALUES
(1, 'admin', '6562c5c1f33db6e05a082a88cddab5ea', '082299794677', 'janatri1398@gmail.com', 'Ranger');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_token`
--

CREATE TABLE `admin_token` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `time_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin_token`
--

INSERT INTO `admin_token` (`id`, `email`, `token`, `time_created`) VALUES
(7, 'janatri1398@gmail.com', 'H1Tk8krrWhWOH63tZJV1qRpe//NJJIvWDe1ae3tt4Do=', 1586395345);

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangtemu`
--

CREATE TABLE `barangtemu` (
  `id_barangtemu` int(11) NOT NULL,
  `nama_barangtemu` varchar(50) NOT NULL,
  `tanggal_barangtemu` date NOT NULL,
  `foto_barangtemu` varchar(50) NOT NULL,
  `lokasi_barangtemu` varchar(200) NOT NULL,
  `keterangan_barangtemu` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barangtemu`
--

INSERT INTO `barangtemu` (`id_barangtemu`, `nama_barangtemu`, `tanggal_barangtemu`, `foto_barangtemu`, `lokasi_barangtemu`, `keterangan_barangtemu`) VALUES
(4, 'dompet kulit', '2020-04-02', 'dompet.jpg', 'dekat keran masjid', 'terbuat dari kulit');

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
(2, 'Hamba Allah', '1000000', '2020-03-19', 2000000, 6854162),
(3, 'aldi', '12000000', '2020-04-02', 14000000, 6854162),
(4, 'aldo', '12000000', '2020-04-02', 26000000, 6854162),
(5, 'TPB 5', '500000', '2020-04-07', 26500000, 6854162);

-- --------------------------------------------------------

--
-- Struktur dari tabel `fototentang`
--

CREATE TABLE `fototentang` (
  `id_foto` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `label` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fototentang`
--

INSERT INTO `fototentang` (`id_foto`, `foto`, `label`) VALUES
(2, '1.JPG', 'Sejarah'),
(10, '4.JPG', 'Organisasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `inventory`
--

CREATE TABLE `inventory` (
  `id_inventory` int(11) NOT NULL,
  `nama_inventory` varchar(50) NOT NULL,
  `jumlah_inventory` int(10) NOT NULL,
  `harga_inventory` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `inventory`
--

INSERT INTO `inventory` (`id_inventory`, `nama_inventory`, `jumlah_inventory`, `harga_inventory`) VALUES
(7, 'Proyektor', 1, 25000),
(8, 'Karpet Merah', 7, 15000),
(9, 'Terpal', 4, 15000),
(10, 'Stand Mic', 1, 10000),
(11, 'Tripod', 1, 15000),
(12, 'Galon (Kosong)', 3, 5000),
(13, 'LED', 2, 50000),
(14, 'HDMI', 1, 5000),
(16, 'Dispenser', 1, 10000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lampiran`
--

CREATE TABLE `lampiran` (
  `id_lampiran` int(11) NOT NULL,
  `foto_lampiran` varchar(50) NOT NULL,
  `keterangan_lampiran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_civitas` int(40) NOT NULL,
  `keperluan_peminjaman` varchar(300) NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `totalharga_peminjaman` int(8) DEFAULT NULL,
  `status_peminjaman` varchar(50) DEFAULT NULL,
  `denda_peminjaman` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengambil`
--

CREATE TABLE `pengambil` (
  `id_pengambil` int(11) NOT NULL,
  `id_civitas` int(11) NOT NULL,
  `id_barangtemu` int(11) NOT NULL,
  `keterangan_pengambil` varchar(200) DEFAULT NULL,
  `namabarang_pengambil` varchar(50) NOT NULL,
  `fotobarang_pengambil` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tekstentang`
--

CREATE TABLE `tekstentang` (
  `id_teks` int(11) NOT NULL,
  `isi` longtext NOT NULL,
  `label` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tekstentang`
--

INSERT INTO `tekstentang` (`id_teks`, `isi`, `label`) VALUES
(3, 'Masjid Baitul Ilmi Itera merupakan masjid yang diinisiasi oleh Ikatan Orang Tua Mahasiswa dan pada tahun 2016 karena minimnya tempat ibadah yang tersedia waktu itu.\r\n<br>\r\nPada Rancangan awal, masjid ini membutuhkan dana senilai +- 500 juta rupiah. Saat ini, progres pembangunan telah sampai pada tahap 4 yakni pengerjaan plafond, tembok dan green wall. Setelah sebelumnya terhenti karena kekurangan dana.\r\n<br>\r\nMasjid ini berkapasitas +- 500 orang. Masjid ini digunakan untuk sholat berjamaah, sholat Jum\'at, kajian, dan kegiatan lainnya.', 'Sejarah'),
(7, 'teks tentang organisasi', 'Organisasi'),
(8, 'organisasi baim sudah berdiri sejak lama', 'Organisasi');

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
-- Indeks untuk tabel `fototentang`
--
ALTER TABLE `fototentang`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indeks untuk tabel `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id_inventory`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `id_civitas` (`id_civitas`);

--
-- Indeks untuk tabel `pengambil`
--
ALTER TABLE `pengambil`
  ADD PRIMARY KEY (`id_pengambil`),
  ADD KEY `id_civitas` (`id_civitas`),
  ADD KEY `id_barangtemu` (`id_barangtemu`);

--
-- Indeks untuk tabel `tekstentang`
--
ALTER TABLE `tekstentang`
  ADD PRIMARY KEY (`id_teks`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `admin_token`
--
ALTER TABLE `admin_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `barangtemu`
--
ALTER TABLE `barangtemu`
  MODIFY `id_barangtemu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id_donasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `fototentang`
--
ALTER TABLE `fototentang`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id_inventory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
-- AUTO_INCREMENT untuk tabel `tekstentang`
--
ALTER TABLE `tekstentang`
  MODIFY `id_teks` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_civitas`) REFERENCES `civitas` (`id_civitas`);

--
-- Ketidakleluasaan untuk tabel `pengambil`
--
ALTER TABLE `pengambil`
  ADD CONSTRAINT `pengambil_ibfk_1` FOREIGN KEY (`id_civitas`) REFERENCES `civitas` (`id_civitas`),
  ADD CONSTRAINT `pengambil_ibfk_2` FOREIGN KEY (`id_barangtemu`) REFERENCES `barangtemu` (`id_barangtemu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
