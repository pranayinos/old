<?php   
$id=$_GET[id];
$cce_exam_categories = new Main(); // create a new news object
$newsRecordSet = $cce_exam_categories->getdata('*',"cce_exam_categories","cce_exam_id='$id'","","");

if(isset($_POST['commit'])) // If the submit button was clicked
    {
      // manage subject update 
			// $id=$_POST['id'];
		     $post['cce_exam_name'] =$_POST['cce_exam_category_name'];
			 $post['cce_exam_descritption'] =$_POST['cce_exam_category_desc'];
			
			  
			   if($cce_exam_categories->updateData($post,"cce_exam_categories","cce_exam_id='$id'"))
				 {
				 $msg="CCE Exam Category  Updated Succesfully";
				header("location:?page=cce_exam_categories_popup&id=$id&msg=$msg");			
				}
				else
				{
					$msg="Error :  Entry not done, Please check Values";
				header("location:?page=cce_exam_categories_popup&id=$id&error=$msg");
				}		
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files -----------><!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
 <link href="css/cce_exam_catagory_show.css" media="screen" rel="stylesheet" type="text/css">

<link media="screen" rel="stylesheet" href="popup/colorbox.css" />
<script src="popup/jquery-latest.min.js" type="text/javascript"></script>
<script src="popup/jquery.colorbox-min.js" type="text/javascript"></script>
 <script type="text/javascript">
    $(function()
    {
        $('#cce_exam_categories_popup').colorbox({opacity:0.3});
		
    });
	

	
</script>
<script type="text/javascript">
    $(function()
    {
        $('#cce_exam_categories_new_popup').colorbox({opacity:0.3});
		
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
  <h1>Edit Exam Categories</h1>
  <h3>CCE Exam Categories</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
  <!--  <li><a href='?page=cce_exam_categories_new_popup' id='cce_exam_categories_new_popup'>New</a></li>-->
  </ul>
</div>
<div id="page-yield">
  <div id="flash-box">
   <div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div>   
  </div>   
  <div id="categories"><div class="box">
       <?php 
 while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { 
?>
     <form action="#" class="edit_cce_exam_category" id="edit_cce_exam_category_1" method="post"><div style="margin:0;padding:0;display:inline"><input name="_method" type="hidden" value="put"><input name="authenticity_token" type="hidden" value=""></div>
      <div id="form-errors"></div>
      
      <div class="label-field-pair">
        <label for="category_name">Name</label>
        <div class="text-input-bg"><input id="cce_exam_category_name" name="cce_exam_category_name" size="30" type="text" value=" <?=$record['cce_exam_name']?>" class="MB_focusable"></div>
      </div>
      <div class="label-field-pair">
        <label for="category_name">Description</label>
        <div class="text-input-bg"><input id="cce_exam_category_desc" name="cce_exam_category_desc" size="30" type="text" value=" <?=$record['cce_exam_descritption']?>" class="MB_focusable"></div>
      </div>
      <input class="submit_button MB_focusable" id="cce_exam_category_submit" name="commit" type="submit" value="► Update">
    </form>
    <?php } ?>
  </div></div>
  <div id="modal-box" style="display:none;"></div>
</div> </div>

      <div class="extender"></div>
    </div>

    <?php include("include/footer.php")?> 