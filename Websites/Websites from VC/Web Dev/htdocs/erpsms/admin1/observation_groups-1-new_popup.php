<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <div id="MB_window" style="width: 500px; height: 250px; left: 382px; overflow: visible; "><div id="MB_frame" style=""><div id="MB_header"><div id="MB_caption">New Coscholastic Criteria</div><a id="MB_close" title="Close window" href="#"><span></span></a></div><div id="MB_content" style=""><div id="modal-box" style="">

<div id="grading-levels-form">
  <h4></h4>

<form action="#" class="new_observation" id="new_observation" method="post" onsubmit="new Ajax.Request(&#39;/observation_groups/1/create_observation&#39;, {asynchronous:true, evalScripts:true, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="ioHd1weWldQoLIQ81Y+dwML4e/LqwAF6IihFNU0ZREI="></div>
      <div id="form-errors"></div>
      
      <div class="label-field-pair">
        <label for="category_name">Name</label>
        <div class="text-input-bg"><input id="observation_name" name="observation[name]" size="30" type="text" class="MB_focusable"></div>
      </div>
      <div class="label-field-pair">
        <label for="category_name">Description</label>
        <div class="text-input-bg"><input id="observation_desc" name="observation[desc]" size="30" type="text" class="MB_focusable"></div>
      </div>
      <input id="observation_observation_group_id" name="observation[observation_group_id]" type="hidden" value="1">
      <input class="submit_button MB_focusable" id="observation_submit" name="commit" type="submit" value="► Create">
    </form>
  </div>
</div></div></div></div>
  </div>