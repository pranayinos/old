<?php
    $fincategory = new Main(); // create a new news object
	$newsRecordSet = $fincategory->getdata('*',"finance_category","","finance_cat_name ASC","");// set newsRecordSet to a 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
    <link href="css/categories1.css" media="screen" rel="stylesheet" type="text/css">
    <link media="screen" rel="stylesheet" href="popup/colorbox.css" />
<script src="popup/jquery-latest.min.js" type="text/javascript"></script>
<script src="popup/jquery.colorbox-min.js" type="text/javascript"></script>
 <link href="css/master_fees.css" media="screen" rel="stylesheet" type="text/css">

<script type="text/javascript">
    $(function()
    {
        $('#newcat').colorbox({opacity:0.3});
    });
	 $(function()
    {
        $('#editcat').colorbox({opacity:0.3});
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
      
      <div id="content"> 
<div id="content-header">
<img alt="Show_finance" src="../images/show_finance.png">
  <h1>Finance Management</h1>
  <h3>Categories</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>


<div id="page-yield">
  <div id="flash_box"></div>
  
  <div class="box">
    <a href='?page=create_new_cat' id='newcat' style="color:#2A7FAA" > Create Finance Category</a>
    </div>
    <div class="link-descr"> Create Finance Category</div>

    <div id="category-list">

<?php 
$i=0;
 while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { 
	$i++;
	if($i%2==0) $col="containereven";
	else $col="containerodd";
	
?>

      <div class="<?= $col?>">
    <div class="title"> <?=$record['finance_cat_name']?></div>

    <div class="options">
    <div class="des">  <?php if($record['income']==0) echo "[ EXPENCE ]"; else if($record['income']==3) echo "[DONATION]"; else echo "[ INCOME ]";?></div>    
      <div class="edit"><a href='?page=edit_fin_cat&id=<?=$record['finance_id']?>' > Edit</a></div>
      <div class="edit">
       <a href="?page=fees_category?did=<?=$record['finance_id']?>" onClick="if (confirm(&#39;Are you sure to delete this finance category?&#39;))  return false;	return true;">Delete</a>
        
      </div>
    </div>
  </div>

 <?php }?>

<div id="modal-box" style="display:none;"></div>
</div>
    <div id="modal-box" style="display:none;"></div>

  </div>
</div> </div>

      <div class="extender"></div>
    </div>

<!-- footer -->
  <?php include("include/footer.php")?>
           