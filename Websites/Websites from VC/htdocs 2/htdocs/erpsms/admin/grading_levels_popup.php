<?php   
$student = new Main(); // create a new news object
$newsRecordSet = $student->getdata('*',"course,batch","course.course_code = batch.batch_course_code","course_name ASC","");
$exam_grade= new Main(); 

   if(isset($_POST['commit'])) // If the submit button was clicked
    {
      // news entry 
			   $cols['batch'] =$_POST['std_batch_code'];
			   $cols['grade_name'] =$_POST['grading_level_name'];
			    $cols['min_score'] =$_POST['grading_level_min_score'];
				 $cols['description'] =$_POST['grading_level_description'];
				  $cols['credit_points'] =$_POST['grading_level_credit_points'];
				 
		if($exam_grade->Inserttable($cols,"exam_grade"))
        {
				$msg="News Examination Added Succesfully";
				header("location:?page=grading_levels&msg=$msg");			
		}
		else
		{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=grading_levels&error=$msg");
		}		
	}



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><? echo $page_title ." | ". SITENAME ?></title>
 <div id="MB_window" style="width: 500px; height: 314px; left: 382px; overflow: visible; "><div id="MB_frame" style=""><div id="MB_header"><div id="MB_caption">Add New Grading Levels</div><a id="MB_close" title="Close window" href="#"><span></span></a></div><div id="MB_content" style=""><div id="modal-box" style="">

<div id="grading-levels-form">
  <h4></h4>

<form action="?page=grading_levels_popup" id="a" name="a" method="post">

    <div id="form-errors"></div>
     <div class="label-field-pair">
      <label for="grading_level_Name">Select Batch</label>
	  <div class="input-field">
       <select id="std_batch_code" name="std_batch_code">
         <option value="" style="width:30px">Select a Batch</option>
          <?php 
 while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { 
?>

<option value="<?=$record['batch_id']?>"> <?=$record['course_name']." ".$record['course_section_name'].'-'.$record['batch_code']?></option>

<?php }?>
</select>
      
      
      <!--<select id="batch_id" name="batch_id">
       <option value=""> --- Select Batch------------- </option>
      <option value="">---common-------------</option>
	 <option value="43">1 - 1st Semester</option>
	 <option value="46">2 - 2nd Semester</option>
	 <option value="44">2 - 2nd Semester</option>
	 <option value="45">3 - 1st Semester</option>
	 <option value="62">3 - 2012-2013</option>
     </select>-->
</div></div>

    <input id="grading_level_batch_id" name="grading_level[batch_id]" type="hidden">

    <div class="label-field-pair">
      <label for="grading_level_Name">Name</label>
      <div class="input-field"><input id="grading_level_name" name="grading_level_name" size="30" type="text" class="MB_focusable"></div>
    </div>

    <div class="label-field-pair">
      <label for="grading_level_min_score">Min Score</label>
      <div class="input-field"><input id="grading_level_min_score" name="grading_level_min_score" size="30" type="text" class="MB_focusable"></div>
    </div>

    <div class="label-field-pair">
      <label for="grading_level_description">Description</label>
      <div class="input-field"><input id="grading_level_description" name="grading_level_description" size="30" type="text" class="MB_focusable"></div>
    </div>
    
    <div class="label-field-pair">
      <label for="grading_level_credit_points">Credit Points</label>
      <div class="input-field"><input id="grading_level_credit_points" name="grading_level_credit_points" size="30" type="text" class="MB_focusable"></div>
    </div>
    

    <input class="submit_button MB_focusable"  name="commit" type="submit" value="Save">




  </form>
</div>
</div></div></div></div>
</body>

</html>