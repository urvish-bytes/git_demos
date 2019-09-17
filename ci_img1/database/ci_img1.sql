-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2019 at 11:04 AM
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
-- Database: `ci_img1`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `data` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('bdcdia8lp61r24fg796rr2hr56', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562237478;'),
('vuio7h2cet90946eajqshcm602', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562237481;'),
('eodb4ivgn4fsuuc3miob679nea', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562237482;'),
('115j6i85f3h4e3r92hf9n1s9pe', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562237482;'),
('hmd36c837s7iludjcp088c0kcb', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562237509;statusMsg|s:28:\"Files uploaded successfully.\";__ci_vars|a:1:{s:9:\"statusMsg\";s:3:\"new\";}'),
('7bacmhaevk7gqt0crmb7donkiu', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562237551;'),
('fdlb8cb6te9uni976l6inm6eo6', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562237647;'),
('5537uoag88grm5qs949htcgevv', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562237671;'),
('ggepv4fps23v8fkrdc1u8bj1fl', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562237700;'),
('jg2jlrd6orgk1khhs9c7nt1ccm', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562237796;'),
('t3sjb4esesvfq6fidjp5dng1cc', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562237818;'),
('h69i8no0ma60c9kjtq2bfdmmoq', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562237865;'),
('k1sib9jg6nstaib6t8dr9e7ucr', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562237872;statusMsg|s:28:\"Files uploaded successfully.\";__ci_vars|a:1:{s:9:\"statusMsg\";s:3:\"new\";}'),
('kk1obc917p2p092nmjkmvjeot4', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562237883;statusMsg|s:28:\"Files uploaded successfully.\";__ci_vars|a:1:{s:9:\"statusMsg\";s:3:\"new\";}'),
('ln05jjqc96eq3navc6iuuj1htc', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562237888;statusMsg|s:28:\"Files uploaded successfully.\";__ci_vars|a:1:{s:9:\"statusMsg\";s:3:\"new\";}'),
('1j5nfkbr1ckes6qd9s7skn93l2', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562237895;'),
('bn673be7bvup1nrtooto4h5iou', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562237896;'),
('ghisco4snt2p5b505kb0m6aqvs', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562237966;statusMsg|s:28:\"Files uploaded successfully.\";__ci_vars|a:1:{s:9:\"statusMsg\";s:3:\"new\";}'),
('4ua7sv7qq2hd5en2m3hntqite6', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562237987;statusMsg|s:28:\"Files uploaded successfully.\";__ci_vars|a:1:{s:9:\"statusMsg\";s:3:\"new\";}'),
('89icjghpdpov4qi1u5hkvtpp4b', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562238086;statusMsg|s:28:\"Files uploaded successfully.\";__ci_vars|a:1:{s:9:\"statusMsg\";s:3:\"new\";}'),
('9ebuup5o509outabughiiuadfu', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562238168;statusMsg|s:28:\"Files uploaded successfully.\";__ci_vars|a:1:{s:9:\"statusMsg\";s:3:\"new\";}'),
('dn7f4ogdrs289av7prd7a5l9mq', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562238186;statusMsg|s:28:\"Files uploaded successfully.\";__ci_vars|a:1:{s:9:\"statusMsg\";s:3:\"new\";}'),
('ur3q94adr2rmjr4n60d24mc4hf', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562238193;statusMsg|s:28:\"Files uploaded successfully.\";__ci_vars|a:1:{s:9:\"statusMsg\";s:3:\"new\";}'),
('d4qsh4e48jrch8jg81rhskk8ht', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562238213;statusMsg|s:28:\"Files uploaded successfully.\";__ci_vars|a:1:{s:9:\"statusMsg\";s:3:\"new\";}'),
('nh427cqfeiu5a9mqvtvu4pnj1j', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562238228;'),
('bublrvn9255ui1p8pfd4g1refk', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562238230;'),
('7tm5s2cooropfj230eulut2dvq', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562238303;'),
('ag2540h30el7426d6i0oj818rd', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562238314;'),
('0iuj12ga9rcnb9um9ecoece87k', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562238316;'),
('6b89mrtbk1deu8oh5vhgh13i8s', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562238316;'),
('sss6geg1ogps0mru9lnn2dihk1', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562238316;'),
('eg8nq6bqaao0nr4pq257leotmf', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562238317;'),
('6jhvqnipbj9rj02707oletja0p', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562238317;'),
('ote9mdr7r339tunrqu36mk2quq', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562238331;'),
('hm7rr9djjsrd3f9psjjcfngl8g', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562238972;'),
('gmfek4qncl5380lej1m1592oo5', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562238976;'),
('g78i3vl2k44k8ebea0l4ebfggn', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562238984;'),
('lk0p7gtniuv6jegcjrkhe688ok', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562238989;'),
('g1r7jbm8pov32gcu39jj3eo6p0', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562239095;'),
('9b3tj1v76cah6pik3ojc8bqbks', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562239127;'),
('vt38q6bamr2ifp5jobdls7apfa', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562239153;statusMsg|s:28:\"Files uploaded successfully.\";__ci_vars|a:1:{s:9:\"statusMsg\";s:3:\"new\";}'),
('35p70vmhlia8j8f63h94mv7ogd', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562239167;statusMsg|s:28:\"Files uploaded successfully.\";__ci_vars|a:1:{s:9:\"statusMsg\";s:3:\"new\";}'),
('pham0jg49c2ojatq43f183b4bb', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562301218;'),
('hi6g357fefq3ihtiblp49q4d85', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562307477;'),
('aserfhv93mutv7u89kbs970j0s', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562561213;'),
('6rbkiosf8g0r759abq8l27jdlf', '::1', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1562561237;');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL COMMENT 'Upload Date',
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Unblock, 0=Block'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `file_name`, `created`, `modified`, `status`) VALUES
(1, 'e68118e9458177cf299aab1a674d54c4.jpg', '2019-07-04 12:51:49', '2019-07-04 12:51:49', 1),
(2, '0d5a8dc891951ee2cbf479b56011dcf7.jpg', '2019-07-04 12:57:52', '2019-07-04 12:57:52', 1),
(3, '95a11c0a095d0838e57d274d72fa58b3.jpg', '2019-07-04 12:58:03', '2019-07-04 12:58:03', 1),
(4, 'f3a337457833b1d2fa5a045e995a579c.jpg', '2019-07-04 12:58:08', '2019-07-04 12:58:08', 1),
(5, 'd32f08e5df185c766f16f16cd9199ec1.jpg', '2019-07-04 12:59:26', '2019-07-04 12:59:26', 1),
(6, 'a0833f6714d952e7f6476eb015cd7674.jpg', '2019-07-04 12:59:26', '2019-07-04 12:59:26', 1),
(7, 'c779a28d442c15bcea3dc9304e7932fa.jpg', '2019-07-04 12:59:47', '2019-07-04 12:59:47', 1),
(8, '797a60f6526076d9a6fee64dee2d3675.jpg', '2019-07-04 16:31:26', '2019-07-04 16:31:26', 1),
(9, 'ceb76527d1298dbbd679da7cd07e6403.jpg', '2019-07-04 16:32:48', '2019-07-04 16:32:48', 1),
(10, 'fbedbc76a4f530870a20885d5f7518fb.jpg', '2019-07-04 16:33:06', '2019-07-04 16:33:06', 1),
(11, '478715b8a10e1f0bb03a18dafbd1f7e2.jpg', '2019-07-04 16:33:13', '2019-07-04 16:33:13', 1),
(12, '452768a97e69c07f30c95a2af5a1bab5.jpg', '2019-07-04 16:33:33', '2019-07-04 16:33:33', 1),
(13, '709bd29918ac19910fb7c39fb0bd1c34.jpg', '2019-07-04 16:49:13', '2019-07-04 16:49:13', 1),
(14, '2c4f004d76a1988ce7a08329446ca9a8.jpg', '2019-07-04 16:49:27', '2019-07-04 16:49:27', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
