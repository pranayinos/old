<?php
$pacement=new Main();

if(isset($_POST['commit']))
{
 				$cols['Title'] =$_POST['Title'];
			   $cols['Date'] =date(("Y-m-d"), strtotime($_POST['Date']));
			   $cols['Company_Name'] =$_POST['Company_Name'];
			   $cols['Description'] =$_POST['Description'];
			   
			   if($pacement->Inserttable($cols,"placement_Details"))
        {
				$msg="Placement Details Added Succesfully";
				//header("location:?page=admission&msg=$msg");	
				header("location:?page=placementevents-new1&msg=$msg");			
		}
		else
		{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=placementevents-new1&error=$msg");
		}		
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/placement_new1.css" media="screen" rel="stylesheet" type="text/css">
 <!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php /*?><?php include("include/sidebar.php")?><?php */?>
           
      <!-- end of side bar -->
      <div id="content"> <div id="content-header">
  <img alt="Placement" src="../images/placement/placement.png">
  <h1>Placements</h1>
  <h3>New placement event</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="page-yield">
  

  <form action="#" class="new_placementevent" id="new_placementevent" method="post"><div style="margin:0;padding:0;display:inline">
  <div class="msg" ><?php echo $_GET[msg]?></div>
    <div class="error" ><?php echo $_GET[error]?></div>
  <input name="authenticity_token" type="hidden" value="JlIkYIDIXJLopNbr6ueIAQEIfxLu5AqU1JforHBltL8="></div>
    
    <div id="new_placementevent_form">
      <div class="label-field-pair"><label for="title">Title</label><div class="text-input-bg"><input id="Title" name="Title" size="30" type="text"></div></div>
      <div class="label-field-pair"> <label for="date">Date</label><div class="text-input-bg"> <input class="text-input-bg" id="Date" name="Date" type="text" value="Friday,27 July 2012"> <img alt="Calendar" class="calendar_date_select_popup_icon" onClick="new CalendarDateSelect( $(this).previous(), {year_range:10} );" src="../images/calendar_date_select/calendar.gif" style="border:0px; cursor:pointer;"></div></div>
      <div class="label-field-pair"><label for="company">Company</label><div class="text-input-bg"><input id="Company_Name" name="Company_Name" size="30" type="text"></div></div>
      <div class="label-field-pair" id="placementevent-description"><label for="description">Description</label><div class="text-input-bg"><textarea cols="40" id="Description" name="Description" rows="20"></textarea></div></div>
      <input class="submit-button" id="placementevent_submit" name="commit" type="submit" value="Create placement Event">
    </div>
  </form>
</div> </div>

      <div class="extender"></div>
    </div>

   
         <!-- footer -->
  <?php include("include/footer.php")?></body></html>