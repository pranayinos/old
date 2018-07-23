<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title><!-------------------- supportive files ----------->
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
  <h1>Exams</h1>
  <h3>Previous Batch Exams</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/exam/previous_batch_exams#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="page-yield">
    
<div class="box">
     <div class="label-field-pair">
   <label for="student_course">Select a course:
<img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none;">
   </label>
   <div class="text-input-bg">
  <select id="course_course_id" name="course[course_id]" onChange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/exam/list_inactive_batches&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;course_id=&#39;+ value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;Fx0ICRRbO4rrhCDJM/624/7sUzivQNmpkyG0E+3MKOA=&#39;)})"><option value="">Select a course</option>
<option value="25">1</option>
<option value="26">2</option>
<option value="27">3</option>
<option value="28">2</option>
<option value="41">3</option></select>
</div></div>

<div id="inactive_batches"></div>
<div class="extender"></div>
 </div></div>
 </div>

      <div class="extender"></div>
    </div>

   <!-- footer -->
  <?php include("include/footer.php")?>