-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 15, 2012 at 12:02 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `e_school_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE IF NOT EXISTS `attendence` (
  `att_batch_code` varchar(20) NOT NULL,
  `att_std_adm_no` varchar(10) NOT NULL,
  `att_subject_id` int(5) NOT NULL,
  `att_present_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence`
--


-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE IF NOT EXISTS `batch` (
  `batch_id` int(11) NOT NULL auto_increment,
  `batch_code` varchar(20) NOT NULL,
  `batch_course_code` varchar(20) NOT NULL,
  `batch_start_date` date NOT NULL,
  `batch_end_date` date NOT NULL,
  PRIMARY KEY  (`batch_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`batch_id`, `batch_code`, `batch_course_code`, `batch_start_date`, `batch_end_date`) VALUES
(1, '2010-2011', 'BCA1SEM', '2012-06-12', '2013-06-12'),
(2, '2013-2014', 'BCA2SEM', '2012-06-12', '2013-06-12'),
(3, '2012-2013', 'BSCIT1SEM', '2012-06-12', '2013-06-12'),
(38, '', '', '2012-09-15', '2012-09-15'),
(37, '', '', '2012-09-15', '2012-09-15'),
(36, '', '', '2012-09-15', '2012-09-15'),
(35, '', '', '2012-09-15', '2012-09-15'),
(34, '', '', '2012-09-15', '2012-09-15'),
(33, '', '', '2012-09-15', '2012-09-15'),
(32, '', '', '2012-09-15', '2012-09-15'),
(31, '', '', '2012-09-15', '2012-09-15'),
(30, '', '11', '2012-09-15', '2012-09-15'),
(29, '', '12', '2012-09-15', '2012-09-15'),
(28, 's', 's', '2012-06-12', '2013-06-12'),
(27, '', '', '2012-06-12', '2013-06-12'),
(39, '', '', '2012-09-15', '2012-09-15'),
(40, '', '', '2012-09-15', '2012-09-15'),
(41, 'ABC', '', '2012-09-15', '2012-09-15'),
(42, 'MCA_BATCH_NAME_UPDAT', 'MCA_COURSE_CODE', '2012-06-12', '2013-06-12');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(10) NOT NULL auto_increment,
  `category_description` varchar(20) NOT NULL,
  PRIMARY KEY  (`cat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `category_description`) VALUES
(1, 'obc'),
(2, 'ST'),
(3, 'SC'),
(4, 'OBC-2'),
(5, 'general');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(11) NOT NULL auto_increment,
  `course_code` varchar(20) NOT NULL,
  `course_name` varchar(20) default NULL,
  `course_section_name` varchar(25) NOT NULL,
  PRIMARY KEY  (`course_id`),
  UNIQUE KEY `course_code` (`course_code`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_code`, `course_name`, `course_section_name`) VALUES
