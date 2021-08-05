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
-- Database: `dkte`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentdata`
--

CREATE TABLE `studentdata` (
  `name` varchar(20) DEFAULT NULL,
  `year` text DEFAULT NULL,
  `branch` varchar(20) DEFAULT NULL,
  `company` varchar(20) DEFAULT NULL,
  `questions` varchar(2000) DEFAULT NULL,
  `image` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentdata`
--

INSERT INTO `studentdata` (`name`, `year`, `branch`, `company`, `questions`, `image`) VALUES
(' Aniket', '2022', 'CSE', 'JadeGlobal', '1] C code for matrix operations\r\n2]Java Threads\r\n3] Operating system', 'nature2.jpg'),
(' Swarup ', '2021', 'CSE', 'globaledge', '1] C program for file handling ,2] what are different dayatypes in Javascript ,3] DOM 4] Operating system ', 'wallpapertip_transfo'),
(' Shreyas Patil', '2022', 'CSE', 'Infoysys', '1] Write a program for displaying fibonacci series\r\n2] Write java  program for Ingerutance of car\r\n3] LinkedList in java', 'd24807644ef763d76004'),
(' Aniket', '2022', 'CSE', 'JadeGlobal', '1] C code for functions\r\n2] File handling', 'nature9.jpg'),
(' Visahl', '2022', 'CSE', 'globaledge', '1] C program for area calculation of triangle\r\n2] Java File handling\r\n3] DOM\r\n4] XML', 'xyz.jpg'),
(' akash', '2021', 'CSE', 'globaledge', '1] C program for displying array data in reverse order\r\n2] Java program  for file handling', 'exp.jpg'),
(' Sameer', '2022', 'CSE', 'Persistance', '1] C program for pointers\r\n2] Linked list in java\r\n3] Generation of microprocessor\r\n4] DOM \r\n5] XML\r\n6] Bubble sort', 'nature50.jpg'),
(' shubham123', '2022', 'CSE', 'globaledge', '1] Data structure\r\n2] Database\r\n3] LinkedList in C\r\n4] Computer graphics\r\n5] Operating system', 'js.png'),
(' tushar', '2022', 'CSE', 'globaledge', '1] C program for array implementatiion\r\n2] Linkded List in java\r\n3] DOM\r\n4] XMl \r\n5] File handling', 'today1.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
