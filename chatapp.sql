-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2022 at 01:40 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 894576251, 1288739295, 'halo'),
(2, 1288739295, 1288739295, 'halo'),
(3, 894576251, 1288739295, 'p'),
(4, 1288739295, 894576251, 'halo');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `sebagai` varchar(255) NOT NULL,
  `nomor_str` varchar(16) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `sebagai`, `nomor_str`, `email`, `password`, `img`, `status`) VALUES
(1, 1288739295, 'farih', 'khafiyyan', '', '0', 'fkhafiyyan@gmail.com', '202cb962ac59075b964b07152d234b70', '16647706231007550.jpg', 'Active now'),
(2, 894576251, 'agus', 'sudi', '', '0', 'agus@gmail.com', '202cb962ac59075b964b07152d234b70', '16647706681.png', 'Offline now'),
(3, 1285200955, 'farih', 'kh', '', '0', 'farihkh1304@gmail.com', '202cb962ac59075b964b07152d234b70', '1664773580.2.png', 'Offline now'),
(4, 1375916154, 'budi', 'sen', 'dokter', '2147483647', 'sen@gmail.com', '202cb962ac59075b964b07152d234b70', '1664774856BPK_insignia.png', 'Offline now'),
(5, 124868843, 'agus', 'sudi', 'dokter', '2147483647', 'agus1@gmail.com', '202cb962ac59075b964b07152d234b70', '16647751281.png', 'Offline now'),
(6, 694972781, 'manse', 'nn', 'dokter', '1234567891929345', 'man@gmail.com', '202cb962ac59075b964b07152d234b70', '16647752512.png', 'Offline now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
