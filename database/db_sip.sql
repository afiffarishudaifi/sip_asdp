-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2024 at 02:29 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sip`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_data`
--

CREATE TABLE `form_data` (
  `no_id` int(11) NOT NULL,
  `id_kapal` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_tambat` time NOT NULL,
  `jam_tolak` time NOT NULL,
  `lama_tambat` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `biaya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form_data`
--

INSERT INTO `form_data` (`no_id`, `id_kapal`, `tanggal`, `jam_tambat`, `jam_tolak`, `lama_tambat`, `keterangan`, `biaya`) VALUES
(1, 3, '2024-12-30', '11:25:00', '11:25:00', 35, 'Jasa Sandar Oke                                ', 0),
(2, 1, '2024-12-06', '11:26:00', '11:26:00', 20, 'Jasa Sandar', 0),
(3, 3, '2024-12-31', '18:08:00', '18:13:00', 5, 'Jasa Sandar', 0),
(4, 1, '2024-12-31', '22:21:00', '22:26:00', 40, 'Sandar                                ', 21600),
(5, 2, '2025-01-07', '09:00:00', '09:00:00', 1, 'Sandar', 547);

-- --------------------------------------------------------

--
-- Table structure for table `kapal`
--

CREATE TABLE `kapal` (
  `id` int(11) NOT NULL,
  `namaprs` varchar(100) NOT NULL,
  `namakp` varchar(100) NOT NULL,
  `grt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kapal`
--

INSERT INTO `kapal` (`id`, `namaprs`, `namakp`, `grt`) VALUES
(1, 'PT ASDP Indonesia Ferry', 'KMP Dingkis', 540),
(2, 'PT ASDP Indonesia Ferry', 'KMP Goropa', 547),
(3, 'PT ASDP Indonesia Ferry', 'KMP Poncan Moale', 831),
(4, 'PT ASDP Indonesia Ferry', 'KMP Gajah Mada', 512),
(5, 'PT ASDP Indonesia Ferry', 'KMP Julung-Julung', 601),
(6, 'PT ASDP Indonesia Ferry', 'KMP Manta', 627),
(7, 'PT ASDP Indonesia Ferry', 'KMP Manta II', 611),
(8, 'PT Pascadana Sundari', 'KMP Tawes', 270),
(9, 'PT Dharma Lautan Utama', 'KMP Dharma Ferry', 342),
(10, 'PT Dharma Lautan Utama', 'KMP Dharma Badra', 239),
(11, 'PT Dharma Lautan Utama', 'KMP Ulin Ferry', 244),
(12, 'PT Sadena Mitra Bahari', 'KMP Tiga Anugerah', 321),
(13, 'PT Sadena Mitra Bahari', 'KMP Agung Wilis', 447),
(14, 'PT Sadena Mitra Bahari', 'KMP Kineret', 531),
(15, 'PT Sadena Mitra Bahari', 'KMP Muchlisa', 0),
(16, 'PT Jembatan Nusantara', 'KMP Swarna Nalini', 323),
(17, 'PT Jembatan Nusantara', 'KMP Selat Madura I', 209),
(18, 'PT Jembatan Nusantara', 'KMP Selat Madura II', 209),
(19, 'PT Jembatan Nusantara', 'KMP Srikandi', 476),
(20, 'PT Tranship Indonesia', 'KMP Tranship I', 1058),
(21, 'PT Mitra Bahari', 'KMP Manggani', 831),
(22, 'PT Afif Jaya Group', 'KMP Jaya Sentosa', 441);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(250) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nama`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin123@gmail.com', 'EKdxEFQe/eTPRW75kVv9UA9nqYH0CJlQkmmZBZjiLPlW+cPiXDrpv2bWMIbC8TvGvT0/J6dUE1Xf688kb0fA8Jo9jsz9ww4DicelhupQu6om1yRTOFM=', 1),
(3, 'Karyawan', 'karyawan1@gmail.com', 'ACXwGTX5ltzBsbmG8pXI5CsNBFKqvoUafihVBkPNehESpNm487gq9JcbR5k08Dc/K7feHjJmZ9KzfUWEongLWIyTMZNrDxl3Xv1YkKYUR4Wc1B9/6luDGfQ=', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_data`
--
ALTER TABLE `form_data`
  ADD PRIMARY KEY (`no_id`),
  ADD KEY `id_kapal` (`id_kapal`);

--
-- Indexes for table `kapal`
--
ALTER TABLE `kapal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_data`
--
ALTER TABLE `form_data`
  MODIFY `no_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kapal`
--
ALTER TABLE `kapal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
