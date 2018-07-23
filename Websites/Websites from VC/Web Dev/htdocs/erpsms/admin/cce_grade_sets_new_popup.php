<?php   
$exam_cce_grade = new Main(); // create a new news object
//$newsRecordSet = $student->getdata('*',"course,batch","course.course_code = batch.batch_course_code","course_name ASC","");
//$exam_class_desination= new Main(); 

   if(isset($_POST['commit'])) // If the submit button was clicked
    {
      // news entry 
			   $cols['cce_grade_name'] =$_POST['cce_grade_set_name'];
			   ///$cols['class_name'] =$_POST['ranking_level_name'];
			   // $cols['class_marks'] =$_POST['ranking_level_marks'];
				
		if($exam_cce_grade->Inserttable($cols,"exam_cce_grade"))
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
<div id="message"><div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div></div></div> 
<div id="MB_window" style="width: 400px; height: 228px; left: 382px; overflow: visible; "><div id="MB_frame" style=""><div id="MB_header">
      <div id="MB_caption">New1 Grade Set</div><a id="MB_close" title="Close window" href="#"><span></span></a></div><div id="MB_content" style=""><div id="modal-box" style=""><div id="page-yield">
  <div class="box">
  <form action="?page=cce_grade_sets_new_popup" id"a" name="a" method="post">
  <!--  <form action="#" class="new_cce_grade_set" id="new_cce_grade_set" method="post" onsubmit="new Ajax.Request(&#39;/cce_grade_sets&#39;, {asynchronous:true, evalScripts:true, parameters:Form.serialize(this)}); return false;">-->
    
    
    <div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="Fx0ICRRbO4rrhCDJM/624/7sUzivQNmpkyG0E+3MKOA="></div>
      <div id="form-errors"></div>
      
      <div class="label-field-pair">
        <label for="category_name">Name</label>
        <div class="text-input-bg"><input id="cce_grade_set_name" name="cce_grade_set_name" size="30" type="text" class="MB_focusable"></div>
      </div>
      <input class="submit_button MB_focusable" id="cce_grade_set_submit" name="commit" type="submit" value="► Create">
    </form>
    <div class="extender"></div>
  </div>
</div></div></div></div>
  </div>