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
   <?php include("include/sidebar5.php")?>
           
      <!-- end of side bar -->
      <div id="content"> <div id="content-header">
  <img alt="Hostel_small" src="../images/hostels/hostel_small.png">
  <h1>Hostel</h1>
  <h3>View fee collection dates</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/hostel_fee/hostel_fee_collection_view#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="page-yield">
 
 
<div id="fee-collection-edit">
<table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
    <tbody><tr class="tr-head">
      <td>Name</td>
      <td>Batch</td>
      <td>Start Date</td>
      <td>End Date</td>
      <td>Due Date</td>
      <td></td>
    </tr>
    
      <tr class="tr-odd">
        <td class="col-4">June 2012 collection</td>
        <td class="col-4">
          
            1 - 1st Semester
          
        </td>
        <td class="col-1">2012-07-04</td>
        <td class="col-1">2012-07-04</td>
        <td class="col-1">2012-07-04</td>
        <td class="col-3">
          <div class="edit"><a href="http://demo.fedena.org/hostel_fee/hostel_fee_collection_view#" onClick="new Ajax.Request(&#39;/hostel_fee/hostel_fee_collection_edit/1&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;DwLRADY4ahkKuMRdM0tQpIKTT6X9cS2k1ft/jsJ9KNg=&#39;)}); return false;">Edit</a></div>
          <div class="edit"><a href="http://demo.fedena.org/hostel_fee/hostel_fee_collection_view#" onClick="if (confirm(&#39;Are You Sure?&#39;)) { new Ajax.Request(&#39;/hostel_fee/delete_fee_collection_date/1&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;DwLRADY4ahkKuMRdM0tQpIKTT6X9cS2k1ft/jsJ9KNg=&#39;)}); }; return false;">Delete</a></div>
        </td>
      </tr>
    
  </tbody></table>
  </div>
 <div id="fee_collection_dates"></div>
<div id="modal-box" style="display:none;"></div>
</div>
 </div>

      <div class="extender"></div>
    </div>
<!-- footer -->
  <?php include("include/footer.php")?>