<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<!-- <link href="css/transport_fee_collections.css" media="screen" rel="stylesheet" type="text/css">
--> <link media="screen" rel="stylesheet" href="popup/colorbox.css" />
<script src="popup/jquery-latest.min.js" type="text/javascript"></script>
<script src="popup/jquery.colorbox-min.js" type="text/javascript"></script>
 <script type="text/javascript">
    $(function()
    {
        $('#create_fee_collection').colorbox({opacity:0.3});
		
    });
	
	
	
</script>
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
  <h3>Manage Fee Collections</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/transport_fee/transport_fee_collections#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="page-yield">
  <div class="box">
    <div id="message"></div>

    <div class="link-box">
      <div class="link-heading">
       <a href='create_fee_collection.php' id='create_fee_collection' >Create Fee Collection</a>
      </div>
      <div class="link-descr">Creates new fee collecting dates </div>
    </div>
    <div class="link-box">
      <div class="link-heading"><a href="?page=transport_fee_collection_view">View</a></div>
      <div class="link-descr">Displays fee collection dates</div>
    </div>

    <div id="modal-box" style="display:none;"></div>
  </div>
</div> </div>

      <div class="extender"></div>
    </div>
<!-- footer -->
  <?php include("include/footer.php")?>
    