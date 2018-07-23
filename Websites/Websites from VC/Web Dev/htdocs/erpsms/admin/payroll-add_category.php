<?php
//Grade table be used
$emp_payroll = new Main(); 
$newsRecordSet = $emp_payroll->getdata('*',"emp_payroll","","emp_pay_roll_id DESC", "50");


//Active 
$emp_payroll = new Main(); 
$status_idd=1; 
$newsRecordSet1 = $emp_payroll->getdata('*',"emp_payroll","status='$status_idd'","emp_pay_roll_id DESC", "50"); 

//Inactive
$emp_payroll = new Main(); 
$status_id=0;
$newsRecordSet2 = $emp_payroll->getdata('*',"emp_payroll","status='$status_id'","emp_pay_roll_id DESC", "50");
  

//INSERT CODE IMPLEMENT today sucess
  
 	if(isset($_POST['commit'])) // If the submit button was clicked
   	 {
      // employee add category   
	  $cols['emp_cat_name'] =$_POST['category_name'];
			   $cols['emp_percent'] =$_POST['category_percentage'];
			   $cols['emp_percent_of'] =$_POST['category_payroll_category_id'];
			  $cols['status'] =$_POST['category_status'];
			 $cols['emp_is'] =$_POST['category_is_deduction'];      
			
			  
		  if($emp_payroll->Inserttable($cols,"emp_payroll"))
           {
				$msg="News Payroll Added Succesfully";
				header("location:?page=payroll-add_category&msg=$msg");			
		   }
		   else
		   {
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=payroll-add_category&error=$msg");
		   }		
	 }	
	 
	 
// DELETE CODE IMPLEMENT  [the code of the delete category 2 oct 2012]
     
	   $newsid= $_GET['emp_payroll_did'];
		if($newsid!="")  
    {

				if($emp_payroll->deleteData("emp_payroll","emp_pay_roll_id='$newsid'"))
				{
				$msg="Deleted Employee Payroll  Succesfully";
				header("location:?page=payroll-add_category&id=$emp_payroll_did&msg=$msg");		
				}		
				else
				{
				$msg="Error :  Employee Payroll not deleted, Please check Values";
				header("location:?page=payroll-add_category&id=$emp_payroll_did&error=$msg");
				}	
	}		 
	 
	 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/payroll_add_category.css" media="screen" rel="stylesheet" type="text/css">
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
  <h1>Payroll</h1>
  <h3>Add new category</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>





   <div id="page-yield">
<!-- Insert the msg code ------------------------------------>
    <div class="msg" ><?php echo $_GET[msg]?></div>
    <div class="error" ><?php echo $_GET[error]?></div>
<!-- End the msg code --------------------------------------->
  

  <form id="formID" name="formID" action="#" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value=""></div>
      

    <div id="form-content">
      <div class="label-field-pair">
        <label for="category_name">Category Name</label>
        <div class="text-input-bg"><input id="category_name" name="category_name" size="30" type="text" class="validate[required]  text-input"></div>
      </div>

      <div class="label-field-pair">
        <label for="percentage">Percentage</label>
        <div class="text-input-bg"><input id="category_percentage" name="category_percentage" size="30" type="text" class="validate[required]  text-input"></div>
      </div>

      <div class="label-field-pair">
        <label for="percentage_of">Percentage of</label>
        <div class="text-input-bg">
          <select id="category_payroll_category_id" name="category_payroll_category_id"><option value="">Select</option>
<option value="10">basic</option>
<option value="11">hra</option></select>
        </div>
      </div>
 <div class="label-radio-pair">
      <label class="status" for="status">Status</label>
<div id="radio-buttons">
      <input  id="category_status" name="category_status" type="radio" value="1" class="validate[required] radio">
      <label class="label_for_status" for="add_grade_status_true">Active</label>

      <input id="category_status" name="category_status" type="radio" value="0" class="validate[required] radio">
      <label class="label_for_status" for="add_grade_status_false">Inactive</label>
    </div>
    </div>
      <div class="label-checkbox">
        <input name="category_is_deduction" type="hidden" value="0"><input id="category_is_deduction" name="category_is_deduction" type="checkbox" value="1"> is deduction?
      </div>
<div class="extender"></div>
   
    <div id="submit-button">
      <input name="commit" type="submit" value="► Create">
    </div>


      </div>
  </form>

  <!--<div id="category-list">
    

