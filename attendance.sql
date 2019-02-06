-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 06, 2019 at 01:37 AM
-- Server version: 10.1.34-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `Attendance_Master`
--

CREATE TABLE `Attendance_Master` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(11) NOT NULL,
  `time_in` datetime NOT NULL,
  `time_out` datetime NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Employee_Login_Master`
--

CREATE TABLE `Employee_Login_Master` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_type_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Employee_Login_Master`
--

INSERT INTO `Employee_Login_Master` (`id`, `employee_id`, `password`, `last_login`, `register_date`, `user_type_id`) VALUES
(1, 'e0971', 'admin', '2019-02-06 09:20:19', '2019-02-05 15:32:56', 3),
(2, '1fbe41', 'admin', '2019-02-06 09:20:17', '2019-02-05 15:39:14', 1),
(3, '464c42', 'admin', '2019-02-06 09:20:15', '2019-02-05 15:47:22', 3),
(4, 'ea4543', 'admin', '2019-02-06 09:20:13', '2019-02-06 07:49:19', 3),
(6, '5ede45', 'admin', '2019-02-06 09:20:09', '2019-02-06 07:53:34', 3),
(7, 'b65246', 'admin', '2019-02-06 07:56:06', '2019-02-06 07:56:06', 2);

-- --------------------------------------------------------

--
-- Table structure for table `Employee_Master`
--

CREATE TABLE `Employee_Master` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `birth_day` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_main` varchar(11) NOT NULL,
  `phone_home` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Employee_Master`
--

INSERT INTO `Employee_Master` (`id`, `employee_id`, `first_name`, `last_name`, `middle_name`, `birth_day`, `address`, `phone_main`, `phone_home`, `email`, `gender`, `created`, `status_id`) VALUES
(40, 'e0971', 'Julayus', 'Castillo', 'Cruda', '2019-02-04', 'asdasdasdasd', '11111111111', '11111111111', 'pong@gmail.com', 'Male', '2019-02-06 07:32:56', 1),
(41, '1fbe41', 'Noli II ', 'Master', 'Master', '2019-02-14', 'asdasdasdasd', '11111111112', '11111111112', 'masterNOLI@gmail.com', 'Male', '2019-02-06 07:39:14', 1),
(42, '464c42', 'Rai', 'Master', 'Master', '2019-02-11', 'asdasdasdasd', '11111111113', '11111111113', 'masterRAI@gmail.com', 'Male', '2019-02-06 07:47:22', 1),
(43, 'ea4543', 'Pongers', 'Pong', 'Pong', '2019-02-05', 'asdasdsasad', '11111114444', '11111114444', 'pong123@gmail.com', 'Male', '2019-02-06 07:49:19', 1),
(44, '438544', 'Admin', 'Admin', 'Admin', '2019-02-05', '11111114422', '11111114422', '11111114422', 'admin@gmail.com', 'Male', '2019-02-06 07:51:55', 1),
(45, '5ede45', 'Julayus', 'Julayus', 'Julayus', '2019-02-05', 'asdasdasdasd', '11111111118', '11111111118', 'Julayus@gmail.com', 'Male', '2019-02-06 07:53:34', 1),
(46, 'b65246', 'Julayus', 'Julayus', 'Julayus', '2019-02-05', 'dadasdas', '21111111111', '21111111111', 'Julayus123@gmail.com', 'Male', '2019-02-06 07:56:06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Employee_Status_Master`
--

CREATE TABLE `Employee_Status_Master` (
  `id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Employee_Status_Master`
--

INSERT INTO `Employee_Status_Master` (`id`, `status`) VALUES
(1, 'Active'),
(2, 'Suspended'),
(3, 'On Leave'),
(4, 'Terminated');

-- --------------------------------------------------------

--
-- Table structure for table `Leave_Master`
--

CREATE TABLE `Leave_Master` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `leave_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Leave_Type_Master`
--

CREATE TABLE `Leave_Type_Master` (
  `id` int(11) NOT NULL,
  `leave_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Leave_Type_Master`
--

INSERT INTO `Leave_Type_Master` (`id`, `leave_type`) VALUES
(1, 'Sick Leave'),
(2, 'Paid Vacation Leave'),
(3, 'Unpaid Vacation Leave\r\n\r\n'),
(4, 'Matternity Leave');

-- --------------------------------------------------------

--
-- Table structure for table `Schedule_Master`
--

CREATE TABLE `Schedule_Master` (
  `id` int(11) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `User_Type_Master`
--

CREATE TABLE `User_Type_Master` (
  `id` int(11) NOT NULL,
  `user_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `User_Type_Master`
--

INSERT INTO `User_Type_Master` (`id`, `user_type`) VALUES
(1, 'Employee'),
(2, 'HR'),
(3, 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Attendance_Master`
--
ALTER TABLE `Attendance_Master`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `Employee_Login_Master`
--
ALTER TABLE `Employee_Login_Master`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_type_id` (`user_type_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `Employee_Master`
--
ALTER TABLE `Employee_Master`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone_main` (`phone_main`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `employee_id` (`employee_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indexes for table `Employee_Status_Master`
--
ALTER TABLE `Employee_Status_Master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Leave_Master`
--
ALTER TABLE `Leave_Master`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_id` (`employee_id`),
  ADD KEY `leave_type_id` (`leave_type_id`);

--
-- Indexes for table `Leave_Type_Master`
--
ALTER TABLE `Leave_Type_Master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Schedule_Master`
--
ALTER TABLE `Schedule_Master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `User_Type_Master`
--
ALTER TABLE `User_Type_Master`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Attendance_Master`
--
ALTER TABLE `Attendance_Master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Employee_Login_Master`
--
ALTER TABLE `Employee_Login_Master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `Employee_Master`
--
ALTER TABLE `Employee_Master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `Employee_Status_Master`
--
ALTER TABLE `Employee_Status_Master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `Leave_Master`
--
ALTER TABLE `Leave_Master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Leave_Type_Master`
--
ALTER TABLE `Leave_Type_Master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `Schedule_Master`
--
ALTER TABLE `Schedule_Master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `User_Type_Master`
--
ALTER TABLE `User_Type_Master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Attendance_Master`
--
ALTER TABLE `Attendance_Master`
  ADD CONSTRAINT `Attendance_Master_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `Employee_Master` (`employee_id`);

--
-- Constraints for table `Employee_Login_Master`
--
ALTER TABLE `Employee_Login_Master`
  ADD CONSTRAINT `Employee_Login_Master_ibfk_2` FOREIGN KEY (`user_type_id`) REFERENCES `User_Type_Master` (`id`),
  ADD CONSTRAINT `Employee_Login_Master_ibfk_3` FOREIGN KEY (`employee_id`) REFERENCES `Employee_Master` (`employee_id`);

--
-- Constraints for table `Employee_Master`
--
ALTER TABLE `Employee_Master`
  ADD CONSTRAINT `Employee_Master_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `Employee_Status_Master` (`id`);

--
-- Constraints for table `Leave_Master`
--
ALTER TABLE `Leave_Master`
  ADD CONSTRAINT `Leave_Master_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `Employee_Master` (`id`),
  ADD CONSTRAINT `Leave_Master_ibfk_2` FOREIGN KEY (`leave_type_id`) REFERENCES `Leave_Type_Master` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
