-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2013 at 08:53 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quiz`
--
CREATE DATABASE IF NOT EXISTS `quiz` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `quiz`;

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `user_id` int(5) NOT NULL,
  `level` int(2) NOT NULL,
  `c_ans` int(3) NOT NULL,
  `test_name` varchar(30) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`user_id`, `level`, `c_ans`, `test_name`, `time`) VALUES
(1, 3, 7, 'Networking Basics', '2013-08-07 11:43:06'),
(1, 1, 0, 'Networking Basics', '2013-08-07 11:49:22'),
(1, 3, 7, 'Networking Basics', '2013-08-07 11:43:06'),
(1, 1, 0, 'Networking Basics', '2013-08-07 11:49:22'),
(1, 1, 2, 'state-capital', '2013-08-08 09:46:49'),
(1, 2, 3, 'state-capital', '2013-08-08 09:48:05'),
(1, 1, 2, 'state-capital', '2013-08-08 09:49:09'),
(1, 2, 4, 'state-capital', '2013-08-08 09:49:55'),
(1, 2, 4, 'state-capital', '2013-08-08 09:49:56'),
(1, 2, 3, 'state-capital', '2013-08-08 09:52:12'),
(1, 2, 3, 'state-capital', '2013-08-08 10:00:53'),
(1, 3, 7, 'state-capital', '2013-08-08 10:04:46'),
(1, 3, 7, 'state-capital', '2013-08-08 10:05:07'),
(1, 2, 3, 'state-capital', '2013-08-08 10:06:03'),
(1, 2, 3, 'state-capital', '2013-08-08 10:14:23'),
(1, 1, 0, 'state-capital', '2013-08-08 10:16:51'),
(1, 1, 0, 'state-capital', '2013-08-08 10:17:11'),
(1, 2, 3, 'state-capital', '2013-08-08 10:17:59'),
(1, 1, 3, 'state-capital', '2013-08-08 10:21:54'),
(1, 1, 3, 'state-capital', '2013-08-08 11:44:24'),
(1, 1, 3, 'C Basics', '2013-08-08 11:46:21'),
(1, 1, 2, 'state-capital', '2013-08-08 11:53:11'),
(1, 1, 2, 'state-capital', '2013-08-08 12:04:40'),
(1, 3, 7, 'state-capital', '2013-08-08 12:11:57'),
(1, 3, 7, 'state-capital', '2013-08-08 12:12:19'),
(1, 2, 5, 'C Basics', '2013-08-08 12:13:38'),
(1, 2, 5, 'C Basics', '2013-08-08 12:13:59'),
(1, 3, 7, 'state-capital', '2013-08-08 12:18:09'),
(1, 3, 7, 'state-capital', '2013-08-08 12:18:30'),
(1, 2, 3, 'state-capital', '2013-08-10 04:44:46'),
(1, 2, 4, 'state-capital', '2013-08-10 04:45:21'),
(1, 2, 4, 'state-capital', '2013-08-10 04:45:42'),
(1, 2, 4, 'state-capital', '2013-08-10 04:46:29'),
(1, 2, 4, 'state-capital', '2013-08-10 04:46:30'),
(1, 3, 7, 'state-capital', '2013-08-10 05:18:21'),
(1, 3, 7, 'state-capital', '2013-08-10 05:18:22'),
(1, 3, 7, 'state-capital', '2013-08-10 05:25:51'),
(1, 3, 7, 'state-capital', '2013-08-10 05:25:52'),
(1, 1, 0, 'state-capital', '2013-08-10 05:28:35'),
(1, 2, 3, 'state-capital', '2013-08-10 05:29:28'),
(1, 2, 4, 'state-capital', '2013-08-10 05:29:58'),
(1, 2, 4, 'state-capital', '2013-08-10 05:29:59'),
(1, 2, 5, 'state-capital', '2013-08-10 05:43:50'),
(1, 2, 4, 'state-capital', '2013-08-10 05:50:42'),
(1, 2, 4, 'state-capital', '2013-08-10 05:50:43'),
(1, 3, 6, 'state-capital', '2013-08-10 05:56:32'),
(1, 2, 4, 'state-capital', '2013-08-10 05:57:38'),
(1, 2, 5, 'C Basics', '2013-08-10 05:59:49'),
(1, 2, 5, 'C Basics', '2013-08-10 05:59:50'),
(1, 2, 3, 'state-capital', '2013-08-10 10:46:02'),
(1, 2, 4, 'C Basics', '2013-08-10 11:03:59'),
(1, 1, 2, 'state-capital', '2013-08-10 11:30:48'),
(1, 3, 7, 'state-capital', '2013-08-12 05:03:04'),
(1, 3, 7, 'state-capital', '2013-08-12 05:03:05'),
(1, 2, 5, 'C Basics', '2013-08-12 05:04:12'),
(1, 2, 5, 'C Basics', '2013-08-12 05:04:12'),
(1, 2, 3, 'state-capital', '2013-08-12 06:56:25'),
(1, 1, 0, 'state-capital', '2013-08-12 07:00:27'),
(1, 2, 3, 'state-capital', '2013-08-12 07:02:49'),
(1, 1, 3, 'state-capital', '2013-08-12 07:15:38'),
(1, 2, 3, 'state-capital', '2013-08-12 07:17:02'),
(1, 2, 3, 'state-capital', '2013-08-12 07:18:32'),
(1, 2, 4, 'state-capital', '2013-08-12 07:20:13'),
(1, 2, 4, 'state-capital', '2013-08-12 07:20:14'),
(1, 3, 9, 'state-capital', '2013-08-12 07:21:31'),
(1, 2, 5, 'C Basics', '2013-08-12 07:27:36'),
(1, 2, 5, 'C Basics', '2013-08-12 07:27:38'),
(2, 4, 9, 'state-capital', '2013-08-12 07:43:19'),
(2, 4, 9, 'state-capital', '2013-08-12 07:43:20'),
(2, 2, 4, 'state-capital', '2013-08-12 07:45:14'),
(2, 2, 4, 'state-capital', '2013-08-12 07:45:15'),
(2, 1, 1, 'state-capital', '2013-08-12 07:46:08'),
(2, 3, 7, 'state-capital', '2013-08-12 07:47:19'),
(2, 3, 7, 'state-capital', '2013-08-12 07:47:20'),
(2, 3, 7, 'state-capital', '2013-08-12 07:48:36'),
(2, 3, 7, 'state-capital', '2013-08-12 07:48:37'),
(2, 2, 4, 'state-capital', '2013-08-12 07:49:33'),
(2, 2, 4, 'state-capital', '2013-08-12 07:49:34'),
(2, 2, 5, 'C Basics', '2013-08-12 09:38:59'),
(2, 2, 5, 'C Basics', '2013-08-12 09:39:00'),
(2, 2, 5, 'C Basics', '2013-08-12 09:44:05'),
(2, 2, 5, 'C Basics', '2013-08-12 09:44:06'),
(2, 3, 7, 'state-capital', '2013-08-12 09:49:36'),
(2, 3, 7, 'state-capital', '2013-08-12 09:49:37'),
(2, 2, 5, 'C Basics', '2013-08-12 09:54:43'),
(2, 2, 5, 'C Basics', '2013-08-12 09:54:44'),
(6, 2, 3, 'state-capital', '2013-08-16 06:18:56'),
(6, 1, 0, 'state-capital', '2013-08-16 06:20:25'),
(6, 2, 5, 'C Basics', '2013-08-16 06:21:03');

-- --------------------------------------------------------

--
-- Table structure for table `mst_admin`
--

CREATE TABLE IF NOT EXISTS `mst_admin` (
  `loginid` varchar(20) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_admin`
