<?php
$batch = new Main(); // create a new news object
	//$newsRecordSet = $course->getdata('*',"course","","course_id DESC","");// set newsRecordSet to a 
	$newsRecordSet = $batch->getdata('*',"course","","course_name ASC","");// Course
?>


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
<img alt="Show_exam" src="../images/examination/show_exam.png">
<h1>Additional Exams</h1>
<h3>Create Additional Exams</h3>
<div id="app-back-button">
<a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
</div>
</div>
<div id="page-yield">
<div class="box">
<div class="label-field-pair">
<label for="student_course">Select a Course:
<img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none;">
</label>
<div class="text-input-bg">
<select id="courses_name" name="courses[name]" onChange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/additional_exam/update_batch&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;course_name=&#39;+ value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;IgTf573VbnZdyF3C2/oQQkEv18QSwa0HJCgS961mcqI=&#39;)})">
<option value="">Select a Course</option>
<?php 
 while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { 
?>
        
<option value="<?=$record['course_code']?>"> <?=$record['course_name']." ".$record['course_section_name']?></option>

<?php }?>
</select>
</div></div>
<div id="update_batch"></div>
<div class="extender"></div>
</div></div> </div>
<div class="extender"></div>
</div>
<!-- footer -->
  <?php include("include/footer.php")?>