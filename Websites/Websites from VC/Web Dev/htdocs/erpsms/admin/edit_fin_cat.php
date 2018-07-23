<?php  
// $subject = new Main(); // create a new news object
  $fincategory = new Main(); // create a new news object
   $id=$_GET[id];
	$subjectRecordSet = $fincategory->getdata('*',"finance_category","finance_id=$id","finance_id DESC","50");
	
   
	//$newsRecordSet = $fincategory->getdata('*',"finance_category","","finance_cat_name ASC","");// set newsRecordSet to a 

//<!---------- 30 nov edit and update   subject  Code of update query  ---------------->

	if(isset($_POST['btsubmit'])) // If the submit button was clicked
    {
      // manage subject update 
			 $id=$_POST['id'];
		     $post['finance_cat_des'] =$_POST['subject_code'];
			// $post['subject_max_weekly_classes'] =$_POST['subject_max_weekly_classes'];
			  
			   if($fincategory->updateData($post,"finance_category","finance_id='$id'"))
				 {
				 $msg="Subject Name Updated Succesfully";
				header("location:?page=fees_category&id=$id&msg=$msg");			
				}
				else
				{
					$msg="Error :  Entry not done, Please check Values";
				header("location:?page=fees_category&id=$id&error=$msg");
				}		
	}
	
?>
<!--------End of the Code of update query -------------------------------------------->
	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><? echo $page_title ." | ". SITENAME ?></title>

<?php include("include/support_file.php")?>
<link media="screen" rel="stylesheet" href="popup/colorbox.css" />
<script src="popup/jquery-latest.min.js" type="text/javascript"></script>
<script src="popup/jquery.colorbox-min.js" type="text/javascript"></script>
 <link href="css/master_fees.css" media="screen" rel="stylesheet" type="text/css">
<!--------- Start head ---------------->
<!-------------Insert the 15 sep  code of validation not work--------------------------------------------->
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
  <h1>Edit Finance Category</h1>
  <h3>Edit Details</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>  </div>
</div>

<div id="page-yield">
  <div id="flash-box">
  <div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div>
  </div>
<div class="box">
<div id="MB_window" style="width: 500px; height: 368px; left: 382px; overflow: visible; "><div id="MB_frame" style=""><div id="MB_header">
  <div id="MB_caption">Edit Category</div>
</div><div id="MB_content" style=""><div id="modal-box" style="">

<div id="grading-levels-form">
  <h4><?php echo $coursebatch?></h4>
   
   <?php while( ($record = $subjectRecordSet->getNextRecord()) !== false )
    { ?>
    <form id="formID" name="formID"  action="#"  enctype="multipart/form-data"  method="post">
  <div style="margin:0;padding:0;display:inline"></div>
<input id="subject_id" name="subject_id" size="30" type="hidden" class="MB_focusable" value="<?=$record['finance_cat_des']?>">
  
     <div id="form-errors"></div>

  <div class="label-field-pair">
    <div class="label-container"><label>Category Name:</label></div>
    <div class="input-container"> <input id="subject_name" name="subject_name"  size="30" type="text" value="<?=$record['finance_cat_name']?>"></div>
  </div>

    <div class="label-field-pair">
    <div class="label-container">  <label>Description:</label></div>
    <div class="input-container"><input id="subject_code" name="subject_code"  size="30" type="text" class="MB_focusable" value="<?=$record['finance_cat_des']?>"></div>
  </div>

   

  <div class="label-field-pair">
    <div class="label-container">
      <label>Is this under income?</label>
    </div>
    <div class="input-container"><input id="subject_no_exam" name="subject_no_exam" type="checkbox" value="0" class="MB_focusable"></div>
  </div>

   <input class="submit_button" id="btsubmit" name="btsubmit" type="submit" title="submit form" value="► Update">

  </form>
  
  <?php } ?>
  
  
  <!----------print to msg--------------------------->
  <div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div>
 <!-----------end of the code msg -------------------->
</div>
</div></div></div></div>
  <div class="label-field-pair">
   <!-- <label for="student_course">Select a Batch:
<img align="absmiddle" alt="Loader" border="0" id="loader" src="./subject_files/loader.gif" style="display: none; ">
   </label>-->
   <div class="text-input-bg">
 
</div><div id="load" style="display:none">  <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif"></div>
<br>
<br>



  <!-- <div class="add_sub">  
<a href="?page=add_new_subject&subtype=1" id="addnewsub"  onclick="validate()" >Add Normal subject</a>
  </div>-->

<div id="subjects">
 <!-- subject list-->


<!--
  <div class="add_sub">
    <a href="#">New Elective Group</a>
  </div>
-->


  
    
   <!-- <h5>Second language</h5>
    <div class="add_sub">
      <a href="/subjects#" onClick="new Ajax.Request(&#39;/subjects/new/2/1&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;60LEQcz5QwgPPtYcqT/S9p/WNXRutwT3lYWyZhg6GHo=&#39;)}); return false;">Add Subject to this Elective group</a>
    </div>-->
    <!--<ul id="category-list">
      
        <li id="subject-5" class="listeven">
          <div class="category-name">Communicative Skill</div>
          <div class="opt">
            <div class="category-code">2A08HIN</div>
            <div class="category-edit"><a href="/subjects#" onClick="new Ajax.Request(&#39;/subjects/5/edit&#39;, {asynchronous:true, evalScripts:true, method:&#39;get&#39;, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;60LEQcz5QwgPPtYcqT/S9p/WNXRutwT3lYWyZhg6GHo=&#39;)}); return false;">Edit</a> </div>
            <div class="category-delete">
              
              
              
                <s>Delete</s>
              
            </div>
            
              <div class="category-assign"><a href="/student/electives/2/5">Assign Student</a>
              </div>
            
          </div>
        </li>
      
        <li id="subject-6" class="listodd">
          <div class="category-name">Bhashayum Aasayavinimayavum</div>
          <div class="opt">
            <div class="category-code">2A08MAL</div>
            <div class="category-edit"><a href="/subjects#" onClick="new Ajax.Request(&#39;/subjects/6/edit&#39;, {asynchronous:true, evalScripts:true, method:&#39;get&#39;, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;60LEQcz5QwgPPtYcqT/S9p/WNXRutwT3lYWyZhg6GHo=&#39;)}); return false;">Edit</a> </div>
            <div class="category-delete">
              
              
              
               <a href="/subjects#" onClick="if (confirm(&#39;Are You Sure?&#39;)) { new Ajax.Updater(&#39;subject-6&#39;, &#39;/subjects/6&#39;, {asynchronous:true, evalScripts:true, method:&#39;delete&#39;, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;60LEQcz5QwgPPtYcqT/S9p/WNXRutwT3lYWyZhg6GHo=&#39;)}); }; return false;">Delete</a>
              
            </div>
            
              <div class="category-assign"><a href="/student/electives/2/6">Assign Student</a>
              </div>
            
          </div>
        </li>
      

    </ul>-->
  
</div>
<div id="modal-box" style="display:none;"></div>

<div class="extender"></div>
 </div></div> </div>

      <div class="extender"></div>
    </div>

<!-- footer -->
  <?php  include("include/footer.php") ?>
           