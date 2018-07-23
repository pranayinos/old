<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
 <link href="css/event_index.css" media="screen" rel="stylesheet" type="text/css">


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
  <img alt="Manage_news_logo" src="../images/manage_news/manage_news_logo.png">
  <h1>Event</h1>
  <h3>Step 1 - Event creation</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="page-yield">
  
  <form action="#" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="I3DHghKAk8kIHzKPL2/3pkVAWfO/jMR1Mvn1/0PTETo="></div>
    
    <div class="label-field-pair">
      <label for="start-date">Start Date:</label>
      <div class="text-input-bg"><input id="events[start_date]" name="events[start_date]" type="text" value="July 07, 2012,07:16 am"> <img alt="Calendar" class="calendar_date_select_popup_icon" onClick="new CalendarDateSelect( $(this).previous(), {time:true, year_range:10} );" src="../images/calendar_date_select/calendar.gif" style="border:0px; cursor:pointer;"></div>
    </div>
    <div class="label-field-pair">
      <label for="end-date">End Date:</label>
      <div class="text-input-bg"><input id="events[end_date]" name="events[end_date]" type="text" value="July 07, 2012,07:16 am"> <img alt="Calendar" class="calendar_date_select_popup_icon" onClick="new CalendarDateSelect( $(this).previous(), {time:true, year_range:10} );" src="../images/calendar_date_select/calendar.gif" style="border:0px; cursor:pointer;"></div>
    </div>
    <div class="label-field-pair">
      <label for="title">Title:</label>
      <div class="text-input-bg"><input id="events_title" name="events[title]" size="30" type="text"></div>
    </div>
    <div class="label-field-pair">
      <label for="description">Description:</label>
    </div>
    <textarea cols="40" id="events_description" name="events[description]" rows="20"></textarea>
    <div class="label-field-pair">
      <label for="is-holiday">Is Holiday??</label>
      <input name="events[is_holiday]" type="hidden" value="0"><input id="events_is_holiday" name="events[is_holiday]" type="checkbox" value="1">
    </div>
    <div class="label-field-pair">
      <label for="end-date">Event common to all</label>
      <input name="events[is_common]" type="hidden" value="0"><input id="events_is_common" name="events[is_common]" type="checkbox" value="1">
    </div>
    <input id="events_submit" name="commit" type="submit" value="► Create Event">
  </form>
</div>
 </div>

      <div class="extender"></div>
    </div>

   <!-- footer -->
  <?php include("include/footer.php")?>