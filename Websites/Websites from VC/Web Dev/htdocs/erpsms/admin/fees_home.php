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
  <h1>Fee</h1>
  <h3>Manage Fee</h3>
  <div id="app-back-button">
    <a href="?page=/fees_index#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="page-yield">

  
  <div class="box">
    <div class="link-box">
      <div class="link-heading"><a href="?page=fees_create">Create Fee  </a></div>
      <div class="link-descr">Creates Master Fee <br> Additional Fee</div>
    </div>

    <div class="link-box">
      <div class="link-heading"><a href="?page=fee_collection_date">Fee Collection Date</a></div>
      <div class="link-descr">Creates new fee collecting dates </div>
    </div>

    <div class="link-box">
      <div class="link-heading"><a href="?page=fees_submission">Fee</a> </div>
      <div class="link-descr">Fees Submission</div>
    </div>

    <div class="link-box">
      <div class="link-heading"><a href="?page=fees_student_structure_search">Fee Structure</a> </div>
      <div class="link-descr">Displays fee Structure for student</div>
    </div>

    <div class="link-box">
      <div class="link-heading"><a href="?page=fees_dues">Fee Dues</a></div>
      <div class="link-descr">Students with fee dues </div>
    </div>

    <!-- Instant Fees -->

    
      
        <div class="link-box">
         <!-- <div class="link-heading"><a href="?page=instant_fees">Instant Fee</a></div>-->Instant Fee
          <div class="link-descr">Manage and pay instant fee</div>
        
      
    </div>
  </div>
</div> </div>

      <div class="extender"></div>
    </div>

<!-- footer -->
  <?php include("include/footer.php")?>
           