<?php $hostel = new Main(); 
$id=$_GET[id];
$newslist = $hostel->getdata('*',"hostel","hostel_id='$id'","", "");
$newsrecord = $newslist->getNextRecord();
$htype=$newsrecord[hostel_type];
$hostel_type = new Main();
$newsRecord1 = $hostel_type->getdata('*',"hostel_type","","hostel_type ASC", "");

$newsRecord2 = $hostel_type->getdata('hostel_type',"hostel_type","hostel_type_id='$htype'","", "");
//$bid=$newsrecord['book_number'];
$record3 = $newsRecord2->getNextRecord();

 if(isset($_POST['commit'])) // If the submit button was clicked
    {
	
      // news entry 
	  	       
			  $post['hostel_name'] =$_POST['hostel_name'];
			   $post['hostel_type'] =$_POST['hostel_type'];
			   $post['other_info'] =$_POST['other_info'];
			   
			   
			   
			   
		if($hostel->updateData($post,"hostel","hostel_id='$id'"))
        {
        echo "$id";
		 		$msg="Hostel Record Updated Succesfully";
				header("location:?page=hostels-1-edit&msg=$msg");			
		}
		else
		{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=hostels-1-edit&error=$msg");
		}		
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

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
   <?php include("include/sidebar.php")?>
           
      <!-- end of side bar -->
      <div id="content"> <div id="content-header">
    <img alt="Hostel_small" src="../images/hostels/hostel_small.png">
  <h1>Hostel</h1>
  <h3>Edit hostel details</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/hostels/1/edit#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    <li><a href="?page=hostels">View all</a></li>
  </ul>
</div>
<div id="page-yield">
  <div id="vehicle_form">
    
    <form name="formID" id="formID" action="" class="edit_hostel" id="edit_hostel_1" method="post"><div style="margin:0;padding:0;display:inline"><input name="_method" type="hidden" value="put"><input name="authenticity_token" type="hidden" value="DwLRADY4ahkKuMRdM0tQpIKTT6X9cS2k1ft/jsJ9KNg="></div>
      
    <div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div>

      <div class="label-field-pair">
        <label for="vehicle_no">Hostel Name<span class="necessary-field">*</span> </label>
        <div class="text-input-bg"><input id="hostel_name" name="hostel_name" class="validate[required]  text-input" size="30" type="text" value="<?=$newsrecord['hostel_name'];?>"></div>
      </div>

      <div class="label-field-pair">
        <label for="vehicle_no">Hostel Type<span class="necessary-field">*</span> </label>
        <div class="text-input-bg">
        
        <select id="hostel_hostel_type" name="hostel_type" >
         <option value="">----Select----</option>
		<?php
	 while( ($record = $newsRecord1->getNextRecord()) !== false )
    {
	?>
        
        <option value="<?=$record['hostel_type_id'];?>"><?=$record['hostel_type'];?></option>
<?php
}
?>
       </select>

      </div>
 <div class="label-field-pair">
      
        <label for="vehicle_no">Other Information</label>
        <div class="textarea-input-bg"><textarea class="other_info" cols="40" id="hostel_other_info" name="other_info" rows="5" ><?=$newsrecord['other_info'];?></textarea></div>
      </div>

      <input class="submit_button" name="commit" type="submit" value="►Update">
    </form>
  </div>
</div> </div>

      <div class="extender"></div>
    </div>

   <!-- footer -->
  <?php include("include/footer.php")?>