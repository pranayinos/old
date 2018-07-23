<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title><!-------------------- supportive files ----------->
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
  
      <div class="button-box">
        <a href="?page=emp_profile" class="option_buttons" id="my_profile_button" nicetitle="Employee profile details."><div class="button-label"><p>My Profile</p></div></a>
      </div>
       
      <div class="button-box">
        <a href="?page=emp_news" class="option_buttons" id="campus_news_button" nicetitle="View or publish latest school news and announcements"><div class="button-label"><p>Campus News</p></div></a>
      </div>
    

   
       <div class="button-box">
          <a href="?page=emp_leaves" class="option_buttons" id="leaves_button" nicetitle="Employee leave details."><div class="button-label"><p>Leaves</p></div></a>

        </div>
      
    
	<div class="button-box">
       <div class="button-box">
          <a href="?page=emp_reminder" class="option_buttons" id="reminders_button" nicetitle="Student messages"><div class="button-label"><p> Reminders</p></div></a>
        </div>
      </div>
    
      
      
   		<div class="button-box">
            <a href="?page=emp_attendance" class="option_buttons" id="student_attendance_button" nicetitle="Manage the attendance for the students"><div class="button-label"><p>Attendance</p></div></a>
          </div>
          
        
        <div class="button-box">
          <a href="?page=emp_exam" class="option_buttons" id="examinations_button" nicetitle="See examination details and results"><div class="button-label"><p>Examinations</p></div></a>
        </div>
        
      
     <div class="button-box">
          <a href="?page=emp_hr" class="option_buttons" id="hr_button" nicetitle="Human Resource Department"><div class="button-label"><p>Human Resources</p></div></a>
        </div>
      
    

	 <div class="button-box">
          <a href="?page=emp_library" class="option_buttons" id="library_button" nicetitle="Manage Library"><div class="button-label"><p>Library</p></div></a>
        </div>
      
</div>

<div id="option_description"> </div>
 </div>

      <div class="extender"></div>
    </div>
<!-- footer -->
  <?php include("include/footer.php")?>
           