-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Nov 2023 pada 14.17
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelola_baju`
--

CREATE TABLE `kelola_baju` (
  `id_baju` int(11) NOT NULL,
  `nama_baju` varchar(50) NOT NULL,
  `jenis_baju` varchar(50) NOT NULL,
  `ukuran_baju` varchar(10) NOT NULL,
  `tambah_stok` varchar(255) NOT NULL,
  `harga_jual` varchar(255) NOT NULL,
  `tanggal_pemasukan` date NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kelola_baju`
--

INSERT INTO `kelola_baju` (`id_baju`, `nama_baju`, `jenis_baju`, `ukuran_baju`, `tambah_stok`, `harga_jual`, `tanggal_pemasukan`, `deskripsi`) VALUES
(12345751, 'baju', 'tshist', 'Pilih Ukur', '5', 'Rp.5000', '2023-11-09', 'oke'),
(12345754, 'hoodie', 'hoodie', 'Pilih Ukur', '20', 'Rp.5000', '2023-11-23', 'oke'),
(12345755, 'japan', 'tshist', 'Pilih Ukur', '2', 'rp.44.000', '2023-11-24', 'oke'),
(12345756, 'japan', 'T Shirt', 'Pilih Ukur', '5', 'rp.44.000', '2023-11-21', 'oke');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelola_pegawai`
--

CREATE TABLE `kelola_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kelola_pegawai`
--

INSERT INTO `kelola_pegawai` (`id_pegawai`, `nama`, `email`, `alamat`, `jenis_kelamin`) VALUES
(1223350, 'fergie fakhirusalam', 'fergiefakhirusalam@gmail.com', 'jl.skkk', 'Pria'),
(1223351, 'burhanto', 'ss@gmail.com', 'jl.gbr1', 'Wanita'),
(1223352, 'aaa', 'admin@gmail.com', 'jl.skr', 'Pria'),
(1223353, 'pikom', 'pik@gmail.com', 'jl.skr', 'Pria');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelola_pengiriman`
--

CREATE TABLE `kelola_pengiriman` (
  `id_pengiriman` int(11) NOT NULL,
  `no_resi` varchar(50) NOT NULL,
  `nama_penerima` varchar(50) NOT NULL,
  `alamat_penerima` varchar(255) NOT NULL,
  `telepon_penerima` varchar(20) NOT NULL,
  `kode_pos` int(10) NOT NULL,
  `jenis_pengiriman` varchar(50) NOT NULL,
  `catatan_pengiriman` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kelola_pengiriman`
--

INSERT INTO `kelola_pengiriman` (`id_pengiriman`, `no_resi`, `nama_penerima`, `alamat_penerima`, `telepon_penerima`, `kode_pos`, `jenis_pengiriman`, `catatan_pengiriman`) VALUES
(111222337, 'jt354545', 'fergie', 'jl.hji', '082528', 40552, 'Si Cepat', 'oke');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelola_penjualan`
--

CREATE TABLE `kelola_penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `tanggal_penjualan` date NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `jenis_baju` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kelola_penjualan`
--

INSERT INTO `kelola_penjualan` (`id_penjualan`, `tanggal_penjualan`, `jumlah`, `harga`, `jenis_baju`) VALUES
(54327, '2023-11-04', '12', 'Rp.50.000', 'T Shirt'),
(54328, '2023-11-09', '3', 'Rp.50.000', 'Hoodie');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelola_transaksi`
--

CREATE TABLE `kelola_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `jenis_barang` varchar(50) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `jenis_transaksi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kelola_transaksi`
--

INSERT INTO `kelola_transaksi` (`id_transaksi`, `tanggal_transaksi`, `jenis_barang`, `jumlah`, `harga`, `jenis_transaksi`) VALUES
(654325, '2023-11-17', 'Hoodie', '2', 'Rp.50.000', 'COD');

-- --------------------------------------------------------

--
-- Struktur dari tabel `owner`
--

CREATE TABLE `owner` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `owner`
--

INSERT INTO `owner` (`id`, `username`, `email`, `password`, `alamat`) VALUES
(2134567, 'owner', 'owner@gmail.com', '123456', 'jl.sangkuriang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `jenis_transaksi` varchar(50) NOT NULL,
  `jenis_pengiriman` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `alamat`, `kode_pos`, `email`, `telepon`) VALUES
(9876553, 'fergi', '$2y$10$VDVfbczIlx2KPBRCHRe0XOX2ptLQH8vl.GU.CJKmBYP9Zvi19WygC', 'jl.gbr', 40553, 'fergiefakhirusalam@gmail.com', '089537'),
(9876555, 'dosferginho', '$2y$10$XvyR5rZUds9NpRcD/89apua6jNlMhFBMdcxNPCt71dBRgJNi4/Ire', 'jl.gbr', 40552, 'ss@gmail.com', '089537'),
(9876556, 'frrgief', '$2y$10$29uPDzF3yfrEMPMZYYAipO0w0vTHGeXrgWov6EcP5bAUfU527MHVa', 'jl.gbr', 40552, 'fergiefakhirusalam@gmail.com', '089537');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelola_baju`
--
ALTER TABLE `kelola_baju`
  ADD PRIMARY KEY (`id_baju`);

--
-- Indeks untuk tabel `kelola_pegawai`
--
ALTER TABLE `kelola_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `kelola_pengiriman`
--
ALTER TABLE `kelola_pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`);

--
-- Indeks untuk tabel `kelola_penjualan`
--
ALTER TABLE `kelola_penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indeks untuk tabel `kelola_transaksi`
--
ALTER TABLE `kelola_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234567892;

--
-- AUTO_INCREMENT untuk tabel `kelola_baju`
--
ALTER TABLE `kelola_baju`
  MODIFY `id_baju` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12345757;

--
-- AUTO_INCREMENT untuk tabel `kelola_pegawai`
--
ALTER TABLE `kelola_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1223354;

--
-- AUTO_INCREMENT untuk tabel `kelola_pengiriman`
--
ALTER TABLE `kelola_pengiriman`
  MODIFY `id_pengiriman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111222338;

--
-- AUTO_INCREMENT untuk tabel `kelola_penjualan`
--
ALTER TABLE `kelola_penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54329;

--
-- AUTO_INCREMENT untuk tabel `kelola_transaksi`
--
ALTER TABLE `kelola_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=654326;

--
-- AUTO_INCREMENT untuk tabel `owner`
--
ALTER TABLE `owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2134568;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9876557;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
