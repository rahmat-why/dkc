-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 18, 2021 at 01:23 AM
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
-- Database: `freeware_dkc`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(200) NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tstamp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `tanggal`, `bulan`, `judul`, `tstamp`) VALUES
(12, '14', 'Nov', 'Sidang Paripurna Cabang', '12-10-2020 07:13:06'),
(14, '16', 'Oct', 'Jota Joti Cabang 2020', '12-10-2020 07:14:24');

-- --------------------------------------------------------

--
-- Table structure for table `aturan`
--

CREATE TABLE `aturan` (
  `id` int(11) NOT NULL,
  `file` varchar(200) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `ekstensi` varchar(200) NOT NULL,
  `tstamp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aturan`
--

INSERT INTO `aturan` (`id`, `file`, `kategori`, `ekstensi`, `tstamp`) VALUES
(1, '227-AD ART.pdf', 'aturan gerakan pramuka', 'pdf', '30-09-2020 08:30:11'),
(2, '820-Absen XII MIPA 1.pdf', 'ad art', 'pdf', '24-09-2020 08:36:05'),
(3, '520-AD ART (1).pdf', 'juklak', 'pdf', '30-09-2020 08:30:04');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` varchar(10000) NOT NULL,
  `tstamp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `gambar`, `judul`, `isi`, `tstamp`) VALUES
(14, '218-IMG_20201029_002609.jpg', 'DKC Kabupaten Bogor meraih DKC Tergiat I se-Jawa Barat', '<p><strong>Alhamdulillah DKC Kabupaten Bogor meraih Juara 1 dalam penilaian DKC Tergiat tingkat Jawa Barat untuk masa bakti 2015-2020. </strong></p>\r\n\r\n<p><strong>Diumumkan pada Pembukaan Musspanitera XV Daerah Jawa Barat pada hari Sabtu, 05 September 2020 di Bumi Kitri, Bandung, Jawa Barat.</strong></p>\r\n\r\n<p><strong>Kami mengucapkan banyak terimakasih kepada Kakak-Kakak pengurus Kwartir Cabang Kabupaten Bogor karena sudah memberikan bimbingan dan arahannya selama ini. serta kepada seluruh Penegak dan Pandega Kabupaten Bogor yang selalu mensupport kami. Semua ini dipersembahkan untuk kawan-kawan Penegak dan Pandega juga rekan-rekan DKR se-Kabupaten Bogor yang selalu mensupport luar biasa sampai saat ini. Semoga tetap bisa bersinergi bersama kami kedepannya.</strong></p>\r\n\r\n<p><strong>Terimakasih juga rekan-rekan DKC Kabupaten Bogor atas pencapaiannya,tak lepas dari usaha serta proses yang telah sama-sama kita lalui bersama selama 5 tahun.</strong></p>\r\n\r\n<p><strong>Penghargaan ini akan menjadi inspirasi dan motivasi untuk kami, agar lebih meningkatkan kinerja di masa bakti selanjutnya dan terus memberikan yang terbaik. Semangat !</strong></p>\r\n\r\n<p><strong>Jayalah selalu Pramuka Penegak dan Pramuka Pandega Kabupaten Bogor !</strong></p>\r\n\r\n<p><strong>Padjajaran&nbsp;</strong></p>\r\n\r\n<p><strong>Tetap memandu!</strong></p>\r\n\r\n<p><strong>Salam Pramuka</strong></p>\r\n', '29-10-2020 00:47:42'),
(15, '672-IMG_20201029_002621.jpg', 'Musppanitra XV Daerah Jawa Barat Tahun 2020', '<p>Musyawarah Pramuka Penegak dan Pandega Puteri dan Putera (Musppanitera), adalah pertemuan Pramuka Penegak dan Pramuka Pandega untuk menyusun perencanaan pembinaan bagi Pramuka Penegak dan Pramuka Pandega di wilayah kwartir dalam satu masa bakti kwartir/dewan kerja dan akan dijadikan bahan pada musyawarah kwartirnya. Pada kesempatan kali ini Dewan Kerja Cabang Kabupaten Bogor mengikuti rangkaian kegiatan Musppanitra XV Jawa Barat Tahun 2020 yang dilaksanakan pada tanggal 05-06 September 2020 bertempat di Bumi Kitri, Jawa Barat.</p>\r\n\r\n<p>Upacara Pembukaan Musppanitra XV Jawa Barat Tahun 2020 dibuka secara langsung oleh Ketua Kwartir Daerah Jawa Barat Kak Dede Yusuf dan didampingi oleh Ketua Harian Kwartir Daerah Jawa Barat Kak Baim Setiawan.&nbsp;Kegiatan Musppanitra XV Jawa Barat ini memiliki slogan&nbsp;yaitu &quot;Resolusi Menuju Aksi&quot; dan dengan tema Konvergensi Dewan Kerja dalam Mewujudkan Organisasi yang Mandiri, Progresif, dan Berdaya Saing.&nbsp;</p>\r\n', '29-10-2020 00:38:43');

