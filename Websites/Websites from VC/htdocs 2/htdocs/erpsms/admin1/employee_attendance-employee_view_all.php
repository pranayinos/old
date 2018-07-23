<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/employee_view_all.css" media="screen" rel="stylesheet" type="text/css">
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
  <img alt="Show_hr" src="../images/HR/show_hr.png">
  <h1>View all</h1>
  <h3>View all</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">
  <div class="label-field-pair">
    <label>Select a department : </label>
    <div class="text-input-bg"><select id="subject_assignment_department_id" name="subject_assignment[department_id]" onChange="new Ajax.Request(&#39;/employee_attendance/employees_list&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;department_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)})"><option value="">Select a department</option>
<option value="46">System Admin</option>
<option value="48">finance </option>
<option value="49">admin</option>
<option value="62">Primary Deaprtment</option></select>
    </div>
  </div>
  <div class="extender"></div>
  <div id="employee_list">
<table id="listing" width="100%">
  <tbody><tr class="tr-head">
    <td>Name</td>
    <td>Employee Number</td>
    <td>Department</td>
  </tr>

  <tr class="tr-odd">
    <td class="col-3"><a href="#">Admin  User</a></td>
     <td class="col-3">admin</td>
     <td class="col-3">System Admin</td>

  </tr><tr class="tr-even">
    <td class="col-3"><a href="#">sudhakar K  P</a></td>
     <td class="col-3">E1</td>
     <td class="col-3">System Admin</td>

  </tr><tr class="tr-odd">
    <td class="col-3"><a href="#">sudhakar K P</a></td>
     <td class="col-3">E2</td>
     <td class="col-3">System Admin</td>

</tr></tbody></table></div>
</div> </div>

      <div class="extender"></div>
    </div>

     <!-- footer -->
  <?php include("include/footer.php")?>