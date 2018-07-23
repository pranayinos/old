<?php
//add the page 24 aug 2012 RUN CODE 
    $course = new Main(); // create a new news object
	$coures_edit_id=$_GET[id];	
	$courseRecordSet = $course->getdata('*',"course","course_id='$coures_edit_id'","","");// set newsRecordSet to a 
//<!----------   Code of update query    -------------------------------------------->

	
 if(isset($_POST['btsubmit'])) // If the submit button was clicked
    {
      // manage course update 
			$course_id=$_POST['course_id'];
			$post['course_code'] =$_POST['course_code'];
			$post['course_name'] =$_POST['course_course_name'];
			$post['course_section_name'] =$_POST['course_section_name'];
			  
			   
			   // $news_title =$_POST['news_title'];
			   
			      if($course->updateData($post,"course","course_id='$course_id'"))
				 {
				 $msg="News updated Succesfully";
				 header("location:?page=edit_mange_course&id=$coures_edit_id&msg=$msg");			
				}
				else 
				{
					$msg="Error :  Entry not done, Please check Values";
					header("location:?page=news-view&id=$newsedit_id&error=$msg");
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
<link media="screen" rel="stylesheet" href="popup/colorbox.css" />
<script src="popup/jquery-latest.min.js" type="text/javascript"></script>
<script src="popup/jquery.colorbox-min.js" type="text/javascript"></script>
 <link href="css/master_fees.css" media="screen" rel="stylesheet" type="text/css">


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
  <img alt="Show_exam" src="../images/examination/show_exam.png">
  <h1>Courses</h1>
  <h3>Edit</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">

  

  <div class="box">
    <div class="bread_crumb">
      <a href="#">Courses</a> »
      Edit
    </div>
   
       <?php  while( ($record = $courseRecordSet->getNextRecord()) !== false )
    { 
   ?> 

   <form action="" class="edit_course" id="edit_course_2" method="post">
  

   <input id="course_id" name="course_id" size="30" type="hidden" value="<?=$coures_edit_id?>">   

      <div class="label-field-pair">
        <div class="label-container"><label for="course_Course name">Course name</label></div>
        
<div class="input-container">
<input id="course_course_name" name="course_course_name"  size="30" type="text" value="<?=$record['course_name']?>"></div>
      </div>

      <div class="label-field-pair"> 
        <div class="label-container"><label for="course_Section name">Section name</label></div>
        <div class="input-container"><input id="course_section_name" name="course_section_name" size="30" type="text" value="<?=$record['course_section_name']?>"></div>
      </div>

      <div class="label-field-pair">
        <div class="label-container"><label for="course_Code">Code</label></div>
        <div class="input-container"><input id="course_code" name="course_code" size="30" type="text" readonly="readonly" value="<?=$record['course_code']?>"></div>
      </div>

      <input class="submit_button" name="btsubmit" type="submit" value="► Save">

    </form><?php } ?>
    <div class="extender"> <div class="extender">  <div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div></div></div>
  </div>
</div>
 </div>

      <div class="extender"></div>
    </div>

    </body></html>