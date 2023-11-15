-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 15, 2023 at 08:08 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_responses`
--

CREATE TABLE `form_responses` (
  `response_id` int(11) NOT NULL,
  `date` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_responses`
--

INSERT INTO `form_responses` (`response_id`, `date`) VALUES
(0, '2023-11-14'),
(1, '2023-11-14'),
(2, '2023-11-14'),
(3, '2023-11-14'),
(4, '2023-11-14'),
(5, '2023-11-14'),
(6, '2023-11-14'),
(7, '2023-11-14');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `photo_id` int(11) NOT NULL,
  `photo_name` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_path` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_id` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_date` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`photo_id`, `photo_name`, `file_path`, `page_id`, `photo_date`) VALUES
(0, 'test1', '../media/images/projects/test1.jpg', 'project_details', 'today'),
(1, 'test2', '../media/images/projects/test2.jpg', 'project_details', 'today'),
(2, 'test3', '../media/images/projects/test3.jpg', 'project_details', 'today'),
(3, 'test4', '../media/images/projects/test4.jpg', 'project_details', 'today'),
(4, 'carousel1', '../media/images/carousel1.jpg', 'index', 'today'),
(5, 'carousel2', '../media/images/carousel2.jpg', 'index', 'today'),
(6, 'carousel3', '../media/images/carousel3.jpg', 'index', 'today'),
(7, 'headshot', '../media/images/headshot.jpg', 'about_us', 'today');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_city` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_state` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `project_name`, `project_description`, `project_city`, `project_state`) VALUES
(0, 'Test 1', 'Project Description Here. This project was completed on some date at some location. This project cost approximately some amount of money and took some specific amount of time to complete. This project was completed by some people. This project was completed for some client.', 'Kent', 'Ohio'),
(1, 'Test 2', 'Project Description Here. This project was completed on some date at some location. This project cost approximately some amount of money and took some specific amount of time to complete. This project was completed by some people. This project was completed for some client.', 'Kent', 'Ohio'),
(2, 'Test 3', 'Project Description Here. This project was completed on some date at some location. This project cost approximately some amount of money and took some specific amount of time to complete. This project was completed by some people. This project was completed for some client.', 'Kent', 'Ohio'),
(3, 'Test 4', 'Project Description Here. This project was completed on some date at some location. This project cost approximately some amount of money and took some specific amount of time to complete. This project was completed by some people. This project was completed for some client.', 'Kent', 'Ohio'),
(4, 'Test 5', 'Testing testing 1 2 3.', 'Columbus', 'OH');

-- --------------------------------------------------------

--
-- Table structure for table `project_info`
--

CREATE TABLE `project_info` (
  `project_info_id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `project_info_text` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_info`
--

INSERT INTO `project_info` (`project_info_id`, `project_id`, `project_info_text`) VALUES
(0, 0, 'Project Info'),
(1, 1, 'Project info'),
(2, 2, 'Project info'),
(3, 3, 'Project info');

-- --------------------------------------------------------

--
-- Table structure for table `project_photos`
--

CREATE TABLE `project_photos` (
  `project_photo_id` int(11) NOT NULL,
  `photo_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `project_photo_order` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_photos`
--

INSERT INTO `project_photos` (`project_photo_id`, `photo_id`, `project_id`, `project_photo_order`) VALUES
(5, 0, 1, 0),
(6, 1, 1, 1),
(7, 2, 1, 2),
(8, 3, 1, 3),
(9, 0, 2, 0),
(10, 1, 2, 1),
(11, 2, 2, 2),
(12, 3, 2, 3),
(13, 0, 3, 0),
(14, 1, 3, 1),
(15, 2, 3, 2),
(16, 3, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `website_text`
--

CREATE TABLE `website_text` (
  `text_id` int(11) NOT NULL,
  `text_field` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `website_text`
--

INSERT INTO `website_text` (`text_id`, `text_field`) VALUES
(0, 'Our motto 1\nOur motto 2\nOur motto 3'),
(1, '\n                    \n                    \n                    \n                    Test Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.                                                                                                                '),
(2, '\n                \n                \n                Who are we?                        '),
(3, '\n                    \n                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.    \n                    \n                    \n                '),
(4, '\n                        \n                        \n                        Michael Ely                                        '),
(5, '\n                        \n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.                                                            '),
(6, '\n                        \n                        \n                        Experience                                        '),
(7, '\n                        \n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. \n                     \n                     \n                    '),
(8, 'Awards & Certifications'),
(9, 'elyassociates@gmail.com'),
(10, 'xxx-xxx-xxxx'),
(11, '1277 Shady Lakes Dr, Kent, OH 44240'),
(12, 'Talk to us!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_responses`
--
ALTER TABLE `form_responses`
  ADD PRIMARY KEY (`response_id`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `project_info`
--
ALTER TABLE `project_info`
  ADD PRIMARY KEY (`project_info_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `project_photos`
--
ALTER TABLE `project_photos`
  ADD PRIMARY KEY (`project_photo_id`),
  ADD KEY `photo_id` (`photo_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `website_text`
--
ALTER TABLE `website_text`
  ADD PRIMARY KEY (`text_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project_info`
--
ALTER TABLE `project_info`
  ADD CONSTRAINT `project_info_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`project_id`);

--
-- Constraints for table `project_photos`
--
ALTER TABLE `project_photos`
  ADD CONSTRAINT `project_photos_ibfk_1` FOREIGN KEY (`photo_id`) REFERENCES `photo` (`photo_id`),
  ADD CONSTRAINT `project_photos_ibfk_2` FOREIGN KEY (`project_id`) REFERENCES `projects` (`project_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
