<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/leaves.css" media="screen" rel="stylesheet" type="text/css">
<link href="css/applicationleave.css" media="screen" rel="stylesheet" type="text/css">
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
      <div id="fullcontent"> 


<div id="content-header">
  <img alt="Leave-new" src="../images/leave-new.png">
  <h1>Leave Management</h1>
  <h3>Apply or check status</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="inner-tab-menu">
  <ul>
    <li><a href="?page=emp_leaves">Apply</a></li>
    <li><a href="?page=emp_leave_history">Leave History</a></li>
    <li><a href="?page=emp_myleaves">My Leaves</a></li>
    <li><a href="?page=emp_all_leaves">All Leaves</a></li>
      
  </ul>
</div>





<div id="fullpage-yield">

  
        
    
  <div id="application-list-2">
    
        

  </div>
 
  <div id="application-list">
    <div class="heading">Apply for a leave</div>
    <form action="./emp_leaves_files/emp_leaves.htm" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="JCp25kdb2jc6rW0Zv3c7si5M2zZxPaQXLDKx9FTYUdg="></div>
      
      <input id="leave_apply_employee_id" name="leave_apply[employee_id]" type="hidden" value="3">
      <div class="label-field-pair">
        <label for="leave_type">Leave type:</label>
        <div class="text-input-bg"><select id="leave_apply_employee_leave_types_id" name="leave_apply[employee_leave_types_id]"><option value="">Select</option>
<option value="2">casual leave</option>
<option value="3">FESTIVAL</option>
<option value="4">sick</option></select></div>
      </div>
      <div class="label-field-pair">
          <label for="create_user" id="create_user_option">is half day ?</label>
         <div class="text-input-bg"><input name="leave_apply[is_half_day]" type="hidden" value="0"><input id="leave_apply_is_half_day" name="leave_apply[is_half_day]" type="checkbox" value="1"></div>
      </div>

      <div class="label-field-pair">
        <label for="start_date">Start Date</label>
        <div class="text-input-bg"><input id="leave_apply[start_date]" name="leave_apply[start_date]" type="text"> <img alt="Calendar" class="calendar_date_select_popup_icon" onclick="new CalendarDateSelect( $(this).previous(), {year_range:10} );" src="../images/calendar_date_select/calendar.gif" style="border:0px; cursor:pointer;"></div>
      </div>
      <div class="label-field-pair">
        <label for="end_date">End Date:</label>
        <div class="text-input-bg"><input id="leave_apply[end_date]" name="leave_apply[end_date]" type="text"> <img alt="Calendar" class="calendar_date_select_popup_icon" onclick="new CalendarDateSelect( $(this).previous(), {year_range:10} );" src="../images/calendar_date_select/calendar.gif" style="border:0px; cursor:pointer;"></div>
      </div>
      <div class="label-field-pair">
        <label for="reason">Reason:</label>
        <div class="text-input-bg"><input id="leave_apply_reason" name="leave_apply[reason]" size="30" type="text"></div>
      </div>
      
      <div id="submit-button">
        <input name="commit" type="submit" value="► Create">
      </div>
    </form>
    <div class="extender"></div>
  </div>

  </div>
 </div>

      <div class="extender"></div>
    </div>

           <!-- footer -->
  <?php include("include/footer.php")?>
  

<ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 1; top: 0px; left: 0px; display: none; "></ul></body></html>