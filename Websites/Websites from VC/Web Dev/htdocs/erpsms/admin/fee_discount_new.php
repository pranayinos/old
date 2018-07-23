<?php    $feediscount = new Main(); // create a new news object
	$feediscountcat = $feediscount->getdata('*',"fee_master_particular,fees_master_category","fees_master_category.fee_id=fee_master_particular.fee_category_batch","fee_master_name ASC","");// batch
		$catRecordSet = $feediscount->getdata('*',"category","","cat_id DESC", "50"); //category
		// batch
$batchRecordSet = $feediscount->getdata('*',"course,batch","course.course_code = batch.batch_course_code","course_name ASC","");


  if(isset($_POST['addNew_bt'])) // If the submit button was clicked
    {
   
      // batch entry 
		
			$feepost['fee_discount_name'] =$_POST['fee_discount_name'];
			$feepost['fee_discount_fee_cat'] =$_POST['fee_discount_fee_cat'];
			$feepost['fee_discount_student_cat'] =$_POST['fee_discount_student_cat'];
			$feepost['fee_discount_batch'] =$_POST['fee_discount_batch'];
			$feepost['fee_discount_adm_no'] =$_POST['fee_discount_adm_no'];
			$feepost['fee_discount_per'] =$_POST['fee_discount_per'];
		               
             // print_r($feepost);
       if($feediscount->Inserttable($feepost,"fee_master_discount"))
        {
				$msg="New Master Fee Particular Succesfully in Course";
				header("location:?page=fee_discount_new&msg=$msg");			
		}
		else
		{
			$msg="Error :  Please Check Value";
			header("location:?page=fee_discount_new&error=$msg");
		}
}


	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
 <link href="css/fee_discount_new.css" media="screen" rel="stylesheet" type="text/css">

<!--------- Start head ---------------->

  <script type="text/javascript" src="js/all_validation.js"></script>
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
<img alt="Show_finance" src="../images/show_finance.png">
  <h1>Fee Discounts</h1>
  <h3>Finance Management</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="inner-tab-menu">
  <ul>

        <li><a href="?page=fees_discount">View discount</a></li>
      </ul>

</div>

<div id="page-yield">
  <div id="flash_box">
  </div>
 <form name="myform"  action="" method="post" onSubmit="return validateForm3()" >  

<div id="form-errors">  <div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div></div>
    <div id="batch">
    <div class="label-field-pair"><label>Select discount type : </label>
        <div class="text-input-bg"> <select id="fee_discount_type" name="fee_discount_type" >
        <option value="">Select Discount Type</option>
<option value="batch_wise">Batch</option>
<option value="category_wise">Student Category</option>
<option value="student_wise">Student</option></select> </div>
 </div>
  	<br />
<br />
  </div>

<div id="form-box">




   <div class="label-field-pair">
   
    <label for="reason">Name</label>
    <div class="text-input-bg"><input id="fee_discount_name" name="fee_discount_name" size="30" type="text"></div>
 </div>
 
 <div class="label-field-pair">
    <label>Course - Batch:</label>
    <div class="text-input-bg">
      <select id="fee_discount_batch" name="fee_discount_batch" onChange="">
      <option value="">Select Course-Batch</option>
            <?php 
 while( ($record = $batchRecordSet->getNextRecord()) !== false )
    { 
?>
     
<option value="<?=$record['batch_id']?>"> <?=$record['course_name']." ".$record['course_section_name'].'-'.$record['batch_code']?></option>
<?php }?>
</select></div>
 </div>
 

 <div class="label-field-pair">
    <label>Fee category:</label>
    <div class="text-input-bg">
      <select id="fee_discount_fee_cat" name="fee_discount_fee_cat" onChange="">
      <option value="">Select fees category</option>
      <?php 
 while( ($record = $feediscountcat->getNextRecord()) !== false )
    {
	?>
<option value="<?=$record['particular_id']?>"><?=$record['fee_master_name']." : ".$record['particular_name']?></option>
<?php }?>
</select></div>
 </div>

  <div id="batchs"></div>

 <div class="label-field-pair">
    <label for="reason"> Select Student Category:</label>
    <div class="text-input-bg">
      <select id="fee_discount_student_cat" name="fee_discount_student_cat"><option value="">Select Student Category</option>
  <?php 
 while( ($record = $catRecordSet->getNextRecord()) !== false )
    { 
	?>

<option value="<?=$record['cat_id']?>"><?=$record['category_description']?></option>
<?php }?></select></div>
 </div>


<div class="label-field-pair">
    <label for="reason">Admission No</label>
    <div class="text-input-bg"><input id="fee_discount_adm_no" name="fee_discount_adm_no" size="30" type="text"></div>
 </div>
 
    <div class="label-field-pair">
    <label for="reason"> Discount(%) </label>
    <div class="text-input-bg"><input id="fee_discount_per" name="fee_discount_per" size="30" type="text"></div>
 </div>

    <div id="submit-button">
      <input id="fee_discount_submit" name="addNew_bt" type="submit" value="► Create">
  </div>

    </form></div>

</div> </div>

      <div class="extender"></div>
    </div>

 <!-- footer -->
  <?php include("include/footer.php")?>
           