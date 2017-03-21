-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2017 at 07:25 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `easydata`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `username`, `password`, `email`) VALUES
(1, 'Ezekiel', 'Sebastine', 'ezekiel', '12345', 'ezekielsebastine@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `researchdata`
--

CREATE TABLE IF NOT EXISTS `researchdata` (
`id` int(11) NOT NULL,
  `title` text NOT NULL,
  `category` text NOT NULL,
  `sdescription` text NOT NULL,
  `ldescription` text NOT NULL,
  `abstract` text NOT NULL,
  `link` text NOT NULL,
  `author` varchar(100) NOT NULL,
  `pdate` date NOT NULL,
  `update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `researchdata`
--

INSERT INTO `researchdata` (`id`, `title`, `category`, `sdescription`, `ldescription`, `abstract`, `link`, `author`, `pdate`, `update`) VALUES
(1, 'HEheh', 'health', 'mmdmmd', 'this is a long description', 'This is an abstract from db', 'files/Ezekiel Sebastine CV.pdf', 'Ezekiel Sebastinr', '2017-03-12', '2017-03-14 16:38:42'),
(2, 'Health and rural telephony', 'health', 'This is some data on health and rural telephony', '', '', 'files/Tutor groups.pdf', '', '0000-00-00', '2017-03-14 16:38:35'),
(3, 'Health', 'health', 'this is a test description', '', '', 'files/Ezekiel Sebastine CV.pdf', '', '0000-00-00', '2017-03-14 14:49:31'),
(4, 'Asia in Africa', 'literature', 'Hello world ffile', '', '', 'files/Database assignment.pdf', '', '0000-00-00', '2017-03-14 14:49:31'),
(5, 'New test', 'test', 'Hello world test', '', '', 'files/MCF Admissions Acceptance Form - July 2014.pdf', '', '0000-00-00', '2017-03-14 14:49:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `researchdata`
--
ALTER TABLE `researchdata`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `researchdata`
--
ALTER TABLE `researchdata`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
