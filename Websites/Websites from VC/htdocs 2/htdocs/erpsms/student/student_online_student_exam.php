<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ------------------------>
<?php include("include/support_file.php")?>
<link href="css/student_online_exam_index.css" media="screen" rel="stylesheet" type="text/css">
<!---------------------- Start head ------------------------------>
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php include("include/sidebar2.php")?>
           
      <!-- end of side bar -->
      <div id="content"> <div id="content-header">
  <img alt="Show_exam" src="../images/examination/show_exam.png">
  <h1>Online Exam</h1>
  <h3>Home</h3>
  <div id="app-back-button">
    <a href="#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">
  <div id="box">
    
    <div id="box">
      <form action="#" method="post" onsubmit="new Ajax.Request(&#39;/online_student_exam&#39;, {asynchronous:true, evalScripts:true, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="Ur7vuH4eh3GLQdgX0MyhWGCA6VusS8mxxNeUaUiCuNg="></div>
        <div class="label-field-pair">
          <label> Select Exam:</label>
          <div class="text-input-bg">
            <select id="exam_exam_id" name="exam[exam_id]"><option value=""> ► Select Exam</option>
</select>
          </div>
        </div>
        <div id="submit-button">
          <input id="exam_submit" name="commit" type="submit" value=" ► Go">
        </div>
      </form>
    </div>
  </div>
</div> </div>

      <div class="extender"></div>
    </div>

     
         <!-- footer -->
  <?php include("include/footer.php")?>
  
<ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 1; top: 0px; left: 0px; display: none; "></ul></body></html>