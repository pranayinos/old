<?php
//Grade table be used
$emp_grade = new Main(); 
$newsRecordSet = $emp_grade->getdata('*',"emp_grade","","grade_name DESC", "50");

//Active Grade
$emp_grade = new Main(); 
$status_id=1;
$newsRecordSet1 = $emp_grade->getdata('*',"emp_grade","grade_status='$status_id'","grade_name DESC", "50");
//Inactive Grade
$status_idd=0; 
$newsRecordSet2 = $emp_grade->getdata('*',"emp_grade","grade_status='$status_idd'","grade_name DESC", "50");   

//INSERT CODE IMPLEMENT today sucess
  
 	if(isset($_POST['commit'])) // If the submit button was clicked
   	 {
      // employee add category 
			   $cols['grade_name'] =$_POST['grade_name'];
			   $cols['grade_priority'] =$_POST['grade_priority'];
			  $cols['grade_max_prd_day	'] =$_POST['grade_max_hours_day'];
			 $cols['grade_max_prd_wk'] =$_POST['grade_max_hours_day'];      
			  $cols['grade_status'] =$_POST['grade_status']; 
			  
		  if($emp_grade->Inserttable($cols,"emp_grade"))
           {
				$msg="News Grade Added Succesfully";
				header("location:?page=employee-add_grade&msg=$msg");			
		   }
		   else
		   {
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=employee-add_grade&error=$msg");
		   }		
	 }	
	 
	 
// DELETE CODE IMPLEMENT  [the code of the delete category 2 oct 2012]
     
	    $newsid= $_GET['emp_gradedid'];
		if($newsid!="")  
    {

				if($emp_grade->deleteData("emp_grade","grade_priority='$newsid'"))
				{
				$msg="Deleted Employee Grade  Succesfully";
				header("location:?page=employee-add_grade&id=$emp_gradedid&msg=$msg");		
				}		
				else
				{
				$msg="Error :  Employee Grade not deleted, Please check Values";
				header("location:?page=employee-add_grade&id=$emp_gradedid&error=$msg");
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
  <img alt="Show_hr" src="../images/HR/show_hr.png">
  <h1>Employee Settings</h1>
  <h3>Add Grade</h3>
  <div id="app-back-button">
   <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">
<!-- Insert the msg code ------------------------------------>
    <div class="msg" ><?php echo $_GET[msg]?></div>
    <div class="error" ><?php echo $_GET[error]?></div>
<!-- End the msg code --------------------------------------->
<form id="formID" name="formID" action="" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value=""></div>
  

    
<div id="form-content">
    <div class="label-field-pair">
      <label for="grade_name">Name</label>
      <div class="text-input-bg"> <input id="grade_name" name="grade_name" size="30" type="text" class="validate[required]  text-input"> </div>
    </div>

    <div class="label-field-pair">
      <label for="grade_priority">Priority</label>
      <div class="text-input-bg"> <input id="grade_priority" name="grade_priority" size="30" type="text" class="validate[required]  text-input"> </div>
    </div>

    <div class="label-field-pair">
      <label for="grade_priority">Max period per day</label>
      <div class="text-input-bg"> <input id="grade_max_hours_day" name="grade_max_hours_day" size="30" type="text" class="validate[required]  text-input"> </div>
    </div>

    <div class="label-field-pair">
      <label for="grade_priority">Max period per week</label>
      <div class="text-input-bg"> <input id="grade_max_hours_week" name="grade_max_hours_week" size="30" type="text" class="validate[required]  text-input"> </div>
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
      <input name="commit" type="submit" value="► Create">
    </div>
</div>

</form>
<!--  <div id="grade-list">
    

<ul id="grade-list">
  
    <li class="listheading"><div class="grade-name">Active Grade</div></li>
    
      <li class="listodd">
        <div class="grade-name">level 1(1)</div>
        <div class="grade-edit"><a href="?page=employee-edit_grade-47">Edit</a></div>
        <div class="grade-edit"><a href="#" onClick="return confirm(&#39;Are You Sure?&#39;);">Delete</a></div>
      </li>
    
      <li class="listeven">
        <div class="grade-name">level 2(2)</div>
        <div class="grade-edit"><a href="#">Edit</a></div>
        <div class="grade-edit"><a href="#" onClick="return confirm(&#39;Are You Sure?&#39;);">Delete</a></div>
      </li>
    
      <li class="listodd">
        <div class="grade-name">System Admin(0)</div>
        <div class="grade-edit"><a href="#">Edit</a></div>
        <div class="grade-edit"><a href="#" onClick="return confirm(&#39;Are You Sure?&#39;);">Delete</a></div>
      </li>
    
    
  
</ul>
  </div>-->
<!-- INSERT THE ACTIVE POSITION --------------------->
<div id="grade-list">
<ul id="grade-list">
 <li class="listheading"><div class="grade-name">Active Grade</div></li>  
 <?php 
 while( ($record = $newsRecordSet1->getNextRecord()) !== false )
    { 
	if($i%2==0) $col="listeven";
	else $col="listodd";
	?>
    <li class="<?=$col?>">
     <div class="grade-name"><?=$record['grade_name']?>(<?=$record['grade_priority']?>)</div> 
    <div class="grade-edit"><a href="?page=edit_employee-add_grade&emp_grade_priority=<?=$record['grade_priority']?>" onClick="">Edit</a> </div>
        <div class="category-delete">
<a href="?page=employee-add_grade&emp_gradedid=<?=$record['grade_priority'] ?>"  onClick="return confirm(&#39;Are You Sure?&#39;);">Delete</a>
         
        </div>
      </li>
     
   <?php }?>  
</ul>
  </div>
<!-- END OF THE ACTIVE POSITION ----------------------------->  
<!-- INSERT THE INACTIVE GRADE --------------------->
<div id="grade-list">
<ul id="grade-list">
 <li class="listheading"><div class="grade-name">INActive Grade</div></li>  
 <?php 
 while( ($record = $newsRecordSet2->getNextRecord()) !== false )
    { 
	if($i%2==0) $col="listeven";
	else $col="listodd";
	?>
    <li class="<?=$col?>">
     <div class="grade-name"><?=$record['grade_name']?>(<?=$record['grade_priority']?>)</div> 
    <div class="grade-edit"><a href="?page=edit_employee-add_grade&emp_grade_priority=<?=$record['grade_priority']?>" onClick="">Edit</a> </div>
        <div class="category-delete">
<a href="?page=employee-add_grade&emp_gradedid=<?=$record['grade_priority'] ?>"  onClick="return confirm(&#39;Are You Sure?&#39;);">Delete</a>
         
        </div>
      </li>
     
   <?php }?>  
</ul>
  </div>
<!-- END OF THE INACTIVE GRADE ----------------------------->  
</div> </div>

      <div class="extender"></div>
    </div>

     <!-- footer -->
  <?php include("include/footer.php")?>