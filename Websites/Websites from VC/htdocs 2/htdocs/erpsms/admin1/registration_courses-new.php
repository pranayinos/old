<?php

$course_registration = new Main();
$newsRecord = $course_registration->getdata('*',"course","","course_name ASC", "");


    if(isset($_POST['commit'])) 
    {
     
           $cols['course_id'] =$_POST['course_id'];
		   $cols['min_score'] =$_POST['min_score'];		   
		   $cols['amount'] =$_POST['amount'];		   
		   $cols['course_enable'] =$_POST['course_enable'];	   
		   $cols['pin_enable'] =$_POST['pin_enable'];   
		   

		   if($course_registration->Inserttable($cols,"course_registration"))
        {
				$msg="New course Registration Added Succesfully";
				
				header("location:?page=registration_courses-new&msg=$msg");	
					
		}
		else
		{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=registration_courses-new&error=$msg");	
		}	
	
	}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/#.css" media="screen" rel="stylesheet" type="text/css">
 <!--------- Start head ---------------->
 <!--validation--------------------------------------------->
  
  	<script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#formID").validationEngine();
			
		});
	</script>
<!-------------End the code of validation--------------------------------------------->  
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php include("include/sidebar5.php")?>
           
      <!-- end of side bar -->
      
      <div id="content"> <div id="content-header">
  <img alt="Show_exam" src="../images/examination/show_exam.png">
  <h1>Course Registration</h1>
  <h3>Add Course</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/registration_courses/new#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="inner-tab-menu">
  <ul>
    <li><a href="?page=registration_courses">Courses</a></li>
  </ul>
</div>

<div id="page-yield">

  

  <form name="formID" id="formID" action="#" class="new_registration_course" id="new_registration_course" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="gAka6bIk8SyN4Y9JkYmDbmtRyDvKqMOSJuG3drrkT/k="></div>
     <div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div>


    <div class="label-field-pair">
      <label for="student_grade">Course</label>
      <div class="text-input-bg">
        <select id="course_id" name="course_id"> 
        <option value="">Select a Course</option>
      <?php
	   while( ($record = $newsRecord->getNextRecord()) !== false )
    {
	  ?>
<option value="<?=$record['course_id'];?>"><?=$record['course_name'];?></option>

<?php
}
?></select>
      </div>
    </div>
    <div class="label-field-pair">
      <label for="student_grade">Min Score</label>
      <div class="text-input-bg">
        <input id="registration_course_minimum_score" name="min_score" size="30" type="text" class="validate[required]  text-input">
      </div>
    </div>
    <div class="label-field-pair">
      <label for="student_grade">Amount</label>
      <div class="text-input-bg">
        <input id="registration_course_amount" name="amount" size="30" type="text" class="validate[required]  text-input">
      </div>
    </div>
    <div class="label-field-pair">
      <label for="student_grade">Is Active</label>
      <div class="text-input-bg">
        <select id="course_enable" name="course_enable">
        <option value="">---Select---</option>
        <option value="1">Active</option>
<option value="0">Inactive</option></select>
      </div>
    </div>

    <div class="label-field-pair">
      <label for="student_grade">Is pin system enabled</label>
      <div class="text-input-bg">
        <select id="pin_enable" name="pin_enable">
         <option value="">---Select---</option>
        <option value="1">Active</option>
<option value="0">Inactive</option></select>
      </div>
    </div>

    <input class="submit_button" id="registration_course_submit" name="commit" type="submit" value="Create">

  </form>

</div> </div>

      <div class="extender"></div>
    </div>

 
         <!-- footer -->
  <?php include("include/footer.php")?>
  </body></html>