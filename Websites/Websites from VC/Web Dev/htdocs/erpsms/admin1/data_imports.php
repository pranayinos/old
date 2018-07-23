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
      <div id="content"> 
<div id="content-header">
  <img alt="Show_exam" src="../images/examination/show_exam.png">
  <h1>CSV Data Import</h1>
  <h3>Student Data</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/data_imports#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">

  
    <p class="flash-msg"> Select a file to import </p>
  
  

  <div class="box">
    <form action="#" enctype="multipart/form-data" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM="></div>

      <div class="label-field-pair">
        <label for="student_image_file">Select Batch</label>
        <div class="text-input-bg"> <select id="batch_id" name="batch_id"><option value="43">1 - 1st Semester</option>
<option value="44">2 - 2nd Semester</option>
<option value="46">2 - 2nd Semester</option>
<option value="45">3 - 1st Semester</option>
<option value="62">3 - 2012-2013</option></select></div>
      </div>
      <div class="label-field-pair">
        <label for="student_image_file">Select File</label>
        <div class="text-input-bg"><input id="data_file" name="data[file]" size="12" type="file"></div>
      </div>


      <input class="submit_button" id="data_submit" name="commit" type="submit" value="Upload">
    </form>

    <div class="extender"></div>
  </div>
</div>
 </div>

      <div class="extender"></div>
    </div>

    <!-- footer -->
  <?php include("include/footer.php")?>