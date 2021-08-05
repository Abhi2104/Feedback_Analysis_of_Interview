-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2021 at 01:56 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `facultydata`
--

CREATE TABLE `facultydata` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `company` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facultydata`
--

INSERT INTO `facultydata` (`id`, `name`, `company`, `date`) VALUES
(100, 'SR Patil', 'globaledge', '2021-05-29'),
(100, 'SR Patil', 'globaledge', '2021-05-29'),
(100, 'SR Patil', 'Infoysys', '2021-05-08'),
(52, 'SR Patil', 'JadeGlobal', '2021-05-30'),
(33, 'SR Patil', 'TCS', '2021-05-30'),
(0, '', 'JadeGlobal', '2021-06-05'),
(0, '', 'Infoysys', '2021-12-03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
