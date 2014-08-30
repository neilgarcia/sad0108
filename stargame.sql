-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2014 at 11:26 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stargame`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `active` varchar(11) NOT NULL DEFAULT '0',
  `privilage` varchar(10) NOT NULL,
  `contact_num` varchar(11) NOT NULL,
  `address` varchar(355) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `first_name`, `last_name`, `email`, `active`, `privilage`, `contact_num`, `address`) VALUES
('admin', 'admin', 'Almedo', 'Turla', 'stargamesportswear@yahoo.com', '0', 'admin', '0', ''),
('arwinlontoc', 'lontoc', 'Arwin', 'Lontoc', 'alontoc22@yahoo.com', '0', 'admin', '09054795576', 'Binondo, Manila'),
('hectorarabis', 'arabis', 'Hector', 'Arabis', 'arabis.hector@yahoo.com', '0', 'admin', '09212250002', 'Sta. Mesa, Manila'),
('nemiaturla', 'turla', 'Nemia', 'Turla', 'stargamesportswear@yahoo.com', '0', 'client', '09183589685', 'Anonas, Quezon City'),
('rrdmmiave', 'manalo', 'Renren', 'Manalo', 'rrdmmiave@yahoo.com', '0', 'admin', '09179041183', 'Sampaloc, Manila'),
('tineturla', 'turla', 'Christine', 'turla', 'tine_ow8@gmail.com', '0', 'client', '09279673288', 'Anonas, Quezon City');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
