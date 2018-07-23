<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/photo_add.css" media="screen" rel="stylesheet" type="text/css">
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
  <h1>Attendance</h1>
  <h3>Advanced Search</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">
  <div id="box">
    <div id="error-container"></div>
 <form action="./student_current_year_report_files/student_current_year_report.htm" method="post" onSubmit="new Ajax.Request(&#39;/student_attendance/student/126&#39;, {asynchronous:true, evalScripts:true, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="zXiTCPpWxKE642ropcQmwKm4q2Bc1r3gAuUZmRwQQnw="></div>
   <div class="label-field-pair">
      <label for="student">Student Name</label>
      <div class="text-input-bg">
        <input disabled="disabled" id="advance_search_student_name" name="advance_search[student_name]" size="30" type="text" value="Raj Kumar Thapa"></div>
    </div>
    <div class="label-field-pair">
      <label for="student">Admission no</label>
      <div class="text-input-bg">
        <input disabled="disabled" id="advance_search_student_id" name="advance_search[student_id]" size="30" type="text" value="3"></div>
    </div>
 
    <div class="label-field-pair">
      <label for="student">Mode
       <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none; ">
      </label>
      <div class="text-input-bg">
        <select id="advance_search_mode" name="advance_search[mode]" onChange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/student_attendance/month&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;mode=&#39;+value+&#39;&amp;id=126&#39; + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;zXiTCPpWxKE642ropcQmwKm4q2Bc1r3gAuUZmRwQQnw=&#39;)})"><option value="">Select a mode</option>
<option value="Monthly">Monthly</option>
<option value="Overall">Overall</option></select>
      </div>

    </div>
  <div id="month">
<!--<div class="label-field-pair"><label>
  Select a month &amp; year :
</label>
<div class="text-input-bg2">
<select id="advance_search_month" name="advance_search[month]"><option value="">Month</option>
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
s
<div id="year">
<div class="text-input-bg3">
<select id="advance_search_year" name="advance_search[year]"><option value="">Year</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option></select>
</div></div>
</div></div>-->
     <input class="submit_button" name="commit" type="submit" value="► OK">

</form>

  <div id="report"></div>
  </div>
</div> </div>

      <div class="extender"></div>
    </div>

    <!-- footer -->
  <?php include("include/footer.php")?>