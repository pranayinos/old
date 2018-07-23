<?php
    $batch = new Main(); // create a new news object
	//$newsRecordSet = $course->getdata('*',"course","","course_id DESC","");// set newsRecordSet to a 
	$newsRecordSet = $batch->getdata('*',"course","","course_name ASC","");// Course
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
    <link href="./css/categories.css" media="screen" rel="stylesheet" type="text/css">
<!--------- Start head ---------------->
  </head>
  <body>        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
 <div id="content_wrapper">
               <!-- Side bar -->
   <?php include("include/sidebar6.php")?>           
      <!-- end of side bar -->
      <div id="content"> 
<div id="content-header">
  <img alt="Show_settings" src="../images/show_settings.png">
  <h1>Course</h1>
  <h3>Manage Batch</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="inner-tab-menu">
  <ul>    
    <li><a href="#">Grading system</a></li>    
    <li><a href="#">Batch Transfer</a></li>
  </ul>
</div>
<div id="page-yield">
  
  <div class="box">
    <div class="bread_crumb">
      <a href="http:?page=courses">Courses</a> <span class="smallsign">>></span>
      New batch
    </div>
    <div class="label-field-pair">
      <label for="student_course">Select a Course:
        <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none; ">
      </label>
      <div class="text-input-bg">
        <select id="course_name" name="course_name" onChange="">
<option value="">Select a Course</option>
<?php 
 while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { 
?>
        
<option value="<?=$record['course_code']?>"> <?=$record['course_name']." ".$record['course_section_name']?></option>

<?php }?>
</select>
      </div></div>

    <div id="update_batch">

<h4 align="center">Active batches</h4>

<ul id="category-list">

    
      <li class="listodd">
        <div class="category-name"><a href="">BSc.MATHS I st SEM - 2011-12</a></div>
      </li>
     

</ul>
</div>
    <div class="extender"></div>
  </div></div> </div>

      <div class="extender"></div>
    </div>


<!-- footer -->
  <?php include("include/footer.php")?>
           