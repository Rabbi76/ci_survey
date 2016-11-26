-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2016 at 04:14 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `share_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
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

CREATE TABLE IF NOT EXISTS `answers` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `survey_id` int(11) NOT NULL,
  `date` varchar(16) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`answer_id`, `user_id`, `survey_id`, `date`) VALUES
(3, 2, 13, '24-09-2016'),
(4, 2, 13, '24-09-2016'),
(5, 1, 13, '24-09-2016'),
(6, 1, 13, '24-09-2016'),
(7, 1, 13, '24-09-2016'),
(8, 1, 13, '24-09-2016'),
(9, 9, 14, '24-09-2016'),
(30, 9, 13, '02-10-2016'),
(33, 9, 15, '02-10-2016'),
(34, 13, 15, '20-11-2016'),
(35, 14, 23, '20-11-2016'),
(36, 14, 22, '20-11-2016'),
(37, 14, 21, '20-11-2016'),
(38, 9, 23, '20-11-2016'),
(39, 9, 21, '20-11-2016'),
(40, 14, 20, '20-11-2016'),
(41, 14, 18, '20-11-2016');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Mobile'),
(2, 'Computers'),
(8, 'Camera');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `user_name`, `user_id`, `user_type`, `subject`, `message`) VALUES
(1, 'Md. Rabbi', 9, 'user', 'Login problem', 'I can''t see the survey.  '),
(2, 'Md. Rabbi', 9, 'user', 'Thanks', 'This a good site for review. Thanks admin and the team. '),
(3, 'Hamid', 1, 'vendor', 'Account Problem', 'I can''t see my survey. '),
(9, 'user', 14, 'User', 'Hello vai', 'Messege test');

-- --------------------------------------------------------

--
-- Table structure for table `problem`
--

CREATE TABLE IF NOT EXISTS `problem` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `company` varchar(150) DEFAULT NULL,
  `problem` varchar(200) NOT NULL,
  `details` text NOT NULL,
  `active` tinyint(1) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `problem`
--

INSERT INTO `problem` (`id`, `name`, `email`, `company`, `problem`, `details`, `active`, `date`) VALUES
(1, 'Md. Rabbi', 'rabbi@live.com', NULL, 'User acccount problem', 'I forgot the password. i need some help.', 1, '2016-11-18'),
(2, 'Md. khan', 'khan12@gmail.com', 'Robi', 'Request for Vendor id', 'I am a employee of Robi corporation. I need a vendor id ASAP.   ', 1, '2016-11-17');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `question_id` int(11) NOT NULL,
  `survey_id` tinyint(6) NOT NULL,
  `question_title` varchar(50) NOT NULL,
  `question_type` varchar(10) NOT NULL,
  `question_options` varchar(500) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `answer_id` tinyint(6) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `survey_id`, `question_title`, `question_type`, `question_options`, `is_active`, `answer_id`) VALUES
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
(17, 14, 'Your Address?', 'Text Area', '', 1, NULL),
(18, 15, 'You are using CPU', 'Radio', 'i5,i7(6th),i7(5th)', 1, NULL),
(19, 15, 'Why you bye it?', 'Text Box', '', 1, NULL),
(20, 15, 'Price Will be', 'Radio', '>55000,55000-60000,60000<', 1, NULL),
(21, 15, 'Good thing ', 'Check Box', '6+ buttery backup ,1920*1080 regulation,Intel 5000 Graphics,Win 10 pro', 1, NULL),
(22, 15, 'What should be upgrade?', 'Text Box', '', 1, NULL),
(23, 16, 'your current phone ', 'Check Box', 'Samsung,i phone,Microsoft,Xiaomi,Asus,HTC,Sony,Huawei,Else', 1, NULL),
(24, 16, 'Why are you using it? ', 'Text Area', '', 1, NULL),
(25, 16, 'Do you like Ximomi?', 'Radio', 'yes,No ', 1, NULL),
(26, 16, 'Do you like the design of Xiaomi', 'Radio', 'Yes,No', 1, NULL),
(27, 16, 'What Features You Like?', 'Check Box', 'Camera,MIUI,Less price,Fingerprint', 1, NULL),
(28, 16, 'Do you want to buy Xiaomi', 'Radio', 'Yes,No', 1, NULL),
(29, 17, '1?', 'Text Box', '', 1, NULL),
(30, 17, '2?', 'Text Area', '', 1, NULL),
(31, 17, '3?', 'Radio', '3.1?,3.2?', 1, NULL),
(32, 17, '4?', 'Check Box', '4.1,4.2', 1, NULL),
(33, 18, 'You use it', 'Radio', 'Yes,No', 1, NULL),
(34, 18, 'Do you like it?', 'Radio', 'Yes,No', 1, NULL),
(35, 18, 'Why You Like it?', 'Text Area', '', 1, NULL),
(36, 18, 'Good thing', 'Check Box', '5+hour Backup,Good lokking,8Gb Ram,1TB Hard-disk ', 1, NULL),
(37, 19, 'Do you agree that Nikon''s digital cameras have LOW', 'Radio', '-2,-1,0,1,2', 1, NULL),
(38, 19, 'Do you agree that Nikon has GOOD REPUTATION for it', 'Radio', '-2,-1,0,1,-2', 1, NULL),
(39, 19, 'Do you agree that Nikon''s digital cameras have STY', 'Radio', '-2,-1,0,1,2', 1, NULL),
(40, 19, 'Do you agree that Nikon''s digital cameras are in L', 'Radio', '-2,-1,0,1,2', 1, NULL),
(41, 19, 'Do you agree that Nikon''s digital cameras take QUA', 'Radio', '-2,-1,0,1,2', 1, NULL),
(42, 20, 'Do you agree that Sony''s digital cameras have LOW ', 'Radio', '-2,-1,0,1,2', 1, NULL),
(43, 20, 'Do you agree that Sony has GOOD REPUTATION for its', 'Radio', '-2,-1,0,1,-2', 1, NULL),
(44, 20, 'Do you agree that Sony''s digital cameras take QUAL', 'Radio', '-2,-1,0,2,1', 1, NULL),
(45, 20, 'Do you agree that Sony''s digital cameras are in LO', 'Radio', '-2,-1,0,1,2', 1, NULL),
(46, 21, 'Gender ', 'Radio', 'Male,Famale', 1, NULL),
(47, 21, 'Do you have a laptop now?', 'Radio', 'Yes,No', 1, NULL),
(48, 21, 'If yes, who bought the laptop for you?', 'Radio', 'Parents,Friends,Yourself,Company ', 1, NULL),
(49, 21, 'Acer provides price-quality balance laptops.', 'Radio', 'Yes,No', 1, NULL),
(50, 21, 'Acer can provide good quality products.', 'Radio', 'Yes,No', 1, NULL),
(51, 21, 'Acer''s laptops can make my life easier.', 'Radio', '1 (Diaagree),2,3,4,5(Strongly agree)', 1, NULL),
(52, 22, 'For how long have you been using your Dell laptop?', 'Radio', '1-3 years,3-5 years ,More then 5 years', 1, NULL),
(53, 22, 'How many times did you format your laptop?', 'Radio', '1-5,5-10,10---', 1, NULL),
(54, 22, 'Have you ever taken it to repair?', 'Radio', 'Yes,No', 1, NULL),
(55, 22, 'Are you satisfied with the performance of your lap', 'Radio', 'Yes,No', 1, NULL),
(56, 22, 'Are you willing to change it ? ', 'Radio', 'Yes,No', 1, NULL),
(57, 22, 'Why you want to change it?', 'Text Area', '', 1, NULL),
(58, 22, 'Would you buy a Dell or another brand in case of c', 'Text Area', '', 1, NULL),
(59, 23, 'Please select your gender group?', 'Radio', 'Male,Female', 1, NULL),
(60, 23, 'Please select an age group', 'Radio', 'less then 15,15-20,21-25,More then 25', 1, NULL),
(61, 23, 'Do you currently own an iPhone?', 'Radio', 'Yes,NO', 1, NULL),
(62, 23, 'Which color would you prefer?', 'Radio', 'Jet black,Rose gold,Silver,Gold ', 1, NULL),
(63, 23, 'Do you plan to buy iPhone 7?', 'Text Area', '', 1, NULL),
(64, 23, 'How satisfied are you with the new iPhone announce', 'Radio', '1-3,4-6,7-10', 1, NULL),
(65, 24, 'Did you ever used it?', 'Radio', 'Yes,No', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `question_answers`
--

CREATE TABLE IF NOT EXISTS `question_answers` (
  `question_answer_id` int(11) NOT NULL,
  `answer_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `question_answer` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_answers`
--

INSERT INTO `question_answers` (`question_answer_id`, `answer_id`, `question_id`, `question_answer`) VALUES
(1, 2, 10, 'Yes'),
(2, 2, 11, 'Good'),
(3, 2, 12, 'Survey'),
(4, 2, 13, 'Yes'),
(5, 3, 10, 'Yes'),
(6, 3, 11, 'Nothing to say'),
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
(17, 8, 10, 'nothing'),
(18, 8, 11, 'nothing'),
(19, 8, 12, 'Review'),
(20, 8, 13, 'No'),
(21, 9, 14, 'Yes'),
(22, 9, 15, '50k'),
(23, 9, 16, 'Fast'),
(24, 9, 17, 'Badda'),
(53, 29, 19, 'Like it'),
(57, 30, 10, 'Yes'),
(58, 30, 11, 'Good'),
(59, 30, 12, 'Survey'),
(60, 30, 13, 'Yes'),
(69, 33, 18, 'i5'),
(70, 33, 19, 'Like it'),
(71, 33, 20, '>55000'),
(72, 33, 21, '1920*1080 regulation'),
(73, 33, 22, 'Ram'),
(74, 33, 21, '6+ buttery backup'),
(75, 34, 18, 'i7(6th)'),
(76, 34, 19, 'Like it very much'),
(77, 34, 20, '55000-60000'),
(78, 34, 21, '1920*1080 regulation'),
(79, 34, 22, 'ram '),
(80, 35, 59, 'Male'),
(81, 35, 60, 'less then 15'),
(82, 35, 61, 'Yes'),
(83, 35, 62, 'Jet black'),
(84, 35, 63, 'Yes'),
(85, 35, 64, '1-3'),
(86, 36, 52, '1-3 years'),
(87, 36, 53, '1-5'),
(88, 36, 54, 'Yes'),
(89, 36, 55, 'Yes'),
(90, 36, 56, 'Yes'),
(91, 36, 57, 'Yes'),
(92, 36, 58, 'Yes'),
(93, 37, 46, 'Male'),
(94, 37, 47, 'Yes'),
(95, 37, 48, 'Parents'),
(96, 37, 49, 'Yes'),
(97, 37, 50, 'Yes'),
(98, 37, 51, '1 (Diaagree)'),
(99, 38, 59, 'Male'),
(100, 38, 60, '21-25'),
(101, 38, 61, 'Yes'),
(102, 38, 62, 'Rose gold'),
(103, 38, 63, 'Yes'),
(104, 38, 64, '4-6'),
(105, 39, 46, 'Male'),
(106, 39, 47, 'Yes'),
(107, 39, 48, 'Parents'),
(108, 39, 49, 'Yes'),
(109, 39, 50, 'Yes'),
(110, 39, 51, '1 (Diaagree)'),
(111, 40, 42, '0'),
(112, 40, 43, '-2'),
(113, 40, 44, '0'),
(114, 40, 45, '-2'),
(115, 41, 33, 'Yes'),
(116, 41, 34, 'No'),
(117, 41, 35, 'Many Reasons'),
(118, 41, 36, 'Good lokking');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `rating_id` int(11) NOT NULL,
  `survey_id` int(11) NOT NULL,
  `rating_number` tinyint(4) NOT NULL,
  `account_id` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`rating_id`, `survey_id`, `rating_number`, `account_id`) VALUES
(1, 17, 4, 'OQ=='),
(2, 18, 5, 'Mw=='),
(3, 17, 4, 'MTA='),
(4, 16, 5, 'Ng=='),
(5, 15, 5, 'Ng=='),
(6, 14, 3, 'NQ=='),
(7, 13, 4, 'Mw=='),
(8, 18, 4, 'NQ=='),
(9, 17, 4, 'Mw=='),
(10, 16, 4, 'Nw=='),
(11, 0, 3, 'OQ=='),
(12, 0, 4, 'Ng=='),
(13, 18, 4, 'Mw=='),
(14, 22, 5, '14'),
(15, 21, 5, '14'),
(16, 23, 4, '9'),
(17, 21, 4, '9'),
(18, 20, 3, '14'),
(19, 18, 4, '14');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE IF NOT EXISTS `reply` (
  `id` int(11) NOT NULL,
  `mess_id` int(11) NOT NULL,
  `replyBy` varchar(200) NOT NULL,
  `reply` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`id`, `mess_id`, `replyBy`, `reply`) VALUES
(1, 1, 'Admin', 'Sorry, Our system is upgrading. We will solve the problem ASAP.\r\nThnaks'),
(2, 1, 'Admin', 'The system is ok. You can login now.\r\nThanks for being with us.'),
(3, 1, 'You', 'Yes. Thanks '),
(20, 9, 'Admin', 'Replied');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE IF NOT EXISTS `sub_categories` (
  `sub_category_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_name` varchar(35) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`sub_category_id`, `category_id`, `sub_category_name`) VALUES
(1, 1, 'Samsung'),
(2, 2, 'Hp'),
(4, 1, 'i Phone'),
(5, 1, 'Xiami'),
(6, 2, 'Lenovo'),
(7, 2, 'Acer'),
(8, 1, 'Motorola'),
(13, 2, 'Dell'),
(14, 8, 'Nikon'),
(15, 8, 'Canon'),
(16, 8, 'Sony'),
(17, 1, 'Else'),
(18, 2, 'Else'),
(19, 8, 'Else'),
(20, 2, 'Apple');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE IF NOT EXISTS `survey` (
  `id` int(11) NOT NULL,
  `vendor_id` tinyint(6) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `time_added` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id`, `vendor_id`, `category_id`, `sub_category_id`, `title`, `description`, `is_active`, `time_added`) VALUES
