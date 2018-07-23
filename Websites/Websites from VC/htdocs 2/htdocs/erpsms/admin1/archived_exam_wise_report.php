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
  <img src="../images/examination/show_exam.png" alt="Exam">
  <h1>Exam Reports</h1>
  <h3>Archived Exam wise Reports</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="page-yield">

    

 <div class="box">
<form action="#" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="hRZvF64CLv1fHxRoV8DDFxxaocCpaSeDY14a2AGKrL4="></div>

<div class="text-input-bg" id="batch-select">
<select id="exam_report_batch_id" name="exam_report[batch_id]" onChange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/exam/list_exam_types&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;batch_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;hRZvF64CLv1fHxRoV8DDFxxaocCpaSeDY14a2AGKrL4=&#39;)})"><option value="">Select a batch</option>
<option value="1">B.A.ECO.I st SEM - 2011-12</option>
<option value="12">ece - 2011-2012</option></select>
</div>

  <div class="text-input-bg" id="exam-group-select">
    <select id="exam_report_exam_group_id" name="exam_report[exam_group_id]"><option value="">Select exam group</option>
</select>
  </div>
<img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none;">

    <input class="submit_button" name="commit" type="submit" value="► View">
  </form>

  <div class="extender">

      </div>
 </div>
    </div> </div>

      <div class="extender"></div>
    </div>
<!-- footer -->
  <?php include("include/footer.php")?>
   