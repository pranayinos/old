<?php  $a=$_GET[id];
 $b=$_GET[batch_bid];
$batch= new Main(); 

$newsRecordSet1 = $batch->getdata('*',"batch","batch_id=$b","","");
$record1 = $newsRecordSet1->getNextRecord();
//echo $record1[batch_course_code];
//echo $record1[batch_code];

//exam table be used
$exam= new Main(); 
$newsRecordSet2 = $exam->getdata('*',"exam","batch_id=$b","","");
$record2 = $newsRecordSet2->getNextRecord();
//echo $c=$record2[batch_id];
//echo $d=$record2[exam_subject_id];
//$subject= new Main();
//$newsRecordSet3 = $subject->getdata('*',"subject","subject_id=$d","","");
//$record3 = $newsRecordSet3->getNextRecord();
//echo $d=$record3[subject_name];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
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
  <img alt="Show_exam" src="../images/examination/show_exam.png">
  <h1>Exams</h1>
  <h3>View Exam Groups</h3>
  <div id="app-back-button">
    <a href="#/batches/164/exam_groups/134#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    
      
        <li><a href="#/batches/164/exam_groups/134#" onclick="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/exam/publish/134?status=result&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;m60Z3UD4HXri7oT5ye+VF0/rmtW/owFZ4VtISYdOhvw=&#39;)}); return false;">Publish Exam Result</a></li>
      
    
    
      <li><a href="?page=exams_new&id=<?php echo $a ?>&bid=<?php echo $b ?>">New</a></li>
    
  </ul>
</div>
<div id="page-yield">

  

  <div class="box">
    <div class="bread_crumb">
      <a href="#">Course</a> »
      <a href="#"><?php echo $record1[batch_course_code];?> </a> »
      <a href="#">Batch <?php echo $record1[batch_code];?></a> »
      <a href="#">Exams</a> »
      Exam 1
    </div>

    <div class="update_msg">
      
        <h4>
          <div id="exam_group_name_134_edit">
            <span class="in_place_editor_field" id="exam_group_name_134_in_place_editor" title="Click to edit">Exam 1</span>
			<script type="text/javascript">
//<![CDATA[
new Ajax.InPlaceEditor('exam_group_name_134_in_place_editor', '/exam_groups/set_exam_group_name/134', {callback:function(form) { return Form.serialize(form) + '&authenticity_token=' + encodeURIComponent('m60Z3UD4HXri7oT5ye+VF0/rmtW/owFZ4VtISYdOhvw=') }})
//]]>
</script>
          </div>
        </h4>
      

      <h4><span class="flash_color" id="publish-notice-134"><img align="absmiddle" alt="Loader" border="0" id="loader" src="file:///C|/Documents and Settings/Administrator/Desktop/exam_view_groups_files/loader.gif" style="display: none;"></span></h4></div>
    
    
    
    
      <table id="listing">
        <tbody><tr class="tr-head">
          <td>Subject</td>
          <td>Maximum Mark</td>
          <td>Minimum mark</td>
          
            <td>Manage</td>
          
        </tr>
               <?php 
 while( ($record2 = $newsRecordSet2->getNextRecord()) !== false )
    { 
?>
     
          
            <tr class="tr-odd">
              
              <td class="col-2"><a href="#/exam_groups/134/exams/496"><?=$record2['exam_subject_id']?></a></td>

              
                <td class="col-1">
                  <div id="exam_maximum_marks_496_edit">
                    <span class="in_place_editor_field" id="exam_maximum_marks_496_in_place_editor" title="Click to edit"><?=$record2['exam_sub_max_marks']?></span><script type="text/javascript">
//<![CDATA[
new Ajax.InPlaceEditor('exam_maximum_marks_496_in_place_editor', '/exam_groups/set_exam_maximum_marks/496', {callback:function(form) { return Form.serialize(form) + '&authenticity_token=' + encodeURIComponent('m60Z3UD4HXri7oT5ye+VF0/rmtW/owFZ4VtISYdOhvw=') }, cols:1})
//]]>
</script>
                  </div>
                </td>
                <td class="col-1">
                  <div id="exam_minimum_marks_496_edit">
                  <span class="in_place_editor_field" id="exam_minimum_marks_496_in_place_editor" title="Click to edit"><?=$record2['exam_sub_min_marks']?></span><script type="text/javascript">
//<![CDATA[
new Ajax.InPlaceEditor('exam_minimum_marks_496_in_place_editor', '/exam_groups/set_exam_minimum_marks/496', {callback:function(form) { return Form.serialize(form) + '&authenticity_token=' + encodeURIComponent('m60Z3UD4HXri7oT5ye+VF0/rmtW/owFZ4VtISYdOhvw=') }, cols:1})
//]]>
</script></div></td>
                
                <td class="col-1">
                  
                    <small><s>Edit</s></small>
                  
                  
                    <small><s>Delete</s></small>
                  
                </td>
<?php } ?>              
            </tr>
          
        
          
          
            
        
          
          
          
          
        
      </tbody></table>
    

    <div class="extender"></div>
  </div>
</div>
 </div>

      <div class="extender"></div>
    </div>

      <!-- footer -->
  <?php include("include/footer.php")?>