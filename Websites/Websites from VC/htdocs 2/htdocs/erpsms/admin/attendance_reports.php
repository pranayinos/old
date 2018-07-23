<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/attendace_report_ index.css" media="screen" rel="stylesheet" type="text/css">


 </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php /*?><?php include("include/sidebar5.php")?><?php */?>
           
      <!-- end of side bar -->
      <div id="fullcontent"> 
<div id="content-header">
  <img alt="Attendence" src="../images/attendence/attendence.png">
  <h1>Attendance Report</h1>
  <h3>Report</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    <!-- <li><a href="/student_attendance/advance_search">Advanced</a></li> -->
  </ul>
</div>
<div id="fullpage-yield">
  <div class="label-field-pair">
    <label> Select a batch: </label>
    <div class="text-input-bg">
      
        <select id="batch_id" name="batch[id]" onchange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/attendance_reports/mode&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;batch_id=&#39;+value+&#39;&amp;subject_id=&#39; + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;ApVtEQO/5ON2zwEhnDDdjWfDYXiY5jKRL31wwXy2aq8=&#39;)})"><option value="">Select a batch</option>
<option value="56">0001 - 1a-2012</option>
<option value="57">0001 - 1B-2012</option>
<option value="164">00COURSE STD 01 - 2012-2013</option>
<option value="161">0CCWA - 0Course CWA A 2012</option>
<option value="160">0CGPA - 0Course GPA A 2012</option>
<option value="162">0CN - 0Course Normal A 2012</option>
<option value="41">1 - A - 2012-2013</option>
<option value="58">1 - A - B</option>
<option value="27">1 - 2011-A</option>
<option value="40">10  - 2011-A</option>
<option value="77">10 A - 2012</option>
<option value="43">11 - A - 2012</option>
<option value="70">12 A - 2012-2013</option>
<option value="69">1A - 2011-2012</option>
<option value="55">1P - 1Physics 2011-A</option>
<option value="30">2 A - 2012</option>
<option value="35">2 A - 2013</option>
<option value="86">20 - 2312</option>
<option value="87">21-A - 2012</option>
<option value="102">23-23 - 23-2023</option>
<option value="104">27 - 27-27</option>
<option value="98">3 - January 2012</option>
<option value="116">30 - 2030-30-30</option>
<option value="117">31--31--31 - 31--31--31</option>
<option value="118">35-35 - Standard 58 A</option>
<option value="119">40-40-40 - 40-40-40-40</option>
<option value="181">40-40-40 - 40/40</option>
<option value="168">40-40-40 - 555</option>
<option value="167">40-40-40 - tt</option>
<option value="44">5 - 2011-a</option>
<option value="139">5 - 2012-B BATCH</option>
<option value="45">5 - B</option>
<option value="46">5 - C</option>
<option value="29">6 A - 2010 BATCH</option>
<option value="33">7 - 2010</option>
<option value="36">7 - 2010-B</option>
<option value="37">7 - 2010-C</option>
<option value="38">7 - 2010-D</option>
<option value="32">9 - A-2011</option>
<option value="165">B.A.HIS - 2012-First Batch</option>
<option value="72">B.Com I sem - 2011 -A</option>
<option value="75">B.Com I sem - New</option>
<option value="51">B.Sc.I MAT - 2012-A</option>
<option value="91">B.Sc.I MAT - 2012C</option>
<option value="175">bcom acc - 2012</option>
<option value="176">bcom acc - 2013</option>
<option value="178">BCOM GPA - 2012</option>
<option value="111">Biotechnology - 2012</option>
<option value="121">CIVIL  CIVIL  - CIVIL CIVIL </option>
<option value="78">Class 10 - A 2012</option>
<option value="88">CSE - SEM 1 - August 2012</option>
<option value="89">CSE - SEM 1 - December 2012</option>
<option value="163">CSE - 2012-2013</option>
<option value="171">CSE - vhjg</option>
<option value="15">DG - ASFSF</option>
<option value="183">ETC 2 - 2015</option>
<option value="148">GC - Grade CWA A 2012</option>
<option value="147">GN - Grado Normal A 2012</option>
<option value="173">h - hjk</option>
<option value="54">I  B.Sc.PHY - 2011-A</option>
<option value="73">I B.Sc.PLS - 2011-A</option>
<option value="105">I ME  - 2012--M12</option>
<option value="136">I ME  - 2012-Y BATCH</option>
<option value="60">III - A - 2012-13</option>
<option value="66">IMC-I=B-(2012-13) - 2012-13</option>
<option value="67">IMC-II-A - ASHISH</option>
<option value="112">IT-II - IT-2012-II -IT</option>
<option value="128">IX - 2012-A BATCH</option>
<option value="129">IX - 2012-B BATCH</option>
<option value="170">jhk - uk</option>
<option value="137">l ECE  - 2012-B BATCH-S</option>
<option value="138">l l ECE  - 2012-B BATCH-UU</option>
<option value="159">l l ECE  - New</option>
<option value="150">l l ECE  - test batch 1</option>
<option value="152">l l ECE  - testss</option>
<option value="153">l l ECE  - testss2132</option>
<option value="154">l l ECE  - testss2132d</option>
<option value="155">l l ECE  - testss213d2d</option>
<option value="156">l l ECE  - testss213d2d</option>
<option value="157">l l ECE  - testss213d2ds</option>
<option value="158">l l ECE  - testss213d2dss</option>
<option value="151">l l ECE  - teswtst</option>
<option value="180">l l I ECE  - 2014</option>
<option value="177">lI B.Sc.PLS - 2012-A</option>
<option value="143">LKG course - LKG course</option>
<option value="109">lll ME  - 2012--ME3333</option>
<option value="113">Microbiology - 2012</option>
<option value="144">PG - Primer Grado A 2012</option>
<option value="145">PG - Primer Grado B 2012</option>
<option value="146">PG - Primer Grado C 2012</option>
<option value="82">pLANT - 2050</option>
<option value="83">plus 2 - 2013</option>
<option value="84">plus 2 - 2014</option>
<option value="169">SMS - SMS-123</option>
<option value="149">standard XXX - standard XXX</option>
<option value="122">STD 1 GPA - A 2012</option>
<option value="125">STD 1 GPA - B 2012</option>
<option value="114">STD 2A - 2012-2013</option>
<option value="47">STD 5 - 2012 A</option>
<option value="48">STD 5 - 2012 B</option>
<option value="184">std12-b - 2012</option>
<option value="34">TEST 3 - 2012</option>
<option value="49">Test 5 - 2012</option>
<option value="81">Test 5 - 2020</option>
<option value="106">Test Class 10  - 2012</option>
<option value="31">Test STD - 2012-2013</option>
<option value="21">tests 4 - testB</option>
<option value="172">uiofg - uyo</option>
<option value="174">yj - uteir</option></select>
      

      <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none;"><div class="extender"></div>
    </div>
  </div>


  <div id="subject"></div>
  <div id="mode">
