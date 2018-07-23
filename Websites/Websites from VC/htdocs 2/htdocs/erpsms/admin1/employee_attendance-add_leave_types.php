<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/add_leave_types.css" media="screen" rel="stylesheet" type="text/css">
 <!--------- Start head ---------------->
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
  <img alt="Leave-new" src="../images/leave-new.png">
  <h1>Leave types</h1>
  <h3>Add new leave types</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/employee_attendance/add_leave_types#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>





<div id="page-yield">

  
  <div class="box">
    <form action="./employee_attendance-add_leave_types_files/employee_attendance-add_leave_types.htm" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60="></div>
      
      <div id="form-content">
        <div class="label-field-pair">
          <label for="category_name">Leave name</label>
          <div class="text-input-bg"><input id="leave_type_name" name="leave_type[name]" size="30" type="text"></div>
        </div>

        <div class="label-field-pair">
          <label for="category_name">Leave code</label>
          <div class="text-input-bg"><input id="leave_type_code" name="leave_type[code]" size="30" type="text"></div>
        </div>

        <div class="label-field-pair">
          <label for="category_name">Maximum leave count</label>
          <div class="text-input-bg"><input id="leave_type_max_leave_count" name="leave_type[max_leave_count]" size="30" type="text"></div>
        </div>
        <div class="extender"></div>

        <div class="label-field-pair">
          <label for="category_name">Enable Carry Forward</label>
          <div class="check_box"><input name="leave_type[carry_forward]" type="hidden" value="0"><input id="leave_type_carry_forward" name="leave_type[carry_forward]" type="checkbox" value="1"></div>
        </div>

        <div class="label-radio-pair">
          <label class="status">Status</label>

          <input checked="checked" id="leave_type_status_true" name="leave_type[status]" type="radio" value="true">
          <label class="label_for_status" for="add_grade_status_true">Active</label>

          <input id="leave_type_status_false" name="leave_type[status]" type="radio" value="false">
          <label class="label_for_status" for="add_grade_status_false">Inactive</label>
        </div>

        <div id="submit-button">
          <input name="commit" type="submit" value="► Create">
        </div>
      </div></form></div>
  

  <div id="leave_type-list">
    




<ul class="leave-type-list">

  <li class="listheading"><div class="leave-type-name">Active Leave types </div></li>
      <li class="listodd">
        <div class="leave-type-name">Casual -c</div>
        <div class="leave-type-edit"><a href="?page=employee_attendance-edit_leave_types-4">Edit</a></div>
        <div class="leave-type-edit"><a href="?page=employee_attendance-edit_leave_types-4" onClick="return confirm(&#39;Are You Sure?&#39;);">Delete</a></div>
        <div class="leave-type-edit"></div>
        </li>
           <li class="listeven">
        <div class="leave-type-name">Sick-s</div>
        <div class="leave-type-edit"><a href="http://demo.fedena.org/employee_attendance/edit_leave_types/5">Edit</a></div>
        <div class="leave-type-edit"><a href="http://demo.fedena.org/employee_attendance/delete_leave_types/5" onClick="return confirm(&#39;Are You Sure?&#39;);">Delete</a></div>
        <div class="leave-type-edit"></div>
        </li>
     

  
</ul>

  </div>

</div> </div>

      <div class="extender"></div>
    </div>

    <!-- footer -->
  <?php include("include/footer.php")?>