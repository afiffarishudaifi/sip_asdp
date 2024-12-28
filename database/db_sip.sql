-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2024 at 02:07 AM
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
  `tanggal` date NOT NULL,
  `jam_tambat` time NOT NULL,
  `jam_tolak` time NOT NULL,
  `lama_tambat` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kapal`
--

CREATE TABLE `kapal` (
  `id` int(11) NOT NULL,
  `namaprs` varchar(100) NOT NULL,
  `namakp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kapal`
--

INSERT INTO `kapal` (`id`, `namaprs`, `namakp`) VALUES
(1, 'PT ASDP Indonesia Ferry', 'KMP Dingkis'),
(2, 'PT ASDP Indonesia Ferry', 'KMP Goropa'),
(3, 'PT ASDP Indonesia Ferry', 'KMP Poncan Moale'),
(4, 'PT ASDP Indonesia Ferry', 'KMP Gajah Mada'),
(5, 'PT ASDP Indonesia Ferry', 'KMP Julung-Julung'),
(6, 'PT ASDP Indonesia Ferry', 'KMP Manta'),
(7, 'PT ASDP Indonesia Ferry', 'KMP Manta II'),
(8, 'PT Pascadana Sundari', 'KMP Tawes'),
(9, 'PT Dharma Lautan Utama', 'KMP Dharma Ferry'),
(10, 'PT Dharma Lautan Utama', 'KMP Dharma Badra'),
(11, 'PT Dharma Lautan Utama', 'KMP Ulin Ferry'),
(12, 'PT Sadena Mitra Bahari', 'KMP Tiga Anugerah'),
(13, 'PT Sadena Mitra Bahari', 'KMP Agung Wilis'),
(14, 'PT Sadena Mitra Bahari', 'KMP Kineret'),
(15, 'PT Sadena Mitra Bahari', 'KMP Muchlisa'),
(16, 'PT Jembatan Nusantara', 'KMP Swarna Nalini'),
(17, 'PT Jembatan Nusantara', 'KMP Selat Madura I'),
(18, 'PT Jembatan Nusantara', 'KMP Selat Madura II'),
(19, 'PT Jembatan Nusantara', 'KMP Srikandi'),
(20, 'PT Tranship Indonesia', 'KMP Tranship I'),
(21, 'PT Mitra Bahari', 'KMP Manggani');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(250) NOT NULL,
  `status` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nama`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin123@gmail.com', 'EKdxEFQe/eTPRW75kVv9UA9nqYH0CJlQkmmZBZjiLPlW+cPiXDrpv2bWMIbC8TvGvT0/J6dUE1Xf688kb0fA8Jo9jsz9ww4DicelhupQu6om1yRTOFM=', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'root', '@root123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_data`
--
ALTER TABLE `form_data`
  ADD PRIMARY KEY (`no_id`);

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_data`
--
ALTER TABLE `form_data`
  MODIFY `no_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kapal`
--
ALTER TABLE `kapal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
