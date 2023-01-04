-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 18, 2021 at 01:24 AM
-- Server version: 10.2.36-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freeware_dkr`
--

-- --------------------------------------------------------

--
-- Table structure for table `gugusdepan`
--

CREATE TABLE `gugusdepan` (
  `id` int(11) NOT NULL,
  `nogudep` varchar(100) NOT NULL,
  `sanggarbakti` varchar(300) NOT NULL,
  `capenpa` int(10) NOT NULL,
  `capenpi` int(10) NOT NULL,
  `penbanpa` int(10) NOT NULL,
  `penbanpi` int(10) NOT NULL,
  `penlakpa` int(10) NOT NULL,
  `penlakpi` int(10) NOT NULL,
  `pengarpa` int(10) NOT NULL,
  `pengarpi` int(10) NOT NULL,
  `capanpa` int(10) NOT NULL,
  `capanpi` int(10) NOT NULL,
  `panpa` int(10) NOT NULL,
  `panpi` int(10) NOT NULL,
  `pangarpa` int(10) NOT NULL,
  `pangarpi` int(10) NOT NULL,
  `jumlahpa` int(20) NOT NULL,
  `jumlahpi` int(20) NOT NULL,
  `tstamp` varchar(30) NOT NULL,
  `kwaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gugusdepan`
--

INSERT INTO `gugusdepan` (`id`, `nogudep`, `sanggarbakti`, `capenpa`, `capenpi`, `penbanpa`, `penbanpi`, `penlakpa`, `penlakpi`, `pengarpa`, `pengarpi`, `capanpa`, `capanpi`, `panpa`, `panpi`, `pangarpa`, `pangarpi`, `jumlahpa`, `jumlahpi`, `tstamp`, `kwaran`) VALUES
(16, '00000000', 'SMAN Klapanunggal', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '15:42:36 15-09-2020', 'Klapanunggal'),
(17, '1', 'a', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, '20:49:54 22-09-2020', 'Leuwiliang'),
(18, '2', 'b', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '13:53:38 21-09-2020', 'Rumpin'),
(20, '1', 'a', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '11:13:17 23-09-2020', 'Tenjo'),
(21, '2', '4', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '12:14:39 23-09-2020', 'Tenjo'),
(23, '00000000', 'SMAN Klapanunggal', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '14:50:53 23-09-2020', 'admin1'),
(24, '1', 'SMAN Klapanunggal', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '14:51:34 23-09-2020', 'Jasinga'),
(25, 'aaa', 'aaa', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '09:39:24 24-09-2020', 'Leuwiliang'),
(26, '1212121', 'ssssssss', 199, 0, 198, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 397, 198, '17:52:51 26-09-2020', 'Leuwiliang'),
(27, 'a', 'a', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '14:41:19 25-09-2020', 'ANANDA PUTRI ISNAINI'),
(28, 'a', 'a', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 227, 0, 0, 0, 227, 0, '17:16:43 29-09-2020', 'Leuwiliang'),
(29, '15.111', 'MAN 3 BOGOR', 2, 0, 3, 0, 4, 0, 5, 0, 0, 0, 0, 0, 0, 0, 14, 3, '03:00:37 11-10-2020', 'Jonggol'),
(30, '21212', 'sman tenjo', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02:34:07 26-10-2020', 'Tenjo'),
(31, '21212', 'sman tenjo', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02:34:40 26-10-2020', 'Tenjo'),
(32, '21212', 'sman tenjo', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02:35:29 26-10-2020', 'Tenjo'),
(33, '15.111', 'MAN 3 BOGOR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '14:07:35 22-11-2020', 'Cariu');

-- --------------------------------------------------------

--
-- Table structure for table `laporan01diklat`
--

CREATE TABLE `laporan01diklat` (
  `id` int(11) NOT NULL,
  `file` varchar(300) NOT NULL,
  `ekstensi` varchar(20) NOT NULL,
  `tstamp` varchar(30) NOT NULL,
  `kwaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan01diklat`
--

INSERT INTO `laporan01diklat` (`id`, `file`, `ekstensi`, `tstamp`, `kwaran`) VALUES
(1, '113-Absen XII MIPA 1.docx', 'docx', '10:43:15 29-10-2020', 'Leuwiliang');

-- --------------------------------------------------------

--
-- Table structure for table `laporan02gp`
--

CREATE TABLE `laporan02gp` (
  `id` int(11) NOT NULL,
  `file` varchar(300) NOT NULL,
  `ekstensi` varchar(20) NOT NULL,
  `tstamp` varchar(30) NOT NULL,
  `kwaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan02gp`
--

INSERT INTO `laporan02gp` (`id`, `file`, `ekstensi`, `tstamp`, `kwaran`) VALUES
(26, '587-a.doc', 'doc', '10:48:41 29-10-2020', 'Leuwiliang'),
(27, '831-Pembahasan Soal INTENSIF 2.0 TPS Dr.Ganesha.pdf', 'pdf', '09:51:04 11-12-2020', 'Ciampea'),
(28, '511-AD ART(1).pdf', 'pdf', '20:55:48 11-12-2020', 'Cibinong');

-- --------------------------------------------------------

--
-- Table structure for table `programkerja`
--

CREATE TABLE `programkerja` (
  `id` int(11) NOT NULL,
  `kegiatan` varchar(500) NOT NULL,
  `bulan1` varchar(50) NOT NULL,
  `bulan2` varchar(50) NOT NULL,
  `bulan3` varchar(50) NOT NULL,
  `bulan4` varchar(50) NOT NULL,
  `bulan5` varchar(50) NOT NULL,
  `bulan6` varchar(50) NOT NULL,
  `bulan7` varchar(50) NOT NULL,
  `bulan8` varchar(50) NOT NULL,
  `bulan9` varchar(50) NOT NULL,
  `bulan10` varchar(50) NOT NULL,
  `bulan11` varchar(50) NOT NULL,
  `bulan12` varchar(50) NOT NULL,
  `bulan_pelaksanaan` varchar(100) NOT NULL,
  `tstamp` varchar(30) NOT NULL,
  `kwaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programkerja`
--

INSERT INTO `programkerja` (`id`, `kegiatan`, `bulan1`, `bulan2`, `bulan3`, `bulan4`, `bulan5`, `bulan6`, `bulan7`, `bulan8`, `bulan9`, `bulan10`, `bulan11`, `bulan12`, `bulan_pelaksanaan`, `tstamp`, `kwaran`) VALUES
(35, 'aa2aaa23456', '', '', '', '', '', 'style=\"background-color:#ffff66\"', '', '', '', '', '', '', 'Maret', '27-08-2020 00:03:38', ''),
(36, 'o;hho  gukgj ugk', '', '', '', 'style=\"background-color:#ffff66\"', '', '', '', '', '', '', '', '', 'April', '12-09-2020 17:39:49', ''),
(37, 'Raimuna Ranting Pramuka', '', '', '', '', '', '', 'style=\"background-color:#ffff66\"', '', '', '', '', '', 'Maret', '21:38:05 13-09-2020', 'Klapanunggal'),
(38, 'Raimuna Ranting Pramuka', '', '', 'style=\"background-color:#ffff66\"', '', '', '', '', '', '', '', '', '', 'Maret', '20:52:16 22-09-2020', 'Leuwiliang'),
(39, 'a', '', 'style=\"background-color:#ffff66\"', '', '', '', '', '', '', '', '', '', '', 'Februari', '15:14:59 23-09-2020', 'Jasinga'),
(40, 'Raimuna Ranting Pramuka', 'style=\"background-color:#ffff66\"', '', '', '', '', '', '', '', '', '', '', '', 'Januari', '15:35:06 24-09-2020', 'Leuwiliang'),
(43, 'a', 'style=\"background-color:#ffff66\"', '', '', '', '', '', '', '', '', '', '', '', 'Januari', '16:16:26 27-09-2020', 'Leuwiliang'),
(44, 'sidparran', '', '', 'style=\"background-color:#ffff66\"', '', '', '', '', '', '', '', '', '', 'Maret', '14:09:47 22-11-2020', 'Cariu'),
(45, 'a', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(46, 'aaaaaaaaaaaaassssssswwwwwww', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(47, 'Raimuna Ranting Pramuka', 'style=\"background-color:#ffff66\"', '', '', '', '', '', '', '', '', '', '', '', 'Januari', '08:52:44 12-12-2020', 'Tenjo');

-- --------------------------------------------------------

--
-- Table structure for table `rencanakerja`
--

CREATE TABLE `rencanakerja` (
  `id` int(11) NOT NULL,
  `kegiatan` varchar(200) NOT NULL,
  `tahun` int(50) NOT NULL,
  `tstamp` varchar(30) NOT NULL,
  `kwaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rencanakerja`
--

INSERT INTO `rencanakerja` (`id`, `kegiatan`, `tahun`, `tstamp`, `kwaran`) VALUES
(6, 'Kegiatan 3', 2022, '15:43:40 15-09-2020', 'Klapanunggal'),
(8, 'Kegiatan 2', 2020, '15:43:25 15-09-2020', 'Klapanunggal'),
(9, 'Kegiatan 1', 2021, '15:43:12 15-09-2020', 'Klapanunggal'),
(10, 'Raimuna Ranting Pramuka', 2020, '07:24:58 23-09-2020', 'Leuwiliang'),
(11, 'Raimuna Ranting Pramukaaa', 2021, '15:57:25 27-09-2020', 'Leuwiliang'),
(13, 'Raimuna Ranting Pramuka', 2020, '14:58:53 23-09-2020', 'Jasinga'),
(14, '', 2021, '15:03:58 23-09-2020', 'Jasinga'),
(15, 'Raimuna Ranting Pramuka', 2022, '15:14:03 23-09-2020', 'Jasinga'),
(20, 'Raimuna Ranting Pramuka', 2022, '16:05:37 27-09-2020', 'Leuwiliang');

-- --------------------------------------------------------

--
-- Table structure for table `skdkr`
--

CREATE TABLE `skdkr` (
  `id` int(11) NOT NULL,
  `file` varchar(200) NOT NULL,
  `ekstensi` varchar(11) NOT NULL,
  `tstamp` varchar(30) NOT NULL,
  `kwaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skdkr`
--

INSERT INTO `skdkr` (`id`, `file`, `ekstensi`, `tstamp`, `kwaran`) VALUES
(1, '529-AD_ART-.pdf', 'pdf', '11:10:41 16-12-2020', 'Klapanunggal'),
(2, '39-Absen Daring B. Sunda.pdf', 'pdf', '14:56:33 23-09-2020', 'Jasinga'),
(3, '112-2.PROPOSAL BANTARA.docx', 'docx', '08:47:00 29-09-2020', 'Leuwiliang');

-- --------------------------------------------------------

--
-- Table structure for table `strukturorganisasi`
--

CREATE TABLE `strukturorganisasi` (
  `id` int(11) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `tstamp` varchar(30) NOT NULL,
  `kwaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `strukturorganisasi`
