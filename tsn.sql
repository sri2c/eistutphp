-- phpMyAdmin SQL Dump
-- version 3.3.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 12, 2011 at 09:16 PM
-- Server version: 5.1.54
-- PHP Version: 5.3.5-1ubuntu7.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tsn`
--

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `uid` int(11) NOT NULL,
  `dob` date NOT NULL,
  `dp` varchar(30) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `zip` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`uid`, `dob`, `dp`, `sex`, `city`, `state`, `country`, `zip`, `phone`) VALUES
(1, '1986-12-21', '1', 'Male', 'Chennai', 'Tamil Nadu', 'India', '600102', ''),
(3, '1986-12-21', '3', 'Male', 'Chennai', 'Tamil Nadu', 'India', '600102', '8939666850');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `uid` (`uid`),
  KEY `uid_2` (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `email`, `password`, `first_name`, `last_name`) VALUES
(1, 'sri2c@yahoo.com', '0d107d09f5bbe40cade3de5c71e9e9b7', 'Srivatsa', 'Viswanathan'),
(3, 'sri.umd@gmail.com', '997fd5109405e6930078c902344f8d1b', 'srivatsa2', 'viswanathan2'),
(4, 'micheal@usa.com', '0d107d09f5bbe40cade3de5c71e9e9b7', 'Micheal', 'Schumacher');
