 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <div id="MB_window" style="width: 500px; height: 350px; left: 382px; overflow: visible; "><div id="MB_frame" style=""><div id="MB_header"><div id="MB_caption">Edit FA Group</div><a id="MB_close" title="Close window" href="#"><span></span></a></div><div id="MB_content" style=""><div id="modal-box" style="">

<div id="grading-levels-form">
  <h4></h4>

  
<form action="#" class="edit_fa_group" id="edit_fa_group_1" method="post" onsubmit="new Ajax.Request(&#39;/fa_groups/1&#39;, {asynchronous:true, evalScripts:true, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="_method" type="hidden" value="put"><input name="authenticity_token" type="hidden" value="ioHd1weWldQoLIQ81Y+dwML4e/LqwAF6IihFNU0ZREI="></div>
      <div id="form-errors"></div>
      
      <div class="label-field-pair">
        <label for="category_name">Name</label>
        <div class="text-input-bg"><input id="fa_group_name" name="fa_group[name]" size="30" type="text" value="GA Group 1" class="MB_focusable"></div>
      </div>
      <div class="label-field-pair">
        <label for="category_name">Description</label>
        <div class="text-input-bg"><input id="fa_group_desc" name="fa_group[desc]" size="30" type="text" value="Desc" class="MB_focusable"></div>
      </div>
      <div class="label-field-pair">
        <label for="category_name">Max Marks</label>
        <div class="text-input-bg"><input id="fa_group_max_marks" name="fa_group[max_marks]" size="30" type="text" value="100" class="MB_focusable"></div>
      </div>
      <div class="label-field-pair">
        <label for="category_name">CCE Exam Category</label>
        <div class="text-input-bg">
          <select id="fa_group_cce_exam_category_id" name="fa_group[cce_exam_category_id]" class="MB_focusable"><option value="1" selected="selected">Term I</option></select>
        </div>
      </div>
      
       <input class="submit_button MB_focusable" id="fa_group_submit" name="commit" type="submit" value="► Update">
    </form>
  </div>
</div></div></div></div>
  </div>