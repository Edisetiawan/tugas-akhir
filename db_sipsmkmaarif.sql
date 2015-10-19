-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2015 at 05:32 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_sipsmkmaarif`
--
CREATE DATABASE IF NOT EXISTS `db_sipsmkmaarif` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_sipsmkmaarif`;

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `anggota_nis` varchar(12) NOT NULL,
  `anggota_nama` varchar(50) DEFAULT NULL,
  `anggota_images` text,
  `kelas_id` int(11) DEFAULT NULL,
  `jurusan_kode` varchar(20) DEFAULT NULL,
  `anggota_angkatan` int(11) DEFAULT NULL,
  `anggota_jns_kelamin` varchar(40) DEFAULT NULL,
  `anggota_email` varchar(50) DEFAULT NULL,
  `anggota_hp` varchar(30) DEFAULT NULL,
  `anggota_alamat` text,
  `anggota_username` varchar(30) DEFAULT NULL,
  `anggota_password` varchar(32) DEFAULT NULL,
  `anggota_tanggal` datetime DEFAULT NULL,
  PRIMARY KEY (`anggota_nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`anggota_nis`, `anggota_nama`, `anggota_images`, `kelas_id`, `jurusan_kode`, `anggota_angkatan`, `anggota_jns_kelamin`, `anggota_email`, `anggota_hp`, `anggota_alamat`, `anggota_username`, `anggota_password`, `anggota_tanggal`) VALUES
('3123311091', 'Iwan Susanto', 'gfcgf.jpg', 17, 'OTM', 2015, 'Laki-laki', 'iuwan@yahoo.com', '0819988277726', 'Jetis 34 Gunung Kidul', '3123311091', '8279db65a2edc92d44d64c73041ea9b5', '2015-08-21 03:44:00'),
('3123311092', 'Anisa Apprilia Nurjanah', 'Untitled-1.jpg', 17, 'OTM', 2015, 'Laki-laki', 'anisa@yahoo.com', '081992882', 'Gang delima 766 Yogyakarta', '3123311092', '927794cade2fd79cb0563e63a5493a8c', '2015-08-21 03:44:00');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `berita_id` int(11) NOT NULL AUTO_INCREMENT,
  `berita_judul` varchar(50) DEFAULT NULL,
  `berita_images` text,
  `berita_isi` text,
  `berita_tanggal` datetime DEFAULT NULL,
  PRIMARY KEY (`berita_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`berita_id`, `berita_judul`, `berita_images`, `berita_isi`, `berita_tanggal`) VALUES
