<?php 
$exam_cce_grade = new Main(); // create a new news object
$aid=$_GET[id];
$exam_cce_grade_next = new Main(); 
$newsRecordSet = $exam_cce_grade->getdata('*',"exam_cce_grade","","","");

   
	 if(isset($_POST['commit'])) // If the submit button was clicked
    {
      // news entry 
			  // $cols['cce_grade_name'] =$_POST['cce_grade_set_name'];
			   $cols['cce_grade_name'] =$_POST['std_batch_code'];
			    $cols['grade_name'] =$_POST['cce_grade_name'];
				$cols['grade_point'] =$_POST['cce_grade_grade_point'];
				
		if($exam_cce_grade_next->Inserttable($cols,"exam_cce_grade_next"))
        {
				$msg="Class Grade Set Added Succesfully";
				header("location:?page=cce_grade_sets&msg=$msg");			
		}
		else
		{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=cce_grade_sets&error=$msg");
		}		
	}
	
	
?>

<div id="MB_window" style="width: 700px; height: 375px; left: 382px; overflow: visible; "><div id="MB_frame" style=""><div id="MB_header"><div id="MB_caption">Add Grade</div><a id="MB_close" title="Close window" href="/cce_grade_sets/1#"><span></span></a></div><div id="MB_content" style=""><div id="modal-box" style=""><div id="page-yield">
  <div class="box">
    <form action="?page=cce_grade_sets-1-addgrades_popup" class="new_cce_grade" id="new_cce_grade" name="new_cce_grade" method="post">
    <div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value=""></div>
      <div id="form-errors"></div>
      <!--- insert the select option ---->
       <select id="std_batch_code" name="std_batch_code" onChange="showstudent(this.value)">
        
        <option value="">Select a Grade</option>
          <?php 
 while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { 
?>

<option value="<?=$record['cce_grade_name']?>"> <?=$record['cce_grade_name']?></option>

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
      <!-- end the insert option --->
      
      
      <div class="label-field-pair">
        <label for="category_name">Name</label>
        <div class="text-input-bg"><input id="cce_grade_name" name="cce_grade_name" size="30" type="text" class="MB_focusable"></div>
      </div>
      <div class="label-field-pair">
        <label for="category_name">Grade points</label>
        <div class="text-input-bg"><input id="cce_grade_grade_point" name="cce_grade_grade_point" size="30" type="text" class="MB_focusable"></div>
      </div>
      <input id="cce_grade_cce_grade_set_id" name="cce_grade[cce_grade_set_id]" type="hidden" value="1">
      <input class="submit_button MB_focusable" id="cce_grade_submit" name="commit" type="submit" value="► Create">
    </form>
  </div>
</div></div></div></div></div>