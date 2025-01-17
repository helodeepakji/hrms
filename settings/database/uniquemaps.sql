-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2025 at 05:33 PM
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
-- Database: `uniquemaps`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(250) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `correspondence_address` text NOT NULL,
  `permanent_address` text NOT NULL,
  `dob` date NOT NULL,
  `marital_status` enum('Single','Married','Divorced','Widowed') NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `religion` varchar(100) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `emergency_contact` varchar(15) NOT NULL,
  `reporting_manager` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `employee_id`, `profile`, `name`, `mobile`, `email`, `correspondence_address`, `permanent_address`, `dob`, `marital_status`, `gender`, `religion`, `department`, `designation`, `emergency_contact`, `reporting_manager`, `password`, `created_at`, `updated_at`) VALUES
(1, 'E001', '', 'Deepak Morya', '8076763204', 'admin@test.com', '', '', '0000-00-00', 'Single', 'Male', NULL, NULL, NULL, '', NULL, '$2y$10$o0oV2WCH5q0vdtaO1oQpTOTW1ppsgAOPw7PvkeMnRVf1tLBJkuOYG', '2025-01-17 16:05:37', '2025-01-17 16:05:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
