-- Adminer 4.6.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `harga`;
CREATE TABLE `harga` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lama_jam` int(11) NOT NULL,
  `harga` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `harga` (`id`, `lama_jam`, `harga`) VALUES
(2,	2,	55000),
(3,	3,	150000);

DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(80) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `harga` float NOT NULL,
  `bulan_aktif` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `kategori` (`id`, `nama`, `keterangan`, `harga`, `bulan_aktif`) VALUES
(1,	'Paket 1 bulan',	'aktif 1 bulan',	200000,	1),
(3,	'paket ontime ',	'Qui quia numquam nisi libero quia explicabo corrup',	50000,	3);

DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `id` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_telpon` varchar(13) NOT NULL,
  `tgl_pendaftaran` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `member` (`id`, `nama`, `tanggal_lahir`, `alamat`, `no_telpon`, `tgl_pendaftaran`) VALUES
('200718171607',	'150',	'2020-03-09',	'Et officiis dolores sit.',	'509',	'2020-02-06'),
('200718171708',	'360',	'2021-04-01',	'Blanditiis est cupiditate doloremque officia iure magnam ipsum.',	'441',	'2021-05-15');

DROP TABLE IF EXISTS `paket`;
CREATE TABLE `paket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_member` varchar(50) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `tgl_beli` date NOT NULL,
  `tgl_exp` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_member` (`id_member`),
  KEY `id_kategori` (`id_kategori`),
  CONSTRAINT `paket_ibfk_3` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `paket` (`id`, `id_member`, `id_kategori`, `tgl_beli`, `tgl_exp`) VALUES
(6,	'200718171607',	3,	'2020-07-19',	'2020-10-19'),
(8,	'200718171708',	3,	'2020-07-19',	'2020-10-19');

DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_transaksi` varchar(50) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL,
  `nama_member` varchar(50) DEFAULT NULL,
  `harga` varchar(30) DEFAULT NULL,
  `diskon` varchar(50) DEFAULT NULL,
  `total` int(11) NOT NULL,
  `kasir` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_paket` (`diskon`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `transaksi` (`id`, `jenis_transaksi`, `tanggal_transaksi`, `nama_member`, `harga`, `diskon`, `total`, `kasir`) VALUES
(1,	'PEMBAYARAN',	'2020-07-19 03:42:05',	'360',	'30000',	'30000',	0,	NULL),
(2,	'PEMBAYARAN',	'2020-07-19 03:42:35',	'',	'30000',	'',	30000,	NULL),
(3,	'PEMBELIAN MEMBER BARU',	'2020-07-19 05:04:23',	'200718171708',	'50000',	NULL,	50000,	NULL),
(4,	'PAKET MEMBER LAMA',	'2020-07-19 05:07:24',	'200718171708',	'50000',	NULL,	50000,	NULL);

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `no_telpon` int(13) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `akses` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `user` (`id`, `nama`, `no_telpon`, `username`, `password`, `akses`) VALUES
(2,	'sandi',	2558454,	'sandi',	'79672e479fc2fe12f79f44d48821fbb1',	'ADMIN'),
(3,	'andi',	85563211,	'andi',	'466148938c7baf59c49d5ac6597e5766',	'KASIR');

-- 2020-07-19 10:44:01
