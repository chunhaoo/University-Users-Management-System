-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 28, 2020 at 11:04 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uowkdu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `adminID` int(3) NOT NULL AUTO_INCREMENT,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`adminID`)
) ENGINE=MyISAM AUTO_INCREMENT=112 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `password`) VALUES
(111, '123456');

-- --------------------------------------------------------

--
-- Table structure for table `changes`
--

DROP TABLE IF EXISTS `changes`;
CREATE TABLE IF NOT EXISTS `changes` (
  `staffID` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(50) NOT NULL,
  `biography` varchar(200) NOT NULL,
  `aq` varchar(100) NOT NULL,
  `prof` varchar(100) NOT NULL,
  `ad` varchar(100) NOT NULL,
  `ae` varchar(100) NOT NULL,
  `pub` varchar(100) NOT NULL,
  `ar` varchar(100) NOT NULL,
  `cp` varchar(100) NOT NULL,
  `awards` varchar(100) NOT NULL,
  `pr` varchar(100) NOT NULL,
  `el` varchar(100) NOT NULL,
  `etc` varchar(100) NOT NULL,
  `ea` varchar(100) NOT NULL,
  `cs` varchar(100) NOT NULL,
  `ipr` varchar(100) NOT NULL,
  `sp` varchar(100) NOT NULL,
  `tch` varchar(100) NOT NULL,
  `approval` varchar(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `staffID` int(3) NOT NULL,
  `password` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(50) NOT NULL,
  `biography` varchar(200) NOT NULL,
  `aq` varchar(200) NOT NULL,
  `prof` varchar(200) NOT NULL,
  `ad` varchar(200) NOT NULL,
  `ae` varchar(200) NOT NULL,
  `pub` varchar(200) NOT NULL,
  `ar` varchar(200) NOT NULL,
  `cp` varchar(200) NOT NULL,
  `awards` varchar(200) NOT NULL,
  `pr` varchar(200) NOT NULL,
  `el` varchar(200) NOT NULL,
  `etc` varchar(200) NOT NULL,
  `ea` varchar(200) NOT NULL,
  `cs` varchar(200) NOT NULL,
  `ipr` varchar(200) NOT NULL,
  `sp` varchar(200) NOT NULL,
  `tch` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffID`, `password`, `name`, `age`, `gender`, `email`, `biography`, `aq`, `prof`, `ad`, `ae`, `pub`, `ar`, `cp`, `awards`, `pr`, `el`, `etc`, `ea`, `cs`, `ipr`, `sp`, `tch`) VALUES
(123, '123456', 'Chin Chun Hao', 21, 'Male', '0126299@kdu-online.com', 'Mr Chin is a Senior Lecturer of UOW Malaysia KDU University College.', 'Bachelor of Software Engineering, UOW KDU Glenmarie', 'UOW KDU University Glenmarie, Lecturer, 2020Google, LLC, Software Enginner, 2017', 'Role: Head of School - Computing & Creative MediaDuration: 04 Sep 2018-present', 'Website Development, Mobile Programming', '2020, Durian Species Classification Application using Deep Learning.', 'Mobile Programming, Web Programming, Machine Learning', 'Conference Crew/ComitteeTitle: Spearheading 2020 NanoSecEdu Track, Duration: 2019', 'Hackathon, 2018, Third Place', 'none', 'none', 'none', 'none', 'none', 'Durian Species Classification Application, Mobile Application, 2020', 'Coached finalist for 2019 EY Asia-Pacific Hackathon', 'none'),
(321, '123456', 'John Doe', 60, 'Male', 'john_doe@kdu-online.com', 'Hi, I am the head of SCCA.', 'Bachelor of Mass Communication.', 'Film Director', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'Class: Photography, Semester: Fall, Hours: 48, Num of Students: 20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
