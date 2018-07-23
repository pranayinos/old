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
   <?php include("include/sidebar3.php")?>
           
      <!-- end of side bar -->
      <div id="content"> 
<div id="content-header">
  <img alt="Show_exam" src="../images/examination/show_exam.png">
  <h1>Exams</h1>
  <h3>Subject wise Report</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a></div>
</div>
<div id="page-yield">
  
  <div class="box">

    <form action="#" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="HLXw9pp1LGHXQIbHeJV5buYl4nvs9klhjKVT3A7ipVA="></div>

      <div class="text-input-bg">
        <select id="exam_report_batch_id" name="exam_report[batch_id]" onchange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/exam/list_subjects&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;batch_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;HLXw9pp1LGHXQIbHeJV5buYl4nvs9klhjKVT3A7ipVA=&#39;)})"><option value="">Select a Batch</option>
<option value="11">10 - 2010 A</option>
<option value="14">10 - 2010 B</option>
<option value="15">123 - raky</option>
<option value="2">B.A.HIS.I st SEM - 2011-12</option>
<option value="3">B.COM 1st SEM - 2011-12</option>
<option value="4">BSc.MATHS I st SEM - 2011-12</option>
<option value="5">BSc.PHY I st SEM - 2011-12</option>
<option value="13">ece - 2013-2014</option>
<option value="8">I sem B.Sc CHE  - 2010-2011</option></select>
      </div>
      <div><br/>
        <div id="subject-select" class="text-input-bg">
<select id="exam_report_subject_id" name="exam_report[subject_id]"><option value="">Select Subject</option>
<option value="65">english</option>
<option value="66">maths</option>
<option value="67">science</option>
<option value="68">social</option>
<option value="69">hindi</option></select>
</div> <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none; ">
      </div>
      <input class="submit_button" name="commit" type="submit" value="► View">


    </form>
    <div class="extender"></div>
  </div>
</div> </div>

      <div class="extender"></div>
    </div>

   
         <!-- footer -->
  <?php include("include/footer.php")?></body></html>