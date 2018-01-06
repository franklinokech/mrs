-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 06, 2018 at 10:10 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_ssn` int(11) NOT NULL,
  `username` varchar(25) NOT NULL DEFAULT 'admin',
  `password` varchar(64) NOT NULL DEFAULT '$2y$10$4iwtNVpSrp9Qb4O/i4QfAes.lq9g2R4hmRekY1JU56IT142wJJv8q'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_ssn`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$4iwtNVpSrp9Qb4O/i4QfAes.lq9g2R4hmRekY1JU56IT142wJJv8q');

-- --------------------------------------------------------

--
-- Table structure for table `Doctor`
--

CREATE TABLE `Doctor` (
  `D_Ssn` int(11) NOT NULL,
  `D_Id` int(15) NOT NULL DEFAULT '0',
  `D_Password` varchar(64) NOT NULL DEFAULT '$2y$10$hw/kqehVHNO8Go9e09IreeGWbuZgdFdcPK/czuVC41SNGIwyPg7GS',
  `P_Status` int(11) NOT NULL DEFAULT '0',
  `D_Fname` varchar(30) NOT NULL,
  `D_Lname` varchar(30) NOT NULL,
  `D_DOB` date NOT NULL,
  `D_Phone` varchar(20) NOT NULL,
  `D_Email` varchar(320) NOT NULL,
  `D_Address` text NOT NULL,
  `D_Office` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='table for registering a new doctor';

--
-- Dumping data for table `Doctor`
--

INSERT INTO `Doctor` (`D_Ssn`, `D_Id`, `D_Password`, `P_Status`, `D_Fname`, `D_Lname`, `D_DOB`, `D_Phone`, `D_Email`, `D_Address`, `D_Office`) VALUES
(1, 31322663, '$2y$10$hw/kqehVHNO8Go9e09IreeGWbuZgdFdcPK/czuVC41SNGIwyPg7GS', 0, 'Franklin', 'Okech', '1994-10-31', '0700520718', 'frank@gmail.com', '855', 'Radiology');

-- --------------------------------------------------------

--
-- Table structure for table `Patient`
--

CREATE TABLE `Patient` (
  `P_Ssn` int(11) NOT NULL,
  `P_ID` varchar(30) NOT NULL,
  `P_Password` varchar(64) NOT NULL,
  `P_Fname` varchar(30) NOT NULL,
  `P_Lname` varchar(30) NOT NULL,
  `P_DOB` date NOT NULL,
  `P_Phone` varchar(20) NOT NULL,
  `P_Email` varchar(320) NOT NULL,
  `P_Address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Patient`
--

INSERT INTO `Patient` (`P_Ssn`, `P_ID`, `P_Password`, `P_Fname`, `P_Lname`, `P_DOB`, `P_Phone`, `P_Email`, `P_Address`) VALUES
(1, '20034678', '$2y$10$hw/kqehVHNO8Go9e09IreeGWbuZgdFdcPK/czuVC41SNGIwyPg7GS', 'Deno', 'Agutu', '1993-04-30', '0727512457', 'deno@gmail.com', '125');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_ssn`);

--
-- Indexes for table `Doctor`
--
ALTER TABLE `Doctor`
  ADD PRIMARY KEY (`D_Ssn`),
  ADD UNIQUE KEY `D_Id` (`D_Id`),
  ADD UNIQUE KEY `D_Id_2` (`D_Id`);

--
-- Indexes for table `Patient`
--
ALTER TABLE `Patient`
  ADD PRIMARY KEY (`P_Ssn`),
  ADD UNIQUE KEY `P_ID` (`P_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_ssn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Doctor`
--
ALTER TABLE `Doctor`
  MODIFY `D_Ssn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Patient`
--
ALTER TABLE `Patient`
  MODIFY `P_Ssn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