(16, 'Gadis ABG', 'level_2_proses8.jpg', 'Berita tentang pemerkosaan gadis ABG', '2015-08-19 10:06:00');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `buku_id` int(11) NOT NULL AUTO_INCREMENT,
  `buku_judul` varchar(50) DEFAULT NULL,
  `klasifikasi_id` varchar(11) DEFAULT NULL,
  `buku_foto` text,
  `buku_pengarang` varchar(50) DEFAULT NULL,
  `penerbit_kode` varchar(11) DEFAULT NULL,
  `buku_tahun_terbit` varchar(50) DEFAULT NULL,
  `buku_isbn` varchar(50) DEFAULT NULL,
  `buku_jumlah` int(11) DEFAULT NULL,
  `buku_tgl_update` datetime DEFAULT NULL,
  PRIMARY KEY (`buku_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`buku_id`, `buku_judul`, `klasifikasi_id`, `buku_foto`, `buku_pengarang`, `penerbit_kode`, `buku_tahun_terbit`, `buku_isbn`, `buku_jumlah`, `buku_tgl_update`) VALUES
(14, 'Rekayasa Perangkat Lunak', '600', 'buku-rpl-janner-01.jpg', 'Jinner Simartama', 'P-001', '2015', '123-9928-992', 3, '2015-08-21 02:46:00'),
(15, 'Pengetahuan Popular', '600', '88PENGETAHUAN POPULAR.jpg', 'Suwondo', 'P-001', '2015', '123-939-33', 2, '2015-08-21 02:47:00'),
(16, 'Sejarah Nasional Indonesia', '000', 'buku_tiar.jpg', 'Joko Sutopo', 'P-001', '2015', '23-33-331-', 3, '2015-08-21 02:49:00'),
(54, 'sewewe', '100', 'pai-sma-smk-101.jpg', 'ewewe', 'P-001', '2222', '222', 3, '2015-08-22 00:42:00'),
(55, 'wewe', '400', 'si-juki-depanRESIZE.jpg', '333', 'P-001', '222', '222', 3, '2015-08-22 00:43:00'),
(56, 'wewe', '000', 'a.PNG', 'wewe', 'P-001', '222', '222', 22, '2015-08-22 00:43:00'),
(57, '2222', '200', 'Cover-Buku-Startup.jpg', '222', 'P-001', '22', '22', 3, '2015-08-22 00:44:00'),
(58, 'wqwqw', '500', 'FILSAFAT Ilmu Prof Konrad Kebung.jpg', 'wasd', 'P-002', '2', '22222222222', 2, '2015-08-22 00:44:00'),
(59, 'serwe', '600', 'book-6.png', 'eee', 'P-002', '33', '123-333', 1, '2015-08-22 00:45:00'),
(60, '22', '100', 'buku-hacking-zerohero-01.jpg', '22', 'P-001', '2', '2', 2, '2015-08-22 00:46:00'),
(61, 'www', '500', 'dijamin-mahir-bahasa-inggris-hanya-dalam-15-hari1.jpg', 'ww', 'P-002', '11', '1', 2, '2015-08-22 00:47:00'),
(62, 'fghsrt', '700', 'SISTEM JARINGANKOMPUTER UNTUK PEMULA acc.jpg', 'erter', 'P-002', '232', '33', 3, '2015-08-22 00:48:00'),
(63, 'dfgrdtfrg', '300', 'book-4.jpg', 'dfgd', 'P-001', '23', '323', 2, '2015-08-22 00:48:00'),
(64, 'rytsrt', '400', 'book-3.jpg', 'sftgs', 'P-003', '232', '23423', 2, '2015-08-22 00:49:00'),
(65, 'fgxfg', '800', '20090904215639.jpg', 'drfgtyhdsr', 'P-001', '323', '232', 2, '2015-08-22 00:49:00');

-- --------------------------------------------------------

--
-- Table structure for table `bukutamu`
--

CREATE TABLE IF NOT EXISTS `bukutamu` (
  `bukmu_id` int(11) NOT NULL AUTO_INCREMENT,
  `bukmu_nama` varchar(50) DEFAULT NULL,
  `bukmu_email` varchar(50) DEFAULT NULL,
  `bukmu_pesan` varchar(50) DEFAULT NULL,
  `bukmu_tanggal` datetime DEFAULT NULL,
  PRIMARY KEY (`bukmu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `bukutamu`
--

INSERT INTO `bukutamu` (`bukmu_id`, `bukmu_nama`, `bukmu_email`, `bukmu_pesan`, `bukmu_tanggal`) VALUES
(1, 'Edi Setiawan', 'edi2992@gmail.com', 'Hello Word', '2015-11-11 00:00:00'),
(2, 'Ghufron Edi Wibowo', 'ghufron@yahoo.com', 'Bagus', '2015-11-11 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `buku_detail`
--

CREATE TABLE IF NOT EXISTS `buku_detail` (
  `bukdet_kode` varchar(20) NOT NULL,
  `buku_id` int(11) DEFAULT NULL,
  `bukdet_status` varchar(50) DEFAULT NULL,
  `rak_lokasi` varchar(20) DEFAULT NULL,
  `jatuh_tempo` date DEFAULT NULL,
  PRIMARY KEY (`bukdet_kode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku_detail`
--

INSERT INTO `buku_detail` (`bukdet_kode`, `buku_id`, `bukdet_status`, `rak_lokasi`, `jatuh_tempo`) VALUES
('B00001', 11, 'Tersedia', 'RA1', '0000-00-00'),
('B00002', 11, 'Tersedia', 'RA1', '0000-00-00'),
('B00003', 11, 'Tersedia', 'RA1', '0000-00-00'),
('B00004', 13, 'Tersedia', 'RC2', '0000-00-00'),
('B00005', 13, 'Tersedia', 'RC2', '0000-00-00'),
('B00006', 13, 'Tersedia', 'RC2', '0000-00-00'),
('B00007', 14, 'Tersedia', 'RG3', '0000-00-00'),
('B00008', 14, 'Tersedia', 'RG3', '0000-00-00'),
('B00009', 14, 'Tersedia', 'RG3', '0000-00-00'),
('B00010', 15, 'Tersedia', 'RG3', '0000-00-00'),
('B00011', 15, 'Tersedia', 'RG3', '0000-00-00'),
('B00012', 16, 'Tersedia', 'RA1', '0000-00-00'),
('B00013', 16, 'Tersedia', 'RA1', '0000-00-00'),
('B00014', 16, 'Tersedia', 'RA1', '0000-00-00'),
('B00015', 53, 'Tersedia', 'RG2', '0000-00-00'),
('B00016', 53, 'Tersedia', 'RG2', '0000-00-00'),
('B00017', 53, 'Tersedia', 'RG2', '0000-00-00'),
('B00018', 53, 'Tersedia', 'RG2', '0000-00-00'),
('B00019', 54, 'Tersedia', 'RB2', '0000-00-00'),
('B00020', 54, 'Tersedia', 'RB2', '0000-00-00'),
('B00021', 54, 'Tersedia', 'RB2', '0000-00-00'),
('B00022', 55, 'Tersedia', 'RE1', '0000-00-00'),
('B00023', 55, 'Tersedia', 'RE1', '0000-00-00'),
('B00024', 55, 'Tersedia', 'RE1', '0000-00-00'),
('B00025', 56, 'Tersedia', 'RA2', '0000-00-00'),
('B00026', 56, 'Tersedia', 'RA2', '0000-00-00'),
('B00027', 56, 'Tersedia', 'RA2', '0000-00-00'),
('B00028', 56, 'Tersedia', 'RA2', '0000-00-00'),
('B00029', 56, 'Tersedia', 'RA2', '0000-00-00'),
('B00030', 56, 'Tersedia', 'RA2', '0000-00-00'),
('B00031', 56, 'Tersedia', 'RA2', '0000-00-00'),
('B00032', 56, 'Tersedia', 'RA2', '0000-00-00'),
('B00033', 56, 'Tersedia', 'RA2', '0000-00-00'),
('B00034', 56, 'Tersedia', 'RA2', '0000-00-00'),
('B00035', 56, 'Tersedia', 'RA2', '0000-00-00'),
('B00036', 56, 'Tersedia', 'RA2', '0000-00-00'),
('B00037', 56, 'Tersedia', 'RA2', '0000-00-00'),
('B00038', 56, 'Tersedia', 'RA2', '0000-00-00'),
('B00039', 56, 'Tersedia', 'RA2', '0000-00-00'),
('B00040', 56, 'Tersedia', 'RA2', '0000-00-00'),
('B00041', 56, 'Tersedia', 'RA2', '0000-00-00'),
('B00042', 56, 'Tersedia', 'RA2', '0000-00-00'),
('B00043', 56, 'Tersedia', 'RA2', '0000-00-00'),
('B00044', 56, 'Tersedia', 'RA2', '0000-00-00'),
('B00045', 56, 'Tersedia', 'RA2', '0000-00-00'),
('B00046', 56, 'Tersedia', 'RA2', '0000-00-00'),
('B00047', 57, 'Tersedia', 'RC2', '0000-00-00'),
('B00048', 57, 'Tersedia', 'RC2', '0000-00-00'),
('B00049', 57, 'Tersedia', 'RC2', '0000-00-00'),
('B00050', 58, 'Tersedia', 'RF2', '0000-00-00'),
('B00051', 58, 'Tersedia', 'RF2', '0000-00-00'),
('B00052', 59, 'Tersedia', 'RG1', '0000-00-00'),
('B00053', 60, 'Tersedia', 'RB2', '0000-00-00'),
('B00054', 60, 'Tersedia', 'RB2', '0000-00-00'),
('B00055', 61, 'Tersedia', 'RF3', '0000-00-00'),
('B00056', 61, 'Tersedia', 'RF3', '0000-00-00'),
('B00057', 62, 'Tersedia', 'RH3', '0000-00-00'),
('B00058', 62, 'Tersedia', 'RH3', '0000-00-00'),
('B00059', 62, 'Tersedia', 'RH3', '0000-00-00'),
('B00060', 63, 'Tersedia', 'RD3', '0000-00-00'),
('B00061', 63, 'Tersedia', 'RD3', '0000-00-00'),
('B00062', 64, 'Tersedia', 'RE3', '0000-00-00'),
('B00063', 64, 'Tersedia', 'RE3', '0000-00-00'),
('B00064', 65, 'Tersedia', 'RI2', '0000-00-00'),
('B00065', 65, 'Tersedia', 'RI2', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `jurusan_kode` varchar(20) NOT NULL,
  `jurusan_keterangan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`jurusan_kode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`jurusan_kode`, `jurusan_keterangan`) VALUES
('OTM', 'Otomotif'),
('RPL', 'REKAYASA PERANGKAT LUNAK'),
('TKJ', 'Teknik Komputer dan Jaringan');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `kelas_id` int(11) NOT NULL AUTO_INCREMENT,
  `kelas_nama` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`kelas_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kelas_id`, `kelas_nama`) VALUES
(17, 'XI B');

-- --------------------------------------------------------

--
-- Table structure for table `klasifikasi`
--

CREATE TABLE IF NOT EXISTS `klasifikasi` (
  `klasifikasi_id` varchar(11) NOT NULL,
  `klasifikasi_nama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`klasifikasi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `klasifikasi`
--

INSERT INTO `klasifikasi` (`klasifikasi_id`, `klasifikasi_nama`) VALUES
('000', 'Karya Umum'),
('100', 'Filsafat'),
('200', 'Agama'),
('300', 'Ilmu Sosial'),
('400', 'Bahasa'),
('500', 'Ilmu Pengetahuan Murni'),
('600', 'Ilmu Pengetahuan Terapan/Teknologi'),
('700', 'Seni, Olahraga, Hiburan'),
('800', 'Kesusasteraan'),
('900', 'Biografi Ilmu Bumi, Sejarah');

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

CREATE TABLE IF NOT EXISTS `penerbit` (
  `penerbit_kode` varchar(11) NOT NULL,
  `penerbit_nama` varchar(50) DEFAULT NULL,
  `penerbit_alamat` varchar(50) DEFAULT NULL,
  `penerbit_kota` varchar(20) DEFAULT NULL,
  `penerbit_tlp` varchar(20) DEFAULT NULL,
  `penerbit_email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`penerbit_kode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerbit`
--

INSERT INTO `penerbit` (`penerbit_kode`, `penerbit_nama`, `penerbit_alamat`, `penerbit_kota`, `penerbit_tlp`, `penerbit_email`) VALUES
('P-001', 'Andi Offset', 'Jln Beo Demangan Yogyakarta', 'Yogyakarta', '0267778', 'andiphubliser@andi.com'),
('P-002', 'Erlangga', 'Jl. Kusuma Bandung', 'Bandung', '028399', 'erlangga@yahoo.com'),
('P-003', 'ssssssss', 'sssssssssss', 'sssssssss', '222222222', 'tofan@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
  `petugas_id` int(11) NOT NULL AUTO_INCREMENT,
  `petugas_username` varchar(30) DEFAULT NULL,
  `petugas_password` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`petugas_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`petugas_id`, `petugas_username`, `petugas_password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `pinjam`
--

CREATE TABLE IF NOT EXISTS `pinjam` (
  `pinjam_id` int(11) NOT NULL AUTO_INCREMENT,
  `pinjam_tanggal` date DEFAULT NULL,
  `pinjam_kembali` date DEFAULT NULL,
  `bukdet_kode` varchar(20) DEFAULT NULL,
  `anggota_nis` varchar(12) DEFAULT NULL,
  `petugas_id` int(11) DEFAULT NULL,
  `buku_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`pinjam_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `pinjam`
--

INSERT INTO `pinjam` (`pinjam_id`, `pinjam_tanggal`, `pinjam_kembali`, `bukdet_kode`, `anggota_nis`, `petugas_id`, `buku_id`) VALUES
(11, '2015-08-19', '2015-08-22', 'B00007', '3123311091', 0, 5),
(12, '2015-08-19', '2015-08-22', 'B00005', '3123311091', 0, 5),
(13, '2015-08-19', '2015-08-22', 'B00006', '3123311091', 0, 5),
(14, '2015-08-19', '2015-08-22', 'B00002', '3123311092', 0, 5),
(15, '2015-08-19', '2015-08-22', 'B00001', '3123311092', 0, 0),
(16, '2015-08-19', '2015-08-22', 'B00005', '3123311092', 0, 0),
(17, '2015-08-19', '2015-08-22', 'B00007', '3123311092', 0, 5),
(18, '2015-08-19', '2015-08-22', 'B00005', '3123311091', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rak`
--

CREATE TABLE IF NOT EXISTS `rak` (
  `rak_lokasi` varchar(20) NOT NULL,
  `klasifikasi_id` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`rak_lokasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rak`
--

INSERT INTO `rak` (`rak_lokasi`, `klasifikasi_id`) VALUES
('RA1', '000'),
('RA2', '000'),
('RA3', '000'),
('RA4', '000'),
('RB1', '100'),
('RB2', '100'),
('RB3', '100'),
('RB4', '100'),
('RC1', '200'),
('RC2', '200'),
('RC3', '200'),
('RC4', '200'),
('RD1', '300'),
('RD2', '300'),
('RD3', '300'),
('RD4', '300'),
('RE1', '400'),
('RE2', '400'),
('RE3', '400'),
('RE4', '400'),
('RF1', '500'),
('RF2', '500'),
('RF3', '500'),
('RF4', '500'),
('RG1', '600'),
('RG2', '600'),
('RG3', '600'),
('RG4', '600'),
('RH1', '700'),
('RH2', '700'),
('RH3', '700'),
('RH4', '700'),
('RI1', '800'),
('RI2', '800'),
('RI3', '800'),
('RI4', '800'),
('RJ1', '900'),
('RJ2', '900'),
('RJ3', '900'),
('RJ4', '900');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_pinjam`
--

CREATE TABLE IF NOT EXISTS `tmp_pinjam` (
  `tmp_id` int(11) NOT NULL AUTO_INCREMENT,
  `tmp_session` varchar(100) DEFAULT NULL,
  `bukdet_kode` varchar(20) DEFAULT NULL,
  `buku_id` int(11) DEFAULT NULL,
  `anggota_nis` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`tmp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tmp_pinjam`
--

INSERT INTO `tmp_pinjam` (`tmp_id`, `tmp_session`, `bukdet_kode`, `buku_id`, `anggota_nis`) VALUES
(8, '3fh6agfgoq12k86mk05lg3hs87', 'B00007', 5, '3123311091');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
