-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 25, 2012 at 12:29 PM
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=362 ;

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
(72, 'hr_payslip', 'Hr Payslip'),
(73, 'hr_search', 'Hr Search'),
(74, 'hr_department_payslip', 'Hr Department Payslip'),
(197, 'cce_weightages-assign_weightages', 'cce_weightages-assign_weightages'),
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
(131, 'library', 'Library'),
(132, 'books', 'Books'),
(133, 'search_book', 'Search Book'),
(134, 'detail_search', 'Detail Search'),
(135, 'books-new', 'Books-New'),
(136, 'book_movement-return_book', 'Book Movement Return Book'),
(137, 'book_movement-direct_issue_book', 'Book Movement Direct Issue Book'),
(138, 'library-card_setting', 'Library-Card_Setting'),
(139, 'library-movement_log', 'Library-Movement_Log'),
(140, 'book_movement-renewal', 'Book Movement Renewal'),
(141, 'placementevents', 'Placementevents'),
(142, 'placementevents-archive', 'Placementevents Archive'),
(143, 'placementevents-new', 'Placementevents New'),
(144, 'tasks', 'Tasks'),
(145, 'tasks-new', 'Tasks New'),
(146, 'transport_dash_board', 'Transport Dashboard'),
(147, 'routes', 'Routes'),
(148, 'routes-new', 'Routes-New'),
(149, 'routes-1-edit', 'Routes-1-Edit'),
(150, 'vehicles', 'Vehicles'),
(151, 'vehicles-1-edit', 'Vehicles 1 Edit'),
(152, 'vehicles-new', 'Vehicles New'),
(153, 'transport', 'Transport'),
(154, 'transport-transport_details', 'Transport Transport Details'),
(155, 'transport_fee', 'Transport Fee'),
(156, 'transport_fee_collections', 'Transport Fee Collections'),
(157, 'transport_fee_collection_view', 'Transport Fee Collection View'),
(158, 'transport_fee-transport_fee_search', 'Transport Fee Transport Fee Search'),
(160, 'transport_fee_defaulters_view', 'Transport Fee Defaulters View'),
(162, 'employee_defaulters_transport_fee_collection', 'Employee Defaulters Transport Fee Collection'),
(163, 'teacher_timetable', 'Teacher Timetable'),
(164, 'student', 'Student'),
(165, 'profile-114', 'Profile 114'),
(166, 'student_attendance', 'Student Attendance'),
(167, 'configuration', 'Configuration'),
(168, 'configuration-settings', 'Configuration Settings'),
(169, 'exam-settings', 'Exam Settings'),
(170, 'exam-create_exam', 'Exam Create Exam'),
(171, 'exam-previous_batch_exams', 'Exam Previous Batch Exams'),
(172, 'exam-generate_reports', 'Exam Renerate Reports'),
(173, 'exam-generate_previous_reports', 'Exam Generate Previous Reports'),
(174, 'exam-report_center', 'Exam Report Center'),
(175, 'online_exam', 'Online Exam'),
(176, 'exam-subject_rank', 'Exam Subject Rank'),
(177, 'exam-batch_rank', 'Exam Batch Rank'),
(178, 'exam-course_rank', 'Exam Course Rank'),
(179, 'exam-student_school_rank', 'Exam Student School Rank'),
(180, 'exam-ranking_level_report', 'Exam Ranking Level Report'),
(181, 'exam-transcript', 'Exam Transcript'),
(182, 'exam-combined_report', 'Exam Combined Report'),
(183, 'cce_reports', 'CCE Reports'),
(184, 'exam-attendance_rank', 'Exam Attendance Rank'),
(185, 'cce_reports-create_reports', 'CCE Reports Create Reports'),
(186, 'cce_reports-student_wise_report', 'CCE Reports Student Wise Report'),
(187, 'grading_levels', 'Grading Levels'),
(188, 'ranking_levels', 'Ranking Levels'),
(189, 'class_designations', 'Class Designations'),
(190, 'cce_settings', 'CCE Settings'),
(191, 'cce_settings-basic', 'CCE Settings Basic'),
(192, 'cce_settings-co_scholastic', 'CCE Settings CoScholastic'),
(193, 'cce_settings-scholastic', 'CCE Settings Scholastic'),
(194, 'cce_grade_sets', 'CCE Grade Sets'),
(195, 'cce_exam_categories', 'CCE Exam Categories'),
(196, 'cce_weightages', 'CCE Weightages'),
(199, 'observation_groups', 'Observation Groups'),
(200, 'observation_groups-1', 'Observation Groups 1'),
(201, 'observations-1-descriptive_indicators', 'Observations 1 Descriptive Indicators'),
(203, 'observation_groups-assign_courses', 'Observation Groups Assign Courses'),
(204, 'cce_weightages-1', 'CCE Weightages 1'),
(205, 'cce_grade_sets-1', 'CCE Grade Sets 1'),
(206, 'fa_groups', 'Fa Groups'),
(207, 'fa_groups-1', 'Fa Groups 1'),
(208, 'fa_criterias-1-descriptive_indicators', 'Fa Criterias 1 Descriptive Indicators'),
(209, 'fa_groups-assign_fa_groups', 'Fa Groups Assign Fa Groups'),
(210, 'hr', 'HR'),
(211, 'employee-add_category', 'Employee Add Category'),
(212, 'employee-edit_category', 'Employee Edit Category 51'),
(213, 'employee-add_position', 'employee-add_position'),
(214, 'employee-edit_position-51', 'Employee Edit Position 51'),
(215, 'employee-add_department', 'Employee Add Department'),
(216, 'employee-edit_department-49', 'Employee Edit Department 49'),
(217, 'employee-add_grade', 'Employee Add Grade'),
(218, 'employee-edit_grade-47', 'Employee Edit Grade 47'),
(219, 'payroll-add_category', 'Payroll Add Category'),
(220, 'payroll-edit_category-10', 'Payroll Edit Category 10'),
(221, 'employee-add_bank_details', 'Employee Add Bank Details'),
(222, 'employee-edit_bank_details-1', 'Employee Edit Bank Details 1'),
(223, 'employee-add_additional_details', 'Employee Add Additional Details'),
(224, 'employee-edit_additional_details-1', 'Employee Edit Additional Details 1'),
(225, 'employee-admission1', 'Employee Admission1'),
(226, 'employee-subject_assignment', 'Employee Subject Assignment'),
(227, 'employee_attendance-add_leave_types', 'Employee Attendance Add Leave Types'),
(228, 'employee_attendance-edit_leave_types-4', 'Employee Attendance Edit Leave Types 4'),
(229, 'employee_attendances', 'Employee Attendances'),
(230, 'employee_attendance-report', 'Employee Attendance-Report'),
(231, 'employee_attendance-manual_reset', 'Employee Attendance-manual Reset'),
(232, 'employee_attendance-leave_reset_settings', 'Employee Attendance Leave Reset Settings'),
(233, 'employee_attendance-employee_leave_reset_all', 'Employee Attendance Employee Leave Reset All'),
(234, 'employee_attendance-employee_leave_reset_by_department', 'Employee Attendance Employee Leave Reset By Department'),
(235, 'employee_attendance-employee_leave_reset_by_employee', 'Employee Attendance Employee Leave Reset By Employee'),
(236, 'employee_attendance-employee_view_all', 'Employee Attendance Employee View All'),
(237, 'employee-select_department_employee', 'Employee Select Department Employee'),
(238, 'employee-rejected_payslip', 'Employee Rejected Payslip'),
(239, 'student-reports-114', 'Student Reports 114'),
(240, 'exam_generated_report_term', 'Exam Generated Report Term'),
(241, 'consolidated_exam_report', 'Consolidated Exam Report'),
(242, 'generated_report_accounting', 'Generated Report Accounting'),
(243, 'generated_report3_advertising', 'Generated Report3 Advertising'),
(244, 'generated_report4_final-report', 'Generated Report4 Final-Report'),
(245, 'student_transcript', 'Student Transcript'),
(246, 'cce_reports-student_transcript', 'CCE Reports Student Transcript'),
(247, 'student_current_year_report', 'Student Current Year Report'),
(248, 'student-reports', 'Student Reports'),
(249, 'student_subject_report', 'Student Subject Report'),
(250, 'student_final_report', 'Student Final Report'),
(251, 'camapre_with_passed_year_report', 'Camapre With Passed Year Report'),
(252, 'student_guardians', 'Student Guardians'),
(253, 'add_guardian', 'Add Guardian'),
(254, 'student_email', 'Student Email'),
(255, 'groups-recent_posts1', 'Groups Recent Posts1'),
(256, 'user-all', 'User All'),
(257, 'news-all', 'News All'),
(258, 'news-add', 'News Add'),
(259, 'news-view', 'News View'),
(260, 'view_room_details', 'View Room Details'),
(261, 'hostel_wardens', 'Hostel Wardens'),
(263, 'hostel_warden_add', 'Hostel Warden Add'),
(264, 'hostel_add_room', 'Hostel Add Room'),
(265, 'user-profile', 'User Profile'),
(266, 'employee-view_all', 'Employee View All'),
(267, 'employee-profile', 'Employee Profile'),
(268, 'employee-edit', 'Employee-Edit'),
(269, 'user_change_password', 'User Change Password'),
(270, 'user-edit_privilege', 'User Edit Privilege'),
(271, 'user-create', 'User-Create'),
(272, 'placementevents-edit', 'Placementevents Edit'),
(273, 'placementevents-new1', 'Placementevents New1'),
(274, 'placementevents_plan', 'Placementevents Plan'),
(275, 'placementevents-invite', 'Placementevents Invite'),
(276, 'placement_registrations', 'Placement Registrations'),
(277, 'registration_courses-new', 'Registration Courses New'),
(278, 'emp_register', 'emp_register'),
(279, 'emp_attendance_reports', 'Emp Attendance Reports'),
(280, 'emp_attendance', 'Emp Attendance'),
(281, 'emp_home', 'Emp Home'),
(282, 'emp_profile', 'Emp Profile'),
(283, 'emp_calendar', 'Emp Calendar'),
(284, 'emp_exam', 'Emp Exam'),
(285, 'emp_exam_create', 'Emp Exam Create'),
(286, 'emp_additional_exam', 'Emp Additional Exam'),
(287, 'emp_exam_wise_report', 'Emp Exam Wise Report'),
(288, 'emp_subject_wise_report', 'Emp Subject Wise Report'),
(289, 'emp_exam-grouped_exam_report', 'Emp Exam Grouped Exam Report'),
(290, 'emp_news', 'Emp News'),
(291, 'empnews-all', 'Empnews All'),
(292, 'emp_hr', 'EmpHr'),
(293, 'emp_employee-search', 'Emp Employee Search'),
(294, 'emp_employee-view_all', 'Emp Employee View All'),
(295, 'emp_employee-advanced_search', 'Emp Employee Advanced Search'),
(296, 'emp-assignments', 'Emp Assignments'),
(297, 'emp_online_meeting_rooms', 'Emp Online Meeting Rooms'),
(298, 'emp_online_meeting_rooms-new', 'Emp Online Meeting Rooms New'),
(299, 'emp_groups-index', 'Emp Groups Index'),
(300, 'emp_groups-recent_posts', 'Emp Groups Recent Posts'),
(301, 'emp_gallery', 'Emp Gallery'),
(302, 'emp_library', 'Emp Library'),
(303, 'emp_lib_mange-books', 'Emp Lib Mange Books'),
(304, 'emp_library-search_book', 'Emp Library Search Book'),
(305, 'emp_library-detail_search', 'Emp Library Detail Search'),
(306, 'emp_poll', 'Emp Poll'),
(307, 'emp_tasks', 'Emp Tasks'),
(308, 'emp_task', 'Emp Task'),
(309, 'emp_task_assign', 'Emp Task Assign'),
(310, 'emp_leaves', 'Emp Leaves'),
(311, 'emp_test-assignments', 'Emp Test Assignments'),
(312, 'emp_assignments_edit', 'Emp Assignments Edit'),
(313, 'emp_leave_history', 'Emp Leave History'),
(314, 'emp_myleaves', 'Emp Myleaves'),
(315, 'emp_all_leaves', 'Emp All Leaves'),
(316, 'emp_reminder', 'Emp Reminder'),
(317, 'emp_sent_reminder', 'Emp Sent Reminder'),
(318, 'emp_create_reminder', 'Emp Create Reminder'),
(319, 'emp_sal_payroll', 'Emp Sal Payroll'),
(320, 'emp_sal_payslip', 'Emp Sal Payslip'),
(321, 'emp_leave_altendance', 'Emp Leave Altendance'),
(322, 'emp_timetable', 'Emp Timetable'),
(323, 'emp_transport_details', 'Emp Transport Details'),
(324, 'student_home', 'Student Home'),
(325, 'student_calendar', 'Student Calendar'),
(326, 'student_news', 'Student News'),
(327, 'student_news-all', 'Student News All'),
(328, 'student_assignments', 'Student Assignments'),
(329, 'student_assignmentstwo', 'Student Assignmentstwo'),
(330, 'student_dicussion', 'Student Dicussion'),
(331, 'student_gallery', 'Student Gallery'),
(332, 'student_library', 'Student Library'),
(333, 'student_lib_mange-books', 'Student Lib Mange Books'),
(334, 'student_library-search_book', 'Student Library Search Book'),
(335, 'student_library-detail_search', 'Student Library Detail Search'),
(336, 'student_online_student_exam', 'Student Online Student Exam'),
(337, 'student_placementevents', 'Student Placement Events'),
(338, 'student_poll', 'Student Poll'),
(339, 'student_task', 'Student Task'),
(340, 'student_timetable', 'Student Timetable'),
(341, 'student_reminder', 'Student Reminder'),
(342, 'student_sent_reminder', 'Student Sent Reminder'),
(343, 'student_create_reminder', 'Student Create Reminder'),
(344, 'student_academics', 'Student Academics'),
(345, 'student_recent_posts', 'Student Recent Posts'),
(346, 'student_recents_posts', 'Student Recents Posts'),
(347, 'student_general_opinion', 'Student General Opinion'),
(348, 'student_general_opinions', 'Student General Opinions'),
(349, 'student_see_allmembers', 'Student See Allmembers'),
(350, 'student_parents_discussion', 'Student Parents Discussion'),
(351, 'student_parent_discuss', 'Student Parent Discuss'),
(352, 'student_firstterm_report', 'student_firstterm_report'),
(353, 'student_finalreport', 'student_finalreport'),
(354, 'student_campare_reports', 'student_campare_reports'),
(355, 'student_transtion', 'student_transtion'),
(356, 'student_group-archive', 'student_group-archive'),
(357, 'student_guardian', 'student_guardians'),
(358, 'student_fees', 'student_fees'),
(359, 'student_hostels', 'student_hostels'),
(360, 'student_transport_deatails', 'student_transport_deatails'),
(361, 'student_lib_detail', 'student_lib_detail');