-- --------------------------------------------------------

--
-- Table structure for table `daftarkwaran`
--

CREATE TABLE `daftarkwaran` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `wilayah` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `upassword` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `tstamp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftarkwaran`
--

INSERT INTO `daftarkwaran` (`id`, `nama`, `wilayah`, `username`, `upassword`, `password`, `tstamp`) VALUES
(2, 'Parungpanjang', 'wilayah 1', 'Parungpanjang', 'Parungpanjang', 'ad5bf29f159943da0e8290c9a8ddadee', '1'),
(3, 'Tenjo', 'wilayah 1', 'Tenjo', 'Tenjo', 'bbe121e76cbd0c31408e7da9fd78c81d', '1'),
(4, 'Jasinga', 'wilayah 1', 'Jasinga', 'Jasinga', '764bef40cf1aa2c5a2f0f5e1ac3ef8e7', '1'),
(5, 'Nanggung', 'wilayah 1', 'Nanggung', 'Nanggung', 'd2626301db3dbac9446d78f15252f53e', '1'),
(6, 'Cigudeg', 'wilayah 1', 'Cigudeg', 'Cigudeg', 'd8e04502aa60dbca9190bc5b761b7a82', '1'),
(7, 'Sukajaya', 'wilayah 1', 'Sukajaya', 'Sukajaya', 'f02125ddbf96e71c6f23fb34316ec94e', '1'),
(8, 'Leuwisadeng', 'wilayah 1', 'Leuwisadeng', 'Leuwisadeng', '1305e06bcfc77f4f6d2d2dabbac2f181', '1'),
(9, 'Leuwiliang', 'wilayah 1', 'Leuwiliang', 'Leuwiliang', '7d5b007339e90dcccfdc678102f35d86', '1'),
(10, 'Pamijahan', 'wilayah 2', 'Pamijahan', 'Pamijahan', '8bf37ee59aca572372c3948ec429c3ed', '2'),
(11, 'Cibungbulang', 'wilayah 2', 'Cibungbulang', 'Cibungbulang', 'af3f1e31402f3875d56d0968d46c2d24', '2'),
(12, 'Ciampea', 'wilayah 2', 'Ciampea', 'Ciampea', 'c3fd7bd0c51402bd9a5da85c7641b3f8', '2'),
(13, 'Tenjolaya', 'wilayah 2', 'Tenjolaya', 'Tenjolaya', '6a854bf9f582d08adac76857b3b739e3', '2'),
(14, 'Dramaga', 'wilayah 2', 'Dramaga', 'Dramaga', 'bc45c97aa1f027c8c82c02b42e9d34d7', '2'),
(15, 'Rumpin', 'wilayah 2', 'Rumpin', 'Rumpin', 'ae87f2956cca9d6bd28e25d565e6a2dd', '2'),
(16, 'Ciseeng', 'wilayah 2', 'Ciseeng', 'Ciseeng', '34ba5ba430429f5d2722c4ba9a6b6c16', '2'),
(17, 'Gunung Sindur', 'wilayah 2', 'Gunung Sindur', 'Gunung Sindur', '896b3a6888c40f2ce966035f62393ae6', '2'),
(18, 'Cariu', 'wilayah 3', 'Cariu', 'Cariu', '4d2dd23411f916cb6f1d331bfdba606b', '3'),
(19, 'Tanjungsari', 'wilayah 3', 'Tanjungsari', 'Tanjungsari', '5254b1ba0ad12ef2a34537f7b77d3cb8', '3'),
(20, 'Jonggol', 'wilayah 3', 'Jonggol', 'Jonggol', '85489e606c5c955fc174dedb319548f6', '3'),
(21, 'Cileungsi', 'wilayah 3', 'Cileungsi', 'Cileungsi', '3941a733986ec78ba0751b91a0213ca3', '3'),
(22, 'Sukamakmur', 'wilayah 3', 'Sukamakmur', 'Sukamakmur', '5e01703429300aff11b17523f7c9326b', '3'),
(23, 'Klapanunggal', 'wilayah 3', 'Klapanunggal', 'Klapanunggal', 'f9e459f0fc10cc89b45769bbb5243fb3', '3'),
(24, 'Gunung Putri', 'wilayah 3', 'Gunung Putri', 'Gunung Putri', '02aa655a4c602ddd473c65507b41834f', '3'),
(25, 'Citeureup', 'wilayah 3', 'Citeureup', 'Citeureup', 'b217a929f62a854c08e94a2227e9f69e', '3'),
(26, 'Cibinong', 'wilayah 4', 'Cibinong', 'Cibinong', 'b06bd3ca351c98f56f586e015674da31', '4'),
(27, 'Sukaraja', 'wilayah 4', 'Sukaraja', 'Sukaraja', 'b71a14af437b51deccc3a1624d3e7fd1', '4'),
(28, 'Babakan Madang', 'wilayah 4', 'Babakan Madang', 'Babakan Madang', 'dafb2a220aa631232a99dd3a4534bbf6', '4'),
(29, 'Bojong Gede', 'wilayah 4', 'Bojong Gede', 'Bojong Gede', '6249b719c2f507ebf1c9f5c5890581ba', '4'),
(30, 'Tajurhalang', 'wilayah 4', 'Tajurhalang', 'Tajurhalang', '6987895909b3fa156eaf835cd0464b85', '4'),
(31, 'Kemang', 'wilayah 4', 'Kemang', 'Kemang', '2035ec729aefd9aab4b617f3f0fe8a6d', '4'),
(32, 'Parung', 'wilayah 4', 'Parung', 'Parung', '14d40e90a362213504edae9f83db7606', '4'),
(40, 'Rancabungur', 'wilayah 4', 'Rancabungur', 'Rancabungur', 'ff4aa98fb9342af7cdc2534cec33bd4d', '4'),
(41, 'Ciawi', 'wilayah 5', 'Ciawi', 'Ciawi', '65ea093d4d56ced6241d28bd2213fb6f', '5'),
(42, 'Megamendung', 'wilayah 5', 'Megamendung', 'Megamendung', 'adedec65393906e75903fe1c26de7012', '5'),
(43, 'Cisarua', 'wilayah 5', 'Cisarua', 'Cisarua', '31c880ecc4312c184182b9502a761861', '5'),
(44, 'Caringin', 'wilayah 5', 'Caringin', 'Caringin', 'cae7c5283f7202f7be4f90a2b8ff4195', '5'),
(45, 'Cigombong', 'wilayah 5', 'Cigombong', 'Cigombong', 'b4923b7dd23497765634695dc38bdda5', '5'),
(46, 'Cijeruk', 'wilayah 5', 'Cijeruk', 'Cijeruk', 'fa8364f524310750c581b0f43fcb47f6', '5'),
(47, 'Ciomas', 'wilayah 5', 'Ciomas', 'Ciomas', '023b128df25ef6ba5d764e6e7ee7c282', '5'),
(48, 'Tamansari', 'wilayah 5', 'Tamansari', 'Tamansari', '6d4c265ae8ae09426333a2d01168c3fd', '5');

