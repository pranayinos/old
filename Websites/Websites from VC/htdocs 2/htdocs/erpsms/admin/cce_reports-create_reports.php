<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title><!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

<link href="css/create_reports.css" media="screen" rel="stylesheet" type="text/css">


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
  <img src="../images/examination/show_exam.png" alt="Exam">
  <h1>CCE Reports</h1>
  <h3>Generate CCE Report</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/cce_reports/create_reports#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="inner-tab-menu">
</div>
<div id="page-yield">
  
    <p class="flash-msg"> Report generation in queue for batches 1 - 1st Semester. </p>
  
  
  <div class="box">
    <form action="./cce_reports-create_reports_files/cce_reports-create_reports.htm" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="Fx0ICRRbO4rrhCDJM/624/7sUzivQNmpkyG0E+3MKOA="></div>
      <div class="label-field-pair">
        <label for="student_course">Select a course:
          <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none; ">
        </label>
        <div class="text-input-bg">
          <select id="course_id" name="course[id]" onChange="Element.show(&#39;loader&#39;); new Ajax.Updater(&#39;update_batch&#39;, &#39;/batches/batches_ajax&#39;, {asynchronous:true, evalScripts:true, method:&#39;get&#39;, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;course_id=&#39;+ value +&#39;&amp;type=list&#39; + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;Fx0ICRRbO4rrhCDJM/624/7sUzivQNmpkyG0E+3MKOA=&#39;)})"><option value="">Select a course</option>
<option value="25">MBA Business Management </option></select>
        </div></div>

      <div id="update_batch">
  <ul id="category-list">
    <li class="listheading">
      <div class="heading-name">Select batches</div>
      <div class="heading-edit">
      </div>
    </li>
    
      <li class="listodd">
        <label>
          <div class="category-edit">
            <input id="course_batch_ids_" name="course[batch_ids][]" type="checkbox" value="43">
          </div>
          <div class="category-name">
            1 - 1st Semester
          </div>
        </label>
      </li>
    
  </ul>
</div>
      <input class="submit-button" name="commit" type="submit" value="► Create">
    </form>
    <div class="extender"></div>
  </div></div> </div>

      <div class="extender"></div>
    </div>

   <!-- footer -->
  <?php include("include/footer.php")?>  
   