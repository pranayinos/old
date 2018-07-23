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
   <?php /*?><?php include("include/sidebar.php")?><?php */?>
           
      <!-- end of side bar -->
      <div id="content"> 
<div id="content-header">
<img alt="Show_exam" src="../images/examination/show_exam.png">
  <h1>Exams</h1>
  <h3>Academic  reports</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.com/exam/generated_report3?student=57&subject=65#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="page-yield">
    
  <div class="box">
<h4>2010 B | STANDARD 10  | anju  s | english</h4>

<table id="listing" width="100%">
  <tbody><tr class="tr-head">
    <td>Exam</td>
    <td>Marks</td>
    <td>Max Marks</td>
    <td>Grade</td>
  </tr>
  
</tbody></table>
<br>


    <script type="text/javascript" src="./student_subject_report_files/swfobject.js"></script>
          <object type="application/x-shockwave-flash" data="http://demo.fedena.com/open-flash-chart.swf" width="770" height="350" id="flash_content_5kjW3EAc" style="visibility: visible; "><param name="flashvars" value="data-file=%2Fexam%2Fgraph_for_generated_report3%3Fsubject%3D65%26student%3D57"><param name="wmode" value="transparent"></object>
      <script type="text/javascript">
        swfobject.embedSWF("/open-flash-chart.swf", "flash_content_5kjW3EAc", "770", "350", "9.0.0", "expressInstall.swf",{"data-file":"%2Fexam%2Fgraph_for_generated_report3%3Fsubject%3D65%26student%3D57"});
      </script>



    <div class="extender"></div>
 </div></div> </div>

      <div class="extender"></div>
    </div>

   
         <!-- footer -->
  <?php include("include/footer.php")?>