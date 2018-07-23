<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

<link href="css/assign_fa_groups.css" media="screen" rel="stylesheet" type="text/css">

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
  <h1>Foramtive assessment</h1>
  <h3>Assign FA Groups to Subjects</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="inner-tab-menu">
  <ul>

  </ul>
</div>

<div id="page-yield">
  <div id="error-div"></div>
  <div id="flash-box"></div>
  <div class="label-field-pair">
    <label for="course_id">Select a course</label>
    <img align="absmiddle" alt="Loader" border="0" id="loader" src="../images/loader.gif" style="display: none; ">
    <div class="text-input-bg">
      <select id="subject_course_id" name="subject[course_id]" onChange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/fa_groups/select_subjects&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;course_id=&#39;+ value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;ioHd1weWldQoLIQ81Y+dwML4e/LqwAF6IihFNU0ZREI=&#39;)})"><option value="">Select a course</option>
<option value="25">MBA</option></select>
    </div>
  </div>
    <div id="subjects">

<div class="label-field-pair">
  <label for="subject_name">Subject</label>
  <div class="text-input-bg"><select id="subject_assignment_subject_id" name="subject_assignment[subject_id]" onChange="new Ajax.Request(&#39;/fa_groups/select_fa_groups&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;subject_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;ioHd1weWldQoLIQ81Y+dwML4e/LqwAF6IihFNU0ZREI=&#39;)})"><option value="">Select a subject</option>
<option value="120">Accounting (a)</option>
<option value="121">Advertising (b)</option></select>
  </div>
</div>




</div>
    <div id="select_fa_group"><form action="http://demo.fedena.org/fa_groups/update_subject_fa_groups/121" class="edit_subject" id="edit_subject_121" method="post" onSubmit="new Ajax.Request(&#39;/fa_groups/update_subject_fa_groups/121&#39;, {asynchronous:true, evalScripts:true, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="_method" type="hidden" value="put"><input name="authenticity_token" type="hidden" value="ioHd1weWldQoLIQ81Y+dwML4e/LqwAF6IihFNU0ZREI="></div>
  <ul id="category-list">
    <li class="listheading">
      <div class="heading-name">Select FA Groups</div>
      <div class="heading-edit">
  
      </div>
    </li>
    
    
        <li class="listodd">
          <label>
            <div class="category-edit">
              <input checked="checked" id="subject_fa_group_ids_" name="subject[fa_group_ids][]" type="checkbox" value="1">
            </div>
            <div class="category-name">
              GA Group 1-Desc   (Term I)
            </div>
          </label>
        </li>
      
  </ul>
  <input class="submit_button" id="subject_submit" name="commit" type="submit" value="► Save">
</form></div>
</div> </div>

      <div class="extender"></div>
    </div>

    <!-- footer -->
  <?php include("include/footer.php")?>