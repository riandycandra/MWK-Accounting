-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2016 at 03:49 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int(15) NOT NULL AUTO_INCREMENT,
  `nama_client` varchar(100) NOT NULL,
  `perusahaan` varchar(150) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(25) NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id_client`, `nama_client`, `perusahaan`, `alamat`, `telepon`) VALUES
(1, 'Siti Nurmilah, S.Pd.I', 'PAUD Mawar 2', 'Jl. Raya Proklamasi No. 7 Karawang Barat - Karawang', '081316441416'),
(2, 'Jaka Abdul Haris', 'Niaga Software', 'Kosambi - Karawang', '081316441418');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `id_karyawan` int(15) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(150) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(25) NOT NULL,
  PRIMARY KEY (`id_karyawan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama`, `jabatan`, `alamat`, `telepon`) VALUES
(1, 'Jaka Abdul Haris', 'Programmer', '', '081584296512');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id_payment` int(15) NOT NULL AUTO_INCREMENT,
  `kode_project` varchar(100) NOT NULL,
  `pay` int(30) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_payment`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id_payment`, `kode_project`, `pay`, `tanggal`) VALUES
(1, 'PRJ1606140001', 1500000, '2016-06-14'),
(2, 'PRJ1606140002', 1000000, '2016-06-14'),
(3, 'PRJ1606140003', 2500000, '2016-06-14'),
(4, 'PRJ1606140004', 2000000, '2016-06-14'),
(5, 'PRJ1606180005', 2000000, '2016-06-18'),
(6, 'PRJ1606180006', 2000000, '2016-06-18'),
(7, 'PRJ1606180006', 1000000, '2016-06-18'),
(8, 'PRJ1606180006', 1000000, '2016-06-18'),
(9, 'PRJ1606140004', 100000, '2016-06-18'),
(10, 'PRJ1606140004', 100000, '2016-06-18'),
(11, 'PRJ1606140004', 900000, '2016-06-18');

-- --------------------------------------------------------

--
-- Table structure for table `pemasukan`
--

CREATE TABLE IF NOT EXISTS `pemasukan` (
  `id_pemasukan` int(15) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `nominal` int(20) NOT NULL,
  `keterangan` text NOT NULL,
  `client_name` text NOT NULL,
  PRIMARY KEY (`id_pemasukan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `pemasukan`
--

INSERT INTO `pemasukan` (`id_pemasukan`, `date`, `nominal`, `keterangan`, `client_name`) VALUES
(1, '2016-06-14', 1500000, 'PRJ1606140001', ''),
(2, '2016-06-14', 1000000, 'PRJ1606140002', ''),
(3, '2016-06-14', 2500000, 'PRJ1606140003', ''),
(4, '2016-06-14', 2000000, 'PRJ1606140004', ''),
(5, '2016-06-18', 2000000, 'PRJ1606180006', '2'),
(6, '2016-06-18', 1000000, 'PRJ1606180006', ''),
(7, '2016-06-18', 1000000, 'PRJ1606180006', '2'),
(8, '2016-06-18', 100000, 'PRJ1606140004', '1'),
(9, '2016-06-18', 100000, 'PRJ1606140004', '1'),
(10, '2016-06-18', 900000, 'PRJ1606140004', '1');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE IF NOT EXISTS `pengeluaran` (
  `id_pengeluaran` int(15) NOT NULL AUTO_INCREMENT,
  `besar` int(50) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_pengeluaran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` int(15) NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(250) NOT NULL,
  `harga` int(30) NOT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga`) VALUES
(1, 'Website Developer', 4000000),
(2, 'Optimasi SEO', 5000000);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id_project` int(15) NOT NULL AUTO_INCREMENT,
  `kode_project` varchar(100) NOT NULL,
  `id_produk` int(25) NOT NULL,
  `id_client` int(25) NOT NULL,
  `id_karyawan` int(25) NOT NULL,
  `harga` int(30) NOT NULL,
  `bayar` int(20) NOT NULL,
  `sisa` int(50) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_project`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id_project`, `kode_project`, `id_produk`, `id_client`, `id_karyawan`, `harga`, `bayar`, `sisa`, `tanggal`) VALUES
(1, 'PRJ1606140001', 1, 1, 1, 4000000, 1500000, 2500000, '2016-06-14'),
(2, 'PRJ1606140002', 2, 1, 1, 5000000, 1000000, 4000000, '2016-06-14'),
(3, 'PRJ1606140003', 1, 1, 1, 4000000, 2500000, 1500000, '2016-06-14'),
(4, 'PRJ1606140004', 2, 1, 1, 5000000, 3000000, 2000000, '2016-06-14'),
(6, 'PRJ1606180006', 1, 2, 1, 4000000, 4000000, 0, '2016-06-18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `level` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`, `level`, `foto`) VALUES
(1, 'Deni Darmayana', 'denidarmayana@gmail.com', 'admin', 'admin', 'Administrator', '300px-Proklamasi_Klad.jpg'),
(2, 'Riandy Candra Winahyu', 'riandycandraa@gmail.com', 'riandy', 'riandycandra', 'Operator', '13285368_1193888473963221_1410705416_n1.jpg');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_project`
--
CREATE TABLE IF NOT EXISTS `view_project` (
`kode_project` varchar(100)
,`nama_produk` varchar(250)
,`perusahaan` varchar(150)
,`nama_client` varchar(100)
,`alamat` text
,`telepon` varchar(25)
,`nama` varchar(100)
,`harga` int(30)
,`bayar` int(20)
,`sisa` int(50)
,`tanggal` date
);
-- --------------------------------------------------------

--
-- Structure for view `view_project`
--
DROP TABLE IF EXISTS `view_project`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_project` AS select `m1`.`kode_project` AS `kode_project`,`m3`.`nama_produk` AS `nama_produk`,`m2`.`perusahaan` AS `perusahaan`,`m2`.`nama_client` AS `nama_client`,`m2`.`alamat` AS `alamat`,`m2`.`telepon` AS `telepon`,`m4`.`nama` AS `nama`,`m1`.`harga` AS `harga`,`m1`.`bayar` AS `bayar`,`m1`.`sisa` AS `sisa`,`m1`.`tanggal` AS `tanggal` from (((`project` `m1` join `client` `m2` on((`m1`.`id_client` = `m2`.`id_client`))) join `produk` `m3` on((`m1`.`id_produk` = `m3`.`id_produk`))) join `karyawan` `m4` on((`m1`.`id_karyawan` = `m4`.`id_karyawan`)));

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
