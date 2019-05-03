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


-- Dumping database structure for hakkimsorn.edu
DROP DATABASE IF EXISTS `hakkimsorn.edu`;
CREATE DATABASE IF NOT EXISTS `hakkimsorn.edu` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `hakkimsorn.edu`;

-- Dumping structure for table hakkimsorn.edu.admins
DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`),
  UNIQUE KEY `admins_usernamme_unique` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hakkimsorn.edu.admins: 1 rows
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` (`id`, `firstname`, `lastname`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Administrator', 'Admin', 'administrator', 'admin@gmail.com', NULL, '$2y$10$zm/2FxW1iCahkkLZqwprI.DMoEA55QF4XtjCuu9pU/ab/rKMcbjny', NULL, '2019-05-03 04:20:54', '2019-05-03 04:20:54');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;

-- Dumping structure for table hakkimsorn.edu.categories
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

-- Dumping data for table hakkimsorn.edu.categories: ~17 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `parent_id`, `category_name`, `description`, `is_active`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
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

-- Dumping structure for table hakkimsorn.edu.communes
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

-- Dumping data for table hakkimsorn.edu.communes: ~23 rows (approximately)
/*!40000 ALTER TABLE `communes` DISABLE KEYS */;
INSERT INTO `communes` (`id`, `district_id`, `name_en`, `name_kh`, `created_at`, `updated_at`) VALUES
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

-- Dumping structure for table hakkimsorn.edu.districts
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

-- Dumping data for table hakkimsorn.edu.districts: ~197 rows (approximately)
/*!40000 ALTER TABLE `districts` DISABLE KEYS */;
INSERT INTO `districts` (`id`, `province_id`, `name_en`, `name_kh`, `created_at`, `updated_at`) VALUES
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

-- Dumping structure for table hakkimsorn.edu.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hakkimsorn.edu.migrations: 3 rows
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_05_02_110924_create_admins_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table hakkimsorn.edu.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hakkimsorn.edu.password_resets: 0 rows
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table hakkimsorn.edu.properties
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

-- Dumping data for table hakkimsorn.edu.properties: ~0 rows (approximately)
/*!40000 ALTER TABLE `properties` DISABLE KEYS */;
INSERT INTO `properties` (`id`, `user_id`, `category_id`, `parent_id`, `title`, `size`, `price`, `description`, `name`, `phone1`, `phone2`, `phone3`, `email`, `province_id`, `district_id`, `commune_id`, `location`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 1, 4, 12, 'ដីសំរាប់ជួល កុងត្រា 3ឆ្នាំ នៅក្រោយផ្សារឈកមាស', '2250', 2200.00, 'ដីសំរាប់ជួលកុងត្រា3ឆ្នាំ នៅក្រោយផ្សារឈូកមាស\r\n\r\nដីកំពុងមានសក្តានុពលភាព សំរាប់អភិវឌ្ឍន៍អាជីវកម្មគ្រប់ប្រភេទ ដែលពោពេញទៅដោយសំណង់ផ្ទះល្វែងថ្មីៗ និង បុរឺពិភពថ្មី ដែលមានផ្ទះរាប់ពាន់ខ្នង ល្អបំផុតសំរាប់ បើកហាងលក់ឡាន លាងឡាន រឺ បើកលក់អាជីវកម្មផ្សេងៗ។\r\nទំហំដី: 45x50 \r\nទីតាំង: នៅខាងក្រោយផ្សារឈូកមាស\r\nបើមានចំណាំអារម្មណ៌ រឺសាកសួរពត៌មានបន្ថែម សូមទាក់ទងលេខទូរស័ព្ទម្ចាស់ដីផ្ទាល់\r\nCellcard: 078/099636xxx ចុចដើម្បីតេ/Click To Call\r\nSmart Axiata: 087/098636xxx ចុចដើម្បីតេ/Click To Call\r\nMetfone: 068636xxx ចុចដើម្បីតេ/Click To Call \r\nសូមអរគុណ!', 'Samnang', '078343143', NULL, NULL, 'applephagna@gmail.com', '1', '27', '14', 'ទីតាំង: នៅខាងក្រោយផ្សារឈូកមាស', NULL, '2019-04-23 01:43:37', '2019-05-01 01:57:46');
/*!40000 ALTER TABLE `properties` ENABLE KEYS */;

-- Dumping structure for table hakkimsorn.edu.property_galleries
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

-- Dumping data for table hakkimsorn.edu.property_galleries: ~4 rows (approximately)
/*!40000 ALTER TABLE `property_galleries` DISABLE KEYS */;
INSERT INTO `property_galleries` (`id`, `property_id`, `gallery_image`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(6, 1, '1331486308.jpg', NULL, '2019-05-01 01:57:47', '2019-05-01 01:57:47'),
	(7, 1, '484421311.jpg', NULL, '2019-05-01 01:57:47', '2019-05-01 01:57:47'),
	(8, 1, '2130992099.jpg', NULL, '2019-05-01 01:57:47', '2019-05-01 01:57:47'),
	(9, 1, '1124767072.jpg', NULL, '2019-05-01 01:57:47', '2019-05-01 01:57:47');
/*!40000 ALTER TABLE `property_galleries` ENABLE KEYS */;

-- Dumping structure for table hakkimsorn.edu.provinces
DROP TABLE IF EXISTS `provinces`;
CREATE TABLE IF NOT EXISTS `provinces` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_kh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hakkimsorn.edu.provinces: ~25 rows (approximately)
/*!40000 ALTER TABLE `provinces` DISABLE KEYS */;
INSERT INTO `provinces` (`id`, `name_en`, `name_kh`, `created_at`, `updated_at`) VALUES
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

-- Dumping structure for table hakkimsorn.edu.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `store_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_usernamme_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_phone_unique` (`phone`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hakkimsorn.edu.users: 1 rows
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `email`, `phone`, `account_type`, `email_verified_at`, `password`, `store_url`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Samnang', 'Im', 'user', 'user@gmail.com', '078343143', NULL, NULL, '$2y$10$ba4N3r5NWv4JH2X8BxicC.VukSkxn7lJgYy7ueHbXwoVU8DjITFdK', NULL, '6wKwgycsNpJxxFWcXqnZlV4VQo5uVIp6aMpJPBeLeSnmcmom3AWt1d4tWwiX', '2019-05-03 03:13:12', '2019-05-03 03:13:12');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
