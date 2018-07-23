<div id="MB_window" style="width: 500px; height: 275px; left: 382px; overflow: visible; "><div id="MB_frame" style=""><div id="MB_header"><div id="MB_caption">Edit Grade</div><a id="MB_close" title="Close window" href="#"><span></span></a></div><div id="MB_content" style=""><div id="modal-box" style=""><div id="page-yield">
  <div class="box">
    <form action="#" method="post" onsubmit="new Ajax.Request(&#39;/cce_grade_sets/1/update_grade&#39;, {asynchronous:true, evalScripts:true, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="ioHd1weWldQoLIQ81Y+dwML4e/LqwAF6IihFNU0ZREI="></div>
      <div id="form-errors"></div>
      
      <div class="label-field-pair">
        <label for="category_name">Name</label>
        <div class="text-input-bg"><input id="grade_name" name="grade[name]" size="30" type="text" value="A1" class="MB_focusable"></div>
      </div>
      <div class="label-field-pair">
        <label for="category_name">Grade Points</label>
        <div class="text-input-bg"><input id="grade_grade_point" name="grade[grade_point]" size="30" type="text" value="10" class="MB_focusable"></div>
      </div>
      <input id="grade_cce_grade_set_id" name="grade[cce_grade_set_id]" type="hidden" value="1">
      <input class="submit_button MB_focusable" id="grade_submit" name="commit" type="submit" value="► Update">
    </form>
  </div>
</div></div></div></div>
  </div>