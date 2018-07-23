<?php 
$grade_id=$_GET[id];
$exam_cce_grade = new Main(); 
$newsRecordSet = $exam_cce_grade->getdata('*',"exam_cce_grade","cce_grade_id='$grade_id'","","");
$record = $newsRecordSet->getNextRecord();
$a= $record[cce_grade_name];
//echo $a;
$exam_cce_grade_next = new Main(); 
$newsRecordSet1 = $exam_cce_grade_next->getdata('*',"exam_cce_grade_next","cce_grade_name='$a'","","");


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files -----------><!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

 <link href="css/cce_gradeset1_show(1).css" media="screen" rel="stylesheet" type="text/css">
 <link media="screen" rel="stylesheet" href="popup/colorbox.css" />
<script src="popup/jquery-latest.min.js" type="text/javascript"></script>
<script src="popup/jquery.colorbox-min.js" type="text/javascript"></script>
 <script type="text/javascript">
    $(function()
    {
        $('#cce_grade_sets-1-addgrades_popup').colorbox({opacity:0.3});
		
    });
	
    $(function()
    {
        $('#cce_grade_sets_1_editgrade_popup').colorbox({opacity:0.3});
		
    });
	
</script>

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
  <img alt="Show_exam" src="../images/examination/show_exam.png">
  <h1>CCE Grade sets</h1>
  <h3>Grades</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    <li><a href='?page=cce_grade_sets-1-addgrades_popup&id=<?php echo $grade_id?>' id='cce_grade_sets-1-addgrades_popup' >Add Grade</a></li>
  </ul>
</div>

<div id="page-yield">
<div id="message"><div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div></div></div> 
  <div id="flash-box">
      
  </div>
  <div class="bread_crumb">
  
<?php /*?>    <?php 
  $record2 = $newsRecordSet1->getNextRecord();
     
?> <?php */?> 
    <a href="#">CCE Grade Set</a> »
    <?php /*?><?=$record2['cce_grade_name']?><?php */?>GRADE GRADESET 1 SCHOLASTIC
  </div>
  
 
  <div class="title">
   <!-- Name
    <div class="description">:&nbsp;&nbsp;&nbsp;Scholastic Grade Set 1</div>-->
  </div>
  <div id="grades">
    
  <table align="center" width="100%" cellpadding="1" cellspacing="1">
    <tbody><tr class="tr-head">
      <td>Grade</td>
      <td>Grade points</td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
    </tr>
     <?php 
 while( ($record1 = $newsRecordSet1->getNextRecord()) !== false )
    { 
?>  
      <tr class="tr-odd">
        <td class="col-1">
         <?=$record1['grade_name']?>
        </td>
        <td class="col-2">
           <?=$record1['grade_point']?>
        </td>
        <td class="col-3">
          <div class="category-edit"><a href='cce_grade_sets_1_editgrade_popup.php' id='cce_grade_sets_1_editgrade_popup' >Edit
          </a >Delete</a></div>
        </td>
      </tr>
    
   <?PHP }?>  
    
     
      
    
     
    
  </tbody></table>


  </div>
  <div id="modal-box" style="display:none;"><div id="page-yield">
  <div class="box">
    <form action="#" method="post" onSubmit="new Ajax.Request(&#39;/cce_grade_sets/1/update_grade&#39;, {asynchronous:true, evalScripts:true, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="ioHd1weWldQoLIQ81Y+dwML4e/LqwAF6IihFNU0ZREI="></div>
      <div id="form-errors"></div>
      
      <div class="label-field-pair">
        <label for="category_name">Name</label>
        <div class="text-input-bg"><input id="grade_name" name="grade[name]" size="30" type="text" value="A1"></div>
      </div>
      <div class="label-field-pair">
        <label for="category_name">Grade Points</label>
        <div class="text-input-bg"><input id="grade_grade_point" name="grade[grade_point]" size="30" type="text" value="10"></div>
      </div>
      <input id="grade_cce_grade_set_id" name="grade[cce_grade_set_id]" type="hidden" value="1">
      <input class="submit_button" id="grade_submit" name="commit" type="submit" value="► Update">
    </form>
  </div>
</div></div>
</div> </div>

      <div class="extender"></div>
    </div>

    <!-- footer -->
  <?php include("include/footer.php")?>