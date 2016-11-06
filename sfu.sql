-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2016 at 07:08 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sfu`
--

-- --------------------------------------------------------

--
-- Table structure for table `agtpub`
--

CREATE TABLE `agtpub` (
  `ID` int(100) NOT NULL,
  `year` year(4) NOT NULL,
  `publication` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cooppub`
--

CREATE TABLE `cooppub` (
  `ID` int(40) NOT NULL,
  `year` int(10) NOT NULL,
  `publication` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `csppub`
--

CREATE TABLE `csppub` (
  `ID` int(40) NOT NULL,
  `year` int(10) NOT NULL,
  `publication` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `ID` int(20) NOT NULL,
  `title` varchar(300) NOT NULL,
  `short_description` text NOT NULL,
  `speaker` varchar(50) NOT NULL,
  `abstract` text NOT NULL,
  `publishedon` date NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `location` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`ID`, `title`, `short_description`, `speaker`, `abstract`, `publishedon`, `date`, `time`, `location`) VALUES
(14, 'Web programming', 'asdd', 'Samuel', 'As', '2016-10-31', '2016-11-07', '13:30:00', 'ISU');

-- --------------------------------------------------------

--
-- Table structure for table `peopleagt`
--

CREATE TABLE `peopleagt` (
  `ID` int(40) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `picture` varchar(300) NOT NULL,
  `link` varchar(100) NOT NULL,
  `position` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peopleagt`
--

INSERT INTO `peopleagt` (`ID`, `fullname`, `picture`, `link`, `position`) VALUES
(31, 'Pavol Hell', '9688.jpg', 'http://ace2us.com', 'Professor');

-- --------------------------------------------------------

--
-- Table structure for table `peoplecoop`
--

CREATE TABLE `peoplecoop` (
  `ID` int(40) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `picture` varchar(300) NOT NULL,
  `link` varchar(100) NOT NULL,
  `position` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peoplecsp`
--

CREATE TABLE `peoplecsp` (
  `ID` int(40) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `picture` varchar(300) NOT NULL,
  `link` varchar(100) NOT NULL,
  `position` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `ID` int(50) NOT NULL,
  `status` varchar(40) NOT NULL,
  `title` varchar(100) NOT NULL,
  `project` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`ID`, `status`, `title`, `project`) VALUES
(8, 'Current Project', 'Machine learning', 'Test'),
(9, 'Past Project', 'Approximation scheduling', 'We use integer linear programming ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `password`) VALUES
(1, 'arashr@sfu.ca', 'arashr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agtpub`
--
ALTER TABLE `agtpub`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cooppub`
--
ALTER TABLE `cooppub`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `csppub`
--
ALTER TABLE `csppub`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `peopleagt`
--
ALTER TABLE `peopleagt`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `peoplecoop`
--
ALTER TABLE `peoplecoop`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `peoplecsp`
--
ALTER TABLE `peoplecsp`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agtpub`
--
ALTER TABLE `agtpub`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cooppub`
--
ALTER TABLE `cooppub`
  MODIFY `ID` int(40) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `csppub`
--
ALTER TABLE `csppub`
  MODIFY `ID` int(40) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `peopleagt`
--
ALTER TABLE `peopleagt`
  MODIFY `ID` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `peoplecoop`
--
ALTER TABLE `peoplecoop`
  MODIFY `ID` int(40) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `peoplecsp`
--
ALTER TABLE `peoplecsp`
  MODIFY `ID` int(40) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
