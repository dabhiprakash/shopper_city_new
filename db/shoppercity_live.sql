-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2024 at 08:01 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppercity_live`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `created_by` date NOT NULL,
  `modified_by` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`, `image`, `created_by`, `modified_by`) VALUES
(50, 'test1 123123', NULL, '2024-03-10', '2024-03-10');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `parent` int(5) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `created_by` date NOT NULL,
  `modified_by` date DEFAULT NULL,
  `arrange` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `parent`, `description`, `image`, `created_by`, `modified_by`, `arrange`) VALUES
(9, 'Men\'s Wear', 12, 'test', 'Shopercity-9.jpg', '2020-09-23', '2024-02-19', NULL),
(10, 'Women\'s Wear', 1, '', 'Shopercity-10.jpeg', '2020-09-23', '2020-12-17', NULL),
(12, 'Kids Wear', 1, '', 'Shopercity-12.jpg', '2020-09-24', '2020-12-17', NULL),
(13, 'Traditional', 1, '', 'Shopercity-13.jpg', '2020-09-24', '2020-12-17', NULL),
(15, 'Footwear', 1, '', 'Shopercity-15.jpg', '2020-09-24', '2020-12-17', NULL),
(16, 'Accessories', 1, '', 'Shopercity-16.jpg', '2020-09-24', '2020-12-17', NULL),
(17, 'Bag & Purse', 1, '', 'Shopercity-17.jpg', '2020-09-24', '2020-12-17', NULL),
(18, 'Imitation & Jewellery', 1, '', 'Shopercity-18.jpg', '2020-09-24', '2020-12-17', NULL),
(19, 'Furniture & Home Decoration', 3, '', 'Shopercity-19.jpeg', '2020-09-24', '2020-12-17', NULL),
(20, 'Electronic Appliances', 3, '', 'Shopercity-20.jpg', '2020-09-24', '2020-12-17', NULL),
(21, 'Kitchenwear', 3, '', 'Shopercity-21.jpg', '2020-09-24', '2020-12-17', NULL),
(22, 'Mobile & Accessories', 3, '', 'Shopercity-22.jpeg', '2020-09-24', '2020-12-17', NULL),
(23, 'Laptops', 3, '', 'Shopercity-23.jpeg', '2020-09-24', '2020-12-17', NULL),
(26, 'Toys & Books', 6, '', 'Shopercity-26.jpg', '2020-09-24', '2020-12-17', NULL),
(27, 'Food & Beverage', 6, '', 'Shopercity-27.jpg', '2020-09-24', '2020-12-17', NULL),
(28, 'Sport Products', 6, '', 'Shopercity-28.jpg', '2020-09-24', '2020-12-17', NULL),
(31, 'Service & Offers FLB', 1, '', 'Shopercity-31.jpg', '2020-10-30', '2020-12-17', NULL),
(33, 'Veraval', 32, '', NULL, '2020-12-25', NULL, NULL),
(34, 'Menswear ', 9, 'Menswear ', 'Shopercity-34.jpg', '2024-02-14', NULL, NULL),
(35, 'Prakash', 22, 'test', 'Shopercity-35.jpg', '2024-02-19', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(5) NOT NULL,
  `country_id` int(5) NOT NULL,
  `state_id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_by` date NOT NULL,
  `modified_by` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `country_id`, `state_id`, `name`, `created_by`, `modified_by`) VALUES
