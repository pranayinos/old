<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/leave_reset_settings.css" media="screen" rel="stylesheet" type="text/css">
 <!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php /*?><?php include("include/sidebar.php")?><?php */?>
           
      <!-- end of side bar -->
      <div id="content"> 
<div id="content-header">
  <img alt="Leave-new" src="../images/leave-new.png">
  <h1>Leave types</h1>
  <h3>Add new leave types</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/employee_attendance/leave_reset_settings#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>





<div id="page-yield">

  
  <div class="box">

    <form action="./employee_attendance-leave_reset_settings_files/employee_attendance-leave_reset_settings.htm" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60="></div>
    <div class="label-field-pair">
        <label for="category_name">Enable Automatic Reset</label>
          
          <div class="check_box"><input name="configuration[automatic_leave_reset]" type="hidden" value="0"><input id="configuration_automatic_leave_reset" name="configuration[automatic_leave_reset]" type="checkbox" value="1"></div>
        
      </div>
      <div class="label-field-pair">
        <label for="configuration_currency_type">Leave Reset Period(months)</label>
        <div class="text-input-bg">
          <input id="configuration_leave_reset_period" name="configuration[leave_reset_period]" size="30" type="text" value="4">
        </div>
      </div>
    <div class="label-field-pair">
        <label for="configuration_currency_type">Count Begin Date</label>
        <div class="text-input-bg">
          <input id="configuration[financial_year_start_date]" name="configuration[financial_year_start_date]" type="text" value="2012-06-14"> <img alt="Calendar" class="calendar_date_select_popup_icon" onClick="new CalendarDateSelect( $(this).previous(), {year_range:10} );" src="../images/calendar_date_select/calendar.gif" style="border:0px; cursor:pointer;">
        </div>
      </div>
      <div id="submit-button">
        <input name="commit" type="submit" value="► Update">
      </div>
    </form>

  </div>

</div> </div>

      <div class="extender"></div>
    </div>

    <!-- footer -->
  <?php include("include/footer.php")?> 