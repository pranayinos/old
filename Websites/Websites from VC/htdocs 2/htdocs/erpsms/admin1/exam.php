<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

<link href="css/st_index.css" media="screen" rel="stylesheet" type="text/css">
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
  <img alt="Show_exam" src="../images/examination/show_exam.png">
  <h1>Exams</h1>
  <h3>Home</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/exam#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">

  
  
    <div class="box">
      <div class="link-box">
        <div class="link-heading"><a href="?page=exam-settings">Settings</a></div>
        <div class="link-descr">Manage Grading Levels, Ranking Levels and Class Designations</div>
      </div>
    
    
    
    
      <div class="link-box">
        <div class="link-heading"><a href="?page=exam-create_exam">Exam Management</a>  </div>
        <div class="link-descr">Create new exams, enter results.</div>
      </div>
    
    
      <div class="link-box">
        <div class="link-heading"><a href="?page=exam-generate_reports">Generate Reports</a></div>
        <div class="link-descr">Generates Student Reports for Grouped Exams</div>
      </div>
    
    <div class="link-box">
      <div class="link-heading"><a href="?page=exam-report_center">Reports center</a></div>
      <div class="link-descr">View Student Reports</div>
    </div>


    <!--online exam-->

    
      
        <div class="link-box">
          <div class="link-heading"><a href="?page=online_exam">Online Exam</a></div>
          <div class="link-descr">Manage Online Exam System</div>
        
      
    </div>

    <div class="extender"></div>
  </div>
</div>

 </div>

      <div class="extender"></div>
    </div>

  <!-- footer -->
  <?php include("include/footer.php")?>