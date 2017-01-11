-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2016 at 01:36 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wda`
--

-- --------------------------------------------------------

--
-- Table structure for table `flight_info`
--

CREATE TABLE `flight_info` (
  `flight_id` int(11) NOT NULL,
  `depart_from` varchar(32) NOT NULL,
  `depart_to` varchar(32) NOT NULL,
  `depart_date` text NOT NULL,
  `depart_time` text NOT NULL,
  `arrival_date` text NOT NULL,
  `arrival_time` text NOT NULL,
  `price` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight_info`
--

INSERT INTO `flight_info` (`flight_id`, `depart_from`, `depart_to`, `depart_date`, `depart_time`, `arrival_date`, `arrival_time`, `price`) VALUES
(1, 'Penang', 'Kuala Lumpur', '2016:10:15', '12:45:00', '2016:10:25', '15:05:00', 99),
(23, 'Penang', 'Langkawi', '2016:10:31', '14:45:00', '2016:10:31', '17:05:00', 129),
(24, 'Penang', 'kuantan', '2016:10:15', '12:45:00', '2016:10:25', '15:05:00', 159),
(25, 'Kuala Lumpur', 'Langkawi', '2016:10:31', '14:45:00', '2016:10:31', '17:05:00', 129),
(26, 'Kuala Lumpur', 'Redang', '2016:10:15', '12:45:00', '2016:10:25', '15:05:00', 159),
(27, 'Redang', 'Kuantan', '2016:10:31', '14:45:00', '2016:10:31', '17:05:00', 129),
(28, 'Miri', 'kuantan', '2016:10:15', '12:45:00', '2016:10:25', '15:05:00', 159),
(29, 'Sibu', 'Langkawi', '2016:10:31', '14:45:00', '2016:10:31', '17:05:00', 129),
(30, 'Penang', 'Kuala Lumpur', '2016:10:15', '12:45:00', '2016:10:25', '15:05:00', 159),
(31, 'Penang', 'Langkawi', '2016:10:31', '14:45:00', '2016:10:31', '17:05:00', 129),
(32, 'Penang', 'kuantan', '2016:10:15', '12:45:00', '2016:10:25', '15:05:00', 159),
(33, 'Kuala Lumpur', 'Langkawi', '2016:10:31', '14:45:00', '2016:10:31', '17:05:00', 99),
(34, 'Pangkor', 'Redang', '2016:10:15', '12:45:00', '2016:10:25', '15:05:00', 199),
(35, 'Redang', 'Kuantan', '2016:10:31', '16:45:00', '2016:10:31', '18:05:00', 129),
(36, 'Miri', 'kuantan', '2016:10:15', '12:45:00', '2016:10:25', '15:05:00', 188),
(37, 'Sibu', 'Langkawi', '2016:10:31', '14:45:00', '2016:10:31', '16:05:00', 129),
(38, 'Penang', 'Kuala Lumpur', '2016:10:15', '12:45:00', '2016:10:25', '15:05:00', 159),
(39, 'Kota Kinabalu', 'Langkawi', '2016:10:31', '14:15:00', '2016:10:31', '17:05:00', 155),
(40, 'Penang', 'kuantan', '2016:10:15', '06:45:00', '2016:10:25', '10:05:00', 159),
(41, 'Kuala Lumpur', 'Langkawi', '2016:10:31', '14:45:00', '2016:10:31', '17:05:00', 99),
(42, 'Redang', 'Miri', '2016:10:15', '08:45:00', '2016:10:25', '12:15:00', 159),
(43, 'Redang', 'Kuantan', '2016:10:31', '14:45:00', '2016:10:31', '17:05:00', 139),
(44, 'Johor Bahru', 'kuantan', '2016:10:15', '12:05:00', '2016:10:25', '14:35:00', 159),
(45, 'Kuching', 'Langkawi', '2016:10:31', '14:45:00', '2016:10:31', '17:05:00', 199),
(46, 'Kota Kinabalu', 'Kuala Lumpur', '2016:10:15', '12:45:00', '2016:10:25', '15:05:00', 189),
(47, 'Pangkor', 'Langkawi', '2016:10:31', '14:45:00', '2016:10:31', '17:05:00', 129),
(48, 'Melacca', 'kuantan', '2016:10:15', '12:45:00', '2016:10:25', '15:05:00', 159),
(49, 'Kuala Lumpur', 'Langkawi', '2016:10:31', '14:45:00', '2016:10:31', '17:05:00', 129),
(50, 'Kuantan', 'Redang', '2016:10:15', '12:45:00', '2016:10:25', '15:05:00', 159),
(51, 'Redang', 'Melacca', '2016:10:31', '14:45:00', '2016:10:31', '17:05:00', 129),
(52, 'Miri', 'kuantan', '2016:10:15', '12:45:00', '2016:10:25', '15:05:00', 159),
(53, 'Sibu', 'Melacca', '2016:10:31', '14:45:00', '2016:10:31', '17:05:00', 129),
(54, 'Kota Kinabalu', 'Miri', '2016:10:31', '14:45:00', '2016:10:31', '17:05:00', 99),
(55, 'Redang', 'Miri', '2016:10:15', '08:45:00', '2016:10:25', '12:15:00', 159),
(56, 'Kuala Lumpur', 'Miri', '2016:10:31', '14:45:00', '2016:10:31', '17:05:00', 139),
(57, 'Johor Bahru', 'Melacca', '2016:10:15', '12:05:00', '2016:10:25', '14:35:00', 159),
(58, 'Kuala Lumpur', 'Kuching', '2016:10:31', '14:45:00', '2016:10:31', '17:05:00', 199),
(59, 'Kota Kinabalu', 'Melacca', '2016:10:15', '12:45:00', '2016:10:25', '15:05:00', 189),
(60, 'Langkawi', 'Kuching', '2016:10:31', '14:45:00', '2016:10:31', '17:05:00', 199),
(61, 'Langkawi', 'Melacca', '2016:10:15', '12:45:00', '2016:10:25', '15:05:00', 189);

