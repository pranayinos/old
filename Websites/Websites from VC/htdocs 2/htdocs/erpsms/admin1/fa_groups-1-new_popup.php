<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <div id="MB_window" style="width: 500px; height: 275px; left: 382px; overflow: visible; "><div id="MB_frame" style=""><div id="MB_header"><div id="MB_caption">New FA Criteria</div><a id="MB_close" title="Close window" href="http://demo.fedena.org/fa_groups/1#"><span></span></a></div><div id="MB_content" style=""><div id="modal-box" style=""><div id="page-yield">
  <div class="box">
    <form action="http://demo.fedena.org/fa_groups/create_fa_criteria" class="new_fa_criteria" id="new_fa_criteria" method="post" onsubmit="new Ajax.Request(&#39;/fa_groups/create_fa_criteria&#39;, {asynchronous:true, evalScripts:true, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="ioHd1weWldQoLIQ81Y+dwML4e/LqwAF6IihFNU0ZREI="></div>
      <div id="form-errors"></div>
      
      <div class="label-field-pair">
        <label for="category_name">Name</label>
        <div class="text-input-bg"><input id="fa_criteria_fa_name" name="fa_criteria[fa_name]" size="30" type="text" class="MB_focusable"></div>
      </div>
      <div class="label-field-pair">
        <label for="category_name">Description</label>
        <div class="text-input-bg"><input id="fa_criteria_desc" name="fa_criteria[desc]" size="30" type="text" class="MB_focusable"></div>
      </div>
      <input id="fa_criteria_fa_group_id" name="fa_criteria[fa_group_id]" type="hidden" value="1">
      <input class="submit_button MB_focusable" id="fa_criteria_submit" name="commit" type="submit" value="► Create">
    </form>
  </div>
</div></div></div></div>
  </div>