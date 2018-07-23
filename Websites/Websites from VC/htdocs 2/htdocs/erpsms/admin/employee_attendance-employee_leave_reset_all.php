<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/employee_leave_reset_all.css" media="screen" rel="stylesheet" type="text/css">
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
  <h1>Full Leave Reset</h1>
  <h3>Reset Leave Count For All Employees</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">
  <div id="box">

    


    <div id="reset-box">
      <p> This will reset leave count for all employees</p>
      <div id="skip">
        <a href="#" onClick="new Ajax.Request(&#39;/employee_attendance/update_employee_leave_reset_all&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); return false;">► Reset</a>
      </div>
      <div id="skip1">
        <a href="#">► Cancel</a>
      </div>


    </div>


  </div>


</div> </div>

      <div class="extender"></div>
    </div>
  <!-- footer -->
  <?php include("include/footer.php")?>