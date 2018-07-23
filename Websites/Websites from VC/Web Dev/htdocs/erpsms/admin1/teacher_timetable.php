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
   <?php include("include/sidebar4.php")?>
           
      <!-- end of side bar -->
      <div id="content"> <div id="content-header">

  <a href="http://demo.fedena.org/timetable"><img alt="Show_timetable" src="../images/show_timetable.png"></a>
  <h1>Timetable</h1>
  <h3>Teacher Timetable</h3>

  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>  </div>

</div>

<div id="page-yield">


  <form action="#" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="xxJR6wpEhTLG9QUj261eJPHsP9HkY0/i58PsH4MzUzE="></div>
    <div class="label-field-pair">
      <label for="timetable_entry_course_id">Select a timetable</label>
      <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none; ">
      <div class="text-input-bg">
        <select id="timetable_entry_timetable_id" name="timetable_entry[timetable_id]" onChange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/timetable/update_teacher_tt&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;timetable_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;xxJR6wpEhTLG9QUj261eJPHsP9HkY0/i58PsH4MzUzE=&#39;)})"><option value="">Select a timetable</option>
<option value="9">16 Jun 2012 - 16 Jun 2012</option>
<option value="10">17 Jun 2012 - 19 Jun 2012</option>
<option value="11">29 Jun 2012 - 29 Jun 2012</option></select>
      </div>
    </div>
  </form>


  <div id="timetable_view">
  <div id="timetable-container"><br/></br><br/></br><br/></br>No timetable entries found</div>
</div>
</div> </div>

      <div class="extender"></div>
    </div>

   <!-- footer -->
  <?php include("include/footer.php")?>