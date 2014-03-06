-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 06, 2014 at 12:39 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `restaurant`
--
CREATE DATABASE IF NOT EXISTS `restaurant` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `restaurant`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chef_name` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `chef_name`, `password`) VALUES
(3, 'admin', '2736fab291f04e69b62d490c3c09361f5b82461a');

-- --------------------------------------------------------

--
-- Table structure for table `all_menu`
--

CREATE TABLE IF NOT EXISTS `all_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `food_id` int(11) NOT NULL,
  `drinks_id` int(11) NOT NULL,
  `dessert_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE IF NOT EXISTS `customer_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_fname` varchar(30) NOT NULL,
  `cust_lname` varchar(30) NOT NULL,
  `cust_address` text NOT NULL,
  `cust_phone` varchar(15) NOT NULL,
  `food_id` int(11) NOT NULL,
  `soup_id` int(11) NOT NULL,
  `drink_id` int(11) NOT NULL,
  `dessert_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`id`, `cust_fname`, `cust_lname`, `cust_address`, `cust_phone`, `food_id`, `soup_id`, `drink_id`, `dessert_id`) VALUES
(2, 'John', 'Doe', 'Block E 12, Barka Street, Woadbridge court, California', '76869594848', 1, 3, 1, 1),
(10, 'Barka', 'Kiwix', 'grgrgr', '432435', 1, 1, 1, 1),
(11, 'Mark', 'Ross', 'fhfhfhgf', '2425', 3, 4, 1, 1),
(12, 'Mark', 'Mongo', 'sfetgegrg', '4356', 2, 3, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dessert`
--

CREATE TABLE IF NOT EXISTS `dessert` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dessert_name` varchar(20) NOT NULL,
  `dessert_details` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `dessert`
--

INSERT INTO `dessert` (`id`, `dessert_name`, `dessert_details`) VALUES
(1, 'Ice Cream Sandwich', 'A nicely flavoured ice cream'),
(2, 'Mount Carlo Sweet Ju', 'A juice from Mount Carlo!...What else do you  think?');

-- --------------------------------------------------------

--
-- Table structure for table `drinks`
--

CREATE TABLE IF NOT EXISTS `drinks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `drink_name` varchar(20) NOT NULL,
  `drink_description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `drinks`
--

INSERT INTO `drinks` (`id`, `drink_name`, `drink_description`) VALUES
(1, 'Coke', 'A drink that contains caffein'),
(2, 'Fanta', 'A feminine-looking drink');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE IF NOT EXISTS `food` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `food_name` varchar(30) NOT NULL,
  `food_detail` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `food_name`, `food_detail`) VALUES
(1, 'Eba', 'A very solid food that you will need in terms of severe hunger'),
(2, 'Apu', 'Another description'),
(3, 'Semovita', 'Another Solid food\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `no_of_people`
--

CREATE TABLE IF NOT EXISTS `no_of_people` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `res_fname` varchar(30) NOT NULL,
  `res_lname` varchar(30) NOT NULL,
  `email` varchar(45) NOT NULL,
  `res_date` date NOT NULL,
  `res_time` time NOT NULL,
  `time_reserved` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `no_of_people` int(11) NOT NULL,
  `seat_id` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `res_fname`, `res_lname`, `email`, `res_date`, `res_time`, `time_reserved`, `no_of_people`, `seat_id`) VALUES
(38, 'Jane', 'Doe', 'jane@doe.com', '2014-02-18', '10:00:00', '2014-02-14 23:32:01', 1, 'GPNBA');

-- --------------------------------------------------------

--
-- Table structure for table `soup`
--

CREATE TABLE IF NOT EXISTS `soup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `soup_name` varchar(20) NOT NULL,
  `soup_detail` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `soup`
--

INSERT INTO `soup` (`id`, `soup_name`, `soup_detail`) VALUES
(1, 'Okra', 'Description of the okra soup'),
(2, 'Vegetable', 'Description of the vegetable soup'),
(3, 'Oziza', 'Oziza''s description'),
(4, 'Afan', 'Afan''s description');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
