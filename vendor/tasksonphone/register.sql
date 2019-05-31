-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2019 at 01:33 PM
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
-- Database: `topdetail`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `dob` date NOT NULL,
  `sex` text NOT NULL,
  `others` text NOT NULL,
  `highestedu` varchar(10) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(80) NOT NULL,
  `city` varchar(80) NOT NULL,
  `state` varchar(80) NOT NULL,
  `knowus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `dob`, `sex`, `others`, `highestedu`, `phone`, `email`, `city`, `state`, `knowus`) VALUES
(1, 'ksdjsj', '2019-05-01', 'male', '', '', 2147483647, 'dpsrk@gmail.com', 'ncjnjd', 'zcxnjsd', 'fokekgjo'),
(2, 'ksdjsj', '2019-05-16', 'male', '', 'ojidv', 2147483647, 'dpsrk@gmail.com', 'ncjnjd', 'zcxnjsd', 'ojofjwe'),
(3, 'djojfw', '2019-05-07', 'others', 'aishf', 'kfndwi', 99439223, 'ugsh@gojfi.com', 'jishgi', 'vjfbvbj', 'ugerhir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
