<?php   $student = new Main(); // create a new news object
$newsRecordSet = $student->getdata('*',"course,batch","course.course_code = batch.batch_course_code","course_name ASC","");
$exam_grade= new Main();

$newsid= $_GET['did'];
		if($newsid!="")  
    {
                 $post['active'] ='0';

				if($exam_grade->updateData($post,"exam_grade","exam_grade_id='$newsid'"))
				{
				$msg=" Record is  Succesfully Deleted";
				header("location:?page=grading_levels&newsid=$did&msg=$msg");		
				}		
				else
				{
				$msg="Error :  Record is not deleted, Please check Values";
				header("location:?page=grading_levels&newsid=$did&error=$msg");	
				}	
	}		 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

<link href="css/grading_ index.css" media="screen" rel="stylesheet" type="text/css">

 <link href="css/set_class_timing_ index.css" media="screen" rel="stylesheet" type="text/css">
 <link media="screen" rel="stylesheet" href="popup/colorbox.css" />
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
xmlhttp.open("GET","?page=exam_view_div&exam_grade_pass="+str,true);
xmlhttp.send();
}
</script>
<!--- AJAX ENDING OF CODE -->
<script src="popup/jquery-latest.min.js" type="text/javascript"></script>
<script src="popup/jquery.colorbox-min.js" type="text/javascript"></script>
 <script type="text/javascript">
    $(function()
    {
        $('#grading_levels_popup').colorbox({opacity:0.3});
		
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
  <h1>Exams</h1>
  <h3>Grading Levels</h3>
  <div id="app-back-button">
<a href="/grading_levels#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  
</div>
<form action="" enctype="multipart/form-data" id"st_form" name="st_form">

<div id="page-yield">
  <div id="flash_box">
  </div>
  <div id="message"><div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div></div></div> 

  <div class="box">
    <div class="label-field-pair">
      <label for="student_course">Select Batch
        <img align="absmiddle" alt="Loader" border="0" id="loader" src="./grading_levels_files/loader.gif" style="display: none;">
      </label>
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
  

          

       <!-- <select id="batch_id" name="batch[id]" onChange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/grading_levels/show&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;batch_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;Fx0ICRRbO4rrhCDJM/624/7sUzivQNmpkyG0E+3MKOA=&#39;)})"><option value="">common</option>
<option value="43">1 - 1st Semester</option>
<option value="46">2 - 2nd Semester</option>
<option value="44">2 - 2nd Semester</option>
<option value="45">3 - 1st Semester</option>
<option value="62">3 - 2012-2013</option></select>-->
      </div></div>

    <div id="grading-levels">
<div class="add_grade">  
<a href="?page=grading_levels_popup" id='grading_levels_popup' >Add grades</a>

</div>


  <!--<table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
    <tbody><tr class="tr-head">
      <td>Name</td>
      <td>Min Score</td>
      
        <td>Credit Points</td>
      
      <td>Description</td>
      <td></td>
    </tr>
    
      <tr id="grading-level-144" class="tr-odd">
        <td class="col-2">A</td>
        <td class="col-2">90</td>
        
          <td class="col-2"></td>
        
        <td class="col-2">Good </td>
        <td class="col-1"><small><a href="http://demo.fedena.org/grading_levels#" onClick="new Ajax.Request(&#39;/grading_levels/144/edit&#39;, {asynchronous:true, evalScripts:true, method:&#39;get&#39;, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;Fx0ICRRbO4rrhCDJM/624/7sUzivQNmpkyG0E+3MKOA=&#39;)}); return false;">Edit</a>
            | <a href="http://demo.fedena.org/grading_levels#" onClick="if (confirm(&#39;Are You Sure?&#39;)) { new Ajax.Updater(&#39;grading-level-144&#39;, &#39;/grading_levels/144&#39;, {asynchronous:true, evalScripts:true, method:&#39;delete&#39;, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;Fx0ICRRbO4rrhCDJM/624/7sUzivQNmpkyG0E+3MKOA=&#39;)}); }; return false;">Delete</a></small></td>
      </tr>
    
      <tr id="grading-level-145" class="tr-even">
        <td class="col-2">B</td>
        <td class="col-2">80</td>
        
          <td class="col-2"></td>
        
        <td class="col-2">Well</td>
        <td class="col-1"><small><a href="http://demo.fedena.org/grading_levels#" onClick="new Ajax.Request(&#39;/grading_levels/145/edit&#39;, {asynchronous:true, evalScripts:true, method:&#39;get&#39;, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;Fx0ICRRbO4rrhCDJM/624/7sUzivQNmpkyG0E+3MKOA=&#39;)}); return false;">Edit</a>
            | <a href="http://demo.fedena.org/grading_levels#" onClick="if (confirm(&#39;Are You Sure?&#39;)) { new Ajax.Updater(&#39;grading-level-145&#39;, &#39;/grading_levels/145&#39;, {asynchronous:true, evalScripts:true, method:&#39;delete&#39;, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;Fx0ICRRbO4rrhCDJM/624/7sUzivQNmpkyG0E+3MKOA=&#39;)}); }; return false;">Delete</a></small></td>
      </tr>
    
      <tr id="grading-level-146" class="tr-odd">
        <td class="col-2">C</td>
        <td class="col-2">70</td>
        
          <td class="col-2"></td>
        
        <td class="col-2">Average</td>
        <td class="col-1"><small><a href="http://demo.fedena.org/grading_levels#" onClick="new Ajax.Request(&#39;/grading_levels/146/edit&#39;, {asynchronous:true, evalScripts:true, method:&#39;get&#39;, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;Fx0ICRRbO4rrhCDJM/624/7sUzivQNmpkyG0E+3MKOA=&#39;)}); return false;">Edit</a>
            | <a href="http://demo.fedena.org/grading_levels#" onClick="if (confirm(&#39;Are You Sure?&#39;)) { new Ajax.Updater(&#39;grading-level-146&#39;, &#39;/grading_levels/146&#39;, {asynchronous:true, evalScripts:true, method:&#39;delete&#39;, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;Fx0ICRRbO4rrhCDJM/624/7sUzivQNmpkyG0E+3MKOA=&#39;)}); }; return false;">Delete</a></small></td>
      </tr>
    
  </tbody></table>-->
</div><br />
 <!--- Insert the code of ajax calling ---------------- -->
   <div id="load" style="display:none">  
  <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif">
  </div>
  
  <div id="students">

<div class="students-table">
 <!--------------------end ajax calling  Student list --------------------------------->
</div>
</div>

</div>
  <!--- End the code of ajax calling --->



    <div id="modal-box" style="display:none;"></div>


  </div>
</div>
 </div>

      <div class="extender"></div>
    </div>

      <?php include("include/footer.php")?> 