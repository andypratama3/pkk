-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2019 at 07:31 AM
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
-- Database: `pkk`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `nama_anggota` varchar(200) NOT NULL,
  `jabatan_anggota` varchar(255) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `status` enum('Kawin','Belum_Kawin') NOT NULL,
  `alamat` text NOT NULL,
  `pendidikan` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `id_wilayah` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `status_anggota` enum('aktif','nonaktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nik`, `nama_anggota`, `jabatan_anggota`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `status`, `alamat`, `pendidikan`, `pekerjaan`, `keterangan`, `id_wilayah`, `id_pengguna`, `status_anggota`) VALUES
(1, '330057896557', 'Isa Nanda F', 'Sekretaris', 'P', 'Cilacap', '2018-12-01', 'Kawin', 'Bunton', 'SMA', 'Pelajar', 'oke', 1, 1, 'aktif'),
(2, '33022882929', 'Puput', 'wakil ketua', 'P', 'Cilacap', '2018-12-20', 'Kawin', 'Kesugihan', 'SMA', 'Pelajar', 'okee', 1, 1, 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `detail_keluarga`
--

CREATE TABLE `detail_keluarga` (
  `id_detail_kk` int(11) NOT NULL,
  `no_kk` varchar(30) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `status` enum('Kawin','Belum_Kawin') NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `tempat_lahir` varchar(300) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(30) NOT NULL,
  `pendidikan` varchar(500) NOT NULL,
  `pekerjaan` varchar(500) NOT NULL,
  `kedudukan` varchar(50) NOT NULL,
  `status_keluarga` enum('aktif','nonaktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_keluarga`
--

INSERT INTO `detail_keluarga` (`id_detail_kk`, `no_kk`, `nik`, `nama`, `status`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `pendidikan`, `pekerjaan`, `kedudukan`, `status_keluarga`) VALUES
(4, '321231231', '3123123', 'sdas', 'Kawin', 'L', 'tes', '2019-06-25', 'Islam', 'sdfsdf', 'sdfsdf', 'KepalaKK', 'aktif'),
(5, '321231231', '3123123xcv', 'sdfsdf', 'Kawin', 'L', '23sd', '2019-06-11', 'Islam', 'sdfsdf', '123', 'AnggotaKK', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `nama_event` varchar(300) NOT NULL,
  `tanggal` datetime NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `keterangan` text NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `status_event` enum('aktif','nonaktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `nama_event`, `tanggal`, `tempat`, `foto`, `keterangan`, `id_pengguna`, `status_event`) VALUES
(1, 'Arisan', '2019-03-14 00:00:00', 'gunung simping', 'dfhsjfhnsej', 'Lorem Ipsum Dolor Sit amaet', 0, 'nonaktif'),
(2, 'jajalan', '2019-03-14 00:00:00', 'lebeng', 'nfdjsknfsjk', 'as', 0, 'aktif'),
(3, 'tes', '2019-06-03 14:20:00', 'teszxczxc', '1559547177.jpg', 'tesewqeweqwe', 1, 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `kader`
--

CREATE TABLE `kader` (
  `id_kader` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `jabatan_kader` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `status_kader` enum('aktif','nonaktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kader`
--

INSERT INTO `kader` (`id_kader`, `id_anggota`, `jabatan_kader`, `keterangan`, `id_pengguna`, `status_kader`) VALUES
(3, 1, 'Tes', 'tes', 1, 'aktif'),
(4, 1, 'Teszxczxc', 'tesasdasd', 1, 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_keluarga`
--

CREATE TABLE `kegiatan_keluarga` (
  `id_kegiatan_keluarga` int(11) NOT NULL,
  `id_kegiatan_pkk` int(11) NOT NULL,
  `id_detail_kk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan_keluarga`
--

INSERT INTO `kegiatan_keluarga` (`id_kegiatan_keluarga`, `id_kegiatan_pkk`, `id_detail_kk`) VALUES
(11, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_pkk`
--

CREATE TABLE `kegiatan_pkk` (
  `id_kegiatan_pkk` int(11) NOT NULL,
  `nama_kegiatan` varchar(500) NOT NULL,
  `tempat_kegiatan` varchar(100) NOT NULL,
  `tanggal_kegiatan` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan_pkk`
--

INSERT INTO `kegiatan_pkk` (`id_kegiatan_pkk`, `nama_kegiatan`, `tempat_kegiatan`, `tanggal_kegiatan`, `keterangan`) VALUES
(2, 'Pelatihan Membuat Anak', 'Balai Desa', '2019-06-14', 'Ba\'da Subuh');

-- --------------------------------------------------------

--
-- Table structure for table `keluarga`
--

CREATE TABLE `keluarga` (
  `no_kk` varchar(30) NOT NULL,
  `keterangan` text NOT NULL,
  `id_wilayah` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status_keluarga` enum('aktif','nonaktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keluarga`
--

INSERT INTO `keluarga` (`no_kk`, `keterangan`, `id_wilayah`, `id_pengguna`, `tanggal`, `status_keluarga`) VALUES
('321231231', 'tes', 1, 1, '2019-06-03', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hak_akses` varchar(25) NOT NULL,
  `status_pengguna` enum('aktif','nonaktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `id_anggota`, `username`, `password`, `hak_akses`, `status_pengguna`) VALUES
(1, 2, 'ketua', '$2y$10$g2D5nSI5EHa/93kKYvjXnuBRX2q5jdBw9CTj3KeVopRGOCaGLniCi', 'Ketua', 'aktif'),
(2, 1, 'dasawisma', '$2y$10$0GQxVvspJwHocoUPkrq1Teo9O/WeL9q8h4BHWr5JxctptWRixi/5e', 'Dasawisma', 'aktif'),
(3, 1, 'sekretaris', '$2y$10$RUP7FKSMmc4OQTtOaPhSw.4mIhEkalJimgtNMVtqNyFsb.T6SPsYG', 'Sekretaris_PKK', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE `wilayah` (
  `id_wilayah` int(11) NOT NULL,
  `nama_wilayah` varchar(200) NOT NULL,
  `alamat_wilayah` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wilayah`
--

INSERT INTO `wilayah` (`id_wilayah`, `nama_wilayah`, `alamat_wilayah`) VALUES
(1, 'Dusun Karangsari', 'RT 02 - 05 RW 03 Desa Bunton');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `id_wilayah` (`id_wilayah`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indexes for table `detail_keluarga`
--
ALTER TABLE `detail_keluarga`
  ADD PRIMARY KEY (`id_detail_kk`),
  ADD KEY `no_kk` (`no_kk`),
  ADD KEY `no_kk_2` (`no_kk`),
  ADD KEY `no_kk_3` (`no_kk`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `kader`
--
ALTER TABLE `kader`
  ADD PRIMARY KEY (`id_kader`),
  ADD KEY `id_anggota` (`id_anggota`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indexes for table `kegiatan_keluarga`
--
ALTER TABLE `kegiatan_keluarga`
  ADD PRIMARY KEY (`id_kegiatan_keluarga`),
  ADD KEY `id_kegiatan_pkk` (`id_kegiatan_pkk`),
  ADD KEY `id_detail_kk` (`id_detail_kk`);

--
-- Indexes for table `kegiatan_pkk`
--
ALTER TABLE `kegiatan_pkk`
  ADD PRIMARY KEY (`id_kegiatan_pkk`);

--
-- Indexes for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`no_kk`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- Indexes for table `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`id_wilayah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `detail_keluarga`
--
ALTER TABLE `detail_keluarga`
  MODIFY `id_detail_kk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kader`
--
ALTER TABLE `kader`
  MODIFY `id_kader` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kegiatan_keluarga`
--
ALTER TABLE `kegiatan_keluarga`
  MODIFY `id_kegiatan_keluarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kegiatan_pkk`
--
ALTER TABLE `kegiatan_pkk`
  MODIFY `id_kegiatan_pkk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wilayah`
--
ALTER TABLE `wilayah`
  MODIFY `id_wilayah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggota`
--
ALTER TABLE `anggota`
  ADD CONSTRAINT `anggota_ibfk_1` FOREIGN KEY (`id_wilayah`) REFERENCES `wilayah` (`id_wilayah`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `anggota_ibfk_2` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_keluarga`
--
ALTER TABLE `detail_keluarga`
  ADD CONSTRAINT `detail_keluarga_ibfk_1` FOREIGN KEY (`no_kk`) REFERENCES `keluarga` (`no_kk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kader`
--
ALTER TABLE `kader`
  ADD CONSTRAINT `kader_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kader_ibfk_2` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kegiatan_keluarga`
--
ALTER TABLE `kegiatan_keluarga`
  ADD CONSTRAINT `kegiatan_keluarga_ibfk_1` FOREIGN KEY (`id_kegiatan_pkk`) REFERENCES `kegiatan_pkk` (`id_kegiatan_pkk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kegiatan_keluarga_ibfk_2` FOREIGN KEY (`id_detail_kk`) REFERENCES `detail_keluarga` (`id_detail_kk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