(6, 2, 3, 'Veraval', '2020-09-24', NULL),
(7, 2, 3, 'Bhavnagar', '2020-10-16', NULL),
(8, 2, 3, 'Junagadh', '2020-10-19', NULL),
(10, 2, 3, 'Vadodara (Baroda)', '2020-10-19', NULL),
(14, 2, 3, 'Rajkot', '2020-10-19', NULL),
(15, 2, 3, 'Kodinar', '2020-10-19', NULL),
(16, 2, 3, 'Una & Diu', '2020-10-19', NULL),
(17, 2, 3, 'Keshod', '2020-10-19', '2020-10-19'),
(20, 2, 3, 'Ahmedabad', '2020-10-29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_by` date NOT NULL,
  `modified_by` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`, `created_by`, `modified_by`) VALUES
(2, 'India', '2020-09-24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `created_by` date NOT NULL,
  `modified_by` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `category_id` varchar(200) NOT NULL,
  `city_id` int(3) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `price` float(10,2) NOT NULL,
  `sale_price` float(10,2) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `discount_id` int(5) NOT NULL,
  `description` text NOT NULL,
  `short_description` varchar(500) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `created_by` date NOT NULL,
  `modified_by` date DEFAULT NULL,
  `exp_date` date DEFAULT NULL,
  `vendor_id` int(10) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `youtube_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_gallery`
--

CREATE TABLE `product_gallery` (
  `id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `created_by` date NOT NULL,
  `modified_by` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product_gallery`
--

INSERT INTO `product_gallery` (`id`, `product_id`, `image`, `created_by`, `modified_by`) VALUES
(1, 1, 'Shopercity-120200923043318.jpg', '2020-09-23', '0000-00-00'),
(2, 1, 'Shopercity-220200923043318.jpg', '2020-09-23', '0000-00-00'),
(3, 1, 'Shopercity-320200923043318.jpg', '2020-09-23', '0000-00-00'),
(4, 1, 'Shopercity-420200923043318.jpg', '2020-09-23', '0000-00-00'),
(5, 1, 'Shopercity-520200923043318.jpg', '2020-09-23', '0000-00-00'),
(6, 1, 'Shopercity-620200923043318.jpg', '2020-09-23', '0000-00-00'),
(7, 1, 'Shopercity-720200923043318.jpg', '2020-09-23', '0000-00-00'),
(8, 1, 'Shopercity-820200924121223.jpg', '2020-09-24', NULL),
(9, 2, NULL, '2020-09-24', NULL),
(10, 3, NULL, '2020-09-24', NULL),
(18, 8, NULL, '2020-09-25', NULL),
(26, 2, 'Shopercity-2620200926121411.jpg', '2020-09-26', NULL),
(27, 3, 'Shopercity-2720200926121434.jpg', '2020-09-26', NULL),
(32, 8, 'Shopercity-3220200926121637.jpg', '2020-09-26', NULL),
(41, 16, 'Shopercity-4120200927104149.jpg', '2020-09-27', NULL),
(42, 17, 'Shopercity-4220200927104152.jpg', '2020-09-27', NULL),
(43, 18, 'Shopercity-4320200927010442.jpg', '2020-09-27', NULL),
(44, 19, 'Shopercity-4420200927010445.jpg', '2020-09-27', NULL),
(45, 20, 'Shopercity-4520200927014017.jpg', '2020-09-27', NULL),
(46, 21, 'Shopercity-4620200927020429.jpg', '2020-09-27', NULL),
(47, 22, 'Shopercity-4720200928023852.jpg', '2020-09-28', NULL),
(48, 23, 'Shopercity-4820200928025051.jpg', '2020-09-28', NULL),
(53, 26, 'Shopercity-5320200928051205.jpg', '2020-09-28', NULL),
(54, 27, 'Shopercity-5420200928052938.jpg', '2020-09-28', NULL),
(55, 28, 'Shopercity-5520200928053802.jpg', '2020-09-28', NULL),
(56, 29, 'Shopercity-5620200928054748.jpg', '2020-09-28', NULL),
(57, 30, 'Shopercity-5720200928055423.jpg', '2020-09-28', NULL),
(58, 31, 'Shopercity-5820200928060017.jpg', '2020-09-28', NULL),
(59, 32, 'Shopercity-5920200928060418.jpg', '2020-09-28', NULL),
(60, 33, 'Shopercity-6020200928060944.jpg', '2020-09-28', NULL),
(61, 34, 'Shopercity-6120200928061400.jpg', '2020-09-28', NULL),
(62, 35, 'Shopercity-6220200928061911.jpg', '2020-09-28', NULL),
(63, 36, 'Shopercity-6320200928063153.jpg', '2020-09-28', NULL),
(64, 37, 'Shopercity-6420200928063605.jpg', '2020-09-28', NULL),
(65, 38, 'Shopercity-6520200928064138.jpg', '2020-09-28', NULL),
(66, 39, 'Shopercity-6620200928065042.jpg', '2020-09-28', NULL),
(67, 40, 'Shopercity-6720200928065627.jpg', '2020-09-28', NULL),
(68, 41, 'Shopercity-6820200928070411.jpg', '2020-09-28', NULL),
(80, 8, 'Shopercity-8020200928085659.jpg', '2020-09-28', NULL),
(82, 54, NULL, '2020-10-01', NULL),
(83, 55, NULL, '2020-10-01', NULL),
(84, 56, 'Shopercity-8420201004080734.jpg', '2020-10-04', NULL),
(85, 57, 'Shopercity-8520201004100428.jpg', '2020-10-04', NULL),
(86, 58, 'Shopercity-8620201004101253.jpg', '2020-10-04', NULL),
(87, 59, 'Shopercity-8720201004102349.jpg', '2020-10-04', NULL),
(88, 60, 'Shopercity-8820201004103008.jpg', '2020-10-04', NULL),
(89, 61, 'Shopercity-8920201004104738.jpg', '2020-10-04', NULL),
(90, 62, 'Shopercity-9020201004105714.jpg', '2020-10-04', NULL),
(91, 63, 'Shopercity-9120201004110435.jpg', '2020-10-04', NULL),
(92, 64, 'Shopercity-9220201004110837.jpg', '2020-10-04', NULL),
(93, 65, 'Shopercity-9320201004111251.jpg', '2020-10-04', NULL),
(94, 66, 'Shopercity-9420201004111612.jpg', '2020-10-04', NULL),
(95, 67, 'Shopercity-9520201004111926.jpg', '2020-10-04', NULL),
(96, 68, 'Shopercity-9620201004013838.jpg', '2020-10-04', NULL),
(97, 69, 'Shopercity-9720201004015610.jpg', '2020-10-04', NULL),
(98, 70, 'Shopercity-9820201004021127.jpg', '2020-10-04', NULL),
(99, 71, 'Shopercity-9920201004023012.jpg', '2020-10-04', NULL),
(100, 72, 'Shopercity-10020201004031847.jpg', '2020-10-04', NULL),
(101, 73, 'Shopercity-10120201004040527.jpg', '2020-10-04', NULL),
(102, 74, 'Shopercity-10220201004042112.jpg', '2020-10-04', NULL),
(103, 75, 'Shopercity-10320201004043046.jpg', '2020-10-04', NULL),
(104, 68, NULL, '2020-10-05', NULL),
(105, 72, 'Shopercity-10520201005011045.jpg', '2020-10-05', NULL),
(106, 68, NULL, '2020-10-05', NULL),
(107, 69, NULL, '2020-10-05', NULL),
(108, 70, NULL, '2020-10-05', NULL),
(109, 71, NULL, '2020-10-05', NULL),
(110, 72, NULL, '2020-10-05', NULL),
(111, 73, NULL, '2020-10-05', NULL),
(112, 74, NULL, '2020-10-05', NULL),
(113, 75, NULL, '2020-10-05', NULL),
(114, 75, NULL, '2020-10-05', NULL),
(115, 56, NULL, '2020-10-05', NULL),
(116, 57, NULL, '2020-10-05', NULL),
(117, 58, NULL, '2020-10-05', NULL),
(118, 59, NULL, '2020-10-05', NULL),
(119, 60, NULL, '2020-10-05', NULL),
(120, 61, NULL, '2020-10-05', NULL),
(121, 62, NULL, '2020-10-05', NULL),
(122, 63, NULL, '2020-10-05', NULL),
(123, 64, NULL, '2020-10-05', NULL),
(124, 65, NULL, '2020-10-05', NULL),
(125, 66, NULL, '2020-10-05', NULL),
(126, 67, NULL, '2020-10-05', NULL),
(138, 17, NULL, '2020-10-05', NULL),
(139, 19, NULL, '2020-10-05', NULL),
(140, 20, NULL, '2020-10-05', NULL),
(141, 17, NULL, '2020-10-05', NULL),
(142, 2, NULL, '2020-10-05', NULL),
(143, 3, NULL, '2020-10-05', NULL),
(152, 76, NULL, '2020-10-06', NULL),
(153, 77, 'Shopercity-15320201006101807.jpg', '2020-10-06', NULL),
(154, 78, 'Shopercity-15420201006102941.jpg', '2020-10-06', NULL),
(155, 79, 'Shopercity-15520201006103209.jpg', '2020-10-06', NULL),
(156, 80, 'Shopercity-15620201006103503.jpg', '2020-10-06', NULL),
(157, 81, 'Shopercity-15720201006103714.jpg', '2020-10-06', NULL),
(158, 82, 'Shopercity-15820201006103956.jpg', '2020-10-06', NULL),
(159, 83, 'Shopercity-15920201006104151.jpg', '2020-10-06', NULL),
(160, 84, 'Shopercity-16020201006104414.jpg', '2020-10-06', NULL),
(161, 85, 'Shopercity-16120201006104623.jpg', '2020-10-06', NULL),
(162, 86, 'Shopercity-16220201006104902.jpg', '2020-10-06', NULL),
(163, 87, 'Shopercity-16320201006105128.jpg', '2020-10-06', NULL),
(164, 88, 'Shopercity-16420201006105256.jpg', '2020-10-06', NULL),
(165, 89, 'Shopercity-16520201006105408.jpg', '2020-10-06', NULL),
(166, 90, 'Shopercity-16620201006105638.jpg', '2020-10-06', NULL),
(167, 91, 'Shopercity-16720201006105809.jpg', '2020-10-06', NULL),
(168, 92, 'Shopercity-16820201006110047.jpg', '2020-10-06', NULL),
(169, 93, 'Shopercity-16920201006110252.jpg', '2020-10-06', NULL),
(170, 94, 'Shopercity-17020201006110512.jpg', '2020-10-06', NULL),
(171, 95, 'Shopercity-17120201006110800.jpg', '2020-10-06', NULL),
(172, 96, 'Shopercity-17220201006111131.jpg', '2020-10-06', NULL),
(173, 97, 'Shopercity-17320201006114740.jpg', '2020-10-06', NULL),
(174, 98, 'Shopercity-17420201006115200.jpg', '2020-10-06', NULL),
(175, 97, NULL, '2020-10-06', NULL),
(176, 98, NULL, '2020-10-06', NULL),
(177, 99, 'Shopercity-17720201006123512.jpg', '2020-10-06', NULL),
(178, 100, 'Shopercity-17820201006124402.jpg', '2020-10-06', NULL),
(179, 100, 'Shopercity-17920201006124708.jpg', '2020-10-06', NULL),
(180, 101, 'Shopercity-18020201006125500.jpg', '2020-10-06', NULL),
(181, 102, 'Shopercity-18120201006125756.jpg', '2020-10-06', NULL),
(182, 103, 'Shopercity-18220201006010254.jpg', '2020-10-06', NULL),
(183, 104, 'Shopercity-18320201006010608.jpg', '2020-10-06', NULL),
(184, 105, 'Shopercity-18420201006010855.jpg', '2020-10-06', NULL),
(185, 106, 'Shopercity-18520201006011708.jpg', '2020-10-06', NULL),
(186, 107, 'Shopercity-18620201006012931.jpg', '2020-10-06', NULL),
(187, 108, 'Shopercity-18720201006013531.jpg', '2020-10-06', NULL),
(188, 109, 'Shopercity-18820201006013907.jpg', '2020-10-06', NULL),
(189, 110, 'Shopercity-18920201006014153.jpg', '2020-10-06', NULL),
(190, 111, 'Shopercity-19020201006015900.jpg', '2020-10-06', NULL),
(191, 112, 'Shopercity-19120201006020413.jpg', '2020-10-06', NULL),
(192, 113, 'Shopercity-19220201006020701.jpg', '2020-10-06', NULL),
(193, 114, 'Shopercity-19320201006021125.jpg', '2020-10-06', NULL),
(194, 115, 'Shopercity-19420201006021734.jpg', '2020-10-06', NULL),
(195, 116, 'Shopercity-19520201006022220.jpg', '2020-10-06', NULL),
(196, 117, 'Shopercity-19620201006022918.jpg', '2020-10-06', NULL),
(197, 118, 'Shopercity-19720201006023348.jpg', '2020-10-06', NULL),
(198, 119, 'Shopercity-19820201006023948.jpg', '2020-10-06', NULL),
(199, 120, 'Shopercity-19920201006024352.jpg', '2020-10-06', NULL),
(200, 121, 'Shopercity-20020201006025021.jpg', '2020-10-06', NULL),
(201, 122, 'Shopercity-20120201006030000.jpg', '2020-10-06', NULL),
(202, 123, 'Shopercity-20220201006040153.jpg', '2020-10-06', NULL),
(203, 124, 'Shopercity-20320201006040523.jpg', '2020-10-06', NULL),
(204, 125, 'Shopercity-20420201006040821.jpg', '2020-10-06', NULL),
(205, 126, 'Shopercity-20520201006041157.jpg', '2020-10-06', NULL),
(206, 127, 'Shopercity-20620201006041639.jpg', '2020-10-06', NULL),
(207, 128, 'Shopercity-20720201006041953.jpg', '2020-10-06', NULL),
(208, 129, 'Shopercity-20820201006042255.jpg', '2020-10-06', NULL),
(209, 130, 'Shopercity-20920201006042919.jpg', '2020-10-06', NULL),
(210, 131, 'Shopercity-21020201006065928.jpg', '2020-10-06', NULL),
(211, 132, 'Shopercity-21120201006070139.jpg', '2020-10-06', NULL),
(212, 133, 'Shopercity-21220201006070254.jpg', '2020-10-06', NULL),
(213, 134, 'Shopercity-21320201006070349.jpg', '2020-10-06', NULL),
(214, 135, 'Shopercity-21420201006070446.jpg', '2020-10-06', NULL),
(215, 136, 'Shopercity-21520201006070646.jpg', '2020-10-06', NULL),
(216, 137, 'Shopercity-21620201006071507.jpg', '2020-10-06', NULL),
(217, 137, 'Shopercity-21720201006071507.jpg', '2020-10-06', NULL),
(218, 138, 'Shopercity-21820201006072444.jpg', '2020-10-06', NULL),
(219, 138, 'Shopercity-21920201006072444.jpg', '2020-10-06', NULL),
(220, 139, 'Shopercity-22020201006072617.jpg', '2020-10-06', NULL),
(221, 139, 'Shopercity-22120201006072617.jpg', '2020-10-06', NULL),
(222, 140, 'Shopercity-22220201006072953.jpg', '2020-10-06', NULL),
(223, 140, 'Shopercity-22320201006072953.jpg', '2020-10-06', NULL),
(224, 141, 'Shopercity-22420201006073622.jpg', '2020-10-06', NULL),
(225, 142, 'Shopercity-22520201006073735.jpg', '2020-10-06', NULL),
(226, 143, 'Shopercity-22620201006073912.jpg', '2020-10-06', NULL),
(227, 131, NULL, '2020-10-06', NULL),
(228, 132, NULL, '2020-10-06', NULL),
(229, 133, NULL, '2020-10-06', NULL),
(230, 134, NULL, '2020-10-06', NULL),
(231, 135, NULL, '2020-10-06', NULL),
(232, 136, NULL, '2020-10-06', NULL),
(234, 43, 'Shopercity-23420201010064841.jpg', '2020-10-10', NULL),
(235, 44, 'Shopercity-23520201010064935.jpg', '2020-10-10', NULL),
(236, 45, 'Shopercity-23620201010065004.jpg', '2020-10-10', NULL),
(237, 46, 'Shopercity-23720201010065028.jpg', '2020-10-10', NULL),
(238, 47, 'Shopercity-23820201010065050.jpg', '2020-10-10', NULL),
(239, 48, 'Shopercity-23920201010065112.jpg', '2020-10-10', NULL),
(240, 49, 'Shopercity-24020201010065132.jpg', '2020-10-10', NULL),
(241, 50, 'Shopercity-24120201010065159.jpg', '2020-10-10', NULL),
(242, 4, 'Shopercity-24220201010065702.jpeg', '2020-10-10', NULL),
(243, 7, 'Shopercity-24320201010070812.jpg', '2020-10-10', NULL),
(244, 51, 'Shopercity-24420201010070930.jpg', '2020-10-10', NULL),
(245, 52, 'Shopercity-24520201010070955.jpg', '2020-10-10', NULL),
(246, 53, 'Shopercity-24620201010071014.jpg', '2020-10-10', NULL),
(247, 9, 'Shopercity-24720201010071814.png', '2020-10-10', NULL),
(248, 10, 'Shopercity-24820201010071833.jpg', '2020-10-10', NULL),
(249, 12, 'Shopercity-24920201010072000.jpg', '2020-10-10', NULL),
(250, 42, 'Shopercity-25020201010072135.jpeg', '2020-10-10', NULL),
(251, 5, 'Shopercity-25120201010072331.jpg', '2020-10-10', NULL),
(252, 24, 'Shopercity-25220201010072355.jpg', '2020-10-10', NULL),
(253, 6, 'Shopercity-25320201010072509.jpg', '2020-10-10', NULL),
(254, 13, 'Shopercity-25420201010072646.jpg', '2020-10-10', NULL),
(255, 14, 'Shopercity-25520201010072723.jpg', '2020-10-10', NULL),
(256, 15, 'Shopercity-25620201010072749.jpg', '2020-10-10', NULL),
(257, 144, 'Shopercity-25720201014031656.jpg', '2020-10-14', NULL),
(258, 145, 'Shopercity-25820201014031857.jpg', '2020-10-14', NULL),
(259, 146, 'Shopercity-25920201014032115.jpg', '2020-10-14', NULL),
(260, 147, 'Shopercity-26020201014032809.jpg', '2020-10-14', NULL),
(261, 144, NULL, '2020-10-14', NULL),
(262, 145, NULL, '2020-10-14', NULL),
(263, 146, NULL, '2020-10-14', NULL),
(264, 148, 'Shopercity-26420201014033411.jpg', '2020-10-14', NULL),
(265, 149, 'Shopercity-26520201014054603.png', '2020-10-14', NULL),
(266, 150, NULL, '2020-10-14', NULL),
(267, 46, NULL, '2020-10-14', NULL),
(268, 49, NULL, '2020-10-14', NULL),
(269, 50, NULL, '2020-10-14', NULL),
(270, 151, 'Shopercity-27020201015105029.jpg', '2020-10-15', NULL),
(271, 152, 'Shopercity-27120201015110023.jpg', '2020-10-15', NULL),
(272, 153, 'Shopercity-27220201015110414.jpg', '2020-10-15', NULL),
(273, 154, 'Shopercity-27320201015110959.jpg', '2020-10-15', NULL),
(274, 155, 'Shopercity-27420201015111846.jpg', '2020-10-15', NULL),
(275, 156, 'Shopercity-27520201015112149.jpg', '2020-10-15', NULL),
(276, 157, 'Shopercity-27620201015112501.jpg', '2020-10-15', NULL),
(277, 158, 'Shopercity-27720201015112730.jpg', '2020-10-15', NULL),
(278, 159, 'Shopercity-27820201015113458.jpg', '2020-10-15', NULL),
(279, 160, 'Shopercity-27920201015113809.jpg', '2020-10-15', NULL),
(280, 161, 'Shopercity-28020201015114058.jpg', '2020-10-15', NULL),
(281, 162, 'Shopercity-28120201015114405.jpg', '2020-10-15', NULL),
(282, 163, 'Shopercity-28220201015115051.jpg', '2020-10-15', NULL),
(283, 164, 'Shopercity-28320201015115609.jpg', '2020-10-15', NULL),
(285, 165, 'Shopercity-28520201015120438.jpg', '2020-10-15', NULL),
(286, 166, 'Shopercity-28620201015120712.jpg', '2020-10-15', NULL),
(287, 163, NULL, '2020-10-15', NULL),
(288, 163, NULL, '2020-10-15', NULL),
(289, 167, 'Shopercity-28920201015121542.jpg', '2020-10-15', NULL),
(290, 168, 'Shopercity-29020201015121853.jpg', '2020-10-15', NULL),
(291, 169, 'Shopercity-29120201015122237.jpg', '2020-10-15', NULL),
(292, 170, 'Shopercity-29220201015122731.jpg', '2020-10-15', NULL),
(293, 171, 'Shopercity-29320201015123435.jpg', '2020-10-15', NULL),
(294, 172, 'Shopercity-29420201015123739.jpg', '2020-10-15', NULL),
(295, 173, 'Shopercity-29520201015124114.jpg', '2020-10-15', NULL),
(296, 174, 'Shopercity-29620201015124646.jpg', '2020-10-15', NULL),
(297, 175, 'Shopercity-29720201015124916.jpg', '2020-10-15', NULL),
(298, 176, 'Shopercity-29820201015125218.jpg', '2020-10-15', NULL),
(299, 177, 'Shopercity-29920201015125608.jpg', '2020-10-15', NULL),
(300, 178, 'Shopercity-30020201015125904.jpg', '2020-10-15', NULL),
(301, 179, 'Shopercity-30120201015010200.jpg', '2020-10-15', NULL),
(302, 180, 'Shopercity-30220201015010441.jpg', '2020-10-15', NULL),
(303, 181, 'Shopercity-30320201015010827.jpg', '2020-10-15', NULL),
(304, 182, 'Shopercity-30420201015011309.jpg', '2020-10-15', NULL),
(305, 183, 'Shopercity-30520201015011801.jpg', '2020-10-15', NULL),
(306, 184, 'Shopercity-30620201015012036.jpg', '2020-10-15', NULL),
(307, 185, 'Shopercity-30720201015012317.jpg', '2020-10-15', NULL),
(308, 186, 'Shopercity-30820201015012559.jpg', '2020-10-15', NULL),
(309, 187, 'Shopercity-30920201015012840.jpg', '2020-10-15', NULL),
(310, 186, NULL, '2020-10-15', NULL),
(311, 188, 'Shopercity-31120201015013422.jpg', '2020-10-15', NULL),
(312, 189, 'Shopercity-31220201015013855.jpg', '2020-10-15', NULL),
(313, 190, 'Shopercity-31320201015014110.jpg', '2020-10-15', NULL),
(314, 188, NULL, '2020-10-15', NULL),
(315, 191, 'Shopercity-31520201015014802.jpg', '2020-10-15', NULL),
(316, 192, 'Shopercity-31620201015015058.jpg', '2020-10-15', NULL),
(317, 193, 'Shopercity-31720201015015309.jpg', '2020-10-15', NULL),
(318, 194, 'Shopercity-31820201015015534.jpg', '2020-10-15', NULL),
(319, 187, 'Shopercity-31920201015020208.jpg', '2020-10-15', NULL),
(320, 186, 'Shopercity-32020201015020456.jpg', '2020-10-15', NULL),
(321, 195, 'Shopercity-32120201015045804.jpg', '2020-10-15', NULL),
(323, 197, 'Shopercity-32320201015050348.jpg', '2020-10-15', NULL),
(324, 198, 'Shopercity-32420201015050508.jpg', '2020-10-15', NULL),
(325, 199, 'Shopercity-32520201015050711.jpg', '2020-10-15', NULL),
(327, 200, 'Shopercity-32720201015051305.jpg', '2020-10-15', NULL),
(329, 201, 'Shopercity-32920201015052102.jpg', '2020-10-15', NULL),
(330, 202, 'Shopercity-33020201015053143.jpg', '2020-10-15', NULL),
(331, 203, 'Shopercity-33120201015053522.jpg', '2020-10-15', NULL),
(332, 204, 'Shopercity-33220201015053753.jpg', '2020-10-15', NULL),
(333, 205, 'Shopercity-33320201015054010.jpg', '2020-10-15', NULL),
(334, 206, 'Shopercity-33420201015054231.jpg', '2020-10-15', NULL),
(335, 207, 'Shopercity-33520201015054550.jpg', '2020-10-15', NULL),
(336, 208, 'Shopercity-33620201015054732.jpg', '2020-10-15', NULL),
(337, 209, 'Shopercity-33720201015054913.jpg', '2020-10-15', NULL),
(338, 210, 'Shopercity-33820201015055051.jpg', '2020-10-15', NULL),
(339, 211, 'Shopercity-33920201015055212.jpg', '2020-10-15', NULL),
(340, 212, 'Shopercity-34020201015055459.jpg', '2020-10-15', NULL),
(341, 213, 'Shopercity-34120201015055656.jpg', '2020-10-15', NULL),
(342, 214, 'Shopercity-34220201015085838.jpg', '2020-10-15', NULL),
(343, 215, 'Shopercity-34320201015090133.jpg', '2020-10-15', NULL),
(344, 216, 'Shopercity-34420201015090407.jpg', '2020-10-15', NULL),
(345, 217, 'Shopercity-34520201015090554.jpg', '2020-10-15', NULL),
(346, 218, 'Shopercity-34620201015090821.jpg', '2020-10-15', NULL),
(347, 219, 'Shopercity-34720201015091207.jpg', '2020-10-15', NULL),
(348, 220, 'Shopercity-34820201015091419.jpg', '2020-10-15', NULL),
(349, 221, 'Shopercity-34920201015091627.jpg', '2020-10-15', NULL),
(350, 222, 'Shopercity-35020201015091803.jpg', '2020-10-15', NULL),
(351, 223, 'Shopercity-35120201015091922.jpg', '2020-10-15', NULL),
(352, 224, 'Shopercity-35220201015092057.jpg', '2020-10-15', NULL),
(354, 225, 'Shopercity-35420201015092358.jpg', '2020-10-15', NULL),
(355, 226, 'Shopercity-35520201015092549.jpg', '2020-10-15', NULL),
(356, 227, 'Shopercity-35620201015092701.jpg', '2020-10-15', NULL),
(357, 228, 'Shopercity-35720201015092829.jpg', '2020-10-15', NULL),
(358, 229, 'Shopercity-35820201015093032.jpg', '2020-10-15', NULL),
(359, 230, 'Shopercity-35920201015093213.jpg', '2020-10-15', NULL),
(360, 225, NULL, '2020-10-15', NULL),
(362, 198, NULL, '2020-10-16', NULL),
(363, 200, NULL, '2020-10-16', NULL),
(364, 204, NULL, '2020-10-16', NULL),
(365, 202, NULL, '2020-10-16', NULL),
(366, 203, NULL, '2020-10-16', NULL),
(369, 207, NULL, '2020-10-16', NULL),
(370, 208, NULL, '2020-10-16', NULL),
(372, 195, NULL, '2020-10-16', NULL),
(373, 211, NULL, '2020-10-16', NULL),
(375, 212, NULL, '2020-10-16', NULL),
(376, 210, NULL, '2020-10-16', NULL),
(378, 203, NULL, '2020-10-16', NULL),
(380, 213, NULL, '2020-10-16', NULL),
(381, 197, NULL, '2020-10-16', NULL),
(382, 212, NULL, '2020-10-16', NULL),
(383, 209, NULL, '2020-10-16', NULL),
(384, 196, 'Shopercity-38420201016081404.jpg', '2020-10-16', NULL),
(385, 231, 'Shopercity-38520201016081555.jpg', '2020-10-16', NULL),
(386, 232, 'Shopercity-38620201016091342.png', '2020-10-16', NULL),
(387, 232, 'Shopercity-38720201016091342.jpeg', '2020-10-16', NULL),
(388, 233, 'Shopercity-38820201017035635.jpg', '2020-10-17', NULL),
(389, 4, NULL, '2020-10-19', NULL),
(390, 234, 'Shopercity-39020201020024401.jpg', '2020-10-20', NULL),
(391, 235, 'Shopercity-39120201020024947.jpg', '2020-10-20', NULL),
(392, 236, 'Shopercity-39220201020025908.jpg', '2020-10-20', NULL),
(393, 237, 'Shopercity-39320201020030341.jpg', '2020-10-20', NULL),
(394, 238, 'Shopercity-39420201020030646.jpg', '2020-10-20', NULL),
(395, 239, 'Shopercity-39520201020031102.jpg', '2020-10-20', NULL),
(396, 240, 'Shopercity-39620201020031408.jpg', '2020-10-20', NULL),
(397, 241, 'Shopercity-39720201020031627.jpg', '2020-10-20', NULL),
(398, 242, 'Shopercity-39820201020031845.jpg', '2020-10-20', NULL),
(399, 243, 'Shopercity-39920201020033404.jpg', '2020-10-20', NULL),
(400, 244, 'Shopercity-40020201020033631.jpg', '2020-10-20', NULL),
(401, 245, 'Shopercity-40120201020033830.jpg', '2020-10-20', NULL),
(402, 246, 'Shopercity-40220201020034015.jpg', '2020-10-20', NULL),
(403, 247, 'Shopercity-40320201020034558.jpg', '2020-10-20', NULL),
(404, 248, 'Shopercity-40420201020034822.jpg', '2020-10-20', NULL),
(405, 249, 'Shopercity-40520201020035056.jpg', '2020-10-20', NULL),
(406, 250, 'Shopercity-40620201020035409.jpg', '2020-10-20', NULL),
(407, 251, 'Shopercity-40720201020035940.jpg', '2020-10-20', NULL),
(408, 252, 'Shopercity-40820201020040127.jpg', '2020-10-20', NULL),
(409, 253, 'Shopercity-40920201020040305.jpg', '2020-10-20', NULL),
(410, 254, 'Shopercity-41020201020040450.jpg', '2020-10-20', NULL),
(411, 255, 'Shopercity-41120201020040720.jpg', '2020-10-20', NULL),
(412, 236, NULL, '2020-10-20', NULL),
(413, 237, NULL, '2020-10-20', NULL),
(414, 238, NULL, '2020-10-20', NULL),
(415, 201, NULL, '2020-10-21', NULL),
(416, 201, NULL, '2020-10-21', NULL),
(417, 209, NULL, '2020-10-21', NULL),
(418, 202, NULL, '2020-10-21', NULL),
(419, 213, NULL, '2020-10-21', NULL),
(420, 207, NULL, '2020-10-21', NULL),
(421, 208, NULL, '2020-10-21', NULL),
(422, 231, NULL, '2020-10-21', NULL),
(423, 205, NULL, '2020-10-21', NULL),
(424, 199, NULL, '2020-10-26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(5) NOT NULL,
  `country_id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_by` date NOT NULL,
  `modified_by` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `country_id`, `name`, `created_by`, `modified_by`) VALUES
(3, 2, 'Gujarat', '2020-09-24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `month` int(4) NOT NULL,
  `price` float(10,2) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `created_by` date NOT NULL,
  `modified_by` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`id`, `name`, `month`, `price`, `image`, `created_by`, `modified_by`) VALUES
(4, 'Dabhi prakash', 12, 2000.00, NULL, '2024-03-10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `oder_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` int(3) NOT NULL,
  `status` int(3) NOT NULL,
  `created_by` date NOT NULL,
  `modified_by` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `role`, `status`, `created_by`, `modified_by`) VALUES
(1, 'Admin', 'chintan@shopercity.com', '123', 1, 1, '2020-12-10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `referral_id` int(50) NOT NULL,
  `upline_id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `pincode` int(20) DEFAULT NULL,
  `aadhar_number` int(20) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0=active\r\n1=banned\r\n',
  `balance` int(50) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `referral_id`, `upline_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address`, `city`, `state`, `country`, `image`, `pincode`, `aadhar_number`, `status`, `balance`, `created_at`, `updated_at`) VALUES
