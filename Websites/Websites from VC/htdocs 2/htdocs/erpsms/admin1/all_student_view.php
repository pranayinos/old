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
 <img alt="Student_details_logo" src="../images/student_details/student_details_logo.jpg">
  <h1>Student Details </h1>
  <h3>View Details </h3>
  <div id="app-back-button">
    <a href="/student/view_all#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>  </div>
</div>

<div id="page-yield">

  

  <div class="label-field-pair-select-class">
    <label for="student-detail-select-class">Select a Batch </label>
    <div class="text-input-bg"><select id="course_course_id" name="course[course_id]" onChange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/student/list_students_by_course&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;batch_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;omMU20YNDuDFfaF9QEX37vCwQgaEtdId3aD9Mz/PHE0=&#39;)})"><option value="">Select a Batch</option>
<option value="11">10 - 2010 A</option>
<option value="14">10 - 2010 B</option>
<option value="2">B.A.HIS.I st SEM - 2011-12</option>
<option value="3">B.COM 1st SEM - 2011-12</option>
<option value="4">BSc.MATHS I st SEM - 2011-12</option>
<option value="5">BSc.PHY I st SEM - 2011-12</option>
<option value="13">ece - 2013-2014</option>
<option value="8">I sem B.Sc CHE  - 2010-2011</option></select></div>
    <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none; ">
  </div>
  <div id="students">

