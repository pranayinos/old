<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/emp_create_exam.css" media="screen" rel="stylesheet" type="text/css">
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
  <h3>Create Exam</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="page-yield">
    
<div class="box">
     <div class="label-field-pair">
   <label for="student_course">Select a Course:
<img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none; ">
   </label>
   <div class="text-input-bg">
  <select id="courses_name" name="courses[name]" onchange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/exam/update_batch&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;course_name=&#39;+ value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;RM7M/dfBSggxM94jqOhrG+EJA2+KE+zai4pQ3dXps/c=&#39;)})"><option value="">Select a Course</option>
<option value="2">B.A.HIS.I st SEM</option>
<option value="3">B.COM 1st SEM</option>
<option value="6">I sem B.Sc CHE </option>
<option value="4">BSc.MATHS I st SEM</option>
<option value="5">BSc.PHY I st SEM</option>
<option value="11">123</option>
<option value="10">ece</option>
<option value="9">10</option></select>
</div></div>

<div id="update_batch">


  <div class="link-box">
      <div class="link-heading"><a href="#">B.A.HISTORY FIRST SEMESTER</a> : B.A.HIS.Ist SEM - 2011-12 </div>
    </div>

</div>
<div class="extender"></div>
 </div></div>
 </div>

      <div class="extender"></div>
    </div>

    <div id="footer">
      <div id="footer_logo">
        <div id="powered_by">
          Powered by <a href="#" target="_blank">Fedena</a>
        </div>
        <a href="#" target="_blank" class="footer-logo"></a>
      </div>
    </div>
  

<ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 1; top: 0px; left: 0px; display: none; "></ul></body></html>