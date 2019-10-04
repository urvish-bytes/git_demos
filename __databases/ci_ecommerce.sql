-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2019 at 01:59 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `active_pages`
--

CREATE TABLE `active_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `enabled` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `active_pages`
--

INSERT INTO `active_pages` (`id`, `name`, `enabled`) VALUES
(1, 'blog', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bank_accounts`
--

CREATE TABLE `bank_accounts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `iban` varchar(255) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `bic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `time` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `image`, `url`, `time`) VALUES
(1, '', 'myblog_1', 1566206981);

-- --------------------------------------------------------

--
-- Table structure for table `blog_translations`
--

CREATE TABLE `blog_translations` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `abbr` varchar(5) NOT NULL,
  `for_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_translations`
--

INSERT INTO `blog_translations` (`id`, `title`, `description`, `abbr`, `for_id`) VALUES
(1, '', '', 'bg', 1),
(2, 'myblog ', '<p>Before purchasing your auto insurance, find out if the coverage it offers is the right one for you and your vehicle. According to data from the Insurance Research Council, more than 4 million drivers in California do not have auto insurance. According to general.com, these are the top five types of coverage offered by auto insurance, and how they work in the event of an accident.</p>\r\n\r\n<p>1. Uninsured Motorist Coverage (UM). This insurance covers your medical expenses if the person at fault in the accident is uninsured, or has insufficient insurance to cover all costs for the damage caused to you. This type of insurance also includes you if you are involved in a hit-and-run accident, if you have a pedestrian accident, or if you were riding a bicycle and another vehicle crashed into you.</p>\r\n\r\n<p>2. Med-Pay coverage. This policy covers medical expenses as a result of an automobile accident, regardless of was at fault for the accident. But every insurance company has its restrictions regarding this policy. Some also pay for funeral expenses, passenger injuries, injuries if you were in a pedestrian accident, or if you were riding a bicycle and a car crashed into you. It also covers expenses for dental treatment as a result of a crash.</p>\r\n\r\n<p>3. Liability Insurance. If you are at fault, the cause of, or responsible for an accident, your insurance company pays for the property damage and medical expenses of those affected in the crash. In some cases, this type of insurance even covers the legal cost of accident attorneys if the case goes to trial. Almost all states require at least a minimum of coverage for this type of insurance.</p>\r\n\r\n<p>4. Collision insurance. This type of insurance covers the cost of repairs to your car this important if you recently bought a car if your car is expensive and you are involved in an accident. If the cost repairs are higher than the value of your vehicle, insurance covers up to the amount of the total loss.</p>\r\n\r\n<p>5. Other than Collision Coverage (OTC). This type of insurance covers damages to your vehicle for any reason, such as theft, fire, or earthquake. But this insurance is expensive, and sometimes unnecessary if you can easily replace your car. Also, the incidents you cover don\'t happen often. For example, if you live in the desert, and it\'s not very likely that a tree will fall on your car.</p>\r\n\r\n<p>As you can see, there are several types of basic insurance. Some of are required by law, and some are not; some are important, and some are not. Anyway, it\'s good to be insured because the future is unpredictable.</p>\r\n', 'en', 1),
(3, '', '', 'gr', 1);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`) VALUES
(1, 'Allen Solly'),
(3, 'U S Polo');

-- --------------------------------------------------------

--
-- Table structure for table `confirm_links`
--

CREATE TABLE `confirm_links` (
  `id` int(11) NOT NULL,
  `link` char(32) NOT NULL,
  `for_order` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cookie_law`
--

