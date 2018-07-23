<?php
    $income = new Main(); // create a new news object
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
   <?php /*?><?php include("include/sidebar5.php")?><?php */?>
           
      <!-- end of side bar -->
      <div id="fullcontent"> 
<div id="content-header">
<img alt="Show_finance" src="../images/show_finance.png">
  <h1>Incomes</h1>
  <h3>Incomes List</h3>
  <div id="app-back-button">
    <a href="t#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">
  <div>
    
    
    <form action="?page=income_list" method="post">
      <div class="label-field-pair">
        <label>Select start date:</label>
        <div class="input-container"><input id="start_date" name="start_date" type="text" value="<?php echo date("M-d-Y")?>"> <img alt="Calendar" class="calendar_date_select_popup_icon" onClick="new CalendarDateSelect( $(this).previous(), {year_range:10} );" src="./css/calendar.gif" style="border:0px; cursor:pointer;"></div>
      </div>
      <div class="label-field-pair">
        <label>Select end date: </label>
        <div class="input-container"><input id="end_date" name="end_date" type="text" value="<?php echo date("M-d-Y")?>"> <img alt="Calendar" class="calendar_date_select_popup_icon" onClick="new CalendarDateSelect( $(this).previous(), {year_range:10} );" src="./css/calendar.gif" style="border:0px; cursor:pointer;"></div>
      </div>

      <input class="submit_button" name="addNew_bt" type="submit" value="► OK">
    </form>
    <div id="expense_list">


<div id="inner-tab-menu">
  <ul>
    <li><a href="#" target="_blank">PDF Report</a></li>
  </ul>
</div>
<div>
  
    <br>
    <?php 
      if(isset($_POST['addNew_bt'])) // If the submit button was clicked
    {	
   $start_date=date("d-m-Y", strtotime($_POST[start_date]));
    $end_date=date("d-m-Y", strtotime($_POST[end_date]));
 	$newsRecordSet = $income->getdata('*',"fin_transaction,finance_category","finance_category.income='1' and finance_category. finance_id=fin_transaction.tr_category","fin_transaction.tr_date DESC", "");// set newsRecordSet to a 
	
	?>
    <table id="listing" width="98%">
      <tbody>
      <tr class="tr-head">
        <td>SL.</td>
        <td>Name</td>
        <td>Description</td>
        <td>Voucher Name</td>
        <td>Amount</td>
        <td>Transaction Date</td>
        <td></td>
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
          <td class="col-3"><?=$record[finance_cat_name]?></td>
          <td class="col-3"><?=$record[tr_amt]?></td>
          <td class="col-3"><?=date("d-m-Y", strtotime($record[tr_date]))?></td>
          <td class="col-3"><small><a href="" class="edit_link">Edit</a></small> | <small><a href="">Delete</a></small></td>
        </tr>
      <?php }?>

    </tbody></table>
  <?php }?>

</div>
 
    </div>
  </div>
</div> </div>

      <div class="extender"></div>
    </div>

<!-- footer -->
  <?php include("include/footer.php")?>
           