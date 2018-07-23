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
  <h3>Edit vehicle details</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    <li><a href="?page=vehicles">View all</a></li>
  </ul>
</div>
<div id="page-yield">
  <div id="vehicle_form">
    <form action="#" class="edit_vehicle" id="edit_vehicle_1" method="post"><div style="margin:0;padding:0;display:inline"><input name="_method" type="hidden" value="put"><input name="authenticity_token" type="hidden" value="sZFPxPWh30tAllbRpaqOCuodbvivJLocCfe5Ebt0weU="></div>
      
      

      <div class="label-field-pair">
        <label for="vehicle_no">Vehicle Number<span class="necessary-field">*</span> </label>
        <div class="text-input-bg"><input id="vehicle_vehicle_no" name="vehicle[vehicle_no]" size="30" type="text" value="1234"></div>
      </div>

      <div class="label-field-pair">
        <label for="vehicle_no">Route<span class="necessary-field">*</span> </label>
        <div class="text-input-bg"><select id="vehicle_main_route_id" name="vehicle[main_route_id]"><option value="1" selected="selected">abc</option></select></div>
      </div>

      <div class="label-field-pair">
        <label for="vehicle_no">No of seats<span class="necessary-field">*</span> </label>
        <div class="text-input-bg"><input id="vehicle_no_of_seats" name="vehicle[no_of_seats]" size="30" type="text" value="40"></div>
      </div>


      <div class="label-checkbox-pair">
        <label class="status" for="status">Status</label>
        <div id="radio-buttons">
          <input checked="checked" id="vehicle_status_active" name="vehicle[status]" type="radio" value="Active">
          <label class="label_for_status" for="add_grade_status_true">Active</label>

          <input id="vehicle_status_inactive" name="vehicle[status]" type="radio" value="Inactive">
          <label class="label_for_status" for="add_grade_status_false">Inactive</label>
        </div>
      </div>
      <input class="submit_button" name="commit" type="submit" value="► Update">
    </form>
  </div>
</div> </div>

      <div class="extender"></div>
    </div>

   <!-- footer -->
  <?php include("include/footer.php")?>