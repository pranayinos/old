<?php 
// $batch = new Main(); // create a new news object
// $course = new Main(); // create a new news object
 $student = new Main(); // create a new news object
$newsRecordSet = $student->getdata('*',"course,batch","course.course_code = batch.batch_course_code","course_name ASC","");

$exam_new= new Main(); 

   if(isset($_POST['commit'])) // If the submit button was clicked
    {
      // news entry 
	  			$cols['batch_id'] =$_POST['exam_batch'];
			   $cols['exam_name'] =$_POST['exam_option_name'];
			   $cols['exam_type'] =$_POST['exam_option_exam_type'];
			   // $cols['class_marks'] =$_POST['ranking_level_marks'];
				
		if($exam_new->Inserttable($cols,"exam_new"))
        {
				$msg="New Exam be Added Succesfully";
				header("location:?page=exam_groups_new&msg=$msg");			
		}
		else
		{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=exam_groups_new&error=$msg");
		}		
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><? echo $page_title ." | ". SITENAME ?></title><!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
 </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php include("include/sidebar5.php")?>
      <div id="content"> 
<div id="content-header">
  <img alt="Show_exam" src="../images/examination/show_exam.png">
  <h1>Exams</h1>
  <h3>New Exam</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">
 <div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div>
  

  <div class="bread_crumb">
    <!--  <a href="?page=courses">Course</a> »
  <a href="?page=manage_course">00COURSE STD 01 </a> »
    <a href="?page=courses_batches">Batch 2012-2013</a> »-->
    <a href="?page=exam_groups">Exam</a> »
    New Exam
  </div>


  <div class="box">

    <div id="flash"></div>
    <div id="exam-form">
      
        
        <form action="#" method="post" onsubmit=""><div style="margin:0;padding:0;display:inline">
        <input name="authenticity_token" type="hidden" value=""></div>
         <div class="label-field-pair">
              <label for="exam_type">Exam Type</label>
              <div class="text-input-bg">
             <!-- <select id="exam_option_exam_type" name="exam_option_exam_type">
              <option value="1">Marks</option>
              <option value="2">Grades</option>
              <option value="3">Marks and Grades</option></select>-->
              
              <select id="exam_batch" name="exam_batch" >
        
        <option value="">Select A Batch</option>
          <?php 
 while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { 
?>

<option value="<?=$record['batch_id']?>"> <?=$record['course_name']." ".$record['course_section_name'].'-'.$record['batch_code']?></option>

<?php }?>
</select>
              
              
              </div>
            </div>
          <div class="label-field-pair">
            <label for="exam_name">Exam Name</label>
            <div class="text-input-bg"><input id="exam_option_name" name="exam_option_name" size="30" type="text" value=""></div>
          </div>
          
            <div class="label-field-pair">
              <label for="exam_type">Exam Type</label>
              <div class="text-input-bg"><select id="exam_option_exam_type" name="exam_option_exam_type">
              <option value="1">Marks</option>
              <option value="2">Grades</option>
              <option value="3">Marks and Grades</option></select></div>
            </div>
          
          <input class="submit_button" name="commit" type="submit" value="► Save">
          </form>
      
    </div>

    <div class="extender"></div>


  </div></div> </div>

      <div class="extender"></div>
    </div>

    <!-- footer -->
  <?php include("include/footer.php")?>