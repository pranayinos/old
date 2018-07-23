<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link media="screen" rel="stylesheet" href="popup/colorbox.css" />
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
      <div id="content"> 
<div id="content-header">
<img alt="Show_finance" src="../images/show_finance.png">
   <h1>Fees</h1>
   <h3>Additional Fees</h3>
  <div id="app-back-button">
   <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="page-yield">
  
  <div class="box">
  <div class="link-box">
    <div class="link-heading"><a href="?page=additional_fees_create">Create</a></div>
    <div class="link-descr">Create Additional Fees </div>
  </div>

  <div class="link-box">
    <div class="link-heading"><a href="?page=additional_fees_list">View</a></div>
    <div class="link-descr">View Additional Fees</div>
  </div>

</div>
</div> </div>

      <div class="extender"></div>
    </div>

<!-- footer -->
  <?php include("include/footer.php")?>
           