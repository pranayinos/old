<?php
    $donation = new Main(); // create a new news object
  $newsRecordSet = $donation->getdata('*',"fin_transaction,finance_category","finance_category.income='3' and finance_category. finance_id=fin_transaction.tr_category","fin_transaction.tr_date DESC", "");// set newsRecordSet to a 

?>
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
           
      <!-- end of side bar --><div id="content"> 
<div id="content-header">
<img alt="Show_finance" src="../images/show_finance.png">
  <h1>Donations</h1>
  <h3>Donors</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">
	
  <h4> List of Donors </h4>
  <table id="listing" width="720px">
    <tbody><tr class="tr-head">
      <td>Sl.</td>
      <td>Name</td>
      <td>Description</td>
      <td>Amount</td>
        <td>Created At</td>
    
      <td>Option</td>
    </tr>
      <?php 
	  
$i=0;
while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { 
	$i++;
	if($i%2==0) $col="tr-odd";
	else $col="tr-even";
	?>
        <tr class="<?=$col?>">
         <td class="col-5"><?=$i?></td>
          <td class="col-3"><?=$record[tr_title]?></td>
          <td class="col-3"><?=$record[tr_description]?></td>
        
          <td class="col-3"><?=$record[tr_amt]?></td>
          <td class="col-3"><?=date("d-m-Y", strtotime($record[tr_date]))?></td>
          <td class="col-3"><small><a href="" class="edit_link">Edit</a></small> | <small><a href="">Delete</a></small></td>
        </tr>
      <?php }?>
      
   

  </tbody></table>
</div> </div>

      <div class="extender"></div>
    </div>

<!-- footer -->
  <?php include("include/footer.php")?>
           