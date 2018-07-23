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
  <h1>Exams</h1>
  <h3>Grouped exam Reports</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="page-yield">
  
  <div class="box">

    <form action="#" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="I3DHghKAk8kIHzKPL2/3pkVAWfO/jMR1Mvn1/0PTETo="></div>
      <div class="label-field-pair">
        <label for="student_course">Select a Batch:
          <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none;">
        </label>
        <div class="text-input-bg">
          <select id="exam_report_batch_id" name="exam_report[batch_id]" onChange="new Ajax.Request(&#39;/exam/final_report_type&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;batch_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;I3DHghKAk8kIHzKPL2/3pkVAWfO/jMR1Mvn1/0PTETo=&#39;)})"><option value="">Select a Batch</option>
<option value="11">10 - 2010 A</option>
<option value="14">10 - 2010 B</option>
<option value="2">B.A.HIS.I st SEM - 2011-12</option>
<option value="3">B.COM 1st SEM - 2011-12</option>
<option value="4">BSc.MATHS I st SEM - 2011-12</option>
<option value="5">BSc.PHY I st SEM - 2011-12</option>
<option value="13">ece - 2013-2014</option>
<option value="8">I sem B.Sc CHE  - 2010-2011</option></select></div></div>
      <div id="report_type"></div>
      <input class="submit_button" name="commit" type="submit" value="► View">
      </form>
    <div class="extender"></div>
  </div></div> </div>

      <div class="extender"></div>
    </div>
<!-- footer -->
  <?php include("include/footer.php")?>