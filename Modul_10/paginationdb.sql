-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2020 at 12:38 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paginationdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pagination`
--

CREATE TABLE `tb_pagination` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `age` int(10) NOT NULL,
  `dept` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pagination`
--

INSERT INTO `tb_pagination` (`id`, `name`, `age`, `dept`) VALUES
(1, 'Giri', 21, 'Information Technology'),
(2, 'Santiawan', 20, 'Marketing'),
(3, 'Dharma', 20, 'Information Technology'),
(4, 'Aryadi', 21, 'Information Technology'),
(5, 'Denny', 34, 'Finance'),
(6, 'Indra', 21, 'Finance'),
(7, 'Agus', 21, 'Information Technology'),
(8, 'Lanang', 22, 'Production'),
(9, 'Wahyu', 34, 'Production'),
(10, 'Anggita', 27, 'Finance');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pagination`
--
ALTER TABLE `tb_pagination`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pagination`
--
ALTER TABLE `tb_pagination`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