(13, 1, 0, 0, 'Test Survey 1.', 'Do you like Surveys?', 1, '23-09-2016 04:11:14 PM'),
(15, 1, 2, 6, 'Lenovo Thinkpad L450', 'Survey about the laptop ', 1, '25-09-2016 04:09:31 AM'),
(16, 2, 1, 5, 'Xiaomi', 'If you are using a smart phone then it is for you', 1, '26-09-2016 05:41:24 AM'),
(17, 1, 1, 8, 'Moto Z', 'Moto', 1, '01-10-2016 08:27:14 PM'),
(18, 2, 2, 2, 'Hp 440', 'About laptop', 1, '02-10-2016 05:09:37 AM'),
(19, 3, 8, 14, 'Nikon camera', 'This survey about a upcoming Nikon Camera.  (-2=Totally Disagree,2=Toally Agree).', 0, '20-11-2016 11:35:45 AM'),
(20, 3, 8, 16, 'Sony Camera', 'If you are a camera lover this survey is for you. (-2=Totally Disagree, 2=Toally Agree)', 1, '20-11-2016 11:40:54 AM'),
(21, 4, 2, 7, 'Acer laptop', 'It is a survey of acer laptop.', 1, '20-11-2016 12:10:46 PM'),
(22, 4, 2, 13, 'Dell Laptops', 'This is about Dell laptop. If you are using the dell laptop then it''s for you.', 1, '20-11-2016 12:25:51 PM'),
(23, 1, 1, 4, 'iPhone 7', 'This is new i phone 7. ', 1, '20-11-2016 12:35:44 PM'),
(24, 1, 1, 4, 'iPhone 6s', 'Previous Year Flagship', 1, '20-11-2016 02:01:29 PM');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `dateJoined` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `dateJoined`) VALUES
(1, 'test User', 'user', 'user', ''),
(2, 'Parvez', 'parvez', 'parvez', ''),
(9, 'Md. Rabbi', 'rabbi', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '27/09/16'),
(10, 'Hamid', 'hpz321@gmail.com', 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d', '01/10/16'),
(11, 'rat', 'rat@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '02/10/16'),
(12, 'Tusher', 'tt@tt.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '28/10/16'),
(13, 'wahid', 'wahid', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '20/11/16'),
(14, 'user', 'user@user.com', '12dea96fec20593566ab75692c9949596833adc9', '20/11/16'),
(15, 'test12', 'test@test.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '20/11/16');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE IF NOT EXISTS `vendor` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(25) NOT NULL,
  `company` varchar(20) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id`, `name`, `username`, `password`, `email`, `company`, `is_active`, `admin_id`) VALUES
(1, 'Hamid', 'vendor', '7c3613dba5171cb6027c67835dd3b9d4', 'hpz321@gmail.com', 'Softanis', 1, 1),
(2, 'GP', 'gp', '5343b21ad303bf1799629894deca13db', 'gp@gp.com', 'Grameenphone', 0, 1),
(3, 'Bl', 'bl', 'fd18772cbac19277b20dcccc1b90efb9', 'bl@bl.bl', 'Bl', 1, 1),
(4, 'hp', 'hp', '202cb962ac59075b964b07152d234b70', 'hpz321@gmail.com', 'HP', 1, 1),
(5, 'Hamid', 'hamid', '202cb962ac59075b964b07152d234b70', 'hpz321@gmail.com', 'Hamid', 1, 1),
(6, 'test', 'test', '81dc9bdb52d04dc20036dbd8313ed055', 'test@test.com', 'Test', 1, 1);

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
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `problem`
--
ALTER TABLE `problem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `question_answers`
--
ALTER TABLE `question_answers`
  ADD PRIMARY KEY (`question_answer_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mess_id` (`mess_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`sub_category_id`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

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
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `problem`
--
ALTER TABLE `problem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `question_answers`
--
ALTER TABLE `question_answers`
  MODIFY `question_answer_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=119;
--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `sub_category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `reply`
--
ALTER TABLE `reply`
  ADD CONSTRAINT `mess_rep` FOREIGN KEY (`mess_id`) REFERENCES `message` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
