<?php
// Employee Admission 
$emp_bank = new Main(); 
$newsRecordSet = $emp_bank->getdata('*',"emp_bank","","emp_bank_id DESC", "50");  

//Active 
$emp_bank = new Main(); 
$status_idd=1; 
$newsRecordSet1 = $emp_bank->getdata('*',"emp_bank","emp_bank_status='$status_idd'","emp_bank_id DESC", "50"); 

//Inactive
$emp_bank = new Main(); 
$status_id=0;
$newsRecordSet2 = $emp_bank->getdata('*',"emp_bank","emp_bank_status='$status_id'","emp_bank_id DESC", "50");



//INSERT CODE IMPLEMENT today sucess
   	if(isset($_POST['commit'])) // If the submit button was clicked
   	 {
      // employee add category   
	  $cols['emp_bank_name'] =$_POST['bank_field_name'];
	  $cols['emp_bank_status'] =$_POST['bank_field_status'];
			  
			  
		  if($emp_bank->Inserttable($cols,"emp_bank"))
           {
				$msg="News Payroll Added Succesfully";
				header("location:?page=employee-add_bank_details&msg=$msg");			
		   }
		   else
		   {
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=employee-add_bank_details&error=$msg");
		   }		
	 }
	 
	 
// DELETE CODE IMPLEMENT  [the code of the delete category 2 oct 2012]
     
	   $newsid= $_GET['emp_bank_did'];
		if($newsid!="")  
    {

				if($emp_bank->deleteData("emp_bank","emp_bank_id='$newsid'"))
				{
				$msg="Deleted Employee Bank Deatils  Succesfully";
				header("location:?page=employee-add_bank_details&id=$emp_bank_did&msg=$msg");		
				}		
				else
				{
				$msg="Error :  Employee Bank Details  not deleted, Please check Values";
				header("location:?page=employee-add_bank_details&id=$emp_bank_did&error=$msg");
				}	
	}		 	 
	 	
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/add_bank_details.css" media="screen" rel="stylesheet" type="text/css">
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
  <h3>Add Bank Details</h3>
  <div id="app-back-button">
      <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">
<!-- Insert the msg code ------------------------------------>
    <div class="msg" ><?php echo $_GET[msg]?></div>
    <div class="error" ><?php echo $_GET[error]?></div>
<!-- End the msg code --------------------------------------->
  
    <p class="flash-msg"> Bank field created </p>
  

<form id="formID" name="formID" action="#" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value=""></div>
      
      <div id="form-content">
        <div class="label-field-pair">
          <label for="category_name">Name</label>
          <div class="text-input-bg"> <input id="bank_field_name" name="bank_field_name" size="30" type="text" class="validate[required]  text-input"> </div>
        </div>

        <div class="label-checkbox-pair">
          <label class="status" for="status">Status</label>
          <div id="radio-buttons">
            <input id="bank_field_status" name="bank_field_status" type="radio" value="1" class="validate[required] radio">
            <label class="label_for_status" for="add_grade_status_true">Active</label>

            <input id="bank_field_status" name="bank_field_status" type="radio" value="0" class="validate[required] radio">
            <label class="label_for_status" for="add_grade_status_false">Inactive</label>
          </div>
        </div>

        <div id="submit-button">
          <input name="commit" type="submit" value="► Create">
        </div>
      </div>


</form>
   <!-- <div id="category-list">
      
<ul id="category-list">
  
  
    <li class="listheading"><div class="category-name">Active Bank fields</div></li>
    
      <li class="listodd">
        <div class="category-name">sachin</div>
        <div class="category-edit"><a href="?page=employee-edit_bank_details-1">Edit</a></div>
        <div class="category-edit"><a href="#" onClick="return confirm(&#39;Are You Sure?&#39;);">Delete</a></div>
      </li>
</ul>
</div>-->
<!-- INSERT THE Active Bank Fields --------------------->
<div id="category-list">

<ul class="category-list">
 <li class="heading">Active Bank Fields</li>
 <?php 
 while( ($record = $newsRecordSet1->getNextRecord()) !== false )
    { 
	if($i%2==0) $col="listeven";
	else $col="listodd";
	?>
    <li class="<?=$col?>">
     <div class="category-name"><?=$record['emp_bank_name']?></div> 
    <div class="category-edit"><a href="?page=edit_employee-add_bank_details&emp_payroll_id=<?=$record['emp_bank_id']?>" onClick="">Edit</a> </div>
<div class="category-edit"><a href="?page=employee-add_bank_details&emp_bank_did=<?=$record['emp_bank_id'] ?>"  onClick="return confirm(&#39;Are You Sure?&#39;);">Delete</a></div>
</li>
        <?php }?>  
</ul>
  </div>
<!-- END OF Active Bank Fields -----------------------------> 
<!-- INSERT THE INActive Bank Fields --------------------->
<div id="category-list">

<ul class="category-list">
 <li class="heading">Inactive Bank Fields</li>
 <?php 
 while( ($record = $newsRecordSet2->getNextRecord()) !== false )
    { 
	if($i%2==0) $col="listeven";
	else $col="listodd";
	?>
    <li class="<?=$col?>">
     <div class="category-name"><?=$record['emp_bank_name']?></div> 
    <div class="category-edit"><a href="?page=edit_employee-add_bank_details&emp_payroll_id=<?=$record['emp_bank_id']?>" onClick="">Edit</a> </div>
<div class="category-edit"><a href="?page=employee-add_bank_details&emp_bank_did=<?=$record['emp_bank_id'] ?>"  onClick="return confirm(&#39;Are You Sure?&#39;);">Delete</a></div>
</li>
        <?php }?>  
</ul>
  </div>
<!-- END OF INActive Bank Fields -----------------------------> 
</div> </div>

      <div class="extender"></div>
    </div>

     <!-- footer -->
  <?php include("include/footer.php")?>