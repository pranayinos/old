<?php

$course = new Main(); 
$library_setting=new Main();

$newsRecord = $course->getdata('*',"course","","course_name ASC", "");


  $newsid= $_GET['d'];
	  // echo $newsid;
		if($newsid!="")  
    { 
					
                 $post['active'] ='0';
                  
				if($library_setting->updateData($post,"library_setting","lib_setting_id='$newsid'"))
				{
				$msg="Library Setting Record is  Succesfully Deleted";
				header("location:?page=library-card_setting&$newsid=$d&msg=$msg");		
				}		
				else
				{
				$msg="Error : Library Setting  Record is not deleted, Please check Values";
				header("location:?page=library-card_setting&$newsid=$d&error=$msg");	
				}	
	}		 
	

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

<!--------- Start head ---------------->

<script type="text/javascript">
	
// <!-- Ajax select data -->
function showbill(str)
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
   document.getElementById("bill").innerHTML=xmlhttp.responseText;
   document.getElementById('load').style.display = "none";
    }
	else 
	document.getElementById('load').style.display = "block";
  }
xmlhttp.open("GET","?page=user_view_div&bi="+str,true);
xmlhttp.send();
}
</script>
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php include("include/sidebar5.php")?>
           
      <!-- end of side bar -->
      <div id="content"> <div id="content-header">
  <img alt="Library_small" src="../images/library/library_small.png">
  <h1>Library</h1>
  <h3>Library setting</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
 <form action="#" method="post" onSubmit="new Ajax.Request(&#39;/books/sort_by&#39;, {asynchronous:true, 

evalScripts:true, parameters:Form.serialize(this)}); return false;">
<div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div>
<div id="page-yield">
  <div id="flash-box">
    
  </div>
  <div class="box">
    <div class="label-field-pair">
      <label for="student_course">Courses
        <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none; ">
      </label>
      <div class="text-input-bg">
       <select id="course_name" name="course_name" onChange="showbill(this.value)">
       <!-- <select id="course_name" name="course_name" onChange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/library/show_setting&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;course_name=&#39;+ value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM=&#39;)})">-->
       
        <option value="">Select a course</option>
         <?php
		 
		while (($record = $newsRecord ->getNextRecord())!==false)
		{
		?>
<option value="<?=$record['course_name'];?>"><?=$record['course_name'];?></option>
<?php
}
?>
</select>

      </div>
    </div>
  <!--  <div id="card_setting">
    <table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
  <tbody><tr class="tr-head">
    <td>
      Course
    </td>
    <td>
      Category
    </td>
    <td>
      Books issuable
    </td>
    <td>
      Period<br>(In Days)
    </td>
    <td>

    </td>
  </tr>
  
 <?php /*?> <?php
  $library_setting = new Main(); 

//$bi=$_GET[bi];
$newsRecord2 = $course->getdata('course_name',"course","course_id=$bi","", "");
 $record2 = $newsRecord2->getNextRecord();
$newsRecord1 = $library_setting->getdata('*',"library_setting","course_id='$bi'","", "");
  $record1 = $newsRecord1->getNextRecord();
  $cat=$record1['cat_id'];
  $category=new Main();
  $newsRecord3 = $category->getdata('category_description',"category","cat_id=$cat","", "");
  $record3 = $newsRecord3->getNextRecord();
  
  ?><?php */?>
  <tr class="tr-blank"></tr>
  
    <tr class="tr-odd">
      <td class="col-4">
          <?=$record2['course_name'];?>
      </td>
      <td class="col-1">
        <?=$record3['category_description'];?>
      </td>
      <td class="col-1">
      <?=$record1['book_issuable'];?>
      </td>
      <td class="col-1">
      <?=$record1['days'];?>
      </td>
      <td class="col-1">
        <small>
          <a href="?page=edit_library-card_setting_popup">Edit</a> |
          <a href="#" onClick="if (confirm(&#39;Are you sure want to delete the library card setting?&#39;)) { new Ajax.Request(&#39;/library/delete_card_setting/3&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM=&#39;)}); }; return false;">Delete</a>
        </small>
      </td>
    </tr>
  
  
  <tr class="add-new">
    <td class="col-4"></td>
    <td class="col-1"></td>
    <td class="col-1"></td>
    <td class="col-1"></td>
    <td class="col-1"><a class="add-link" href="?page=library-card_setting_popup">Add new</a></td>
  </tr>
</tbody></table>
 -->

</div>
    <div id="modal-box" style="display:none;"></div>
  </div>
  <div id="bill"> </div>
  </form>
</div> </div>

      <div class="extender"></div>
    </div>

     <!-- footer -->
  <?php include("include/footer.php")?>