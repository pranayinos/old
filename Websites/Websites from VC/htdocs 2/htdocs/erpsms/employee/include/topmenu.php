<div id="header_bg">
      <div id="header">
        <div id="outer-header-link">
          <span style="padding:10px; color:#FFFFFF; font-size:20px"><?php echo $configrecord[school_name].', '.$configrecord[school_address]?></span>
          <div id="header_link">
            Logged in as:
           <a href="#?uid=<?=$userrecord[user_id]?>"><?=$userrecord[user_name]?></a> &nbsp;|&nbsp;
            <a href="reminder">Messages</a>
(0)&nbsp;|&nbsp;
            <a href="../logout.php">Log out</a>  &nbsp;&nbsp;
          </div>
        </div>
        <div id="outer-main-menu">                    
<ul id="main-menu">
  <li class="a"><a href="?page=emp_home" class="border">Dashboard ▼</a>
   <ul class="level-1">
          <li><a href="?page=emp_home">HOME</a></li>
      </ul></li>
  
    <li class="a"><a href="?page=emp_attendance" class="border">Attendance ▼</a>
      <ul class="level-1">
          <li><a href="?page=emp_register">Attendance register</a></li>
          <li><a href="?page=emp_attendance_reports">Attendance Report</a></li>
      </ul>
    </li>
  <!--
  <li><a href="/news">News</a></li> -->
  <li class="a"><a href="?page=emp_exam" class="border">More ▼</a>
    <ul class="level-1">
      <li><a href="?page=emp_calendar">Calendar</a></li>
      <li><a href="?page=emp_exam">Examination</a>
        <ul class="level-2"><li><a href="?page=emp_exam_create">Exam Management</a> </li>
          <li><a href="?page=emp_additional_exam">Additional Exams</a></li>
          <li><a href="?page=emp_exam_wise_report">Exam Wise Report</a></li>
          <li><a href="?page=emp_subject_wise_report
">Subject wise Report</a> </li>
          <li><a href="?page=emp_exam-grouped_exam_report">Grouped exam Reports</a></li>
          </ul>
      </li>
      <li><a href="?page=emp_news">News</a></li>
      <li><a href="?page=emp_hr">Human Resource</a>
        <ul class="level-2"><li><a href="?page=emp_employee-search">Employee Search</a></li>
          </ul>
      </li>
      <li><a href="?page=emp-assignments">Assignment</a></li>
      <li><a href="?page=emp_online_meeting_rooms">Collaborate</a></li>
      <li><a href="?page=emp_groups-index">Discussion</a> </li>
      <li><a href="?page=emp_gallery">Gallery</a></li>
      <li><a href="?page=emp_library">Library <span class="right-arrow">▶</span></a>              
        <ul class="level-2">                  
          <li><a href="?page=emp_lib_mange-books">Manage Books</a></li>
          <li><a href="?page=emp_library-search_book">Search book</a></li>
          </ul>
      </li>
      <li><a href="?page=emp_poll">Poll</a></li>
      <li><a href="?page=emp_tasks">Tasks</a></li>
      </ul>
  </li>
  </ul>
        </div>
        <div id="outer-autosuggest-menu">
        
        </div>
      </div>
    </div>