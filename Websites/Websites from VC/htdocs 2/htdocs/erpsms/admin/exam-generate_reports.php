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
  <h3>Generate Reports</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    <li><a href="?page=exam-generate_previous_reports" class="user_button">Generate Previous Reports</a></li>
  </ul>
</div>
<div id="page-yield">
  
  <div class="box">

    <form action="#" method="post"><div style="margin:0;padding:0;display:inline">
    <input name="authenticity_token" type="hidden" value=""></div>
      <div class="label-field-pair">
        <label for="student_course">Select a course :</label>
        <div class="text-input-bg">
          <select id="report_course_id" name="report[course_id]" onChange="new Ajax.Request(&#39;/exam/list_batch_groups&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;course_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;Fx0ICRRbO4rrhCDJM/624/7sUzivQNmpkyG0E+3MKOA=&#39;)})"><option value="">Select a course</option>
<option value="25">MBA Business Management </option>
<option value="26">MBA International Marketing </option>
<option value="27">MCA Software </option>
<option value="28">MCA Protocol</option>
<option value="41">Standard 3 </option></select></div></div>
        <div id="batch_group_list"></div>
      <input class="submit_button" name="commit" type="submit" value="►Generate">
    </form>
    <div class="extender"></div>
  </div></div> </div>

      <div class="extender"></div>
    </div>

     <?php include("include/footer.php")?>