<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

<link href="css/applicationleave.css" media="screen" rel="stylesheet" type="text/css">
<link href="css/edit.css" media="screen" rel="stylesheet" type="text/css">
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
  <img alt="Attendence" src="../images/attendence/attendence.png">
  <h1>Employee Attendance</h1>
  <h3>Leave History</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    
  </ul>
</div>
<div id="page-yield">
  <div class="box">

    <form action="#" method="post" onsubmit="new Ajax.Request(&#39;/employee_attendance/update_leave_history/3&#39;, {asynchronous:true, evalScripts:true, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="JCp25kdb2jc6rW0Zv3c7si5M2zZxPaQXLDKx9FTYUdg="></div>
      <div class="label-field-pair">
        <label for="reason">Start Date</label>
        <div class="text-input-bg"><input id="period[start_date]" name="period[start_date]" type="text" value="June 23, 2012"> <img alt="Calendar" class="calendar_date_select_popup_icon" onclick="new CalendarDateSelect( $(this).previous(), {year_range:10} );" src="../images/calendar_date_select/calendar.gif" style="border:0px; cursor:pointer;"></div>
      </div>
      <div class="label-field-pair">
        <label for="reason">End Date</label>
        <div class="text-input-bg"><input id="period[end_date]" name="period[end_date]" type="text" value="July 23, 2012"> <img alt="Calendar" class="calendar_date_select_popup_icon" onclick="new CalendarDateSelect( $(this).previous(), {year_range:10} );" src="../images/calendar_date_select/calendar.gif" style="border:0px; cursor:pointer;"></div>
      </div>
      <div id="submit-button">
        <input class="submit_button" name="commit" type="submit" value="►Go">
      </div>
    </form>

  </div>

  <div id="attendance-report">


  </div>

</div>
 </div>

      <div class="extender"></div>
    </div>

         <!-- footer -->
  <?php include("include/footer.php")?>
  
  

<ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 1; top: 0px; left: 0px; display: none; "></ul></body></html>