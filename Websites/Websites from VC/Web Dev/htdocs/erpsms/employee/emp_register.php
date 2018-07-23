<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/attendance_index.css" media="screen" rel="stylesheet" type="text/css">
<link href="css/applicationleave.css" media="screen" rel="stylesheet" type="text/css">
<!--<link href="css/application2.css" media="screen" rel="stylesheet" type="text/css">-->

<!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

 <div id="content_wrapper">
<div id="fullcontent">
<div id="content-header">
<img alt="Attendence" src="../images/attendence/attendence.png">
<h1>Attendance</h1>
<h3>Attendance register</h3>
<div id="app-back-button">
<a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
</div>
</div>
<div id="fullpage-yield">
<div id="subjects">
<div class="label-field-pair">
<label>Select a Batch</label>
<div class="text-input-bg">
<select id="batch_id" name="batch[id]" onChange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/attendances/list_subject&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;batch_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;IgTf573VbnZdyF3C2/oQQkEv18QSwa0HJCgS961mcqI=&#39;)})"><option value="">Select a Batch</option>
<option value="11">10 - 2010 A</option>
<option value="14">10 - 2010 B</option>
<option value="2">B.A.HIS.I st SEM - 2011-12</option>
<option value="3">B.COM 1st SEM - 2011-12</option>
<option value="4">BSc.MATHS I st SEM - 2011-12</option>
<option value="5">BSc.PHY I st SEM - 2011-12</option>
<option value="13">ece - 2013-2014</option>
<option value="8">I sem B.Sc CHE - 2010-2011</option></select>
</div>
</div>
<img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none; ">
</div>
<div id="subjects">

<div class="label-field-pair">
  <label>Select a subject</label>
  <div class="text-input-bg">
    <select id="subject_id" name="subject[id]" onChange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/attendances/show&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;subject_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;IgTf573VbnZdyF3C2/oQQkEv18QSwa0HJCgS961mcqI=&#39;)})"><option value="">Select a subject</option>
<option value="1">Culture in Transition</option>
<option value="2">Introductory Economics lI</option>
<option value="3">Reading on Indian Constitution,Secularism and enviroment</option>
<option value="4">Reading literature in English</option>
<option value="5">Communicative Skill</option>
<option value="6">Bhashayum Aasayavinimayavum</option></select>
  </div>
</div></div>
<div id="register"><br /><br /><br /><br /><br /><br />


<div class="header">
  
    <div class="prev">
      <a href="#" onClick="new Ajax.Request(&#39;/attendances/show?next=2012-06-07&amp;subject_id=3&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;IgTf573VbnZdyF3C2/oQQkEv18QSwa0HJCgS961mcqI=&#39;)}); return false;">◄</a>
    </div>
    <div class="month">
      July 2012
    </div>
    <div class="next">
      <a href="#" onClick="new Ajax.Request(&#39;/attendances/show?next=2012-08-07&amp;subject_id=3&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;IgTf573VbnZdyF3C2/oQQkEv18QSwa0HJCgS961mcqI=&#39;)}); return false;">►</a>
    </div>
  
