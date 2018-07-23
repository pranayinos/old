<?php 
$fa_groups = new Main(); 
$cce_exam_categories = new Main(); 
$newsRecordSet = $cce_exam_categories->getdata('*',"cce_exam_categories","","","");

if(isset($_POST['commit'])) // If the submit button was clicked
    {
      // observation entry 
			  
			  
			   $cols['fa_name'] =$_POST['fa_group_name'];
			   $cols['fa_description'] =$_POST['fa_group_desc'];
			   $cols['fa_max_marks'] =$_POST['fa_group_max_marks'];
			   $cols['cce_exam_name'] =$_POST['fa_group_cce_exam_category_id'];
				
				 
		if($fa_groups->Inserttable($cols,"fa_groups"))
        {
				$msg="News coscholastic_criteria Added Succesfully";
				header("location:?page=fa_groups&msg=$msg");			
		}
		else
		{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=fa_groups&error=$msg");
		}		
	}




?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <div id="MB_window" style="width: 500px; height: 350px; left: 382px; overflow: visible; "><div id="MB_frame" style=""><div id="MB_header"><div id="MB_caption">New Formative Assessment </div><a id="MB_close" title="Close window" href="#"><span></span>
 </a></div><div id="MB_content" style=""><div id="modal-box" style="">

<div id="grading-levels-form">
  <h4></h4>
 <div id="message"><div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div></div></div>  
 <form action="?page=fa_group_new_popup" class="new_fa_group" id="new_fa_group" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="ioHd1weWldQoLIQ81Y+dwML4e/LqwAF6IihFNU0ZREI="></div>
      <div id="form-errors"></div>
      
      <div class="label-field-pair">
        <label for="category_name">Name</label>
       <div class="text-input-bg"><input id="fa_group_name" name="fa_group_name" size="30" type="text" class="MB_focusable"></div>
      </div>
      <div class="label-field-pair">
        <label for="category_name">Description</label>
       <div class="text-input-bg"><input id="fa_group_desc" name="fa_group_desc" size="30" type="text" class="MB_focusable"></div>
      </div>
      <div class="label-field-pair">
        <label for="category_name">Max Marks</label>
        <div class="text-input-bg"><input id="fa_group_max_marks" name="fa_group_max_marks" size="30" type="text"  class="MB_focusable"></div>
      </div>
      <div class="label-field-pair">
        <label for="category_name">CCE Exam Category</label>
        <div class="text-input-bg">
         <!--<select id="fa_group_cce_exam_category_id" name="fa_group[cce_exam_category_id]" class="MB_focusable"><option value="">Select an Exam Category</option>
<option value="1">Term I</option></select>-->

<select id="fa_group_cce_exam_category_id" name="fa_group_cce_exam_category_id" onChange="showstudent(this.value)">
        
        <option value="">Select a Grade</option>
          <?php 
 while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { 
?>

<option value="<?=$record['cce_exam_name']?>"> <?=$record['cce_exam_name']?></option>

<?php }?>
</select>
        </div>
      </div>
      <input class="submit_button MB_focusable" id="fa_group_submit" name="commit" type="submit" value="► Create">
    </form>
  </div>
</div></div></div></div>
  </div>