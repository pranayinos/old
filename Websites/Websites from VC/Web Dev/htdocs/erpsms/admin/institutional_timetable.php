<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="./css/timetable.css" media="screen" rel="stylesheet" type="text/css">


<!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php include("include/sidebar4.php")?>
           
      <!-- end of side bar -->
      
<div id="content">
<div id="content-header">
<img alt="Show_timetable" src="../images/show_timetable.png">
<h1>Timetable</h1>
<h3>Institutional Timetable</h3>
<div id="app-back-button">
<a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
</div>
</div>
<div id="page-yield">
<div id="timetable">
<div id="register">
<div class="header">
<div class="prev">
<a href="#" onClick="new Ajax.Request(&#39;/timetable/timetable?next=2012-07-06&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;IgTf573VbnZdyF3C2/oQQkEv18QSwa0HJCgS961mcqI=&#39;)}); return false;">◄</a>
</div>
<div class="month">
07 July 2012
</div>
<div class="next">
<a href="#" onClick="new Ajax.Request(&#39;/timetable/timetable?next=2012-07-08&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;IgTf573VbnZdyF3C2/oQQkEv18QSwa0HJCgS961mcqI=&#39;)}); return false;">►</a>
</div>
<div class="extender"></div>
</div>
</div>
<div class="table">
<!--<div class="no-tt-entry">No Timetable entry for Batch: 10 - 2010 A </div>
<div class="no-tt-entry">No Timetable entry for Batch: 10 - 2010 B </div>
<div class="no-tt-entry">No Timetable entry for Batch: B.A.HIS.I st SEM - 2011-12 </div>-->
<!--<table border="0" align="center" width="100%" id="timing" cellspacing="0">
<tbody><tr>
<td class="head">
<div class="top">
Time
</div>
<div class="bottom">
<div class="course">
B.COM 1st SEM - 2011-12
</div>
</div>
</td>
<td class="td-blank"> </td>
<td>
<div class="top">
02:20AM-03:00AM
</div>
<div class="bottom">
<div class="subject">
2B02COM
</div>
<div class="employee">
JAYAKANTH
</div>
</div>
</td>
</tr>
</tbody></table>-->
<div class="no-tt-entry">No Timetable entry for Batch: BSc.MATHS I st SEM - 2011-12 </div>
<div class="no-tt-entry">No Timetable entry for Batch: BSc.PHY I st SEM - 2011-12 </div>
<div class="no-tt-entry">No Timetable entry for Batch: ece - 2013-2014 </div>
<div class="no-tt-entry">No Timetable entry for Batch: I sem B.Sc CHE - 2010-2011 </div>
</div>
</div>
</div> </div>
<div class="extender"></div>
</div>
<!-- footer -->
  <?php include("include/footer.php")?>