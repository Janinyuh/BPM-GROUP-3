-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2022 at 11:41 AM
-- Server version: 10.4.17-MariaDB
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
(1, 301, 'Julianne Marie Bajao', 4000, '2022-01-12'),
(2, 302, 'Janina Briones', 3000, ''),
(3, 303, 'Rhegie Joy Ayag', 5000, '2022-01-12'),
(4, 304, 'Ryle Glema', 3000, ''),
(5, 305, 'Laurence Ligan', 3000, '2022-01-12'),
(6, 306, 'Jinomel Fajardo', 4000, ''),
(7, 310, 'Larissa Cabal', 3000, '');

-- --------------------------------------------------------

--
-- Table structure for table `exitpass`
--

CREATE TABLE `exitpass` (
  `epassID` int(11) NOT NULL,
  `Fname2` varchar(50) NOT NULL,
  `Mname2` varchar(50) NOT NULL,
  `Lname2` varchar(50) NOT NULL,
  `purok2` varchar(50) NOT NULL,
  `barangay` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exitpass`
--

INSERT INTO `exitpass` (`epassID`, `Fname2`, `Mname2`, `Lname2`, `purok2`, `barangay`) VALUES
(1, 'Julianne Marie', 'Langeras', 'Bajao', 'Purok-1', 'Gusa'),
(2, 'Janina ', 'Al', 'Briones', 'Purok-1', 'Gusa'),
(3, 'Rhegie Joy', 'Baluran', 'Ayag', 'Purok-1', 'Gusa'),
(4, 'Ryle', 'Otaku', 'Glema', 'Purok-1', 'Gusa'),
(5, 'Elbert Laurence', 'Memer', 'Ligan', 'Purok-1', 'Gusa'),
(6, 'Jinomel', 'IDK', 'Fajardo', 'Purok-1', 'Gusa'),
(7, 'Christine Angela', 'Mercado', 'Agum', 'Purok-1', 'Gusa');

-- --------------------------------------------------------

--
-- Table structure for table `foodpacks`
--

CREATE TABLE `foodpacks` (
  `fpackID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `name3` varchar(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `date_claimed` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foodpacks`
--

INSERT INTO `foodpacks` (`fpackID`, `userID`, `name3`, `quantity`, `date_claimed`) VALUES
(1, 301, 'Julianne Marie Bajao', 1, ''),
(2, 302, 'Janina Briones', 2, '2022-01-12'),
(3, 303, 'Rhegie Joy Ayag', 1, ''),
(4, 304, 'Ryle Glema', 1, '2022-01-12'),
(5, 305, 'Elbert Laurence Ligan', 2, ''),
(6, 306, 'Jinomel Fajardo', 1, '2022-01-12'),
(7, 310, 'Larissa Cabal', 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Fname` varchar(50) NOT NULL,
  `Mname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `age` int(4) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `purok` varchar(50) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `phonenum` varchar(100) NOT NULL,
  `userID` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Fname`, `Mname`, `Lname`, `age`, `sex`, `purok`, `barangay`, `phonenum`, `userID`, `password`, `fullname`, `role`) VALUES
('Julianne Marie', 'Langeras', 'Bajao', 21, 'female', 'Purok-1', 'Gusa', '09561331001', 301, '34ed066df378efacc9b924ec161e7639', 'Julianne Marie Langeras Bajao', 'user'),
('Janina', 'Al', 'Briones', 21, 'female', 'Purok-1', 'Gusa', '09350995290', 302, '577bcc914f9e55d5e4e4f82f9f00e7d4', 'Janina Al Briones', 'user'),
('Rhegie Joy', 'Baluran', 'Ayag', 20, 'female', 'Purok-1', 'Gusa', '09978875720', 303, '11b9842e0a271ff252c1903e7132cd68', 'Rhegie Joy Baluran Ayag', 'user'),
('Ryle', 'Otaku', 'Glema', 21, 'female', 'Purok-1', 'Gusa', '09123456789', 304, '37bc2f75bf1bcfe8450a1a41c200364c', 'Ryle Otaku Glema', 'user'),
('Elbert Laurence', 'Memer', 'Ligan', 21, 'male', 'Purok-1', 'Gusa', '09234567891', 305, '496e05e1aea0a9c4655800e8a7b9ea28', 'Elbert Laurence Memer Ligan', 'user'),
('Jinomel', 'idk', 'Fajardo', 22, 'male', 'Purok-1', 'Gusa', '09345678912', 306, 'b2eb7349035754953b57a32e2841bda5', 'Jinomel idk Fajardo', 'user'),
('Azelia', 'Pausal', 'Layagon', 21, 'female', 'Purok-1A', 'Gusa', '09456789123', 307, '8e98d81f8217304975ccb23337bb5761', 'Azelia Pausal Layagon', 'user'),
('Christine Angela', 'Mercado', 'Agum', 21, 'female', 'Purok-2B', 'Gusa', '09567891234', 308, 'a8c88a0055f636e4a163a5e3d16adab7', 'Christine Angela Mercado Agum', 'user'),
('Larissa ', 'Penaso', 'Cabal', 21, 'female', 'Purok-2C', 'Gusa', '09901234567', 310, '06eb61b839a0cefee4967c67ccb099dc', 'Larissa Penaso Cabal', 'user');

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
  MODIFY `ayudaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `exitpass`
--
ALTER TABLE `exitpass`
  MODIFY `epassID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `foodpacks`
--
ALTER TABLE `foodpacks`
  MODIFY `fpackID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
