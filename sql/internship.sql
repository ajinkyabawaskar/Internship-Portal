-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2019 at 06:06 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internshipdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `internship`
--

CREATE TABLE `internship` (
  `id` int(3) NOT NULL COMMENT 'used to uniquely identify each internship',
  `type` varchar(3) NOT NULL,
  `title` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `duration` int(2) NOT NULL,
  `stipend` int(6) NOT NULL,
  `skills` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internship`
--

INSERT INTO `internship` (`id`, `type`, `title`, `company`, `location`, `duration`, `stipend`, `skills`) VALUES
(46, 'ino', 'estheh', 'dbdtr', 'bndtr', 4, 5, 'rdtgndx'),
(47, 'ino', 'ada', 'ad', 'ad', 3, 3, 'fef'),
(48, 'ino', 'Software Engineering Intern', 'DeMeNew Pvt. Ltd.', 'Hyderabad', 3, 2323, 'agdbgfb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `internship`
--
ALTER TABLE `internship`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `internship`
--
ALTER TABLE `internship`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT COMMENT 'used to uniquely identify each internship', AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
