-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2024 at 01:39 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hana`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Doctor_ID` int(5) NOT NULL,
  `Doctor_Name` varchar(100) NOT NULL,
  `Doctor_Tel` varchar(10) NOT NULL,
  `Doctor_Position` varchar(50) NOT NULL,
  `Doctor_Time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Doctor_ID`, `Doctor_Name`, `Doctor_Tel`, `Doctor_Position`, `Doctor_Time`) VALUES
(10100, 'ดนัย สุชาติ', '0925262626', 'สัตวแพทย์ชำนาญการ', '16:00');

-- --------------------------------------------------------

--
-- Table structure for table `login_hana`
--

CREATE TABLE `login_hana` (
  `id` int(5) NOT NULL,
  `Doctor_ID` varchar(5) NOT NULL,
  `Doctor_Name` varchar(50) NOT NULL,
  `Doctor_Tel` varchar(10) NOT NULL,
  `Doctor_Position` varchar(50) NOT NULL,
  `Doctor_Time` varchar(50) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login_hana`
--

INSERT INTO `login_hana` (`id`, `Doctor_ID`, `Doctor_Name`, `Doctor_Tel`, `Doctor_Position`, `Doctor_Time`, `Username`, `Password`) VALUES
(3, '', '', '', '', '', 'ดนัย สุชาต', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `medicine_ID` int(5) NOT NULL,
  `medicine_Name` varchar(50) NOT NULL,
  `Type_of_medicine_ID` int(5) NOT NULL,
  `medicine_Price` int(10) NOT NULL,
  `medicine_TotalNumber` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pet`
--

CREATE TABLE `pet` (
  `pet_ID` int(5) NOT NULL,
  `pet_Name` varchar(50) NOT NULL,
  `pet_Age` int(10) NOT NULL,
  `pet_Species` varchar(50) NOT NULL,
  `Type_of_pet_ID` int(5) NOT NULL,
  `pet_owner_ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pet_owner`
--

CREATE TABLE `pet_owner` (
  `pet_owner_ID` int(5) NOT NULL,
  `pet_owner_Name` varchar(50) NOT NULL,
  `pet_owner_Tel` varchar(10) NOT NULL,
  `pet_owner_Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `treatment_ID` int(5) NOT NULL,
  `treatment_Name` varchar(50) NOT NULL,
  `treatment_Detail` varchar(250) NOT NULL,
  `Doctor_ID` int(5) NOT NULL,
  `pet_ID` int(5) NOT NULL,
  `treatment_Duration` int(10) NOT NULL,
  `medicine_ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`treatment_ID`, `treatment_Name`, `treatment_Detail`, `Doctor_ID`, `pet_ID`, `treatment_Duration`, `medicine_ID`) VALUES
(12345, 'การทำวัคซีนไข้หวัดนกในนกแก้ว', 'การรักษาโรคหอบหืดในแมวด้วยยาพ่น', 10100, 22222, 90, 55555),
(56310, 'การบำบัดโรคข้ออักเสบในสุนัข', 'การดูแลสุนัขหลังการผ่าตัดด้วยยาแก้ปวด', 10100, 22222, 60, 23456);

-- --------------------------------------------------------

--
-- Table structure for table `type_of_medicine`
--

CREATE TABLE `type_of_medicine` (
  `Type_of_medicine_ID` int(5) NOT NULL,
  `Type_of_medicine _Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `type_of_pet`
--

CREATE TABLE `type_of_pet` (
  `Type_of_pet_ID` int(5) NOT NULL,
  `Type_of_pet _Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`Doctor_ID`);

--
-- Indexes for table `login_hana`
--
ALTER TABLE `login_hana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`medicine_ID`);

--
-- Indexes for table `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`pet_ID`);

--
-- Indexes for table `pet_owner`
--
ALTER TABLE `pet_owner`
  ADD PRIMARY KEY (`pet_owner_ID`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`treatment_ID`),
  ADD KEY `foreign key Doctor_ID` (`Doctor_ID`);

--
-- Indexes for table `type_of_medicine`
--
ALTER TABLE `type_of_medicine`
  ADD PRIMARY KEY (`Type_of_medicine_ID`);

--
-- Indexes for table `type_of_pet`
--
ALTER TABLE `type_of_pet`
  ADD PRIMARY KEY (`Type_of_pet_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `Doctor_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10101;

--
-- AUTO_INCREMENT for table `login_hana`
--
ALTER TABLE `login_hana`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `medicine_ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pet`
--
ALTER TABLE `pet`
  MODIFY `pet_ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pet_owner`
--
ALTER TABLE `pet_owner`
  MODIFY `pet_owner_ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `treatment_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56314;

--
-- AUTO_INCREMENT for table `type_of_medicine`
--
ALTER TABLE `type_of_medicine`
  MODIFY `Type_of_medicine_ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type_of_pet`
--
ALTER TABLE `type_of_pet`
  MODIFY `Type_of_pet_ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `treatment`
--
ALTER TABLE `treatment`
  ADD CONSTRAINT `foreign key Doctor_ID` FOREIGN KEY (`Doctor_ID`) REFERENCES `doctor` (`Doctor_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
