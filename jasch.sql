-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2019 at 03:14 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jasch`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `title` varchar(225) DEFAULT NULL,
  `description` text,
  `images` text,
  `year` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `type`, `title`, `description`, `images`, `year`, `status`, `created_at`) VALUES
(1, 'silder', NULL, '<p>We keep moving forward, opening new doors, and doing new things, because we&#39;re curious and curiosity keeps leading us down new paths</p>\r\n', 'about_banner_1.png', NULL, 0, '2019-07-01 13:05:36'),
(2, 'silder', NULL, '<p>Our customers are not our competitors. We compete for them, not with them.</p>\r\n', 'about_banner_2.png', NULL, 0, '2019-07-01 13:06:36');

-- --------------------------------------------------------

--
-- Table structure for table `admin_profile`
--

CREATE TABLE `admin_profile` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL,
  `profile_pic` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_profile`
--

INSERT INTO `admin_profile` (`id`, `admin_name`, `email`, `password`, `profile_pic`, `created_at`) VALUES
(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin/profile_pic/establish.png', '2019-06-29 10:01:26');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `title` varchar(150) DEFAULT NULL,
  `description` text,
  `images` text,
  `start_date` varchar(50) DEFAULT NULL,
  `end_date` varchar(50) DEFAULT NULL,
  `address` text,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `type`, `title`, `description`, `images`, `start_date`, `end_date`, `address`, `status`, `created_at`) VALUES
(1, 'home silder', 'Our Vision, Your Energy', '<p>To manufacture products comparable to international standards, to be customer-focused and globally competitive through better quality, latest technology and continuous innovation.</p>\r\n', 'banner1.jpg', NULL, NULL, NULL, 0, '2019-06-29 10:30:20'),
(2, 'home silder', 'Our mission', '<p>To manufacture products of outstanding quality that give our customers a competitive advantage through superior products and value, so that we can make every customer smile.</p>\r\n', 'banner2.jpg', NULL, NULL, NULL, 0, '2019-06-29 11:04:30'),
(4, 'home silder', 'Comfortable Space through Chemistry', '<p>At Jasch India, we create world of materials for products from automotive to fashion related goods and more, bringing comfort to your everyday life</p>\r\n', 'banner3.jpg', NULL, NULL, NULL, 0, '2019-06-29 11:07:00'),
(5, 'company_profile', 'COMPANY PROFILE', '<p>Jasch industries Ltd. truly live by the adage-Quality not an act,it a habit. And they would having been incorporated 3 decades ago and standing today as one of the largest producers of high quality PU and PVC coated fabrics in the country.</p>\r\n', NULL, NULL, NULL, NULL, 0, '2019-06-29 11:53:18'),
(6, 'our_products', 'Coated Fabrics', NULL, 'coated-fabrics.jpg', NULL, NULL, NULL, 0, '2019-06-29 11:55:36'),
(7, 'our_products', 'PU Resin', NULL, 'pu-resin.jpg', NULL, NULL, NULL, 0, '2019-06-29 11:55:36'),
(8, 'our_products', 'Industrial Gauges', NULL, 'industrial-gauges.jpg', NULL, NULL, NULL, 0, '2019-06-29 11:55:36'),
(9, 'RSD', 'RESEARCH & DEVELOPMENT', '<h3 data-aos=\"fade-up\">We apply the experience we&rsquo;ve gained and our advanced technologies, in the pursuit of even greater added value.</h3>\r\n\r\n<p data-aos=\"fade-up\">At Jasch India, we have fostered unique technologies from the development of materials and design to the production of a wide range of cover materials, sheets and films. The sum of this experience allows us to realize quick response times and flexible handling of the needs of the marketplace. We add our advanced technologies to the knowledge we&rsquo;ve accumulated, and are actively involved in product development.</p>\r\n', NULL, NULL, NULL, NULL, 0, '2019-06-29 12:42:48'),
(10, 'our_partner', 'OUR PARTNERS', '<p>Our global network of distribution partners helps bring us closer to achieving our goals</p>\r\n', '[\"tata.png\",\"bata.png\",\"calvin_klein.png\",\"nike.png\",\"puma.png\",\"action.png\",\"favicon.png\",\"eicher.png\",\"eram.png\",\"godrej.png\"]', NULL, NULL, NULL, 0, '2019-06-29 12:44:14'),
(11, 'our_presence', 'Delhi Office', NULL, 'usa-store.png', NULL, NULL, NULL, 0, '2019-07-01 04:51:05'),
(12, 'our_presence', 'Manufacturing Facility', NULL, 'india-store.png', NULL, NULL, NULL, 0, '2019-07-01 04:51:05'),
(13, 'our_presence', 'Rest of the World', NULL, 'rest-store.png', NULL, NULL, NULL, 0, '2019-07-01 04:51:05'),
(14, 'news_event', NULL, NULL, NULL, '2018-10-30', '', 'AUTOMECHANIKA, New Delhi, Hall No. 11, Stand no. C157.', 0, '2019-07-01 05:15:33'),
(15, 'news_event', NULL, NULL, NULL, '2018-09-11', '', 'AUTOMECHANIKA, New Delhi, Hall No. 11, Stand no. C157.', 0, '2019-07-01 05:15:33'),
(16, 'news_event', NULL, NULL, NULL, '2019-02-11', '2019-02-14', 'AUTOMECHANIKA, New Delhi, Hall No. 11, Stand no. C157.', 0, '2019-07-01 05:15:33'),
(17, 'home silder', NULL, '<p>We keep moving forward, opening new doors, and doing new things, because we&#39;re curious and curiosity keeps leading us down new paths</p>\r\n', 'about_banner_1.png', NULL, NULL, NULL, 1, '2019-07-01 13:03:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_profile`
--
ALTER TABLE `admin_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_profile`
--
ALTER TABLE `admin_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