(1, 123123123, 0, 'Dabhi', 'prakash', 'shp36169@gmail.com', '$2y$10$8zGPNEHxkLhV4utB9o/Kcu7OlH.fj3MtenQy0qufcX1fM/KkMR43O', '1231231233', 'To chatroda ta veraval ji gir simnatha', 'veraval', 'àª—à«àªœàª°àª¾àª¤', 'India', '1709579465_png-clipart-cargo-truck-transport-commercial-vehicle-truck-freight-transport-truck-removebg-preview.png', 362266, 1231231233, 0, 0, '2024-03-02', '2024-03-15 16:43:44'),
(2, 0, 0, 'Dabhi', 'prakash', 'test@yopmail.com', '$2y$10$A3catkSx1YhKipdHGQWVv.G1tFcAifGXyXfp4b8sYD4Iacu585LjS', '09328797950', NULL, NULL, NULL, NULL, '', NULL, NULL, 0, 0, '2024-03-09', '2024-03-09 16:03:09'),
(3, 0, 0, 'sfdfsfs', 'adasd', 'tesst@yopmail.com', '$2y$10$b8EPwO5/Qop9m.jCRHTfz.EXFl.td6TLz66NH6e2Dg.1JOjOvCtse', '234234234', NULL, NULL, NULL, NULL, '', NULL, NULL, 0, 0, '2024-03-09', '2024-03-09 16:10:47'),
(4, 0, 0, 'test', 'xvxcv', 'prakash@yopmail.com', '$2y$10$5qAlFtsZa2OoH4z8SVWP1u2gpPkhiporczEBDrKnI.r4BV6yMVTwy', '234234', NULL, NULL, NULL, NULL, '', NULL, NULL, 0, 0, '2024-03-09', '2024-03-09 16:11:19'),
(5, 0, 0, 'Dabhi', 'prakash', 'admin@yopmail.com', '$2y$10$o7eYt6dHuuPQ.ckitBl/kuXhjAP/i7DLkUWMauuvy9g77a/EDklRe', '09328797950', NULL, NULL, NULL, NULL, '', NULL, NULL, 0, 0, '2024-03-09', '2024-03-09 16:19:21'),
(6, 1710522136, 1, 'Dabhi', 'prakash', 'demo@yopmail.com', '$2y$10$kIpIsqusVUMpMl/gT419Fe70wENPdmVKF26uZVtQw3QNFpknhPpg6', '09328797950', 'To chatroda ta veraval ji gir simnatha', 'veraval', 'àª—à«àªœàª°àª¾àª¤', 'India', '', 362266, 123, 1, 0, '2024-03-15', '2024-03-15 18:56:35');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id` int(5) NOT NULL,
  `category_id` int(5) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `store_name` varchar(200) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `street` varchar(100) DEFAULT NULL,
  `city_id` int(5) DEFAULT NULL,
  `state_id` int(5) DEFAULT NULL,
  `country_id` int(5) DEFAULT NULL,
  `zipcode` varchar(10) DEFAULT NULL,
  `lat` varchar(30) DEFAULT NULL,
  `longitude` varchar(30) DEFAULT NULL,
  `plan_id` int(5) DEFAULT NULL,
  `desc_1` text DEFAULT NULL,
  `desc_2` text DEFAULT NULL,
  `delivery_status` int(11) NOT NULL DEFAULT 0,
  `created_by` date DEFAULT NULL,
  `modified_by` date DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `banner` varchar(100) DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  `youtube_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id`, `category_id`, `name`, `store_name`, `contact`, `email`, `username`, `password`, `street`, `city_id`, `state_id`, `country_id`, `zipcode`, `lat`, `longitude`, `plan_id`, `desc_1`, `desc_2`, `delivery_status`, `created_by`, `modified_by`, `image`, `banner`, `status`, `youtube_link`) VALUES
(3, 9, 'Bhargav Parmar 1', 'O2 Fashion', '9998709894', 'bhargav.parmar@gmail.com', '9998709894', '9998709894', 'Rudraksh Complex', 6, 3, 2, '362266', '0', '0', 0, NULL, NULL, 0, '2020-09-24', '2024-03-10', 'Shopercity-3.jpg', 'Shopercity-3.png', NULL, 'https://www.youtube.com/embed/S6APsHh3NcY'),
(30, 23, 'Dabhi prakash', 'te', 'rwer', 'shp36169@gmail.com', 'admin', 'admin', 'To chatroda ta veraval ji gir simnatha', 16, 3, 2, '362266', '34534534', '5345345', 0, NULL, NULL, 0, '2024-03-10', NULL, NULL, NULL, NULL, 'test'),
(31, 23, 'Dabhi prakash', 'te', 'rwer', 'shp36169@gmail.com', 'admin', 'admin', 'To chatroda ta veraval ji gir simnatha', 16, 3, 2, '362266', '34534534', '5345345', 0, NULL, NULL, 0, '2024-03-10', NULL, NULL, NULL, NULL, 'test'),
(32, 9, 'Dabhi prakash', '53435534', '234234', 'shp36169@gmail.com', 'admin', 'admin', 'To chatroda ta veraval ji gir simnatha', 6, 3, 2, '362266', '34534534', '5345345', 0, NULL, NULL, 0, '2024-03-10', NULL, NULL, NULL, NULL, '0'),
(33, 31, 'Dabhi prakash', 'te', 'rwer', 'shp36169@gmail.com', 'admin', 'admin', 'To chatroda ta veraval ji gir simnatha', 7, 3, 2, '362266', '34534534', '5345345', 0, NULL, NULL, 0, '2024-03-10', '2024-03-10', 'Shopercity-33.png', 'Shopercity-33.png', NULL, '0'),
(34, 28, 'Dabhi prakash', 'te', 'rwer', 'shp36169@gmail.com', 'admin', 'admin', 'To chatroda ta veraval ji gir simnatha', 6, 3, 2, '362266', '34534534', '5345345', 0, NULL, NULL, 0, '2024-03-10', NULL, NULL, NULL, NULL, '0'),
(35, 23, 'Dabhi prakash', 'te', 'rwer', 'shp36169@gmail.com', 'admin', 'admin', 'To chatroda ta veraval ji gir simnatha', 6, 3, 2, '362266', '34534534', '5345345', 4, NULL, NULL, 0, '2024-03-10', '2024-03-10', 'Shopercity-1710076927.png', 'Shopercity-1710076928.png', NULL, '0'),
(36, 26, 'Dabhi prakash', 'te', 'rwer', 'shp36169@gmail.com', 'admin', 'admin', 'To chatroda ta veraval ji gir simnatha', 6, 3, 2, '362266', '34534534', '5345345', 4, NULL, NULL, 0, '2024-03-10', NULL, NULL, NULL, NULL, '0'),
(37, 26, 'Dabhi prakash', 'te', 'rwer', 'shp36169@gmail.com', 'admin', 'admin', 'To chatroda ta veraval ji gir simnatha', 6, 3, 2, '362266', '34534534', '5345345', 4, NULL, NULL, 0, '2024-03-10', '2024-03-10', 'Shopercity-37.png', 'Shopercity-1710076780.jpg', NULL, '0'),
(39, 22, '111', '11', '111', '11', '11', '11', '11', 10, 3, 2, '362266', '111', '111', 4, NULL, NULL, 0, '2024-03-10', '2024-03-10', 'Shopercity-1710077008.jpg', 'Shopercity-1710077069.jpg', NULL, '0'),
(40, 26, 'ww', 'www', 'ww', 'shp36169@gmail.com', 'admin', 'admin', 'To chatroda ta veraval ji gir simnatha', 7, 3, 2, '22', '34534534', '5345345', 4, '<p><b>tedgd</b></p>', '<p><b>tedgd</b></p>', 1, '2024-03-10', NULL, 'Shopercity-1710082084.png', 'Shopercity-1710082084.png', NULL, '0'),
(41, 23, 'Dabhi prakash', 'te', '2342342344', 'shp36169@gmail.com', 'admin', 'admin', 'To chatroda ta veraval ji gir simnatha', 6, 3, 2, '362266', '234234234', '234234234', 4, '<p>test</p>', '<p>test</p>', 0, '2024-03-12', NULL, 'Shopercity-1710259795.png', 'Shopercity-1710259795.png', NULL, '0'),
(42, 23, 'aaa', 'aa', '3333', 'test@yopmail.com', 'admin', 'admin', 'aaa', 6, 3, 2, '33', '34534534', '5345345', 4, '<p>test</p>', '<p>test</p>', 0, '2024-03-12', '2024-03-12', 'Shopercity-1710261700.png', 'Shopercity-1710261713.png', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_subscribe`
--

