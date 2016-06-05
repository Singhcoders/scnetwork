-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2016 at 10:00 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sc_social`
--

-- --------------------------------------------------------

--
-- Table structure for table `sc_info`
--

CREATE TABLE `sc_info` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `address` varchar(30) NOT NULL,
  `work` varchar(40) NOT NULL,
  `phone` int(10) NOT NULL,
  `relation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sc_user`
--

CREATE TABLE `sc_user` (
  `id` int(11) NOT NULL,
  `user_email` varchar(25) NOT NULL,
  `user_pass` varchar(30) NOT NULL,
  `user_full` varchar(30) NOT NULL,
  `user_reg` datetime NOT NULL,
  `user_token` varchar(25) NOT NULL,
  `user_status` enum('0','1') NOT NULL,
  `user_sex` enum('male','female','other','') NOT NULL,
  `user_prog` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sc_info`
--
ALTER TABLE `sc_info`
  ADD KEY `id` (`id`);

--
-- Indexes for table `sc_user`
--
ALTER TABLE `sc_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sc_user`
--
ALTER TABLE `sc_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `sc_info`
--
ALTER TABLE `sc_info`
  ADD CONSTRAINT `sc_info_ibfk_1` FOREIGN KEY (`id`) REFERENCES `sc_user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
