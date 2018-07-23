<?php $emp_leave = new Main(); 
$status_id=1;
$newsRecordSet = $emp_leave->getdata('*',"emp_leave","leave_status='$status_id'","leave_id DESC", "50");                     //active category

$id=0;
$newsRecordSet1 = $emp_leave->getdata('*',"emp_leave","leave_status='$id'","leave_id DESC", "50"); //inactive category

 if(isset($_POST['commit'])) // If the submit button was clicked
    {
      // emp leave  entry 
			   $cols['leave_name'] =$_POST['leave_type_name'];
			     $cols['leave_code'] =$_POST['leave_type_code'];
				   $cols['leave_max_count'] =$_POST['leave_type_max_leave_count'];
				    
					   $cols['leave_status'] =$_POST['leave_type_status'];
			  // $cols['news_desc'] =$_POST['news_desc'];
			   
			   
			   
			      if($emp_leave->Inserttable($cols,"emp_leave"))
        {
				$msg="Emp leave  Added Succesfully";
				header("location:?page=employee_attendance-add_leave_types&msg=$msg");			
		}
		else
		{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=employee_attendance-add_leave_types&error=$msg");
		}		
	}
// DELETE CODE IMPLEMENT  [the code of the delete category 19 SEP 2012]
     
	 $newsid= $_GET['emp_did'];
		if($newsid!="")  
    {

				if($emp_leave->deleteData("emp_leave","leave_id='$newsid'"))
				{
				$msg="Deleted Employee Category  Succesfully";
				header("location:?page=employee_attendance-add_leave_types&id=$newsid&msg=$msg");		
				}		
				else
				{
				$msg="Error :  Employee Category not deleted, Please check Values";
				header("location:?page=employee_attendance-add_leave_types&id=$emp_did&error=$msg");
				}	
	}		
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/add_leave_types.css" media="screen" rel="stylesheet" type="text/css">
 <!--------- Start head ---------------->
 <!-------------Insert the 3 oct  code of validation--------------------------------------------->
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
  <img alt="Leave-new" src="../images/leave-new.png">
  <h1>Leave types</h1>
  <h3>Add new leave types</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>





<div id="page-yield">

  
  <div class="box">
    <form action="#" id="formID" name="formID" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60="></div>
        <div class="msg"><?php echo $_GET[msg]?></div>
 <div class="error"><?php echo $_GET[error]?></div>
      <div id="form-content">
        <div class="label-field-pair">
          <label for="category_name">Leave name</label>
          <div class="text-input-bg"><input id="leave_type_name" name="leave_type_name" size="30" type="text" class="validate[required]  text-input"></div>
        </div>

        <div class="label-field-pair">
          <label for="category_name">Leave code</label>
          <div class="text-input-bg"><input id="leave_type_code" name="leave_type_code" size="30" type="text" class="validate[required]  text-input"></div>
        </div>

        <div class="label-field-pair">
          <label for="category_name">Maximum leave count</label>
          <div class="text-input-bg"><input id="leave_type_max_leave_count" name="leave_type_max_leave_count" size="30" type="text" class="validate[required]  text-input"></div>
        </div>
        <div class="extender"></div>

        <!--<div class="label-field-pair">
          <label for="category_name">Enable Carry Forward</label>
          <div class="check_box"><input name="leave_type[carry_forward]" type="hidden" value="0"><input id="leave_type_carry_forward" name="leave_type_carry_forward" type="checkbox" value="1"></div>
        </div>-->

        <div class="label-radio-pair">
          <label class="status">Status</label>

          <input  id="leave_type_status" name="leave_type_status" type="radio" value="1" class="validate[required] radio">
          <label class="label_for_status" for="add_grade_status_true">Active</label>

          <input id="leave_type_status" name="leave_type_status" type="radio" value="0" class="validate[required] radio">
          <label class="label_for_status" for="add_grade_status_false">Inactive</label>
        </div>

        <div id="submit-button">
          <input name="commit" type="submit" value="► Create">
        </div>
      </div></form></div>
  

  <div id="leave_type-list">
    




