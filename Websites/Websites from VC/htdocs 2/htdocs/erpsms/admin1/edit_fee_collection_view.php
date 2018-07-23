<?php  $fees = new Main(); // create a new news object
$fee_id=$_GET[fee_coll_id];	//fees_master_category
$batchRecordSet = $fees->getdata('*',"fee_collection_date","fee_coll_id= '$fee_id'","fee_coll_id ASC", "");

//<!---------- 12 sep    Code of update query    -------------------------------------------->

	
 if(isset($_POST['updateNew_bt'])) // If the submit button was clicked
    {
      // manage course update 
			 $fee_coll_id=$_POST['fee_id'];
		     $post['fee_coll_name'] =$_POST['finance_fee_collection_name'];
			 $post['fee_coll_start_date'] =$_POST['finance_fee_collection_start_date'];
			  
			   if($fees->updateData($post,"fee_collection_date","fee_coll_id='$fee_id'"))
				 {
				 $msg="News updated Succesfully";
				header("location:?page=fee_collection_view&fee_coll_id=$fee_id&msg=$msg");			
				}
				else
				{
					$msg="Error :  Entry not done, Please check Values";
					header("location:?page=fee_collection_view&fee_coll_id=$fee_id&error=$msg");
				}		
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link media="screen" rel="stylesheet" href="popup/colorbox.css" />
<script src="popup/jquery-latest.min.js" type="text/javascript"></script>
<script src="popup/jquery.colorbox-min.js" type="text/javascript"></script>
 <link href="css/master_fees.css" media="screen" rel="stylesheet" type="text/css">


<!--------- Start head ---------------->
<!-------------Insert the 10 SEP  JQUERY code of validation--------------------------------------------->
  <script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#myform").validationEngine();
			
		});
	</script>
<!-------------End the code of validation--------------------------------------------->    
<!---Insert the code of 11 sep 2012 validation create particular  fee popup name ---->
 <script type="text/javascript" src="js/all_validation.js"></script>
<!--End the code of validation craete catagory fee popup --->
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
  <h1>Edit   Fees Collection Date</h1>
  <h3>Finance Management</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;">
    <img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="page-yield">
 <div id="flash_box">
<div id="message"><div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div></div></div>




<div style="margin:0;padding:0;display:inline">
</div>

    <div id="form-errors"></div>
<div style="" id="MB_frame"><div id="MB_header"><div id="MB_caption"></div>
</div><div style="" id="MB_content"><label class="head_label"></label>

           <?php 
 while( ($record = $batchRecordSet->getNextRecord()) !== false )
    { ?>
    
<form name="myform" id="myform" action="#" method="post" onsubmit="return validateForm5()">
<div style="margin:0;padding:0;display:inline"><input name="" value="" type="hidden"></div>
<div id="form-errors"></div>
  <div class="label-field-pair">
    <label for="reason"> Fee category:</label>
    <div class="text-input-bg"> <span>Test 2 test 2</span></div>
  <div id="batchs"></div>
  </div>
  <div class="label-field-pair">
    <label for="reason"> Course Category:</label>
    <div class="text-input-bg"> <span>0001 - 1a-2012</span></div>
  <div id="batchs"></div>
  </div>
  <div class="label-field-pair">
    <label for="reason">  Fee Collection Name:</label>
    <div class="text-input-bg"><input class="MB_focusable" id="finance_fee_collection_name" name="finance_fee_collection_name" size="30"  type="text" value="<?=$record['fee_coll_name']?>"></div>
  </div>
  <div class="label-field-pair">
    <label for="reason">  Start Date</label>
    <div class="text-input-bg"><input class="MB_focusable" id="finance_fee_collection_start_date" name="finance_fee_collection_start_date" readonly="readonly" value="<?=$record['fee_coll_start_date']?>" type="text"> <img alt="Calendar" class="calendar_date_select_popup_icon" onclick="new CalendarDateSelect( $(this).previous(), {popup:'force', year_range:10} );" src="./css/calendar.gif" style="border:0px; cursor:pointer;"></div>
  </div>
  <div class="label-field-pair">
    <label for="reason">  End Date</label>
    <div class="text-input-bg"><input class="MB_focusable" id="finance_fee_collection[end_date]" name="finance_fee_collection[end_date]" readonly="readonly" value="<?=$record['fee_coll_end_date']?>" type="text"> <img alt="Calendar" class="calendar_date_select_popup_icon" onclick="new CalendarDateSelect( $(this).previous(), {popup:'force', year_range:10} );" src="./css/calendar.gif" style="border:0px; cursor:pointer;"></div>
  </div>
  <div class="label-field-pair">
    <label for="reason">  Due Date</label>
    <div class="text-input-bg"><input class="MB_focusable" id="finance_fee_collection[due_date]" name="finance_fee_collection[due_date]" readonly="readonly" value="<?=$record['fee_coll_due_date']?>" type="text"> <img alt="Calendar" class="calendar_date_select_popup_icon" onclick="new CalendarDateSelect( $(this).previous(), {popup:'force', year_range:10} );" src="./css/calendar.gif" style="border:0px; cursor:pointer;"></div>
  </div>

  <div class="extender"></div>
  <div id="submit-button">
        <input class="submit_button MB_focusable" name="updateNew_bt" value="► Update" type="submit">
  </div>
</form>
</div></div></div>

   
<?php } ?>
 
  


  <div class="box">

    <div class="fee-link"></div>
    
    
    


    <div id="batch"></div>
    <div id="fee_collection_dates"></div>
      
   <div id="modal-box" >




</div>
  </div>


      <div class="extender"></div>
</div>

<!-- footer -->
  <?php include("include/footer.php")?>