-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 22, 2020 at 04:54 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 
--
-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookingID` int(20) NOT NULL,
  `patientLoginName` varchar(20) NOT NULL,
  `doctorLoginName` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `TimeBooking` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `complicant`
--

CREATE TABLE `complicant` (
  `complicantID` int(11) NOT NULL,
  `patientLoginName` varchar(20) NOT NULL,
  `complication` varchar(2000) NOT NULL,
  `regDate` date NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctorLoginName` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `doctorName` varchar(50) NOT NULL,
  `specialization` varchar(50) DEFAULT NULL,
  `qualification` varchar(50) DEFAULT NULL,
  `hospital` varchar(50) DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctorLoginName`, `password`, `doctorName`, `specialization`, `qualification`, `hospital`, `avatar`) VALUES
('admin', '123456', 'Hoàng Văn Hùng', '', '', '', 'image/006.jpeg'),
('Phuc1979', '01021979', 'Hoàng Văn Phúc', 'Nhãn khoa', 'TS', 'OMMS', 'image/007.jpeg'),
('Thanh12', '08121986', 'Trần Thị Thanh', 'Nhãn khoa', 'TS', 'OMMS', 'image/002.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patientLoginName` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `contact-no` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `height` double NOT NULL,
  `weight` double NOT NULL,
  `sex` varchar(10) NOT NULL,
  `bloodGroup` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patientLoginName`, `password`, `firstName`, `lastName`, `contact-no`, `address`, `age`, `height`, `weight`, `sex`, `bloodGroup`) VALUES
('hongDD', '123456786', 'Nguyễn ', 'Hồng', '023465898', 'BG', 18, 160, 42, 'Nữ', 'A'),
('ktt123', '123456', 'Tran', 'Thien', '123456', 'NA', 12, 165, 60, 'nam', 'O'),
('Nghe100175', '123456789', 'Dương Đình', 'Nghệ', '01345645654', 'NA', 100, 175, 70, 'Nam', 'O'),
('quanhi', '12345677', 'Dương', 'Quá', '058642456', 'TQ', 55, 170, 65, 'Nam', 'AB'),
('test123', 'test123', 'Trần ', 'Hoàng', '01345645654', 'NA', 12, 135, 40, 'nam', 'O'),
('van123456', 'asdfghjkl', 'Hoàng', 'Vân', '0123456789', 'NA', 44, 170, 65, 'Nam', 'O');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `questionID` int(20) NOT NULL,
  `questionDetails` varchar(2000) NOT NULL,
  `patientLoginName` varchar(20) NOT NULL,
  `doctorLoginName` varchar(50) NOT NULL,
  `answer` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `patientLoginName` varchar(20) NOT NULL,
  `doctorLoginName` varchar(50) NOT NULL,
  `complication` varchar(2000) NOT NULL,
  `reportDetails` varchar(50) NOT NULL,
  `reportID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingID`),
  ADD KEY `patientLoginName` (`patientLoginName`),
  ADD KEY `doctorLoginName` (`doctorLoginName`);

--
-- Indexes for table `complicant`
--
ALTER TABLE `complicant`
  ADD PRIMARY KEY (`complicantID`),
  ADD KEY `patientLoginName` (`patientLoginName`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctorLoginName`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patientLoginName`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`questionID`),
  ADD KEY `patientLoginName` (`patientLoginName`),
  ADD KEY `doctorLoginName` (`doctorLoginName`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`reportID`),
  ADD KEY `patientLoginName` (`patientLoginName`),
  ADD KEY `doctorLoginName` (`doctorLoginName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complicant`
--
ALTER TABLE `complicant`
  MODIFY `complicantID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `questionID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `reportID` int(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`patientLoginName`) REFERENCES `patient` (`patientLoginName`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`doctorLoginName`) REFERENCES `doctor` (`doctorLoginName`);

--
-- Constraints for table `complicant`
--
ALTER TABLE `complicant`
  ADD CONSTRAINT `complicant_ibfk_1` FOREIGN KEY (`patientLoginName`) REFERENCES `patient` (`patientLoginName`);

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`patientLoginName`) REFERENCES `patient` (`patientLoginName`),
  ADD CONSTRAINT `question_ibfk_2` FOREIGN KEY (`doctorLoginName`) REFERENCES `doctor` (`doctorLoginName`);

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`patientLoginName`) REFERENCES `patient` (`patientLoginName`),
  ADD CONSTRAINT `report_ibfk_2` FOREIGN KEY (`doctorLoginName`) REFERENCES `doctor` (`doctorLoginName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