-- --------------------------------------------------------

--
-- Table structure for table `flight_seat`
--

CREATE TABLE `flight_seat` (
  `seat_id` int(11) NOT NULL,
  `seat_no` int(11) NOT NULL,
  `plane` int(11) NOT NULL,
  `depart_from` varchar(32) NOT NULL,
  `depart_to` varchar(32) NOT NULL,
  `depart_date` text NOT NULL,
  `price` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight_seat`
--

INSERT INTO `flight_seat` (`seat_id`, `seat_no`, `plane`, `depart_from`, `depart_to`, `depart_date`, `price`) VALUES
(1, 22, 123123, 'Johor Bahru', 'Kuala Lumpur', '2016-10-22', 199),
(2, 45, 123123, 'Kuantan', 'Redang', '2016-10-25', 159),
(68, 67, 123123, 'Kuala Lumpur', 'Melacca', '2016-11-22', 129),
(69, 89, 123123, 'Kuantan', 'Redang', '2016-10-25', 139),
(70, 23, 123123, 'Melacca', 'Kuala Lumpur', '2016-10-22', 199),
(71, 12, 123123, 'Kuala Lumpur', 'Redang', '2016-12-05', 99),
(72, 11, 123123, 'Langkawi', 'Kuala Lumpur', '2016-10-22', 119),
(73, 54, 123123, 'Kuantan', 'Redang', '2016-11-15', 189),
(74, 98, 123123, 'Langkawi', 'Kuala Lumpur', '2016-10-22', 149),
(75, 78, 123123, 'Penang', 'Redang', '2016-11-02', 159),
(76, 67, 123123, 'Johor Bahru', 'Melacca', '2016-10-22', 139),
(77, 56, 123123, 'Redang', 'Penang', '2016-10-25', 159),
(78, 65, 123123, 'Langkawi', 'Kuala Lumpur', '2016-12-22', 129),
(79, 33, 123123, 'Kuantan', 'Miri', '2016-12-15', 159),
(80, 25, 123123, 'Miri', 'Kuala Lumpur', '2016-10-22', 199),
(81, 38, 123123, 'Redang', 'Sibu', '2016-10-25', 129);

-- --------------------------------------------------------

--
-- Table structure for table `flight_ticket`
--

CREATE TABLE `flight_ticket` (
  `ticket_id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `passport` varchar(15) NOT NULL,
  `visa` varchar(15) NOT NULL,
  `country` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(32) NOT NULL,
  `departing_from` varchar(32) NOT NULL,
  `departing_to` varchar(32) NOT NULL,
  `depart_date` text NOT NULL,
  `depart_time` text NOT NULL,
  `arrival_date` text,
  `arrival_time` text NOT NULL,
  `price` int(32) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight_ticket`
--

INSERT INTO `flight_ticket` (`ticket_id`, `first_name`, `last_name`, `passport`, `visa`, `country`, `address`, `email`, `departing_from`, `departing_to`, `depart_date`, `depart_time`, `arrival_date`, `arrival_time`, `price`) VALUES
(88, 'James', 'Tan', '123456', '5678', 'Malaysia', 'Penang', 'james@gmail.com', 'Kota Kinabalu', 'Langkawi', '2016:10:31', '14:15:00', '2016:10:31', '17:05:00', 155);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(20) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `email_code` varchar(32) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `type` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `first_name`, `last_name`, `email`, `email_code`, `active`, `type`) VALUES
(63, 'james', '4297f44b13955235245b2497399d7a93', 'James', 'Tan', 'james@gmail.com', '5a3cead8077110ec31c101a279084167', 1, 0),
(64, 'Joseph', '4297f44b13955235245b2497399d7a93', 'Joseph', 'Kang', 'jos@gmail.com', '18f775445e717567da2166ddbccd8385', 1, 0),
(65, 'ali', '4297f44b13955235245b2497399d7a93', 'Muhammad', 'Ali', 'ali@gmail.com', '3a595c2ec04d4db9d827e2a9dfe04960', 1, 0),
(66, 'Sarah', '4297f44b13955235245b2497399d7a93', 'Sarah ', 'Chong', 'sarah@gmail.com', '5a3138a6f615eac78f310b6221991a0d', 1, 0),
(67, 'Nurul', '4297f44b13955235245b2497399d7a93', 'Nurul', 'Fatimah', 'nurul@gmail.com', '0f6145a481fbf6cd3cd3d0dc5ffaf86c', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flight_info`
--
ALTER TABLE `flight_info`
  ADD PRIMARY KEY (`flight_id`);

--
-- Indexes for table `flight_seat`
--
ALTER TABLE `flight_seat`
  ADD PRIMARY KEY (`seat_id`);

--
-- Indexes for table `flight_ticket`
--
ALTER TABLE `flight_ticket`
  ADD PRIMARY KEY (`ticket_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flight_info`
--
ALTER TABLE `flight_info`
  MODIFY `flight_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `flight_seat`
--
ALTER TABLE `flight_seat`
  MODIFY `seat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `flight_ticket`
--
ALTER TABLE `flight_ticket`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
