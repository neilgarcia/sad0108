-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2014 at 07:02 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

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
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `prod_id` varchar(32) NOT NULL,
  `prod_name` varchar(32) NOT NULL,
  `prod_type` varchar(32) NOT NULL,
  `design_name` varchar(32) NOT NULL,
  `textile` varchar(32) NOT NULL,
  `color` varchar(32) NOT NULL,
  `specification` varchar(32) NOT NULL,
  `reversible` varchar(32) NOT NULL,
  `type` varchar(32) NOT NULL,
  `font` varchar(32) NOT NULL,
  `sizes` varchar(32) NOT NULL,
  `price` varchar(32) NOT NULL,
  `prod_img` blob NOT NULL,
  `img_type` varchar(32) NOT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
