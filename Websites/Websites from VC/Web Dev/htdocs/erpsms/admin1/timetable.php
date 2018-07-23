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
   <?php include("include/sidebar4.php")?>
           
      <!-- end of side bar -->
<div id="content">
<div id="content-header">
<img alt="Show_timetable" src="../images/show_timetable.png">
<h1>Timetable</h1>
<h3>Home</h3>
<div id="app-back-button">
<a href="http://demo.projectfedena.org/timetable#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images\buttons/back.png"></a>
</div>
</div>
<div id="page-yield">
<div class="box">
<div class="link-box">
<div class="link-heading"><a href="?page=create_edit_timetable">Create/Edit Timetable</a></div>
<div class="link-descr">Select a class and edit the timetable for that class.</div>
</div>
<div class="link-box">
<div class="link-heading"><a href="?page=set_class_timimg">Set class timings</a></div>
<div class="link-descr">Select a class and edit the timetable for that class.</div>
</div>
<div class="link-box">
<div class="link-heading"><a href="?page=view_timetable">View Timetables</a></div>
<div class="link-descr">View the timetable for a class.</div>
</div>
<div class="link-box">
<div class="link-heading"><a href="?page=teacher_timetable">Swap class</a></div>
<div class="link-descr">Generate period entry for a given time</div>
</div>
<div class="link-box">
<div class="link-heading"><a href="?page=institutional_timetable">Institutional Timetable</a></div>
<div class="link-descr">View the entire timetable for a day</div>
</div>
<div class="link-box">
<div class="link-heading"><a href="?page=create_weekdays">Create weekdays</a></div>
<div class="link-descr">Create weekdays</div>
</div>
<div class="extender"></div>
</div>
</div> </div>
<div class="extender"></div>
</div>
<!-- footer -->
  <?php include("include/footer.php")?>