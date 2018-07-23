<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

 <link href="css/class_desination_ index.css" media="screen" rel="stylesheet" type="text/css">

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
  <h1>Class Designations</h1>
  <h3>Manage Class Designations</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/class_designations#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="page-yield">
  <div class="course-select">
    <div class="label-field-pair">
      <label for="student_course">Select a course :</label>
      <div class="text-input-bg">
        <select id="class_designation_course_id" name="class_designation[course_id]" onChange="new Ajax.Request(&#39;/class_designations/load_class_designations&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;course_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;Fx0ICRRbO4rrhCDJM/624/7sUzivQNmpkyG0E+3MKOA=&#39;)})"><option value="">Select a course</option>
<option value="25">MBA Business Management </option>
<option value="26">MBA International Marketing </option>
<option value="27">MCA Software </option>
<option value="28">MCA Protocol</option>
<option value="41">Standard 3 </option></select></div></div>
  </div>

  <div id="flash"></div>

  <div id="errors">
    
  </div>
  <div id="course_class_designations"><div id="class_form">
  <form action="http://demo.fedena.org/class_designations/create_class_designation?course_id=25" method="post" onSubmit="new Ajax.Request(&#39;/class_designations/create_class_designation?course_id=25&#39;, {asynchronous:true, evalScripts:true, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="Fx0ICRRbO4rrhCDJM/624/7sUzivQNmpkyG0E+3MKOA="></div>

    <div id="form-content">
      <div class="label-field-pair">
        <label for="name">Name</label>
        <div class="text-input-bg"><input id="class_designation_name" name="class_designation[name]" size="30" type="text"></div>
      </div>
      
        <div class="label-field-pair">
          <label for="marks">Marks</label>
          <div class="text-input-bg"><input id="class_designation_marks" name="class_designation[marks]" size="30" type="text"></div>
        </div>
      

      <div class="extender"></div>

      <div id="submit-button">
        <input name="commit" type="submit" value="► Create">
      </div>


    </div>
  </form>
</div>
<div id="category-list">
  <ul class="category-list">
  
    <p class="flash-msg">No Class Designations found.</p>
  
</ul>


</div>
</div>
</div> </div>

      <div class="extender"></div>
    </div>
  <?php include("include/footer.php")?> 