<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>

 <link href="css/ranking_ index.css" media="screen" rel="stylesheet" type="text/css">



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
  <h1>Ranking Levels</h1>
  <h3>Manage Ranking Levels</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.org/ranking_levels#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="page-yield">
  <div class="course-select">
    <div class="label-field-pair">
      <label for="student_course">Select a course:</label>
      <div class="text-input-bg">
        <select id="ranking_level_course_id" name="ranking_level[course_id]" onChange="new Ajax.Request(&#39;/ranking_levels/load_ranking_levels&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;course_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;Fx0ICRRbO4rrhCDJM/624/7sUzivQNmpkyG0E+3MKOA=&#39;)})"><option value="">Select a course</option>
<option value="25">MBA Business Management </option>
<option value="26">MBA International Marketing </option>
<option value="27">MCA Software </option>
<option value="28">MCA Protocol</option>
<option value="41">Standard 3 </option></select></div></div>
  </div>
  <div id="flash"></div>

  <div id="errors">
    
  </div>
  <div id="course_ranking_levels">
<div id="rank_form">
  <form action="http://demo.fedena.org/ranking_levels/create_ranking_level?course_id=25" method="post" onSubmit="new Ajax.Request(&#39;/ranking_levels/create_ranking_level?course_id=25&#39;, {asynchronous:true, evalScripts:true, parameters:Form.serialize(this)}); return false;"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="Fx0ICRRbO4rrhCDJM/624/7sUzivQNmpkyG0E+3MKOA="></div>

    <div id="form-content">
      <div class="label-field-pair">
        <label for="name">Name</label>
        <div class="text-input-bg"><input id="ranking_level_name" name="ranking_level[name]" size="30" type="text"></div>
      </div>
      
        <div class="label-field-pair">
          <label for="marks">Marks</label>
          <div class="text-input-bg"><input id="ranking_level_marks" name="ranking_level[marks]" size="30" type="text"></div>
        </div>
      
      <div class="label-field-pair">
        <label for="marks">Marks Limit Type</label>
        <div class="text-input-bg"><select id="ranking_level_marks_limit_type" name="ranking_level[marks_limit_type]"><option value="upper">Upper</option>
<option value="lower">Lower</option>
<option value="exact">Exact</option></select></div>
      </div>
      <div class="label-field-pair">
        <label for="subject_count">Number of Subjects</label>
        <div class="text-input-bg"><input id="ranking_level_subject_count" name="ranking_level[subject_count]" size="30" type="text"></div>
      </div>
      <div class="label-field-pair">
        <label for="marks">Subject Limit Type</label>
        <div class="text-input-bg"><select id="ranking_level_subject_limit_type" name="ranking_level[subject_limit_type]"><option value="upper">Upper</option>
<option value="lower">Lower</option>
<option value="exact">Exact</option></select></div>
      </div>
      <div class="label-field-pair">
        <label for="subject_count">Consider Full Course Duration?</label>
        <div class="text-input-bg"><input name="ranking_level[full_course]" type="hidden" value="0"><input id="ranking_level_full_course" name="ranking_level[full_course]" type="checkbox" value="1"></div>
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
  
    <li class="heading">Ranking Levels</li>
    
        <li class="listodd">
          <div class="category-name">A
            <span class="category-up-down Inactive"><a href="http://demo.fedena.org/ranking_levels#" onClick="new Ajax.Request(&#39;/ranking_levels/change_priority/1?order=up&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;Fx0ICRRbO4rrhCDJM/624/7sUzivQNmpkyG0E+3MKOA=&#39;)}); return false;">▲</a></span>
            <span class="category-up-down Inactive"><a href="http://demo.fedena.org/ranking_levels#" onClick="new Ajax.Request(&#39;/ranking_levels/change_priority/1?order=down&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;Fx0ICRRbO4rrhCDJM/624/7sUzivQNmpkyG0E+3MKOA=&#39;)}); return false;">▼</a></span>
            </div>
          <div class="category-edit"><a href="http://demo.fedena.org/ranking_levels#" onClick="new Ajax.Request(&#39;/ranking_levels/edit_ranking_level/1&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;Fx0ICRRbO4rrhCDJM/624/7sUzivQNmpkyG0E+3MKOA=&#39;)}); return false;">Edit</a></div><div class="category-delete">   <a href="http://demo.fedena.org/ranking_levels#" onClick="if (confirm(&#39;Are You Sure?&#39;)) { new Ajax.Request(&#39;/ranking_levels/delete_ranking_level/1&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;authenticity_token=&#39; + encodeURIComponent(&#39;Fx0ICRRbO4rrhCDJM/624/7sUzivQNmpkyG0E+3MKOA=&#39;)}); }; return false;">Delete</a></div>
        </li>
      
  
</ul>


</div></div>
</div> </div>

      <div class="extender"></div>
    </div>

  <?php include("include/footer.php")?> 