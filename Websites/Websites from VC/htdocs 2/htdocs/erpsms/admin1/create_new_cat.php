<?php
  $newcat = new Main(); // create a new news object
    if(isset($_POST['addNew_bt'])) // If the submit button was clicked
    {
      // batch entry 
           $cols['finance_cat_name'] =$_POST['finance_category_name'];
		   $cols['finance_cat_des'] =$_POST['finance_category_description'];		   
		   $cols['income'] =$_POST['finance_category_is_income'];		   
		   
		  
//print_r($cols);
		   if($newcat->Inserttable($cols,"finance_category"))
        {
				$msg="New Finance Category Added Succesfully";
				header("location:?page=fees_category&msg=$msg");			
		}
		else
		{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=fees_category&error=$msg");
		}	
		
	}
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Create New  Finance  category</title>
</head>

<body>
<div id="MB_window" style="width: 500px; height: 263px; left: 382px; overflow: visible; "><div id="MB_frame" style=""><div id="MB_header"><div id="MB_caption"></div></div><div id="MB_content" style=""><div id="modal-box" style=""><label class="head_label">Create new  Finance  category<span></span></label>

<form action="?page=create_new_cat" method="post" onsubmit=""><div style="margin:0;padding:0;display:inline"></div>

  <div id="form-errors">

  <div class="label-field-pair">
    <div class="label-container"><label>Category Name:</label> </div>
    <div class="input-container"><input id="finance_category_name" name="finance_category_name" size="30" type="text" class="MB_focusable"></div>
  </div>
  <div class="label-field-pair">
    <div class="label-container"><label>Description:</label> </div>
    <div class="input-container"><input id="finance_category_description" name="finance_category_description" size="30" type="text" class="MB_focusable"></div>
  </div>
  <div class="label-field-pair">
    <div class="label-container"><label>Is this under income?</label> </div>
    <div class="input-container">
    <input id="finance_category_is_income1" name="finance_category_is_income" type="checkbox" value="1" class="MB_focusable"> </div>
  </div>

  <div id="modelbox-submit">
    <input class="submit_button MB_focusable" name="addNew_bt" type="submit" value="► Create">
  </div>
</form>
</div></div></div></div>
<body>
</body>
</html>