--

INSERT INTO `strukturorganisasi` (`id`, `gambar`, `tstamp`, `kwaran`) VALUES
(3, '581-free4ware1.png', '14:54:30 23-09-2020', 'Jasinga'),
(4, '168-1594257773.jpg', '16:56:39 29-09-2020', 'Leuwiliang'),
(5, '396-1.jpg', '20:55:26 11-12-2020', 'Cibinong');

-- --------------------------------------------------------

--
-- Table structure for table `userkec`
--

CREATE TABLE `userkec` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userkec`
--

INSERT INTO `userkec` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin1', 'e00cf25ad42683b3df678c61f42c6bda', 'parungpanjang'),
(2, 'klapanunggal', '245e95b2066133c5980b83eb3fa0dfa6', 'klapanunggal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gugusdepan`
--
ALTER TABLE `gugusdepan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan01diklat`
--
ALTER TABLE `laporan01diklat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan02gp`
--
ALTER TABLE `laporan02gp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programkerja`
--
ALTER TABLE `programkerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rencanakerja`
--
ALTER TABLE `rencanakerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skdkr`
--
ALTER TABLE `skdkr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `strukturorganisasi`
--
ALTER TABLE `strukturorganisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userkec`
--
ALTER TABLE `userkec`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gugusdepan`
--
ALTER TABLE `gugusdepan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `laporan01diklat`
--
ALTER TABLE `laporan01diklat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `laporan02gp`
--
ALTER TABLE `laporan02gp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `programkerja`
--
ALTER TABLE `programkerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `rencanakerja`
--
ALTER TABLE `rencanakerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `skdkr`
--
ALTER TABLE `skdkr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `strukturorganisasi`
--
ALTER TABLE `strukturorganisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `userkec`
--
ALTER TABLE `userkec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
