-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2017 at 07:01 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `odate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `uid`, `pid`, `qty`, `status`, `odate`) VALUES
(1, 1, 1, 4, '1', '2017-10-19'),
(2, 1, 2, 5, '0', '2017-10-19'),
(4, 4, 4, 2, '1', '2017-10-19'),
(5, 4, 2, 5, '0', '2017-10-19'),
(6, 5, 5, 2, '0', '2017-10-19'),
(7, 5, 1, 5, '1', '2017-10-19'),
(8, 5, 1, 1, '0', '2017-10-19'),
(9, 6, 6, 6, '0', '2017-10-19'),
(11, 6, 6, 4, '0', '2017-10-19');

-- --------------------------------------------------------

--
-- Table structure for table `producs`
--

CREATE TABLE IF NOT EXISTS `producs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `qty` int(11) NOT NULL,
  `type` enum('Tyres','Battery') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `producs`
--

INSERT INTO `producs` (`id`, `name`, `description`, `price`, `qty`, `type`) VALUES
(1, 'BMW Tyres', 'size: 88mm, very clean', 200, 20, 'Tyres'),
(2, 'Mercedes Tyres', 'Desgn for mercedes cc', 100, 60, 'Tyres'),
(4, 'Battery peugeot', 'uqqw eoiqwe qwpeoqw eoqwie', 200, 10, 'Battery'),
(6, 'mercedes battery', 'any description like size weight and other stuff related to it EX : 5kg', 100, 10, 'Battery');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `usertype` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `phone`, `usertype`) VALUES
(1, 'Diomande Dro Freddy Junior', 'frediustc@gmail.com', '9dfde458b237e79c1ca78f48d3f1e2eab7db37f9', '0123456789', 1),
(3, 'You Can Edit This Field', 'admin@admin.com', '9dfde458b237e79c1ca78f48d3f1e2eab7db37f9', '0123456789', 2),
(4, 'My New Fullname', 'myemail@gmail.com', '9dfde458b237e79c1ca78f48d3f1e2eab7db37f9', '0123456789', 1),
(5, 'Customer fullname', 'email@gmail.com', '9dfde458b237e79c1ca78f48d3f1e2eab7db37f9', '0123456789', 1),
(6, 'Kouadio Kan', 'fred@gmail.com', '9dfde458b237e79c1ca78f48d3f1e2eab7db37f9', '0123456789', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE IF NOT EXISTS `usertype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`id`, `type`) VALUES
(1, 'Customer'),
(2, 'Administrator');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
