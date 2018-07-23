<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/renewal.css" media="screen" rel="stylesheet" type="text/css">

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
  <img alt="Library_small" src="../images/library/library_small.png">
  <h1>Library</h1>
  <h3>Book renewal</h3>
  <div id="app-back-button">
    <a href="/book_movement/renewal" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">
  
  
  
    <div class="renewal-form">
      
        <p class="red themed_text">This book has been reserved by <strong>Fedena </strong>
          <br>on 2012-01-09 05:15:33 UTC</p>
      
      <form action="book_movement/update_renewal/20" method="post" onsubmit="return validate()"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="Q82vux645k6qzovSWYhmFGB4wWYAjv9l0xSjcltafEc="></div>
        
        <div class="label-field-pair">
          <label for="book number">Book Number </label>
          <div class="text-input-bg">
            <input disabled="disabled" id="library_book_number" name="library[book_number]" size="30" type="text" value="109">
            <input id="issue_book_id" name="issue[book_id]" type="hidden" value="9">
          </div>
        </div>
        <div class="label-field-pair">
          <label for="book number">Book Title </label>
          <div class="text-input-bg">
            <input disabled="disabled" id="library_book_title" name="library[book_title]" size="30" type="text" value="Julius Ceaser">
          </div>
        </div>
        <div class="label-field-pair">
          <label for="book number">Name </label>
          <div class="text-input-bg">
            <input disabled="disabled" id="library_name" name="library[name]" size="30" type="text" value="Shanu ">
            <input id="issue_user_id" name="issue[user_id]" type="hidden" value="80">
          </div>
        </div>
        <div class="label-field-pair">
          
          <label for="Employee_No..">Employee no..</label>
          <div class="text-input-bg">
            <input disabled="disabled" id="library_name" name="library[name]" size="30" type="text" value="F19">
          </div>
        </div>
        <div class="label-field-pair">
          <label for="book number">Issue date</label>
          <div class="text-input-bg">
            <input disabled="disabled" id="issue[issue_date]" name="issue[issue_date]" type="text" value="2011-12-01"> <img alt="Calendar" class="calendar_date_select_popup_icon" onclick="new CalendarDateSelect( $(this).previous(), {year_range:10} );" src="./css/calendar.gif" style="border:0px; cursor:pointer;">
          </div>
        </div>
        <div class="label-field-pair">
          <label for="book number">Due Date </label>
          <div class="text-input-bg">
            <input id="issue[due_date]" name="issue[due_date]" readonly="readonly" type="text" value="2012-01-10"> <img alt="Calendar" class="calendar_date_select_popup_icon" onclick="new CalendarDateSelect( $(this).previous(), {popup:&#39;force&#39;, year_range:10} );" src="./css/calendar.gif" style="border:0px; cursor:pointer;">
          </div>
        </div>
    
        <input class="renew_button" id="issue_submit" name="commit" onclick="if (!confirm(&#39;Are You Sure?&#39;)) return false; return true;" type="submit" value="Renew">
    
    
    
      </form>
    
  </div>
</div>

<script type="text/javascript">
  function validate()
  {
    if($('fine').value == "")
    {
      alert("Please enter fine amount");
      return false;
    }
    else
    {
      if(isNaN($('fine').value)== false)
      {
        return true;
      }
      else
      {
        alert("Please enter numeric value for fine");
        return false;
      }
    }
  }
</script> </div>

      <div class="extender"></div>
    </div>

    <!-- footer -->
  <?php include("include/footer.php")?>