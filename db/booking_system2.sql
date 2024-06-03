-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2024 at 02:53 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking_system2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `password`) VALUES
(1, 'Radityo', 'radityo@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan2`
--

CREATE TABLE `pengajuan2` (
  `id` int(11) NOT NULL,
  `kode_peminjaman` varchar(1000) NOT NULL,
  `jenis` varchar(1000) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `nama_acara` varchar(1000) NOT NULL,
  `nrp` varchar(1000) NOT NULL,
  `whatsapp` varchar(1000) NOT NULL,
  `foto_ktp` varchar(1000) NOT NULL,
  `unit_departemen` varchar(1000) NOT NULL,
  `tanggal` date NOT NULL,
  `sesi1` tinyint(1) NOT NULL,
  `sesi2` tinyint(1) NOT NULL,
  `sesi3` tinyint(1) NOT NULL,
  `sesi4` tinyint(1) NOT NULL,
  `sesi5` tinyint(1) NOT NULL,
  `sesi6` tinyint(1) NOT NULL,
  `ruangan` varchar(1000) NOT NULL,
  `surat_skpb` varchar(1000) NOT NULL,
  `surat_sarpras` varchar(1000) NOT NULL,
  `status` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengajuan2`
--

INSERT INTO `pengajuan2` (`id`, `kode_peminjaman`, `jenis`, `nama`, `nama_acara`, `nrp`, `whatsapp`, `foto_ktp`, `unit_departemen`, `tanggal`, `sesi1`, `sesi2`, `sesi3`, `sesi4`, `sesi5`, `sesi6`, `ruangan`, `surat_skpb`, `surat_sarpras`, `status`) VALUES
(15140, '665dba3265369', 'insidentil', 'Lola Remitha', 'LKMM', '5002211678', '08123456789', '665dbb2c1ebca.jpg', 'Unit Layanan Hukum dan Pengelolaan Risiko', '2024-06-03', 1, 1, 0, 0, 0, 0, 'TW1-201', ' ', ' ', 'Menunggu Persetujuan'),
(15141, '665dba3265369', 'insidentil', 'Lola Remitha', 'LKMM', '5002211678', '08123456789', '665dbb2c1ebca.jpg', 'Unit Layanan Hukum dan Pengelolaan Risiko', '2024-06-03', 1, 1, 0, 0, 0, 0, 'TW1-201', ' ', ' ', 'Menunggu Persetujuan'),
(15144, '665dbab6bdb34', 'semester', 'Radityo Ar Rasyid', 'Sistem Basis Data', '5002211789', '08112345678', '21977.jpg', 'MATEMATIKA', '2024-06-03', 0, 0, 1, 0, 0, 0, 'TW1-203', ' ', ' ', 'Menunggu Persetujuan'),
(15145, '665dbab6bdb34', 'semester', 'Radityo Ar Rasyid', 'Sistem Basis Data', '5002211789', '08112345678', '21977.jpg', 'MATEMATIKA', '2024-06-10', 0, 0, 1, 0, 0, 0, 'TW1-203', ' ', ' ', 'Menunggu Persetujuan'),
(15146, '665dbab6bdb34', 'semester', 'Radityo Ar Rasyid', 'Sistem Basis Data', '5002211789', '08112345678', '21977.jpg', 'MATEMATIKA', '2024-06-17', 0, 0, 1, 0, 0, 0, 'TW1-203', ' ', ' ', 'Menunggu Persetujuan'),
(15147, '665dbab6bdb34', 'semester', 'Radityo Ar Rasyid', 'Sistem Basis Data', '5002211789', '08112345678', '21977.jpg', 'MATEMATIKA', '2024-06-24', 0, 0, 1, 0, 0, 0, 'TW1-203', ' ', ' ', 'Menunggu Persetujuan'),
(15148, '665dbab6bdb34', 'semester', 'Radityo Ar Rasyid', 'Sistem Basis Data', '5002211789', '08112345678', '21977.jpg', 'MATEMATIKA', '2024-07-01', 0, 0, 1, 0, 0, 0, 'TW1-203', ' ', ' ', 'Menunggu Persetujuan'),
(15149, '665dbab6bdb34', 'semester', 'Radityo Ar Rasyid', 'Sistem Basis Data', '5002211789', '08112345678', '21977.jpg', 'MATEMATIKA', '2024-07-08', 0, 0, 1, 0, 0, 0, 'TW1-203', ' ', ' ', 'Menunggu Persetujuan'),
(15150, '665dbab6bdb34', 'semester', 'Radityo Ar Rasyid', 'Sistem Basis Data', '5002211789', '08112345678', '21977.jpg', 'MATEMATIKA', '2024-07-15', 0, 0, 1, 0, 0, 0, 'TW1-203', ' ', ' ', 'Menunggu Persetujuan'),
(15151, '665dbab6bdb34', 'semester', 'Radityo Ar Rasyid', 'Sistem Basis Data', '5002211789', '08112345678', '21977.jpg', 'MATEMATIKA', '2024-07-22', 0, 0, 1, 0, 0, 0, 'TW1-203', ' ', ' ', 'Menunggu Persetujuan'),
(15152, '665dbab6bdb34', 'semester', 'Radityo Ar Rasyid', 'Sistem Basis Data', '5002211789', '08112345678', '21977.jpg', 'MATEMATIKA', '2024-07-29', 0, 0, 1, 0, 0, 0, 'TW1-203', ' ', ' ', 'Menunggu Persetujuan'),
(15153, '665dbab6bdb34', 'semester', 'Radityo Ar Rasyid', 'Sistem Basis Data', '5002211789', '08112345678', '21977.jpg', 'MATEMATIKA', '2024-08-05', 0, 0, 1, 0, 0, 0, 'TW1-203', ' ', ' ', 'Menunggu Persetujuan'),
(15154, '665dbab6bdb34', 'semester', 'Radityo Ar Rasyid', 'Sistem Basis Data', '5002211789', '08112345678', '21977.jpg', 'MATEMATIKA', '2024-08-12', 0, 0, 1, 0, 0, 0, 'TW1-203', ' ', ' ', 'Menunggu Persetujuan'),
(15155, '665dbab6bdb34', 'semester', 'Radityo Ar Rasyid', 'Sistem Basis Data', '5002211789', '08112345678', '21977.jpg', 'MATEMATIKA', '2024-08-19', 0, 0, 1, 0, 0, 0, 'TW1-203', ' ', ' ', 'Menunggu Persetujuan'),
(15156, '665dbab6bdb34', 'semester', 'Radityo Ar Rasyid', 'Sistem Basis Data', '5002211789', '08112345678', '21977.jpg', 'MATEMATIKA', '2024-08-26', 0, 0, 1, 0, 0, 0, 'TW1-203', ' ', ' ', 'Menunggu Persetujuan'),
(15157, '665dbab6bdb34', 'semester', 'Radityo Ar Rasyid', 'Sistem Basis Data', '5002211789', '08112345678', '21977.jpg', 'MATEMATIKA', '2024-09-02', 0, 0, 1, 0, 0, 0, 'TW1-203', ' ', ' ', 'Menunggu Persetujuan'),
(15158, '665dbab6bdb34', 'semester', 'Radityo Ar Rasyid', 'Sistem Basis Data', '5002211789', '08112345678', '21977.jpg', 'MATEMATIKA', '2024-09-09', 0, 0, 1, 0, 0, 0, 'TW1-203', ' ', ' ', 'Menunggu Persetujuan'),
(15159, '665dbab6bdb34', 'semester', 'Radityo Ar Rasyid', 'Sistem Basis Data', '5002211789', '08112345678', '21977.jpg', 'MATEMATIKA', '2024-09-16', 0, 0, 1, 0, 0, 0, 'TW1-203', ' ', ' ', 'Menunggu Persetujuan');

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `id` int(11) NOT NULL,
  `nama_ruangan` varchar(50) NOT NULL,
  `kapasitas` int(100) NOT NULL,
  `lantai` int(100) NOT NULL,
  `gedung` mediumtext NOT NULL,
  `status_ruangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id`, `nama_ruangan`, `kapasitas`, `lantai`, `gedung`, `status_ruangan`) VALUES
(57, 'TW1-201', 80, 2, 'Tower 1', 'Bisa Dipinjam'),
(58, 'TW1-202', 80, 2, 'Tower 1', 'Bisa Dipinjam'),
(59, 'TW1-203', 80, 2, 'Tower 1', 'Bisa Dipinjam'),
(60, 'TW1-204', 36, 2, 'Tower 1', 'Bisa Dipinjam'),
(61, 'TW1-205', 80, 2, 'Tower 1', 'Bisa Dipinjam'),
(62, 'TW1-206', 80, 2, 'Tower 1', 'Bisa Dipinjam'),
(63, 'TW1-301', 80, 3, 'Tower 1', 'Bisa Dipinjam'),
(64, 'TW1-302', 80, 3, 'Tower 1', 'Bisa Dipinjam'),
(65, 'TW1-303', 80, 3, 'Tower 1', 'Bisa Dipinjam'),
(66, 'TW1-304', 36, 3, 'Tower 1', 'Bisa Dipinjam'),
(67, 'TW1-305', 80, 3, 'Tower 1', 'Bisa Dipinjam'),
(68, 'TW1-306', 80, 3, 'Tower 1', 'Bisa Dipinjam'),
(69, 'TW1-501', 80, 5, 'Tower 1', 'Bisa Dipinjam'),
(70, 'TW1-502', 80, 5, 'Tower 1', 'Bisa Dipinjam'),
(71, 'TW1-503', 80, 5, 'Tower 1', 'Bisa Dipinjam'),
(72, 'TW1-504', 36, 5, 'Tower 1', 'Bisa Dipinjam'),
(73, 'TW1-505', 80, 5, 'Tower 1', 'Bisa Dipinjam'),
(74, 'TW1-506', 40, 5, 'Tower 1', 'Bisa Dipinjam'),
(75, 'TW1-601', 80, 6, 'Tower 1', 'Bisa Dipinjam'),
(76, 'TW1-602', 80, 6, 'Tower 1', 'Bisa Dipinjam'),
(77, 'TW1-603', 80, 6, 'Tower 1', 'Bisa Dipinjam'),
(78, 'TW1-604', 36, 6, 'Tower 1', 'Bisa Dipinjam'),
(79, 'TW1-605', 80, 6, 'Tower 1', 'Bisa Dipinjam'),
(80, 'TW1-606', 40, 6, 'Tower 1', 'Bisa Dipinjam'),
(81, 'TW1-701', 80, 7, 'Tower 1', 'Bisa Dipinjam'),
(82, 'TW1-702', 80, 7, 'Tower 1', 'Bisa Dipinjam'),
(83, 'TW1-703', 80, 7, 'Tower 1', 'Bisa Dipinjam'),
(84, 'TW1-704', 36, 7, 'Tower 1', 'Bisa Dipinjam'),
(85, 'TW1-705', 80, 7, 'Tower 1', 'Bisa Dipinjam'),
(86, 'TW1-706', 80, 7, 'Tower 1', 'Bisa Dipinjam'),
(87, 'TW1-801', 80, 8, 'Tower 1', 'Bisa Dipinjam'),
(88, 'TW1-802', 80, 8, 'Tower 1', 'Bisa Dipinjam'),
(89, 'TW1-803', 80, 8, 'Tower 1', 'Bisa Dipinjam'),
(90, 'TW1-804', 36, 8, 'Tower 1', 'Bisa Dipinjam'),
(91, 'TW1-805', 80, 8, 'Tower 1', 'Bisa Dipinjam'),
(92, 'TW1-806', 40, 8, 'Tower 1', 'Bisa Dipinjam'),
(93, 'TW2-401', 20, 4, 'Tower 2', 'Bisa Dipinjam'),
(94, 'TW2-402', 40, 4, 'Tower 2', 'Bisa Dipinjam'),
(95, 'TW2-403', 40, 4, 'Tower 2', 'Bisa Dipinjam'),
(96, 'TW2-404', 40, 4, 'Tower 2', 'Bisa Dipinjam'),
(97, 'TW2-405', 40, 4, 'Tower 2', 'Bisa Dipinjam'),
(98, 'TEATER A', 148, 1, 'Teater', 'Bisa Dipinjam'),
(99, 'TEATER B', 150, 1, 'Teater', 'Bisa Dipinjam'),
(100, 'TEATER C', 150, 1, 'Teater', 'Bisa Dipinjam'),
(103, 'IT 604', 50, 6, 'Perpustakaan', 'Bisa Dipinjam'),
(104, 'IT 605', 40, 6, 'Perpustakaan', 'Bisa Dipinjam'),
(105, 'IT 606', 35, 6, 'Perpustakaan', 'Bisa Dipinjam');

-- --------------------------------------------------------

--
-- Table structure for table `unit_departemen`
--

CREATE TABLE `unit_departemen` (
  `id` int(255) NOT NULL,
  `nama_unit` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `unit_departemen`
--

INSERT INTO `unit_departemen` (`id`, `nama_unit`) VALUES
(2, 'Biro Keuangan'),
(3, 'Biro Sarana dan Prasarana'),
(4, 'Direktorat Sumber Daya Manusia dan Organisasi'),
(5, 'Biro Umum dan Reformasi Birokrasi'),
(6, 'Direktorat Kemahasiswaan'),
(7, 'Direktorat Inovasi dan Kawasan Sains Teknologi'),
(8, 'Unit Kerjasama Internasional'),
(9, 'Unit Promosi dan Mobilitas Internasional'),
(10, 'Direktorat Kerjasama dan Pengelolaan Usaha'),
(11, 'Direktorat Pascasarjana dan Pengembangan Akademik'),
(12, 'Direktorat Pengembangan Teknologi dan Sistem Informasi'),
(13, 'Direktorat Riset dan Pengabdian kepada Masyarakat'),
(14, 'Perpustakaan'),
(15, 'Sekretaris Institut\"'),
(16, 'Unit Komunikasi Publik'),
(17, 'Unit Layanan Hukum dan Pengelolaan Risiko'),
(18, 'Unit Pusat Bahasa Global'),
(19, 'FISIKA'),
(20, 'MATEMATIKA'),
(21, 'STATISTIKA'),
(22, 'KIMIA'),
(23, 'BIOLOGI'),
(24, 'SAINS AKTUARIA'),
(25, 'SAINS ANALITIK'),
(26, 'T MESIN'),
(27, 'T KIMIA'),
(28, 'T FISIKA'),
(29, 'T INDUSTRI'),
(30, 'T MATERIAL'),
(31, 'T PANGAN'),
(32, 'T SIPIL'),
(33, 'ARSITEKTUR'),
(34, 'T LINGKUNGAN'),
(35, 'PWK\"'),
(36, 'T GEOMATIΚΑ'),
(37, 'T GEOFISIKA'),
(38, 'T PERKAPALAN'),
(39, 'T SISTEM PERKAPALAN'),
(40, 'T KELAUTAN'),
(41, 'T TRANSPORTASI LAUT'),
(42, 'T LEPAS PANΤΑΙ'),
(43, 'T ELEKTRO'),
(44, 'T BIOMEDIK'),
(45, 'T KOMPUTER'),
(46, 'T INFORMATIKΑ'),
(47, 'SISTEM INFORMASI'),
(48, 'TEKNOLOGI INFORMASI'),
(49, 'T TELEKOMUNIKASI'),
(50, 'TEKNOLOGI KEDOKTERAN'),
(51, 'DESAIN PRODUK'),
(52, 'DESAIN INTERIOR'),
(53, 'DESAIN KOMUNIKASI VISUAL'),
(54, 'MANAJEMEN BISNIS'),
(55, 'STUDI PEMBANGUNAN'),
(56, 'Organisasi Mahasiswa'),
(57, 'Other'),
(60, 'Computer Science');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengajuan2`
--
ALTER TABLE `pengajuan2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_ruangan` (`nama_ruangan`);

--
-- Indexes for table `unit_departemen`
--
ALTER TABLE `unit_departemen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengajuan2`
--
ALTER TABLE `pengajuan2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15160;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `unit_departemen`
--
ALTER TABLE `unit_departemen`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
