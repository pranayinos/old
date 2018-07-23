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
  <img alt="Transport_small" src="../images/transport/transport_small.png">
  <h1>Transport</h1>
  <h3>View transport fee collection dates</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/transport_fee/transport_fee_collection_view#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
  </ul>
</div>
<div id="page-yield">

  
  
  <div class="box">
    <div class="label-field-pair"><label>Select a user type</label>
      <div class="text-input-bg"><select id="user_type_" name="user_type[]" onChange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/transport_fee/update_user_ajax&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;user_type=&#39;+ value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;sZFPxPWh30tAllbRpaqOCuodbvivJLocCfe5Ebt0weU=&#39;)})"><option value="">Select One</option>
<option value="employee">Employee</option>
<option value="student">Student</option></select>
      </div>
      <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none; ">
    </div>
    <div id="batch_list" class="label-field-pair"><label>Select a batch</label>
<div class="text-input-bg">
  <select id="batch_" name="batch[]" onChange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/transport_fee/update_batch_list_ajax&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;batch_id=&#39;+ value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;sZFPxPWh30tAllbRpaqOCuodbvivJLocCfe5Ebt0weU=&#39;)})"><option value="">Select batch</option>
<option value="43">1 - 1st Semester</option>
<option value="44">2 - 2nd Semester</option>
<option value="46">2 - 2nd Semester</option>
<option value="45">3 - 1st Semester</option>
<option value="62">3 - 2012-2013</option></select>
</div></div>
  </div>
  <div id="fee_collection_list"><table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
  <tbody><tr class="tr-head">
    <td>Name</td>
    <td>Start Date</td>
    <td>End Date</td>
    <td>Due Date</td>
    <td></td>
  </tr>
  
</tbody></table>
</div>

  <div id="fee_collection_dates"></div>
  <div id="modal-box" style="display:none;"></div>
</div> </div>

      <div class="extender"></div>
    </div>

  <!-- footer -->
  <?php include("include/footer.php")?>