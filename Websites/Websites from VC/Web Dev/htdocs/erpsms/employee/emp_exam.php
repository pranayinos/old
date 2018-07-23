<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/#.css" media="screen" rel="stylesheet" type="text/css">
 <!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php include("include/sidebar3.php")?>
           
      <!-- end of side bar -->
      <div id="content"> 
<div id="content-header">
<img alt="Show_exam" src="../images/examination/show_exam.png">
  <h1>Exams</h1>
  <h3>Home</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">

  

  <div class="box">
    
    
    
    
      <div class="link-box">
        <div class="link-heading"><a href="?page=emp_exam_create">Exam Management</a>  </div>
        <div class="link-descr">Create new exams, enter results.</div>
      </div>
    
    
      <div class="link-box">
        <div class="link-heading"><a href="?page=emp_additional_exam">Additional Exams</a></div>
        <div class="link-descr">Create additional exams,Edit results</div>
      </div>
    
    <div class="link-box">
      <div class="link-heading"><a href="?page=emp_exam_wise_report">Exam Wise Report</a></div>
      <div class="link-descr">Generates exam wise reports</div>
    </div>
    <div class="link-box">
      <div class="link-heading"><a href="?page=emp_subject_wise_report">Subject wise Report</a> </div>
      <div class="link-descr">Generates subject wise reports</div>
    </div>
    <div class="link-box">
      <div class="link-heading"><a href="?page=emp_exam-grouped_exam_report">Grouped exam Reports</a></div>
      <div class="link-descr">Group up exams for specific reports</div>
    </div>
     <div class="link-box">
      <div class="link-heading"><a href="?page=emp_home">Archived Student Reports</a></div>
      <div class="link-descr">Generates reports for Archived Students Exam wise</div>
    </div>

    <!--online exam-->

    
      
      
    </div>

    <div class="extender"></div>
  </div>
</div>

 </div>

      <div class="extender"></div>
    

  
         <!-- footer -->
  <?php include("include/footer.php")?></body></html>