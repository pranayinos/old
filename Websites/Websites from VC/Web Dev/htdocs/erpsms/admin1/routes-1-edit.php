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
  <h1>Transport</h1>
  <h3>Edit Route details</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/routes/1/edit#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    <li><a href="?page=routes">View all</a></li>
  </ul>
</div>
<div id="page-yield1">
  <div id="vehicle_form">
    <form action="http://demo.fedena.org/routes/1" class="edit_route" id="edit_route_1" method="post"><div style="margin:0;padding:0;display:inline"><input name="_method" type="hidden" value="put"><input name="authenticity_token" type="hidden" value="sZFPxPWh30tAllbRpaqOCuodbvivJLocCfe5Ebt0weU="></div>
      
      

      <div class="label-field-pair">
        <label for="vehicle_no">Destination<span class="necessary-field">*</span> </label>
        <div class="text-input-bg"><input id="route_destination" name="route[destination]" size="30" type="text" value="abc"></div>
      </div>

      <div class="label-field-pair">
        <label for="vehicle_no">Cost<span class="necessary-field">*</span> </label>
        <div class="text-input-bg"><input id="route_cost" name="route[cost]" size="30" type="text" value="50"></div>
      </div>

      <div class="label-field-pair">
        <label for="vehicle_no">Main Route<span class="necessary-field">*</span> </label>
        
        <div class="text-input-bg"><select id="route_main_route_id" name="route[main_route_id]"><option value="">Select Main Route</option>
<option value="" selected="selected">New Main Route</option>
<option value="1">abc</option></select></div>
      </div>


      <input class="submit_button" name="commit" type="submit" value="► Update">
    </form>
  </div>
</div> </div>

      <div class="extender"></div>
    </div>
<!-- footer -->
  <?php include("include/footer.php")?>