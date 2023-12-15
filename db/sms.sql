-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2023 at 01:38 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` enum('admin','registrar','teacher','student') NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleInitial` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `birth_date` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `Religion` varchar(255) NOT NULL,
  `Civil Status` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Guardian` varchar(255) NOT NULL,
  `Contact Number` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `user_type`, `firstName`, `middleInitial`, `lastName`, `birth_date`, `sex`, `Religion`, `Civil Status`, `Address`, `Guardian`, `Contact Number`) VALUES
(1, 'sample@gmail.com', 'sample123', 'student', 'Juan', 'D', 'La Cruz', 'January 1, 2003', 'Male', 'Catholic', 'Single', 'L3 B4 Diyan Lang Imus City Cavite', 'Jane La Cruz', 9323225424),
(2, 'admin', 'admin123', 'admin', 'Coco', 'D', 'Martin', '', '', '', '', '', '', 0),
(5, 'registrar', 'registrar123', 'registrar', 'Monkey', 'D', 'Lupin', '', '', '', '', '', '', 0),
(6, 'teacher', 'teacher123', 'teacher', 'Jason', 'D', 'Rulo', '', '', '', '', '', '', 0),
(9, 'james@gmail.com', 'james123', 'student', 'James', 'B', 'Bimbap', 'February 1, 2007', 'Female', 'Born Again', 'Single', 'L5 B2 Dun Lang Bacoor City Cavite', 'Kris Akiyes', 9154326789);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
