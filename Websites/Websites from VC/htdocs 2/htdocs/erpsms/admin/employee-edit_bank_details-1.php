<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/edit_bank_details.css" media="screen" rel="stylesheet" type="text/css">
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
  <h3>Edit Bank Details</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/employee/edit_bank_details/1#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">

  

<form action="./employee-edit_bank_details-1_files/employee-edit_bank_details-1.htm" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60="></div>
      
      <div id="form-content">
        <div class="label-field-pair">
          <label for="category_name">Name</label>
          <div class="text-input-bg"> <input id="bank_details_name" name="bank_details[name]" size="30" type="text" value="sachin"> </div>
        </div>

        <div class="label-checkbox-pair">
          <label class="status" for="status">Status</label>
          <div id="radio-buttons">
            <input checked="checked" id="bank_details_status_true" name="bank_details[status]" type="radio" value="true">
            <label class="label_for_status" for="add_grade_status_true">Active</label>

            <input id="bank_details_status_false" name="bank_details[status]" type="radio" value="false">
            <label class="label_for_status" for="add_grade_status_false">Inactive</label>
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