<div id="header_bg">	
      <div id="header">
        <div id="outer-header-link">
 <span style="padding:10px; color:#FFFFFF; font-size:20px"><?php echo $configrecord[school_name].', '.$configrecord[school_address]?></span>
          <div id="header_link">
            Logged in as:
            <a href="#?uid=<?=$userrecord[user_id]?>"><?=$userrecord[user_name]?></a>&nbsp;|&nbsp;
            <a href="reminder">Messages</a>
(0)&nbsp;|&nbsp;
            <a href="../logout.php">Log out</a> &nbsp;&nbsp;
          </div>
        </div>
        <div id="outer-main-menu">                    
<ul id="main-menu">
  <li class="a"><a href="?page=home" class="border">Dashboard ▼</a>
   <ul class="level-1">
          <li><a href="?page=home">HOME</a></li>
      </ul></li>
  
    <li class="a"><a href="?page=student_view" class="border">Students ▼</a>
   <ul class="level-1">
           <li><a href="?page=student_registration">Registration</a></li>
          <li><a href="?page=admission">ADMISSION</a></li>
          <li><a href="?page=student_view">STUDENT DETAILS</a></li>
      </ul>
  </li>
    <li class="a"><a href="?page=student_attendance" class="border">Attendance ▼</a>
      <ul class="level-1">
          <li><a href="?page=attendances">Attendance register</a></li>
          <li><a href="?page=attendance_reports">Attendance Report</a></li>
      </ul>
    </li>
  <!--
  <li><a href="/news">News</a></li> -->
  
    <li class="a"><a href="?page=timetable" class="border">Timetable <span class="down-arrow">▼</span></a>
      <ul class="level-1">
            <li><a href="?page=create_edit_timetable">Create/Edit Timetable</a></li>
          <li><a href="?page=set_class_timimg">Set class timings</a></li>
          <li><a href="?page=view_timetable">View Timetables</a></li>
            <li><a href="?page=teacher_timetable">Teacher Timetables</a></li>
            <li><a href="?page=swap_class">Swap class</a></li>
        <li><a href="?page=institutional_timetable">Institutional Timetable</a></li>
          <li><a href="?page=create_weekdays">Create weekdays</a></li>
      </ul>
    </li>
  <li class="a"><a href="?page=finance" class="border">More ▼</a>
    <ul class="level-1">
      <li><a href="?page=calendar">Calendar</a></li>
      
        <li><a href="?page=exam">Examination <span class="right-arrow">▶</span></a>
          <ul class="level-2">
              <li><a href="?page=grading_levels">Set grading levels</a> </li>
              <li><a href="?page=exam_exam_mangement">Exam Management</a>  </li>
              <li><a href="?page=exam_additional_exam">Additional Exams</a></li>
            <li><a href="?page=exam_exam_wise_report">Exam Wise Report</a></li>
            <li><a href="?page=exam_subject_wise_report
">Subject wise Report</a> </li>
            <li><a href="?page=exam_grouped_exam_report">Grouped exam Reports</a></li>
                <li><a href="?page=exam_online_exam">Online Exam</a></li>            
          </ul>
        </li>      
      <li><a href="?page=news">News</a></li>
        <li><a href="?page=event">Event Creation</a></li>      
        <li><a href="?page=hr">Human Resource <span class="right-arrow">▶</span></a>
          <ul class="level-2">
              <li><a href="?page=hr_settings">Setting</a></li>
              <li><a href="?page=hr_employee_management">Employee Management</a></li>
              <li><a href="?page=hr_employee_attendance">Employee Leave Management</a></li> 
              <li><a href="?page=hr_payslip">Create Payslip</a></li>
              <li><a href="?page=hr_search">Employee Search</a></li>  
              <li><a href="?page=hr_department_payslip">Employee payslip</a></li> </ul>
        </li>    
      
        <li><a href="?page=finance">Finance <span class="right-arrow">▶</span></a>
          <ul class="level-2">
            <li><a href="?page=fees_home">Fees</a> </li>
            <li><a href="?page=finance_categories">Category</a> </li>
            <li><a href="?page=transactions">Transactions</a> </li>
            <li><a href="?page=donation">Donations</a></li>
            <li><a href="?page=automatic_transactions">Automatic Transactions</a></li>            
              <li><a href="?page=payslip_index">Payslip</a></li>            
            <li><a href="?page=asset_liability">Asset Liability Management</a></li>
          </ul>
        </li>    
      
        <li><a href="?page=user">User</a></li>
          <li><a href="?page=applicants_admin">Appllicat Registration</a></li>
            <li><a href="?page=online_meeting_rooms">Collaborate</a> </li>
              <li><a href="?page=custom_reports">Custom Report</a></li>
                <li><a href="?page=data_imports">Data Imports</a></li>
                  <li><a href="?page=school_assets">Data Management</a></li>
                 
            <li><a href="?page=groups-index">Discussion</a>              
            </li>
            <li><a href="?page=galleries">Gallery</a>              
            </li>
            <li><a href="?page=hostels-hostel_dashboard">Hostel <span class="right-arrow">▶</span></a>              
                <ul class="level-2">                  
                    <li><a href="?page=hostels">Hostel</a></li>                  
                    <li><a href="?page=room_details">Rooms</a></li>                  
                    <li><a href="?page=room_allocate">Room Allocation</a></li>                  
                    <li><a href="?page=hostel_fee_collection">Fee Collection</a></li>                  
                    <li><a href="?page=hostel_fee_pay">Hostel fee pay</a></li>                  
                    <li><a href="?page=hostel_fee_defaulters">Hostel fee defaulters</a></li>                  
                    <li><a href="?page=hostel_fee">Pay student hostel fee</a></li>                  
                </ul>              
            </li>
            <li><a href="?page=library">Library <span class="right-arrow">▶</span></a>              
                <ul class="level-2">                  
                    <li><a href="?page=books">Manage Books</a></li>                  
                    <li><a href="?page=search_book">Search book</a></li>                  
                    <li><a href="?page=book_movement-return_book">Return book</a></li>                  
                    <li><a href="?page=book_movement-direct_issue_book">Issue books</a></li>                  
                    <li><a href="?page=library-card_setting">Library setting</a></li>                  
                    <li><a href="?page=library-movement_log">Movement Log</a></li>                  
                    <li><a href="?page=book_movement-renewal">Book renewal</a></li>                  
                </ul>              
            </li>
            <li><a href="?page=placementevents">Placement</a></li>
              <li><a href="?page=poll_questions">Poll</a></li>
            <li><a href="?page=tasks">Tasks</a>  </li>
          
            <li><a href="?page=transport_dash_board">Transport <span class="right-arrow">▶</span></a>
              
                <ul class="level-2">                  
                    <li><a href="?page=routes">Set Routes</a></li>                  
                    <li><a href="?page=vehicles">Vehicles</a></li>                  
                    <li><a href="?page=transport">Transport</a></li>                  
                    <li><a href="?page=transport_fee">Transport Fee</a></li>                  
                </ul>              
            </li>
    </ul>
  </li>
  <li class="a"><a href="?page=configuration" class="border">Settings ▼</a>
      <ul class="level-1">        
          <li><a href="?page=courses">Manage Course/Batch</a></li>        
          <li><a href="?page=category">Manage Student Category</a></li>
          <li><a href="?page=subject">Manage Subject</a></li>
          <li><a href="?page=configuration-settings">General Settings</a></li>
          <li><a href="?page=student_add_additional_details">Add Admission Additional Detail</a></li>
      </ul>
    </li>
</ul>
        </div>
        <div id="outer-autosuggest-menu">
        
        </div>
      </div>
    </div>