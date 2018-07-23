<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/report_center.css" media="screen" rel="stylesheet" type="text/css">


<!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
 <?php /*?>  <?php include("include/sidebar.php")?><?php */?>
           
      <!-- end of side bar -->
      <div id="fullcontent"> 
<div id="content-header">
  <img alt="Show_exam" src="../images/examination/show_exam.png">
  <h1>Exams</h1>
  <h3>Reports center</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/exam/report_center#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="fullpage-yield">

  

  <div class="box">
    <div class="link-box">
      <div class="link-heading"><a href="?page=exam_exam_wise_report">Exam Wise Report</a></div>
      <div class="link-descr">Generates exam wise reports</div>
    </div>
    <div class="link-box">
      <div class="link-heading"><a href="?page=exam_subject_wise_report">Subject wise Report</a> </div>
      <div class="link-descr">Generates subject wise reports</div>
    </div>
    <div class="link-box">
      <div class="link-heading"><a href="?page=exam_grouped_exam_report">Grouped exam Reports</a></div>
      <div class="link-descr">Group up exams for specific reports</div>
    </div>
    <div class="link-box">
      <div class="link-heading"><a href="?page=archived_exam_wise_report">Archived Student Reports</a></div>
      <div class="link-descr">Generates Grouped Exam reports for Archived Students</div>
    </div>
    <div class="link-box">
      <div class="link-heading"><a href="?page=exam-subject_rank">Student Ranking per Subject</a></div>
      <div class="link-descr">Generates reports for Subject wise Student Rank</div>
    </div>
    <div class="link-box">
      <div class="link-heading"><a href="?page=exam-batch_rank">Student Ranking per Batch</a></div>
      <div class="link-descr">Generates reports for Batch wise Overall Student Rank</div>
    </div>
    <div class="link-box">
      <div class="link-heading"><a href="?page=exam-course_rank">Student Ranking per Course</a></div>
      <div class="link-descr">Generates reports for Course wise Overall Student Rank</div>
    </div>
    <div class="link-box">
      <div class="link-heading"><a href="?page=exam-student_school_rank">Student Ranking per School</a></div>
      <div class="link-descr">Generates reports for Overall Student Rank for this School</div>
    </div>
    <div class="link-box">
      <div class="link-heading"><a href="?page=exam-attendance_rank">Student Ranking per Attendance</a></div>
      <div class="link-descr">Generates reports for Batch wise Student Rank per Attendance</div>
    </div>
    <div class="link-box">
      <div class="link-heading"><a href="?page=exam-ranking_level_report">Ranking Level Report</a></div>
      <div class="link-descr">Generates reports based on different Ranking Levels</div>
    </div>
    <div class="link-box">
      <div class="link-heading"><a href="?page=exam-transcript">View Transcripts</a></div>
      <div class="link-descr">Generates Student Transcripts</div>
    </div>
    <div class="link-box">
      <div class="link-heading"><a href="?page=exam-combined_report">Combined Reports</a></div>
      <div class="link-descr">Generates Combined Student Reports</div>
    </div>
    
    <div class="link-box">
      <div class="link-heading"><a href="?page=cce_reports">CCE Reports</a></div>
      <div class="link-descr">Generates Combined Student Reports</div>
    </div>
    
  </div>
</div>
 </div>

      <div class="extender"></div>
    </div>
   <!-- footer -->
  <?php include("include/footer.php")?>