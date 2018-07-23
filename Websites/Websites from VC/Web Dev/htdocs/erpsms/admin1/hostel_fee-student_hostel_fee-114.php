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
  <img alt="Hostel_small" src="./hostel_fee-student_hostel_fee-114_files/hostel_small.png">
  <h1>Hostel Fees Submission</h1>
  <h3>SACHIN RAMESH  TENDULKAR</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/hostel_fee/student_hostel_fee/114#" onClick="history.back(); return false;"><img alt="Back" border="0" src="./hostel_fee-student_hostel_fee-114_files/back.png"></a>
  </div>
</div>

<div id="page-yield">
  <div class="label-field-pair">
    <label>Select a Fee Collection date</label>
    <div class="text-input-bg">
      <select id="fees_submission_dates_id" name="fees_submission[dates_id]" onChange="new Ajax.Request(&#39;/hostel_fee/fees_submission_student&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;date=&#39;+value+&#39;&amp;id=&#39;+114 + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;DwLRADY4ahkKuMRdM0tQpIKTT6X9cS2k1ft/jsJ9KNg=&#39;)})"><option value="">Select fees collection date</option>
<option value="1">June 2012 collection</option></select>
    </div>
  </div>
</div>
<div id="hostel_fee_collection_details"><div class="extender"></div>



<form action="http://demo.fedena.org/hostel_fee/hostel_fee_collection_pay?student=114" method="post" onSubmit="new Ajax.Request(&#39;/hostel_fee/hostel_fee_collection_pay?student=114&#39;, {asynchronous:true, evalScripts:true, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="DwLRADY4ahkKuMRdM0tQpIKTT6X9cS2k1ft/jsJ9KNg="></div>

  
    <table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
      <tbody><tr class="tr-head">
        <td>Name</td>
        <td>Amount ($  )</td>
      </tr>
      <tr class="tr-blank"></tr>
      <tr class="tr-odd">
        <td class="col-2">SACHIN RAMESH  TENDULKAR</td>
        <td class="col-6">200.0</td>
      </tr>
      

      
        
          
        
      



      <tr>
        <td style="width:47%"></td>
        <td class="fee_submission_td">

          
        <h4>Fees Paid  </h4>
        <div class="user_button">
          <a href="http://demo.fedena.org/hostel_fee/student_fee_receipt_pdf/2" target="_blank">► Print receipt</a>
        </div>
      </td>
    
    </tr>
  
  </tbody></table>
</form>

</div>

<div id="modal-box" style="display:none;"></div> </div>

      <div class="extender"></div>
    </div>

   <!-- footer -->
  <?php include("include/footer.php")?>