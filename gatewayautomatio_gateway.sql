-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 11, 2025 at 06:06 AM
-- Server version: 10.6.24-MariaDB
-- PHP Version: 8.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gatewayautomatio_gateway`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mission` longtext NOT NULL,
  `vision` longtext NOT NULL,
  `card_icon` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`card_icon`)),
  `card_heading` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`card_heading`)),
  `card_text` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`card_text`)),
  `story` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `mission`, `vision`, `card_icon`, `card_heading`, `card_text`, `story`, `created_at`, `updated_at`) VALUES
(1, 'Our mission is to empower businesses by fully digitizing every aspect of their operations, streamlining processes, and enhancing efficiency. Driven by the spirit of \"Made in Bangladesh,\" we are committed to delivering innovative and reliable technology solutions that help organizations achieve their goals, optimize performance, and embrace the future of digital transformation with confidence.', 'Our vision is to become the leading partner for businesses seeking seamless and innovative technology solutions. We aim to provide the perfect blend of efficiency, reliability, and cutting-edge digital tools, enabling organizations to thrive, grow sustainably, and achieve their full potential in an increasingly competitive and technology-driven world.', '[\"<i class=\\\"fas fa-cogs fa-2x text-white\\\"><\\/i>\",\"<i class=\\\"fas fa-tools fa-2x text-white\\\"><\\/i>\",\"<i class=\\\"fas fa-calendar-alt fa-2x text-white\\\"><\\/i>\",\"<i class=\\\"fas fa-headset fa-2x text-white\\\"><\\/i>\"]', '[\"Proven ERP Expertise\",\"Customized Solutions\",\"20+ Years Experience\",\"Dedicated Support\"]', '[\"Decades of excellence in delivering scalable ERP systems tailored to your industry.\",\"Solutions designed specifically for Bangladeshi businesses and their unique challenges.\",\"Backed by two decades of proven success in ICT and business process automation.\",\"A reliable team that ensures your systems run smoothly, always by your side.\"]', 'Gateway Automation Ltd is a distinguished private limited company at the forefront of the Information and Communication Technology (ICT) sector, specializing in providing comprehensive software and IT-enabled services (ITES). Our primary focus is on Enterprise Resource Planning (ERP) management systems, designed to streamline, automate, and enhance business processes across various industries. Our journey is driven by a clear inspiration — the desire to simplify technology — and a core strength rooted in integrity, transparency, and a commitment to excellence.\r\n\r\nWith over two decades of experience in ICT and business process management, Gateway Automation Ltd has continuously evolved to address the dynamic needs of modern enterprises. We leverage deep domain expertise and technological innovation to deliver solutions that are not only functional but also scalable, adaptable, and tailored to the unique requirements of each client. Our ERP systems are purpose-built to support diverse business operations, including Real Estate & Property Management, Trading, Supply Chain Management, Manufacturing, and more.\r\n\r\nUnderstanding that every business — whether large-scale or small-scale — has its unique challenges, we offer specialized solutions such as our top-tier Account & Finance Management System and Human Resource Management System. These platforms are seamlessly integrated, enabling organizations to enhance operational efficiency, reduce redundancies, and gain actionable insights. Central to our service philosophy is the customization of ERP applications, which allows businesses to automate critical processes while maintaining full control and visibility through a centralized database consolidating inputs from departments such as Human Resources, Finance, Inventory, Manufacturing, Sales, and Marketing.\r\n\r\nThe GATEWAY-ERP system embodies our commitment to delivering end-to-end solutions for all business needs. By combining automation, real-time insights, and intuitive design, we empower organizations to optimize performance, improve decision-making, and drive sustainable growth. Our key offerings include:\r\n\r\nAccount & Finance Management System\r\nHuman Resource Management System\r\nAdministration Management System\r\nArchitectural & Engineering Management System\r\nCustomer Service & Registration Management System\r\nLogistics Management System\r\nProperty Development & Procurement Management System\r\nSales & Tele sales Management System\r\nProcurement & Inventory Management System\r\nDesign Service Management System\r\nVehicle Management System\r\nSystem Administration\r\nEducation Management System\r\nTea Estate Management System\r\nMobile App & Website Design and Development\r\nICT Services\r\n\r\nBeyond providing robust ERP solutions, Gateway Automation Ltd adopts a holistic approach to business technology. We offer value-added services such as Mobile App & Website development, ICT consulting, and technical support to ensure that businesses can thrive in a digital-first environment. By integrating innovation, reliability, and industry best practices, we position ourselves as a trusted partner in guiding organizations through the complexities of automation and digital transformation.\r\n\r\nAt Gateway Automation Ltd, our story is one of dedication, expertise, and a relentless pursuit of technological excellence. We are committed to helping businesses achieve their goals, unlock their full potential, and navigate the ever-changing landscape of the ICT world with confidence and clarity.', '2025-11-03 03:57:37', '2025-11-03 03:57:37');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$12$W9hPRsA921BrQ17t.vVIUu5aMYyL61SruMHSKHOoa2ZCqO/8BBDhi', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brochures`
--

CREATE TABLE `brochures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brochure` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brochures`
--

INSERT INTO `brochures` (`id`, `brochure`, `created_at`, `updated_at`) VALUES
(1, 'uploads/backend/brochure/1762146668_aaa.pdf', '2025-11-02 23:11:08', '2025-11-02 23:11:08');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carousels`
--

CREATE TABLE `carousels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `carousel_image` longtext DEFAULT NULL,
  `carousel_heading` text DEFAULT NULL,
  `learn_more_link` longtext DEFAULT NULL,
  `status` tinyint(4) NOT NULL COMMENT '0=inactive, 1=active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carousels`
--

INSERT INTO `carousels` (`id`, `slug`, `carousel_image`, `carousel_heading`, `learn_more_link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'real-time-decision-support-system', 'uploads/backend/carousel-images/1762146956_69083a8c05bc4_real-time.jpg', 'Real Time Decision Support System', 'https://gatewayautomations.com/page/business-management-system', 1, '2025-11-02 23:15:56', '2025-11-02 23:15:56'),
(2, 'integrated-all-business-process', 'uploads/backend/carousel-images/1762146989_69083aade08a6_integrated-business.jpg', 'Integrated all Business Process', 'https://gatewayautomations.com/page/integrated-all-business-processes', 1, '2025-11-02 23:16:29', '2025-11-02 23:16:29'),
(3, 'digitizing-every-step-of-your-business-process-proudly-made-in-bangladesh', 'uploads/backend/carousel-images/1762147040_69083ae031596_right-dession.jpg', 'Digitizing every step of your business process — proudly Made in Bangladesh', 'https://gatewayautomations.com/page/right-decision-on-right-time', 1, '2025-11-02 23:17:20', '2025-11-02 23:17:20'),
(4, 'empowering-businesses-with-smarter-erp-solutions', 'uploads/backend/carousel-images/1762147085_69083b0d4e1ef_business-management.jpg', 'Empowering  Businesses with Smarter ERP Solutions', 'https://gatewayautomations.com/page/integrated-all-business-processes', 1, '2025-11-02 23:18:05', '2025-11-02 23:22:33');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_logo` text NOT NULL,
  `alt_txt` text NOT NULL,
  `company_name` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inactive, 1=active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `client_logo`, `alt_txt`, `company_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'uploads/backend/client-images/1762149322_690843cacc978_modhucity.png', 'Modhu City', 'Modhu City', 1, '2025-11-02 23:55:22', '2025-11-02 23:55:22'),
(2, 'uploads/backend/client-images/1762149341_690843dd8b1a0_infinity.png', 'Infinity Homes Ltd.', 'Infinity Homes Ltd.', 1, '2025-11-02 23:55:41', '2025-11-02 23:55:41'),
(3, 'uploads/backend/client-images/1762149362_690843f275e99_jcx.png', 'JCX Developments Ltd', 'JCX Developments Ltd', 1, '2025-11-02 23:56:02', '2025-11-02 23:56:02'),
(4, 'uploads/backend/client-images/1762149392_690844100ffe7_ramkrisna.png', 'Ramakrishna Ashrama & Mission Baliati, Manikgonj', 'Ramakrishna Ashrama & Mission Baliati, Manikgonj', 1, '2025-11-02 23:56:32', '2025-11-02 23:56:32'),
(5, 'uploads/backend/client-images/1762149408_6908442072594_doreen.png', 'Doreen Developments Limited', 'Doreen Developments Limited', 1, '2025-11-02 23:56:48', '2025-11-02 23:56:48'),
(6, 'uploads/backend/client-images/1762149455_6908444f3719b_rkmr.png', 'Ramakrishna Sevashrama Uttara Rowali', 'Ramakrishna Sevashrama Uttara Rowali', 1, '2025-11-02 23:57:35', '2025-11-02 23:57:35'),
(7, 'uploads/backend/client-images/1762149478_69084466b8e4d_wasa.png', 'W.Rahman & Co.', 'W.Rahman & Co.', 1, '2025-11-02 23:57:58', '2025-11-02 23:57:58'),
(8, 'uploads/backend/client-images/1762149504_690844805464a_kk.png', 'KK Trade', 'KK Trade', 1, '2025-11-02 23:58:24', '2025-11-02 23:58:24'),
(9, 'uploads/backend/client-images/1762149521_690844912a7f2_mya.png', 'MYA Trading International', 'MYA Trading International', 1, '2025-11-02 23:58:41', '2025-11-02 23:58:41'),
(10, 'uploads/backend/client-images/1762149564_690844bc0d6d1_saifan.png', 'Saifan Properties Limited', 'Saifan Properties Limited', 1, '2025-11-02 23:59:24', '2025-11-02 23:59:24'),
(11, 'uploads/backend/client-images/1762149578_690844ca0f790_ramkrisna.png', 'Ramakrishna Math & Mission Dinajpur', 'Ramakrishna Math & Mission Dinajpur', 1, '2025-11-02 23:59:38', '2025-11-02 23:59:38'),
(12, 'uploads/backend/client-images/1762149604_690844e476e15_creation.png', 'Creation Developments Ltd', 'Creation Developments Ltd', 1, '2025-11-03 00:00:04', '2025-11-03 00:00:04'),
(13, 'uploads/backend/client-images/1762149625_690844f901e99_gorai-flims.png', 'Gorai Films', 'Gorai Films', 1, '2025-11-03 00:00:25', '2025-11-03 00:00:25'),
(14, 'uploads/backend/client-images/1762149650_6908451200081_merine.png', 'Atlantic Properties & Development Ltd', 'Atlantic Properties & Development Ltd', 1, '2025-11-03 00:00:50', '2025-11-03 00:00:50'),
(15, 'uploads/backend/client-images/1762149664_690845203562e_assu.png', 'Assurance Developments Ltd', 'Assurance Developments Ltd', 1, '2025-11-03 00:01:04', '2025-11-03 00:01:04'),
(16, 'uploads/backend/client-images/1762149689_69084539e99a9_Momenuddin3.png', 'Momen Uddin Ahmed & Co. Ltd.', 'Momen Uddin Ahmed & Co. Ltd.', 1, '2025-11-03 00:01:29', '2025-11-03 00:01:29'),
(17, 'uploads/backend/client-images/1762149711_6908454ff1f7d_mazidsons.png', 'Mazid Sons Construction Ltd', 'Mazid Sons Construction Ltd', 1, '2025-11-03 00:01:51', '2025-11-03 00:01:51'),
(18, 'uploads/backend/client-images/1762149736_69084568f3b23_images.png', 'Parts Zone', 'Parts Zone', 1, '2025-11-03 00:02:16', '2025-11-03 00:02:16'),
(19, 'uploads/backend/client-images/1762149770_6908458a2e6fb_ril.png', 'KB Interlining Ltd.', 'KB Interlining Ltd.', 1, '2025-11-03 00:02:50', '2025-11-03 00:02:50'),
(20, 'uploads/backend/client-images/1762149794_690845a208a68_images.png', 'Chittagong Agro Machinery', 'Chittagong Agro Machinery', 1, '2025-11-03 00:03:14', '2025-11-03 00:03:14'),
(21, 'uploads/backend/client-images/1762149819_690845bb3c619_RI.png', 'Royal International', 'Royal International', 1, '2025-11-03 00:03:39', '2025-11-03 00:03:39'),
(22, 'uploads/backend/client-images/1762149838_690845ced8a09_royal-gold.png', 'Royal Gold Pvt Ltd', 'Royal Gold Pvt Ltd', 1, '2025-11-03 00:03:58', '2025-11-03 00:03:58'),
(23, 'uploads/backend/client-images/1762149858_690845e28cfbc_ramkrisna.png', 'Ramakrishna Math & Mission Dhaka', 'Ramakrishna Math & Mission Dhaka', 1, '2025-11-03 00:04:18', '2025-11-03 00:04:18');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `day_to_day` varchar(255) NOT NULL,
  `time_to_time` varchar(255) NOT NULL,
  `tnt` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `address`, `email`, `day_to_day`, `time_to_time`, `tnt`, `mobile`, `created_at`, `updated_at`) VALUES
(1, 'Flat# E8, House# 3/43/A\r\nNirban Shantikunja, Sharakunja, Sultanganj\r\nRayer Bazar, Dhaka-1209, Bangladesh', 'info@gatewayautomations.com', 'Saturday – Thursday', '10:00 AM – 6:00 PM (UTC)', '880241022561', '8801324258751', '2025-11-02 23:07:42', '2025-11-02 23:07:42');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` text NOT NULL,
  `sub_heading` text NOT NULL,
  `content` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `heading`, `sub_heading`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Empowering Businesses with Smarter ERP Solutions', 'Digitizing every step of your business process — Proudly Made in Bangladesh', 'Welcome to Gateway Automation Limited, where innovation meets efficiency. We deliver cutting-edge ERP solutions that simplify complexity, unify data, and provide real-time insights to help your business operate smarter and grow sustainably. Our customizable ERP adapts to your unique workflows—whether in finance, manufacturing, supply chain, or services—empowering your teams with collaboration, analytics, and data-driven decisions. From planning to integration, training, and ongoing support, we partner with you at every step to ensure a seamless transition and maximum value from your ERP investment.', '2025-11-02 23:24:12', '2025-11-02 23:26:31');

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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gallery_image` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inactive, 1=active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `gallery_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'uploads/backend/gallery-images/1762576055_690ec6b7e9b84_1.jpg', 1, '2025-11-07 22:27:35', '2025-11-07 22:27:35'),
(2, 'uploads/backend/gallery-images/1762576061_690ec6bdb2bb9_2.jpg', 1, '2025-11-07 22:27:41', '2025-11-07 22:27:41'),
(3, 'uploads/backend/gallery-images/1762576070_690ec6c6822dc_3.jpg', 1, '2025-11-07 22:27:50', '2025-11-07 22:27:50'),
(4, 'uploads/backend/gallery-images/1762576090_690ec6da1305e_5.jpg', 1, '2025-11-07 22:28:10', '2025-11-07 22:28:10'),
(5, 'uploads/backend/gallery-images/1762576109_690ec6edcdfed_7.jpg', 1, '2025-11-07 22:28:29', '2025-11-07 22:28:29'),
(6, 'uploads/backend/gallery-images/1762576117_690ec6f559a2d_8.jpg', 1, '2025-11-07 22:28:37', '2025-11-07 22:28:37'),
(7, 'uploads/backend/gallery-images/1762576123_690ec6fb693ed_9.jpg', 1, '2025-11-07 22:28:43', '2025-11-07 22:28:43'),
(8, 'uploads/backend/gallery-images/1762576130_690ec7024ae62_10.jpg', 1, '2025-11-07 22:28:50', '2025-11-07 22:28:50'),
(9, 'uploads/backend/gallery-images/1762576137_690ec709420b7_11.jpg', 1, '2025-11-07 22:28:57', '2025-11-07 22:28:57'),
(10, 'uploads/backend/gallery-images/1762576144_690ec71042b82_13.jpg', 1, '2025-11-07 22:29:04', '2025-11-07 22:29:04'),
(11, 'uploads/backend/gallery-images/1762576153_690ec719bfb7e_14.jpg', 1, '2025-11-07 22:29:13', '2025-11-07 22:29:13'),
(12, 'uploads/backend/gallery-images/1762576160_690ec720db9a4_15.jpg', 1, '2025-11-07 22:29:20', '2025-11-07 22:29:20'),
(13, 'uploads/backend/gallery-images/1762576168_690ec72897163_16.jpg', 1, '2025-11-07 22:29:28', '2025-11-07 22:29:28'),
(14, 'uploads/backend/gallery-images/1762576178_690ec732901b9_17.jpg', 1, '2025-11-07 22:29:38', '2025-11-07 22:29:38'),
(15, 'uploads/backend/gallery-images/1762576186_690ec73ac96ac_19.jpg', 1, '2025-11-07 22:29:46', '2025-11-07 22:29:46'),
(16, 'uploads/backend/gallery-images/1762576203_690ec74b4ce24_20.jpg', 1, '2025-11-07 22:30:03', '2025-11-07 22:30:03'),
(17, 'uploads/backend/gallery-images/1762576213_690ec7556b95a_21.jpg', 1, '2025-11-07 22:30:13', '2025-11-07 22:30:13'),
(18, 'uploads/backend/gallery-images/1762576227_690ec7637e7f2_25.jpg', 1, '2025-11-07 22:30:27', '2025-11-07 22:30:27'),
(19, 'uploads/backend/gallery-images/1762576237_690ec76dd3104_29.jpg', 1, '2025-11-07 22:30:37', '2025-11-07 22:30:37'),
(20, 'uploads/backend/gallery-images/1762576250_690ec77a3f429_32.jpg', 1, '2025-11-07 22:30:50', '2025-11-07 22:30:50');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_09_08_102700_create_admins_table', 1),
(5, '2025_09_09_044950_create_contacts_table', 1),
(6, '2025_10_15_043823_create_carousels_table', 1),
(7, '2025_10_16_105750_create_contents_table', 1),
(8, '2025_10_18_050316_create_served_industries_table', 1),
(9, '2025_10_19_043027_create_success_stories_table', 1),
(10, '2025_10_20_042849_create_technologies_table', 1),
(11, '2025_10_20_075609_create_testimonials_table', 1),
(12, '2025_10_21_044731_create_clients_table', 1),
(13, '2025_10_21_081911_create_about_us_table', 1),
(14, '2025_10_22_060133_create_galleries_table', 1),
(15, '2025_10_22_112427_create_brochures_table', 1),
(16, '2025_10_23_052540_create_contact_us_table', 1),
(17, '2025_10_23_070928_create_social_links_table', 1),
(18, '2025_10_25_095841_create_services_table', 1),
(55, '0001_01_01_000000_create_users_table', 1),
(56, '0001_01_01_000001_create_cache_table', 1),
(57, '0001_01_01_000002_create_jobs_table', 1),
(58, '2025_09_08_102700_create_admins_table', 1),
(59, '2025_09_09_044950_create_contacts_table', 1),
(60, '2025_10_15_043823_create_carousels_table', 1),
(61, '2025_10_16_105750_create_contents_table', 1),
(62, '2025_10_18_050316_create_served_industries_table', 1),
(63, '2025_10_19_043027_create_success_stories_table', 1),
(64, '2025_10_20_042849_create_technologies_table', 1),
(65, '2025_10_20_075609_create_testimonials_table', 1),
(66, '2025_10_21_044731_create_clients_table', 1),
(67, '2025_10_21_081911_create_about_us_table', 1),
(68, '2025_10_22_060133_create_galleries_table', 1),
(69, '2025_10_22_112427_create_brochures_table', 1),
(70, '2025_10_23_052540_create_contact_us_table', 1),
(71, '2025_10_23_070928_create_social_links_table', 1),
(72, '2025_10_25_095841_create_services_table', 1),
(73, '0001_01_01_000000_create_users_table', 1),
(74, '0001_01_01_000001_create_cache_table', 1),
(75, '0001_01_01_000002_create_jobs_table', 1),
(76, '2025_09_08_102700_create_admins_table', 1),
(77, '2025_09_09_044950_create_contacts_table', 1),
(78, '2025_10_15_043823_create_carousels_table', 1),
(79, '2025_10_16_105750_create_contents_table', 1),
(80, '2025_10_18_050316_create_served_industries_table', 1),
(81, '2025_10_19_043027_create_success_stories_table', 1),
(82, '2025_10_20_042849_create_technologies_table', 1),
(83, '2025_10_20_075609_create_testimonials_table', 1),
(84, '2025_10_21_044731_create_clients_table', 1),
(85, '2025_10_21_081911_create_about_us_table', 1),
(86, '2025_10_22_060133_create_galleries_table', 1),
(87, '2025_10_22_112427_create_brochures_table', 1),
(88, '2025_10_23_052540_create_contact_us_table', 1),
(89, '2025_10_23_070928_create_social_links_table', 1),
(90, '2025_10_25_095841_create_services_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `served_industries`
--

CREATE TABLE `served_industries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon_code` text NOT NULL,
  `industry` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inactive, 1=active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `served_industries`
--

INSERT INTO `served_industries` (`id`, `icon_code`, `industry`, `status`, `created_at`, `updated_at`) VALUES
(1, '<i class=\"bi bi-globe2 icon\"></i>', 'Others', 1, '2025-11-02 23:28:04', '2025-11-02 23:28:50'),
(2, '<i class=\"bi bi-mortarboard icon\"></i>', 'Education', 1, '2025-11-02 23:29:15', '2025-11-02 23:29:15'),
(3, '<i class=\"bi bi-heart-pulse icon\"></i>', 'Healthcare', 1, '2025-11-02 23:30:49', '2025-11-02 23:30:49'),
(4, '<i class=\"bi bi-basket3 icon\"></i>', 'Trading', 1, '2025-11-02 23:31:03', '2025-11-02 23:31:03'),
(5, '<i class=\"bi bi-gear-wide-connected icon\"></i>', 'Manufacturing', 1, '2025-11-02 23:31:19', '2025-11-02 23:31:19'),
(6, '<i class=\"bi bi-building icon\"></i>', 'Construction', 1, '2025-11-02 23:31:36', '2025-11-02 23:31:36'),
(7, '<i class=\"bi bi-map icon\"></i>', 'Land Development', 1, '2025-11-02 23:31:53', '2025-11-02 23:31:53'),
(8, '<i class=\"bi bi-houses icon\"></i>', 'Real Estate', 1, '2025-11-02 23:32:12', '2025-11-02 23:32:12');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `service_name` text NOT NULL,
  `service_logo` text NOT NULL,
  `sections` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`sections`)),
  `conclusion` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inactive, 1=active',
  `slug` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `order`, `service_name`, `service_logo`, `sections`, `conclusion`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(3, 9, 'Account & Finance Management System', '<i class=\"bi bi-cash-coin display-5 mb-3 float-icon\"></i>', '[{\"heading\":null,\"content\":\"Our <strong>Account & Finance Management System<\\/strong>, powered by <strong>GATEWAY-ERP<\\/strong>, is a complete solution designed to streamline and optimize your business finances. From day-to-day transactions to detailed financial reporting, it provides organizations with a robust, secure, and flexible platform to manage all accounting operations efficiently.\\r\\n\\r\\nThe system helps businesses organize accounts with a <strong>flexible Chart of Accounts<\\/strong>, manage cash flow and bank accounts, automate voucher entries, and track client cheques accurately. It also includes <strong>ledger management, asset tracking, and paperless accounting<\\/strong> to save time and reduce errors.\\r\\n\\r\\nBuilt for <strong>multi-company operations<\\/strong> and <strong>flexible financial years<\\/strong>, it adapts to organizations of any size. High-level security protocols protect every transaction, while a <strong>multi-level approval workflow<\\/strong> ensures compliance with organizational policies.\\r\\n\\r\\nWith <strong>complete financial reporting capabilities<\\/strong>\\u2014including Statements of Financial Position, Comprehensive Income, Cash Flows, and Notes\\u2014managers can make informed decisions, optimize resources, and plan for sustainable growth. The GATEWAY Account & Finance Management System is more than just an accounting tool; it is a <strong>comprehensive financial ecosystem<\\/strong> that helps businesses operate efficiently, maintain transparency, and gain full control over financial operations.\",\"features\":[\"Flexible Classification of Chart of Accounts to suit any business structure\",\"Complete Bank, Branch, and Account Management for easy tracking\",\"Secure and efficient Cash & Bank Transfers across multiple accounts\",\"Money Receipt Entry with options for quick cancellations\",\"Client Cheque Deposit Tracking for accurate financial reconciliation\",\"Automatic Voucher Entry for various departments to save time\",\"Cheque Book Management and Printing directly from the system\",\"Detailed Receivables & Payables management with aging analysis\",\"Ledger Management for comprehensive account overview\",\"Trail Balance Generation for accurate financial checks\",\"Complete Financial Statements including Statement of Financial Position, Comprehensive Income, Cash Flows, and Notes\",\"Asset Register for efficient tracking of company assets\",\"Support for Multiple Companies under a single system\",\"Flexible Financial Year Setup tailored to organizational requirements\",\"Paperless Accounting to reduce manual errors and save time\",\"High Security Protocols for each transaction to prevent unauthorized access\",\"Multi-Level Approval System to enforce organizational compliance and controls\",\"Multi-Level Approval System to enforce organizational compliance and controls\"],\"image\":\"uploads\\/backend\\/services\\/1762686745_0.png\"}]', 'Adopting our <strong>Account & Finance Management System</strong> ensures your organization stays financially agile, compliant, and well-informed. By integrating advanced automation, security, and reporting features, it empowers your team to focus on strategic growth while leaving financial management in a reliable, streamlined system.', 1, 'account-finance-management-system', '2025-11-03 00:51:42', '2025-11-10 07:59:28'),
