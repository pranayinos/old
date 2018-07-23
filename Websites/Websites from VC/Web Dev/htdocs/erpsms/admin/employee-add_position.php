<?php
//category table be used
$emp_category = new Main(); 
$newsRecordSet = $emp_category->getdata('*',"emp_category","","emp_cat_id DESC", "50");
//active postion
$emp_position = new Main(); 
$status_id=1;
$newsRecordSet1 = $emp_position->getdata('*',"emp_position","emp_pos_status='$status_id'","emp_posn DESC", "50");
//inactive postion	
$status_idd=0; 
$newsRecordSet2 = $emp_position->getdata('*',"emp_position","emp_pos_status='$status_idd'","emp_posn DESC", "50");   

//INSERT CODE IMPLEMENT 
  
 	if(isset($_POST['commit'])) // If the submit button was clicked
   	 {
      // employee add category 
			   $cols['emp_posn'] =$_POST['position_name'];
			   $cols['emp_cat_type'] =$_POST['position_employee_category_id'];
			   $cols['emp_pos_status'] =$_POST['position_status'];
			  
		  if($emp_category->Inserttable($cols,"emp_position"))
           {
				$msg="News Position Added Succesfully";
				header("location:?page=employee-add_position&msg=$msg");			
		   }
		   else
		   {
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=employee-add_position&error=$msg");
		   }		
	 }	
	 
// DELETE CODE IMPLEMENT  [the code of the delete category 19 SEP 2012]
     
	 $newsid= $_GET['emp_pos_did'];
		if($newsid!="")  
    {

				if($emp_position->deleteData("emp_position","emp_posn_id='$newsid'"))
				{
				$msg="Deleted Employee Position  Succesfully";
				header("location:?page=employee-add_position&id=$emp_pos_did&msg=$msg");		
				}		
				else
				{
				$msg="Error :  Employee Position not deleted, Please check Values";
				header("location:?page=employee-add_position&id=$emp_catdid&error=$msg");
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
  <h3>Add Position</h3>
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
      <label for="position_name">Name</label>
      <div class="text-input-bg"> <input id="position_name" name="position_name" size="30" type="text" class="validate[required]  text-input"> </div>
    </div>

   <div class="label-field-pair">
      <label for="category_name">Employee Category</label>
      <div class="text-input-bg">
      <select id="position_employee_category_id" name="position_employee_category_id" class="validate[required]  text-input">
      <option value="">Select</option>
<?php 
 while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { 
?>
        
<option value="<?=$record['emp_cat_type']?>"><?=$record['emp_cat_type']?></option>

<?php }?>      

</select>





</div>
    </div>

    <div class="label-checkbox-pair">
      <label class="status" for="status">Status</label>
      <div id="radio-buttons">
      <input  id="position_status" name="position_status" type="radio" value="1" class="validate[required] radio">
      <label class="label_for_status" for="add_grade_status_true">Active</label>

      <input id="position_status" name="position_status" type="radio" value="0" class="validate[required] radio">
      <label class="label_for_status" for="add_grade_status_false">Inactive</label>
      </div>
    </div>

    <div id="submit-button">
      <input name="commit" type="submit" value="► Create">
    </div>
    </div>

</form>
<!-- INSERT THE ACTIVE POSITION --------------------->
<div id="position-list">
<ul id="position-list">
<li class="listheading"> <div class="position-name">Active Position</div> </li>
  <?php 
 while( ($record = $newsRecordSet1->getNextRecord()) !== false )
    { 
	if($i%2==0) $col="listeven";
	else $col="listodd";
	?>
    <li class="<?=$col?>">
     <div class="position-name"><?=$record['emp_posn']?>(<?=$record['emp_cat_type']?>)</div> 
    <div class="position-edit"><a href="?page=emp_edit_position&emp_catid=<?=$record['emp_posn_id']?>" onClick="">Edit</a> </div>
        <div class="category-delete">
<a href="?page=employee-add_position&emp_pos_did=<?=$record['emp_posn_id'] ?>"  onClick="return confirm(&#39;Are You Sure?&#39;);">Delete</a>
         
        </div>
      </li>
     
   <?php }?>  
</ul>
  </div>
<!-- END OF THE ACTIVE POSITION ----------------------------->  
<!--   INACTIVE POSITION ---------------------------> 
<div id="position-list">
<ul id="position-list">
<li class="listheading"> <div class="position-name">InActive Position</div> </li>
  <?php 
 while( ($record = $newsRecordSet2->getNextRecord()) !== false )
    { 
	if($i%2==0) $col="listeven";
	else $col="listodd";
	?>
    <li class="<?=$col?>">
     <div class="position-name"><?=$record['emp_posn']?>(<?=$record['emp_cat_type']?>)</div> 
    <div class="position-edit"><a href="?page=emp_edit_position&emp_catid=<?=$record['emp_posn_id']?>" onClick="">Edit</a> </div>
        <div class="category-delete">
<a href="?page=employee-add_position&emp_pos_did=<?=$record['emp_posn_id'] ?>"  onClick="return confirm(&#39;Are You Sure?&#39;);">Delete</a>
         
        </div>
      </li>
     
   <?php }?>  
</ul>
  </div>  

 <!--  END OF  INACTIVE POSITION ---------------------------> 




</div> </div>

      <div class="extender"></div>
    </div>

     <!-- footer -->
  <?php include("include/footer.php")?>