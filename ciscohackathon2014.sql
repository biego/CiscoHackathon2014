-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2014 at 11:23 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ciscohackathon2014`
--
CREATE DATABASE IF NOT EXISTS `ciscohackathon2014` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ciscohackathon2014`;

-- --------------------------------------------------------

--
-- Table structure for table `app_input`
--

CREATE TABLE IF NOT EXISTS `app_input` (
  `appid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `location` text NOT NULL,
  `phone_nr` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `crime_type`
--

CREATE TABLE IF NOT EXISTS `crime_type` (
  `cid` int(11) NOT NULL,
  `name` text NOT NULL,
  `urgency` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crime_type`
--

INSERT INTO `crime_type` (`cid`, `name`, `urgency`) VALUES
(1, 'Vandalism', 1),
(2, 'Robbery', 3),
(3, 'Drug abuse', 3),
(4, 'Metal theft', 2);

-- --------------------------------------------------------

--
-- Table structure for table `emergencies`
--

CREATE TABLE IF NOT EXISTS `emergencies` (
  `eid` int(11) NOT NULL,
  `location` text NOT NULL,
  `time` date NOT NULL,
  `phone_nr` int(11) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emergencies`
--

INSERT INTO `emergencies` (`eid`, `location`, `time`, `phone_nr`, `cid`) VALUES
(1, 'New Street', '2014-10-01', 2147483647, 3),
(2, 'University station', '2014-08-17', 771117546, 3),
(3, 'Selly Oak Station', '0000-00-00', 771337546, 4),
(4, 'Five Ways', '0000-00-00', 771117546, 1),
(5, 'Random station', '0000-00-00', 770017546, 2);

-- --------------------------------------------------------

--
-- Table structure for table `evidence`
--

CREATE TABLE IF NOT EXISTS `evidence` (
  `eid` int(11) NOT NULL,
  `name` text NOT NULL,
  `source` text NOT NULL,
  `type` text NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evidence`
--

INSERT INTO `evidence` (`eid`, `name`, `source`, `type`, `pid`) VALUES
(1, 'Jane Doe', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wC', 'Photo', 1);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE IF NOT EXISTS `media` (
  `mid` int(11) NOT NULL,
  `appid` int(11) NOT NULL,
  `type` text NOT NULL,
  `source` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `police_report`
--

CREATE TABLE IF NOT EXISTS `police_report` (
  `pid` int(11) NOT NULL,
  `date` date NOT NULL,
  `cid` int(11) NOT NULL,
  `location` text NOT NULL,
  `describtion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `police_report`
--

INSERT INTO `police_report` (`pid`, `date`, `cid`, `location`, `describtion`) VALUES
(1, '2014-10-10', 3, 'New Street Station', 'A group of students arrested for drinking on the public transport'),
(2, '2014-10-19', 4, 'Selly Oak station', 'Former IRA Chief of Staff was spotted stealing metal railings on the train'),
(3, '2014-08-11', 2, 'University Station', 'A student reported a stolen laptop as he was taking a train to London from Edinburgh');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL,
  `phone_nr` int(11) NOT NULL,
  `password` text NOT NULL,
  `type` text NOT NULL,
  `appid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `witness_report`
--

CREATE TABLE IF NOT EXISTS `witness_report` (
  `wid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `date` date NOT NULL,
  `location` text NOT NULL,
  `statement` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `witness_report`
--

INSERT INTO `witness_report` (`wid`, `pid`, `date`, `location`, `statement`) VALUES
(1, 1, '2014-10-11', 'New Street station', 'Jane Doe has reported a group of students drinking and shouting on the train going from University station to New Street station'),
(2, 1, '2014-10-12', 'Five Ways', 'Dan Ghica has identified three of University of Birmingham students that were accused of drug abuse on the train from University station to New Street'),
(3, 2, '2014-10-23', 'Selly Oak station', 'Poppie Simmonds has reported seeing a man in his 50-ies stealing metal railings from the train going towards Selly Oak station');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_input`
--
ALTER TABLE `app_input`
 ADD PRIMARY KEY (`appid`), ADD KEY `userid` (`userid`), ADD KEY `pid` (`pid`);

--
-- Indexes for table `crime_type`
--
ALTER TABLE `crime_type`
 ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `emergencies`
--
ALTER TABLE `emergencies`
 ADD PRIMARY KEY (`eid`), ADD KEY `cid` (`cid`);

--
-- Indexes for table `evidence`
--
ALTER TABLE `evidence`
 ADD PRIMARY KEY (`eid`), ADD KEY `pid` (`pid`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
 ADD PRIMARY KEY (`mid`), ADD KEY `appid` (`appid`);

--
-- Indexes for table `police_report`
--
ALTER TABLE `police_report`
 ADD PRIMARY KEY (`pid`), ADD KEY `cid` (`cid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`userid`), ADD KEY `appid` (`appid`);

--
-- Indexes for table `witness_report`
--
ALTER TABLE `witness_report`
 ADD PRIMARY KEY (`wid`), ADD KEY `pid` (`pid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `app_input`
--
ALTER TABLE `app_input`
ADD CONSTRAINT `app_input_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`),
ADD CONSTRAINT `app_input_ibfk_3` FOREIGN KEY (`pid`) REFERENCES `police_report` (`pid`);

--
-- Constraints for table `emergencies`
--
ALTER TABLE `emergencies`
ADD CONSTRAINT `emergencies_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `crime_type` (`cid`),
ADD CONSTRAINT `emergencies_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `crime_type` (`cid`);

--
-- Constraints for table `evidence`
--
ALTER TABLE `evidence`
ADD CONSTRAINT `evidence_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `police_report` (`pid`);

--
-- Constraints for table `media`
--
ALTER TABLE `media`
ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`appid`) REFERENCES `app_input` (`appid`);

--
-- Constraints for table `police_report`
--
ALTER TABLE `police_report`
ADD CONSTRAINT `police_report_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `crime_type` (`cid`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`appid`) REFERENCES `app_input` (`appid`);

--
-- Constraints for table `witness_report`
--
ALTER TABLE `witness_report`
ADD CONSTRAINT `witness_report_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `police_report` (`pid`),
ADD CONSTRAINT `witness_report_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `police_report` (`pid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
