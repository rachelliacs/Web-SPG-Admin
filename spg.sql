-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2022 at 11:28 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spg`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`username`, `password`) VALUES
('rachelliacs', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id` int(25) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `tgl_upload` date NOT NULL,
  `writer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id`, `title`, `content`, `tgl_upload`, `writer`) VALUES
(3, 'Sejarah SMKN 4 Malang', 'Pada tahun 1938 misi Gereja Katolik dibawah Keuskupan Malang mendirikan Sekolah Teknik Pertama Percetakan (Grafisce School) di Malang yang dipimpin langsung oleh Mrg. Aliers, O.Carm yang bertempat di jalan Frateran No.21 Malang yang sekarang menjadi Jl J.A. Suprapto No. 21 Malang dengan masa studi 2 tahun. Sedangkan yang ditunjuk sebagai Kepala Sekolah pada waktu itu adalah Fr. Cicilianus H.C.A Lommelaars.\r\n\r\nPada tahun 1953 Sekolah Sekolah Teknik Pertama Percetakan ini diganti menjadi Sekolah Kerajinan Negeri (SKN) dengan masa studi 3 tahun yang menerima siswa baru dari lulusan Sekolah Rakyat (SR).\r\n\r\nTahun 1954 Sekolah Kerajinan Negeri (SKN) Malang diganti menjadi Sekolah Teknik Menengah Bagian Percetakan STM Bagian Percetakan dengan masa studi selama 3 tahun. Oleh Keuskupan Malang sebagai Kepala Sekolah pada waktu itu ditunjuk Fr. Nolascus Waijers menggantikan Kepala Sekolah yang lama, bersama dengan itu lokasi sekolah juga pindah ke jalan Bengawan Solo No.38 yang sekarang diganti menjadi Jl. R. Tumenggung Soerjo No. 38 Malang.\r\n\r\nTahun 1957 Sekolah Teknik Menengah Bagian Percetakan diganti lagi menjadi Sekolah Guru Pendidikan Teknik Percetakan (SGPT Percetakan)\r\n\r\nTahun 1959 diganti menjadi Sekolah Menengah Teknik Grafika Malang (SMT Grafika) dan ditunjuk sebagai Kepala Sekolah waktu itu M.Sultany Arief.\r\n\r\nTahun 1996 SMT Grafika berubah nama menjadi Sekolah Menengah Kejuruan Negeri 4 Malang (SMKN 4 Malang),bersama dengan itu lokasi juga pindah dari Jl. R. Tumenggung Soerjo No. 38 Malang ke Jl Tanimbar No. 22 Malang.\r\n\r\nTahun 2002 SMK Negeri 4 Malang membuka bidang keahlian baru yakni Teknologi Informasi (TI).\r\n\r\nTahun 2006 SMK Negeri 4 Malang membuka bidang keahlian baru Animasi.\r\n\r\nTahun 2008 Meraih ISO 9001: 2000 Sistem Manajemen Mutu.', '0000-00-00', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jurusan`
--

CREATE TABLE `tbl_jurusan` (
  `nisn` varchar(12) DEFAULT NULL,
  `id_jurusan` int(1) NOT NULL,
  `namaJurusan` enum('ani','dg','log','mm','mk','ph','pg','rpl','tkj') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mapel`
--

CREATE TABLE `tbl_mapel` (
  `kd_mapel` varchar(4) NOT NULL,
  `namaMapel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mapel`
--

INSERT INTO `tbl_mapel` (`kd_mapel`, `namaMapel`) VALUES
('1', 'pai'),
('2', 'ppkn'),
('3', 'bind'),
('4', 'mtk'),
('5', 'ipa'),
('6', 'ips'),
('7', 'bing');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai`
--

CREATE TABLE `tbl_nilai` (
  `id_nilai` int(25) NOT NULL,
  `kd_mapel` varchar(4) NOT NULL,
  `nisn` varchar(12) NOT NULL,
  `semester1` int(1) NOT NULL,
  `semester2` int(1) NOT NULL,
  `semester3` int(1) NOT NULL,
  `semester4` int(1) NOT NULL,
  `semester5` int(1) NOT NULL,
  `semester6` int(1) NOT NULL,
  `rerataNilai` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `nisn` varchar(12) NOT NULL,
  `npsn` text NOT NULL,
  `nama` text NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  ADD PRIMARY KEY (`id_jurusan`),
  ADD KEY `tbl_jurusan_nisn` (`nisn`);

--
-- Indexes for table `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  ADD PRIMARY KEY (`kd_mapel`);

--
-- Indexes for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `tbl_nilai_nisn` (`nisn`) USING BTREE,
  ADD KEY `tbl_nilai_kd_mapel` (`kd_mapel`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`nisn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  MODIFY `id_nilai` int(25) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  ADD CONSTRAINT `tbl_jurusan_nisn` FOREIGN KEY (`nisn`) REFERENCES `tbl_user` (`nisn`);

--
-- Constraints for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD CONSTRAINT `tbl_nilai_kd_mapel` FOREIGN KEY (`kd_mapel`) REFERENCES `tbl_mapel` (`kd_mapel`),
  ADD CONSTRAINT `tbl_nilai_nisn` FOREIGN KEY (`nisn`) REFERENCES `tbl_user` (`nisn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
