<?php   $fee = new Main(); // create a new news object
	$batchRecordSet = $fee->getdata('*',"course,batch","course.course_code = batch.batch_course_code","course_name ASC","");// batch
	
	   if(isset($_POST['addNew_bt'])) // If the submit button was clicked
    {

       
      // batch entry 
           $feepost['fee_master_name'] =$_POST['finance_fee_category_name'];
		   $feepost['fee_category_description'] =$_POST['finance_fee_category_description'];		   
          $feepost['fee_batch_id']=$_POST['fee_batch_id'];               
             // print_r($feepost);
       if($fee->Inserttable($feepost,"fees_master_category"))
        {
				$msg="New Master Fee Category Succesfully in Course";
				header("location:?page=master_fees&msg=$msg");			
		}
		else
		{
			$msg="Error :  Please Check Value";
			header("location:?page=master_fees&error=$msg");
		}
}
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <link href="css/master_fees.css" media="screen" rel="stylesheet" type="text/css">
  <link href="popup/colorbox.css" media="screen" rel="stylesheet" type="text/css">
    <link href="css/modelbox.css" media="screen" rel="stylesheet" type="text/css">
<title>Popup Content</title>
<!---Insert the code of 10 sep 2012 validation create catagory fee popup name ---->
 <script type="text/javascript" src="js/all_validation.js"></script>
<!--End the code of validation craete catagory fee popup --->
</head>
<body>
Create Fee Category<br />
<br />

<div id="MB_window" style="overflow: visible; width: 500px; height: 250px; left: 382px;">
<div id="MB_frame">
 <form id="myform" name="myform"  action="?page=create_cat" class="new_finance_fee_category" enctype="multipart/form-data"  method="post" onSubmit="return validateForm1()">

<div style="margin:0;padding:0;display:inline">
</div>

    <div id="form-errors"></div>


    <div class="label-field-pair">
      <div class="label-container">
      <label for="finance_fee_category_name">Name</label></div>
      <div class="input-container">
      <input id="finance_fee_category_name" name="finance_fee_category_name" size="30" type="text" class="MB_focusable" title="Your valid email ID.">
      <label id="err1">*</label>
      </div>
    </div>

    <div class="label-field-pair">
      <div class="label-container"><label for="finance_fee_category_Description">Description</label></div>
      <div class="input-container"><input id="finance_fee_category_description" name="finance_fee_category_description" size="30" type="text" class="MB_focusable"></div>
    </div>

    <div class="label-field-pair">
      <div class="label-container"><label>Select a Batch :</label></div>
      
         <div class="input-container">
 <select id="fee_batch_id" name="fee_batch_id" >
   
        <option value="">Select a Course-Batch</option>
          <?php 
 while( ($record = $batchRecordSet->getNextRecord()) !== false )
    { 
?>
     
<option value="<?=$record['batch_id']?>"> <?=$record['course_name']." ".$record['course_section_name'].'-'.$record['batch_code']?></option>
<?php }?></select>
      </div>
      
      
    </div>

    <input class="submit_button MB_focusable" name="addNew_bt" type="submit" value=" Save ">


  </form>
<div>
</div>
</body>

</html>