<?php
    $course = new Main(); // create a new news object
	$newsRecordSet = $course->getdata('*',"course","","course_id DESC","");// set newsRecordSet to a 
	
//<!---DELETE CODE IMPLEMENT  the code of the delete news 24 AUG 2012------------------------------------------------->
 $id=$_GET['did'];

    if($id!="")  
    {

		if($course->deleteData("course","course_id='$id'"))
		{
		$msg="Coures Deleted Succesfully";
		header("location:?page=manage_course&id=$id&msg=$msg");			
		}		
		else
		{
			$msg="Error :  News not deleted, Please check Values";
			header("location:?page=manage_course&id=$id&error=$msg");
		}	
			
		}		
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
    <link href="./css/categories.css" media="screen" rel="stylesheet" type="text/css">
<link media="screen" rel="stylesheet" href="popup/colorbox.css" />
<script src="popup/jquery-latest.min.js" type="text/javascript"></script>
<script src="popup/jquery.colorbox-min.js" type="text/javascript"></script>
 <link href="css/master_fees.css" media="screen" rel="stylesheet" type="text/css">

<script type="text/javascript">
    $(function()
    {
        $('#popnewcourse').colorbox({opacity:0.3});
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
   <?php include("include/sidebar6.php")?>
           
      <!-- end of side bar -->
      <div id="content"> 
<div id="content-header">
  <img alt="Show_settings" src="../images/show_settings.png">
  <h1>Courses</h1>
  <h3>Manage Course</h3>

  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>  </div>
</div>

<div id="inner-tab-menu">
  <ul>
    <li> <a href='?page=new_course' id="popnewcourse">New</a> </li>

  </ul>
</div>
<div id="page-yield">
 <div class="box">
    <div class="bread_crumb">
      <a href="?page=courses">Manage Courses</a><span class="smallsign"> >></span>
      Course
    </div>
    <h4 align="center">Course</h4>

    <ul id="category-list">
<?php 
$i=0;
 while( ($record = $newsRecordSet->getNextRecord()) !== false )
    {
	$i++;
	if($i%2==0) $col="listeven";
	else $col="listodd";
	
?>
 <li class="<?=$col?>">
          <div class="category-name"><a href="?page=show_course&course_id=<?=$record['course_id']?>"> <?=$record['course_name']." - ".$record['course_section_name']?></a></div>
          <div class="category-edit"><a href="?page=edit_mange_course&id=<?=$record['course_id']?>">Edit</a></div><div class="category-delete"> 
       <a href="?page=manage_course&did=<?=$record['course_id']?>"<?=$record['course_id']?> onClick="return confirm(&#39;Are You Sure?&#39;);">Delete</a></div>
  
 </li>
<?php }?>
     </ul>
    <div class="extender"><div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div></div>
  </div>
</div>
 </div>

      <div class="extender"></div>
    </div>


<!-- footer -->
  <?php include("include/footer.php")?>
           