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
  <h3>Home</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/transport/dash_board#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">

  

  <div class="box">
    
      <div class="link-box">
        <div class="link-heading"><a href="?page=routes">Set Routes</a> </div>
        <div class="link-descr">Set the routes for vehicles</div>
      </div>
   
      <div class="link-box">
        <div class="link-heading"><a href="?page=vehicles">Vehicles</a>  </div>
        <div class="link-descr">Vehicle details</div>
      </div>
   
      <div class="link-box">
        <div class="link-heading"><a href="?page=transport">Transport</a></div>
        <div class="link-descr">Transport Details</div>
      </div>
   
    <div class="link-box">
      <div class="link-heading"><a href="?page=transport_fee">Transport Fee</a></div>
      <div class="link-descr">Transport Fee Details</div>
    </div>
    
    <div class="extender"></div>
  </div>
</div>

 </div>

      <div class="extender"></div>
    </div>

   <!-- footer -->
  <?php include("include/footer.php")?>