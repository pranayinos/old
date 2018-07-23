<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link media="screen" rel="stylesheet" href="css/additional_fees_create_form.css" />
<!--------- Start head ---------------->
    </head>

  <body>
    
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->


    <div id="content_wrapper">
      
         <!-- Side bar -->
   <?php include("include/sidebar.php")?>
           
      <!-- end of side bar -->
       <div id="content"> 
<div id="content-header">
<img alt="Show_finance" src="../images/show_finance.png">
  <h1>Additional Fees</h1>
  <h3>Create Additional Fees</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="page-yield">

  
   <div class="box">
  <form action="" method="post"><div style="margin:0;padding:0;display:inline">
  <input name="authenticity_token" type="hidden" value=""></div>

     <div class="label-field-pair">
    <div class="label-container"><label>Name <span class="necessary-field">*</span> :</label> </div>
    <div class="input-container"><input id="additional_fees_name" name="additional_fees[name]" size="30" type="text"></div>
   </div>
       <div class="label-field-pair">
    <div class="label-container"><label>Description: </label> </div>
    <div class="input-container"><input id="additional_fees_description" name="additional_fees[description]" size="30" type="text"></div>
   </div>
       <div class="label-field-pair">
    <div class="label-container"><label>Batch <span class="necessary-field">*</span> : </label></div>
    <div class="input-container"><select id="additional_fees_batch_id" name="additional_fees[batch_id]"><option value="">Select batch</option>
<option value="11">10 - 2010 A</option>
<option value="14">10 - 2010 B</option>
<option value="2">B.A.HIS.I st SEM - 2011-12</option>
<option value="3">B.COM 1st SEM - 2011-12</option>
<option value="4">BSc.MATHS I st SEM - 2011-12</option>
<option value="5">BSc.PHY I st SEM - 2011-12</option>
<option value="13">ece - 2013-2014</option>
<option value="8">I sem B.Sc CHE  - 2010-2011</option>
</select>
</div>
   </div>
       <div class="label-field-pair">
    <div class="label-container"><label>Start Date <span class="necessary-field">*</span> :</label> </div>
    <div class="input-container"><input id="additional_fees[start_date]" name="additional_fees[start_date]" type="text" value="July  4, 2012"> <img alt="Calendar" class="calendar_date_select_popup_icon" onClick="new CalendarDateSelect( $(this).previous(), {year_range:10} );" src="./css/calendar.gif" style="border:0px; cursor:pointer;"></div>
   </div>
       <div class="label-field-pair">
    <div class="label-container"><label>End Date <span class="necessary-field">*</span>:</label> </div>
    <div class="input-container"><input id="additional_fees[end_date]" name="additional_fees[end_date]" type="text" value="July  4, 2012"> <img alt="Calendar" class="calendar_date_select_popup_icon" onClick="new CalendarDateSelect( $(this).previous(), {year_range:10} );" src="./css/calendar.gif" style="border:0px; cursor:pointer;"></div>
   </div>
       <div class="label-field-pair">
    <div class="label-container"><label>Due Date <span class="necessary-field">*</span> :</label> </div>
    <div class="input-container"><input id="additional_fees[due_date]" name="additional_fees[due_date]" type="text" value="July  4, 2012"> <img alt="Calendar" class="calendar_date_select_popup_icon" onClick="new CalendarDateSelect( $(this).previous(), {year_range:10} );" src="./css/calendar.gif" style="border:0px; cursor:pointer;"></div>
   </div>

    <input class="submit_button" name="commit" type="submit" value="► Save">
  </form>

</div>
</div> </div>

      <div class="extender"></div>
    </div>

<!-- footer -->
  <?php include("include/footer.php")?>
           