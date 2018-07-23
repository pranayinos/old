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
   <?php include("include/sidebar.php")?>
           
      <!-- end of side bar -->
      <div id="content"> 
<div id="content-header">
<img alt="Show_exam" src="../images/examination/show_exam.png">
  <h1>Exams</h1>
  <h3>New Exam</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">

  

  <div class="bread_crumb">
    <a href="#">Course</a> »
    <a href="#">B.COM COMMERCE FIRST SEMESTER</a> »
    <a href="#">Batch 2011-12</a> »
    <a href="#">Exam</a> »
    New Exam
  </div>


  <div class="box">

    <div id="flash"></div>
    <div id="exam-form">
      
        
        <form action="#" method="post" onSubmit="new Ajax.Request(&#39;/exam/update_exam_form?batch=3&#39;, {asynchronous:true, evalScripts:true, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="EjzS6Q8mewVw4UOl3P7bb2Wo6C7cJBWKInR0x9vl/vU="></div>
          <div class="label-field-pair">
            <label for="exam_name">Exam Name</label>
            
              
            
            <div class="text-input-bg"><input id="exam_option_name" name="exam_option[name]" size="30" type="text" value=""></div>
          </div>
          <div class="label-field-pair">
            <label for="exam_type">Exam Type</label>
            <div class="text-input-bg"><select id="exam_option_exam_type" name="exam_option[exam_type]"><option value="Marks">Marks</option>
<option value="Grades">Grades</option>
<option value="MarksAndGrades">Marks and Grades</option></select></div>
          </div>
          <input class="submit_button" name="commit" type="submit" value="► Save">
          </form>
      
    </div>

    <div class="extender"></div>


  </div></div> </div>

      <div class="extender"></div>
    </div>

  <!-- footer -->
  <?php include("include/footer.php")?>