(4, 8, 'Human Resource Administration & Payroll Management', '<i class=\"bi bi-people-fill display-5 mb-3 float-icon\"></i>', '[{\"heading\":\"Human Resource Administration & Payroll Management\",\"content\":\"Our <strong>Human Resource Administration & Payroll Management System<\\/strong> is a complete solution for managing your workforce efficiently. Designed for organizations of all sizes, it centralizes employee information, attendance, payroll, and other HR operations in a secure and streamlined platform.\\r\\n\\r\\nFrom official records to personal employee data, skill tracking, and professional references, the system allows HR teams to maintain comprehensive employee profiles. Daily attendance, leave management, salary generation, and bonus calculation are automated to reduce errors and improve accuracy.\\r\\n\\r\\nThe system also supports advanced features such as mobile phone management, vehicle allocation, fuel allowance tracking, company gate passes, and security staff scheduling. It ensures seamless communication, workflow efficiency, and adherence to company policies.\",\"features\":[\"Comprehensive Employee Information (Official, Benefits, Personal, Previous Employment, Academic, Skills, Professional Memberships, References, Separation, Transfers, Disciplinary Actions)\",\"Employee Daily Attendance Analysis\",\"Employee Monthly Salary Generation\",\"Bonus and Advance Salary Calculation\",\"Mobile Calling Information Management\",\"Company Gate Pass Issuance\",\"Vehicle Management System\",\"Mobile Phone Management (Set, SIM, Monthly Bills, etc.)\",\"Employee Fuel Allowance Entry\",\"Security Employee Information Management\",\"Security Employees Job Scheduling\",\"Security Bill Entry and Tracking\"],\"image\":\"uploads\\/backend\\/services\\/1762759641_0.jpg\"}]', 'Our <strong>Human Resource Administration & Payroll Management System</strong> empowers organizations to manage their workforce efficiently, ensure timely salary and bonus processing, and maintain accurate employee records. By integrating advanced HR features, attendance tracking, and payroll automation, it enables HR teams to focus on employee development, compliance, and strategic growth, while minimizing administrative overhead.', 1, 'human-resource-administration-payroll-management', '2025-11-03 01:20:47', '2025-11-10 07:59:32'),
(5, 3, 'Real Estate & Property Management', '<i class=\"bi bi-building display-5 mb-3 float-icon\"></i>', '[{\"heading\":\"Human Resource Administration & Payroll Management\",\"content\":\"Our Human Resource Administration & Payroll Management system provides a complete solution for managing employee data, attendance, payroll, and HR operations efficiently. From official records to performance tracking, it streamlines all HR processes and ensures compliance with company policies.\",\"features\":[\"Employee Daily Attendance Analysis\",\"Employee Monthly Salary Generation\",\"Bonus Calculation\",\"Advance Salary and Bonus Generation\",\"Mobile Calling Information\",\"Company Gate Pass\",\"Vehicle Management System\",\"Mobile Phone Management System (Set, SIM, Monthly Bills, etc.)\",\"Employee Fuel Allowance Entry\",\"Employee Fuel Allowance Entry\",\"Security Employees Job Schedule\",\"Security Bill Entry\"],\"image\":null},{\"heading\":\"Account & Finance Management System\",\"content\":\"Our <strong>Account & Finance Management System<\\/strong> provides a complete financial management solution for your organization. From daily cash handling and bank transactions to detailed financial reporting, this system ensures accuracy, efficiency, and full control over your accounting operations.\\r\\n\\r\\nDesigned for businesses of any size, it offers flexible account classifications, multi-company support, and paperless accounting. Secure protocols and multi-level approval workflows ensure compliance while giving your team the ability to manage finances confidently.\",\"features\":[\"Flexible Classification of Chart of Accounts to suit any business structure\",\"Bank, Branch & Account Information Management\",\"Cash and Bank Transfers across accounts securely\",\"Money Receipt Entry and quick Cancellation options\",\"Client Cheque Deposit Tracking\",\"Automatic Voucher Entry for different departments\",\"Cheque Book Management & Printing\",\"Receivables & Payables with Aging Analysis\",\"Ledger Management for comprehensive account overview\",\"Trail Balance Generation\",\"Complete Financial Statements (Position, Comprehensive Income, Cash Flows, Notes)\",\"Asset Register for efficient tracking of company assets\",\"Support for Multiple Companies\",\"Support for Multiple Companies\",\"Paperless Accounting to reduce errors and save time\",\"High Security for every transaction\",\"Multi-Level Approval System as per organizational requirements\",\"Customizable features for your business needs\"],\"image\":null},{\"heading\":\"Sales & Tele Sales Management\",\"content\":\"Our <strong>Sales & Tele Sales Management<\\/strong> module is designed to streamline your sales operations, enhance team productivity, and ensure accurate tracking of prospects, projects, and payments. From forming your sales team to monitoring client interactions, this system provides complete control over your sales process.\\r\\n\\r\\nWith tools for tracking sales calls, following up on leads, managing payment schedules, and analyzing performance via dashboards, your sales team can work efficiently while management gets a clear overview of operations. The system also handles document uploads, fund declarations, and target management to keep all activities organized and compliant.\",\"features\":[\"Sales Team Formation\",\"Prospect Information & Search\",\"Sales Call Due List Follow-up & Review\",\"View Sold Status of a Project\",\"Payment Schedule & Reschedule\",\"List of Price Proposals to Customers\",\"Payment Schedule Approval\",\"Allotment Permanent and Document Upload\",\"Source of Fund Declaration by Client\",\"Sales Target Information\",\"Marketing Document Upload & Download\",\"Dashboard for Management Analysis of Sales\",\"Discussion Dashboard\"],\"image\":null},{\"heading\":\"Procurement & Inventory Management\",\"content\":\"Our <strong>Procurement & Inventory Management<\\/strong> module is designed to streamline the entire supply chain and inventory process. From requisitions to material receiving and stock tracking, the system ensures accurate, timely, and efficient handling of all procurement operations.\\r\\n\\r\\nWith comprehensive tools for managing purchase orders, supplier information, material receiving reports, and inventory ledgers, businesses can optimize procurement decisions, reduce errors, and maintain full visibility over stock movements. Advanced reporting features allow for rate comparisons, analysis, and monitoring of material transfers across departments or locations.\",\"features\":[\"MPR Received\",\"Purchase Order\",\"Supplier Challan Information\",\"Material Receiving Report\",\"MRR Top Sheet\",\"Material Transfer Requisition Form\",\"MTRF Top Sheet\",\"Store Ledger Management\",\"Store Requisition\",\"Material Transfer Note\",\"Rate Comparisons and Analysis\"],\"image\":null},{\"heading\":\"Properties Development System\",\"content\":\"Our <strong>Properties Development System<\\/strong> provides a complete solution for managing real estate projects efficiently.  From land acquisition to apartment planning, cost analysis, and project management, this system is designed to streamline every aspect of property development.\\r\\n\\r\\nThe system allows easy entry and follow-up of land information, calculation of FAR and project costs, management of agreements with legal documents, and detailed project planning. It also supports apartment area calculation, car parking allocation, and management analysis for informed decision-making.\",\"features\":[\"Land Information Entry and Follow-up\",\"FAR and Project Costing Calculation\",\"Agreement Information with LO\",\"Project Planning & Car Parking Selection\",\"Apartment Area Calculation and Analysis\",\"Management Analysis\"],\"image\":null},{\"heading\":\"Architectural and Engineering Design Management\",\"content\":\"Our <strong>Architectural and Engineering Design Management System<\\/strong> provides a robust solution for managing all aspects of project design and engineering workflows. From issuing various letters to tracking work orders and weekly project updates, the system ensures every stage of design management is organized, transparent, and efficient.\\r\\n\\r\\nThis system enables seamless tracking of design movements, follow-ups, and updates, along with the ability to view project distribution charts. It also supports apartment area calculations, tentative cost abstracts, and consultant bill entries with approval workflows, ensuring compliance and accuracy in project execution.\",\"features\":[\"Issue Different Types of Letters\",\"Work Order Generation and Approval System\",\"Weekly Project Working Status Update\",\"Design Movement, Follow-up & Update\",\"View Distribution Chart of Project\",\"Apartment Area Calculation and Approval\",\"Abstract of Tentative Cost\",\"Consultant Bill Entry and Approval\"],\"image\":null},{\"heading\":\"Estimation and Material Controlling System\",\"content\":\"The <strong>Estimation and Material Controlling System<\\/strong> is designed to streamline and optimize your project estimation and material management processes. It provides a reliable platform to manage BOQ entries, maintain a comprehensive material database, and perform detailed feasibility analyses, ensuring projects are executed efficiently and within budget.\\r\\n\\r\\nBy integrating estimation and material control in one system, organizations can reduce errors, improve cost accuracy, and enhance resource planning. The system ensures that all materials and project requirements are tracked in real-time, supporting informed decision-making for project managers and stakeholders.\",\"features\":[\"BOQ Entry and Follow-up\",\"Comprehensive Material Database\",\"Feasibility Analysis for projects and materials\"],\"image\":null},{\"heading\":\"Logistic Management\",\"content\":\"The <strong>Logistic Management System<\\/strong> is a comprehensive solution designed to streamline logistics operations, cost management, and document tracking. It allows organizations to define area-wise land costs, tax rates, VAT, and transfer costs accurately, ensuring transparent and efficient management of all logistics-related processes.\\r\\n\\r\\nWith features like allotment registration, marketing document upload\\/download, service request handling, and registration\\/mutation cost approvals, the system provides complete control over logistics workflows.  Real-time tracking and systematic approvals help improve decision-making and reduce operational delays.\",\"features\":[\"Area Wise Land Cost Definition\",\"Area Wise Source Tax Rate Definition\",\"Area Wise VAT Rate Definition\",\"Area Wise Transfer Cost Definition\",\"Allotment Registration\",\"Allotment Registration\",\"Service Request Handling\",\"Registration\\/Mutation Cost View\",\"Registration Cost Approval\"],\"image\":null},{\"heading\":\"Post Hand Over Service Management System\",\"content\":\"The <strong>Post Hand Over Service Management System<\\/strong> is designed to ensure smooth management and follow-up of projects after handover.  It provides a structured approach to handling post-handover tasks, from utility bill tracking to collections and invoice generation, ensuring seamless operations.\\r\\n\\r\\n With features like project personnel assignment, reminder letter issuance, money receipt management, and detailed management analysis, the system helps organizations maintain service quality, enhance client satisfaction, and ensure timely follow-ups for all post-handover activities.\",\"features\":[\"Project Personnel Assignment and Follow-up\",\"Issuance of Different Types of Reminder Letters\",\"Project-wise Utility Bill Entry\",\"Collection and Invoice Generation\",\"Issue Money Receipt\",\"Management Analysis\"],\"image\":null},{\"heading\":\"Customer Service and Registration Management System\",\"content\":\"The <strong>Customer Service and Registration Management System<\\/strong> is a comprehensive solution designed to streamline client interactions and project registration processes. It ensures accurate documentation, timely follow-ups, and seamless coordination between customer service and accounts teams.\\r\\n\\r\\nWith features including issuance of letters, invoices, client financing tracking, registration cost calculation, document management, and service request follow-ups, this system helps organizations maintain high-quality customer service and efficient project registration management.\",\"features\":[\"Issuance of Different Types of Letters\",\"Invoice and Reminder Letter Generation\",\"Client Loan\\/Financing Information Management\",\"Collection Instruction to Accounts\",\"View Deed Value of Project Registration\",\"Registration Cost Calculation with Breakup\",\"Document Upload and Download\",\"Clearance for Registration\",\"Registration Documents Handover\",\"Service Request and Follow-up of Registration\",\"Follow Data Bank Prospect Information\"],\"image\":null}]', NULL, 1, 'real-estate-property-management', '2025-11-03 01:26:09', '2025-11-10 07:57:04'),
(6, 5, 'Trading Business', '<i class=\"bi bi-shop display-5 mb-3 float-icon\"></i>', '[{\"heading\":\"Human Resource Administration & Payroll Management\",\"content\":\"Our Human Resource Administration & Payroll Management system provides a complete solution for managing employee data, attendance, payroll, and HR operations efficiently. From official records to performance tracking, it streamlines all HR processes and ensures compliance with company policies.\",\"features\":[\"Employee Daily Attendance Analysis\",\"Employee Monthly Salary Generation\",\"Bonus Calculation\",\"Advance Salary and Bonus Generation\",\"Mobile Calling Information\",\"Company Gate Pass\",\"Vehicle Management System\",\"Mobile Phone Management System (Set, SIM, Monthly Bills, etc.)\",\"Employee Fuel Allowance Entry\",\"Security Employee Information\",\"Security Employees Job Schedule\",\"Security Bill Entry\"],\"image\":null},{\"heading\":\"Account & Finance Management System\",\"content\":\"Our <strong>Account & Finance Management System<\\/strong> provides a complete financial management solution for your organization.  From daily cash handling and bank transactions to detailed financial reporting, this system ensures accuracy, efficiency, and full control over your accounting operations.\\r\\n\\r\\nDesigned for businesses of any size, it offers flexible account classifications, multi-company support, and paperless accounting. Secure protocols and multi-level approval workflows ensure compliance while giving your team the ability to manage finances confidently.\",\"features\":[\"Flexible Classification of Chart of Accounts to suit any business structure\",\"Bank, Branch & Account Information Management\",\"Cash and Bank Transfers across accounts securely\",\"Money Receipt Entry and quick Cancellation options\",\"Client Cheque Deposit Tracking\",\"Automatic Voucher Entry for different departments\",\"Cheque Book Management & Printing\",\"Receivables & Payables with Aging Analysis\",\"Ledger Management for comprehensive account overview\",\"Trail Balance Generation\",\"Complete Financial Statements (Position, Comprehensive Income, Cash Flows, Notes)\",\"Asset Register for efficient tracking of company assets\",\"Support for Multiple Companies\",\"Flexible Financial Year Setup\",\"Paperless Accounting to reduce errors and save time\",\"High Security for every transaction\",\"Multi-Level Approval System as per organizational requirements\",\"Customizable features for your business needs\"],\"image\":null},{\"heading\":\"Customer Service and Registration Management System\",\"content\":\"The <strong>Customer Service and Registration Management System<\\/strong> is a comprehensive solution designed to streamline client interactions and project registration processes. It ensures accurate documentation, timely follow-ups, and seamless coordination between customer service and accounts teams.\\r\\n\\r\\nWith features including issuance of letters, invoices, client financing tracking, registration cost calculation, document management, and service request follow-ups, this system helps organizations maintain high-quality customer service and efficient project registration management.\",\"features\":[\"Issuance of Different Types of Letters\",\"Invoice and Reminder Letter Generation\",\"Client Loan\\/Financing Information Management\",\"Collection Instruction to Accounts\",\"View Deed Value of Project Registration\",\"Registration Cost Calculation with Breakup\",\"Document Upload and Download\",\"Clearance for Registration\",\"Registration Documents Handover\",\"Service Request and Follow-up of Registration\",\"Follow Data Bank Prospect Information\"],\"image\":null},{\"heading\":\"Sales & Tele Sales Management\",\"content\":\"Our <strong>Sales & Tele Sales Management<\\/strong> module is designed to streamline your sales operations, enhance team productivity, and ensure accurate tracking of prospects, projects, and payments.  From forming your sales team to monitoring client interactions, this system provides complete control over your sales process.\\r\\n\\r\\nWith tools for tracking sales calls, following up on leads, managing payment schedules, and analyzing performance via dashboards, your sales team can work efficiently while management gets a clear overview of operations. The system also handles document uploads, fund declarations, and target management to keep all activities organized and compliant.\",\"features\":[\"Sales Team Formation\",\"Prospect Information & Search\",\"Sales Call Due List Follow-up & Review\",\"View Sold Status of a Project\",\"Payment Schedule & Reschedule\",\"List of Price Proposals to Customers\",\"Payment Schedule Approval\",\"Allotment Permanent and Document Upload\",\"Source of Fund Declaration by Client\",\"Sales Target Information\",\"Marketing Document Upload & Download\",\"Dashboard for Management Analysis of Sales\",\"Discussion Dashboard\"],\"image\":null},{\"heading\":\"Procurement & Inventory Management\",\"content\":\"Our Procurement & Inventory Management module is designed to streamline the entire supply chain and inventory process. From requisitions to material receiving and stock tracking, the system ensures accurate, timely, and efficient handling of all procurement operations.\\r\\n\\r\\nWith comprehensive tools for managing purchase orders, supplier information, material receiving reports, and inventory ledgers, businesses can optimize procurement decisions, reduce errors, and maintain full visibility over stock movements. Advanced reporting features allow for rate comparisons, analysis, and monitoring of material transfers across departments or locations.\",\"features\":[\"MPR Received\",\"Purchase Order\",\"Supplier Challan Information\",\"Material Receiving Report\",\"MRR Top Sheet\",\"Material Transfer Requisition Form\",\"MTRF Top Sheet\",\"Store Ledger Management\",\"Store Ledger Management\",\"Material Transfer Note\",\"Material Transfer Note\"],\"image\":null},{\"heading\":\"Logistic Management\",\"content\":\"The Logistic Management System is a comprehensive solution designed to streamline logistics operations, cost management, and document tracking. It allows organizations to define area-wise land costs, tax rates, VAT, and transfer costs accurately, ensuring transparent and efficient management of all logistics-related processes.\\r\\n\\r\\nWith features like allotment registration, marketing document upload\\/download, service request handling, and registration\\/mutation cost approvals, the system provides complete control over logistics workflows. Real-time tracking and systematic approvals help improve decision-making and reduce operational delays.\",\"features\":[\"Area Wise Land Cost Definition\",\"Area Wise Source Tax Rate Definition\",\"Area Wise VAT Rate Definition\",\"Area Wise Transfer Cost Definition\",\"Allotment Registration\",\"Marketing Document Upload and Download\",\"Service Request Handling\",\"Registration\\/Mutation Cost View\",\"Registration Cost Approval\"],\"image\":null}]', NULL, 1, 'trading-business', '2025-11-03 02:10:59', '2025-11-10 07:59:08'),
(7, 7, 'Supply Chain Management System', '<i class=\"bi bi-truck display-5 mb-3 float-icon\"></i>', '[{\"heading\":\"Human Resource Administration & Payroll Management\",\"content\":\"Our Human Resource Administration & Payroll Management system provides a complete solution for managing employee data, attendance, payroll, and HR operations efficiently. From official records to performance tracking, it streamlines all HR processes and ensures compliance with company policies.\",\"features\":[\"Employee Daily Attendance Analysis\",\"Employee Monthly Salary Generation\",\"Bonus Calculation\",\"Advance Salary and Bonus Generation\",\"Mobile Calling Information\",\"Company Gate Pass\",\"Vehicle Management System\",\"Mobile Phone Management System (Set, SIM, Monthly Bills, etc.)\",\"Employee Fuel Allowance Entry\",\"Security Employee Information\",\"Security Employees Job Schedule\",\"Security Bill Entry\"],\"image\":null},{\"heading\":\"Account & Finance Management System\",\"content\":\"Our Account & Finance Management System provides a complete financial management solution for your organization. From daily cash handling and bank transactions to detailed financial reporting, this system ensures accuracy, efficiency, and full control over your accounting operations.\\r\\n\\r\\nDesigned for businesses of any size, it offers flexible account classifications, multi-company support, and paperless accounting. Secure protocols and multi-level approval workflows ensure compliance while giving your team the ability to manage finances confidently.\",\"features\":[\"Flexible Classification of Chart of Accounts to suit any business structure\",\"Bank, Branch & Account Information Management\",\"Cash and Bank Transfers across accounts securely\",\"Money Receipt Entry and quick Cancellation options\",\"Client Cheque Deposit Tracking\",\"Automatic Voucher Entry for different departments\",\"Cheque Book Management & Printing\",\"Receivables & Payables with Aging Analysis\",\"Ledger Management for comprehensive account overview\",\"Trail Balance Generation\",\"Complete Financial Statements (Position, Comprehensive Income, Cash Flows, Notes)\",\"Asset Register for efficient tracking of company assets\",\"Support for Multiple Companies\",\"Flexible Financial Year Setup\",\"Paperless Accounting to reduce errors and save time\",\"High Security for every transaction\",\"High Security for every transaction\",\"Customizable features for your business needs\"],\"image\":null},{\"heading\":\"Customer Service and Registration Management System\",\"content\":\"The Customer Service and Registration Management System is a comprehensive solution designed to streamline client interactions and project registration processes. It ensures accurate documentation, timely follow-ups, and seamless coordination between customer service and accounts teams.\\r\\n\\r\\nWith features including issuance of letters, invoices, client financing tracking, registration cost calculation, document management, and service request follow-ups, this system helps organizations maintain high-quality customer service and efficient project registration management.\",\"features\":[\"Issuance of Different Types of Letters\",\"Invoice and Reminder Letter Generation\",\"Client Loan\\/Financing Information Management\",\"Collection Instruction to Accounts\",\"View Deed Value of Project Registration\",\"Registration Cost Calculation with Breakup\",\"Document Upload and Download\",\"Clearance for Registration\",\"Registration Documents Handover\",\"Service Request and Follow-up of Registration\",\"Follow Data Bank Prospect Information\"],\"image\":null},{\"heading\":\"Sales & Tele Sales Management\",\"content\":\"Our Sales & Tele Sales Management module is designed to streamline your sales operations, enhance team productivity, and ensure accurate tracking of prospects, projects, and payments. From forming your sales team to monitoring client interactions, this system provides complete control over your sales process.\\r\\n\\r\\nWith tools for tracking sales calls, following up on leads, managing payment schedules, and analyzing performance via dashboards, your sales team can work efficiently while management gets a clear overview of operations. The system also handles document uploads, fund declarations, and target management to keep all activities organized and compliant.\",\"features\":[\"Sales Team Formation\",\"Prospect Information & Search\",\"Sales Call Due List Follow-up & Review\",\"View Sold Status of a Project\",\"Payment Schedule & Reschedule\",\"List of Price Proposals to Customers\",\"Payment Schedule Approval\",\"Allotment Permanent and Document Upload\",\"Source of Fund Declaration by Client\",\"Sales Target Information\",\"Marketing Document Upload & Download\",\"Dashboard for Management Analysis of Sales\",\"Discussion Dashboard\"],\"image\":null},{\"heading\":\"Procurement & Inventory Management\",\"content\":\"Our Procurement & Inventory Management module is designed to streamline the entire supply chain and inventory process. From requisitions to material receiving and stock tracking, the system ensures accurate, timely, and efficient handling of all procurement operations.\\r\\n\\r\\nWith comprehensive tools for managing purchase orders, supplier information, material receiving reports, and inventory ledgers, businesses can optimize procurement decisions, reduce errors, and maintain full visibility over stock movements. Advanced reporting features allow for rate comparisons, analysis, and monitoring of material transfers across departments or locations.\",\"features\":[\"MPR Received\",\"MPR Received\",\"Supplier Challan Information\",\"Material Receiving Report\",\"MRR Top Sheet\",\"Material Transfer Requisition Form\",\"MTRF Top Sheet\",\"Store Ledger Management\",\"Store Requisition\",\"Material Transfer Note\",\"Rate Comparisons and Analysis\"],\"image\":null},{\"heading\":\"Logistic Management\",\"content\":\"The Logistic Management System is a comprehensive solution designed to streamline logistics operations, cost management, and document tracking. It allows organizations to define area-wise land costs, tax rates, VAT, and transfer costs accurately, ensuring transparent and efficient management of all logistics-related processes.\\r\\n\\r\\nWith features like allotment registration, marketing document upload\\/download, service request handling, and registration\\/mutation cost approvals, the system provides complete control over logistics workflows. Real-time tracking and systematic approvals help improve decision-making and reduce operational delays.\",\"features\":[\"Area Wise Land Cost Definition\",\"Area Wise Source Tax Rate Definition\",\"Area Wise VAT Rate Definition\",\"Area Wise Transfer Cost Definition\",\"Allotment Registration\",\"Marketing Document Upload and Download\",\"Service Request Handling\",\"Registration\\/Mutation Cost View\",\"Registration Cost Approval\"],\"image\":null}]', NULL, 1, 'supply-chain-management-system', '2025-11-03 02:20:01', '2025-11-10 07:59:32'),
(8, 6, 'Manufacturing', '<i class=\"bi bi-gear-fill display-5 mb-3 float-icon\"></i>', '[{\"heading\":\"Human Resource Administration & Payroll Management\",\"content\":\"Our Human Resource Administration & Payroll Management system provides a complete solution for managing employee data, attendance, payroll, and HR operations efficiently. From official records to performance tracking, it streamlines all HR processes and ensures compliance with company policies.\",\"features\":[\"Employee Daily Attendance Analysis\",\"Employee Monthly Salary Generation\",\"Bonus Calculation\",\"Advance Salary and Bonus Generation\",\"Mobile Calling Information\",\"Company Gate Pass\",\"Vehicle Management System\",\"Vehicle Management System\",\"Employee Fuel Allowance Entry\",\"Security Employee Information\",\"Security Employee Information\",\"Security Employee Information\"],\"image\":null},{\"heading\":\"Account & Finance Management System\",\"content\":\"Our Account & Finance Management System provides a complete financial management solution for your organization. From daily cash handling and bank transactions to detailed financial reporting, this system ensures accuracy, efficiency, and full control over your accounting operations.\\r\\n\\r\\nDesigned for businesses of any size, it offers flexible account classifications, multi-company support, and paperless accounting. Secure protocols and multi-level approval workflows ensure compliance while giving your team the ability to manage finances confidently.\",\"features\":[\"Flexible Classification of Chart of Accounts to suit any business structure\",\"Bank, Branch & Account Information Management\",\"Cash and Bank Transfers across accounts securely\",\"Money Receipt Entry and quick Cancellation options\",\"Client Cheque Deposit Tracking\",\"Automatic Voucher Entry for different departments\",\"Cheque Book Management & Printing\",\"Receivables & Payables with Aging Analysis\",\"Ledger Management for comprehensive account overview\",\"Trail Balance Generation\",\"Complete Financial Statements (Position, Comprehensive Income, Cash Flows, Notes)\",\"Asset Register for efficient tracking of company assets\",\"Support for Multiple Companies\",\"Flexible Financial Year Setup\",\"Paperless Accounting to reduce errors and save time\",\"High Security for every transaction\",\"Multi-Level Approval System as per organizational requirements\",\"Customizable features for your business needs\"],\"image\":null},{\"heading\":\"Customer Service and Registration Management System\",\"content\":\"The Customer Service and Registration Management System is a comprehensive solution designed to streamline client interactions and project registration processes. It ensures accurate documentation, timely follow-ups, and seamless coordination between customer service and accounts teams.\\r\\n\\r\\nWith features including issuance of letters, invoices, client financing tracking, registration cost calculation, document management, and service request follow-ups, this system helps organizations maintain high-quality customer service and efficient project registration management.\",\"features\":[\"Issuance of Different Types of Letters\",\"Invoice and Reminder Letter Generation\",\"Client Loan\\/Financing Information Management\",\"Collection Instruction to Accounts\",\"View Deed Value of Project Registration\",\"Registration Cost Calculation with Breakup\",\"Document Upload and Download\",\"Clearance for Registration\",\"Registration Documents Handover\",\"Service Request and Follow-up of Registration\",\"Follow Data Bank Prospect Information\"],\"image\":null},{\"heading\":\"Sales & Tele Sales Management\",\"content\":\"Our Sales & Tele Sales Management module is designed to streamline your sales operations, enhance team productivity, and ensure accurate tracking of prospects, projects, and payments. From forming your sales team to monitoring client interactions, this system provides complete control over your sales process.\\r\\n\\r\\nWith tools for tracking sales calls, following up on leads, managing payment schedules, and analyzing performance via dashboards, your sales team can work efficiently while management gets a clear overview of operations. The system also handles document uploads, fund declarations, and target management to keep all activities organized and compliant.\",\"features\":[\"Sales Team Formation\",\"Prospect Information & Search\",\"Sales Call Due List Follow-up & Review\",\"View Sold Status of a Project\",\"Payment Schedule & Reschedule\",\"List of Price Proposals to Customers\",\"Payment Schedule Approval\",\"Allotment Permanent and Document Upload\",\"Source of Fund Declaration by Client\",\"Sales Target Information\",\"Marketing Document Upload & Download\",\"Dashboard for Management Analysis of Sales\",\"Discussion Dashboard\"],\"image\":null},{\"heading\":\"Procurement & Inventory Management\",\"content\":\"Our Procurement & Inventory Management module is designed to streamline the entire supply chain and inventory process. From requisitions to material receiving and stock tracking, the system ensures accurate, timely, and efficient handling of all procurement operations.\\r\\n\\r\\nWith comprehensive tools for managing purchase orders, supplier information, material receiving reports, and inventory ledgers, businesses can optimize procurement decisions, reduce errors, and maintain full visibility over stock movements. Advanced reporting features allow for rate comparisons, analysis, and monitoring of material transfers across departments or locations.\",\"features\":[\"MPR Received\",\"Purchase Order\",\"Supplier Challan Information\",\"Supplier Challan Information\",\"MRR Top Sheet\",\"Material Transfer Requisition Form\",\"MTRF Top Sheet\",\"Store Ledger Management\",\"Store Requisition\",\"Material Transfer Note\",\"Rate Comparisons and Analysis\"],\"image\":null},{\"heading\":\"Logistic Management\",\"content\":\"The Logistic Management System is a comprehensive solution designed to streamline logistics operations, cost management, and document tracking. It allows organizations to define area-wise land costs, tax rates, VAT, and transfer costs accurately, ensuring transparent and efficient management of all logistics-related processes.\\r\\n\\r\\nWith features like allotment registration, marketing document upload\\/download, service request handling, and registration\\/mutation cost approvals, the system provides complete control over logistics workflows. Real-time tracking and systematic approvals help improve decision-making and reduce operational delays.\",\"features\":[\"Area Wise Land Cost Definition\",\"Area Wise Land Cost Definition\",\"Area Wise VAT Rate Definition\",\"Area Wise Transfer Cost Definition\",\"Allotment Registration\",\"Marketing Document Upload and Download\",\"Service Request Handling\",\"Registration\\/Mutation Cost View\",\"Registration Cost Approval\"],\"image\":null}]', NULL, 1, 'manufacturing', '2025-11-03 02:45:42', '2025-11-10 07:59:21'),
(9, 10, 'Education Management System', '<i class=\"bi bi-mortarboard-fill display-5 mb-3 float-icon\"></i>', '[{\"heading\":null,\"content\":\"Our Education Management System (EMS), powered by GATEWAY-ERP, is an all-in-one platform designed to simplify and automate academic as well as administrative processes. From student admissions to financial management, the system provides a centralized solution that enhances efficiency, transparency, and communication across institutions.\\r\\n\\r\\nWith digital attendance tracking for students, teachers, and employees, institutions can easily monitor participation and ensure accountability. The platform also supports online classes, assignments, and examinations, making it a perfect fit for both traditional and modern e-learning environments.\\r\\n\\r\\nFinancial operations are fully integrated, including student fee management, salary disbursement for staff, and comprehensive accounts tracking. Additionally, the system offers powerful notification tools (SMS\\/Email) to keep students, teachers, and parents updated in real time. It also includes library management and grading systems to streamline essential academic workflows.\\r\\n\\r\\nWhether for schools, colleges, or universities, our EMS ensures that administrators, teachers, and students benefit from a seamless, organized, and future-ready platform. By reducing paperwork, improving data accuracy, and enabling quick access to information, it helps institutions stay ahead in today\\u2019s fast-evolving education sector.\",\"features\":[\"Students Admission\",\"Students \\/ Teachers \\/ Employee Attendance\",\"Online Class Management\",\"Online Examination System\",\"Online Assignment Submission\",\"Students Fee Management\",\"Examination Grading System\",\"Notification Management (SMS \\/ Email)\",\"Teachers \\/ Employee Salary Management\",\"Library Management System\",\"Accounts & Financial Management\"],\"image\":null}]', 'Adopting our Education Management System empowers educational institutions to embrace digital transformation, improve efficiency, and enhance learning experiences. With its blend of academic, financial, and communication tools, it creates a unified ecosystem that supports administrators, teachers, students, and parents alike—ensuring long-term success in the education sector.', 1, 'education-management-system', '2025-11-03 03:19:33', '2025-11-10 07:58:44'),
(10, 12, 'Tea Estate Management System', '<i class=\"bi bi-tree-fill display-5 mb-3 float-icon\"></i>', '[{\"heading\":null,\"content\":\"Our Tea Estate Management System, powered by GATEWAY-ERP, is designed to handle the unique challenges of managing large plantations. From labor attendance and salary management to stock control and delivery tracking, the system ensures smooth operations across departments. It simplifies day-to-day estate activities while providing accurate and transparent reporting for better decision-making.\\r\\n\\r\\nWith features like employee attendance tracking, daily labor summaries, ration card management, and asset monitoring, the platform helps estate owners and managers reduce paperwork and improve efficiency. It also supports bin card records, goods received notifications, and store management, ensuring proper accountability at every stage of the process.\\r\\n\\r\\nWhether it\\u2019s financial tracking, logistics coordination, or workforce supervision, our system integrates all operations into one streamlined platform. By automating repetitive tasks and digitizing records, the Tea Estate Management System empowers organizations to save time, cut costs, and boost productivity.\",\"features\":[\"Details Invoice\",\"Employee Attendance\",\"Daily Labor Summary\",\"Monthly Salary Information\",\"Bin Card Information\",\"Fixed Asset Information\",\"Goods Received Notification\",\"Store Information\",\"Ration Card Information\",\"Delivery Information\",\"Section Bed Information\",\"Control Manual Etc.\"],\"image\":null}]', 'Our Tea Estate Management System offers a comprehensive digital solution for plantation operations. By integrating workforce management, financial tracking, and inventory control into a single platform, it enables tea estates to operate more efficiently, improve transparency, and maximize productivity in today’s competitive agriculture sector.', 1, 'tea-estate-management-system', '2025-11-03 03:22:15', '2025-11-10 07:58:39'),
(11, 11, 'Mobile App & Website Design and Development', '<i class=\"bi bi-phone display-5 mb-3 float-icon\"></i>', '[{\"heading\":null,\"content\":\"Our Mobile App & Website Design and Development service empowers businesses to establish a strong digital presence with innovative, user-friendly, and scalable solutions. At GATEWAY, we combine modern technologies, creative design, and strategic development to deliver apps and websites that are not only visually appealing but also optimized for performance, security, and usability.\\r\\n\\r\\nWhether you need a custom mobile application, responsive website, or integrated digital platform, our experienced team ensures seamless functionality across devices. From idea to launch, we focus on crafting solutions that align with your business goals while delivering an engaging experience for your users. With a customer-first approach, we integrate best practices in UI\\/UX design, SEO optimization, and cutting-edge frameworks to future-proof your digital platform.\\r\\n\\r\\nWe understand that every business is unique. That\\u2019s why our solutions are tailored, flexible, and built with scalability in mind, ensuring that as your business grows, your digital ecosystem grows with it.\",\"features\":[\"Custom Mobile App Development (iOS & Android)\",\"Responsive Website Design & Development\",\"E-commerce Website & App Solutions\",\"UI\\/UX Design & Prototyping\",\"Content Management System (CMS) Integration\",\"API Development & Third-party Integration\",\"SEO-Friendly & Performance-Optimized Development\",\"Cross-Platform App Development\",\"Maintenance & Support Services\",\"Scalable & Secure Architecture\"],\"image\":null}]', 'Our Mobile App & Website Design and Development services provide businesses with a complete digital solution that is innovative, scalable, and results-driven. By combining creativity with technology, we help you reach your audience, build trust, and achieve sustainable growth in today’s fast-paced digital world.', 1, 'mobile-app-website-design-and-development', '2025-11-03 03:24:17', '2025-11-10 07:58:42'),
(12, 13, 'ICT Services', '<i class=\"bi bi-pc-display display-5 mb-3 float-icon\"></i>', '[{\"heading\":null,\"content\":\"Our ICT Services, powered by GATEWAY, provide businesses with comprehensive technology solutions to enhance operational efficiency, network performance, and digital security. From IT infrastructure setup to cloud integration and cybersecurity, we deliver services that support modern business demands.\\r\\n\\r\\nWhether your organization requires network administration, server management, cloud services, or IT consulting, our team ensures reliable, scalable, and secure solutions. We focus on proactive monitoring, rapid troubleshooting, and implementing best practices to maximize uptime and reduce IT risks.\\r\\n\\r\\nOur ICT services are tailored to meet your specific business needs, offering flexible support models and advanced technology solutions that adapt as your organization grows.\",\"features\":[\"Network Setup & Administration\",\"Server Installation & Management\",\"Cloud Integration & Hosting Solutions\",\"Cybersecurity & Data Protection\",\"IT Consulting & Strategy Planning\",\"Software Deployment & Licensing\",\"Backup & Disaster Recovery Solutions\",\"Proactive IT Monitoring & Maintenance\",\"Wireless & VPN Setup\",\"Technical Support & Helpdesk Services\"],\"image\":null}]', 'Our ICT Services provide businesses with a robust, secure, and scalable technology foundation. By combining expert support with advanced infrastructure solutions, we help organizations improve efficiency, safeguard data, and stay competitive in the digital era.', 1, 'ict-services', '2025-11-03 03:26:20', '2025-11-10 07:58:30'),
(13, 14, 'Customer Service & Registration System', '<i class=\"bi bi-headset display-5 mb-3 float-icon\"></i>', '[{\"heading\":null,\"content\":\"Our Customer Service & Registration System powered by GATEWAY ERP helps businesses efficiently manage customer interactions, streamline registration workflows, and improve overall service quality.\\r\\n\\r\\nFrom handling inquiries and complaints to processing registrations, our system ensures accurate, timely, and organized management. It also supports reporting, analytics, and customer history tracking for better decision-making.\\r\\n\\r\\nThe system is designed to be user-friendly, scalable, and adaptable to your organization\'s specific needs, reducing administrative overhead and enhancing customer satisfaction.\",\"features\":[\"Customer Inquiry Management\",\"Customer Registration & Enrollment\",\"Complaint Tracking & Resolution\",\"Automated Notifications & Alerts\",\"Reporting & Analytics Dashboard\",\"Customer Data Management & History\",\"Queue & Appointment Management\",\"User-friendly Interface for Staff\",\"Integration with ERP Modules\",\"Secure Access & Data Protection\"],\"image\":null}]', 'Our Customer Service & Registration System ensures efficient, accurate, and professional management of all customer interactions and registration processes. By leveraging GATEWAY ERP, businesses can save time, reduce errors, and enhance customer satisfaction while maintaining organized records and actionable insights.', 1, 'customer-service-registration-system', '2025-11-03 03:28:31', '2025-11-10 07:58:20'),
(14, 16, 'Mobile Phone Management System', '<i class=\"bi bi-phone-fill display-5 mb-3 float-icon\"></i>', '[{\"heading\":null,\"content\":\"Our Mobile Phone Management System by GATEWAY is designed to optimize mobile inventory, user management, and device tracking for businesses of any scale. Monitor device lifecycle, manage SIM allocations, and ensure seamless workflow across your mobile assets.\\r\\n\\r\\nWhether you require mobile device provisioning, usage tracking, repair management, or billing integration, our system ensures a secure and centralized management platform. Reduce administrative overhead and improve mobile operational efficiency.\\r\\n\\r\\nThe system is customizable, scalable, and integrates smoothly with your existing ERP infrastructure, providing a complete mobile management solution for your organization.\",\"features\":[\"Device Inventory Management\",\"SIM & Plan Tracking\",\"Repair & Maintenance Logging\",\"Mobile User Access Control\",\"Billing & Usage Monitoring\",\"Alerts & Notifications for Expiry\\/Repairs\",\"Centralized Reporting Dashboard\",\"Integration with Existing ERP Modules\",\"Compliance & Audit Tracking\",\"Customizable Workflows & Permissions\"],\"image\":null}]', 'The Mobile Phone Management System provides businesses with a centralized, secure, and efficient platform to manage all mobile devices and users. Reduce costs, streamline operations, and enhance visibility across all mobile resources with GATEWAY ERP.', 1, 'mobile-phone-management-system', '2025-11-03 03:30:37', '2025-11-10 07:58:08');
INSERT INTO `services` (`id`, `order`, `service_name`, `service_logo`, `sections`, `conclusion`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(15, 15, 'Architectural & Engineering Management System', '<i class=\"bi bi-rulers display-5 mb-3 float-icon\"></i>', '[{\"heading\":null,\"content\":\"Our Architectural & Engineering Management System, powered by GATEWAY, provides businesses and firms with advanced project management, design, and collaboration tools to enhance operational efficiency and ensure timely delivery. From blueprint management to engineering workflow optimization, we deliver solutions that support modern architectural and engineering requirements.\\r\\n\\r\\nWhether your organization requires project tracking, documentation, design review, or team collaboration, our system ensures a centralized, secure, and scalable management platform. It enhances productivity, minimizes errors, and ensures better project outcomes.\\r\\n\\r\\nOur Architectural & Engineering system is tailored to meet your specific business needs, offering flexible workflows, robust reporting, and integration capabilities that grow with your organization.\",\"features\":[\"Centralized project management and documentation.\",\"Improved collaboration between architects and engineers.\",\"Enhanced project tracking and reporting.\",\"Design version control and approval workflows.\",\"Resource allocation and timeline management.\",\"Integration with CAD and BIM software.\",\"Automated task assignment and reminders.\",\"Secure cloud storage and data backup.\",\"Customizable reporting and analytics dashboard.\",\"Audit trail and compliance tracking for projects.\"],\"image\":null}]', 'The Architectural & Engineering Management System provides firms with a centralized, secure, and efficient platform to manage projects, streamline collaboration, and enhance reporting. With GATEWAY ERP, improve project outcomes, reduce errors, and maintain operational excellence in every phase of your architectural and engineering projects.', 1, 'architectural-engineering-management-system', '2025-11-03 03:33:32', '2025-11-10 07:58:14'),
(16, 17, 'Procurement & Inventory Management', '<i class=\"bi bi-box-seam display-5 mb-3 float-icon\"></i>', '[{\"heading\":null,\"content\":\"Our Procurement & Inventory Management services, powered by GATEWAY, help businesses optimize their purchasing operations and stock control to reduce costs and improve efficiency. From vendor management to inventory forecasting, our solutions ensure seamless supply chain operations.\\r\\n\\r\\nWhether your organization deals with large-scale procurement, multi-location warehouses, or just-in-time inventory systems, our ERP-powered module provides accurate tracking, real-time updates, and automated workflows to minimize risks and prevent stock outs.\\r\\n\\r\\nWe focus on providing businesses with full visibility of their inventory and procurement cycle, ensuring smarter decision-making and improved supplier collaboration.\",\"features\":[\"Streamlined procurement process and supplier management.\",\"Real-time inventory tracking and control.\",\"Improved accuracy in inventory forecasting and replenishment.\",\"Automated purchase orders and approvals.\",\"Integration with accounting and finance modules.\",\"Multi-warehouse and multi-location inventory support.\",\"Supplier performance monitoring and analytics.\",\"Barcode\\/RFID-based stock management.\",\"Automated reordering to prevent stock outs.\",\"Comprehensive audit trails for compliance.\"],\"image\":null}]', 'Our Procurement & Inventory Management solutions help businesses reduce wastage, improve supplier collaboration, and maintain an optimal balance of supply and demand. With automation, real-time data, and predictive analytics, organizations can achieve higher efficiency, cost savings, and complete control over their procurement and inventory processes.', 1, 'procurement-inventory-management', '2025-11-03 03:35:45', '2025-11-10 07:57:57'),
(17, 18, 'Sales & Tele sales Management System', '<i class=\"bi bi-telephone-forward display-5 mb-3 float-icon\"></i>', '[{\"heading\":null,\"content\":\"Our Sales & Tele sales Management System, powered by GATEWAY, empowers businesses to streamline customer acquisition, strengthen relationships, and boost revenue. From lead generation to sales closure, our ERP solution provides the right tools to manage the full sales cycle efficiently.\\r\\n\\r\\nWhether your organization focuses on B2B tele sales, outbound call campaigns, or managing sales teams, our solution ensures better productivity through real-time tracking, performance insights, and automation of repetitive tasks.\\r\\n\\r\\nWe focus on improving customer engagement, sales forecasting, and tele sales efficiency, enabling organizations to reach their sales goals faster and with greater accuracy.\",\"features\":[\"Improved lead management and conversion rates.\",\"Efficient tracking of sales performance and targets.\",\"Enhanced support for telesales activities and customer outreach.\",\"Automated follow-ups and reminders for sales teams.\",\"Integrated CRM features for better customer relationship management.\",\"Customizable dashboards for sales analytics.\",\"Support for outbound and inbound tele sales campaigns.\",\"Centralized tracking of leads, opportunities, and deals.\",\"Role-based access for sales agents and managers.\",\"Seamless integration with marketing and finance modules.\"],\"image\":null}]', 'Our Sales & Tele sales Management System enhances customer outreach, strengthens tele sales operations, and provides real-time insights into sales performance. By combining automation, analytics, and CRM features, businesses can maximize conversions and achieve sustainable revenue growth.', 1, 'sales-tele-sales-management-system', '2025-11-03 03:39:33', '2025-11-10 07:57:52'),
(18, 19, 'Vehicle Management System', '<i class=\"bi bi-car-front display-5 mb-3 float-icon\"></i>', '[{\"heading\":null,\"content\":\"Our Vehicle Management System, powered by GATEWAY, helps organizations efficiently monitor and manage their fleet operations. From scheduling maintenance to tracking real-time vehicle usage, the system ensures improved productivity and reduced operational costs.\\r\\n\\r\\nWhether your business involves logistics, transport services, or company fleets, our solution provides centralized control for vehicle monitoring, driver management, and expense tracking. It ensures your fleet operates at peak efficiency while minimizing downtime.\\r\\n\\r\\nThe system also enhances decision-making with insightful reports and analytics, giving businesses better control over vehicle performance and lifecycle management.\",\"features\":[\"Efficient scheduling of vehicle maintenance and repairs.\",\"Real-time tracking of vehicle location and usage.\",\"Improved management of vehicle-related expenses and logistics.\",\"Driver management and assignment tracking.\",\"Fuel consumption monitoring and optimization.\",\"Automated reminders for renewals (tax, insurance, fitness).\",\"Comprehensive reporting and performance analytics.\"],\"image\":null}]', 'With our Vehicle Management System, businesses gain full visibility of their fleet, reduce costs, and improve efficiency. By integrating maintenance, tracking, and reporting, the system ensures smarter operations and enhanced customer satisfaction.', 1, 'vehicle-management-system', '2025-11-03 03:42:13', '2025-11-10 07:57:41'),
(19, 20, 'ITES Support Services', '<i class=\"bi bi-headset display-5 mb-3 float-icon\"></i>', '[{\"heading\":null,\"content\":\"Our ITES Support Services provide businesses with tailored outsourcing solutions to improve productivity, reduce operational costs, and optimize resource utilization. From data management to customer service and technical support, we deliver end-to-end services that align with your business objectives.\\r\\n\\r\\nWhether your organization requires back-office support, helpdesk services, data processing, or customer engagement solutions, our skilled team ensures high-quality, timely, and reliable results. We focus on process automation, cost-efficiency, and performance excellence to help your business grow.\\r\\n\\r\\nWith flexible support models and scalable solutions, our ITES services adapt to your unique business needs, ensuring long-term success and customer satisfaction.\",\"features\":[\"Data Entry & Data Processing\",\"Customer Service & Call Center Support\",\"Helpdesk & Technical Support\",\"Back-Office Operations Management\",\"Document Management & Digitization\",\"HR & Payroll Processing\",\"Finance & Accounting Outsourcing\",\"Email, Chat & Omni-Channel Support\",\"Research & Analytics Services\",\"Custom ITES Solutions\"],\"image\":null}]', 'With ITES Support, businesses gain a trusted partner that handles critical processes with accuracy and efficiency. By leveraging advanced tools, skilled teams, and industry best practices, we help organizations improve performance, reduce costs, and stay competitive in today’s digital landscape.', 1, 'ites-support-services', '2025-11-03 03:44:36', '2025-11-10 07:57:30'),
(20, 21, 'Software Development Services', '<i class=\"bi bi-code-slash display-5 mb-3 float-icon\"></i>', '[{\"heading\":null,\"content\":\"Our Software Development Services empower businesses with cutting-edge digital solutions designed to meet unique needs and challenges. From web and mobile applications to enterprise systems, we deliver scalable, secure, and high-performing software tailored to your business goals.\\r\\n\\r\\nWhether you need custom applications, ERP systems, SaaS products, or software integration, our expert developers and engineers use modern technologies and best practices to ensure robust performance and long-term value. We emphasize clean code, user-centric design, and agile delivery.\\r\\n\\r\\nBy leveraging innovative tools, cloud platforms, and automation, we help organizations transform ideas into powerful digital products that enhance efficiency, customer experience, and competitive advantage.\",\"features\":[\"Custom Web Application Development\",\"Mobile App Development (iOS & Android)\",\"Enterprise Resource Planning (ERP) Solutions\",\"Software Maintenance & Support\",\"Cloud-Based Application Development\",\"SaaS Product Development\",\"API Development & System Integration\",\"UI\\/UX Design & Prototyping\",\"Automation & Workflow Optimization\",\"Custom CRM & CMS Solutions\"],\"image\":null}]', 'With our Software Development Services, your business gains future-ready solutions built for performance, scalability, and growth. By combining technical expertise, agile methodologies, and innovation, we deliver software that empowers organizations to thrive in the digital era.', 1, 'software-development-services', '2025-11-03 03:47:05', '2025-11-10 07:57:25'),
(21, 22, 'Cloud Hosting Services', '<i class=\"bi bi-cloud-fill display-5 mb-3 float-icon\"></i>', '[{\"heading\":null,\"content\":\"Our Cloud Hosting Services provide businesses with highly available, secure, and scalable infrastructure to run mission-critical applications. With modern cloud platforms, we deliver hosting solutions that adapt to your needs\\u2014ensuring performance, reliability, and cost-efficiency.\\r\\n\\r\\nWhether you require dedicated cloud servers, virtual private hosting, managed cloud services, or hybrid solutions, we help you deploy and manage resources seamlessly. Our experts ensure continuous monitoring, automated backups, and strong security for your cloud environment.\\r\\n\\r\\nBy leveraging leading cloud technologies, our hosting solutions allow your business to grow without limitations while maintaining the highest levels of uptime and flexibility.\",\"features\":[\"Scalable Cloud Infrastructure\",\"High Uptime & Reliability (99.9%)\",\"Managed Cloud Hosting\",\"Dedicated & Virtual Private Servers\",\"Dedicated & Virtual Private Servers\",\"Automated Backups & Disaster Recovery\",\"Secure Data Protection & Encryption\",\"Application & Database Hosting\",\"Performance Optimization & Monitoring\",\"24\\/7 Technical Support\"],\"image\":null}]', 'With our Cloud Hosting Services, your business benefits from reliable performance, flexible scaling, and enterprise-grade security. We provide the cloud foundation that helps organizations innovate faster, reduce infrastructure costs, and deliver seamless digital experi', 1, 'cloud-hosting-services', '2025-11-03 03:50:20', '2025-11-10 07:57:17'),
(22, 23, 'Training & Consultancy Services', '<i class=\"bi bi-mortarboard-fill display-5 mb-3 float-icon\"></i>', '[{\"heading\":null,\"content\":\"Our Training & Consultancy Services are designed to equip professionals and organizations with practical skills and strategic insights. From hands-on technical training to business process consultancy, we help bridge knowledge gaps and drive impactful transformation.\\r\\n\\r\\nWhether you\\u2019re seeking IT training, professional workshops, or tailored consultancy, our expert team brings industry best practices and real-world experience to every engagement. We focus on both technical and organizational excellence to ensure sustainable growth.\\r\\n\\r\\nBy combining expert-led sessions, interactive learning, and customized consultancy, we enable businesses and individuals to stay ahead in a rapidly evolving digital landscape.\",\"features\":[\"Corporate IT Training Programs\",\"Customized Technical Workshops\",\"Business & Process Consultancy\",\"Agile & Project Management Training\",\"ERP & Software Implementation Guidance\",\"Cloud & DevOps Consultancy\",\"Cybersecurity Awareness Training\",\"Career Development & Mentorship\",\"Workshops on Emerging Technologies (AI, IoT, Blockchain)\",\"Organizational Change Management\"],\"image\":null}]', 'With our Training & Consultancy Services, we empower businesses and professionals with the right skills, strategies, and expert advice. From digital transformation to career growth, we provide the tools and insights to succeed in today’s competitive environment.', 1, 'training-consultancy-services', '2025-11-03 03:52:11', '2025-11-10 07:57:11'),
(23, 4, 'Construction', '<i class=\"bi bi-buildings-fill mb-3 float-icon\"></i>', '[{\"heading\":\"Construction Management\",\"content\":\"Our Construction Management System provides an all-in-one digital platform to manage every stage of construction projects \\u2014 from planning and budgeting to execution and final delivery. Designed specifically for the construction industry, it enables project managers, engineers, and site supervisors to collaborate efficiently, ensuring that projects are completed on time, within budget, and with the highest quality standards.\\r\\n\\r\\nWith integrated modules for project scheduling, materials tracking, labor management, and cost control, the system simplifies complex construction workflows. Real-time data insights and automated reporting help improve decision-making and enhance productivity across all project sites.\",\"features\":[\"Project Planning & Scheduling: Define project timelines, milestones, and dependencies for smooth execution.\",\"Material Procurement & Inventory Management: Track construction materials, manage suppliers, and monitor usage to prevent shortages or excess stock.\",\"Labor & Workforce Management: Manage worker attendance, assign daily tasks, and monitor productivity efficiently.\",\"Budgeting & Cost Control: Maintain full control over project expenses with real-time financial tracking and cost comparison against estimates.\",\"Equipment & Asset Management: Track machinery usage, maintenance schedules, and asset depreciation.\",\"Subcontractor Management: Manage subcontractor contracts, work progress, and payment schedules with ease.\",\"Document & Drawing Management: Store, share, and version-control architectural plans, contracts, and compliance documen\",\"Site Progress Monitoring: Record daily work reports, upload photos, and generate progress summaries for stakeholders.\",\"Quality & Safety Compliance: Monitor safety standards, issue incident reports, and ensure regulatory compliance.\",\"Integrated Reporting & Dashboards: Get comprehensive visual insights on project health, financials, and resource utilization.\"],\"image\":\"uploads\\/backend\\/services\\/1762685235_0.jpg\"}]', 'This system transforms traditional construction operations into a streamlined, data-driven process — reducing delays, minimizing waste, and maximizing profitability for every project.', 1, 'construction', '2025-11-08 04:21:59', '2025-11-10 07:58:58');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('0nF2QIl4ibe4h5TkpOdLBGSW1ls8vCzQWMr0TjpI', NULL, '66.249.73.66', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.7390.122 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidVR1cUFWdzhwWkl1VkhCV2l5RXVTd25jZEpxVUFRS2pJazVJSVRLMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vZ2FsbGVyeSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762769094),
('0xApTLbmxAd2jICSBhGEbrD0EXPnRjH92hc1I7yE', NULL, '98.88.137.2', 'RecordedFuture Global Inventory Crawler', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR3BZandoS1RWdk5kSFFRSXF1TlA0WVFwRlFiUnl2WkZIZ0U1TW90aiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHBzOi8vbWFpbC5nYXRld2F5YXV0b21hdGlvbnMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1762761484),
('1cGu8tJLzNdLMB9azTa19JtHF5LD8NTJW2UvCbFL', NULL, '66.249.73.65', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.7390.122 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVUdleWJmUm9nT0lUck53MkJIUktvN01qSmN6bVNUcHhjOWt4SXQ4cCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODQ6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vc2VydmljZS9tb2JpbGUtYXBwLXdlYnNpdGUtZGVzaWduLWFuZC1kZXZlbG9wbWVudCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762790351),
('1O8pcqOut0hR3KWul9zB9TQJG2qJKJSuTiXc89FZ', NULL, '114.119.142.247', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieEpoQlkyOXE1STVIQ01sdE5yajFVMDR1WlM2eWgwZnUzRmRWMXNkSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Nzc6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vc2VydmljZS9zYWxlcy10ZWxlLXNhbGVzLW1hbmFnZW1lbnQtc3lzdGVtIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1762790513),
('3iiViNnS1pBVMbPiLmq4YbntLVY25UKiyypwadzb', NULL, '35.163.46.105', 'Mozilla/5.0 (Linux; Android 9; STF-L09) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.111 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUjgyM244UldkZ2RaVk5FQ295c1NDc0FaVDdkaVIzblREc0dKZXAyZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762782017),
('3ldGyArKawIeGqNrOHWWvyxssXL618tfLJyrkJnu', NULL, '66.249.73.64', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.7390.122 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibXZ5S2JJdTVlT25VOHJCTHlzMWk2VUhQNER4clRPZjRUZno0eDM1QiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzI6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vc2VydmljZS9zb2Z0d2FyZS1kZXZlbG9wbWVudC1zZXJ2aWNlcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762790724),
('3P1IvERJHCySlvb2fubF3c0xxkJzYwGlat5ZGFg3', NULL, '114.119.130.31', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWDgyNEVmZUVqazdobUJ2Z0FLRU1uVnFnN0prOWRpMjhMWVJzZ2lKUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzE6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbS9zZXJ2aWNlL3Byb2N1cmVtZW50LWludmVudG9yeS1tYW5hZ2VtZW50Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1762787313),
('4FpTKC8YisQhFYYbFluCV5Wyukgv2JclWljy13R1', NULL, '66.249.73.64', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.7390.122 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSTdUZEpLc0Q5bU9DUHpuZ1N2QWpxd1hyalA0R3RoR0M4aFQyVW9tWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjQ6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vc2VydmljZS9pdGVzLXN1cHBvcnQtc2VydmljZXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762761143),
('58McdlqsZpG2KRXOvoKP2kgk3q71qjruozd5sZtv', NULL, '35.236.250.241', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.6099.200 YaBrowser/24.1.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoic0ZHN0hDcXRTeVl6WUZMOVFnV0diNW5mS1R0d1Y0ODl4YUtISnJQYyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1762795633),
('590NChgz078l8KipnVTR72uZo1izYXH877wj4O1h', NULL, '66.249.73.65', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.7390.122 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTW1WaHp4YTNjajNhckE0UjdpTFlNZzhCN255N01HcUJVeDA1ZVVCTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzU6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vc2VydmljZS9wcm9jdXJlbWVudC1pbnZlbnRvcnktbWFuYWdlbWVudCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762761200),
('5CUlWBjFy4C1L9W1JKtn8neY2ffQfyjyEi0bZEMn', NULL, '163.61.241.104', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:144.0) Gecko/20100101 Firefox/144.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNWZjR3dYcGt5cERoa0h0UzN2RW5mT2lYaXMyQnRWam0xWE5tdURnMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762762922),
('5dUfgFg05PndFjneN1rp2YwYqXkB0soInQ1wFkjx', NULL, '66.249.73.64', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.7390.122 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZzZVSmU1ZWEzYzd4WmZTeGFQNFhISzNzVnB5dk91Wko3d0hIN3B1bSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTU6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vc2VydmljZS9pY3Qtc2VydmljZXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762760993),
('5I9KHQUgqliAqYWHt8wCqwloDvbrsKoPigQahnd0', NULL, '34.29.118.50', 'Mozilla/5.0 (compatible; CMS-Checker/1.0; +https://example.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWlNzM3AwUmU4dk1abDl0NTZvWHN3aWpYT0RoYlk1YmNtRnlPWHdGTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762788432),
('5mR9R6l8S7bozb0KjIDTFvLhLPA0j9tr8mgaWaQq', NULL, '114.119.131.203', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZEVhRGs4UmZ1bXBpWDRYdVp6a1VWQkR0QjNkZTg1aVladGU0NGQ2USI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzU6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vc2VydmljZS9wcm9jdXJlbWVudC1pbnZlbnRvcnktbWFuYWdlbWVudCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762807408),
('6djBROXPNNlEGJO2U31kHOxSEOJwnAB5XnzEx7DL', NULL, '17.22.237.252', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR3J3TENsc3BZaGlyTE1ma3R2ektmeDBaU1d1RzZhSWFTemd1WWdKbSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vY2xpZW50cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762815536),
('6m39vJLgppPlsAXHwFAovgudmsLmebAKRRj2RWVn', NULL, '66.249.73.64', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.7390.122 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicGMzZXcxbjQyTnlGTkEzYVdXbEt2emdvTmRCamM3Qk9nU1RaWXI0ZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjQ6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vc2VydmljZS9pdGVzLXN1cHBvcnQtc2VydmljZXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762790771),
('6PhSXfcMUwgB7ZZMLV4HMrcVtjcx5kEWRDwo2reP', NULL, '95.217.109.26', 'Mozilla/5.0 (compatible; MJ12bot/v1.4.8; http://mj12bot.com/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN0gyaDgyRlJIUUZ3YmZpSmptVm9yV09qRUY5Wm95ZFNRdVpCQ05ZRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODI6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbS9zZXJ2aWNlL2FyY2hpdGVjdHVyYWwtZW5naW5lZXJpbmctbWFuYWdlbWVudC1zeXN0ZW0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762817406),
('7b6KXlKn3roH35EzG4BnItDidmdRqH1ElXn8vfxl', NULL, '114.119.130.31', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMUtjd3Faa2xGbWRZMU5UTTR4TEc4NU1XakxkN1BGZTVJeEpHM0w2NiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzA6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vc2VydmljZS9lZHVjYXRpb24tbWFuYWdlbWVudC1zeXN0ZW0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762802252),
('7d44JXHCigtCa3MKxz8Zerj6EOFRpudXvJTJ9njr', NULL, '66.249.73.65', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.7390.122 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieXN0RXN6d1p3UHZQT0w5OUkzb3hOaHdUVjJwZUJ0ZUxXekRaa3pjUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Nzk6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vc2VydmljZS9jdXN0b21lci1zZXJ2aWNlLXJlZ2lzdHJhdGlvbi1zeXN0ZW0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762759853),
('7euengDCkgcHDPuDtoXZu4tNkDr7eOfk9HvVnA43', NULL, '181.41.206.51', 'Mozilla/5.0 (X11; Linux x86_64; rv:103.0) Gecko/20100101 Firefox/103.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNDhPY21iM2VuWlZUUnlVOVBuNlNsaDhqZ25lZUl6Y1MzNHVKTk9ZWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762800092),
('7gcDNsZh0DENiQmpqPzx9INcAEdler4Q5iQqGVW6', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSTVpUUVyVDk2QWtFR21oT0hiNExRRW1zY3ZpZUZMcGl5OFdHd1MxWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTI6ImxvZ2luX2FkbWluXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1762757103),
('7LitkPtyJOi7eD6OWUsNY43JucXbtPEzvz0LF5ld', NULL, '23.81.49.202', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaFZUSzIydDQ0dGlWVjNkSHJkanNrYk1PQUdQUDJhR1dzYW9taDV4ZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbS9jbGllbnRzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1762784273),
('7LsA4YEAW6eU3TxdmsW2J9tIybwPVLktAC7CDgOF', NULL, '66.249.73.66', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.7390.122 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTGZ0TkJyWGVxVkJxaWZPSHVaMDBCaWRWWk5YZ0dYRmJYMzJwdW9qMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzU6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vc2VydmljZS9wcm9jdXJlbWVudC1pbnZlbnRvcnktbWFuYWdlbWVudCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762817590),
('8aExK9n93uGs5WfC4hAedhc7qSL0uYR6sVj1vTvt', NULL, '51.161.65.202', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTHRzMm0wVm5PZHc4azI3V2NhWUF6b3I2WXFqZ3BaQ05rM2VCclVVQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762772222),
('8kBds61VRuFLsAt5QL5YVtBZVwaONBrOk5wvTkFJ', NULL, '114.119.131.203', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQncxWEZwa0lFcHNQZm5qR3BLZm1GZkhoS2tEblE0dXQ0a0VLekwzMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzU6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbS9zZXJ2aWNlL3Byb2N1cmVtZW50LWFuZC1pbnZlbnRvcnktbWFuYWdlbWVudCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762794721),
('8StwwNzAMXTVQPP88FXNWn9DmH12qwo7keWhTWMI', NULL, '103.137.73.182', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ3ladWRVekkzU3dNRWU3YUhOR1BnU0lwMzFFbUxaTHhJNmNzWm5DVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762782566),
('96T41g18NqMCx3QwhnMngyvmmavXhJMxefOt5U61', NULL, '43.173.181.2', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.6478.114 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSXVMYVJmRUgxbUNzWTV2cWkxemg5dG5DWU9oYjZXWFc1aTFScHJLaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vY2xpZW50cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762775535),
('9tariZ1bL26Udu4xREthtz8f7oNccYJumci07WJY', NULL, '54.39.6.185', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZzJMQ3JIR25pVnpBNzFxa3FtUHgwZWxhSExCN0NsQ0hEU01uWjZHTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Njk6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbS9zZXJ2aWNlL21vYmlsZS1waG9uZS1tYW5hZ2VtZW50LXN5c3RlbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762778708),
('9zcn3xgJGkfKLcWvYnM5dW8NyVbpM2Wwqv9QZnGT', NULL, '114.119.130.31', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM2xPdmFhYlU4bndnNjlaaTc3NEpHM3ZzSXkzMjVFd2lsejhURHZRciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzI6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vc2VydmljZS90cmFpbmluZy1jb25zdWx0YW5jeS1zZXJ2aWNlcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762790429),
('bcXAV1OlTQC7AF4lVOsqxfqTOx0AVA5LU66goJbV', NULL, '205.210.31.50', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaGJwZGVtbXBQR0l0RlV4TXFQcEJvOWYySXVBUE5MNnp5Q2t1Z0paOSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762819202),
('breA8BhGTQrtJAr9WdsC5X0kVL7cgSxexVzVn0j1', NULL, '125.94.144.102', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiT3AyemJXcWhTWnl5eGpIYWU1UjZsSHJnSFJtNWhoM2ZLNlQ2VGVFViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762765354),
('cnXoo1JJ5gbkA7TqFcSVCr21R4TipSieKWWqxIHc', NULL, '114.119.142.131', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMHdQU3U4aUFvUVgxSFNpNDRMcWJucUhUWG1mU1dTZjVUeU55cjkyaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Njg6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbS9zZXJ2aWNlL3NvZnR3YXJlLWRldmVsb3BtZW50LXNlcnZpY2VzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1762775555),
('cShCB6YSnCprqTgL0hjUpaf1pSBlzaKg93ogJaJq', NULL, '66.249.73.64', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.7390.122 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZTIyZTRpU3lpM0hjbU5uZlM1enNQRE5JMlVyYXQydHRKcW1TQmJjWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTU6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vc2VydmljZS9jb25zdHJ1Y3Rpb24iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762761131),
('cvwEjOmH4LdEalI8K36Q9Mg74BrsUkJUiTi5ZI7U', NULL, '114.119.151.170', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicFRid0tBdDNqcDJIa2xtejlESHh6WDE4TVk3YzZiVEdMOElaRDRKNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODY6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vc2VydmljZS9hcmNoaXRlY3R1cmFsLWVuZ2luZWVyaW5nLW1hbmFnZW1lbnQtc3lzdGVtIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1762818209),
('Dx09ech73oithQmW9SCdbRUSSSXAXJQYRM7VeGGt', NULL, '43.173.179.201', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.6478.114 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOTM3T291bW1TWHNiYTBWWDNVcmJIdFhGWEpuMTRPNmcyd1pSQ2JHSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762770332),
('E6CO3EoqQwH3Upsjgbrsmh8rMkf2zJthNVTJuMUQ', NULL, '185.191.171.16', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVFA3cWJCbkQ3WDRxT3pLWDFEdHh3R2hTU1NtZGJ6TU1Na3AyYXpGbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzI6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vc2VydmljZS9zb2Z0d2FyZS1kZXZlbG9wbWVudC1zZXJ2aWNlcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762813162),
('E7Itr1g0ShUUZrIHVYuTloeiIhkMjpBmpkxdaCxg', NULL, '66.249.73.64', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.7390.122 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVzN4R1hYcGdIdkQ0b3Vsbk5VQmI3ZFNKZ3pZVUk4Y3RFTk1FR0hKeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzM6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vc2VydmljZS9tb2JpbGUtcGhvbmUtbWFuYWdlbWVudC1zeXN0ZW0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762761118),
('e7TI7agCk2xW6XHJ6XpMemAADrJfSdwaLyoqD61U', NULL, '66.249.73.66', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.7390.122 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiS1RXQzJCcm5helNNcWJaQWJvSkl2Z1ExekZEMFlQTlpQM2tieGFrTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjU6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vc2VydmljZS9jbG91ZC1ob3N0aW5nLXNlcnZpY2VzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1762761113),
('ECwcpIbp5TlXv5RaKURBCwD6wzbOvOcFwY7Ke6Ic', NULL, '43.173.173.200', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.6478.114 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRWlJUUtFdmx3bUxVWUNxN2pNZWtqV1dIb1ZUWDJPVEx1Sk4xVXFBRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vY2xpZW50cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762794345),
('ekdtgtuYqyiR4wbOlcxXdjtXI0AgZZQo9EbdSIPv', NULL, '114.119.130.31', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaFd6VEJjRDlXaWNxN2NudGFGZlRuMzEzUkl4dVZoeExjcVJwcDFPWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODc6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbS9zZXJ2aWNlL2h1bWFuLXJlc291cmNlLWFkbWluaXN0cmF0aW9uLXBheXJvbGwtbWFuYWdlbWVudCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762801137),
('EV2sSA2siXsTZaMiVopefl726OMdHiJ4znSpAxUs', NULL, '182.42.105.85', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTTk1N0VGWnk1SFVRUFdxbGRpVkZLdWp6ZzF0TzlxaU5lMUdjT29zdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762810125),
('F2hi3Atv31QByEbHX3q3tlPtf42JwZSinlV9TmhT', NULL, '85.208.96.194', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVmY5R1JUY3VaSXBpYzBHdFpLWDNGS0lHSWhvZk9BOTFFT09VSGUwdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTE6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbS9zZXJ2aWNlL2NvbnN0cnVjdGlvbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762817282),
('FJMGkon7lRNaUrKEvtX0iFjRaPCLbTgB3XZ8eLvN', NULL, '66.249.73.66', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.7390.122 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidThiVHdHSDJzVWhUS3pncXF0Ung3VUM2QmIwalpYaUM5RTVhVjlsZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODQ6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vc2VydmljZS9tb2JpbGUtYXBwLXdlYnNpdGUtZGVzaWduLWFuZC1kZXZlbG9wbWVudCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762760401),
('FLY69etq3y0Of4G2hGies3VvRdr5ip1J4swbDN7g', NULL, '66.249.73.64', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.7390.122 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVHZheHRhUmxja1p0bEVyUG1jWUtSbGtabnNRcVRVMldneFZmNG5naiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzI6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vc2VydmljZS9zb2Z0d2FyZS1kZXZlbG9wbWVudC1zZXJ2aWNlcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762761006),
('FWiv5C5dI3LsQJX7iZPIHSS7eH8DNiGYs6QQJSBp', NULL, '114.119.130.31', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib2swejlIbzYzeUlCZ3l0U09BME9rTmtocjVPR0ZpbmJjWkxmUjNYeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjE6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbS9zZXJ2aWNlL21vYmlsZS1hcHAtYW5kLXdlYnNpdGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762797927),
('fXxJ6Ku0R1TYhekxbBFXGGmAqh32zDVoinNKOcdt', NULL, '74.7.229.74', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36; compatible; OAI-SearchBot/1.0; +https://openai.com/searchbot', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOUYxREF5cEsweVJQelVJYWdkRlY2UlhrWmxkTU1SOGhkbjJpeE9mWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Nzc6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vc2VydmljZS9zYWxlcy10ZWxlLXNhbGVzLW1hbmFnZW1lbnQtc3lzdGVtIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1762780230),
('fyq7J0Ho2iufzzrAEx6wkKYB14LJrxx2uLEMGCzr', NULL, '85.208.96.209', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiak5uckVCT3NsMVdUMk56OGdtN2VBa2J3MGkxY0g2N3dtWG1VRUtBVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTU6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vc2VydmljZS9pY3Qtc2VydmljZXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762815298),
('Gb9CtbVWyeIdPo3kQ2gcC089aUOmURHrOXTTEw96', NULL, '62.146.225.75', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidFFkY3p3MXQ2NER2V05xMFoxVkhZZ3N6ZTQzVUFNelg5TEdMU1J3MCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762795947),
('gbag9RvVvXqaU5UyWA1tHlwhHxReCj3r5GSTK2Rb', NULL, '34.148.245.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4240.193 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSlcyUGh6Nk9KU1FmOFk3WEVhUmd4VmJJT3lOM2hnMUVMaHVCWldoUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHBzOi8vbWFpbC5nYXRld2F5YXV0b21hdGlvbnMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1762805488),
('GdKwTmgonHGrwWhTWT3eQO03avVHC11tbeFidR4l', NULL, '114.119.131.203', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMzlFbDMyOUtzS1ZRME9oMXVCY3NaSks3NVd5TUJYa3NIUDB0cmhlWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjU6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vc2VydmljZS9jbG91ZC1ob3N0aW5nLXNlcnZpY2VzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1762764495),
('Gj2uSWdplC9W17Ors5v2CTsYRpEuBQGo6lbgeASj', NULL, '35.86.247.21', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNmhiaFpoSnZvMDZwZXAwUnIzeFZwUVZmU1VkbzNzc3Y1ZkhRWHF5UCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762819914),
('gpCegnLzGDUWfKJKAgwYJUCC8nRkCdfZyag8QNEC', NULL, '43.173.175.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicnBJNUlKYjM1YWtnZmdGVUFaRkloN005RXBVTDBjaFF5SFQ3dHJlRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762813528),
('GwtLA8eiTedag9HwL68i48ebDrODypzXlbN11OAr', NULL, '34.58.178.51', 'Mozilla/5.0 (compatible; CMS-Checker/1.0; +https://example.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiT3F6WWdaWlE2eEc1UXp4dVBMemo1VE1SUFlGQVlmYnRxekFCV3BRNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762783283),
('hE9f9wFXpTOlwPj21NzIWWFPYdUEoJlLzGn9CpYa', NULL, '51.68.236.68', 'Mozilla/5.0 (compatible; MJ12bot/v2.0.4; http://mj12bot.com/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNENSWGxGUnhmWkxCY2ZkMkltUGlhYlM2OEhzZlZubWNrNTdPU1RBWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762807998),
('heuTqK37UM28ml8Fluohed982iCdqQCA2aHRaJBI', NULL, '114.119.130.31', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiS3J0bGNDSmt5UGZJOUpSM3hxejVrVmtZM0NnYTEydnpUanRzS1FUbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzI6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vc2VydmljZS90cmFpbmluZy1jb25zdWx0YW5jeS1zZXJ2aWNlcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762775473),
('HgsBv2qFtvFQlZIEAoy0dmgOqw5dMcjvKNT3izwd', NULL, '66.249.74.133', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.7390.122 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR1FIeVQ1REFmaTM1SnBuc2VEMTlScDN3V2VUbDdNNm5nMERMb0VrSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjY6Imh0dHBzOi8vbWFpbC5nYXRld2F5YXV0b21hdGlvbnMuY29tL3NlcnZpY2UvbW9iaWxlLWFwcC1hbmQtd2Vic2l0ZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762765614),
('HovgtVRKuzMkqNPT6RkP7kigJZ8RYwGHRu9Co7FY', NULL, '114.119.142.131', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTHVHQktCNWFJckdtNzVCa0RpT0xmQWJwZ2Y3VmdPSzA0VzRhMTVqUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTM6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vc2VydmljZS9pdC1zdXBwb3J0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1762794804),
('hw2M6Q6od8JINuak3ALbhesXe5wc9NbfNrNKVBYh', NULL, '114.119.133.182', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWnVNSlQ0MDd1UHhXWnhSVXdtTFRFQmhRd1B1Y0h4VFZuR0VLd3VMZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTU6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vc2VydmljZS9pY3Qtc2VydmljZXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762803991),
('iGjQwLIYaYeQC0dMMgoCZMGQmQ9YY2JGu7Oy9W73', NULL, '43.173.176.72', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicHJMTlM4ZHl6aEVkTnpzNk5VRFRZbHdtYm5QS1QwYTlrd1RGNWpRcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHBzOi8vbWFpbC5nYXRld2F5YXV0b21hdGlvbnMuY29tL2dhbGxlcnkiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762797675),
('JjffmjqZHRQ7zf582YlukXjC08mW5GXc8yJ4UyyI', NULL, '180.102.110.150', 'Sogou web spider/4.0(+http://www.sogou.com/docs/help/webmasters.htm#07)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieWhsalpJdmtiSXd4RHczTDJ6Y2F0aFZRVENvUUd5cENiNGVyVmMybSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762768301),
('jlQlgSW5am0hVWoLSBU2sAqAG1qtOOdafMqReTgQ', NULL, '15.235.96.238', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiS05RUTNERkhOb1dMb3JIZ2h1UElObnN1WEZLeHVMdG02c216SzJpdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjE6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbS9zZXJ2aWNlL2Nsb3VkLWhvc3Rpbmctc2VydmljZXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762766210),
('JScU8GgcmsAgjbKngec7hOf41tfMtzXs1tdn3wKq', NULL, '198.235.24.57', '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTWdHYnBaUFZtRUIxZVpvNVoweTNOY29qeGl0dEdqNmFaN0ZVRzZ0ZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762774917),
('K1KzTxqh1dJaiWcSVttCM66GHMeTOVY9ahQkelEC', NULL, '148.113.128.108', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY2lQdkI0SU5McFF1Z3llU2F4akR4Q09RR0F0eXlvbjBxV09ackFobyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzM6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbS9zZXJ2aWNlL3NhbGVzLXRlbGUtc2FsZXMtbWFuYWdlbWVudC1zeXN0ZW0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762817951),
('KHa7902i0275UuuI0UXq1NWH0EGUcCtE7XQFwxi2', NULL, '154.51.142.2', 'Mozilla/5.0 (iPhone; CPU iPhone OS 6_0 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko)                     Version/6.0 Mobile/10A5376e Safari/8536.25', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM2dZQUJTNE5HQmxlaE5iWjNUWGs5Mng4UkFGSWRNTjZ3NnJrN0pjdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762796683),
('Ko9H6zzWE2RzuVO5sUM1eLNaaRjizGCu22Dfoj0y', NULL, '34.138.176.173', 'Mozilla/5.0 (compatible; CMS-Checker/1.0; +https://example.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUjZxcWl4MXlaMkhNOEw3YmVuSHBLTVl1WHI2NjU5SmJRQkFKbGRGaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHBzOi8vbWFpbC5nYXRld2F5YXV0b21hdGlvbnMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1762789249),
('KXlGhM751QVccl5Lw5lNdMAQxmBtHfdfyIpnepMI', NULL, '35.86.247.21', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiazZZMnhGMUNwOHZiS2RrTXVEaGRsYzhxWVJFcFc3ZTJZYXBnU3V2dyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762819931),
('L79xoPPAiF2iByqgLyD5e2PQK7Dl4qn3FyquXPXf', NULL, '114.119.140.185', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUjkyWnRqZjFrWGdCTmV5OE9sdDhJZGRQVzVsYndvWHNPZDJkcm5yaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTU6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vc2VydmljZS9pY3Qtc2VydmljZXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762817096),
('LjNpWyidW3LaNeLwMhT8e70s30VjCYB9zRg3CS6B', NULL, '114.119.142.131', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWTZGUHNTNDh3czlzbG5KN01SN3pMZmdIZ0k4WlVUSFluQ0RPNGNPOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjA6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbS9zZXJ2aWNlL2l0ZXMtc3VwcG9ydC1zZXJ2aWNlcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762767185),
('LpHWrX43m150eKYREwZrAsO9TpIj7x71MaVyRyEB', NULL, '114.119.142.131', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoid0hmYlY5eWtJMm1FY0l2TU0ySXlXNWtEaEtQdVRKNUZpbnIzbjBDMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODM6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vc2VydmljZS9hcmNoaXRlY3R1cmFsLWFuZC1lbmdpbmVlcmluZy1tYW5hZ2VtZW50Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1762801054),
('LR5taDXu0jj4GNcwzwtruhrvNKDfLuMajdAE4qAx', NULL, '43.173.182.92', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.6478.114 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNjRuWlp1WEJWbkRWNlI0MTRLUFc0dU9nOEgyT1ZoQ2xGczRuV204VCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzM6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vc2VydmljZS9zdXBwbHktY2hhaW4tbWFuYWdlbWVudC1zeXN0ZW0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762796138),
('lS1wORmYfKaTtjsG0ReLqVN5i1Bmf8aax3R8NIwG', NULL, '154.51.142.2', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib1p0TGtSclVOWDZZR3Z5ZkRyTE8wRVZXZW5hamRVOVlVdko0S3Y4TiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Njk6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbS9zZXJ2aWNlL21vYmlsZS1waG9uZS1tYW5hZ2VtZW50LXN5c3RlbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762796762),
('lW2BKuCCGlmADBIjUX77MvrGTwucAqK1rhfdwg4m', NULL, '57.141.6.2', 'meta-externalagent/1.1 (+https://developers.facebook.com/docs/sharing/webmasters/crawler)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiejNLTWtRWkF6Zjl3U285Y09RMXp5NnRjY3MwY01mTmJWVGM3dlpjSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbS9hYm91dCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762803510),
('m2nLuTUsQL8rasbRnlk8agw3H6A6rFkro5vMnJkH', NULL, '154.51.142.2', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibnBjRVdKVnY4dmVUWWs5NVhCS3NMQnZXT25yZ0ZWYWJzMXpHT1lDciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762796681),
('MdfS9CAQAvGwpuvTb6KTi9kQ4OW7qT717BvDXzQU', NULL, '114.119.140.185', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRG40OVRqSkxkaEhIdzdhVXFIaDBZVURPUFVuNFM2WkxReEVlc3BYWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTk6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vc2VydmljZS90cmFkaW5nLWJ1c2luZXNzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1762783121),
('Mhoq8n0N3bMPQ1hIvYgJ2B7Z3kJBQpDpUXVGFJHd', NULL, '114.119.140.185', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMjNndXE5bE85T1dwVHFRald6cnBPNnQ0OVVnR09LeEE2OXhkQXJUQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzM6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vc2VydmljZS9tb2JpbGUtcGhvbmUtbWFuYWdlbWVudC1zeXN0ZW0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762796184),
('mmUNWN7Qc0oaYORQeqM0iJNm1ajssnpaR66HrflL', NULL, '163.61.241.104', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOXlRZ1UyZTF0TkV1YnliaFRsMEpVeWl0RDdQaUZVd2ZPV1VQVjFLSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbS9nYWxsZXJ5Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1762840888),
('N2j72kBOjZgQNttvGms8CrfQR5ihIqyBaCLaHj2l', NULL, '114.119.151.170', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib01FbjVhSmQ0Q24xRDdOZldBbUlpVndxZ1JlSE9heGs3SWFVRFZvUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbS9vbmxpbmUtcGF5bWVudCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762801228),
('n5bSNaCNafXioi2Qz8aD1o6QcOirLMeFniJ340KO', NULL, '93.123.109.214', 'Opera/7.51 (Windows NT 5.1; U) [en]', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRG4wMDVzZjdIVjVpT3ZldmV4eFhaMlJ1WG0wUHIzZWVkdFFlYTc0aCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762815561),
('n5rOddoJewuBWlEbvRelpxtUMuxHhRG5HYVsoJJk', NULL, '77.75.77.36', 'Mozilla/5.0 (compatible; SeznamBot/4.0; +https://o-seznam.cz/napoveda/vyhledavani/en/seznambot-crawler/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTmJESEl1WGJacVJsZXRXNXBWRlBQaVJ3dWRtelNhelJxMDFBRkp5VCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDk6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbS9zZXJ2aWNlL2l0LXN1cHBvcnQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762807675),
('n5v59SbgaHil48CXSxt8TpqQf9GbzLXehYD57OPc', NULL, '184.105.10.56', 'python-urllib3/2.2.3', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVmttZFNuaTV3TUd3R1VaUzg2QlEzaHhqS3pTcEUxc0JLemNqMkluVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762776744),
('NEs5HRJ3PKOJhVisny3KElsZXq5xjSzpsLbFx9gr', NULL, '163.61.241.104', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNkZQM040VzdQd2ZwNEcxc3dZZ3A2SGNScm03RGlyamhoc3B4R1U2ciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTI6ImxvZ2luX2FkbWluXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1762763890),
('NGUSw33PdBQIgRjwLOGrutOSPKvEB5KrQwNaPRZL', NULL, '17.22.237.196', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUDlIWjhtek1xTnRCeGRkRkp6Wk81eDI1d2x6U01yZkFXV01UUml6USI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjY6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vcGFnZS9idXNpbmVzcy1tYW5hZ2VtZW50LXN5c3RlbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762766015),
('nHrTi0bA9d7WNAu377dafh7GXOuwVwgbyttxoqRT', NULL, '114.119.155.36', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNkJwSVVkQlNDdVBUT1M3bDVuT25CQmJ3eXpMNVI3T04zb2xYMkVRUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzI6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vc2VydmljZS9zb2Z0d2FyZS1kZXZlbG9wbWVudC1zZXJ2aWNlcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762787243),
('nPIjU7KJDsqWukD78m4BYiTQv8OCi6nzHhIGsIno', NULL, '51.68.236.68', 'Mozilla/5.0 (compatible; MJ12bot/v2.0.4; http://mj12bot.com/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ2VlNkFJazhnZUZqbW51TWQ3eGdDOUVPb3F2Uk42TlhBR3JxeEJmNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762807997),
('NUdvll1RUOG1FBzHOvrBVRWGtPfw5grB8fsdJW6U', NULL, '162.120.184.5', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibDRJeWZURlc4dUNkakZLZVpZRGxIYnhXUEFlbllIYzZScEVUenhBeCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762776770),
('o0f3fv51xnlhJ0ojJmEPsr1NfDg5E13C68YpILgr', NULL, '66.249.73.64', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.7390.122 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicHk5Q29DQVBTSnN3TkpzUlVyV1A1emlxMUExOGpoSG9ySzJRVkNabiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzM6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vc2VydmljZS9tb2JpbGUtcGhvbmUtbWFuYWdlbWVudC1zeXN0ZW0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762790750),
('O8R9JCZRDRvey9NpWqGH2LgThjtAEBRYiJtTmYFX', NULL, '185.191.171.7', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUWNuWFp4M2FRRFNnN0hidlNrSnI1WW5YbkkzRWR2T05zT0dkcnA3cSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Nzk6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbS9zZXJ2aWNlL2FyY2hpdGVjdHVyYWwtYW5kLWVuZ2luZWVyaW5nLW1hbmFnZW1lbnQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762817565),
('ONXACwXfdHkwmQLcAGFjQiAEkUOlgxzNU7i8FEiY', NULL, '66.249.73.65', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.7390.122 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibjdMMUc2ZjFLVGtJTDB5YzNra01VU0RIZXN2NlV5T2xzSzZYRDRmVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTU6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vc2VydmljZS9pY3Qtc2VydmljZXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762790703),
('P2RfDMEl1VfaMyG63GkuTFRMKQGepL0ThTnPoEMV', NULL, '185.191.171.3', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiclZYVTVsYWkwNzhkOVd1MVE1V2pWRlRyNGpmQXVkY3lDZHhnOG0wTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTU6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vc2VydmljZS9jb25zdHJ1Y3Rpb24iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762841006),
('P5jr5MCbuFTeDtMuHwLbjok4fG1phWefnb2DdZb0', NULL, '66.249.74.133', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.7390.122 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZWhTa0U5OFVwTVl0T0JoeXFibnZSMDhBdkF0aGw1elQ4czl4QXZTNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjQ6Imh0dHBzOi8vbWFpbC5nYXRld2F5YXV0b21hdGlvbnMuY29tL3NlcnZpY2UvdHJhaW5pbmctY29uc3VsdGFuY3kiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762765419),
('pL8dKOyrgksIg9QWw7yFfNNdAa1Uk2jquPvNwDmO', NULL, '23.81.61.225', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicXp4RU5MbVZ2a2NaNU1aYlFaenIxU3VUQ2VOZjZ3TW12ckNWRVl5eCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vY2xpZW50cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762799099),
('PoSJQQ4ssqfgw5j57RSb7L0tFVHyLRoTg9cj0mGD', NULL, '114.119.142.131', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidzFpN1A2aGtPWGZ5ZHB4anpjWW51cTZFR2dBVUd5aUhKTk90UE94VSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODI6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbS9zZXJ2aWNlL2FyY2hpdGVjdHVyYWwtZW5naW5lZXJpbmctbWFuYWdlbWVudC1zeXN0ZW0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762773485),
('PR5rXaRGfbDqxXEuXEsaBEXaeNsH0vlpU5Hze012', NULL, '35.231.203.156', 'Mozilla/5.0 (Linux; Android 13; SAMSUNG SM-S918B) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/24.0 Chrome/120.0.6099.144 Mobile Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiWkxXWm1OOU9uSVJ3eEZkODFxcEN3dWFVaXBJdmVQNWZEbEtuSEphNiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1762795621),
('pUxmBHXc097ZYM1ovNwwlcg2tJJ5UsDGLQYviTuU', NULL, '154.51.142.2', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUU5rczd5MWg3eVVuVFFhN25nd21GVFU1OTZibGI0bVBDRWh6UXg0SyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzE6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbS9zZXJ2aWNlL3Byb2N1cmVtZW50LWludmVudG9yeS1tYW5hZ2VtZW50Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1762796762),
('pV091Ne6eKVfLtqBF7BFnIxpAFvn8qfdm67Eb1X5', NULL, '74.7.227.200', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; GPTBot/1.2; +https://openai.com/gptbot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYnh1UVNvOXRHWDR4WnBrOGJBQW8zaVJVWmxheDRJMXpVVmt1aDh4UyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTU6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vc2VydmljZS9jb25zdHJ1Y3Rpb24iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762780272),
('pVgaP6cQMxNMyPWqSuck0BDrjbdMicibZop4K6Ns', NULL, '114.119.130.31', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUVhaRGdvWFJVa3dselRKRzRESFlONnhkdGhXdktnbXlqTUl3N2lJdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzM6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbS9zZXJ2aWNlL2N1c3RvbWVyLXNlcnZpY2UtbWFuYWdlbWVudC1zeXN0ZW0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762787407),
('pZOVthh1E1vmzvQr3fSRpWVjsSOgQpVgMPvxvOZo', NULL, '34.73.194.125', 'Mozilla/5.0 (compatible; CMS-Checker/1.0; +https://example.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiU3lzNEMwVHFwQ1VISHdMemRPelc0SXdYTnlGSzdxNFFwWkJpelR3VyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762785009),
('Q2xeB3iWfTqae8AjhvpsZDHoH032kck5LZ1AycLr', NULL, '69.171.249.4', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ1o3NTI4aVRVNU9CNDl3MEc1SmRoZVp6aVdGcXVpTzh5Z1B5aEREUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762777155),
('Q6teaz5gBTmvIkY9MVJXbwEklxVtHqZSnaSgzwkW', NULL, '114.119.155.36', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTVBleDJnZXE1cjBMdlFmMDVKR1E1NUZ2Z01KNEI0UXBhQzlxaVk0SiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Njk6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbS9wYWdlL2ludGVncmF0ZWQtYWxsLWJ1c2luZXNzLXByb2Nlc3NlcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762798009);
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Q7WpS7dEn0ckCnYMaDnPJoz9lTBwJhtmepX4EYXD', NULL, '34.23.74.71', 'Mozilla/5.0 (compatible; CMS-Checker/1.0; +https://example.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZDhkcXNad3Y1bVpxV2JqWDdnZ0oxNGUzbGFhYlk1aVZLOWo4YXc3SSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762789478),
('qBTareoU6m0AKs9VOARD3SIpgtMHKp1E0CvrrCnA', NULL, '143.110.213.212', 'Mozilla/5.0 (X11; Linux x86_64; rv:139.0) Gecko/20100101 Firefox/139.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMTlJNHlOT1I3UmtmaERTdHYyc08wNWxiY0xBQ092OEdYeWVSRThyTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762777745),
('qN3c1KjchZoBTX5uxYG3Hm9Yf0zoINA7Th1m1eS3', NULL, '185.191.171.11', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieXVUOVlCNTY1SFcya0ZFNW9OZXdVWWp3VWRiZ0pMUE1UbDZ5dlJIViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzM6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbS9zZXJ2aWNlL3NhbGVzLXRlbGUtc2FsZXMtbWFuYWdlbWVudC1zeXN0ZW0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762839640),
('Qn88dC1HKWkJv39rIVSwc2ZaNCmpzxBlg6zq8RPi', NULL, '69.171.249.3', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWWtDeEpLRGVwbFVWbUhCT3J0VWJBT255WUFFdFY0S2o3cmx2dUN2OCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762777155),
('rbRrmffi5iNAZIXFeqvlVdZvvi5VWTfvohKOzF1B', NULL, '64.189.230.119', 'Mozilla/5.0 (iPhone; CPU iPhone OS 18_7 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/26.0.1 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRWVXdGNKYWprM0ZjOXp0WDRJbllKVkpVa3FhNGo1c2J3c3MwYUNMMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762792289),
('rbtcSUKk38P4IkClbcAjllDRkE4EOSpQuHmkzirL', NULL, '66.249.73.65', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.7390.122 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoid2p4UlFBMU5tUW9RWkxTUTNHTHlSMFlxSEVkQjRxZTZERFRqZlJ2YiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vZ2FsbGVyeSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762797771),
('rekriXB9YlqCV4WXvAK69yCarAN8zL0ogYp9r2Dw', NULL, '17.246.19.22', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVllHUWtzZWVTeHRETDk4TVhqVVpwdnhiTW9MUzBkRFk2ZVdOeE4zOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzM6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vcGFnZS9pbnRlZ3JhdGVkLWFsbC1idXNpbmVzcy1wcm9jZXNzZXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762777815),
('RWC6dq1ODPNM83D9AzyuY8Jx5Ih25EnKRQmZQ3WX', NULL, '114.119.151.170', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieDhTZ0NSYVlFUnA5SUlwWEx4eE1JZ2hqY3lCdFl2Tm9vVWtJT25QUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODQ6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vc2VydmljZS9tb2JpbGUtYXBwLXdlYnNpdGUtZGVzaWduLWFuZC1kZXZlbG9wbWVudCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762784299),
('SAGEA6NOXj99RPRUUlqZTbb3uOUyxPVqXdhwgXDT', NULL, '114.119.151.170', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieFZzV01EZTJ3Rm1DRkRsY01BNWFFaDE1bWJqRlhtcjdMaTNPekZGdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzU6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vc2VydmljZS9wcm9jdXJlbWVudC1pbnZlbnRvcnktbWFuYWdlbWVudCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762816063),
('SakguCUKXd1L08Ghl166T13IbJH88xmwtavMMKkb', NULL, '43.153.107.22', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibXR1eFQ1aVZEckFyZzVhYTBuem9HT0pubDlOOXBINFhOSHRyU3JKMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762795074),
('scnwytEvNP59OOojecntSFpqHUvrTOOmFMcgcesX', NULL, '154.51.142.2', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRGlGRXNuZzJHS3dkNXZDNzVWTHpaNHk4UzNreFBLeFdTbkZPdTdoTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjA6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbS9zZXJ2aWNlL2l0ZXMtc3VwcG9ydC1zZXJ2aWNlcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762796762),
('skx2QEGmjsmD8PbQqc0eOkzEVTWOfwF7KyYfBD8N', NULL, '17.22.253.123', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoienNtcmtxYVRoNmVHcm1KblUzN0dNRGNZaGEyQnFNcnRmMEF5R0lYaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762762328),
('SLE8erYARpnsrbk49JN7sfvuj6Ee6LFirbHQYjcM', NULL, '43.173.179.214', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.6478.114 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUGVvVVlUQ3pEaTlCMDdWZVhyOU9rdHBlNUJ5QkJYeEVBT1ZoSEhkOSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762791727),
('T4rPrRJztWyd3CVs7t6X1Z9UOyZrgq5ci6zMsbQk', NULL, '142.44.220.169', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVXRJQnI3SVNPT2N3cFduWWVqOXk0OVV3ZEdnZEJpRm13eEVBMVBYYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzM6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vcGFnZS9pbnRlZ3JhdGVkLWFsbC1idXNpbmVzcy1wcm9jZXNzZXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762760616),
('thowIadH5xDUp4qIV7JCW5u31uhOfgbNUnWEHDbY', NULL, '154.51.142.2', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMWJoa1dpV3ozcWhpdXVnZ1ZqUEJBUTRPY0ZaOW5CbzlnV0ljeG1vYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzM6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbS9zZXJ2aWNlL3NhbGVzLXRlbGUtc2FsZXMtbWFuYWdlbWVudC1zeXN0ZW0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762796762),
('tMR21gTkClkoBfBwxfsy08Bvxd6BVBJVH8hLATOa', NULL, '114.119.133.182', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMGhBTGZoMXhRWHo4MzFidmtvVTIxVFVHOXFXYXVPUzVMalJkZmIwbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTE6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbS9zZXJ2aWNlL2NvbnN0cnVjdGlvbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762763186),
('Trva9GqXAjDX5FnUrkMP354L6hVB3M7ErXYGOPrU', NULL, '142.248.80.2', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4859.172 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOTZ4OThyeWpMR09TNEE1b2lpSVBUcGc4TXpLdjFIVWJpbmZXZWNVeCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762807996),
('TTWfA3tOZAYo95mMAcC5fMNAfbrgvXlhtYKr1dPD', NULL, '35.204.35.250', 'Mozilla/5.0 (compatible; CMS-Checker/1.0; +https://example.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ2xXREc5MFN1SDh1VkViWk1SUWhub0pYNTgzNm1wT3lZSlFJVUhZQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHBzOi8vbWFpbC5nYXRld2F5YXV0b21hdGlvbnMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1762781187),
('TwqV4ZElZB9qX28VRGILW3JHL7eHhE76kXkncx2q', NULL, '69.171.249.2', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidlJkT3pPd01rSFRHR0pSQ2plUUxZSXhZYjNGcEdraEd3Z0RQOEVuUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762777154),
('twUsDmFoQtxy8hF8qbm0HYHROCdzORIp4p1BgDU6', NULL, '114.119.131.203', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicm5mSVQ0QXdVY1owQTFHclVJazJnRUxBOUh0bzJ6SWNORFZSbmcxdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6OTE6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vc2VydmljZS9odW1hbi1yZXNvdXJjZS1hZG1pbmlzdHJhdGlvbi1wYXlyb2xsLW1hbmFnZW1lbnQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762776617),
('u6hTCca2tf2WF0FlOcIyGKtJaK2Du9JAGRhQz0SO', NULL, '154.51.142.2', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaERTc0FVWERQWWFHU2Q4dzFMUTF6eDBCMjd4OEdreDR6SW51bXpnRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Njg6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbS9zZXJ2aWNlL3NvZnR3YXJlLWRldmVsb3BtZW50LXNlcnZpY2VzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1762796762),
('UEJphhneGQ6z8HdwGaJAayFcIdB5TBcErZnY4YEQ', NULL, '154.51.142.2', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRjZnYWgxWGRveUJJalRCUGNFb2JlY2pFcUQybDdRdVFmMU0zYlVlSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbS9jb250YWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1762796761),
('UJnnHE9CPLY6GV57KSieWn2415xLFZVm9hT18d8I', NULL, '148.113.130.173', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNXlsR0djdjdwdUFPNFRMOWpWQlRjNUxDY0RRWHh5S29hREhLYXl2MyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Njg6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbS9zZXJ2aWNlL3RyYWluaW5nLWNvbnN1bHRhbmN5LXNlcnZpY2VzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1762795713),
('UkARb26LOVx7B5r5gmiHAp3pIglUvuJFF9pEITWP', NULL, '35.230.168.161', 'Mozilla/5.0 (Windows NT 11.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.6367.62 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiNko0ekZFVTdpb2JJejlrN1VFQzRoMkJOanJDY0RQczZFamFsaWRJUSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1762802077),
('UO8u0izFdkPNc3cvZvEOLzdfTRLPvx94a899D6mN', NULL, '85.208.96.201', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMnNreW1yWk5ZRmJqdHVaZXk4OFBtRHYybEpRMXA3czAwMTlpSFQ4QSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbS9zZXJ2aWNlL2ljdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762814196),
('Uwv1DptedJxUXNueICtYXiVXLqfGk7kBEzeEq8A4', NULL, '154.51.142.2', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY05ZZXJGWFlsUjF4RzIxUWdCUlpmUXZ0UGhiTDFiaGRSdjNiM1JJcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODI6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbS9zZXJ2aWNlL2FyY2hpdGVjdHVyYWwtZW5naW5lZXJpbmctbWFuYWdlbWVudC1zeXN0ZW0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762796762),
('v7dGxxBhRQlzBJ3nd9tGCwCHVkoGnFB7loEvYnBl', NULL, '154.51.142.2', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNXEzMGtqTTdqVGx2b3A0a01vOWs0ZGRublY4c3p0b2pPcjYzZThuSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjQ6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbS9zZXJ2aWNlL3ZlaGljbGUtbWFuYWdlbWVudC1zeXN0ZW0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762796762),
('VAv7aTrt8vPfv7hlwTvoXv60yhFi4KO02Daqti9L', NULL, '34.158.51.8', 'Mozilla/5.0 (Linux; Android 5.1.1; SM-J111F)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQWhTRzdjbDhaOVNBOWxMUUhXcTlWVzlyalR2b2dFTUlqS3gwSmY3OCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762788243),
('Veij5KdITC63QO1VU3C4yHZeC0ehzX5xFCVxFl8K', NULL, '114.119.151.170', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiV05jTFFnblozeDVwWmZkS2lZT1loOHdkRmZzWWREVTFibVU0dzRPYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjY6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbS9zZXJ2aWNlL2VkdWNhdGlvbi1tYW5hZ2VtZW50LXN5c3RlbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762775638),
('Vej4d1oHmgmi23OpwHSbEvXikv1R0PWi8C6tRF4o', NULL, '4.151.241.247', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko); compatible; ChatGPT-User/1.0; +https://openai.com/bot', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM3RuREFtS2ZiZFdpZHNsUG10OTlUZ2d5d1hrNG9hYVk1VlQ4MFA0WSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Nzc6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vc2VydmljZS9zYWxlcy10ZWxlLXNhbGVzLW1hbmFnZW1lbnQtc3lzdGVtIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1762780143),
('vmdTb7FYksO2e6VSlRqxUFMvApLh7T8gNPQIJo99', NULL, '154.51.142.2', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoid3BQZmVLaWhOeFRzQ3N5V3VoOTcxUDluV0JJSzFvMTFRWVZmeTU5TiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Njg6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbS9zZXJ2aWNlL3RyYWluaW5nLWNvbnN1bHRhbmN5LXNlcnZpY2VzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1762796762),
('VZ8bKfey2fVwPK9ScWWJqLN2pf3q7CCCewFp2Xqk', NULL, '163.61.241.104', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiazlzSXJEVTBrbzh3cVFuY0k2MmlydklDbzdlQzU1Ym40cHFvaW9kTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762841022),
('wTHwIb4cPu8v65PMdAl34bYVycBUEYxrm3hBtZKh', NULL, '121.229.156.80', 'Sogou web spider/4.0(+http://www.sogou.com/docs/help/webmasters.htm#07)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ3VBdEduUG56MEtPcFUwdE53dVRmMnBvRzBmaHozd3lQV2VhWElMMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762786131),
('X7OJt9PCWJIFeT5FX9chyOkZ48L4W37O28B0RNQQ', NULL, '114.119.151.170', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMU5NdndSZ1RiRWNBb1IzOUZHVjUwOFR5Rm5uTWFDT2NIa3liNndMaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Nzk6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vc2VydmljZS9wcm9jdXJlbWVudC1hbmQtaW52ZW50b3J5LW1hbmFnZW1lbnQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762818127),
('xBL8DNrD0QDjRPae8eIaI5X6QcfTu8aqH4Jm1kcQ', NULL, '49.43.234.90', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiblFYYVlYU2xLN1ZnbjhQRjBvR05WQTlnRThXVDlhQzd2a3lBS29mRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbS9jb250YWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1762775294),
('xjG88p3W9o7Sz3TgH3Onu2H3m6YAA49GLMMbOihx', NULL, '116.179.32.31', 'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ1hqcTdQTlprQlVFOWJYYzNIc0ROdmYxN2tRZWJpTmU2bUxDS2dPVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762788159),
('Xmn1UzVyrQDQhwTu7AiMUW7ekxuiTLmbkeVXy8g0', NULL, '114.119.131.203', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiejVrdmV4cXgwOUtWVzUxSGc0RkI1TnZzZkcwUVdJbUxBbWhaakozYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjE6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbS9zZXJ2aWNlL2Nsb3VkLWhvc3Rpbmctc2VydmljZXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1762817180),
('xwzOL1aMludynbCbJH52ElVyJ5IV4XVDYHsritLs', NULL, '112.86.225.66', 'Sogou web spider/4.0(+http://www.sogou.com/docs/help/webmasters.htm#07)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib0pJNG5Ca1k3OGRFbjNUaFdJdUZlMXlTY1BDTUMwYUpSbkRmRGdHVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762803989),
('y7KTtuFC4J2n9giI9rQerNnvsxuydUUZo6ptsf6U', NULL, '35.86.247.21', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRXhmR3pPRkd4NzdBdjJNYzZBeEpNQlpPTnliOU9Ub3Jjb2hyZzRpdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762819997),
('yoFjPxnuazFKp6v35OwkdbqNY2Hz2xpSNQBQFMlF', NULL, '51.222.168.68', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYnRLbVAwM25QREF5ckFaa0ZqMmtwUEZ1OG1tc05HTEc3MDFYWjN0USI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjY6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vcGFnZS9idXNpbmVzcy1tYW5hZ2VtZW50LXN5c3RlbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762786120),
('z1BpNsUlKo7bmYORorD3jRvRDSAX110znwsuaAlU', NULL, '54.39.6.213', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUE0yYmVnc1J3cEx0dTczTTQzNmo1SmpNT2F0OWtsUzZJTnpUaFFmMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Njg6Imh0dHBzOi8vd3d3LmdhdGV3YXlhdXRvbWF0aW9ucy5jb20vcGFnZS9yaWdodC1kZWNpc2lvbi1vbi1yaWdodC10aW1lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1762805158),
('ziJrU2ApEthVte1MZS376DbUojGt7xTKV0qMsWN6', NULL, '23.95.23.125', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUjVwVzZzZVAyVFUzRXZMSGR5VVYweW1PdEZ0Qk0zQVZqWXRZaFhETiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1762796750),
('zLA2fl7MvBEnqOzxpIk34OglqZR9dUC7SNPby8VQ', NULL, '154.51.142.2', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.81 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidEVIcDBqVVk4QVB4eHdRU05HR1k1Y1JScENSSXIxUTVjeUtwdTFKOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjI6Imh0dHBzOi8vZ2F0ZXdheWF1dG9tYXRpb25zLmNvbS9wYWdlL2J1c2luZXNzLW1hbmFnZW1lbnQtc3lzdGVtIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1762796782);

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebook` text NOT NULL,
  `instagram` text NOT NULL,
  `twitter` text NOT NULL,
  `linkedin` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `facebook`, `instagram`, `twitter`, `linkedin`, `created_at`, `updated_at`) VALUES
(1, 'https://www.facebook.com/erpgateway', 'https://www.instagram.com/gatewayautomationltd/', 'https://x.com/GatewayAutomat1', 'https://www.linkedin.com/in/gateway-automation-ltd-ab2156210', '2025-11-02 23:12:00', '2025-11-02 23:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `success_stories`
--

CREATE TABLE `success_stories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text NOT NULL,
  `heading` text NOT NULL,
  `content` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inactive, 1=active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `success_stories`
--

INSERT INTO `success_stories` (`id`, `image`, `heading`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'uploads/backend/success-stories-images/1762148010_69083eaaf03a1_healthcare_network_case.png', 'Healthcare Network', 'Successfully deployed a comprehensive ERP system for managing patient records and billing processes, streamlining administrative tasks and reducing manual workload by <strong>50%</strong>. This implementation not only improved operational efficiency but also enhanced compliance with healthcare regulations, ensuring accurate and secure handling of sensitive patient data.', 1, '2025-11-02 23:33:30', '2025-11-02 23:33:30'),
(2, 'uploads/backend/success-stories-images/1762148111_69083f0f43a83_manufacturing_plant_case.png', 'Manufacturing Plant', 'With our ERP solution, the manufacturing plant gained <strong>real-time visibility into inventory levels</strong> and automated stock management, preventing overstocking and material shortages. The system also streamlined <strong>maintenance scheduling</strong>, reducing unexpected downtime.  Together, these improvements enabled the plant to operate with greater efficiency, driving a remarkable <strong>30% increase in overall productivity</strong> within the first year.', 1, '2025-11-02 23:35:11', '2025-11-10 00:20:11'),
(3, 'uploads/backend/success-stories-images/1762148176_69083f509e675_construction_firm_case.png', 'Construction', 'By implementing our ERP system, the construction firm was able to <strong>streamline procurement processes</strong> and establish real-time <strong>project tracking</strong>. This not only eliminated delays caused by manual coordination but also improved vendor management and budget control. As a result, the company achieved a significant <strong>22% reduction in operational costs</strong> within the first year, while ensuring projects were delivered on time and with higher efficiency.', 1, '2025-11-02 23:36:16', '2025-11-10 00:20:12');

-- --------------------------------------------------------

--
-- Table structure for table `technologies`
--

CREATE TABLE `technologies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tech_logo` text NOT NULL,
  `alt_txt` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inactive, 1=active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `technologies`
--

INSERT INTO `technologies` (`id`, `tech_logo`, `alt_txt`, `status`, `created_at`, `updated_at`) VALUES
(1, 'uploads/backend/technology-we-use/1762148296_69083fc81d1f7_bootstrap.png', 'Bootstrap', 1, '2025-11-02 23:38:16', '2025-11-02 23:38:16'),
(2, 'uploads/backend/technology-we-use/1762148314_69083fdabe3b5_typescript.png', 'Typesctipt', 1, '2025-11-02 23:38:34', '2025-11-02 23:38:34'),
(3, 'uploads/backend/technology-we-use/1762148445_6908405d1497c_react.png', 'React', 1, '2025-11-02 23:40:45', '2025-11-02 23:40:45'),
(4, 'uploads/backend/technology-we-use/1762148462_6908406e258d8_nodejs.png', 'Node Js', 1, '2025-11-02 23:41:02', '2025-11-02 23:41:09'),
(5, 'uploads/backend/technology-we-use/1762148491_6908408b833cf_wordpress.png', 'Wordpress', 1, '2025-11-02 23:41:31', '2025-11-02 23:41:31'),
(6, 'uploads/backend/technology-we-use/1762148505_690840993e93c_js.png', 'Javascript', 1, '2025-11-02 23:41:45', '2025-11-02 23:41:45'),
(7, 'uploads/backend/technology-we-use/1762148518_690840a6cac1e_css.png', 'CSS', 1, '2025-11-02 23:41:58', '2025-11-02 23:41:58'),
(8, 'uploads/backend/technology-we-use/1762148527_690840afb7df9_html.png', 'HTML', 1, '2025-11-02 23:42:07', '2025-11-02 23:42:07'),
(9, 'uploads/backend/technology-we-use/1762148538_690840ba93849_mysql.png', 'My SQL', 1, '2025-11-02 23:42:18', '2025-11-02 23:42:30'),
(10, 'uploads/backend/technology-we-use/1762148563_690840d3307b5_laravel.png', 'Laravel', 1, '2025-11-02 23:42:43', '2025-11-02 23:42:43'),
(11, 'uploads/backend/technology-we-use/1762148572_690840dc50216_php.png', 'php', 1, '2025-11-02 23:42:52', '2025-11-02 23:42:52'),
(12, 'uploads/backend/technology-we-use/1762148587_690840eb3e963_apple.png', 'Apple', 1, '2025-11-02 23:43:07', '2025-11-02 23:43:07'),
(13, 'uploads/backend/technology-we-use/1762148598_690840f668740_android.png', 'Android', 1, '2025-11-02 23:43:18', '2025-11-02 23:43:18'),
(14, 'uploads/backend/technology-we-use/1762148613_690841059307e_windows.png', 'Windows', 1, '2025-11-02 23:43:33', '2025-11-02 23:43:33'),
(15, 'uploads/backend/technology-we-use/1762148626_690841126b806_java.png', 'Java', 1, '2025-11-02 23:43:46', '2025-11-02 23:43:46'),
(16, 'uploads/backend/technology-we-use/1762148637_6908411d73bd9_sql.png', 'sql', 1, '2025-11-02 23:43:57', '2025-11-02 23:43:57'),
(17, 'uploads/backend/technology-we-use/1762148655_6908412f011e9_server.png', 'Server', 1, '2025-11-02 23:44:15', '2025-11-02 23:44:15'),
(18, 'uploads/backend/technology-we-use/1762148666_6908413a930e0_linux.png', 'Linux', 1, '2025-11-02 23:44:26', '2025-11-02 23:44:26'),
(19, 'uploads/backend/technology-we-use/1762148683_6908414bd12f6_oracle-fusion.png', 'Oracle fusion', 1, '2025-11-02 23:44:43', '2025-11-02 23:44:43'),
(20, 'uploads/backend/technology-we-use/1762148703_6908415fa7213_oracle-reports.jpg', 'Oracle reports', 1, '2025-11-02 23:45:03', '2025-11-02 23:45:03'),
(21, 'uploads/backend/technology-we-use/1762148712_69084168cf432_pl-sql.png', 'PL SQL', 1, '2025-11-02 23:45:12', '2025-11-02 23:45:12'),
(22, 'uploads/backend/technology-we-use/1762148789_690841b5d64c2_oracle.png', 'Oracle db', 1, '2025-11-02 23:46:29', '2025-11-02 23:46:29'),
(23, 'uploads/backend/technology-we-use/1762148803_690841c304b1d_oracle-db.png', 'Oracle', 1, '2025-11-02 23:46:43', '2025-11-02 23:46:43'),
(24, 'uploads/backend/technology-we-use/1762148819_690841d38efe2_apex.png', 'Apex', 1, '2025-11-02 23:46:59', '2025-11-02 23:46:59'),
(25, 'uploads/backend/technology-we-use/1762148839_690841e7dc32b_oracle-1.png', 'Oracle', 1, '2025-11-02 23:47:19', '2025-11-02 23:47:19');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_logo` text NOT NULL,
  `alt_txt` text NOT NULL,
  `client_name` text NOT NULL,
  `client_designation` text NOT NULL,
  `testimonial_content` longtext NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=inactive, 1=active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `company_logo`, `alt_txt`, `client_name`, `client_designation`, `testimonial_content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'uploads/backend/testimonial-company-logo/1762148927_6908423f1a959_mazidsons.jpg', 'Mazidsons logo', 'Md. Jourgisur Rahaman', 'Executive Director at Mazidsons Construction Limited', 'Partnering with Gateway Automation Limited has been a pivotal decision for Masidsons Construction Limited. Their Architectural & Engineering Management System has streamlined our project management processes, improved coordination between teams, and enhanced our overall project execution. The team’s expertise and dedication to customizing their solutions to fit our unique needs have made a significant impact on our operations. Their commitment to excellence and innovative approach is truly commendable. We wholeheartedly recommend their services to others in the industry.', 1, '2025-11-02 23:48:47', '2025-11-02 23:48:47'),
(2, 'uploads/backend/testimonial-company-logo/1762148977_69084271787bb_RI.jpg', 'Royal gold international logo', 'Alak Kumar Saha', 'Managing Director at Royal Gold Bangladesh Limited', 'Working with Gateway Automation Limited has been a game-changer for Royal Gold Bangladesh Limited. Their Trading Management System transformed our operations by streamlining inventory management, enhancing order processing, and providing real-time insights into our trading activities. The team’s expertise and commitment to delivering a tailored solution have significantly improved our efficiency and accuracy. We couldn\'t be more satisfied with the results!', 1, '2025-11-02 23:49:37', '2025-11-02 23:49:37'),
(3, 'uploads/backend/testimonial-company-logo/1762149035_690842ab4bd69_ramkrisna.jpg', 'Ramakrishna math logo', 'Swami Vibhatmananda', 'Secretary at Ramakrishna Mission, Dinajpur', 'Gateway Accounts & Finance Management System at Ramakrishna Ashrama & Ramakrishana Mission, Dinajpur, Bangladesh is working smoothly and we are very much happy to use the software. Best wishes to Gateway Automation Limited.', 1, '2025-11-02 23:50:35', '2025-11-02 23:50:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `brochures`
--
ALTER TABLE `brochures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carousels`
--
ALTER TABLE `carousels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `carousels_slug_unique` (`slug`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `served_industries`
--
ALTER TABLE `served_industries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_slug_unique` (`slug`) USING HASH;

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `success_stories`
--
ALTER TABLE `success_stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technologies`
--
ALTER TABLE `technologies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `carousels`
--
ALTER TABLE `carousels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `served_industries`
--
ALTER TABLE `served_industries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `success_stories`
--
ALTER TABLE `success_stories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `technologies`
--
ALTER TABLE `technologies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
