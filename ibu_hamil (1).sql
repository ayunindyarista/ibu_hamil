-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2021 at 07:46 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ibu_hamil`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `ID_DOKTER` varchar(8) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `ALAMAT` varchar(100) NOT NULL,
  `NO_TELP` varchar(12) NOT NULL,
  `NIK` varchar(16) NOT NULL,
  `KOTA` varchar(20) NOT NULL,
  `INSTANSI_ASAL` varchar(20) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `PASSWORD` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`ID_DOKTER`, `NAMA`, `ALAMAT`, `NO_TELP`, `NIK`, `KOTA`, `INSTANSI_ASAL`, `EMAIL`, `PASSWORD`) VALUES
('DOK01', 'dr Lusiana', 'Perumahan Gunung Sari Indah Blok AC 19', '087543123456', '3578015404990002', 'Surabaya', 'RSAL', 'lusiana@gmail.com', 'lusiana123'),
('DOK02', 'dr ramelan', 'JL Rajawali no 29', '087562314598', '3578015404990011', 'Jakarta', 'RSI', 'ramelan@gmail.com', 'ramelan123');

--
-- Triggers `dokter`
--
DELIMITER $$
CREATE TRIGGER `id_dokter` BEFORE INSERT ON `dokter` FOR EACH ROW BEGIN 
	INSERT INTO tsequancedokter VALUES ("");
	SELECT MAX(id_dokter) INTO @ID
	FROM tsequancedokter;
	SET new.ID_DOKTER=CONCAT('DOK',LPAD(@ID,2,'0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `evaluasi`
--

CREATE TABLE `evaluasi` (
  `ID_EVALUASI` int(11) NOT NULL,
  `ID_PEMERIKSAAN` int(11) NOT NULL,
  `ID_DOKTER` varchar(8) NOT NULL,
  `TGL_EVALUASI` datetime NOT NULL,
  `RESPON_MEDIS` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_01_06_085341_create_dokter_table', 0),
(2, '2021_01_06_085341_create_evaluasi_table', 0),
(3, '2021_01_06_085341_create_pasien_table', 0),
(4, '2021_01_06_085341_create_pemeriksaan_table', 0),
(5, '2021_01_06_085341_create_relawan_table', 0),
(6, '2021_01_06_085342_add_foreign_keys_to_evaluasi_table', 0),
(7, '2021_01_06_085342_add_foreign_keys_to_pemeriksaan_table', 0),
(8, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 2),
(12, '2019_08_19_000000_create_failed_jobs_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `ID_PASIEN` varchar(8) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `ALAMAT` varchar(100) NOT NULL,
  `NO_TELP` varchar(12) NOT NULL,
  `TGL_LAHIR` date NOT NULL,
  `KOTA` varchar(20) NOT NULL,
  `HISTORI_KESEHATAN` varchar(300) NOT NULL,
  `NIK` varchar(16) NOT NULL,
  `NO_KK` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`ID_PASIEN`, `NAMA`, `ALAMAT`, `NO_TELP`, `TGL_LAHIR`, `KOTA`, `HISTORI_KESEHATAN`, `NIK`, `NO_KK`) VALUES
('PSN00001', 'Ria Lestari', 'JL Pahlawan Timur No 120', '081495872654', '1990-04-24', 'Bandung', 'Bagus', '3578015404990212', '3578010101083079');

--
-- Triggers `pasien`
--
DELIMITER $$
CREATE TRIGGER `id_pasien` BEFORE INSERT ON `pasien` FOR EACH ROW BEGIN 
	INSERT INTO tsequancepasien VALUES ("");
	SELECT MAX(id_pasien) INTO @ID
	FROM tsequancepasien;
	SET new.ID_PASIEN=CONCAT('PSN',LPAD(@ID,5,'0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaan`
--

