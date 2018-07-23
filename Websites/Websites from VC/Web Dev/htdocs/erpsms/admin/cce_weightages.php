<?php $cce_weightages = new Main(); // create a new news object
$newsRecordSet = $cce_weightages->getdata('*',"cce_weightages","active=1","","");


//delete and deactivate code 
 $newsid= $_GET['did'];
		if($newsid!="")  
    {
                 $post['active'] ='0';

				if($cce_weightages->updateData($post,"cce_weightages","cce_weightages_id='$newsid'"))
				{
				$msg=" CCE Weightage  Record is  Succesfully Deleted";
				header("location:?page=cce_weightages&newsid=$did&msg=$msg");		
				}		
				else
				{
				$msg="Error :  Record is not deleted, Please check Values";
				header("location:?page=cce_weightages&newsid=$did&error=$msg");	
				}	
	}		 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

 <link href="css/cce_weightages_show.css" media="screen" rel="stylesheet" type="text/css">
<link media="screen" rel="stylesheet" href="popup/colorbox.css" />
<script src="popup/jquery-latest.min.js" type="text/javascript"></script>
<script src="popup/jquery.colorbox-min.js" type="text/javascript"></script>
 <script type="text/javascript">
    $(function()
    {
        $('#cce_weightages_new_popup').colorbox({opacity:0.3});
		
    });
	
    $(function()
    {
        $('#cce_weightages_edit_popup').colorbox({opacity:0.3});
		
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
  <h1>CCE Weightages</h1>
  <h3>Index</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/cce_weightages#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    <li><a href='?page=cce_weightages_new_popup' id='cce_weightages_new_popup' >  New</a></li>
  </ul>
</div>
<div id="page-yield">
  <div id="message"><div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div></div></div> 
  <div id="flash-box">
    
  </div>
  <div id="weightages"><div class="box">
 

  <table align="center" width="100%" cellpadding="1" cellspacing="1">
  
    <tbody><tr class="tr-head">
      <td>Weightages</td>
      <td>CCE Exam category</td>
      <td></td>
    </tr>  <?php 
 while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { 
?>     
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    
      <tr class="tr-odd">
        <td class="col-1">
          <a href="?page=cce_weightages-1"><?=$record['cce_weightages_name']?>(<?=$record['cce_weightages_criteria']?>)</a>
        </td>
        <td class="col-2">
          <a href="?page=cce_weightages-1"><?=$record['cce_exam_name']?></a>
        </td>
        <td class="col-3">
          <div class="category-edit"><a href='?page=cce_weightages_edit_popup&id=<?=$record['cce_weightages_id']?>'>Edit</a>
           |  <a href="?page=cce_weightages&did=<?=$record['cce_weightages_id']?>">Delete</a></div>
        </td>
      </tr>
   <?php } ?>  
      
    
  </tbody></table>
     
</div></div>
  <div id="MB_modal-box" style="display:none;"><div id="MB_page-yield">
  <div class="box">

    <form action="#" class="edit_cce_weightage" id="MB_edit_cce_weightage_1" method="post" onSubmit="new Ajax.Request(&#39;/cce_weightages/1&#39;, {asynchronous:true, evalScripts:true, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="_method" type="hidden" value="put"><input name="authenticity_token" type="hidden" value="Fx0ICRRbO4rrhCDJM/624/7sUzivQNmpkyG0E+3MKOA="></div>
      <div id="MB_form-errors"></div>
      
      <div class="label-field-pair">
        <label for="category_name">Weightage</label>
        <div class="text-input-bg"><input id="MB_cce_weightage_weightage" name="cce_weightage[weightage]" size="30" type="text" value="10"></div>
      </div>
      <div class="label-field-pair">
        <label for="category_name">Type</label>
        <div class="text-input-bg">
          <select id="MB_cce_weightage_criteria_type" name="cce_weightage[criteria_type]"><option value="FA" selected="selected">FA</option>
<option value="SA">SA</option></select>
        </div>
      </div>
      <div class="label-field-pair">
        <label for="category_name">Exam Category</label>
        <div class="text-input-bg">
          <select id="MB_cce_weightage_cce_exam_category_id" name="cce_weightage[cce_exam_category_id]"><option value="1" selected="selected">Term I</option></select>
        </div>
      </div>
      <input class="submit_button" id="MB_cce_weightage_submit" name="commit" type="submit" value="► Update">
    </form>

    <div class="extender"></div>
  </div>
</div></div>
</div> </div>

      <div class="extender"></div>
    </div>

   <?php include("include/footer.php")?> 