-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2023 at 09:53 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middle` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(25) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `salary` int(25) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `street` varchar(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `lastname`, `firstname`, `middle`, `email`, `contact`, `degree`, `job_title`, `status`, `salary`, `nationality`, `gender`, `birthdate`, `street`, `barangay`, `town`, `province`) VALUES
(1, 'bobo', 'gaii', 'F.', 'adr@gmail.com', '0000000', 'Elementary', 'Elementary', 'College', 257, 'College', 'College', '2001-03-22', 'JanlanghHH', 'TiguihanIII', 'PinamalayanPPPP', 'OrientalPPP'),
(2, 'binay', 'binay', 'f', 'adrian@gmail.com', '009977', 'Elementary', 'Elementary', 'Elementary', 1000000, 'HighSchool', 'Elementary', '2023-04-25', 'calpaan', 'calapan', 'calpan', 'calapan'),
(3, 'Fegalan', 'Gaboooooooo', '', 'adrian@gmail.com', '00000', 'College', 'College', 'College', 0, 'College', 'College', '0000-00-00', 'Janlang', '', 'Pinamalayan', 'Oriental');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