CREATE TABLE `pemeriksaan` (
  `ID_PEMERIKSAAN` int(11) NOT NULL,
  `ID_PASIEN` varchar(8) NOT NULL,
  `ID_RELAWAN` varchar(8) NOT NULL,
  `TGL_PEMERIKSAAN` date DEFAULT NULL,
  `KEHAMILAN_KE` int(11) NOT NULL,
  `KELUHAN` varchar(1000) DEFAULT NULL,
  `TEKANAN_DARAH_SISTOL` float NOT NULL,
  `TEKANAN_DARAH_DIASTOL` float NOT NULL,
  `BERAT_BADAN` float NOT NULL,
  `TINGGI_BADAN` float NOT NULL,
  `UMUR_KEHAMILAN` int(11) NOT NULL,
  `TGL_RESPON` date NOT NULL,
  `RESPONMEDIS` varchar(300) DEFAULT NULL,
  `FOTO` longblob DEFAULT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemeriksaan`
--

INSERT INTO `pemeriksaan` (`ID_PEMERIKSAAN`, `ID_PASIEN`, `ID_RELAWAN`, `TGL_PEMERIKSAAN`, `KEHAMILAN_KE`, `KELUHAN`, `TEKANAN_DARAH_SISTOL`, `TEKANAN_DARAH_DIASTOL`, `BERAT_BADAN`, `TINGGI_BADAN`, `UMUR_KEHAMILAN`, `TGL_RESPON`, `RESPONMEDIS`, `FOTO`, `created_at`, `updated_at`) VALUES
(21010601, 'PSN00001', 'RELW003', NULL, 1, NULL, 15.2, 17.2, 70, 158, 16, '2020-01-06', NULL, NULL, '2021-01-06', '2021-01-06');

--
-- Triggers `pemeriksaan`
--
DELIMITER $$
CREATE TRIGGER `trigger_id_pemeriksaan` BEFORE INSERT ON `pemeriksaan` FOR EACH ROW BEGIN
    declare nr integer default 0;
    set nr=(SELECT COUNT(ID_PEMERIKSAAN) from pemeriksaan where DAY(created_at) = DAY(CURRENT_TIMESTAMP) AND MONTH(created_at) = MONTH(CURRENT_TIMESTAMP) AND YEAR(created_at) = YEAR(CURRENT_TIMESTAMP)) + 1;
    set new.ID_PEMERIKSAAN= concat(RIGHT(YEAR(CURRENT_TIMESTAMP), 2),
    LPAD(MONTH(CURRENT_TIMESTAMP),2,'0'),
    LPAD(DAY(CURRENT_TIMESTAMP),2,'0'), LPAD((select nr), 2, '0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `relawan`
--

CREATE TABLE `relawan` (
  `ID_RELAWAN` varchar(8) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `ALAMAT` varchar(100) NOT NULL,
  `NO_TELP` varchar(12) NOT NULL,
  `NIK` varchar(16) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `PASSWORD` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `relawan`
--

INSERT INTO `relawan` (`ID_RELAWAN`, `NAMA`, `ALAMAT`, `NO_TELP`, `NIK`, `EMAIL`, `PASSWORD`) VALUES
('RELW001', 'Sadam', 'Perum Griya Asri AA 28', '087856548258', '3578015404990113', 'sadam@gmail.com', 'sadam123'),
('RELW002', 'Ayu Nindya', 'Kedurus III Pilang Asri No 16', '085815314881', '3578015404990005', 'ayunindya@gmail.com', 'ayu123'),
('RELW003', 'Pramesti', 'Kedurus III Pilang Asri No 2', '081254653214', '3578015404990213', 'pramesti@gmail.com', 'esti123');

--
-- Triggers `relawan`
--
DELIMITER $$
CREATE TRIGGER `id_relawan` BEFORE INSERT ON `relawan` FOR EACH ROW BEGIN 
	INSERT INTO tsequancerelawan VALUES ("");
	SELECT MAX(id_relawan) INTO @ID
	FROM tsequancerelawan;
	SET new.ID_RELAWAN=CONCAT('RELW',LPAD(@ID,3,'0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tsequancedokter`
--

CREATE TABLE `tsequancedokter` (
  `id_dokter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tsequancedokter`
--

INSERT INTO `tsequancedokter` (`id_dokter`) VALUES
(1),
(2);

-- --------------------------------------------------------

--
-- Table structure for table `tsequancepasien`
--

CREATE TABLE `tsequancepasien` (
  `id_pasien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tsequancepasien`
--

INSERT INTO `tsequancepasien` (`id_pasien`) VALUES
(1);

-- --------------------------------------------------------

--
-- Table structure for table `tsequancerelawan`
--

CREATE TABLE `tsequancerelawan` (
  `id_relawan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tsequancerelawan`
--

INSERT INTO `tsequancerelawan` (`id_relawan`) VALUES
(1),
(2),
(3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`ID_DOKTER`);

--
-- Indexes for table `evaluasi`
--
ALTER TABLE `evaluasi`
  ADD PRIMARY KEY (`ID_EVALUASI`),
  ADD KEY `MELAKUKAN1_FK` (`ID_DOKTER`),
  ADD KEY `MEMILIKI_FK` (`ID_PEMERIKSAAN`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`ID_PASIEN`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD PRIMARY KEY (`ID_PEMERIKSAAN`),
  ADD KEY `MENJALANI_FK` (`ID_PASIEN`),
  ADD KEY `MELAKUKAN_FK` (`ID_RELAWAN`);

--
-- Indexes for table `relawan`
--
ALTER TABLE `relawan`
  ADD PRIMARY KEY (`ID_RELAWAN`);

--
-- Indexes for table `tsequancedokter`
--
ALTER TABLE `tsequancedokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `tsequancepasien`
--
ALTER TABLE `tsequancepasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `tsequancerelawan`
--
ALTER TABLE `tsequancerelawan`
  ADD PRIMARY KEY (`id_relawan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tsequancedokter`
--
ALTER TABLE `tsequancedokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tsequancepasien`
--
ALTER TABLE `tsequancepasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tsequancerelawan`
--
ALTER TABLE `tsequancerelawan`
  MODIFY `id_relawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `evaluasi`
--
ALTER TABLE `evaluasi`
  ADD CONSTRAINT `FK_MELAKUKAN1` FOREIGN KEY (`ID_DOKTER`) REFERENCES `dokter` (`ID_DOKTER`),
  ADD CONSTRAINT `FK_MEMILIKI` FOREIGN KEY (`ID_PEMERIKSAAN`) REFERENCES `pemeriksaan` (`ID_PEMERIKSAAN`);

--
-- Constraints for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD CONSTRAINT `FK_MELAKUKAN` FOREIGN KEY (`ID_RELAWAN`) REFERENCES `relawan` (`ID_RELAWAN`),
  ADD CONSTRAINT `FK_MENJALANI` FOREIGN KEY (`ID_PASIEN`) REFERENCES `pasien` (`ID_PASIEN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
