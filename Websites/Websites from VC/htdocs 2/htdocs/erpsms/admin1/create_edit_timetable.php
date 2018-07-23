<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
 <link href="css/select_class2.css" media="screen" rel="stylesheet" type="text/css">


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
<h3>Select class to edit</h3>
<div id="app-back-button">
<a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
</div>
</div>
<div id="page-yield">
<form action="?page=edit2" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="IgTf573VbnZdyF3C2/oQQkEv18QSwa0HJCgS961mcqI="></div>
<div class="label-field-pair">
<label for="timetable_entry_course_id">Select a Batch</label>
<div class="text-input-bg"> <select id="timetable_entry_batch_id" name="timetable_entry[batch_id]"><option value="">Select a Batch</option>
<option value="11">10 - 2010 A</option>
<option value="14">10 - 2010 B</option>
<option value="2">B.A.HIS.I st SEM - 2011-12</option>
<option value="3">B.COM 1st SEM - 2011-12</option>
<option value="4">BSc.MATHS I st SEM - 2011-12</option>
<option value="5">BSc.PHY I st SEM - 2011-12</option>
<option value="13">ece - 2013-2014</option>
<option value="8">I sem B.Sc CHE - 2010-2011</option></select>
</div>
</div>
<div class="submit-button">
<input class="submit-button" name="commit" type="submit" value="► Go">
</div>
</form>
</div> </div>
<div class="extender"></div>
</div>
<!-- footer -->
  <?php include("include/footer.php")?>