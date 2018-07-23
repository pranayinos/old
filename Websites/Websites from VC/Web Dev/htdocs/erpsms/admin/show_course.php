<?php
    $batch = new Main(); // create a new news object

$batchrecord = $batch->getdata('batch.batch_code,batch.batch_id,course.course_id,course.course_name,course.course_section_name',"batch,course"," batch.batch_course_code=course.course_code","", "");
	
	
   $course = new Main(); // create a new news object
   $course_id=$_GET[course_id];
   //$newsRecordSet = $course->getdata('*',"course","course_id='$course_id'","course_id DESC", "");
   
   
   $newsRecordSet =$batch->getdata('batch.batch_code,batch.batch_id,course.course_name,course.course_section_name',"batch,course"," batch.batch_course_code=course.course_code and course_id='$course_id'","batch_id DESC", "");
   
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
    <link href="./css/categories.css" media="screen" rel="stylesheet" type="text/css">
<link media="screen" rel="stylesheet" href="popup/colorbox.css"/>
<script src="popup/jquery-latest.min.js" type="text/javascript"></script>
<script src="popup/jquery.colorbox-min.js" type="text/javascript"></script>
 <link href="css/master_fees.css" media="screen" rel="stylesheet" type="text/css">

<script type="text/javascript">
    $(function()
    {
        $('#popnewbatch').colorbox({opacity:0.3});
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
  <h1>Course-Batch</h1>
  <h3>Manage Course/Batch</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>  </div>
</div>

<div id="inner-tab-menu">
  <ul>
    <li><a href='?page=new_batch&course=<?=$course_id?>' id="popnewbatch">New</a> </li>

  </ul>
</div>


<div id="page-yield">
 <div class="box">
    <div class="bread_crumb">
      <a href="?page=courses">Course</a> >>
      <a href="?page=manage_course"><?=$_GET[course_id]?></a> >>
      New batch
    </div>
    <h4 align="center"> BATCH</h4>

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
          <div class="category-name"><a href="#"> <?=$record['batch_code']." - ".$record['course_section_name']?></a></div>

         
          <div class="category-edit"><a href="?page=edit_batch_course&batch_id=<?=$record['batch_id']?>">Edit</a></div>
          <div class="category-delete"><a href="#" onClick="if (confirm(&#39;Are You Sure?&#39;)) { var f = document.createElement(&#39;form&#39;); f.style.display = &#39;none&#39;; this.parentNode.appendChild(f); f.method = &#39;POST&#39;; f.action = this.href;var m = document.createElement(&#39;input&#39;); m.setAttribute(&#39;type&#39;, &#39;hidden&#39;); m.setAttribute(&#39;name&#39;, &#39;_method&#39;); m.setAttribute(&#39;value&#39;, &#39;delete&#39;); f.appendChild(m);var s = document.createElement(&#39;input&#39;); s.setAttribute(&#39;type&#39;, &#39;hidden&#39;); s.setAttribute(&#39;name&#39;, &#39;authenticity_token&#39;); s.setAttribute(&#39;value&#39;, &#39;60LEQcz5QwgPPtYcqT/S9p/WNXRutwT3lYWyZhg6GHo=&#39;); f.appendChild(s);f.submit(); };return false;">Delete</a></div>
        </li>
<?php }?>




<!--- Insert the other code 5 sep 2012 ---->
<?php 

while( ($record1 = $batchrecord->getNextRecord()) !== false )
    { 
	
?>  

<?php /*?><?=$record1['batch_course_code']?>
<?=$record1['batch_code']?><?php */?>
<?php } ?>
<!----End of the code -------------------->

       <!-- <li class="listeven">
          <div class="category-name"><a href="http://demo.fedena.com/courses/3">B.COM COMMERCE FIRST SEMESTER</a></div>
          <div class="category-edit"><a href="http://demo.fedena.com/courses/3/edit">Edit</a></div><div class="category-delete">   <a href="http://demo.fedena.com/courses/3" onClick="if (confirm(&#39;Are You Sure?&#39;)) { var f = document.createElement(&#39;form&#39;); f.style.display = &#39;none&#39;; this.parentNode.appendChild(f); f.method = &#39;POST&#39;; f.action = this.href;var m = document.createElement(&#39;input&#39;); m.setAttribute(&#39;type&#39;, &#39;hidden&#39;); m.setAttribute(&#39;name&#39;, &#39;_method&#39;); m.setAttribute(&#39;value&#39;, &#39;delete&#39;); f.appendChild(m);var s = document.createElement(&#39;input&#39;); s.setAttribute(&#39;type&#39;, &#39;hidden&#39;); s.setAttribute(&#39;name&#39;, &#39;authenticity_token&#39;); s.setAttribute(&#39;value&#39;, &#39;60LEQcz5QwgPPtYcqT/S9p/WNXRutwT3lYWyZhg6GHo=&#39;); f.appendChild(s);f.submit(); };return false;">Delete</a></div>
        </li>
      
        <li class="listodd">
          <div class="category-name"><a href="http://demo.fedena.com/courses/6">B.Sc CHEMISTRY  FIRST SEM</a></div>
          <div class="category-edit"><a href="http://demo.fedena.com/courses/6/edit">Edit</a></div><div class="category-delete">   <a href="http://demo.fedena.com/courses/6" onClick="if (confirm(&#39;Are You Sure?&#39;)) { var f = document.createElement(&#39;form&#39;); f.style.display = &#39;none&#39;; this.parentNode.appendChild(f); f.method = &#39;POST&#39;; f.action = this.href;var m = document.createElement(&#39;input&#39;); m.setAttribute(&#39;type&#39;, &#39;hidden&#39;); m.setAttribute(&#39;name&#39;, &#39;_method&#39;); m.setAttribute(&#39;value&#39;, &#39;delete&#39;); f.appendChild(m);var s = document.createElement(&#39;input&#39;); s.setAttribute(&#39;type&#39;, &#39;hidden&#39;); s.setAttribute(&#39;name&#39;, &#39;authenticity_token&#39;); s.setAttribute(&#39;value&#39;, &#39;60LEQcz5QwgPPtYcqT/S9p/WNXRutwT3lYWyZhg6GHo=&#39;); f.appendChild(s);f.submit(); };return false;">Delete</a></div>
        </li>
      
        <li class="listeven">
          <div class="category-name"><a href="http://demo.fedena.com/courses/4">B.Sc.MATHMATICS FIRST SEMESTER</a></div>
          <div class="category-edit"><a href="http://demo.fedena.com/courses/4/edit">Edit</a></div><div class="category-delete">   <a href="http://demo.fedena.com/courses/4" onClick="if (confirm(&#39;Are You Sure?&#39;)) { var f = document.createElement(&#39;form&#39;); f.style.display = &#39;none&#39;; this.parentNode.appendChild(f); f.method = &#39;POST&#39;; f.action = this.href;var m = document.createElement(&#39;input&#39;); m.setAttribute(&#39;type&#39;, &#39;hidden&#39;); m.setAttribute(&#39;name&#39;, &#39;_method&#39;); m.setAttribute(&#39;value&#39;, &#39;delete&#39;); f.appendChild(m);var s = document.createElement(&#39;input&#39;); s.setAttribute(&#39;type&#39;, &#39;hidden&#39;); s.setAttribute(&#39;name&#39;, &#39;authenticity_token&#39;); s.setAttribute(&#39;value&#39;, &#39;60LEQcz5QwgPPtYcqT/S9p/WNXRutwT3lYWyZhg6GHo=&#39;); f.appendChild(s);f.submit(); };return false;">Delete</a></div>
        </li>
      
        <li class="listodd">
          <div class="category-name"><a href="http://demo.fedena.com/courses/5">B.Sc.PHYSICS FIRST SEMESTER</a></div>
          <div class="category-edit"><a href="http://demo.fedena.com/courses/5/edit">Edit</a></div><div class="category-delete">   <a href="http://demo.fedena.com/courses/5" onClick="if (confirm(&#39;Are You Sure?&#39;)) { var f = document.createElement(&#39;form&#39;); f.style.display = &#39;none&#39;; this.parentNode.appendChild(f); f.method = &#39;POST&#39;; f.action = this.href;var m = document.createElement(&#39;input&#39;); m.setAttribute(&#39;type&#39;, &#39;hidden&#39;); m.setAttribute(&#39;name&#39;, &#39;_method&#39;); m.setAttribute(&#39;value&#39;, &#39;delete&#39;); f.appendChild(m);var s = document.createElement(&#39;input&#39;); s.setAttribute(&#39;type&#39;, &#39;hidden&#39;); s.setAttribute(&#39;name&#39;, &#39;authenticity_token&#39;); s.setAttribute(&#39;value&#39;, &#39;60LEQcz5QwgPPtYcqT/S9p/WNXRutwT3lYWyZhg6GHo=&#39;); f.appendChild(s);f.submit(); };return false;">Delete</a></div>
        </li>
      
        <li class="listeven">
          <div class="category-name"><a href="http://demo.fedena.com/courses/10">Electronics first sem ec2k</a></div>
          <div class="category-edit"><a href="http://demo.fedena.com/courses/10/edit">Edit</a></div><div class="category-delete">   <a href="http://demo.fedena.com/courses/10" onClick="if (confirm(&#39;Are You Sure?&#39;)) { var f = document.createElement(&#39;form&#39;); f.style.display = &#39;none&#39;; this.parentNode.appendChild(f); f.method = &#39;POST&#39;; f.action = this.href;var m = document.createElement(&#39;input&#39;); m.setAttribute(&#39;type&#39;, &#39;hidden&#39;); m.setAttribute(&#39;name&#39;, &#39;_method&#39;); m.setAttribute(&#39;value&#39;, &#39;delete&#39;); f.appendChild(m);var s = document.createElement(&#39;input&#39;); s.setAttribute(&#39;type&#39;, &#39;hidden&#39;); s.setAttribute(&#39;name&#39;, &#39;authenticity_token&#39;); s.setAttribute(&#39;value&#39;, &#39;60LEQcz5QwgPPtYcqT/S9p/WNXRutwT3lYWyZhg6GHo=&#39;); f.appendChild(s);f.submit(); };return false;">Delete</a></div>
        </li>
      
        <li class="listodd">
          <div class="category-name"><a href="http://demo.fedena.com/courses/11">new course 1 kk</a></div>
          <div class="category-edit"><a href="http://demo.fedena.com/courses/11/edit">Edit</a></div><div class="category-delete">   <a href="http://demo.fedena.com/courses/11" onClick="if (confirm(&#39;Are You Sure?&#39;)) { var f = document.createElement(&#39;form&#39;); f.style.display = &#39;none&#39;; this.parentNode.appendChild(f); f.method = &#39;POST&#39;; f.action = this.href;var m = document.createElement(&#39;input&#39;); m.setAttribute(&#39;type&#39;, &#39;hidden&#39;); m.setAttribute(&#39;name&#39;, &#39;_method&#39;); m.setAttribute(&#39;value&#39;, &#39;delete&#39;); f.appendChild(m);var s = document.createElement(&#39;input&#39;); s.setAttribute(&#39;type&#39;, &#39;hidden&#39;); s.setAttribute(&#39;name&#39;, &#39;authenticity_token&#39;); s.setAttribute(&#39;value&#39;, &#39;60LEQcz5QwgPPtYcqT/S9p/WNXRutwT3lYWyZhg6GHo=&#39;); f.appendChild(s);f.submit(); };return false;">Delete</a></div>
        </li>
      
        <li class="listeven">
          <div class="category-name"><a href="http://demo.fedena.com/courses/9">STANDARD 10 </a></div>
          <div class="category-edit"><a href="http://demo.fedena.com/courses/9/edit">Edit</a></div><div class="category-delete">   <a href="http://demo.fedena.com/courses/9" onClick="if (confirm(&#39;Are You Sure?&#39;)) { var f = document.createElement(&#39;form&#39;); f.style.display = &#39;none&#39;; this.parentNode.appendChild(f); f.method = &#39;POST&#39;; f.action = this.href;var m = document.createElement(&#39;input&#39;); m.setAttribute(&#39;type&#39;, &#39;hidden&#39;); m.setAttribute(&#39;name&#39;, &#39;_method&#39;); m.setAttribute(&#39;value&#39;, &#39;delete&#39;); f.appendChild(m);var s = document.createElement(&#39;input&#39;); s.setAttribute(&#39;type&#39;, &#39;hidden&#39;); s.setAttribute(&#39;name&#39;, &#39;authenticity_token&#39;); s.setAttribute(&#39;value&#39;, &#39;60LEQcz5QwgPPtYcqT/S9p/WNXRutwT3lYWyZhg6GHo=&#39;); f.appendChild(s);f.submit(); };return false;">Delete</a></div>
        </li>-->
      

    </ul>
    <div class="extender"> <div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div></div>
  </div>
</div>
 </div>

      <div class="extender"></div>
    </div>


<!-- footer -->
  <?php include("include/footer.php")?>
           