<div class="students-table">
  <table align="center" width="100%" cellpadding="1" cellspacing="1">
    <tbody><tr class="tr-head">
      <td width="10%">Sl  no.</td>
      <td width="40%">Name</td>
      <td width="21%">Adm no.</td>
      <td width="29%"></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>

    
      <tr class="tr-odd">
        <td class="col-1">
          1
        </td>

        <td class="col-2">
          <a href="/student/profile/31">ABHINA  P</a>
        </td>

        <td class="col-1">
          119
        </td>

        <td class="col-7">
          <a href="/student/profile/31">View Profile</a>
        </td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-1">
          2
        </td>

        <td class="col-2">
          <a href="/student/profile/22">ABHIRAJ   P</a>
        </td>

        <td class="col-1">
          111
        </td>

        <td class="col-7">
          <a href="/student/profile/22">View Profile</a>
        </td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-1">
          3
        </td>

        <td class="col-2">
          <a href="/student/profile/23">AHAMMED   SHAFEEQUE P</a>
        </td>

        <td class="col-1">
          112
        </td>

        <td class="col-7">
          <a href="/student/profile/23">View Profile</a>
        </td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-1">
          4
        </td>

        <td class="col-2">
          <a href="/student/profile/24">AHMED   RIZWAN C.L.</a>
        </td>

        <td class="col-1">
          113
        </td>

        <td class="col-7">
          <a href="/student/profile/24">View Profile</a>
        </td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-1">
          5
        </td>

        <td class="col-2">
          <a href="/student/profile/32">AJINA  K.D</a>
        </td>

        <td class="col-1">
          120
        </td>

        <td class="col-7">
          <a href="/student/profile/32">View Profile</a>
        </td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-1">
          6
        </td>

        <td class="col-2">
          <a href="/student/profile/51">Ajith  </a>
        </td>

        <td class="col-1">
          773
        </td>

        <td class="col-7">
          <a href="/student/profile/51">View Profile</a>
        </td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-1">
          7
        </td>

        <td class="col-2">
          <a href="/student/profile/34">AKHIL  CHANDRAN</a>
        </td>

        <td class="col-1">
          122
        </td>

        <td class="col-7">
          <a href="/student/profile/34">View Profile</a>
        </td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-1">
          8
        </td>

        <td class="col-2">
          <a href="/student/profile/15">AKHILA  </a>
        </td>

        <td class="col-1">
          106
        </td>

        <td class="col-7">
          <a href="/student/profile/15">View Profile</a>
        </td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-1">
          9
        </td>

        <td class="col-2">
          <a href="/student/profile/25">ANAND   T</a>
        </td>

        <td class="col-1">
          114
        </td>

        <td class="col-7">
          <a href="/student/profile/25">View Profile</a>
        </td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-1">
          10
        </td>

        <td class="col-2">
          <a href="/student/profile/26">ANIL   KUMAR M</a>
        </td>

        <td class="col-1">
          115
        </td>

        <td class="col-7">
          <a href="/student/profile/26">View Profile</a>
        </td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-1">
          11
        </td>

        <td class="col-2">
          <a href="/student/profile/11">ANITHA  S</a>
        </td>

        <td class="col-1">
          104
        </td>

        <td class="col-7">
          <a href="/student/profile/11">View Profile</a>
        </td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-1">
          12
        </td>

        <td class="col-2">
          <a href="/student/profile/20">ATHIRA  KRISHNAN</a>
        </td>

        <td class="col-1">
          109
        </td>

        <td class="col-7">
          <a href="/student/profile/20">View Profile</a>
        </td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-1">
          13
        </td>

        <td class="col-2">
          <a href="/student/profile/28">DEEPAK   KRISHNA P.V</a>
        </td>

        <td class="col-1">
          117
        </td>

        <td class="col-7">
          <a href="/student/profile/28">View Profile</a>
        </td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-1">
          14
        </td>

        <td class="col-2">
          <a href="/student/profile/29">deviprasad  </a>
        </td>

        <td class="col-1">
          1234
        </td>

        <td class="col-7">
          <a href="/student/profile/29">View Profile</a>
        </td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-1">
          15
        </td>

        <td class="col-2">
          <a href="/student/profile/21">FARZANA   C.M</a>
        </td>

        <td class="col-1">
          110
        </td>

        <td class="col-7">
          <a href="/student/profile/21">View Profile</a>
        </td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-1">
          16
        </td>

        <td class="col-2">
          <a href="/student/profile/64">g g g</a>
        </td>

        <td class="col-1">
          1014
        </td>

        <td class="col-7">
          <a href="/student/profile/64">View Profile</a>
        </td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-1">
          17
        </td>

        <td class="col-2">
          <a href="/student/profile/8">KIRAN  KUMAR</a>
        </td>

        <td class="col-1">
          1011
        </td>

        <td class="col-7">
          <a href="/student/profile/8">View Profile</a>
        </td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-1">
          18
        </td>

        <td class="col-2">
          <a href="/student/profile/10">PRIYA  DEVID</a>
        </td>

        <td class="col-1">
          103
        </td>

        <td class="col-7">
          <a href="/student/profile/10">View Profile</a>
        </td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-1">
          19
        </td>

        <td class="col-2">
          <a href="/student/profile/30">REMYA   P</a>
        </td>

        <td class="col-1">
          118
        </td>

        <td class="col-7">
          <a href="/student/profile/30">View Profile</a>
        </td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-1">
          20
        </td>

        <td class="col-2">
          <a href="/student/profile/16">SOORAJ   BASKAR</a>
        </td>

        <td class="col-1">
          107
        </td>

        <td class="col-7">
          <a href="/student/profile/16">View Profile</a>
        </td>
      </tr>
    
      <tr class="tr-odd">
        <td class="col-1">
          21
        </td>

        <td class="col-2">
          <a href="/student/profile/19">SOUMYA  </a>
        </td>

        <td class="col-1">
          108
        </td>

        <td class="col-7">
          <a href="/student/profile/19">View Profile</a>
        </td>
      </tr>
    
      <tr class="tr-even">
        <td class="col-1">
          22
        </td>

        <td class="col-2">
          <a href="/student/profile/9">SUMESH  S</a>
        </td>

        <td class="col-1">
          1
        </td>

        <td class="col-7">
          <a href="/student/profile/9">View Profile</a>
        </td>
      </tr>
    
  </tbody></table>
</div>
</div>

</div> </div>

      <div class="extender"></div>
    </div>

<!-- footer -->
  <?php include("include/footer.php")?>
           