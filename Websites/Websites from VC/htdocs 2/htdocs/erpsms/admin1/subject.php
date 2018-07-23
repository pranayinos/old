<?php   $subject = new Main(); // create a new news object
	$batchRecordSet = $subject->getdata('*',"course,batch","course.course_code = batch.batch_course_code","course_name ASC","");
	// batch
    
 
// DELETE CODE IMPLEMENT  the code of the delete catgory 15 SEP 2012
       
       
$newsid= $_GET['subjectid'];

    if($newsid!="")  
    {

		if($subject->deleteData("subject","subject_id='$newsid'"))
		{
		$msg="Subject Name Deleted Succesfully";
		header("location:?page=subject&id=$newsid&msg=$msg");			
		}		
		else
		{
		$msg="Error :  Subject Name not deleted, Please check Values";
		header("location:?page=subject&id=$newsid&error=$msg");
		}	
			
		
	}	?>            
    
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>

<?php include("include/support_file.php")?>
<link media="screen" rel="stylesheet" href="popup/colorbox.css" />
<script src="popup/jquery-latest.min.js" type="text/javascript"></script>
<script src="popup/jquery.colorbox-min.js" type="text/javascript"></script>
 <link href="css/master_fees.css" media="screen" rel="stylesheet" type="text/css">

<script type="text/javascript">
    $(function()
    {
        $('#addnewsub').colorbox({opacity:0.3});
    });

	
</script>
 <script type="text/javascript">
	

function showsubject(str)
{

if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {


  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {   
	var a= xmlhttp.responseText;

   document.getElementById("subjects").innerHTML=xmlhttp.responseText;
   document.getElementById('load').style.display = "none";
    }
	else 
	document.getElementById('load').style.display = "block";
  }
xmlhttp.open("GET","?page=student_view_div&batch_subject="+str,true);
xmlhttp.send();
//alert(batch_id);
}
function validate()
{
var x= document.getElementById("batch_id").value 
if(x=="")
{
alert("Please Select Batch ");
return false
}
}
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
  <h1>Subject</h1>
  <h3>Home</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>  </div>
</div>

<div id="page-yield">
  <div id="flash-box">
  <div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div>
  </div>
<div class="box">

  <div class="label-field-pair">
    <label for="student_course">Select a Batch:
<img align="absmiddle" alt="Loader" border="0" id="loader" src="./subject_files/loader.gif" style="display: none; ">
   </label>
   <div class="text-input-bg">
  <select id="batch_id" name="batch_id" onChange="showsubject(this.value)" >
   
        <option value="">Select a Course-Batch</option>
          <?php 
 while( ($record = $batchRecordSet->getNextRecord()) !== false )
    { 
?>
     
<option value="<?=$record['batch_id']?>"> <?=$record['course_name']." ".$record['course_section_name'].'-'.$record['batch_code']?></option>
<?php }?></select>
</div><div id="load" style="display:none"><img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif"></div>
<br>
<br>



   <div class="add_sub">  
<a href="?page=add_new_subject&subtype=1" id="addnewsub"  onclick="validate()" >Add Normal subject</a>
  </div>

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
           