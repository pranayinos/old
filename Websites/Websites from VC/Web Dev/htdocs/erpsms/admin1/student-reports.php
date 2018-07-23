<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/reports1.css" media="screen" rel="stylesheet" type="text/css">
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
 <img alt="Student_details_logo" src="../images/_global/student_details_logo.jpg">
  <h1>Students</h1>
  <h3>Reports center</h3>
  <div id="app-back-button">
     <a href="http://demo.fedena.com/student/reports/57#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">

  <div id="exam-results-dashboard">

    <h3>Academics</h3>

    <div class="exam-results-reports-col">
    
      <h4>Recent Exams</h4>
      <ul>
        
      </ul>
    

      <h4>Subject wise Report</h4>
      <ul>
        
          <li><a href="?page=student_subject_report">english</a></li>
        
          <li><a href="#">maths</a></li>
        
          <li><a href="#">science</a></li>
        
          <li><a href="#">social</a></li>
        
          <li><a href="#">hindi</a></li>
        
      </ul>
    </div>
    
    <div class="exam-results-reports-col">

      <h4>Detailed Report</h4>
      <ul>
        
        <li><a href="?page=student_final_report">Final Report</a></li>
        <li><a href="?page=camapre_with_passed_year_report">Compare with past years</a></li>
        
      </ul>

      


    </div>

    <div class="extender"> </div>

  </div>

  <div id="attendance-reports-dashboard">

    <h3>Attendance</h3>

    <h4>Detailed Report</h4>

    <ul>
      <li><a href="?page=student_current_year_report">Current year report</a></li>
    </ul>
      
  </div>

</div> </div>

      <div class="extender"></div>
    </div>

     <!-- footer -->
  <?php include("include/footer.php")?>