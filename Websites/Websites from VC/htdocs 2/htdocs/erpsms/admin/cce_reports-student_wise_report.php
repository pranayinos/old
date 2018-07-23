<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title><!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>


<link href="css/student_wise_report.css" media="screen" rel="stylesheet" type="text/css">

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
  <img src="../images/examination/show_exam.png" alt="Exam">
  <h1>CCE Reports</h1>
  <h3>Student-wise Report</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
  </ul>
</div>
<div id="page-yield">
  <div id="hider"></div>
  <div class="label-field-pair">
    <label for="batch_id">Select a batch</label>
    <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none; ">
    <div class="text-input-bg">
      <select id="batch_batch_id" name="batch[batch_id]" onChange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/cce_reports/student_wise_report&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;batch_id=&#39;+ value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;Fx0ICRRbO4rrhCDJM/624/7sUzivQNmpkyG0E+3MKOA=&#39;)})"><option value="">Select a batch</option>
<option value="43">1 - 1st Semester</option></select>
    </div>
  </div>
  <div id="student_list">
  
    <div class="list_name">
      Students in this batch
      <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none;">
    </div>
    <ul class="student_list">
      
        <li class="student_names">
          <a href="#" id="216" class="student-link"> r  </a>
        </li>
      
        <li class="student_names">
          <a href="#" id="126" class="student-link"> Raj Kumar Thapa</a>
        </li>
      
        <li class="student_names">
          <a href="#" id="114" class="student-link"> SACHIN RAMESH  TENDULKAR</a>
        </li>
      
        <li class="student_names">
          <a href="#" id="143" class="student-link"> ttt  </a>
        </li>
      
    </ul>
  

</div>
  <div id="report">


<div class="info">
  <div class="info-left">
    <div class="info1">
      <label class="field-label">Name</label>: <label class="infolbl"> r  </label>
    </div>
    <div class="info1">
      <label class="field-label">Course</label>: <label class="infolbl"> MBA Business Management </label>
    </div>
  </div>
  <div class="info-right">
    <div class="info1">
      <label class="field-label">Adm No.</label>: <label class="infolbl"> 1801</label>
    </div>
    <div class="info1">
      <label class="field-label">Batch</label>: <label class="infolbl"> 1st Semester</label>
    </div>
  </div>
</div>
<div id="score-table">
  <div class="custom_header">
    Scholastic Areas
  </div>
  <table id="listing" width="100%">
    
      <tbody><tr class="tr-head">
        <td>No Exams </td></tr>
    
  </tbody></table>
  
</div>

  <div class="custom_header">
    Co Scholastic Area
  </div>
  

<a href="#" class="user_button" target="_blank">► PDF Report</a></div>
</div>
<script type="text/javascript">
  function set_active(){
    $$('.active-link').each(function(e){
      e.removeClassName('active-link');
    });
    this.addClassName('active-link')
  }
  function draw_report(){
    Element.show('loader')
    new Ajax.Request('/cce_reports/student_report',
    {asynchronous:true, evalScripts:true,
      parameters:'student='+this.id,onSuccess:function(request){Element.hide('loader')}
    })
  }
  document.observe("dom:loaded", function() {
    $$('.student-link').invoke('observe','click',draw_report);
    $$('.student-link').invoke('observe','click',set_active);
  });
</script> </div>

      <div class="extender"></div>
    </div>

   <!-- footer -->
  <?php include("include/footer.php")?> 