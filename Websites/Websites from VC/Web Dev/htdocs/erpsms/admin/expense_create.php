<?php 
$expence = new Main(); // create a new news object
						 // getdata($fields,$table,$where,$orderby,$limit);
$expencecatSet = $expence->getdata('*',"finance_category","income=0","finance_cat_name ASC", "");

    if(isset($_POST['addNew_bt'])) // If the submit button was clicked
    {
      // batch entry 
			$cols['tr_title'] =$_POST['transaction_title'];
			$cols['tr_description'] =$_POST['transaction_description'];
			$cols['tr_amt'] =$_POST['transaction_amount'];
			$cols['tr_date'] =date("Y-m-d", strtotime($_POST['transaction_transaction_date']));
			$cols['tr_category'] =$_POST['transaction_category_id'];
			$cols['tr_by'] =$adminuserid;
		   
		   if($expence->Inserttable($cols,"fin_transaction"))
        {
				$msg="New Expense Submitted Succesfully";
				header("location:?page=expense_create&msg=$msg");			
		}
		else
		{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=expense_create&error=$msg");
		}		
	}
		?>
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
   <h1>Create expense</h1>
  <h3>Creates new expenses</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="inner-tab-menu">
 <ul>
  <li><a href="?page=expense_list">Expense</a></li>
 </ul>
</div>
<div id="page-yield">
  
    <div class="box">
      
  
<form action="?page=expense_create" method="post">
  <div id="create_user_form">

    <div class="label-field-pair">
      <label for="title">Title : </label>
      <div class="text-field-bg"><input id="transaction_title" name="transaction_title" size="30" type="text"> </div>
    </div>
    <div class="label-field-pair">
      <label for="description">Description : </label>
      <div class="text-field-bg"><input id="transaction_description" name="transaction_description" size="30" type="text"> </div>
    </div>


    <div class="label-field-pair">
      <label for="amount">Amount : (Rs.)</label>
      <div class="text-field-bg"><input id="transaction_amount" name="transaction_amount" size="30" type="text"> </div>
    </div>
    <div class="label-field-pair">
      <label for="amount">Date :(<em>dd/mm/yyyy</em>)</label>
      <div class="text-field-bg"><input id="transaction_transaction_date" name="transaction_transaction_date" type="text" value="<?=date("M-d-Y")?>"> <img alt="Calendar" class="calendar_date_select_popup_icon" onClick="new CalendarDateSelect( $(this).previous(), {year_range:[2007, 2012]} );" src="css/calendar.gif" style="border:0px; cursor:pointer;">
      </div>
    </div>
    <div class="label-field-pair">
      <label for="category">Category :</label>
      <div class="text-input-bg">
      
      <select id="transaction_category_id" name="transaction_category_id"><option value="">Select a Category</option>
      <?php 
while( ($expcatrecord = $expencecatSet->getNextRecord()) !== false )
    { 
	?>
<option value="<?=$expcatrecord[finance_id]?>"><?=$expcatrecord[finance_cat_name]?></option>
<?php }?>
</select></div>
    </div>
  <div class="extender" align="center"> <input class="submit_button" name="addNew_bt" type="submit" value="► Save"><!-- Massage -->
 <div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div>
<!-- mssage -->
</div>

  </div>
   
</form>
</div>
</div>    

  
    </div>
<!-- footer -->
  <?php include("include/footer.php")?>
           