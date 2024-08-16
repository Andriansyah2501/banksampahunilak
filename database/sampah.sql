-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2024 at 09:20 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sampah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabungan_nasabah`
--

CREATE TABLE `tabungan_nasabah` (
  `id_client` varchar(10) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `saldo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_bukti_transaksi`
--

CREATE TABLE `tb_bukti_transaksi` (
  `no_nota` varchar(12) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `jml` int(11) NOT NULL,
  `nm_sampah` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bukti_transaksi`
--

INSERT INTO `tb_bukti_transaksi` (`no_nota`, `tgl_transaksi`, `jml`, `nm_sampah`, `harga`, `total`) VALUES
('1', '2024-06-18', 3, 'Besi Bekasi', 5000, 15000),
('2', '2024-06-18', 5, 'Botol Plastik', 5000, 25000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_client`
--

CREATE TABLE `tb_client` (
  `id_client` varchar(10) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `no_hp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_client`
--

INSERT INTO `tb_client` (`id_client`, `nama`, `alamat`, `jenis`, `no_hp`) VALUES
('N001', 'Orang', 'Jalan jalan', 'pembeli', '0897897579'),
('N002', 'Manusia', 'Jalan jalan', 'pembeli', '078576448765'),
('none', '', '', 'penjual', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sampah`
--

CREATE TABLE `tb_sampah` (
  `kd_sampah` varchar(8) NOT NULL,
  `nm_sampah` varchar(32) NOT NULL,
  `jns_sampah` varchar(15) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `satuan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sampah`
--

INSERT INTO `tb_sampah` (`kd_sampah`, `nm_sampah`, `jns_sampah`, `harga_beli`, `harga_jual`, `satuan`) VALUES
('KDS001', 'Besi Bekasi', 'Non-Organik', 5000, 6000, 'Kg'),
('KDS002', 'Botol Plastik', 'Non-Organik', 4000, 5000, 'Kg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_client` varchar(12) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `jml` int(11) NOT NULL,
  `kd_sampah` varchar(8) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `id_client`, `tgl_transaksi`, `jml`, `kd_sampah`, `harga`) VALUES
(1, 'none', '2024-06-18', 3, 'KDS001', 5000),
(2, 'N001', '2024-06-18', 5, 'KDS002', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(15) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`username`, `password`, `nama`, `level`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Indah', 'admin'),
('pengguna', '28b662d883b6d76fd96e4ddc5e9ba780', 'User', 'masyarakat'),
('pimpinan', 'c444858e0aaeb727da73d2eae62321ad', 'Pimpinan', 'pimpinan');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_transaksi`
-- (See below for the actual view)
--
CREATE TABLE `view_transaksi` (
`id_client` varchar(10)
,`nama` varchar(32)
,`alamat` varchar(50)
,`jenis` varchar(10)
,`id_transaksi` int(11)
,`tgl_transaksi` date
,`jml` int(11)
,`harga` int(11)
,`kd_sampah` varchar(8)
,`nm_sampah` varchar(32)
,`jns_sampah` varchar(15)
,`satuan` varchar(10)
);

-- --------------------------------------------------------

--
-- Structure for view `view_transaksi`
--
DROP TABLE IF EXISTS `view_transaksi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_transaksi`  AS  select `tb_client`.`id_client` AS `id_client`,`tb_client`.`nama` AS `nama`,`tb_client`.`alamat` AS `alamat`,`tb_client`.`jenis` AS `jenis`,`tb_transaksi`.`id_transaksi` AS `id_transaksi`,`tb_transaksi`.`tgl_transaksi` AS `tgl_transaksi`,`tb_transaksi`.`jml` AS `jml`,`tb_transaksi`.`harga` AS `harga`,`tb_sampah`.`kd_sampah` AS `kd_sampah`,`tb_sampah`.`nm_sampah` AS `nm_sampah`,`tb_sampah`.`jns_sampah` AS `jns_sampah`,`tb_sampah`.`satuan` AS `satuan` from ((`tb_client` join `tb_transaksi` on((`tb_client`.`id_client` = `tb_transaksi`.`id_client`))) join `tb_sampah` on((`tb_transaksi`.`kd_sampah` = `tb_sampah`.`kd_sampah`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_client`
--
ALTER TABLE `tb_client`
  ADD PRIMARY KEY (`id_client`);

--
-- Indexes for table `tb_sampah`
--
ALTER TABLE `tb_sampah`
  ADD PRIMARY KEY (`kd_sampah`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
