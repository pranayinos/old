<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/photo_add.css" media="screen" rel="stylesheet" type="text/css">
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
      <div id="content"> 
<div id="content-header">
  <img alt="Leave-new" src="../images/leave-new.png">
  <h1>Manual Leave Reset</h1>
  <h3>Reset Employee Leave Manually</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">

  

  <div id="box">

      <div class="link-box">
        <div class="link-heading"><a href="?page=employee_attendance-leave_reset_settings">Leave Reset Settings</a></div>
        <div class="link-descr">Configure automatic leave reset settings </div>
      </div>
      <div class="link-box">
        <div class="link-heading"><a href="?page=employee_attendance-employee_leave_reset_all">Reset All </a></div>
        <div class="link-descr">Reset Leave Count For All Employees.</div>
      </div>
  
      <div class="link-box">
        <div class="link-heading"><a href="?page=employee_attendance-employee_leave_reset_by_department">Department Reset</a></div>
        <div class="link-descr">Reset employee leave count by department.</div>
      </div>
   
      <div class="link-box">
        <div class="link-heading"><a href="?page=employee_attendance-employee_leave_reset_by_employee">Individual Reset</a></div>
        <div class="link-descr">Reset employee leave count individually.</div>
      </div>
   

       </div>


  </div> </div>

      <div class="extender"></div>
    </div>

     <!-- footer -->
  <?php include("include/footer.php")?>