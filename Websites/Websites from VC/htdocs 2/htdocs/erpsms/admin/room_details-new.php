<?php
$room=new Main();
//$hostel = new Main();
//$newsRecord = $hostel->getdata('*',"hostel","active=1","hostel_name ASC", "");
//$record = $newsRecord->getNextRecord();
 
 $hostel = new Main();
$newsRecord1 = $hostel->getdata('*',"hostel","active=1","hostel_name ASC", "");

  
  
    if(isset($_POST['commit'])) 
    {
     
           $cols['hostel_id'] =$_POST['hostel_id'];
		   $cols['room_number'] =$_POST['room_number'];		   
		   $cols['student_per_room'] =$_POST['student_per_room'];		   
		   $cols['rent'] =$_POST['rent'];	   
		   $cols['no_of_room'] =$_POST['no_of_room'];   
		   

		   if($room->Inserttable($cols,"room"))
        {
				$msg="New Room Added Succesfully";
				//echo $msg;
				header("location:?page=room_details-new&msg=$msg");	
					
		}
		else
		{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=room_details-new&error=$msg");	
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
   <?php include("include/sidebar5.php")?>
           
      <!-- end of side bar -->
      <div id="content"> <div id="content-header">
  <img alt="Hostel_small" src="../images/hostels/hostel_small.png">
  <h1>Hostel</h1>
  <h3>Add new room</h3>
  <div id="app-back-button">
    <a href="?page=room_details-new" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    <li><a href="?page=room_details">View all</a></li>
  </ul>
</div>

<div id="page-yield">
  <!--<div id="vehicle_form">-->
    <form name="formID" id="formID" action="#" class="new_room_detail" id="new_room_detail" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="DwLRADY4ahkKuMRdM0tQpIKTT6X9cS2k1ft/jsJ9KNg="></div>
        <div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div>

      <div class="label-field-pair">
        <label for="vehicle_no">Hostel Name<span class="necessary-field">*</span> </label>
        <div class="text-input-bg">
        
        <select id="room_detail_hostel_id" name="hostel_id">
        <option value="">Select a Hostel</option>
				<?php
				    while(($record1 = $newsRecord1->getNextRecord())!==false)
					{
				?>
				<option value="<?=$record1[hostel_id];?>"><?=$record1[hostel_name];?></option>
				<?php
}
				?>
		</select></div>
      </div>

      <div class="label-field-pair">
        <label for="vehicle_no">Room number<span class="necessary-field">*</span> </label>
        <div class="text-input-bg"><input id="room_detail_room_number" name="room_number" size="30" type="text" class="validate[required]  text-input"></div>
      </div>

      <div class="label-field-pair">
        <label for="vehicle_no">Students per room<span class="necessary-field">*</span> </label>
        <div class="text-input-bg"><input id="room_detail_students_per_room" name="student_per_room" size="30" type="text" class="validate[required]  text-input"></div>
      </div>
      <div class="label-field-pair">
        <label for="vehicle_no">Rent<span class="necessary-field">*</span> </label>
        <div class="text-input-bg"><input id="room_detail_rent" name="rent" size="30" type="text" class="validate[required]  text-input"></div>
      </div>
      <div class="label-field-pair">
        <label for="vehicle_no">No. of rooms</label>
        <div class="text-input-bg"><input id="room_count" name="no_of_room" size="30" type="text" class="validate[required]  text-input"></div>
      </div>
      <input class="submit_button" name="commit" type="submit" value="► Save">
    </form>
  </div>
</div> </div>

      <div class="extender"></div>
    </div>

 <!-- footer -->
  <?php include("include/footer.php")?>