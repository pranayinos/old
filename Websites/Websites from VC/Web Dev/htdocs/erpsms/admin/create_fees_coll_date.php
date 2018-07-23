<?php    $feecollection = new Main(); // create a new news object
	$feecategory = $feecollection->getdata('*',"fees_master_category","","fee_master_name ASC","");// batch
// batch
$batchRecordSet = $feecollection->getdata('*',"course,batch","course.course_code = batch.batch_course_code","course_name ASC","");
		
		if(isset($_POST['addNew_bt'])) // If the submit button was clicked
  		  {
          $post['fee_coll_name'] =$_POST['fee_coll_name'];
          $post['fee_coll_fee_cat'] =$_POST['fee_coll_fee_cat'];      
          $post['fee_coll_batch_id'] = $_POST['fee_coll_batch_id']; 
          $post['fee_coll_start_date'] =date("Y-m-d", strtotime($_POST['fee_coll_start_date']));
          $post['fee_coll_end_date'] =date("Y-m-d", strtotime($_POST['fee_coll_end_date']));      
          $post['fee_coll_due_date'] = date("Y-m-d", strtotime($_POST['fee_coll_due_date']));        
        if($feecollection->Inserttable($post,"fee_collection_date"))
        {
			 $msg="New Fees Collection Date Added Succesfully";
			header("location:?page=fee_collection_date&msg=$msg");
		}
		else
		{
			$msg="Error :  Please Enter Valid Data";
			header("location:?page=fee_collection_date&error=$msg");
		}


    }
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
 <link href="css/master_fees.css" media="screen" rel="stylesheet" type="text/css">
  <link href="popup/colorbox.css" media="screen" rel="stylesheet" type="text/css">
 <!-- calender -->
    <link href="css/red.css" media="screen" rel="stylesheet" type="text/css">
      <script src="./js/all.js" type="text/javascript"></script>
      <script src="./js/calendar_date_select.js" type="text/javascript"></script>          
       <script type="text/javascript">
      jQuery.noConflict();
  
    </script>
  
<title>Popup Content</title>
<!---Insert the code of 11 sep 2012 validation create particular  fee popup name ---->
 <script type="text/javascript" src="js/all_validation.js"></script>
<!--End the code of validation craete catagory fee popup --->
</head>

<body>

<div id="MB_window" style="overflow: visible; width: 500px; height: 360px; left: 382px; "><div id="MB_frame" style=""><div id="MB_header"><div id="MB_caption"></div></div><div id="MB_content" style=""><label class="head_label">Set fee collection date <span></span></label>

<form name="myform" action="?page=create_fees_coll_date" class="new_finance_fee_collection" id="new_finance_fee_collection" method="post" onSubmit="return validateForm4()">

<div id="form-errors"></div>
<div class="label-field-pair">
  <label for="reason"> Fee category:</label>
    <div class="text-input-bg">
      <select id="fee_coll_fee_cat" name="fee_coll_fee_cat" class="MB_focusable">
 <option value="">Select Fee Category</option>
      <?php 
 while( ($record = $feecategory->getNextRecord()) !== false )
    {
	?>
<option value="<?=$record['fee_id']?>"><?=$record['fee_master_name']?></option>
<?php }?>
</select></div>
  </div>
  <div id="batchs"><div class="label-field-pair">
  <label for="reason"> Course-Batch:</label>
    <div class="text-input-bg">
      <select id="fee_coll_batch_id" name="fee_coll_batch_id" class="MB_focusable">
      <option value="">Select Course-Batch</option>
                <?php 
 while( ($record = $batchRecordSet->getNextRecord()) !== false )
    { 
?>
     
<option value="<?=$record['batch_id']?>"> <?=$record['course_name']." ".$record['course_section_name'].'-'.$record['batch_code']?></option>
<?php }?>
</select></div>
  </div></div>
  <div class="label-field-pair">
    <label for="reason">  Fee Collection Name:</label>
    <div class="text-input-bg"><input id="fee_coll_name" name="fee_coll_name" size="30" type="text" class="MB_focusable"></div>
  </div>
  <div class="label-field-pair">
    <label for="reason">  Start Date:</label>
    <div class="text-input-bg">
    <input id="fee_coll_start_date" name="fee_coll_start_date" type="text" value="<?php echo date("d-M-Y")?>" class="MB_focusable"> <img alt="Calendar" class="calendar_date_select_popup_icon" onclick="new CalendarDateSelect( $(this).previous(), {year_range:10} );" src="./css/calendar.gif" style="border:0px; cursor:pointer;"></div>
  </div>
  <div class="label-field-pair">
    <label for="reason">  End Date:</label>
    <div class="text-input-bg">
    <input id="fee_coll_end_date" name="fee_coll_end_date" type="text" value="<?php echo date("d-M-Y")?>" class="MB_focusable"> <img alt="Calendar" class="calendar_date_select_popup_icon" onclick="new CalendarDateSelect( $(this).previous(), {year_range:10} );" src="./css/calendar.gif" style="border:0px; cursor:pointer;"></div>
  </div>
  <div class="label-field-pair">
    <label for="reason">  Due Date:</label>
    <div class="text-input-bg"><input id="fee_coll_due_date" name="fee_coll_due_date" type="text" value="<?php echo date("d-M-Y")?>" class="MB_focusable"> <img alt="Calendar" class="calendar_date_select_popup_icon" onclick="new CalendarDateSelect( $(this).previous(), {year_range:10} );" src="./css/calendar.gif" style="border:0px; cursor:pointer;"></div>
  </div>

  <div class="extender"></div>
  <div id="submit-button">
      <input class="submit_button MB_focusable" name="addNew_bt" type="submit" value=" Create">
  </div>
</form>
</div></div></div></div>

</body>

</html>