<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
 <link href="css/weekday_ index.css" media="screen" rel="stylesheet" type="text/css">

<!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php include("include/sidebar4.php")?>
           
      <!-- end of side bar -->
      
<div id="content">
<div id="content-header">
<img alt="Show_timetable" src="../images/show_timetable.png">
<h1>Timetable</h1>
<h3>weekdays</h3>
<div id="app-back-button">
<a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
</div>
</div>
<div id="page-yield">
<div class="box">
<div class="label-field-pair">
<label for="timetable_entry_course_id">Select a Batch:</label>
<div class="text-input-bg"><select id="batch_id" name="batch[id]" onChange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/weekday/week&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;batch_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;IgTf573VbnZdyF3C2/oQQkEv18QSwa0HJCgS961mcqI=&#39;)})"><option value="">common</option>
<option value="11">10 - 2010 A</option>
<option value="14">10 - 2010 B</option>
<option value="2">B.A.HIS.I st SEM - 2011-12</option>
<option value="3">B.COM 1st SEM - 2011-12</option>
<option value="4">BSc.MATHS I st SEM - 2011-12</option>
<option value="5">BSc.PHY I st SEM - 2011-12</option>
<option value="13">ece - 2013-2014</option>
<option value="8">I sem B.Sc CHE - 2010-2011</option></select>
<img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none; "></div>
</div>
<div id="weekdays">
<form action="#" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="IgTf573VbnZdyF3C2/oQQkEv18QSwa0HJCgS961mcqI="></div>
  <ul id="category-list">
    
    <input id="weekday_batch_id" name="weekday[batch_id]" type="hidden">
    
      <li class="listodd">
        
        <div class="category-name">Sunday</div>
        <div class="category-edit"><input id="weekdays_" name="weekdays[]" type="checkbox" value="0"></div>
      </li>
    
      <li class="listeven">
        
        <div class="category-name">Monday</div>
        <div class="category-edit"><input checked="checked" id="weekdays_" name="weekdays[]" type="checkbox" value="1"></div>
      </li>
    
      <li class="listodd">
        
        <div class="category-name">Tuesday</div>
        <div class="category-edit"><input checked="checked" id="weekdays_" name="weekdays[]" type="checkbox" value="2"></div>
      </li>
    
      <li class="listeven">
        
        <div class="category-name">Wednesday</div>
        <div class="category-edit"><input checked="checked" id="weekdays_" name="weekdays[]" type="checkbox" value="3"></div>
      </li>
    
      <li class="listodd">
        
        <div class="category-name">Thursday</div>
        <div class="category-edit"><input checked="checked" id="weekdays_" name="weekdays[]" type="checkbox" value="4"></div>
      </li>
    
      <li class="listeven">
        
        <div class="category-name">Friday</div>
        <div class="category-edit"><input checked="checked" id="weekdays_" name="weekdays[]" type="checkbox" value="5"></div>
      </li>
    
      <li class="listodd">
        
        <div class="category-name">Saturday</div>
        <div class="category-edit"><input id="weekdays_" name="weekdays[]" type="checkbox" value="6"></div>
      </li>
    

  </ul>
  <input class="submit_button" name="commit" onClick="if (!confirm(&#39;This will alter all time table entries and Attendance entries for the weekdays, Proceed with changing weekdays ?&#39;)) return false; return true;" type="submit" value="► Save">
</form>

</div>
<div id="modal-box" style="display:none;"></div>
<div class="extender"></div>
</div>
</div>
</div>
<div class="extender"></div>
</div>
<!-- footer -->
  <?php include("include/footer.php")?>