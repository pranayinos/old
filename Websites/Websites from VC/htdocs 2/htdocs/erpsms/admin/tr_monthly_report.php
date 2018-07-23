<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
    <link href="css/categories.css" media="screen" rel="stylesheet" type="text/css">
    <link media="screen" rel="stylesheet" href="popup/colorbox.css" />
<script src="popup/jquery-latest.min.js" type="text/javascript"></script>
<script src="popup/jquery.colorbox-min.js" type="text/javascript"></script>
 <link href="css/master_fees.css" media="screen" rel="stylesheet" type="text/css">

<script type="text/javascript">
    $(function()
    {
        $('#dis').colorbox({opacity:0.3});
		  $('#dis1').colorbox({opacity:0.3});
		    $('#dis2').colorbox({opacity:0.3});
			  $('#dis3').colorbox({opacity:0.3});
			    $('#dis4').colorbox({opacity:0.3});
				  $('#dis5').colorbox({opacity:0.3});
				  
    });
	
	
	
</script>
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
  <h1>Transactions</h1>
  <h3>Monthly Transactions</h3>
  <div id="app-back-button">
        <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    <li><a href="/finance/transaction_pdf?end_date=2012-07-05&start_date=2012-03-05" target="_blank">PDF Report</a></li>
  </ul>
</div>
<div id="page-yield">
  <div class="box">
  <form action="/finance/update_monthly_report" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="lCoop3t9/i0YfEvOyx6yVM18cQK+IaV/qhVHk4F/+vk="></div>
    <div class="label-field-pair">
      <label>Select start date:</label>
      <div class="input-container"><input id="start_date" name="start_date" type="text" value=" 5-07-2012"> <img alt="Calendar" class="calendar_date_select_popup_icon" onClick="new CalendarDateSelect( $(this).previous(), {year_range:10} );" src="./css/calendar.gif" style="border:0px; cursor:pointer;"></div>
    </div>
    <div class="label-field-pair">
      <label>Select end date: </label>
      <div class="input-container"><input id="end_date" name="end_date" type="text" value=" 5-07-2012"> <img alt="Calendar" class="calendar_date_select_popup_icon" onClick="new CalendarDateSelect( $(this).previous(), {year_range:10} );" src="./css/calendar.gif" style="border:0px; cursor:pointer;"></div>
    </div>

         <input class="submit_button" name="commit" type="submit" value="► Monthly Report">
  </form>
</div>
</div>


 </div>


<div id="page-yield">

  <table id="listing" align="center" width="80%" cellpadding="1" cellspacing="1">
    
      <tbody><tr class="tr-head">
        <td>Sl  no.</td>
        <td>Particulars</td>
        <td>Expenses(Rs )</td>
        <td>Income(Rs )</td>
        <td>Date</td>
      </tr>
      <tr class="tr-blank"></tr>
      
      
      

      

        <tr class="tr-odd">
          <td class="col-1">1</td>
          
            <td class="col-2">     <a href='tr_des.php' id='dis' > Salary Account</a> </td></td>
          
          <td class="col-3" align="right">0</td>
          <td> </td>
          <td class="col-3"> - </td>
        </tr>

      

      <tr class="tr-even">
      <td class="col-1">2</td>
        
          <td class="col-2"><a href='tr_des.php' id='dis1' >Donations</a></td>
        
        <td></td>
        <td class="col-3" align="right">0</td>
        <td class="col-3"> - </td>
      </tr>


      <tr class="tr-odd">
        <td class="col-1">3</td>
        
          <td class="col-2"><a href='tr_des.php' id='dis2' >Fees Account</a> </td>
        
        <td></td>
        <td class="col-3" align="right">1100.0</td>
        <td class="col-3"> - </td>
      </tr>
      
      <tr class="tr-even">
        <td class="col-1">4</td>
          <td class="col-2"><a href='tr_des.php' id='dis3' >Hostel Account</a> </td>
        <td></td>
        <td class="col-3" align="right">90.0</td>
        <td class="col-3"> - </td>
      </tr>
      
      <tr class="tr-odd">
        <td class="col-1">5</td>
          <td class="col-2"><a href='tr_des.php' id='dis4' >Instant Fee Account</a> </td>
        <td></td>
        <td class="col-3" align="right">90.0</td>
        <td class="col-3"> - </td>
      </tr>
      
      <tr class="tr-even">
        <td class="col-1">6</td>
          <td class="col-2"><a href='tr_des.php' id='dis5' >Library Account</a> </td>
        <td></td>
        <td class="col-3" align="right">90.0</td>
        <td class="col-3"> - </td>
      </tr>
      
      <tr class="tr-odd">
        <td class="col-1">7</td>
          <td class="col-2"><a href='tr_des.php' id='dis' >Transport Account</a> </td>
        <td></td>
        <td class="col-3" align="right">90.0</td>
        <td class="col-3"> - </td>
      </tr>
      
      
      
        <tr class="tr-even">
          <td class="col-1">8</td>
          
            <td class="col-2">Library fine </td>
            <td class="col-3" align="right">90.0</td>
            <td></td>
            <td class="col-3">07-05-2012</td>

            
          
        </tr>
      
      <tr class="tr-blank"></tr>
      <tr class="tr-odd">
        <td class="col-1"> </td>
        <td class="col-2">Grand Total</td>
        
          <td></td>
          <td class="col-3" align="right">1010.0</td>
          
        
          <td></td>
      </tr>
   
  </tbody></table>

  <br>
  <br>
 
    <script type="text/javascript" src="./update_monthly_report_files/swfobject.js"></script>
          <script type="text/javascript">
AC_FL_RunContent( 'type','application/x-shockwave-flash','data','/open-flash-chart.swf','width','960','height','500','id','flash_content_qI3sAtNr','style','visibility: visible; ','flashvars','data-file=graph_for_update_monthly_report%3Fstart_date%3D2012-03-05%26end_date%3D2012-07-05','wmode','transparent' ); //end AC code
</script><noscript><object type="application/x-shockwave-flash" data="/open-flash-chart.swf" width="960" height="500" id="flash_content_qI3sAtNr" style="visibility: visible; "><param name="flashvars" value="data-file=graph_for_update_monthly_report%3Fstart_date%3D2012-03-05%26end_date%3D2012-07-05"><param name="wmode" value="transparent"></object></noscript>
      <script type="text/javascript">
        swfobject.embedSWF("/open-flash-chart.swf", "flash_content_qI3sAtNr", "960", "500", "9.0.0", "expressInstall.swf",{"data-file":"graph_for_update_monthly_report%3Fstart_date%3D2012-03-05%26end_date%3D2012-07-05"});
      </script>

  

</div>
 </div>

      <div class="extender"></div>
    </div>
      <div class="extender"></div>
    </div>


<!-- footer -->
  <?php include("include/footer.php")?>
           