<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title><!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<!--<link href="css/student_transcript1.css" media="screen" rel="stylesheet" type="text/css">
-->
<link href="css/student_wise_report4.css" media="screen" rel="stylesheet" type="text/css">

 <!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php /*?><?php include("include/sidebar.php")?><?php */?>
           
      <!-- end of side bar -->
      <div id="content"> 

<div id="content-header">
  <img src="../images/examination/show_exam.png" alt="Exam">
  <h1>Student Transcript</h1>
  <h3>CCE Report</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
  </ul>
</div>
<div id="page-yield">

  
  
  <div id="batch_list">
    
    <div class="list_name">
      All the batches of student
      <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none;">
    </div>
    <ul class="student_list">
      
        <li class="student_names">
          <a href="#" id="43" class="student-link active-link"> 1 - 1st Semester</a>
        </li>
      
    </ul>
  
  </div>
  <div id="report">
    


<div class="info">
  <div class="info-left">
    <div class="info1">
      <label class="field-label">Name</label>: <label class="infolbl"> Raj Kumar Thapa</label>
    </div>
    <div class="info1">
      <label class="field-label">Course</label>: <label class="infolbl"> MBA Business Management </label>
    </div>
  </div>
  <div class="info-right">
    <div class="info1">
      <label class="field-label">Adm No.</label>: <label class="infolbl"> 3</label>
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
        <td>Sl no</td>
        <td></td>
        
          <td colspan="4">Term I</td>
        
        
      </tr>
      <tr class="tr-head">
        <td></td>
        <td>Subjects</td>
        
          <td>FA1</td>
          <td>FA2</td>
          <td>SA1</td>
          <td>FA1+ FA2+ SA1</td>
        
        
      </tr>
      
        <tr class="center tr-odd">
          <td>1</td>
          <td class="left-aligned">Accounting </td>
          
          
            
              <td>A</td>
              <td></td>
              <td>C</td>
              <td>C</td>
            
          
          
        </tr>
      
        <tr class="center tr-even">
          <td>2</td>
          <td class="left-aligned">Advertising </td>
          
          
            
              <td>A</td>
              <td></td>
              <td>B</td>
              <td>C</td>
            
          
          
        </tr>
      
    
  </tbody></table>
  
</div>

  <div class="custom_header">
    Co Scholastic Area
  </div>
  
    <div id="score-table">
      <div class="custom_header">
        observation group
      </div>
      <table id="listing" width="100%">
        <tbody><tr class="tr-head">
          <td class="left-aligned">Descriptive Indicators</td>
          <td class="left-aligned">Grade</td>
        </tr>
        
          <tr class="tr-odd">
            <td class="left-10">First Criteria</td>
            <td class="left-10">A1</td>
          </tr>
        
      </tbody></table>
    </div>
  

<a href="#" class="user_button" target="_blank">► PDF Report</a>
  </div>
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
    new Ajax.Request('/cce_reports/student_transcript/126 ',
    {asynchronous:true, evalScripts:true,
      parameters:'batch_id='+this.id+'&type=regular',onSuccess:function(request){Element.hide('loader')}
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