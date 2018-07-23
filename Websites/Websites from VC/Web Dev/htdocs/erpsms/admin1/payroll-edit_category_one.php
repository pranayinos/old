<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/payroll_edit_category.css" media="screen" rel="stylesheet" type="text/css">
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
  <h1>Payroll</h1>
  <h3>Editing category</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>





<div id="page-yield">

  

  <form action="./payroll-edit_category-10_files/payroll-edit_category-10.htm" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60="></div>
    
    <div id="form-content">
      <div class="label-field-pair">
        <label for="category_name">Category Name</label>
        <div class="text-input-bg"><input id="category_name" name="category[name]" size="30" type="text" value="basic"></div>
      </div>

      <div class="label-field-pair">
        <label for="percentage">Percentage</label>
        <div class="text-input-bg"><input id="category_percentage" name="category[percentage]" size="30" type="text"></div>
      </div>

      <div class="label-field-pair">
        <label for="percentage_of">Percentage of</label>
        <div class="text-input-bg">
          <select id="category_payroll_category_id" name="category[payroll_category_id]"><option value="">Select</option>
<option value="10">basic</option>
<option value="11">hra</option>
<option value="12">PF</option></select>
        </div>
      </div>
      <div class="label-radio-pair">
        <label class="status" for="status">Status</label>
        <div id="radio-buttons">
          <input checked="checked" id="category_status_true" name="category[status]" type="radio" value="true">
          <label class="label_for_status" for="add_grade_status_true">Active</label>

          <input checked="checked" id="category_status_false" name="category[status]" type="radio" value="false">
          <label class="label_for_status" for="add_grade_status_false">Inactive</label>
        </div>
      </div>

      <div class="label-checkbox">
        <input name="category[is_deduction]" type="hidden" value="0"><input id="category_is_deduction" name="category[is_deduction]" type="checkbox" value="1"> is deduction?
      </div>
      <div class="extender"></div>



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