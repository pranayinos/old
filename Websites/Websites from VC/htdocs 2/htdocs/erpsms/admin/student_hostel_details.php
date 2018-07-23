<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/student_hostel_details.css" media="screen" rel="stylesheet" type="text/css">
 <!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php /*?><?php include("include/sidebar.php")?><?php */?>
           
      <!-- end of side bar -->
      <div id="fullcontent"> 
<div id="content-header">
  <img alt="Student_details_logo" src="../images/_global/student_details_logo.jpg">
  <h1>Student info</h1>
  <h3>Hostel Details</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="nav">
  <ul>
    
     <li><a href="?page=student-reports">Reports</a></li>
    
   
    
      <li><a href="?page=student_guardians">Guardians</a></li>
    
    
      
      
        <li><a href="?page=student_email">Send Email</a></li>
      
    
    
      <li><a href="#">Delete</a></li>
    
    <li>
      <a href="#" class="drops" id="link_one">More ▼</a>
      <ul id="box_one" class="scriptaculously" style="display:none;">
        
          <li><a href="?page=fee_student">Fees</a></li>
        
        
          <li><a href="?page=galleries">Gallery</a></li>
        
          <li><a href="?page=student_hostel_details">Hostel</a></li>
        
          <li><a href="?page=library_student_library_details">Library</a></li>
        
          <li><a href="?page=transport_student_transport_details">Transport</a></li>
        
      </ul>
    </li>
  </ul>
</div>

<div id="page-yield">

  

  <div id="student_profile_heading">

    <div id="profile_picture_display">
      
        <img alt="Default_student" src="../images/master_student/profile/default_student.png">
      
    </div>

    <div id="student_main_info">
      <h3> SACHIN RAMESH  TENDULKAR  </h3>
      <h4> Course: MBA Business Management  </h4>
      <h4> Batch : 1st Semester </h4>
      <h4> Adm no.: 1 </h4>
    </div>

    <div class="extender"> </div>

  </div>

  
  
    <div id="new_profile_info_top">
      <div class="profile_top_banner">
        <span class="profile">Details</span>
        <img alt="Topbanner" src="../images/master_student/profile/topbanner.png">
      </div>

      <div class="profile_info_label_top2">Hostel</div>
      <div class="profile_info_text_top2">
        Himalaya
      </div>

      <div class="profile_info_label_top">Room number</div>
      <div class="profile_info_text_top">
        001
      </div>


      <div class="profile_info_label_top">Rent</div>
      <div class="profile_info_text_top">
        $200.0
      </div>
    </div>
  

</div>


 </div>

      <div class="extender"></div>
    </div>

    <?php include("include/footer.php")?>
  

<ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 1; top: 0px; left: 0px; display: none; "></ul></body></html>