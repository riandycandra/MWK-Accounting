-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2016 at 04:45 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id_client` int(15) NOT NULL,
  `nama_client` varchar(100) NOT NULL,
  `perusahaan` varchar(150) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `karyawan` (
  `id_karyawan` int(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(150) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama`, `jabatan`, `alamat`, `telepon`) VALUES
(1, 'Jaka Abdul Haris', 'Programmer', '', '081584296512');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id_payment` int(15) NOT NULL,
  `kode_project` varchar(100) NOT NULL,
  `pay` int(30) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id_payment`, `kode_project`, `pay`, `tanggal`) VALUES
(1, 'PRJ1606140001', 1500000, '2016-06-14'),
(2, 'PRJ1606140002', 1000000, '2016-06-14'),
(3, 'PRJ1606140003', 2500000, '2016-06-14'),
(4, 'PRJ1606140004', 2000000, '2016-06-14');

-- --------------------------------------------------------

--
-- Table structure for table `pemasukan`
--

CREATE TABLE `pemasukan` (
  `id_pemasukan` int(15) NOT NULL,
  `date` date NOT NULL,
  `nominal` int(20) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemasukan`
--

INSERT INTO `pemasukan` (`id_pemasukan`, `date`, `nominal`, `keterangan`) VALUES
(1, '2016-06-14', 1500000, 'PRJ1606140001'),
(2, '2016-06-14', 1000000, 'PRJ1606140002'),
(3, '2016-06-14', 2500000, 'PRJ1606140003'),
(4, '2016-06-14', 2000000, 'PRJ1606140004');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id_pengeluaran` int(15) NOT NULL,
  `besar` int(50) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(15) NOT NULL,
  `nama_produk` varchar(250) NOT NULL,
  `harga` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `project` (
  `id_project` int(15) NOT NULL,
  `kode_project` varchar(100) NOT NULL,
  `id_produk` int(25) NOT NULL,
  `id_client` int(25) NOT NULL,
  `id_karyawan` int(25) NOT NULL,
  `harga` int(30) NOT NULL,
  `bayar` int(20) NOT NULL,
  `sisa` int(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id_project`, `kode_project`, `id_produk`, `id_client`, `id_karyawan`, `harga`, `bayar`, `sisa`, `tanggal`) VALUES
(1, 'PRJ1606140001', 1, 1, 1, 4000000, 1500000, 2500000, '2016-06-14'),
(2, 'PRJ1606140002', 2, 1, 1, 5000000, 1000000, 4000000, '2016-06-14'),
(3, 'PRJ1606140003', 1, 1, 1, 4000000, 2500000, 1500000, '2016-06-14'),
(4, 'PRJ1606140004', 2, 1, 1, 5000000, 2000000, 3000000, '2016-06-14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `level` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`, `level`, `foto`) VALUES
(1, 'Deni Darmayana', 'denidarmayana@gmail.com', 'admin', 'admin', 'Administrator', 'user.png');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_project`
--
CREATE TABLE `view_project` (
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

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_project`  AS  select `m1`.`kode_project` AS `kode_project`,`m3`.`nama_produk` AS `nama_produk`,`m2`.`perusahaan` AS `perusahaan`,`m2`.`nama_client` AS `nama_client`,`m2`.`alamat` AS `alamat`,`m2`.`telepon` AS `telepon`,`m4`.`nama` AS `nama`,`m1`.`harga` AS `harga`,`m1`.`bayar` AS `bayar`,`m1`.`sisa` AS `sisa`,`m1`.`tanggal` AS `tanggal` from (((`project` `m1` join `client` `m2` on((`m1`.`id_client` = `m2`.`id_client`))) join `produk` `m3` on((`m1`.`id_produk` = `m3`.`id_produk`))) join `karyawan` `m4` on((`m1`.`id_karyawan` = `m4`.`id_karyawan`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id_payment`);

--
-- Indexes for table `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD PRIMARY KEY (`id_pemasukan`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_project`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id_payment` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pemasukan`
--
ALTER TABLE `pemasukan`
  MODIFY `id_pemasukan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id_pengeluaran` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id_project` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
