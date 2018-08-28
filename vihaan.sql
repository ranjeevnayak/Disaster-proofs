-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 28, 2017 at 11:02 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vihaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `user_name` varchar(30) NOT NULL,
  `user_pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--


-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `srno` int(20) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(30) NOT NULL,
  `u_email` varchar(30) NOT NULL,
  `u_pass` varchar(30) NOT NULL,
  `u_repass` varchar(30) NOT NULL,
  PRIMARY KEY (`srno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`srno`, `u_name`, `u_email`, `u_pass`, `u_repass`) VALUES
(1, 'nayak', 'sportgo111@gmail.com', '123', '123'),
(2, 'nayak', 'sportgo111@gmail.com', '123', '123'),
(3, 'lokii', 'lokesgh@jhkfs', '123', '123'),
(4, 'chiru', 'hkakf', '987', '987'),
(5, 'mishri', 'havfaf', '456', '456'),
(6, 'mishri', 'havfaf', '456', '456'),
(7, 'ranji', 'hgmzcz', '456', '456'),
(8, 'ranji', 'hgmzcz', '456', '456'),
(9, 'bc', 'jjg', '456', '456'),
(10, 'bc', 'jjg', '456', '456'),
(11, 'hjg', 'vgv', '45645', '45465'),
(12, 'cj', 'vbbm', '12', '12'),
(13, 'cj', 'vbbm', '12', '12'),
(14, 'hgjd', 'hskvsd', '123', '123'),
(15, 'nayakji', 'aksajdb', '123', '123'),
(16, 'nayakji', 'aksajdb', '123', '123'),
(17, 's, v', 'nxv', '14', '14'),
(18, 's, v', 'nxv', '14', '14'),
(19, 's, v', 'nxv', '14', '14'),
(20, 'lokesh', 'ehff df', ' fdsfds', 'fefdgfg'),
(21, 'lok', 'hkjlk', '123', '123');
