<?php 
$expence = new Main(); // create a new news object
						 // getdata($fields,$table,$where,$orderby,$limit);
$expencecatSet = $expence->getdata('*',"finance_category","income=3","finance_cat_name ASC", "");

    if(isset($_POST['addNew_bt'])) // If the submit button was clicked
    {
      // batch entry 
			$cols['tr_title'] =$_POST['donation_donor'];
			$cols['tr_description'] =$_POST['donation_description'];
			$cols['tr_amt'] =$_POST['donation_amount'];
			$cols['tr_date'] =date("Y-m-d", strtotime($_POST['donation_transaction_date']));
			$cols['tr_category'] =$_POST['transaction_category_id'];
			$cols['tr_by'] =$adminuserid;
		   
		   if($expence->Inserttable($cols,"fin_transaction"))
        {
				$msg="New Donation Added Succesfully";
				header("location:?page=donation&msg=$msg");			
		}
		else
		{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=donation&error=$msg");
		}		
	}
		?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
  <h1>Donations</h1>
  <h3>Add new donation</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images//buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    <li><a href="?page=donors">Donors</a></li>
  </ul>
</div>
<div id="page-yield">
  
  <div class="box">
    
    <form action="?page=donation" method="post">
      <div id="create_user_form">
        <div class="label-field-pair">
          <label for="donor_name">Donor name:</label>
          <div class="text-field-bg"><input id="donation_donor" name="donation_donor" size="30" type="text"></div>
        </div>
        <div class="label-field-pair">
          <label for="description">Description:</label>
          <div class="text-field-bg"><input id="donation_description" name="donation_description" size="30" type="text"></div>
        </div>
      
        <div class="label-field-pair">
          <label for="amount">Amount:</label>
          <div class="text-field-bg"><input id="donation_amount" name="donation_amount" size="30" type="text"></div>
        </div>  <div class="label-field-pair">
          <label for="description">Transaction Date:</label>
          <div class="text-field-bg"><input id="donation_transaction_date" name="donation_transaction_date" type="text" value="<?=date("M-d-Y")?>"> <img alt="Calendar" class="calendar_date_select_popup_icon" onClick="new CalendarDateSelect( $(this).previous(), {year_range:[2007, 2012]} );" src="./css/calendar.gif" style="border:0px; cursor:pointer;"></div>
        </div>
        <div class="label-field-pair">
      <label for="category">Category :</label>
      <div class="text-input-bg">
      
      <select id="transaction_category_id" name="transaction_category_id" >
      <?php 
while( ($expcatrecord = $expencecatSet->getNextRecord()) !== false )
    { 
	?>
<option value="<?=$expcatrecord[finance_id]?>" selected="selected" ><?=$expcatrecord[finance_cat_name]?></option>
<?php }?>
</select></div>
    </div>
        <input class="submit_button" name="addNew_bt" type="submit" value="► Add">
      </div>


    </form>

  </div>
</div> </div>

      <div class="extender"></div>
    </div>

<!-- footer -->
  <?php include("include/footer.php")?>
           