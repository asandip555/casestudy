-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 24, 2020 at 06:36 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abm`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers_in_business`
--

DROP TABLE IF EXISTS `customers_in_business`;
CREATE TABLE IF NOT EXISTS `customers_in_business` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` text NOT NULL,
  `middle_name` varchar(10) NOT NULL,
  `last_name` text NOT NULL,
  `gender` text NOT NULL,
  `address_line` varchar(100) NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `postcode` int(6) NOT NULL,
  `phone_number_one` int(13) NOT NULL,
  `phone_number_two` int(13) NOT NULL,
  `gst_number` varchar(20) NOT NULL,
  `business_name` varchar(40) NOT NULL,
  `documents_submitted` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers_in_business`
--

INSERT INTO `customers_in_business` (`id`, `first_name`, `middle_name`, `last_name`, `gender`, `address_line`, `city`, `state`, `postcode`, `phone_number_one`, `phone_number_two`, `gst_number`, `business_name`, `documents_submitted`) VALUES
(1, 'test', 'test', 'test', '1', 'test', 'test', 'test', 125055, 1234456, 123456, '123456', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `diesel_rates`
--

DROP TABLE IF EXISTS `diesel_rates`;
CREATE TABLE IF NOT EXISTS `diesel_rates` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `rate` decimal(10,2) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diesel_rates`
--

INSERT INTO `diesel_rates` (`id`, `rate`, `date`) VALUES
(1, '124.00', '2020-08-24 00:59:05'),
(2, '123.50', '2020-08-24 01:00:17');

-- --------------------------------------------------------

--
-- Table structure for table `login_credentials`
--

DROP TABLE IF EXISTS `login_credentials`;
CREATE TABLE IF NOT EXISTS `login_credentials` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `role_id` int(10) NOT NULL DEFAULT '3',
  `emp_id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`) VALUES
(1, 'superadmin'),
(2, 'admin'),
(3, 'ca'),
(4, 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
CREATE TABLE IF NOT EXISTS `sales` (
  `sale_id` int(10) NOT NULL AUTO_INCREMENT,
  `sale_person_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `date_of_sale` date NOT NULL,
  PRIMARY KEY (`sale_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales_person`
--

DROP TABLE IF EXISTS `sales_person`;
CREATE TABLE IF NOT EXISTS `sales_person` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(1) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address_1` varchar(100) NOT NULL,
  `address_2` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `postcode` int(6) NOT NULL,
  `govt_id_type` varchar(50) NOT NULL,
  `govt_id` varchar(50) NOT NULL,
  `phone_number_one` int(12) NOT NULL,
  `phone_number_two` int(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
