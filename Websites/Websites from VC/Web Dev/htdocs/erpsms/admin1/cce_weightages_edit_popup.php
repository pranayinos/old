<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <div id="MB_frame" style=""><div id="MB_header"><div id="MB_caption">Edit CCE Weightage</div><a id="MB_close" title="Close window" href="http://demo.fedena.org/cce_weightages#"><span></span></a></div><div id="MB_content" style=""><div id="modal-box" style=""><div id="page-yield">
  <div class="box">
    <form action="http://demo.fedena.org/cce_weightages/1" class="edit_cce_weightage" id="edit_cce_weightage_1" method="post" onsubmit="new Ajax.Request(&#39;/cce_weightages/1&#39;, {asynchronous:true, evalScripts:true, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="_method" type="hidden" value="put"><input name="authenticity_token" type="hidden" value="ioHd1weWldQoLIQ81Y+dwML4e/LqwAF6IihFNU0ZREI="></div>
      <div id="form-errors"></div>
      
      <div class="label-field-pair">
        <label for="category_name">Weightage</label>
        <div class="text-input-bg"><input id="cce_weightage_weightage" name="cce_weightage[weightage]" size="30" type="text" value="10" class="MB_focusable"></div>
      </div>
      <div class="label-field-pair">
        <label for="category_name">Type</label>
        <div class="text-input-bg">
          <select id="cce_weightage_criteria_type" name="cce_weightage[criteria_type]" class="MB_focusable"><option value="FA" selected="selected">FA</option>
<option value="SA">SA</option></select>
        </div>
      </div>
      <div class="label-field-pair">
        <label for="category_name">Exam Category</label>
        <div class="text-input-bg">
          <select id="cce_weightage_cce_exam_category_id" name="cce_weightage[cce_exam_category_id]" class="MB_focusable"><option value="1" selected="selected">Term I</option></select>
        </div>
      </div>
      <input class="submit_button MB_focusable" id="cce_weightage_submit" name="commit" type="submit" value="► Update">
    </form>
    <div class="extender"></div>
  </div>
</div></div></div></div>