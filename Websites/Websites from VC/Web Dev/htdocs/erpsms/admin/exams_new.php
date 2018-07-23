<?php $subject= new Main(); 
$batch= new Main();
$newsRecordSet = $subject->getdata('*',"subject","","","");
$a=$_GET[id];   // get for exam id
$b=$_GET[bid]; //get for batch id 

$newsRecordSet1 = $batch->getdata('*',"batch","batch_id='$b'","","");
$record1 = $newsRecordSet1->getNextRecord();
//echo $record1[batch_id];
//Exam table be used 

$exam= new Main(); 

   if(isset($_POST['commit'])) // If the submit button was clicked
    {
      // news entry 
	  			$cols['exam_id'] =$_POST['exam_id_form'];
			   $cols['batch_id'] =$_POST['batch_id_form'];
			   $cols['exam_subject_id'] =$_POST['exam_subject_id'];
			   
			    //$cols['std_dob'] =date(("Y-m-d"), strtotime($_POST['std_dob']));		
			   
			   $cols['exam_start_time'] = date(("Y-m-d H:i:s"), strtotime($_POST['exam_start_time']));	
			   $cols['exam_end_time'] =date(("Y-m-d"), strtotime($_POST['exam_end_time']));	
			   
			   $cols['exam_start_date'] =date(("Y-m-d"), strtotime($_POST['exam_start_time']));	
			   $cols['exam_end_date'] =date(("Y-m-d"), strtotime($_POST['exam_end_time']));	
			   
			    $cols['exam_sub_max_marks'] =$_POST['exam_maximum_marks'];
			   $cols['exam_sub_min_marks'] =$_POST['exam_minimum_marks'];
			  
			  
			   
				
		if($exam->Inserttable($cols,"exam"))
        {
				$msg="New Exam be Added Succesfully";
				header("location:?page=exams_new&msg=$msg");			
		}
		else
		{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=exams_new&error=$msg");
		}		
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
 </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php include("include/sidebar5.php")?>
    <!-- end of side bar -->
      <div id="content"> 
<div id="content-header">
<img alt="Show_exam" src="../images/examination/show_exam.png">
  <h1>Exams</h1>
  <h3>New Exam</h3>
  <div id="app-back-button">
    <a href="#/exam_groups/134/exams/new#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">
 <div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div>
       

  <div class="box">
    <div class="bread_crumb">
      <a href="#/courses">Courses</a> »

      <a href="#/courses/105"><?=$record1[batch_course_code]?></a> »

      <a href="#/courses/105/batches/164">Batch &nbsp;<?=$record1[batch_code]?></a> »
      <a href="#/batches/164/exam_groups">Exams</a> »
      <a href="#/batches/164/exam_groups/134">Exam 1</a> »
       New
    </div>

    <h5>For exam group- Exam 1</h5>
    
      <form action="?page=exams_new" class="new_exam" id="new_exam" name="new_exam" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="m60Z3UD4HXri7oT5ye+VF0/rmtW/owFZ4VtISYdOhvw="></div>
        <input name="exam_id_form" type="hidden" value="<?php echo $a?>">
         <input name="batch_id_form" type="hidden" value="<?php echo $_GET[bid]?>">
        <div class="label-field-pair">
          <label for="subject_id">Subject<span class="necessary-field">*</span></label>
          <div class="text-input-bg"><!--<select id="exam_subject_id" name="exam[subject_id]"><option value="420">English</option>
<option value="421">Hindi</option>
<option value="422">Maths</option></select>-->
<select id="exam_subject_id" name="exam_subject_id" >
 <option value="">Select Subject</option>
          <?php 
 while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { 
?>

<option value="<?=$record['subject_id']?>"> <?=$record['subject_name']?></option>

<?php }?>
</select></div>
        </div>
        <div class="label-field-pair">
          <label for="subject_start_time">Start Time<span class="necessary-field">*</span></label>
          <div class="text-input-bg"> <input id="exam_start_time" name="exam_start_time" size="30" type="text"> <img alt="Calendar" class="calendar_date_select_popup_icon" onclick="new CalendarDateSelect( $(this).previous(), {time:true, year_range:10} );" src="./css/calendar.gif" style="border:0px; cursor:pointer;"></div>
        </div>
        <div class="label-field-pair">
          <label for="subject_end_time">End Time<span class="necessary-field">*</span></label>
          <div class="text-input-bg"> <input id="exam_end_time" name="exam_end_time" size="30" type="text"> <img alt="Calendar" class="calendar_date_select_popup_icon" onclick="new CalendarDateSelect( $(this).previous(), {time:true, year_range:10} );" src="./css/calendar.gif" style="border:0px; cursor:pointer;"></div>
        </div>
        <div class="label-field-pair">
          <label for="subject_maximum_marks">Maximum Mark<span class="necessary-field">*</span></label>
          <div class="text-input-bg"><input id="exam_maximum_marks" name="exam_maximum_marks" size="30" type="text"></div>
        </div>
        <div class="label-field-pair">
          <label for="subject_minimum_marks">Minimum mark<span class="necessary-field">*</span></label>
          <div class="text-input-bg"> <input id="exam_minimum_marks" name="exam_minimum_marks" size="30" type="text"></div>
        </div>
        <input class="submit_button" name="commit" type="submit" value="► Save">

      </form>

    
    <div class="extender"></div>
  </div>
</div>
 </div>

      <div class="extender"></div>
    </div>

       <!-- footer -->
  <?php include("include/footer.php")?>