<div class="label-field-pair">
  <label>Select a mode: </label>
 
<div class="text-input-bg">
<select id="mode_id" name="mode[id]" onchange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/attendance_reports/show&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;mode=&#39;+value+&#39;&amp;batch_id=&#39;+56+&#39;&amp;subject_id=&#39;+0 + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;ApVtEQO/5ON2zwEhnDDdjWfDYXiY5jKRL31wwXy2aq8=&#39;)})"><option value="">Select a mode</option>
<option value="Monthly">Monthly</option>
<option value="Overall">Overall</option></select>
</div> </div></div>
  <div id="month">
<div class="label-field-pair"><label>
  Select a month &amp; year :
</label>
<div class="text-input-bg2">
<select id="month_id" name="month[id]" onchange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/attendance_reports/year&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;month=&#39;+value+&#39;&amp;batch_id=&#39;+56+&#39;&amp;subject_id=&#39;+0 + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;ApVtEQO/5ON2zwEhnDDdjWfDYXiY5jKRL31wwXy2aq8=&#39;)})"><option value="">Select a month</option>
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
<select id="year_id" name="year[id]" onchange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/attendance_reports/report&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;year=&#39;+value+&#39;&amp;batch_id=&#39;+56+&#39;&amp;month=&#39;+12+&#39;&amp;subject_id=&#39;+0 + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;ApVtEQO/5ON2zwEhnDDdjWfDYXiY5jKRL31wwXy2aq8=&#39;)})"><option value="">Year</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option></select>
</div></div></div>
</div>
  <div id="year"></div>
  <div id="report">
  <form action="http://demo.fedena.com/attendance_reports/filter" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="ApVtEQO/5ON2zwEhnDDdjWfDYXiY5jKRL31wwXy2aq8="></div>
    <input id="filter_batch" name="filter[batch]" type="hidden" value="56">
    <input id="filter_start_date" name="filter[start_date]" type="hidden" value="2012-12-01">
    <input id="filter_end_date" name="filter[end_date]" type="hidden" value="2012-12-03">
    <input id="filter_report_type" name="filter[report_type]" type="hidden">
    
      <input id="filter_subject" name="filter[subject]" type="hidden" value="0">
    

    <input class="submit_button" name="commit" type="submit" value="Filter">
    <div class="label-field-pair1">
      <label>Filter:</label>
      <div class="text-input-bg1"><select id="filter_range" name="filter[range]"><option value="Below">Below</option>
