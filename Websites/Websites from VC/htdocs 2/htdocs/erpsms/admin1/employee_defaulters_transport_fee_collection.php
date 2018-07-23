<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

<!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php include("include/sidebar.php")?>
           
      <!-- end of side bar -->
      <div id="content"> <div id="content-header">
  <img alt="Transport_small" src="../images/transport/transport_small.png">
  <h1>Transport Fee</h1>
  <h3>Employee Defaulters</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/transport_fee/employee_defaulters_transport_fee_collection#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    <li><a href="?page=transport_fee_defaulters_view">Student Defaulters</a></li>

  </ul>
</div>
<div id="page-yield">
  <div class="label-field-pair"><label>Select Fee Collection Date</label>

    <div class="text-input-bg">
      <div id="fees_collection_dates">
        <select id="id_id" name="id[id]" onChange="new Ajax.Request(&#39;/transport_fee/employee_defaulters_transport_fee_collection_details&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;collection_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;xxJR6wpEhTLG9QUj261eJPHsP9HkY0/i58PsH4MzUzE=&#39;)})"><option value="">Select details for</option>
</select>
      </div>
    </div>
  </div>

  <div id="student">
    <div id="flash-msg"></div>
    <div id="fee_submission"></div>
    <div id="modal-box" style="display:none;"></div>
  </div>
</div> </div>

      <div class="extender"></div>
    </div>

  <!-- footer -->
  <?php include("include/footer.php")?>