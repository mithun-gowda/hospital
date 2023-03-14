-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2021 at 02:14 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospitech_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `ap_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `bookingfor` date NOT NULL,
  `booktime` varchar(10) NOT NULL,
  `bookedon` date NOT NULL,
  `purpose` varchar(60) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(5) NOT NULL,
  `dept_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`) VALUES
(2, 'Gynecology'),
(3, 'Nephrology'),
(4, 'Neurology'),
(5, 'Oncology'),
(6, 'Urology'),
(7, 'Orthopaedics'),
(13, 'Dental'),
(14, 'psychology');

-- --------------------------------------------------------

--
-- Table structure for table `feedaback`
--

CREATE TABLE `feedaback` (
  `feed_id` int(5) NOT NULL,
  `p_id` int(5) NOT NULL,
  `date` date NOT NULL,
  `content` varchar(50) NOT NULL,
  `rating` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inpatients`
--

CREATE TABLE `inpatients` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(20) NOT NULL,
  `phone` int(15) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `doctor` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `patient_type` varchar(10) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `Treatment` varchar(50) NOT NULL,
  `advance_payment` double NOT NULL,
  `room` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'in',
  `admt_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `leave`
--

CREATE TABLE `leave` (
  `lid` int(11) NOT NULL,
  `d_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(5) NOT NULL,
  `amount` int(6) NOT NULL,
  `date` date NOT NULL,
  `p_id` int(5) NOT NULL,
  `s_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `pres_id` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ap_id` int(11) NOT NULL,
  `pdate` date NOT NULL,
  `pstatus` varchar(30) NOT NULL DEFAULT 'not_done'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pres_details`
--

CREATE TABLE `pres_details` (
  `pdid` int(11) NOT NULL,
  `pres_id` int(11) NOT NULL,
  `med_name` varchar(40) NOT NULL,
  `disease` varchar(60) NOT NULL,
  `qty` int(20) NOT NULL,
  `before_after` varchar(30) NOT NULL,
  `consume_for` varchar(30) NOT NULL,
  `days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `r_id` int(5) NOT NULL,
  `floor` varchar(20) NOT NULL,
  `room_no` int(5) NOT NULL,
  `room_type` varchar(20) NOT NULL DEFAULT 'Normal',
  `unit_price` int(5) NOT NULL,
  `availability` varchar(20) NOT NULL DEFAULT 'available'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `sid` int(11) NOT NULL,
  `d_id` int(11) NOT NULL,
  `stime` time NOT NULL,
  `etime` time NOT NULL,
  `am_pm` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(30) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `degree` varchar(10) NOT NULL,
  `department` int(11) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `staff_type` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `about` varchar(500) NOT NULL,
  `staff_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test_report`
--

CREATE TABLE `test_report` (
  `rep_id` int(5) NOT NULL,
  `p_id` int(5) NOT NULL,
  `tset_name` varchar(200) NOT NULL,
  `technology` varchar(100) NOT NULL,
  `amount` double NOT NULL,
  `result` varchar(2000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `first_nm` varchar(30) NOT NULL,
  `last_nm` varchar(30) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `security` varchar(80) NOT NULL,
  `answer` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `reg_date` date NOT NULL,
  `image` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`ap_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `did` (`did`),
  ADD KEY `user_id_2` (`user_id`),
  ADD KEY `did_2` (`did`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `feedaback`
--
ALTER TABLE `feedaback`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `inpatients`
--
ALTER TABLE `inpatients`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `leave`
--
ALTER TABLE `leave`
  ADD PRIMARY KEY (`lid`),
  ADD KEY `d_id` (`d_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`pres_id`),
  ADD KEY `did` (`did`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `ap_id` (`ap_id`),
  ADD KEY `user_id_2` (`user_id`);

--
-- Indexes for table `pres_details`
--
ALTER TABLE `pres_details`
  ADD PRIMARY KEY (`pdid`),
  ADD KEY `pres_id` (`pres_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `did` (`d_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `department` (`department`);

--
-- Indexes for table `test_report`
--
ALTER TABLE `test_report`
  ADD PRIMARY KEY (`rep_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `ap_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `feedaback`
--
ALTER TABLE `feedaback`
  MODIFY `feed_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inpatients`
--
ALTER TABLE `inpatients`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leave`
--
ALTER TABLE `leave`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `pres_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pres_details`
--
ALTER TABLE `pres_details`
  MODIFY `pdid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `r_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test_report`
--
ALTER TABLE `test_report`
  MODIFY `rep_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`did`) REFERENCES `staff` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `leave`
--
ALTER TABLE `leave`
  ADD CONSTRAINT `leave_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `staff` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prescription`
--
ALTER TABLE `prescription`
  ADD CONSTRAINT `prescription_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prescription_ibfk_2` FOREIGN KEY (`did`) REFERENCES `staff` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prescription_ibfk_3` FOREIGN KEY (`ap_id`) REFERENCES `appointment` (`ap_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pres_details`
--
ALTER TABLE `pres_details`
  ADD CONSTRAINT `pres_details_ibfk_1` FOREIGN KEY (`pres_id`) REFERENCES `prescription` (`pres_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `staff` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`department`) REFERENCES `department` (`dept_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
