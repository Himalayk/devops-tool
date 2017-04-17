-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 17, 2017 at 01:05 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `DevAT`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_score`
--

CREATE TABLE `tb_score` (
  `id` int(11) NOT NULL,
  `ci` int(11) NOT NULL,
  `automation` int(11) NOT NULL,
  `cd` int(11) NOT NULL,
  `monitoring` int(11) NOT NULL,
  `result_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_score`
--

INSERT INTO `tb_score` (`id`, `ci`, `automation`, `cd`, `monitoring`, `result_date`) VALUES
(10, 0, 0, 0, 10, '2017-03-24 16:03:49'),
(11, 0, 0, 0, 10, '2017-03-24 16:05:07'),
(12, 0, 0, 0, 10, '2017-03-24 16:05:08'),
(13, 0, 0, 0, 10, '2017-03-24 16:06:34'),
(14, 0, 0, 0, 16, '2017-03-24 16:06:38'),
(15, 0, 0, 0, 16, '2017-03-24 16:06:40'),
(16, 13, 23, 14, 23, '2017-03-24 17:55:37'),
(17, 13, 7, 0, 0, '2017-03-29 18:56:07'),
(18, 13, 7, 0, 0, '2017-03-29 18:56:11'),
(19, 13, 7, 0, 0, '2017-03-29 18:56:34'),
(20, 11, 11, 6, 6, '2017-03-29 20:55:15'),
(21, 7, 7, 7, 0, '2017-03-30 15:39:26'),
(22, 19, 10, 18, 10, '2017-03-30 16:50:02'),
(23, 17, 17, 11, 15, '2017-03-30 18:51:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_score`
--
ALTER TABLE `tb_score`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_score`
--
ALTER TABLE `tb_score`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