<option value="Above">Above</option>
<option value="Equals">Equals</option></select></div>
      <div class="text-input-bg1"><input id="filter_value" name="filter[value]" size="30" type="text"></div></div>
  </form>
  <div class="label-field-pair">
    <label>
      
        Total no. of working days = 3
      
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
    
      <tr class="tr-odd">
        <td class="col-2"><a href="?page=attendance_reports_student_details">1061  </a></td>
        <td class="col-3"> 2.0</td>
        <td class="col-3">66.67</td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-2"><a href="?page=attendance_reports_student_details">aaappp  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-2"><a href="?page=attendance_reports_student_details">abc  acd</a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-2"><a href="?page=attendance_reports_student_details">abc  acd</a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-2"><a href="?page=attendance_reports_student_details">abc  ac</a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-2"><a href="?page=attendance_reports_student_details">anil  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-2"><a href="?page=attendance_reports_student_details">Another  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-2"><a href="?page=attendance_reports_student_details">arun  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-2"><a href="?page=attendance_reports_student_details">asd  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-2"><a href="?page=attendance_reports_student_details">aws  awd</a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-2"><a href="?page=attendance_reports_student_details">basha  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-2"><a href="?page=attendance_reports_student_details">basha  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-2"><a href="?page=attendance_reports_student_details">dcg das d</a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-2"><a href="?page=attendance_reports_student_details">dddddd  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-2"><a href="?page=attendance_reports_student_details">Devan  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-2"><a href="?page=attendance_reports_student_details">df  fdg</a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-2"><a href="?page=attendance_reports_student_details">DS  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-2"><a href="?page=attendance_reports_student_details">dsaf  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-2"><a href="?page=attendance_reports_student_details">dsf  rfgtr</a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-2"><a href="?page=attendance_reports_student_details">dsfgds  dfyhr</a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-2"><a href="?page=attendance_reports_student_details">dsfh  dsfjiws</a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-2"><a href="?page=attendance_reports_student_details">dsg  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-2"><a href="?page=attendance_reports_student_details">ERF  DQ</a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-2"><a href="?page=attendance_reports_student_details">fch  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-2"><a href="?page=attendance_reports_student_details">fdsg  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-2"><a href="?page=attendance_reports_student_details">FFF  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-2"><a href="?page=attendance_reports_student_details">ffffff  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-2"><a href="?page=attendance_reports_student_details">fgfd  rdfhgh</a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-2"><a href="?page=attendance_reports_student_details">fghyfg  gfhuty</a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-2"><a href="?page=attendance_reports_student_details">fgsy  gtfhs</a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-2"><a href="?page=attendance_reports_student_details">fgyhftgh  tufg</a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-2"><a href="?page=attendance_reports_student_details">fgyhftgh  tufg</a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-2"><a href="?page=attendance_reports_student_details">fgyhftgh  tufg</a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-2"><a href="?page=attendance_reports_student_details">frtyer  tryge</a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-2"><a href="?page=attendance_reports_student_details">Gafoor  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-2"><a href="?page=attendance_reports_student_details">gfd  gds</a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>

    
      <tr class="tr-odd">
        <td class="col-2"><a href="?page=attendance_reports_student_details">gg  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-2"><a href="?page=attendance_reports_student_details">ggggggg  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-2"><a href="?page=attendance_reports_student_details">gtyhfr  tuyr</a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-2"><a href="?page=attendance_reports_student_details">gyuyhb  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-2"><a href="?page=attendance_reports_student_details">hfdg  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-2"><a href="?page=attendance_reports_student_details">hfgh  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-2"><a href="?page=attendance_reports_student_details">hisham a  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-2"><a href="?page=attendance_reports_student_details">jaggu  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-2"><a href="?page=attendance_reports_student_details">JOYNY B </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-2"><a href="?page=attendance_reports_student_details">jsdnjk  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-2"><a href="?page=attendance_reports_student_details">koti  p</a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-2"><a href="?page=attendance_reports_student_details">maneesh  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-2"><a href="?page=attendance_reports_student_details">manu  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-2"><a href="?page=attendance_reports_student_details">manuraj  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-2"><a href="?page=attendance_reports_student_details">Navya  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-2"><a href="?page=attendance_reports_student_details">nbn  gfgh</a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-2"><a href="?page=attendance_reports_student_details">New  Student</a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-2"><a href="?page=attendance_reports_student_details">poptest  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-2"><a href="?page=attendance_reports_student_details">rer  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-2"><a href="?page=attendance_reports_student_details">rter  gdfdsg</a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-2"><a href="?page=attendance_reports_student_details">rter  gdfdsg</a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-2"><a href="?page=attendance_reports_student_details">sad  sad</a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-2"><a href="?page=attendance_reports_student_details">sai  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-2"><a href="?page=attendance_reports_student_details">sai  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-2"><a href="?page=attendance_reports_student_details">sajeesh  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-2"><a href="?page=attendance_reports_student_details">sam  jonny</a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-2"><a href="?page=attendance_reports_student_details">Sample1  new</a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-2"><a href="?page=attendance_reports_student_details">sarun  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-2"><a href="?page=attendance_reports_student_details">sdfA dsaf dsaf</a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-2"><a href="?page=attendance_reports_student_details">SDFSD  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-2"><a href="?page=attendance_reports_student_details">sdfsd  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-2"><a href="?page=attendance_reports_student_details">sharath  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-2"><a href="?page=attendance_reports_student_details">Sooraj  S</a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-2"><a href="?page=attendance_reports_student_details">sr  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-2"><a href="?page=attendance_reports_student_details">suraj  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-2"><a href="?page=attendance_reports_student_details">Test  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-2"><a href="?page=attendance_reports_student_details">Test  Student</a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-2"><a href="?page=attendance_reports_student_details">Test  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-2"><a href="?page=attendance_reports_student_details">testformer  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-2"><a href="?page=attendance_reports_student_details">Testing  new</a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-2"><a href="?page=attendance_reports_student_details">ttt  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-2"><a href="http://demo.fedena.com/attendance_reports/student_details/679">tyt  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-2"><a href="?page=attendance_reports_student_details">uuuuuu  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-2"><a href="?page=attendance_reports_student_details">varun  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-2"><a href="?page=attendance_reports_student_details">xgfh  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-2"><a href="?page=attendance_reports_student_details">xz  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-2"><a href="?page=attendance_reports_student_details">yamaha  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-2"><a href="?page=attendance_reports_student_details">zx  </a></td>
        <td class="col-3"> 3.0</td>
        <td class="col-3">100.0</td>
      </tr>
    
  </tbody></table>
  <form action="/attendance_reports/report_pdf" method="post" target="_blank"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="ApVtEQO/5ON2zwEhnDDdjWfDYXiY5jKRL31wwXy2aq8="></div>
    <input id="filter_batch" name="filter[batch]" type="hidden" value="56">
    <input id="filter_start_date" name="filter[start_date]" type="hidden" value="2012-12-01">
    <input id="filter_end_date" name="filter[end_date]" type="hidden" value="2012-12-03">
    <input id="filter_report_type" name="filter[report_type]" type="hidden">
    
      <input id="filter_subject" name="filter[subject]" type="hidden" value="0">
    

    <input class="submit_button2" name="commit" type="submit" value="►PDF Report">
  </form>
</div>
</div> </div>

      <div class="extender"></div>
    </div>

   <!-- footer -->
  <?php include("include/footer.php")?>