-- --------------------------------------------------------

--
-- Table structure for table `datapotensi`
--

CREATE TABLE `datapotensi` (
  `id` int(11) NOT NULL,
  `capen` int(20) NOT NULL,
  `penban` int(20) NOT NULL,
  `penlak` int(20) NOT NULL,
  `pengar` int(20) NOT NULL,
  `capan` int(20) NOT NULL,
  `pan` int(20) NOT NULL,
  `pangar` int(20) NOT NULL,
  `tstamp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` int(11) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `tstamp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `gambar`, `nama`, `tstamp`) VALUES
(11, '379-kamar mandi.jpg', 'Kamar Mandi', '22-11-2020 11:16:19'),
(12, '35-teacher_stress.jpg', 'Kantor', '29-09-2020 15:56:56'),
(13, '954-aula.jpg', 'Aula Serbaguna', '22-11-2020 11:15:53');

-- --------------------------------------------------------

--
-- Table structure for table `korwil`
--

CREATE TABLE `korwil` (
  `id` int(11) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `wilayah` varchar(30) NOT NULL,
  `tstamp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `korwil`
--

INSERT INTO `korwil` (`id`, `gambar`, `nama`, `wilayah`, `tstamp`) VALUES
(1, '552-Alfarabi.jpeg', 'Alfarabi Nukliri', 'wilayah 1', '11-10-2020 03:10:09'),
(2, '605-WhatsApp Image 2020-10-28 at 12.32.19.jpeg', 'M. Bayu Adjie', 'wilayah 2', '29-10-2020 01:43:41'),
(3, '833-Naval.jpeg', 'Navalianto Dwi Ramadhan', 'wilayah 3', '11-10-2020 03:04:19'),
(4, '681-Ka Ayu.jpeg', 'Siti Maulidya', 'wilayah 4', '11-10-2020 03:17:47'),
(5, '873-Okky Renaldi.jpeg', 'Okky Renaldi', 'wilayah 5', '29-10-2020 01:43:58');

-- --------------------------------------------------------

--
-- Table structure for table `layer`
--

CREATE TABLE `layer` (
  `id` int(11) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tstamp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layer`
--

INSERT INTO `layer` (`id`, `gambar`, `judul`, `tstamp`) VALUES
(15, '250-DEWAN KERJA CABANG KABUPATEN BOGOR (3).png', '', '29-10-2020 00:24:16'),
(24, '64-DEWAN KERJA CABANG KABUPATEN BOGOR (2).png', '', '29-10-2020 00:24:00'),
(25, '635-DEWAN KERJA CABANG KABUPATEN BOGOR (1).png', '', '29-10-2020 00:23:48'),
(26, '497-DEWAN KERJA CABANG KABUPATEN BOGOR.png', '', '29-10-2020 00:23:30');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(200) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `tstamp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu`, `gambar`, `judul`, `deskripsi`, `tstamp`) VALUES
(1, 'visimisi', '536-1.jpg', 'Judul', 'Deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi', '16-12-2020 11:40:34'),
(2, 'prestasi', '72-1.jpg', 'Judul', 'Deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi', '16-12-2020 11:41:09'),
(3, 'potensitd', '537-1.jpg', 'Judul', 'Deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi', '16-12-2020 11:42:12'),
(4, 'sambutan', '865-1.jpg', 'Judul', 'Deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi', '16-12-2020 11:42:06'),
(5, 'struktur', '849-1.jpg', 'Judul', 'Deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi', '16-12-2020 11:41:58'),
(6, 'programkerja', '313-1.jpg', 'Judul', 'Deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi', '16-12-2020 11:41:53'),
(7, 'korwil', '594-1.jpg', 'Judul', 'Deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi', '16-12-2020 11:41:48'),
(8, 'dkr', '703-1.jpg', 'Judul', 'Deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi', '16-12-2020 11:41:41'),
(9, 'uu', '132-1.jpg', 'Judul', 'Deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi', '16-12-2020 11:41:36'),
(10, 'adart', '969-1.jpg', 'Judul', 'Deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi', '16-12-2020 11:41:30'),
(11, 'juklak', '172-1.jpg', 'Judul', 'Deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi', '16-12-2020 11:41:24'),
(12, 'fasilitas', '456-1.jpg', 'Judul', 'Deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi', '16-12-2020 11:41:17'),
(13, 'hubungikami', '339-1.jpg', 'Judul', 'Deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi', '16-12-2020 11:40:17'),
(14, 'profil', '278-1.jpg', 'Judul', 'Deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi', '16-12-2020 11:40:01');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `email_notelp` varchar(200) NOT NULL,
  `isi` varchar(300) NOT NULL,
  `tstamp` varchar(30) NOT NULL,
  `alamat_ip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `nama_lengkap`, `email_notelp`, `isi`, `tstamp`, `alamat_ip`) VALUES
(3, 'a', 'a', 'a', '31-08-2020 21:33:41', '127.0.0.1'),
(4, 'QWERTYUKLK', '3456776543', 'FYRDRYFJHGHJ', '21-09-2020 14:08:39', '::1'),
(6, '$', '$', '%%', '30-09-2020 18:46:57', '112.215.235.206'),
(7, 'test', 'a', 'a', '01-10-2020 12:27:36', '103.119.230.177'),
(8, 'nupul', 'nupul', 'saya ', '26-10-2020 02:52:24', '180.244.234.111');

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id` int(11) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` varchar(300) NOT NULL,
  `tstamp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id`, `gambar`, `judul`, `isi`, `tstamp`) VALUES
