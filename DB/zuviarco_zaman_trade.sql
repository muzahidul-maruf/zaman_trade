-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 10, 2024 at 11:55 PM
-- Server version: 10.6.16-MariaDB
-- PHP Version: 8.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zuviarco_zaman_trade`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `type_of_query` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `phone`, `email`, `address`, `type_of_query`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(3, 'John Derby', '123', 'admin@gmail.com', 'mohakhali', 'nothing', 'test', 'hello', '2023-11-10 07:18:47', '2023-11-10 07:18:47');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_02_165327_create_messages_table', 1),
(6, '2023_11_11_162022_create_products_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `is_featured` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0: not-featured, 1: Featured',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `category`, `description`, `is_featured`, `created_at`, `updated_at`) VALUES
(10, 'DICKEY- John Portable Grain Moisture Meter Tester', '/common/images/products/1704886573.jpg', NULL, '<p>Model: M20PDICKEY-john Portable Grain Moisture Meter Tester, Model: M20P</p><p>DICKEY-john Portable Grain Moisture Meter Tester, Model: M20P</p>', 0, '2024-01-04 00:22:48', '2024-01-10 05:36:13'),
(11, 'GMK - 303RS', '/common/images/products/1704349824.jpg', NULL, '<p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Useful for measuring Moisture Content of Grains</span></p><p><span id=\"docs-internal-guid-a57ee2b8-7fff-50eb-90dd-87fb755d6881\"></span></p><ol style=\"margin-top:0;margin-bottom:0;padding-inline-start:48px;\"><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Electrical Resistance Method</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Automatic Temperature Compensation</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Average Data available</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Battery Replacement Sign appears</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Large Digtal LCD display</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\'CE\' Mark obtained</span></p></li></ol><table width=\"640\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"font-family: 굴림, Verdana, Arial, Helvetica;\"><tbody><tr style=\"font-size: 9pt; color: rgb(102, 102, 102); line-height: 18px;\"><td valign=\"top\" height=\"57\" width=\"620\" style=\"font-size: 9pt; line-height: 18px;\"><p align=\"left\"><br></p></td></tr></tbody></table>', 0, '2024-01-04 00:30:24', '2024-01-04 00:30:24'),
(12, 'UV Aging Test Chamber', '/common/images/products/1704350028.jpg', NULL, '<p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(84, 84, 84); font-family: Arial; font-size: 14px;\">LIB UV test chamber is used in tests that incorporate UV light,temperature, condensing humidity, water sprays, and irradiance control. UV weathering resistance test chamber uses UVA-340, UVB-313 fluorescent UV lamps for a variety of test conditions. Accelerated weathering tests included color change, gloss loss, chalking, cracking, crazing, hazing, blistering, strength loss and oxidation and many others.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(84, 84, 84); font-family: Arial; font-size: 14px;\"><br></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(84, 84, 84); font-family: Arial; font-size: 14px;\">UV series weathering chambers are upgrade to programmable controller and Ethernet access that provides simple operation and control.</p>', 0, '2024-01-04 00:33:48', '2024-01-04 00:33:48'),
(13, 'GAC 2700-UGMA', '/common/images/products/1704350132.jpeg', NULL, '<p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Features and Benefits:</span></p><ul style=\"margin-top:0;margin-bottom:0;padding-inline-start:48px;\"><li dir=\"ltr\" style=\"list-style-type:disc;font-size:12pt;font-family:Roboto,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">NTEP certified, FGIS Certified, UGMA compliant</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:12pt;font-family:Roboto,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">An official moisture meter of the USDA-AMS</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:12pt;font-family:Roboto,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Easy-to-use, intuitive color touch screen eliminates operator training</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:12pt;font-family:Roboto,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Accurate temperature-sensing capabilities to measure frozen and hot grain</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:12pt;font-family:Roboto,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Rapid Analysis Mode reduces the need to touch the instrument during operation</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:12pt;font-family:Roboto,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Improved processing provides shorter analysis time allowing more samples to be ran, especially important during busy seasons</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:12pt;font-family:Roboto,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Multiple USB ports on the back of the unit for software upgrades, USB devices, printer and barcode readers</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:12pt;font-family:Roboto,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Additional USB ports located on the front of unit for easycalibration imports, as well a as well as keyboard and mouse plug-ins for inputting set-up data</span></p></li></ul><p><span id=\"docs-internal-guid-6c6734e8-7fff-2332-7cff-5bfb1d77d103\"><br></span></p>', 0, '2024-01-04 00:35:32', '2024-01-04 00:35:32'),
(14, 'INDOSAW Model 2004', '/common/images/products/1704350283.jpg', NULL, '<p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Product Details:</span><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><br></span><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Model: 2004</span><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><br></span><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Brand: INDOSAW</span><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><br></span><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Measuring Range : 3.5% to 40% Depends on Commodity</span><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><br></span><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Warranty: 1 Year</span><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><br></span><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Accuracy: +- .2%</span><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><br></span><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Weight Weight : 9.5 kg</span><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><br></span><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Calibration: Auto calibration and error correction facility.</span><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><br></span><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Scanning Area: Data logging with Data Storage of 200 readings.</span><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><br></span><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">We deals in Agro data logging Moisture Meter 2004.</span><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><br></span><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">SPECIFICATIONS:</span><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><br></span><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Four thumbwheel switch for commodity selection</span><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><br></span><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">No arithmetic required.</span><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><br></span><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">RS 232 port for printer / computer.</span><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><br></span><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Auto calibration and error correction facility.</span><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><br></span><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Weight 9.5 kg (approx.).</span></p><p><span id=\"docs-internal-guid-3952b3f4-7fff-6aa4-c062-add8618ccac0\"><br></span></p>', 0, '2024-01-04 00:38:03', '2024-01-04 00:38:03'),
(15, 'CSP-10SEED Seed Counter', '/common/images/products/1704350672.jpg', NULL, NULL, 0, '2024-01-04 00:44:32', '2024-01-04 00:44:32'),
(16, 'DRAMINSKI GMM mini', '/common/images/products/1704351072.jpg', NULL, '<p dir=\"ltr\" style=\"line-height:1.32;background-color:#ffffff;margin-top:8pt;margin-bottom:8pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">The set includes:</span></p><ul style=\"margin-top:0;margin-bottom:0;padding-inline-start:48px;\"><li dir=\"ltr\" style=\"list-style-type:disc;font-size:10.5pt;font-family:Roboto,sans-serif;color:#333333;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:10.5pt;font-family:Roboto,sans-serif;color:#333333;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">the DRAMINSKI GMM mini grain moisture meter</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:10.5pt;font-family:Roboto,sans-serif;color:#333333;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:10.5pt;font-family:Roboto,sans-serif;color:#333333;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">rubber protection of the mini-USB port</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:10.5pt;font-family:Roboto,sans-serif;color:#333333;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:10.5pt;font-family:Roboto,sans-serif;color:#333333;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">2 batteries type AA, 1.5V (LR6)</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:10.5pt;font-family:Roboto,sans-serif;color:#333333;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:10.5pt;font-family:Roboto,sans-serif;color:#333333;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">reusable transport case (made of plastic)</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:10.5pt;font-family:Roboto,sans-serif;color:#333333;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:10.5pt;font-family:Roboto,sans-serif;color:#333333;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">special dispenser with a slider</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:10.5pt;font-family:Roboto,sans-serif;color:#333333;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:10.5pt;font-family:Roboto,sans-serif;color:#333333;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">user manual</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:10.5pt;font-family:Roboto,sans-serif;color:#333333;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;background-color:#ffffff;margin-top:0pt;margin-bottom:8pt;\" role=\"presentation\"><span style=\"font-size:10.5pt;font-family:Roboto,sans-serif;color:#333333;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">USB cable to be connected to a computer</span></p></li></ul><p><span id=\"docs-internal-guid-3387ffa5-7fff-7e0e-fb63-1d4b52d171f8\"><br><br></span></p>', 0, '2024-01-04 00:51:12', '2024-01-04 00:51:12'),
(17, 'Garmin eTrex 22X Handheld GPS', '/common/images/products/1704351184.png', NULL, '<p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Key Features</span></p><p><span id=\"docs-internal-guid-f10b7fab-7fff-334d-16a0-c479d0de1e7e\"></span></p><ul style=\"margin-top:0;margin-bottom:0;padding-inline-start:48px;\"><li dir=\"ltr\" style=\"list-style-type:disc;font-size:16.5pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">2.2” sunlight-readable colour display of 240 x 320 pixel display for improved readability</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:16.5pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Preloaded with TopoActive Europe maps including routable roads and trails for cycling and hiking</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:16.5pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Support for GPS and GLONASS satellite systems this allows for tracking in more challenging environments than just GPS</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:16.5pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">8 GB of internal memory for map downloads plus a microSD™ card slot</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:16.5pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:11pt;font-family:Arial,sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Battery life is up to 25 hours in GPS mode with 2 x AA batteries</span></p></li></ul>', 0, '2024-01-04 00:53:04', '2024-01-04 00:53:04'),
(18, 'Zeal Temperature and Humidity Digital Hygrometer PH1000', '/common/images/products/1704351264.jpg', NULL, '<p style=\"margin-right: 0px; margin-bottom: 16px; margin-left: 0px; color: rgb(45, 45, 45); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; background-color: rgb(252, 252, 252);\">Digital Thermo-Hygrometer. Used to measure temperature and humidity. The genuine GH Zeal product. All the quality and assurance of a Zeal product. Brand: Zeal, Origin: England, Made in China</p><p style=\"margin-right: 0px; margin-bottom: 16px; margin-left: 0px; color: rgb(45, 45, 45); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; background-color: rgb(252, 252, 252);\">The Thermo-Hygrometer model PH1000 displays humidity over the range of 10 to 99%rh and temperature over -50 to 70°C or equivalent °F with a 0.1°C/°F resolution. It also incorporates a 12/24 hour clock. The instrument is housed in a white ABS case which has a foldaway stand and keyhole slot for wall hanging.</p><p style=\"margin-right: 0px; margin-bottom: 16px; margin-left: 0px; color: rgb(45, 45, 45); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; background-color: rgb(252, 252, 252);\">Reads temperature and records maximum/minimum temperatures the unit has been exposed to since the last time the unit has been reset.</p>', 0, '2024-01-04 00:54:24', '2024-01-04 00:54:24'),
(19, 'Seed Germination Paper', '/common/images/products/1704883718.jpg', NULL, '<h3 dir=\"ltr\" style=\"line-height:1.523076923076923;background-color:#ffffff;margin-top:23pt;margin-bottom:8pt;\"><span style=\"font-size:13.5pt;font-family:Arial,sans-serif;color:#333333;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Product Specification</span></h3><h3 class=\"fs18 mt30 mb10 color\" style=\"margin: 30px 0px 10px; padding: 0px; line-height: 22px; color: rgb(51, 51, 51); font-size: 18px; font-family: arial;\"><span id=\"docs-internal-guid-c61f48f6-7fff-d978-5954-42f7f8654287\"><div dir=\"ltr\" style=\"margin-left:0pt;\" align=\"left\"><table style=\"border: none;\"><colgroup><col width=\"250\"><col width=\"193\"></colgroup><tbody><tr style=\"height:19.5pt\"><td style=\"border-bottom-width: 0.75pt; border-bottom-color: rgb(234, 234, 234); vertical-align: top; padding: 3pt 4pt; overflow: hidden; overflow-wrap: break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size: 11pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">Application</span></p></td><td style=\"border-bottom-width: 0.75pt; border-bottom-color: rgb(234, 234, 234); vertical-align: top; padding: 3pt 4pt; overflow: hidden; overflow-wrap: break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size: 11pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">Seed Industry</span></p></td></tr><tr style=\"height:19.5pt\"><td style=\"border-bottom-width: 0.75pt; border-bottom-color: rgb(234, 234, 234); border-top-width: 0.75pt; border-top-color: rgb(234, 234, 234); vertical-align: top; padding: 3pt 4pt; overflow: hidden; overflow-wrap: break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size: 11pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">Usage/Application</span></p></td><td style=\"border-bottom-width: 0.75pt; border-bottom-color: rgb(234, 234, 234); border-top-width: 0.75pt; border-top-color: rgb(234, 234, 234); vertical-align: top; padding: 3pt 4pt; overflow: hidden; overflow-wrap: break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size: 11pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">Seed Germination Paper</span></p></td></tr><tr style=\"height:19.5pt\"><td style=\"border-bottom-width: 0.75pt; border-bottom-color: rgb(234, 234, 234); border-top-width: 0.75pt; border-top-color: rgb(234, 234, 234); vertical-align: top; padding: 3pt 4pt; overflow: hidden; overflow-wrap: break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size: 11pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">GSM</span></p></td><td style=\"border-bottom-width: 0.75pt; border-bottom-color: rgb(234, 234, 234); border-top-width: 0.75pt; border-top-color: rgb(234, 234, 234); vertical-align: top; padding: 3pt 4pt; overflow: hidden; overflow-wrap: break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size: 11pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">Seed Germination Paper</span></p></td></tr><tr style=\"height:19.5pt\"><td style=\"border-bottom-width: 0.75pt; border-bottom-color: rgb(234, 234, 234); border-top-width: 0.75pt; border-top-color: rgb(234, 234, 234); vertical-align: top; padding: 3pt 4pt; overflow: hidden; overflow-wrap: break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size: 11pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">Color</span></p></td><td style=\"border-bottom-width: 0.75pt; border-bottom-color: rgb(234, 234, 234); border-top-width: 0.75pt; border-top-color: rgb(234, 234, 234); vertical-align: top; padding: 3pt 4pt; overflow: hidden; overflow-wrap: break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size: 11pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">Tan to light brown</span></p></td></tr><tr style=\"height:19.5pt\"><td style=\"border-bottom-width: 0.75pt; border-bottom-color: rgb(234, 234, 234); border-top-width: 0.75pt; border-top-color: rgb(234, 234, 234); vertical-align: top; padding: 3pt 4pt; overflow: hidden; overflow-wrap: break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size: 11pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">Ash Content</span></p></td><td style=\"border-bottom-width: 0.75pt; border-bottom-color: rgb(234, 234, 234); border-top-width: 0.75pt; border-top-color: rgb(234, 234, 234); vertical-align: top; padding: 3pt 4pt; overflow: hidden; overflow-wrap: break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size: 11pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">Maximum 0.7%</span></p></td></tr><tr style=\"height:19.5pt\"><td style=\"border-bottom-width: 0.75pt; border-bottom-color: rgb(234, 234, 234); border-top-width: 0.75pt; border-top-color: rgb(234, 234, 234); vertical-align: top; padding: 3pt 4pt; overflow: hidden; overflow-wrap: break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size: 11pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">Bursting Strength</span></p></td><td style=\"border-bottom-width: 0.75pt; border-bottom-color: rgb(234, 234, 234); border-top-width: 0.75pt; border-top-color: rgb(234, 234, 234); vertical-align: top; padding: 3pt 4pt; overflow: hidden; overflow-wrap: break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size: 11pt; font-family: Arial, sans-serif; color: rgb(0, 0, 0); background-color: transparent; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; vertical-align: baseline; white-space-collapse: preserve;\">26 lb. psi</span></p></td></tr></tbody></table></div></span><br></h3>', 0, '2024-01-10 04:38:06', '2024-01-10 04:48:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `address` text DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `user_type` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0: Admin, 1: Other',
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0: In-active User, 1: Active User',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `address`, `profile_image`, `user_type`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Adminn', '01xxxxxxxxx0', 'info@zamantrade.com', NULL, '$2y$10$P4a7F0fnAZVJkZyseNwiGOEGuPyGnrdSRsa8Et3U69Nq7rfTaNIZa', 'India', '/common/images/user/profile_img/1659359859.jpg', 0, 1, NULL, '2023-09-03 09:48:39', '2023-10-16 16:19:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
