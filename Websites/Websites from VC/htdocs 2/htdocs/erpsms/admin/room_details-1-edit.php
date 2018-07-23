<?php $room = new Main(); 
$id=$_GET[id];

$newslist = $room->getdata('*',"room","room_id='$id'","", "");
$newsrecord = $newslist->getNextRecord();
$hostel=new Main();
$hid=$newsrecord['hostel_id'];
$newslist1 = $hostel->getdata('hostel_name',"hostel","hostel_id='$hid'","", "");
$newsrecord1 = $newslist1->getNextRecord();
//$bid=$newsrecord['book_number'];

 if(isset($_POST['commit'])) // If the submit button was clicked
    {
	
      // news entry 
			   $post['room_number'] =$_POST['room_number'];
			   $post['student_per_room'] =$_POST['student_per_room'];
			   $post['rent'] =$_POST['rent'];
			   
			   
			   
			   
		if($room->updateData($post,"room","room_id='$id'"))
        {
				$msg="Room Record Updated Succesfully";
				header("location:?page=room_details-1-edit&msg=$msg");			
		}
		else
		{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=room_details-1-edit&error=$msg");
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
  <img alt="Hostel_small" src="../images//hostels/hostel_small.png">
  <h1>Hostel</h1>
  <h3>Edit room details</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/room_details/1/edit#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    <li><a href="?page=room_details">View all</a></li>
  </ul>
</div>
<div id="page-yield">
  <div id="vehicle_form">
    <form name="formID" id="formID" action="" class="edit_room_detail" id="edit_room_detail_1" method="post"><div style="margin:0;padding:0;display:inline"><input name="_method" type="hidden" value="put"><input name="authenticity_token" type="hidden" value="DwLRADY4ahkKuMRdM0tQpIKTT6X9cS2k1ft/jsJ9KNg="></div>
        <div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div>

      <div class="label-field-pair">
        <label for="vehicle_no">Hostel Name<span class="necessary-field">*</span> </label>
        <label for="vehicle_no"><?=$newsrecord1['hostel_name'];?></label>
      </div>
      <div class="label-field-pair">
        <label for="vehicle_no">Room number<span class="necessary-field">*</span> </label>
        <div class="text-input-bg"><input id="room_detail_room_number" name="room_number" class="validate[required]  text-input" size="30" type="text" value="<?=$newsrecord['room_number'];?>"></div>
      </div>
      <div class="label-field-pair">
        <label for="vehicle_no">Students per room<span class="necessary-field">*</span> </label>
        <div class="text-input-bg"><input id="room_detail_students_per_room" class="validate[required]  text-input" name="student_per_room" size="30" type="text" value="<?=$newsrecord['student_per_room'];?>"></div>
      </div>
      <div class="label-field-pair">
        <label for="vehicle_no">Rent<span class="necessary-field">*</span> </label>
        <div class="text-input-bg"><input id="room_detail_rent" name="rent" size="30" class="validate[required]  text-input" type="text" value="<?=$newsrecord['rent'];?>"></div>
      </div>
      <input class="submit_button" name="commit" type="submit" value="► Update">
    </form>
  </div>
</div>
 </div>

      <div class="extender"></div>
    </div>

  <!-- footer -->
  <?php include("include/footer.php")?>