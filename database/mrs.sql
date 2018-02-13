-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 10, 2018 at 03:57 PM
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
(4, 20034678, '$2y$10$hw/kqehVHNO8Go9e09IreeGWbuZgdFdcPK/czuVC41SNGIwyPg7GS', 0, 'Emma', 'Okech', '1974-01-09', '0713513548', 'emmaokech18@gmail.com', '22', 'Radiology');

-- --------------------------------------------------------

--
-- Table structure for table `DoctorGender`
--

CREATE TABLE `DoctorGender` (
  `Gender_id` int(11) NOT NULL,
  `D_Ssn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `DoctorGender`
--

INSERT INTO `DoctorGender` (`Gender_id`, `D_Ssn`) VALUES
(2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `Gender`
--

CREATE TABLE `Gender` (
  `Gender_id` int(11) NOT NULL,
  `Gender_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Gender`
--

INSERT INTO `Gender` (`Gender_id`, `Gender_name`) VALUES
(1, 'Male'),
(2, 'Female'),
(3, 'Hermaphrodite');

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
(1, '20034678', '$2y$10$hw/kqehVHNO8Go9e09IreeGWbuZgdFdcPK/czuVC41SNGIwyPg7GS', 'Deno', 'Agutu', '1993-04-30', '0727512457', 'deno@gmail.com', '125'),
(2, 'Omollo', '$2y$10$DSuVkZZBy0l0nQ/YeDDKQeTJbWKvqpG1hfFmvb8RwvQSk9EoydlMS', 'James', 'Otieno', '2017-12-23', '0700520718', 'franklinokech@gmail.com', '35 ndhiwa'),
(3, '100', '$2y$10$BBEZ35PjioU3NPCBZQKrTOo4HtYjr9Lw25ZLe45UPyA176MDvE.mO', 'FELIX', 'OMONDI', '2016-06-10', '0713253256', 'felixomondi@gmail.com', '75');

-- --------------------------------------------------------

--
-- Table structure for table `testmodal`
--

CREATE TABLE `testmodal` (
  `Name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Message` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testmodal`
--

INSERT INTO `testmodal` (`Name`, `Email`, `Message`) VALUES
('', '', 'Thanks for tutorials'),
('deni', 'phpzag@gmail.com', 'Thanks for tutorials'),
('Franklin', 'phpzag@gmail.com', 'Thanks for tutorials'),
('gdsgsdgsgdd', 'phpzag@gmail.com', 'Thanks for tutorials'),
('hdshhdshds', 'jsajjajaj', 'hashhashas'),
('Laeeq', 'phpzag@gmail.com', 'Thanks for tutorials'),
('Milka', 'phpzag@gmail.com', 'Thanks for tutorials');

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
-- Indexes for table `DoctorGender`
--
ALTER TABLE `DoctorGender`
  ADD UNIQUE KEY `D_Ssn_2` (`D_Ssn`),
  ADD KEY `Gender_id` (`Gender_id`),
  ADD KEY `D_Ssn` (`D_Ssn`);

--
-- Indexes for table `Gender`
--
ALTER TABLE `Gender`
  ADD PRIMARY KEY (`Gender_id`);

--
-- Indexes for table `Patient`
--
ALTER TABLE `Patient`
  ADD PRIMARY KEY (`P_Ssn`),
  ADD UNIQUE KEY `P_ID` (`P_ID`);

--
-- Indexes for table `testmodal`
--
ALTER TABLE `testmodal`
  ADD PRIMARY KEY (`Name`);

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
  MODIFY `D_Ssn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `Patient`
--
ALTER TABLE `Patient`
  MODIFY `P_Ssn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `DoctorGender`
--
ALTER TABLE `DoctorGender`
  ADD CONSTRAINT `DoctorGender_ibfk_1` FOREIGN KEY (`D_Ssn`) REFERENCES `Doctor` (`D_Ssn`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `DoctorGender_ibfk_2` FOREIGN KEY (`Gender_id`) REFERENCES `Gender` (`Gender_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
