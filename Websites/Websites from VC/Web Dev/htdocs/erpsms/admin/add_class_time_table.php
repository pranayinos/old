<?php
$student=new Main();
$newsRecordSet = $student->getdata('batch.batch_id,batch.batch_code,course.course_name,course.course_section_name',"course,batch","course.course_code = batch.batch_course_code","course_name ASC","");


if(isset($_POST['commit'])) // If the submit button was clicked
    {
      // batch entry 
			   $cols['batch_id'] =$_POST['std_batch_code'];
			   $cols['sl'] =$_POST['pr'];
			   $cols['start_time'] =$_POST['start_time'];
			   $cols['end_time'] =$_POST['end_time'];
			  
			   

   if($student->Inserttable($cols,"time_setting"))
        {
				$msg="New Time Setting  Added Succesfully";
				//header("location:?page=admission&msg=$msg");	
				header("location:?page=add_class_time_table&msg=$msg");			
		}
		else
		{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=add_class_time_table&error=$msg");
		}		

}


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
 <link href="css/set_class_timing_ index.css" media="screen" rel="stylesheet" type="text/css">
 <link media="screen" rel="stylesheet" href="popup/colorbox.css" />
<script src="popup/jquery-latest.min.js" type="text/javascript"></script>
<script src="popup/jquery.colorbox-min.js" type="text/javascript"></script>
 <script type="text/javascript">
    $(function()
    {
        $('#set_class').colorbox({opacity:0.3});
		
    });
	
	
	
</script>

<!--------- Start head ---------------->

 	<script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#formID").validationEngine();
			
		});
	</script>
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php include("include/sidebar4.php")?>
           
      <!-- end of side bar -->
      
<div id="content">
<div id="content-header">
<img alt="Show_timetable" src="../images/show_timetable.png">
<h1>Timetable</h1>
<h3>Add class timings</h3>
<div id="app-back-button">
<a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
</div>
</div>
<form name="formID" id="formID" action="#" method="post">
<div class="msg" ><?php echo $_GET[msg]?></div>
    <div class="error" ><?php echo $_GET[error]?></div>
<div id="page-yield">
<div id="flash_box"></div>
<div class="label-field-pair">
<label>Select a Batch:</label>
<div class="text-input-bg">
<select id="std_batch_code" name="std_batch_code"  class="validate[required]" >
        
        <option value="">---Select---</option>
          <?php 
 while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { 
?>
     
<option value="<?=$record['batch_id']?>"> <?=$record['course_name']." ".$record['course_section_name'].'-'.$record['batch_code']?></option>
<?php }?>
          </select>

</div></div>


<div class="label-field-pair">
<label>SL:</label>
<div class="text-input-bg">
<input id="pr" class="validate[required]  text-input" name="pr"  size="30" type="text" title="" class="validate[required]  text-input"/>

</div></div>


<div class="label-field-pair">
<label>Start Time:</label>
<div class="text-input-bg">
<input id="start_time" class="validate[required]  text-input" name="start_time"  size="30" type="text" title="" class="validate[required]  text-input"/>

</div></div>


<div class="label-field-pair">
<label>End Time:</label>
<div class="text-input-bg">
<input id="end_time" class="validate[required]  text-input" name="end_time"  size="30" type="text" title="" class="validate[required]  text-input"/>

</div></div>
<div class="extender" align="left"> <input class="submit_button" name="commit" type="submit" value="► Save">

<!-- Massage -->
 
<!-- mssage -->
</div>
</div>
</div>
</form>
<div class="extender"></div>
</div>
&nbsp;
&nbsp;
</div>
<div class="extender"></div>
</div>
<!-- footer -->
  <?php include("include/footer.php")?>