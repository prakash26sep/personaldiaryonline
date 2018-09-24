-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2018 at 11:36 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personaldiary`
--

-- --------------------------------------------------------

--
-- Table structure for table `mukesh111`
--

CREATE TABLE `mukesh111` (
  `id` int(11) NOT NULL,
  `entrydate` date NOT NULL,
  `entry` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mukesh111`
--

INSERT INTO `mukesh111` (`id`, `entrydate`, `entry`) VALUES
(1, '2018-09-22', 'Heyy Diary'),
(2, '2018-09-22', 'Aaj mausam suhana hai'),
(3, '2018-09-24', 'Hello Everyone'),
(4, '2018-09-24', 'This is my 4th Entry'),
(5, '2018-09-24', 'Heyyy Diary'),
(6, '2018-09-24', 'Yahooooo');

-- --------------------------------------------------------

--
-- Table structure for table `prakash26sep`
--

CREATE TABLE `prakash26sep` (
  `id` int(11) NOT NULL,
  `entrydate` date NOT NULL,
  `entry` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prakash26sep`
--

INSERT INTO `prakash26sep` (`id`, `entrydate`, `entry`) VALUES
(1, '2018-09-22', 'Beautiful Day'),
(2, '2018-09-24', 'Hello Diary'),
(3, '2018-09-24', 'Hey Diary, How are you?');

-- --------------------------------------------------------

--
-- Table structure for table `rahul123`
--

CREATE TABLE `rahul123` (
  `id` int(11) NOT NULL,
  `entrydate` date NOT NULL,
  `entry` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rahul123`
--

INSERT INTO `rahul123` (`id`, `entrydate`, `entry`) VALUES
(1, '2018-09-22', 'This is my First Diary'),
(2, '2018-09-22', 'My second diary entry'),
(3, '2018-09-22', 'Heloo'),
(4, '2018-09-24', 'It is raining since the morning'),
(5, '2018-09-24', 'Just passing time');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'prakash sain', 'prakash26sep', 'prakash26sep@gmail.com', 'tatasky'),
(2, 'mukesh kumawat', 'mukesh111', 'mukesh111@gmail.com', 'tatasky1'),
(3, 'rahul agarwal', 'rahul123', 'rahul123@gmail.com', 'tatasky1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mukesh111`
--
ALTER TABLE `mukesh111`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prakash26sep`
--
ALTER TABLE `prakash26sep`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rahul123`
--
ALTER TABLE `rahul123`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mukesh111`
--
ALTER TABLE `mukesh111`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `prakash26sep`
--
ALTER TABLE `prakash26sep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `rahul123`
--
ALTER TABLE `rahul123`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
