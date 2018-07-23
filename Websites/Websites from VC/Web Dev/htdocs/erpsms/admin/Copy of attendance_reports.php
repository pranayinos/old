<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
 <link href="css/attendace_report_ index.css" media="screen" rel="stylesheet" type="text/css">


<!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php include("include/sidebar3.php")?>
           
      <!-- end of side bar -->
      <div id="content"> 
<div id="content-header">
  <img alt="Attendence" src="../images/attendence/attendence.png">
  <h1>Attendance Report</h1>
  <h3>Report</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    <!-- <li><a href="/student_attendance/advance_search">Advanced</a></li> -->
  </ul>
</div>
<div id="page-yield">
  <div class="label-field-pair">
    <label> Select a batch: </label>
    <div class="text-input-bg">
      
        <select id="batch_id" name="batch[id]" onChange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/attendance_reports/mode&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;batch_id=&#39;+value+&#39;&amp;subject_id=&#39; + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;xxJR6wpEhTLG9QUj261eJPHsP9HkY0/i58PsH4MzUzE=&#39;)})"><option value="">Select a batch</option>
<option value="43">1 - 1st Semester</option>
<option value="44">2 - 2nd Semester</option>
<option value="45">3 - 1st Semester</option>
<option value="46">2 - 2nd Semester</option>
<option value="62">3 - 2012-2013</option></select>
      

      <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none; "><div class="extender"></div>
    </div>
  </div>


  <div id="subject"></div>
  <div id="mode">
<div class="label-field-pair">
  <label>Select a mode: </label>
 
<div class="text-input-bg">
<select id="mode_id" name="mode[id]" onChange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/attendance_reports/show&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;mode=&#39;+value+&#39;&amp;batch_id=&#39;+43+&#39;&amp;subject_id=&#39;+0 + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;xxJR6wpEhTLG9QUj261eJPHsP9HkY0/i58PsH4MzUzE=&#39;)})"><option value="">Select a mode</option>
<option value="Monthly">Monthly</option>
<option value="Overall">Overall</option></select>
</div> </div></div>
  <div id="month">
<div class="label-field-pair"><label>
  Select a month &amp; year :
</label>
<div class="text-input-bg2">
<select id="month_id" name="month[id]" onChange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/attendance_reports/year&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;month=&#39;+value+&#39;&amp;batch_id=&#39;+43+&#39;&amp;subject_id=&#39;+0 + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;xxJR6wpEhTLG9QUj261eJPHsP9HkY0/i58PsH4MzUzE=&#39;)})"><option value="">Select a month</option>
<option value="01">Jan</option>
<option value="02">Feb</option>
<option value="03">Mar</option>
<option value="04">Apr</option>
<option value="05">May</option>
<option value="06">Jun</option>
<option value="07">Jul</option>
<option value="08">Aug</option>
<option value="09">Sep</option>
<option value="10">Oct</option>
<option value="11">Nov</option>
<option value="12">Dec</option></select>
</div>
<div id="year">
<div class="text-input-bg3">
<select id="year_id" name="year[id]" onChange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/attendance_reports/report&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;year=&#39;+value+&#39;&amp;batch_id=&#39;+43+&#39;&amp;month=&#39;+02+&#39;&amp;subject_id=&#39;+0 + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;xxJR6wpEhTLG9QUj261eJPHsP9HkY0/i58PsH4MzUzE=&#39;)})"><option value="">Year</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option></select>
</div></div></div>
</div>
  <div id="year"></div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
  <div id="report">No Reports</div>
</div> </div>

      <div class="extender"></div>
    </div>

   <!-- footer -->
  <?php include("include/footer.php")?>