-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2022 at 10:59 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bpm2`
--

-- --------------------------------------------------------

--
-- Table structure for table `ayuda`
--

CREATE TABLE `ayuda` (
  `ayudaID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `name2` varchar(50) NOT NULL,
  `amount` int(50) NOT NULL,
  `date_claimed` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ayuda`
--

INSERT INTO `ayuda` (`ayudaID`, `userID`, `name2`, `amount`, `date_claimed`) VALUES
(6, 301, 'Julianne Marie Bajao', 4000, 'Jan 21, 2022'),
(7, 302, 'Janina Briones', 3000, '---'),
(8, 303, 'Rhegie Joy Ayag', 5000, 'Jan 21, 2022'),
(9, 304, 'Ryle Glema', 3000, '---'),
(10, 305, 'Laurence Ligan', 3000, 'Jan 21, 2022'),
(11, 306, 'Jinomel Fajardo', 4000, '---');

-- --------------------------------------------------------

--
-- Table structure for table `exitpass`
--

CREATE TABLE `exitpass` (
  `epassID` int(11) NOT NULL,
  `Fname2` varchar(50) NOT NULL,
  `Mname2` varchar(50) NOT NULL,
  `Lname2` varchar(50) NOT NULL,
  `purok2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exitpass`
--

INSERT INTO `exitpass` (`epassID`, `Fname2`, `Mname2`, `Lname2`, `purok2`) VALUES
(7, 'Julianne Marie', 'Langeras', 'Bajao', 'Purok-1'),
(8, 'Janina ', 'Al', 'Briones', 'Purok-1'),
(9, 'Rhegie Joy', 'Baluran', 'Ayag', 'Purok-1'),
(10, 'Ryle', 'Otaku', 'Glema', 'Purok-1'),
(11, 'Elbert Laurence', 'Memer', 'Ligan', 'Purok-1'),
(12, 'Jinomel', 'IDK', 'Fajardo', 'Purok-1');

-- --------------------------------------------------------

--
-- Table structure for table `foodpacks`
--

CREATE TABLE `foodpacks` (
  `fpackID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `name3` varchar(50) NOT NULL,
  `date_claimed` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foodpacks`
--

INSERT INTO `foodpacks` (`fpackID`, `userID`, `name3`, `date_claimed`) VALUES
(3, 301, 'Julianne Marie Bajao', '---'),
(4, 302, 'Janina Briones', 'Jan. 21, 2022'),
(5, 303, 'Rhegie Joy Ayag', '---'),
(6, 304, 'Ryle Glema', 'Jan. 21, 2022'),
(7, 305, 'Elbert Laurence Ligan', '---'),
(8, 306, 'Jinomel Fajardo', 'Jan. 21, 2022');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Mname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `purok` varchar(50) NOT NULL,
  `phonenum` varchar(100) NOT NULL,
  `age` int(4) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `Fname`, `Mname`, `Lname`, `purok`, `phonenum`, `age`, `sex`, `password`) VALUES
(301, 'Julianne Marie', 'Langeras', 'Bajao', 'Purok-1', '09561331001', 21, 'Female', '34ed066df378efacc9b924ec161e7639'),
(302, 'Janina', 'Al', 'Briones', 'Purok-1', '09350995290', 20, 'Female', '577bcc914f9e55d5e4e4f82f9f00e7d4'),
(303, 'Rhegie Joy', 'Baluran', 'Ayag', 'Purok-1', '09978875720', 20, 'Female', '11b9842e0a271ff252c1903e7132cd68'),
(304, 'Ryle', 'Otaku', 'Glema', 'Purok-1', '09123456789', 21, 'Male', '37bc2f75bf1bcfe8450a1a41c200364c'),
(305, 'Elbert Laurence', 'Memer', 'Ligan', 'Purok-1', '09234567891', 21, 'Male', '496e05e1aea0a9c4655800e8a7b9ea28'),
(306, 'Jinomel', 'idk', 'Fajardo', 'Purok-1', '09345678912', 22, 'Male', 'b2eb7349035754953b57a32e2841bda5'),
(307, 'Azelia', 'Pausal', 'Layagon', 'Purok-1A', '09456789123', 21, 'Female', '8e98d81f8217304975ccb23337bb5761'),
(308, 'Christine Angela', 'Mercado', 'Agum', 'Purok-2B', '09567891234', 21, 'Female', 'a8c88a0055f636e4a163a5e3d16adab7'),
(309, 'Larissa', 'Penaso', 'Cabal', 'Purok-3A', '09678912345', 21, 'Female', 'eddea82ad2755b24c4e168c5fc2ebd40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ayuda`
--
ALTER TABLE `ayuda`
  ADD PRIMARY KEY (`ayudaID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `exitpass`
--
ALTER TABLE `exitpass`
  ADD PRIMARY KEY (`epassID`);

--
-- Indexes for table `foodpacks`
--
ALTER TABLE `foodpacks`
  ADD PRIMARY KEY (`fpackID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ayuda`
--
ALTER TABLE `ayuda`
  MODIFY `ayudaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `exitpass`
--
ALTER TABLE `exitpass`
  MODIFY `epassID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `foodpacks`
--
ALTER TABLE `foodpacks`
  MODIFY `fpackID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ayuda`
--
ALTER TABLE `ayuda`
  ADD CONSTRAINT `ayuda_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);

--
-- Constraints for table `foodpacks`
--
ALTER TABLE `foodpacks`
  ADD CONSTRAINT `foodpacks_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
