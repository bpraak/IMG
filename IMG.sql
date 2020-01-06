-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 02, 2020 at 02:14 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `IMG`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `branch_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `status`, `branch_name`) VALUES
(0, 1, 'Common Subjects'),
(1, 1, 'Architecture'),
(2, 1, 'Biotechnology'),
(3, 1, 'Chemical'),
(4, 1, 'Polymer'),
(5, 1, 'Civil'),
(6, 1, 'Electrical'),
(7, 1, 'Electronics & Communication'),
(8, 1, 'Computer Science'),
(9, 1, 'Mechanical'),
(10, 1, 'Production & Industrial'),
(11, 1, 'Metallurgical & Materials'),
(12, 1, 'Engineering Physics');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `post_title` text NOT NULL,
  `post_des` text NOT NULL,
  `content` text NOT NULL,
  `created` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `downloads` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_title`, `post_des`, `content`, `created`, `status`, `downloads`, `user_id`, `branch_id`, `type_id`, `subject_id`) VALUES
(10, 'First Post', 'This is my first post', 'Black Event Photographer Logo.png', '2019-12-29 22:14:04', 1, 4, 1, 0, 2, 102),
(11, 'Second post', 'This is my second post', 'comment.sql', '2019-12-30 09:42:55', 1, 1, 1, 0, 2, 102),
(12, 'Third post', 'This is my Third Post', 'anydesk.dmg', '2019-12-30 09:44:36', 1, 1, 1, 0, 2, 102),
(13, 'Fourth Post ', 'This is my fourth post', 'Install Spotify.app.zip', '2019-12-30 09:45:52', 1, 0, 1, 0, 2, 102),
(14, 'fifth post', 'this is my fifth post', 'jquery-3.2.1.min.js', '2019-12-30 09:46:27', 1, 0, 1, 0, 2, 102),
(15, 'Sixth Post ', 'This is my sixth post testing out the length of my description box if it disturbs the structure of my table created. This is my sixth post testing out the length of my description box if it disturbs the structure of my table created.This is my sixth post testing out the length of my description box if it disturbs the structure of my table created.This is my sixth post testing out the length of my description box if it disturbs the structure of my table created.', 'Black Event Photographer Logo (5).png', '2019-12-30 09:48:35', 1, 9, 1, 0, 2, 102),
(16, 'first notes', 'first notes', '1362907.png', '2019-12-30 14:40:41', 1, 22, 1, 0, 1, 102),
(17, 'first presentation', 'first presentation', 'glance_design_dashboard-web_Free06-01-2018_792517429.zip', '2019-12-30 14:41:23', 1, 0, 1, 0, 3, 102),
(18, 'first book', 'first book', 'Black Event Photographer Logo (1).png', '2019-12-30 14:42:16', 1, 0, 1, 0, 4, 102),
(19, 'First Other', '<p>This doesn&#39;t make sense. will this work because the problem is of &#39; aftert doesn</p>\r\n', 'Black Event Photographer Logo (1).png', '2019-12-30 15:14:55', 1, 0, 1, 0, 5, 102),
(20, 'First Other', '<p>This doesn&#39;t make sense. will this work because the problem is of &#39; aftert doesn</p>\r\n', 'Black Event Photographer Logo (1).png', '2019-12-30 15:43:29', 1, 0, 1, 0, 5, 102),
(21, 'Seventh post', '<p>sssssssssssss</p>\r\n', 'Black Event Photographer Logo (5).png', '2019-12-30 17:23:03', 1, 0, 1, 0, 2, 102),
(22, 'Eighth post', '<p>qqqqqqqqqqqqqqq</p>\r\n', 'Black Event Photographer Logo.png', '2019-12-30 17:23:26', 1, 0, 1, 0, 2, 102),
(23, 'yoyoyo', '<p>I like Albert Einstein.</p>\r\n', 'Assignment 5 (MAN 001).pdf', '2020-01-02 01:31:33', 1, 1, 5, 6, 1, 53),
(24, 'Second post', '<p>qqqwwerr</p>\r\n', 'EC101A_U3_4f.pdf', '2020-01-02 02:10:22', 1, 3, 1, 0, 1, 102);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `subject_code` varchar(10) NOT NULL,
  `subject_name` text NOT NULL,
  `branch_id` int(11) NOT NULL,
  `sem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_code`, `subject_name`, `branch_id`, `sem`) VALUES
