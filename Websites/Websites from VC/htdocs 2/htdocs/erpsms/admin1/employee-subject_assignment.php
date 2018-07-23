<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/photo_add.css" media="screen" rel="stylesheet" type="text/css">
 <!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php /*?><?php include("include/sidebar.php")?><?php */?>
           
      <!-- end of side bar -->
      <div id="content"> 
<div id="content-header">
  <img alt="Show_hr" src="../images/HR/show_hr.png">
  <h1>Employee's Subject</h1>
  <h3>Associate</h3>
  <div id="app-back-button">
 <a href="http://demo.fedena.org/employee/subject_assignment#" onclick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">

  <div id="form-content">
    <div class="label-field-pair">
      <label for="course_name">Course</label>
        <div class="text-input-bg">
          <select id="subject_assignment_batch_id" name="subject_assignment[batch_id]" onchange="new Ajax.Request(&#39;/employee/update_subjects&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;batch_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)})"><option value="">Select a batch</option>
<option value="43">1 - 1st Semester</option>
<option value="44">2 - 2nd Semester</option>
<option value="46">2 - 2nd Semester</option>
<option value="45">3 - 1st Semester</option>
<option value="62">3 - 2012-2013</option></select>
        </div>
    </div>

    <div id="subjects1">

   <div class="label-field-pair">
      <label for="subject_name">Subject</label>
        <div class="text-input-bg"><select id="subject_assignment_subject_id" name="subject_assignment[subject_id]" onchange="new Ajax.Request(&#39;/employee/select_department&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;subject_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)})"><option value="">Select a subject</option>
</select>
</div>
   </div>




</div>
  </div>
   <div id="department-select"></div>

</div> </div>

      <div class="extender"></div>
    </div>

     <!-- footer -->
  <?php include("include/footer.php")?>