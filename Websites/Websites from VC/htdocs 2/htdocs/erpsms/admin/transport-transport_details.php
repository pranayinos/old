<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
 <link href="css/transport_details.css" media="screen" rel="stylesheet" type="text/css">


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
  <h1>Transportation Details</h1>
  <h3>View Details</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    <li><a href="?page=transport">Add Transport</a></li>
  </ul>
</div>
<div id="page-yield">

  

  <div class="label-field-pair-select-class">
    <label for="student-detail-select-class">Select a Vehicle</label>
    <div class="text-input-bg"><select id="transport_vehicle_id" name="transport[vehicle_id]" onChange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/transport/ajax_transport_details&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;id=&#39;+ value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;sZFPxPWh30tAllbRpaqOCuodbvivJLocCfe5Ebt0weU=&#39;)})"><option value="">Select vehicle</option>
<option value="1">1234</option></select>
    </div>
    <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none; ">
  </div>
  <div class="extender"></div>
  <div id="transport_details"><div class="students-table">
  <table align="center" width="100%" cellpadding="1" cellspacing="1" id="listing">
    <tbody><tr class="tr-head">
      <td> Sl  no.</td><td>Name</td><td>Route</td> <td>Fare</td> <td> </td></tr>
    

    
  </tbody></table>
</div>
</div>

</div> </div>

      <div class="extender"></div>
    </div>

  <!-- footer -->
  <?php include("include/footer.php")?>