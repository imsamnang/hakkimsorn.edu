-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.23 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for ecom_alex
DROP DATABASE IF EXISTS `ecom_alex`;
CREATE DATABASE IF NOT EXISTS `ecom_alex` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `ecom_alex`;

-- Dumping structure for table ecom_alex.categories
DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `category_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecom_alex.categories: ~17 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
REPLACE INTO `categories` (`id`, `parent_id`, `category_name`, `description`, `is_active`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 0, 'Phones & Tablets Update', 'Phones and Tablets Update', 1, 'Ps5ITK7KIyECl0TyqlgJjieta3MmJ5iqKbuWGYCD.jpeg', NULL, '2019-04-05 09:59:18', '2019-04-06 04:33:11'),
	(2, 0, 'Computers & Accessories', 'Computers and Accessories', 1, 'qHRmR6L7KSmgG2JNzvPKepvMT1X2UvXdONwREUDI.jpeg', NULL, '2019-04-05 10:08:59', '2019-04-05 10:08:59'),
	(3, 0, 'Electronics & Appliances', 'Electronics and Appliances', 1, 'fpBDUnjkL8f8pTq3vi0oN5kLMJi7IRR1tBL1CmkD.jpeg', NULL, '2019-04-05 10:09:31', '2019-04-05 10:09:31'),
	(4, 0, 'House & Lands', 'House and Lands', 1, 'fmbiY12FxZhMLVkhI8h8SDGOQoOfimIztvJgruzO.jpeg', NULL, '2019-04-05 10:09:59', '2019-04-05 10:09:59'),
	(5, 0, 'Jobs', 'Jobs', 1, 'fmbiY12FxZhMLVkhI8h8SDGOQoOfimIztvJgruzO.jpeg', NULL, '2019-04-05 10:10:23', '2019-04-05 10:10:23'),
	(6, 1, 'Phones, Tablets', 'Phones, Tablets', 1, 'q9RQEAihpGbdFF4AzuJhEOFiszkpzheQZomA4m4a.jpeg', NULL, '2019-04-05 10:12:06', '2019-04-05 10:12:06'),
	(7, 1, 'Phone Accessories', 'Phone Accessories', 1, '3nySjNNjvpuVhMvRYzQmhFg7jtpB9F4sCMbgNj30.jpeg', NULL, '2019-04-05 10:12:33', '2019-04-05 10:12:33'),
	(8, 2, 'Computers', 'Computers', 1, 'RgeoAEVqbC2sd6qY8yC54pgAjAzrcGQek5ebkoca.jpeg', NULL, '2019-04-05 10:12:55', '2019-04-05 10:12:55'),
	(9, 2, 'Software', 'Software', 1, 'XOJ4UCNdZhgLsVm2y6UeSIpi7ZLwNXeDdvPmOsKe.jpeg', NULL, '2019-04-05 10:13:22', '2019-04-05 10:13:22'),
	(10, 3, 'Consumer Electronics', 'Consumer Electronics', 1, 'i6RjN3ekVTIvfAH0U9QFbyJohDyY8mdau8ApcW8S.jpeg', NULL, '2019-04-05 10:13:50', '2019-04-05 10:13:50'),
	(11, 3, 'Security Camera', 'Security Camera', 1, 'PivKpBByRiM5rlygUAAU6nGv6c1NPd15yj7qjwwr.jpeg', NULL, '2019-04-05 10:14:15', '2019-04-05 10:14:15'),
	(12, 4, 'Land for Sale', 'Land for Sale', 1, 'PBSiDUdNGn3FvDydpPeNoi4VlDChoMf7YueZxo9Q.jpeg', NULL, '2019-04-05 10:14:40', '2019-04-05 10:14:40'),
	(13, 4, 'Land for Rent', 'Land for Rent', 1, 'kwfRMwaUTRWEyYDFLDYQL8JUOwq0nv00Wys35BJh.jpeg', NULL, '2019-04-05 10:15:05', '2019-04-05 10:15:05'),
	(14, 5, 'Accounting', 'Accounting', 1, 'Y50CLe8yz5ImMSOV9dj9FuH7RgM4UZRJ4UQZsGOM.jpeg', NULL, '2019-04-05 10:15:32', '2019-04-05 10:15:32'),
	(15, 5, 'Administration', 'Administration', 1, '7bjlZxYNoYpx1IfGGkyoRmPYOIMCjU6HJki7Sq3g.jpeg', NULL, '2019-04-05 10:15:55', '2019-04-05 10:15:55'),
	(16, 5, 'Banking/Insurance', 'Banking/Insurance', 1, 'fIvrEswKGjIA6KHmqStu8zEHbYpE39wkPELMg00f.jpeg', NULL, '2019-04-05 10:16:22', '2019-04-05 10:16:22'),
	(17, 5, 'Security/Driver', 'Security/Driver', 1, 'MPepdq97OMEaIotEu386HLfi8JqsOpzX7EFftRFu.jpeg', NULL, '2019-04-05 10:16:44', '2019-04-05 10:16:44');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table ecom_alex.communes
DROP TABLE IF EXISTS `communes`;
CREATE TABLE IF NOT EXISTS `communes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `district_id` int(11) NOT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_kh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecom_alex.communes: ~23 rows (approximately)
/*!40000 ALTER TABLE `communes` DISABLE KEYS */;
REPLACE INTO `communes` (`id`, `district_id`, `name_en`, `name_kh`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Svay Pak', '', NULL, NULL),
	(2, 1, 'Russey Keo', '', NULL, NULL),
	(3, 2, 'Krang Thnong', '', NULL, NULL),
	(4, 2, 'Khmuonh', '', NULL, NULL),
	(5, 2, 'Phnom Penh Thmei', '', NULL, NULL),
	(6, 3, 'Ovlaok', '', NULL, NULL),
	(7, 3, 'Kamboul', '', NULL, NULL),
	(8, 4, 'Bak Kheng', '', NULL, NULL),
	(9, 4, 'Praek Leab', '', NULL, NULL),
	(10, 5, 'Ponsang', '', NULL, NULL),
	(11, 5, 'Kouk Roka', '', NULL, NULL),
	(12, 6, 'Veal Sbov', '', NULL, NULL),
	(13, 6, 'Praek Aeng', '', NULL, NULL),
	(14, 27, 'Char Chhouk', '', NULL, NULL),
	(15, 27, 'Daun Peng', '', NULL, NULL),
	(16, 28, 'Chub Tatrav', '', NULL, NULL),
	(17, 28, 'Leang Dai', '', NULL, NULL),
	(18, 29, 'Khnar Sanday', '', NULL, NULL),
	(19, 29, 'Khun Ream', '', NULL, NULL),
	(20, 30, 'Anlong Samnor', '', NULL, NULL),
	(21, 30, 'Chi Kraeng', '', NULL, NULL),
	(22, 31, 'Chonleas Dai', '', NULL, NULL),
	(23, 31, 'Kampong Thkov', '', NULL, NULL);
/*!40000 ALTER TABLE `communes` ENABLE KEYS */;

-- Dumping structure for table ecom_alex.districts
DROP TABLE IF EXISTS `districts`;
CREATE TABLE IF NOT EXISTS `districts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `province_id` int(11) NOT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_kh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=198 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecom_alex.districts: ~197 rows (approximately)
/*!40000 ALTER TABLE `districts` DISABLE KEYS */;
REPLACE INTO `districts` (`id`, `province_id`, `name_en`, `name_kh`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Ruessei Kaev', 'ឫស្សីកែវ', NULL, NULL),
	(2, 1, 'Saensokh', 'សែនសុខ', NULL, NULL),
	(3, 1, 'Por Senchey', 'ពោធិសែនជ័យ', NULL, NULL),
	(4, 1, 'Chrouy Changva', 'ជ្រោយចង្វារ', NULL, NULL),
	(5, 1, 'Preaek Pnov', 'ព្រែកភ្នៅ', NULL, NULL),
	(6, 1, 'Chbar Ampov', 'ច្បារអំពៅ', NULL, NULL),
	(7, 1, 'Doun Penh', 'ដូនពេញ', NULL, NULL),
	(8, 1, 'Prampir Meakkara', '៧មករា', NULL, NULL),
	(9, 1, 'Toul Kouk', 'ទួលគោក', NULL, NULL),
	(10, 1, 'Dangkao', 'ដង្កោ', NULL, NULL),
	(11, 1, 'Mean Chey', 'មានជ័យ', NULL, NULL),
	(12, 1, 'Chamkar Mon', 'ចំការមន', NULL, NULL),
	(13, 2, 'Krong Preah Sihanouk', 'ព្រះសីហនុ', NULL, NULL),
	(14, 2, 'Prey Nob', 'ព្រៃនប់', NULL, NULL),
	(15, 2, 'Stueng Hav Chey', 'ស្ទឹងហាវ', NULL, NULL),
	(16, 2, 'Kompong Seila', 'កំពង់សីលា', NULL, NULL),
	(17, 3, 'Krong Kampong Cham', 'កំពង់ចាម', NULL, NULL),
	(18, 3, 'Kampong Siem', 'កំពង់សៀម', NULL, NULL),
	(19, 3, 'KangMeas', 'កងមាស', NULL, NULL),
	(20, 3, 'Kaoh Soutin', 'កោះសុទិន', NULL, NULL),
	(21, 3, 'Prey Chhor', 'ព្រៃឈរ', NULL, NULL),
	(22, 3, 'Srei Santhor', 'ស្រីសន្ធរ', NULL, NULL),
	(23, 3, 'Stueng Trang', 'ស្ទឹងត្រង់', NULL, NULL),
	(24, 3, 'Batheay', 'បាធាយ', NULL, NULL),
	(25, 3, 'Chamkar Leu', 'ចំការលើ', NULL, NULL),
	(26, 3, 'Cheung Prey', 'ជើងព្រៃ', NULL, NULL),
	(27, 4, 'Angkor Chum', 'អង្គរជុំ', NULL, NULL),
	(28, 4, 'Angkor Thom', 'អង្គរធំ', NULL, NULL),
	(29, 4, 'Banteay Srey', 'បន្ទាយស្រី', NULL, NULL),
	(30, 4, 'Chi Kraeng', 'ជីក្រែង', NULL, NULL),
	(31, 4, 'Kralanh', 'ក្រឡាញ់', NULL, NULL),
	(32, 4, 'Pouk', 'ពួក', NULL, NULL),
	(33, 4, 'Prasat Bakong', 'ប្រាសាទបាគង', NULL, NULL),
	(34, 4, 'Krong Siem Reap', 'ក្រុងសៀមរាប', NULL, NULL),
	(35, 4, 'Soutr Nikum', 'សុទ្រនិគមន៍', NULL, NULL),
	(36, 4, 'Srei Snam', 'ស្រីស្នំ', NULL, NULL),
	(37, 4, 'Svay Leu', 'ស្វាយលើ', NULL, NULL),
	(38, 4, 'Varin', 'វ៉ារិន', NULL, NULL),
	(39, 5, 'Banan', 'បាណន់', NULL, NULL),
	(40, 5, 'Thma Koul', 'ថ្មរគោល', NULL, NULL),
	(41, 5, 'Krong Battambang', 'ក្រុងបាត់ដំបង', NULL, NULL),
	(42, 5, 'Bavel', 'បវេល', NULL, NULL),
	(43, 5, 'Aek Phnum', 'ឯកភ្នំ', NULL, NULL),
	(44, 5, 'Moung Ruessei', 'មោង រស្សី', NULL, NULL),
	(45, 5, 'Rotonak Mondol', 'រតនាមណ្ឌល', NULL, NULL),
	(46, 5, 'Sangkae', 'សង្កៃរ', NULL, NULL),
	(47, 5, 'Samlout', 'សំឡូត', NULL, NULL),
	(48, 5, 'Sampov Lun', 'សំពៅលូន', NULL, NULL),
	(49, 5, 'Phnom Proek', 'ភ្នំព្រឹក', NULL, NULL),
	(50, 5, 'Kamrieng', 'កំរៀង', NULL, NULL),
	(51, 5, 'Koas Krala', 'គាស់ក្រឡ', NULL, NULL),
	(52, 5, 'Rukhak Kiri', 'រុក្ខគីរី', NULL, NULL),
	(53, 6, 'Kandal Stueng', '', NULL, NULL),
	(54, 6, 'Koh Thum', '', NULL, NULL),
	(55, 6, 'Mukh Kamphool', '', NULL, NULL),
	(56, 6, 'Sa Ang', '', NULL, NULL),
	(57, 6, 'Leuk Daek', '', NULL, NULL),
	(58, 6, 'Krong Ta Khmau', '', NULL, NULL),
	(59, 6, 'Kien Svay', '', NULL, NULL),
	(60, 6, 'Ponhea Leu', '', NULL, NULL),
	(61, 6, 'Lvea Aem', '', NULL, NULL),
	(62, 6, 'Khsach Kandal', '', NULL, NULL),
	(63, 7, 'Mongkol Borei', '', NULL, NULL),
	(64, 7, 'Preah Netr Preah', '', NULL, NULL),
	(65, 7, 'Serei Saophoan', '', NULL, NULL),
	(66, 7, 'Svay Chek', '', NULL, NULL),
	(67, 7, 'Ou Chrov', '', NULL, NULL),
	(68, 7, 'Thma Puok', '', NULL, NULL),
	(69, 7, 'Malai', '', NULL, NULL),
	(70, 7, 'Ou Chrov', '', NULL, NULL),
	(71, 7, 'Phnum Srok', '', NULL, NULL),
	(72, 8, 'Baribour', '', NULL, NULL),
	(73, 8, 'Kampong Chhnang', '', NULL, NULL),
	(74, 8, 'Kampong Tralach', '', NULL, NULL),
	(75, 8, 'Sameakki', '', NULL, NULL),
	(76, 8, 'Kampong Leaeng', '', NULL, NULL),
	(77, 8, 'Chol Kiri', '', NULL, NULL),
	(78, 8, 'Rolea B\'ier', '', NULL, NULL),
	(79, 8, 'Tuek Phos', '', NULL, NULL),
	(80, 9, 'Basedth', '', NULL, NULL),
	(81, 9, 'Kong Pisei', '', NULL, NULL),
	(82, 9, 'Odongk', '', NULL, NULL),
	(83, 9, 'Samraong Tong', '', NULL, NULL),
	(84, 9, 'Aoral', '', NULL, NULL),
	(85, 9, 'Phnom Sruoch', '', NULL, NULL),
	(86, 9, 'Chbar Mon', '', NULL, NULL),
	(87, 9, 'Thpong', '', NULL, NULL),
	(88, 10, 'Baray', '', NULL, NULL),
	(89, 10, 'Stueng Saen', '', NULL, NULL),
	(90, 10, 'Sandaan', '', NULL, NULL),
	(91, 10, 'Stoung', '', NULL, NULL),
	(92, 10, 'Prasat Balangk', '', NULL, NULL),
	(93, 10, 'Santuk', '', NULL, NULL),
	(94, 10, 'Prasat Sambour', '', NULL, NULL),
	(95, 10, 'Kampong Svay', '', NULL, NULL),
	(96, 11, 'Angkor Chey', '', NULL, NULL),
	(97, 11, 'Chhuk', '', NULL, NULL),
	(98, 11, 'Dorng Tong', '', NULL, NULL),
	(99, 11, 'Teouk Chhou', '', NULL, NULL),
	(100, 11, 'Banteay Meas', '', NULL, NULL),
	(101, 11, 'Kampong Trach', '', NULL, NULL),
	(102, 11, 'Chum Kiri', '', NULL, NULL),
	(103, 11, 'Kampot', '', NULL, NULL),
	(104, 12, 'Krong Kep', '', NULL, NULL),
	(105, 12, 'Damnak Chang aeur', '', NULL, NULL),
	(106, 12, 'Krong Kep', '', NULL, NULL),
	(107, 13, 'Botum Sakor', '', NULL, NULL),
	(108, 13, 'Koh Kong', '', NULL, NULL),
	(109, 13, 'Mondol Seima', '', NULL, NULL),
	(110, 13, 'Thma Bang', '', NULL, NULL),
	(111, 13, 'Kiri Sakor', '', NULL, NULL),
	(112, 13, 'Khemara Phoumin', '', NULL, NULL),
	(113, 13, 'Srae Ambel', '', NULL, NULL),
	(114, 14, 'Chhlong', '', NULL, NULL),
	(115, 14, 'Chitr Borei', '', NULL, NULL),
	(116, 14, 'Krong Kratie', '', NULL, NULL),
	(117, 14, 'Sombo', '', NULL, NULL),
	(118, 14, 'Preaek Prasob', '', NULL, NULL),
	(119, 14, 'Snoul', '', NULL, NULL),
	(120, 15, 'Kaev Seima', '', NULL, NULL),
	(121, 15, 'Ou Reang', '', NULL, NULL),
	(122, 15, 'Krong Saen', '', NULL, NULL),
	(123, 15, 'Pech Chreada', '', NULL, NULL),
	(124, 15, 'Kaoh Nheaek', '', NULL, NULL),
	(125, 16, 'Anlong Veaeng', '', NULL, NULL),
	(126, 16, 'Banteay Ampil', '', NULL, NULL),
	(127, 16, 'Chong Kal', '', NULL, NULL),
	(128, 16, 'Krong Samraong', '', NULL, NULL),
	(129, 16, 'Trapeang Prasat', '', NULL, NULL),
	(130, 17, 'Krong Pailin', '', NULL, NULL),
	(131, 17, 'Sala Krau', '', NULL, NULL),
	(132, 17, 'Chong Kal', '', NULL, NULL),
	(133, 18, 'Chey Saen', '', NULL, NULL),
	(134, 18, 'Choam Khsant', '', NULL, NULL),
	(135, 18, 'Rovieng', '', NULL, NULL),
	(136, 18, 'Sangkom Thmei', '', NULL, NULL),
	(137, 18, 'Chhaeb', '', NULL, NULL),
	(138, 18, 'Kulen', '', NULL, NULL),
	(139, 18, 'Tbaeng Mean Chey', '', NULL, NULL),
	(140, 18, 'Krong Preah Vihear', '', NULL, NULL),
	(141, 19, 'Ba Phnum', '', NULL, NULL),
	(142, 19, 'Kanhchriech', '', NULL, NULL),
	(143, 19, 'Peam Ro', '', NULL, NULL),
	(144, 19, 'Preah Sdach', '', NULL, NULL),
	(145, 19, 'Me Sang', '', NULL, NULL),
	(146, 19, 'Pea Reang', '', NULL, NULL),
	(147, 19, 'Kamchay Mear', '', NULL, NULL),
	(148, 19, 'Prey Veaeng', '', NULL, NULL),
	(149, 19, 'Peam Chor', '', NULL, NULL),
	(150, 19, 'Kampong Trabaek', '', NULL, NULL),
	(151, 19, 'Por Reang', '', NULL, NULL),
	(152, 19, 'Svay Ontor', '', NULL, NULL),
	(153, 20, 'Bakan', '', NULL, NULL),
	(154, 20, 'Krakor', '', NULL, NULL),
	(155, 20, 'Krong Pursat', '', NULL, NULL),
	(156, 20, 'Kandieng', '', NULL, NULL),
	(157, 20, 'Phnum Kravanh', '', NULL, NULL),
	(158, 20, 'Veal Veaeng', '', NULL, NULL),
	(159, 21, 'Andoung Meas', '', NULL, NULL),
	(160, 21, 'Koun Mom', '', NULL, NULL),
	(161, 21, 'Ou Chum', '', NULL, NULL),
	(162, 21, 'Ta Veaeng', '', NULL, NULL),
	(163, 21, 'Krong Banlung', '', NULL, NULL),
	(164, 21, 'Lumphat', '', NULL, NULL),
	(165, 21, 'Ou Ya Dav', '', NULL, NULL),
	(166, 21, 'Bar Kaev', '', NULL, NULL),
	(167, 22, 'Sesan', '', NULL, NULL),
	(168, 22, 'Siem Bouk', '', NULL, NULL),
	(169, 22, 'Siem Pang', '', NULL, NULL),
	(170, 22, 'Thala Barivat', '', NULL, NULL),
	(171, 22, 'Krong Stung Treng', '', NULL, NULL),
	(172, 23, 'Chantrea', '', NULL, NULL),
	(173, 23, 'Rumduol', '', NULL, NULL),
	(174, 23, 'Svay Chrum', '', NULL, NULL),
	(175, 23, 'Svay Teab', '', NULL, NULL),
	(176, 23, 'Kampong Rou', '', NULL, NULL),
	(177, 23, 'Romeas Haek', '', NULL, NULL),
	(178, 23, 'Krong Bavet', '', NULL, NULL),
	(179, 23, 'Krong Svay Rieng', '', NULL, NULL),
	(180, 24, 'Angkor Borei', '', NULL, NULL),
	(181, 24, 'Kiri Vong', '', NULL, NULL),
	(182, 24, 'Samraong', '', NULL, NULL),
	(183, 24, 'Treang', '', NULL, NULL),
	(184, 24, 'Bati', '', NULL, NULL),
	(185, 24, 'Krong Doun Kaev', '', NULL, NULL),
	(186, 24, 'Kaoh Andaet', '', NULL, NULL),
	(187, 24, 'Krong Doun Kaev', '', NULL, NULL),
	(188, 24, 'Tram Kak', '', NULL, NULL),
	(189, 24, 'Prey Kabbas', '', NULL, NULL),
	(190, 24, 'Bourei Cholsar', '', NULL, NULL),
	(191, 25, 'Dombae', '', NULL, NULL),
	(192, 25, 'Memot', '', NULL, NULL),
	(193, 25, 'Ponhea Kraek', '', NULL, NULL),
	(194, 25, 'Krouch Chhma', '', NULL, NULL),
	(195, 25, 'Tboung Khmum', '', NULL, NULL),
	(196, 25, 'Ou Reang Ov', '', NULL, NULL),
	(197, 25, 'Krong Suong', '', NULL, NULL);
/*!40000 ALTER TABLE `districts` ENABLE KEYS */;

-- Dumping structure for table ecom_alex.properties
DROP TABLE IF EXISTS `properties`;
CREATE TABLE IF NOT EXISTS `properties` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `parent_id` int(10) unsigned NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commune_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecom_alex.properties: ~0 rows (approximately)
/*!40000 ALTER TABLE `properties` DISABLE KEYS */;
REPLACE INTO `properties` (`id`, `user_id`, `category_id`, `parent_id`, `title`, `size`, `price`, `description`, `name`, `phone1`, `phone2`, `phone3`, `email`, `province_id`, `district_id`, `commune_id`, `location`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 1, 4, 12, 'ដីសំរាប់ជួល កុងត្រា 3ឆ្នាំ នៅក្រោយផ្សារឈកមាស', '2250', 2200.00, 'ដីសំរាប់ជួលកុងត្រា3ឆ្នាំ នៅក្រោយផ្សារឈូកមាស\r\n\r\nដីកំពុងមានសក្តានុពលភាព សំរាប់អភិវឌ្ឍន៍អាជីវកម្មគ្រប់ប្រភេទ ដែលពោពេញទៅដោយសំណង់ផ្ទះល្វែងថ្មីៗ និង បុរឺពិភពថ្មី ដែលមានផ្ទះរាប់ពាន់ខ្នង ល្អបំផុតសំរាប់ បើកហាងលក់ឡាន លាងឡាន រឺ បើកលក់អាជីវកម្មផ្សេងៗ។\r\nទំហំដី: 45x50 \r\nទីតាំង: នៅខាងក្រោយផ្សារឈូកមាស\r\nបើមានចំណាំអារម្មណ៌ រឺសាកសួរពត៌មានបន្ថែម សូមទាក់ទងលេខទូរស័ព្ទម្ចាស់ដីផ្ទាល់\r\nCellcard: 078/099636xxx ចុចដើម្បីតេ/Click To Call\r\nSmart Axiata: 087/098636xxx ចុចដើម្បីតេ/Click To Call\r\nMetfone: 068636xxx ចុចដើម្បីតេ/Click To Call \r\nសូមអរគុណ!', 'Samnang', '078343143', NULL, NULL, 'applephagna@gmail.com', '1', '27', '14', 'ទីតាំង: នៅខាងក្រោយផ្សារឈូកមាស', NULL, '2019-04-23 01:43:37', '2019-05-01 01:57:46');
/*!40000 ALTER TABLE `properties` ENABLE KEYS */;

-- Dumping structure for table ecom_alex.property_galleries
DROP TABLE IF EXISTS `property_galleries`;
CREATE TABLE IF NOT EXISTS `property_galleries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `property_id` int(10) unsigned NOT NULL,
  `gallery_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecom_alex.property_galleries: ~4 rows (approximately)
/*!40000 ALTER TABLE `property_galleries` DISABLE KEYS */;
REPLACE INTO `property_galleries` (`id`, `property_id`, `gallery_image`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(6, 1, '1331486308.jpg', NULL, '2019-05-01 01:57:47', '2019-05-01 01:57:47'),
	(7, 1, '484421311.jpg', NULL, '2019-05-01 01:57:47', '2019-05-01 01:57:47'),
	(8, 1, '2130992099.jpg', NULL, '2019-05-01 01:57:47', '2019-05-01 01:57:47'),
	(9, 1, '1124767072.jpg', NULL, '2019-05-01 01:57:47', '2019-05-01 01:57:47');
/*!40000 ALTER TABLE `property_galleries` ENABLE KEYS */;

-- Dumping structure for table ecom_alex.provinces
DROP TABLE IF EXISTS `provinces`;
CREATE TABLE IF NOT EXISTS `provinces` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_kh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ecom_alex.provinces: ~25 rows (approximately)
/*!40000 ALTER TABLE `provinces` DISABLE KEYS */;
REPLACE INTO `provinces` (`id`, `name_en`, `name_kh`, `created_at`, `updated_at`) VALUES
	(1, 'Phnom Penh', 'ភ្នំពេញ', NULL, NULL),
	(2, 'Preah Sihanouk', 'ព្រះសីហនុ', NULL, NULL),
	(3, 'Kampong Cham', 'កំពង់ចាម', NULL, NULL),
	(4, 'Siem Reap', 'សៀមរាប', NULL, NULL),
	(5, 'Battambang', 'បាត់ដំបង', NULL, NULL),
	(6, 'Kandal', 'កណ្តាល', NULL, NULL),
	(7, 'Banteay Meanchey', 'បន្ទាយមានជ័យ', NULL, NULL),
	(8, 'Kampong Chhnang', 'កំពង់ឆ្នាំង', NULL, NULL),
	(9, 'Kampong Speu', 'កំពង់ស្ពឺ', NULL, NULL),
	(10, 'Kampong Thom', 'កំពង់ធំ', NULL, NULL),
	(11, 'Kampot', 'កំពត', NULL, NULL),
	(12, 'Kep', 'កែប', NULL, NULL),
	(13, 'Koh Kong', 'កោះកុង', NULL, NULL),
	(14, 'Kratie', 'ក្រចេះ', NULL, NULL),
	(15, 'Mondulkiri', 'មណ្ឌលគិរី', NULL, NULL),
	(16, 'Oddar Meanchey', 'ឧត្តរមានជ័យ', NULL, NULL),
	(17, 'Pailin', 'ប៉ៃលិន', NULL, NULL),
	(18, 'Preah Vihear', 'ព្រះវិហារ', NULL, NULL),
	(19, 'Prey Veng', 'ព្រៃវែង', NULL, NULL),
	(20, 'Pursat', 'ពោធ៌សាត់', NULL, NULL),
	(21, 'Ratanakiri', 'រតនគីរី', NULL, NULL),
	(22, 'Stung Treng', 'ស្ទឹងត្រែង', NULL, NULL),
	(23, 'Svay Rieng', 'ស្វាយរៀង', NULL, NULL),
	(24, 'Takeo', 'តាកែវ', NULL, NULL),
	(25, 'Tboung Khmum', 'ត្បូងឃ្មុំ', NULL, NULL);
/*!40000 ALTER TABLE `provinces` ENABLE KEYS */;


-- Dumping database structure for ecommerce_12
DROP DATABASE IF EXISTS `ecommerce_12`;
CREATE DATABASE IF NOT EXISTS `ecommerce_12` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `ecommerce_12`;

-- Dumping structure for table ecommerce_12.admin
DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table ecommerce_12.admin: ~2 rows (approximately)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
REPLACE INTO `admin` (`id`, `name`, `username`, `email`, `phone`, `password`, `role`, `photo`, `created_at`, `updated_at`, `remember_token`, `status`) VALUES
	(1, 'Genius Admin', 'admin', 'admin@gmail.com', '01717890623', '$2y$10$GG3SSLfO9gylr5Qta4SQ1uM0tbMqFfTr0XeFa1SVjCkh7/hQ9ZWEC', 'Administrator', '1491825290645x430-film-animasi-larrikins-borong-bintang-bintang-australia-160604k.jpg', '2017-01-24 03:21:40', '2017-05-06 12:39:47', 'Zr3P783XIr2RpaLTm4EIwAmjStFsNR4eg5eJlFAY6UoeaYtl5JOphTa9ZiP0', 1),
	(2, 'S Zaman', 'genius', 'genius@gmail.com', '017178906233', '$2y$10$DozM30vRGMY9aDIh2EKxROmvuJRtBMimO2ox/rF8uXjMBYBjLvVRe', 'Administrator', '11822730_1619598781649385_5506560502405630990_n.jpg', '2017-01-27 22:35:17', '2017-03-06 11:02:08', '', 1);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping structure for table ecommerce_12.advertisements
DROP TABLE IF EXISTS `advertisements`;
CREATE TABLE IF NOT EXISTS `advertisements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` enum('script','banner') NOT NULL,
  `advertiser_name` varchar(255) DEFAULT NULL,
  `redirect_url` varchar(255) DEFAULT NULL,
  `banner_size` varchar(255) NOT NULL,
  `banner_file` varchar(255) DEFAULT NULL,
  `script` text,
  `clicks` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table ecommerce_12.advertisements: ~0 rows (approximately)
/*!40000 ALTER TABLE `advertisements` DISABLE KEYS */;
/*!40000 ALTER TABLE `advertisements` ENABLE KEYS */;

-- Dumping structure for table ecommerce_12.cart
DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniqueid` varchar(255) DEFAULT NULL,
  `product` int(11) DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `cost` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table ecommerce_12.cart: ~0 rows (approximately)
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;

-- Dumping structure for table ecommerce_12.categories
DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mainid` int(11) DEFAULT NULL,
  `subid` int(11) DEFAULT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET latin1 NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table ecommerce_12.categories: ~18 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
REPLACE INTO `categories` (`id`, `mainid`, `subid`, `role`, `name`, `slug`, `status`) VALUES
	(17, NULL, NULL, 'main', 'Men', 'men', 1),
	(18, 17, NULL, 'sub', 'T-shirt', 't-shirt', 1),
	(19, 17, 18, 'child', 'Black', 'black', 1),
	(20, 17, NULL, 'sub', 'Subtitle', 'subtitle', 1),
	(21, 17, NULL, 'sub', 'Subtitle', 'subtitle2', 1),
	(22, 17, NULL, 'sub', 'Subtitle', 'subtitle3', 1),
	(23, 17, NULL, 'sub', 'Subtitle', 'subtitle4', 1),
	(24, 17, 20, 'child', 'Child-category', 'child-category', 1),
	(25, 17, 21, 'child', 'Child-category', 'child-category2', 1),
	(26, 17, 22, 'child', 'Child-category', 'child-category3', 1),
	(27, 17, 23, 'child', 'Child-category', 'child-category6', 1),
	(29, 17, 23, 'child', 'Child-category', 'child-category4', 1),
	(30, 17, 22, 'child', 'Child-category', 'child-category7', 1),
	(31, 17, 21, 'child', 'Child-category', 'child-category8', 1),
	(32, 17, 21, 'child', 'Child-category', 'child-category9', 1),
	(33, 17, 20, 'child', 'Child-category', 'child-category41', 1),
	(34, 17, 18, 'child', 'Child-category', 'child-category42', 1),
	(35, NULL, NULL, 'main', 'Women', 'women', 1);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table ecommerce_12.code_scripts
DROP TABLE IF EXISTS `code_scripts`;
CREATE TABLE IF NOT EXISTS `code_scripts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `google_analytics` text NOT NULL,
  `meta_keys` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table ecommerce_12.code_scripts: ~0 rows (approximately)
/*!40000 ALTER TABLE `code_scripts` DISABLE KEYS */;
REPLACE INTO `code_scripts` (`id`, `google_analytics`, `meta_keys`) VALUES
	(1, '<script>\r\n   //Google Analytics Scriptfffffffffffffffffffffffssssfffffs\r\n</script>', 'Genius,Ocean,Sea,Etc,Genius,Ocean,SeaGenius,Ocean,Sea,Etc,Genius,Ocean,SeaGenius,Ocean,Sea,Etc,Genius,Ocean,Sea');
/*!40000 ALTER TABLE `code_scripts` ENABLE KEYS */;

-- Dumping structure for table ecommerce_12.orders
DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customerid` int(11) NOT NULL,
  `products` varchar(255) DEFAULT NULL,
  `quantities` varchar(255) DEFAULT NULL,
  `sizes` varchar(255) DEFAULT NULL,
  `method` varchar(255) DEFAULT NULL,
  `pay_amount` float NOT NULL,
  `txnid` varchar(255) DEFAULT NULL,
  `charge_id` varchar(255) DEFAULT NULL,
  `order_number` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `customer_phone` varchar(255) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `customer_city` varchar(255) NOT NULL,
  `customer_zip` varchar(255) NOT NULL,
  `booking_date` datetime DEFAULT NULL,
  `status` enum('pending','processing','completed','declined') NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table ecommerce_12.orders: ~0 rows (approximately)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Dumping structure for table ecommerce_12.page_settings
DROP TABLE IF EXISTS `page_settings`;
CREATE TABLE IF NOT EXISTS `page_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contact` text CHARACTER SET latin1 NOT NULL,
  `contact_email` text CHARACTER SET latin1 NOT NULL,
  `about` text CHARACTER SET latin1 NOT NULL,
  `faq` text CHARACTER SET latin1 NOT NULL,
  `c_status` int(11) NOT NULL,
  `a_status` int(11) NOT NULL,
  `f_status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table ecommerce_12.page_settings: ~0 rows (approximately)
/*!40000 ALTER TABLE `page_settings` DISABLE KEYS */;
REPLACE INTO `page_settings` (`id`, `contact`, `contact_email`, `about`, `faq`, `c_status`, `a_status`, `f_status`) VALUES
	(1, 'Success! Thanks for contacting us, we will get back to you shortly.', 'admin@geniusocean.com', '<div>\r\n<h2>Title number 1<br></h2>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and\r\n typesetting industry. Lorem Ipsum has been the industry\'s standard \r\ndummy text ever since the 1500s, when an unknown printer took a galley \r\nof type and scrambled it to make a type specimen book. It has survived \r\nnot only five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.</p>\r\n</div><div>\r\n<h2>Title number 2<br></h2>\r\n<p>It is a long established fact that a reader will be distracted by the\r\n readable content of a page when looking at its layout. The point of \r\nusing Lorem Ipsum is that it has a more-or-less normal distribution of \r\nletters, as opposed to using \'Content here, content here\', making it \r\nlook like readable English. Many desktop publishing packages and web \r\npage editors now use Lorem Ipsum as their default model text, and a \r\nsearch for \'lorem ipsum\' will uncover many web sites still in their \r\ninfancy. Various versions have evolved over the years, sometimes by \r\naccident, sometimes on purpose (injected humour and the like).</p>\r\n</div><br><div>\r\n<h2>Title number 3<br></h2>\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It\r\n has roots in a piece of classical Latin literature from 45 BC, making \r\nit over 2000 years old. Richard McClintock, a Latin professor at \r\nHampden-Sydney College in Virginia, looked up one of the more obscure \r\nLatin words, consectetur, from a Lorem Ipsum passage, and going through \r\nthe cites of the word in classical literature, discovered the \r\nundoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 \r\nof "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by \r\nCicero, written in 45 BC. This book is a treatise on the theory of \r\nethics, very popular during the Renaissance. The first line of Lorem \r\nIpsum, "Lorem ipsum dolor sit amet..", comes from a line in section \r\n1.10.32.</p><p>The standard chunk of Lorem Ipsum used since the 1500s is\r\n reproduced below for those interested. Sections 1.10.32 and 1.10.33 \r\nfrom "de Finibus Bonorum et Malorum" by Cicero are also reproduced in \r\ntheir exact original form, accompanied by English versions from the 1914\r\n translation by H. Rackham.</p>\r\n</div>\r\n<h2>Title number 9<br></h2>\r\n<p>There are many variations of passages of Lorem Ipsum available, but \r\nthe majority have suffered alteration in some form, by injected humour, \r\nor randomised words which don\'t look even slightly believable. If you \r\nare going to use a passage of Lorem Ipsum, you need to be sure there \r\nisn\'t anything embarrassing hidden in the middle of text. All the Lorem \r\nIpsum generators on the Internet tend to repeat predefined chunks as \r\nnecessary, making this the first true generator on the Internet. It uses\r\n a dictionary of over 200 Latin words, combined with a handful of model \r\nsentence structures, to generate Lorem Ipsum which looks reasonable. The\r\n generated Lorem Ipsum is therefore always free from repetition, \r\ninjected humour, or non-characteristic words etc.</p>', '<div>\r\n<h2>What is Lorem Ipsum, Really?</h2>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and\r\n typesetting industry. Lorem Ipsum has been the industry\'s standard \r\ndummy text ever since the 1500s, when an unknown printer took a galley \r\nof type and scrambled it to make a type specimen book. It has survived \r\nnot only five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.</p>\r\n</div><div>\r\n<h2>Why do we use it?</h2>\r\n<p>It is a long established fact that a reader will be distracted by the\r\n readable content of a page when looking at its layout. The point of \r\nusing Lorem Ipsum is that it has a more-or-less normal distribution of \r\nletters, as opposed to using \'Content here, content here\', making it \r\nlook like readable English. Many desktop publishing packages and web \r\npage editors now use Lorem Ipsum as their default model text, and a \r\nsearch for \'lorem ipsum\' will uncover many web sites still in their \r\ninfancy. Various versions have evolved over the years, sometimes by \r\naccident, sometimes on purpose (injected humour and the like).</p>\r\n</div><br><div>\r\n<h2>Where does it come from?</h2>\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It\r\n has roots in a piece of classical Latin literature from 45 BC, making \r\nit over 2000 years old. Richard McClintock, a Latin professor at \r\nHampden-Sydney College in Virginia, looked up one of the more obscure \r\nLatin words, consectetur, from a Lorem Ipsum passage, and going through \r\nthe cites of the word in classical literature, discovered the \r\nundoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 \r\nof "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by \r\nCicero, written in 45 BC. This book is a treatise on the theory of \r\nethics, very popular during the Renaissance. The first line of Lorem \r\nIpsum, "Lorem ipsum dolor sit amet..", comes from a line in section \r\n1.10.32.</p><p>The standard chunk of Lorem Ipsum used since the 1500s is\r\n reproduced below for those interested. Sections 1.10.32 and 1.10.33 \r\nfrom "de Finibus Bonorum et Malorum" by Cicero are also reproduced in \r\ntheir exact original form, accompanied by English versions from the 1914\r\n translation by H. Rackham.</p>\r\n</div>\r\n<h2>Where can I get some?</h2>\r\n<p>There are many variations of passages of Lorem Ipsum available, but \r\nthe majority have suffered alteration in some form, by injected humour, \r\nor randomised words which don\'t look even slightly believable. If you \r\nare going to use a passage of Lorem Ipsum, you need to be sure there \r\nisn\'t anything embarrassing hidden in the middle of text. All the Lorem \r\nIpsum generators on the Internet tend to repeat predefined chunks as \r\nnecessary, making this the first true generator on the Internet. It uses\r\n a dictionary of over 200 Latin words, combined with a handful of model \r\nsentence structures, to generate Lorem Ipsum which looks reasonable. The\r\n generated Lorem Ipsum is therefore always free from repetition, \r\ninjected humour, or non-characteristic words etc.</p>', 1, 1, 1);
/*!40000 ALTER TABLE `page_settings` ENABLE KEYS */;

-- Dumping structure for table ecommerce_12.products
DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) CHARACTER SET latin1 NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `price` float NOT NULL,
  `previous_price` float DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `sizes` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `feature_image` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `policy` text COLLATE utf8_unicode_ci,
  `featured` int(1) NOT NULL DEFAULT '0',
  `views` int(11) DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- Dumping data for table ecommerce_12.products: ~11 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
