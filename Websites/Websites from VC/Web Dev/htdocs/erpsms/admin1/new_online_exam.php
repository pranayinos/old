<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

<link href="css/new_online_exam.css" media="screen" rel="stylesheet" type="text/css">
<!--------- Start head ---------------->

</head>

  <body>
    
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    
    <div id="content_wrapper">
    
     <!---- Side bar ---->
   <?php include("include/sidebar5.php")?>
           
      <!-- end of side bar -->
      <div id="content"> <div id="content-header">
  <img alt="Show_exam" src="../images/examination/show_exam.png">
  <h1>Online Exam</h1>
  <h3>New Online Exam</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    
      <li><a href="?page=view_online_exam">View</a></li>
    
  </ul>
</div>
<div id="page-yield">
  <div id="box">
  
  
  <form action="#" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="pETlawbN3qM7axWlhooH9wT/l1nns3mrCea9udiE/gE="></div>

    <div class="label-field-pair">
      <label>Name</label>
      <div class="text-input-bg"><input id="online_exam_group_name" name="online_exam_group[name]" size="30" type="text"></div>
    </div>
    <div class="label-field-pair">
      <label>Start Date</label>
      <div class="text-input-bg"><input id="online_exam_group_start_date" name="online_exam_group[start_date]" readonly="readonly" size="30" type="text"> <img alt="Calendar" class="calendar_date_select_popup_icon" onclick="new CalendarDateSelect( $(this).previous(), {popup:&#39;force&#39;, year_range:10} );" src="../images/calendar_date_select/calendar.gif" style="border:0px; cursor:pointer;"></div>
    </div>
    <div class="label-field-pair">
      <label>End Date</label>
      <div class="text-input-bg"><input id="online_exam_group_end_date" name="online_exam_group[end_date]" readonly="readonly" size="30" type="text"> <img alt="Calendar" class="calendar_date_select_popup_icon" onclick="new CalendarDateSelect( $(this).previous(), {popup:&#39;force&#39;, year_range:10} );" src="../images/calendar_date_select/calendar.gif" style="border:0px; cursor:pointer;"></div>
    </div>
    <div class="label-field-pair">
      <label>Maximum Time(Minutes)</label>
      <div class="text-input-bg"><input id="online_exam_group_maximum_time" name="online_exam_group[maximum_time]" size="30" type="text"></div>
    </div>
    <div class="label-field-pair">
      <label>Pass Percentage(%)</label>
      <div class="text-input-bg"><input id="online_exam_group_pass_percentage" name="online_exam_group[pass_percentage]" size="30" type="text"></div>
    </div>
    <div class="label-field-pair">
      <label>Option per Question</label>
      <div class="text-input-bg"><select id="online_exam_group_option_count" name="online_exam_group[option_count]"><option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option></select></div>
   </div>
    <div class="label-field-pair"><label> Select a batch: </label></div>
    <div class="fee_category_scroll">
      <div class="sel-list">
        Select: <a href="#" onclick="$$(&#39;input.batches_box&#39;).each(function(checkbox) { checkbox.checked = true; });; return false;">All</a>,
        <a href="#" onclick="$$(&#39;input.batches_box&#39;).each(function(checkbox) { checkbox.checked = false; });; return false;">None</a>
      </div>
      
        <div class="each_batch">
<input checked="checked" class="batches_box" id="batch_ids_" name="batch_ids[]" type="checkbox" value="43"> <span>1 - 1st Semester</span>
        </div>
      
        <div class="each_batch">
<input checked="checked" class="batches_box" id="batch_ids_" name="batch_ids[]" type="checkbox" value="44"> <span>2 - 2nd Semester</span>
        </div>
      
        <div class="each_batch">
<input checked="checked" class="batches_box" id="batch_ids_" name="batch_ids[]" type="checkbox" value="46"> <span>2 - 2nd Semester</span>
        </div>
      
        <div class="each_batch">
<input checked="checked" class="batches_box" id="batch_ids_" name="batch_ids[]" type="checkbox" value="45"> <span>3 - 1st Semester</span>
        </div>
      
        <div class="each_batch">
<input checked="checked" class="batches_box" id="batch_ids_" name="batch_ids[]" type="checkbox" value="62"> <span>3 - 2012-2013</span>
        </div>
      
    </div>
    <div id="submit-button">
      <input id="online_exam_group_submit" name="commit" type="submit" value="► Create">
    </div>
  </form>
  </div>
</div> </div>

      <div class="extender"></div>
    </div>

    <!-- footer -->
  <?php include("include/footer.php")?>
  

<ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 1; top: 0px; left: 0px; display: none; "></ul></body></html>