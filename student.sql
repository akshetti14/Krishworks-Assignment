-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 21, 2021 at 10:02 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(255) NOT NULL,
  `studentName` varchar(164) NOT NULL,
  `phoneNumber` varchar(164) NOT NULL,
  `emailid` varchar(164) NOT NULL,
  `Physics` int(255) NOT NULL,
  `Chemistry` int(255) NOT NULL,
  `Maths` int(255) NOT NULL,
  `Biology` int(255) NOT NULL,
  `English` int(255) NOT NULL,
  `Total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `studentName`, `phoneNumber`, `emailid`, `Physics`, `Chemistry`, `Maths`, `Biology`, `English`, `Total`) VALUES
(1, 'Michael Scott', '7345657213', 'scott@gmail.com', 89, 78, 99, 87, 96, 449),
(2, 'Dwight Schrute', '2532100646', 'schrute@gmail.com', 78, 87, 93, 86, 78, 422),
(3, 'Bruce', '3477561234', 'BruceRBolyard@jourrapide.com', 89, 78, 81, 86, 98, 432),
(4, 'Jesse', '4438369597', 'JesseRPeterson@armyspy.com', 89, 87, 68, 59, 78, 310),
(5, 'Suzanne', '660-768-7431', 'SuzanneERichardson@dayrep.com', 76, 87, 75, 92, 66, 396),
(6, 'Valerie', '805-374-1341', 'ValerieMBalzer@armyspy.com', 77, 81, 76, 90, 65, 389),
(7, 'Margaret', '954-246-2331', 'MargaretRGilmore@dayrep.com', 65, 59, 77, 81, 90, 372),
(8, 'Thomas', '757-312-8655', 'ThomasMClosson@dayrep.com', 89, 88, 80, 91, 83, 431),
(9, 'Eric', '904-814-1214', 'EricAJarvis@rhyta.com', 80, 75, 91, 56, 90, 392),
(10, 'Ida', '585-336-2223', 'IdaNRamirez@armyspy.com', 88, 80, 54, 75, 90, 387);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phoneNumber` (`phoneNumber`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
