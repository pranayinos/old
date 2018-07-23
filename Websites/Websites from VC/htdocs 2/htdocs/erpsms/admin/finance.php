<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

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
      
      <div id="content"> 
<div id="content-header">
<img alt="Show_finance" src="../images/show_finance.png">
  <h1>Finance</h1>
  <h3>Manage Finance</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.com/finance#" onClick="history.back(); return false;">
    <img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="page-yield">
  <div class="box">
  <div class="link-box">
    <div class="link-heading"><a href="?page=fees_home">Fee</a> </div>
    <div class="link-descr">Manage Fee</div>
  </div>

  <div class="link-box">
    <div class="link-heading"><a href="?page=fees_category">Category</a> </div>
    <div class="link-descr">Manage Category</div>
  </div>

  <div class="link-box">
    <div class="link-heading"><a href="?page=transactions">Transactions</a> </div>
    <div class="link-descr">Manages expense and income</div>
  </div>

  <div class="link-box">
    <div class="link-heading"><a href="?page=donation">Donations</a></div>
    <div class="link-descr">Creates new donations</div>
  </div>

  <div class="link-box">
    <div class="link-heading"><a href="?page=automatic_transactions">Automatic Transactions</a></div>
    <div class="link-descr">Add automatic transactions</div>
  </div>
  
    <div class="link-box">
      <div class="link-heading"><a href="?page=payslip_index">Payslip</a></div>
      <div class="link-descr">Employee Payslips</div>
    </div>
  

  <div class="link-box">
    <div class="link-heading"><a href="?page=asset_liability">Asset Liability Management</a></div>
    <div class="link-descr">Asset liability Management</div>
  </div>

  </div>
</div> </div>

        <div class="extender"></div>
    </div>

<!-- footer -->
  <?php include("include/footer.php")?>
           