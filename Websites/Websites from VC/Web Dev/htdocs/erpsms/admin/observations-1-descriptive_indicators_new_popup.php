<?php echo $ind_id=$_GET[id];
$descriptive_indicators= new Main(); 

if(isset($_POST['commit'])) // If the submit button was clicked
    {
      // observation entry 
			  
			   $cols['id'] =$_POST['coscholastic_criteria_id'];
			   $cols['indicator_name'] =$_POST['descriptive_indicator_name'];
			   $cols['indicator_description'] =$_POST['descriptive_indicator_desc'];
				
				 
		if($descriptive_indicators->Inserttable($cols,"descriptive_indicators"))
        {
				$msg="News descriptive_indicators Added Succesfully";
				header("location:?page=observations-1-descriptive_indicators&id=$ind_id&msg=$msg");			
		}
		else
		{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=observations-1-descriptive_indicators&error=$msg");
		}		
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <div id="MB_window" style="width: 500px; height: 250px; left: 382px; overflow: visible; "><div id="MB_frame" style=""><div id="MB_header"><div id="MB_caption">New Descriptive Indicator</div><a id="MB_close" title="Close window" href="#"><span></span></a></div><div id="MB_content" style=""><div id="modal-box" style="">

<div id="grading-levels-form">
  <h4></h4>

  
 <form action="?page=observations-1-descriptive_indicators_new_popup" class="new_descriptive_indicator" id="new_descriptive_indicator" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value=""></div>
      <div id="form-errors"></div>
      <input id=" coscholastic_criteria_id" name="coscholastic_criteria_id" size="30" type="hidden" class="MB_focusable" value="<?php echo $ind_id ?>">
      <div class="label-field-pair">
        <label for="category_name">Name</label>
        <div class="text-input-bg"><input id="descriptive_indicator_name" name="descriptive_indicator_name" size="30" type="text" class="MB_focusable"></div>
      </div>
      <div class="label-field-pair">
        <label for="category_name">Description</label>
        <div class="text-input-bg"><input id="descriptive_indicator_desc" name="descriptive_indicator_desc" size="30" type="text" class="MB_focusable"></div>
      </div>
      
        <input id="observation_id" name="observation_id" type="hidden" value="1">
      
      <input class="submit_button MB_focusable" id="descriptive_indicator_submit" name="commit" type="submit" value="► Create">
    </form>
  </div>
</div></div></div></div>
  </div>