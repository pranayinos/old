<?php  
$feediscount = new Main(); // create a new news object

$id=$_GET[fee_discount_id];	//fees_master_category

$feediscountcat = $feediscount->getdata('*',"fee_master_discount","fee_discount_id='$id'","","");
	
//<!---------- 11 sep  Code of update query    -------------------------------------------->

	
 if(isset($_POST['updateNew_bt'])) // If the submit button was clicked
    {
      // manage course update 
			 $fee_discount_id=$_POST['id'];
		     $post['fee_discount_name'] =$_POST['finance_fee_category_name'];
			 //$post['fee_category_description'] =$_POST['finance_fee_category_description'];
			  
			   if($feediscount->updateData($post," fee_master_discount","fee_discount_id='$id'"))
				 {
				 $msg="News updated Succesfully";
				 header("location:?page=fees_discount&fee_discount_id=$id&msg=$msg");			
				}
				else
				{
					$msg="Error :  Entry not done, Please check Values";
					//header("location:?page=master_fees&id=$fee_id&error=$msg");
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

<!---Insert the code of 12 sep 2012 validation edit_master_fees  ---->
 <script type="text/javascript" src="js/all_validation.js"></script>
<!--- End the code of validation edit_master_fees  ---------------->

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
  <h1>Edit Fees Discount</h1>
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

           <?php 
 while( ($record = $feediscountcat->getNextRecord()) !== false )
    { ?>
    
   <form id="myform" name="myform"  action="#" class="new_student" enctype="multipart/form-data"  method="post" onsubmit="return validateForm7()">

<div style="margin:0;padding:0;display:inline">
</div>

    <div id="form-errors"></div>


    <div class="label-field-pair">
      <div class="label-container">
      <label for="finance_fee_category_name">Name</label></div>
      <div class="input-container">
     <input id="finance_fee_category_name" name="finance_fee_category_name" size="30" type="text"  value="<?=$record['fee_discount_name']?>">
      <label id="err1"></label>
       
      </div>

  
    <div class="label-field-pair">
      <div class="label-container">
        <label for="finance_fee_category_Description">Discount(%)</label></div>
      <div class="input-container">
        <input id="finance_fee_category_description"  name="finance_fee_category_description"  size="30" type="text" class="MB_focusable" value="<?=$record['fee_discount_per']?>" disabled="disabled"></div>
    </div>

    
      
      
    </div>

    <input class="submit_button" name="updateNew_bt" type="submit" value=" Save " title="submit form">


  </form>
<?php } ?>
  </div>
  
  <div id="message"><div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div></div></div>

  <div class="box">

    <div class="fee-link"></div>
    
    
    


    <div id="batch"></div>
    <div id="fee_collection_dates"></div>
      
   <div id="modal-box" >




</div>
  </div>
</div> </div>

      <div class="extender"></div>
    </div>

<!-- footer -->
