<?php 
$category = new Main(); // create a new news object
$cat_id=$_GET[catid];						 
$newsRecordSet = $category->getdata('*',"category","cat_id='$cat_id'","cat_id DESC", "50");

//<!---------- 28 Aug run  Code of update query    -------------------------------------------->

	
 if(isset($_POST['btsubmit'])) // If the submit button was clicked
    {
      // manage course update 
			 $cat_id=$_POST['cat_id'];
		     $post['category_description'] =$_POST['category_description'];
			
			  
			   if($category->updateData($post,"category","cat_id='$cat_id'"))
				 {
				 $msg="News updated Succesfully";
				 header("location:?page=edit_catagory&cat_id=$cat_id&msg=$msg");			
				}
				else
				{
					$msg="Error :  Entry not done, Please check Values";
					header("location:?page=edit_catagory&id=$cat_id&error=$msg");
				}		
	}
	
?>
<!--------End of the Code of update query -------------------------------------------->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
    <link href="./css/categories.css" media="screen" rel="stylesheet" type="text/css">
<!--------- Start head ---------------->
<!-------------Insert the 29 aug  code of validation--------------------------------------------->
  <script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#formID").validationEngine();
			
		});
	</script>
<!-------------End the code of validation--------------------------------------------->   
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->

    <div id="content_wrapper">
               <!-- Side bar -->
   <?php include("include/sidebar6.php")?>
           
      <!-- end of side bar -->
      
      <div id="content"> 

<div id="content-header">
  <img alt="Show_settings" src="../images/show_settings.png">
  <h1>Students</h1>
  <h3>Categories</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">
  <div id="flash_box"></div>
  
  <div id="student-category-form">
<div class="box">
  <?php  while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { 
   ?> 
   <form id="formID" name="formID"  action="#"  enctype="multipart/form-data"  method="post">
<!--<form action="#" method="post">-->
<div style="margin:0;padding:0;display:inline">
<input name="cat_id" id="cat_id" type="hidden" value="<?=$record['cat_id']?>"></div>
<div class="label-field-pair">
  <label>Editing category:  </label>
  <input id="id" name="id" type="hidden" value="1">
<div class="text-input-bg"> <input id="category_description" name="category_description" class="validate[required]  text-input" type="text" value="<?=$record['category_description']?>"></div></div>
  <input class="submit_button" name="btsubmit" type="submit" value="► Save">
</form>
<?php } ?>


<div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div>
</div></div>
  <br><br>

  <div id="student-category-list"></div>

</div>
 </div>

      <div class="extender"></div>
    </div>

    <!-- footer -->
  <?php include("include/footer.php")?>
           