<?php
$course_registration = new Main();
$newsRecord = $course_registration->getdata('*',"course","","course_name ASC", "");


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
      <div id="content"> 

<div id="content-header">
  <img src="../images/HR/show_hr.png" alt="">
  <h1>Pin Group</h1>
  <h3>New pin group</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/registration_courses/new#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">

  
  <div id="applicant_form">
    <form name="formID" id="formID" action="http://demo.fedena.org/pin_groups" class="new_pin_group" id="new_pin_group" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM="></div>
    
      <div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div>

      <div class="label-field-pair">
        <label for="pin_group_name">Name</label>
        <input id="pin_group_name" name="pin_group[name]" size="30" type="text" class="validate[required]  text-input">
      </div>

      <div class="label-field-pair">
        <label for="pin_group_valid_from">Valid From</label>
        <input id="pin_group_valid_from" name="pin_group[valid_from]" readonly="readonly" size="30" type="text" value="2012-07-11" > <img alt="Calendar" class="calendar_date_select_popup_icon" onClick="new CalendarDateSelect( $(this).previous(), {popup:&#39;force&#39;, year_range:10} );" src="../images/calendar_date_select	/calendar.gif" style="border:0px; cursor:pointer;">
      </div>
      <div class="label-field-pair">
        <label for="pin_group_valid_till">Valid till</label>
        <input id="pin_group_valid_till" name="pin_group[valid_till]" readonly="readonly" size="30" type="text" value="2012-08-11"> <img alt="Calendar" class="calendar_date_select_popup_icon" onClick="new CalendarDateSelect( $(this).previous(), {popup:&#39;force&#39;, year_range:10} );" src="../images/calendar_date_select	/calendar.gif" style="border:0px; cursor:pointer;">
      </div>
      <div class="label-field-pair">
        <label for="pin_course_name">Course Name</label>
        <div class="text-input-bg">
         <select id="course_id" name="course_id"> 
        <option value="">Select a Course</option>
      <?php
	   while( ($record = $newsRecord->getNextRecord()) !== false )
    {
	  ?>
<option value="<?=$record['course_id'];?>"><?=$record['course_name'];?></option>

<?php
}
?></select>
      </div>
      </div>
      <div class="label-field-pair">
        <label for="pin_group_pin_count">Pin count</label>
        <input id="pin_group_pin_count" name="pin_group[pin_count]" size="30" type="text" class="validate[required]  text-input">
      </div>
      <div class="label-field-pair">
        <label for="pin_group_is_active">Is Active</label>
        <input name="pin_group[is_active]" type="hidden" value="0"><input id="pin_group_is_active" name="pin_group[is_active]" type="checkbox" value="1">
      </div>
      <div class="label-field-pair">
        <label for="pin_group_course_ids">Courses</label>
        <div class="batches">
          <div class="sel-list">
            Select: <a href="http://demo.fedena.org/pin_groups/new#" onClick="$$(&#39;input&#39;).each(function(checkbox) { checkbox.checked = true; });; return false;">All</a>,
            <a href="http://demo.fedena.org/pin_groups/new#" onClick="$$(&#39;input&#39;).each(function(checkbox) { checkbox.checked = false; });; return false;">None</a>
          </div>
          </div>
      </div>
      <input class="submit_button" id="pin_group_submit" name="commit" type="submit" value="Save">
    </form>

  </div>
</div>






















 </div>

      <div class="extender"></div>
    </div>

    <!-- footer -->
  <?php include("include/footer.php")?>