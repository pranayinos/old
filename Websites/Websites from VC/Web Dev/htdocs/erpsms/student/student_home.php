<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<!--<link href="css/timetable.css" media="screen" rel="stylesheet" type="text/css">-->
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
  <h3 id="sub_heading">to Fedena dashboard</h3>
</div>

 <p class="flash-msg"> Sorry, you are not allowed to access that page. </p> 

<div id="user_options">

  

     <div class="button-box">
      <a href="?page=student_profile" class="option_buttons" id="student_details_button" nicetitle="View your profile"><div class="button-label"><p>My Profile</p></div></a>

    </div>
    <div class="button-box">
      <a href="?page=student_news" class="option_buttons" id="campus_news_button" nicetitle="View or publish latest school news and announcements"><div class="button-label"><p>Campus News</p></div></a>

    </div>
   <div class="button-box">
      <a href="?page=student_timetable" class="option_buttons" id="timetable_button" nicetitle="Timetable management module"><div class="button-label"><p>Timetable</p></div></a>
    </div>
    <div class="button-box">
      
        <div class="reminder1">
          <a href="?page=student_reminder" class="option_buttons" id="reminders_button" nicetitle="Student messages"><div class="button-label"><p>Reminders</p></div></a>
          <div class="count">
(37)</div>
        </div>
      
    </div>
    <div class="button-box">
      <a href="?page=student_academics" class="option_buttons" id="academic_button" nicetitle="Academic  reports"><div class="button-label"><p>Academics</p></div></a>
    </div>
  

   <div class="button-box">
          <a href="?page=student_library" class="option_buttons" id="library_button" nicetitle="Manage Library"><div class="button-label"><p>Library</p></div></a>
        </div>
      
</div>

<div id="option_description"> </div>
 </div>

      <div class="extender"></div>
    </div>

     <!-- footer -->
  <?php include("include/footer.php")?>
  

<ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 1; top: 0px; left: 0px; display: none; "></ul><div class="nicetitle" style="width: 180px; left: 433px; top: 524px; "><p class="titletext">Manage Library</p></div></body></html>