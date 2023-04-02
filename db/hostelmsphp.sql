-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2023 at 01:09 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostelmsphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(300) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `reg_date`, `updation_date`) VALUES
(1, 'admin', 'admin@mail.com', 'D00F5D5217896FB7FD601412CB890830', '2020-09-08 20:31:45', '2021-03-07');

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `id` int(11) NOT NULL,
  `adminid` int(11) NOT NULL,
  `ip` varbinary(16) NOT NULL,
  `logintime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `course_sn` varchar(255) NOT NULL,
  `course_fn` varchar(255) NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `course_sn`, `course_fn`, `posting_date`) VALUES
(1, 'BT1', 'B.Tech', 'Computer Science and Engineering', '2020-09-23 00:45:13'),
(2, 'BT2', 'B.Tech', 'Electronics and Communication Engineering ', '2020-09-23 00:45:13'),
(3, 'MT1', 'M.Tech', 'Computer Science and Engineering', '2020-09-23 00:45:13'),
(11, 'MT2', 'M.Tech', 'Electronics and Communication Engineering', '2023-03-31 11:37:24');

-- --------------------------------------------------------

--
-- Table structure for table `grievance`
--

CREATE TABLE `grievance` (
  `regNo` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `roomno` int(11) NOT NULL,
  `grievance` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `roomno` int(11) NOT NULL,
  `seater` int(11) NOT NULL,
  `feespm` int(11) NOT NULL,
  `foodstatus` int(11) NOT NULL,
  `stayfrom` date NOT NULL,
  `duration` int(11) NOT NULL,
  `course` varchar(500) NOT NULL,
  `regNo` int(255) NOT NULL,
  `firstName` varchar(500) NOT NULL,
  `middleName` varchar(500) NOT NULL,
  `lastName` varchar(500) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `contactno` bigint(11) NOT NULL,
  `emailid` varchar(500) NOT NULL,
  `egycontactno` bigint(11) NOT NULL,
  `guardianName` varchar(500) NOT NULL,
  `guardianRelation` varchar(500) NOT NULL,
  `guardianContactno` bigint(11) NOT NULL,
  `corresAddress` varchar(500) NOT NULL,
  `corresCIty` varchar(500) NOT NULL,
  `corresState` varchar(500) NOT NULL,
  `corresPincode` int(11) NOT NULL,
  `pmntAddress` varchar(500) NOT NULL,
  `pmntCity` varchar(500) NOT NULL,
  `pmnatetState` varchar(500) NOT NULL,
  `pmntPincode` int(11) NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `roomno`, `seater`, `feespm`, `foodstatus`, `stayfrom`, `duration`, `course`, `regNo`, `firstName`, `middleName`, `lastName`, `gender`, `contactno`, `emailid`, `egycontactno`, `guardianName`, `guardianRelation`, `guardianContactno`, `corresAddress`, `corresCIty`, `corresState`, `corresPincode`, `pmntAddress`, `pmntCity`, `pmnatetState`, `pmntPincode`, `postingDate`, `updationDate`) VALUES
(24, 112, 0, 1990, 1, '2023-03-15', 4, 'Computer Science and Engineering', 2001058, 'Cyrus', 'K', 'Dwivedi', 'Male', 1234567899, 'cyrus@gmail.com', 6378986733, 'Dilip Barmecha', 'Father', 9413942639, '129-A RK PURAM KOTA', 'Kota', '', 324010, '129-A RK PURAM KOTA', 'Kota', '', 324010, '2023-03-31 11:41:34', ''),
(27, 330, 0, 3000, 1, '2023-04-04', 4, 'Please Select...', 2001089, 'Hritik', 'K', 'Goyal', 'Male', 6378986733, 'hritik@gmail.com', 6378986733, 'Mukesh Kumar Goyal', 'Father', 9413942639, '129-A RK PURAM KOTA', 'Kota', '', 324010, '129-A RK PURAM KOTA', 'Kota', '', 324010, '2023-04-02 07:34:30', '');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `fees` int(11) NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_no`, `fees`, `posting_date`) VALUES
(1, 100, 3000, '2020-09-20 04:24:06'),
(2, 201, 3000, '2020-09-20 04:24:06'),
(3, 200, 3000, '2020-09-20 04:33:06'),
(4, 112, 3000, '2020-09-20 04:33:30'),
(5, 132, 3000, '2020-09-20 04:28:52'),
(6, 11, 3000, '2021-03-07 05:01:02'),
(7, 269, 3000, '2022-04-03 14:39:22'),
(8, 310, 3000, '2022-04-03 14:41:36'),
(9, 330, 3000, '2022-04-03 14:41:53'),
(10, 126, 3000, '2023-03-31 11:39:27');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `State` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `regNo` int(11) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userIp` varbinary(16) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `regNo`, `userEmail`, `userIp`, `city`, `country`, `loginTime`) VALUES
(30, 2001089, 'hritik@gmail.com', 0x3a3a31, '', '', '2023-03-31 11:22:54'),
(31, 2001089, 'hritik@gmail.com', 0x3a3a31, '', '', '2023-03-31 11:25:57'),
(32, 2001006, 'aayush@gmail.com', 0x3a3a31, '', '', '2023-03-31 11:28:14'),
(33, 2001089, 'hritik@gmail.com', 0x3a3a31, '', '', '2023-03-31 11:40:08'),
(34, 2001058, 'cyrus@gmail.com', 0x3a3a31, '', '', '2023-03-31 11:40:58'),
(35, 2001089, 'hritik@gmail.com', 0x3a3a31, '', '', '2023-03-31 11:54:19'),
(36, 2001089, 'hritik@gmail.com', 0x3a3a31, '', '', '2023-03-31 12:03:10'),
(37, 2001089, 'hritik@gmail.com', 0x3a3a31, '', '', '2023-03-31 12:05:16'),
(38, 2001089, 'hritik@gmail.com', 0x3a3a31, '', '', '2023-03-31 12:07:13'),
(39, 2001006, 'aayush@gmail.com', 0x3a3a31, '', '', '2023-03-31 12:38:11'),
(40, 2001006, 'aayush@gmail.com', 0x3a3a31, '', '', '2023-03-31 12:38:11'),
(41, 2001006, 'aayush@gmail.com', 0x3a3a31, '', '', '2023-03-31 12:38:49'),
(42, 2001089, 'hritik@gmail.com', 0x3a3a31, '', '', '2023-03-31 12:43:57'),
(43, 2001006, 'aayush@gmail.com', 0x3a3a31, '', '', '2023-03-31 12:45:43'),
(44, 2001006, 'aayush@gmail.com', 0x3a3a31, '', '', '2023-03-31 13:05:16'),
(45, 2001089, 'hritik@gmail.com', 0x3a3a31, '', '', '2023-03-31 13:05:35'),
(46, 2001089, 'hritik@gmail.com', 0x3a3a31, '', '', '2023-04-01 05:40:37'),
(47, 2001089, 'hritik@gmail.com', 0x3a3a31, '', '', '2023-04-01 05:54:44'),
(48, 2001089, 'hritik@gmail.com', 0x3a3a31, '', '', '2023-04-01 07:08:10'),
(49, 2001089, 'hritik@gmail.com', 0x3a3a31, '', '', '2023-04-01 07:15:45'),
(50, 2001089, 'hritik@gmail.com', 0x3a3a31, '', '', '2023-04-01 07:19:36'),
(51, 2001089, 'hritik@gmail.com', 0x3a3a31, '', '', '2023-04-01 07:21:21'),
(52, 2001089, 'hritik@gmail.com', 0x3a3a31, '', '', '2023-04-01 07:23:41'),
(53, 2001089, 'hritik@gmail.com', 0x3a3a31, '', '', '2023-04-02 06:08:13'),
(54, 2001089, 'hritik@gmail.com', 0x3a3a31, '', '', '2023-04-02 06:09:43'),
(55, 2001006, 'aayush@gmail.com', 0x3a3a31, '', '', '2023-04-02 06:15:21'),
(56, 2001006, 'aayush@gmail.com', 0x3a3a31, '', '', '2023-04-02 06:22:36'),
(57, 2001006, 'aayush@gmail.com', 0x3a3a31, '', '', '2023-04-02 06:25:22'),
(58, 2001006, 'aayush@gmail.com', 0x3a3a31, '', '', '2023-04-02 06:37:37'),
(59, 2001089, 'hritik@gmail.com', 0x3a3a31, '', '', '2023-04-02 06:56:07'),
(60, 2001006, 'aayush@gmail.com', 0x3a3a31, '', '', '2023-04-02 07:00:36'),
(61, 2001089, 'hritik@gmail.com', 0x3a3a31, '', '', '2023-04-02 07:15:58'),
(62, 2001089, 'hritik@gmail.com', 0x3a3a31, '', '', '2023-04-02 07:33:14'),
(63, 2001006, 'aayush@gmail.com', 0x3a3a31, '', '', '2023-04-02 07:46:52'),
(64, 2001089, 'hritik@gmail.com', 0x3a3a31, '', '', '2023-04-02 07:47:39'),
(65, 2001089, 'hritik@gmail.com', 0x3a3a31, '', '', '2023-04-02 09:50:47');

-- --------------------------------------------------------

--
-- Table structure for table `userregistration`
--

CREATE TABLE `userregistration` (
  `id` int(11) NOT NULL,
  `regNo` int(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contactNo` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(45) NOT NULL,
  `passUdateDate` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userregistration`
--

INSERT INTO `userregistration` (`id`, `regNo`, `firstName`, `middleName`, `lastName`, `gender`, `contactNo`, `email`, `password`, `regDate`, `updationDate`, `passUdateDate`) VALUES
(33, 2001089, 'Hritik', 'K', 'Goyal', 'Male', 6378986733, 'hritik@gmail.com', '869efc77714025828952f9f0b1b378f5', '2023-03-31 11:10:07', '', ''),
(34, 2001058, 'Cyrus', 'K', 'Dwivedi', 'Male', 1234567899, 'cyrus@gmail.com', '814d06654ea432cb721e1209b4947621', '2023-03-31 11:27:20', '', ''),
(35, 2001006, 'Aayush', 'D', 'Barmecha', 'Male', 1234567897, 'aayush@gmail.com', '6bc80b9416b95aac0cf7757fc1bb1e65', '2023-03-31 11:27:47', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grievance`
--
ALTER TABLE `grievance`
  ADD PRIMARY KEY (`regNo`,`grievance`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userregistration`
--
ALTER TABLE `userregistration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `userregistration`
--
ALTER TABLE `userregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
