<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body><div id="MB_window" style="width: 500px; height: 311px; left: 382px; overflow: visible; "><div id="MB_frame" style=""><div id="MB_header"><div id="MB_caption"></div></div><div id="MB_content" style=""><div id="modal-box" style="">
<label class="head_label">Create Instant Particular for Fees<span></span></label>


<div id="grading-levels-form">

  <form action="#" class="new_instant_fee_particular" id="new_instant_fee_particular" method="post" onsubmit="new Ajax.Request(&#39;/instant_fees/create_particular&#39;, {asynchronous:true, evalScripts:true, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="2eh51q3cs5dcYXeUQhIJiuqSX7Up8mvK45hLlBCTsxA="></div>

    <div id="form-errors"></div>
    <div class="label-field-pair">
      <div class="label-container"><label for="instant_fee_particular_Select category">Select category</label></div>
      <div class="input-container"> <select id="instant_fee_particular_instant_fee_category_id" name="instant_fee_particular[instant_fee_category_id]" class="MB_focusable"><option value="2">Test Fees</option>
<option value="4">ghjhg hjhg</option>
<option value="5">Category for Comp Science</option>
<option value="6">my instant</option>
<option value="7">Temp charge</option></select></div>
    </div>

    <div class="label-field-pair">
      <div class="label-container"><label for="instant_fee_particular_Name">Name</label></div>
      <div class="input-container"><input id="instant_fee_particular_name" name="instant_fee_particular[name]" size="30" type="text" class="MB_focusable"></div>
    </div>

    <div class="label-field-pair">
      <div class="label-container"><label for="instant_fee_particular_Description">Description</label></div>
      <div class="input-container"><input id="instant_fee_particular_description" name="instant_fee_particular[description]" size="30" type="text" class="MB_focusable"></div>
    </div>

    <div class="label-field-pair">
      <div class="label-container"><label for="instant_fee_particular_Amount">Amount</label></div>
      <div class="input-container"><input id="instant_fee_particular_amount" name="instant_fee_particular[amount]" size="30" type="text" class="MB_focusable"></div>
    </div>

    <input class="submit_button MB_focusable" name="commit" type="submit" value="►Save">

  </form>
</div>
</div></div></div></div>
</body>
</html>
