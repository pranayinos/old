<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/popup.css" media="screen" rel="stylesheet" type="text/css">

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
      <div id="fullcontent"> <div id="content-header">
  <img alt="Library_small" src="../images/library/library_small.png">
  <h1>Library</h1>
  <h3>Edit Library Card setting</h3>
  <div id="app-back-button">
    <a href="ibrary/card_setting#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="page-yield">
  <div id="flash-box">
    
  </div>
  <div class="box"><div id="MB_frame" style=""><div id="MB_header"><div id="MB_caption"><b>Edit library card Setting</b></div></div><div id="MB_content" style=""><div id="modal-box" style="">
<form action="?page=library-card_setting" method="post" onsubmit="new Ajax.Request(&#39;/library/create_setting&#39;, {asynchronous:true, evalScripts:true, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="Q82vux645k6qzovSWYhmFGB4wWYAjv9l0xSjcltafEc="></div>
  <div id="form-errors"></div>
  <div class="label-field-pair">
    <label>Course</label>
    <div class="input-field">
      <input disabled="disabled" id="course_name" name="course[name]" size="30" type="text" value="00COURSE STD 01" class="MB_focusable">
      <input id="library_card_setting_course_id" name="library_card_setting[course_id]" type="hidden" value="105">
    </div>
  </div>
  <div class="label-field-pair">
    <label>Category</label>
    <div class="input-field"><select id="library_card_setting_student_category_id" name="library_card_setting[student_category_id]" class="MB_focusable"><option value="">Select category</option>
<option value="3">Foreign National</option>
<option value="20">Hispanic</option>
<option value="21">Physically Handicapped</option>
<option value="23">General</option>
<option value="26">mkj</option>
<option value="27">xcgvbd</option></select>
    </div>
  </div>
  <div class="label-field-pair">
    <label>Books issuable</label>
    <div class="input-field"><input id="library_card_setting_books_issueable" name="library_card_setting[books_issueable]" size="30" type="text" class="MB_focusable" value="0">
    </div>
  </div>
  <div class="label-field-pair">
    <label>Period</label>
    <div class="input-field"><input id="library_card_setting_time_period" name="library_card_setting[time_period]" size="30" type="text" value="30" class="MB_focusable">Days
    </div>
  </div>
  <input class="submit_button MB_focusable" id="library_card_setting_submit" name="commit" type="submit" value="Submit">
</form></div></div></div>
    <!--<div class="label-field-pair">
      <label for="student_course">Courses
        <img align="absmiddle" alt="Loader" border="0" id="loader" src="./library-card_setting_files/loader.gif" style="display: none; ">
      </label>
      <div class="text-input-bg">
        <select id="course_name" name="course[name]" onChange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/library/show_setting&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;course_name=&#39;+ value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM=&#39;)})"><option value="">Select a course</option>
<option value="25">MBA</option>
<option value="26">MBA</option>
<option value="27">MCA</option>
<option value="28">MCA</option>
<option value="41">Standard 3</option></select>


      </div>
    </div>-->
    <!--<div id="card_setting"><table id="listing" align="center" width="100%" cellpadding="1" cellspacing="1">
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
  <tr class="tr-blank"></tr>
  
    <tr class="tr-odd">
      <td class="col-4">
        MBA
      </td>
      <td class="col-1">
        GENERAL
      </td>
      <td class="col-1">
        2
      </td>
      <td class="col-1">
        30
      </td>
      <td class="col-1">
        <small>
          <a href="http://demo.fedena.org/library/card_setting#" onClick="new Ajax.Request(&#39;/library/edit_card_setting/3&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM=&#39;)}); return false;">Edit</a> |
          <a href="http://demo.fedena.org/library/card_setting#" onClick="if (confirm(&#39;Are you sure want to delete the library card setting?&#39;)) { new Ajax.Request(&#39;/library/delete_card_setting/3&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM=&#39;)}); }; return false;">Delete</a>
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
</tbody></table>-->
 

</div>
    <div id="modal-box" style="display:none;"></div>
  </div>
</div> </div>

      <div class="extender"></div>
    </div>

     <!-- footer -->
  <?php include("include/footer.php")?>