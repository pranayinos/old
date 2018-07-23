<?php $student = new Main(); // create a new news object
$newsRecordSet = $student->getdata('*',"course,batch","course.course_code = batch.batch_course_code","course_name ASC","");
$cce_weightages = new Main(); // create a new news object
$newsRecordSet1 = $cce_weightages->getdata('*',"cce_weightages","active=1","","");
$senddata = new Main();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/assign_weightages.css" media="screen" rel="stylesheet" type="text/css">
<!--------- Start head ---------------->
<!-- AJAX ---->
<script type="text/javascript">
	
// <!-- Ajax Start Code  -->
function showstudent(str)
{
  /*$("load").ajaxStart(function(){
     $(this).html("<img src='../images/loader.gif' />");
  });*/
 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {


  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {   
	var a= xmlhttp.responseText;
	//alert(a);
   document.getElementById("students").innerHTML=xmlhttp.responseText;
   document.getElementById('load').style.display = "none";
    }
	else 
	document.getElementById('load').style.display = "block";
  }
xmlhttp.open("GET","?page=exam_view_div&cce_weightage_div="+str,true);
xmlhttp.send();
}
</script>
<!--- AJAX ENDING OF CODE -->
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
  <h1>Weightages</h1>
  <h3>Assign weightages to course</h3>
  <div id="app-back-button">
    <a href="?page=assign_weightages" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>

  </ul>
</div>

<div id="page-yield">
<div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div>
 
 
  <div id="error-div"></div>
  <div id="flash-box"></div>
  <div class="label-field-pair">
    <label for="course_id">Select a course</label>
    <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none; ">
    <div class="text-input-bg">
    <select id="std_batch_code" name="std_batch_code" onChange="showstudent(this.value)">
        
        <option value="">Select A Batch</option>
          <?php 
 while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { 
?>

<option value="<?=$record['batch_id']?>"> <?=$record['course_name']." ".$record['course_section_name'].'-'.$record['batch_code']?></option>

<?php }?>
</select>
    
    
     <!-- <select id="course_course_id" name="course[course_id]" onChange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/cce_weightages/select_weightages&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;course_id=&#39;+ value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;ioHd1weWldQoLIQ81Y+dwML4e/LqwAF6IihFNU0ZREI=&#39;)})"><option value="">Select a course</option>
<option value="25">MBA Business Management </option></select>-->
    </div>
  </div>
  <div id="select_weightages">
  <form action="?page=cce_weightages-assign_weightages" class="edit_course" id="edit_course" method="post"><div style="margin:0;padding:0;display:inline"><input name="_method" type="hidden" value="put"><input name="authenticity_token" type="hidden" value="#"></div>
  <ul id="category-list">
    <li class="listheading">
   
      <div class="heading-name">Select Weightages</div>
      <div class="heading-edit">
  
      </div>
    </li>
     <?php
	 $newsRecordSet = $student->getdata('*',"course,batch","course.course_code = batch.batch_course_code","course_name ASC","");
	 $record1=$newsRecordSet->getNextRecord();   
     echo $record1['batch_id'];
	 ?>
     
     
     <?php 
 if( ($record = $newsRecordSet1->getNextRecord()) !== false )
    { 
?> 

      <li class="listodd">
        <label>
          <div class="category-edit">
            <input id="course_weightage_ids[]" name="course_weightage_ids[]" type="checkbox" value="<?=$record['cce_weightages_name']?>">
          </div>
          <div class="category-name">
            <?php /*?><?=$record['cce_weightages_id']?><?php */?><?=$record['cce_weightages_criteria']?>
             <!-- Insert the code of checkbox value stores  11 DEC 2012  ---->
             
          <?php   echo  $count=$record['cce_weightages_id'];
					//for($i=0;$i<$count;$i++)
					//{
					//$newvarible[$i] = $_POST["course_weightage_ids"][$i]; 
					///} 
					//echo "First<b>".$newvarible[0]."</b>";
					//echo "Second <b>".$newvarible[1]."</b>";
					//echo "Third <b>".$newvarible[2]."</b>"; 
					
					
					if(isset($_POST['commit'])) // If the submit button was clicked
    				{
      				// news entry 
			   		 $cols['send_weightage'] =$count;
			  		 //$cols['news_desc'] =$_POST['news_desc'];
			     if($senddata->Inserttable($cols,"senddata"))
        		{
				$msg="News Added Succesfully";
				header("location:?page=cce_weightages-assign_weightages&msg=$msg");			
				}
				else
				{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=cce_weightages-assign_weightages&error=$msg");
			}		
			}
             ?>
             <!-- End the code of checkbox value stores   --->
             
             
             
          </div>
          <div class="category-name">
       
          </div>
        </label>
      </li>
    <?php } ?>
     <!-- <li class="listeven">
        <label>
          <div class="category-edit">
            <input checked="checked" id="course_weightage_ids_" name="course[weightage_ids][]" type="checkbox" value="2">
          </div>
          <div class="category-name">
            30(SA)
          </div>
          <div class="category-name">
            Term I
          </div>
        </label>
      </li>-->
    
  </ul>
  <input class="submit_button" id="course_submit" name="commit" type="submit" value="► Save">
</form>
<!--- Insert the code of ajax calling ---------------- -->
   <div id="load" style="display:none">  
  <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif">
  </div>
  
  <div id="students">

<div class="students-table"></div></div>
 <!--------------------end ajax calling  Student list --------------------------------->
</div>
</div> </div>

      <div class="extender"></div>
    </div>

  <!-- footer -->
  <?php include("include/footer.php")?>