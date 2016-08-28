-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Aug 28, 2016 at 10:59 AM
-- Server version: 5.5.50-cll
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ukdwnetc_krt`
--

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE IF NOT EXISTS `kendaraan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `kritiksaran`
--

CREATE TABLE IF NOT EXISTS `kritiksaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isi` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `kritiksaran`
--

INSERT INTO `kritiksaran` (`id`, `isi`) VALUES
(1, '                        owekjr'),
(2, '                        Tulis kritik dan saran di sini!\r\n                   sfkj;las     '),
(3, '                        Tulis kritik dan saran di sini!\r\n                  ;oawejrf;lkasjf      ');

-- --------------------------------------------------------

--
-- Table structure for table `pinjam_mobil`
--

CREATE TABLE IF NOT EXISTS `pinjam_mobil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_mobil` int(11) NOT NULL,
  `id_sopir` int(11) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_akhir` time NOT NULL,
  `tujuan` varchar(200) NOT NULL,
  `acara` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pinjam_tempat`
--

CREATE TABLE IF NOT EXISTS `pinjam_tempat` (
  `id_pinjam` int(8) NOT NULL AUTO_INCREMENT,
  `id_user` int(8) NOT NULL,
  `id_ruang` int(8) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_akhir` time NOT NULL,
  `status` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `acara` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_pinjam`),
  KEY `id_tmpt` (`id_ruang`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=113 ;

--
-- Dumping data for table `pinjam_tempat`
--

INSERT INTO `pinjam_tempat` (`id_pinjam`, `id_user`, `id_ruang`, `tgl_mulai`, `tgl_akhir`, `jam_mulai`, `jam_akhir`, `status`, `acara`) VALUES
(99, 1, 2, '2013-12-17', '2013-12-28', '00:00:00', '00:00:00', 'accepted', 'rtyr'),
(111, 3, 2, '2014-03-11', '2014-03-17', '04:00:00', '14:00:00', 'accepted', ' makan-makan'),
(110, 0, 1, '2014-03-13', '2014-03-13', '00:00:00', '00:00:00', 'request', ' htfhkfhjfgfj'),
(102, 1, 1, '0000-00-00', '2013-12-25', '01:00:00', '03:00:00', 'accepted', ' tgsdgsdg'),
(103, 1, 1, '0000-00-00', '0000-00-00', '04:00:00', '11:00:00', 'accepted', ' koplo bsyalalalalla'),
(105, 1, 1, '2013-12-17', '2013-12-17', '05:00:00', '13:00:00', 'accepted', ' gfjshsrdfghsdgdsgdsgsd'),
(106, 1, 1, '2013-12-17', '2013-12-17', '01:00:00', '06:00:00', 'accepted', ' uihiojnboijninoinoininhhoiniounoi'),
(112, 3, 1, '2014-03-14', '2014-03-15', '03:00:00', '10:00:00', 'accepted', ' COMFEST');

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE IF NOT EXISTS `ruangan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `fasilitas` varchar(200) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `catatan` varchar(200) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id`, `nama`, `kapasitas`, `fasilitas`, `keterangan`, `catatan`, `gambar`) VALUES
(1, 'atrium didaktos', 150, 'kursi, panggung', 'tempat yang disewakan hanyalah halaman di tengah gedung', 'tidak boleh mengganggu jalannya perkuliahan', 'didaktos_atrium.jpg,didaktos_atrium2.jpg,didaktos_depan.jpg'),
(2, 'koinonia', 500, 'panggung 5 x 8 m, kursi, sound, AC', 'Gedung ini memang sengaja disewakan dengan tarif 1.5 jt /hari', 'pemakaian tidak boleh melebihi pukul 23.00 WIB', 'koinonia_dalam.jpg,koinonia_depan.jpg,koinonia_tangga.jpg'),
(3, 'atrium agape', 200, 'panggung 3 x 4 m, kursi', 'gedung ini berada pada pojok kiri ukdw', 'tidak boleh menggunakan sound dengan suara keras pada saat jam kerja fakultas', 'agape_atrium.jpg,agape_depan.jpg,'),
(4, 'supernova', 50, 'panggung 4 x 3', 'merupakan halaman atau yang bisa disebut ruang hijaunya UKDW', 'acara yang diadakan tidak boleh mengganggu jalannya perkuliahan', 'supernova1.jpg,supernova2.jpg,supernova3.jpg'),
(5, 'seminar harun', 150, 'meja, kursi, panggung 2 x 4m, mic wireless, viewer', 'ruangan yang dirancang khusus untuk acara seminar dengan skala sedang', '_', 'harun_nama.jpg,harun_depan.jpg,harun_dalam.jpg'),
(6, 'seminar tasdik', 100, 'meja, kursi, mic, viewer', 'ruangan yang dirancang khusus untuk acara seminar dengan skala kecil', '_', 'tasdik_nama.jpg,tasdik_depan.jpg,tasdik_dalam.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nick` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nick`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'user', 'user'),
(3, 'HMTI', 'HMTI');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