CREATE TABLE `vendor_subscribe` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `plan_id` int(10) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `vendor_subscribe`
--

INSERT INTO `vendor_subscribe` (`id`, `user_id`, `plan_id`, `start_date`, `end_date`) VALUES
(1, 1, 1, '2020-09-24', '2021-09-24'),
(2, 2, 0, '2020-09-24', '1970-01-01'),
(3, 3, 0, '2024-03-10', '1970-01-01'),
(4, 4, 2, '2020-10-07', '2021-10-07'),
(5, 5, 2, '2020-10-17', '2021-10-17'),
(6, 6, 2, '2020-09-26', '2021-09-26'),
(7, 7, 2, '2020-10-17', '2021-10-17'),
(8, 8, 2, '2020-10-17', '2021-10-17'),
(9, 9, 2, '2020-10-17', '2021-10-17'),
(10, 10, 2, '2020-10-07', '2021-10-07'),
(11, 11, 2, '2020-10-17', '2021-10-17'),
(12, 12, 2, '2020-10-07', '2021-10-07'),
(13, 13, 2, '2020-10-07', '2021-10-07'),
(14, 14, 2, '2020-10-04', '2021-10-04'),
(15, 15, 2, '2020-10-07', '2021-10-07'),
(16, 16, 2, '2020-10-07', '2021-10-07'),
(17, 17, 2, '2020-10-07', '2021-10-07'),
(18, 18, 0, '2020-10-06', '1970-01-01'),
(19, 19, 2, '2020-10-07', '2021-10-07'),
(20, 20, 2, '2020-10-07', '2021-10-07'),
(21, 21, 2, '2020-10-07', '2021-10-07'),
(22, 22, 2, '2020-10-16', '2021-10-16'),
(23, 23, 2, '2020-10-13', '2021-10-13'),
(24, 24, 2, '2020-10-15', '2021-10-15'),
(25, 25, 2, '2020-10-15', '2021-10-15'),
(26, 26, 3, '2020-10-16', '2021-04-16'),
(27, 27, 3, '2020-10-17', '2021-04-17'),
(28, 28, 3, '2020-10-20', '2021-04-20'),
(29, 29, 3, '2020-10-31', '2021-05-01'),
(30, 33, 0, '2024-03-10', '1970-01-01'),
(31, 35, 4, '2024-03-10', '2025-03-10'),
(32, 36, 4, '2024-03-10', '2025-03-10'),
(33, 37, 4, '2024-03-10', '2025-03-10'),
(34, 38, 4, '2024-03-10', '2025-03-10'),
(35, 39, 4, '2024-03-10', '2025-03-10'),
(36, 40, 4, '2024-03-10', '2025-03-10'),
(37, 41, 4, '2024-03-12', '2025-03-12'),
(38, 42, 4, '2024-03-12', '2025-03-12');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_gallery`
--
ALTER TABLE `product_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
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
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_subscribe`
--
ALTER TABLE `vendor_subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=256;

--
-- AUTO_INCREMENT for table `product_gallery`
--
ALTER TABLE `product_gallery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=425;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `vendor_subscribe`
--
ALTER TABLE `vendor_subscribe`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
