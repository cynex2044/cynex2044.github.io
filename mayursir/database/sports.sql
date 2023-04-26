-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2022 at 06:09 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sports`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `junior`
--

CREATE TABLE `junior` (
  `no` int(255) NOT NULL,
  `lotno` int(255) NOT NULL,
  `idc` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dist` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `age` int(255) NOT NULL,
  `bw` float NOT NULL,
  `sn1` int(255) NOT NULL,
  `sn2` int(255) NOT NULL,
  `sn3` int(255) NOT NULL,
  `snmax` int(255) NOT NULL,
  `cj1` int(255) NOT NULL,
  `cj2` int(255) NOT NULL,
  `cj3` int(255) NOT NULL,
  `cjmax` int(255) NOT NULL,
  `total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `junior`
--

INSERT INTO `junior` (`no`, `lotno`, `idc`, `name`, `gender`, `dist`, `dob`, `age`, `bw`, `sn1`, `sn2`, `sn3`, `snmax`, `cj1`, `cj2`, `cj3`, `cjmax`, `total`) VALUES
(16, 16, 16, 'users', 'male', 'navsari', '2002-10-15', 12, 80, 99, 99, 99, 99, 99, 99, 99, 99, 198),
(18, 18, 18, 'users', 'male', 'navsari', '2004-01-07', 12, 45.56, 45, 0, 0, 0, 55, 0, 0, 0, 0),
(25, 25, 25, 'users', 'male', 'navsari', '2004-05-06', 12, 80, 45, 0, 0, 0, 55, 0, 0, 0, 0),
(26, 26, 26, 'vhvhv', 'male', 'navsari', '2004-02-03', 21, 80, 0, 0, 0, 10, 0, 0, 0, 10, 20);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `no` int(255) NOT NULL,
  `lotno` float NOT NULL,
  `idc` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dist` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `age` int(255) NOT NULL,
  `bw` float NOT NULL,
  `sn1` int(255) NOT NULL,
  `sn2` int(255) NOT NULL,
  `sn3` int(255) NOT NULL,
  `snmax` int(255) NOT NULL,
  `cj1` int(255) NOT NULL,
  `cj2` int(255) NOT NULL,
  `cj3` int(255) NOT NULL,
  `cjmax` int(11) NOT NULL,
  `total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`no`, `lotno`, `idc`, `name`, `gender`, `dist`, `dob`, `age`, `bw`, `sn1`, `sn2`, `sn3`, `snmax`, `cj1`, `cj2`, `cj3`, `cjmax`, `total`) VALUES
(1, 1, 1, 'qqqqqq', 'male', 'navsari', '2003-12-29', 23, 80, 45, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 2, 2, 'retby', '', 'navsari', '2022-02-02', 0, 55.5, 55, 56, -55, 56, 55, 56, 60, 60, 116),
(3, 3, 3, 'tttt', '', 'navsari', '2022-02-01', 0, 55.5, 45, 65, 45, 0, 70, 70, 70, 0, 0),
(4, 5, 4, 'aaaa', '', 'navsari', '2022-01-05', 0, 80, 45, 78, 45, 0, 55, 46, 60, 0, 0),
(5, 6, 5, 'bbbb', '', 'navsari', '2022-02-02', 0, 90, 45, 45, 45, 0, 55, 46, 60, 0, 0),
(7, 7, 7, 'cccc', '', 'navsari', '2022-02-01', 0, 50, 50, -50, 40, 0, 55, -60, 55, 0, 0),
(8, 8, 8, 'kkkkk', '', 'navsari', '2022-02-02', 0, 45.56, 45, 45, 45, 24, 55, 46, 60, 23, 0),
(9, 9, 9, 'retby', '', 'navsari', '2022-02-03', 0, 80, 45, 0, 0, 0, 55, 0, 0, 0, 0),
(10, 10, 10, 'rrr', '', 'navsari', '2022-02-02', 0, 80, 45, 45, 45, 24, 55, 46, 60, 99, 123),
(11, 11, 11, 'www', 'male', 'navsari', '2022-02-04', 0, 80, 45, 0, 0, 0, 55, 0, 0, 0, 0),
(12, 12, 12, 'jr', 'male', 'navsari', '2009-01-05', 0, 80, 45, 0, 0, 0, 99, 0, 0, 0, 0),
(13, 13, 13, 'oooo', 'male', 'navsari', '2007-01-06', 6, 80, 45, 0, 0, 0, 55, 0, 0, 0, 0),
(14, 14, 14, 'users', 'male', 'navsari', '2006-03-01', 14, 80, 45, 0, 0, 0, 55, 0, 0, 0, 0),
(15, 15, 15, 'users', 'male', 'navsari', '2005-12-31', 15, 80, 45, 0, 0, 0, 55, 0, 0, 0, 0),
(16, 16, 16, 'users', 'male', 'navsari', '2002-10-15', 12, 80, 99, 99, 99, 99, 99, 99, 99, 99, 198),
(17, 17, 17, 'users', 'male', 'navsari', '2000-12-31', 21, 80, 45, 45, 45, 24, 55, 46, 60, 99, 123),
(18, 18, 18, 'users', 'male', 'navsari', '2004-01-07', 12, 45.56, 45, 0, 0, 0, 55, 0, 0, 0, 0),
(19, 19, 19, 'jjjj', 'male', 'navsari', '2001-06-05', 21, 80, 45, 0, 0, 0, 55, 0, 0, 0, 0),
(20, 20, 20, 'users', 'male', 'navsari', '2001-01-30', 20, 45.56, 45, 0, 0, 0, 55, 0, 0, 0, 0),
(21, 21, 21, 'retby', 'male', 'navsari', '2001-01-08', 21, 45.56, 45, 0, 0, 0, 55, 0, 0, 0, 0),
(22, 22, 22, 'users', 'female', 'navsari', '2001-01-31', 21, 45.56, 45, 0, 0, 0, 55, 0, 0, 0, 0),
(23, 23, 23, 'users', 'female', 'navsari', '2007-01-01', 12, 45, 45, 0, 0, 0, 55, 0, 0, 0, 0),
(24, 24, 24, 'jhfjh', 'male', 'navsari', '2007-06-04', 12, 78, 45, 0, 0, 0, 45, 0, 0, 0, 0),
(25, 25, 25, 'users', 'male', 'navsari', '2004-05-06', 12, 80, 45, 0, 0, 0, 55, 0, 0, 0, 0),
(26, 26, 26, 'vhvhv', 'male', 'navsari', '2004-02-03', 21, 80, 0, 0, 0, 10, 0, 0, 0, 10, 20);

-- --------------------------------------------------------

--
-- Table structure for table `senior`
--

CREATE TABLE `senior` (
  `no` int(255) NOT NULL,
  `lotno` int(255) NOT NULL,
  `idc` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dist` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `age` int(255) NOT NULL,
  `bw` float NOT NULL,
  `sn1` int(255) NOT NULL,
  `sn2` int(255) NOT NULL,
  `sn3` int(255) NOT NULL,
  `snmax` int(255) NOT NULL,
  `cj1` int(255) NOT NULL,
  `cj2` int(255) NOT NULL,
  `cj3` int(255) NOT NULL,
  `cjmax` int(255) NOT NULL,
  `total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `senior`
--

INSERT INTO `senior` (`no`, `lotno`, `idc`, `name`, `gender`, `dist`, `dob`, `age`, `bw`, `sn1`, `sn2`, `sn3`, `snmax`, `cj1`, `cj2`, `cj3`, `cjmax`, `total`) VALUES
(17, 17, 17, 'users', '0', 'navsari', '2000-12-31', 21, 80, 45, 45, 45, 24, 55, 46, 60, 99, 123),
(19, 19, 19, 'jjjj', '0', 'navsari', '2001-06-05', 21, 80, 45, 0, 0, 0, 55, 0, 0, 0, 0),
(20, 20, 20, 'users', '0', 'navsari', '2001-01-30', 20, 45.56, 45, 0, 0, 0, 55, 0, 0, 0, 0),
(21, 21, 21, 'retby', 'male', 'navsari', '2001-01-08', 21, 45.56, 45, 0, 0, 0, 55, 0, 0, 0, 0),
(22, 22, 22, 'users', 'female', 'navsari', '2001-01-31', 21, 45.56, 45, 0, 0, 0, 55, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `youth`
--

CREATE TABLE `youth` (
  `no` int(255) NOT NULL,
  `lotno` int(255) NOT NULL,
  `idc` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dist` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `age` int(255) NOT NULL,
  `bw` float NOT NULL,
  `sn1` int(255) NOT NULL,
  `sn2` int(255) NOT NULL,
  `sn3` int(255) NOT NULL,
  `snmax` int(255) NOT NULL,
  `cj1` int(255) NOT NULL,
  `cj2` int(255) NOT NULL,
  `cj3` int(255) NOT NULL,
  `cjmax` int(255) NOT NULL,
  `total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `youth`
--

INSERT INTO `youth` (`no`, `lotno`, `idc`, `name`, `gender`, `dist`, `dob`, `age`, `bw`, `sn1`, `sn2`, `sn3`, `snmax`, `cj1`, `cj2`, `cj3`, `cjmax`, `total`) VALUES
(23, 23, 23, 'users', 'female', 'navsari', '2007-01-01', 12, 45, 45, 0, 0, 0, 55, 0, 0, 0, 0),
(24, 24, 24, 'jhfjh', 'male', 'navsari', '2007-06-04', 12, 78, 45, 0, 0, 0, 45, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `junior`
--
ALTER TABLE `junior`
  ADD PRIMARY KEY (`lotno`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`lotno`);

--
-- Indexes for table `senior`
--
ALTER TABLE `senior`
  ADD PRIMARY KEY (`lotno`);

--
-- Indexes for table `youth`
--
ALTER TABLE `youth`
  ADD PRIMARY KEY (`lotno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