(7, '714-IMG_20201029_002609.jpg', 'DKC Kabupaten Bogor Tergiat 1 se-Jawa Barat', 'DKC Kabupaten Bogor meraih DKC Tergiat 1 se-Jawa Barat pada penilaian DKC Tergiat masa bakti 2015-2020.', '29-10-2020 00:49:45');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tingkatsku` varchar(100) NOT NULL,
  `gugusdepan` varchar(100) NOT NULL,
  `kwartirranting` varchar(100) NOT NULL,
  `namalengkap` varchar(100) NOT NULL,
  `nta` varchar(40) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `youtube` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `kat` varchar(100) NOT NULL,
  `tstamp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `gambar`, `tingkatsku`, `gugusdepan`, `kwartirranting`, `namalengkap`, `nta`, `instagram`, `facebook`, `twitter`, `youtube`, `kategori`, `kat`, `tstamp`) VALUES
(9, '203-KETUA DKC (1).png', 'Pandega Garuda', 'MAN 3 Bogor', 'Jonggol', 'Iwan Taufik Gunawan', '0901.2025.02', 'iuytr', 'a', 'ab', 'abc', 'bph', 'bph', '19-12-2020 20:54:44'),
(10, '495-Ka Anisa.jpeg', 'Penegak Garuda', 'SMAN 1 Tajurhalang', 'Tajurhalang', 'Anisa Rahmania', '0901.2025.02', '2222', '', '', '', 'bph', 'bph', '12-12-2020 11:35:44'),
(11, '551-Aulia Rachmayanti.jpeg', 'Pandega Garuda', 'SMAN 1 Ciomas', 'Ciomas', 'Aulia Rachmayanti, S.Pd', '0901.2025.03', '', '', '', '', 'profil sekretaris 1 bph', 'bph', '22-11-2020 09:48:39'),
(12, '97-Ahmad Ridwan.jpeg', 'Pandega', 'SMKN 1 Cibinong', 'Cibinong', 'Ahmad Ridwan', '0901.2025.04', '', '', '', '', 'profil sekretaris 2 bph', 'bph', '22-11-2020 09:50:10'),
(13, '751-Vera Silviani.jpeg', 'Pandega', 'SMAN 1 Caringin', 'Caringin', 'Vera Silviani', '0901.2025.05', '', '', '', '', 'profil bendahara bph', 'bph', '22-11-2020 09:58:28'),
(15, '356-Naval.jpeg', 'Penegak Garuda', 'SMAN 1 Klapanunggal', 'Klapanunggal', 'Navalianto Dwi Ramadhan', '0901.2025.10', 'a', 'a', 'a', 'a', 'bk', 'bk', '19-12-2020 21:06:08'),
(16, '662-Salinan lOGO TITIK.png', 'Penegak Bantara', 'a', 'aa', 'a', '3232', 'ddda', 'a', 'a', 'a', 'bpp', 'bpp', '19-12-2020 21:07:47'),
(17, '326-B.png', 'Penegak Bantara', 'Gudep', 'baa', 'a', 'aaaaaaaaaaaaaaab', 'ytretrd', 'a', 'a', 'aaa', 'bpe', 'bpe', '19-12-2020 21:08:55'),
(21, '3MFV9M8m-removebg-preview.png', 'Penegak Bantara', '', '', '', '', '', '', '', '', '', '', '30-10-2020 13:34:12'),
(22, '1.jpeg', 'Penegak Bantara', '', 'A', '', '', '', '', '', '', '', '', '30-10-2020 13:35:17'),
(26, '656-Siti Rahayu.jpeg', 'Calon Pandega', 'MA Unwanul Falah Sentul', 'Babakan Madang', 'Siti Rahayu Maulidya', '0901.2025.06', 'osj', 'a', 'a', 'aa', 'bkk', 'bkk', '19-12-2020 21:02:16'),
(28, '66-Dina Raudhatul.jpeg', 'Penegak Garuda', 'SMAN 1 Pamijahan', 'Pamijahan', 'Dina Raudhatul Jannah', '0901.2025.07', '', '', '', '', 'Anggota', 'bkk', '22-11-2020 10:58:14'),
(34, '907-Okky Renaldi.jpeg', 'Pandega', 'SMAN 1 Ciawi', 'Ciawi', 'Okky Renaldi', '0901.2025.09', 'wwwwww', '', '', '', 'bk', 'bk', '12-12-2020 11:37:35'),
(36, '830-Deffa Permana.jpeg', 'Penegak Garuda', 'SMAN 1 Sukaraja', 'Sukaraja', 'Deffa Permana', '0901.2025.08', '', '', '', '', 'Anggota', 'bkk', '22-11-2020 10:59:58'),
(38, '980-656-Siti Rahayu.jpeg', 'Penegak Garuda', 'test', 'test', 'test', 'test', '', '', '', '', 'test', 'bkk', '23-11-2020 20:30:41'),
(39, '18-713-mtkminatt.jpeg', 'Penegak Laksana', 'tes', 'tes', 'tesQQQ', 'tes', '', '', '', '', 'tes', 'bpp', '12-12-2020 11:26:21'),
(40, '82-656-Siti Rahayu.jpeg', 'Calon Pandega', 'tes', 'tes', 'tes', 'tes', '', '', '', '', 'tes', 'bpp', '23-11-2020 20:35:09'),
(41, '246-713-mtkminatt.jpeg', 'Penegak Laksana', 'tes', 'tes', 'tes', 'tes', '000', 'aaaaa', 'a', 'a', 'bk', 'bk', '19-12-2020 21:06:00'),
(42, '575-713-mtkminatt.jpeg', 'Penegak Laksana', 'tes', 'tes', 'tes', 'tes', 'x', 'aa', 'a', 'c', 'bpe', 'bpe', '19-12-2020 21:09:16'),
(43, '955-713-mtkminatt.jpeg', 'Penegak Laksana', 'tes', 'tes', 'tes', 'tes', '', '', '', '', 'tes', 'bpp', '23-11-2020 20:39:03');

