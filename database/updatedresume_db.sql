-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2016 at 02:34 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `complain_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `achiev`
--

CREATE TABLE IF NOT EXISTS `achiev` (
  `cid` int(11) NOT NULL,
  `achiev` varchar(1000) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `experi`
--

CREATE TABLE IF NOT EXISTS `experi` (
  `cid` int(11) NOT NULL,
  `experidetails` varchar(1000) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `parti`
--

CREATE TABLE IF NOT EXISTS `parti` (
  `cid` int(11) NOT NULL,
  `parti` varchar(1000) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `proj`
--

CREATE TABLE IF NOT EXISTS `proj` (
  `cid` int(11) NOT NULL,
  `proj` varchar(1000) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `refere`
--

CREATE TABLE IF NOT EXISTS `refere` (
  `cid` int(10) NOT NULL,
  `refere` varchar(1000) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complains`
--

CREATE TABLE IF NOT EXISTS `tbl_complains` (
  `cid` int(10) NOT NULL AUTO_INCREMENT,
  `cust_id` int(10) NOT NULL,
  `cust_name` varchar(40) NOT NULL,
  `comp_type` varchar(40) NOT NULL,
  `comp_title` varchar(200) NOT NULL,
  `comp_desc` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `eng_id` int(10) NOT NULL,
  `eng_name` varchar(40) NOT NULL,
  `eng_comment` varchar(240) NOT NULL,
  `create_date` datetime NOT NULL,
  `close_date` datetime NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `cid` int(10) NOT NULL AUTO_INCREMENT,
  `cname` varchar(40) NOT NULL,
  `cpass` varchar(40) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(30) NOT NULL,
  `c_mobile` varchar(15) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_educational`
--

CREATE TABLE IF NOT EXISTS `tbl_educational` (
  `cid` int(10) NOT NULL,
  `ccollege` varchar(40) NOT NULL,
  `cdegree` varchar(40) NOT NULL,
  `csubject` varchar(200) NOT NULL,
  `cyears` int(10) NOT NULL,
  `cuniversity` varchar(40) NOT NULL,
  `cobtainedMarks` int(10) NOT NULL,
  `ctotalMarks` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_engineer`
--

CREATE TABLE IF NOT EXISTS `tbl_engineer` (
  `eid` int(10) NOT NULL AUTO_INCREMENT,
  `ename` varchar(40) NOT NULL,
  `epass` varchar(40) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(40) NOT NULL,
  `e_mobile` varchar(20) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_personal`
--

CREATE TABLE IF NOT EXISTS `tbl_personal` (
  `cid` int(10) NOT NULL,
  `pname` varchar(40) NOT NULL,
  `pfname` varchar(40) NOT NULL,
  `pgender` varchar(200) NOT NULL,
  `pnation` varchar(10) NOT NULL,
  `plang` varchar(40) NOT NULL,
  `phobby` varchar(10) NOT NULL,
  `pdoh` varchar(10) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_plans`
--

CREATE TABLE IF NOT EXISTS `tbl_plans` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cid` int(10) NOT NULL,
  `plans` varchar(255) NOT NULL,
  `amt` double NOT NULL,
  `plan_date` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier`
--

CREATE TABLE IF NOT EXISTS `tbl_supplier` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(40) NOT NULL,
  `spass` varchar(40) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(40) NOT NULL,
  `s_mobile` varchar(15) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
