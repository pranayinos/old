<?php
$student=new Main();
$newsRecordSet = $student->getdata('batch.batch_id,batch.batch_code,course.course_name,course.course_section_name',"course,batch","course.course_code = batch.batch_course_code","course_name ASC","");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="./css/extra_class.css" media="screen" rel="stylesheet" type="text/css">

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
<h3>Swap class</h3>
<div id="app-back-button">
<a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
</div>
</div>
<div id="page-yield">
<div class="box">
<form action="#" method="post" onSubmit="new Ajax.Request(&#39;/timetable/extra_class&#39;, {asynchronous:true, evalScripts:true, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="IgTf573VbnZdyF3C2/oQQkEv18QSwa0HJCgS961mcqI="></div>
<div class="label-field-pair">
<label for="student_date_of_birth">Select Date</label>
<div class="text-input-bg">
<input id="extra_class[date]" name="extra_class[date]" type="text" value="July  7, 2012"> <img alt="Calendar" class="calendar_date_select_popup_icon" onClick="new CalendarDateSelect( $(this).previous(), {year_range:[1972, 2012]} );" src="./css/calendar.gif" style="border:0px; cursor:pointer;">
</div>
</div>
<div class="label-field-pair">
<label for="student_grade">Course &amp; Batch</label>
<div class="text-input-bg"><select id="extra_class_batch_id" name="extra_class[batch_id]">
<option value="">Select a Batch</option>
<?php 
 while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { 
?>

<option value="<?=$record['batch_id']?>"> <?=$record['course_name']." ".$record['course_section_name'].'-'.$record['batch_code']?></option>

<?php }?>
</select></option></select></div>
</div>
<input class="submit-button" id="extra_class_submit" name="commit" type="submit" value="► OK">
</form>
</div></div>
<div id="extra-class-form"></div> </div>
<div class="extender"></div>
</div>
<!-- footer -->
<?php include("include/footer.php")?>