<div class="extender"></div>
</div>
<div class="box-1">
<table class="" align="center" width="100%">
  <tbody><tr class="tr-head">
    <td class="head-td-name">Name</td>
    
    

  </tr>



  
    <tr class="tr-odd">
      <td class="td-name">
        KIRAN
        <div class="date">
          <span><div>KIRAN  KUMAR</div></span>
        </div>
        
      </td>
      
    </tr>
  
    <tr class="tr-even">
      <td class="td-name">
        SUMESH
        <div class="date">
          <span><div>SUMESH  S</div></span>
        </div>
        
      </td>
      
    </tr>
  
    <tr class="tr-odd">
      <td class="td-name">
        PRIYA
        <div class="date">
          <span><div>PRIYA  DEVID</div></span>
        </div>
        
      </td>
      
    </tr>
  
    <tr class="tr-even">
      <td class="td-name">
        ANITHA
        <div class="date">
          <span><div>ANITHA  S</div></span>
        </div>
        
      </td>
      
    </tr>
  
    <tr class="tr-odd">
      <td class="td-name">
        AKHILA
        <div class="date">
          <span><div>AKHILA  </div></span>
        </div>
        
      </td>
      
    </tr>
  
    <tr class="tr-even">
      <td class="td-name">
        SOORAJ 
        <div class="date">
          <span><div>SOORAJ   BASKAR</div></span>
        </div>
        
      </td>
      
    </tr>
  
    <tr class="tr-odd">
      <td class="td-name">
        SOUMYA
        <div class="date">
          <span><div>SOUMYA  </div></span>
        </div>
        
      </td>
      
    </tr>
  
    <tr class="tr-even">
      <td class="td-name">
        ATHIRA
        <div class="date">
          <span><div>ATHIRA  KRISHNAN</div></span>
        </div>
        
      </td>
      
    </tr>
  
    <tr class="tr-odd">
      <td class="td-name">
        FARZANA 
        <div class="date">
          <span><div>FARZANA   C.M</div></span>
        </div>
        
      </td>
      
    </tr>
  
    <tr class="tr-even">
      <td class="td-name">
        ABHIRAJ
        <div class="date">
          <span><div>ABHIRAJ   P</div></span>
        </div>
        
      </td>
      
    </tr>
  
    <tr class="tr-odd">
      <td class="td-name">
        AHAMMED 
        <div class="date">
          <span><div>AHAMMED   SHAFEEQUE P</div></span>
        </div>
        
      </td>
      
    </tr>
  
    <tr class="tr-even">
      <td class="td-name">
        AHMED 
        <div class="date">
          <span><div>AHMED   RIZWAN C.L.</div></span>
        </div>
        
      </td>
      
    </tr>
  
    <tr class="tr-odd">
      <td class="td-name">
        ANAND 
        <div class="date">
          <span><div>ANAND   T</div></span>
        </div>
        
      </td>
      
    </tr>
  
    <tr class="tr-even">
      <td class="td-name">
        ANIL 
        <div class="date">
          <span><div>ANIL   KUMAR M</div></span>
        </div>
        
      </td>
      
    </tr>
  
    <tr class="tr-odd">
      <td class="td-name">
        DEEPAK 
        <div class="date">
          <span><div>DEEPAK   KRISHNA P.V</div></span>
        </div>
        
      </td>
      
    </tr>
  
    <tr class="tr-even">
      <td class="td-name">
        deviprasad
        <div class="date">
          <span><div>deviprasad  </div></span>
        </div>
        
      </td>
      
    </tr>
  
    <tr class="tr-odd">
      <td class="td-name">
        REMYA 
        <div class="date">
          <span><div>REMYA   P</div></span>
        </div>
        
      </td>
      
    </tr>
  
    <tr class="tr-even">
      <td class="td-name">
        ABHINA
        <div class="date">
          <span><div>ABHINA  P</div></span>
        </div>
        
      </td>
      
    </tr>
  
    <tr class="tr-odd">
      <td class="td-name">
        AJINA
        <div class="date">
          <span><div>AJINA  K.D</div></span>
        </div>
        
      </td>
      
    </tr>
  
    <tr class="tr-even">
      <td class="td-name">
        AKHIL
        <div class="date">
          <span><div>AKHIL  CHANDRAN</div></span>
        </div>
        
      </td>
      
    </tr>
  
    <tr class="tr-odd">
      <td class="td-name">
        Ajith
        <div class="date">
          <span><div>Ajith  </div></span>
        </div>
        
      </td>
      
    </tr>
  
    <tr class="tr-even">
      <td class="td-name">
        tyuty
        <div class="date">
          <span><div>tyuty tyuty tyutyu</div></span>
        </div>
        
      </td>
      
    </tr>
  
</tbody></table>
  </div></div>
<div id="modal-box" style="display:none;"></div>
</div> </div>
<div class="extender"></div>
</div>
<!-- footer -->
  <?php include("include/footer.php")?>