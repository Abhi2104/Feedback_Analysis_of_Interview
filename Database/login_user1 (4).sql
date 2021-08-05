-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2021 at 01:57 PM
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
-- Database: `aniket`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_user1`
--

CREATE TABLE `login_user1` (
  `id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_user1`
--

INSERT INTO `login_user1` (`id`, `user_name`, `email`, `password`) VALUES
(100, 'aniket', 'aniket@gmail.com', 'aniket123'),
(101, 'abhijeet', 'abhi@gmail.com', 'abhijeet'),
(200, 'vishal', 'vishal@gmail.com', '123'),
(37, 'kayyum', 'kais@gmail.com', 'kayyum'),
(20, 'aditya', 'aditya@gmail.com', 'adi20'),
(500, 'SR Patil', 'srp@gmail.com', 'srp'),
(65, 'Sagar', 'sagar@gmail.com', 'sagar123'),
(21, 'Prathamesh', 'prathamsesh@gmail.in', 'prathamesh@123'),
(18, 'Virat Kohli', 'virat@g', 'vk18'),
(15, 'pratik', 'pratik@gmail.com', 'pratik@123'),
(104, 'sahil', 'sahil@gam', 'sahil123'),
(28, 'rushikesh', 'rushi@gmail.com', 'rushi123'),
(120, 'akash', 'akash@gmail.com', 'akash123'),
(49, 'shubham12345789', 'shubham@gmail.com', 'shubham@123'),
(17, 'tushar', 'tushar@yahoo', 'tushar123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
