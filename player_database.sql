-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2024 at 06:54 AM
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
-- Database: `player_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `player_database`
--

CREATE TABLE `player_database` (
  `Id` int(10) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Gamename` varchar(255) NOT NULL,
  `Ign` varchar(255) NOT NULL,
  `Position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `player_database`
--

INSERT INTO `player_database` (`Id`, `Firstname`, `Lastname`, `Gamename`, `Ign`, `Position`) VALUES
(1, 'mae', 'pacs', 'Mobile Legends: Bang Bang', 'mpacs', 'mid laner'),
(2, 'genk', 'trocio', 'Mobile Legends: Bang Bang', 'genktrocio', 'exp laner'),
(3, 'pres', 'wil', 'League of Legends', 'cranesubzero', 'mid laner'),
(4, 'Elijah', 'Fernandez', 'League of Legends', 'medtech enjoyer #rajia', 'toplaner'),
(5, 'Reuel John', 'Loquias', 'League of Legends', 'reiru #8089', 'Support');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `player_database`
--
ALTER TABLE `player_database`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `player_database`
--
ALTER TABLE `player_database`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
