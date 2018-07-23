<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/emp_profile.css" media="screen" rel="stylesheet" type="text/css">
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
  <img alt="Show_hr" src="../images/HR/show_hr.png">
  <h1>Employee Profile</h1>
  <h3></h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>


<div id="nav">
  <ul>
    <li>
      <a href="#" class="drops" id="link_one">Profile ▼</a>
      <ul id="box_one" class="scriptaculously" style="overflow: visible; display: none; ">
       <li><a href="?page=employee-profile">General</a></li>
        <li><a href="#">Personal</a></li>
        <li><a href="#">Address</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Bank Info</a></li>
        <li><a href="#">Additional Info</a></li>
      </ul>
    </li>

    
      
        <li>
          <a href="#" class="drops" id="link_two">Salary ▼</a>
          <ul id="box_two" class="scriptaculously" style="display:none;">
           <li><a href="?page=profile_emp_payroll">Payroll</a></li>
            <li><a href="?page=profile_emp_payslip">Payslip</a></li>
          </ul>
        </li>
      
    


    
      
        <li>
          <a href="#" class="drops" id="link_three">Leaves ▼</a>
          <ul id="box_three" class="scriptaculously" style="display:none;">
             <li><a href="?page=profile_emp_leave">Attendance</a></li>
          </ul>
        </li>

      
    

    

    
    
      <li>
        <a href="#">Delete</a>
      </li>
    
    <li>
      <a href="#" class="drops" id="link_four">More ▼</a>
      <ul id="box_four" class="scriptaculously" style="display:none;">
        
          <li><a href="?page=profile_emp_library_deatils">Library</a></li>
        
          <li><a href="?page=profile_emp_transport">Transport</a></li>
        
      </ul>
    </li>
  </ul>

</div>




<div id="fullpage-yield">

  

  <div id="employee_profile_heading">

    <div id="profile_picture_display">
      
        <img alt="Default_employee" src="../images/HR/default_employee.png">
      
    </div>

    <div id="employee_main_info">
      <h3> sreya    </h3>
      <h4>Employee ID: E100 </h4>
    </div>

    <div id="profile-general-info">


    </div>
    <div class="extender"></div>

  </div>




  <div id="profile-infos">
    
      <p class="flash-msg">Employee did not avail transport facility</p>
    

  </div>
  <div class="extender"> </div>
</div>


 </div>

      <div class="extender"></div>
    </div>

   
      <!-- footer -->
  <?php include("include/footer.php")?>
  
  

<ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 1; top: 0px; left: 0px; display: none; "></ul></body></html>