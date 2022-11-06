-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2022 at 10:55 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `earthday`
--
CREATE DATABASE IF NOT EXISTS `earthday` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `earthday`;

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(75) NOT NULL,
  `password_hash` varchar(32) NOT NULL,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `info` text NOT NULL,
  `urgency` enum('Low','Moderate','High','Critical') NOT NULL,
  `farmer_id` int(11) NOT NULL,
  PRIMARY KEY (`event_id`),
  KEY `eventfk` (`farmer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE IF NOT EXISTS `farmer` (
  `farmer_id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `profilePic` varchar(50) NOT NULL,
  `info` text NOT NULL,
  `link` varchar(150) NOT NULL,
  `rating` decimal(10,0) NOT NULL,
  `region` varchar(50) NOT NULL,
  `municipality` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `province` enum('ON','QC','NS','NB','MB','BC','PE','SK','AB','NL','NT','YT','NU') NOT NULL,
  `postal_code` varchar(7) NOT NULL,
  `availabilities_start` date NOT NULL,
  `availabilites_end` date NOT NULL,
  PRIMARY KEY (`farmer_id`),
  KEY `farmerfk` (`account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `farmer_capacity`
--

CREATE TABLE IF NOT EXISTS `farmer_capacity` (
  `farmer_id` int(11) NOT NULL,
  `produce_id` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  PRIMARY KEY (`farmer_id`,`produce_id`),
  KEY `fcapfk2` (`produce_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `foodbank`
--

CREATE TABLE IF NOT EXISTS `foodbank` (
  `foodbank_id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `profilePic` varchar(50) NOT NULL,
  `info` text NOT NULL,
  `link` varchar(150) NOT NULL,
  `rating` decimal(10,0) NOT NULL,
  `region` varchar(50) NOT NULL,
  `municipality` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `province` enum('ON','QC','NS','NB','MB','BC','PE','SK','AB','NL','NT','YT','NU') NOT NULL,
  `max_distance` enum('10km','25km','50km','75km','100km') NOT NULL,
  `availability_start` date NOT NULL,
  `availability_end` date NOT NULL,
  PRIMARY KEY (`foodbank_id`),
  KEY `foodbankfk` (`account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `foodbank_capacity`
--

CREATE TABLE IF NOT EXISTS `foodbank_capacity` (
  `foodbank_id` int(11) NOT NULL,
  `produce_id` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  PRIMARY KEY (`foodbank_id`,`produce_id`),
  KEY `focapfk2` (`produce_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gleaner`
--

CREATE TABLE IF NOT EXISTS `gleaner` (
  `gleaner_id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `profilePic` varchar(50) NOT NULL,
  `bio` text NOT NULL,
  `rating` decimal(10,0) NOT NULL,
  PRIMARY KEY (`gleaner_id`),
  KEY `gleanerfk` (`account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `groups_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `info` text NOT NULL,
  `link` varchar(150) NOT NULL,
  `rating` decimal(10,0) NOT NULL,
  `status` enum('public','private') NOT NULL,
  `gleaner_id` int(11) NOT NULL,
  `region` varchar(50) NOT NULL,
  `municipality` varchar(50) NOT NULL,
  `province` enum('ON','QC','NS','NB','MB','BC','AB','NL','NT','YT','NU') NOT NULL,
  `maxDistance` enum('10km','25km','50km','75km','100km') NOT NULL,
  `availability_start` date NOT NULL,
  `availability_end` date NOT NULL,
  PRIMARY KEY (`groups_id`),
  KEY `groupsfk` (`gleaner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `groups_review`
--

CREATE TABLE IF NOT EXISTS `groups_review` (
  `group_review_id` int(11) NOT NULL AUTO_INCREMENT,
  `groups_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `body` text NOT NULL,
  `datetime` date NOT NULL,
  PRIMARY KEY (`group_review_id`),
  KEY `greviewfk1` (`groups_id`),
  KEY `greviewfk2` (`account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE IF NOT EXISTS `membership` (
  `groups_id` int(11) NOT NULL,
  `gleaner_id` int(11) NOT NULL,
  PRIMARY KEY (`groups_id`,`gleaner_id`),
  KEY `membershipfk2` (`gleaner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `participation`
--

CREATE TABLE IF NOT EXISTS `participation` (
  `event_id` int(11) NOT NULL,
  `groups_id` int(11) NOT NULL,
  `foodbank_id` int(11) NOT NULL,
  PRIMARY KEY (`event_id`,`groups_id`,`foodbank_id`),
  KEY `paricipationfk2` (`groups_id`),
  KEY `paricipationfk3` (`foodbank_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produce`
--

CREATE TABLE IF NOT EXISTS `produce` (
  `produce_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`produce_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `reviewer_id` int(11) NOT NULL,
  `reviewee_id` int(11) NOT NULL,
  `body` text NOT NULL,
  `datetime` date NOT NULL,
  PRIMARY KEY (`review_id`),
  KEY `reviewfk1` (`reviewee_id`),
  KEY `reviewfk2` (`reviewer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `eventfk` FOREIGN KEY (`farmer_id`) REFERENCES `farmer` (`farmer_id`);

--
-- Constraints for table `farmer`
--
ALTER TABLE `farmer`
  ADD CONSTRAINT `farmerfk` FOREIGN KEY (`account_id`) REFERENCES `account` (`account_id`);

--
-- Constraints for table `farmer_capacity`
--
ALTER TABLE `farmer_capacity`
  ADD CONSTRAINT `fcapfk1` FOREIGN KEY (`farmer_id`) REFERENCES `farmer` (`farmer_id`),
  ADD CONSTRAINT `fcapfk2` FOREIGN KEY (`produce_id`) REFERENCES `produce` (`produce_id`);

--
-- Constraints for table `foodbank`
--
ALTER TABLE `foodbank`
  ADD CONSTRAINT `foodbankfk` FOREIGN KEY (`account_id`) REFERENCES `account` (`account_id`);

--
-- Constraints for table `foodbank_capacity`
--
ALTER TABLE `foodbank_capacity`
  ADD CONSTRAINT `focapfk1` FOREIGN KEY (`foodbank_id`) REFERENCES `foodbank` (`foodbank_id`),
  ADD CONSTRAINT `focapfk2` FOREIGN KEY (`produce_id`) REFERENCES `produce` (`produce_id`);

--
-- Constraints for table `gleaner`
--
ALTER TABLE `gleaner`
  ADD CONSTRAINT `gleanerfk` FOREIGN KEY (`account_id`) REFERENCES `account` (`account_id`);

--
-- Constraints for table `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groupsfk` FOREIGN KEY (`gleaner_id`) REFERENCES `gleaner` (`gleaner_id`);

--
-- Constraints for table `groups_review`
--
ALTER TABLE `groups_review`
  ADD CONSTRAINT `greviewfk1` FOREIGN KEY (`groups_id`) REFERENCES `groups` (`groups_id`),
  ADD CONSTRAINT `greviewfk2` FOREIGN KEY (`account_id`) REFERENCES `account` (`account_id`);

--
-- Constraints for table `membership`
--
ALTER TABLE `membership`
  ADD CONSTRAINT `membershipfk1` FOREIGN KEY (`groups_id`) REFERENCES `groups` (`groups_id`),
  ADD CONSTRAINT `membershipfk2` FOREIGN KEY (`gleaner_id`) REFERENCES `gleaner` (`gleaner_id`);

--
-- Constraints for table `participation`
--
ALTER TABLE `participation`
  ADD CONSTRAINT `paricipationfk1` FOREIGN KEY (`event_id`) REFERENCES `event` (`event_id`),
  ADD CONSTRAINT `paricipationfk2` FOREIGN KEY (`groups_id`) REFERENCES `groups` (`groups_id`),
  ADD CONSTRAINT `paricipationfk3` FOREIGN KEY (`foodbank_id`) REFERENCES `foodbank` (`foodbank_id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `reviewfk1` FOREIGN KEY (`reviewee_id`) REFERENCES `account` (`account_id`),
  ADD CONSTRAINT `reviewfk2` FOREIGN KEY (`reviewer_id`) REFERENCES `account` (`account_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
