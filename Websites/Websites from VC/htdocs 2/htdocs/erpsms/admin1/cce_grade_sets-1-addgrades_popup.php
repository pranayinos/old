<div id="MB_window" style="width: 500px; height: 275px; left: 382px; overflow: visible; "><div id="MB_frame" style=""><div id="MB_header"><div id="MB_caption">Add Grade</div><a id="MB_close" title="Close window" href="http://demo.fedena.org/cce_grade_sets/1#"><span></span></a></div><div id="MB_content" style=""><div id="modal-box" style=""><div id="page-yield">
  <div class="box">
    <form action="#" class="new_cce_grade" id="new_cce_grade" method="post" onsubmit="new Ajax.Request(&#39;/cce_grade_sets/create_grade&#39;, {asynchronous:true, evalScripts:true, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="ioHd1weWldQoLIQ81Y+dwML4e/LqwAF6IihFNU0ZREI="></div>
      <div id="form-errors"></div>
      
      <div class="label-field-pair">
        <label for="category_name">Name</label>
        <div class="text-input-bg"><input id="cce_grade_name" name="cce_grade[name]" size="30" type="text" class="MB_focusable"></div>
      </div>
      <div class="label-field-pair">
        <label for="category_name">Grade points</label>
        <div class="text-input-bg"><input id="cce_grade_grade_point" name="cce_grade[grade_point]" size="30" type="text" class="MB_focusable"></div>
      </div>
      <input id="cce_grade_cce_grade_set_id" name="cce_grade[cce_grade_set_id]" type="hidden" value="1">
      <input class="submit_button MB_focusable" id="cce_grade_submit" name="commit" type="submit" value="► Create">
    </form>
  </div>
</div></div></div></div></div>