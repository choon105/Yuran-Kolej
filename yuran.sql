-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 01, 2019 at 08:31 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kolej`
--
DROP DATABASE IF EXISTS `kolej`;
CREATE DATABASE `kolej` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kolej`;

-- --------------------------------------------------------

--
-- Table structure for table `yuran`
--

CREATE TABLE IF NOT EXISTS `yuran` (
  `noKP` varchar(12) NOT NULL,
  `namaPelajar` varchar(100) NOT NULL,
  `yuranAsrama` int(11) NOT NULL,
  `yuranMakan` int(11) NOT NULL,
  `yuranPep` int(11) NOT NULL,
  PRIMARY KEY (`noKP`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

--
-- Dumping data for table `yuran`
--

INSERT INTO `yuran` (`noKP`, `namaPelajar`, `yuranAsrama`, `yuranMakan`, `yuranPep`) VALUES
('020102023236', 'Abdul Majid Bin Abdullah', 120, 150, 50),
('040122022135', 'Mohd Ali Bin Mohd Zaman', 150, 120, 50),
('010614022134', 'Maimunah Binti Malim', 120, 150, 160),
('02031202123', 'Fahmi Yusairi', 120, 120, 160),
('03122402341', 'M Salim M Salam', 120, 120, 160),
('021024023129', 'Nasrudin B Kamaruddin', 120, 120, 160),
('030201022345', 'M Vijay MK', 120, 100, 120);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
