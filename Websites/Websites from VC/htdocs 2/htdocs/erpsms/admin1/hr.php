<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

<link href="css/assign_fa_groups.css" media="screen" rel="stylesheet" type="text/css">

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
  <h1>HR Management</h1>
  <h3>Human Resource</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>


<div id="page-yield">
  
  <div id="box">
    
      <div class="link-box">
        <div class="link-heading"><a href="?page=hr_settings">Setting</a></div>
        <div class="link-descr">HR Setting.</div>
      </div>
    

    
      <div class="link-box">
        <div class="link-heading"><a href="?page=hr_employee_management">Employee Management</a></div>
        <div class="link-descr">Manage All Employees</div>
      </div>
    

    
      <div class="link-box">
        <div class="link-heading"><a href="?page=hr_employee_attendance">Employee Leave Management</a></div>
        <div class="link-descr">Manage all employee attendance and leaves</div>
      </div>
    

    
      <div class="link-box">
        <div class="link-heading"><a href="?page=hr_payslip">Create Payslip</a></div>
        <div class="link-descr">Create employee monthly payslips</div>
      </div>
    

    
      <div class="link-box">
        <div class="link-heading"><a href="?page=hr_search">Employee Search</a></div>
        <div class="link-descr">Search for employees</div>
      </div>
    
    
    <div class="link-box">
      <div class="link-heading"><a href="?page=hr_department_payslip">Employee payslip</a></div>
      <div class="link-descr">View department wise payslip</div>
    </div>
    
    
    
  </div>
</div>
 </div>

      <div class="extender"></div>
    </div>

     <!-- footer -->
  <?php include("include/footer.php")?>