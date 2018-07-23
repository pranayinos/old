<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
 <link href="css/create_exam.css" media="screen" rel="stylesheet" type="text/css">


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
  <h3>Create Exam</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="page-yield">
    
<div class="box">
     <div class="label-field-pair">
   <label for="student_course">Select a Course:
<img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none; ">
   </label>
   <div class="text-input-bg">
  <select id="courses_name" name="courses[name]" onChange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/exam/update_batch&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;course_name=&#39;+ value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;EjzS6Q8mewVw4UOl3P7bb2Wo6C7cJBWKInR0x9vl/vU=&#39;)})"><option value="">Select a Course</option>
<option value="2">B.A.HIS.I st SEM</option>
<option value="3">B.COM 1st SEM</option>
<option value="6">I sem B.Sc CHE </option>
<option value="4">BSc.MATHS I st SEM</option>
<option value="5">BSc.PHY I st SEM</option>
<option value="10">ece</option>
<option value="12">FD</option>
<option value="11">PM-5</option>
<option value="9">10</option></select>
</div></div>

<div id="update_batch">


  <div class="link-box">
      <div class="link-heading"><a href="?page=exam_groups">B.Sc.MATHMATICS FIRST SEMESTER</a> : BSc.MATHS I st SEM - 2011-12 </div>
    </div>

</div>
<div class="extender"></div>
 </div></div>
 </div>

      <div class="extender"></div>
    </div>

  
<!-- footer -->
  <?php include("include/footer.php")?>