<ul class="leave-type-list">

 <!-- <li class="listheading"><div class="leave-type-name">Active Leave types </div></li>
      <li class="listodd">
        <div class="leave-type-name">Casual -c</div>
        <div class="leave-type-edit"><a href="?page=employee_attendance-edit_leave_types-4">Edit</a></div>
        <div class="leave-type-edit"><a href="?page=employee_attendance-edit_leave_types-4" onClick="return confirm(&#39;Are You Sure?&#39;);">Delete</a></div>
        <div class="leave-type-edit"></div>
        </li>
           <li class="listeven">
        <div class="leave-type-name">Sick-s</div>
        <div class="leave-type-edit"><a href="http://demo.fedena.org/employee_attendance/edit_leave_types/5">Edit</a></div>
        <div class="leave-type-edit"><a href="http://demo.fedena.org/employee_attendance/delete_leave_types/5" onClick="return confirm(&#39;Are You Sure?&#39;);">Delete</a></div>
        <div class="leave-type-edit"></div>
        </li>-->
    <li class="listheading"> <div class="category-name">Active Category </div> </li>
  <?php 
 while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { 
	if($i%2==0) $col="listeven";
	else $col="listodd";
	?>
    <li class="<?=$col?>">
     <div class="leave-type-name"><?=$record['leave_name']?>(<?=$record['leave_name']?>)</div> 
    <div class="leave-type-edit"><a href="?page=emp_edit_leave&emp_id=<?=$record['leave_id']?>" onClick="">Edit</a> </div>
        <div class="category-delete">
<a href="?page=employee_attendance-add_leave_types&emp_did=<?=$record['leave_id'] ?>"  onClick="return confirm(&#39;Are You Sure?&#39;);">Delete</a>
         
        </div>
      </li>
     
   <?php }?>  
    

  
</ul>

  </div>
  
  
  
  
  
  
  
  
  
  
  
  <div id="leave_type-list">
    




<ul class="leave-type-list">

 <!-- <li class="listheading"><div class="leave-type-name">Active Leave types </div></li>
      <li class="listodd">
        <div class="leave-type-name">Casual -c</div>
        <div class="leave-type-edit"><a href="?page=employee_attendance-edit_leave_types-4">Edit</a></div>
        <div class="leave-type-edit"><a href="?page=employee_attendance-edit_leave_types-4" onClick="return confirm(&#39;Are You Sure?&#39;);">Delete</a></div>
        <div class="leave-type-edit"></div>
        </li>
           <li class="listeven">
        <div class="leave-type-name">Sick-s</div>
        <div class="leave-type-edit"><a href="http://demo.fedena.org/employee_attendance/edit_leave_types/5">Edit</a></div>
        <div class="leave-type-edit"><a href="http://demo.fedena.org/employee_attendance/delete_leave_types/5" onClick="return confirm(&#39;Are You Sure?&#39;);">Delete</a></div>
        <div class="leave-type-edit"></div>
        </li>-->
    <li class="listheading"> <div class="leave-type-name">InActive Leave Type </div> </li>
    
  <?php 
 while( ($record = $newsRecordSet1->getNextRecord()) !== false )
    { 
	if($i%2==0) $col="listeven";
	else $col="listodd";
	?>
    <li class="<?=$col?>">
     <div class="leave-type-name"><?=$record['leave_name']?>(<?=$record['leave_name']?>)</div> 
    <div class="leave-type-edit"><a href="?page=emp_edit_leave&emp_id=<?=$record['leave_id']?>" onClick="">Edit</a> </div>
        <div class="category-delete">
<a href="?page=employee_attendance-add_leave_types&emp_did=<?=$record['leave_id'] ?>"  onClick="return confirm(&#39;Are You Sure?&#39;);">Delete</a>
         
        </div>
      </li>
     
   <?php }?>  
    

  
</ul>

  </div>

</div> </div>

      <div class="extender"></div>
    </div>

    <!-- footer -->
  <?php include("include/footer.php")?>