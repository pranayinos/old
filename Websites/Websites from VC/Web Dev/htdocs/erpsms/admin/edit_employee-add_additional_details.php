<?php    // crate a page 10 nov 2012
$emp_additional = new Main(); 
$eid=$_GET[eid];	
$newsRecordSet = $emp_additional->getdata('*',"emp_additional","id='$eid'","id DESC", "50");


//Update code run 
 if(isset($_POST['commit'])) // If the submit button was clicked
    {
      // emp edit catagory entry 
 	 		   $id=$_POST['eid'];
			   $post['name'] =$_POST['additional_field_name'];
			   $post['status'] =$_POST['additional_field_status'];
			  
			   if($emp_additional->updateData($post,"emp_additional","id='$eid'"))
				   {
				$msg="Update  Added Succesfully";
				header("location:?page=employee-add_additional_details&msg=$msg");			
			}
			else
			{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=employee-add_additional_details&error=$msg");
			}		
	}
	
?>   
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/add_additional_details.css" media="screen" rel="stylesheet" type="text/css">
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
  <h3>Add additional Details</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<!-- Insert the msg code ------------------------------------>
    <div class="msg" ><?php echo $_GET[msg]?></div>
    <div class="error" ><?php echo $_GET[error]?></div>
<!-- End the msg code --------------------------------------->
<div id="page-yield">

  
    <p class="flash-msg"> Additional field created </p>
  

<form id="formID" name="formID" action="#" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="s"></div>
  <?php  while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { 
   ?>      
    <div id="form-content">
      <div class="label-field-pair">
        <label for="category_name">Name</label>
        <div class="text-input-bg"> 
    <input id="additional_field_name" name="additional_field_name" class="validate[required]  text-input" size="30" type="text" value="<?=$record['name']?>"> 
    </div>
      </div>

      <div class="label-checkbox-pair">
        <label class="status" for="status">Status</label>
        <div id="radio-buttons">
          <input id="additional_field_status" name="additional_field_status" type="radio" value="<?=$record['status']?>" class="validate[required] radio" >
          <label class="label_for_status" for="add_grade_status_true">Active</label>

          <input id="additional_field_status" name="additional_field_status" type="radio" value="<?=$record['status']?>" class="validate[required] radio">
          <label class="label_for_status" for="add_grade_status_false">Inactive</label>
        </div>
      </div>

      <div id="submit-button">
        <input name="commit" type="submit" value="► Create">
      </div>
    </div>


</form>
<?php } ?>


<div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div>
  <div id="category-list">
    

</div> </div>

      <div class="extender"></div>
    </div>

     <!-- footer -->
  </div> </div>

      <div class="extender"></div>
    </div>

     <!-- footer -->
  <?php include("include/footer.php")?>