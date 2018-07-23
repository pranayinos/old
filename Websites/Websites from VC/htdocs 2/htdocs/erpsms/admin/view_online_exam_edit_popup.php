<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <div id="MB_window" style="width: 500px; height: 400px; left: 382px; overflow: visible; "><div id="MB_frame" style=""><div id="MB_header"><div id="MB_caption">Edit Exam Group</div><a id="MB_close" title="Close window" href="#"><span></span></a></div><div id="MB_content" style=""><div id="modal-box" style="">

<div id="grading-levels-form">
  <h4></h4>  
  
  <form action="#" method="post" onsubmit="new Ajax.Request(&#39;/online_exam/update_exam_group/4&#39;, {asynchronous:true, evalScripts:true, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="pETlawbN3qM7axWlhooH9wT/l1nns3mrCea9udiE/gE="></div>

    <div class="label-field-pair">
      <label>Name</label>
      <div class="text-input-bg"><input id="exam_group_name" name="exam_group[name]" size="30" type="text" value="to" class="MB_focusable"></div>
    </div>
    <div class="label-field-pair">
      <label>Start Date</label>
      <div class="text-input-bg"><input id="exam_group[start_date]" name="exam_group[start_date]" readonly="readonly" type="text" value="22-06-2012" class="MB_focusable"> <img alt="Calendar" class="calendar_date_select_popup_icon" onclick="new CalendarDateSelect( $(this).previous(), {popup:&#39;force&#39;, year_range:10} );" src="../images/calendar_date_select/calendar.gif" style="border:0px; cursor:pointer;"></div>
    </div>
    <div class="label-field-pair">
      <label>End Date</label>
      <div class="text-input-bg"><input id="exam_group[end_date]" name="exam_group[end_date]" readonly="readonly" type="text" value="22-06-2012" class="MB_focusable"> <img alt="Calendar" class="calendar_date_select_popup_icon" onclick="new CalendarDateSelect( $(this).previous(), {popup:&#39;force&#39;, year_range:10} );" src="../images/calendar_date_select/calendar.gif" style="border:0px; cursor:pointer;"></div>
    </div>
    <div class="label-field-pair">
      <label>Maximum Time(Minutes)</label>
      <div class="text-input-bg"><input id="exam_group_maximum_time" name="exam_group[maximum_time]" size="30" type="text" value="100.00" class="MB_focusable"></div>
    </div>
    <div class="label-field-pair">
      <label>Pass Percentage(%)</label>
      <div class="text-input-bg"><input id="exam_group_pass_percentage" name="exam_group[pass_percentage]" size="30" type="text" value="40.00" class="MB_focusable"></div>
    </div>
    
    <div id="submit-button">
      <input id="exam_group_submit" name="commit" type="submit" value="► Update" class="MB_focusable">
    </div>
  </form>
  </div>
</div></div></div>