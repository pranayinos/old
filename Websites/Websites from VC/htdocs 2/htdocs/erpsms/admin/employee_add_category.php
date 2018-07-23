<?php 
$emp_category = new Main(); 
$status_id=1;
$newsRecordSet = $emp_category->getdata('*',"emp_category","emp_cat_status='$status_id' and active=1","emp_cat_id DESC", "50");                     //active category

$id=0;
$newsRecordSet1 = $emp_category->getdata('*',"emp_category","emp_cat_status='$id' and active=1","emp_cat_id DESC", "50"); //inactive category

//INSERT CODE IMPLEMENT 
  
 	if(isset($_POST['commit'])) // If the submit button was clicked
   	 {
      // employee add category 
			   $cols['emp_cat_type'] =$_POST['category_name'];
			   $cols['emp_cat_desc'] =$_POST['category_prefix'];
			   $cols['emp_cat_status'] =$_POST['category_status'];
			  
		  if($emp_category->Inserttable($cols,"emp_category"))
           {
				$msg="News Category Added Succesfully";
				header("location:?page=employee_add_category&msg=$msg");			
		   }
		   else
		   {
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=employee_add_category&error=$msg");
		   }		
	 }
	
// DELETE CODE IMPLEMENT  [the code of the delete category 19 SEP 2012]
     
	 $newsid= $_GET['emp_catdid'];
		if($newsid!="")  
    {
$post['active'] ='0';
				//if($emp_category->deleteData("emp_category","emp_cat_id='$newsid'"))
				if($emp_category->updateData($post,"emp_category","emp_cat_id='$newsid'"))
				{
				$msg="Deleted Employee Category  Succesfully";
				header("location:?page=employee_add_category&id=$emp_catdid&msg=$msg");		
				}		
				else
				{
				$msg="Error :  Employee Category not deleted, Please check Values";
				header("location:?page=employee_add_category&id=$emp_catdid&error=$msg");
				}	
	}	
?>        

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/add_category.css" media="screen" rel="stylesheet" type="text/css">
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
  <h3>Employee Category</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<!-- Insert the msg code ------------------------------------>
    <div class="msg" ><?php echo $_GET[msg]?></div>
    <div class="error" ><?php echo $_GET[error]?></div>
<!-- End the msg code --------------------------------------->

<div id="page-yield">
<form id="formID" name="formID" action="#" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value=""></div>
    
    <div id="form-content">
      <div class="label-field-pair">
        <label for="category_name">Name</label>
        <div class="text-input-bg"> <input id="category_name" name="category_name" class="validate[required]  text-input" size="30" type="text"> </div>
      </div>

      <div class="label-field-pair">
        <label for="category_prefix">Prefix</label>
        <div class="text-input-bg"> <input id="category_prefix" name="category_prefix" class="validate[required]  text-input" size="30" type="text"> </div>
      </div>

      <div class="label-checkbox-pair">
        <label class="status" for="status">Status</label>
        <div id="radio-buttons">
          <input id="category_status" name="category_status" type="radio" value="1" class="validate[required] radio">
          <label class="label_for_status" for="add_grade_status_true">Active</label>

          <input id="category_status" name="category_status" type="radio" value="0" class="validate[required] radio">
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
 while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { 
	if($i%2==0) $col="listeven";
	else $col="listodd";
	?>
    <li class="<?=$col?>">
     <div class="category-name"><?=$record['emp_cat_type']?>(<?=$record['emp_cat_desc']?>)</div> 
    <div class="category-edit"><a href="?page=emp_edit_catagory&emp_catid=<?=$record['emp_cat_id']?>" onClick="">Edit</a> </div>
        <div class="category-delete">
<a href="?page=employee_add_category&emp_catdid=<?=$record['emp_cat_id'] ?>"  onClick="return confirm(&#39;Are You Sure?&#39;);">Delete</a>
         
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
 while( ($record1 = $newsRecordSet1->getNextRecord()) !== false )
    { 
	if($i%2==0) $col="listeven";
	else $col="listodd";
	?>
    <li class="<?=$col?>">
     <div class="category-name"><?=$record1['emp_cat_type']?>(<?=$record1['emp_cat_desc']?>)</div> 
    <div class="category-edit"><a href="?page=emp_edit_catagory&emp_catid=<?=$record1['emp_cat_id']?>" onClick="">Edit</a> </div>
        <div class="category-delete">
<a href="?page=employee_add_category&emp_catdid=<?=$record1['emp_cat_id'] ?>"  onClick="return confirm(&#39;Are You Sure?&#39;);">Delete</a>
         
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
  <?php include("include/footer.php")?>