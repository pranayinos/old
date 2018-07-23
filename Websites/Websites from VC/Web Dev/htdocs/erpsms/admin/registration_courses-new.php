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
      
      <div id="content"> <div id="content-header">
  <img alt="Show_exam" src="../images/examination/show_exam.png">
  <h1>Course Registration</h1>
  <h3>Add Course</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/registration_courses/new#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="inner-tab-menu">
  <ul>
    <li><a href="?page=registration_courses">Courses</a></li>
  </ul>
</div>

<div id="page-yield">

  

  <form action="#" class="new_registration_course" id="new_registration_course" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="gAka6bIk8SyN4Y9JkYmDbmtRyDvKqMOSJuG3drrkT/k="></div>
    

    <div class="label-field-pair">
      <label for="student_grade">Course</label>
      <div class="text-input-bg">
        <select id="registration_course_course_id" name="registration_course[course_id]"><option value="25">MBA</option>
<option value="26">MBA</option>
<option value="27">MCA</option>
<option value="28">MCA</option>
<option value="41">Standard 3</option></select>
      </div>
    </div>
    <div class="label-field-pair">
      <label for="student_grade">Min Score</label>
      <div class="text-input-bg">
        <input id="registration_course_minimum_score" name="registration_course[minimum_score]" size="30" type="text">
      </div>
    </div>
    <div class="label-field-pair">
      <label for="student_grade">Amount</label>
      <div class="text-input-bg">
        <input id="registration_course_amount" name="registration_course[amount]" size="30" type="text">
      </div>
    </div>
    <div class="label-field-pair">
      <label for="student_grade">Is Active</label>
      <div class="text-input-bg">
        <select id="registration_course_is_active" name="registration_course[is_active]"><option value="1">Active</option>
<option value="0">Inactive</option></select>
      </div>
    </div>

    <div class="label-field-pair">
      <label for="student_grade">Is pin system enabled</label>
      <div class="text-input-bg">
        <select id="_is_pin_enabled" name="[is_pin_enabled]"><option value="1">Active</option>
<option value="0">Inactive</option></select>
      </div>
    </div>

    <input class="submit_button" id="registration_course_submit" name="commit" type="submit" value="Create">

  </form>

</div> </div>

      <div class="extender"></div>
    </div>

 
         <!-- footer -->
  <?php include("include/footer.php")?>
  </body></html>