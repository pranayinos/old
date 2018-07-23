<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/online_meeting_index.css" media="screen" rel="stylesheet" type="text/css">
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
      <div id="fullcontent"> <div id="content-header">
  <img src="../images/examination/show_exam.png" alt="Exam">
  <h1>Online Meetings</h1>
  <h3>All</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    
      <li><a href="?page=emp_online_meeting_rooms-new">New</a> </li>
    
   
  </ul>
</div>
<div id="fullpage-yield">

  
  <div id="top-box">
    <div id="activities">
      <span id="heading">Activities on :  : </span>
<span id="date">21-07-2012</span>
    </div>

    <div class="search-box">
      <form action="#" method="post" onsubmit="new Ajax.Request(&#39;/online_meeting_rooms/view_meetings_by_date&#39;, {asynchronous:true, evalScripts:true, onLoaded:function(request){$(&#39;loading&#39;).hide();}, onLoading:function(request){$(&#39;loading&#39;).show();}, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="HLXw9pp1LGHXQIbHeJV5buYl4nvs9klhjKVT3A7ipVA="></div>
        <label class="select-date">Select a date</label>
        <div class="text-input-bg"><input id="meetings[search_date]" name="meetings[search_date]" type="text" value="21-07-2012"> <img alt="Calendar" class="calendar_date_select_popup_icon" onclick="new CalendarDateSelect( $(this).previous(), {time:false, year_range:10} );" src="../images/calendar_date_select/calendar.gif" style="border:0px; cursor:pointer;"></div>
        <div class="go"><input class="submit_button" name="commit" type="submit" value="Go"></div>
      </form>
    </div>
    <div id="img_load">
      <img align="absmiddle" alt="Loader" border="0" id="loading" src="../images/loader.gif" style="display: none;">
    </div>
  </div>
  <div class="box">
    <div id="event-table">
      
  No meeting for the selected date

    </div>
    <div class="extender"></div>
  </div>

</div>
 </div>

      <div class="extender"></div>
    </div>

   
         <!-- footer -->
  <?php include("include/footer.php")?>



</body></html>