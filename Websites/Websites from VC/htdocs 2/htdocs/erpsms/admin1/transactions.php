<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
    <link href="css/transactions.css" media="screen" rel="stylesheet" type="text/css">

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
  <h1>Finance transactions</h1>
  <h3>Expences and income</h3>
  <div id="app-back-button">
     <a href="?page=transactions#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">


<div class="box">
  <div class="link-box">
    <div class="link-heading"><a href="?page=expense_create">Add expense</a></div>
    <div class="link-descr">Creates new expenses</div>
  </div>
  <div class="link-box">
    <div class="link-heading"><a href="?page=income_create">Add income</a></div>
    <div class="link-descr">Create new income</div>
  </div>

  <div class="link-box">
    <div class="link-heading"><a href="?page=tr_monthly_report">Report</a></div>
    <div class="link-descr">Shows transactions</div>
  </div>
 <!-- <div class="link-box">
    <div class="link-heading"><a href="?page=compare_report">Compare Transactions</a></div>
    <div class="link-descr">Compare Transactions</div>
  </div>-->

</div>
</div> </div>

      <div class="extender"></div>
    </div>


<!-- footer -->
  <?php include("include/footer.php")?>
           