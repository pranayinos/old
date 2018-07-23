<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

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
   <?php include("include/sidebar.php")?>
           
      <!-- end of side bar -->
      <div id="content"> 
<div id="content-header">
  <img alt="Attendence" src="../images/attendence/attendence.png">
  <h1>Attendance Report</h1>
  <h3>Filtered Report</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="page-yield">
  
  <div class="label-field-pair">
    <label>
      Total no. of working days : 4<br>
      Filtered: Below 
    </label>
  </div>
  <table id="listing" align="center" width="80%">
    <tbody><tr class="tr-head">
      <td>
        Name
      </td>
      <td>
        Total
      </td>
      <td>
        Percentage(%)
      </td>
    </tr>
    <tr class="blank"></tr>
    </tbody></table>
<form action="#" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="I3DHghKAk8kIHzKPL2/3pkVAWfO/jMR1Mvn1/0PTETo="></div>
    <input id="filter_batch" name="filter[batch]" type="hidden" value="3">
    <input id="filter_start_date" name="filter[start_date]" type="hidden" value="2012-03-01">
    <input id="filter_end_date" name="filter[end_date]" type="hidden" value="2012-03-31">
    
      <input id="filter_subject" name="filter[subject]" type="hidden" value="17">
    
    <input id="filter_range" name="filter[range]" type="hidden" value="Below">
    <input id="filter_value" name="filter[value]" type="hidden" value="">
    <input class="submit_button" name="commit" type="submit" value="► PDF Report">
  </form>

  <div class="extender"></div>
</div> </div>

      <div class="extender"></div>
    </div>

      <!-- footer -->
  <?php include("include/footer.php")?>