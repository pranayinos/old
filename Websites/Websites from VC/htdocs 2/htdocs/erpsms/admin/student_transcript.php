<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/student_transcript.css" media="screen" rel="stylesheet" type="text/css">
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
  <img alt="Show_exam" src="../images/examination/show_exam.png">
  <h1>Exams</h1>
  <h3>Transcript of Academic Record</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/exam/student_transcript?flag=1&student_id=114&transcript%5Bbatch_id%5D=43#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    <li><a href="http://demo.fedena.org/exam/student_transcript_pdf?student_id=114" class="user_button" target="_blank">PDF Report</a></li>
  </ul>
</div>
<div id="page-yield">

  
  <div id="student_list">
    
      <div class="list_name">
        Students in this batch
        <img align="absmiddle" alt="Loader" border="0" id="loader" src="./student_transcript_files/loader.gif" style="display: none;">
      </div>
      <ul class="student_list">
        
          <li class="student_names">
            
              
                <a href="./student_transcript_files/student_transcript.htm" class="active-link">SACHIN RAMESH  TENDULKAR</a>
              
            
          </li>
        
      </ul>
    
  </div>
  <div id="grouped_exam_report">
    <div class="info">
      <div class="info-left">
        <div class="info1">
          <label class="field-label">Name</label>: <label class="infolbl"> SACHIN RAMESH  TENDULKAR</label>
        </div>
        <div class="info1">
          <label class="field-label">Course</label>: <label class="infolbl"> MBA</label>
        </div>
      </div>
      <div class="info-right">
        <div class="info1">
          <label class="field-label">Adm no.</label>: <label class="infolbl"> 1</label>
        </div>
      </div>
    </div>
    <br><br>
    
    
      <p class="flash-msg">Grouped Exam Reports have not been generated for this Student.</p>
    
  </div>
</div>
 </div>

      <div class="extender"></div>
    </div>
  <!-- footer -->
  <?php include("include/footer.php")?>