REPLACE INTO `products` (`id`, `title`, `category`, `description`, `price`, `previous_price`, `stock`, `sizes`, `feature_image`, `policy`, `featured`, `views`, `created_at`, `updated_at`, `status`) VALUES
	(12, 'Black Shirt', '17,18,19', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 700, 1000, 44, 'X,XL,XXL,M,L,S', '149465973014.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, 59, '2017-05-12 16:05:41', '2017-05-19 15:50:34', 1),
	(14, 'Some Shirt', '17,18,19', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 1000, 500, 99, NULL, '149465973014.jpg', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 1, 35, '2017-05-13 07:12:48', '2017-05-17 12:36:50', 1),
	(15, 'Grey Shirt', '17,18,19', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 1000, 600, 98, NULL, '149465973014.jpg', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 1, 34, '2017-05-13 07:14:40', '2017-05-30 11:52:35', 1),
	(16, 'Striped Shirt', '17,18,19', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 1000, 600, 99, NULL, '149465973014.jpg', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 1, 21, '2017-05-13 07:14:42', '2017-05-18 17:46:17', 1),
	(17, 'Here Will Be Your Product Title', '17,18,19', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.', 1200, 1500, 40, NULL, '149465973014.jpg', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.', 1, 22, '2017-05-13 08:07:41', '2017-06-14 16:52:27', 1),
	(18, 'Here Will Be Your Product Title', '17,18,19', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.', 800, 1500, 0, NULL, '149465973014.jpg', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.', 1, 27, '2017-05-13 08:08:45', '2017-05-15 17:16:58', 1),
	(19, 'Here Will Be Your Product Title', '17,18,19', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.', 800, 1200, 44, NULL, '149465973014.jpg', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.', 1, 79, '2017-05-13 08:10:15', '2017-06-14 16:52:27', 1),
	(20, 'Here Will Be Your Product Title', '17,18,19', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.', 600, 1100, 43, NULL, '149465973014.jpg', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.', 1, 46, '2017-05-13 08:12:13', '2017-05-19 16:13:03', 1),
	(22, 'Tesing Project', '17,18,19', '<b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting \r\nindustry. Lorem Ipsum has been the industry\'s standard dummy text ever \r\nsince the 1500s, when an unknown printer took a galley of type and \r\nscrambled it to make a type specimen book. It has survived not only five\r\n centuries, but also the leap into electronic typesetting, remaining \r\nessentially unchanged. It was popularised in the 1960s with the release \r\nof Letraset sheets containing Lorem Ipsum passages, and more recently \r\nwith desktop publishing software like Aldus PageMaker including versions\r\n of Lorem Ipsum.', 20, 25, 8, 'X,S', '1495210310eggplant-270x360.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting \r\nindustry. Lorem Ipsum has been the industry\'s standard dummy text ever \r\nsince the 1500s, when an unknown printer <u>took a galley of type and \r\nscrambled it to make a type specimen book. It has survived not only five\r\n centuries, but also the leap into electronic typesetting,</u> remaining \r\nessentially unchanged. It was popularised in the 1960s with the release \r\nof Letraset sheets containing Lorem Ipsum passages, and more recently \r\nwith desktop publishing software like Aldus PageMaker including versions\r\n of Lorem Ipsum.', 1, 9, '2017-05-18 10:22:15', '2017-05-30 11:52:20', 1),
	(23, 'Testing Project Again', '17,18,34', 'Lorem Ipsum is simply dummy text of the printing and typesetting \r\nindustry. Lorem Ipsum has been the industry\'s standard dummy text ever \r\nsince the 1500s, when an unknown printer took a galley of type and \r\nscrambled it to make a type specimen book. It has survived not only five\r\n centuries, but also the leap into electronic typesetting, remaining \r\nessentially unchanged. It was popularised in the 1960s with the release \r\nof Letraset sheets containing Lorem Ipsum passages, and more recently \r\nwith desktop publishing software like Aldus PageMaker including versions\r\n of Lorem Ipsum', 20, 25, 9, 'X,XL,M,L,S', '14952102852.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting \r\nindustry. Lorem Ipsum has been the industry\'s standard dummy text ever \r\nsince the 1500s, when an unknown printer took a galley of type and \r\nscrambled it to make a type specimen book. It has survived not only five\r\n centuries, but also the leap into electronic typesetting, remaining \r\nessentially unchanged. It was popularised in the 1960s with the release \r\nof Letraset sheets containing Lorem Ipsum passages, and more recently \r\nwith desktop publishing software like Aldus PageMaker including versions\r\n of Lorem Ipsum', 1, 6, '2017-05-19 12:32:34', '2017-05-30 16:33:06', 1),
	(25, 'Tesing Project Float', '17,,', 'sssss sssssssss sssssssssssss sssssx dsfsd dfgsfg sfsdf sssss sssssssss sssssssssssss sssssx dsfsd dfgsfg sfsdf sssss sssssssss sssssssssssss sssssx dsfsd dfgsfg sfsdf sssss sssssssss sssssssssssss sssssx dsfsd dfgsfg sfsdf sssss sssssssss sssssssssssss sssssx dsfsd dfgsfg sfsdf sssss sssssssss sssssssssssss sssssx dsfsd dfgsfg sfsdf sssss sssssssss sssssssssssss sssssx dsfsd dfgsfg sfsdf', 20.99, 25.99, 10, NULL, '149615617618342277_1363825740371972_1502677715878156657_n.jpg', 'sssss sssssssss sssssssssssss sssssx dsfsd dfgsfg sfsdf sssss sssssssss sssssssssssss sssssx dsfsd dfgsfg sfsdf sssss sssssssss sssssssssssss sssssx dsfsd dfgsfg sfsdf sssss sssssssss sssssssssssss sssssx dsfsd dfgsfg sfsdf sssss sssssssss sssssssssssss sssssx dsfsd dfgsfg sfsdf sssss sssssssss sssssssssssss sssssx dsfsd dfgsfg sfsdf sssss sssssssss sssssssssssss sssssx dsfsd dfgsfg sfsdf', 1, 16, '2017-05-30 14:56:16', '2017-06-14 17:10:35', 1);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Dumping structure for table ecommerce_12.product_gallery
DROP TABLE IF EXISTS `product_gallery`;
CREATE TABLE IF NOT EXISTS `product_gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productid` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table ecommerce_12.product_gallery: ~0 rows (approximately)
/*!40000 ALTER TABLE `product_gallery` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_gallery` ENABLE KEYS */;

-- Dumping structure for table ecommerce_12.reviews
DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productid` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `review` text,
  `rating` int(11) DEFAULT NULL,
  `review_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table ecommerce_12.reviews: ~9 rows (approximately)
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
REPLACE INTO `reviews` (`id`, `productid`, `name`, `email`, `review`, `rating`, `review_date`) VALUES
	(1, NULL, 'sssssssss', 'user@gmail.com', NULL, NULL, '2017-05-08 17:15:56'),
	(2, NULL, 'shaon', 'user@gmail.com', 'Lorem ipsamLorem ipsamLorem ipsamLorem ipsamLorem ipsamLorem ipsamLorem ipsamLorem ipsam Lorem ipsamLorem ipsamLorem ipsamLorem ipsamLorem ipsamLorem ipsamLorem ipsamLorem ipsam', NULL, '2017-05-08 17:17:32'),
	(3, 8, 'shaon', 'admin@gmail.com', 'Lorem ipsamLorem ipsamLorem ipsamLorem ipsamLorem ipsamLorem ipsamLorem ipsamLorem ipsam Lorem ipsamLorem ipsamLorem ipsamLorem ipsamLorem ipsamLorem ipsamLorem ipsamLorem ipsam', 5, '2017-05-08 17:18:15'),
	(4, 8, 'wwwwwwwww wwwwwwww', 'user@gmail.com', 'wwwwww www wwww wwwwwww wwwwwwww wwwwww www wwwwww', 4, '2017-05-08 18:15:37'),
	(5, 3, 'Shaon Zaman', 'user@gmail.com', 'Good Product.', 5, '2017-05-08 21:37:38'),
	(6, 3, 'B Chow', 'admin@gmail.com', 'Nice Product.', 4, '2017-05-09 10:20:51'),
	(7, 3, 'Dreamy', 'user@gmail.com', 'Poor Product.', 1, '2017-05-09 10:21:45'),
	(9, 4, 'Shaon Zaman', 'user@gmail.com', 'aaaaaaaaaaaaaaaaaa', 5, '2017-05-12 10:56:24'),
	(10, 24, 'ddddddddf', 'badruddozsa.me@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 5, '2017-05-19 15:13:24');
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;

-- Dumping structure for table ecommerce_12.section_titles
DROP TABLE IF EXISTS `section_titles`;
CREATE TABLE IF NOT EXISTS `section_titles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `service_text` text CHARACTER SET latin1,
  `pricing_title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `pricing_text` text CHARACTER SET latin1,
  `portfolio_title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `portfolio_text` text CHARACTER SET latin1,
  `testimonial_title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `testimonial_text` text CHARACTER SET latin1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table ecommerce_12.section_titles: ~0 rows (approximately)
/*!40000 ALTER TABLE `section_titles` DISABLE KEYS */;
REPLACE INTO `section_titles` (`id`, `service_title`, `service_text`, `pricing_title`, `pricing_text`, `portfolio_title`, `portfolio_text`, `testimonial_title`, `testimonial_text`) VALUES
	(1, 'Our Services', 'In publishing and graphic design, lorem ipsum is a filler text commonly used to demonstrate the graphic elements of a document or visual presentation.', 'Pricing Plans', 'In publishing and graphic design, lorem ipsum is a filler text commonly used to demonstrate the graphic elements of a document or visual presentation.', 'Latest Projects', 'In publishing and graphic design, lorem ipsum is a filler text commonly used to demonstrate the graphic elements of a document or visual presentation.', 'Customer Reviews', 'In publishing and graphic design, lorem ipsum is a filler text commonly used to demonstrate the graphic elements of a document or visual presentation.');
/*!40000 ALTER TABLE `section_titles` ENABLE KEYS */;

-- Dumping structure for table ecommerce_12.service_section
DROP TABLE IF EXISTS `service_section`;
CREATE TABLE IF NOT EXISTS `service_section` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET latin1 NOT NULL,
  `text` text CHARACTER SET latin1 NOT NULL,
  `icon` varchar(255) CHARACTER SET latin1 NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table ecommerce_12.service_section: ~3 rows (approximately)
/*!40000 ALTER TABLE `service_section` DISABLE KEYS */;
REPLACE INTO `service_section` (`id`, `title`, `text`, `icon`, `status`) VALUES
	(2, 'Service Name Here', 'Lorem Ipsum is simply dummy text of the printing and typeseatting industry. Lorem Ipsum has been the industry\'s', 'jz52.jpg', 1),
	(3, 'Service Name Here', 'Lorem Ipsum is simply dummy text of the printing and typeseatting industry. Lorem Ipsum has been the industry\'s', '4rY3.jpg', 1),
	(4, 'Service Name Here', 'Lorem Ipsum is simply dummy text of the printing and typeseatting industry. Lorem Ipsum has been the industry\'s', 'BfMUntitled-1.jpg', 1);
/*!40000 ALTER TABLE `service_section` ENABLE KEYS */;

-- Dumping structure for table ecommerce_12.settings
DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) CHARACTER SET latin1 NOT NULL,
  `favicon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) CHARACTER SET latin1 NOT NULL,
  `url` varchar(255) CHARACTER SET latin1 NOT NULL,
  `about` text CHARACTER SET latin1 NOT NULL,
  `address` varchar(255) CHARACTER SET latin1 NOT NULL,
  `phone` varchar(50) CHARACTER SET latin1 NOT NULL,
  `fax` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `footer` varchar(255) CHARACTER SET latin1 NOT NULL,
  `background` varchar(255) CHARACTER SET latin1 NOT NULL,
  `theme_color` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `paypal_business` varchar(255) CHARACTER SET latin1 NOT NULL,
  `shipping_cost` float DEFAULT '0',
  `stripe_key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stripe_secret` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `css_file` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- Dumping data for table ecommerce_12.settings: ~0 rows (approximately)
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
REPLACE INTO `settings` (`id`, `logo`, `favicon`, `title`, `url`, `about`, `address`, `phone`, `fax`, `email`, `footer`, `background`, `theme_color`, `paypal_business`, `shipping_cost`, `stripe_key`, `stripe_secret`, `css_file`) VALUES
	(1, 'logo.png', 'favicon.ico', 'Corporate Business', 'Fuckcccccc', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae&nbsp;', '124/6 Street, Country', '00 000 000 000', '00 000 000 000', 'admin@geniusocean.com', 'COPYRIGHT 2017 <a href="http://geniusocean.com">GeniusOcean.com<br></a>', 'smm-min2.jpg', '#000000', 'shaon143-facilitator-1@gmail.com', 4.99, 'pk_test_bD5Si0msHNV75sd5R71jSJFb', 'sk_test_r7zxASOuYYCiuT3svkUtuh6W', 'genius1.css');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;

-- Dumping structure for table ecommerce_12.sliders
DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET latin1 NOT NULL,
  `text` text CHARACTER SET latin1 NOT NULL,
  `image` varchar(255) CHARACTER SET latin1 NOT NULL,
  `text_position` varchar(255) CHARACTER SET latin1 NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table ecommerce_12.sliders: ~3 rows (approximately)
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
REPLACE INTO `sliders` (`id`, `title`, `text`, `image`, `text_position`, `status`) VALUES
	(3, 'Slider Title 1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'BrUslider.jpg', 'slide_style_left', 1),
	(4, 'Slider Title 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '8Nsslider3.jpg', 'slide_style_center', 1),
	(5, 'Slider Title 3', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'RWXslider1.jpg', 'slide_style_right', 1);
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;

-- Dumping structure for table ecommerce_12.social_links
DROP TABLE IF EXISTS `social_links`;
CREATE TABLE IF NOT EXISTS `social_links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `facebook` varchar(255) NOT NULL,
  `twiter` varchar(255) NOT NULL,
  `g_plus` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `f_status` enum('enable','disable') NOT NULL DEFAULT 'enable',
  `t_status` enum('enable','disable') NOT NULL DEFAULT 'enable',
  `g_status` enum('enable','disable') NOT NULL DEFAULT 'enable',
  `link_status` enum('enable','disable') NOT NULL DEFAULT 'enable',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table ecommerce_12.social_links: ~0 rows (approximately)
/*!40000 ALTER TABLE `social_links` DISABLE KEYS */;
REPLACE INTO `social_links` (`id`, `facebook`, `twiter`, `g_plus`, `linkedin`, `f_status`, `t_status`, `g_status`, `link_status`) VALUES
	(1, 'http://facebook.com/ebangladesh', 'http://twitter.com/', 'http://google.com/', 'http://linkedin.com/', 'enable', 'enable', 'enable', 'enable');
/*!40000 ALTER TABLE `social_links` ENABLE KEYS */;

-- Dumping structure for table ecommerce_12.subscription
DROP TABLE IF EXISTS `subscription`;
CREATE TABLE IF NOT EXISTS `subscription` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table ecommerce_12.subscription: 0 rows
/*!40000 ALTER TABLE `subscription` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscription` ENABLE KEYS */;

-- Dumping structure for table ecommerce_12.testimonials
DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `review` text CHARACTER SET latin1 NOT NULL,
  `client` varchar(255) CHARACTER SET latin1 NOT NULL,
  `designation` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table ecommerce_12.testimonials: ~2 rows (approximately)
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
REPLACE INTO `testimonials` (`id`, `review`, `client`, `designation`) VALUES
	(1, 'In publishing and graphic design, lorem ipsum is a filler text commonly used to demonstrate the graphic elements of a document or visual presentation.', 'eBangladesh', 'Project Manager'),
	(2, 'In publishing and graphic design, lorem ipsum is a filler text commonly used to demonstrate the graphic elements of a document or visual presentation.', 'The Usual Suspects', 'Owner');
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;

-- Dumping structure for table ecommerce_12.user_profiles
DROP TABLE IF EXISTS `user_profiles`;
CREATE TABLE IF NOT EXISTS `user_profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `zip` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Dumping data for table ecommerce_12.user_profiles: 0 rows
/*!40000 ALTER TABLE `user_profiles` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_profiles` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
