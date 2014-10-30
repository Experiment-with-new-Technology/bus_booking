-- phpMyAdmin SQL Dump
-- version 2.11.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 30, 2014 at 07:23 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `u_name` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `dept` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`u_name`, `pass`, `dept`) VALUES
('cSE_rUET', 'teuResC', 'cse'),
('mE_rUET', 'teuReM', 'me'),
('eTE_rUET', 'teuRetE', 'ete'),
('eEE_rUET', 'teuReeE', 'eee'),
('admin', 'nimda', 'transport'),
('vC_rUET', 'vc12345', 'all');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE IF NOT EXISTS `driver` (
  `dr_name` varchar(100) NOT NULL,
  `dr_mobile` varchar(20) NOT NULL,
  `dr_parmanent` varchar(200) NOT NULL,
  `dr_review` double NOT NULL,
  `dr_booking` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`dr_name`, `dr_mobile`, `dr_parmanent`, `dr_review`, `dr_booking`) VALUES
('Habibur Rahman', '01234567891', 'Rajshahi', 40, 1),
('Raja Ahmed', '01987654321', 'Rajshahi', 39, 1),
('Al Mamun', '01234567892', 'Rajshahi', 38, 1),
('Hasan Ahmed', '01987654323', 'Rajshahi', 37, 0);

-- --------------------------------------------------------

--
-- Table structure for table `helper`
--

CREATE TABLE IF NOT EXISTS `helper` (
  `hel_name` varchar(100) NOT NULL,
  `hel_mobile` varchar(20) NOT NULL,
  `hel_parmanent` varchar(200) NOT NULL,
  `hel_review` double NOT NULL,
  `hel_booking` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `helper`
--

INSERT INTO `helper` (`hel_name`, `hel_mobile`, `hel_parmanent`, `hel_review`, `hel_booking`) VALUES
('Ajijur RAhman', '01234567891', 'Rajshahi', 40, 1),
('Yasir Ahmed', '01987654321', 'Rajshahi', 39, 1),
('Zahid Khan', '01234567892', 'Rajshahi', 38, 0),
('Rashed', '01987654323', 'Rajshahi', 37, 1);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `name` varchar(50) NOT NULL,
  `desig` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `needed_date` varchar(50) NOT NULL,
  `needed_time` varchar(50) NOT NULL,
  `return_date` varchar(50) NOT NULL,
  `return_time` varchar(50) NOT NULL,
  `car_type` varchar(50) NOT NULL,
  `start_journey` varchar(50) NOT NULL,
  `destination_palce` varchar(50) NOT NULL,
  `journey_purpose` varchar(200) NOT NULL,
  `approval` int(11) NOT NULL,
  `car_no` varchar(20) NOT NULL,
  `driver_name` varchar(50) NOT NULL,
  `helper_name` varchar(50) NOT NULL,
  `admin_approval` varchar(200) NOT NULL,
  `number` int(11) NOT NULL auto_increment,
  PRIMARY KEY  (`number`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `desig`, `email`, `dept`, `phone`, `needed_date`, `needed_time`, `return_date`, `return_time`, `car_type`, `start_journey`, `destination_palce`, `journey_purpose`, `approval`, `car_no`, `driver_name`, `helper_name`, `admin_approval`, `number`) VALUES
('R', 'S', 'r@', 'CSE', '12', '25/8/2014', '3:4PM', '25/9/2016', '9:8PM', 'BUS', 'dfasdfasdf', 'fasdfasf', 'Official', 2, '111', 'Al Mamun', 'Rashed', 'Approved', 11),
('Rakib', 'Student', 'rakib_hasan6@yahoo.com', 'EEE', '01821449288', '25/8/2014', '3:19PM', '25/8/2014', '3:19PM', 'BUS', 'dsasd', 'dasdasdd', 'Official', 2, '', '', '', 'Not Approve', 12),
('Tanjila', 'Student', 'tomby2011@yahoo.com', 'cse', '0175626390', '12/12/2014', '3:00PM', '13/12/2014', '5:30PM', 'bus', 'CSE DEPT', 'Cox-Bazar,Chittagong', 'official', 2, '1111', 'Raja Ahmed', 'Yasir Ahmed', 'Approved', 10),
('Rakib Hasan', 'Student', 'rakib_hasan6@yahoo.com', 'cse', '0182144928', '25/8/2014', '2:30PM', '25/8/2014', '2:30PM', 'bus', 'cse building', 'chittagonj', 'official', 2, '', '', '', 'Not Approve', 13);
