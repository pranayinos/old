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
   <?php include("include/sidebar5.php")?>
           
      <!-- end of side bar -->
      <div id="content"> 
<div id="content-header">
  <img alt="Show_hr" src="../images/HR/show_hr.png">
  <h1>Setting</h1>
  <h3>HR Setting</h3>
  <div id="app-back-button">
     <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">
  <div id="box">
    <div class="link-box">
      <div class="link-heading"><a href="?page=employee_add_category">Add Employee Category</a></div>
      <div class="link-descr">Add and Edit Employee Category</div>
    </div>

    <div class="link-box">
      <div class="link-heading"><a href="?page=employee-add_position">Add Employee Position</a></div>
      <div class="link-descr">Add and Edit Employee Position</div>
    </div>

    <div class="link-box">
      <div class="link-heading"><a href="?page=employee-add_department">Add Employee Department</a></div>
      <div class="link-descr">Add and Edit Employee Department</div>
    </div>

    <div class="link-box">
      <div class="link-heading"><a href="?page=employee-add_grade">Add Employee Grade</a></div>
      <div class="link-descr">Add and Edit Employee Grade</div>
    </div>

    <div class="link-box">
      <div class="link-heading"><a href="?page=payroll-add_category">Add Payroll Category</a></div>
      <div class="link-descr">Add and Edit Employee Payroll Category</div>
    </div>

    <div class="link-box">
      <div class="link-heading"><a href="?page=employee-add_bank_details">Add Bank Detail</a></div>
      <div class="link-descr">Add and Edit Bank Detail </div>
    </div>

    <div class="link-box">
      <div class="link-heading"><a href="?page=employee-add_additional_details">Add Additional Detail</a></div>
      <div class="link-descr">Add and edit additional details for employee admission forms</div>
    </div>

   <!-- <div class="link-box">
      <div class="link-heading"><a href="/employee/">Payslip Settings</a></div>
      <div class="link-descr">Creates payslip approve power for finance manager.</div>
    </div>
  </div> -->
   <div class="extender"></div>
  </div>
</div>
 </div>

      <div class="extender"></div>
    </div>

    <!-- footer -->
  <?php include("include/footer.php")?>