(1, 'ARN-101 I', 'Introduction to Architecture', 1, 1),
(2, 'ARN-103', 'Visual Art I', 1, 1),
(3, 'ARN-105', 'Architectural Graphics I', 1, 1),
(4, 'ARN-107', 'Basic Design and Creative Workshop I', 1, 1),
(5, 'ARN-102', 'Architectural Design I', 1, 2),
(6, 'ARN-104', 'Introduction to Building Materials and Construction-I', 1, 2),
(7, 'ARN-106', 'Architectural Graphics II', 1, 2),
(8, 'ARN-108', 'Climatology in Architecture', 1, 2),
(9, 'ARN-110', 'Visual Art & Creative Workshop II', 1, 2),
(10, 'ARN-112', 'Computer Systems and Programming', 1, 2),
(11, 'CEN-192', 'Geomatics Techniques for Architects', 1, 2),
(12, 'PHN-007', 'Modern Physics', 2, 1),
(13, 'BTN-101', 'Introduction to Biotechnology', 2, 1),
(14, 'BTN-103', 'Computer Programming', 2, 1),
(15, 'MAN- 002', 'Mathematical Methods', 2, 2),
(16, 'BTN-102', 'Process Calculations', 2, 2),
(17, 'BTN-104', 'Cell Biology', 2, 2),
(18, 'BTN-106', 'Biochemistry', 2, 2),
(19, 'CYN-002', 'Organic and Inorganic Chemistry', 2, 2),
(20, 'MIN-102', 'Basic Manufacturing Processes', 2, 2),
(21, 'CYN-001', 'Physical Chemistry', 3, 1),
(22, 'CHN-101', 'Introduction to Chemical Engineering', 3, 1),
(23, 'CHN-103', 'Computer Programming and Numerical Methods', 3, 1),
(24, 'CYN-002', 'Organic and Inorganic Chemistry', 3, 2),
(25, 'MAN-002', 'Mathematical Methods', 3, 2),
(26, 'CHN-102', 'Material and Energy Balance', 3, 2),
(27, 'CHN-104', 'Fluid Dynamics', 3, 2),
(28, 'CHN-106', 'Thermodynamics and Chemical Kinetics', 3, 2),
(29, 'EEN-112', 'Electrical Science', 3, 2),
(30, 'PEN-101', 'Introduction to Polymer Science and Engineering', 4, 1),
(31, 'CYN-009', 'Polymer Chemistry', 4, 1),
(32, 'PEN-103', 'Computer Programming and Numerical Methods', 4, 1),
(33, 'MAN-002', 'Mathematical Methods', 4, 2),
(34, 'CHN-102', 'Material and Energy Balance', 4, 2),
(35, 'CHN-106', 'Thermodynamics and Chemical Kinetics', 4, 2),
(36, 'PEN-102', 'Properties of Polymers', 4, 2),
(37, 'CYN-011', 'Polymer Characterization', 4, 2),
(38, 'EEN-112', 'Electrical Science', 4, 2),
(39, 'CYN-013', 'Polymer Chemistry Lab', 4, 2),
(40, 'PHN-001', 'Mechanics', 5, 1),
(41, 'CEN-101', 'Introduction to Civil Engineering', 5, 1),
(42, 'CEN-103', 'Numerical Methods and Computer Programming', 5, 1),
(43, 'CYN-008', 'General Chemistry - III', 5, 2),
(44, 'MAN-006', 'Probability and Statistics', 5, 2),
(45, 'CEN-102', 'Solid Mechanics', 5, 2),
(46, 'CEN-104', 'Water Supply Engineering', 5, 2),
(47, 'CEN-106', 'Geomatics Engineering – I', 5, 2),
(48, 'CEN-108', 'Fluid Mechanics', 5, 2),
(49, 'PHN-003', 'Electromagnetic Field Theory', 6, 1),
(50, 'EEN-101', 'Introduction to Electrical Engineering', 6, 1),
(51, 'EEN-103', 'Programming in C++', 6, 1),
(52, 'MAN-002', 'Mathematics-II ', 6, 2),
(53, 'PHN-004', 'Modern Physics', 6, 2),
(54, 'MIN-106', 'Engineering Thermodynamics', 6, 2),
(55, 'EEN-102', 'Network Theory', 6, 2),
(56, 'EEN-104', 'Electrical Measurement and Measuring Instruments', 6, 2),
(57, 'EEN-106', 'Analog Electronics', 6, 2),
(58, 'PHN-005', 'Electrodynamics and Optics', 7, 1),
(59, 'PHN-005', 'Introduction to Electronics and Communication Engineering', 7, 1),
(60, 'CSN-103', 'Fundamentals of Object Oriented Programming', 7, 1),
(61, 'PHN-006', 'Quantum Mechanics and Statistical Mechanics', 7, 2),
(62, 'CSN-102', 'Data Structures', 7, 2),
(63, 'ECN-104', 'Digital Logic Design', 7, 2),
(64, 'ECN-142', 'Semiconductor Devices', 7, 2),
(65, 'EEN-112', 'Electrical Science', 7, 2),
(66, 'PHN-005', 'Electrodynamics and Optics', 8, 1),
(67, 'CSN-101', 'Introduction to Computer Science and Engineering', 8, 1),
(68, 'CSN-103', 'Fundamentals of Object Oriented Programmin', 8, 1),
(69, 'MAN-010', 'Optimization Techniques', 8, 2),
(70, 'PHN-006', 'Quantum Mechanics and Statistical Mechanics', 8, 2),
(71, 'ECN-104', 'Digital Logic Design', 8, 2),
(72, 'CSN-106', 'Discrete Structures', 8, 2),
(73, 'CSN-102', 'Data Structures', 8, 2),
(74, 'ECN-102', 'Fundamentals of  Electronics', 8, 2),
(75, 'PHN-001', 'Mechanics', 9, 1),
(76, 'MIN-101A', 'Introduction to Mechanical Engineering', 9, 1),
(77, 'MIN-103', 'Programming and Data Structure', 9, 1),
(78, 'MAN-004', 'Numerical Methods', 9, 2),
(79, 'PHN-008', 'Electromagnetic Theory', 9, 2),
(80, 'MIN-104', 'Manufacturing Technology-I', 9, 2),
(81, 'MIN-106', 'Engineering Thermodynamic', 9, 2),
(82, 'MIN-108', 'Mechanical Engineering Drawing', 9, 2),
(83, 'MTN-106', 'Material Science', 9, 2),
(84, 'PHN-001', 'Mechanics', 10, 1),
(85, 'MIN-101B', 'Introduction to Production and Industrial Engineering', 10, 1),
(86, 'MIN-103', 'Programming and Data Structure', 10, 1),
(87, 'MAN-006', 'Probability and Statistics', 10, 2),
(88, 'PHN-008', 'Electromagnetic Theory', 10, 2),
(89, 'MIN-104', 'Manufacturing Technology-I', 10, 2),
(90, 'MIN-108', 'Engineering drawing', 10, 2),
(91, 'MIN-118', 'Fluid Mechanics', 10, 2),
(92, 'MTN-106', 'Material Science', 10, 2),
(93, 'PHN-007', 'Modern Physics', 11, 1),
(94, 'MTN-101', 'Introduction to Metallurgical and Materials Engineering', 11, 1),
(95, 'MTN-103', 'Computer Programming', 11, 1),
(96, 'CYN-006', 'General Chemistry-II', 11, 2),
(97, 'MAN-002', 'Mathematical Methods', 11, 2),
(98, 'MTN-102', 'Metallurgical Thermodynamics and Kinetics', 11, 2),
(99, 'MTN-104', 'Structural Metallurgy', 11, 2),
(100, 'MTN-110', 'Metallography Lab', 11, 2),
(101, 'MIN-108', 'Mechanical Engineering Drawing', 11, 2),
(102, 'CEN-105', 'Introduction to Environmental Studies', 0, 1),
(103, 'HSN-001A', 'Communication Skills (Basic)', 0, 1),
(104, 'HSN-001B', 'Communication Skills (Advance)', 0, 1),
(105, 'HSN-002', 'Psychology', 0, 1),
(106, 'PHN-101', 'Introduction to Engineering Physics', 12, 1),
(107, 'PHN-103', 'Computer Programming', 12, 1),
(108, 'CYN-001', 'Physical Chemistry', 12, 1),
(109, 'MAN-010', 'Optimization Techniques', 12, 2),
(110, 'PHN-008', 'Electromagnetic Theory', 12, 2),
(111, 'PHN-102', 'Analog Electronics ', 12, 2),
(112, 'PHN-104', 'Mechanics and Relativity', 12, 2),
(113, 'EEN-112', 'Electrical Science', 12, 2),
(114, 'CYN-002', 'Organic and Inorganic Chemistry', 12, 2);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` int(11) NOT NULL,
  `type_name` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_name`, `status`) VALUES
(1, 'Notes', 1),
(2, 'Video', 1),
(3, 'Presentation', 1),
(4, 'Book', 1),
(5, 'Other', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_enrol` int(9) NOT NULL,
  `password` text NOT NULL,
  `user_name` text NOT NULL,
  `branch_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `posts` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_enrol`, `password`, `user_name`, `branch_id`, `created`, `status`, `posts`) VALUES
(1, 19115089, '123', 'Prakhar Gupta', 6, '2019-12-26 05:59:03', 1, 0),
(2, 19112029, '123', 'Gauransh', 3, '2019-12-27 06:31:09', 1, 0),
(3, 19115024, '123', 'chirag', 6, '2019-12-27 18:32:22', 1, 0),
(4, 19115114, '8871853272', 'Sanskar', 6, '2020-01-02 00:37:52', 1, 0),
(5, 19115045, 'dakshmehla2001', 'Daksh Mehla', 6, '2020-01-02 01:28:53', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
