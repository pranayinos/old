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
  <li class="a"><a href="?page=student_home" class="border">Dashboard ▼</a>
  
  <!--
  <li><a href="/news">News</a></li> -->
  <li class="a"><a href="?page=student_news" class="border">More ▼</a>
    <ul class="level-1">
      <li><a href="?page=student_calendar">Calendar</a></li>
     
      
      
      <li><a href="?page=student_news">News</a></li>
      
 
          
      <li><a href="?page=student_assignments">Assignment</a></li>
       <li><a href="?page=student_dicussion">Discussion</a> </li>
      
     
      <li><a href="?page=student_gallery">Gallery</a></li>
      <li><a href="?page=student_library">Library <span class="right-arrow">▶</span></a>              
        <ul class="level-2">                  
          <li><a href="?page=student_lib_mange-books">Manage Books</a></li>
          <li><a href="?page=student_library-search_book">Search book</a></li>
          </ul>
      </li>
      <li><a href="?page=student_online_student_exam">Online Exam</a></li>
      <li><a href="?page=student_placementevents">Placement</a></li>
      <li><a href="?page=student_poll">Poll</a></li>
      <li><a href="?page=student_task">Tasks</a></li>
      </ul>
  </li>
  </ul>
        </div>
        <div id="outer-autosuggest-menu">
        
        </div>
      </div>
    </div>