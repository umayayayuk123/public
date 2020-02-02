-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 09 Jul 2018 pada 23.25
-- Versi server: 10.1.33-MariaDB
-- Versi PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u5299636_pos`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `arus_kas`
--

CREATE TABLE `arus_kas` (
  `id_kas` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `penjualan` int(11) NOT NULL,
  `foto_copy` int(11) NOT NULL,
  `cetakan` int(11) NOT NULL,
  `banner_sticker` int(11) NOT NULL,
  `laser_A3` int(11) NOT NULL,
  `Sobirin` int(11) NOT NULL,
  `Sri` int(11) NOT NULL,
  `Dian` int(11) NOT NULL,
  `Hariyanto` int(11) NOT NULL,
  `Mila` int(11) NOT NULL,
  `Zaenal` int(11) NOT NULL,
  `pendapatan` int(11) NOT NULL,
  `pengeluaran` int(10) UNSIGNED NOT NULL,
  `keterangan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `arus_kas`
--

INSERT INTO `arus_kas` (`id_kas`, `tanggal`, `penjualan`, `foto_copy`, `cetakan`, `banner_sticker`, `laser_A3`, `Sobirin`, `Sri`, `Dian`, `Hariyanto`, `Mila`, `Zaenal`, `pendapatan`, `pengeluaran`, `keterangan`) VALUES
('AK001', '2018-07-03', 100000, 40000, 50000, 100000, 60000, 670000, 6000, 2000, 1000, 67000, 6578, 10000, 67888, 'laminasi'),
('AK0010', '2018-07-04', 100000, 7000, 5000, 70000, 10000, 900000, 560000, 50000, 40000, 27000, 3000, 80000, 77777, 'Kertas F4 2 Box'),
('AK0014', '2018-07-05', 100000, 7000, 100000, 70000, 2000, 900000, 560000, 50000, 40000, 70999, 5000, 80000, 77777, 'laminasi'),
('AK002', '2018-07-06', 50000, 77800, 12000, 50000, 67000, 870000, 23000, 65000, 12000, 34555, 45777, 90999, 34000, 'Laminasi '),
('AK003', '2018-07-07', 2000, 70000, 7000, 800, 8700, 98000, 89000, 87600, 8776, 89000, 8999, 78000, 70, 'Kertas A4'),
('AK0037', '2018-07-08', 500, 7000, 300000, 70000, 10000, 900000, 560000, 50000, 40000, 28000, 3000, 80000, 77777, 'Kertas F4 2 Box'),
('AK004', '2018-07-08', 1000, 8000, 10000, 10000, 10000, 5000, 70000, 9000, 6000, 9000, 8000, 6000, 4000, 'Cetak AP'),
('AK006', '2018-07-09', 100000, 8000, 5000, 70000, 20000, 900000, 560000, 50000, 40000, 13000, 5000, 80000, 77777, 'Kertas F4 2 Box'),
('AK008', '2018-07-09', 1000, 8000, 5000, 70000, 10000, 900000, 560000, 50000, 40000, 20000, 18000, 80000, 77777, 'Kertas F4 2 Box'),
('AK009', '2018-07-09', 100000, 7000, 5000, 70000, 10000, 900000, 560000, 50000, 40000, 70000, 500000, 80000, 77777, 'Kertas F4 2 Box');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `barang_id` int(11) NOT NULL,
  `kategori_id` int(11) DEFAULT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`barang_id`, `kategori_id`, `nama_barang`, `harga`) VALUES
