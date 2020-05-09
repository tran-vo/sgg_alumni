-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2019 at 11:13 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL COMMENT 'id',
  `route_id` int(10) UNSIGNED NOT NULL COMMENT 'id route action được phép thực hiện',
  `role_id` int(10) UNSIGNED NOT NULL COMMENT 'id phân quyền được phép thực hiện',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'ngày tạo',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'ngày cập nhật',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'ngày xóa tạm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Các quyền được phân công';

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`permission_id`, `route_id`, `role_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(48, 154, 1, '2019-10-11 14:20:35', '2019-10-11 14:20:35', NULL),
(49, 155, 1, '2019-10-11 14:20:35', '2019-10-11 14:20:35', NULL),
(50, 156, 1, '2019-10-12 12:31:18', '2019-10-12 12:31:18', NULL),
(51, 157, 1, '2019-10-12 12:31:18', '2019-10-12 12:31:18', NULL),
(52, 158, 1, '2019-10-12 12:31:18', '2019-10-12 12:31:18', NULL),
(53, 159, 1, '2019-10-12 12:31:18', '2019-10-12 12:31:18', NULL),
(54, 160, 1, '2019-10-12 12:31:18', '2019-10-12 12:31:18', NULL),
(55, 161, 1, '2019-10-12 12:31:18', '2019-10-12 12:31:18', NULL),
(56, 162, 1, '2019-10-12 12:31:18', '2019-10-12 12:31:18', NULL),
(57, 163, 1, '2019-10-12 12:31:18', '2019-10-12 12:31:18', NULL),
(58, 164, 1, '2019-10-12 12:31:18', '2019-10-12 12:31:18', NULL),
(59, 165, 1, '2019-10-12 12:31:18', '2019-10-12 12:31:18', NULL),
(60, 166, 1, '2019-10-12 12:31:23', '2019-10-12 12:31:23', NULL),
(61, 167, 1, '2019-10-12 12:31:23', '2019-10-12 12:31:23', NULL),
(62, 168, 1, '2019-10-12 12:31:23', '2019-10-12 12:31:23', NULL),
(63, 169, 1, '2019-10-12 12:31:23', '2019-10-12 12:31:23', NULL),
(64, 170, 1, '2019-10-12 12:31:23', '2019-10-12 12:31:23', NULL),
(65, 171, 1, '2019-10-12 12:31:23', '2019-10-12 12:31:23', NULL),
(66, 172, 1, '2019-10-12 12:31:23', '2019-10-12 12:31:23', NULL),
(67, 173, 1, '2019-10-12 12:31:23', '2019-10-12 12:31:23', NULL),
(68, 174, 1, '2019-10-12 12:31:23', '2019-10-12 12:31:23', NULL),
(69, 175, 1, '2019-10-12 12:31:23', '2019-10-12 12:31:23', NULL),
(70, 176, 1, '2019-10-12 12:31:27', '2019-10-12 12:31:27', NULL),
(71, 177, 1, '2019-10-12 12:31:27', '2019-10-12 12:31:27', NULL),
(72, 178, 1, '2019-10-12 12:31:27', '2019-10-12 12:31:27', NULL),
(73, 179, 1, '2019-10-12 12:31:27', '2019-10-12 12:31:27', NULL),
(74, 180, 1, '2019-10-12 12:31:27', '2019-10-12 12:31:27', NULL),
(75, 181, 1, '2019-10-12 12:31:27', '2019-10-12 12:31:27', NULL),
(76, 182, 1, '2019-10-12 12:31:27', '2019-10-12 12:31:27', NULL),
(77, 183, 1, '2019-10-12 12:31:27', '2019-10-12 12:31:27', NULL),
(78, 184, 1, '2019-10-12 12:31:27', '2019-10-12 12:31:27', NULL),
(79, 185, 1, '2019-10-12 12:31:27', '2019-10-12 12:31:27', NULL),
(80, 186, 1, '2019-10-12 12:31:31', '2019-10-12 12:31:31', NULL),
(81, 187, 1, '2019-10-12 12:31:31', '2019-10-12 12:31:31', NULL),
(82, 188, 1, '2019-10-12 12:31:31', '2019-10-12 12:31:31', NULL),
(83, 189, 1, '2019-10-12 12:31:31', '2019-10-12 12:31:31', NULL),
(84, 190, 1, '2019-10-12 12:31:31', '2019-10-12 12:31:31', NULL),
(85, 191, 1, '2019-10-12 12:31:31', '2019-10-12 12:31:31', NULL),
(86, 192, 1, '2019-10-12 12:31:31', '2019-10-12 12:31:31', NULL),
(87, 193, 1, '2019-10-12 12:31:31', '2019-10-12 12:31:31', NULL),
(88, 194, 1, '2019-10-12 12:31:31', '2019-10-12 12:31:31', NULL),
(89, 195, 1, '2019-10-12 12:31:31', '2019-10-12 12:31:31', NULL),
(90, 196, 1, '2019-10-12 12:31:39', '2019-10-12 12:31:39', NULL),
(91, 197, 1, '2019-10-12 12:31:39', '2019-10-12 12:31:39', NULL),
(92, 198, 1, '2019-10-12 12:31:39', '2019-10-12 12:31:39', NULL),
(93, 199, 1, '2019-10-12 12:31:39', '2019-10-12 12:31:39', NULL),
(94, 200, 1, '2019-10-12 12:31:39', '2019-10-12 12:31:39', NULL),
(95, 201, 1, '2019-10-12 12:31:39', '2019-10-12 12:31:39', NULL),
(96, 202, 1, '2019-10-12 12:31:39', '2019-10-12 12:31:39', NULL),
(97, 203, 1, '2019-10-12 12:31:39', '2019-10-12 12:31:39', NULL),
(98, 204, 1, '2019-10-12 12:31:39', '2019-10-12 12:31:39', NULL),
(99, 205, 1, '2019-10-12 12:31:39', '2019-10-12 12:31:39', NULL),
(100, 206, 1, '2019-10-12 12:31:45', '2019-10-12 12:31:45', NULL),
(101, 207, 1, '2019-10-12 12:31:45', '2019-10-12 12:31:45', NULL),
(102, 208, 1, '2019-10-12 12:31:45', '2019-10-12 12:31:45', NULL),
(103, 209, 1, '2019-10-12 12:31:45', '2019-10-12 12:31:45', NULL),
(104, 210, 1, '2019-10-12 12:31:45', '2019-10-12 12:31:45', NULL),
(105, 211, 1, '2019-10-12 12:31:45', '2019-10-12 12:31:45', NULL),
(106, 212, 1, '2019-10-12 12:31:45', '2019-10-12 12:31:45', NULL),
(107, 213, 1, '2019-10-12 12:31:45', '2019-10-12 12:31:45', NULL),
(108, 214, 1, '2019-10-12 12:31:45', '2019-10-12 12:31:45', NULL),
(109, 215, 1, '2019-10-12 12:31:45', '2019-10-12 12:31:45', NULL),
(110, 216, 1, '2019-10-12 12:31:51', '2019-10-12 12:31:51', NULL),
(111, 217, 1, '2019-10-12 12:31:51', '2019-10-12 12:31:51', NULL),
(112, 218, 1, '2019-10-12 12:31:51', '2019-10-12 12:31:51', NULL),
(113, 219, 1, '2019-10-12 12:31:51', '2019-10-12 12:31:51', NULL),
(114, 220, 1, '2019-10-12 12:31:51', '2019-10-12 12:31:51', NULL),
(115, 221, 1, '2019-10-12 12:31:51', '2019-10-12 12:31:51', NULL),
(116, 222, 1, '2019-10-12 12:31:51', '2019-10-12 12:31:51', NULL),
(117, 223, 1, '2019-10-12 12:31:51', '2019-10-12 12:31:51', NULL),
(118, 224, 1, '2019-10-12 12:31:51', '2019-10-12 12:31:51', NULL),
(119, 225, 1, '2019-10-12 12:31:51', '2019-10-12 12:31:51', NULL),
(120, 226, 1, '2019-10-12 12:32:15', '2019-10-12 12:32:15', NULL),
(121, 227, 1, '2019-10-12 12:32:15', '2019-10-12 12:32:15', NULL),
(122, 228, 1, '2019-10-12 12:32:15', '2019-10-12 12:32:15', NULL),
(123, 229, 1, '2019-10-12 12:32:15', '2019-10-12 12:32:15', NULL),
(124, 230, 1, '2019-10-12 12:32:15', '2019-10-12 12:32:15', NULL),
(125, 231, 1, '2019-10-12 12:32:15', '2019-10-12 12:32:15', NULL),
(126, 232, 1, '2019-10-12 12:32:15', '2019-10-12 12:32:15', NULL),
(127, 233, 1, '2019-10-12 12:32:15', '2019-10-12 12:32:15', NULL),
(128, 234, 1, '2019-10-12 12:32:15', '2019-10-12 12:32:15', NULL),
(129, 235, 1, '2019-10-12 12:32:15', '2019-10-12 12:32:15', NULL),
(130, 236, 1, '2019-10-12 12:32:20', '2019-10-12 12:32:20', NULL),
(131, 237, 1, '2019-10-12 12:32:20', '2019-10-12 12:32:20', NULL),
(132, 238, 1, '2019-10-12 12:32:20', '2019-10-12 12:32:20', NULL),
(133, 239, 1, '2019-10-12 12:32:20', '2019-10-12 12:32:20', NULL),
(134, 240, 1, '2019-10-12 12:32:20', '2019-10-12 12:32:20', NULL),
(135, 241, 1, '2019-10-12 12:32:20', '2019-10-12 12:32:20', NULL),
(136, 242, 1, '2019-10-12 12:32:20', '2019-10-12 12:32:20', NULL),
(137, 243, 1, '2019-10-12 12:32:20', '2019-10-12 12:32:20', NULL),
(138, 244, 1, '2019-10-12 12:32:20', '2019-10-12 12:32:20', NULL),
(139, 245, 1, '2019-10-12 12:32:20', '2019-10-12 12:32:20', NULL),
(140, 246, 1, '2019-10-12 12:32:24', '2019-10-12 12:32:24', NULL),
(141, 247, 1, '2019-10-12 12:32:24', '2019-10-12 12:32:24', NULL),
(142, 248, 1, '2019-10-12 12:32:24', '2019-10-12 12:32:24', NULL),
(143, 249, 1, '2019-10-12 12:32:24', '2019-10-12 12:32:24', NULL),
(144, 250, 1, '2019-10-12 12:32:24', '2019-10-12 12:32:24', NULL),
(145, 251, 1, '2019-10-12 12:32:24', '2019-10-12 12:32:24', NULL),
(146, 252, 1, '2019-10-12 12:32:24', '2019-10-12 12:32:24', NULL),
(147, 253, 1, '2019-10-12 12:32:24', '2019-10-12 12:32:24', NULL),
(148, 254, 1, '2019-10-12 12:32:24', '2019-10-12 12:32:24', NULL),
(149, 255, 1, '2019-10-12 12:32:24', '2019-10-12 12:32:24', NULL),
(150, 256, 1, '2019-10-12 12:32:28', '2019-10-12 12:32:28', NULL),
(151, 257, 1, '2019-10-12 12:32:28', '2019-10-12 12:32:28', NULL),
(152, 258, 1, '2019-10-12 12:32:28', '2019-10-12 12:32:28', NULL),
(153, 259, 1, '2019-10-12 12:32:28', '2019-10-12 12:32:28', NULL),
(154, 260, 1, '2019-10-12 12:32:28', '2019-10-12 12:32:28', NULL),
(155, 261, 1, '2019-10-12 12:32:28', '2019-10-12 12:32:28', NULL),
(156, 262, 1, '2019-10-12 12:32:28', '2019-10-12 12:32:28', NULL),
(157, 263, 1, '2019-10-12 12:32:28', '2019-10-12 12:32:28', NULL),
(158, 264, 1, '2019-10-12 12:32:28', '2019-10-12 12:32:28', NULL),
(159, 265, 1, '2019-10-12 12:32:28', '2019-10-12 12:32:28', NULL),
(160, 266, 1, '2019-10-12 12:32:33', '2019-10-12 12:32:33', NULL),
(161, 267, 1, '2019-10-12 12:32:33', '2019-10-12 12:32:33', NULL),
(162, 268, 1, '2019-10-12 12:32:33', '2019-10-12 12:32:33', NULL),
(163, 269, 1, '2019-10-12 12:32:33', '2019-10-12 12:32:33', NULL),
(164, 270, 1, '2019-10-12 12:32:33', '2019-10-12 12:32:33', NULL),
(165, 271, 1, '2019-10-12 12:32:33', '2019-10-12 12:32:33', NULL),
(166, 272, 1, '2019-10-12 12:32:33', '2019-10-12 12:32:33', NULL),
(167, 273, 1, '2019-10-12 12:32:33', '2019-10-12 12:32:33', NULL),
(168, 274, 1, '2019-10-12 12:32:33', '2019-10-12 12:32:33', NULL),
(169, 275, 1, '2019-10-12 12:32:33', '2019-10-12 12:32:33', NULL),
(170, 276, 1, '2019-10-12 12:32:36', '2019-10-12 12:32:36', NULL),
(171, 277, 1, '2019-10-12 12:32:36', '2019-10-12 12:32:36', NULL),
(172, 278, 1, '2019-10-12 12:32:36', '2019-10-12 12:32:36', NULL),
(173, 279, 1, '2019-10-12 12:32:36', '2019-10-12 12:32:36', NULL),
(174, 280, 1, '2019-10-12 12:32:36', '2019-10-12 12:32:36', NULL),
(175, 281, 1, '2019-10-12 12:32:36', '2019-10-12 12:32:36', NULL),
(176, 282, 1, '2019-10-12 12:32:36', '2019-10-12 12:32:36', NULL),
(177, 283, 1, '2019-10-12 12:32:36', '2019-10-12 12:32:36', NULL),
(178, 284, 1, '2019-10-12 12:32:36', '2019-10-12 12:32:36', NULL),
(179, 285, 1, '2019-10-12 12:32:36', '2019-10-12 12:32:36', NULL),
(180, 286, 1, '2019-10-12 12:32:39', '2019-10-12 12:32:39', NULL),
(181, 287, 1, '2019-10-12 12:32:39', '2019-10-12 12:32:39', NULL),
(182, 288, 1, '2019-10-12 12:32:39', '2019-10-12 12:32:39', NULL),
(183, 289, 1, '2019-10-12 12:32:39', '2019-10-12 12:32:39', NULL),
(184, 290, 1, '2019-10-12 12:32:39', '2019-10-12 12:32:39', NULL),
(185, 291, 1, '2019-10-12 12:32:39', '2019-10-12 12:32:39', NULL),
(186, 292, 1, '2019-10-12 12:32:39', '2019-10-12 12:32:39', NULL),
(187, 293, 1, '2019-10-12 12:32:39', '2019-10-12 12:32:39', NULL),
(188, 294, 1, '2019-10-12 12:32:39', '2019-10-12 12:32:39', NULL),
(189, 295, 1, '2019-10-12 12:32:39', '2019-10-12 12:32:39', NULL),
(190, 296, 1, '2019-10-12 12:32:42', '2019-10-12 12:32:42', NULL),
(191, 297, 1, '2019-10-12 12:32:42', '2019-10-12 12:32:42', NULL),
(192, 298, 1, '2019-10-12 12:32:42', '2019-10-12 12:32:42', NULL),
(193, 299, 1, '2019-10-12 12:32:42', '2019-10-12 12:32:42', NULL),
(194, 300, 1, '2019-10-12 12:32:42', '2019-10-12 12:32:42', NULL),
(195, 301, 1, '2019-10-12 12:32:42', '2019-10-12 12:32:42', NULL),
(196, 302, 1, '2019-10-12 12:32:42', '2019-10-12 12:32:42', NULL),
(197, 303, 1, '2019-10-12 12:32:42', '2019-10-12 12:32:42', NULL),
(198, 304, 1, '2019-10-12 12:32:42', '2019-10-12 12:32:42', NULL),
(199, 305, 1, '2019-10-12 12:32:42', '2019-10-12 12:32:42', NULL),
(200, 306, 1, '2019-10-12 12:32:46', '2019-10-12 12:32:46', NULL),
(201, 307, 1, '2019-10-12 12:32:46', '2019-10-12 12:32:46', NULL),
(202, 308, 1, '2019-10-12 12:32:46', '2019-10-12 12:32:46', NULL),
(203, 309, 1, '2019-10-12 12:32:46', '2019-10-12 12:32:46', NULL),
(204, 310, 1, '2019-10-12 12:32:46', '2019-10-12 12:32:46', NULL),
(205, 311, 1, '2019-10-12 12:32:46', '2019-10-12 12:32:46', NULL),
(206, 312, 1, '2019-10-12 12:32:46', '2019-10-12 12:32:46', NULL),
(207, 313, 1, '2019-10-12 12:32:46', '2019-10-12 12:32:46', NULL),
(208, 314, 1, '2019-10-12 12:32:46', '2019-10-12 12:32:46', NULL),
(209, 315, 1, '2019-10-12 12:32:46', '2019-10-12 12:32:46', NULL),
(210, 316, 1, '2019-10-12 12:32:58', '2019-10-12 12:32:58', NULL),
(211, 317, 1, '2019-10-12 12:32:58', '2019-10-12 12:32:58', NULL),
(212, 318, 1, '2019-10-12 12:32:58', '2019-10-12 12:32:58', NULL),
(213, 319, 1, '2019-10-12 12:32:58', '2019-10-12 12:32:58', NULL),
(214, 320, 1, '2019-10-12 12:32:58', '2019-10-12 12:32:58', NULL),
(215, 321, 1, '2019-10-12 12:32:58', '2019-10-12 12:32:58', NULL),
(216, 322, 1, '2019-10-12 12:32:58', '2019-10-12 12:32:58', NULL),
(217, 323, 1, '2019-10-12 12:32:58', '2019-10-12 12:32:58', NULL),
(218, 324, 1, '2019-10-12 12:32:58', '2019-10-12 12:32:58', NULL),
(219, 325, 1, '2019-10-12 12:32:58', '2019-10-12 12:32:58', NULL),
(220, 326, 1, '2019-10-12 12:33:02', '2019-10-12 12:33:02', NULL),
(221, 327, 1, '2019-10-12 12:33:02', '2019-10-12 12:33:02', NULL),
(222, 328, 1, '2019-10-12 12:33:02', '2019-10-12 12:33:02', NULL),
(223, 329, 1, '2019-10-12 12:33:02', '2019-10-12 12:33:02', NULL),
(224, 330, 1, '2019-10-12 12:33:02', '2019-10-12 12:33:02', NULL),
(225, 331, 1, '2019-10-12 12:33:02', '2019-10-12 12:33:02', NULL),
(226, 332, 1, '2019-10-12 12:33:02', '2019-10-12 12:33:02', NULL),
(227, 333, 1, '2019-10-12 12:33:02', '2019-10-12 12:33:02', NULL),
(228, 334, 1, '2019-10-12 12:33:02', '2019-10-12 12:33:02', NULL),
(229, 335, 1, '2019-10-12 12:33:02', '2019-10-12 12:33:02', NULL),
(230, 336, 1, '2019-10-12 13:59:42', '2019-10-12 13:59:42', NULL),
(231, 337, 1, '2019-10-12 13:59:42', '2019-10-12 13:59:42', NULL),
(232, 338, 1, '2019-10-12 13:59:42', '2019-10-12 13:59:42', NULL),
(233, 339, 1, '2019-10-12 13:59:42', '2019-10-12 13:59:42', NULL),
(234, 340, 1, '2019-10-12 13:59:42', '2019-10-12 13:59:42', NULL),
(235, 341, 1, '2019-10-12 13:59:42', '2019-10-12 13:59:42', NULL),
(236, 342, 1, '2019-10-12 14:26:25', '2019-10-12 14:26:25', NULL),
(237, 343, 1, '2019-10-12 14:26:25', '2019-10-12 14:26:25', NULL),
(238, 344, 1, '2019-10-12 14:26:25', '2019-10-12 14:26:25', NULL),
(239, 345, 1, '2019-10-12 14:26:25', '2019-10-12 14:26:25', NULL),
(240, 346, 1, '2019-10-12 14:26:25', '2019-10-12 14:26:25', NULL),
(241, 347, 1, '2019-10-12 14:26:25', '2019-10-12 14:26:25', NULL),
(242, 242, 5, '2019-10-12 14:28:16', '2019-10-12 14:28:16', NULL),
(243, 243, 5, '2019-10-12 14:28:16', '2019-10-12 14:28:16', NULL),
(244, 244, 5, '2019-10-12 14:28:16', '2019-10-12 14:28:16', NULL),
(245, 245, 5, '2019-10-12 14:28:16', '2019-10-12 14:28:16', NULL),
(246, 246, 5, '2019-10-12 14:28:16', '2019-10-12 14:28:16', NULL),
(247, 247, 5, '2019-10-12 14:28:16', '2019-10-12 14:28:16', NULL),
(248, 248, 5, '2019-10-12 14:28:16', '2019-10-12 14:28:16', NULL),
(249, 249, 5, '2019-10-12 14:28:16', '2019-10-12 14:28:16', NULL),
(250, 250, 5, '2019-10-12 14:28:16', '2019-10-12 14:28:16', NULL),
(251, 251, 5, '2019-10-12 14:28:16', '2019-10-12 14:28:16', NULL),
(252, 252, 5, '2019-10-12 14:28:42', '2019-10-12 14:28:42', NULL),
(253, 253, 5, '2019-10-12 14:28:42', '2019-10-12 14:28:42', NULL),
(254, 254, 5, '2019-10-12 14:28:42', '2019-10-12 14:28:42', NULL),
(255, 255, 5, '2019-10-12 14:28:42', '2019-10-12 14:28:42', NULL),
(256, 256, 5, '2019-10-12 14:28:42', '2019-10-12 14:28:42', NULL),
(257, 257, 5, '2019-10-12 14:28:42', '2019-10-12 14:28:42', NULL),
(258, 264, 5, '2019-10-12 14:28:42', '2019-10-12 14:28:42', NULL),
(259, 274, 5, '2019-10-12 14:28:42', '2019-10-12 14:28:42', NULL),
(260, 275, 5, '2019-10-12 14:28:42', '2019-10-12 14:28:42', NULL),
(261, 276, 5, '2019-10-12 14:28:42', '2019-10-12 14:28:42', NULL),
(262, 344, 5, '2019-10-12 14:28:49', '2019-10-12 14:28:49', NULL),
(263, 345, 5, '2019-10-12 14:28:49', '2019-10-12 14:28:49', NULL),
(264, 259, 5, '2019-10-12 14:30:28', '2019-10-12 14:30:28', NULL),
(265, 260, 5, '2019-10-12 14:30:28', '2019-10-12 14:30:28', NULL),
(266, 261, 5, '2019-10-12 14:30:28', '2019-10-12 14:30:28', NULL),
(267, 262, 5, '2019-10-12 14:30:28', '2019-10-12 14:30:28', NULL),
(268, 263, 5, '2019-10-12 14:30:44', '2019-10-12 14:30:44', NULL),
(269, 265, 5, '2019-10-12 14:30:44', '2019-10-12 14:30:44', NULL),
(270, 266, 5, '2019-10-12 14:30:44', '2019-10-12 14:30:44', NULL),
(271, 267, 5, '2019-10-12 14:30:44', '2019-10-12 14:30:44', NULL),
(272, 268, 5, '2019-10-12 14:30:44', '2019-10-12 14:30:44', NULL),
(273, 269, 5, '2019-10-12 14:30:44', '2019-10-12 14:30:44', NULL),
(274, 270, 5, '2019-10-12 14:30:44', '2019-10-12 14:30:44', NULL),
(275, 271, 5, '2019-10-12 14:30:44', '2019-10-12 14:30:44', NULL),
(276, 272, 5, '2019-10-12 14:30:44', '2019-10-12 14:30:44', NULL),
(277, 273, 5, '2019-10-12 14:30:44', '2019-10-12 14:30:44', NULL),
(278, 346, 5, '2019-10-12 14:30:50', '2019-10-12 14:30:50', NULL),
(279, 317, 5, '2019-10-12 14:31:14', '2019-10-12 14:31:14', NULL),
(280, 318, 5, '2019-10-12 14:31:14', '2019-10-12 14:31:14', NULL),
(281, 319, 5, '2019-10-12 14:31:14', '2019-10-12 14:31:14', NULL),
(282, 320, 5, '2019-10-12 14:31:14', '2019-10-12 14:31:14', NULL),
(283, 347, 5, '2019-10-12 14:31:14', '2019-10-12 14:31:14', NULL),
(284, 337, 5, '2019-10-12 14:31:39', '2019-10-12 14:31:39', NULL),
(285, 338, 5, '2019-10-12 14:31:39', '2019-10-12 14:31:39', NULL),
(286, 339, 5, '2019-10-12 14:31:39', '2019-10-12 14:31:39', NULL),
(287, 340, 5, '2019-10-12 14:31:39', '2019-10-12 14:31:39', NULL),
(288, 198, 5, '2019-10-12 14:32:49', '2019-10-12 14:32:49', NULL),
(289, 199, 5, '2019-10-12 14:32:49', '2019-10-12 14:32:49', NULL),
(290, 200, 5, '2019-10-12 14:32:49', '2019-10-12 14:32:49', NULL),
(291, 202, 5, '2019-10-12 14:32:49', '2019-10-12 14:32:49', NULL),
(292, 208, 5, '2019-10-12 14:33:08', '2019-10-12 14:33:08', NULL),
(293, 209, 5, '2019-10-12 14:33:08', '2019-10-12 14:33:08', NULL),
(294, 210, 5, '2019-10-12 14:33:08', '2019-10-12 14:33:08', NULL),
(295, 211, 5, '2019-10-12 14:33:08', '2019-10-12 14:33:08', NULL),
(296, 212, 5, '2019-10-12 14:33:23', '2019-10-12 14:33:23', NULL),
(297, 213, 5, '2019-10-12 14:33:23', '2019-10-12 14:33:23', NULL),
(298, 214, 5, '2019-10-12 14:33:23', '2019-10-12 14:33:23', NULL),
(299, 215, 5, '2019-10-12 14:33:23', '2019-10-12 14:33:23', NULL),
(300, 216, 5, '2019-10-12 14:33:39', '2019-10-12 14:33:39', NULL),
(301, 217, 5, '2019-10-12 14:33:39', '2019-10-12 14:33:39', NULL),
(302, 218, 5, '2019-10-12 14:33:39', '2019-10-12 14:33:39', NULL),
(303, 343, 5, '2019-10-12 14:33:39', '2019-10-12 14:33:39', NULL),
(304, 179, 5, '2019-10-12 14:34:31', '2019-10-12 14:34:31', NULL),
(305, 170, 5, '2019-10-12 14:35:45', '2019-10-12 14:35:45', NULL),
(306, 171, 5, '2019-10-12 14:36:11', '2019-10-12 14:36:11', NULL),
(307, 172, 5, '2019-10-12 14:36:11', '2019-10-12 14:36:11', NULL),
(308, 164, 5, '2019-10-12 14:36:22', '2019-10-12 14:36:22', NULL),
(309, 154, 5, '2019-10-12 14:36:47', '2019-10-12 14:36:47', NULL),
(310, 155, 5, '2019-10-12 14:36:47', '2019-10-12 14:36:47', NULL),
(311, 156, 5, '2019-10-12 14:36:47', '2019-10-12 14:36:47', NULL),
(312, 157, 5, '2019-10-12 14:36:47', '2019-10-12 14:36:47', NULL),
(313, 158, 5, '2019-10-12 14:36:47', '2019-10-12 14:36:47', NULL),
(314, 159, 5, '2019-10-12 14:36:47', '2019-10-12 14:36:47', NULL),
(315, 160, 5, '2019-10-12 14:36:47', '2019-10-12 14:36:47', NULL),
(316, 161, 5, '2019-10-12 14:36:47', '2019-10-12 14:36:47', NULL),
(317, 162, 5, '2019-10-12 14:36:47', '2019-10-12 14:36:47', NULL),
(318, 163, 5, '2019-10-12 14:36:47', '2019-10-12 14:36:47', NULL),
(319, 342, 5, '2019-10-12 14:36:54', '2019-10-12 14:36:54', NULL),
(320, 188, 5, '2019-10-12 14:38:13', '2019-10-12 14:38:13', NULL),
(321, 219, 5, '2019-10-12 14:38:37', '2019-10-12 14:38:37', NULL),
(322, 225, 5, '2019-10-12 14:38:43', '2019-10-12 14:38:43', NULL),
(323, 231, 5, '2019-10-12 14:38:51', '2019-10-12 14:38:51', NULL),
(324, 258, 5, '2019-10-12 14:39:04', '2019-10-12 14:39:04', NULL),
(325, 277, 5, '2019-10-12 14:39:21', '2019-10-12 14:39:21', NULL),
(326, 283, 5, '2019-10-12 14:39:29', '2019-10-12 14:39:29', NULL),
(327, 289, 5, '2019-10-12 14:39:34', '2019-10-12 14:39:34', NULL),
(328, 296, 5, '2019-10-12 14:39:45', '2019-10-12 14:39:45', NULL),
(329, 341, 5, '2019-10-12 14:40:05', '2019-10-12 14:40:05', NULL),
(330, 154, 2, '2019-10-12 15:00:03', '2019-10-12 15:00:03', NULL),
(331, 155, 2, '2019-10-12 15:00:03', '2019-10-12 15:00:03', NULL),
(332, 156, 2, '2019-10-12 15:00:03', '2019-10-12 15:00:03', NULL),
(333, 157, 2, '2019-10-12 15:00:03', '2019-10-12 15:00:03', NULL),
(334, 158, 2, '2019-10-12 15:00:03', '2019-10-12 15:00:03', NULL),
(335, 159, 2, '2019-10-12 15:00:03', '2019-10-12 15:00:03', NULL),
(336, 160, 2, '2019-10-12 15:00:03', '2019-10-12 15:00:03', NULL),
(337, 161, 2, '2019-10-12 15:00:03', '2019-10-12 15:00:03', NULL),
(338, 162, 2, '2019-10-12 15:00:03', '2019-10-12 15:00:03', NULL),
(339, 163, 2, '2019-10-12 15:00:03', '2019-10-12 15:00:03', NULL),
(340, 342, 2, '2019-10-12 15:00:10', '2019-10-12 15:00:10', NULL),
(341, 164, 2, '2019-10-12 15:00:21', '2019-10-12 15:00:21', NULL),
(342, 170, 2, '2019-10-12 15:00:28', '2019-10-12 15:00:28', NULL),
(343, 179, 2, '2019-10-12 15:00:35', '2019-10-12 15:00:35', NULL),
(344, 188, 2, '2019-10-12 15:00:44', '2019-10-12 15:00:44', NULL),
(345, 198, 2, '2019-10-12 15:00:57', '2019-10-12 15:00:57', NULL),
(346, 199, 2, '2019-10-12 15:00:57', '2019-10-12 15:00:57', NULL),
(347, 200, 2, '2019-10-12 15:00:57', '2019-10-12 15:00:57', NULL),
(348, 208, 2, '2019-10-12 15:01:11', '2019-10-12 15:01:11', NULL),
(349, 209, 2, '2019-10-12 15:01:11', '2019-10-12 15:01:11', NULL),
(350, 210, 2, '2019-10-12 15:01:11', '2019-10-12 15:01:11', NULL),
(351, 211, 2, '2019-10-12 15:01:24', '2019-10-12 15:01:24', NULL),
(352, 212, 2, '2019-10-12 15:01:24', '2019-10-12 15:01:24', NULL),
(353, 213, 2, '2019-10-12 15:01:24', '2019-10-12 15:01:24', NULL),
(354, 214, 2, '2019-10-12 15:01:37', '2019-10-12 15:01:37', NULL),
(355, 215, 2, '2019-10-12 15:01:37', '2019-10-12 15:01:37', NULL),
(356, 216, 2, '2019-10-12 15:01:37', '2019-10-12 15:01:37', NULL),
(357, 217, 2, '2019-10-12 15:01:48', '2019-10-12 15:01:48', NULL),
(358, 218, 2, '2019-10-12 15:01:48', '2019-10-12 15:01:48', NULL),
(359, 343, 2, '2019-10-12 15:01:48', '2019-10-12 15:01:48', NULL),
(360, 219, 2, '2019-10-12 15:02:00', '2019-10-12 15:02:00', NULL),
(361, 225, 2, '2019-10-12 15:02:07', '2019-10-12 15:02:07', NULL),
(362, 231, 2, '2019-10-12 15:02:12', '2019-10-12 15:02:12', NULL),
(363, 242, 2, '2019-10-12 15:04:49', '2019-10-12 15:04:49', NULL),
(364, 243, 2, '2019-10-12 15:04:49', '2019-10-12 15:04:49', NULL),
(365, 244, 2, '2019-10-12 15:04:49', '2019-10-12 15:04:49', NULL),
(366, 252, 2, '2019-10-12 15:08:25', '2019-10-12 15:08:25', NULL),
(367, 277, 2, '2019-10-12 15:09:42', '2019-10-12 15:09:42', NULL),
(368, 283, 2, '2019-10-12 15:09:49', '2019-10-12 15:09:49', NULL),
(369, 289, 2, '2019-10-12 15:09:56', '2019-10-12 15:09:56', NULL),
(370, 296, 2, '2019-10-12 15:10:01', '2019-10-12 15:10:01', NULL),
(371, 304, 2, '2019-10-12 15:10:10', '2019-10-12 15:10:10', NULL),
(372, 317, 2, '2019-10-12 15:10:23', '2019-10-12 15:10:23', NULL),
(373, 318, 2, '2019-10-12 15:10:23', '2019-10-12 15:10:23', NULL),
(374, 319, 2, '2019-10-12 15:10:23', '2019-10-12 15:10:23', NULL),
(375, 320, 2, '2019-10-12 15:10:23', '2019-10-12 15:10:23', NULL),
(376, 347, 2, '2019-10-12 15:10:23', '2019-10-12 15:10:23', NULL),
(377, 341, 2, '2019-10-12 15:10:35', '2019-10-12 15:10:35', NULL),
(378, 342, 3, '2019-10-12 15:11:21', '2019-10-12 15:11:21', NULL),
(379, 164, 3, '2019-10-12 15:11:31', '2019-10-12 15:11:31', NULL),
(380, 188, 3, '2019-10-12 15:11:48', '2019-10-12 15:11:48', NULL),
(381, 218, 3, '2019-10-12 15:12:24', '2019-10-12 15:12:24', NULL),
(382, 198, 3, '2019-10-12 15:17:54', '2019-10-12 15:17:54', NULL),
(383, 199, 3, '2019-10-12 15:17:54', '2019-10-12 15:17:54', NULL),
(384, 200, 3, '2019-10-12 15:17:54', '2019-10-12 15:17:54', NULL),
(385, 212, 3, '2019-10-12 15:18:42', '2019-10-12 15:18:42', NULL),
(386, 213, 3, '2019-10-12 15:18:42', '2019-10-12 15:18:42', NULL),
(387, 214, 3, '2019-10-12 15:18:42', '2019-10-12 15:18:42', NULL),
(388, 215, 3, '2019-10-12 15:18:42', '2019-10-12 15:18:42', NULL),
(389, 216, 3, '2019-10-12 15:18:42', '2019-10-12 15:18:42', NULL),
(390, 217, 3, '2019-10-12 15:18:42', '2019-10-12 15:18:42', NULL),
(391, 202, 3, '2019-10-12 15:19:55', '2019-10-12 15:19:55', NULL),
(392, 208, 3, '2019-10-12 15:19:55', '2019-10-12 15:19:55', NULL),
(393, 209, 3, '2019-10-12 15:19:55', '2019-10-12 15:19:55', NULL),
(394, 210, 3, '2019-10-12 15:19:55', '2019-10-12 15:19:55', NULL),
(395, 154, 4, '2019-10-12 15:20:35', '2019-10-12 15:20:35', NULL),
(396, 156, 4, '2019-10-12 15:20:35', '2019-10-12 15:20:35', NULL),
(397, 162, 4, '2019-10-12 15:20:35', '2019-10-12 15:20:35', NULL),
(398, 163, 4, '2019-10-12 15:20:35', '2019-10-12 15:20:35', NULL),
(399, 317, 3, '2019-10-12 15:21:08', '2019-10-12 15:21:08', NULL),
(400, 318, 3, '2019-10-12 15:21:08', '2019-10-12 15:21:08', NULL),
(401, 319, 3, '2019-10-12 15:21:08', '2019-10-12 15:21:08', NULL),
(402, 320, 3, '2019-10-12 15:21:08', '2019-10-12 15:21:08', NULL),
(403, 242, 3, '2019-10-12 15:23:41', '2019-10-12 15:23:41', NULL),
(404, 243, 3, '2019-10-12 15:23:41', '2019-10-12 15:23:41', NULL),
(405, 244, 3, '2019-10-12 15:23:41', '2019-10-12 15:23:41', NULL),
(406, 170, 4, '2019-10-12 15:25:19', '2019-10-12 15:25:19', NULL),
(407, 218, 4, '2019-10-12 15:26:13', '2019-10-12 15:26:13', NULL),
(408, 252, 4, '2019-10-12 15:27:34', '2019-10-12 15:27:34', NULL),
(409, 317, 4, '2019-10-12 15:27:55', '2019-10-12 15:27:55', NULL),
(410, 318, 4, '2019-10-12 15:27:55', '2019-10-12 15:27:55', NULL),
(411, 319, 4, '2019-10-12 15:27:55', '2019-10-12 15:27:55', NULL),
(412, 320, 4, '2019-10-12 15:27:55', '2019-10-12 15:27:55', NULL),
(413, 348, 2, '2019-10-12 16:01:03', '2019-10-12 16:01:03', NULL),
(414, 348, 5, '2019-10-12 16:01:15', '2019-10-12 16:01:15', NULL),
(415, 198, 4, '2019-10-13 03:31:51', '2019-10-13 03:31:51', NULL),
(416, 199, 4, '2019-10-13 03:31:51', '2019-10-13 03:31:51', NULL),
(417, 200, 4, '2019-10-13 03:31:51', '2019-10-13 03:31:51', NULL),
(418, 208, 4, '2019-10-13 03:32:04', '2019-10-13 03:32:04', NULL),
(419, 209, 4, '2019-10-13 03:32:04', '2019-10-13 03:32:04', NULL),
(420, 210, 4, '2019-10-13 03:32:04', '2019-10-13 03:32:04', NULL),
(421, 214, 4, '2019-10-13 03:32:22', '2019-10-13 03:32:22', NULL),
(422, 215, 4, '2019-10-13 03:32:22', '2019-10-13 03:32:22', NULL),
(423, 216, 4, '2019-10-13 03:32:22', '2019-10-13 03:32:22', NULL),
(424, 217, 4, '2019-10-13 03:32:22', '2019-10-13 03:32:22', NULL),
(425, 213, 4, '2019-10-13 03:34:30', '2019-10-13 03:34:30', NULL),
(426, 242, 4, '2019-10-13 03:39:39', '2019-10-13 03:39:39', NULL),
(427, 243, 4, '2019-10-13 03:39:39', '2019-10-13 03:39:39', NULL),
(428, 244, 4, '2019-10-13 03:39:39', '2019-10-13 03:39:39', NULL),
(429, 344, 4, '2019-10-13 03:41:08', '2019-10-13 03:41:08', NULL),
(430, 344, 3, '2019-10-13 03:42:48', '2019-10-13 03:42:48', NULL),
(431, 252, 3, '2019-10-13 03:44:38', '2019-10-13 03:44:38', NULL),
(432, 154, 3, '2019-10-16 01:25:12', '2019-10-16 01:25:12', NULL),
(433, 155, 3, '2019-10-16 01:25:12', '2019-10-16 01:25:12', NULL),
(434, 156, 3, '2019-10-16 01:25:12', '2019-10-16 01:25:12', NULL),
(435, 157, 3, '2019-10-16 01:25:12', '2019-10-16 01:25:12', NULL),
(436, 158, 3, '2019-10-16 01:25:12', '2019-10-16 01:25:12', NULL),
(437, 159, 3, '2019-10-16 01:25:12', '2019-10-16 01:25:12', NULL),
(438, 160, 3, '2019-10-16 01:25:12', '2019-10-16 01:25:12', NULL),
(439, 161, 3, '2019-10-16 01:25:12', '2019-10-16 01:25:12', NULL),
(440, 162, 3, '2019-10-16 01:25:12', '2019-10-16 01:25:12', NULL),
(441, 163, 3, '2019-10-16 01:25:12', '2019-10-16 01:25:12', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`permission_id`),
  ADD UNIQUE KEY `permissions_permission_id_route_id_role_id_unique` (`permission_id`,`route_id`,`role_id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `route_id` (`route_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `permission_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=442;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`),
  ADD CONSTRAINT `permissions_ibfk_2` FOREIGN KEY (`route_id`) REFERENCES `routes` (`route_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
