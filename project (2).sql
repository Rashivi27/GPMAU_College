-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2025 at 03:28 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `name` varchar(50) NOT NULL,
  `enrollment` varchar(20) NOT NULL,
  `number` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `guardian` varchar(50) NOT NULL,
  `g_number` varchar(10) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `year` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`name`, `enrollment`, `number`, `email`, `guardian`, `g_number`, `branch`, `year`, `gender`, `address`, `message`) VALUES
(' aditya', 'E2549786468', '35978643', 'abc@gmail.com', 'vivan', '7564089345', 'cse', '1st year', 'male', 'maubjg', 'mhgvhmnfvjndf'),
(' ram', '658756', '855698714', 'uig@hotmail.com', 'yuiyhik', '8756457488', 'cs', '3rd year', 'male', 'tirtfiuwsre', 'tyuruk'),
(' shivika', '3643', '763763786', 'hik@h.com', 'jh,l', '865472310', 'ku;o', '3rd year', 'male', 'hou;;uj;0uyytfrde345y', 'gkutggmkgvkd');

-- --------------------------------------------------------

--
-- Table structure for table `ques`
--

CREATE TABLE `ques` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ques`
--

INSERT INTO `ques` (`name`, `email`, `subject`, `message`) VALUES
(' aditya', 'abc@gmail.com', 'fees ', 'know about fees structure');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `confirm_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`email`, `password`, `confirm_password`) VALUES
(' abc@gmail.com', '123', '123'),
(' xyz@hotmail.com', '9090', '9090'),
(' sakshi@gmail.com', 'sak123', 'sak123'),
(' rst@hotmail.com', 'z0z0', 'z0z0'),
(' yuvanrana@gmail.com', 'yuva123', 'yuva123'),
(' shivani@gmail.com', '8998', '9889'),
(' satakshi@gmail.com', 'akshi123', 'akshi123'),
(' rud@go.com', '123', '123'),
(' july@hotmail.com', '12345', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
