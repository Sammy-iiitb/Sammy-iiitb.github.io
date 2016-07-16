-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 16, 2016 at 03:14 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SubhaPrada`
--

-- --------------------------------------------------------

--
-- Table structure for table `Visitors`
--

CREATE TABLE `Visitors` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Visitors`
--

INSERT INTO `Visitors` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'John', 'john@gmail.com', 'complaint', 'filing a complaint'),
(2, 'John', 'john@gmail.com', 'complaint', 'filing a complaint'),
(3, 'John', 'john@gmail.com', 'complaint', 'filing a complaint'),
(4, 'John', 'john@gmail.com', 'complaint', 'filing a complaint'),
(5, 'John', 'john@gmail.com', 'complaint', 'filing a complaint'),
(6, 'John', 'john@gmail.com', 'complaint', 'filing a complaint'),
(7, 'John', 'john@gmail.com', 'complaint', 'filing a complaint'),
(8, 'John', 'john@gmail.com', 'complaint', 'filing a complaint'),
(9, 'contact-name', 'contact-email', 'contact-subject', 'contact-message'),
(10, 'John', 'a@b.com', 'this is the subject', 'this is the message'),
(11, 'John', 'a@b.com', 'this is the subject', 'this is the message'),
(12, 'John', 'a@b.com', 'this is the subject', 'this is the message');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Visitors`
--
ALTER TABLE `Visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Visitors`
--
ALTER TABLE `Visitors`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
