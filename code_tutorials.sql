-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 30, 2023 at 12:41 AM
-- Server version: 8.0.33-0ubuntu0.22.04.4
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `code_tutorials`
--

-- --------------------------------------------------------

--
-- Table structure for table `recovery_db`
--

CREATE TABLE `recovery_db` (
  `id` int NOT NULL,
  `username` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `useremail` varchar(350) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `usercontact` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `onboarding_date` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `termination_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `recovery_date` varchar(120) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recovery_db`
--

INSERT INTO `recovery_db` (`id`, `username`, `useremail`, `usercontact`, `onboarding_date`, `termination_date`, `recovery_date`) VALUES
(1, 'sdfsdf', 'asd@gmail.com', '23423423', '2023-07-30 00:15:15', '2023-07-30 00:15:19', 'To be Updated on Recovery'),
(2, 'sgdfg', 'asdk@gmail.com', '11231654', '2023-07-30 00:17:10', '2023-07-30 00:17:36', 'To be Updated on Recovery');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `id` int NOT NULL,
  `username` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `useremail` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `usercontact` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `registration_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recovery_db`
--
ALTER TABLE `recovery_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recovery_db`
--
ALTER TABLE `recovery_db`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
