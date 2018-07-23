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
  <h3>Fee collection dates</h3>
  <div id="app-back-button">
    <a href="/hostel_fee/hostel_fee_collection#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="page-yield">
  <div class="box">
  <div id="message"></div>
  <div class="link-box">
    <div class="link-heading"> 
      <a href="?page=hostel_fee_collection_new">Create Fee Collection</a>
    </div>
    <div class="link-descr">Creates new fee collecting dates </div>
  </div>
  <div class="link-box">
    <div class="link-heading"><a href="?page=hostel_fee_collection_view">View</a></div>
    <div class="link-descr">Displays fee collection dates</div>
  </div>

  <div id="modal-box" style="display:none;"></div>
</div>
</div> </div>

      <div class="extender"></div>
    </div>

   <!-- footer -->
  <?php include("include/footer.php")?>