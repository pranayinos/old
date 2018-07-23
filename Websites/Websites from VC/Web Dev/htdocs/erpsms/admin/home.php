<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

<!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php include("include/sidebar.php")?>
           
      <!-- end of side bar -->
      
      <div id="content"> 
<div id="content_header">
  <h1 id="main_heading">Welcome</h1>
  <h3 id="sub_heading">to e-SCHOOL MANAGEMENT dashboard</h3>
</div>

 <p class="flash-msg"> Welcome,  Administrator! </p> 

<div id="user_options">
  <div class="button-box"> <a href="?page=admission" class="option_buttons" id="admission_button" nicetitle="Enter students admission details into the school records.">
    <div class="button-label">
      <p>Admission</p>
    </div>
  </a> </div>
  <div class="button-box"> <a href="?page=student" class="option_buttons" id="student_details_button" nicetitle="Search for existing and former students.">
      <div class="button-label">
        <p>Student Details</p>
      </div>
    </a> </div>
    <div class="button-box">
      <a href="?page=user" class="option_buttons" id="manage_users_button" nicetitle="Manage Users"><div class="button-label"><p> Manage Users </p></div>
      </a>
    </div>
    <div class="button-box">
      <a href="?page=news" class="option_buttons" id="manage_news_button" nicetitle="View or publish latest school news and announcements"><div class="button-label"><p>Manage News</p></div>
      </a>

    </div>
    <div class="button-box">
      <a href="?page=exam" class="option_buttons" id="examinations_button" nicetitle="          Manage Examinations"><div class="button-label"><p>Examinations</p></div>
      </a>
    </div>
    <div class="button-box">
      <a href="?page=timetable" class="option_buttons" id="timetable_button" nicetitle="  Timetable management module  "><div class="button-label"><p>Timetable</p></div>
      </a>
    </div>
    <div class="button-box">
      <a href="?page=student_attendance" class="option_buttons" id="student_attendance_button" nicetitle="Manage the attendance for the students"><div class="button-label"><p>Attendance</p></div>
      </a>
    </div>
    <div class="button-box">
      <a href="?page=configuration" class="option_buttons" id="settings_button" nicetitle="Configure the basic school settings"><div class="button-label"><p>Settings</p></div>
      </a>
    </div>

    
       <div class="button-box">
        <a href="?page=hr" class="option_buttons" id="hr_button" nicetitle="Human Resource Department"><div class="button-label"><p>Human Resources</p></div>
        </a>
      </div>

    

    
      <div class="button-box">
        <a href="?page=finance" class="option_buttons" id="finance_button" nicetitle="Manages Finance module"><div class="button-label"><p> Finance</p></div>
        </a>
      </div>
    

  

  
    
  
    
  
    
  
    
  
    
      
        <div class="button-box">
          <a href="?page=hostels-hostel_dashboard" class="option_buttons" id="hostel_button" nicetitle="Manage Hostel"><div class="button-label"><p>Hostel</p></div>
          </a>
        </div>
      
    
  
    
  
    
  
    
      
        <div class="button-box">
          <a href="?page=library" class="option_buttons" id="library_button" nicetitle="Manage Library"><div class="button-label"><p>Library</p></div>
          </a>
        </div>
      
    
  
    
  
    
  
    
  
    
  
    
      
        <div class="button-box">
          <a href="?page=transport_dash_board" class="option_buttons" id="transport_button" nicetitle="Manage Transport"><div class="button-label"><p>Transport</p></div>
          </a>
        </div>
      
    
  

</div>

<div id="option_description"> </div>
 </div>

      <div class="extender"></div>
    </div>
<!-- footer -->
  <?php include("include/footer.php")?>
           