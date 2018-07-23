<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/employee_leave_reset_by_department.css" media="screen" rel="stylesheet" type="text/css">
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
  <img alt="Leave-new" src="../images/leave-new.png">
  <h1>Department Leave Reset</h1>
  <h3>Reset Employee Leave Department Wise</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">
  <div id="box">

    

    <form action="#" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60="></div>
      <div class="label-field-pair">
        <label for="employee_department_select">Select the department</label>
        <div class="text-input-bg"><select id="employee_department_department_id" name="employee_department[department_id]" onChange="new Ajax.Request(&#39;/employee_attendance/list_department_leave_reset&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;department_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)})"><option value="">Select the department</option>
<option value="49">admin</option>
<option value="48">finance </option>
<option value="62">Primary Deaprtment</option>
<option value="46">System Admin</option></select></div>
      </div>
    </form>

    <div id="department-list">



<div class="label-field-pair"><label> Select a course: </label></div>
<div id="list_content">
  <div id="list">
    <div class="sel-list">
      Select: <a href="#" onClick="$$(&#39;input.batches_box&#39;).each(function(checkbox) { checkbox.checked = true; });; return false;">All</a>,
      <a href="#" onClick="$$(&#39;input.batches_box&#39;).each(function(checkbox) { checkbox.checked = false; });; return false;">None</a>
    </div>
    <form action="#" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60="></div>
      
        <div class="name_listodd"><li>
           <label> <input checked="checked" class="batches_box" id="employee_id_" name="employee_id[]" type="checkbox" value="58"> <div class="att_list_names">Admin  User</div></label>
          </li></div>
      
        <div class="name_listeven"><li>
           <label> <input checked="checked" class="batches_box" id="employee_id_" name="employee_id[]" type="checkbox" value="60"> <div class="att_list_names">sudhakar K  P</div></label>
          </li></div>
      
        <div class="name_listodd"><li>
           <label> <input checked="checked" class="batches_box" id="employee_id_" name="employee_id[]" type="checkbox" value="61"> <div class="att_list_names">sudhakar K P</div></label>
          </li></div>
      


      <div class="user_submit_button1">
        <input id="employee_submit" name="commit" type="submit" value="► Reset">
      </div>
    </form>
  </div>
</div>

</div>


  </div>


</div> </div>

      <div class="extender"></div>
    </div>

     <!-- footer -->
  <?php include("include/footer.php")?>