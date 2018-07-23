<?php
$add_books=new Main();
$issue_books=new Main();
$id=$_GET[id];
$newsRecord = $issue_books->getdata('*',"issue_books","issue_book_id='$id'","", "");
$record = $newsRecord->getNextRecord();

$date1 = $record['issue_date'];
$date2 = $record['due_date'];

$diff = abs(strtotime($date2) - strtotime($date1));

$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

$c=0;
$days=$days+$months*30;

if($days>30)
{
$days=$days-30;
$c=$days*5;
}


$return_books=new Main();

if(isset($_POST['commit'])) // If the submit button was clicked
    {
	
      // news entry 
	            $post['status'] ="Available";
                  $id=$record['book_number'];
				$add_books->updateData($post,"add_books","book_number='$id'");
				
				
			   $cols['book_number'] =$record['book_number'];
			   $cols['book_title'] =$record['book_title'];
			   $cols['name'] =$record['name'];
			   $cols['std_adm_no'] =$record['std_adm_no'];
			   $cols['issue_date'] =date(("Y-m-d"), strtotime($record['issue_date']));
			   $cols['due_date'] =date(("Y-m-d"), strtotime($record['due_date']));
			    $cols['fine'] =$_POST['fine'];
			  
			   
			   
			   
			   
		if($return_books->Inserttable($cols,"return_books"))
        {
				$msg="Return Book Record Added Succesfully";
				header("location:?page=lib_return_book&msg=$msg");			
		}
		else
		{
			$msg="Error : Issue Book Entry not done, Please check Values";
			header("location:?page=lib_return_book&error=$msg");
		}		
	}




?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/return_book.css" media="screen" rel="stylesheet" type="text/css">

<!--------- Start head ---------------->
<!--validation--------------------------------------------->
  
  	<script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#formID").validationEngine();
			
		});
	</script>
<!-------------End the code of validation---------------------------------------------> 
<script type="text/javascript">
function count_days( $a, $b )
{
    // First we need to break these dates into their constituent parts:
    $gd_a = getdate( $a );
    $gd_b = getdate( $b );
 
    // Now recreate these timestamps, based upon noon on each day
    // The specific time doesn't matter but it must be the same each day
    $a_new = mktime( 12, 0, 0, $gd_a['mon'], $gd_a['mday'], $gd_a['year'] );
    $b_new = mktime( 12, 0, 0, $gd_b['mon'], $gd_b['mday'], $gd_b['year'] );
 
    // Subtract these two numbers and divide by the number of seconds in a
    //  day. Round the result since crossing over a daylight savings time
    //  barrier will cause this time to be off by an hour or two.
    return round( abs( $a_new - $b_new ) / 86400 );
}
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
      <div id="content"> <div id="content-header">
  <img alt="Library_small" src="../images/library/library_small.png">
  <h1>Library</h1>
  <h3>Return book</h3>
  <div id="app-back-button">
    <a href="ook_movement/return_book#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
   <div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div>
<div id="page-yield">
  
  
  <div class="search_form">
    
      <div id="book_return">
        <div class="name">Book Number</div><div class="val themed_text"><span>:</span><?=$record['book_number']?></div>
        <div class="name">Book Holder</div><div class="val themed_text"><span>:</span><?=$record['name']?> </div>
        <div class="name">Book issue date</div><div class="val themed_text"><span>:</span><?=$record['issue_date']?></div>
        <div class="name">Book due date</div><div class="val themed_text"><span>:</span><?=$record['due_date']?></div>
        <div class="extender"></div>
        <br /><br />
     
        Number of Fine Days:-<?=$c;?>
        <br/>
        Fine:-<?=$c*5;?> Rs.
        <form name="formID" id="formID" action="" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value=""></div>
        
            <span class="exceeded themed_text">Due date has been exceeded. Please collect fine amount::</span>
            <div class="label-field-pair">
              <label for="book number">Enter fine amount</label>
              <div class="text-input-bg">
                <input id="fine" name="fine" size="30" type="text" class="validate[required]  text-input">
              </div>
            </div>
          <br />
          <input class="return_button" id="return_submit" name="commit" type="submit" value="Return">
        </form>

      </div>
     
  </div>
</div> </div>

      <div class="extender"></div>
    </div>

      <!-- footer -->
  <?php include("include/footer.php")?>