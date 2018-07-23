<?php
//Grade table be used 
$emp_grade = new Main(); 
$grade_code1=$_GET[emp_grade_priority];	
$newsRecordSet = $emp_grade->getdata('*',"emp_grade","grade_priority='$grade_code1'","grade_priority DESC", "50");

///Update code no run 
 if(isset($_POST['commit'])) // If the submit button was clicked
    {
      // emp edit grade entry
 	 		   $grade_code1=$_POST['grade_priority'];
			   $post['grade_name'] =$_POST['grade_name'];
			   $post['grade_max_prd_day'] =$_POST['grade_max_prd_day'];
			   $post['grade_max_prd_wk'] =$_POST['grade_max_prd_wk'];
			  
			   if($emp_grade->updateData($post,"emp_grade","grade_priority='$grade_code1'"))
				   {
				$msg="Update  Added Succesfully";
				header("location:?page=employee-add_grade&msg=$msg");			
			}
			else
			{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=employee-add_grade&error=$msg");
			}		
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/add_grade.css" media="screen" rel="stylesheet" type="text/css">
 <!--------- Start head ---------------->
 <!-------------Insert the 10 nov  code of validation--------------------------------------------->
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
      <div id="content"> 
<div id="content-header">
  <img alt="Show_hr" src="../images/HR/show_hr.png">
  <h1>Employee Settings</h1>
  <h3>Edit Grade</h3>
  <div id="app-back-button">
   <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">
 <?php  while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { 
   ?>

<form id="formID" name="formID" action="#" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value=""></div>
  

    
<div id="form-content">
    <div class="label-field-pair">
      <label for="grade_name">Name</label>
      <div class="text-input-bg"> <input id="grade_name" name="grade_name" size="30" type="text" value="<?=$record['grade_name']?>" class="validate[required]  text-input"> </div>
    </div>

    <div class="label-field-pair">
      <label for="grade_priority">Priority</label>
      <div class="text-input-bg"> <input id="grade_priority" name="grade_priority" size="30" type="text" value="<?=$record['grade_priority']?>" class="validate[required]  text-input"> </div>
    </div>

    <div class="label-field-pair">
      <label for="grade_priority">Max period per day</label>
      <div class="text-input-bg"> <input id="grade_max_hours_day" name="grade_max_hours_day" size="30" type="text" value="<?=$record['grade_max_prd_day']?>" class="validate[required]  text-input" > </div>
    </div>

    <div class="label-field-pair">
      <label for="grade_priority">Max period per week</label>
      <div class="text-input-bg"> <input id="grade_max_hours_week" name="grade_max_hours_week" size="30" type="text" value="<?=$record['grade_max_prd_wk']?>" class="validate[required]  text-input"> </div>
    </div>

    <div class="label-checkbox-pair">
      <label class="status" for="status">Status</label>
      <div id="radio-buttons">
      <input id="grade_status_true" name="grade_status" type="radio" value="1" class="validate[required] radio">
      <label class="label_for_status" for="grade_status_true">Active</label>

      <input id="grade_status_false" name="grade_status" type="radio" value="0" class="validate[required] radio">
      <label class="label_for_status" for="grade_status_false">Inactive</label>
    </div>
    </div>

    <div id="submit-button">
      <input name="commit" type="submit" value="► Update">
    </div>
</div>

</form>

<?php } ?>
<!-- Insert the msg code ------------------------------------>
    <div class="msg" ><?php echo $_GET[msg]?></div>
    <div class="error" ><?php echo $_GET[error]?></div>
<!-- End the msg code --------------------------------------->
</div> </div>

      <div class="extender"></div>
    </div>

     <!-- footer -->
  <?php include("include/footer.php")?>