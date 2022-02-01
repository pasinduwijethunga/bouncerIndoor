-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2022 at 04:36 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bouncer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `admin_id` int(100) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`admin_id`, `admin_name`, `admin_pass`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `payment_slip_image`
--

CREATE TABLE `payment_slip_image` (
  `slip_id` int(11) NOT NULL,
  `slipe_image_name` varchar(255) NOT NULL,
  `register_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_slip_image`
--

INSERT INTO `payment_slip_image` (`slip_id`, `slipe_image_name`, `register_id`, `status`) VALUES
(1, '112.png', 15, 'live'),
(2, '291.png', 16, 'live'),
(3, '207.png', 17, 'live'),
(4, '575.png', 18, 'live'),
(5, '128.jpg', 19, 'live'),
(6, '881.png', 20, 'live'),
(7, '786.jpg', 21, 'live');

-- --------------------------------------------------------

--
-- Table structure for table `profile_pictures`
--

CREATE TABLE `profile_pictures` (
  `pro_pic_id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `register_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile_pictures`
--

INSERT INTO `profile_pictures` (`pro_pic_id`, `image_name`, `register_id`, `status`) VALUES
(1, '943.png', 15, 0),
(2, '503.png', 16, 0),
(3, '582.png', 17, 0),
(4, '749.png', 18, 0),
(5, '342.png', 19, 0),
(6, '597.jpg', 20, 0),
(7, '329.jpg', 21, 0);

-- --------------------------------------------------------

--
-- Table structure for table `registation`
--

CREATE TABLE `registation` (
  `register_id` int(11) NOT NULL,
  `frist_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(30) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `father_teli` varchar(30) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `mother_teli` text NOT NULL,
  `birthday` varchar(40) NOT NULL,
  `registation_date` varchar(30) NOT NULL,
  `team_type` varchar(40) NOT NULL,
  `coach_name` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registation`
--

INSERT INTO `registation` (`register_id`, `frist_name`, `last_name`, `address`, `email`, `telephone`, `father_name`, `father_teli`, `mother_name`, `mother_teli`, `birthday`, `registation_date`, `team_type`, `coach_name`, `gender`, `status`) VALUES
(1, '12', '21', '21', '21', '21', '21', '21', '21', '21', '21', '2021-02-17', 'Un19', 'Select Coach', 'mail', 'deactive'),
(2, '12', '21', '21', '21', '21', '21', '21', '21', '21', '21', '2021-02-17', 'Un19', 'Select Coach', 'mail', 'Active'),
(3, 'ishan', 'herath', '44/2 fancy palce new Town', 'ishan.nimh@gmail.com', '+94781101479', 'te', 't', 'treasd', 'wet', 'wte', '2021-02-14', 'Un19', 'Nuwan Chinthaka', 'mail', 'deactive'),
(4, 'we', 'we', 'rwe', 'twe', 'wt', 'wet', 'we', 'wt', 'w', 'ewre', '2021-02-17', 'Un19', 'Nuwan Chinthaka', 'mail', 'deactive'),
(5, 'rwe', 'wre', 'rew', 'ewr', 'wre', 'wer', 'rew', 'rwe', 'ewr', 'we', '2021-02-08', 'Un13', 'Ishan Madushanka', 'mail', 'deactive'),
(6, '313', '1', '2332', '32', '31', '2', '121', '231', '23', '32', '2021-02-20', 'Un19', 'Ishan Madushanka', 'mail', 'deactive'),
(7, '123', '3', '3233223', '3', '132', '23', '2', '2', '2', '21', '2021-02-08', 'Un13', 'Ishan Madushanka', 'mail', 'deactive'),
(8, '21', '12', '21', '21', '21', '21', '12', '21', '21', '21', '0021-02-01', 'Un19', 'Ishan Madushanka', 'mail', 'deactive'),
(9, '21', '21', '12', '21', '12', '21', '21', '21', '12', '21', '0001-02-12', 'Un19', 'Ishan Madushanka', 'mail', 'deactive'),
(10, '12', '21', '21', '21', '21', '21', '21', '21', '21', '21', '2021-02-08', 'Un19', 'Ishan Madushanka', 'mail', 'deactive'),
(11, '12', '21', '21', '21', '21', '21', '21', '21', '21', '21', '2021-02-08', 'Un19', 'Ishan Madushanka', 'mail', 'Active'),
(12, '12', '21', '21', '21', '21', '21', '21', '21', '21', '21', '2021-02-08', 'Un19', 'Ishan Madushanka', 'mail', 'deactive'),
(13, '12', '21', '21', '21', '21', '21', '21', '21', '21', '21', '2021-02-08', 'Un19', 'Ishan Madushanka', 'mail', 'deactive'),
(14, '12', '21', '21', '21', '21', '21', '21', '21', '21', '21', '2021-02-08', 'Un19', 'Ishan Madushanka', 'mail', 'deactive'),
(15, 'ishan', 'herath', '44/2 fancy palce new Town', 'ishan.nimh@gmail.com', '+94781101479', '21', '21', '21', '12', '21', '2021-02-11', 'Un19', 'Ishan Madushanka', 'mail', 'deactive'),
(16, 'ishan', 'herath', '44/2 fancy palce new Town', 'ishan.nimh@gmail.com', '+94781101479', '21', '21', '21', '12', '21', '2021-02-11', 'Un19', 'Ishan Madushanka', 'mail', 'deactive'),
(17, 'ishan', 'herath', '44/2 fancy palce new Town', 'ishan.nimh@gmail.com', '+94781101479', '21', '21', '21', '12', '21', '2021-02-11', 'Un19', 'Ishan Madushanka', 'mail', 'deactive'),
(18, '12', '12', '21', '12', '21', '21', '21', '2121', '21', '21', '2021-02-16', 'Un13', 'Ishan Madushanka', 'mail', 'Active'),
(19, '21', '21', '21', '12', '21', '12', '21', '21', '21', '21', '0021-02-01', 'Un19', 'Ishan Madushanka', 'mail', 'deactive'),
(20, 'asd', 'sad', 'adad', 'pasinduwijethunga98@gmail.com', '0767252289', 'zsd', '0767252289', 'awdawd', '0767252289', 'wasd', '2021-10-12', 'Un19', 'Nuwan Chinthaka', 'mail', 'Active'),
(21, 'dzfz', 'zsfzfzsfz', '70/g/7 rodney street kotta road, colombo 08', 'info@jpfreshlanka.com', '0767252289', 'zsff', '0777386561', 'dsD', '0767252289', 'ADD', '2021-10-04', 'Un19', 'Nuwan Chinthaka', 'mail', 'Request');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `user_id` int(100) NOT NULL,
  `user_name` text NOT NULL,
  `user_email` text NOT NULL,
  `user_contact` varchar(100) NOT NULL,
  `user_date` varchar(100) NOT NULL,
  `user_time` varchar(100) NOT NULL,
  `user_pwd` text NOT NULL,
  `user_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`user_id`, `user_name`, `user_email`, `user_contact`, `user_date`, `user_time`, `user_pwd`, `user_address`) VALUES
(1, 'kasun viduranga', 'kasunviduranga.kv@gmail.com', '+94000000000', '2020-08-12', '09:31:45am', '$2y$10$231vj5PbamI5tx.OX8jAweCcO/0TJeBE9.lgOtqrW/46eq1w5QS8m', ''),
(2, 'ishan', 'ishan@gmail.com', '+94000000000', '2020-08-25', '06:49:33am', '$2y$10$3RSrEndBCskbmICfNTyLp.SrBzLEaAwUGsddEPNLSjVa08u/LyWV2', ''),
(3, 'pasindu', 'pasindu@gmail.com', '+94000000000', '2020-08-25', '09:31:03am', '$2y$10$4USdFUsGA7Gf3CMDgG7Ol.VP9tOPTbA5JehZnSHB3MORGpvHibw0C', ''),
(4, 'Pazan', 'rpamudithe@gmail.com', '+94000000000', '2020-08-26', '10:28:24am', '$2y$10$tB6.FZGw6ppzrPgIJq9pWOu1AWbh1.oS3gwm1pJJPXQggp/HDsoIm', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `payment_slip_image`
--
ALTER TABLE `payment_slip_image`
  ADD PRIMARY KEY (`slip_id`),
  ADD KEY `register_id` (`register_id`);

--
-- Indexes for table `profile_pictures`
--
ALTER TABLE `profile_pictures`
  ADD PRIMARY KEY (`pro_pic_id`),
  ADD KEY `register_id` (`register_id`);

--
-- Indexes for table `registation`
--
ALTER TABLE `registation`
  ADD PRIMARY KEY (`register_id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment_slip_image`
--
ALTER TABLE `payment_slip_image`
  MODIFY `slip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `profile_pictures`
--
ALTER TABLE `profile_pictures`
  MODIFY `pro_pic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `registation`
--
ALTER TABLE `registation`
  MODIFY `register_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment_slip_image`
--
ALTER TABLE `payment_slip_image`
  ADD CONSTRAINT `payment_slip_image_ibfk_1` FOREIGN KEY (`register_id`) REFERENCES `registation` (`register_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profile_pictures`
--
ALTER TABLE `profile_pictures`
  ADD CONSTRAINT `profile_pictures_ibfk_1` FOREIGN KEY (`register_id`) REFERENCES `registation` (`register_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
