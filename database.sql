-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 25, 2015 at 08:10 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `dbuser`
--

CREATE TABLE IF NOT EXISTS `dbuser` (
  `id` varchar(50) NOT NULL,
  `db_user` varchar(50) NOT NULL,
  `db_name` varchar(50) NOT NULL,
  `db_pass` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbuser`
--

INSERT INTO `dbuser` (`id`, `db_user`, `db_name`, `db_pass`) VALUES
('1', 'admin', 'admin@gmail.com', 'admin'),
('2', 'trong', 'Pham Van Trong', 'trong'),
('3', 'user3', 'Nguyen Van An', '123456'),
('4', 'user4', 'Do Manh An', 'andm'),
('5', 'user5', 'Ly Anh Tuan', '123456');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
