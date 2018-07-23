<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link media="screen" rel="stylesheet" href="css/additional_fees_create_form.css" />
<!--------- Start head ---------------->
  <link media="screen" rel="stylesheet" href="popup/colorbox.css" />
<script src="popup/jquery-latest.min.js" type="text/javascript"></script>
<script src="popup/jquery.colorbox-min.js" type="text/javascript"></script>


<script type="text/javascript">
    $(function()
    {
        $('#link_content').colorbox({opacity:0.3});
    });

</script>
  
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
  <h3>Fees Collection Date</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="page-yield">
  <div id="flash_box"></div>
  
  <div class="box">
    <div id="message"><div class="extender">  <div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div></div><br />
<br />
<br />
</div>
    <div class="link-box">
      <div class="link-heading">
        <a href='?page=create_fees_coll_date' id='link_content' >Create Fee Collection</a>
      </div>
      <div class="link-descr">Creates new fee collecting dates </div>
    </div>
    <div class="link-box">
      <div class="link-heading"><a href="?page=fee_collection_view">View</a></div>
      <div class="link-descr">Displays fee collection dates</div>
    </div>

    <div id="modal-box" style="display:none;overflow:hidden; "></div>
  </div>
</div> </div>

      <div class="extender"></div>
    </div>
<!-- footer -->
  <?php include("include/footer.php")?>
           