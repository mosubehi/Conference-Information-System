-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2024 at 08:53 PM
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
-- Database: `conference_information_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `conference_ participant`
--

CREATE TABLE `conference_ participant` (
  `Pid` int(11) NOT NULL,
  `Pssn` int(11) NOT NULL,
  `Pfname` text NOT NULL,
  `Plname` text NOT NULL,
  `Pbod` date NOT NULL,
  `P_porject_name` text NOT NULL,
  `Psex` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `conference_ participant`
--

INSERT INTO `conference_ participant` (`Pid`, `Pssn`, `Pfname`, `Plname`, `Pbod`, `P_porject_name`, `Psex`) VALUES
(111, 111, 'noma', 'noma', '2002-12-25', '', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `conf_admin`
--

CREATE TABLE `conf_admin` (
  `Aid` int(11) NOT NULL,
  `Auname` text NOT NULL,
  `Apassowrd` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `conf_admin`
--

INSERT INTO `conf_admin` (`Aid`, `Auname`, `Apassowrd`) VALUES
(11111, 'admin@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `participant_username`
--

CREATE TABLE `participant_username` (
  `PID` int(11) NOT NULL,
  `Pemail` text NOT NULL,
  `Ppassword` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `participant_username`
--

INSERT INTO `participant_username` (`PID`, `Pemail`, `Ppassword`) VALUES
(22222, 'participant@gmail.com', '123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
