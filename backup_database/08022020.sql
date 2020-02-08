-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 10.1.38-MariaDB - mariadb.org binary distribution
-- OS Server:                    Win64
-- HeidiSQL Versi:               9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Membuang struktur basisdata untuk e_pos
CREATE DATABASE IF NOT EXISTS `e_pos` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `e_pos`;

-- membuang struktur untuk table e_pos.arus_kas
CREATE TABLE IF NOT EXISTS `arus_kas` (
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
  `pengeluaran` int(10) unsigned NOT NULL,
  `keterangan` varchar(40) NOT NULL,
  PRIMARY KEY (`id_kas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel e_pos.arus_kas: ~10 rows (lebih kurang)
/*!40000 ALTER TABLE `arus_kas` DISABLE KEYS */;
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
/*!40000 ALTER TABLE `arus_kas` ENABLE KEYS */;

-- membuang struktur untuk table e_pos.barang
CREATE TABLE IF NOT EXISTS `barang` (
  `barang_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_id` int(11) DEFAULT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  PRIMARY KEY (`barang_id`)
) ENGINE=InnoDB AUTO_INCREMENT=334 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel e_pos.barang: ~6 rows (lebih kurang)
/*!40000 ALTER TABLE `barang` DISABLE KEYS */;
INSERT INTO `barang` (`barang_id`, `kategori_id`, `nama_barang`, `harga`) VALUES
	(326, 15, 'Mika Bening', 1200),
	(327, 15, 'Bulpoin', 2000),
	(328, 15, 'Penghapus', 500),
	(329, 3, 'X Banner', 50000),
	(332, 1, 'Kertas HVS', 5000),
	(333, 15, 'Lem ateko', 3000);
/*!40000 ALTER TABLE `barang` ENABLE KEYS */;

-- membuang struktur untuk table e_pos.barang_pesanan
CREATE TABLE IF NOT EXISTS `barang_pesanan` (
  `barang_pesanan_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_barpes_id` int(11) DEFAULT '0',
  `nama_barang_pesanan` varchar(50) DEFAULT '0' COMMENT '1=sudah diproses, 0= belum diproses',
  `harga` int(11) DEFAULT '0',
  PRIMARY KEY (`barang_pesanan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel e_pos.barang_pesanan: ~7 rows (lebih kurang)
/*!40000 ALTER TABLE `barang_pesanan` DISABLE KEYS */;
INSERT INTO `barang_pesanan` (`barang_pesanan_id`, `kategori_barpes_id`, `nama_barang_pesanan`, `harga`) VALUES
	(4, 0, 'Kertas AP', 3000),
	(5, NULL, 'Kertas AP', 1000),
	(6, 0, 'Kertas AP', 5000),
	(7, 0, 'Kertas AP', 10000),
	(8, 0, 'Kertas AP', 100000),
	(9, 1, 'Sampul Hot Print', 50000),
	(10, 5, 'Kertas AP', 100000),
	(11, 3, 'Buku Yasim', 10000);
/*!40000 ALTER TABLE `barang_pesanan` ENABLE KEYS */;

-- membuang struktur untuk table e_pos.customer
CREATE TABLE IF NOT EXISTS `customer` (
  `no_cust` int(11) NOT NULL AUTO_INCREMENT,
  `no_order` int(11) DEFAULT NULL,
  `nama_customer` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`no_cust`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel e_pos.customer: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;

-- membuang struktur untuk table e_pos.databon
CREATE TABLE IF NOT EXISTS `databon` (
  `tanggal` date NOT NULL,
  `no_nota` int(50) NOT NULL AUTO_INCREMENT,
  `item_barang` varchar(50) NOT NULL,
  `QTY` int(50) NOT NULL,
  `harga` int(50) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `sisa` int(50) NOT NULL,
  `bayar` int(50) NOT NULL,
  `status` enum('Y','N') NOT NULL,
  PRIMARY KEY (`no_nota`)
) ENGINE=InnoDB AUTO_INCREMENT=98988006 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel e_pos.databon: ~3 rows (lebih kurang)
/*!40000 ALTER TABLE `databon` DISABLE KEYS */;
INSERT INTO `databon` (`tanggal`, `no_nota`, `item_barang`, `QTY`, `harga`, `jumlah`, `sisa`, `bayar`, `status`) VALUES
	('2020-02-01', 98988004, '328', 500, 500, 250000, 0, 50000, ''),
	('2020-02-22', 98988005, '326', 10, 1200, 12000, 0, 10000, ''),
	('2020-02-22', 98988006, '333', 10, 3000, 3000, 0, 3000, '');
/*!40000 ALTER TABLE `databon` ENABLE KEYS */;

-- membuang struktur untuk table e_pos.data_job_karyawan
CREATE TABLE IF NOT EXISTS `data_job_karyawan` (
  `job_karyawan_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_job_id` int(11) DEFAULT NULL,
  `nama_karyawan_job` varchar(50) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  PRIMARY KEY (`job_karyawan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel e_pos.data_job_karyawan: ~2 rows (lebih kurang)
/*!40000 ALTER TABLE `data_job_karyawan` DISABLE KEYS */;
INSERT INTO `data_job_karyawan` (`job_karyawan_id`, `kategori_job_id`, `nama_karyawan_job`, `harga`) VALUES
	(2, NULL, 'ngetik', 50000),
	(3, NULL, 'ngetik', 1000),
	(4, NULL, 'Design', 50000),
	(5, NULL, 'Design', 50000);
/*!40000 ALTER TABLE `data_job_karyawan` ENABLE KEYS */;

-- membuang struktur untuk table e_pos.data_kategori_job
CREATE TABLE IF NOT EXISTS `data_kategori_job` (
  `kategori_job_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori_job` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kategori_job_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel e_pos.data_kategori_job: ~4 rows (lebih kurang)
/*!40000 ALTER TABLE `data_kategori_job` DISABLE KEYS */;
INSERT INTO `data_kategori_job` (`kategori_job_id`, `nama_kategori_job`) VALUES
	(1, 'Design'),
	(2, 'Editing'),
	(3, 'Pengetikan'),
	(4, 'Lain - Lain'),
	(5, 'Percetakan');
/*!40000 ALTER TABLE `data_kategori_job` ENABLE KEYS */;

-- membuang struktur untuk table e_pos.detail_arus_kas
CREATE TABLE IF NOT EXISTS `detail_arus_kas` (
  `t_aruskas_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_karyawan_id` int(11) NOT NULL DEFAULT '0',
  `qty` int(11) NOT NULL DEFAULT '0',
  `aruskas_id` int(11) NOT NULL DEFAULT '0',
  `harga` int(11) NOT NULL DEFAULT '0',
  `status` enum('0','1') NOT NULL DEFAULT '0' COMMENT '1= sudah diproses , 0 belum diproses',
  PRIMARY KEY (`t_aruskas_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel e_pos.detail_arus_kas: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `detail_arus_kas` DISABLE KEYS */;
/*!40000 ALTER TABLE `detail_arus_kas` ENABLE KEYS */;

-- membuang struktur untuk table e_pos.detail_order
CREATE TABLE IF NOT EXISTS `detail_order` (
  `t_detail_order_id` int(11) NOT NULL AUTO_INCREMENT,
  `barang_pesanan_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `no_nota` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` enum('0','1') DEFAULT NULL COMMENT '1= sudah diproses , 0 belum diproses',
  PRIMARY KEY (`t_detail_order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel e_pos.detail_order: ~8 rows (lebih kurang)
/*!40000 ALTER TABLE `detail_order` DISABLE KEYS */;
INSERT INTO `detail_order` (`t_detail_order_id`, `barang_pesanan_id`, `qty`, `no_nota`, `harga`, `status`) VALUES
	(2, 4, 6, 14, 3000, '1'),
	(3, 4, 100, 14, 3000, '1'),
	(4, 4, 100, 14, 3000, '1'),
	(5, 9, 400, 15, 50000, '1'),
	(6, 4, 66, 16, 3000, '1'),
	(7, 4, 8888, 16, 3000, '1'),
	(14, 4, 2, 0, 3000, '0'),
	(20, 11, 3, 0, 10000, '0'),
	(21, 9, 100, 0, 50000, '0');
/*!40000 ALTER TABLE `detail_order` ENABLE KEYS */;

-- membuang struktur untuk table e_pos.hak_akses
CREATE TABLE IF NOT EXISTS `hak_akses` (
  `id_hak_akses` varchar(5) NOT NULL,
  `nama_akses` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_hak_akses`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel e_pos.hak_akses: ~3 rows (lebih kurang)
/*!40000 ALTER TABLE `hak_akses` DISABLE KEYS */;
INSERT INTO `hak_akses` (`id_hak_akses`, `nama_akses`) VALUES
	('HA01', 'Admin'),
	('HA02', 'Kasir'),
	('HA03', 'Customer');
/*!40000 ALTER TABLE `hak_akses` ENABLE KEYS */;

-- membuang struktur untuk table e_pos.identitas_bon
CREATE TABLE IF NOT EXISTS `identitas_bon` (
  `no_nota` varchar(50) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Instansi` varchar(50) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `No_HP` int(20) NOT NULL,
  PRIMARY KEY (`no_nota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel e_pos.identitas_bon: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `identitas_bon` DISABLE KEYS */;
INSERT INTO `identitas_bon` (`no_nota`, `Nama`, `Instansi`, `Alamat`, `No_HP`) VALUES
	('BON006', 'Azkia Nur Farida', 'Pembkab Bojonegoro', 'Bojonegoro', 97645554);
/*!40000 ALTER TABLE `identitas_bon` ENABLE KEYS */;

-- membuang struktur untuk table e_pos.karyawan
CREATE TABLE IF NOT EXISTS `karyawan` (
  `ID_Karyawan` varchar(11) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Jenis_Kelamin` varchar(50) NOT NULL,
  `JOB` varchar(30) NOT NULL,
  PRIMARY KEY (`ID_Karyawan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel e_pos.karyawan: ~6 rows (lebih kurang)
/*!40000 ALTER TABLE `karyawan` DISABLE KEYS */;
INSERT INTO `karyawan` (`ID_Karyawan`, `Nama`, `Jenis_Kelamin`, `JOB`) VALUES
	('K003', 'Reva', 'Perempuan', 'Design'),
	('K004', 'Fa\'i', 'Laki-Laki', 'Poduksi'),
	('K005', 'Trida', 'Laki-Laki', 'Banner'),
	('K006', 'Novi', 'Perempuan', 'Kasir'),
	('K007', 'Ali Imron', 'Laki-Laki', 'Finishing'),
	('K008', 'Rafika Novia Lorarosa', 'Perempuan', 'Cashier');
/*!40000 ALTER TABLE `karyawan` ENABLE KEYS */;

-- membuang struktur untuk table e_pos.kategori_barang
CREATE TABLE IF NOT EXISTS `kategori_barang` (
  `kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(50) NOT NULL,
  PRIMARY KEY (`kategori_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel e_pos.kategori_barang: 6 rows
/*!40000 ALTER TABLE `kategori_barang` DISABLE KEYS */;
INSERT INTO `kategori_barang` (`kategori_id`, `nama_kategori`) VALUES
	(1, 'Kertas AP'),
	(2, 'Cetakan'),
	(21, 'Lain - Lain'),
	(4, 'Foto Copy'),
	(14, 'Jilid'),
	(15, 'Alat Tulis Kantor');
/*!40000 ALTER TABLE `kategori_barang` ENABLE KEYS */;

-- membuang struktur untuk table e_pos.kategori_barang_pesanan
CREATE TABLE IF NOT EXISTS `kategori_barang_pesanan` (
  `kategori_barpes_id` int(11) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nama_kategori_barpes` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kategori_barpes_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel e_pos.kategori_barang_pesanan: ~6 rows (lebih kurang)
/*!40000 ALTER TABLE `kategori_barang_pesanan` DISABLE KEYS */;
INSERT INTO `kategori_barang_pesanan` (`kategori_barpes_id`, `nama_kategori_barpes`) VALUES
	(00000000001, 'Cetak Laser'),
	(00000000002, 'Art Paper'),
	(00000000003, 'Cetak Buku'),
	(00000000004, 'Sticker'),
	(00000000005, 'Sablon'),
	(00000000006, 'Cetak AP'),
	(00000000007, 'Banner');
/*!40000 ALTER TABLE `kategori_barang_pesanan` ENABLE KEYS */;

-- membuang struktur untuk table e_pos.operator
CREATE TABLE IF NOT EXISTS `operator` (
  `operator_id` varchar(50) NOT NULL,
  `id_hak_akses` varchar(5) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `last_login` date NOT NULL,
  PRIMARY KEY (`operator_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel e_pos.operator: 5 rows
/*!40000 ALTER TABLE `operator` DISABLE KEYS */;
INSERT INTO `operator` (`operator_id`, `id_hak_akses`, `nama_lengkap`, `username`, `password`, `last_login`) VALUES
	('OP003', 'HA02', 'Asma Binnuril Qolbi', 'Asma', 'ecd60eb22cf6c82b8c296694fe46a413', '2020-02-08'),
	('OP004', 'HA02', 'Yayuk Umaya', 'Maya', 'ecd60eb22cf6c82b8c296694fe46a413', '2020-02-08'),
	('OP001', 'HA01', 'MasyaaAllah', 'Shasa', '78b318cfbc9c02945a5f7a39af4e72d7', '2020-02-08'),
	('OP002', 'HA01', 'Faiz Alka', 'Faiz', '78b318cfbc9c02945a5f7a39af4e72d7', '2020-02-08'),
	('', '', '0', 'yayukumaya', '719fe28004fcdd81a820602924aa8074', '2020-02-08');
/*!40000 ALTER TABLE `operator` ENABLE KEYS */;

-- membuang struktur untuk table e_pos.pesanan
CREATE TABLE IF NOT EXISTS `pesanan` (
  `id_pesanan` int(10) NOT NULL AUTO_INCREMENT,
  `tanggal_pemesanan` date DEFAULT NULL,
  `item_pesanan` varchar(50) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `pesanan_selesai` date DEFAULT NULL,
  `harga` date DEFAULT NULL,
  `keterangan_pesanan` enum('Y','N') DEFAULT NULL,
  PRIMARY KEY (`id_pesanan`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel e_pos.pesanan: ~2 rows (lebih kurang)
/*!40000 ALTER TABLE `pesanan` DISABLE KEYS */;
INSERT INTO `pesanan` (`id_pesanan`, `tanggal_pemesanan`, `item_pesanan`, `jumlah`, `pesanan_selesai`, `harga`, `keterangan_pesanan`) VALUES
	(1, '2018-06-21', 'undangan', 300, '2018-06-26', NULL, ''),
	(2, '2018-06-21', 'cetak banner', 2, '2018-06-21', NULL, '');
/*!40000 ALTER TABLE `pesanan` ENABLE KEYS */;

-- membuang struktur untuk table e_pos.rekap
CREATE TABLE IF NOT EXISTS `rekap` (
  `id_rekap` varchar(50) DEFAULT NULL,
  `id_rekap_harian` varchar(50) DEFAULT NULL,
  `id_rekap_bulanan` varchar(50) DEFAULT NULL,
  `id_rekap_tahunan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel e_pos.rekap: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `rekap` DISABLE KEYS */;
/*!40000 ALTER TABLE `rekap` ENABLE KEYS */;

-- membuang struktur untuk table e_pos.tb_order
CREATE TABLE IF NOT EXISTS `tb_order` (
  `no_nota` int(30) NOT NULL AUTO_INCREMENT,
  `is_selesai` varchar(1) NOT NULL DEFAULT '0',
  `tanggal_order` date NOT NULL,
  `operator_id` varchar(50) NOT NULL,
  `nama_customer` varchar(200) NOT NULL,
  PRIMARY KEY (`no_nota`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel e_pos.tb_order: ~3 rows (lebih kurang)
/*!40000 ALTER TABLE `tb_order` DISABLE KEYS */;
INSERT INTO `tb_order` (`no_nota`, `is_selesai`, `tanggal_order`, `operator_id`, `nama_customer`) VALUES
	(14, '1', '2020-02-02', 'OP002', 'Rindu'),
	(15, '0', '2020-02-02', 'OP002', 'Anggi'),
	(16, '0', '2020-02-02', 'OP002', 'Indah');
/*!40000 ALTER TABLE `tb_order` ENABLE KEYS */;

-- membuang struktur untuk table e_pos.transaksi
CREATE TABLE IF NOT EXISTS `transaksi` (
  `transaksi_id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_transaksi` date NOT NULL,
  `operator_id` varchar(50) NOT NULL,
  `nama_customer` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`transaksi_id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel e_pos.transaksi: 4 rows
/*!40000 ALTER TABLE `transaksi` DISABLE KEYS */;
INSERT INTO `transaksi` (`transaksi_id`, `tanggal_transaksi`, `operator_id`, `nama_customer`) VALUES
	(27, '2020-02-04', 'OP001', 'Ibu Diah'),
	(19, '2018-11-25', 'OP001', 'Yayuk Umaya'),
	(23, '2020-02-01', 'OP002', 'Faiz'),
	(26, '2020-02-03', 'OP001', 'Alka');
/*!40000 ALTER TABLE `transaksi` ENABLE KEYS */;

-- membuang struktur untuk table e_pos.transaksi_aruskas
CREATE TABLE IF NOT EXISTS `transaksi_aruskas` (
  `aruskas_id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_kas` varchar(50) NOT NULL DEFAULT '0',
  `operator_id` int(11) NOT NULL DEFAULT '0',
  `nama_customer` varchar(50) DEFAULT '0',
  PRIMARY KEY (`aruskas_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel e_pos.transaksi_aruskas: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `transaksi_aruskas` DISABLE KEYS */;
/*!40000 ALTER TABLE `transaksi_aruskas` ENABLE KEYS */;

-- membuang struktur untuk table e_pos.transaksi_detail
CREATE TABLE IF NOT EXISTS `transaksi_detail` (
  `t_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `barang_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `transaksi_id` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` enum('0','1') DEFAULT NULL COMMENT '1= sudah diproses , 0 belum diproses',
  PRIMARY KEY (`t_detail_id`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel e_pos.transaksi_detail: 18 rows
/*!40000 ALTER TABLE `transaksi_detail` DISABLE KEYS */;
INSERT INTO `transaksi_detail` (`t_detail_id`, `barang_id`, `qty`, `transaksi_id`, `harga`, `status`) VALUES
	(40, 328, 100, 15, 500, NULL),
	(39, 322, 100, 15, 2000, NULL),
	(38, 211, 5, 15, 3500, NULL),
	(37, 234, 12, 15, 3500, NULL),
	(36, 122, 10, 15, 500, NULL),
	(35, 211, 3, 14, 3500, NULL),
	(34, 122, 10, 14, 500, NULL),
	(33, 234, 4, 14, 3500, NULL),
	(50, 322, 10, 19, 2000, NULL),
	(51, 122, 100, 20, 500, NULL),
	(52, 322, 10, 20, 2000, NULL),
	(53, 234, 100, 21, 3500, NULL),
	(54, 122, 6, 22, 1000, NULL),
	(56, 328, 10, 23, 500, NULL),
	(57, 322, 100, 23, 2000, NULL),
	(58, 122, 100, 24, 1000, '1'),
	(64, 331, 8888, 27, 500, '1'),
	(62, 328, 100, 26, 500, '1');
/*!40000 ALTER TABLE `transaksi_detail` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
