-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2023 at 09:00 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `msms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Admin_Name` varchar(100) DEFAULT NULL,
  `Username` varchar(100) DEFAULT NULL,
  `Mobile` bigint(20) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `Created_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Admin_Name`, `Username`, `Mobile`, `Email`, `Password`, `Created_at`) VALUES
(1, 'Alfred', 'Alfred123', NULL, NULL, '25d55ad283aa400af464c76d713c07ad', '2023-06-17');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `ID` int(11) NOT NULL,
  `Class Name` varchar(100) DEFAULT NULL,
  `Section` varchar(100) DEFAULT NULL,
  `Created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `ID` int(11) NOT NULL,
  `Notice Title` varchar(500) DEFAULT NULL,
  `Class ID` varchar(100) DEFAULT NULL,
  `Notice Message` varchar(500) DEFAULT NULL,
  `Created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `ID` int(11) NOT NULL,
  `Page_Type` varchar(100) DEFAULT NULL,
  `Page_Title` varchar(100) DEFAULT NULL,
  `Page_Description` varchar(500) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Mobile` bigint(20) DEFAULT NULL,
  `Created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`ID`, `Page_Type`, `Page_Title`, `Page_Description`, `Email`, `Mobile`, `Created_at`) VALUES
(1, 'About', 'About Us', 'Creed Music School is a premier institution dedicated to providing exceptional music education and fostering a lifelong passion for music. With a commitment to excellence and a belief in the power of music to transform lives, our school offers a comprehensive range of programs and services to students of all ages and skill levels. At Creed Music School, we believe that music education goes beyond the technical aspects of playing an instrument or singing. It instills discipline, cultivates creati', 'Amrit@gmail.com', 8408922796, '2023-06-15'),
(2, 'Contact', 'Contact Us', 'Creed Music School near walowitz campus mumbai', 'alfred@gmail.com', 7979654999, '2023-06-16');

-- --------------------------------------------------------

--
-- Table structure for table `public notice`
--

CREATE TABLE `public notice` (
  `ID` int(11) NOT NULL,
  `Notice Title` varchar(100) DEFAULT NULL,
  `Notice Message` varchar(500) DEFAULT NULL,
  `Created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(11) NOT NULL,
  `Student Name` varchar(100) DEFAULT NULL,
  `Student Email` varchar(500) DEFAULT NULL,
  `Student Class` varchar(100) DEFAULT NULL,
  `Gender` varchar(100) DEFAULT NULL,
  `DOB` varchar(100) DEFAULT NULL,
  `Student ID` int(11) DEFAULT NULL,
  `Father Name` varchar(200) DEFAULT NULL,
  `Mother Name` varchar(200) DEFAULT NULL,
  `Contact Number` bigint(20) DEFAULT NULL,
  `Alternate Number` bigint(20) DEFAULT NULL,
  `Address` varchar(500) DEFAULT NULL,
  `Username` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `Image` varchar(200) NOT NULL,
  `Date of Admission` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Admin Name` (`Admin_Name`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Mobile` (`Mobile`);

--
-- Indexes for table `public notice`
--
ALTER TABLE `public notice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Student ID` (`Student ID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
