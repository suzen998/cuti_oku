-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2019 at 05:15 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sicuti_oku`
--

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `agama_id` int(11) NOT NULL,
  `agama_nama` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `golongan`
--

CREATE TABLE `golongan` (
  `gol_id` int(11) NOT NULL,
  `gol_nama` varchar(5) NOT NULL,
  `gol_ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `instansi`
--

CREATE TABLE `instansi` (
  `instansi_id` char(20) NOT NULL,
  `instansi_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `jabatan_id` int(11) NOT NULL,
  `sub_jabatan` int(11) NOT NULL,
  `uraian` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_cuti`
--

CREATE TABLE `jenis_cuti` (
  `jenis_cuti_id` int(11) NOT NULL,
  `jcuti_nama` varchar(20) NOT NULL,
  `quota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_cuti`
--

INSERT INTO `jenis_cuti` (`jenis_cuti_id`, `jcuti_nama`, `quota`) VALUES
(0, 'Tahunan', 5);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kawin`
--

CREATE TABLE `jenis_kawin` (
  `jenis_kawin_id` char(1) NOT NULL,
  `jenis_kawin_nama` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `log_id` int(11) NOT NULL,
  `ip_user` varchar(20) NOT NULL,
  `pns_id` char(20) NOT NULL,
  `data_id` int(11) NOT NULL,
  `keterangan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `pns_id` char(20) NOT NULL,
  `nama_pns` varchar(100) NOT NULL,
  `nip_lama` char(18) NOT NULL,
  `nip_baru` char(18) NOT NULL,
  `gelar_dpn` varchar(10) NOT NULL,
  `gelar_blk` varchar(20) NOT NULL,
  `nik` char(16) NOT NULL,
  `gol_id` int(11) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `jenis_kawin_id` char(1) NOT NULL,
  `agama_id` int(11) NOT NULL,
  `no_hp` varchar(16) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jabatan_id` int(11) NOT NULL,
  `jenis_pegawai` varchar(20) NOT NULL,
  `instansi_id` char(10) NOT NULL,
  `unor_id` char(10) NOT NULL,
  `status_pns` varchar(10) NOT NULL,
  `kategori` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pegawaip`
--

CREATE TABLE `pegawaip` (
  `pns_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `notelp` varchar(16) NOT NULL,
  `image` varchar(50) NOT NULL,
  `nip` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawaip`
--

INSERT INTO `pegawaip` (`pns_id`, `name`, `notelp`, `image`, `nip`) VALUES
(1, 'vanesha', '12335', '1234', '1234534'),
(1, 'vanesha', '12335', '1234', '1234534');

-- --------------------------------------------------------

--
-- Table structure for table `trans_cuti`
--

CREATE TABLE `trans_cuti` (
  `trans_id` int(11) NOT NULL,
  `pns_id` char(20) NOT NULL,
  `jcuti_id` int(11) NOT NULL,
  `tgl_ajukan` date NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `alasan_cuti` varchar(200) NOT NULL,
  `catatan` varchar(200) NOT NULL,
  `no_surat` varchar(20) NOT NULL,
  `status_progress` varchar(20) NOT NULL,
  `tgl_verifikasi` date NOT NULL,
  `tgl_disetuju` date NOT NULL,
  `tgl_ditolak` date NOT NULL,
  `data_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `unor`
--

CREATE TABLE `unor` (
  `unor_id` char(10) NOT NULL,
  `unor_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `pns_id` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`agama_id`);

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`gol_id`);

--
-- Indexes for table `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`instansi_id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`jabatan_id`);

--
-- Indexes for table `jenis_cuti`
--
ALTER TABLE `jenis_cuti`
  ADD PRIMARY KEY (`jenis_cuti_id`);

--
-- Indexes for table `jenis_kawin`
--
ALTER TABLE `jenis_kawin`
  ADD PRIMARY KEY (`jenis_kawin_id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `pns_id_fk` (`pns_id`),
  ADD KEY `data_id` (`data_id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`pns_id`),
  ADD KEY `agama_fk` (`agama_id`),
  ADD KEY `instansi_fk` (`instansi_id`),
  ADD KEY `golongan` (`gol_id`),
  ADD KEY `jabatan_fk` (`jabatan_id`),
  ADD KEY `unor_fk` (`unor_id`),
  ADD KEY `jkawin_fk` (`jenis_kawin_id`);

--
-- Indexes for table `trans_cuti`
--
ALTER TABLE `trans_cuti`
  ADD PRIMARY KEY (`trans_id`),
  ADD KEY `pns_trans_fk` (`pns_id`),
  ADD KEY `jcuti_fk` (`jcuti_id`),
  ADD KEY `data_id` (`data_id`);

--
-- Indexes for table `unor`
--
ALTER TABLE `unor`
  ADD PRIMARY KEY (`unor_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `pns_id` (`pns_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `data_fk` FOREIGN KEY (`data_id`) REFERENCES `trans_cuti` (`data_id`),
  ADD CONSTRAINT `pns_id_fk` FOREIGN KEY (`pns_id`) REFERENCES `pegawai` (`pns_id`);

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `agama_fk` FOREIGN KEY (`agama_id`) REFERENCES `agama` (`agama_id`),
  ADD CONSTRAINT `golongan` FOREIGN KEY (`gol_id`) REFERENCES `golongan` (`gol_id`),
  ADD CONSTRAINT `instansi_fk` FOREIGN KEY (`instansi_id`) REFERENCES `instansi` (`instansi_id`),
  ADD CONSTRAINT `jabatan_fk` FOREIGN KEY (`jabatan_id`) REFERENCES `jabatan` (`jabatan_id`),
  ADD CONSTRAINT `jkawin_fk` FOREIGN KEY (`jenis_kawin_id`) REFERENCES `jenis_kawin` (`jenis_kawin_id`),
  ADD CONSTRAINT `unor_fk` FOREIGN KEY (`unor_id`) REFERENCES `unor` (`unor_id`);

--
-- Constraints for table `trans_cuti`
--
ALTER TABLE `trans_cuti`
  ADD CONSTRAINT `jcuti_fk` FOREIGN KEY (`jcuti_id`) REFERENCES `jenis_cuti` (`jenis_cuti_id`),
  ADD CONSTRAINT `pns_trans_fk` FOREIGN KEY (`pns_id`) REFERENCES `pegawai` (`pns_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`pns_id`) REFERENCES `pegawai` (`pns_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