--

INSERT INTO `mst_admin` (`loginid`, `pass`) VALUES
('name', 'name'),
('name', 'name');

-- --------------------------------------------------------

--
-- Table structure for table `mst_question`
--

CREATE TABLE IF NOT EXISTS `mst_question` (
  `que_id` int(5) NOT NULL AUTO_INCREMENT,
  `test_id` int(5) DEFAULT NULL,
  `set_id` int(2) NOT NULL DEFAULT '1',
  `que_desc` varchar(150) DEFAULT NULL,
  `ans1` varchar(75) DEFAULT NULL,
  `ans2` varchar(75) DEFAULT NULL,
  `ans3` varchar(75) DEFAULT NULL,
  `ans4` varchar(75) DEFAULT NULL,
  `true_ans` int(1) DEFAULT NULL,
  `level` int(2) NOT NULL,
  PRIMARY KEY (`que_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `mst_question`
--

INSERT INTO `mst_question` (`que_id`, `test_id`, `set_id`, `que_desc`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`, `level`) VALUES
(1, 1, 1, 'Andhra Pradesh', 'Hyderabad', 'Vishakhapatnam', 'Vijayawada', 'Warangal', 1, 2),
(2, 1, 1, 'Bihar', 'Arrah', 'Muzaffarpur', 'Patna', 'Gaya', 3, 3),
(3, 1, 1, 'Chhattisgarh', 'Bhilai', 'Raipur', 'Korba', 'Surajpur', 2, 2),
(7, 1, 1, 'Jharkhand', 'Dhanbad', 'Jamshedpur', 'Bokaro', 'Ranchi', 4, 1),
(8, 1, 1, 'West Bengal', 'Kolkata', 'Durgapur', 'Asansol', 'Siliguri', 1, 1),
(9, 1, 1, 'Uttar Pradesh', 'Kanpur', 'Ghaziabad', 'Lucknow', 'Agra', 3, 1),
(10, 1, 1, 'Orissa', 'Cuttack', 'Rourkela', 'Brahmapur', 'Bhubaneswar', 4, 2),
(12, 1, 1, 'Gujarat', 'Surat', 'Ahmedabad', 'Rajkot', 'Vadodara', 2, 3),
(13, 1, 1, 'Haryana', 'Faridabad', 'Gurgaon', 'Chandigarh', 'Rohtak', 3, 3),
(15, 2, 1, 'What are the types of linkages?', 'Internal and External', 'External, Internal and None', 'External and None', 'Internal', 2, 2),
(16, 1, 2, 'Kerala', 'Chennai', 'Trivanantpuram', 'Banglore', 'Hyderabad', 2, 1),
(17, 2, 1, 'Which of the following statements should be used to obtain a remainder after dividing 3.14 by 2.1 ?', 'rem = 3.14 % 2.1;', 'rem = modf(3.14, 2.1);', 'rem = fmod(3.14, 2.1);', 'Remainder cannot be obtain in floating point division.', 4, 1),
(18, 1, 2, 'Mizoram', 'Darbhanga', 'Imphal', 'Aizawl', 'Ozhukarai', 3, 1),
(19, 1, 2, 'Punjab', 'Ludhiana', 'Amritsar', 'Jalandhar', 'Chandigarh', 4, 1),
(20, 1, 2, 'Uttarakhand', 'Haridwar', 'Dehradun', 'Bulandshahr', 'Loni', 2, 2),
(21, 1, 2, 'Tamil Nadu', 'Chennai', 'Coimbatore', 'Tiruchirappalli', 'Salem', 1, 2),
(22, 1, 2, 'Tripura', 'Sabroom', 'Manu ', 'Aizawl', 'Agartala', 4, 2),
(23, 1, 2, 'Rajasthan', 'Jaipur', 'Jodhpur', 'Kota', 'Bikaner', 1, 3),
(24, 1, 3, 'Maharashtra', 'Pune', 'Mumbai', 'Nagpur', 'Thane', 2, 1),
(25, 1, 3, 'Karnataka', 'Mysore', 'Mangalore', 'Bellary', 'Bangalore', 4, 1),
(26, 1, 3, 'Manipur', 'Shillong', 'Imphal', 'Aizawl', 'Kohima', 2, 2),
(27, 1, 3, 'Sikkim', 'Bhopal', 'Shillong', 'Kohima', 'Gangtok', 4, 1),
(28, 2, 1, 'Which of the following special symbol allowed in a variable name?', '* (asterisk)', '| (pipeline)', '- (hyphen)', '_ (underscore)', 4, 1),
(29, 2, 1, 'Is there any difference between following declarations?\r\n1 :	extern int fun();\r\n2 :	int fun();', 'Both are identical', 'No difference, except extern int fun(); is probably in another file', 'int fun(); is overrided with extern int fun();', 'None of these', 2, 2),
(30, 2, 1, 'How would you round off a value from 1.66 to 2.0?', 'ceil(1.66)', 'floor(1.66)', 'roundup(1.66)', 'roundto(1.66)', 1, 1),
(32, 4, 1, 'How long is an IPv6 address?', '32 bits', '128 bytes', '128 bits', '64 bits', 1, 3),
(33, 4, 1, 'What command is used to create a backup configuration?', 'copy running backup', 'copy running-config startup-config', 'config mem', 'wr mem', 2, 3),
(34, 4, 1, 'You have 10 users plugged into a hub running 10Mbps half-duplex. There is a server connected to the switch running 10Mbps half-duplex as well. How muc', '100 kbps', '1 Mbps', '2 Mbps', '10 Mbps', 4, 2),
(35, 4, 1, 'Which WLAN IEEE specification allows up to 54Mbps at 2.4GHz?', 'a', 'b', 'g', 'n', 3, 1),
(36, 4, 1, 'Which of the following is the valid host range for the subnet on which the IP address 192.168.168.188 255.255.255.192 resides?', '192.168.168.129-190', '192.168.168.129-191', '192.168.168.128-190', '192.168.168.128-192', 1, 2),
(37, 4, 1, 'To back up an IOS, what command will you use?', 'backup IOS disk', 'copy ios tftp', 'copy tftp flash', 'copy flash tftp', 4, 3),
(38, 4, 1, 'Which of the following commands will allow you to set your Telnet password on a Cisco router?', 'line telnet 0 4', 'line aux 0 4', 'line vty 0 4', 'line con 0', 3, 3),
(39, 4, 1, 'Where is a hub specified in the OSI model?', 'Session layer', 'Physical layer', 'Data Link layer', 'Application layer', 2, 1),
(40, 4, 1, 'Which protocol does DHCP use at the Transport layer?', 'IP', 'TCP', 'UDP', 'ARP', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `mst_result`
--

CREATE TABLE IF NOT EXISTS `mst_result` (
  `login` varchar(20) DEFAULT NULL,
  `test_id` int(5) DEFAULT NULL,
  `test_date` date DEFAULT NULL,
  `score` int(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mst_subject`
--

CREATE TABLE IF NOT EXISTS `mst_subject` (
  `sub_id` int(5) NOT NULL AUTO_INCREMENT,
  `sub_name` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mst_subject`
--

INSERT INTO `mst_subject` (`sub_id`, `sub_name`) VALUES
(1, 'Country India'),
(2, 'Programming'),
(4, 'Networking');

-- --------------------------------------------------------

--
-- Table structure for table `mst_test`
--

CREATE TABLE IF NOT EXISTS `mst_test` (
  `test_id` int(5) NOT NULL AUTO_INCREMENT,
  `sub_id` int(5) DEFAULT NULL,
  `test_name` varchar(30) DEFAULT NULL,
  `total_que` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`test_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `mst_test`
--

INSERT INTO `mst_test` (`test_id`, `sub_id`, `test_name`, `total_que`) VALUES
(7, 6, 'try', '5'),
(2, 2, 'C Basics', '10'),
(1, 1, 'state-capital', '9'),
(4, 4, 'Networking Basics', '9');

-- --------------------------------------------------------

--
-- Table structure for table `mst_user`
--

CREATE TABLE IF NOT EXISTS `mst_user` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Institute` varchar(70) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `hash` varchar(32) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`),
  FULLTEXT KEY `hash` (`hash`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `mst_user`
--

INSERT INTO `mst_user` (`user_id`, `email`, `pass`, `name`, `Institute`, `city`, `phone`, `hash`, `active`) VALUES
(1, 'user@domain.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', 'VBU', 'Usaribag', 2323233, '', 1),
(2, 'shashi.ku05@gmail.com', 'shashi', 'shashi', 'Sri Ram Institute', 'Hazaribagh', 2147483647, '', 0),
(8, 'pranaykumarsoni@live.in', '5f4dcc3b5aa765d61d8327deb882cf99', 'Pranay', 'BIT', 'Hazaribag', 226528, '02e74f10e0327ad868d138f2b4fdd6f0', 0),
(5, 'manish.bardiyar@gmail.com', 'd77d2953c546cb33e2d0bff4989f6aa2', 'Anurag Ranjan', 'Virtual Concept', 'Hazaribag', 2147483647, 'c8c41c4a18675a74e01c8a20e8a0f662', 1),
(6, 'khalid.mvit07@gmail.com', '22af645d1859cb5ca6da0c484f1f37ea', 'khalid', 'vc', 'Hazaribag', 0, 'c75b6f114c23a4d7ea11331e7c00e73c', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mst_useranswer`
--

CREATE TABLE IF NOT EXISTS `mst_useranswer` (
  `sess_id` varchar(80) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `que_des` varchar(200) DEFAULT NULL,
  `ans1` varchar(50) DEFAULT NULL,
  `ans2` varchar(50) DEFAULT NULL,
  `ans3` varchar(50) DEFAULT NULL,
  `ans4` varchar(50) DEFAULT NULL,
  `true_ans` int(11) DEFAULT NULL,
  `your_ans` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
