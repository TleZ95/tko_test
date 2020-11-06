-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 06, 2020 at 04:10 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `train_schedule`
--

-- --------------------------------------------------------

--
-- Table structure for table `break_station`
--

CREATE TABLE `break_station` (
  `bs_id` int(11) NOT NULL,
  `train_number` varchar(3) NOT NULL,
  `break_train_come_time` time NOT NULL,
  `break_train_out_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `break_station`
--

INSERT INTO `break_station` (`bs_id`, `train_number`, `break_train_come_time`, `break_train_out_time`) VALUES
(1, '234', '05:53:00', '05:54:00'),
(2, '424', '07:39:00', '07:40:00'),
(3, '428', '09:38:00', '09:39:00');

-- --------------------------------------------------------

--
-- Table structure for table `departure_station`
--

CREATE TABLE `departure_station` (
  `ds_id` int(11) NOT NULL,
  `train_number` varchar(3) NOT NULL,
  `departure_station_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `departure_train_out_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `departure_station`
--

INSERT INTO `departure_station` (`ds_id`, `train_number`, `departure_station_name`, `departure_train_out_time`) VALUES
(1, '234', 'สุรินทร์', '05:20:00'),
(2, '424', 'สำโรงทาบ', '05:50:00'),
(4, '428', 'อุบลราชธานี', '06:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `terminal_station`
--

CREATE TABLE `terminal_station` (
  `ts_id` int(11) NOT NULL,
  `train_number` varchar(3) NOT NULL,
  `terminal_station_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `terminal_train_come_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `terminal_station`
--

INSERT INTO `terminal_station` (`ts_id`, `train_number`, `terminal_station_name`, `terminal_train_come_time`) VALUES
(1, '234', 'กรุงเทพ', '14:15:00'),
(2, '424', 'นครราชสีมา', '09:50:00'),
(3, '428', 'นครราชสีมา', '11:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `train_number`
--

CREATE TABLE `train_number` (
  `train_number` varchar(3) NOT NULL,
  `train_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `train_number`
--

INSERT INTO `train_number` (`train_number`, `train_type`) VALUES
('234', 'รถธรรมดา'),
('424', 'รถดีเซลราง'),
('428', 'รถดีเซลราง'),
('72', 'รถด่วนดีเซลราง');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `break_station`
--
ALTER TABLE `break_station`
  ADD PRIMARY KEY (`bs_id`),
  ADD KEY `train_number` (`train_number`);

--
-- Indexes for table `departure_station`
--
ALTER TABLE `departure_station`
  ADD PRIMARY KEY (`ds_id`),
  ADD KEY `train_number` (`train_number`);

--
-- Indexes for table `terminal_station`
--
ALTER TABLE `terminal_station`
  ADD PRIMARY KEY (`ts_id`),
  ADD KEY `train_number` (`train_number`);

--
-- Indexes for table `train_number`
--
ALTER TABLE `train_number`
  ADD PRIMARY KEY (`train_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `break_station`
--
ALTER TABLE `break_station`
  MODIFY `bs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `departure_station`
--
ALTER TABLE `departure_station`
  MODIFY `ds_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `terminal_station`
--
ALTER TABLE `terminal_station`
  MODIFY `ts_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `break_station`
--
ALTER TABLE `break_station`
  ADD CONSTRAINT `break_station_ibfk_1` FOREIGN KEY (`train_number`) REFERENCES `train_number` (`train_number`);

--
-- Constraints for table `departure_station`
--
ALTER TABLE `departure_station`
  ADD CONSTRAINT `departure_station_ibfk_1` FOREIGN KEY (`train_number`) REFERENCES `train_number` (`train_number`);

--
-- Constraints for table `terminal_station`
--
ALTER TABLE `terminal_station`
  ADD CONSTRAINT `terminal_station_ibfk_1` FOREIGN KEY (`train_number`) REFERENCES `train_number` (`train_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
