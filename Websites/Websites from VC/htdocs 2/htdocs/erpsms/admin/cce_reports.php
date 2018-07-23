<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title><!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>


<link href="css/cce_ report_center.css" media="screen" rel="stylesheet" type="text/css">

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
  <img src="../images/examination/show_exam.png" alt="Exam">
  <h1>CCE Reports</h1>
  <h3>Home</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/cce_reports#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>


<div id="page-yield">
  

  <div class="box">
    
      <div class="link-box">
        <div class="link-heading"><a href="?page=cce_reports-create_reports">Generate Reports</a></div>
        <div class="link-descr">Generate CCE Report from entered scores.</div>
      </div>
    
    
      <div class="link-box">
        <div class="link-heading"><a href="?page=cce_reports-student_wise_report">View Student Report</a></div>
        <div class="link-descr">Student-wise CCE Report</div>
      </div>
    
  </div>

</div> </div>

      <div class="extender"></div>
    </div>

   <!-- footer -->
  <?php include("include/footer.php")?>