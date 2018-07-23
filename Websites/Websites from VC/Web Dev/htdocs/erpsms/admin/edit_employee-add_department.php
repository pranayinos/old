<?php
$emp_dept = new Main(); 
$dept_code1=$_GET[emp_deptcode];	
$newsRecordSet = $emp_dept->getdata('*',"emp_dept","dept_code='$dept_code1'","dept_code DESC", "50");

///Update code run 
 if(isset($_POST['commit'])) // If the submit button was clicked
    {
      // emp edit catagory entry 
 	 		   $dept_code=$_POST['dept_code1'];
			   $post['dept_desc'] =$_POST['department_name'];
			   $post['dept_code'] =$_POST['department_code'];
			   $post['dept_status'] =$_POST['department_status'];
			  
			   if($emp_dept->updateData($post,"emp_dept","dept_code='$dept_code1'"))
				   {
				$msg="Update  Added Succesfully";
				header("location:?page=employee-add_department&msg=$msg");			
			}
			else
			{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=employee-add_department&error=$msg");
			}		
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/add_department.css" media="screen" rel="stylesheet" type="text/css">
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
  <h3>Edit department</h3>
  <div id="app-back-button">
   <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">

 <?php  while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { 
   ?>
<form id="formID" name="formID" action="" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value=""></div>
  

    
<div id="form-content">
    <div class="label-field-pair">
      <label for="department_name">Name</label>
      <div class="text-input-bg"> <input id="department_name" name="department_name" size="30" type="text" value="<?=$record['dept_desc']?>" class="validate[required]  text-input"> </div>
    </div>

    <div class="label-field-pair">
      <label for="department_code">Department Code</label>
      <div class="text-input-bg"> <input id="department_code" name="department_code" size="30" type="text" value="<?=$record['dept_code']?>" class="validate[required]  text-input"> </div>
    </div>

    <div class="label-checkbox-pair">
      <label class="status" for="status">Status</label>
      <div id="radio-buttons">
      <input id="department_status" name="department_status" type="radio" value="1" class="validate[required] radio">
      <label class="label_for_status" for="add_grade_status_true">Active</label>

      <input id="department_status" name="department_status" type="radio" value="0" class="validate[required] radio">
      <label class="label_for_status" for="add_grade_status_false">Inactive</label>
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
  <!--<div id="department-list">
    
<ul id="department-list">
  
    <li class="listheading"><div class="department-name">Active Department</div></li>
    
      <li class="listodd">
        <div class="department-name">admin(b)</div>
        <div class="department-edit"><a href="?page=employee-edit_department-49">Edit</a></div>
        <div class="department-edit"><a href="#" onClick="return confirm(&#39;Are You Sure?&#39;);">Delete</a></div>
      </li>
    
      <li class="listeven">
        <div class="department-name">finance (a)</div>
        <div class="department-edit"><a href="#">Edit</a></div>
        <div class="department-edit"><a href="#" onClick="return confirm(&#39;Are You Sure?&#39;);">Delete</a></div>
      </li>
    
      <li class="listodd">
        <div class="department-name">Primary Deaprtment(PD)</div>
        <div class="department-edit"><a href="#">Edit</a></div>
        <div class="department-edit"><a href="#" onClick="return confirm(&#39;Are You Sure?&#39;);">Delete</a></div>
      </li>
    
      <li class="listeven">
        <div class="department-name">System Admin(Admin)</div>
        <div class="department-edit"><a href="#">Edit</a></div>
        <div class="department-edit"><a href="#" onClick="return confirm(&#39;Are You Sure?&#39;);">Delete</a></div>
      </li>
    
      
    
</ul>
  </div>-->
  
  
  
  
  
  

</div> </div>

      <div class="extender"></div>
    </div>

     <!-- footer -->
  <?php include("include/footer.php")?>