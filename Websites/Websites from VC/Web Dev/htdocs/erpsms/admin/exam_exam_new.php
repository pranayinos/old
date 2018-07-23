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
  <h3>New Exam</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">

  

  <div class="box">
    <div class="bread_crumb">
      <a href="#">Courses</a> »
      <a href="#">B.COM COMMERCE FIRST SEMESTER</a> »
      <a href="#">Batch 2011-12</a> »
      <a href="#">Exams</a> »
      <a href="#">Exam1</a> »
       New
    </div>

    <h5>For exam group- Exam1</h5>
    
      <form action="#" class="new_exam" id="new_exam" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="EjzS6Q8mewVw4UOl3P7bb2Wo6C7cJBWKInR0x9vl/vU="></div>

        
        <div class="label-field-pair">
          <label for="exam_subject_id">Subject</label>
          <div class="text-input-bg">  <select id="exam_subject_id" name="exam[subject_id]"><option value="14">Financial Accounting</option>
<option value="15">Quantitative Techaniques for Business decisions</option>
<option value="16">Reading on Indian Constitution,Secularism and enviroment</option>
<option value="17">Reading literature in English</option>
<option value="18">Communicative and Applied Hindi</option>
<option value="19">Bhashayum Aasayavinimayavum</option>
<option value="71">english</option></select></div>
        </div>

        <div class="label-field-pair">
          <label for="exam_start_time">Start time</label>
          <div class="text-input-bg"><input id="exam_start_time" name="exam[start_time]" size="30" type="text"> <img alt="Calendar" class="calendar_date_select_popup_icon" onClick="new CalendarDateSelect( $(this).previous(), {time:true, year_range:10} );" src="../images/calendar_date_select/calendar.gif" style="border:0px; cursor:pointer;"></div>
        </div>
        <div class="label-field-pair">
          <label for="exam_end_time">End time</label>
          <div class="text-input-bg"><input id="exam_end_time" name="exam[end_time]" size="30" type="text"> <img alt="Calendar" class="calendar_date_select_popup_icon" onClick="new CalendarDateSelect( $(this).previous(), {time:true, year_range:10} );" src="../images/calendar_date_select/calendar.gif" style="border:0px; cursor:pointer;"></div>
        </div>

        <input class="submit_button" name="commit" type="submit" value="► Save">

      </form>
    
    <div class="extender"></div>
  </div>
</div>
 </div>

      <div class="extender"></div>
    </div>
    <!-- footer -->
  <?php include("include/footer.php")?>