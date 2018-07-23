<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <div id="MB_window" style="width: 500px; height: 314px; left: 382px; overflow: visible; "><div id="MB_frame" style=""><div id="MB_header"><div id="MB_caption">Add New Grading Levels</div><a id="MB_close" title="Close window" href="#"><span></span></a></div><div id="MB_content" style=""><div id="modal-box" style="">

<div id="grading-levels-form">
  <h4></h4>

  <form action="./grading_levels_popup_files/grading_levels_popup.htm" class="new_grading_level" id="new_grading_level" method="post" onsubmit="new Ajax.Request(&#39;/grading_levels&#39;, {asynchronous:true, evalScripts:true, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="Fx0ICRRbO4rrhCDJM/624/7sUzivQNmpkyG0E+3MKOA="></div>

    <div id="form-errors"></div>

    
    <input id="grading_level_batch_id" name="grading_level[batch_id]" type="hidden">

    <div class="label-field-pair">
      <label for="grading_level_Name">Name</label>
      <div class="input-field"><input id="grading_level_name" name="grading_level[name]" size="30" type="text" class="MB_focusable"></div>
    </div>

    <div class="label-field-pair">
      <label for="grading_level_min_score">Min Score</label>
      <div class="input-field"><input id="grading_level_min_score" name="grading_level[min_score]" size="30" type="text" class="MB_focusable"></div>
    </div>

    <div class="label-field-pair">
      <label for="grading_level_description">Description</label>
      <div class="input-field"><input id="grading_level_description" name="grading_level[description]" size="30" type="text" class="MB_focusable"></div>
    </div>
    
    <div class="label-field-pair">
      <label for="grading_level_credit_points">Credit Points</label>
      <div class="input-field"><input id="grading_level_credit_points" name="grading_level[credit_points]" size="30" type="text" class="MB_focusable"></div>
    </div>
    

    <input class="submit_button MB_focusable" id="grading_level_submit" name="commit" type="submit" value="► Save">




  </form>
</div>
</div></div></div></div>