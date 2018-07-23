<?php
$emp_payroll = new Main(); 
$emp_payroll_iid=$_GET[emp_payroll_id];	
$newsRecordSet = $emp_payroll->getdata('*',"emp_payroll","emp_pay_roll_id='$emp_payroll_iid'","emp_pay_roll_id DESC", "50");

//Update code run 
 if(isset($_POST['commit'])) // If the submit button was clicked
    { 
 	 		   $emp_cat_id=$_POST['emp_payroll_iid'];
			   $post['emp_cat_name'] =$_POST['category_name'];
			   $post['emp_percent'] =$_POST['category_percentage'];
			   $post['emp_percent_of	'] =$_POST['category_payroll_category_id'];
			   $post['status'] =$_POST['category_status'];
			   $post['emp_is'] =$_POST['category_is_deduction'];
			  
			   if($emp_payroll->updateData($post,"emp_payroll","emp_pay_roll_id='$emp_payroll_iid'"))
				   {
				$msg="Update  Added Succesfully";
				header("location:?page=payroll-add_category&msg=$msg");			
			}
			else
			{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=payroll-add_category&error=$msg");
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
  <h3>Editing category</h3>
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

  <form id="formID" name="formID" action="#" method="post"><div style="margin:0;padding:0;display:inline">
  <input name="authenticity_token" type="hidden" value=""></div>
      

    <div id="form-content">
      <div class="label-field-pair">
        <label for="category_name">Category Name</label>
        <div class="text-input-bg"><input id="category_name" name="category_name" size="30" type="text" value="<?=$record['emp_cat_name']?>" class="validate[required]  text-input"></div>
      </div>

      <div class="label-field-pair">
        <label for="percentage">Percentage</label>
        <div class="text-input-bg"><input id="category_percentage" name="category_percentage" size="30" type="text" value="<?=$record['emp_percent']?>" class="validate[required]  text-input"></div>
      </div>

      <div class="label-field-pair">
        <label for="percentage_of">Percentage of</label>
        <div class="text-input-bg">
          <select id="category_payroll_category_id" name="category_payroll_category_id">
        <option value="">Select</option>
	  <option value="<?=$record['emp_percent_of']?>" selected="selected"><?=$record['emp_percent_of']?></option>
</select>
        </div>
      </div>
 <div class="label-radio-pair">
      <label class="status" for="status">Status</label>
<div id="radio-buttons">
      <input id="category_status" name="category_status" type="radio" value="<?=$record['status']?>" class="validate[required] radio">
      <label class="label_for_status" for="add_grade_status_true">Active</label>

      <input id="category_status" name="category_status" type="radio" value="<?=$record['status']?>" class="validate[required] radio">
      <label class="label_for_status" for="add_grade_status_false">Inactive</label>
    </div>
    </div>
      <div class="label-checkbox">
        <input name="category_is_deduction" type="hidden" value="0"><input id="category_is_deduction" name="category_is_deduction" type="checkbox" value="1"> is deduction?
      </div>
<div class="extender"></div>
   
    <div id="submit-button">
      <input name="commit" type="submit" value="► Update">
    </div>


      </div>
  </form>
<?php } ?>
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

   </div> </div>

      <div class="extender"></div>
    </div>

      <!-- footer -->
  <?php include("include/footer.php")?>