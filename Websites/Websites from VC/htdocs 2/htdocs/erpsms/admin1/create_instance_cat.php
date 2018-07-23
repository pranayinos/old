<html>
<head>
</head>
<body>
<div id="MB_window" style="width: 500px; height: 215px; left: 382px; overflow: visible; "><div id="MB_frame" style=""><div id="MB_header"><div id="MB_caption"></div></div><div id="MB_content" style=""><div id="modal-box" style="">
<label class="head_label">Create Instant Category for Fees<span></span></label>


<div id="grading-levels-form">

  <form action="create_category" class="new_instant_fee_category" id="new_instant_fee_category" method="post" onSubmit="new Ajax.Request(&#39;/instant_fees/create_category&#39;, {asynchronous:true, evalScripts:true, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="2eh51q3cs5dcYXeUQhIJiuqSX7Up8mvK45hLlBCTsxA="></div>

    <div id="form-errors"></div>
    <div class="label-field-pair">
      <div class="label-container"><label for="instant_fee_category_Name">Name</label></div>
      <div class="input-container"><input id="instant_fee_category_name" name="instant_fee_category[name]" size="30" type="text" class="MB_focusable"></div>
    </div>

    <div class="label-field-pair">
      <div class="label-container"><label for="instant_fee_category_Description">Description</label></div>
      <div class="input-container"><input id="instant_fee_category_description" name="instant_fee_category[description]" size="30" type="text" class="MB_focusable"></div>
    </div>

    <input class="submit_button MB_focusable" name="commit" type="submit" value="► Save">

  </form>
</div>
</div></div></div></div>
</body>
</html>