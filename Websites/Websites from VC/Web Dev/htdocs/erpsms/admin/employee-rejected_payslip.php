<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/rejected_payslip.css" media="screen" rel="stylesheet" type="text/css">
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
  <h1>Rejected payslip</h1>
  <h3>Department wise payslip</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/employee/rejected_payslip#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>


<div id="page-yield">

  <div class="drop-down-box">
    <label for="category_prefix">Select a department</label>
    <div class="text-input-bg"> <select id="individual_payslip_department_id" name="individual_payslip[department_id]" onChange="new Ajax.Request(&#39;/employee/update_rejected_employee_list&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;department_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)})"><option value="">Select a department</option>
<option value="46">System Admin</option>
<option value="48">finance </option>
<option value="49">admin</option>
<option value="62">Primary Deaprtment</option></select> </div>
  </div>
  <div class="extender"></div>
  <div id="employees_select_list">




<ul id="employee-list">

<p class="flash-msg"> No employees added under this category </p>
  
</ul>
</div>
</div> </div>

      <div class="extender"></div>
    </div>

     <!-- footer -->
  <?php include("include/footer.php")?>