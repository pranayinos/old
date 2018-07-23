<?php  // create page 10 nov 2012
$emp_additional = new Main(); 
$newsRecordSet = $emp_additional->getdata('*',"emp_additional","","id DESC", "50");                     //category

$status_id=1;
$newsRecordSet1 = $emp_additional->getdata('*',"emp_additional","status='$status_id'","id DESC", "50");                     //active category
$id=0;
$newsRecordSet2 = $emp_additional->getdata('*',"emp_additional","status='$id'","id DESC", "50"); //inactive category

//INSERT CODE IMPLEMENT 
  
 	if(isset($_POST['commit'])) // If the submit button was clicked
   	 {
      // employee add category 
			   $cols['name'] =$_POST['additional_field_name'];
			   $cols['status'] =$_POST['additional_field_status'];
			   
			  
		  if($emp_additional->Inserttable($cols,"emp_additional"))
           {
				$msg="News Category Added Succesfully";
				header("location:?page=employee-add_additional_details&msg=$msg");			
		   }
		   else
		   {
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=employee-add_additional_details&error=$msg");
		   }		
	 }
	
// DELETE CODE IMPLEMENT  [the code of the delete category 19 SEP 2012]
     
	 $did= $_GET['id'];
		if($did!="")  
    {

				if($emp_additional->deleteData("emp_additional","id='$did'"))
				{
				$msg="Deleted Employee Category  Succesfully";
				header("location:?page=employee-add_additional_details&rid=$id&msg=$msg");		
				}		
				else
				{
				$msg="Error :  Employee Category not deleted, Please check Values";
				header("location:?page=employee-add_additional_details&rid=$id&error=$msg");
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
    
    <div id="form-content">
      <div class="label-field-pair">
        <label for="category_name">Name</label>
        <div class="text-input-bg"> <input id="additional_field_name" name="additional_field_name" class="validate[required]  text-input" size="30" type="text"> </div>
      </div>

      <div class="label-checkbox-pair">
        <label class="status" for="status">Status</label>
        <div id="radio-buttons">
          <input id="additional_field_status" name="additional_field_status" type="radio" value="1" class="validate[required] radio">
          <label class="label_for_status" for="add_grade_status_true">Active</label>

          <input id="additional_field_status" name="additional_field_status" type="radio" value="0" class="validate[required] radio">
          <label class="label_for_status" for="add_grade_status_false">Inactive</label>
        </div>
      </div>

      <div id="submit-button">
        <input name="commit" type="submit" value="► Create">
      </div>
    </div>


</form>
  <div id="category-list">
    
<ul id="category-list">
 <li class="listheading"> <div class="category-name">Active Category </div> </li>
  <?php 
 while( ($record = $newsRecordSet1->getNextRecord()) !== false )
    { 
	if($i%2==0) $col="listeven";
	else $col="listodd";
	?>
    <li class="<?=$col?>">
     <div class="category-name"><?=$record['name']?></div> 
    <div class="category-edit"><a href="?page=edit_employee-add_additional_details&eid=<?=$record['id']?>" onClick="">Edit</a> </div>
        <div class="category-delete">
<a href="?page=employee-add_additional_details&id=<?=$record['id'] ?>"  onClick="return confirm(&#39;Are You Sure?&#39;);">Delete</a>
         
        </div>
      </li>
     
   <?php }?>  
   
</ul>
</div>
<!-- Insert the code of inactive category --------------->
<div id="category-list">
<ul id="category-list">
 <li class="listheading"> <div class="category-name">Inactive Category </div> </li>
  <?php 
 while( ($record1 = $newsRecordSet2->getNextRecord()) !== false )
    { 
	if($i%2==0) $col="listeven";
	else $col="listodd";
	?>
    <li class="<?=$col?>">
     <div class="category-name"><?=$record1['name']?></div> 
    <div class="category-edit"><a href="?page=edit_employee-add_additional_details&eid=<?=$record1['id']?>" onClick="">Edit</a> </div>
        <div class="category-delete">
<a href="?page=employee-add_additional_details&id=<?=$record1['id'] ?>"  onClick="return confirm(&#39;Are You Sure?&#39;);">Delete</a>
         
        </div>
      </li>
     
   <?php }?>  
   
</ul>
</div>
<!---End of the inactive category --------------->
</div> </div>

      <div class="extender"></div>
    </div>

     <!-- footer -->
  </div> </div>

      <div class="extender"></div>
    </div>

     <!-- footer -->
  <?php include("include/footer.php")?>