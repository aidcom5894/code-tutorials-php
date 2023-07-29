-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 29, 2023 at 10:12 PM
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
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`id`, `username`, `useremail`, `usercontact`, `registration_date`) VALUES
(1, 'Vivek Robin Kujur', 'vrobinkujur@gmail.com', '9264453821', '2023-07-29 17:11:42'),
(2, 'Syed Hamza Roshan', 'syedhamzaroshan22@gmail.com', '9955048876', '2023-07-29 17:13:50'),
(3, 'Shahil Eqbal', 'shahileqbal22@gmail.com', '9874563210', '2023-07-29 17:14:29'),
(4, 'Shweta Devi', 'shweta@gmail.com', '9632587410', '2023-07-29 17:14:47'),
(5, 'Vivek Sharma', 'sharmavivek22@gmail.com', '7410258963', '2023-07-29 17:15:18'),
(6, 'Shilpi', 'shilpi@gmail.com', '9856237401', '2023-07-29 17:16:17'),
(7, 'Aman Kumar', 'amankumar16@gmail.com', '9569568452', '2023-07-29 17:25:09'),
(8, 'Prince Kumar Mishra', 'princemishra22@gmail.com', '7854896321', '2023-07-29 17:26:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
