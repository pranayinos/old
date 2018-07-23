<?php   
$cce_exam_categories = new Main(); // create a new news object
//$newsRecordSet = $student->getdata('*',"course,batch","course.course_code = batch.batch_course_code","course_name ASC","");
//$exam_class_desination= new Main(); 

   if(isset($_POST['commit'])) // If the submit button was clicked
    {
      // news entry 
			   $cols['cce_exam_name'] =$_POST['cce_exam_category_name'];
			   $cols['cce_exam_descritption'] =$_POST['cce_exam_category_desc'];
			   // $cols['class_marks'] =$_POST['ranking_level_marks'];
				
		if($cce_exam_categories->Inserttable($cols,"cce_exam_categories"))
        {
				$msg="CCE Exam Categories Added Succesfully";
				header("location:?page=cce_exam_categories&msg=$msg");			
		}
		else
		{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=cce_exam_categories&error=$msg");
		}		
	}

?>
<div id="message"><div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div></div></div> 
<div id="MB_window" style="width: 500px; height: 276px; left: 382px; overflow: visible; "><div id="MB_frame" style=""><div id="MB_header"><div id="MB_caption">New Exam Category</div><a id="MB_close" title="Close window" href="/cce_exam_categories#"><span></span></a></div><div id="MB_content" style=""><div id="modal-box" style=""><div id="page-yield">
  <div class="box">
    <form action="?page=cce_exam_categories_new_popup" class="new_cce_exam_category" id="new_cce_exam_category" method="post">
    <div style="margin:0;padding:0;display:inline">
    <input name="authenticity_token" type="hidden" value=""></div>
      <div id="form-errors"></div>
      
      <div class="label-field-pair">
        <label for="category_name">Name</label>
        <div class="text-input-bg"><input id="cce_exam_category_name" name="cce_exam_category_name" size="30" type="text" class="MB_focusable"></div>
      </div>
      <div class="label-field-pair">
        <label for="category_name">Description</label>
        <div class="text-input-bg"><input id="cce_exam_category_desc" name="cce_exam_category_desc" size="30" type="text" class="MB_focusable"></div>
      </div>
      <input class="submit_button MB_focusable" id="commit" name="commit" type="submit" value="► Create">
    </form>
    <div class="extender"></div>
  </div>
</div></div></div></div>
  </div>