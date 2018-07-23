<?php
  $newsubject = new Main(); // create a new news object
  $batchid=$_SESSION[course_batch_id];
  // getting course and batch details//	
$batchrecord = $newsubject->getdata('batch.batch_id,batch.batch_code,course.course_name,course.course_section_name',"batch,course","batch.batch_id='$batchid' and batch.batch_course_code=course.course_code","", "");
	if( ($courserow = $batchrecord->getNextRecord()) !== false )
	{
	$batch_id=$courserow[batch_id];
	 $coursebatch=$courserow[course_name].' '.$courserow[course_section_name] .'-'.$courserow[batch_code];
	// unset($_SESSION['course_batch_id']);
	}
	if($_POST['batch_code']!="" || $batch_id!="")
	{
    if(isset($_POST['addNew_bt'])) // If the submit button was clicked
    {
      // batch entry 
           $cols['subject_type'] =$_POST['sub_type'];
		   $cols['subject_batch_code'] =$_POST['batch_code'];		   
		   $cols['subject_code'] =$_POST['subject_code'];		   
		   $cols['subject_name'] =$_POST['subject_name'];	   
		   $cols['subject_max_weekly_classes'] =$_POST['subject_max_weekly_classes'];   
		   $cols['subject_exam'] =$_POST['subject_no_exam'];	     
//print_r($cols);
		   if($newsubject->Inserttable($cols,"subject"))
        {
				$msg="New Subject Added Succesfully";
				header("location:?page=subject&msg=$msg");			
		}
		else
		{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=subject&error=$msg");
		}	
		 unset($_SESSION['course_batch_id']);	
	}
	?>
<div id="MB_window" style="width: 500px; height: 368px; left: 382px; overflow: visible; "><div id="MB_frame" style=""><div id="MB_header"><div id="MB_caption">Add New Subject</div></div><div id="MB_content" style=""><div id="modal-box" style="">

<div id="grading-levels-form">
  <h4><?php echo $coursebatch?></h4>
  <!---Insert the code of 13 sep 2012 validation edit_master_fees  ---->
 <script type="text/javascript" src="js/all_validation.js"></script>
<!--- End the code of validation edit_master_fees               --->
  <form id="myform" name="myform" action="?page=add_new_subject" class="new_subject" method="post" onSubmit="return validateForm9()"><div style="margin:0;padding:0;display:inline"></div>

    <input id="batch_code" name="batch_code" size="30" type="hidden" class="MB_focusable" value="<?php echo $batch_id?>">
        <input id="sub_type" name="sub_type" size="30" type="hidden" class="MB_focusable" value="<?php echo $_GET['subtype']?>">
    
     <div id="form-errors"></div>

  <div class="label-field-pair">
    <div class="label-container"><label>Name</label></div>
    <div class="input-container"> <input id="subject_name" name="subject_name" size="30" type="text" class="MB_focusable"></div>
  </div>

    <div class="label-field-pair">
    <div class="label-container">  <label>Code</label></div>
    <div class="input-container"><input id="subject_code" name="subject_code" size="30" type="text" class="MB_focusable"></div>
  </div>

    <div class="label-field-pair">
    <div class="label-container"><label>Max weekly classes</label></div>
    <div class="input-container"> <input id="subject_max_weekly_classes" name="subject_max_weekly_classes" size="30" type="text" class="MB_focusable"></div>
    </div>

  <div class="label-field-pair">
    <div class="label-container"><label>No Exam</label></div>
    <div class="input-container">    <input id="subject_no_exam" name="subject_no_exam" type="checkbox" value="0" class="MB_focusable"></div>
  </div>

   <input class="submit_button MB_focusable" id="addNew_bt" name="addNew_bt" type="submit" value="► Save">

  </form>
</div>
</div></div></div></div>
<?php } else echo "Please Select Batch ";?>