CREATE TABLE `cookie_law` (
  `id` int(10) UNSIGNED NOT NULL,
  `link` varchar(255) NOT NULL,
  `theme` varchar(20) NOT NULL,
  `visibility` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cookie_law_translations`
--

CREATE TABLE `cookie_law_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `message` varchar(255) NOT NULL,
  `button_text` varchar(50) NOT NULL,
  `learn_more` varchar(50) NOT NULL,
  `abbr` varchar(5) NOT NULL,
  `for_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `discount_codes`
--

CREATE TABLE `discount_codes` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `valid_from_date` int(10) UNSIGNED NOT NULL,
  `valid_to_date` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1-enabled, 0-disabled'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `discount_codes`
--

INSERT INTO `discount_codes` (`id`, `type`, `code`, `amount`, `valid_from_date`, `valid_to_date`, `status`) VALUES
(1, 'percent', 'HJZA6X', '20', 1564597800, 1567189800, 0);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(10) UNSIGNED NOT NULL,
  `activity` varchar(255) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `time` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `activity`, `username`, `time`) VALUES
(1, 'Cant login with - User: imurvish and Pass: imurvish', NULL, 1566200920),
(2, 'Cant login with - User: imurvish and Pass: imurvish', NULL, 1566200923),
(3, 'User admin logged in', NULL, 1566200976),
(4, 'Go to home page', 'admin', 1566200976),
(5, 'Go to home page', 'admin', 1566200987),
(6, 'Go to Admin Users', 'admin', 1566200991),
(7, 'Go to home page', 'admin', 1566200996),
(8, 'Go to Admin Users', 'admin', 1566200999),
(9, 'Go to Admin Users', 'admin', 1566201002),
(10, 'Go to publish product', 'admin', 1566201062),
(11, 'Go to Templates Page', 'admin', 1566201068),
(12, 'Go to Templates Page', 'admin', 1566201073),
(13, 'Go to products', 'admin', 1566201074),
(14, 'Go to brands page', 'admin', 1566201076),
(15, 'Go to Admin Users', 'admin', 1566201098),
(16, 'Create admin user - imurvish', 'admin', 1566201108),
(17, 'Go to Admin Users', 'admin', 1566201108),
(18, 'Go to brands page', 'admin', 1566201341),
(19, 'Go to shop categories', 'admin', 1566201342),
(20, 'Go to publish product', 'admin', 1566201349),
(21, 'Go to products', 'admin', 1566201351),
(22, 'Go to Templates Page', 'admin', 1566201354),
(23, 'Go to products', 'admin', 1566201357),
(24, 'Go to brands page', 'admin', 1566201358),
(25, 'Go to brands page', 'admin', 1566201362),
(26, 'Go to shop categories', 'admin', 1566201364),
(27, 'Go to shop categories', 'admin', 1566201459),
(28, 'Go to shop categories', 'admin', 1566201483),
(29, 'Go to shop categories', 'admin', 1566201489),
(30, 'Go to shop categories', 'admin', 1566201517),
(31, 'Go to shop categories', 'admin', 1566201530),
(32, 'Go to shop categories', 'admin', 1566201530),
(33, 'Go to shop categories', 'admin', 1566201531),
(34, 'Go to shop categories', 'admin', 1566201538),
(35, 'Go to shop categories', 'admin', 1566201543),
(36, 'Edit shop categorie to ', 'admin', 1566201546),
(37, 'Edit shop categorie to ', 'admin', 1566201549),
(38, 'Go to shop categories', 'admin', 1566201664),
(39, 'Go to products', 'admin', 1566201852),
(40, 'Go to brands page', 'admin', 1566201855),
(41, 'Go to orders page', 'admin', 1566201858),
(42, 'Go to shop categories', 'admin', 1566201859),
(43, 'Go to shop categories', 'admin', 1566201908),
(44, 'Edit shop categorie to ', 'admin', 1566201916),
(45, 'Go to shop categories', 'admin', 1566201930),
(46, 'Go to shop categories', 'admin', 1566201951),
(47, 'Go to publish product', 'admin', 1566206375),
(48, 'Go to shop categories', 'admin', 1566206392),
(49, 'Edit shop categorie to Male', 'admin', 1566206408),
(50, 'Edit shop categorie to Male', 'admin', 1566206412),
(51, 'Go to publish product', 'admin', 1566206417),
(52, 'Edit shop categorie to ', 'admin', 1566206426),
(53, 'Edit shop categorie to ', 'admin', 1566206430),
(54, 'Go to publish product', 'admin', 1566206433),
(55, 'Edit shop categorie to Male', 'admin', 1566206443),
(56, 'Go to publish product', 'admin', 1566206445),
(57, 'Edit shop categorie to ', 'admin', 1566206451),
(58, 'Go to publish product', 'admin', 1566206452),
(59, 'Go to shop categories', 'admin', 1566206670),
(60, 'Go to shop categories', 'admin', 1566206683),
(61, 'Go to publish product', 'admin', 1566206686),
(62, 'Success published product', 'admin', 1566206729),
(63, 'Go to products', 'admin', 1566206729),
(64, 'Change subcategory for category id - 1', 'admin', 1566206860),
(65, 'Go to shop categories', 'admin', 1566206860),
(66, 'Go to publish product', 'admin', 1566206866),
(67, 'Go to products', 'admin', 1566206868),
(68, 'Go to publish product', 'admin', 1566206873),
(69, 'Go to discounts page', 'admin', 1566206878),
(70, 'Go to orders page', 'admin', 1566206880),
(71, 'Go to orders page', 'admin', 1566206882),
(72, 'Go to Pages manage', 'admin', 1566206890),
(73, 'Go to discounts page', 'admin', 1566206894),
(74, 'Go to discounts page', 'admin', 1566206912),
(75, 'Go to discounts page', 'admin', 1566206924),
(76, 'Go to discounts page', 'admin', 1566206928),
(77, 'Go to Blog Publish', 'admin', 1566206941),
(78, 'Go to Blog', 'admin', 1566206944),
(79, 'Go to Blog Publish', 'admin', 1566206949),
(80, 'Go to Blog', 'admin', 1566206981),
(81, 'Go to Blog Publish', 'admin', 1566206983),
(82, 'Go to Blog', 'admin', 1566207012),
(83, 'Go to products', 'admin', 1566207252),
(84, 'Go to languages', 'admin', 1566207256),
(85, 'Go to Admin Users', 'admin', 1566207260),
(86, 'Go to Admin Users', 'admin', 1566207272),
(87, 'Go to Admin Users', 'admin', 1566207369),
(88, 'Go to home page', 'admin', 1566207461),
(89, 'Go to home page', 'admin', 1566207579),
(90, 'Go to home page', 'admin', 1566207589),
(91, 'Cant login with - User: urvish@gmail.com and Pass: urvish@gmail.com', NULL, 1566207598),
(92, 'User imurvish logged in', NULL, 1566207606),
(93, 'Go to home page', 'imurvish', 1566207606),
(94, 'Go to home page', 'imurvish', 1566207645),
(95, 'Go to home page', 'imurvish', 1566207652),
(96, 'User imurvish logged in', NULL, 1566207682),
(97, 'Go to home page', 'imurvish', 1566207682),
(98, 'Go to products', 'imurvish', 1566207691),
(99, 'Go to home page', 'imurvish', 1566207837),
(100, 'Go to home page', 'imurvish', 1566207847),
(101, 'Go to home page', 'imurvish', 1566207853),
(102, 'Go to home page', 'imurvish', 1566207859),
(103, 'Go to home page', 'imurvish', 1566207871),
(104, 'Go to home page', 'imurvish', 1566207901),
(105, 'Go to home page', 'imurvish', 1566208865),
(106, 'Cant login with - User: admin@gmail.com and Pass: admin@gmail.com', NULL, 1566370734),
(107, 'User admin logged in', NULL, 1566370738),
(108, 'Go to home page', 'admin', 1566370738),
(109, 'Cant login with - User: admin@gmail.com and Pass: admin@gmail.com', NULL, 1566467307),
(110, 'User admin logged in', NULL, 1566467310),
(111, 'Go to home page', 'admin', 1566467310),
(112, 'Go to publish product', 'admin', 1566467312),
(113, 'Go to home page', 'admin', 1566475557),
(114, 'Go to publish product', 'admin', 1566475560),
(115, 'Success published product', 'admin', 1566475562),
(116, 'Go to products', 'admin', 1566475563),
(117, 'Delete product id - 2', 'admin', 1566475582),
(118, 'Go to products', 'admin', 1566475582),
(119, 'Go to publish product', 'admin', 1566475583),
(120, 'Go to brands page', 'admin', 1566475585),
(121, 'Go to brands page', 'admin', 1566475591),
(122, 'Go to brands page', 'admin', 1566475594),
(123, 'Go to shop categories', 'admin', 1566475596),
(124, 'Go to publish product', 'admin', 1566475598),
(125, 'Success published product', 'admin', 1566475600),
(126, 'Go to products', 'admin', 1566475600),
(127, 'Delete product id - 3', 'admin', 1566475636),
(128, 'Go to products', 'admin', 1566475636),
(129, 'User admin logged in', NULL, 1566978088),
(130, 'Go to home page', 'admin', 1566978088),
(131, 'Go to publish product', 'admin', 1566978093),
(132, 'Go to brands page', 'admin', 1566978095),
(133, 'Go to products', 'admin', 1566978097),
(134, 'Go to orders page', 'admin', 1566978100),
(135, 'Go to shop categories', 'admin', 1566978102),
(136, 'Go to brands page', 'admin', 1566978104),
(137, 'Go to brands page', 'admin', 1566978116),
(138, 'Go to publish product', 'admin', 1566978118),
(139, 'Success published product', 'admin', 1566978122),
(140, 'Go to products', 'admin', 1566978122),
(141, 'Cant login with - User: urvish and Pass: urvish', NULL, 1567069581),
(142, 'User imurvish logged in', NULL, 1567069585),
(143, 'Go to home page', 'imurvish', 1567069585),
(144, 'Go to products', 'imurvish', 1567069586),
(145, 'Go to publish product', 'imurvish', 1567070534),
(146, 'Success updated product', 'imurvish', 1567070541),
(147, 'Go to products', 'imurvish', 1567070542),
(148, 'Go to products', 'imurvish', 1567075120),
(149, 'Go to products', 'imurvish', 1567075120),
(150, 'Go to home page', 'imurvish', 1567078783),
(151, 'Go to home page', 'imurvish', 1567078783),
(152, 'Go to products', 'imurvish', 1567078785),
(153, 'Go to products', 'imurvish', 1567078799),
(154, 'Go to products', 'imurvish', 1567078803),
(155, 'User imurvish logged in', NULL, 1567140873),
(156, 'Go to home page', 'imurvish', 1567140873),
(157, 'Go to products', 'imurvish', 1567140874),
(158, 'Go to publish product', 'imurvish', 1567140875),
(159, 'Go to home page', 'imurvish', 1567140880),
(160, 'Go to home page', 'imurvish', 1567142347),
(161, 'Cant login with - User: urvish and Pass: urvish', NULL, 1567142380),
(162, 'User imurvish logged in', NULL, 1567142384),
(163, 'Go to home page', 'imurvish', 1567142384),
(164, 'Password change for user: imurvish', 'imurvish', 1567142396),
(165, 'Go to home page', 'imurvish', 1567142399),
(166, 'User imurvish logged in', NULL, 1567142402),
(167, 'Go to home page', 'imurvish', 1567142402),
(168, 'User imurvish logged in', NULL, 1567142407),
(169, 'Go to home page', 'imurvish', 1567142407),
(170, 'Go to home page', 'imurvish', 1567142412),
(171, 'Go to home page', 'imurvish', 1567142416),
(172, 'User imurvish logged in', NULL, 1567142418),
(173, 'Go to home page', 'imurvish', 1567142418),
(174, 'User imurvish logged in', NULL, 1567142424),
(175, 'Go to home page', 'imurvish', 1567142424),
(176, 'Cant login with - User: imurvish and Pass: imurvish', NULL, 1567142451),
(177, 'User imurvish logged in', NULL, 1567142501),
(178, 'Go to home page', 'imurvish', 1567142501),
(179, 'Go to home page', 'imurvish', 1567143202);

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE `keys` (
  `id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT 0,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `abbr` varchar(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `currency` varchar(10) NOT NULL,
  `currencyKey` varchar(5) NOT NULL,
  `flag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `abbr`, `name`, `currency`, `currencyKey`, `flag`) VALUES
(1, 'bg', 'bulgarian', 'лв', 'BGN', 'bg.jpg'),
(2, 'en', 'english', '$', 'USD', 'en.jpg'),
(3, 'gr', 'greece', 'EUR', 'EUR', 'gr.png');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'point to public_users ID',
  `products` text NOT NULL,
  `date` int(10) UNSIGNED NOT NULL,
  `referrer` varchar(255) NOT NULL,
  `clean_referrer` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `paypal_status` varchar(10) DEFAULT NULL,
  `processed` tinyint(1) NOT NULL DEFAULT 0,
  `viewed` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'viewed status is change when change processed status',
  `confirmed` tinyint(1) NOT NULL DEFAULT 0,
  `discount_code` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders_clients`
--

CREATE TABLE `orders_clients` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `post_code` varchar(10) NOT NULL,
  `notes` text NOT NULL,
  `for_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `folder` int(10) UNSIGNED DEFAULT NULL COMMENT 'folder with images',
  `image` varchar(255) NOT NULL,
  `time` int(10) UNSIGNED NOT NULL COMMENT 'time created',
  `time_update` int(10) UNSIGNED NOT NULL COMMENT 'time updated',
  `visibility` tinyint(1) NOT NULL DEFAULT 1,
  `shop_categorie` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `procurement` int(10) UNSIGNED NOT NULL,
  `in_slider` tinyint(1) NOT NULL DEFAULT 0,
  `url` varchar(255) NOT NULL,
  `virtual_products` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `brand_id` int(5) DEFAULT NULL,
  `position` int(10) UNSIGNED NOT NULL,
  `vendor_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `folder`, `image`, `time`, `time_update`, `visibility`, `shop_categorie`, `quantity`, `procurement`, `in_slider`, `url`, `virtual_products`, `brand_id`, `position`, `vendor_id`) VALUES
(1, 1566206686, '', 1566206729, 0, 1, 2, 5, 0, 1, 'test_product_1', NULL, NULL, 1, 0),
(4, 1566978118, 'banner_category.jpg', 1566978122, 1567070541, 1, 2, 0, 0, 0, '_4', NULL, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products_translations`
--

CREATE TABLE `products_translations` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `basic_description` text NOT NULL,
  `price` varchar(20) NOT NULL,
  `old_price` varchar(20) NOT NULL,
  `abbr` varchar(5) NOT NULL,
  `for_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products_translations`
--

INSERT INTO `products_translations` (`id`, `title`, `description`, `basic_description`, `price`, `old_price`, `abbr`, `for_id`) VALUES
(1, '', '', '', '', '', 'bg', 1),
(2, 'test product', '<p>Before purchasing your auto insurance, find out if the coverage it offers is the right one for you and your vehicle. According to data from the Insurance Research Council, more than 4 million drivers in California do not have auto insurance. According to general.com, these are the top five types of coverage offered by auto insurance, and how they work in the event of an accident.</p>\r\n', '', '750', '850', 'en', 1),
(3, '', '', '', '', '', 'gr', 1),
(10, '', '', '', '', '', 'bg', 4),
(11, '', '', '', '', '', 'en', 4),
(12, '', '', '', '', '', 'gr', 4);

-- --------------------------------------------------------

--
-- Table structure for table `seo_pages`
--

CREATE TABLE `seo_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seo_pages`
--

INSERT INTO `seo_pages` (`id`, `name`) VALUES
(1, 'home'),
(2, 'checkout'),
(3, 'contacts'),
(4, 'blog');

-- --------------------------------------------------------

--
-- Table structure for table `seo_pages_translations`
--

CREATE TABLE `seo_pages_translations` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `abbr` varchar(5) NOT NULL,
  `page_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `shop_categories`
--

CREATE TABLE `shop_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `sub_for` int(11) NOT NULL,
  `position` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shop_categories`
--

INSERT INTO `shop_categories` (`id`, `sub_for`, `position`) VALUES
(1, 0, 0),
(2, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shop_categories_translations`
--

CREATE TABLE `shop_categories_translations` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `abbr` varchar(5) NOT NULL,
  `for_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shop_categories_translations`
--

INSERT INTO `shop_categories_translations` (`id`, `name`, `abbr`, `for_id`) VALUES
(1, '', 'bg', 1),
(2, 'Male', 'en', 1),
(3, '', 'gr', 1),
(4, ' ', 'bg', 2),
(5, 'Shirt', 'en', 2),
(6, ' ', 'gr', 2);

-- --------------------------------------------------------

--
-- Table structure for table `subscribed`
--

CREATE TABLE `subscribed` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `browser` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `textual_pages_tanslations`
--

CREATE TABLE `textual_pages_tanslations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `abbr` varchar(5) NOT NULL,
  `for_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(100) NOT NULL,
  `notify` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'notifications by email',
  `last_login` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `notify`, `last_login`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'your@email.com', 0, 1566978088),
(2, 'imurvish', 'fc8f1d6cb5b79663d6924e15b82e7f53', '', 0, 1567142501);

-- --------------------------------------------------------

--
-- Table structure for table `users_public`
--

CREATE TABLE `users_public` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `value_store`
--

CREATE TABLE `value_store` (
  `id` int(10) UNSIGNED NOT NULL,
  `thekey` varchar(50) NOT NULL,
  `value` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `value_store`
--

INSERT INTO `value_store` (`id`, `thekey`, `value`) VALUES
(1, 'sitelogo', 'NewLogo.jpg'),
(2, 'navitext', ''),
(3, 'footercopyright', 'Powered by ECC FZE © All right reserved. '),
(4, 'contactspage', 'Hello dear client'),
(5, 'footerContactAddr', ''),
(6, 'footerContactEmail', 'support@shop.dev'),
(7, 'footerContactPhone', ''),
(8, 'googleMaps', '42.671840, 83.279163'),
(9, 'footerAboutUs', ''),
(10, 'footerSocialFacebook', ''),
(11, 'footerSocialTwitter', ''),
(12, 'footerSocialGooglePlus', ''),
(13, 'footerSocialPinterest', ''),
(14, 'footerSocialYoutube', ''),
(16, 'contactsEmailTo', 'contacts@shop.dev'),
(17, 'shippingOrder', '1'),
(18, 'addJs', ''),
(19, 'publicQuantity', '0'),
(20, 'paypal_email', ''),
(21, 'paypal_sandbox', '0'),
(22, 'publicDateAdded', '0'),
(23, 'googleApi', ''),
(24, 'template', 'clothesshop'),
(25, 'cashondelivery_visibility', '1'),
(26, 'showBrands', '0'),
(27, 'showInSlider', '0'),
(28, 'codeDiscounts', '1'),
(29, 'virtualProducts', '0'),
(30, 'multiVendor', '0');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `url` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `name`, `url`, `email`, `password`, `updated_at`, `created_at`) VALUES
(1, 'Test', 'Test', 'urvish@gmail.com', '$2y$10$.IfDG7kdBSWBi9/aq1KgV.twvZk/O.dzgKRZkhEKX9vOw5pfs3buy', '2019-08-19 07:53:37', '2019-08-19 07:53:37');

-- --------------------------------------------------------

--
-- Table structure for table `vendors_orders`
--

CREATE TABLE `vendors_orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `products` text NOT NULL,
  `date` int(10) UNSIGNED NOT NULL,
  `referrer` varchar(255) NOT NULL,
  `clean_referrer` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `paypal_status` varchar(10) DEFAULT NULL,
  `processed` tinyint(1) NOT NULL DEFAULT 0,
  `viewed` tinyint(1) NOT NULL DEFAULT 0,
  `confirmed` tinyint(1) NOT NULL DEFAULT 0,
  `discount_code` varchar(20) NOT NULL,
  `vendor_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `vendors_orders_clients`
--

CREATE TABLE `vendors_orders_clients` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `post_code` varchar(10) NOT NULL,
  `notes` text NOT NULL,
  `for_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `active_pages`
--
ALTER TABLE `active_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_accounts`
--
ALTER TABLE `bank_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `blog_translations`
--
ALTER TABLE `blog_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confirm_links`
--
ALTER TABLE `confirm_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cookie_law`
--
ALTER TABLE `cookie_law`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cookie_law_translations`
--
ALTER TABLE `cookie_law_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE` (`abbr`,`for_id`) USING BTREE;

--
-- Indexes for table `discount_codes`
--
ALTER TABLE `discount_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_clients`
--
ALTER TABLE `orders_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_translations`
--
ALTER TABLE `products_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_pages`
--
ALTER TABLE `seo_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_pages_translations`
--
ALTER TABLE `seo_pages_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_categories`
--
ALTER TABLE `shop_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_categories_translations`
--
ALTER TABLE `shop_categories_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribed`
--
ALTER TABLE `subscribed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `textual_pages_tanslations`
--
ALTER TABLE `textual_pages_tanslations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_public`
--
ALTER TABLE `users_public`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `value_store`
--
ALTER TABLE `value_store`
  ADD PRIMARY KEY (`id`),
  ADD KEY `key` (`thekey`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique` (`email`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `vendors_orders`
--
ALTER TABLE `vendors_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendors_orders_clients`
--
ALTER TABLE `vendors_orders_clients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `active_pages`
--
ALTER TABLE `active_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bank_accounts`
--
ALTER TABLE `bank_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_translations`
--
ALTER TABLE `blog_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `confirm_links`
--
ALTER TABLE `confirm_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cookie_law`
--
ALTER TABLE `cookie_law`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cookie_law_translations`
--
ALTER TABLE `cookie_law_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `discount_codes`
--
ALTER TABLE `discount_codes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT for table `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders_clients`
--
ALTER TABLE `orders_clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products_translations`
--
ALTER TABLE `products_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `seo_pages`
--
ALTER TABLE `seo_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seo_pages_translations`
--
ALTER TABLE `seo_pages_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shop_categories`
--
ALTER TABLE `shop_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shop_categories_translations`
--
ALTER TABLE `shop_categories_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subscribed`
--
ALTER TABLE `subscribed`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `textual_pages_tanslations`
--
ALTER TABLE `textual_pages_tanslations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users_public`
--
ALTER TABLE `users_public`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `value_store`
--
ALTER TABLE `value_store`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vendors_orders`
--
ALTER TABLE `vendors_orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendors_orders_clients`
--
ALTER TABLE `vendors_orders_clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
