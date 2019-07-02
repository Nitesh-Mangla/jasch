-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2019 at 08:44 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.14

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
(2, 'silder', NULL, '<p>Our customers are not our competitors. We compete for them, not with them.</p>\r\n', 'about_banner_2.png', NULL, 0, '2019-07-01 13:06:36'),
(3, 'profile', 'FROM DESK OF THE CHAIRMAN', '<p>&ldquo;Whatever action a great man performs, common men follow. And whatever standards he sets by exemplary acts, all the world pursues. &ldquo; - Bhagavad Gita 3:21</p>\r\n\r\n<p>The last few years have witnessed major changes in the market and the business environment. The companies that survived are the ones that adapted with the changing times. We, at Jasch Industries, are seeking to develop a competitive edge in every possible aspect of the businesses we have an interest in. In spite of increasing challenges, our focus is on improving the quality, flexibility and responsiveness to the changing needs in the marketplace.</p>\r\n', NULL, NULL, 0, '2019-07-02 04:49:57'),
(4, 'company_profile', 'COMPANY PROFILE', '<p>Our ethos &ldquo;Growth for Life&rdquo; aptly captures the ever-evolving spirit of Jasch Industries Ltd. The company is affiliated with ISO 9001-2008 accreditation given by UCAS. With an installed production capacity exceeding 10 million running meters of premium grade synthetic leather per annum and our state-of-the-art manufacturing facility at Sonepat, Haryana, India producing 3600 tonnes of PU Resin per annum, we have evolved as the largest producers of high quality PU and PVC coated fabrics in the country over our last 30 years of our operations. We are committed to innovation-led, most comprehensive R&amp;D exponential growth. Our vision is pushing us to achieve global leadership in our industry.</p>\r\n', 'about_new.png', NULL, 0, '2019-07-02 05:02:19'),
(5, 'company_growth', 'Incorporated', '<p>Jasch Industries Ltd (formerly Jasch Polymers Ltd) was incorporated on 11th December, 1985 under the Indian Companies Act, 1956 as a Public Limited Company.</p>\r\n', 'photo-1.jpg', '1985', 0, '2019-07-02 05:29:56'),
(6, 'company_growth', 'echnology transfer from Duksung Co. (S. Korea)', '', 'photo-2.jpg', '1987', 0, '2019-07-02 05:34:50'),
(7, 'company_growth', 'First production for PU foam', '', 'photo-3.jpg', '1992', 0, '2019-07-02 05:35:18'),
(8, 'company_growth', 'Public issue on 14th July 1994, listed on 14th sept.', '', 'photo-4.jpg', '1994', 0, '2019-07-02 05:35:44'),
(9, 'company_growth', 'Started making PU,PVC synthetic and PU resin product', '', 'photo-5.jpg', '1994', 0, '2019-07-02 05:36:18'),
(10, 'company_growth', 'First Beta gauge produced.', '', 'photo-6.jpg', '1999', 0, '2019-07-02 05:36:42'),
(11, 'company_growth', 'Started exporting beta gauge.', '', 'photo-7.jpg', '2002', 0, '2019-07-02 05:37:12'),
(12, 'company_growth', 'New PU coating line added', '', 'photo-8.jpg', '2006', 0, '2019-07-02 05:38:01'),
(13, 'company_growth', 'Acquired INDEV Gauging Systems, an American company', '', 'photo-9.jpg', '2011\r\n', 0, '2019-07-02 05:38:34'),
(14, 'company_growth', 'Started making green PU', '', 'photo-10.jpg', '2016', 0, '2019-07-02 05:39:01'),
(15, 'infrastructure', 'INFRASTRUCTURE: LAND AT PRIME LOCATION', '<p>The state-of-the-art manufacturing facility at Sonepat, Haryana, India is one of the India&rsquo;s ultra efficient manufacturing hubs. The entire complex was built in a record time at globally competitive capital costs &ndash; in fact, at costs much lower than comparable hubs around the world. Its scale, design, flexibility, level of automation and degree of integration heralded the way manufacturing facilities of the future would be built in India. The speedy growth of the complex lies at the heart of India&#39;s transformation on National Highway No. 352 within the Municipal limits of Sonipat. It has been transformed from 2,50,000 square feet of land to one of India&#39;s ultra efficient manufacturing hubs. It is easily accessible by road from New Delhi and Chandigarh. The nearest railhead is Sonipat Junction.</p>\r\n', 'manufacturing-facilities-cleaning.jpg', NULL, 0, '2019-07-02 05:47:17'),
(16, 'machine', 'PVC transfer coating machine', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste placeat deleniti, eligendi doloribus. Architecto dolor tempora, itaque, doloremque distinctio nemo, culpa minus aut ab, voluptate quisquam ipsam ut nulla quo.</p>\r\n', NULL, NULL, 0, '2019-07-02 06:04:03'),
(17, 'machine', 'PU coagulation machine', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste placeat deleniti, eligendi doloribus. Architecto dolor tempora, itaque, doloremque distinctio nemo, culpa minus aut ab, voluptate quisquam ipsam ut nulla quo.</p>\r\n', NULL, NULL, 0, '2019-07-02 06:04:35'),
(18, 'machine', 'PU transfer coating machine', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste placeat deleniti, eligendi doloribus. Architecto dolor tempora, itaque, doloremque distinctio nemo, culpa minus aut ab, voluptate quisquam ipsam ut nulla quo.</p>\r\n', NULL, NULL, 0, '2019-07-02 06:05:07'),
(19, 'machine', 'PU resin polymerization reactor', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis incidunt voluptate adipisci quam minima delectus voluptas, dolorum, eveniet quaerat voluptates amet, quae blanditiis quia fugiat cupiditate distinctio. Dicta, voluptatum. Obcaecati.</p>\r\n', NULL, NULL, 0, '2019-07-02 06:05:31'),
(20, 'machine', 'Polyol reactor', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis incidunt voluptate adipisci quam minima delectus voluptas, dolorum, eveniet quaerat voluptates amet, quae blanditiis quia fugiat cupiditate distinctio. Dicta, voluptatum. Obcaecati</p>\r\n', NULL, NULL, 0, '2019-07-02 06:05:38'),
(21, 'machine', 'DMF recovery plant', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis incidunt voluptate adipisci quam minima delectus voluptas, dolorum, eveniet quaerat voluptates amet, quae blanditiis quia fugiat cupiditate distinctio. Dicta, voluptatum. Obcaecati.</p>\r\n', NULL, NULL, 0, '2019-07-02 06:05:49'),
(22, 'clients', 'SUPPORT FROM CLIENTS MAKES & OUR WORK POSSIBLE', NULL, '[\"action.png\",\"adidas.png\",\"bata.png\",\"calvin_klein.png\",\"eicher.png\",\"eram.png\",\"favicon.png\",\"godrej.png\",\"mahindra.png\",\"mirza.png\"]', NULL, 0, '2019-07-02 06:28:39');

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
(10, 'our_partner', 'OUR PARTNERS', '<p>Our global network of distribution partners helps bring us closer to achieving our goals</p>\r\n', '[\"peperone.png\",\"tata.png\",\"bata.png\",\"calvin_klein.png\",\"nike.png\",\"puma.png\",\"action.png\",\"favicon.png\",\"eicher.png\",\"eram.png\",\"godrej.png\"]', NULL, NULL, NULL, 0, '2019-06-29 12:44:14'),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
