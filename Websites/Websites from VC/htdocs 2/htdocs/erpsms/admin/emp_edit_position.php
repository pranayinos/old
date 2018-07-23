<?php
$emp_position = new Main(); 
$emp_pos=$_GET[emp_catid];	
$newsRecordSet = $emp_position->getdata('*',"emp_position","emp_posn_id='$emp_pos'","emp_posn DESC", "50");

///Update code no-run 
 if(isset($_POST['commit'])) // If the submit button was clicked
    {
      // emp edit position entry 
 	 		   $emp_posn=$_POST['emp_pos'];
			   $post['emp_posn'] =$_POST['position_name'];
			   $post['emp_cat_type'] =$_POST['position_employee_category_id'];
			   $post['emp_pos_status'] =$_POST['position_status'];
			  
			   if($emp_position->updateData($post,"emp_position","emp_posn='$emp_posn'"))
				   {
				$msg="Update Added Succesfully";
				header("location:?page=employee-add_position&msg=$msg");			
			}
			else
			{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=employee-add_position&error=$msg");
			}		
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/add_position.css" media="screen" rel="stylesheet" type="text/css">
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
  <h3>Edit Position</h3>
  <div id="app-back-button">
     <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">
<!-- Insert the msg code ------------------------------------>
    <div class="msg" ><?php echo $_GET[msg]?></div>
    <div class="error" ><?php echo $_GET[error]?></div>
<!-- End the msg code --------------------------------------->
 <?php  while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { 
   ?>
<form id="formID" name="formID" action="" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value=""></div>
  

    
 <div id="form-content">
    <div class="label-field-pair">
      <label for="position_name">Name</label>
      <div class="text-input-bg"> <input id="position_name" name="position_name" size="30" type="text" value="<?=$record['emp_posn']?>" class="validate[required]  text-input"> </div>
    </div>

   <div class="label-field-pair">
      <label for="category_name">Employee Category</label>
      <div class="text-input-bg">
      <select id="position_employee_category_id" name="position_employee_category_id">
      <option value="">Select</option>
	  <option value="<?=$record['emp_cat_type']?>" selected="selected"><?=$record['emp_cat_type']?></option>
</select>





</div>
    </div>

    <div class="label-checkbox-pair">
      <label class="status" for="status">Status</label>
      <div id="radio-buttons">
      <input id="position_status" name="position_status" type="radio" value="<?=$record['emp_pos_status']?>" class="validate[required] radio">
      <label class="label_for_status" for="add_grade_status_true">Active</label>

      <input id="position_status" name="position_status" type="radio" value="<?=$record['emp_pos_status']?>" class="validate[required] radio">
      <label class="label_for_status" for="add_grade_status_true">Inactive</label>
      </div>
    </div>

    <div id="submit-button">
      <input name="commit" type="submit" value="► Update">
    </div>
    </div>

</form>

<?php } ?>






</div> </div>

      <div class="extender"></div>
    </div>

     <!-- footer -->
  <?php include("include/footer.php")?>