<?php
      $newadd = new Main(); // create a new news object

    if(isset($_POST['addNew_bt'])) // If the submit button was clicked
    {

       
      // batch entry 
           $batchpost['batch_code'] =$_POST['course_batches_name'];
          $batchpost['batch_course_code']=$_GET['course'];      
          $batchpost['batch_start_date'] = date("Y-m-d", strtotime($_POST['batch_start_date'])); 
          $batchpost['batch_end_date'] = date("Y-m-d", strtotime($_POST['batch_end_date'])); 

       if($newadd->Inserttable($batchpost,"batch"))
        {
				$msg="New Batch Added Succesfully in Course";
				header("location:?page=show_course&course=$_GET[course]&msg=$msg");			
		}
		else
		{
			$msg="Error :  Course Is Already Exist";
			header("location:?page=show_course&course=$_GET[course]&error=$msg");
		}


    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
    <link rel="stylesheet" type="text/css" href="css/navigation.css">    
         <!---- css and javascript files --------------->
    
 <!---- for home page ---->  
    <link rel="stylesheet" type="text/css" href="css/navigation.css">    
    
 <!--- admission ------->   
      <link href="css/application.css" media="screen" rel="stylesheet" type="text/css">
     
 <!-- calender -->
    <link href="css/red.css" media="screen" rel="stylesheet" type="text/css">
     
      <script src="./js/calendar_date_select.js" type="text/javascript"></script>          
       <script type="text/javascript">
      jQuery.noConflict();
  
    </script>
      <!---- subject ---->
    <link href="css/new.css" media="screen" rel="stylesheet" type="text/css">
  <link href="css/index.css" media="screen" rel="stylesheet" type="text/css">
  <script language="javascript"> 
function clearText(field){
if (field.defaultValue == field.value) field.value = ''
else if (field.value == '') field.value = field.defaultValue;
}
</script>

    <link href="css/new_batch.css" media="screen" rel="stylesheet" type="text/css">
<!--------- Start head ---------------->
<!---Insert the code of 15 sep 2012 validation create catagory fee popup name ---->
 <script type="text/javascript" src="js/all_validation.js"></script>
<!--End the code of validation craete catagory fee popup --->
  </head>
  <body>
      <div class="box" style="width:600px; height:300px; padding-left:20px">
<h3>New Course Batch</h3>

    <div class="bread_crumb">
      <a href="?page=courses">Courses</a> »
       <a href="?page=manage_course"><?=$_GET[course]?> </a>»
      New batch
    </div>

 
    <form id="myform" name="myform" action="?page=new_batch&course=<?=$_GET['course']?>" class="new_batch" method="post" onSubmit="return validateForm10()">
      
      <div class="label-field-pair">
        <div class="label-container">BATCH NAME</div>
        <div class="input-container"><input id="course_batches_name" name="course_batches_name" size="30" type="text"></div>
      </div>


      <div class="label-field-pair">
        <div class="label-container">Start Date</div>
        <div class="input-container"><input id="batch_start_date" name="batch_start_date" type="text" value="<?=date("d-M-Y")?>">
 <img alt="Calendar" class="calendar_date_select_popup_icon" onClick="new CalendarDateSelect( $(this).previous(), {year_range:10} );" src="./css/calendar.gif" style="border:0px; cursor:pointer;"></div>
      </div>

      <div class="label-field-pair">
        <div class="label-container">End Date</div>
        <div class="input-container"><input id="batch_end_date" name="batch_end_date" type="text" value="<?=date("d-M-Y")?>">
 <img alt="Calendar" class="calendar_date_select_popup_icon" onClick="new CalendarDateSelect( $(this).previous(), {year_range:10} );" src="./css/calendar.gif" style="border:0px; cursor:pointer;"></div>
      </div>

   <!--   <div class="label-field-pair">
        <div class="label-container1"><label>Import previous batch Subjects</label></div>
        <div class="input-container"><input id="import_subjects" name="import_subjects" type="checkbox" value="0"></div>
      </div>

      <div class="label-field-pair">
        <div class="label-container1"><label>Import previous batch Master fees</label></div>
        <div class="input-container"><input id="import_fees" name="import_fees" type="checkbox" value="0"></div>
      </div>-->

      <input class="submit_button" name="addNew_bt" type="submit" value="► Save">

    </form>

    <div class="extender">
    <div class="extender">     </div></div>

  </div>

