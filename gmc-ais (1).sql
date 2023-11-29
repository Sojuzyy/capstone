-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2023 at 11:26 PM
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
-- Database: `gmc-ais`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminaccount`
--

CREATE TABLE `adminaccount` (
  `id` int(11) NOT NULL,
  `lname` varchar(25) DEFAULT NULL,
  `fname` varchar(25) DEFAULT NULL,
  `mi` varchar(25) DEFAULT NULL,
  `position` varchar(25) DEFAULT NULL,
  `dept` varchar(25) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pword` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guestappt`
--

CREATE TABLE `guestappt` (
  `id` int(11) NOT NULL,
  `date_created` date DEFAULT NULL,
  `lname` varchar(25) DEFAULT NULL,
  `fname` varchar(25) DEFAULT NULL,
  `mi` varchar(5) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `cnumber` int(11) DEFAULT NULL,
  `seflie` longblob DEFAULT NULL,
  `validid` longblob DEFAULT NULL,
  `apptdate` date DEFAULT NULL,
  `appttime` time DEFAULT NULL,
  `purpose` varchar(25) DEFAULT NULL,
  `apptperson` varchar(25) DEFAULT NULL,
  `remarks` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schoolevent`
--

CREATE TABLE `schoolevent` (
  `id` int(11) NOT NULL,
  `event_date` date DEFAULT NULL,
  `event_time` time DEFAULT NULL,
  `eventname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `section_management`
--

CREATE TABLE `section_management` (
  `Section_ID` int(10) NOT NULL,
  `Section_Name` varchar(255) NOT NULL,
  `Section_Year` varchar(255) NOT NULL,
  `Section_Branch_Location` varchar(255) NOT NULL,
  `Section_Strand` varchar(255) NOT NULL,
  `Section` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section_management`
--

INSERT INTO `section_management` (`Section_ID`, `Section_Name`, `Section_Year`, `Section_Branch_Location`, `Section_Strand`, `Section`) VALUES
(1, 'ABM-12A', '12', 'Santa Maria', 'ABM', 'A'),
(2, 'ABM-11A', '11', 'Santa Maria', 'ABM', 'A'),
(3, 'ABM-11B', '11', 'Guiguinto', 'ABM', 'B'),
(4, 'ABM-11A', '11', 'Guiguinto', 'ABM', 'A'),
(5, 'ABM-12B', '12', 'Guiguinto', 'ABM', 'B'),
(6, 'ABM-11B', '11', 'Santa Maria', 'ABM', 'B'),
(7, 'ABM-11A', '11', 'Bagbaguin ', 'ABM', 'A'),
(8, 'ABM-12A', '12', 'Bagbaguin ', 'ABM', 'A'),
(9, 'STEM-11A', '11', 'Bagbaguin ', 'STEM', 'A'),
(10, 'STEM-12A', '12', 'Bagbaguin ', 'STEM', 'A'),
(11, 'STEM-11A', '11', 'Santa Maria', 'STEM', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `student_account`
--

CREATE TABLE `student_account` (
  `Student_ID` varchar(255) NOT NULL,
  `Student_Fname` varchar(255) NOT NULL,
  `Student_Lname` varchar(255) NOT NULL,
  `Student_Mname` varchar(255) NOT NULL,
  `Student_Section` varchar(255) NOT NULL,
  `Student_Year` varchar(255) NOT NULL,
  `Student_Strand` varchar(255) NOT NULL,
  `Student_Cnumber` varchar(255) NOT NULL,
  `Student_Email` varchar(255) NOT NULL,
  `Student_Password` varchar(255) NOT NULL,
  `Student_Username` varchar(255) NOT NULL,
  `Student_ParentInfo` int(10) NOT NULL,
  `Student_Gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_account`
--

INSERT INTO `student_account` (`Student_ID`, `Student_Fname`, `Student_Lname`, `Student_Mname`, `Student_Section`, `Student_Year`, `Student_Strand`, `Student_Cnumber`, `Student_Email`, `Student_Password`, `Student_Username`, `Student_ParentInfo`, `Student_Gender`) VALUES
('2023-2000', 'Mark', 'Troy', 'Lopez', 'B', '11', 'ABM', '09123753475', 'dummy@email.com', 'password', 'dummy_username', 1, 'male'),
('2023-2450', 'Gabriel', 'Silayao', 'Yru', 'A', '11', 'STEM', '09834512434', 'dummy@email.com', 'dummy_password', 'dummy_username', 1, 'male'),
('2023-6711', 'Dhel', 'Cabahug', 'Obregon', 'A', '11', 'ABM', '097489283712', 'dhel.cabahug@gmail.com', 'password', 'dhelpogi', 1, 'Male'),
('2023-6712', 'Nina', 'Bronze', 'Virzon', 'A', '12', 'STEM', '09123153453', 'dummy@email.com', 'password', 'dummy_username', 1, 'male'),
('2023-6714', 'Ann ', 'Luna', 'Woods', 'B', '11', 'STEM', '09123123434', 'dummy@email.com', 'password', 'dummy_username', 1, 'female'),
('2023-6724', 'Rian', 'Buenaventura', 'Honey', 'A', '12', 'STEM', '09123124534', 'dummy@email.com', 'password', 'dummy_username', 1, 'female'),
('2023-6732', 'Vincent', 'Aristorenas', 'Santarin', 'A', '12', 'ABM', '09123123123', 'dummy@email.com', 'password', 'dummy_username', 1, 'male'),
('2023-6751	', 'Hans', 'Fraupe', 'Grod', 'B', '12', 'ABM', '09126546353', 'dummy@email.com', 'password', 'dummy_username', 1, 'male'),
('2023-6754', 'Richard', 'Badajos', 'Jones', 'B', '11', 'STEM', '09938912312', 'dummy@email.com', 'password', 'dummy_username', 1, 'male'),
('2023-6756', 'Kimberly', 'Honey', 'Gold', 'A', '12', 'STEM', '09534531312', 'dummy@email.com', 'password', 'dummy_username', 1, 'female'),
('2023-6758', 'Rizzalyn', 'Bricks', 'Friltz', 'B', '11', 'ABM', '09124734645', 'dummy@email.com', 'password', 'dummy_username', 1, 'female');

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `id` int(11) NOT NULL,
  `lname` varchar(25) DEFAULT NULL,
  `fname` varchar(25) DEFAULT NULL,
  `mi` varchar(5) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pword` varchar(255) DEFAULT NULL,
  `cnumber` int(11) DEFAULT NULL,
  `idnumber` int(11) DEFAULT NULL,
  `course` varchar(25) DEFAULT NULL,
  `grdlvl` int(11) DEFAULT NULL,
  `section` varchar(25) DEFAULT NULL,
  `POSITION` varchar(25) DEFAULT NULL,
  `dept` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `useraccountappt`
--

CREATE TABLE `useraccountappt` (
  `id` int(11) NOT NULL,
  `date_created` date DEFAULT NULL,
  `lname` varchar(25) DEFAULT NULL,
  `fname` varchar(25) DEFAULT NULL,
  `mi` varchar(25) DEFAULT NULL,
  `idnumber` int(11) DEFAULT NULL,
  `purpose` varchar(25) DEFAULT NULL,
  `apptperson` varchar(25) DEFAULT NULL,
  `apptdate` date DEFAULT NULL,
  `appttime` time DEFAULT NULL,
  `remarks` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminaccount`
--
ALTER TABLE `adminaccount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guestappt`
--
ALTER TABLE `guestappt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schoolevent`
--
ALTER TABLE `schoolevent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_management`
--
ALTER TABLE `section_management`
  ADD PRIMARY KEY (`Section_ID`);

--
-- Indexes for table `student_account`
--
ALTER TABLE `student_account`
  ADD PRIMARY KEY (`Student_ID`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useraccountappt`
--
ALTER TABLE `useraccountappt`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guestappt`
--
ALTER TABLE `guestappt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `section_management`
--
ALTER TABLE `section_management`
  MODIFY `Section_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `useraccountappt`
--
ALTER TABLE `useraccountappt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
