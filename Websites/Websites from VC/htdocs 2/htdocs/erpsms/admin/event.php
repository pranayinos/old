<?php $event = new Main(); 

 if(isset($_POST['commit'])) // If the submit button was clicked
    {
      // news entry 
			   //$cols['event_start_date'] =$_POST['events_start_date'];
			     $cols['event_start_date'] =date(("Y-m-d"), strtotime($_POST['events_start_date']));		
			  // $cols['event_end_date'] =$_POST['events_end_date'];
			     $cols['event_end_date'] =date(("Y-m-d"), strtotime($_POST['events_end_date']));		
			   $cols['event_title'] =$_POST['events_title'];
			   $cols['event_desc'] =$_POST['events_description'];
			   $cols['event_holiday'] =$_POST['events_is_holiday'];
			   $cols['event_all'] =$_POST['events_is_holiday'];
			   
			   
			   
			      if($event->Inserttable($cols,"event"))
        {
				$msg="News Added Succesfully";
				header("location:?page=event&msg=$msg");			
		}
		else
		{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=event&error=$msg");
		}		
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
 <link href="css/event_index.css" media="screen" rel="stylesheet" type="text/css">


<!--------- Start head ---------------->
 <!-------------Insert the 19 NOV 2012  code of validation--------------------------------------------->
  <script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#formID").validationEngine();
			
		});
	</script>
<!-------------End the code of validation--------------------------------------------->    
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
  <img alt="Manage_news_logo" src="../images/manage_news/manage_news_logo.png">
  <h1>Event</h1>
  <h3>Step 1 - Event creation</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="page-yield">
  <div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div>
  
  <form id="formID" name="formID" action="#" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value=""></div>
    
    <div class="label-field-pair">
      <label for="start-date">Start Date:</label>
      <div class="text-input-bg"><input id="events_start_date" name="events_start_date" type="text" value="" class="validate[required]  text-input"> <img alt="Calendar" class="calendar_date_select_popup_icon" onClick="new CalendarDateSelect( $(this).previous());" src="../images/calendar_date_select/calendar.gif" style="border:0px; cursor:pointer;"></div>
    </div>
    <div class="label-field-pair">
      <label for="end-date">End Date:</label>
      <div class="text-input-bg"><input id="events_end_date" name="events_end_date" type="text" value="" class="validate[required]  text-input"> <img alt="Calendar" class="calendar_date_select_popup_icon" onClick="new CalendarDateSelect( $(this).previous());" src="../images/calendar_date_select/calendar.gif" style="border:0px; cursor:pointer;"></div>
    </div>
    <div class="label-field-pair">
      <label for="title">Title:</label>
      <div class="text-input-bg"><input id="events_title" name="events_title" size="30" type="text" class="validate[required]  text-input"></div>
    </div>
    <div class="label-field-pair">
      <label for="description">Description:</label>
    </div>
    <textarea cols="40" id="events_description" name="events_description" rows="20" class="validate[required]  text-input"></textarea>
    <div class="label-field-pair">
      <label for="is-holiday">Is Holiday??</label>
      <input name="events[is_holiday]" type="hidden" value="0"><input id="events_is_holiday" name="events_is_holiday" type="checkbox" value="1">
    </div>
    <div class="label-field-pair">
      <label for="end-date">Event common to all</label>
      <input name="events_is_common" type="hidden" value="0"><input id="events_is_common" name="events_is_common" type="checkbox" value="1">
    </div>
    <input id="events_submit" name="commit" type="submit" value="► Create Event">
  </form>
</div>
 </div>

      <div class="extender"></div>
    </div>

   <!-- footer -->
  <?php include("include/footer.php")?>