-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2021 at 08:13 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karaokedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `BRANCH_ID` int(9) NOT NULL,
  `BRANCHNAME` varchar(36) NOT NULL,
  `BRANCHTYPE` varchar(36) NOT NULL,
  `ADDRESS` varchar(48) NOT NULL,
  `DATEBUILT` date DEFAULT NULL,
  `STATUS` enum('Active','Inactive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `byhour`
--

CREATE TABLE `byhour` (
  `CARDTRANSACTION_ID` int(9) NOT NULL,
  `CARDNUMBER` int(9) NOT NULL,
  `DATEANDTIME` datetime NOT NULL,
  `BRANCH_ID` int(9) NOT NULL,
  `KARAOKEBOX_ID` int(9) NOT NULL,
  `HOURPRICE_ID` int(9) NOT NULL,
  `ROOM_ID` int(9) NOT NULL,
  `COST` double(9,2) NOT NULL,
  `LOGGEDOUT` enum('T','F') NOT NULL,
  `HOURS` float NOT NULL,
  `HOURSSPENT` float DEFAULT NULL,
  `CASHREGISTER_ID` int(9) NOT NULL,
  `STATUS` enum('Unverified','Verified','Deleted') NOT NULL DEFAULT 'Unverified'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bysong`
--

CREATE TABLE `bysong` (
  `CARDTRANSACTION_ID` int(9) NOT NULL,
  `CARDNUMBER` int(9) NOT NULL,
  `DATEANDTIME` datetime NOT NULL,
  `BRANCH_ID` int(9) NOT NULL,
  `KARAOKEBOX_ID` int(9) NOT NULL,
  `SONGPRICE_ID` int(9) NOT NULL,
  `COST` double(9,2) NOT NULL,
  `STATUS` enum('Unverified','Verified','Deleted') NOT NULL DEFAULT 'Unverified'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `CARDNUMBER` int(9) NOT NULL,
  `VIP` enum('Y','N') NOT NULL,
  `BALANCE` double(9,2) NOT NULL,
  `DATEREGISTERED` date DEFAULT NULL,
  `LASTUPDATED` date DEFAULT NULL,
  `STATUS` enum('Unregistered','Registered','Expired') NOT NULL DEFAULT 'Unregistered'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cashierclerk`
--

CREATE TABLE `cashierclerk` (
  `POSITION_ID` int(9) NOT NULL,
  `POSITIONNAME` varchar(16) NOT NULL,
  `BRANCH_ID` int(9) NOT NULL,
  `SALARY` double(9,2) NOT NULL,
  `CASHREGISTER_ID` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cashregister`
--

CREATE TABLE `cashregister` (
  `CASHREGISTER_ID` int(9) NOT NULL,
  `BRANCH_ID` int(9) NOT NULL,
  `DATEINSTALLED` date NOT NULL,
  `STATUS` enum('Active','Inactive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EMPLOYEE_ID` int(9) NOT NULL,
  `FIRSTNAME` varchar(36) NOT NULL,
  `MIDDLENAME` varchar(36) DEFAULT NULL,
  `LASTNAME` varchar(36) NOT NULL,
  `GENDER` enum('F','M','Other') NOT NULL,
  `OTHERGENDER` varchar(24) DEFAULT NULL,
  `HOMEADRESS` varchar(36) NOT NULL,
  `PROVINCIALADDRESS` varchar(36) NOT NULL,
  `ZIPCODE` int(4) DEFAULT NULL,
  `TELEPHONE` char(13) NOT NULL,
  `MOBILEPHONE` char(13) NOT NULL,
  `EMAIL` varchar(36) NOT NULL,
  `DATEEMPLOYED` date NOT NULL,
  `BRANCH_ID` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee_positionlist`
--

CREATE TABLE `employee_positionlist` (
  `EMP_POS_ID` int(9) NOT NULL,
  `POSITION_ID` int(9) NOT NULL,
  `EMPLOYEE_ID` int(9) NOT NULL,
  `DATESTART` date NOT NULL,
  `DATEEND` date DEFAULT NULL,
  `TIMESTART` time NOT NULL,
  `TIMEEND` time NOT NULL,
  `STATUS` enum('Active','Inactive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hourprice`
--

CREATE TABLE `hourprice` (
  `HOURPRICE_ID` int(9) NOT NULL,
  `PRICE` double(9,2) NOT NULL,
  `VIPPRICE` double(9,2) NOT NULL,
  `BRANCH_ID` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `karaokebox`
--

CREATE TABLE `karaokebox` (
  `KARAOKEBOX_ID` int(9) NOT NULL,
  `ROOM_ID` int(9) NOT NULL,
  `DATEINSTALLED` date DEFAULT NULL,
  `STATUS` enum('Active','Inactive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `newcard`
--

CREATE TABLE `newcard` (
  `CARDTRANSACTION_ID` int(9) NOT NULL,
  `CARDNUMBER` int(9) NOT NULL,
  `BRANCH_ID` int(9) NOT NULL,
  `DATEANDTIME` datetime NOT NULL,
  `NEWCARDPRICE_ID` int(9) NOT NULL,
  `CASHREGISTER_ID` int(9) NOT NULL,
  `COST` double(9,2) NOT NULL,
  `STATUS` enum('Unverified','Verified','Deleted') NOT NULL DEFAULT 'Unverified'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `newcardprice`
--

CREATE TABLE `newcardprice` (
  `NEWCARDPRICE_ID` int(9) NOT NULL,
  `PRICE` double(9,2) NOT NULL,
  `DATEISSUED` date NOT NULL,
  `BRANCH_ID` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `refillbalance`
--

CREATE TABLE `refillbalance` (
  `CARDTRANSACTION_ID` int(9) NOT NULL,
  `CARDNUMBER` int(9) NOT NULL,
  `BRANCH_ID` int(9) NOT NULL,
  `DATEANDTIME` datetime NOT NULL,
  `DEPOSITAMOUNT` double(9,2) NOT NULL,
  `CASHREGISTER_ID` int(9) NOT NULL,
  `STATUS` enum('Unverified','Verified','Deleted') NOT NULL DEFAULT 'Unverified'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `ROOM_ID` int(9) NOT NULL,
  `ROOMNAME` varchar(48) NOT NULL,
  `ROOMNUMBER` int(11) NOT NULL,
  `FLOOR` int(11) NOT NULL,
  `BRANCH_ID` int(9) NOT NULL,
  `STATUS` enum('Active','Inactive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `songprice`
--

CREATE TABLE `songprice` (
  `SONGPRICE_ID` int(9) NOT NULL,
  `PRICE` double(9,2) NOT NULL,
  `VIPRPICE` double(9,2) NOT NULL,
  `BRANCH_ID` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vipregistration`
--

CREATE TABLE `vipregistration` (
  `CARDTRANSACTION_ID` int(9) NOT NULL,
  `CARDNUMBER` int(9) NOT NULL,
  `BRANCH_ID` int(9) NOT NULL,
  `DATEANDTIME` double(9,2) NOT NULL,
  `VIPPRICE_ID` int(9) NOT NULL,
  `CASHREGISTER_ID` int(9) NOT NULL,
  `COST` double(9,2) NOT NULL,
  `STATUS` enum('Unverified','Verified','Deleted') NOT NULL DEFAULT 'Unverified'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vipregistrationprice`
--

CREATE TABLE `vipregistrationprice` (
  `VIPPRICE_ID` int(9) NOT NULL,
  `PRICE` double(9,2) NOT NULL,
  `DATEISSUED` date NOT NULL,
  `BRANCH_ID` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`BRANCH_ID`);

--
-- Indexes for table `byhour`
--
ALTER TABLE `byhour`
  ADD PRIMARY KEY (`CARDTRANSACTION_ID`),
  ADD KEY `BYHOUR_FK1` (`KARAOKEBOX_ID`),
  ADD KEY `BYHOUR_FK2` (`HOURPRICE_ID`),
  ADD KEY `BYHOUR_FK3` (`CASHREGISTER_ID`),
  ADD KEY `BYHOUR_FK4` (`CARDNUMBER`),
  ADD KEY `BYHOUR_FK5` (`BRANCH_ID`),
  ADD KEY `BYHOUR_FK6` (`ROOM_ID`);

--
-- Indexes for table `bysong`
--
ALTER TABLE `bysong`
  ADD PRIMARY KEY (`CARDTRANSACTION_ID`),
  ADD KEY `BYSONG_FK1` (`KARAOKEBOX_ID`),
  ADD KEY `BYSONG_FK2` (`SONGPRICE_ID`),
  ADD KEY `BYSONG_FK3` (`BRANCH_ID`),
  ADD KEY `BYSONG_FK4` (`CARDNUMBER`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`CARDNUMBER`);

--
-- Indexes for table `cashierclerk`
--
ALTER TABLE `cashierclerk`
  ADD PRIMARY KEY (`POSITION_ID`),
  ADD KEY `CASHIERCLERK_FK1` (`BRANCH_ID`),
  ADD KEY `CASHIERCLERK_FK2` (`CASHREGISTER_ID`);

--
-- Indexes for table `cashregister`
--
ALTER TABLE `cashregister`
  ADD PRIMARY KEY (`CASHREGISTER_ID`),
  ADD KEY `CASHREGISTER_FK` (`BRANCH_ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EMPLOYEE_ID`),
  ADD KEY `EMPLOYEE_FK` (`BRANCH_ID`);

--
-- Indexes for table `employee_positionlist`
--
ALTER TABLE `employee_positionlist`
  ADD PRIMARY KEY (`EMP_POS_ID`),
  ADD KEY `POSITIONLIST_FK1` (`POSITION_ID`),
  ADD KEY `POSITIONLIST_FK2` (`EMPLOYEE_ID`);

--
-- Indexes for table `hourprice`
--
ALTER TABLE `hourprice`
  ADD PRIMARY KEY (`HOURPRICE_ID`),
  ADD KEY `HOURPRICE_FK` (`BRANCH_ID`);

--
-- Indexes for table `karaokebox`
--
ALTER TABLE `karaokebox`
  ADD PRIMARY KEY (`KARAOKEBOX_ID`),
  ADD KEY `KARAOKEBOX_FK` (`ROOM_ID`);

--
-- Indexes for table `newcard`
--
ALTER TABLE `newcard`
  ADD PRIMARY KEY (`CARDTRANSACTION_ID`),
  ADD KEY `NEWCARD_FK1` (`BRANCH_ID`),
  ADD KEY `NEWCARD_FK2` (`CASHREGISTER_ID`),
  ADD KEY `NEWCARD_FK3` (`NEWCARDPRICE_ID`),
  ADD KEY `NEWCARD_FK4` (`CARDNUMBER`);

--
-- Indexes for table `newcardprice`
--
ALTER TABLE `newcardprice`
  ADD PRIMARY KEY (`NEWCARDPRICE_ID`),
  ADD KEY `NEWCARDPRICE_FK` (`BRANCH_ID`);

--
-- Indexes for table `refillbalance`
--
ALTER TABLE `refillbalance`
  ADD PRIMARY KEY (`CARDTRANSACTION_ID`),
  ADD KEY `REFILLBALANCE_FK2` (`CASHREGISTER_ID`),
  ADD KEY `REFILLBALANCE_FK3` (`CARDNUMBER`),
  ADD KEY `REFILLBALANCE_FK4` (`BRANCH_ID`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`ROOM_ID`),
  ADD KEY `ROOM_FK` (`BRANCH_ID`);

--
-- Indexes for table `songprice`
--
ALTER TABLE `songprice`
  ADD PRIMARY KEY (`SONGPRICE_ID`),
  ADD KEY `SONGPRICE_FK` (`BRANCH_ID`);

--
-- Indexes for table `vipregistration`
--
ALTER TABLE `vipregistration`
  ADD PRIMARY KEY (`CARDTRANSACTION_ID`),
  ADD KEY `VIPREGISTRATION_FK1` (`BRANCH_ID`),
  ADD KEY `VIPREGISTRATION_FK2` (`CASHREGISTER_ID`),
  ADD KEY `VIPREGISTRATION_FK3` (`VIPPRICE_ID`),
  ADD KEY `VIPREGISTRATION_FK4` (`CARDNUMBER`);

--
-- Indexes for table `vipregistrationprice`
--
ALTER TABLE `vipregistrationprice`
  ADD PRIMARY KEY (`VIPPRICE_ID`),
  ADD KEY `VIPREGISTRATIONPRICE_FK` (`BRANCH_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `byhour`
--
ALTER TABLE `byhour`
  ADD CONSTRAINT `BYHOUR_FK1` FOREIGN KEY (`KARAOKEBOX_ID`) REFERENCES `karaokebox` (`KARAOKEBOX_ID`),
  ADD CONSTRAINT `BYHOUR_FK2` FOREIGN KEY (`HOURPRICE_ID`) REFERENCES `hourprice` (`HOURPRICE_ID`),
  ADD CONSTRAINT `BYHOUR_FK3` FOREIGN KEY (`CASHREGISTER_ID`) REFERENCES `cashregister` (`CASHREGISTER_ID`),
  ADD CONSTRAINT `BYHOUR_FK4` FOREIGN KEY (`CARDNUMBER`) REFERENCES `card` (`CARDNUMBER`),
  ADD CONSTRAINT `BYHOUR_FK5` FOREIGN KEY (`BRANCH_ID`) REFERENCES `branch` (`BRANCH_ID`),
  ADD CONSTRAINT `BYHOUR_FK6` FOREIGN KEY (`ROOM_ID`) REFERENCES `room` (`ROOM_ID`);

--
-- Constraints for table `bysong`
--
ALTER TABLE `bysong`
  ADD CONSTRAINT `BYSONG_FK1` FOREIGN KEY (`KARAOKEBOX_ID`) REFERENCES `karaokebox` (`KARAOKEBOX_ID`),
  ADD CONSTRAINT `BYSONG_FK2` FOREIGN KEY (`SONGPRICE_ID`) REFERENCES `songprice` (`SONGPRICE_ID`),
  ADD CONSTRAINT `BYSONG_FK3` FOREIGN KEY (`BRANCH_ID`) REFERENCES `branch` (`BRANCH_ID`),
  ADD CONSTRAINT `BYSONG_FK4` FOREIGN KEY (`CARDNUMBER`) REFERENCES `card` (`CARDNUMBER`);

--
-- Constraints for table `cashierclerk`
--
ALTER TABLE `cashierclerk`
  ADD CONSTRAINT `CASHIERCLERK_FK1` FOREIGN KEY (`BRANCH_ID`) REFERENCES `branch` (`BRANCH_ID`),
  ADD CONSTRAINT `CASHIERCLERK_FK2` FOREIGN KEY (`CASHREGISTER_ID`) REFERENCES `cashregister` (`CASHREGISTER_ID`);

--
-- Constraints for table `cashregister`
--
ALTER TABLE `cashregister`
  ADD CONSTRAINT `CASHREGISTER_FK` FOREIGN KEY (`BRANCH_ID`) REFERENCES `branch` (`BRANCH_ID`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `EMPLOYEE_FK` FOREIGN KEY (`BRANCH_ID`) REFERENCES `branch` (`BRANCH_ID`);

--
-- Constraints for table `employee_positionlist`
--
ALTER TABLE `employee_positionlist`
  ADD CONSTRAINT `POSITIONLIST_FK1` FOREIGN KEY (`POSITION_ID`) REFERENCES `cashierclerk` (`POSITION_ID`),
  ADD CONSTRAINT `POSITIONLIST_FK2` FOREIGN KEY (`EMPLOYEE_ID`) REFERENCES `employee` (`EMPLOYEE_ID`);

--
-- Constraints for table `hourprice`
--
ALTER TABLE `hourprice`
  ADD CONSTRAINT `HOURPRICE_FK` FOREIGN KEY (`BRANCH_ID`) REFERENCES `branch` (`BRANCH_ID`);

--
-- Constraints for table `karaokebox`
--
ALTER TABLE `karaokebox`
  ADD CONSTRAINT `KARAOKEBOX_FK` FOREIGN KEY (`ROOM_ID`) REFERENCES `room` (`ROOM_ID`);

--
-- Constraints for table `newcard`
--
ALTER TABLE `newcard`
  ADD CONSTRAINT `NEWCARD_FK1` FOREIGN KEY (`BRANCH_ID`) REFERENCES `branch` (`BRANCH_ID`),
  ADD CONSTRAINT `NEWCARD_FK2` FOREIGN KEY (`CASHREGISTER_ID`) REFERENCES `cashregister` (`CASHREGISTER_ID`),
  ADD CONSTRAINT `NEWCARD_FK3` FOREIGN KEY (`NEWCARDPRICE_ID`) REFERENCES `newcardprice` (`NEWCARDPRICE_ID`),
  ADD CONSTRAINT `NEWCARD_FK4` FOREIGN KEY (`CARDNUMBER`) REFERENCES `card` (`CARDNUMBER`);

--
-- Constraints for table `newcardprice`
--
ALTER TABLE `newcardprice`
  ADD CONSTRAINT `NEWCARDPRICE_FK` FOREIGN KEY (`BRANCH_ID`) REFERENCES `branch` (`BRANCH_ID`);

--
-- Constraints for table `refillbalance`
--
ALTER TABLE `refillbalance`
  ADD CONSTRAINT `REFILLBALANCE_FK2` FOREIGN KEY (`CASHREGISTER_ID`) REFERENCES `cashregister` (`CASHREGISTER_ID`),
  ADD CONSTRAINT `REFILLBALANCE_FK3` FOREIGN KEY (`CARDNUMBER`) REFERENCES `card` (`CARDNUMBER`),
  ADD CONSTRAINT `REFILLBALANCE_FK4` FOREIGN KEY (`BRANCH_ID`) REFERENCES `branch` (`BRANCH_ID`);

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `ROOM_FK` FOREIGN KEY (`BRANCH_ID`) REFERENCES `branch` (`BRANCH_ID`);

--
-- Constraints for table `songprice`
--
ALTER TABLE `songprice`
  ADD CONSTRAINT `SONGPRICE_FK` FOREIGN KEY (`BRANCH_ID`) REFERENCES `branch` (`BRANCH_ID`);

--
-- Constraints for table `vipregistration`
--
ALTER TABLE `vipregistration`
  ADD CONSTRAINT `VIPREGISTRATION_FK1` FOREIGN KEY (`BRANCH_ID`) REFERENCES `branch` (`BRANCH_ID`),
  ADD CONSTRAINT `VIPREGISTRATION_FK2` FOREIGN KEY (`CASHREGISTER_ID`) REFERENCES `cashregister` (`CASHREGISTER_ID`),
  ADD CONSTRAINT `VIPREGISTRATION_FK3` FOREIGN KEY (`VIPPRICE_ID`) REFERENCES `vipregistrationprice` (`VIPPRICE_ID`),
  ADD CONSTRAINT `VIPREGISTRATION_FK4` FOREIGN KEY (`CARDNUMBER`) REFERENCES `card` (`CARDNUMBER`);

--
-- Constraints for table `vipregistrationprice`
--
ALTER TABLE `vipregistrationprice`
  ADD CONSTRAINT `VIPREGISTRATIONPRICE_FK` FOREIGN KEY (`BRANCH_ID`) REFERENCES `branch` (`BRANCH_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
