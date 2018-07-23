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
      
      <div id="content"> <div id="content-header">
  <img alt="Hostel_small" src="../images/hostels/hostel_small.png">
  <h1>Assign Warden</h1>
  <h3>Assign warden to hostel</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/wardens/new?id=1#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">
  <div id="vehicle_form">
    <form action="http://demo.fedena.org/wardens" class="new_warden" id="new_warden" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="LJs/NJ/YW+9+c9m63t0T4PpHBHeoosdOtJiMijBKVfw="></div>
      

      <div class="label-field-pair">
        <label for="vehicle_no">Hostel<span class="necessary-field">*</span> </label>
        <div class="text-input-bg">
          <select id="warden_hostel_id" name="warden[hostel_id]"><option value="1" selected="selected">Himalaya</option></select>
        </div>
      </div>

      <div class="label-field-pair">
        <label for="vehicle_no">Employee Department<span class="necessary-field">*</span> </label>
        <div class="text-input-bg">

          <select id="employee_department_id" name="employee[department_id]" onChange="new Ajax.Request(&#39;/wardens/update_employees&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;department_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;LJs/NJ/YW+9+c9m63t0T4PpHBHeoosdOtJiMijBKVfw=&#39;)})"><option value="">Select department</option>
<option value="46">System Admin</option>
<option value="48">finance </option>
<option value="49">admin</option>
<option value="62">Primary Deaprtment</option></select>

        </div>
      </div>
      <div class="label-field-pair">
        <label for="vehicle_no">Warden<span class="necessary-field">*</span> </label>
        <div class="text-input-bg">
          <div id="employee_list"><select id="warden_employee_id" name="warden[employee_id]"><option value="">Select employee</option>
<option value="58">Admin  User</option>
<option value="60">sudhakar K  P</option>
<option value="61">sudhakar K P</option></select></div>
        </div>
      </div>

      <input class="submit_button" name="commit" type="submit" value="► Save">
    </form>

  </div>
</div> </div>

      <div class="extender"></div>
    </div>

    
         <!-- footer -->
  <?php include("include/footer.php")?>