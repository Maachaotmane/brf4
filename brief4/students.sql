-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 19, 2021 at 11:07 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `idadm` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`idadm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `idstf` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `idadm` int(11) NOT NULL,
  PRIMARY KEY (`idstf`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`idstf`, `full_name`, `email`, `password`, `class`, `idadm`) VALUES
(5, 'othman re', 'othman@gmail.com', 'loiadhb', '2', 1),
(6, 'MOHAMMED AMINE ESSOBHI', 'amine.es.sobhi7@gmail.com', 'hhhhh', '3', 1),
(7, 'MOHAMMED', 'amine.es.sobhi7@gmail.com', 'AAAAAAAA', '2', 1),
(8, 'MOHA', 'amine.es.sobhi7@gmail.com', 'ddd', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `idstd` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `idadm` varchar(100) NOT NULL,
  `pub_id` varchar(100) NOT NULL,
  PRIMARY KEY (`idstd`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`idstd`, `full_name`, `email`, `password`, `class`, `idadm`, `pub_id`) VALUES
(2, 'othman_add', 'othman@gmail.com', 'eragon', '2', '1', ''),
(4, 'othman re', 'othman@gmail.com', 'aedf', '1', '1', '2'),
(6, 'abdo', 'abdo@gmail.com', 'eragon', '4', '1', 'Id-3933002');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `PASSWORD` varchar(100) DEFAULT NULL,
  `POSITION` varchar(15) DEFAULT NULL,
  `pub_id` varchar(100) NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `email`, `PASSWORD`, `POSITION`, `pub_id`) VALUES
(3, 'amine@gmail.com', 'amine', 'admin', ''),
(17, 'othman@gmail.com', 'aedf', 'students', '2'),
(18, 'abdo@gmail.com', 'eragon', 'students', 'Id-3933002');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
