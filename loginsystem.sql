-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2024 at 09:39 AM
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
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '5c428d8875d2948607f3e3fe134d71b4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullName` varchar(400) DEFAULT NULL,
  `nameWithInitials` varchar(200) DEFAULT NULL,
  `indexNo` varchar(200) DEFAULT NULL,
  `intake` varchar(50) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `contactno` varchar(11) DEFAULT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `nameWithInitials`, `indexNo`, `intake`, `fname`, `lname`, `email`, `password`, `contactno`, `posting_date`) VALUES
(1, 'Suprabha jhjkhjj jhsd jkfhsjkdh kjhd jksf hskdjf h djshfkjdsfh ', 'S p', '', '2014', 'Rahul', 'Kumar', 'rahulj23@gmail.com', 'Test@123', '1234563210', '2024-02-18 06:15:52'),
(2, NULL, NULL, '', NULL, 'John', 'Doe', 'johndoe12@gamil.com', 'Test@12345', '4563210236', '2024-02-19 06:35:03'),
(3, NULL, NULL, '', NULL, 'fi', 'la', 'test@gmail.com', '941151663@Bandara', '0704238939', '2024-04-08 08:11:58'),
(4, NULL, NULL, '', NULL, 'fa', 'la', 'nalindadsn@gmail.com', '941151663@Bandara', '0704238939', '2024-04-08 08:34:31'),
(5, NULL, NULL, '', NULL, 'fa', 'la', 'suprabha@gmail.com', 'Dsn@8798761', '0704238939', '2024-04-08 08:41:16'),
(6, '1Suprabha jhjkhjj jhsd jkfhsjkdh kjhd jksf hskdjf h djshfkjdsfh ', '1S p', '1666', '12014', '1fa', '1la', 'nalindadsn123@gmail.com', '941151663Bandara', '0704238939', '2024-04-09 07:33:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