-- --------------------------------------------------------

--
-- Table structure for table `programkerja`
--

CREATE TABLE `programkerja` (
  `id` int(11) NOT NULL,
  `kegiatan` varchar(200) NOT NULL,
  `tahun` int(50) NOT NULL,
  `tstamp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programkerja`
--

INSERT INTO `programkerja` (`id`, `kegiatan`, `tahun`, `tstamp`) VALUES
(3, 'Kegiatan ', 2020, '29-09-2020 15:33:19'),
(4, 'Kegiatan 2', 2021, '15-09-2020 15:34:45'),
(5, 'Kegiatan 3', 2022, '15-09-2020 15:34:52'),
(6, 'Kegiatan 4', 2023, '15-09-2020 15:34:58'),
(7, 'Kegiatan 5', 2024, '15-09-2020 15:35:05'),
(9, 'a', 2021, '11-12-2020 14:25:27');

-- --------------------------------------------------------

--
-- Table structure for table `sambutan`
--

CREATE TABLE `sambutan` (
  `id` int(11) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `isi` varchar(300) NOT NULL,
  `nama_ketua` varchar(300) NOT NULL,
  `tstamp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sambutan`
--

INSERT INTO `sambutan` (`id`, `gambar`, `isi`, `nama_ketua`, `tstamp`) VALUES
(1, '620-Ka Iwan.jpeg', '<p><em><strong>Assalamulaikum Warahmatullahi Wabarakatuh</strong></em></p>\r\n\r\n<p><em><strong>Salam Pramuka !</strong></em></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'Iwan Taufik Gunawan', '11-10-2020 02:55:59');

-- --------------------------------------------------------

--
-- Table structure for table `struktur`
--

CREATE TABLE `struktur` (
  `id` int(11) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `tstamp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `struktur`
--

INSERT INTO `struktur` (`id`, `gambar`, `kategori`, `tstamp`) VALUES
(1, '510-youtube.png', 'kwarcab', '29-09-2020 15:33:06'),
(2, '874-Struktur Organisasi Handout SIDPARCAB 2020.png', 'dkc', '29-10-2020 00:52:01');

-- --------------------------------------------------------

--
-- Table structure for table `thn`
--

CREATE TABLE `thn` (
  `id` int(11) NOT NULL,
  `thn1` varchar(20) NOT NULL,
  `thn2` varchar(30) NOT NULL,
  `tstamp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userkec`
--

CREATE TABLE `userkec` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userkec`
--

INSERT INTO `userkec` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin1', 'e00cf25ad42683b3df678c61f42c6bda', 'Navaliyanto'),
(2, 'klapanunggal', '245e95b2066133c5980b83eb3fa0dfa6', 'klapanunggal');

-- --------------------------------------------------------

--
-- Table structure for table `visimisi`
--

CREATE TABLE `visimisi` (
  `id` int(11) NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `isi` varchar(400) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `tstamp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visimisi`
--

INSERT INTO `visimisi` (`id`, `gambar`, `isi`, `kategori`, `tstamp`) VALUES
(9, '', 'Sebagai wadah utama pengembangan bakat dan minat Pramuka Penegak dan Pandega Kwarcab Kabupaten Bogor', 'misi', '22-11-2020 13:03:57'),
(10, '', 'Tercipatanya wadah pengembangan keterampilan dan minat usaha mandiri bagi Pramuka Penegak dan Pandega Kwarcab Kabupaten Bogor', 'misi', '22-11-2020 13:04:56'),
(11, '', 'Sebagai Wadah Pengembangan Kaderisasi Kepemimpinan Pramuka Penegak dan Pandega melalui Program &quot;Panca Sakti Hebat&quot; dalam upaya menjadikan Kabupaten Bogor sebagai Kabupaten termaju Se-Indonesia', 'visi', '22-11-2020 13:02:34'),
(12, '', 'Mempererat jalinan komunikasi dan koordinasi yang merata dan menyeluruh serta berkesinambungan antar Dewan Kerja Ranting di Kabupaten Bogor', 'misi', '22-11-2020 13:06:28'),
(14, '', 'Mewadahi Pelayanan Informasi yang optimal dalam segala aspek bagi Pramuka Penegak dan Pandega Kwarcab Kabupaten Bogor', 'misi', '22-11-2020 13:08:42'),
(15, '', 'Menjalin Komunikasi dan Koordinasi yang baik dengan pengurus Kwartir Cabang, Kwartir Ranting serta perangkat yang lainnya, baik di dalam maupun di luar Gerakan Pramuka', 'misi', '22-11-2020 13:09:59'),
(18, '194-visi.jpg', '', '1VISI1', '16-12-2020 12:43:14'),
(19, '443-misi.jpg', '', '1MISI1', '16-12-2020 12:43:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aturan`
--
ALTER TABLE `aturan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftarkwaran`
--
ALTER TABLE `daftarkwaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datapotensi`
--
ALTER TABLE `datapotensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korwil`
--
ALTER TABLE `korwil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layer`
--
ALTER TABLE `layer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programkerja`
--
ALTER TABLE `programkerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sambutan`
--
ALTER TABLE `sambutan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `struktur`
--
ALTER TABLE `struktur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thn`
--
ALTER TABLE `thn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userkec`
--
ALTER TABLE `userkec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visimisi`
--
ALTER TABLE `visimisi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `aturan`
--
ALTER TABLE `aturan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `daftarkwaran`
--
ALTER TABLE `daftarkwaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `datapotensi`
--
ALTER TABLE `datapotensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `korwil`
--
ALTER TABLE `korwil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `layer`
--
ALTER TABLE `layer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `programkerja`
--
ALTER TABLE `programkerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sambutan`
--
ALTER TABLE `sambutan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `struktur`
--
ALTER TABLE `struktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `thn`
--
ALTER TABLE `thn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userkec`
--
ALTER TABLE `userkec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visimisi`
--
ALTER TABLE `visimisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
