<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/#.css" media="screen" rel="stylesheet" type="text/css">
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
  <h1>View all</h1>
  <h3>View all</h3>
  <div id="app-back-button">
  <a href="http://demo.fedena.com/employee/view_all#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">
       <div class="label-field-pair">
  <label>Select department : </label>
<div class="text-input-bg"><select id="subject_assignment_department_id" name="subject_assignment[department_id]" onChange="new Ajax.Request(&#39;/employee/employees_list&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;department_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;JlIkYIDIXJLopNbr6ueIAQEIfxLu5AqU1JforHBltL8=&#39;)})"><option value="">Select department</option>
<option value="1">Fedena Admin</option>
<option value="2">Department of Botany</option>
<option value="3">Department of Chemistry</option>
<option value="4">Department of Commerce</option>
<option value="5">Department of Computer Science</option>
<option value="6">Department of Economics</option>
<option value="7">Department of English</option>
<option value="8">Department of Hindi</option>
<option value="9">Department of History</option>
<option value="10">Department of Malayalam</option>
<option value="11">Department of Mathematics</option>
<option value="12">Department of Physics</option>
<option value="13">Department of Politics</option>
<option value="14">Department of Statistics</option>
<option value="15">Department of Zoology</option>
<option value="16">Office Administration</option>
<option value="17">Physical Education</option>
<option value="18">PHYSICAL EDUCATION</option>
<option value="19">vbgfcvc</option>
<option value="20">Department of computer studies</option></select>
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
    <td class="col-3"><a href="?page=employee-profile">SREEJITH   P.</a></td>
     <td class="col-3">E13</td>
     <td class="col-3">Department of Computer Science</td>

</tr>

</tbody></table></div>
</div> </div>

      <div class="extender"></div>
    </div>

  
         <!-- footer -->
  <?php include("include/footer.php")?>