(2, 'BCA2SEM', 'BCA', '2ND SEM'),
(3, 'BSCIT1SEM', 'BSC', 'BSC'),
(26, 'MCA_COURSE_CODE', 'MCA_COURES_ NAME', 'MCA _SECTION _NAME'),
(11, 'BCA1SEM', 'BCA', 'SEM1');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE IF NOT EXISTS `emp` (
  `emp_no` int(5) NOT NULL,
  `emp_join_date` date NOT NULL,
  `emp_first_name` varchar(20) NOT NULL,
  `emp_mid_name` varchar(20) NOT NULL,
  `emp_last_name` varchar(20) NOT NULL,
  `emp_gender` varchar(1) NOT NULL,
  `emp_dob` date NOT NULL,
  `emp_dept_code` varchar(5) NOT NULL,
  `emp_cat_type` varchar(5) NOT NULL,
  `emp_cat_posn` varchar(20) NOT NULL,
  `emp_grade` varchar(5) NOT NULL,
  `emp_job_title` varchar(20) NOT NULL,
  `emp_qualification` varchar(20) NOT NULL,
  `emp_exp_info` varchar(100) NOT NULL,
  `emp_total_exp_yr` int(3) NOT NULL,
  `emp_marital_status` varchar(1) NOT NULL,
  `emp_children` int(2) NOT NULL,
  `emp_father_name` varchar(20) NOT NULL,
  `emp_mother_name` varchar(20) NOT NULL,
  `emp_spouse_name` varchar(20) NOT NULL,
  `emp_natn` varchar(20) NOT NULL,
  `emp_bld_grp` varchar(10) NOT NULL,
  `emp_photo_ind` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--


-- --------------------------------------------------------

--
-- Table structure for table `emp_category`
--

CREATE TABLE IF NOT EXISTS `emp_category` (
  `emp_cat_type` varchar(5) NOT NULL,
  `emp_cat_desc` varchar(20) NOT NULL,
  `emp_cat_status` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_category`
--


-- --------------------------------------------------------

--
-- Table structure for table `emp_dept`
--

CREATE TABLE IF NOT EXISTS `emp_dept` (
  `dept_code` varchar(5) NOT NULL,
  `dept_desc` varchar(20) NOT NULL,
  `dept_status` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_dept`
--


-- --------------------------------------------------------

--
-- Table structure for table `emp_grade`
--

CREATE TABLE IF NOT EXISTS `emp_grade` (
  `grade_name` varchar(5) NOT NULL,
  `grade_desc` varchar(20) NOT NULL,
  `grade_priority` int(3) NOT NULL,
  `grade_max_prd_day` int(2) NOT NULL,
  `grade_max_prd_wk` int(2) NOT NULL,
  `grade_status` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_grade`
--


-- --------------------------------------------------------

--
-- Table structure for table `emp_position`
--

CREATE TABLE IF NOT EXISTS `emp_position` (
  `emp_posn` varchar(5) NOT NULL,
  `emp_pos_desc` varchar(20) NOT NULL,
  `emp_cat_type` varchar(5) NOT NULL,
  `emp_pos_status` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_position`
--


-- --------------------------------------------------------

--
-- Table structure for table `emp_sub_assign`
--

CREATE TABLE IF NOT EXISTS `emp_sub_assign` (
  `emp_batch_code` varchar(20) NOT NULL,
  `emp_course_code` varchar(20) NOT NULL,
  `emp_subject_id` int(5) NOT NULL,
  `emp_dept_code` varchar(5) NOT NULL,
  `emp_no` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_sub_assign`
--


-- --------------------------------------------------------

--
-- Table structure for table `emp_timetable`
--

CREATE TABLE IF NOT EXISTS `emp_timetable` (
  `emp_batch_code` varchar(20) NOT NULL,
  `emp_subject_id` int(5) NOT NULL,
  `emp_no` int(5) NOT NULL,
  `emp_week_day` int(1) NOT NULL,
  `emp_hour` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_timetable`
--


-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE IF NOT EXISTS `exam` (
  `exam_id` int(5) NOT NULL,
  `exam_name` varchar(20) NOT NULL,
  `exam_subject_id` int(5) NOT NULL,
  `exam_type` varchar(1) NOT NULL,
  `exam_marks_grade_ind` varchar(1) NOT NULL,
  `exam_sub_min_marks` int(5) default NULL,
  `exam_sub_max_marks` int(5) default NULL,
  `exam_date` date NOT NULL,
  `exam_start_time` time NOT NULL,
  `exam_end_time` time NOT NULL,
  `exam_subject_skip_ind` varchar(1) NOT NULL,
  PRIMARY KEY  (`exam_id`,`exam_subject_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--


-- --------------------------------------------------------

--
-- Table structure for table `fees_master_category`
--

CREATE TABLE IF NOT EXISTS `fees_master_category` (
  `fee_id` int(11) NOT NULL auto_increment,
  `fee_master_name` varchar(50) NOT NULL,
  `fee_category_description` varchar(50) NOT NULL,
  `fee_batch_id` varchar(5) NOT NULL,
  `fees_created_date` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`fee_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `fees_master_category`
--

INSERT INTO `fees_master_category` (`fee_id`, `fee_master_name`, `fee_category_description`, `fee_batch_id`, `fees_created_date`) VALUES
(1, 'TUITION FEE', 'TUITION FEE MONTHLY', '3', '2012-07-16 17:45:00'),
(2, 'examination fee', 'exam fee for 2012', '1', '2012-07-16 18:07:34'),
(3, 'Pooja Donation', 'Pooja Donation', '3', '2012-07-18 17:31:02'),
(4, '', '', '', '2012-08-04 17:28:07'),
(5, '', '', '4', '2012-08-08 17:01:31'),
(6, '', '', '', '2012-08-10 15:30:01'),
(7, '', '', '', '2012-08-10 15:30:20'),
(8, '', '', '', '2012-08-10 15:31:11'),
(9, 'fg', '', '', '2012-08-10 15:38:12'),
(10, 'SPORTS', 'SPORTS STUDENT', '2', '2012-08-10 16:57:23'),
(11, '', '', '', '2012-08-10 17:19:41'),
(12, '', '', '', '2012-08-10 17:35:59'),
(13, '', '', '', '2012-08-11 13:47:38'),
(14, '', '', '', '2012-08-16 12:54:35'),
(15, '', '', '', '2012-09-10 11:51:23'),
(16, 'LIBRARY FEE', 'LIBRARY FEE RELATED', '1', '2012-09-10 15:45:13'),
(17, '', '', '', '2012-09-10 15:51:22'),
(18, 'SS', '', '', '2012-09-10 15:52:22'),
(19, 'HOSTELS FEE', 'HOSTEL', '1', '2012-09-10 15:54:51'),
(20, 'BUS FEE', 'TRANSPORT FACILITY', '1', '2012-09-10 15:57:50'),
(21, '', '', '', '2012-09-11 18:03:55');

-- --------------------------------------------------------

--
-- Table structure for table `fee_collection_date`
--

CREATE TABLE IF NOT EXISTS `fee_collection_date` (
  `fee_coll_id` int(11) NOT NULL auto_increment,
  `fee_coll_name` varchar(50) NOT NULL,
  `fee_coll_fee_cat` varchar(5) NOT NULL,
  `fee_coll_batch_id` varchar(5) NOT NULL,
  `fee_coll_start_date` date NOT NULL,
  `fee_coll_end_date` date NOT NULL,
  `fee_coll_due_date` date NOT NULL,
  PRIMARY KEY  (`fee_coll_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `fee_collection_date`
--

INSERT INTO `fee_collection_date` (`fee_coll_id`, `fee_coll_name`, `fee_coll_fee_cat`, `fee_coll_batch_id`, `fee_coll_start_date`, `fee_coll_end_date`, `fee_coll_due_date`) VALUES
(1, 'Tuition Fee Monthly Sub', '1', '3', '2012-07-19', '2013-07-18', '2012-07-18'),
(2, 'exam', '2', '1', '2012-07-19', '2012-07-28', '2012-07-28'),
(3, 'exam freedate', '2', '1', '2012-07-25', '2012-07-25', '2012-07-25'),
(4, '', '', '', '2012-08-11', '2012-08-11', '2012-08-11'),
(5, '', '', '', '2012-08-16', '2012-08-16', '2012-08-16'),
(6, '', '', '', '2012-09-12', '2012-09-12', '2012-09-12'),
(7, '', '', '', '2012-09-12', '2012-09-12', '2012-09-12'),
(8, '', '20', '2', '2012-09-12', '2012-09-12', '2012-09-12'),
(9, 'sumit', '20', '2', '2012-08-12', '2012-07-12', '2012-06-12'),
(10, 'c', '20', '2', '2012-09-12', '2012-09-12', '2012-09-12'),
(11, 's', '20', '2', '2012-09-12', '2012-09-12', '2012-09-12'),
(12, 'ruf', '20', '2', '2012-09-12', '2012-09-12', '2012-09-12');

-- --------------------------------------------------------

--
-- Table structure for table `fee_master_discount`
--

CREATE TABLE IF NOT EXISTS `fee_master_discount` (
  `fee_discount_id` int(11) NOT NULL auto_increment,
  `fee_discount_name` varchar(50) NOT NULL,
  `fee_discount_fee_cat` varchar(5) NOT NULL,
  `fee_discount_student_cat` varchar(5) NOT NULL,
  `fee_discount_batch` varchar(5) NOT NULL,
  `fee_discount_adm_no` varchar(20) NOT NULL,
  `fee_discount_per` decimal(11,2) NOT NULL,
  PRIMARY KEY  (`fee_discount_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `fee_master_discount`
--

INSERT INTO `fee_master_discount` (`fee_discount_id`, `fee_discount_name`, `fee_discount_fee_cat`, `fee_discount_student_cat`, `fee_discount_batch`, `fee_discount_adm_no`, `fee_discount_per`) VALUES
(1, 'cast OBC', '2', '', '1', '', 20.00),
(2, 'Batch Discount', '2', '', '1', '', 10.00),
(4, '', '', '', '', '', 0.00),
(5, 's', '', '', '', '', 0.00),
(6, '', '', '', '', '', 0.00),
(7, '', '', '', '', '', 0.00),
(8, '', '', '', '', '', 0.00),
(9, '', '', '', '', '', 0.00),
(10, '', '', '', '', '', 0.00),
(11, '', '', '', '', '', 0.00),
(12, '', '', '', '', '', 0.00),
(13, '', '', '', '', '', 0.00),
(14, '', '', '', '', '', 0.00),
(15, '', '', '', '', '', 0.00),
(16, '', '', '', '', '', 0.00),
(17, 's', '', '', '', '', 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `fee_master_particular`
--

CREATE TABLE IF NOT EXISTS `fee_master_particular` (
  `particular_id` int(11) NOT NULL auto_increment,
  `fee_category_batch` varchar(5) NOT NULL,
  `particular_name` varchar(50) NOT NULL,
  `particular_description` varchar(50) NOT NULL,
  `particular_create_using` varchar(10) NOT NULL,
  `particular_adm_no` varchar(20) NOT NULL,
  `particular_st_cat` varchar(5) NOT NULL,
  `particular_amt` decimal(11,2) NOT NULL,
  `created_date` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`particular_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `fee_master_particular`
--

INSERT INTO `fee_master_particular` (`particular_id`, `fee_category_batch`, `particular_name`, `particular_description`, `particular_create_using`, `particular_adm_no`, `particular_st_cat`, `particular_amt`, `created_date`) VALUES
(1, '1', 'TUITION FEE MONTHLY', 'TUITION FEE MONTHLY', 'all', '', '', 1000.00, '2012-07-19 10:32:25'),
(2, '2', 'FINAL EXAM ', 'FINAL  EXAM', 'all', '', '', 500.00, '2012-07-19 10:49:23'),
(3, '2', 'EXAM FEE YLY', '', 'student', '', '', 100.00, '2012-07-19 16:47:36'),
(4, '', '', '', 'all', '', '', 0.00, '2012-08-11 13:51:33'),
(5, '', 'LIBRARY ', 'LIBRARY FEE', 'student', 'VC69', '', 1000.00, '2012-09-07 12:26:45'),
(6, '', '', '', 'all', '', '', 0.00, '2012-09-11 13:17:29'),
(7, '', '', '', 'all', '', '', 0.00, '2012-09-11 13:18:00'),
(8, '', '', '', 'all', '', '', 0.00, '2012-09-11 13:21:28'),
(9, '', '', '', 'all', '', '', 0.00, '2012-09-11 13:23:45'),
(10, '20', 'BUS', 'LIBRARY FEE', '', 's', '', 0.00, '2012-09-11 15:44:03'),
(11, '20', 'BUS', 'LIBRARY FEE', '', '1', '', 0.00, '2012-09-11 15:45:47'),
(12, '20', 's', 'LIBRARY FEE', '', '1213', '', 0.00, '2012-09-11 16:21:34'),
(13, '20', 'BUS', 'LIBRARY FEE', '', 'ass', '', 0.00, '2012-09-11 16:22:30'),
(14, '20', 'BUS', 'LIBRARY FEE', '', '12', '', 0.00, '2012-09-11 16:32:15'),
(15, '20', 'BUS', 'LIBRARY FEE', '', '124', '', 0.00, '2012-09-11 16:34:30'),
(16, '20', 'BUS', 'LIBRARY FEE', '', 'sdasf', '', 0.00, '2012-09-11 16:35:33'),
(17, '20', 'BUS', 'LIBRARY FEE', '', '123', '', 0.00, '2012-09-11 16:38:33'),
(18, '20', 'BUS', 'LIBRARY FEE', '', '123', '', 0.00, '2012-09-11 16:50:12'),
(19, '20', 'BUS', 'LIBRARY FEE', '', '123', '', 0.00, '2012-09-11 16:52:01'),
(20, '20', 'BUS', 'LIBRARY FEE', '', '123', '', 0.00, '2012-09-11 17:02:31'),
(21, '20', 'BUS', 'LIBRARY FEE', '', '123', '', 0.00, '2012-09-11 17:05:40'),
(22, '20', 'BUS', 'LIBRARY FEE', '', '', '', 0.00, '2012-09-11 17:07:17'),
(23, '20', 'BUS', 'LIBRARY FEE', 'all', '123', '34', 1000.00, '2012-09-11 17:08:26'),
(24, '20', 'BUS', 'LIBRARY FEE', '', 's', '34', 0.00, '2012-09-12 11:33:00'),
(25, '20', 'BUS', 'LIBRARY FEE', '', 's', '34', 0.00, '2012-09-12 11:34:49'),
(26, '20', 'BUS', 'LIBRARY FEE', '', 's', '34', 0.00, '2012-09-12 11:35:31'),
(27, '20', 'BUS', 'LIBRARY FEE', '', 's', '34', 133.00, '2012-09-12 11:39:43'),
(28, '20', 'BUS', 'LIBRARY FEE', 'all', 's', '34', 1000.00, '2012-09-12 11:41:38'),
(29, '20', 'BUS', 'LIBRARY FEE', 'all', '121323', '34', 1213232.00, '2012-09-12 11:44:06');

-- --------------------------------------------------------

--
-- Table structure for table `finance_category`
--

CREATE TABLE IF NOT EXISTS `finance_category` (
  `finance_id` int(11) NOT NULL auto_increment,
  `finance_cat_name` varchar(30) NOT NULL,
  `finance_cat_des` varchar(50) NOT NULL,
  `income` int(11) NOT NULL,
  PRIMARY KEY  (`finance_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `finance_category`
--

INSERT INTO `finance_category` (`finance_id`, `finance_cat_name`, `finance_cat_des`, `income`) VALUES
(1, 'fee coleection', 'fee Collection', 1),
(2, 'fee', 'fee Collection', 0),
(4, 'SALARY', 'SALARY', 0),
(5, 'Donation', 'Donation', 3);

-- --------------------------------------------------------

--
-- Table structure for table `fin_transaction`
--

CREATE TABLE IF NOT EXISTS `fin_transaction` (
  `tr_id` int(11) NOT NULL auto_increment,
  `tr_title` varchar(30) NOT NULL,
  `tr_description` varchar(50) NOT NULL,
  `tr_amt` decimal(11,2) NOT NULL,
  `tr_date` date NOT NULL,
  `tr_category` int(2) NOT NULL,
  `tr_by` varchar(30) NOT NULL,
  `tr_curr_date` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`tr_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `fin_transaction`
--

INSERT INTO `fin_transaction` (`tr_id`, `tr_title`, `tr_description`, `tr_amt`, `tr_date`, `tr_category`, `tr_by`, `tr_curr_date`) VALUES
(1, 'safd', 'asdf', 0.00, '2012-08-03', 2, '', '2012-08-03 15:17:19'),
(2, 'asdf', 'asdf', 34.00, '2012-08-03', 0, '', '2012-08-03 15:23:01'),
(3, '', '', 0.00, '2012-08-03', 0, '', '2012-08-03 15:23:05'),
(4, '', '', 0.00, '2012-08-03', 0, '', '2012-08-03 15:23:06'),
(5, 'salary paid', 'salary paid', 100.00, '2012-08-03', 4, '', '2012-08-03 16:30:13'),
(6, 'Exam fee paid', 'Exam fee paid', 500.00, '2012-08-03', 1, '', '2012-08-03 16:35:48'),
(7, 'dsf', 'gsdf', 100.00, '2012-08-03', 2, '', '2012-08-03 16:39:52'),
(8, 'SVM ', 'hjgj', 5000.00, '2012-08-03', 5, '', '2012-08-03 17:27:09'),
(9, 'NGO ', 'HJG', 500.00, '2012-08-03', 5, '', '2012-08-03 17:28:00'),
(10, 'sdfg', 'sdfg', 34.00, '2012-08-03', 1, '', '2012-08-03 17:36:17'),
(11, 'daf', 'asdf', 100.00, '2012-08-03', 1, '', '2012-08-03 17:36:38'),
(12, '', '', 0.00, '2012-08-29', 2, '1', '2012-08-29 11:23:00'),
(13, 'chiari', 'raoa', 10000.00, '2012-08-29', 4, '1', '2012-08-29 11:23:33');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL auto_increment,
  `news_title` varchar(50) NOT NULL,
  `news_desc` varchar(500) NOT NULL,
  `news_date` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `news_postedby` varchar(30) NOT NULL,
  PRIMARY KEY  (`news_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_desc`, `news_date`, `news_postedby`) VALUES
(35, ' Education', 'it is This is part of life f', '2012-08-24 10:03:20', ''),
(36, 'suwidha ', 'social networking ', '2012-08-24 10:10:47', '');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `res_batch_code` varchar(20) NOT NULL,
  `res_std_adm_no` varchar(10) NOT NULL,
  `res_exam_id` int(5) NOT NULL,
  `res_subject_id` int(5) NOT NULL,
  `res_marks` int(5) default NULL,
  `res_grade` varchar(1) default NULL,
  PRIMARY KEY  (`res_batch_code`,`res_std_adm_no`,`res_exam_id`,`res_subject_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--


-- --------------------------------------------------------

--
-- Table structure for table `school_page`
--

CREATE TABLE IF NOT EXISTS `school_page` (
  `page_id` int(11) NOT NULL auto_increment,
  `page_name` varchar(100) NOT NULL,
  `page_title` varchar(200) NOT NULL,
  PRIMARY KEY  (`page_id`),
  UNIQUE KEY `page_name` (`page_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=393 ;

--
-- Dumping data for table `school_page`
--

INSERT INTO `school_page` (`page_id`, `page_name`, `page_title`) VALUES
(1, 'home', 'Home'),
(2, 'admission', 'Admission'),
(3, 'admission2', 'Admission'),
(4, 'student_view', 'Student View'),
(5, 'all_student_view', 'All Student View'),
(6, 'student_profile', 'Student Profile'),
(7, 'new_course', 'New Course'),
(8, 'manage_course', 'Manage Course'),
(9, 'category', 'Category'),
(10, 'subject', 'Subject'),
(11, 'finance', 'Finance'),
(12, 'fees_home', 'Fees Home'),
(13, 'fees_create', 'Fee Create'),
(14, 'master_fees', 'Master Fees'),
(15, 'fees_discount', 'Fees Discount'),
(16, 'fee_discount_new', 'Create Discount New'),
(17, 'additional_fees', 'Aadditional Fees'),
(18, 'additional_fees_create', 'Additional Fees Create'),
(19, 'additional_fees_list', 'Additional Fees List'),
(20, 'fee_collection_date', 'Fee Collection Date'),
(21, 'fee_collection_view', 'Fee Collection View'),
(22, 'fees_submission', 'Fees Submission'),
(23, 'fees_submission_batch', 'Fees Submission By Batch'),
(24, 'fees_student_search', 'Fees Submission By Each Student'),
(25, 'fees_student_one', 'Fees Submission By One Student '),
(26, 'fees_student_structure_search', 'Fees  structure  Student search '),
(27, 'fees_structure_student_one', 'Fees  structure  Student One'),
(28, 'fees_dues', 'Fees Dues'),
(29, 'pay_fees_dues_one', 'Pay Fees Dues '),
(30, 'instant_fees', 'Instant Fees'),
(31, 'new_instant_fees', 'Create New Instant Fees'),
(32, 'fees_category', 'Fees Category'),
(33, 'manage_fees', 'Manage Fees'),
(34, 'new_instant_fees_search', 'New Instant Fee Search'),
(35, 'transactions', 'Transactions'),
(36, 'expense_create', 'Expense Create'),
(37, 'expense_list', 'Expense List'),
(38, 'income_create', 'Income Create'),
(39, 'income_list', 'Income List'),
(40, 'tr_monthly_report', 'Transactions Monthly Report'),
(41, 'donation', 'Donation'),
(42, 'donors', 'Donor'),
(43, 'courses', 'Courses'),
(44, 'manage_batches', 'Manage Batches'),
(45, 'student_view_all', 'Student View All'),
(46, 'profile', 'Student Profile'),
(47, 'show_course', 'Show Course/Batch'),
(48, 'new_batch', 'New Batch'),
(49, 'batch_student', 'Batch Student'),
(50, 'student_view_div', 'Student View'),
(51, 'add_new_subject', 'Add New Subject'),
(52, 'create_cat', 'Create Fees Category'),
(53, 'create_particular', 'Master Fee  Create Paticular'),
(54, 'fee_master_particular', 'Master Category Particulars'),
(55, 'create_fees_coll_date', 'Create Fees collection Date Popup'),
(56, 'collection_details_view', 'Collection Details View'),
(57, 'fee_student_view_all', 'Fee Student View All'),
(58, 'fee_structure_student_view_all', 'Fee Structure Student View All'),
(59, 'attendances', 'Attendances'),
(60, 'attendance_reports', 'Attendance Reports'),
(61, 'create_edit_timetable', 'Create Edit Timetable'),
(62, 'timetable', 'Timetable'),
(63, 'set_class_timimg', 'Set Class Timimg'),
(64, 'view_timetable', 'View Timetable'),
(65, 'swap_class', 'Swap Class'),
(66, 'institutional_timetable', 'Institutional Timetable'),
(67, 'create_weekdays', 'Create Weekdays'),
(68, 'calendar', 'Calendar'),
(69, 'exam_grading_levels', 'Exam Grading Levels'),
(70, 'exam_exam_mangement', 'Exam Exam Mangement'),
(71, 'exam_additional_exam', 'Exam Additional Exam'),
(72, 'exam_exam_wise_report', 'Exam Exam Wise Report'),
(73, 'exam_subject_wise_report', 'Exam Subject Wise Report'),
(74, 'exam_grouped_exam_report', 'Exam Grouped Exam Report'),
(75, 'exam_online_exam', 'Exam Online Exam'),
(76, 'news', 'News'),
(77, 'event', 'Event'),
(78, 'hr_settings', 'Hr Settings'),
(79, 'hr_employee_management', 'Hr Employee Management'),
(80, 'hr_employee_attendance', 'Hr Employee Attendance'),
(81, 'hr_payslip', 'Hr Payslip'),
(82, 'hr_search', 'Hr Search'),
(83, 'hr_department_payslip', 'Hr Department Payslip'),
(84, 'cce_weightages-assign_weightages', 'cce_weightages-assign_weightages'),
(85, 'filter', 'Filter'),
(86, 'exam', 'Exam'),
(87, 'exam_groups', 'Exam Groups'),
(88, 'view_exam_groups', 'View Exam Groups'),
(89, 'new_exam', 'New Exam'),
(90, 'exam_grouping', 'Exam Grouping'),
(91, 'exam_exam_new', 'Exam Exam New'),
(92, 'exam_result_entry1', 'Exam Result Entry1'),
(93, 'registration_courses', 'Registration Courses'),
(94, 'exam_edit1', 'Exam Edit1'),
(95, 'applicants_admin', 'Applicants Admin'),
(96, 'user', 'User'),
(97, 'edit2', 'edit2'),
(98, 'archived_exam_wise_report', 'Archived Exam Wise Report'),
(99, 'pin_groups', 'Pin Groups'),
(100, 'pin_groups_new', 'Pin Groups New'),
(101, 'online_meeting_rooms', 'Online Meeting Rooms'),
(102, 'online_meeting_rooms_new', 'Online Meeting Rooms New'),
(103, 'online_meeting_servers', 'Online Meeting Servers'),
(104, 'online_meeting_servers_new', 'Online Meeting Servers New'),
(105, 'custom_reports', 'Custom Reports'),
(106, 'custom_reports_generate_student', 'Custom Reports Generate Student'),
(107, 'custom_reports_generate_employee', 'Custom Reports Generate Employee'),
(108, 'data_imports', 'Data Imports'),
(109, 'galleries', 'Galleries'),
(110, 'galleries_photo_add', 'Galleries Photo Add'),
(111, 'galleries-category-new', 'Galleries Category New'),
(112, 'groups-index', 'Groups Index'),
(113, 'groups-new', 'Groups New'),
(114, 'school_assets', 'School Assets'),
(115, 'school_assets-new', 'School Assets New'),
(116, 'Hostels-hostel_dashboard', 'Hostels Hostel Dashboard'),
(117, 'hostels', 'Hostels'),
(118, 'room_details', 'Room Details'),
(119, 'room_allocate', 'Room Allocate'),
(120, 'hostel_fee', 'Hostel Fee'),
(121, 'hostel_fee_pay', 'Hostel Fee Pay'),
(122, 'hostel_fee_defaulters', 'Hostel Fee Defaulters'),
(123, 'hostels-1', 'Hostels'),
(124, 'hostels-1-edit', 'Hostels 1 Edit'),
(125, 'hostels-new', 'Hostels New'),
(126, 'room_details-new', 'Room Details New'),
(127, 'room_allocate-assign_room-200', 'Room Allocate Assign Room 200'),
(128, 'hostel_fee_collection', 'Hostel Fee Collection'),
(129, 'hostel_fee_collection_view', 'Hostel Fee Collection View'),
(130, 'hostel_fee-student_hostel_fee', 'Hostel Fee Student Hostel Fee'),
(131, 'room_details-1-edit', 'Room Details 1 Edit'),
(132, 'library', 'Library'),
(133, 'books', 'Books'),
(134, 'search_book', 'Search Book'),
(135, 'detail_search', 'Detail Search'),
(136, 'books-new', 'Books-New'),
(137, 'book_movement-return_book', 'Book Movement Return Book'),
(138, 'book_movement-direct_issue_book', 'Book Movement Direct Issue Book'),
(139, 'library-card_setting', 'Library-Card_Setting'),
(140, 'library-movement_log', 'Library-Movement_Log'),
(141, 'book_movement-renewal', 'Book Movement Renewal'),
(142, 'placementevents', 'Placementevents'),
(143, 'placementevents-archive', 'Placementevents Archive'),
(144, 'placementevents-new', 'Placementevents New'),
(145, 'tasks', 'Tasks'),
(146, 'tasks-new', 'Tasks New'),
(147, 'transport_dash_board', 'Transport Dashboard'),
(148, 'routes', 'Routes'),
(149, 'routes-new', 'Routes-New'),
(150, 'routes-1-edit', 'Routes-1-Edit'),
(151, 'vehicles', 'Vehicles'),
(152, 'vehicles-1-edit', 'Vehicles 1 Edit'),
(153, 'vehicles-new', 'Vehicles New'),
(154, 'transport', 'Transport'),
(155, 'transport-transport_details', 'Transport Transport Details'),
(156, 'transport_fee', 'Transport Fee'),
(157, 'transport_fee_collections', 'Transport Fee Collections'),
(158, 'transport_fee_collection_view', 'Transport Fee Collection View'),
(159, 'transport_fee-transport_fee_search', 'Transport Fee Transport Fee Search'),
(160, 'transport_fee_defaulters_view', 'Transport Fee Defaulters View'),
(161, 'employee_defaulters_transport_fee_collection', 'Employee Defaulters Transport Fee Collection'),
(162, 'teacher_timetable', 'Teacher Timetable'),
(163, 'student_attendance', 'Student Attendance'),
(164, 'configuration', 'Configuration'),
(165, 'configuration-settings', 'Configuration Settings'),
(166, 'exam-settings', 'Exam Settings'),
(167, 'exam-create_exam', 'Exam Create Exam'),
(168, 'exam-previous_batch_exams', 'Exam Previous Batch Exams'),
(169, 'exam-generate_reports', 'Exam Renerate Reports'),
(170, 'exam-generate_previous_reports', 'Exam Generate Previous Reports'),
(171, 'exam-report_center', 'Exam Report Center'),
(172, 'online_exam', 'Online Exam'),
(173, 'exam-subject_rank', 'Exam Subject Rank'),
(174, 'exam-batch_rank', 'Exam Batch Rank'),
(175, 'exam-course_rank', 'Exam Course Rank'),
(176, 'exam-student_school_rank', 'Exam Student School Rank'),
(177, 'exam-ranking_level_report', 'Exam Ranking Level Report'),
(178, 'exam-transcript', 'Exam Transcript'),
(179, 'exam-combined_report', 'Exam Combined Report'),
(180, 'cce_reports', 'CCE Reports'),
(181, 'exam-attendance_rank', 'Exam Attendance Rank'),
(182, 'cce_reports-create_reports', 'CCE Reports Create Reports'),
(183, 'cce_reports-student_wise_report', 'CCE Reports Student Wise Report'),
(184, 'grading_levels', 'Grading Levels'),
(185, 'ranking_levels', 'Ranking Levels'),
(186, 'class_designations', 'Class Designations'),
(187, 'cce_settings', 'CCE Settings'),
(188, 'cce_settings-basic', 'CCE Settings Basic'),
(189, 'cce_settings-co_scholastic', 'CCE Settings CoScholastic'),
(190, 'cce_settings-scholastic', 'CCE Settings Scholastic'),
(191, 'cce_grade_sets', 'CCE Grade Sets'),
(192, 'cce_exam_categories', 'CCE Exam Categories'),
(193, 'cce_weightages', 'CCE Weightages'),
(194, 'observation_groups', 'Observation Groups'),
(195, 'observation_groups_one', 'Observation Groups'),
(196, 'observations-1-descriptive_indicators', 'Observations  Descriptive Indicators'),
(197, 'observation_groups-assign_courses', 'Observation Groups Assign Courses'),
(198, 'cce_weightages_one', 'CCE Weightages '),
(199, 'cce_grade_sets_one', 'CCE Grade Sets '),
(200, 'fa_groups', 'Fa Groups'),
(201, 'fa_groups-one', 'Fa Groups '),
(202, 'fa_criterias-one-descriptive_indicators', 'Fa Criterias  Descriptive Indicators'),
(203, 'fa_groups-assign_fa_groups', 'Fa Groups Assign Fa Groups'),
(204, 'hr', 'HR'),
(205, 'employee-add_category', 'Employee Add Category'),
(206, 'employee-edit_category_one', 'Employee Edit Category '),
(207, 'employee-add_position', 'employee-add_position'),
(208, 'employee-edit_position_one', 'Employee Edit Position '),
(209, 'employee-add_department', 'Employee Add Department'),
(210, 'employee-edit_department_one', 'Employee Edit Department '),
(211, 'employee-add_grade', 'Employee Add Grade'),
(212, 'employee-edit_grade_one', 'Employee Edit Grade '),
(213, 'payroll-add_category', 'Payroll Add Category'),
(214, 'payroll-edit_category-one', 'Payroll Edit Category '),
(215, 'employee-add_bank_details', 'Employee Add Bank Details'),
(216, 'employee-edit_bank_details_one', 'Employee Edit Bank Details one'),
(217, 'employee-add_additional_details', 'Employee Add Additional Details'),
(218, 'employee-edit_additional_details_one', 'Employee Edit Additional Details one'),
(219, 'employee-admission1', 'Employee Admission1'),
(220, 'employee-subject_assignment', 'Employee Subject Assignment'),
(221, 'employee_attendance-add_leave_types', 'Employee Attendance Add Leave Types'),
(222, 'employee_attendance-edit_leave_types_one', 'Employee Attendance Edit Leave Types one'),
(223, 'employee_attendances', 'Employee Attendances'),
(224, 'employee_attendance-report', 'Employee Attendance-Report'),
(225, 'employee_attendance-manual_reset', 'Employee Attendance-manual Reset'),
(226, 'employee_attendance-leave_reset_settings', 'Employee Attendance Leave Reset Settings'),
(227, 'employee_attendance-employee_leave_reset_all', 'Employee Attendance Employee Leave Reset All'),
(228, 'employee_attendance-employee_leave_reset_by_department', 'Employee Attendance Employee Leave Reset By Department'),
(229, 'employee_attendance-employee_leave_reset_by_employee', 'Employee Attendance Employee Leave Reset By Employee'),
(230, 'employee_attendance-employee_view_all', 'Employee Attendance Employee View All'),
(231, 'employee-select_department_employee', 'Employee Select Department Employee'),
(232, 'employee-rejected_payslip', 'Employee Rejected Payslip'),
(233, 'student-reports-one', 'Student Reports one'),
(234, 'exam_generated_report_term', 'Exam Generated Report Term'),
(235, 'consolidated_exam_report', 'Consolidated Exam Report'),
(236, 'generated_report_accounting', 'Generated Report Accounting'),
(237, 'generated_report3_advertising', 'Generated Report3 Advertising'),
(238, 'generated_report4_final-report', 'Generated Report4 Final-Report'),
(239, 'student_transcript', 'Student Transcript'),
(240, 'cce_reports-student_transcript', 'CCE Reports Student Transcript'),
(241, 'student_current_year_report', 'Student Current Year Report'),
(242, 'student-reports', 'Student Reports'),
(243, 'student_subject_report', 'Student Subject Report'),
(244, 'student_final_report', 'Student Final Report'),
(245, 'camapre_with_passed_year_report', 'Camapre With Passed Year Report'),
(246, 'student_guardians', 'Student Guardians'),
(247, 'add_guardian', 'Add Guardian'),
(248, 'student_email', 'Student Email'),
(249, 'groups-recent_posts1', 'Groups Recent Posts1'),
(250, 'user-all', 'User All'),
(251, 'news-all', 'News All'),
(252, 'news-add', 'News Add'),
(253, 'news-view', 'News View'),
(254, 'view_room_details', 'View Room Details'),
(255, 'hostel_wardens', 'Hostel Wardens'),
(256, 'hostel_warden_add', 'Hostel Warden Add'),
(257, 'hostel_add_room', 'Hostel Add Room'),
(258, 'user-profile', 'User Profile'),
(259, 'employee-view_all', 'Employee View All'),
(260, 'employee-profile', 'Employee Profile'),
(261, 'employee-edit', 'Employee-Edit'),
(262, 'user_change_password', 'User Change Password'),
(263, 'user-edit_privilege', 'User Edit Privilege'),
(264, 'user-create', 'User-Create'),
(265, 'placementevents-edit', 'Placementevents Edit'),
(266, 'placementevents-new1', 'Placementevents New1'),
(267, 'placementevents_plan', 'Placementevents Plan'),
(268, 'placementevents-invite', 'Placementevents Invite'),
(269, 'placement_registrations', 'Placement Registrations'),
(270, 'registration_courses-new', 'Registration Courses New'),
(271, 'emp_register', 'emp_register'),
(272, 'emp_attendance_reports', 'Emp Attendance Reports'),
(273, 'emp_attendance', 'Emp Attendance'),
(274, 'emp_home', 'Emp Home'),
(275, 'emp_profile', 'Emp Profile'),
(276, 'emp_calendar', 'Emp Calendar'),
(277, 'emp_exam', 'Emp Exam'),
(278, 'emp_exam_create', 'Emp Exam Create'),
(279, 'emp_additional_exam', 'Emp Additional Exam'),
(280, 'emp_exam_wise_report', 'Emp Exam Wise Report'),
(281, 'emp_subject_wise_report', 'Emp Subject Wise Report'),
(282, 'emp_exam-grouped_exam_report', 'Emp Exam Grouped Exam Report'),
(283, 'emp_news', 'Emp News'),
(284, 'empnews-all', 'Empnews All'),
(285, 'emp_hr', 'EmpHr'),
(286, 'emp_employee-search', 'Emp Employee Search'),
(287, 'emp_employee-view_all', 'Emp Employee View All'),
(288, 'emp_employee-advanced_search', 'Emp Employee Advanced Search'),
(289, 'emp-assignments', 'Emp Assignments'),
(290, 'emp_online_meeting_rooms', 'Emp Online Meeting Rooms'),
(291, 'emp_online_meeting_rooms-new', 'Emp Online Meeting Rooms New'),
(292, 'emp_groups-index', 'Emp Groups Index'),
(293, 'emp_groups-recent_posts', 'Emp Groups Recent Posts'),
(294, 'emp_gallery', 'Emp Gallery'),
(295, 'emp_library', 'Emp Library'),
(296, 'emp_lib_mange-books', 'Emp Lib Mange Books'),
(297, 'emp_library-search_book', 'Emp Library Search Book'),
(298, 'emp_library-detail_search', 'Emp Library Detail Search'),
(299, 'emp_poll', 'Emp Poll'),
(300, 'emp_tasks', 'Emp Tasks'),
(301, 'emp_task', 'Emp Task'),
(302, 'emp_task_assign', 'Emp Task Assign'),
(303, 'emp_leaves', 'Emp Leaves'),
(304, 'emp_test-assignments', 'Emp Test Assignments'),
(305, 'emp_assignments_edit', 'Emp Assignments Edit'),
(306, 'emp_leave_history', 'Emp Leave History'),
(307, 'emp_myleaves', 'Emp Myleaves'),
(308, 'emp_all_leaves', 'Emp All Leaves'),
(309, 'emp_reminder', 'Emp Reminder'),
(310, 'emp_sent_reminder', 'Emp Sent Reminder'),
(311, 'emp_create_reminder', 'Emp Create Reminder'),
(312, 'emp_sal_payroll', 'Emp Sal Payroll'),
(313, 'emp_sal_payslip', 'Emp Sal Payslip'),
(314, 'emp_leave_altendance', 'Emp Leave Altendance'),
(315, 'emp_timetable', 'Emp Timetable'),
(316, 'emp_transport_details', 'Emp Transport Details'),
(317, 'student_home', 'Student Home'),
(318, 'student_calendar', 'Student Calendar'),
(319, 'student_news', 'Student News'),
(320, 'student_news-all', 'Student News All'),
(321, 'student_assignments', 'Student Assignments'),
(322, 'student_assignmentstwo', 'Student Assignmentstwo'),
(323, 'student_dicussion', 'Student Dicussion'),
(324, 'student_gallery', 'Student Gallery'),
(325, 'student_library', 'Student Library'),
(326, 'student_lib_mange-books', 'Student Lib Mange Books'),
(327, 'student_library-search_book', 'Student Library Search Book'),
(328, 'student_library-detail_search', 'Student Library Detail Search'),
(329, 'student_online_student_exam', 'Student Online Student Exam'),
(330, 'student_placementevents', 'Student Placement Events'),
(331, 'student_poll', 'Student Poll'),
(332, 'student_task', 'Student Task'),
(333, 'student_timetable', 'Student Timetable'),
(334, 'student_reminder', 'Student Reminder'),
(335, 'student_sent_reminder', 'Student Sent Reminder'),
(336, 'student_create_reminder', 'Student Create Reminder'),
(337, 'student_academics', 'Student Academics'),
(338, 'student_recent_posts', 'Student Recent Posts'),
(339, 'student_recents_posts', 'Student Recents Posts'),
(340, 'student_general_opinion', 'Student General Opinion'),
(341, 'student_general_opinions', 'Student General Opinions'),
(342, 'student_see_allmembers', 'Student See Allmembers'),
(343, 'student_parents_discussion', 'Student Parents Discussion'),
(344, 'student_parent_discuss', 'Student Parent Discuss'),
(345, 'student_firstterm_report', 'Student Firstter Report'),
(346, 'student_finalreport', 'Student Final Report'),
(347, 'student_campare_reports', 'Student campare reports'),
(348, 'student_transtion', 'Student transtion'),
(349, 'student_group-archive', 'Student group archive'),
(350, 'student_guardian', 'Student guardians'),
(351, 'student_fees', 'Student fees'),
(352, 'student_hostels', 'Student hostels'),
(353, 'student_transport_deatails', 'Student transport deatails'),
(354, 'student_lib_detail', 'Student lib detail'),
(355, 'student_fee_submission', 'Student Fee Submission'),
(356, 'fee_student', 'Fee Student'),
(357, 'edit_classtimimg', 'edit_classtimimg'),
(358, 'edit_grading_levels', 'edit_grading_levels'),
(359, 'fee_additional_fees', 'fee_additional_fees'),
(360, 'fee_additional_fees_create_form', 'fee_additional_fees_create_form'),
(361, 'finance_additional_fees_list', 'finance_additional_fees_list'),
(362, 'finance_additional_fees_lists', 'finance_additional_fees_lists'),
(363, 'finance_additional_fees_list_edit', 'finance_additional_fees_list_edit'),
(364, 'new_online_exam', 'new_online_exam'),
(365, 'view_online_exam', 'view_online_exam'),
(366, 'view_online_exam_edit_popup', 'view_online_exam_edit_popup'),
(367, 'online_exam_view_result', 'online_exam_view_result'),
(368, 'online_exam_reset_exam', 'online_exam_reset_exam'),
(369, 'fa_groups_one', 'fa_groups_one'),
(370, 'fa_criterias-1-descriptive_indicators', 'fa_criterias-1-descriptive_indicators'),
(371, 'fa_criterias-1-descriptive_indicators_edit_popup', 'fa_criterias-1-descriptive_indicators_edit_popup'),
(372, 'create_new_cat', 'Create New Finance  Category'),
(373, 'edit_fin_cat', 'Eit Finance Category'),
(374, 'loginpage', 'Login '),
(375, 'logout', 'Logout'),
(376, 'profile_emp_payroll', 'profile_emp_payroll'),
(377, 'profile_emp_payslip', 'profile_emp_payslip'),
(378, 'profile_emp_leave', 'profile_emp_leave'),
(379, 'profile_emp_library_deatils', 'profile_emp_library_deatils'),
(380, 'profile_emp_transport', 'profile_emp_transport'),
(381, 'student_hostel_details', 'student_hostel_details'),
(382, 'library_student_library_details', 'library_student_library_details'),
(383, 'transport_student_transport_details', 'transport_student_transport_details'),
(384, 'news-edit', 'news-edit'),
(385, 'edit_mange_course', 'edit_mange_course'),
(386, 'edit_batch_course', 'edit_batch_course'),
(387, 'edit_catagory', 'edit_catagory'),
(388, 'edit_student_profile', 'edit_student_profile'),
(389, 'edit_subject', 'edit_subject'),
(390, 'edit_ master_fees', 'edit_ master_fees'),
(391, 'edit_fee_discount', 'edit_fee_discount'),
(392, 'edit_fee_collection_view', 'edit_fee_collection_view');

-- --------------------------------------------------------

--
-- Table structure for table `school_setting`
--

CREATE TABLE IF NOT EXISTS `school_setting` (
  `id` int(11) NOT NULL auto_increment,
  `school_name` varchar(100) NOT NULL,
  `school_address` varchar(250) NOT NULL,
  `school_ph` varchar(15) NOT NULL,
  `school_email` varchar(50) NOT NULL,
  `school_web` varchar(50) NOT NULL,
  `school_student_roll_pre` varchar(5) NOT NULL,
  `session_start` date NOT NULL,
  `session_end` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `school_setting`
--

INSERT INTO `school_setting` (`id`, `school_name`, `school_address`, `school_ph`, `school_email`, `school_web`, `school_student_roll_pre`, `session_start`, `session_end`) VALUES
(2, 'DAV PUBLIC SCHOOL', 'HAZARIBAG', '980989989', 'AAA@IN.COM', 'www.davpublic.com', 'VC', '2012-08-04', '2013-08-01');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL auto_increment,
  `std_adm_no` varchar(10) NOT NULL,
  `std_adm_date` date NOT NULL,
  `std_first_name` varchar(20) NOT NULL,
  `std_middle_name` varchar(20) default NULL,
  `std_last_name` varchar(20) NOT NULL,
  `std_batch_code` varchar(20) NOT NULL,
  `std_dob` date NOT NULL,
  `std_gender` varchar(10) NOT NULL,
  `std_blood_grp` varchar(3) default NULL,
  `std_birth_place` varchar(50) default NULL,
  `std_nationality` varchar(50) NOT NULL,
  `std_mother_tng` varchar(50) default NULL,
  `std_category` varchar(10) NOT NULL,
  `std_relgn` varchar(20) default NULL,
  `std_add_1` varchar(100) NOT NULL,
  `std_add_2` varchar(100) default NULL,
  `std_city` varchar(50) NOT NULL,
  `std_state` varchar(50) NOT NULL,
  `std_pin` int(6) NOT NULL,
  `std_country` varchar(20) NOT NULL,
  `std_phone` varchar(15) default NULL,
  `std_mobile` int(15) NOT NULL,
  `std_email` varchar(50) default NULL,
  `std_photo_ind` varchar(1) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `std_adm_no` (`std_adm_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `std_adm_no`, `std_adm_date`, `std_first_name`, `std_middle_name`, `std_last_name`, `std_batch_code`, `std_dob`, `std_gender`, `std_blood_grp`, `std_birth_place`, `std_nationality`, `std_mother_tng`, `std_category`, `std_relgn`, `std_add_1`, `std_add_2`, `std_city`, `std_state`, `std_pin`, `std_country`, `std_phone`, `std_mobile`, `std_email`, `std_photo_ind`) VALUES
(1, 'SVM1', '0000-00-00', 'anand', 'KUMAR', 'RAJ', '3', '0000-00-00', 'M', 'A-', 'Hazaribag', 'Indian', 'hindi', 'st', 'hindu', 'shivpuri', 'hazaribag', 'hazaribag', 'jharkhand', 825301, '76', '0654622222', 2147483647, 'ssss', ''),
(2, 'SVM2', '0000-00-00', 'neha', 'kumar', 's', '3', '0000-00-00', 'M', '', '', '', '', '', '', '', '', '', '', 0, '76', '', 0, '', ''),
(3, 'SVM3', '0000-00-00', 'raju ', 'kumar', 'singh', '1', '0000-00-00', 'M', '', '', '', '', '', '', '', '', '', '', 0, '76', '', 0, '', ''),
(4, 'SVM4', '0000-00-00', 'sadf', 'asdf', 'sadf', '2', '0000-00-00', 'M', 'A-', 'asdf', '', 'asdf', '6', 'adf', 'asdf', 'asdf', 'asdf', 'asdf', 0, '76', '3432', 343432, 'asdf', ''),
(5, 'SVM5', '2012-06-02', 'neha', 'kumari', 'gupta', '4', '2012-07-14', 'MALE', 'B+', 'HAZARIBAG', '76', 'HINDI', '4', 'HINDU', 'HAZARIBAG', 'HAZARIBAG', 'RANCHI', 'JHARKHAND', 878787, '76', '9898989898', 2147483647, 'anand@in.com', ''),
(6, 'SVM6', '2012-06-02', 'Anil ', 'kumar', 'gupta', '1', '2012-07-19', 'MALE', 'A+', 'HAZARIBAG', '76', '', '7', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(7, 'VC7', '2012-06-02', '', '', '', '', '2012-08-04', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(8, 'VC8', '2012-06-02', '', '', '', '', '2012-08-04', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(9, 'VC9', '2012-06-02', '', '', '', '', '2012-08-04', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(10, 'VC10', '2012-06-02', '', '', '', '', '2012-08-04', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(11, 'VC11', '2012-06-02', '', '', '', '', '2012-08-04', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(12, 'VC12', '2012-06-02', '', '', '', '', '2012-08-04', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(13, 'VC13', '2012-06-02', '', '', '', '', '2012-08-04', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(14, 'VC14', '2012-06-02', '', '', '', '', '2012-08-04', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(15, 'VC15', '2012-06-02', '', '', '', '', '2012-08-04', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(16, 'VC16', '2012-06-02', '', '', '', '', '2012-08-04', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(17, 'VC17', '2012-06-02', '', '', '', '', '2012-08-04', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(18, 'VC18', '2012-06-02', '', '', '', '', '2012-08-04', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(19, 'VC19', '2012-06-02', '', '', '', '', '2012-08-04', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(20, 'VC20', '2012-06-02', '', '', '', '', '2012-08-04', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(21, 'VC21', '2012-06-02', '', '', '', '', '2012-08-04', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(22, 'VC22', '2012-06-02', '', '', '', '', '2012-08-04', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(23, 'VC23', '2012-06-02', '', '', '', '', '2012-08-04', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(24, 'VC24', '2012-06-02', '', '', '', '', '2012-08-04', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(25, 'VC25', '2012-06-02', '', '', '', '', '2012-08-04', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(26, 'VC26', '2012-06-02', '', '', '', '', '2012-08-04', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(27, 'VC27', '2012-06-02', '', '', '', '', '2012-08-04', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(28, 'VC28', '2012-06-02', '', '', '', '', '2012-08-04', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(29, 'VC29', '2012-06-02', '', '', '', '', '2012-08-04', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(30, 'VC30', '2012-06-02', '', '', '', '', '2012-08-10', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(31, 'VC31', '2012-06-02', '', '', '', '', '2012-08-10', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(32, 'VC32', '2012-06-02', '', '', '', '', '2012-08-10', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(33, 'VC33', '2012-06-02', '', '', '', '', '2012-08-10', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, 'SGUPTA186@GMAIL.COM', ''),
(34, 'VC34', '2012-06-02', '', '', '', '', '2012-08-10', 'MALE', 'O+', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(35, 'VC35', '2012-06-02', '', '', '', '', '2012-08-10', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(36, 'VC36', '2012-06-02', '', '', '', '', '2012-08-11', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(37, 'VC37', '2012-06-02', '', '', '', '', '2012-08-11', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(38, 'VC38', '2012-06-02', '', '', '', '', '2012-08-11', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(39, 'VC39', '2012-06-02', '', '', '', '', '2012-08-12', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(40, 'VC40', '2012-06-02', '', '', 'gfdgf', '', '2012-08-14', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(41, 'VC41', '2012-06-02', '', '', '', '', '2012-08-14', 'MALE', '', '', '76', '', '', '', '', '', 'sd', 'dffg', 0, 'India', 'fgfd', 0, 'fgf', ''),
(42, 'VC42', '2012-06-02', '', '', '', '', '2012-08-14', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(43, 'VC43', '2012-06-02', '', '', '', '', '2012-08-14', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(44, 'VC44', '2012-06-02', '', '', '', '', '2001-12-31', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(45, 'VC45', '2012-06-02', '', '', '', '', '2012-08-25', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(46, 'VC46', '2012-06-02', '', '', '', '', '2012-08-25', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(47, 'VC47', '2012-06-02', '', '', '', '', '2012-08-25', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(48, 'VC48', '2012-06-02', '', '', '', '', '2012-08-25', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(49, 'VC49', '2012-06-02', '', '', '', '', '2012-08-25', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(50, 'VC50', '2012-06-02', '', '', '', '', '2012-08-25', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(51, 'VC51', '2012-06-02', '', '', '', '', '2012-08-25', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(52, 'VC52', '2012-06-02', '', '', '', '', '2012-08-25', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(53, 'VC53', '2012-06-02', '', '', '', '', '2012-08-25', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(54, 'VC54', '2012-06-02', '', '', '', '', '2012-08-25', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(55, 'VC55', '2012-06-02', '', '', '', '', '2012-08-25', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(56, 'VC56', '2012-06-02', '', '', '', '', '2012-08-25', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(57, 'VC57', '2012-06-02', '', '', '', '', '2012-08-25', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(58, 'VC58', '2012-06-02', '', '', '', '', '2012-08-25', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(59, 'VC59', '2012-06-02', '', '', '', '', '2012-08-25', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(60, 'VC60', '2012-06-02', '', '', '', '', '2012-08-25', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(61, 'VC61', '2012-06-02', '', '', '', '', '2012-08-26', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(62, 'VC62', '2012-06-02', '', '', '', '', '2012-08-26', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(63, 'VC63', '2012-06-02', '', '', '', '', '2012-08-26', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(64, 'VC64', '2012-06-02', '', '', '', '', '2012-08-26', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(65, 'VC65', '2012-06-02', '', '', '', '', '2012-08-26', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(66, 'VC66', '2012-06-02', '', '', '', '', '2012-08-26', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(67, 'VC67', '2012-06-02', '', '', '', '', '2012-08-26', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(68, 'VC68', '2012-06-02', '', '', '', '', '2012-08-26', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(69, 'VC69', '2012-06-02', 'SUMIT', 'KUMAR', 'GUPTA', '2', '2012-08-29', 'MALE', 'A+', 'HAZARIBAG', '76', 'HINDI', '34', 'HINDU', 'SHIVPURI', 'HAZARIBAG', 'HAZARIBAG', 'JHARKHAND', 825301, 'India', '0654622222', 2147483647, 'SGUPTA186@GMAIL.COM', ''),
(70, 'VC70', '1970-01-01', 'ARCHANA', 'KUMARI', 'SINHA', '4', '2012-09-03', 'FEMALE', 'B+', 'RANCHI', '76', 'SINHA', '1', 'HINDU', 'HAZARIBAG', 'HAZARIBAG', 'HAZARIBAG', 'JHARKHNAD', 825301, 'India', '0654622222', 2147483647, 'ARCHANA1234@GMAIL.COM', ''),
(71, 'VC71', '2012-06-02', 'dfdsfdg', 'd', 'd', '', '2012-09-01', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(72, 'VC72', '2012-06-02', 'SUMIT', '', 's', '', '2012-09-01', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(73, 'VC73', '2012-06-02', 's', '', 's', '2', '2012-09-01', 'MALE', '', '', '76', '', '', '', '', '', '', '', 0, 'India', '', 0, '', ''),
(74, 'VC74', '2012-06-02', 'pooja', '', 'KUMARI', '2', '2012-09-01', 'MALE', 'A+', 'HAZRIBAG', '76', 'HINDI', '', 'HINDU', 'HAZARINAG', 'HAZRIBAG', 'HAZARIBAG', 'JHARKHAND', 825301, 'India', '11111111', 111111111, 'SGUPTA186@GMAIL.COM', ''),
(75, 'VC75', '2012-06-02', 'shikha ', '', 'sinha', '1', '2012-09-01', 'FEMALE', 'A+', 'HAZRIBAG', '76', 'hindi', '4', 'hindu', 'HAZARINAG', 'HAZRIBAG', 'HAZARIBAG', 'JHARKHAND', 825301, 'India', '8235016670', 2147483647, 'SGUPTA186@GMAIL.COM', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_fee_payment`
--

CREATE TABLE IF NOT EXISTS `student_fee_payment` (
  `fee_pay_id` int(11) NOT NULL auto_increment,
  `fee_pay_coll_id` int(11) NOT NULL,
  `fee_pay_student_no` varchar(20) NOT NULL,
  `fee_tot_amt` decimal(11,2) NOT NULL,
  `fee_pay_fine` decimal(11,2) NOT NULL,
  `fee_pay_payable` decimal(11,2) NOT NULL,
  `payment_date` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`fee_pay_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `student_fee_payment`
--

INSERT INTO `student_fee_payment` (`fee_pay_id`, `fee_pay_coll_id`, `fee_pay_student_no`, `fee_tot_amt`, `fee_pay_fine`, `fee_pay_payable`, `payment_date`) VALUES
(1, 2, '6', 420.00, 0.00, 400.00, '2012-08-01 18:00:38'),
(2, 2, '6', 420.00, 0.00, 10.00, '2012-08-03 12:07:00'),
(3, 2, '6', 420.00, 10.00, 20.00, '2012-08-03 12:07:06'),
(5, 2, '3', 420.00, 0.00, 300.00, '2012-08-03 12:24:00'),
(6, 2, '3', 420.00, 100.00, 500.00, '2012-08-03 12:24:18');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subject_id` int(5) NOT NULL auto_increment,
  `subject_type` varchar(1) NOT NULL,
  `subject_batch_code` varchar(20) NOT NULL,
  `subject_code` varchar(20) NOT NULL,
  `subject_name` varchar(20) NOT NULL,
  `subject_max_weekly_classes` int(5) NOT NULL,
  `subject_exam` int(2) NOT NULL default '1',
  PRIMARY KEY  (`subject_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_type`, `subject_batch_code`, `subject_code`, `subject_name`, `subject_max_weekly_classes`, `subject_exam`) VALUES
(1, '1', '2012-2013', 'BASICCOM', 'BASI OF COMPUTER', 4, 0),
(2, '1', '', 'BASICCOM', 'OOPS', 5, 0),
(4, '1', '2', 'BASICCOM', 'COMPUTER', 4, 0),
(5, '1', '1', 'cp', 'C', 9, 0),
(6, '1', '1', 'cpp', 'cpp', 3, 0),
(7, '1', '2', 'net', '.net', 7, 0),
(8, '1', '4', 'php', 'php', 0, 0),
(10, '', '', '', '', 0, 0),
(20, '1', '42', '32', 'php lang', 4, 0),
(19, '1', '42', '0125', 'COMPUTER ', 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL auto_increment,
  `user_loginid` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_pwd` varchar(100) NOT NULL,
  `user_type` int(2) NOT NULL,
  `user_login_time` datetime NOT NULL,
  `user_login_ip` varchar(20) NOT NULL,
  PRIMARY KEY  (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_loginid`, `user_name`, `user_pwd`, `user_type`, `user_login_time`, `user_login_ip`) VALUES
(1, 'admin', 'Administrator', '12345', 1, '2012-08-04 11:54:49', '192.168.1.1'),
(2, 'employee', 'Rakesh Kr. Singh (Emp)', '12345', 2, '0000-00-00 00:00:00', ''),
(3, 'student', 'Rahul Kumar (Student)', '12345', 3, '0000-00-00 00:00:00', '');
