<?php $cce_exam_categories = new Main(); // create a new news object
$newsRecordSet = $cce_exam_categories->getdata('*',"cce_exam_categories","","","");

//insert code 
$cce_weightages = new Main(); // create a new news object
 if(isset($_POST['commit'])) // If the submit button was clicked
    {
      // news entry 
			   $cols['cce_weightages_name'] =$_POST['cce_weightage_weightage'];
			   $cols['cce_weightages_criteria'] =$_POST['cce_weightage_criteria_type'];
			   $cols['cce_exam_name'] =$_POST['cce_weightage_cce_exam_category_id'];
				
		if($cce_weightages->Inserttable($cols,"cce_weightages"))
        {
				$msg="CCE Weightage  Added Succesfully";
				header("location:?page=cce_weightages&msg=$msg");			
		}
		else
		{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=cce_weightages&error=$msg");
		}		
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <div id="MB_frame" style=""><div id="MB_header"><div id="MB_caption">New CCE Weightage</div><a id="MB_close" title="Close window" href="cce_weightages#"><span></span></a></div><div id="MB_content" style=""><div id="modal-box" style=""><div id="page-yield">
 <div id="message"><div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div></div></div> 
  <div class="box">
    <form action="?page=cce_weightages_new_popup" class="new_cce_weightage" id="new_cce_weightage" method="post" onsubmit="new Ajax.Request(&#39;/cce_weightages&#39;, {asynchronous:true, evalScripts:true, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="ioHd1weWldQoLIQ81Y+dwML4e/LqwAF6IihFNU0ZREI="></div>
      <div id="form-errors"></div>
      
      <div class="label-field-pair">
        <label for="category_name">Weightages</label>
        <div class="text-input-bg"><input id="cce_weightage_weightage" name="cce_weightage_weightage" size="30" type="text" class="MB_focusable"></div>
      </div>
      <div class="label-field-pair">
        <label for="category_name">Criteria</label>
        <div class="text-input-bg">
          <select id="cce_weightage_criteria_type" name="cce_weightage_criteria_type" class="MB_focusable"><option value="FA">FA</option>
<option value="SA">SA</option></select>
        </div>
      </div>
      <div class="label-field-pair">
        <label for="category_name">Exam category</label>
        <div class="text-input-bg">
         <!-- <select id="cce_weightage_cce_exam_category_id" name="cce_weightage[cce_exam_category_id]" class="MB_focusable">
            <option value="">Select a Category</option>
            <option value="1">Term I</option>
          </select>-->
          
          <select id="cce_weightage_cce_exam_category_id" name="cce_weightage_cce_exam_category_id" class="MB_focusable">
         <option value="">Select a Exam </option>
          <?php 
 while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { 
?>

<option value="<?=$record['cce_exam_name']?>"> <?=$record['cce_exam_name']?></option>

<?php }?>
</select>
          
          
          </div>
      </div>
      <input class="submit_button MB_focusable" id="cce_weightage_submit" name="commit" type="submit" value="► Create">
    </form>
    <div class="extender"></div>
  </div>
</div></div></div></div>