-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 13, 2012 at 05:10 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `e_school_db`
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=132 ;

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
(47, 'attendances', 'Attendances'),
(48, 'attendance_reports', 'Attendance Reports'),
(49, 'create_edit_timetable', 'Create Edit Timetable'),
(50, 'timetable', 'Timetable'),
(51, 'set_class_timimg', 'Set Class Timimg'),
(53, 'view_timetable', 'View Timetable'),
(54, 'swap_class', 'Swap Class'),
(55, 'institutional_timetable', 'Institutional Timetable'),
(56, 'create_weekdays', 'Create Weekdays'),
(57, 'calendar', 'Calendar'),
(58, 'exam_grading_levels', 'Exam Grading Levels'),
(59, 'exam_exam_mangement', 'Exam Exam Mangement'),
(60, 'exam_additional_exam', 'Exam Additional Exam'),
(61, 'exam_exam_wise_report', 'Exam Exam Wise Report'),
(63, 'exam_subject_wise_report', 'Exam Subject Wise Report'),
(64, 'exam_grouped_exam_report', 'Exam Grouped Exam Report'),
(65, 'exam_online_exam', 'Exam Online Exam'),
(66, 'news', 'News'),
(67, 'event', 'Event'),
(68, 'hr_settings', 'Hr Settings'),
(70, 'hr_employee_management', 'Hr Employee Management'),
(71, 'hr_employee_attendance', 'Hr Employee Attendance'),
(72, 'hr_payslip', 'Hr_payslip'),
(73, 'hr_search', 'Hr Search'),
(74, 'hr_department_payslip', 'Hr Department Payslip'),
(75, 'finance_categories', 'Finance Categories'),
(76, 'filter', 'Filter'),
(77, 'exam', 'Exam'),
(78, 'exam_groups', 'Exam Groups'),
(79, 'view_exam_groups', 'View Exam Groups'),
(80, 'new_exam', 'New Exam'),
(81, 'exam_grouping', 'Exam Grouping'),
(82, 'exam_exam_new', 'Exam Exam New'),
(83, 'exam_result_entry1', 'Exam Result Entry1'),
(97, 'registration_courses', 'Registration Courses'),
(87, 'exam_edit1', 'Exam Edit1'),
(96, 'applicants_admin', 'Applicants Admin'),
(95, 'user', 'User'),
(94, 'edit2', 'edit2'),
(93, 'archived_exam_wise_report', 'Archived Exam Wise Report'),
(98, 'pin_groups', 'Pin Groups'),
(99, 'pin_groups_new', 'Pin Groups New'),
(100, 'online_meeting_rooms', 'Online Meeting Rooms'),
(101, 'online_meeting_rooms_new', 'Online Meeting Rooms New'),
(102, 'online_meeting_servers', 'Online Meeting Servers'),
(103, 'online_meeting_servers_new', 'Online Meeting Servers New'),
(104, 'custom_reports', 'Custom Reports'),
(105, 'custom_reports_generate_student', 'Custom Reports Generate Student'),
(106, 'custom_reports_generate_employee', 'Custom Reports Generate Employee'),
(107, 'data_imports', 'Data Imports'),
(108, 'galleries', 'Galleries'),
(109, 'galleries_photo_add', 'Galleries Photo Add'),
(110, 'galleries-category-new', 'Galleries Category New'),
(111, 'groups-index', 'Groups Index'),
(112, 'groups-new', 'Groups New'),
(113, 'school_assets', 'School Assets'),
(114, 'school_assets-new', 'School Assets New'),
(115, 'Hostels-hostel_dashboard', 'Hostels Hostel Dashboard'),
(116, 'hostels', 'Hostels'),
(117, 'room_details', 'Room Details'),
(118, 'room_allocate', 'Room Allocate'),
(119, 'hostel_fee', 'Hostel Fee'),
(120, 'hostel_fee_pay', 'Hostel Fee Pay'),
(121, 'hostel_fee_defaulters', 'Hostel Fee Defaulters'),
(122, 'hostels-1', 'Hostels'),
(123, 'hostels-1-edit', 'Hostels 1 Edit'),
(124, 'hostels-new', 'Hostels New'),
(125, 'room_details-new', 'Room Details New'),
(126, 'room_allocate-assign_room-200', 'Room Allocate Assign Room 200'),
(127, 'hostel_fee_collection', 'Hostel Fee Collection'),
(128, 'hostel_fee_collection_view', 'Hostel Fee Collection View'),
(129, 'hostel_fee-student_hostel_fee-114', 'Hostel Fee Student Hostel Fee-114'),
(130, 'room_details-1-edit', 'Room Details 1 Edit'),
(131, 'library', 'Library');
