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
-- Database: `feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` text NOT NULL,
  `questions` mediumtext NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `questions`, `answer`) VALUES
(' Vikas ', 'Threads in java', 'Threads allows a program to operate more efficiently by doing multiple things at the same time.\r\n\r\nThreads can be used to perform complicated tasks in the background without interrupting the main program.'),
(' Sagar Patil', 'Java File handling', '			File handling is an important part of any application.\r\n\r\nJava has several methods for creating, reading, updating, and deleting files.\r\nFile handling is an important part of any application.\r\n\r\nJava has several methods for creating, reading, updating, and deleting files.'),
(' Shubham', 'Java File handling', '			Java FileWriter and FileReader classes are used to write and read data from text files (they are Character Stream classes). It is recommended not to use the FileInputStream and FileOutputStream classes if you have to read and write any textual information as these are Byte stream classes'),
(' Shubham', '			Java File handling', '		This class inherits from the OutputStream class.\r\nThe constructors of this class assume that the default character encoding and the default byte-buffer size are acceptable. To specify these values yourself, construct an OutputStreamWriter on a FileOutputStream.\r\nFileWriter is meant for writing streams of characters. For writing streams of raw bytes, consider using a FileOutputStream.\r\nFileWriter creates the output file , if it is not present already.	'),
(' Shardul', 'Java File handling		', 'abcdsef			'),
(' Akash Chawla', 'Java File handling			', '		alskdjfhg	'),
(' Virat', '		Java File handling	', '		lko	'),
(' Aniket', '	LInkded list in java', '	Linked List is a part of the Collection framework present in java.util package. This class is an implementation of the LinkedList data structure which is a linear data structure where the elements are not stored in contiguous locations and every element is a separate object with a data part and address part. The elements are linked using pointers and addresses. Each element is known as a node. 		');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
