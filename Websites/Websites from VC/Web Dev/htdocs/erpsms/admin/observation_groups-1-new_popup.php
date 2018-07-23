<?php
$coscholastic_criteria= new Main(); 
$id=$_GET[id];
//$exam_cce_grade = new Main(); // create a new news object
//$newsRecordSet = $exam_cce_grade->getdata('*',"exam_cce_grade","","","");


if(isset($_POST['commit'])) // If the submit button was clicked
    {
      // observation entry 
			  
			   $cols['co_scholastic_id'] =$_POST['observation_id'];
			   $cols['name'] =$_POST['observation_name'];
			   $cols['descr'] =$_POST['observation_desc'];
				
				 
		if($coscholastic_criteria->Inserttable($cols,"coscholastic_criteria"))
        {
				$msg="News coscholastic_criteria Added Succesfully";
				header("location:?page=observation_groups_one&msg=$msg");			
		}
		else
		{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=observation_groups_one&error=$msg");
		}		
	}


  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <div id="MB_window" style="width: 500px; height: 250px; left: 382px; overflow: visible; "><div id="MB_frame" style=""><div id="MB_header"><div id="MB_caption">New Coscholastic Criteria</div><a id="MB_close" title="Close window" href="#"><span></span></a></div><div id="MB_content" style=""><div id="modal-box" style="">

<div id="grading-levels-form">
  <h4></h4>

<form action="?page=observation_groups-1-new_popup" class="new_observation" id="new_observation" name="new_observation" method="post">
<div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value=""></div>
      <div id="form-errors"></div>
      <input id="observation_id" name="observation_id" size="30" type="hidden" class="MB_focusable" value="<?php echo $id?>">
      <div class="label-field-pair">
        <label for="category_name">Name</label>
        <div class="text-input-bg"><input id="observation_name" name="observation_name" size="30" type="text" class="MB_focusable"></div>
      </div>
      <div class="label-field-pair">
        <label for="category_name">Description</label>
        <div class="text-input-bg"><input id="observation_desc" name="observation_desc" size="30" type="text" class="MB_focusable"></div>
      </div>
      <input id="observation_observation_group_id" name="observation[observation_group_id]" type="hidden" value="1">
      <input class="submit_button MB_focusable" id="observation_submit" name="commit" type="submit" value="► Create">
    </form>
  </div>
</div></div></div></div>
  </div>