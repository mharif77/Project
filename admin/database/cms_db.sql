-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2024 at 07:39 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(30) NOT NULL,
  `country` varchar(50) NOT NULL,
  `branch_code` varchar(50) NOT NULL,
  `Division` varchar(100) NOT NULL,
  `zip_code` varchar(50) NOT NULL,
  `Thana` varchar(50) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `country`, `branch_code`, `Division`, `zip_code`, `Thana`, `contact`, `date_created`) VALUES
(1, 'Bangladesh', '123456789', 'chittagong', '1001', 'kosba ', '01785421645', '2020-11-26 11:21:41'),
(2, 'Bangladesh', '12465465274', 'dhaka', '13210', 'gulshan', '016795041', '2024-09-15 23:21:11'),
(3, 'Bangladesh', '123456789', 'barishal', '1002', 'taltoli', '017854215522', '2020-11-26 11:21:41'),
(4, 'Bangladesh', '123456789', 'comilla', '1003', 'barura', '019854215522', '2020-11-26 11:21:41'),
(5, 'Bangladesh', '123456789', 'sylhet', '1005', 'atwari', '019854215522', '2020-11-26 11:21:41');

-- --------------------------------------------------------

--
-- Table structure for table `parcels`
--

CREATE TABLE `parcels` (
  `id` int(30) NOT NULL,
  `sender_name` text NOT NULL,
  `sender_address` text NOT NULL,
  `recipient_name` text NOT NULL,
  `recipient_address` text NOT NULL,
  `price` float NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parcels`
--

INSERT INTO `parcels` (`id`, `sender_name`, `sender_address`, `recipient_name`, `recipient_address`, `price`, `date_created`) VALUES
(1, 'akash', 'Sample', 'sagor', 'Sample', 2500, '2020-11-26 16:15:46'),
(2, 'habib', 'Sample', 'saiful', 'Sample', 2500, '2020-11-26 16:46:03'),
(4, 'joy', 'Sample', 'alam', 'Sample Address', 1900, '2020-11-27 13:52:14'),
(5, 'saif', 'barishal', 'masud', 'gazipur', 1450, '2020-11-27 13:52:14'),
(7, 'jibon', 'uttara', 'rayhan', 'dhanmondi', 2500, '2015-05-24 00:00:00'),
(8, 'jibon', 'uttara', 'rayhan', 'dhanmondi', 2500, '2015-05-24 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `parcel_tracks`
--

CREATE TABLE `parcel_tracks` (
  `id` int(30) NOT NULL,
  `parcel_id` int(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parcel_tracks`
--

INSERT INTO `parcel_tracks` (`id`, `parcel_id`, `date_created`) VALUES
(1, 2, '2020-11-27 09:53:27'),
(2, 3, '2020-11-27 09:55:17'),
(3, 1, '2020-11-27 10:28:01'),
(4, 1, '2020-11-27 10:28:10'),
(5, 1, '2020-11-27 10:28:16'),
(6, 1, '2020-11-27 11:05:03'),
(7, 1, '2020-11-27 11:05:17'),
(8, 1, '2020-11-27 11:05:26'),
(9, 3, '2020-11-27 11:05:41'),
(10, 6, '2020-11-27 14:06:57'),
(11, 0, '0000-00-00 00:00:00'),
(12, 0, '0000-00-00 00:00:00'),
(13, 0, '0000-00-00 00:00:00'),
(14, 0, '0000-00-00 00:00:00'),
(15, 0, '0000-00-00 00:00:00'),
(16, 6, '2024-09-03 00:00:00'),
(17, 22, '2024-09-16 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `cover_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `name`, `email`, `contact`, `address`, `cover_img`) VALUES
(1, 'Courier Management System', 'info@sample.comm', '+6948 8542 623', '2102  Caldwell Road, Rochester, New York, 14608', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'arif', 'arif@gmail.com', '123'),
(2, 'shafin', 'shafin@gmail.com', '123'),
(3, 'abdullah', 'abdullah@gmailcom', '123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `branch_id` int(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `branch_id`, `date_created`) VALUES
(1, 'Administrator', '', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 0, '2020-11-26 10:57:04'),
(2, 'John', 'Smith', 'jsmith@sample.com', '1254737c076cf867dc53d60a0364f38e', 1, '2020-11-26 11:52:04'),
(3, 'George', 'Wilson', 'gwilson@sample.com', 'd40242fb23c45206fadee4e2418f274f', 4, '2020-11-27 13:32:12'),
(4, ' ', ' ', ' ', ' ', 0, '2024-09-04 00:00:00'),
(5, ' ', ' ', ' ', ' ', 0, '0000-00-00 00:00:00'),
(6, '', '', '', '', 0, '0000-00-00 00:00:00'),
(7, '', '', '', '', 0, '0000-00-00 00:00:00'),
(8, '', '', '', '', 0, '0000-00-00 00:00:00'),
(9, '', '', '', '', 0, '0000-00-00 00:00:00'),
(10, '', '', '', '', 0, '2024-09-03 00:00:00'),
(11, 'joy', 'joy', 'mdarifhasan077@gmail.com', '123456', 22, '2024-09-16 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parcels`
--
ALTER TABLE `parcels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parcel_tracks`
--
ALTER TABLE `parcel_tracks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `parcels`
--
ALTER TABLE `parcels`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `parcel_tracks`
--
ALTER TABLE `parcel_tracks`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
