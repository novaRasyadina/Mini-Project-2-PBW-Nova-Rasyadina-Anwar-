-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 31, 2026 at 04:54 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_nova`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `cat` varchar(100) DEFAULT NULL,
  `title` varchar(150) DEFAULT NULL,
  `deskripsi` text,
  `tags` varchar(200) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `type`, `cat`, `title`, `deskripsi`, `tags`, `img`) VALUES
(1, 'digital', 'Digital Art', 'Character Hanwool Phi', 'karakter dari webtoon Study Group.', 'Digital Art', 'gambar_sketsa_nova1.jpeg'),
(2, 'uiux', 'UI/UX', 'Marketing Web Design', 'Desain UI Web Marketing.', 'Figma', 'webdesign.jpeg'),
(3, 'lukis', 'Lukis & Gambar', 'Fuji Mountain', 'Lukisan gunung fuji bernuansa vintage effect.', 'Painting,Nature', 'lukisan.jpeg'),
(4, 'diy', 'DIY & Craft', 'Paper Basket', 'I made this stationery Basket with unused newspaper.', 'Hand Craft,DIY', 'basket.jpeg'),
(5, 'digital', 'Digital Art', 'Cool Boy', 'I drew this when i remember some of my friend from high school.', 'Digital Art', 'gambar_sketsa_nova2.jpeg'),
(6, 'musik', 'Musik', 'Song Cover on BandLab', 'some of my song cover on BandLab.', 'Song Cover,Music', 'musik.jpeg'),
(7, 'diy', 'DIY & Craft', 'Crochet', 'I made some crochet for me and my grandma on this pict.', 'Crochet,Yarn', 'crochet1.jpeg'),
(8, 'lukis', 'Lukis & Gambar', 'The Lonely Horse', 'Sketsa potret Seekor Kuda Yang Kesepian.', 'Hatching,Sketch', 'sketsakuda.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `hobbies`
--

CREATE TABLE `hobbies` (
  `id` int NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hobbies`
--

INSERT INTO `hobbies` (`id`, `nama`) VALUES
(8, '✏️ Menggambar'),
(9, '🎨 Melukis'),
(10, '✂️ DIY'),
(11, '🎤 Bernyanyi'),
(12, '🎸 Gitar'),
(13, '🎮 Game'),
(14, '🥬 Gardening');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int NOT NULL,
  `label` varchar(100) DEFAULT NULL,
  `val` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `label`, `val`) VALUES
(1, 'Nama', 'Nova Rasyadina Anwar'),
(2, 'Tempat Lahir', 'Balikpapan'),
(3, 'Universitas', 'Universitas Mulawarman Samarinda'),
(4, 'Prodi', 'Sistem Informasi'),
(5, 'Semester', '4 (Aktif)'),
(6, 'Organisasi', 'Inforsa 2024-2025');

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman`
--

CREATE TABLE `pengalaman` (
  `id` int NOT NULL,
  `role` varchar(100) DEFAULT NULL,
  `org` varchar(150) DEFAULT NULL,
  `year` varchar(50) DEFAULT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengalaman`
--

INSERT INTO `pengalaman` (`id`, `role`, `org`, `year`, `deskripsi`) VALUES
(1, 'Anggota Organisasi', 'Inforsa, Unmul', '2024-2025', 'Pernah Aktif sebagai pengurus/anggota, MC & Panitia Kegiatan Proker Bureau EDEN Akseleraasi Karir(AKSA).'),
(2, 'Kepanitiaan Makrab', 'Makrab Sistem Informasi Unmul', '2024', 'Menjadi panitia di bagian keamanan.'),
(3, 'Digital Artist', 'Freelance / Personal', '2024–Sekarang', 'Mengerjakan digital art, open commis character, Undangan Digital.');

-- --------------------------------------------------------

--
-- Table structure for table `sertifikat`
--

CREATE TABLE `sertifikat` (
  `id` int NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `issuer` varchar(200) DEFAULT NULL,
  `year` varchar(20) DEFAULT NULL,
  `deskripsi` text,
  `icon` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sertifikat`
--

INSERT INTO `sertifikat` (`id`, `type`, `title`, `issuer`, `year`, `deskripsi`, `icon`) VALUES
(1, 'UI/UX', 'UI/UX Design Study Club', 'Information System Association', '2024', 'Dasar desain antarmuka, wireframing dan prototyping.', 'bi bi-vector-pen'),
(2, 'Organisasi', 'Sertifikat Kepengurusan Inforsa', 'Inforsa', '2024-2025', 'Dedikasi sebagai pengurus organisasi mahasiswa Inforsa di bidang wirausaha.', 'bi bi-people-fill'),
(3, 'Seni', 'Piagam Penghargaan Murid Berprestasi Dalam Bidang Seni', 'SMPN 11 Balikpapan', '2019', 'Prestasi dalam bidang seni rupa dan musik.', 'bi bi-trophy-fill'),
(4, 'Prestasi', 'Runner Up Cerdas Cermat PKLH Balikpapan', 'Dinas Lingkungan Hidup With Bank Kaltim Event', '2014', 'Partisipasi cerdas cermat mengenai Pendidikan Lingkungan Hidup.', 'bi bi-award-fill');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `val` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `val`) VALUES
(1, 'Digital Art & Ilustrasi', 85),
(2, 'UI/UX Design (Figma)', 80),
(3, 'Seni Lukis & Gambar', 98),
(4, 'HTML & CSS', 50),
(5, 'Vokal & Gitar', 95),
(6, 'Game', 70),
(7, 'Gardening', 90);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `nama`) VALUES
(5, '🎨 Digital Art/artist'),
(6, '🖥️ IT Student'),
(7, '🎵 Music'),
(8, '✂️ DIY');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hobbies`
--
ALTER TABLE `hobbies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sertifikat`
--
ALTER TABLE `sertifikat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hobbies`
--
ALTER TABLE `hobbies`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengalaman`
--
ALTER TABLE `pengalaman`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sertifikat`
--
ALTER TABLE `sertifikat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
