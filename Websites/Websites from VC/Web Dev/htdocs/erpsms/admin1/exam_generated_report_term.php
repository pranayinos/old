<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/generated_report.css" media="screen" rel="stylesheet" type="text/css">
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
  <img alt="Show_exam" src="../images/examination/show_exam.png">
  <h1>Exams</h1>
  <h3>Generated Report</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/exam/generated_report?exam_group=13&student=114#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    
      <li><a href="?page=consolidated_exam_report">Consolidated Report</a></li>
    
    
      <li><a href="#" target="_blank">PDF Report</a></li>
    
  </ul>
</div>
<div id="page-yield">

  
  <h3 align="center">1 - 1st Semester - Term 1</h3>
  <div id="student_list">
    
  <div class="list_name">
    Students in this batch
    <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none;">
  </div>
  <ul class="student_list">
    
      <li class="student_names">
        <a href="http://demo.fedena.org/exam/generated_report?exam_group=13&student=114#" id="114" class="student-link"> SACHIN RAMESH  TENDULKAR</a>
      </li>
    
  </ul>

  </div>
  <div id="exam_wise_report">
    


















  

  


  
  
  <div id="score-table">
    <div class="custom_header">
      <span class="student">SACHIN RAMESH  TENDULKAR - 1</span>
    </div>
    <table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
      <tbody><tr class="tr-head">
        <td>Subject</td>
        
          <td>Marks Obtained</td>
          <td>Max Marks</td>
          <td>Grades</td>
          <td>Percentage(%)</td>
        
      </tr>
      
        <tr class="tr-odd">
          <td class="col-1"> Accounting </td>
          
            <td class="col-1">90.0</td>
            
            <td class="col-1">100.0</td>
            
            <td class="col-1">A</td>
            <td class="col-1">90.0</td>
          
        </tr>
      
        <tr class="tr-even">
          <td class="col-1"> Advertising </td>
          
            <td class="col-1">85.0</td>
            
            <td class="col-1">100.0</td>
            
            <td class="col-1">B</td>
            <td class="col-1">85.0</td>
          
        </tr>
      

      
        <tr class="tr-head">
          <td>Total marks:</td>
          <td>175.0</td><td>200.0</td>
          
            <td>-</td>
          
          <td>87.50</td>
        </tr>
      
    </tbody></table>

    
      <div class="custom_header">
        Class Average Marks : 152.50 | Class Average % : 76.25
      </div>
    
  </div>


  
    <script type="text/javascript" src="./exam_generated_report_term_files/swfobject.js"></script>
          <object type="application/x-shockwave-flash" data="http://demo.fedena.org/open-flash-chart.swf" width="770" height="350" id="flash_content_ErFj80Tn" style="visibility: visible; "><param name="flashvars" value="data-file=%2Fexam%2Fgraph_for_generated_report%3Fbatch%3D43%26examgroup%3D13%26student%3D114"><param name="wmode" value="transparent"></object>
      <script type="text/javascript">
        swfobject.embedSWF("/open-flash-chart.swf", "flash_content_ErFj80Tn", "770", "350", "9.0.0", "expressInstall.swf",{"data-file":"%2Fexam%2Fgraph_for_generated_report%3Fbatch%3D43%26examgroup%3D13%26student%3D114"});
      </script>

  

<div class="extender"></div>

  </div>
  <div class="box">
    
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
    new Ajax.Request('/exam/generated_report',
    {asynchronous:true, evalScripts:true,
      parameters:'student='+this.id+'&exam_group=13',onSuccess:function(request){Element.hide('loader')}
    })
  }
  document.observe("dom:loaded", function() {
    $$('.student-link').invoke('observe','click',draw_report);
    $$('.student-link').invoke('observe','click',set_active);
  });
</script>
 </div>

      <div class="extender"></div>
    </div>

     <!-- footer -->
  <?php include("include/footer.php")?>