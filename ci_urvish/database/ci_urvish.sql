-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2019 at 11:05 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_urvish`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `body`, `user_id`, `created_at`, `image_path`) VALUES
(1, 'Article1', 'Article Body 1', 1, '03-Jul-2019 12:00:49', ''),
(2, 'Article2', 'Article Body 2', 1, '03-Jul-2019 12:01:07', ''),
(3, 'Test1', 'Test Body 1', 1, '03-Jul-2019 12:01:27', ''),
(4, 'Test2', 'Test Body 2', 1, '03-Jul-2019 12:01:42', ''),
(5, 'admin', 'nfedjrndfsknskdfwlclkmslmdkfoiaskmcozmcopsapfwindosncpopndsawpowadpocmanf', 1, '03-Jul-2019 12:03:12', ''),
(6, 'Image Test', 'Image test', 1, '03-Jul-2019 13:07:42', ''),
(7, 'image1', 'image1', 1, '03-Jul-2019 13:21:08', 'http://[::1]/ci_urvish/uploads/login5.jpg'),
(8, 'Article Image ', 'article image', 1, '03-Jul-2019 13:41:45', 'http://[::1]/ci_urvish/uploads/login6.jpg'),
(9, 'bytes', 'bytes technolab', 1, '04-Jul-2019 07:55:56', 'http://[::1]/ci_urvish/uploads/offer.png'),
(10, 'bytes21', 'bytes21', 1, '04-Jul-2019 07:57:49', 'http://[::1]/ci_urvish/uploads/offer1.png'),
(11, 'bytes3', 'bytes3', 1, '04-Jul-2019 07:58:37', 'http://[::1]/ci_urvish/uploads/offer2.png'),
(12, 'yesy', 'adsd', 1, '04-Jul-2019 08:10:39', 'http://[::1]/ci_urvish/uploads/arrow-bottom.png'),
(13, 'time check', 'time check', 1, '04-Jul-2019 12:03:50', 'http://[::1]/ci_urvish/uploads/arrow-bottom_olds1.png'),
(14, 'test', 'test', 1, '04-Jul-2019 15:19:09', 'http://localhost/ci_urvish/uploads/offer3.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pword` varchar(255) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `pword`, `fname`, `lname`) VALUES
(1, 'urvish', 'urvish', 'Urvish', 'Patel');

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE `user_accounts` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`userid`, `firstname`, `lastname`) VALUES
(1, 'Urvish', 'Patel'),
(2, 'Tej', 'Kothari'),
(3, 'Parth', 'Shah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
