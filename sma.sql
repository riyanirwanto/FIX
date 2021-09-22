-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2021 at 08:47 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sma`
--

-- --------------------------------------------------------

--
-- Table structure for table `apriori`
--

CREATE TABLE `apriori` (
  `id` int(20) NOT NULL,
  `id_buku` int(20) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apriori`
--

INSERT INTO `apriori` (`id`, `id_buku`, `nama`) VALUES
(1, 16605, '1'),
(2, 17532, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` varchar(8) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_hp` char(13) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_agama`
--

CREATE TABLE `tb_agama` (
  `id_agama` int(2) NOT NULL,
  `agama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_agama`
--

INSERT INTO `tb_agama` (`id_agama`, `agama`) VALUES
(1, 'ISLAM'),
(2, 'KRISTEN'),
(3, 'KATOLIK'),
(4, 'HINDU'),
(5, 'BUDHA'),
(6, 'KONGHUCHU');

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `id_anggota` varchar(11) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.png',
  `nama` varchar(100) NOT NULL,
  `id_kelas` int(2) NOT NULL,
  `id_agama` int(2) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `hp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`id_anggota`, `image`, `nama`, `id_kelas`, `id_agama`, `jenis_kelamin`, `hp`, `alamat`, `ket`) VALUES
('ANGG000001', 'default.png', 'Haris', 1, 4, 'L', '88954895849549', 'tegal', 'haris@gmail.com'),
('ANGG000002', 'default.png', 'Aeni Agustin', 1, 1, 'P', '089123456789', 'Tegal', 'aeni@gmail.com'),
('ANGG000003', 'default.png', 'Amelia Urfa', 1, 1, 'P', '123456778986', 'Tegal', 'gg@gmail.com'),
('ANGG000004', 'default.png', 'Dede Agus Wahyudi', 1, 1, 'L', '12399989888', 'Tegal', 'tt@gmail.com'),
('ANGG000005', 'default.png', 'Dwi Ayu Lestari', 7, 1, 'P', '2738277393890', 'Tegal', 'Tegal');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id_buku` char(15) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `id_kategori` int(3) NOT NULL,
  `id_penerbit` int(3) NOT NULL,
  `id_pengarang` int(3) NOT NULL,
  `tersedia` int(11) NOT NULL,
  `dipinjam` int(11) NOT NULL,
  `no_rak` int(2) NOT NULL,
  `thn_terbit` year(4) NOT NULL,
  `stok` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `judul`, `id_kategori`, `id_penerbit`, `id_pengarang`, `tersedia`, `dipinjam`, `no_rak`, `thn_terbit`, `stok`) VALUES
('16605', 'Buku Siswa PENDIDIKAN PANCASILA DAN KEWARGANEGARAAN KELAS X Seri HOTs', 1, 1, 1, 99, 1, 1, 2020, 100),
('16705', 'Buku Siswa Bahasa Inggris 1 Kelas X', 4, 2, 2, 100, 0, 2, 2020, 100),
('16805', 'Buku Siswa MATEMATIKA Kelas X Seri HOTS', 2, 1, 3, 100, 0, 3, 2020, 100),
('16905', 'Buku Siswa SWJARAH INDONESIA Kelas X', 5, 1, 4, 100, 0, 4, 2020, 100),
('17005', 'Menjelajah Dunia BIOLOGI Kelas X', 6, 3, 5, 100, 0, 5, 2020, 100),
('17075', 'Buku Siswa BAHASA INDONESIA Kelas X Seri HOTS', 3, 1, 6, 100, 0, 6, 2019, 100),
('17235', 'SEJARAH Kelas X', 8, 4, 8, 72, 0, 7, 2019, 72),
('17310', 'EKONOMI Kelas X', 9, 5, 9, 90, 0, 8, 2019, 90),
('17400', 'SOSIOLOGI Kelas X', 10, 3, 10, 72, 0, 9, 2019, 72),
('17472', 'MATEMATIKA Peminatan IPA Kelas x', 11, 4, 11, 60, 0, 10, 2019, 60),
('17532', 'Pendidikan Agama Islam dan Budi Pekerti Kelas X', 12, 4, 12, 89, 1, 11, 2019, 90);

-- --------------------------------------------------------

--
-- Table structure for table `tb_denda`
--

CREATE TABLE `tb_denda` (
  `id_denda` int(6) NOT NULL,
  `denda` int(6) NOT NULL,
  `status` enum('A','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_denda`
