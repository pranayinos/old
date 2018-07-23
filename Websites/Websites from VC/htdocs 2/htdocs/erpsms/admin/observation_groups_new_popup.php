<?php
$exam_cce_grade = new Main(); // create a new news object
$newsRecordSet = $exam_cce_grade->getdata('*',"exam_cce_grade","","","");

$co_scholasic_group= new Main(); 

if(isset($_POST['commit'])) // If the submit button was clicked
    {
      // news entry 
			  // $cols['batch'] =$_POST['std_batch_code'];
			   $cols['name'] =$_POST['observation_group_name'];
			    $cols['co_header_name'] =$_POST['observation_group_header_name'];
				 $cols['co_description'] =$_POST['observation_group_desc'];
				  $cols['cce_grade_set'] =$_POST['observation_group_cce_grade_set_id'];
				  $cols['co_type'] =$_POST['observation_group_observation_kind'];
				  //$cols['is_consider'] =$_POST['ranking_level_full_course'];
				 
		if($co_scholasic_group->Inserttable($cols,"co_scholasic_group"))
        {
				$msg="News CO SCHOLASTIC GROUP Added Succesfully";
				header("location:?page=observation_groups&msg=$msg");			
		}
		else
		{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=observation_groups&error=$msg");
		}		
	}


  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <div id="MB_frame" style=""><div id="MB_header"><div id="MB_caption">New Co-Scholastic Group</div><a id="MB_close" title="Close window" href="/observation_groups#"><span></span></a></div><div id="MB_content" style=""><div id="modal-box" style=""><div id="page-yield">
 <div id="message"><div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div></div></div> 
  <div class="box">
    <form action="?page=observation_groups_new_popup" class="new_observation_group" id="new_observation_group" method="post">
    <div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value=""></div>
      <div id="form-errors"></div>
      
      <div class="label-field-pair">
        <label for="category_name">Name</label>
        <div class="text-input-bg"><input id="observation_group_name" name="observation_group_name" size="30" type="text" class="MB_focusable"></div>
      </div>
      <div class="label-field-pair">
        <label for="category_name">Header Name</label>
        <div class="text-input-bg"><input id="observation_group_header_name" name="observation_group_header_name" size="30" type="text" class="MB_focusable"></div>
      </div>
      <div class="label-field-pair">
        <label for="category_name">Description</label>
        <div class="text-input-bg"><input id="observation_group_desc" name="observation_group_desc" size="30" type="text" class="MB_focusable"></div>
      </div>
      <div class="label-field-pair">
        <label for="category_name">CCE Grade Set</label>
        <div class="text-input-bg">
        
          <!--<select id="observation_group_cce_grade_set_id" name="observation_group_cce_grade_set_id" class="MB_focusable"><option value="">Select a grade set</option>
<option value="1">Scholastic Grade Set 1</option></select>-->
 <select id="observation_group_cce_grade_set_id" name="observation_group_cce_grade_set_id">
         <option value="">Select a Batch</option>
          <?php 
 while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { 
?>

<option value="<?=$record['cce_grade_name']?>"> 
<?=$record['cce_grade_name']?>
</option>

<?php }?>
</select>
        </div>
      </div>
      <div class="label-field-pair">
        <label for="category_name">Type</label>
        <div class="text-input-bg">
          <select id="observation_group_observation_kind" name="observation_group_observation_kind" class="MB_focusable"><option value="">Select an assessment type</option>
<option value="3">Co Scholastic Area</option>
<option value="1">Co Scholastic Activity</option>
<option value="0">Scholastic</option></select>
        </div>
      </div>
      <input class="submit_button MB_focusable" id="observation_group_submit" name="commit" type="submit" value="► Create">
    </form>
    <div class="extender"></div>
  </div>
</div></div></div></div>