<ul class="category-list">
  
    <li class="heading">Earnings</li>
      <li class="listodd">
        <div class="category-name">basic</div>
        <div class="category-edit"><a href="?page=payroll-edit_category-10">Edit</a></div>
        <div class="category-edit"><a href="#" onClick="return confirm(&#39;Are You Sure?&#39;);">Delete</a></div>
        
          <div class="category-edit"><a href="#" onClick="if (confirm(&#39;Are you sure you want to inactivate this Category?&#39;)) { new Ajax.Updater(&#39;category-list&#39;, &#39;/payroll/inactivate_category/10&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); }; return false;">Inactivate</a></div>
          
      </li>
          <li class="listeven">
        <div class="category-name">hra</div>
        <div class="category-edit"><a href="#">Edit</a></div>
        <div class="category-edit"><a href="#" onClick="return confirm(&#39;Are You Sure?&#39;);">Delete</a></div>
        
          <div class="category-edit"><a href="#" onClick="if (confirm(&#39;Are you sure you want to inactivate this Category?&#39;)) { new Ajax.Updater(&#39;category-list&#39;, &#39;/payroll/inactivate_category/11&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); }; return false;">Inactivate</a></div>
          
      </li>
    
  
</ul>

<ul class="category-list">
  
    <li class="heading">Deductions</li>
      <li class="listodd">
        <div class="category-name">PF</div>
        <div class="category-edit"><a href="#">Edit</a></div>
        <div class="category-edit"><a href="#" onClick="return confirm(&#39;Are You Sure?&#39;);">Delete</a></div>
        
          <div class="category-edit"><a href="#" onClick="if (confirm(&#39;Are you sure you want to inactivate this Category?&#39;)) { new Ajax.Updater(&#39;category-list&#39;, &#39;/payroll/inactivate_category/12&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); }; return false;">Inactivate</a></div>
          
      </li>
    
  
</ul>
  </div>
-->
<!-- INSERT THE Earnings POSITION --------------------->
<div id="category-list">

<ul class="category-list">
 <li class="heading">Earnings</li>
 <?php 
 while( ($record = $newsRecordSet1->getNextRecord()) !== false )
    { 
	if($i%2==0) $col="listeven";
	else $col="listodd";
	?>
    <li class="<?=$col?>">
     <div class="category-name"><?=$record['emp_cat_name']?></div> 
    <div class="category-edit"><a href="?page=edit_payroll-add_category&emp_payroll_id=<?=$record['emp_pay_roll_id']?>" onClick="">Edit</a> </div>
<div class="category-edit"><a href="?page=payroll-add_category&emp_payroll_did=<?=$record['emp_pay_roll_id'] ?>"  onClick="return confirm(&#39;Are You Sure?&#39;);">Delete</a></div>

 <!--<div class="category-edit"><a href="#" onClick="if (confirm(&#39;Are you sure you want to inactivate this Category?&#39;)) { new Ajax.Updater(&#39;category-list&#39;, &#39;/payroll/inactivate_category/10&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); }; return false;">Inactivate</a></div>-->
         
       
      </li>
     
   <?php }?>  
</ul>
  </div>
<!-- END OF THE Earnings POSITION -----------------------------> 

<!-- INSERT THE Deductions POSITION --------------------->
<div id="category-list">

<ul class="category-list">
 <li class="heading">Deductions</li>
 <?php 
 while( ($record = $newsRecordSet2->getNextRecord()) !== false )
    { 
	if($i%2==0) $col="listeven";
	else $col="listodd";
	?>
    <li class="<?=$col?>">
     <div class="category-name"><?=$record['emp_cat_name']?></div> 
    <div class="category-edit"><a href="?page=edit_payroll-add_category&emp_payroll_id=<?=$record['emp_pay_roll_id']?>" onClick="">Edit</a> </div>
<div class="category-edit"><a href="?page=payroll-add_category&emp_payroll_did=<?=$record['emp_pay_roll_id'] ?>"  onClick="return confirm(&#39;Are You Sure?&#39;);">Delete</a></div>

<!-- <div class="category-edit"><a href="#" onClick="if (confirm(&#39;Are you sure you want to inactivate this Category?&#39;)) { new Ajax.Updater(&#39;category-list&#39;, &#39;/payroll/inactivate_category/10&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)}); }; return false;">Inactivate</a></div>-->
         
       
      </li>
     
   <?php }?>  
</ul>
  </div>
<!-- END OF THE Deductions POSITION -----------------------------> 
   </div> </div>

      <div class="extender"></div>
    </div>

      <!-- footer -->
  <?php include("include/footer.php")?>