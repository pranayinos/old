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
  <h1>Employee Management</h1>
  <h3>Manage All Employees</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">
  <div id="box">
    <div class="link-box">
      <div class="link-heading"><a href="?page=employee-admission1">Employee admission</a></div>
      <div class="link-descr">Employee admissions form</div>
    </div>

    <div class="link-box">
      <div class="link-heading"><a href="?page=employee-subject_assignment">Employee Subject Association</a></div>
      <div class="link-descr">Assign an employee with one or more subjects</div>
    </div>
  </div>

</div> </div>

      <div class="extender"></div>
    </div>
    <!-- footer -->
  <?php include("include/footer.php")?>