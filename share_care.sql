-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Sep 25, 2016 at 05:35 AM
-- Server version: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `share_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(2) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'hpz321@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `survey_id` int(11) NOT NULL,
  `date` varchar(16) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`answer_id`, `user_id`, `survey_id`, `date`) VALUES
(2, 1, 13, '23-09-2016'),
(3, 2, 13, '24-09-2016'),
(4, 1, 13, '24-09-2016'),
(5, 1, 13, '24-09-2016'),
(6, 1, 13, '24-09-2016'),
(7, 1, 13, '24-09-2016'),
(8, 1, 13, '24-09-2016'),
(9, 1, 14, '24-09-2016'),
(10, 1, 14, '25-09-2016');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Mobile'),
(2, 'Computers');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `survey_id` tinyint(6) NOT NULL,
  `question_title` varchar(50) NOT NULL,
  `question_type` varchar(10) NOT NULL,
  `question_options` varchar(500) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `answer_id` tinyint(6) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `survey_id`, `question_title`, `question_type`, `question_options`, `is_active`, `answer_id`) VALUES
(1, 10, 'Do you want to buy it?', '', 'Yes,No,Maybe', 1, NULL),
(2, 10, 'Expected Price?', '', '', 1, NULL),
(3, 10, 'The Things You Like', '', '', 1, NULL),
(4, 11, 'Do you want to buy it?', '', 'Yes,No,Maybe', 1, NULL),
(5, 11, 'Expected Price?', '', '', 1, NULL),
(6, 11, 'The Things You Like', '', '', 1, NULL),
(7, 12, 'Do you want to buy it?', 'Radio', 'Yes,No,Maybe', 1, NULL),
(8, 12, 'Expected Price?', 'Text Box', '', 1, NULL),
(9, 12, 'The Things You Like', 'Text Area', '', 1, NULL),
(10, 13, 'Do you ever participated in surveys?', 'Text Box', '', 1, NULL),
(11, 13, 'Describe your experience.', 'Text Area', '', 1, NULL),
(12, 13, 'Which is Better Survey or Review?', 'Radio', 'Survey,Review', 1, NULL),
(13, 13, 'Do you like this survey?', 'Check Box', 'Yes,No', 1, NULL),
(14, 14, 'Will u buy it?', 'Radio', 'Yes,No', 1, NULL),
(15, 14, 'Expected Price?', 'Text Box', '', 1, NULL),
(16, 14, 'What Features You Like?', 'Check Box', 'Camera,IOS,Fast', 1, NULL),
(17, 14, 'Your Address?', 'Text Area', '', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `question_answers`
--

CREATE TABLE `question_answers` (
  `question_answer_id` int(11) NOT NULL,
  `answer_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `question_answer` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_answers`
--

INSERT INTO `question_answers` (`question_answer_id`, `answer_id`, `question_id`, `question_answer`) VALUES
(1, 2, 10, 'asdasd'),
(2, 2, 11, 'asdasdasdasdasd'),
(3, 2, 12, 'Survey'),
(4, 2, 13, 'No'),
(5, 3, 10, 'asdasdasdasdasd'),
(6, 3, 11, 'sdfsdfaSFDASDASDASD'),
(7, 3, 12, 'Survey'),
(8, 3, 13, 'Yes'),
(9, 6, 10, 'Yes'),
(10, 6, 11, 'No'),
(11, 6, 12, 'Review'),
(12, 6, 13, 'No'),
(13, 7, 10, 'A lot'),
(14, 7, 11, 'Horrible'),
(15, 7, 12, 'Survey'),
(16, 7, 13, 'No'),
(17, 8, 10, 'Mara Kha'),
(18, 8, 11, 'Dhurr Beda'),
(19, 8, 12, 'Review'),
(20, 8, 13, 'No'),
(21, 9, 14, 'Yes'),
(22, 9, 15, '50k'),
(23, 9, 16, 'Fast'),
(24, 9, 17, 'Badda'),
(25, 10, 14, 'Yes'),
(26, 10, 15, '96'),
(27, 10, 16, 'IOS'),
(28, 10, 17, 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `id` int(11) NOT NULL,
  `vendor_id` tinyint(6) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `time_added` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id`, `vendor_id`, `category_id`, `title`, `description`, `is_active`, `time_added`) VALUES
(13, 1, 0, 'Test Survey 1.', 'Do you like Surveys?', 1, '23-09-2016 04:11:14 PM'),
(14, 1, 1, 'iPhone 7', 'Here is the iPhone 7', 1, '24-09-2016 08:51:21 PM');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `dateJoined` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `dateJoined`) VALUES
(1, 'Hamiduzzaman', 'hpz321@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '18/06/16'),
(2, 'Parvez', 'hpz321@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '18/06/16'),
(3, 'Hamid Parvez', 'hamid.official@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '18/06/16'),
(4, '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '16/07/16'),
(5, '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '16/07/16'),
(6, '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '16/07/16'),
(7, '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '16/07/16');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(25) NOT NULL,
  `company` varchar(20) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id`, `name`, `username`, `password`, `email`, `company`, `is_active`, `admin_id`) VALUES
(1, 'Hamiduzzaman', 'vendor', '7c3613dba5171cb6027c67835dd3b9d4', 'hpz321@gmail.com', 'Softanis', 1, 1),
(2, 'GP', 'gp', '5343b21ad303bf1799629894deca13db', 'gp@gp.com', 'Grameenphone', 0, 1),
(3, 'Bl', 'bl', 'fd18772cbac19277b20dcccc1b90efb9', 'bl@bl.bl', 'Bl', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_answers`
--
ALTER TABLE `question_answers`
  ADD PRIMARY KEY (`question_answer_id`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `question_answers`
--
ALTER TABLE `question_answers`
  MODIFY `question_answer_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;