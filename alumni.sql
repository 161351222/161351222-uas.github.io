-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2018 at 11:12 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(5) NOT NULL,
  `nim` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `tahun_masuk` int(4) NOT NULL,
  `tahun_lulus` int(4) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` int(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `nim`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `jurusan`, `tahun_masuk`, `tahun_lulus`, `email`, `no_hp`, `status`) VALUES
(1, 0, '', '', 'Laki-Laki', 'Perempuan', 0, 0, '', 0, '0'),
(2, 1111, 'DENI SARDEN', '2018-01-11', 'Laki-Laki', 'Menejement Industri', 2010, 2017, 'sarden@gmail.com', 10101, '0'),
(3, 11112, 'Ujang Ubi', '2000-01-02', 'Laki-Laki', 'Teknik Tekstil', 2010, 20018, 'ujang@ubi.com', 0, 'kerja');

-- --------------------------------------------------------

--
-- Table structure for table `job_fair`
--

CREATE TABLE `job_fair` (
  `id` int(10) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `subjek` varchar(100) NOT NULL,
  `detail` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_fair`
--

INSERT INTO `job_fair` (`id`, `tanggal`, `subjek`, `detail`) VALUES
(1, '20 dese', 'fhdhfhd', 'wdsdsd'),
(2, '22 jun', 'qwqw', 'wewe');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `tipe` enum('admin','mhs') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `tipe`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, '1111', '123', 'mhs'),
(3, '1112', '123', 'mhs'),
(4, '1113', '123', 'mhs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_fair`
--
ALTER TABLE `job_fair`
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
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_fair`
--
ALTER TABLE `job_fair`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
