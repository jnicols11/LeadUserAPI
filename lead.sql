-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2021 at 03:36 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lead`
--
CREATE DATABASE IF NOT EXISTS `lead` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `lead`;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Full_Name` varchar(75) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Role` varchar(45) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Email` (`Email`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Full_Name`, `Username`, `Email`, `Password`, `Role`) VALUES
(1, 'Jordan Nicols', 'infanu', 'nicolsj99@gmail.com', 'password', 'Admin'),
(2, 'Shaylah Trimmings', 'shayluuuh', 'strimmings99@gmail.com', 'password', ''),
(3, 'Michael Landreth', 'teach', 'MLandreth@gcu.edu', 'password', ''),
(4, 'Kaydee Hoff', 'KHoff', 'khoff@gmail.com', 'password', ''),
(5, 'Matty Hue', 'Presy', 'presydenttv@gmail.com', 'password', ''),
(6, 'Jason Nicols', 'jnicols25', 'jasonnicols25@gmail.com', 'password', ''),
(7, 'Robert Williams', 'RWills', 'RWilliams@gmail.com', 'password', ''),
(8, 'Shaylah Trimmings', 'strimmings', 'Shayluhtrimmings99@gmail.com', 'password', ''),
(9, 'Brett Dacosta', 'Bredac', 'BrettDac@gmail.com', 'password', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
