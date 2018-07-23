<?php 
$category = new Main(); // create a new news object

						 // getdata($fields,$table,$where,$orderby,$limit);
$newsRecordSet = $category->getdata('*',"category","","cat_id DESC", "50");


    if(isset($_POST['addNew_bt'])) // If the submit button was clicked
    {
      // batch entry 
           $cols['category_description'] =$_POST['student_category_name'];
		   
		   if($category->Inserttable($cols,"category"))
        {
				$msg="New Category Added Succesfully";
				header("location:?page=category&msg=$msg");		
					
		}
		else
		{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=category&error=$msg");
		}		
	}
		
// DELETE CODE IMPLEMENT  the code of the delete catgory 28 AUG 2012
       
       
$newsid= $_GET['catdid'];

    if($newsid!="")  
    {

		if($category->deleteData("category","cat_id='$newsid'"))
		{
		$msg="News Deleted Succesfully";
		header("location:?page=category&id=$catdid&msg=$msg");			
		}		
		else
		{
			$msg="Error :  News not deleted, Please check Values";
		header("location:?page=category&id=$id&error=$msg");
		}	
			
		
	}	?>        
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
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>  </div>
</div>

<div id="page-yield">
  <div id="flash_box"></div>
  
  <div id="student-category-form">
    
<div class="box">

<!--<form action="" method="post">-->
 <form id="formID" name="formID"  action="#"  enctype="multipart/form-data"  method="post">

<div class="label-field-pair">
  <label>Enter new Category : </label>
<div class="text-input-bg"><input id="student_category_name"  class="validate[required]  text-input" name="student_category_name" size="30" type="text" value="" style="text-transform:uppercase">
</div>
  </div>
  <input class="submit_button" name="addNew_bt" type="submit" value="► Save">

</form>
</div>

  </div>
  <br><br>
<div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div>
  <div id="student-category-list">
  
<ul id="category-list">
  <?php 
 while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { if($i%2==0) $col="listeven";
	else $col="listodd";
	?>
         <li class="<?=$col?>">
    <div class="category-name"><?=$record['category_description']?></div>
    <div class="category-edit"><a href="?page=edit_catagory&catid=<?=$record['cat_id']?>" onClick="">Edit</a> </div>
        <div class="category-delete">
      <!--  <a href="#" onClick="if (confirm(&#39;Are You Sure?&#39;)) return false;">Delete</a>-->
           <a href="?page=category&catdid=<?=$record['cat_id'] ?>"  onClick="return confirm(&#39;Are You Sure?&#39;);">Delete</a>
        
        
        
        
        </div>
      </li>
      
   <?php }?>  
      

  
</ul>

  </div>

</div>
 </div>

      <div class="extender"></div>
    </div>

<!-- footer -->
  <?php include("include/footer.php")?>
           