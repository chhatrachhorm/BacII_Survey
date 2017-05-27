-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2017 at 05:48 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `ans_id` int(10) UNSIGNED NOT NULL,
  `ans_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `q_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`ans_id`, `ans_desc`, `q_id`) VALUES
(1, '1', 1),
(2, '2', 1),
(3, '3', 1),
(4, '4', 1),
(5, '5', 1),
(6, '6', 1),
(7, '7', 1),
(8, '8', 1),
(9, '9', 1),
(10, '10', 1),
(11, '11', 2),
(12, '12', 2),
(13, '13', 2),
(14, '14', 2),
(15, '15', 2),
(16, '16', 2),
(17, '17', 2),
(18, '18', 2),
(19, '19', 2),
(20, '20', 2),
(21, '21', 3),
(22, '22', 3),
(23, '23', 3),
(24, '24', 3),
(25, '25', 3),
(26, '26', 3),
(27, '27', 3),
(28, '28', 3),
(29, '29', 3),
(30, '30', 3),
(31, '31', 4),
(32, '32', 4),
(33, '33', 4),
(34, '34', 4),
(35, '35', 4),
(36, '36', 4),
(37, '37', 4),
(38, '38', 4),
(39, '39', 4),
(40, '40', 4),
(41, '41', 5),
(42, '42', 5),
(43, '43', 5),
(44, '44', 5),
(45, '45', 5),
(46, '46', 5),
(47, '47', 5),
(48, '48', 5),
(49, '49', 5),
(50, '50', 5),
(51, '51', 6),
(52, '52', 6),
(53, '53', 6),
(54, '54', 6),
(55, '55', 6),
(56, '56', 6),
(57, '57', 6),
(58, '58', 6),
(59, '59', 6),
(60, '60', 6),
(61, '61', 7),
(62, '62', 7),
(63, '63', 7),
(64, '64', 7),
(65, '65', 7),
(66, '66', 7),
(67, '67', 7),
(68, '68', 7),
(69, '69', 7),
(70, '70', 7),
(71, '71', 8),
(72, '72', 8),
(73, '73', 8),
(74, '74', 8),
(75, '75', 8),
(76, '76', 8),
(77, '77', 8),
(78, '78', 8),
(79, '79', 8),
(80, '80', 8),
(81, '81', 9),
(82, '82', 9),
(83, '83', 9),
(84, '84', 9),
(85, '85', 9),
(86, '86', 9),
(87, '87', 9),
(88, '88', 9),
(89, '89', 9),
(90, '90', 9),
(91, '91', 10),
(92, '92', 10),
(93, '93', 10),
(94, '94', 10),
(95, '95', 10),
(96, '96', 10),
(97, '97', 10),
(98, '98', 10),
(99, '99', 10),
(100, '100', 10),
(101, '101', 11),
(102, '102', 11),
(103, '103', 11),
(104, '104', 11),
(105, '105', 11),
(106, '106', 11),
(107, '107', 11),
(108, '108', 11),
(109, '109', 11),
(110, '110', 11),
(111, '111', 12),
(112, '112', 12),
(113, '113', 12),
(114, '114', 12),
(115, '115', 12),
(116, '116', 12),
(117, '117', 12),
(118, '118', 12),
(119, '119', 12),
(120, '120', 12),
(121, '121', 13),
(122, '122', 13),
(123, '123', 13),
(124, '124', 13),
(125, '125', 13),
(126, '126', 13),
(127, '127', 13),
(128, '128', 13),
(129, '129', 13),
(130, '130', 13),
(131, '131', 14),
(132, '132', 14),
(133, '133', 14),
(134, '134', 14),
(135, '135', 14),
(136, '136', 14),
(137, '137', 14),
(138, '138', 14),
(139, '139', 14),
(140, '140', 14),
(141, '141', 15),
(142, '142', 15),
(143, '143', 15),
(144, '144', 15),
(145, '145', 15),
(146, '146', 15),
(147, '147', 15),
(148, '148', 15),
(149, '149', 15),
(150, '150', 15),
(151, '151', 16),
(152, '152', 16),
(153, '153', 16),
(154, '154', 16),
(155, '155', 16),
(156, '156', 16),
(157, '157', 16),
(158, '158', 16),
(159, '159', 16),
(160, '160', 16);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_05_27_065331_create_questions_table', 1),
(2, '2017_05_27_065422_create_answers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `q_id` int(10) UNSIGNED NOT NULL,
  `q_desc` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`q_id`, `q_desc`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '6'),
(7, '7'),
(8, '8'),
(9, '9'),
(10, '10'),
(11, '11'),
(12, '12'),
(13, '13'),
(14, '14'),
(15, '15'),
(16, '16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`ans_id`),
  ADD KEY `answers_q_id_foreign` (`q_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`q_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `ans_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `q_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_q_id_foreign` FOREIGN KEY (`q_id`) REFERENCES `questions` (`q_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
