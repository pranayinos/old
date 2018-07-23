<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/edit_grade.css" media="screen" rel="stylesheet" type="text/css">
 <!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php /*?><?php include("include/sidebar.php")?><?php */?>
           
      <!-- end of side bar -->
      <div id="content"> 
<div id="content-header">
  <img alt="Show_hr" src="../images/HR/show_hr.png">
  <h1>Employee Settings</h1>
  <h3>Edit Grade</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/employee/edit_grade/47#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>


<div id="page-yield">

<form action="./employee-edit_grade-47_files/employee-edit_grade-47.htm" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60="></div>
    
    

    
    <div id="form-content">
      <div class="label-field-pair">
        <label for="grade_name">Name</label>
        <div class="text-input-bg"> <input id="grade_name" name="grade[name]" size="30" type="text" value="level 1"> </div>
      </div>

      <div class="label-field-pair">
        <label for="grade_priority">Priority</label>
        <div class="text-input-bg"> <input id="grade_priority" name="grade[priority]" size="30" type="text" value="1"> </div>
      </div>

      <div class="label-field-pair">
        <label for="grade_priority">Max period per day</label>
        <div class="text-input-bg"> <input id="grade_max_hours_day" name="grade[max_hours_day]" size="30" type="text" value="5"> </div>
      </div>

      <div class="label-field-pair">
        <label for="grade_priority">Max period per week</label>
        <div class="text-input-bg"> <input id="grade_max_hours_week" name="grade[max_hours_week]" size="30" type="text" value="25"> </div>
      </div>

      <div class="label-checkbox-pair">
        <label class="status" for="status">Status</label>
        <div id="radio-buttons">
          <input checked="checked" id="grade_status_true" name="grade[status]" type="radio" value="true">
          <label class="label_for_status" for="grade_status_true">Active</label>

          <input id="grade_status_false" name="grade[status]" type="radio" value="false">
          <label class="label_for_status" for="grade_status_false">Inactive</label>
        </div>
      </div>

      <div id="submit-button">
        <input name="commit" type="submit" value="► Update">
      </div>
    </div>

</form>


</div> </div>

      <div class="extender"></div>
    </div>

     <!-- footer -->
  <?php include("include/footer.php")?>