(122, 1, 'Mika Bening', 500),
(211, 1, 'AP 30 gr', 3500),
(234, 1, 'Kertas AP', 3500),
(321, 15, 'Mika Bening', 1200),
(322, 15, 'Bulpoin', 2000),
(328, 15, 'Penghapus', 500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `databon`
--

CREATE TABLE `databon` (
  `tanggal` date NOT NULL,
  `no_nota` int(50) NOT NULL,
  `item_barang` varchar(50) NOT NULL,
  `QTY` int(50) NOT NULL,
  `harga` int(50) NOT NULL,
  `jumlah_sisa` int(50) NOT NULL,
  `bayar` int(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `databon`
--

INSERT INTO `databon` (`tanggal`, `no_nota`, `item_barang`, `QTY`, `harga`, `jumlah_sisa`, `bayar`, `status`) VALUES
('2018-05-22', 3452, 'Foto Copy', 11, 30000, 300000, 100000, 'Belum Lunas'),
('2018-05-15', 87968, 'Laser', 3, 20000, 60000, 100000, 'Lunas'),
('2018-07-17', 989876, 'Laser', 11, 20000, 400000, 10000, 'Lunas'),
('2018-07-10', 9898762, 'Laser', 11, 20000, 400000, 10000, 'Lunas'),
('2018-06-21', 98987999, 'Foto Copy', 2, 20000, 400000, 10000, 'Belum Lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hak_akses`
--

CREATE TABLE `hak_akses` (
  `id_hak_akses` varchar(5) NOT NULL,
  `nama_akses` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hak_akses`
--

INSERT INTO `hak_akses` (`id_hak_akses`, `nama_akses`) VALUES
('HA01', 'Admin'),
('HA02', 'Kasir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `identitas_bon`
--

CREATE TABLE `identitas_bon` (
  `ID_BON` varchar(50) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Instansi` varchar(50) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `No_HP` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `identitas_bon`
--

INSERT INTO `identitas_bon` (`ID_BON`, `Nama`, `Instansi`, `Alamat`, `No_HP`) VALUES
('BON006', 'Azkia Nur Farida', 'Pembkab Bojonegoro', 'Bojonegoro', 97645554);

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `ID_Karyawan` varchar(11) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Jenis_Kelamin` varchar(50) NOT NULL,
  `JOB` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`ID_Karyawan`, `Nama`, `Jenis_Kelamin`, `JOB`) VALUES
('K003', 'Reva', 'Perempuan', 'Design'),
('K004', 'Fa\'i', 'Laki-Laki', 'Poduksi'),
('K005', 'Trida', 'Laki-Laki', 'Banner'),
('K006', 'Novi', 'Perempuan', 'Kasir'),
('K007', 'Ali Imron', 'Laki-Laki', 'Finishing'),
('K010', 'Ahmad', 'Laki-Laki', 'ddd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_barang`
--

CREATE TABLE `kategori_barang` (
  `kategori_id` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_barang`
--

INSERT INTO `kategori_barang` (`kategori_id`, `nama_kategori`) VALUES
(1, 'Kertas AP'),
(2, 'Cetakan'),
(3, 'Cetak Banner'),
(4, 'Foto Copy'),
(5, 'Offset'),
(14, 'Jilid'),
(15, 'Alat Tulis Kantor'),
(16, 'Cetak Mug');

-- --------------------------------------------------------

--
-- Struktur dari tabel `operator`
--

CREATE TABLE `operator` (
  `operator_id` varchar(50) NOT NULL,
  `id_hak_akses` varchar(5) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `last_login` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `operator`
--

INSERT INTO `operator` (`operator_id`, `id_hak_akses`, `nama_lengkap`, `username`, `password`, `last_login`) VALUES
('OP004', 'HA01', 'Azar Nurun Ala', 'Azar', 'd11aece114983c39b3ea8a812dce5355', '2018-07-09'),
('OP002', 'HA01', 'Muhammad Al Kautsar', 'Ahmad', 'a244bc2be4245c022748235a46dedf15', '2018-07-09'),
('OP003', 'HA01', 'Yayuk Umaya', 'Maya', 'faizmaya', '2018-07-09'),
('OP001', 'HA02', 'Asma Binnuril Qolbi', 'Asma', 'ecd60eb22cf6c82b8c296694fe46a413', '2018-07-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id_order` varchar(50) NOT NULL,
  `tanggal_order` date DEFAULT NULL,
  `item_order` varchar(50) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `order_selesai` date DEFAULT NULL,
  `keterangan_order` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id_order`, `tanggal_order`, `item_order`, `jumlah`, `order_selesai`, `keterangan_order`) VALUES
('IO01', '2018-06-21', 'undangan', 300, '2018-06-26', 'undangan tamara kode 008'),
('IO02', '2018-06-21', 'cetak banner', 2, '2018-06-21', 'ukuran 90x60 ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekap`
--

CREATE TABLE `rekap` (
  `id_rekap` varchar(50) DEFAULT NULL,
  `id_rekap_harian` varchar(50) DEFAULT NULL,
  `id_rekap_bulanan` varchar(50) DEFAULT NULL,
  `id_rekap_tahunan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `transaksi_id` int(11) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `operator_id` varchar(50) NOT NULL,
  `nama_customer` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`transaksi_id`, `tanggal_transaksi`, `operator_id`, `nama_customer`) VALUES
(14, '2018-07-03', 'OP004', 'Yayuk Umaya'),
(15, '2018-07-03', 'OP004', 'Bunda Asma'),
(16, '2018-07-04', 'OP002', 'Uswatun'),
(17, '2018-07-05', 'OP002', 'Hamba Allah ^_^'),
(18, '2018-07-06', 'OP002', 'pepi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_detail`
--

CREATE TABLE `transaksi_detail` (
  `t_detail_id` int(11) NOT NULL,
  `barang_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `transaksi_id` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` enum('0','1') NOT NULL COMMENT '1= sudah diproses , 0 belum diproses'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi_detail`
--

INSERT INTO `transaksi_detail` (`t_detail_id`, `barang_id`, `qty`, `transaksi_id`, `harga`, `status`) VALUES
(47, 234, 100, 18, 3500, '1'),
(46, 328, 100, 17, 500, '1'),
(45, 322, 500, 17, 2000, '1'),
(44, 234, 100, 17, 3500, '1'),
(43, 322, 100, 16, 2000, '1'),
(42, 122, 4, 16, 500, '1'),
(41, 234, 100, 16, 3500, '1'),
(40, 328, 100, 15, 500, '1'),
(39, 322, 100, 15, 2000, '1'),
(38, 211, 5, 15, 3500, '1'),
(37, 234, 12, 15, 3500, '1'),
(36, 122, 10, 15, 500, '1'),
(35, 211, 3, 14, 3500, '1'),
(34, 122, 10, 14, 500, '1'),
(33, 234, 4, 14, 3500, '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `arus_kas`
--
ALTER TABLE `arus_kas`
  ADD PRIMARY KEY (`id_kas`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`barang_id`);

--
-- Indeks untuk tabel `databon`
--
ALTER TABLE `databon`
  ADD PRIMARY KEY (`no_nota`);

--
-- Indeks untuk tabel `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`id_hak_akses`);

--
-- Indeks untuk tabel `identitas_bon`
--
ALTER TABLE `identitas_bon`
  ADD PRIMARY KEY (`ID_BON`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`ID_Karyawan`);

--
-- Indeks untuk tabel `kategori_barang`
--
ALTER TABLE `kategori_barang`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indeks untuk tabel `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`operator_id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_order`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`transaksi_id`);

--
-- Indeks untuk tabel `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD PRIMARY KEY (`t_detail_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `barang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=329;

--
-- AUTO_INCREMENT untuk tabel `kategori_barang`
--
ALTER TABLE `kategori_barang`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  MODIFY `t_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
