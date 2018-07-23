<?php 
 echo $fid_new=$_GET[id];
$fa_criteria = new Main();  
 
 
 if(isset($_POST['commit'])) // If the submit button was clicked
    {
      // observation entry 
			  
			  
			   $cols['fa_id'] =$_POST['fa_criteria_fa_id'];
			   $cols['fac_name'] =$_POST['fa_criteria_fa_name'];
			   $cols['fac_description'] =$_POST['fa_criteria_desc'];
			
				
				 
		if($fa_criteria->Inserttable($cols,"fa_criteria"))
        {
				$msg="News coscholastic_criteria Added Succesfully";
				header("location:?page=fa_groups_one&msg=$msg");			
		}
		else
		{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=fa_groups_one&error=$msg");
		}		
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <div id="MB_window" style="width: 500px; height: 275px; left: 382px; overflow: visible; "><div id="MB_frame" style=""><div id="MB_header"><div id="MB_caption">New FA Criteria</div><a id="MB_close" title="Close window" href="http://demo.fedena.org/fa_groups/1#"><span></span></a></div><div id="MB_content" style=""><div id="modal-box" style=""><div id="page-yield">
  <div class="box">
    <form action="?page=fa_groups-1-new_popup" class="new_fa_criteria" id="new_fa_criteria" method="post" onsubmit="new Ajax.Request(&#39;/fa_groups/create_fa_criteria&#39;, {asynchronous:true, evalScripts:true, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value=""></div>
      <div id="form-errors"></div>
      <input id="fa_criteria_fa_id" name="fa_criteria_fa_id" size="30" type="text" class="MB_focusable" value="<?php echo $fid_new?>">
      <div class="label-field-pair">
        <label for="category_name">Name</label>
        <div class="text-input-bg"><input id="fa_criteria_fa_name" name="fa_criteria_fa_name" size="30" type="text" class="MB_focusable"></div>
      </div>
      <div class="label-field-pair">
        <label for="category_name">Description</label>
        <div class="text-input-bg"><input id="fa_criteria_desc" name="fa_criteria_desc" size="30" type="text" class="MB_focusable"></div>
      </div>
      <input id="fa_criteria_fa_group_id" name="fa_criteria[fa_group_id]" type="hidden" value="1">
      <input class="submit_button MB_focusable" id="fa_criteria_submit" name="commit" type="submit" value="► Create">
    </form>
  </div>
</div></div></div></div>
  </div>