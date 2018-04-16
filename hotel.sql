-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2018 at 05:06 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `uid` int(255) NOT NULL,
  `hid` int(255) NOT NULL,
  `chkin` varchar(50) NOT NULL,
  `chkout` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`uid`, `hid`, `chkin`, `chkout`, `type`, `price`) VALUES
(2, 1, '04/15/2018', '04/16/2018', 'sprice', 0),
(2, 1, '04/16/2018', '04/17/2018', 'sprice', 0),
(2, 1, '04/16/2018', '04/17/2018', 'sprice', 0),
(2, 1, '04/15/2018', '04/16/2018', 'sprice', 0),
(2, 1, '04/17/2018', '04/17/2018', 'sprice', 0),
(0, 3, '04/17/2018', '04/18/2018', 'dprice', 0);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `location` text NOT NULL,
  `sroom` int(255) NOT NULL,
  `sroomo` int(255) NOT NULL,
  `sprice` int(255) NOT NULL,
  `droom` int(255) NOT NULL,
  `droomo` int(255) NOT NULL,
  `dprice` int(255) NOT NULL,
  `froom` int(255) NOT NULL,
  `froomo` int(255) NOT NULL,
  `fprice` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `name`, `address`, `location`, `sroom`, `sroomo`, `sprice`, `droom`, `droomo`, `dprice`, `froom`, `froomo`, `fprice`) VALUES
(1, 'Hotel star', 'a/77,something is there', 'surat', 20, 10, 100, 20, 11, 200, 10, 5, 500),
(2, 'jordaar', 'a/85,jassnasss', 'surat', 15, 2, 100, 15, 3, 400, 15, 4, 800),
(3, 'Black Paper', 'Ichhanath', 'Surat', 10, 0, 300, 10, 0, 600, 10, 0, 900),
(4, 'Oyo Rooms', 'Hawrah', 'Kolkata', 20, 10, 200, 20, 5, 300, 20, 3, 400),
(5, 'The hotels', 'm.g.road', 'Vadodara', 20, 10, 150, 20, 10, 400, 20, 5, 600),
(6, 'Hotel Perl', 'NH-8', 'surat', 10, 10, 250, 10, 2, 400, 10, 0, 700);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `fname`, `lname`, `address`, `city`, `state`) VALUES
(2, 'jasujnasit48@gmail.com', '123', 'jasmin', 'nasit', 'a/77,bapasitaram', 'surat', 'gujarat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
