-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2020 at 08:42 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magang`
--

-- --------------------------------------------------------

--
-- Table structure for table `iklan`
--

CREATE TABLE `iklan` (
  `id` int(11) NOT NULL,
  `id_perusahaan` int(3) NOT NULL,
  `nama_perusahaan` varchar(30) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deskripsi` varchar(500) NOT NULL,
  `status_pembayaran` enum('Belum Bayar','Terbayar','','') NOT NULL DEFAULT 'Belum Bayar',
  `bukti_pembayaran` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iklan`
--

INSERT INTO `iklan` (`id`, `id_perusahaan`, `nama_perusahaan`, `judul`, `tanggal`, `deskripsi`, `status_pembayaran`, `bukti_pembayaran`) VALUES
(9, 6, 'Gojek', 'Staff Warehouse', '2020-12-13 19:02:31', 'Job Decs :\r\nUsia max 35 tahun.\r\nMenginput data inventory gudang, data produksi  dan segala sesuatu yang berhubungan dengan aktivitas gudang.\r\nMemastikan jumlah barang di gudang sesuai dengan catatan inventory.\r\nMengahandle arus barang masuk dan keluar gudang beserta dengan dokumen administratifnya.\r\nMembantu proses stock opname.\r\nMenjaga keamanan barang – barang di gudang.\r\nMenghandle segala kegiatan adminitratif gudang.\r\nMenghandle penjualan gojek dan grab\r\nDapat mengoperasikan MS. OFFCE ( Word', 'Terbayar', 'bukti_pembayaran.jpg'),
(10, 10, 'Pinnacle Investment', 'Software Developer / Engineers', '2020-12-13 19:08:56', ' Job Description\r\n\r\nAs a software engineering intern, you will learn how to solve various complex exciting problems at large scale and work alongside highly talented and innovative colleagues.. You will work with a small efficient team and can switch team or projects depending on business needs. Our interns are given responsibilities in order for them to excel and showcase their talents from day one. The working environment is challenging and fast paced, but highly rewarding. We need a talented ', 'Belum Bayar', ''),
(11, 9, 'Glovory', 'R&D: Frontend Developer', '2020-12-13 19:05:39', 'Mandatory Requirement Have basic level experience in at least one web development language: Javascript, HTML, CSS. Have a basic understanding of at least one web development framework (Vue, React, Angular, Bootstrap, Tailwind, etc.) Possess strong pixel perfection sense. Required to use your own laptop.\r\n\r\nWilling to be placed in Malang. Task Assignment Re-create a page from this reference: https://glovorymart.webflow.io/ post the result on netlify as a portfolio include git repo on your portfol', 'Terbayar', 'bukti_pembayaran.jpg'),
(12, 7, 'Ruang Scale Up', 'Web Developer', '2020-12-13 19:06:11', 'AYO MENGGILA BERSAMA KAMI! Kamu punya banyak ide tapi nggak tahu harus diapain? Pikiranmu yang out of the box sering dihujat karena terlalu random? Suka Tantangan dan Seru-seruan. Selalu bersemangat, ceria, high energy, have a good vibes. Very good and fast learner. Bersedia penempatan Jogja.\r\n\r\nMungkin di sinilah tempatmu! Kami butuh kawan untuk MENGGILA dengan SERIUS. Gimana sih menggila kok diseriusin? Penasaran kan? Tenang, nanti juga tahu sendiri, yang penting daftar aja dulu!\r\n\r\nKlik web h', 'Terbayar', 'bukti_pembayaran.jpg'),
(13, 7, 'Ruang Scale Up', 'Videographer & Editor', '2020-12-13 19:06:17', 'AYO MENGGILA BERSAMA KAMI!\r\n\r\nKamu punya banyak ide tapi nggak tahu harus diapain? Pikiranmu yang out of the box sering dihujat karena terlalu random?\r\n\r\nMungkin di sinilah tempatmu! Kami butuh kawan untuk MENGGILA dengan SERIUS. Gimana sih menggila kok diseriusin? Penasaran kan? Tenang, nanti juga tahu sendiri, yang penting daftar aja dulu!\r\n\r\nVIDEOGRAPHER & EDITOR REQUIREMENT Bisa mengoperasikan kamera dan drone\r\n\r\nMenguasai Adobe Premiere, AE, dll Pengalaman dibidang kreatif dan youtube manag', 'Terbayar', 'bukti_pembayaran.jpg'),
(14, 7, 'Ruang Scale Up', 'Human Resource', '2020-12-13 19:06:23', 'AYO MENGGILA BERSAMA KAMI!\r\n\r\nKamu punya banyak ide tapi nggak tahu harus diapain? Pikiranmu yang out of the box sering dihujat karena terlalu random?\r\n\r\nMungkin di sinilah tempatmu! Kami butuh kawan untuk MENGGILA dengan SERIUS. Gimana sih menggila kok diseriusin? Penasaran kan? Tenang, nanti juga tahu sendiri, yang penting daftar aja dulu!\r\n\r\nVIDEOGRAPHER & EDITOR REQUIREMENT Bisa mengoperasikan kamera dan drone\r\n\r\nMenguasai Adobe Premiere, AE, dll Pengalaman dibidang kreatif dan youtube manag', 'Terbayar', 'bukti_pembayaran.jpg'),
(15, 9, 'Glovory', 'Intermediate Backend Developer', '2020-12-13 19:09:29', ' Mandatory Requirement Understand the fundamentals of database tools, either relational or NoSQL. Good experience in working with NodeJS and one of the common web frameworks. Basic experience in working with PHP and one of the common web frameworks. Excellent experience in creating APIs using latest technologies (REST, JSON, or gRPC) Have a good sense of error handling and code architecture. Having no problem with multitasking works and is easy to switch between projects. Willing to be located a', 'Terbayar', 'bukti_pembayaran.jpg'),
(16, 9, 'Glovory', 'Quality Assurance', '2020-12-13 19:09:58', '  Mandatory Requirement Possess the ability to operate MS Office applications, Google Docs, Google Spreadsheet, Google Slides, and Google Form. Responsible for unit functionality testing and assurance of highest quality unit release. Able to perform Manual & Automated Test and set up various frameworks on multiple application platforms such as Android, iOS, and Backend APIs Able to create a comprehensive and well-structured test plans and test cases. Able to work with database concepts queries (', 'Terbayar', 'bukti_pembayaran.jpg'),
(18, 6, 'Gojek', 'Engineering Manager', '2020-12-13 19:03:30', 'About the Role\r\n\r\nEngineering manager is the first formal leadership role in Gojek engineering organization. As an engineering manager you will be accountable to lead a team of 5 - 10 engineers. To excel in this role we believe you need to have excellent ability in prioritizing and tactical decision making along with deep technical expertise and eagerness to take a hands-on approach as necessary in delivering values for the customers. Also it’s equally important to be passionate in taking care o', 'Terbayar', 'bukti_pembayaran.jpg'),
(19, 7, 'Ruang Scale Up', 'Mechine Learning', '2020-12-13 19:20:29', ' Mechine Learning - Min 3 Bulan', 'Belum Bayar', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kandidat`
--

