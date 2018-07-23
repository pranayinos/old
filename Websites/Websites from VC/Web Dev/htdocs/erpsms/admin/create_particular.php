<?php   $fee = new Main(); // create a new news object
$feecat=$_GET[catid];
	if($feecat!="")
	{
	$subRecordSet = $fee->getdata('*',"course,batch,fees_master_category","course.course_code = batch.batch_course_code and batch.batch_id=fees_master_category.fee_batch_id and fees_master_category.fee_id='$feecat'","fees_master_category.fee_master_name ASC","");// batch
	}
	else
	{
	$subRecordSet = $fee->getdata('*',"course,batch,fees_master_category","course.course_code = batch.batch_course_code and batch.batch_id=fees_master_category.fee_batch_id","fees_master_category.fee_master_name ASC","");// batch
	}
	
	$catRecordSet = $fee->getdata('*',"category","","cat_id DESC", "50"); //category
	
	   if(isset($_POST['addNew_bt'])) // If the submit button was clicked
    {
   
      // batch entry 
			$feepost['fee_category_batch'] =$_POST['batch_feecat_id'];
			$feepost['particular_name'] =$_POST['finance_fee_particulars_name'];
			$feepost['particular_description'] =$_POST['finance_fee_particulars_description'];
			$feepost['particular_create_using'] =$_POST['createusing'];
			$feepost['particular_adm_no'] =$_POST['finance_fee_particulars_admission_no'];
			$feepost['particular_st_cat'] =$_POST['finance_fee_particulars_student_category_id'];
			$feepost['particular_amt'] =$_POST['finance_fee_particulars_amount'];
		               
             // print_r($feepost);
       if($fee->Inserttable($feepost,"fee_master_particular"))
        {
				$msg="New Master Fee Particular Succesfully in Course";
				header("location:?page=master_fees&msg=$msg");			
		}
		else
		{
			$msg="Error :  Please Check Value";
			header("location:?page=master_fees&error=$msg");
		}
}

 
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <link href="css/master_fees.css" media="screen" rel="stylesheet" type="text/css">
  <link href="popup/colorbox.css" media="screen" rel="stylesheet" type="text/css">
    <link href="css/modelbox.css" media="screen" rel="stylesheet" type="text/css">
<title>Create Particular</title>
<!---Insert the code of 11 sep 2012 validation create particular  fee popup name ---->
 <script type="text/javascript" src="js/all_validation.js"></script>
<!--End the code of validation craete catagory fee popup --->

<script type="text/javascript">
function hide1() {
var div_ref = document.getElementById("text1");
  div_ref.style.visibility = "hidden";
  var div_ref = document.getElementById("radio1");
  div_ref.style.visibility = "hidden";
}
 
 function hide2() {

}
function show1() {
var div_ref = document.getElementById("text1");
  div_ref.style.visibility = "visible";
  var div_ref = document.getElementById("radio1");
  div_ref.style.visibility = "hidden";

}

function show2() {
var div_ref = document.getElementById("text1");
  div_ref.style.visibility = "hidden";
  var div_ref = document.getElementById("radio1");
  div_ref.style.visibility = "visible";

}
</script>
</head>

<body><div id="MB_window" style="overflow: visible; width: 600px; height: 375px; left: 382px; "><div id="MB_frame" style=""><div id="MB_header"><div id="MB_caption"></div></div><div id="MB_content" style=""><div id="modal-box" style="">
<label class="head_label">Create Particular for Master fees category<span></span></label>

<div id="grading-levels-form">

  <form name="myform" action="?page=create_particular" class="new_finance_fee_particulars" id="new_finance_fee_particulars" method="post" onSubmit="return validateForm2()">

    <div id="form-errors"></div>

    <div class="label-field-pair">
      <div class="label-container"><label>Fees Master Category</label> </div>
    <div class="input-container">  <select id="batch_feecat_id" name="batch_feecat_id" >
   
        <option value="">Select a Batch & Fee category</option>
          <?php 
 while( ($record = $subRecordSet->getNextRecord()) !== false )
    { 
	if($feecat!="")
	{
?>
    
<option value="<?=$record['fee_id']?>" selected="selected"> <?=$record['fee_master_name']." : ".$record['course_name']." ".$record['course_section_name'].'-'.$record['batch_code']?></option>
<?php } else {?>
<option value="<?=$record['fee_id']?>"> <?=$record['fee_master_name']." : ".$record['course_name']." ".$record['course_section_name'].'-'.$record['batch_code']?></option>
<?php }}?></select></div>
   </div>

  <div class="label-field-pair">
    <div class="label-container"> <label for="finance_fee_particulars_Name">Particular Name</label></div>
    <div class="input-container"><input id="finance_fee_particulars_name" name="finance_fee_particulars_name" size="30" type="text" class="MB_focusable"></div>
   </div>

   <div class="label-field-pair">
    <div class="label-container"><label for="finance_fee_particulars_Description">Description</label></div>
    <div class="input-container"><input id="finance_fee_particulars_description" name="finance_fee_particulars_description" size="30" type="text" class="MB_focusable"></div>
   </div>
    <div class="label-field-pair2" style="margin-bottom:120px;">
      <div class="label-container2"><label>Create using</label></div>
      <div class="input-container2">
      <div class="opt">
       
      <input id="createusing" name="createusing" type="radio" value="all" class="MB_focusable" onclick="hide1();" checked="checked">All</div>
      
     <div class="opt">
    <input id="createusing" name="createusing"  type="radio" value="student" class="MB_focusable" onclick="show1();">Admission no</div>
        <div class="opt">
     <input id="createusing" name="createusing"  type="radio" value="category" class="MB_focusable" onclick="show2();">Student Category </div>
      </div>
      
    </div>
<div id=text1 style="visibility:hidden;">
<div id="student">
<div class="label-field-pair">

    <div class="label-container">
      <label> Admission number :</label></div>
   
   <div class="input-container"> <input id="finance_fee_particulars_admission_no" name="finance_fee_particulars_admission_no" size="30" type="text"></div>
</div></div></div>
<div id=radio1 style="visibility:hidden;">

  <div id="student">
<div class="label-field-pair">

    <div class="label-container"><label>Student Category:</label></div>
   <div class="input-container">
    <select id="finance_fee_particulars_student_category_id" name="finance_fee_particulars_student_category_id">
       <option value="">Select category</option>
        <?php 
 while( ($record = $catRecordSet->getNextRecord()) !== false )
    { 
	?>

<option value="<?=$record['cat_id']?>"><?=$record['category_description']?></option>
<?php }?>
</select></div></div></div></div>

  <div class="label-field-pair">
    <div class="label-container"><label for="finance_fee_particulars_Amount">Amount</label></div>
    <div class="input-container"> <input id="finance_fee_particulars_amount" name="finance_fee_particulars_amount" size="30" type="text" class="MB_focusable"></div>
   </div>

<input class="submit_button MB_focusable" name="addNew_bt" type="submit" value="► Create">

</form>
</div>
</div></div></div></div>
</body>

</html>