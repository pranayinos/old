<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/generated_report4.css" media="screen" rel="stylesheet" type="text/css">
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
  <h3>Grouped exam Reports</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/exam/generated_report4?student=114&type=general#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">

</div>
<div id="page-yield">
  
  <h4 align="center">1st Semester - MBA Business Management </h4>
  <div id="student_list">
    
  <div class="list_name">
    Students in this batch
    <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none;">
  </div>
  <ul class="student_list">
    
      <li class="student_names">
        <a href="http://demo.fedena.org/exam/generated_report4?student=114&type=general#" id="114" class="student-link"> SACHIN RAMESH  TENDULKAR</a>
      </li>
    
  </ul>

  </div>
  <div id="grouped_exam_report">
    












  <div id="score-table">
    <div class="custom_header">
        <span class="student">SACHIN RAMESH  TENDULKAR - 1</span>
      </div><table id="listing" width="100%">
      
      <tbody><tr class="tr-head">
        <td>Subject</td>
        
          <td>Term 1</td>
        
        <td>Total</td>
      </tr>
      
        <tr class="tr-odd">
          <td class="col-2">Accounting </td>
          

          

            
            
            <td class="col-3">
              
                
                  90.0/100.0[A]
                
              
            
          </td>
          
          
            <td class="col-1">90.0</td>
          
        </tr>

      
        <tr class="tr-even">
          <td class="col-2">Advertising </td>
          

          

            
            
            <td class="col-3">
              
                
                  85.0/100.0[B]
                
              
            
          </td>
          
          
            <td class="col-1">85.0</td>
          
        </tr>

      
      <tr class="tr-head">
        <td>Total</td>
        
        

        
          
            <td>175.0</td>
          
          
            
            
          
        
        <td></td>
      </tr>
      <tr></tr>
    </tbody></table>
    
      <div class="custom_header">
        
        Total marks = 175.0 | Aggregate % = 87.50
      </div>
    
  </div>

<div class="extender"></div>
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
    new Ajax.Request('/exam/generated_report4',
    {asynchronous:true, evalScripts:true,
      parameters:'student='+this.id+'&type=general',onSuccess:function(request){Element.hide('loader')}
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