CREATE TABLE `kandidat` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kandidat`
--

INSERT INTO `kandidat` (`id`, `nama`, `email`, `alamat`, `deskripsi`) VALUES
(1, 'Rizki', 'rizki@gmail.com', 'kendal', 'web developer'),
(2, 'Berta', 'berta@gmail.com', 'Jogja', 'Fokus pada pengembangan sistem informasi');

-- --------------------------------------------------------

--
-- Table structure for table `lamaran`
--

CREATE TABLE `lamaran` (
  `id` int(11) NOT NULL,
  `id_kandidat` int(11) NOT NULL,
  `id_iklan` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `berkas` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lamaran`
--

INSERT INTO `lamaran` (`id`, `id_kandidat`, `id_iklan`, `nama`, `email`, `berkas`) VALUES
(1, 1, 9, 'Rizki', 'rizki@gmail.com', 'prototype dolan.pdf'),
(3, 1, 13, 'Rizki', 'rizki@gmail.com', 'prototype dolan.pdf'),
(4, 1, 14, 'Rizki', 'rizki@gmail.com', 'prototype dolan.pdf'),
(6, 1, 13, 'Rizki', 'rizki@gmail.com', 'prototype dolan.pdf'),
(7, 2, 13, 'Berta', 'berta@gmail.com', 'RizkiMahfuddinHarahap_124180037_ClassDiagram.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id`, `nama`, `email`, `alamat`, `deskripsi`) VALUES
(6, 'Gojek', 'gojek@gmail.com', 'Jakarta', 'Gojek adalah layanan antar jemput menggunakan ojek'),
(7, 'Ruang Scale Up', 'ruangscaleup@gmail.com', 'Daerah Istimewa Yogyakarta, Indonesia', 'Ruang Scale Up merupakan perusahaan berbasis UMKM yang didirikan di Sleman, Yogyakarta.\r\n\r\nPerusahaa'),
(8, 'Amalan International', 'amalan@gmail.com', 'Daerah Istimewa Yogyakarta, Indonesia', 'amalan is the leading provider of debt management programs for consumers in Indonesia. We help our c'),
(9, 'Glovory', 'glovory@gmail.com', 'Malang, Jawa Timur', 'Digital Product Agency'),
(10, 'Pinnacle Investment', 'pinnacle@gmail.com', 'Jakarta, Jakarta Pusat', 'Pinnacle Investment is the first quantitative based multi-strategy asset manager in Indonesia, we br');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('Perusahaan','Kandidat','Admin','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `role`) VALUES
(1, 'admin@gmail.com', '$2y$10$99OpBriO4B0N8flcGW4uL.YYPbmxhNLjw.aIyzv2IwUPuOWwlySO2', 'Admin'),
(2, 'kepalaPerusahaan@gmail.com', '$2y$10$CBf8etH8dYKpqJn19bN2ZesBC27BoCFta8FYU4eg5LtogleMabZT6', 'Admin'),
(7, 'ruangscaleup@gmail.com', '$2y$10$uNSyjxDEcqgoXYFLUGWDa.5j1Ak4H0aFmXbS8O/D41vKNTV0coyE.', 'Perusahaan'),
(8, 'amalan@gmail.com', '$2y$10$0pWfuLUeHqSrmtxAKzqQ9eR2lPGebEAZLH6EemV9Yy1zeA3EbT9oe', 'Perusahaan'),
(9, 'glovory@gmail.com', '$2y$10$jh2jgXr5a4V.sFipSKGiaedYug46T7iov/RJNWOkI188K.Si.J2Ru', 'Perusahaan'),
(10, 'pinnacle@gmail.com', '$2y$10$4b/jIcuRT.Nyz495uDi6VuJsZag6ueGLSECM4Ns2YgFllsYhHRnnq', 'Perusahaan'),
(16, 'gojek@gmail.com', '$2y$10$OuurTUENbFdnx5ZHHJNYLuMktkAdFTv94XHumscxVK8MrPocgEW/e', 'Perusahaan'),
(17, 'rizki@gmail.com', '$2y$10$zvAkieoBMMmq0xuqYhwlx.iu3/79XX9QxHFtAZDo5TIB6WGTzYQjK', 'Kandidat'),
(24, 'berta@gmail.com', '$2y$10$i.ogPVKYBJ30C6VvtZVHOuaEl7nhRsbC8M25Z8O3wczTH175AvHmy', 'Kandidat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `iklan`
--
ALTER TABLE `iklan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_perusahaan` (`id_perusahaan`);

--
-- Indexes for table `kandidat`
--
ALTER TABLE `kandidat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_user` (`email`);

--
-- Indexes for table `lamaran`
--
ALTER TABLE `lamaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `iklan`
--
ALTER TABLE `iklan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `kandidat`
--
ALTER TABLE `kandidat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lamaran`
--
ALTER TABLE `lamaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `iklan`
--
ALTER TABLE `iklan`
  ADD CONSTRAINT `FK_perusahaan` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