--

INSERT INTO `tb_denda` (`id_denda`, `denda`, `status`) VALUES
(1, 1000, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_buku`
--

CREATE TABLE `tb_detail_buku` (
  `id_detail_buku` int(11) NOT NULL,
  `id_buku` char(15) NOT NULL,
  `no_buku` int(4) NOT NULL,
  `status` char(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_pinjam`
--

CREATE TABLE `tb_detail_pinjam` (
  `id_detail_pinjam` int(11) NOT NULL,
  `id_pinjam` int(11) NOT NULL,
  `id_buku` char(15) NOT NULL,
  `no_buku` int(4) NOT NULL,
  `flag` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detail_pinjam`
--

INSERT INTO `tb_detail_pinjam` (`id_detail_pinjam`, `id_pinjam`, `id_buku`, `no_buku`, `flag`) VALUES
(1, 1, '16605', 1, 2),
(2, 1, '17532', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(3) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `kategori`) VALUES
(1, 'PPKN'),
(2, 'MATEMATIKA'),
(3, 'BAHASA INDONESI'),
(4, 'BAHASA INGGRIS'),
(5, 'SEJARAH INDONESIA'),
(6, 'BIOLOGI'),
(7, 'FOKUS UN'),
(8, 'SEJARAH'),
(9, 'EKONOMI'),
(10, 'SOSIOLOGI'),
(11, 'MATEMATIKA PEMINATAN IPA'),
(12, 'PAIBP'),
(13, 'KIMIA'),
(14, 'FISIKA'),
(15, 'PJOK'),
(16, 'NOVEL');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(2) NOT NULL,
  `kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `kelas`) VALUES
(1, 'X IPA 1'),
(2, 'X IPA 2'),
(3, 'X IPA 3'),
(4, 'X IPA 4'),
(5, 'X IPS 1'),
(6, 'X IPS 2'),
(7, 'X IPS 3'),
(8, 'XI IPA 1'),
(9, 'XI IPA 2'),
(10, 'XI IPA 3'),
(11, 'XI IPA 4'),
(12, 'XI IPS 1'),
(13, 'XI IPS 2'),
(14, 'XI IPS 3'),
(15, 'XII IPA 1'),
(16, 'XII IPA 2'),
(17, 'XII IPA 3'),
(18, 'XII IPA 4'),
(19, 'XII IPS 1'),
(20, 'XII IPS 2'),
(21, 'XII IPS 3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kembali`
--

CREATE TABLE `tb_kembali` (
  `id_kembali` int(11) NOT NULL,
  `id_pinjam` int(11) NOT NULL,
  `tgl_dikembalikan` date NOT NULL,
  `terlambat` int(2) NOT NULL,
  `id_denda` int(6) NOT NULL,
  `denda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kembali`
--

INSERT INTO `tb_kembali` (`id_kembali`, `id_pinjam`, `tgl_dikembalikan`, `terlambat`, `id_denda`, `denda`) VALUES
(2, 3, '2021-09-17', 0, 1, 0),
(3, 3, '2021-09-17', 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `username` varchar(15) NOT NULL,
  `password` varchar(75) NOT NULL,
  `stts` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_penerbit`
--

CREATE TABLE `tb_penerbit` (
  `id_penerbit` int(3) NOT NULL,
  `nama_penerbit` varchar(50) NOT NULL,
  `id_provinsi` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penerbit`
--

INSERT INTO `tb_penerbit` (`id_penerbit`, `nama_penerbit`, `id_provinsi`) VALUES
(1, 'MEDIATAMA', 3),
(2, 'TIGA SERANGKAI', 3),
(3, 'PLATINUM', 3),
(4, 'ERLANGGA', 3),
(5, 'ESIS', 3),
(6, 'WANGSA JATRA LESTARI', 3),
(7, 'REPUBLIKA', 3),
(8, 'MAHAKA', 3),
(9, 'ASMA NADIA', 3),
(10, 'JATRA GRAPHICS', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengarang`
--

CREATE TABLE `tb_pengarang` (
  `id_pengarang` int(3) NOT NULL,
  `nama_pengarang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengarang`
--

INSERT INTO `tb_pengarang` (`id_pengarang`, `nama_pengarang`) VALUES
(1, 'Istiana Nen Arienti, Nur Fitriyani'),
(2, 'Bambng Sugeng dkk'),
(3, 'Suparmin, Putri Estikarini'),
(4, 'Sri Larasati, Dwi Maryati'),
(5, 'Sri Pujiyanto'),
(6, 'Sarwo Indah Ika W'),
(7, 'Tim Erlangga Fokus SMA'),
(8, 'Ratna Hapsari, M. Adil'),
(9, 'Alam S'),
(10, 'Dwi Mulyono'),
(11, 'Sukino'),
(12, 'H. Muchtar'),
(13, 'Micael Purba, Eti Sarwiyati'),
(14, 'Agung Budi Raharjo'),
(15, 'Budi Purwanto, Muchammad Azam'),
(16, 'Sri Wahyuni'),
(18, 'Tere Liye'),
(19, 'Muchammad Farhani Rosyid'),
(20, 'Dewi Mulyono, Rizal Qosim'),
(21, 'B.K Noormandiri'),
(22, 'Alam, Rudianto'),
(23, 'Sadi, H.M. Nasikin'),
(24, 'Kun Maryati, Juju Suryawati');

-- --------------------------------------------------------

--
-- Table structure for table `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id_petugas` char(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `img` varchar(50) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_agama` int(2) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pinjam`
--

CREATE TABLE `tb_pinjam` (
  `id_pinjam` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `id_anggota` varchar(11) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `total_buku` int(4) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pinjam`
--

INSERT INTO `tb_pinjam` (`id_pinjam`, `tgl_pinjam`, `id_anggota`, `tgl_kembali`, `total_buku`, `status`) VALUES
(1, '2021-09-17', 'ANGG000001', '2021-09-24', 2, 0),
(2, '2021-09-01', 'ANGG000001', '2021-09-08', 1, 1),
(3, '2021-09-01', 'ANGG000001', '2021-09-08', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_provinsi`
--

CREATE TABLE `tb_provinsi` (
  `id_provinsi` int(2) NOT NULL,
  `nama_provinsi` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_provinsi`
--

INSERT INTO `tb_provinsi` (`id_provinsi`, `nama_provinsi`, `kota`) VALUES
(1, 'ACEH', 'BANDA ACEH'),
(2, 'SUMATERA UTARA', 'MEDAN'),
(3, 'JAWA TENGAH', 'SEMARANG'),
(4, 'SUMATERA BARAT', 'PADANG'),
(5, 'RIAU', 'PEKANBARU'),
(6, 'JAMBI', 'JAMBI'),
(7, 'SUMATERA SELATAN', 'PALEMBANG'),
(8, 'BENGKULU', 'BENGKULU'),
(9, 'LAMPUNG', 'BANDAR LAMPUNG'),
(10, 'BANGKA BELITUNG', 'PENGKAL PINANG'),
(11, 'KEPULAUAN RIAU', 'TANJUNG PINANG'),
(12, 'DKI JAKARTA', 'JAKARTA'),
(13, 'JAWA BARAT', 'BANDUNG'),
(14, 'JAWA TIMUR', 'SURABAYA'),
(15, 'D.I. YOGYAKARTA', 'YOGYAKARTA'),
(16, 'BANTEN', 'SERANG'),
(17, 'BALI', 'DENPASAR'),
(18, 'NUSA TENGGARA BARAT', 'MATARAM'),
(19, 'NUSA TENGGARA TIMUR', 'KUPANG'),
(20, 'KALIMANTAN BARAT', 'PONTIANAK'),
(21, 'KALIMANTAN TENGAH', 'PALNGKARAYA'),
(22, 'KALIMANTAN SELATAN', 'BANJARMASIN'),
(23, 'KALIMANTAN TIMUR', 'SAMARINDA'),
(24, 'KALIMANTAN UTARA', 'BULUNGAN'),
(25, 'SULAWESI UTARA', 'MANADO'),
(26, 'SULAWESI TENGAH', 'PALU'),
(27, 'SULAWESI TENGGARA', 'KENDARI'),
(28, 'GORONTALO', 'GORONTALO'),
(29, 'SULAWESI BARAT', 'MAMUJU'),
(30, 'MALIUKU', 'AMBON'),
(31, 'MALUKU UTARA', 'TERNATE'),
(32, 'PAPUA', 'JAYAPURA'),
(33, 'PAPUA BARAT', 'MANOKWARI');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rak`
--

CREATE TABLE `tb_rak` (
  `no_rak` int(2) NOT NULL,
  `nama_rak` varchar(50) NOT NULL,
  `id_kategori` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rak`
--

INSERT INTO `tb_rak` (`no_rak`, `nama_rak`, `id_kategori`) VALUES
(1, '1/PPKN', 1),
(2, '2/B.INGGRIS', 4),
(3, '3/MTK', 2),
(4, '4/SEJARAH INDONESIA', 5),
(5, '5/BIOLOGI', 6),
(6, '6/B.INDONESIA', 3),
(7, '7/SEJARAH', 8),
(8, '8/EKONOMI', 9),
(9, '9/SOSIOLOGI', 10),
(10, '10/MTK PEMINATAN IPA', 11),
(11, '11/PAIBP', 12),
(12, '12/KIMIA', 13),
(13, '13/FISIKA', 14),
(14, '14/PJOK', 15),
(15, '15/NOVEL', 16);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `kode` varchar(12) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `mboh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(100) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `stts` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `stts`) VALUES
(231231, 'admin', 'admin', 'petugas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apriori`
--
ALTER TABLE `apriori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_admin` (`id_admin`,`password`,`nama`,`alamat`,`no_hp`),
  ADD KEY `id_admin_2` (`id_admin`,`password`,`nama`,`alamat`,`no_hp`,`img`);

--
-- Indexes for table `tb_agama`
--
ALTER TABLE `tb_agama`
  ADD PRIMARY KEY (`id_agama`);

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `id_agama` (`id_agama`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_penerbit` (`id_penerbit`),
  ADD KEY `id_pengarang` (`id_pengarang`),
  ADD KEY `no_rak` (`no_rak`),
  ADD KEY `id_buku` (`id_buku`,`judul`,`id_kategori`,`id_penerbit`,`id_pengarang`,`no_rak`,`thn_terbit`,`stok`);

--
-- Indexes for table `tb_denda`
--
ALTER TABLE `tb_denda`
  ADD PRIMARY KEY (`id_denda`);

--
-- Indexes for table `tb_detail_buku`
--
ALTER TABLE `tb_detail_buku`
  ADD KEY `id_detail_buku` (`id_detail_buku`,`id_buku`,`no_buku`,`status`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `tb_detail_pinjam`
--
ALTER TABLE `tb_detail_pinjam`
  ADD PRIMARY KEY (`id_detail_pinjam`),
  ADD KEY `tb_detail_pinjam_ibfk_1` (`id_pinjam`),
  ADD KEY `tb_detail_pinjam_ibfk_2` (`id_buku`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tb_kembali`
--
ALTER TABLE `tb_kembali`
  ADD PRIMARY KEY (`id_kembali`),
  ADD KEY `id_detail` (`id_pinjam`),
  ADD KEY `id_kembali` (`id_kembali`,`id_pinjam`,`tgl_dikembalikan`,`terlambat`,`id_denda`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`username`),
  ADD KEY `username` (`username`,`password`,`stts`);

--
-- Indexes for table `tb_penerbit`
--
ALTER TABLE `tb_penerbit`
  ADD PRIMARY KEY (`id_penerbit`),
  ADD KEY `id_penerbit` (`id_penerbit`,`nama_penerbit`,`id_provinsi`),
  ADD KEY `id_provinsi` (`id_provinsi`);

--
-- Indexes for table `tb_pengarang`
--
ALTER TABLE `tb_pengarang`
  ADD PRIMARY KEY (`id_pengarang`);

--
-- Indexes for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD KEY `id_agama` (`id_agama`);

--
-- Indexes for table `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  ADD PRIMARY KEY (`id_pinjam`),
  ADD KEY `id_detail` (`tgl_kembali`),
  ADD KEY `id_buku` (`id_anggota`),
  ADD KEY `id_pinjam` (`id_pinjam`,`tgl_pinjam`,`id_anggota`,`tgl_kembali`,`total_buku`);

--
-- Indexes for table `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `tb_rak`
--
ALTER TABLE `tb_rak`
  ADD PRIMARY KEY (`no_rak`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apriori`
--
ALTER TABLE `apriori`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_agama`
--
ALTER TABLE `tb_agama`
  MODIFY `id_agama` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_denda`
--
ALTER TABLE `tb_denda`
  MODIFY `id_denda` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_detail_buku`
--
ALTER TABLE `tb_detail_buku`
  MODIFY `id_detail_buku` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_detail_pinjam`
--
ALTER TABLE `tb_detail_pinjam`
  MODIFY `id_detail_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_kembali`
--
ALTER TABLE `tb_kembali`
  MODIFY `id_kembali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_penerbit`
--
ALTER TABLE `tb_penerbit`
  MODIFY `id_penerbit` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_pengarang`
--
ALTER TABLE `tb_pengarang`
  MODIFY `id_pengarang` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  MODIFY `id_provinsi` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_rak`
--
ALTER TABLE `tb_rak`
  MODIFY `no_rak` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231232;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD CONSTRAINT `tb_anggota_ibfk_1` FOREIGN KEY (`id_agama`) REFERENCES `tb_agama` (`id_agama`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_anggota_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD CONSTRAINT `tb_buku_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_buku_ibfk_2` FOREIGN KEY (`id_penerbit`) REFERENCES `tb_penerbit` (`id_penerbit`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_buku_ibfk_3` FOREIGN KEY (`id_pengarang`) REFERENCES `tb_pengarang` (`id_pengarang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_buku_ibfk_4` FOREIGN KEY (`no_rak`) REFERENCES `tb_rak` (`no_rak`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_detail_buku`
--
ALTER TABLE `tb_detail_buku`
  ADD CONSTRAINT `tb_detail_buku_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `tb_buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_detail_pinjam`
--
ALTER TABLE `tb_detail_pinjam`
  ADD CONSTRAINT `tb_detail_pinjam_ibfk_1` FOREIGN KEY (`id_pinjam`) REFERENCES `tb_pinjam` (`id_pinjam`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_detail_pinjam_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `tb_buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_kembali`
--
ALTER TABLE `tb_kembali`
  ADD CONSTRAINT `tb_kembali_ibfk_1` FOREIGN KEY (`id_pinjam`) REFERENCES `tb_pinjam` (`id_pinjam`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_penerbit`
--
ALTER TABLE `tb_penerbit`
  ADD CONSTRAINT `tb_penerbit_ibfk_1` FOREIGN KEY (`id_provinsi`) REFERENCES `tb_provinsi` (`id_provinsi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD CONSTRAINT `tb_petugas_ibfk_1` FOREIGN KEY (`id_agama`) REFERENCES `tb_agama` (`id_agama`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  ADD CONSTRAINT `tb_pinjam_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `tb_anggota` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_rak`
--
ALTER TABLE `tb_rak`
  ADD CONSTRAINT `tb_rak_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
