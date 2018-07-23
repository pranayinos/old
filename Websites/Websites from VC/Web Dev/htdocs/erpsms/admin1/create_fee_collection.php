<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- saved from url=(0062)http://demo.fedena.org/transport_fee/transport_fee_collections -->
<html dir="ltr"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
  
    
      




  <body style="cursor: default; "><div id="MB_overlay" opacity="0" style="opacity: 0.75; "></div><div id="MB_window" style="width: 500px; height: 390px; left: 382px; overflow: visible; "><div id="MB_frame" style=""><div id="MB_header"><div id="MB_caption"></div><a id="MB_close" title="Close window" href="http://demo.fedena.org/transport_fee/transport_fee_collections#"><span>×</span></a></div><div id="MB_content" style=""><div id="modal-box" style=""><label class="head_label">Set transport fee collection date<span></span></label>
<form action="http://demo.fedena.org/transport_fee/transport_fee_collection_create" class="new_transport_fee_collection" id="new_transport_fee_collection" method="post" onsubmit="new Ajax.Request(&#39;/transport_fee/transport_fee_collection_create&#39;, {asynchronous:true, evalScripts:true, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="sZFPxPWh30tAllbRpaqOCuodbvivJLocCfe5Ebt0weU="></div>
  
  <div id="form-errors"></div>
  <div class="label-field-pair">
    <label for="reason">  Transport Fee Name:</label>
    <div class="text-input-bg"><input id="transport_fee_collection_name" name="transport_fee_collection[name]" type="text" class="MB_focusable"></div>
  </div>

  <div class="label-field-pair"><label> Select a course: </label></div>
  <div class="fee_category_scroll">
     <div class="sel-list">
      Select: <a href="http://demo.fedena.org/transport_fee/transport_fee_collections#" onclick="$$(&#39;input.batches_box&#39;).each(function(checkbox) { checkbox.checked = true; });; return false;" class="MB_focusable">All</a>,
      <a href="http://demo.fedena.org/transport_fee/transport_fee_collections#" onclick="$$(&#39;input.batches_box&#39;).each(function(checkbox) { checkbox.checked = false; });; return false;" class="MB_focusable">None</a>
    </div>
    

  </div>

    <div class="label-field-pair">
    <label for="reason">Include Employee?</label>
    <div class="check_box"><input id="transport_fee_collection_employee_" name="transport_fee_collection[employee][]" type="checkbox" value="employee" class="MB_focusable"></div>
  </div>
  <div class="label-field-pair">
    <label for="reason">Start Date</label>
    <div class="text-input-bg"><input id="transport_fee_collection[start_date]" name="transport_fee_collection[start_date]" readonly="readonly" type="text" value="13-07-2012" class="MB_focusable"> <img alt="Calendar" class="calendar_date_select_popup_icon" onclick="new CalendarDateSelect( $(this).previous(), {popup:&#39;force&#39;, year_range:10} );" src="./Fedena_files/calendar.gif" style="border:0px; cursor:pointer;"></div>
  </div>
  <div class="label-field-pair">
    <label for="reason">End Date</label>
    <div class="text-input-bg"><input id="transport_fee_collection[end_date]" name="transport_fee_collection[end_date]" readonly="readonly" type="text" value="13-07-2012" class="MB_focusable"> <img alt="Calendar" class="calendar_date_select_popup_icon" onclick="new CalendarDateSelect( $(this).previous(), {popup:&#39;force&#39;, year_range:10} );" src="./Fedena_files/calendar.gif" style="border:0px; cursor:pointer;"></div>
  </div>
  <div class="label-field-pair">
    <label for="reason">Due Date</label>
    <div class="text-input-bg"><input id="transport_fee_collection[due_date]" name="transport_fee_collection[due_date]" readonly="readonly" type="text" value="13-07-2012" class="MB_focusable"> <img alt="Calendar" class="calendar_date_select_popup_icon" onclick="new CalendarDateSelect( $(this).previous(), {popup:&#39;force&#39;, year_range:10} );" src="./Fedena_files/calendar.gif" style="border:0px; cursor:pointer;"></div>
  </div>

  <div class="extender"></div>
  <div id="submit-button">
    <input class="submit_button MB_focusable" name="commit" type="submit" value="► Create">
  </div>
</form>
</div></div></div></div>
   