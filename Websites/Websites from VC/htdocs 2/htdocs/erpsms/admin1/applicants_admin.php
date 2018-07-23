<?php
$course = new Main();
$newsRecord = $course->getdata('*',"course","","course_name ASC", "");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

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
      <div id="content"> <div id="content-header">
  <img alt="Show_exam" src="../images/examination/show_exam.png">
  <h1>Applicant Registration</h1>
  <h3>Settings</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/applicants_admin#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="inner-tab-menu">
  <ul>
    <li><a href="?page=registration_courses">Manage Courses</a></li>
    <li><a href="?page=pin_groups">Manage Pins</a></li>
  </ul>
</div>

<div id="page-yield">
  

  <table id="listing" width="100%" cellpadding="1" cellspacing="1">
    <tbody><tr class="tr-head">
          <td class="col-1">SL-No.</td>
      <td class="col-1">Course</td>
      <td class="col-1">Code</td>
      <td class="col-1">Actions</td>
    </tr>
    <?php
	$i=0;
     while( ($record = $newsRecord->getNextRecord()) !== false )
    {
	$i++;
	?>
      <tr class="tr-odd">
       <td class="col-1"><?=$i;?></td>
        <td class="col-4"><?=$record['course_name']; ?></td>
        <td class="col-7"><?=$record['course_code']; ?></td>
        <td class="col-7"><a href="?page=user-profile&id='.$record[course_id].'">View Profile</a></td>
        </tr>
       <!-- <td class="col-3"><?=$record['other_info']; ?> </td>
       <td class="col-unique"><a href="?page=hostels-1&id=<?=$record['hostel_id'] ;?>">View</a>
          |
          <a href="?page=hostels-1-edit&id=<?=$record['hostel_id'] ?>">Edit</a>
          |
          <a href="http://demo.fedena.org/hostels/1" onClick="if (confirm(&#39;Are You Sure?&#39;)) { var f = document.createElement(&#39;form&#39;); f.style.display = &#39;none&#39;; this.parentNode.appendChild(f); f.method = &#39;POST&#39;; f.action = this.href;var m = document.createElement(&#39;input&#39;); m.setAttribute(&#39;type&#39;, &#39;hidden&#39;); m.setAttribute(&#39;name&#39;, &#39;_method&#39;); m.setAttribute(&#39;value&#39;, &#39;delete&#39;); f.appendChild(m);var s = document.createElement(&#39;input&#39;); s.setAttribute(&#39;type&#39;, &#39;hidden&#39;); s.setAttribute(&#39;name&#39;, &#39;authenticity_token&#39;); s.setAttribute(&#39;value&#39;, &#39;kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM=&#39;); f.appendChild(s);f.submit(); };return false;">Delete</a></td>
      </tr>-->
    <?php
	}
	?>
    
    
    
  </tbody></table>


</div> </div>

      <div class="extender"></div>
    </div>

   <!-- footer -->
  <?php include("include/footer.php")?>
           