<?php
//add the page 28 aug 2012  run  CODE 

    $batch = new Main(); // create a new news object
	$course=$_GET[course];
	$batch_code=$_GET[batch_code];
 	$newsRecordSet = $batch->getdata('*',"batch","batch_course_code='$course' and batch_code='$batch_code'","batch_id DESC", "");
	

//<!---------- 28 aug implemented NO RUN Code of update query    -------------------------------------------->

	
 if(isset($_POST['btsubmit'])) // If the submit button was clicked
    {
      // manage course update 
			 $batch_code=$_POST['batch_code'];
		     $post['batch_start_date'] =$_POST['batch_start_date'];
			 $post['batch_end_date'] =$_POST['batch_end_date'];
			  
			   if($batch->updateData($post,"batch","batch_code='$batch_code'"))
				 {
				 $msg="News updated Succesfully";
				// header("location:?page=edit_batch_course&batch_code=$batch_code&msg=$msg");			
				}
				else
				{
					$msg="Error :  Entry not done, Please check Values";
					//header("location:?page=news-view&id=$newsedit_id&error=$msg");
				}		
	}
	
?>
<!--------End of the Code of update query -------------------------------------------->


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
  <link href="./css/categories.css" media="screen" rel="stylesheet" type="text/css">
  <link href="css/edit.css" media="screen" rel="stylesheet" type="text/css">
<!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->

    <div id="content_wrapper">
               <!-- Side bar -->
   <?php include("include/sidebar6.php")?>
           
      <!-- end of side bar -->
      <div id="content"> 
<div id="content-header">
  <img alt="Show_exam" src="../images/examination/show_exam.png">
  <h1>Courses</h1>
  <h3>Edit Batch</h3>
  <div id="app-back-button">
   <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>


<div id="page-yield">

  

  <div class="box">
    <div class="bread_crumb">
      <a href="#">Courses</a> »
      <a href="#">UKG </a> »
      <a href="#">Batch 2011-12</a> »
      Edit
    </div>
  <?php  while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { 
   ?> 
   

<form action="#" class="edit_batch" id="edit_batch" method="post"><div style="margin:0;padding:0;display:inline">
<input id="batch_code" name="batch_code" type="hidden" value="<?=$record['batch_code']?>">
</div>

      <div class="label-field-pair">
        <div class="label-container">Name</div>
   <div class="input-container"><input id="batch_code" name="batch_code" size="30" type="text" value="<?=$record['batch_code']?>"></div>
      </div>

      <div class="label-field-pair">
        <div class="label-container">Start Date</div>
        <div class="input-container"><input id="batch_start_date" name="batch_start_date" type="text" value="<?=$record['batch_start_date']?>"><img alt="Calendar" class="calendar_date_select_popup_icon" onclick="new CalendarDateSelect( $(this).previous(), {year_range:10} );" src="../images/calendar_date_select/calendar.gif" style="border:0px; cursor:pointer;">
        </div>
      </div>

      <div class="label-field-pair">
        <div class="label-container">End Date</div>
        <div class="input-container"><input id="batch_end_date" name="batch_end_date" type="text" value="<?=$record['batch_end_date']?>"><img alt="Calendar" class="calendar_date_select_popup_icon" onclick="new CalendarDateSelect( $(this).previous(), {year_range:10} );" src="../images/calendar_date_select/calendar.gif" style="border:0px; cursor:pointer;">
        </div>
      </div>

      <input class="submit_button" name="btsubmit" type="submit" value="► Save">


    </form>
<?php } ?>

<!----Insert the code of msg print ------->
 <div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div>
 <!----End the code of msg print ------>
 
 
    <div class="extender"></div>
  </div>
</div>
 </div>

      <div class="extender"></div>
    </div>

    <!-- footer -->
  <?php include("include/footer.php")?>
           </body></html>