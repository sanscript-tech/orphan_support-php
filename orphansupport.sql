-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 10, 2020 at 11:05 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orphansupport`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `blogArea` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `firstName`, `lastName`, `email`, `tags`, `title`, `blogArea`) VALUES
(1, 'Debargha ', 'MUkherjee', 'debargham15@gmail.com', 'Children', 'test data', 'test data'),
(2, 'Debargha ', 'MUkherjee', 'debargham15@gmail.com', 'Children', 'test data', 'test data');

-- --------------------------------------------------------

--
-- Table structure for table `childrendetails`
--

CREATE TABLE `childrendetails` (
  `id` int(255) NOT NULL,
  `nickName` varchar(255) NOT NULL,
  `orphanageName` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `orphanageId` int(255) NOT NULL,
  `orphanHistory` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(255) NOT NULL,
  `blogId` int(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `blogId`, `userName`, `email`, `msg`) VALUES
(1, 2, 'debargha', 'debargham14@gmail.com', 'test data'),
(2, 2, 'debargha', 'a@d.n', 'test data'),
(3, 2, 'adrian', 'a@d.n', 'test data 2'),
(4, 1, 'debargha', 'debargham14@gmail.com', 'test'),
(5, 1, 'debargha', 'debargham14@gmail.com', 'test'),
(6, 1, 'Doggo me', 'd@n.a', 'test'),
(7, 1, 'adrian', 'a@d.n', 'test 4');

-- --------------------------------------------------------

--
-- Table structure for table `donateus`
--

CREATE TABLE `donateus` (
  `id` int(255) NOT NULL,
  `donaterName` varchar(255) NOT NULL,
  `donaterPhoneNumber` int(255) NOT NULL,
  `donaterEmail` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `stripeCheckoutSession` varchar(255) NOT NULL,
  `donatedAmount` int(255) NOT NULL,
  `donatingIssue` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Table structure for table `eventpage`
--

CREATE TABLE `eventpage` (
  `id` int(255) NOT NULL,
  `eventDetails` varchar(255) NOT NULL,
  `eventLocation` varchar(255) NOT NULL,
  `startTime` datetime(6) NOT NULL,
  `endTime` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Table structure for table `orphanagedetails`
--

CREATE TABLE `orphanagedetails` (
  `id` int(255) NOT NULL,
  `orphanageName` varchar(255) NOT NULL,
  `orphanageAddress` varchar(500) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `emailId` varchar(255) NOT NULL,
  `contactDetails` int(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Table structure for table `parentdetails`
--

CREATE TABLE `parentdetails` (
  `id` int(255) NOT NULL,
  `fatherName` varchar(255) NOT NULL,
  `fatherAge` int(20) NOT NULL,
  `motherName` varchar(255) NOT NULL,
  `motherAge` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `residentialAddress` varchar(1000) NOT NULL,
  `phoneNumber` int(30) NOT NULL,
  `optionalPhoneNumber` int(30) NOT NULL,
  `perAnnumIncome` int(255) NOT NULL,
  `purposeOfVisitingSite` varchar(500) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Table structure for table `reportissue`
--

CREATE TABLE `reportissue` (
  `id` int(255) NOT NULL,
  `issueType` varchar(255) NOT NULL,
  `issueDetails` varchar(255) NOT NULL,
  `issueReporterName` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `location` varchar(255) NOT NULL,
  `issueStatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(255) NOT NULL,
  `parent_comment_id` int(255) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `comment_sender_name` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(23, 0, '  Nice Work', 'debargha', '2020-11-10 17:19:34');

-- --------------------------------------------------------

--
-- Table structure for table `visitordetails`
--

CREATE TABLE `visitordetails` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `emailId` varchar(255) NOT NULL,
  `contactNumber` int(30) NOT NULL,
  `age` int(20) NOT NULL,
  `purposeOfVisit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `childrendetails`
--
ALTER TABLE `childrendetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donateus`
--
ALTER TABLE `donateus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventpage`
--
ALTER TABLE `eventpage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orphanagedetails`
--
ALTER TABLE `orphanagedetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parentdetails`
--
ALTER TABLE `parentdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reportissue`
--
ALTER TABLE `reportissue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `visitordetails`
--
ALTER TABLE `visitordetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `childrendetails`
--
ALTER TABLE `childrendetails`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `donateus`
--
ALTER TABLE `donateus`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `eventpage`
--
ALTER TABLE `eventpage`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orphanagedetails`
--
ALTER TABLE `orphanagedetails`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parentdetails`
--
ALTER TABLE `parentdetails`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reportissue`
--
ALTER TABLE `reportissue`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `visitordetails`
--
ALTER TABLE `visitordetails`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;