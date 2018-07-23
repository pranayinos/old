<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
    <link href="css/fees_student_search.css" media="screen" rel="stylesheet" type="text/css">
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
      <div id="content"> 
<div id="content-header">
  <img alt="Show_finance" src="../images/show_finance.png">
  <h1>Instant Fee</h1>
  <h3>Instance Fee Management</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="page-yield">
  <div id="flash_box">
  </div>
  
  <div id="message"></div>

  <div class="box">

    <div class="fee-link">

      <div class="link-box">
        <div class="link-heading">
          <a href="?page=manage_fees">Manage Instant Fee</a>
        </div>
        <div class="link-descr"> Manage Instant Fee</div>
      </div>

      <div class="link-box">
        <div class="link-heading">
          <a href="?page=new_instant_fees_search">Pay Fee</a>
        </div>
        <div class="link-descr"> Pay instant fee</div>
      </div>
    </div>
    <div id="modal-box" style="display:none;"></div>

  </div>
</div> </div>

      <div class="extender"></div>
    </div>

<!-- footer -->
  <?php include("include/footer.php")?>
           