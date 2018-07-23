<?php   
$cce_exam_categories = new Main(); // create a new news object
$newsRecordSet = $cce_exam_categories->getdata('*',"cce_exam_categories","active=1","","");


//delete and deactivate code 
 $newsid= $_GET['did'];
		if($newsid!="")  
    {
                 $post['active'] ='0';

				if($cce_exam_categories->updateData($post,"cce_exam_categories","cce_exam_id='$newsid'"))
				{
				$msg="CCE Exam Category  Record is  Succesfully Deleted";
				header("location:?page=cce_exam_categories&newsid=$did&msg=$msg");		
				}		
				else
				{
				$msg="Error :  Record is not deleted, Please check Values";
				header("location:?page=cce_exam_categories&newsid=$did&error=$msg");	
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
  <h1>Exam Categories</h1>
  <h3>CCE Exam Categories</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>
    <li><a href='?page=cce_exam_categories_new_popup' id='cce_exam_categories_new_popup'>New</a></li>
  </ul>
</div>
<div id="page-yield">
<div id="message"><div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div></div></div> 
  <div id="flash-box">
    
  </div>   
  <div id="categories"><div class="box">
    <table align="center" width="100%" cellpadding="1" cellspacing="1">
      <tbody><tr class="tr-head">
        <td>CCE Exam Categories</td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
      </tr>
       <?php 
 while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { 
?>
        <tr class="tr-odd">
          <td class="col-4">
           <?=$record['cce_exam_name']?>
          </td>
          <td class="col-5">
            <div class="category-edit"><a href='?page=cce_exam_categories_popup&id=<?=$record['cce_exam_id']?>' id='cce_exam_categories_popup1'>Edit</a> | <a href="?page=cce_exam_categories&did=<?=$record['cce_exam_id']?>">Delete</a></div>
          </td>
        </tr>
 <?php } ?>     
    </tbody></table>
  </div></div>
  <div id="modal-box" style="display:none;"></div>
</div> </div>

      <div class="extender"></div>
    </div>

    <?php include("include/footer.php")?> 