<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Create new category</title>
</head>

<body>
<div id="MB_window" style="width: 500px; height: 263px; left: 382px; overflow: visible; "><div id="MB_frame" style=""><div id="MB_header"><div id="MB_caption">Editing category</div></div><div id="MB_content" style=""><div id="modal-box" style="">
<form action="http://demo.fedena.com/finance/category_update/28" method="post" onsubmit="new Ajax.Request(&#39;/finance/category_update/28&#39;, {asynchronous:true, evalScripts:true, onComplete:function(request){Modalbox.hide();return false;}, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="lCoop3t9/i0YfEvOyx6yVM18cQK+IaV/qhVHk4F/+vk="></div>

<div class="label-field-pair">
    <div class="label-container"><label>Category Name:</label> </div>
    <div class="input-container"><input id="finance_category_name" name="finance_category[name]" size="30" type="text" value="Bob" class="MB_focusable"></div>
   </div>
<div class="label-field-pair">
    <div class="label-container"><label>Description:</label> </div>
    <div class="input-container"><input id="finance_category_description" name="finance_category[description]" size="30" type="text" value="Bobbbb" class="MB_focusable"></div>
   </div>
<div class="label-field-pair">
    <div class="label-container"><label>Is this under income?</label> </div>
    <div class="input-container"><input name="finance_category[is_income]" type="hidden" value="0"><input id="finance_category_is_income" name="finance_category[is_income]" type="checkbox" value="1" class="MB_focusable"> </div>
   </div>

  <input class="submit_button MB_focusable" name="commit" type="submit" value="► Update">
</form>
</div></div></div></div>
<body>
</body>
</html>
