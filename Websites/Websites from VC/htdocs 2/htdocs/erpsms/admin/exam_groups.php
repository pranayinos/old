<?php 
$exam_new= new Main(); 
 $a=$_GET[batch_id];
$newsRecordSet = $exam_new->getdata('*',"exam_new","batch_id=$a","","");
$batch= new Main(); 

$newsRecordSet1 = $batch->getdata('*',"batch","batch_id=$a","","");
$record1 = $newsRecordSet1->getNextRecord();
//echo $record1[batch_course_code];
//echo $record1[batch_code];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><? echo $page_title ." | ". SITENAME ?></title><!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
 </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php include("include/sidebar5.php")?>
      <div id="content"> 
<div id="content-header">
  <img alt="Show_exam" src="../images/examination/show_exam.png">
  <h1>Exams</h1>
  <h3>Exam Groups</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    
      
        <li><a href="?page=exam_groups_new&bid=<?php echo $a ?>">New</a></li>
      
    
    
      <li><a href="?page=exam_grouping">Connect Exams</a></li>
    
  </ul>
</div>
<div id="page-yield">

  

  <div class="box">
    <div class="bread_crumb">
      <a href="?page=courses">Course</a> »
      <a href="?page=manage_course"><?php echo $record1[batch_course_code];?></a> »
      <a href="?page=courses_batches">Batch <?php echo $record1[batch_code];?></a> »
      Exams
    </div>


    <table id="listing" width="100%">
      <tbody><tr class="tr-head">
        <td>Exam Name</td>
        
          <td> Actions <img align="absmiddle" alt="Loader" border="0" id="loader" src="file:///C|/Documents and Settings/Administrator/Desktop/exam_groups_files/loader.gif" style="display: none;"></td>
        
      </tr>
      
      <?php 
 while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { 
?>
        <tr class="tr-odd">
          <td class="col-2">

            <a href="?page=exam_view_groups&id=<?=$record['exam_id']?>&batch_bid=<?php echo $a ?>"><?=$record['exam_name']?></a>
            
              <span><small>
                  
                  <s>Delete</s>
                </small></span>
            
          </td>
          
            <td class="col-2"><small>
                
                  
                    Result Published. 
                      <a href="#/batches/164/exam_groups#" onclick="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/exam/publish/134?status=result&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;7cX66LPCv5YM1HDtFkN/ZrOOHKtk8C6/RF5VrOx9TOM=&#39;)}); return false;">Resend SMS notification</a>
                    
                  
                

                <span id="publish-notice-134"></span>

              </small> </td>
          
        </tr>
      
       <!-- <tr class="tr-even">
          <td class="col-2">

            <a href="#/batches/164/exam_groups/135">Exam 2</a>
            
              <span><small>
                  
                  <s>Delete</s>
                </small></span>
            
          </td>
          
            <td class="col-2"><small>
                
                  
                    Result Published. 
                      <a href="/batches/164/exam_groups#" onclick="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/exam/publish/135?status=result&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;7cX66LPCv5YM1HDtFkN/ZrOOHKtk8C6/RF5VrOx9TOM=&#39;)}); return false;">Resend SMS notification</a>
                    
                  
                

                <span id="publish-notice-135"></span>

              </small> </td>
          
        </tr>-->
      
  <?php } ?>    
    </tbody></table>
    <div class="extender"></div>
  </div>
</div>
 </div>

      <div class="extender"></div>
    </div>

   <!-- footer -->
  <?php include("include/footer.php")?>