<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

<link href="css/combined_report.css" media="screen" rel="stylesheet" type="text/css">

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
  <h3>Combined Report</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="page-yield">
  
  <div class="box">

    <form action="#" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="Fx0ICRRbO4rrhCDJM/624/7sUzivQNmpkyG0E+3MKOA="></div>
      <div class="label-field-pair">
        <label for="student_course">Select a batch :</label>
        <div class="text-input-bg">
          <select id="combined_report_batch_id" name="combined_report[batch_id]" onChange="new Ajax.Request(&#39;/exam/load_levels&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;batch_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;Fx0ICRRbO4rrhCDJM/624/7sUzivQNmpkyG0E+3MKOA=&#39;)})"><option value="">Select a batch</option>
<option value="43">1 - 1st Semester</option>
<option value="46">2 - 2nd Semester</option>
<option value="44">2 - 2nd Semester</option>
<option value="45">3 - 1st Semester</option>
<option value="62">3 - 2012-2013</option></select></div></div>
      <div id="levels"><div class="grades">
  <div class="label-field-pair">
    <label for="configuration_grading_systems">Class Designations :</label>
  </div>
  <div class="fee_category_scroll">
    <div class="sel-list">
      Select: <a href="#" onClick="$$(&#39;input.batches_box&#39;).each(function(checkbox) { checkbox.checked = true; });; return false;">All</a>,
      <a href="#" onClick="$$(&#39;input.batches_box&#39;).each(function(checkbox) { checkbox.checked = false; });; return false;">None</a>
    </div>
    
  </div>
</div>
<div class="grades">
  <div class="label-field-pair">
    <label for="configuration_grading_systems">Ranking Levels:</label>
  </div>
  <div class="fee_category_scroll">
    <div class="sel-list">
      Select: <a href="#" onClick="$$(&#39;input.batches_box1&#39;).each(function(checkbox) { checkbox.checked = true; });; return false;">All</a>,
      <a href="#" onClick="$$(&#39;input.batches_box1&#39;).each(function(checkbox) { checkbox.checked = false; });; return false;">None</a>
    </div>
    
  </div>
</div>
<input class="submit_button" name="commit" type="submit" value="► View"></div>
    </form>
    
    <div class="extender"></div>
  </div></div> </div>

      <div class="extender"></div>
    </div>

  <!-- footer -->
  <?php include("include/footer.php")?>  
   