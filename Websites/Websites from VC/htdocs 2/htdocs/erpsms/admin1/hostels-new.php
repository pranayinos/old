<?php $hostel = new Main(); 
//$newslist = $add_books->getdata('*',"add_books","","book_number DESC", "1");
//$newsrecord = $newslist->getNextRecord();
//$bid=$newsrecord['book_number'];
$hostel_type = new Main();
$newsRecord = $hostel_type->getdata('*',"hostel_type","","hostel_type ASC", "");
 if(isset($_POST['commit'])) // If the submit button was clicked
    {
	
      // news entry 
			   $cols['hostel_name'] =$_POST['hostel_name'];
			   $cols['hostel_type'] =$_POST['hostel_type'];
			   $cols['other_info'] =$_POST['other_info'];
			   
			   
			   
			   
		if($hostel->Inserttable($cols,"hostel"))
        {
				$msg="Hostel Record Added Succesfully";
				header("location:?page=hostels-new&msg=$msg");			
		}
		else
		{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=hostels-new&error=$msg");
		}		
	}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/new2.css" media="screen" rel="stylesheet" type="text/css">


<!--------- Start head ---------------->
<!--validation--------------------------------------------->
  
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
      <div id="content"> <div id="content-header">
    <img alt="Hostel_small" src="../images/hostels/hostel_small.png">
  <h1>Hostel</h1>
  <h3>Add hostel</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    <li><a href="?page=hostels">View all</a></li>
  </ul>
</div>

<div id="page-yield">
  <div id="vehicle_form">
    <form name="formID" id="formID" action="#" class="new_hostel" id="new_hostel" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM="></div>
       <div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div>

      <div class="label-field-pair">
        <label for="vehicle_no">Hostel Name<span class="necessary-field">*</span> </label>
        <div class="text-input-bg"><input id="hostel_name" name="hostel_name" size="30" type="text"  class="validate[required]  text-input"></div>
      </div>

      <div class="label-field-pair">
        <label for="vehicle_no">Hostel Type<span class="necessary-field">*</span> </label>
        <div class="text-input-bg">
        
        <select id="hostel_hostel_type" name="hostel_type">
        <option value="">----Select----</option>
		<?php
	 while( ($record = $newsRecord->getNextRecord()) !== false )
    {
	?>
        
        <option value="<?=$record['hostel_type_id'];?>"><?=$record['hostel_type'];?></option>
<?php
}
?>
</select></div>
      </div>

      <div class="label-field-pair">
      <div class="label-field-pair-text-area">
        <label for="vehicle_no">Other Information</label>
        <div class="textarea-input-bg"><textarea class="other_info" cols="27" id="hostel_other_info" name="other_info" rows="2"></textarea></div>
      </div></div>
      <input class="submit_button" name="commit" type="submit" value="►Save">
    </form>
  </div>
</div> </div>

      <div class="extender"></div>
    </div>

 <!-- footer -->
  <?php include("include/footer.php")?>