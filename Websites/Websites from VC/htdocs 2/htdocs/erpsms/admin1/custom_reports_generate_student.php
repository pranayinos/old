<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/generate.css" media="screen" rel="stylesheet" type="text/css">


<!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
 <?php /*?>  <?php include("include/sidebar.php")?><?php */?>
           
      <!-- end of side bar -->
      <div id="fullcontent"> 
<div id="content-header">
  <h1>Custom Report</h1>
  <h3>New Report</h3>
</div>
<div id="inner-tab-menu">
  <ul>
    
      <li>
        <a href="?page=custom_reports">Show All Reports</a>
      </li>
    
  </ul>
</div>

<form action="#" class="new_report" id="new_report" method="post" onSubmit="return validate_form()"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="kCWJmowIJe0ctFJ3Do7/FinMssy2Iox1bXH7//ekfPM="></div>
  
  <ul id="category-list">
    <li class="heading">
      <label for="report_name">Name</label>
      <input id="report_name" name="report[name]" size="30" type="text"><script>var report_name = new LiveValidation('report_name');report_name.add(Validate.Presence, {"validMessage":""})</script>
    </li>

    <input id="report_model" name="report[model]" type="hidden" value="Student">

    
    
      
    
      
        
          <li class="listodd">
          
          <span class="col-cell">
            <input onload="div_toggle();" class="cbox" id="admission_no" name="report_fields[admission_no][]" type="checkbox" value="admission_no">
            Admission no
          </span>
          
        
      
        
          <span class="col-cell">
            <input onload="div_toggle();" class="cbox" id="first_name" name="report_fields[first_name][]" type="checkbox" value="first_name">
            First Name
          </span>
          
        
      
        
          <span class="col-cell">
            <input onload="div_toggle();" class="cbox" id="middle_name" name="report_fields[middle_name][]" type="checkbox" value="middle_name">
            Middle Name
          </span>
          
          </li>
        
        
      
        
          <li class="listeven">
          
          <span class="col-cell">
            <input onload="div_toggle();" class="cbox" id="last_name" name="report_fields[last_name][]" type="checkbox" value="last_name">
            Last Name
          </span>
          
        
      
        
          <span class="col-cell">
            <input onload="div_toggle();" class="cbox" id="gender" name="report_fields[gender][]" type="checkbox" value="gender">
            Gender
          </span>
          
        
      
        
          <span class="col-cell">
            <input onload="div_toggle();" class="cbox" id="blood_group" name="report_fields[blood_group][]" type="checkbox" value="blood_group">
            Blood Group
          </span>
          
          </li>
        
        
      
        
          <li class="listodd">
          
          <span class="col-cell">
            <input onload="div_toggle();" class="cbox" id="language" name="report_fields[language][]" type="checkbox" value="language">
            Language
          </span>
          
        
      
        
          <span class="col-cell">
            <input onload="div_toggle();" class="cbox" id="religion" name="report_fields[religion][]" type="checkbox" value="religion">
            Religion
          </span>
          
        
      
        
          <span class="col-cell">
            <input onload="div_toggle();" class="cbox" id="city" name="report_fields[city][]" type="checkbox" value="city">
            City
          </span>
          
          </li>
        
        
      
        
          <li class="listeven">
          
          <span class="col-cell">
            <input onload="div_toggle();" class="cbox" id="state" name="report_fields[state][]" type="checkbox" value="state">
            State
          </span>
          
        
      
    
      
    
      
        
          <span class="col-cell">
            <input onload="div_toggle();" class="cbox" id="country" name="report_fields[country][]" type="checkbox" value="country">
            Country
          </span>
          
        
      
        
          <span class="col-cell">
            <input onload="div_toggle();" class="cbox" id="nationality" name="report_fields[nationality][]" type="checkbox" value="nationality">
            Nationality
          </span>
          
          </li>
        
        
      
        
          <li class="listodd">
          
          <span class="col-cell">
            <input onload="div_toggle();" class="cbox" id="student_category" name="report_fields[student_category][]" type="checkbox" value="student_category">
            Student Category
          </span>
          
        
      
        
          <span class="col-cell">
            <input onload="div_toggle();" class="cbox" id="batch" name="report_fields[batch][]" type="checkbox" value="batch">
            Batch
          </span>
          
        
      
        
          <span class="col-cell">
            <input onload="div_toggle();" class="cbox" id="course" name="report_fields[course][]" type="checkbox" value="course">
            Course
          </span>
          
          </li>
        
        
      
    
      
    
      
        
          <li class="listeven">
          
          <span class="col-cell">
            <input onload="div_toggle();" class="cbox" id="admission_date" name="report_fields[admission_date][]" type="checkbox" value="admission_date">
            Admission Date
          </span>
          
        
      
        
          <span class="col-cell">
            <input onload="div_toggle();" class="cbox" id="date_of_birth" name="report_fields[date_of_birth][]" type="checkbox" value="date_of_birth">
            Date of Birth
          </span>
          
        
      
    
  </li></ul>
  <div class="query-fields">
  <!--  <li class="info" id="disp" style="">
      <p>Input criterias to be used in search.</p>
    </li>
    -->
    

      

      <div class="admission_no fields" style="display: none; ">
        <label class="column">Admission no</label>
        <input id="report_report_queries_attributes_0_column_name" name="report[report_queries_attributes][0][column_name]" type="hidden" value="admission_no" disabled="">
        <input id="report_report_queries_attributes_0_table_name" name="report[report_queries_attributes][0][table_name]" type="hidden" value="Student" disabled="">
        <input id="report_report_queries_attributes_0_criteria" name="report[report_queries_attributes][0][criteria]" type="hidden" value="like" disabled="">
        <input id="report_report_queries_attributes_0_column_type" name="report[report_queries_attributes][0][column_type]" type="hidden" value="string" disabled="">
        
          <div class="text">
            <label class="criteria">Like</label>
            <input id="report_report_queries_attributes_0_query" name="report[report_queries_attributes][0][query]" size="30" type="text" disabled="">
          </div>
        
      </div>
      
    

      

      <div class="admission_no fields" style="display: none; ">
        <label class="column">Admission no</label>
        <input id="report_report_queries_attributes_1_column_name" name="report[report_queries_attributes][1][column_name]" type="hidden" value="admission_no" disabled="">
        <input id="report_report_queries_attributes_1_table_name" name="report[report_queries_attributes][1][table_name]" type="hidden" value="Student" disabled="">
        <input id="report_report_queries_attributes_1_criteria" name="report[report_queries_attributes][1][criteria]" type="hidden" value="begins_with" disabled="">
        <input id="report_report_queries_attributes_1_column_type" name="report[report_queries_attributes][1][column_type]" type="hidden" value="string" disabled="">
        
          <div class="text">
            <label class="criteria">Begins with</label>
            <input id="report_report_queries_attributes_1_query" name="report[report_queries_attributes][1][query]" size="30" type="text" disabled="">
          </div>
        
      </div>
      
    

      

      <div class="admission_no fields" style="display: none; ">
        <label class="column">Admission no</label>
        <input id="report_report_queries_attributes_2_column_name" name="report[report_queries_attributes][2][column_name]" type="hidden" value="admission_no" disabled="">
        <input id="report_report_queries_attributes_2_table_name" name="report[report_queries_attributes][2][table_name]" type="hidden" value="Student" disabled="">
        <input id="report_report_queries_attributes_2_criteria" name="report[report_queries_attributes][2][criteria]" type="hidden" value="equals" disabled="">
        <input id="report_report_queries_attributes_2_column_type" name="report[report_queries_attributes][2][column_type]" type="hidden" value="string" disabled="">
        
          <div class="text">
            <label class="criteria">Equals</label>
            <input id="report_report_queries_attributes_2_query" name="report[report_queries_attributes][2][query]" size="30" type="text" disabled="">
          </div>
        
      </div>
      
    

      

      <div class="first_name fields" style="display: none; ">
        <label class="column">First Name</label>
        <input id="report_report_queries_attributes_3_column_name" name="report[report_queries_attributes][3][column_name]" type="hidden" value="first_name" disabled="">
        <input id="report_report_queries_attributes_3_table_name" name="report[report_queries_attributes][3][table_name]" type="hidden" value="Student" disabled="">
        <input id="report_report_queries_attributes_3_criteria" name="report[report_queries_attributes][3][criteria]" type="hidden" value="like" disabled="">
        <input id="report_report_queries_attributes_3_column_type" name="report[report_queries_attributes][3][column_type]" type="hidden" value="string" disabled="">
        
          <div class="text">
            <label class="criteria">Like</label>
            <input id="report_report_queries_attributes_3_query" name="report[report_queries_attributes][3][query]" size="30" type="text" disabled="">
          </div>
        
      </div>
      
    

      

      <div class="first_name fields" style="display: none; ">
        <label class="column">First Name</label>
        <input id="report_report_queries_attributes_4_column_name" name="report[report_queries_attributes][4][column_name]" type="hidden" value="first_name" disabled="">
        <input id="report_report_queries_attributes_4_table_name" name="report[report_queries_attributes][4][table_name]" type="hidden" value="Student" disabled="">
        <input id="report_report_queries_attributes_4_criteria" name="report[report_queries_attributes][4][criteria]" type="hidden" value="begins_with" disabled="">
        <input id="report_report_queries_attributes_4_column_type" name="report[report_queries_attributes][4][column_type]" type="hidden" value="string" disabled="">
        
          <div class="text">
            <label class="criteria">Begins with</label>
            <input id="report_report_queries_attributes_4_query" name="report[report_queries_attributes][4][query]" size="30" type="text" disabled="">
          </div>
        
      </div>
      
    

      

      <div class="first_name fields" style="display: none; ">
        <label class="column">First Name</label>
        <input id="report_report_queries_attributes_5_column_name" name="report[report_queries_attributes][5][column_name]" type="hidden" value="first_name" disabled="">
        <input id="report_report_queries_attributes_5_table_name" name="report[report_queries_attributes][5][table_name]" type="hidden" value="Student" disabled="">
        <input id="report_report_queries_attributes_5_criteria" name="report[report_queries_attributes][5][criteria]" type="hidden" value="equals" disabled="">
        <input id="report_report_queries_attributes_5_column_type" name="report[report_queries_attributes][5][column_type]" type="hidden" value="string" disabled="">
        
          <div class="text">
            <label class="criteria">Equals</label>
            <input id="report_report_queries_attributes_5_query" name="report[report_queries_attributes][5][query]" size="30" type="text" disabled="">
          </div>
        
      </div>
      
    

      

      <div class="middle_name fields" style="display: none; ">
        <label class="column">Middle Name</label>
        <input id="report_report_queries_attributes_6_column_name" name="report[report_queries_attributes][6][column_name]" type="hidden" value="middle_name" disabled="">
        <input id="report_report_queries_attributes_6_table_name" name="report[report_queries_attributes][6][table_name]" type="hidden" value="Student" disabled="">
        <input id="report_report_queries_attributes_6_criteria" name="report[report_queries_attributes][6][criteria]" type="hidden" value="like" disabled="">
        <input id="report_report_queries_attributes_6_column_type" name="report[report_queries_attributes][6][column_type]" type="hidden" value="string" disabled="">
        
          <div class="text">
            <label class="criteria">Like</label>
            <input id="report_report_queries_attributes_6_query" name="report[report_queries_attributes][6][query]" size="30" type="text" disabled="">
          </div>
        
      </div>
      
    

      

      <div class="middle_name fields" style="display: none; ">
        <label class="column">Middle Name</label>
        <input id="report_report_queries_attributes_7_column_name" name="report[report_queries_attributes][7][column_name]" type="hidden" value="middle_name" disabled="">
        <input id="report_report_queries_attributes_7_table_name" name="report[report_queries_attributes][7][table_name]" type="hidden" value="Student" disabled="">
        <input id="report_report_queries_attributes_7_criteria" name="report[report_queries_attributes][7][criteria]" type="hidden" value="begins_with" disabled="">
        <input id="report_report_queries_attributes_7_column_type" name="report[report_queries_attributes][7][column_type]" type="hidden" value="string" disabled="">
        
          <div class="text">
            <label class="criteria">Begins with</label>
            <input id="report_report_queries_attributes_7_query" name="report[report_queries_attributes][7][query]" size="30" type="text" disabled="">
          </div>
        
      </div>
      
    

      

      <div class="middle_name fields" style="display: none; ">
        <label class="column">Middle Name</label>
        <input id="report_report_queries_attributes_8_column_name" name="report[report_queries_attributes][8][column_name]" type="hidden" value="middle_name" disabled="">
        <input id="report_report_queries_attributes_8_table_name" name="report[report_queries_attributes][8][table_name]" type="hidden" value="Student" disabled="">
        <input id="report_report_queries_attributes_8_criteria" name="report[report_queries_attributes][8][criteria]" type="hidden" value="equals" disabled="">
        <input id="report_report_queries_attributes_8_column_type" name="report[report_queries_attributes][8][column_type]" type="hidden" value="string" disabled="">
        
          <div class="text">
            <label class="criteria">Equals</label>
            <input id="report_report_queries_attributes_8_query" name="report[report_queries_attributes][8][query]" size="30" type="text" disabled="">
          </div>
        
      </div>
      
    

      

      <div class="last_name fields" style="display: none; ">
        <label class="column">Last Name</label>
        <input id="report_report_queries_attributes_9_column_name" name="report[report_queries_attributes][9][column_name]" type="hidden" value="last_name" disabled="">
        <input id="report_report_queries_attributes_9_table_name" name="report[report_queries_attributes][9][table_name]" type="hidden" value="Student" disabled="">
        <input id="report_report_queries_attributes_9_criteria" name="report[report_queries_attributes][9][criteria]" type="hidden" value="like" disabled="">
        <input id="report_report_queries_attributes_9_column_type" name="report[report_queries_attributes][9][column_type]" type="hidden" value="string" disabled="">
        
          <div class="text">
            <label class="criteria">Like</label>
            <input id="report_report_queries_attributes_9_query" name="report[report_queries_attributes][9][query]" size="30" type="text" disabled="">
          </div>
        
      </div>
      
    

      

      <div class="last_name fields" style="display: none; ">
        <label class="column">Last Name</label>
        <input id="report_report_queries_attributes_10_column_name" name="report[report_queries_attributes][10][column_name]" type="hidden" value="last_name" disabled="">
        <input id="report_report_queries_attributes_10_table_name" name="report[report_queries_attributes][10][table_name]" type="hidden" value="Student" disabled="">
        <input id="report_report_queries_attributes_10_criteria" name="report[report_queries_attributes][10][criteria]" type="hidden" value="begins_with" disabled="">
        <input id="report_report_queries_attributes_10_column_type" name="report[report_queries_attributes][10][column_type]" type="hidden" value="string" disabled="">
        
          <div class="text">
            <label class="criteria">Begins with</label>
            <input id="report_report_queries_attributes_10_query" name="report[report_queries_attributes][10][query]" size="30" type="text" disabled="">
          </div>
        
      </div>
      
    

      

      <div class="last_name fields" style="display: none; ">
        <label class="column">Last Name</label>
        <input id="report_report_queries_attributes_11_column_name" name="report[report_queries_attributes][11][column_name]" type="hidden" value="last_name" disabled="">
        <input id="report_report_queries_attributes_11_table_name" name="report[report_queries_attributes][11][table_name]" type="hidden" value="Student" disabled="">
        <input id="report_report_queries_attributes_11_criteria" name="report[report_queries_attributes][11][criteria]" type="hidden" value="equals" disabled="">
        <input id="report_report_queries_attributes_11_column_type" name="report[report_queries_attributes][11][column_type]" type="hidden" value="string" disabled="">
        
          <div class="text">
            <label class="criteria">Equals</label>
            <input id="report_report_queries_attributes_11_query" name="report[report_queries_attributes][11][query]" size="30" type="text" disabled="">
          </div>
        
      </div>
      
    

      

      <div class="gender fields" style="display: none; ">
        <label class="column">Gender</label>
        <input id="report_report_queries_attributes_12_column_name" name="report[report_queries_attributes][12][column_name]" type="hidden" value="gender" disabled="">
        <input id="report_report_queries_attributes_12_table_name" name="report[report_queries_attributes][12][table_name]" type="hidden" value="Student" disabled="">
        <input id="report_report_queries_attributes_12_criteria" name="report[report_queries_attributes][12][criteria]" type="hidden" value="like" disabled="">
        <input id="report_report_queries_attributes_12_column_type" name="report[report_queries_attributes][12][column_type]" type="hidden" value="string" disabled="">
        
          <div class="text">
            <label class="criteria">Like</label>
            <input id="report_report_queries_attributes_12_query" name="report[report_queries_attributes][12][query]" size="30" type="text" disabled="">
          </div>
        
      </div>
      
    

      

      <div class="gender fields" style="display: none; ">
        <label class="column">Gender</label>
        <input id="report_report_queries_attributes_13_column_name" name="report[report_queries_attributes][13][column_name]" type="hidden" value="gender" disabled="">
        <input id="report_report_queries_attributes_13_table_name" name="report[report_queries_attributes][13][table_name]" type="hidden" value="Student" disabled="">
        <input id="report_report_queries_attributes_13_criteria" name="report[report_queries_attributes][13][criteria]" type="hidden" value="begins_with" disabled="">
        <input id="report_report_queries_attributes_13_column_type" name="report[report_queries_attributes][13][column_type]" type="hidden" value="string" disabled="">
        
          <div class="text">
            <label class="criteria">Begins with</label>
            <input id="report_report_queries_attributes_13_query" name="report[report_queries_attributes][13][query]" size="30" type="text" disabled="">
          </div>
        
      </div>
      
    

      

      <div class="gender fields" style="display: none; ">
        <label class="column">Gender</label>
        <input id="report_report_queries_attributes_14_column_name" name="report[report_queries_attributes][14][column_name]" type="hidden" value="gender" disabled="">
        <input id="report_report_queries_attributes_14_table_name" name="report[report_queries_attributes][14][table_name]" type="hidden" value="Student" disabled="">
        <input id="report_report_queries_attributes_14_criteria" name="report[report_queries_attributes][14][criteria]" type="hidden" value="equals" disabled="">
        <input id="report_report_queries_attributes_14_column_type" name="report[report_queries_attributes][14][column_type]" type="hidden" value="string" disabled="">
        
          <div class="text">
            <label class="criteria">Equals</label>
            <input id="report_report_queries_attributes_14_query" name="report[report_queries_attributes][14][query]" size="30" type="text" disabled="">
          </div>
        
      </div>
      
    

      

      <div class="blood_group fields" style="display: none; ">
        <label class="column">Blood Group</label>
        <input id="report_report_queries_attributes_15_column_name" name="report[report_queries_attributes][15][column_name]" type="hidden" value="blood_group" disabled="">
        <input id="report_report_queries_attributes_15_table_name" name="report[report_queries_attributes][15][table_name]" type="hidden" value="Student" disabled="">
        <input id="report_report_queries_attributes_15_criteria" name="report[report_queries_attributes][15][criteria]" type="hidden" value="like" disabled="">
        <input id="report_report_queries_attributes_15_column_type" name="report[report_queries_attributes][15][column_type]" type="hidden" value="string" disabled="">
        
          <div class="text">
            <label class="criteria">Like</label>
            <input id="report_report_queries_attributes_15_query" name="report[report_queries_attributes][15][query]" size="30" type="text" disabled="">
          </div>
        
      </div>
      
    

      

      <div class="blood_group fields" style="display: none; ">
        <label class="column">Blood Group</label>
        <input id="report_report_queries_attributes_16_column_name" name="report[report_queries_attributes][16][column_name]" type="hidden" value="blood_group" disabled="">
        <input id="report_report_queries_attributes_16_table_name" name="report[report_queries_attributes][16][table_name]" type="hidden" value="Student" disabled="">
        <input id="report_report_queries_attributes_16_criteria" name="report[report_queries_attributes][16][criteria]" type="hidden" value="begins_with" disabled="">
        <input id="report_report_queries_attributes_16_column_type" name="report[report_queries_attributes][16][column_type]" type="hidden" value="string" disabled="">
        
          <div class="text">
            <label class="criteria">Begins with</label>
            <input id="report_report_queries_attributes_16_query" name="report[report_queries_attributes][16][query]" size="30" type="text" disabled="">
          </div>
        
      </div>
      
    

      

      <div class="blood_group fields" style="display: none; ">
        <label class="column">Blood Group</label>
        <input id="report_report_queries_attributes_17_column_name" name="report[report_queries_attributes][17][column_name]" type="hidden" value="blood_group" disabled="">
        <input id="report_report_queries_attributes_17_table_name" name="report[report_queries_attributes][17][table_name]" type="hidden" value="Student" disabled="">
        <input id="report_report_queries_attributes_17_criteria" name="report[report_queries_attributes][17][criteria]" type="hidden" value="equals" disabled="">
        <input id="report_report_queries_attributes_17_column_type" name="report[report_queries_attributes][17][column_type]" type="hidden" value="string" disabled="">
        
          <div class="text">
            <label class="criteria">Equals</label>
            <input id="report_report_queries_attributes_17_query" name="report[report_queries_attributes][17][query]" size="30" type="text" disabled="">
          </div>
        
      </div>
      
    

      

      <div class="language fields" style="display: none; ">
        <label class="column">Language</label>
        <input id="report_report_queries_attributes_18_column_name" name="report[report_queries_attributes][18][column_name]" type="hidden" value="language" disabled="">
        <input id="report_report_queries_attributes_18_table_name" name="report[report_queries_attributes][18][table_name]" type="hidden" value="Student" disabled="">
        <input id="report_report_queries_attributes_18_criteria" name="report[report_queries_attributes][18][criteria]" type="hidden" value="like" disabled="">
        <input id="report_report_queries_attributes_18_column_type" name="report[report_queries_attributes][18][column_type]" type="hidden" value="string" disabled="">
        
          <div class="text">
            <label class="criteria">Like</label>
            <input id="report_report_queries_attributes_18_query" name="report[report_queries_attributes][18][query]" size="30" type="text" disabled="">
          </div>
        
      </div>
      
    

      

      <div class="language fields" style="display: none; ">
        <label class="column">Language</label>
        <input id="report_report_queries_attributes_19_column_name" name="report[report_queries_attributes][19][column_name]" type="hidden" value="language" disabled="">
        <input id="report_report_queries_attributes_19_table_name" name="report[report_queries_attributes][19][table_name]" type="hidden" value="Student" disabled="">
        <input id="report_report_queries_attributes_19_criteria" name="report[report_queries_attributes][19][criteria]" type="hidden" value="begins_with" disabled="">
        <input id="report_report_queries_attributes_19_column_type" name="report[report_queries_attributes][19][column_type]" type="hidden" value="string" disabled="">
        
          <div class="text">
            <label class="criteria">Begins with</label>
            <input id="report_report_queries_attributes_19_query" name="report[report_queries_attributes][19][query]" size="30" type="text" disabled="">
          </div>
        
      </div>
      
    

      

      <div class="language fields" style="display: none; ">
        <label class="column">Language</label>
        <input id="report_report_queries_attributes_20_column_name" name="report[report_queries_attributes][20][column_name]" type="hidden" value="language" disabled="">
        <input id="report_report_queries_attributes_20_table_name" name="report[report_queries_attributes][20][table_name]" type="hidden" value="Student" disabled="">
        <input id="report_report_queries_attributes_20_criteria" name="report[report_queries_attributes][20][criteria]" type="hidden" value="equals" disabled="">
        <input id="report_report_queries_attributes_20_column_type" name="report[report_queries_attributes][20][column_type]" type="hidden" value="string" disabled="">
        
          <div class="text">
            <label class="criteria">Equals</label>
            <input id="report_report_queries_attributes_20_query" name="report[report_queries_attributes][20][query]" size="30" type="text" disabled="">
          </div>
        
      </div>
      
    

      

      <div class="religion fields" style="display: none; ">
        <label class="column">Religion</label>
        <input id="report_report_queries_attributes_21_column_name" name="report[report_queries_attributes][21][column_name]" type="hidden" value="religion" disabled="">
        <input id="report_report_queries_attributes_21_table_name" name="report[report_queries_attributes][21][table_name]" type="hidden" value="Student" disabled="">
        <input id="report_report_queries_attributes_21_criteria" name="report[report_queries_attributes][21][criteria]" type="hidden" value="like" disabled="">
        <input id="report_report_queries_attributes_21_column_type" name="report[report_queries_attributes][21][column_type]" type="hidden" value="string" disabled="">
        
          <div class="text">
            <label class="criteria">Like</label>
            <input id="report_report_queries_attributes_21_query" name="report[report_queries_attributes][21][query]" size="30" type="text" disabled="">
          </div>
        
      </div>
      
    

      

      <div class="religion fields" style="display: none; ">
        <label class="column">Religion</label>
        <input id="report_report_queries_attributes_22_column_name" name="report[report_queries_attributes][22][column_name]" type="hidden" value="religion" disabled="">
        <input id="report_report_queries_attributes_22_table_name" name="report[report_queries_attributes][22][table_name]" type="hidden" value="Student" disabled="">
        <input id="report_report_queries_attributes_22_criteria" name="report[report_queries_attributes][22][criteria]" type="hidden" value="begins_with" disabled="">
        <input id="report_report_queries_attributes_22_column_type" name="report[report_queries_attributes][22][column_type]" type="hidden" value="string" disabled="">
        
          <div class="text">
            <label class="criteria">Begins with</label>
            <input id="report_report_queries_attributes_22_query" name="report[report_queries_attributes][22][query]" size="30" type="text" disabled="">
          </div>
        
      </div>
      
    

      

      <div class="religion fields" style="display: none; ">
        <label class="column">Religion</label>
        <input id="report_report_queries_attributes_23_column_name" name="report[report_queries_attributes][23][column_name]" type="hidden" value="religion" disabled="">
        <input id="report_report_queries_attributes_23_table_name" name="report[report_queries_attributes][23][table_name]" type="hidden" value="Student" disabled="">
        <input id="report_report_queries_attributes_23_criteria" name="report[report_queries_attributes][23][criteria]" type="hidden" value="equals" disabled="">
        <input id="report_report_queries_attributes_23_column_type" name="report[report_queries_attributes][23][column_type]" type="hidden" value="string" disabled="">
        
          <div class="text">
            <label class="criteria">Equals</label>
            <input id="report_report_queries_attributes_23_query" name="report[report_queries_attributes][23][query]" size="30" type="text" disabled="">
          </div>
        
      </div>
      
    

      

      <div class="city fields" style="display: none; ">
        <label class="column">City</label>
        <input id="report_report_queries_attributes_24_column_name" name="report[report_queries_attributes][24][column_name]" type="hidden" value="city" disabled="">
        <input id="report_report_queries_attributes_24_table_name" name="report[report_queries_attributes][24][table_name]" type="hidden" value="Student" disabled="">
        <input id="report_report_queries_attributes_24_criteria" name="report[report_queries_attributes][24][criteria]" type="hidden" value="like" disabled="">
        <input id="report_report_queries_attributes_24_column_type" name="report[report_queries_attributes][24][column_type]" type="hidden" value="string" disabled="">
        
          <div class="text">
            <label class="criteria">Like</label>
            <input id="report_report_queries_attributes_24_query" name="report[report_queries_attributes][24][query]" size="30" type="text" disabled="">
          </div>
        
      </div>
      
    

      

      <div class="city fields" style="display: none; ">
        <label class="column">City</label>
        <input id="report_report_queries_attributes_25_column_name" name="report[report_queries_attributes][25][column_name]" type="hidden" value="city" disabled="">
        <input id="report_report_queries_attributes_25_table_name" name="report[report_queries_attributes][25][table_name]" type="hidden" value="Student" disabled="">
        <input id="report_report_queries_attributes_25_criteria" name="report[report_queries_attributes][25][criteria]" type="hidden" value="begins_with" disabled="">
        <input id="report_report_queries_attributes_25_column_type" name="report[report_queries_attributes][25][column_type]" type="hidden" value="string" disabled="">
        
          <div class="text">
            <label class="criteria">Begins with</label>
            <input id="report_report_queries_attributes_25_query" name="report[report_queries_attributes][25][query]" size="30" type="text" disabled="">
          </div>
        
      </div>
      
    

      

      <div class="city fields" style="display: none; ">
        <label class="column">City</label>
        <input id="report_report_queries_attributes_26_column_name" name="report[report_queries_attributes][26][column_name]" type="hidden" value="city" disabled="">
        <input id="report_report_queries_attributes_26_table_name" name="report[report_queries_attributes][26][table_name]" type="hidden" value="Student" disabled="">
        <input id="report_report_queries_attributes_26_criteria" name="report[report_queries_attributes][26][criteria]" type="hidden" value="equals" disabled="">
        <input id="report_report_queries_attributes_26_column_type" name="report[report_queries_attributes][26][column_type]" type="hidden" value="string" disabled="">
        
          <div class="text">
            <label class="criteria">Equals</label>
            <input id="report_report_queries_attributes_26_query" name="report[report_queries_attributes][26][query]" size="30" type="text" disabled="">
          </div>
        
      </div>
      
    

      

      <div class="state fields" style="display: none; ">
        <label class="column">State</label>
        <input id="report_report_queries_attributes_27_column_name" name="report[report_queries_attributes][27][column_name]" type="hidden" value="state" disabled="">
        <input id="report_report_queries_attributes_27_table_name" name="report[report_queries_attributes][27][table_name]" type="hidden" value="Student" disabled="">
        <input id="report_report_queries_attributes_27_criteria" name="report[report_queries_attributes][27][criteria]" type="hidden" value="like" disabled="">
        <input id="report_report_queries_attributes_27_column_type" name="report[report_queries_attributes][27][column_type]" type="hidden" value="string" disabled="">
        
          <div class="text">
            <label class="criteria">Like</label>
            <input id="report_report_queries_attributes_27_query" name="report[report_queries_attributes][27][query]" size="30" type="text" disabled="">
          </div>
        
      </div>
      
    

      

      <div class="state fields" style="display: none; ">
        <label class="column">State</label>
        <input id="report_report_queries_attributes_28_column_name" name="report[report_queries_attributes][28][column_name]" type="hidden" value="state" disabled="">
        <input id="report_report_queries_attributes_28_table_name" name="report[report_queries_attributes][28][table_name]" type="hidden" value="Student" disabled="">
        <input id="report_report_queries_attributes_28_criteria" name="report[report_queries_attributes][28][criteria]" type="hidden" value="begins_with" disabled="">
        <input id="report_report_queries_attributes_28_column_type" name="report[report_queries_attributes][28][column_type]" type="hidden" value="string" disabled="">
        
          <div class="text">
            <label class="criteria">Begins with</label>
            <input id="report_report_queries_attributes_28_query" name="report[report_queries_attributes][28][query]" size="30" type="text" disabled="">
          </div>
        
      </div>
      
    

      

      <div class="state fields" style="display: none; ">
        <label class="column">State</label>
        <input id="report_report_queries_attributes_29_column_name" name="report[report_queries_attributes][29][column_name]" type="hidden" value="state" disabled="">
        <input id="report_report_queries_attributes_29_table_name" name="report[report_queries_attributes][29][table_name]" type="hidden" value="Student" disabled="">
        <input id="report_report_queries_attributes_29_criteria" name="report[report_queries_attributes][29][criteria]" type="hidden" value="equals" disabled="">
        <input id="report_report_queries_attributes_29_column_type" name="report[report_queries_attributes][29][column_type]" type="hidden" value="string" disabled="">
        
          <div class="text">
            <label class="criteria">Equals</label>
            <input id="report_report_queries_attributes_29_query" name="report[report_queries_attributes][29][query]" size="30" type="text" disabled="">
          </div>
        
      </div>
      
    

      

      <div class="country fields" style="display: none; ">
        <label class="column">Country</label>
        <input id="report_report_queries_attributes_30_column_name" name="report[report_queries_attributes][30][column_name]" type="hidden" value="country" disabled="">
        <input id="report_report_queries_attributes_30_table_name" name="report[report_queries_attributes][30][table_name]" type="hidden" value="Student" disabled="">
        <input id="report_report_queries_attributes_30_criteria" name="report[report_queries_attributes][30][criteria]" type="hidden" value="in" disabled="">
        <input id="report_report_queries_attributes_30_column_type" name="report[report_queries_attributes][30][column_type]" type="hidden" value="association" disabled="">
        
          <br>
          <label class="criteria">In</label>
          <br>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="1" disabled="">
              <label class="criteria">Afghanistan</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="2" disabled="">
              <label class="criteria">Albania</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="3" disabled="">
              <label class="criteria">Algeria</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="4" disabled="">
              <label class="criteria">Andorra</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="5" disabled="">
              <label class="criteria">Angola</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="6" disabled="">
              <label class="criteria">Antigua &amp; Deps</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="7" disabled="">
              <label class="criteria">Argentina</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="8" disabled="">
              <label class="criteria">Armenia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="9" disabled="">
              <label class="criteria">Australia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="10" disabled="">
              <label class="criteria">Austria</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="11" disabled="">
              <label class="criteria">Azerbaijan</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="12" disabled="">
              <label class="criteria">Bahamas</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="13" disabled="">
              <label class="criteria">Bahrain</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="14" disabled="">
              <label class="criteria">Bangladesh</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="15" disabled="">
              <label class="criteria">Barbados</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="16" disabled="">
              <label class="criteria">Belarus</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="17" disabled="">
              <label class="criteria">Belgium</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="18" disabled="">
              <label class="criteria">Belize</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="19" disabled="">
              <label class="criteria">Benin</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="20" disabled="">
              <label class="criteria">Bhutan</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="21" disabled="">
              <label class="criteria">Bolivia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="22" disabled="">
              <label class="criteria">Bosnia Herzegovina</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="23" disabled="">
              <label class="criteria">Botswana</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="24" disabled="">
              <label class="criteria">Brazil</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="25" disabled="">
              <label class="criteria">Brunei</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="26" disabled="">
              <label class="criteria">Bulgaria</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="27" disabled="">
              <label class="criteria">Burkina</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="28" disabled="">
              <label class="criteria">Burundi</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="29" disabled="">
              <label class="criteria">Cambodia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="30" disabled="">
              <label class="criteria">Cameroon</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="31" disabled="">
              <label class="criteria">Canada</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="32" disabled="">
              <label class="criteria">Cape Verde</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="33" disabled="">
              <label class="criteria">Central African Rep</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="34" disabled="">
              <label class="criteria">Chad</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="35" disabled="">
              <label class="criteria">Chile</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="36" disabled="">
              <label class="criteria">China</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="37" disabled="">
              <label class="criteria">Colombia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="38" disabled="">
              <label class="criteria">Comoros</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="39" disabled="">
              <label class="criteria">Congo</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="40" disabled="">
              <label class="criteria">Congo {Democratic Rep}</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="41" disabled="">
              <label class="criteria">Costa Rica</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="42" disabled="">
              <label class="criteria">Croatia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="43" disabled="">
              <label class="criteria">Cuba</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="44" disabled="">
              <label class="criteria">Cyprus</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="45" disabled="">
              <label class="criteria">Czech Republic</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="46" disabled="">
              <label class="criteria">Denmark</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="47" disabled="">
              <label class="criteria">Djibouti</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="48" disabled="">
              <label class="criteria">Dominica</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="49" disabled="">
              <label class="criteria">Dominican Republic</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="50" disabled="">
              <label class="criteria">East Timor</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="51" disabled="">
              <label class="criteria">Ecuador</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="52" disabled="">
              <label class="criteria">Egypt</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="53" disabled="">
              <label class="criteria">El Salvador</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="54" disabled="">
              <label class="criteria">Equatorial Guinea</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="55" disabled="">
              <label class="criteria">Eritrea</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="56" disabled="">
              <label class="criteria">Estonia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="57" disabled="">
              <label class="criteria">Ethiopia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="58" disabled="">
              <label class="criteria">Fiji</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="59" disabled="">
              <label class="criteria">Finland</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="60" disabled="">
              <label class="criteria">France</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="61" disabled="">
              <label class="criteria">Gabon</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="62" disabled="">
              <label class="criteria">Gambia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="63" disabled="">
              <label class="criteria">Georgia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="64" disabled="">
              <label class="criteria">Germany</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="65" disabled="">
              <label class="criteria">Ghana</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="66" disabled="">
              <label class="criteria">Greece</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="67" disabled="">
              <label class="criteria">Grenada</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="68" disabled="">
              <label class="criteria">Guatemala</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="69" disabled="">
              <label class="criteria">Guinea</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="70" disabled="">
              <label class="criteria">Guinea-Bissau</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="71" disabled="">
              <label class="criteria">Guyana</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="72" disabled="">
              <label class="criteria">Haiti</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="73" disabled="">
              <label class="criteria">Honduras</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="74" disabled="">
              <label class="criteria">Hungary</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="75" disabled="">
              <label class="criteria">Iceland</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="76" disabled="">
              <label class="criteria">India</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="77" disabled="">
              <label class="criteria">Indonesia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="78" disabled="">
              <label class="criteria">Iran</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="79" disabled="">
              <label class="criteria">Iraq</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="80" disabled="">
              <label class="criteria">Ireland {Republic}</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="81" disabled="">
              <label class="criteria">Israel</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="82" disabled="">
              <label class="criteria">Italy</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="83" disabled="">
              <label class="criteria">Ivory Coast</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="84" disabled="">
              <label class="criteria">Jamaica</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="85" disabled="">
              <label class="criteria">Japan</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="86" disabled="">
              <label class="criteria">Jordan</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="87" disabled="">
              <label class="criteria">Kazakhstan</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="88" disabled="">
              <label class="criteria">Kenya</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="89" disabled="">
              <label class="criteria">Kiribati</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="90" disabled="">
              <label class="criteria">Korea North</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="91" disabled="">
              <label class="criteria">Korea South</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="92" disabled="">
              <label class="criteria">Kosovo</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="93" disabled="">
              <label class="criteria">Kuwait</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="94" disabled="">
              <label class="criteria">Kyrgyzstan</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="95" disabled="">
              <label class="criteria">Laos</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="96" disabled="">
              <label class="criteria">Latvia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="97" disabled="">
              <label class="criteria">Lebanon</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="98" disabled="">
              <label class="criteria">Lesotho</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="99" disabled="">
              <label class="criteria">Liberia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="100" disabled="">
              <label class="criteria">Libya</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="101" disabled="">
              <label class="criteria">Liechtenstein</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="102" disabled="">
              <label class="criteria">Lithuania</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="103" disabled="">
              <label class="criteria">Luxembourg</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="104" disabled="">
              <label class="criteria">Macedonia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="105" disabled="">
              <label class="criteria">Madagascar</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="106" disabled="">
              <label class="criteria">Malawi</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="107" disabled="">
              <label class="criteria">Malaysia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="108" disabled="">
              <label class="criteria">Maldives</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="109" disabled="">
              <label class="criteria">Mali</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="110" disabled="">
              <label class="criteria">Malta</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="111" disabled="">
              <label class="criteria">Montenegro</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="112" disabled="">
              <label class="criteria">Marshall Islands</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="113" disabled="">
              <label class="criteria">Mauritania</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="114" disabled="">
              <label class="criteria">Mauritius</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="115" disabled="">
              <label class="criteria">Mexico</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="116" disabled="">
              <label class="criteria">Micronesia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="117" disabled="">
              <label class="criteria">Moldova</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="118" disabled="">
              <label class="criteria">Monaco</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="119" disabled="">
              <label class="criteria">Mongolia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="120" disabled="">
              <label class="criteria">Morocco</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="121" disabled="">
              <label class="criteria">Mozambique</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="122" disabled="">
              <label class="criteria">Myanmar, {Burma}</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="123" disabled="">
              <label class="criteria">Namibia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="124" disabled="">
              <label class="criteria">Nauru</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="125" disabled="">
              <label class="criteria">Nepal</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="126" disabled="">
              <label class="criteria">Netherlands</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="127" disabled="">
              <label class="criteria">New Zealand</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="128" disabled="">
              <label class="criteria">Nicaragua</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="129" disabled="">
              <label class="criteria">Niger</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="130" disabled="">
              <label class="criteria">Nigeria</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="131" disabled="">
              <label class="criteria">Norway</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="132" disabled="">
              <label class="criteria">Oman</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="133" disabled="">
              <label class="criteria">Pakistan</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="134" disabled="">
              <label class="criteria">Palau</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="135" disabled="">
              <label class="criteria">Panama</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="136" disabled="">
              <label class="criteria">Papua New Guinea</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="137" disabled="">
              <label class="criteria">Paraguay</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="138" disabled="">
              <label class="criteria">Peru</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="139" disabled="">
              <label class="criteria">Philippines</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="140" disabled="">
              <label class="criteria">Poland</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="141" disabled="">
              <label class="criteria">Portugal</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="142" disabled="">
              <label class="criteria">Qatar</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="143" disabled="">
              <label class="criteria">Romania</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="144" disabled="">
              <label class="criteria">Russian Federation</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="145" disabled="">
              <label class="criteria">Rwanda</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="146" disabled="">
              <label class="criteria">St Kitts &amp; Nevis</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="147" disabled="">
              <label class="criteria">St Lucia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="148" disabled="">
              <label class="criteria">Saint Vincent &amp; the Grenadines</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="149" disabled="">
              <label class="criteria">Samoa</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="150" disabled="">
              <label class="criteria">San Marino</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="151" disabled="">
              <label class="criteria">Sao Tome &amp; Principe</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="152" disabled="">
              <label class="criteria">Saudi Arabia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="153" disabled="">
              <label class="criteria">Senegal</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="154" disabled="">
              <label class="criteria">Serbia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="155" disabled="">
              <label class="criteria">Seychelles</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="156" disabled="">
              <label class="criteria">Sierra Leone</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="157" disabled="">
              <label class="criteria">Singapore</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="158" disabled="">
              <label class="criteria">Slovakia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="159" disabled="">
              <label class="criteria">Slovenia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="160" disabled="">
              <label class="criteria">Solomon Islands</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="161" disabled="">
              <label class="criteria">Somalia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="162" disabled="">
              <label class="criteria">South Africa</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="163" disabled="">
              <label class="criteria">Spain</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="164" disabled="">
              <label class="criteria">Sri Lanka</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="165" disabled="">
              <label class="criteria">Sudan</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="166" disabled="">
              <label class="criteria">Suriname</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="167" disabled="">
              <label class="criteria">Swaziland</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="168" disabled="">
              <label class="criteria">Sweden</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="169" disabled="">
              <label class="criteria">Switzerland</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="170" disabled="">
              <label class="criteria">Syria</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="171" disabled="">
              <label class="criteria">Taiwan</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="172" disabled="">
              <label class="criteria">Tajikistan</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="173" disabled="">
              <label class="criteria">Tanzania</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="174" disabled="">
              <label class="criteria">Thailand</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="175" disabled="">
              <label class="criteria">Togo</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="176" disabled="">
              <label class="criteria">Tonga</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="177" disabled="">
              <label class="criteria">Trinidad &amp; Tobago</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="178" disabled="">
              <label class="criteria">Tunisia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="179" disabled="">
              <label class="criteria">Turkey</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="180" disabled="">
              <label class="criteria">Turkmenistan</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="181" disabled="">
              <label class="criteria">Tuvalu</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="182" disabled="">
              <label class="criteria">Uganda</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="183" disabled="">
              <label class="criteria">Ukraine</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="184" disabled="">
              <label class="criteria">United Arab Emirates</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="185" disabled="">
              <label class="criteria">United Kingdom</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="186" disabled="">
              <label class="criteria">United States</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="187" disabled="">
              <label class="criteria">Uruguay</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="188" disabled="">
              <label class="criteria">Uzbekistan</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="189" disabled="">
              <label class="criteria">Vanuatu</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="190" disabled="">
              <label class="criteria">Vatican City</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="191" disabled="">
              <label class="criteria">Venezuea</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="192" disabled="">
              <label class="criteria">Vietnam</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="193" disabled="">
              <label class="criteria">Yemen</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="194" disabled="">
              <label class="criteria">Zambia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_30_query_" name="report[report_queries_attributes][30][query][]" type="checkbox" value="195" disabled="">
              <label class="criteria">Zimbabwe</label>
            </div>
          
        
      </div>
      
    

      

      <div class="nationality fields" style="display: none; ">
        <label class="column">Nationality</label>
        <input id="report_report_queries_attributes_31_column_name" name="report[report_queries_attributes][31][column_name]" type="hidden" value="nationality" disabled="">
        <input id="report_report_queries_attributes_31_table_name" name="report[report_queries_attributes][31][table_name]" type="hidden" value="Student" disabled="">
        <input id="report_report_queries_attributes_31_criteria" name="report[report_queries_attributes][31][criteria]" type="hidden" value="in" disabled="">
        <input id="report_report_queries_attributes_31_column_type" name="report[report_queries_attributes][31][column_type]" type="hidden" value="association" disabled="">
        
          <br>
          <label class="criteria">In</label>
          <br>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="1" disabled="">
              <label class="criteria">Afghanistan</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="2" disabled="">
              <label class="criteria">Albania</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="3" disabled="">
              <label class="criteria">Algeria</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="4" disabled="">
              <label class="criteria">Andorra</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="5" disabled="">
              <label class="criteria">Angola</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="6" disabled="">
              <label class="criteria">Antigua &amp; Deps</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="7" disabled="">
              <label class="criteria">Argentina</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="8" disabled="">
              <label class="criteria">Armenia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="9" disabled="">
              <label class="criteria">Australia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="10" disabled="">
              <label class="criteria">Austria</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="11" disabled="">
              <label class="criteria">Azerbaijan</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="12" disabled="">
              <label class="criteria">Bahamas</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="13" disabled="">
              <label class="criteria">Bahrain</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="14" disabled="">
              <label class="criteria">Bangladesh</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="15" disabled="">
              <label class="criteria">Barbados</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="16" disabled="">
              <label class="criteria">Belarus</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="17" disabled="">
              <label class="criteria">Belgium</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="18" disabled="">
              <label class="criteria">Belize</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="19" disabled="">
              <label class="criteria">Benin</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="20" disabled="">
              <label class="criteria">Bhutan</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="21" disabled="">
              <label class="criteria">Bolivia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="22" disabled="">
              <label class="criteria">Bosnia Herzegovina</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="23" disabled="">
              <label class="criteria">Botswana</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="24" disabled="">
              <label class="criteria">Brazil</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="25" disabled="">
              <label class="criteria">Brunei</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="26" disabled="">
              <label class="criteria">Bulgaria</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="27" disabled="">
              <label class="criteria">Burkina</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="28" disabled="">
              <label class="criteria">Burundi</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="29" disabled="">
              <label class="criteria">Cambodia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="30" disabled="">
              <label class="criteria">Cameroon</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="31" disabled="">
              <label class="criteria">Canada</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="32" disabled="">
              <label class="criteria">Cape Verde</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="33" disabled="">
              <label class="criteria">Central African Rep</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="34" disabled="">
              <label class="criteria">Chad</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="35" disabled="">
              <label class="criteria">Chile</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="36" disabled="">
              <label class="criteria">China</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="37" disabled="">
              <label class="criteria">Colombia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="38" disabled="">
              <label class="criteria">Comoros</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="39" disabled="">
              <label class="criteria">Congo</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="40" disabled="">
              <label class="criteria">Congo {Democratic Rep}</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="41" disabled="">
              <label class="criteria">Costa Rica</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="42" disabled="">
              <label class="criteria">Croatia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="43" disabled="">
              <label class="criteria">Cuba</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="44" disabled="">
              <label class="criteria">Cyprus</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="45" disabled="">
              <label class="criteria">Czech Republic</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="46" disabled="">
              <label class="criteria">Denmark</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="47" disabled="">
              <label class="criteria">Djibouti</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="48" disabled="">
              <label class="criteria">Dominica</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="49" disabled="">
              <label class="criteria">Dominican Republic</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="50" disabled="">
              <label class="criteria">East Timor</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="51" disabled="">
              <label class="criteria">Ecuador</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="52" disabled="">
              <label class="criteria">Egypt</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="53" disabled="">
              <label class="criteria">El Salvador</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="54" disabled="">
              <label class="criteria">Equatorial Guinea</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="55" disabled="">
              <label class="criteria">Eritrea</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="56" disabled="">
              <label class="criteria">Estonia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="57" disabled="">
              <label class="criteria">Ethiopia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="58" disabled="">
              <label class="criteria">Fiji</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="59" disabled="">
              <label class="criteria">Finland</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="60" disabled="">
              <label class="criteria">France</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="61" disabled="">
              <label class="criteria">Gabon</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="62" disabled="">
              <label class="criteria">Gambia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="63" disabled="">
              <label class="criteria">Georgia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="64" disabled="">
              <label class="criteria">Germany</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="65" disabled="">
              <label class="criteria">Ghana</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="66" disabled="">
              <label class="criteria">Greece</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="67" disabled="">
              <label class="criteria">Grenada</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="68" disabled="">
              <label class="criteria">Guatemala</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="69" disabled="">
              <label class="criteria">Guinea</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="70" disabled="">
              <label class="criteria">Guinea-Bissau</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="71" disabled="">
              <label class="criteria">Guyana</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="72" disabled="">
              <label class="criteria">Haiti</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="73" disabled="">
              <label class="criteria">Honduras</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="74" disabled="">
              <label class="criteria">Hungary</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="75" disabled="">
              <label class="criteria">Iceland</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="76" disabled="">
              <label class="criteria">India</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="77" disabled="">
              <label class="criteria">Indonesia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="78" disabled="">
              <label class="criteria">Iran</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="79" disabled="">
              <label class="criteria">Iraq</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="80" disabled="">
              <label class="criteria">Ireland {Republic}</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="81" disabled="">
              <label class="criteria">Israel</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="82" disabled="">
              <label class="criteria">Italy</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="83" disabled="">
              <label class="criteria">Ivory Coast</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="84" disabled="">
              <label class="criteria">Jamaica</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="85" disabled="">
              <label class="criteria">Japan</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="86" disabled="">
              <label class="criteria">Jordan</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="87" disabled="">
              <label class="criteria">Kazakhstan</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="88" disabled="">
              <label class="criteria">Kenya</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="89" disabled="">
              <label class="criteria">Kiribati</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="90" disabled="">
              <label class="criteria">Korea North</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="91" disabled="">
              <label class="criteria">Korea South</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="92" disabled="">
              <label class="criteria">Kosovo</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="93" disabled="">
              <label class="criteria">Kuwait</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="94" disabled="">
              <label class="criteria">Kyrgyzstan</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="95" disabled="">
              <label class="criteria">Laos</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="96" disabled="">
              <label class="criteria">Latvia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="97" disabled="">
              <label class="criteria">Lebanon</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="98" disabled="">
              <label class="criteria">Lesotho</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="99" disabled="">
              <label class="criteria">Liberia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="100" disabled="">
              <label class="criteria">Libya</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="101" disabled="">
              <label class="criteria">Liechtenstein</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="102" disabled="">
              <label class="criteria">Lithuania</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="103" disabled="">
              <label class="criteria">Luxembourg</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="104" disabled="">
              <label class="criteria">Macedonia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="105" disabled="">
              <label class="criteria">Madagascar</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="106" disabled="">
              <label class="criteria">Malawi</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="107" disabled="">
              <label class="criteria">Malaysia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="108" disabled="">
              <label class="criteria">Maldives</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="109" disabled="">
              <label class="criteria">Mali</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="110" disabled="">
              <label class="criteria">Malta</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="111" disabled="">
              <label class="criteria">Montenegro</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="112" disabled="">
              <label class="criteria">Marshall Islands</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="113" disabled="">
              <label class="criteria">Mauritania</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="114" disabled="">
              <label class="criteria">Mauritius</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="115" disabled="">
              <label class="criteria">Mexico</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="116" disabled="">
              <label class="criteria">Micronesia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="117" disabled="">
              <label class="criteria">Moldova</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="118" disabled="">
              <label class="criteria">Monaco</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="119" disabled="">
              <label class="criteria">Mongolia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="120" disabled="">
              <label class="criteria">Morocco</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="121" disabled="">
              <label class="criteria">Mozambique</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="122" disabled="">
              <label class="criteria">Myanmar, {Burma}</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="123" disabled="">
              <label class="criteria">Namibia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="124" disabled="">
              <label class="criteria">Nauru</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="125" disabled="">
              <label class="criteria">Nepal</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="126" disabled="">
              <label class="criteria">Netherlands</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="127" disabled="">
              <label class="criteria">New Zealand</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="128" disabled="">
              <label class="criteria">Nicaragua</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="129" disabled="">
              <label class="criteria">Niger</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="130" disabled="">
              <label class="criteria">Nigeria</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="131" disabled="">
              <label class="criteria">Norway</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="132" disabled="">
              <label class="criteria">Oman</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="133" disabled="">
              <label class="criteria">Pakistan</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="134" disabled="">
              <label class="criteria">Palau</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="135" disabled="">
              <label class="criteria">Panama</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="136" disabled="">
              <label class="criteria">Papua New Guinea</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="137" disabled="">
              <label class="criteria">Paraguay</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="138" disabled="">
              <label class="criteria">Peru</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="139" disabled="">
              <label class="criteria">Philippines</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="140" disabled="">
              <label class="criteria">Poland</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="141" disabled="">
              <label class="criteria">Portugal</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="142" disabled="">
              <label class="criteria">Qatar</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="143" disabled="">
              <label class="criteria">Romania</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="144" disabled="">
              <label class="criteria">Russian Federation</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="145" disabled="">
              <label class="criteria">Rwanda</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="146" disabled="">
              <label class="criteria">St Kitts &amp; Nevis</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="147" disabled="">
              <label class="criteria">St Lucia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="148" disabled="">
              <label class="criteria">Saint Vincent &amp; the Grenadines</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="149" disabled="">
              <label class="criteria">Samoa</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="150" disabled="">
              <label class="criteria">San Marino</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="151" disabled="">
              <label class="criteria">Sao Tome &amp; Principe</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="152" disabled="">
              <label class="criteria">Saudi Arabia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="153" disabled="">
              <label class="criteria">Senegal</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="154" disabled="">
              <label class="criteria">Serbia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="155" disabled="">
              <label class="criteria">Seychelles</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="156" disabled="">
              <label class="criteria">Sierra Leone</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="157" disabled="">
              <label class="criteria">Singapore</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="158" disabled="">
              <label class="criteria">Slovakia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="159" disabled="">
              <label class="criteria">Slovenia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="160" disabled="">
              <label class="criteria">Solomon Islands</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="161" disabled="">
              <label class="criteria">Somalia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="162" disabled="">
              <label class="criteria">South Africa</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="163" disabled="">
              <label class="criteria">Spain</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="164" disabled="">
              <label class="criteria">Sri Lanka</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="165" disabled="">
              <label class="criteria">Sudan</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="166" disabled="">
              <label class="criteria">Suriname</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="167" disabled="">
              <label class="criteria">Swaziland</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="168" disabled="">
              <label class="criteria">Sweden</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="169" disabled="">
              <label class="criteria">Switzerland</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="170" disabled="">
              <label class="criteria">Syria</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="171" disabled="">
              <label class="criteria">Taiwan</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="172" disabled="">
              <label class="criteria">Tajikistan</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="173" disabled="">
              <label class="criteria">Tanzania</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="174" disabled="">
              <label class="criteria">Thailand</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="175" disabled="">
              <label class="criteria">Togo</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="176" disabled="">
              <label class="criteria">Tonga</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="177" disabled="">
              <label class="criteria">Trinidad &amp; Tobago</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="178" disabled="">
              <label class="criteria">Tunisia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="179" disabled="">
              <label class="criteria">Turkey</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="180" disabled="">
              <label class="criteria">Turkmenistan</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="181" disabled="">
              <label class="criteria">Tuvalu</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="182" disabled="">
              <label class="criteria">Uganda</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="183" disabled="">
              <label class="criteria">Ukraine</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="184" disabled="">
              <label class="criteria">United Arab Emirates</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="185" disabled="">
              <label class="criteria">United Kingdom</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="186" disabled="">
              <label class="criteria">United States</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="187" disabled="">
              <label class="criteria">Uruguay</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="188" disabled="">
              <label class="criteria">Uzbekistan</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="189" disabled="">
              <label class="criteria">Vanuatu</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="190" disabled="">
              <label class="criteria">Vatican City</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="191" disabled="">
              <label class="criteria">Venezuea</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="192" disabled="">
              <label class="criteria">Vietnam</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="193" disabled="">
              <label class="criteria">Yemen</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="194" disabled="">
              <label class="criteria">Zambia</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_31_query_" name="report[report_queries_attributes][31][query][]" type="checkbox" value="195" disabled="">
              <label class="criteria">Zimbabwe</label>
            </div>
          
        
      </div>
      
    

      

      <div class="student_category fields" style="display: none; ">
        <label class="column">Student Category</label>
        <input id="report_report_queries_attributes_32_column_name" name="report[report_queries_attributes][32][column_name]" type="hidden" value="student_category" disabled="">
        <input id="report_report_queries_attributes_32_table_name" name="report[report_queries_attributes][32][table_name]" type="hidden" value="Student" disabled="">
        <input id="report_report_queries_attributes_32_criteria" name="report[report_queries_attributes][32][criteria]" type="hidden" value="in" disabled="">
        <input id="report_report_queries_attributes_32_column_type" name="report[report_queries_attributes][32][column_type]" type="hidden" value="association" disabled="">
        
          <br>
          <label class="criteria">In</label>
          <br>
          
            <div class="check">
              <input id="report_report_queries_attributes_32_query_" name="report[report_queries_attributes][32][query][]" type="checkbox" value="11" disabled="">
              <label class="criteria">GENERAL</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_32_query_" name="report[report_queries_attributes][32][query][]" type="checkbox" value="12" disabled="">
              <label class="criteria">OBC</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_32_query_" name="report[report_queries_attributes][32][query][]" type="checkbox" value="13" disabled="">
              <label class="criteria">OEC</label>
            </div>
          
        
      </div>
      
    

      

      <div class="batch fields" style="display: none; ">
        <label class="column">Batch</label>
        <input id="report_report_queries_attributes_33_column_name" name="report[report_queries_attributes][33][column_name]" type="hidden" value="batch" disabled="">
        <input id="report_report_queries_attributes_33_table_name" name="report[report_queries_attributes][33][table_name]" type="hidden" value="Student" disabled="">
        <input id="report_report_queries_attributes_33_criteria" name="report[report_queries_attributes][33][criteria]" type="hidden" value="in" disabled="">
        <input id="report_report_queries_attributes_33_column_type" name="report[report_queries_attributes][33][column_type]" type="hidden" value="association" disabled="">
        
          <br>
          <label class="criteria">In</label>
          <br>
          
            <div class="check">
              <input id="report_report_queries_attributes_33_query_" name="report[report_queries_attributes][33][query][]" type="checkbox" value="43" disabled="">
              <label class="criteria">1 - 1st Semester</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_33_query_" name="report[report_queries_attributes][33][query][]" type="checkbox" value="44" disabled="">
              <label class="criteria">2 - 2nd Semester</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_33_query_" name="report[report_queries_attributes][33][query][]" type="checkbox" value="46" disabled="">
              <label class="criteria">2 - 2nd Semester</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_33_query_" name="report[report_queries_attributes][33][query][]" type="checkbox" value="45" disabled="">
              <label class="criteria">3 - 1st Semester</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_33_query_" name="report[report_queries_attributes][33][query][]" type="checkbox" value="62" disabled="">
              <label class="criteria">3 - 2012-2013</label>
            </div>
          
        
      </div>
      
    

      

      <div class="course fields" style="display: none; ">
        <label class="column">Course</label>
        <input id="report_report_queries_attributes_34_column_name" name="report[report_queries_attributes][34][column_name]" type="hidden" value="course" disabled="">
        <input id="report_report_queries_attributes_34_table_name" name="report[report_queries_attributes][34][table_name]" type="hidden" value="Student" disabled="">
        <input id="report_report_queries_attributes_34_criteria" name="report[report_queries_attributes][34][criteria]" type="hidden" value="in" disabled="">
        <input id="report_report_queries_attributes_34_column_type" name="report[report_queries_attributes][34][column_type]" type="hidden" value="association" disabled="">
        
          <br>
          <label class="criteria">In</label>
          <br>
          
            <div class="check">
              <input id="report_report_queries_attributes_34_query_" name="report[report_queries_attributes][34][query][]" type="checkbox" value="25" disabled="">
              <label class="criteria">MBA</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_34_query_" name="report[report_queries_attributes][34][query][]" type="checkbox" value="26" disabled="">
              <label class="criteria">MBA</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_34_query_" name="report[report_queries_attributes][34][query][]" type="checkbox" value="27" disabled="">
              <label class="criteria">MCA</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_34_query_" name="report[report_queries_attributes][34][query][]" type="checkbox" value="28" disabled="">
              <label class="criteria">MCA</label>
            </div>
          
            <div class="check">
              <input id="report_report_queries_attributes_34_query_" name="report[report_queries_attributes][34][query][]" type="checkbox" value="41" disabled="">
              <label class="criteria">Standard 3</label>
            </div>
          
        
      </div>
      
    

      

      <div class="admission_date fields" style="display: none; ">
        <label class="column">Admission Date</label>
        <input id="report_report_queries_attributes_35_column_name" name="report[report_queries_attributes][35][column_name]" type="hidden" value="admission_date" disabled="">
        <input id="report_report_queries_attributes_35_table_name" name="report[report_queries_attributes][35][table_name]" type="hidden" value="Student" disabled="">
        <input id="report_report_queries_attributes_35_criteria" name="report[report_queries_attributes][35][criteria]" type="hidden" value="gte" disabled="">
        <input id="report_report_queries_attributes_35_column_type" name="report[report_queries_attributes][35][column_type]" type="hidden" value="date" disabled="">
        
          <div class="date">
            <label class="criteria">Greater than</label>
            <select id="report_report_queries_attributes_35_date_query_3i" name="report[report_queries_attributes][35][date_query(3i)]" disabled="">
<option value=""></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
<select id="report_report_queries_attributes_35_date_query_2i" name="report[report_queries_attributes][35][date_query(2i)]" disabled="">
<option value=""></option>
<option value="1">Jan</option>
<option value="2">Feb</option>
<option value="3">Mar</option>
<option value="4">Apr</option>
<option value="5">May</option>
<option value="6">Jun</option>
<option value="7">Jul</option>
<option value="8">Aug</option>
<option value="9">Sep</option>
<option value="10">Oct</option>
<option value="11">Nov</option>
<option value="12">Dec</option>
</select>
<select id="report_report_queries_attributes_35_date_query_1i" name="report[report_queries_attributes][35][date_query(1i)]" disabled="">
<option value=""></option>
<option value="1952">1952</option>
<option value="1953">1953</option>
<option value="1954">1954</option>
<option value="1955">1955</option>
<option value="1956">1956</option>
<option value="1957">1957</option>
<option value="1958">1958</option>
<option value="1959">1959</option>
<option value="1960">1960</option>
<option value="1961">1961</option>
<option value="1962">1962</option>
<option value="1963">1963</option>
<option value="1964">1964</option>
<option value="1965">1965</option>
<option value="1966">1966</option>
<option value="1967">1967</option>
<option value="1968">1968</option>
<option value="1969">1969</option>
<option value="1970">1970</option>
<option value="1971">1971</option>
<option value="1972">1972</option>
<option value="1973">1973</option>
<option value="1974">1974</option>
<option value="1975">1975</option>
<option value="1976">1976</option>
<option value="1977">1977</option>
<option value="1978">1978</option>
<option value="1979">1979</option>
<option value="1980">1980</option>
<option value="1981">1981</option>
<option value="1982">1982</option>
<option value="1983">1983</option>
<option value="1984">1984</option>
<option value="1985">1985</option>
<option value="1986">1986</option>
<option value="1987">1987</option>
<option value="1988">1988</option>
<option value="1989">1989</option>
<option value="1990">1990</option>
<option value="1991">1991</option>
<option value="1992">1992</option>
<option value="1993">1993</option>
<option value="1994">1994</option>
<option value="1995">1995</option>
<option value="1996">1996</option>
<option value="1997">1997</option>
<option value="1998">1998</option>
<option value="1999">1999</option>
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
</select>

          </div>

        
      </div>
      
    

      

      <div class="admission_date fields" style="display: none; ">
        <label class="column">Admission Date</label>
        <input id="report_report_queries_attributes_36_column_name" name="report[report_queries_attributes][36][column_name]" type="hidden" value="admission_date" disabled="">
        <input id="report_report_queries_attributes_36_table_name" name="report[report_queries_attributes][36][table_name]" type="hidden" value="Student" disabled="">
        <input id="report_report_queries_attributes_36_criteria" name="report[report_queries_attributes][36][criteria]" type="hidden" value="lte" disabled="">
        <input id="report_report_queries_attributes_36_column_type" name="report[report_queries_attributes][36][column_type]" type="hidden" value="date" disabled="">
        
          <div class="date">
            <label class="criteria">Less than</label>
            <select id="report_report_queries_attributes_36_date_query_3i" name="report[report_queries_attributes][36][date_query(3i)]" disabled="">
<option value=""></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
<select id="report_report_queries_attributes_36_date_query_2i" name="report[report_queries_attributes][36][date_query(2i)]" disabled="">
<option value=""></option>
<option value="1">Jan</option>
<option value="2">Feb</option>
<option value="3">Mar</option>
<option value="4">Apr</option>
<option value="5">May</option>
<option value="6">Jun</option>
<option value="7">Jul</option>
<option value="8">Aug</option>
<option value="9">Sep</option>
<option value="10">Oct</option>
<option value="11">Nov</option>
<option value="12">Dec</option>
</select>
<select id="report_report_queries_attributes_36_date_query_1i" name="report[report_queries_attributes][36][date_query(1i)]" disabled="">
<option value=""></option>
<option value="1952">1952</option>
<option value="1953">1953</option>
<option value="1954">1954</option>
<option value="1955">1955</option>
<option value="1956">1956</option>
<option value="1957">1957</option>
<option value="1958">1958</option>
<option value="1959">1959</option>
<option value="1960">1960</option>
<option value="1961">1961</option>
<option value="1962">1962</option>
<option value="1963">1963</option>
<option value="1964">1964</option>
<option value="1965">1965</option>
<option value="1966">1966</option>
<option value="1967">1967</option>
<option value="1968">1968</option>
<option value="1969">1969</option>
<option value="1970">1970</option>
<option value="1971">1971</option>
<option value="1972">1972</option>
<option value="1973">1973</option>
<option value="1974">1974</option>
<option value="1975">1975</option>
<option value="1976">1976</option>
<option value="1977">1977</option>
<option value="1978">1978</option>
<option value="1979">1979</option>
<option value="1980">1980</option>
<option value="1981">1981</option>
<option value="1982">1982</option>
<option value="1983">1983</option>
<option value="1984">1984</option>
<option value="1985">1985</option>
<option value="1986">1986</option>
<option value="1987">1987</option>
<option value="1988">1988</option>
<option value="1989">1989</option>
<option value="1990">1990</option>
<option value="1991">1991</option>
<option value="1992">1992</option>
<option value="1993">1993</option>
<option value="1994">1994</option>
<option value="1995">1995</option>
<option value="1996">1996</option>
<option value="1997">1997</option>
<option value="1998">1998</option>
<option value="1999">1999</option>
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
</select>

          </div>

        
      </div>
      
    

      

      <div class="admission_date fields" style="display: none; ">
        <label class="column">Admission Date</label>
        <input id="report_report_queries_attributes_37_column_name" name="report[report_queries_attributes][37][column_name]" type="hidden" value="admission_date" disabled="">
        <input id="report_report_queries_attributes_37_table_name" name="report[report_queries_attributes][37][table_name]" type="hidden" value="Student" disabled="">
        <input id="report_report_queries_attributes_37_criteria" name="report[report_queries_attributes][37][criteria]" type="hidden" value="equals" disabled="">
        <input id="report_report_queries_attributes_37_column_type" name="report[report_queries_attributes][37][column_type]" type="hidden" value="date" disabled="">
        
          <div class="date">
            <label class="criteria">Equals</label>
            <select id="report_report_queries_attributes_37_date_query_3i" name="report[report_queries_attributes][37][date_query(3i)]" disabled="">
<option value=""></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
<select id="report_report_queries_attributes_37_date_query_2i" name="report[report_queries_attributes][37][date_query(2i)]" disabled="">
<option value=""></option>
<option value="1">Jan</option>
<option value="2">Feb</option>
<option value="3">Mar</option>
<option value="4">Apr</option>
<option value="5">May</option>
<option value="6">Jun</option>
<option value="7">Jul</option>
<option value="8">Aug</option>
<option value="9">Sep</option>
<option value="10">Oct</option>
<option value="11">Nov</option>
<option value="12">Dec</option>
</select>
<select id="report_report_queries_attributes_37_date_query_1i" name="report[report_queries_attributes][37][date_query(1i)]" disabled="">
<option value=""></option>
<option value="1952">1952</option>
<option value="1953">1953</option>
<option value="1954">1954</option>
<option value="1955">1955</option>
<option value="1956">1956</option>
<option value="1957">1957</option>
<option value="1958">1958</option>
<option value="1959">1959</option>
<option value="1960">1960</option>
<option value="1961">1961</option>
<option value="1962">1962</option>
<option value="1963">1963</option>
<option value="1964">1964</option>
<option value="1965">1965</option>
<option value="1966">1966</option>
<option value="1967">1967</option>
<option value="1968">1968</option>
<option value="1969">1969</option>
<option value="1970">1970</option>
<option value="1971">1971</option>
<option value="1972">1972</option>
<option value="1973">1973</option>
<option value="1974">1974</option>
<option value="1975">1975</option>
<option value="1976">1976</option>
<option value="1977">1977</option>
<option value="1978">1978</option>
<option value="1979">1979</option>
<option value="1980">1980</option>
<option value="1981">1981</option>
<option value="1982">1982</option>
<option value="1983">1983</option>
<option value="1984">1984</option>
<option value="1985">1985</option>
<option value="1986">1986</option>
<option value="1987">1987</option>
<option value="1988">1988</option>
<option value="1989">1989</option>
<option value="1990">1990</option>
<option value="1991">1991</option>
<option value="1992">1992</option>
<option value="1993">1993</option>
<option value="1994">1994</option>
<option value="1995">1995</option>
<option value="1996">1996</option>
<option value="1997">1997</option>
<option value="1998">1998</option>
<option value="1999">1999</option>
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
</select>

          </div>

        
      </div>
      
    

      

      <div class="date_of_birth fields" style="display: none; ">
        <label class="column">Date of Birth</label>
        <input id="report_report_queries_attributes_38_column_name" name="report[report_queries_attributes][38][column_name]" type="hidden" value="date_of_birth" disabled="">
        <input id="report_report_queries_attributes_38_table_name" name="report[report_queries_attributes][38][table_name]" type="hidden" value="Student" disabled="">
        <input id="report_report_queries_attributes_38_criteria" name="report[report_queries_attributes][38][criteria]" type="hidden" value="gte" disabled="">
        <input id="report_report_queries_attributes_38_column_type" name="report[report_queries_attributes][38][column_type]" type="hidden" value="date" disabled="">
        
          <div class="date">
            <label class="criteria">Greater than</label>
            <select id="report_report_queries_attributes_38_date_query_3i" name="report[report_queries_attributes][38][date_query(3i)]" disabled="">
<option value=""></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
<select id="report_report_queries_attributes_38_date_query_2i" name="report[report_queries_attributes][38][date_query(2i)]" disabled="">
<option value=""></option>
<option value="1">Jan</option>
<option value="2">Feb</option>
<option value="3">Mar</option>
<option value="4">Apr</option>
<option value="5">May</option>
<option value="6">Jun</option>
<option value="7">Jul</option>
<option value="8">Aug</option>
<option value="9">Sep</option>
<option value="10">Oct</option>
<option value="11">Nov</option>
<option value="12">Dec</option>
</select>
<select id="report_report_queries_attributes_38_date_query_1i" name="report[report_queries_attributes][38][date_query(1i)]" disabled="">
<option value=""></option>
<option value="1952">1952</option>
<option value="1953">1953</option>
<option value="1954">1954</option>
<option value="1955">1955</option>
<option value="1956">1956</option>
<option value="1957">1957</option>
<option value="1958">1958</option>
<option value="1959">1959</option>
<option value="1960">1960</option>
<option value="1961">1961</option>
<option value="1962">1962</option>
<option value="1963">1963</option>
<option value="1964">1964</option>
<option value="1965">1965</option>
<option value="1966">1966</option>
<option value="1967">1967</option>
<option value="1968">1968</option>
<option value="1969">1969</option>
<option value="1970">1970</option>
<option value="1971">1971</option>
<option value="1972">1972</option>
<option value="1973">1973</option>
<option value="1974">1974</option>
<option value="1975">1975</option>
<option value="1976">1976</option>
<option value="1977">1977</option>
<option value="1978">1978</option>
<option value="1979">1979</option>
<option value="1980">1980</option>
<option value="1981">1981</option>
<option value="1982">1982</option>
<option value="1983">1983</option>
<option value="1984">1984</option>
<option value="1985">1985</option>
<option value="1986">1986</option>
<option value="1987">1987</option>
<option value="1988">1988</option>
<option value="1989">1989</option>
<option value="1990">1990</option>
<option value="1991">1991</option>
<option value="1992">1992</option>
<option value="1993">1993</option>
<option value="1994">1994</option>
<option value="1995">1995</option>
<option value="1996">1996</option>
<option value="1997">1997</option>
<option value="1998">1998</option>
<option value="1999">1999</option>
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
</select>

          </div>

        
      </div>
      
    

      

      <div class="date_of_birth fields" style="display: none; ">
        <label class="column">Date of Birth</label>
        <input id="report_report_queries_attributes_39_column_name" name="report[report_queries_attributes][39][column_name]" type="hidden" value="date_of_birth" disabled="">
        <input id="report_report_queries_attributes_39_table_name" name="report[report_queries_attributes][39][table_name]" type="hidden" value="Student" disabled="">
        <input id="report_report_queries_attributes_39_criteria" name="report[report_queries_attributes][39][criteria]" type="hidden" value="lte" disabled="">
        <input id="report_report_queries_attributes_39_column_type" name="report[report_queries_attributes][39][column_type]" type="hidden" value="date" disabled="">
        
          <div class="date">
            <label class="criteria">Less than</label>
            <select id="report_report_queries_attributes_39_date_query_3i" name="report[report_queries_attributes][39][date_query(3i)]" disabled="">
<option value=""></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
<select id="report_report_queries_attributes_39_date_query_2i" name="report[report_queries_attributes][39][date_query(2i)]" disabled="">
<option value=""></option>
<option value="1">Jan</option>
<option value="2">Feb</option>
<option value="3">Mar</option>
<option value="4">Apr</option>
<option value="5">May</option>
<option value="6">Jun</option>
<option value="7">Jul</option>
<option value="8">Aug</option>
<option value="9">Sep</option>
<option value="10">Oct</option>
<option value="11">Nov</option>
<option value="12">Dec</option>
</select>
<select id="report_report_queries_attributes_39_date_query_1i" name="report[report_queries_attributes][39][date_query(1i)]" disabled="">
<option value=""></option>
<option value="1952">1952</option>
<option value="1953">1953</option>
<option value="1954">1954</option>
<option value="1955">1955</option>
<option value="1956">1956</option>
<option value="1957">1957</option>
<option value="1958">1958</option>
<option value="1959">1959</option>
<option value="1960">1960</option>
<option value="1961">1961</option>
<option value="1962">1962</option>
<option value="1963">1963</option>
<option value="1964">1964</option>
<option value="1965">1965</option>
<option value="1966">1966</option>
<option value="1967">1967</option>
<option value="1968">1968</option>
<option value="1969">1969</option>
<option value="1970">1970</option>
<option value="1971">1971</option>
<option value="1972">1972</option>
<option value="1973">1973</option>
<option value="1974">1974</option>
<option value="1975">1975</option>
<option value="1976">1976</option>
<option value="1977">1977</option>
<option value="1978">1978</option>
<option value="1979">1979</option>
<option value="1980">1980</option>
<option value="1981">1981</option>
<option value="1982">1982</option>
<option value="1983">1983</option>
<option value="1984">1984</option>
<option value="1985">1985</option>
<option value="1986">1986</option>
<option value="1987">1987</option>
<option value="1988">1988</option>
<option value="1989">1989</option>
<option value="1990">1990</option>
<option value="1991">1991</option>
<option value="1992">1992</option>
<option value="1993">1993</option>
<option value="1994">1994</option>
<option value="1995">1995</option>
<option value="1996">1996</option>
<option value="1997">1997</option>
<option value="1998">1998</option>
<option value="1999">1999</option>
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
</select>

          </div>

        
      </div>
      
    

      

      <div class="date_of_birth fields" style="display: none; ">
        <label class="column">Date of Birth</label>
        <input id="report_report_queries_attributes_40_column_name" name="report[report_queries_attributes][40][column_name]" type="hidden" value="date_of_birth" disabled="">
        <input id="report_report_queries_attributes_40_table_name" name="report[report_queries_attributes][40][table_name]" type="hidden" value="Student" disabled="">
        <input id="report_report_queries_attributes_40_criteria" name="report[report_queries_attributes][40][criteria]" type="hidden" value="equals" disabled="">
        <input id="report_report_queries_attributes_40_column_type" name="report[report_queries_attributes][40][column_type]" type="hidden" value="date" disabled="">
        
          <div class="date">
            <label class="criteria">Equals</label>
            <select id="report_report_queries_attributes_40_date_query_3i" name="report[report_queries_attributes][40][date_query(3i)]" disabled="">
<option value=""></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
<select id="report_report_queries_attributes_40_date_query_2i" name="report[report_queries_attributes][40][date_query(2i)]" disabled="">
<option value=""></option>
<option value="1">Jan</option>
<option value="2">Feb</option>
<option value="3">Mar</option>
<option value="4">Apr</option>
<option value="5">May</option>
<option value="6">Jun</option>
<option value="7">Jul</option>
<option value="8">Aug</option>
<option value="9">Sep</option>
<option value="10">Oct</option>
<option value="11">Nov</option>
<option value="12">Dec</option>
</select>
<select id="report_report_queries_attributes_40_date_query_1i" name="report[report_queries_attributes][40][date_query(1i)]" disabled="">
<option value=""></option>
<option value="1952">1952</option>
<option value="1953">1953</option>
<option value="1954">1954</option>
<option value="1955">1955</option>
<option value="1956">1956</option>
<option value="1957">1957</option>
<option value="1958">1958</option>
<option value="1959">1959</option>
<option value="1960">1960</option>
<option value="1961">1961</option>
<option value="1962">1962</option>
<option value="1963">1963</option>
<option value="1964">1964</option>
<option value="1965">1965</option>
<option value="1966">1966</option>
<option value="1967">1967</option>
<option value="1968">1968</option>
<option value="1969">1969</option>
<option value="1970">1970</option>
<option value="1971">1971</option>
<option value="1972">1972</option>
<option value="1973">1973</option>
<option value="1974">1974</option>
<option value="1975">1975</option>
<option value="1976">1976</option>
<option value="1977">1977</option>
<option value="1978">1978</option>
<option value="1979">1979</option>
<option value="1980">1980</option>
<option value="1981">1981</option>
<option value="1982">1982</option>
<option value="1983">1983</option>
<option value="1984">1984</option>
<option value="1985">1985</option>
<option value="1986">1986</option>
<option value="1987">1987</option>
<option value="1988">1988</option>
<option value="1989">1989</option>
<option value="1990">1990</option>
<option value="1991">1991</option>
<option value="1992">1992</option>
<option value="1993">1993</option>
<option value="1994">1994</option>
<option value="1995">1995</option>
<option value="1996">1996</option>
<option value="1997">1997</option>
<option value="1998">1998</option>
<option value="1999">1999</option>
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
</select>

          </div>

        
      </div>
      
    
  </div>

  <div class="report-columns">
    <li class="info">
      <p>Select and order the fields to be shown in the report.</p>
    </li>
    <ul id="src" class="report-columns-left">
      
      
        
        
        <li id="admission_date-column" class="column-list">
          <label class="column-label">Admission Date</label>
          <input class="column_title" id="admission_date-column" name="report[report_columns_attributes][0][title]" size="30" type="text" value="Admission Date" disabled="">
          <input id="report_report_columns_attributes_0_method" name="report[report_columns_attributes][0][method]" type="hidden" value="admission_date" disabled="">
          <input class="position" id="report_report_columns_attributes_0_position" name="report[report_columns_attributes][0][position]" type="hidden" value="1" disabled="">
          <input class="destroy" id="report_report_columns_attributes_0__destroy" name="report[report_columns_attributes][0][_destroy]" type="hidden" value="1" disabled="">
          <a class="add button"></a>
          <a class="remove button"></a>
          <a class="mup button"></a>
          <a class="mud button"></a>
        </li>
      
        
        
        <li id="date_of_birth-column" class="column-list">
          <label class="column-label">Date of Birth</label>
          <input class="column_title" id="date_of_birth-column" name="report[report_columns_attributes][1][title]" size="30" type="text" value="Date of Birth" disabled="">
          <input id="report_report_columns_attributes_1_method" name="report[report_columns_attributes][1][method]" type="hidden" value="date_of_birth" disabled="">
          <input class="position" id="report_report_columns_attributes_1_position" name="report[report_columns_attributes][1][position]" type="hidden" value="2" disabled="">
          <input class="destroy" id="report_report_columns_attributes_1__destroy" name="report[report_columns_attributes][1][_destroy]" type="hidden" value="1" disabled="">
          <a class="add button"></a>
          <a class="remove button"></a>
          <a class="mup button"></a>
          <a class="mud button"></a>
        </li>
      
        
        
        <li id="country-column" class="column-list">
          <label class="column-label">Country</label>
          <input class="column_title" id="country-column" name="report[report_columns_attributes][2][title]" size="30" type="text" value="Country" disabled="">
          <input id="report_report_columns_attributes_2_method" name="report[report_columns_attributes][2][method]" type="hidden" value="country" disabled="">
          <input class="position" id="report_report_columns_attributes_2_position" name="report[report_columns_attributes][2][position]" type="hidden" value="3" disabled="">
          <input class="destroy" id="report_report_columns_attributes_2__destroy" name="report[report_columns_attributes][2][_destroy]" type="hidden" value="1" disabled="">
          <a class="add button"></a>
          <a class="remove button"></a>
          <a class="mup button"></a>
          <a class="mud button"></a>
        </li>
      
        
        
        <li id="nationality-column" class="column-list">
          <label class="column-label">Nationality</label>
          <input class="column_title" id="nationality-column" name="report[report_columns_attributes][3][title]" size="30" type="text" value="Nationality" disabled="">
          <input id="report_report_columns_attributes_3_method" name="report[report_columns_attributes][3][method]" type="hidden" value="nationality" disabled="">
          <input class="position" id="report_report_columns_attributes_3_position" name="report[report_columns_attributes][3][position]" type="hidden" value="4" disabled="">
          <input class="destroy" id="report_report_columns_attributes_3__destroy" name="report[report_columns_attributes][3][_destroy]" type="hidden" value="1" disabled="">
          <a class="add button"></a>
          <a class="remove button"></a>
          <a class="mup button"></a>
          <a class="mud button"></a>
        </li>
      
        
        
        <li id="student_category-column" class="column-list">
          <label class="column-label">Student Category</label>
          <input class="column_title" id="student_category-column" name="report[report_columns_attributes][4][title]" size="30" type="text" value="Student Category" disabled="">
          <input id="report_report_columns_attributes_4_method" name="report[report_columns_attributes][4][method]" type="hidden" value="student_category" disabled="">
          <input class="position" id="report_report_columns_attributes_4_position" name="report[report_columns_attributes][4][position]" type="hidden" value="5" disabled="">
          <input class="destroy" id="report_report_columns_attributes_4__destroy" name="report[report_columns_attributes][4][_destroy]" type="hidden" value="1" disabled="">
          <a class="add button"></a>
          <a class="remove button"></a>
          <a class="mup button"></a>
          <a class="mud button"></a>
        </li>
      
        
        
        <li id="batch-column" class="column-list">
          <label class="column-label">Batch</label>
          <input class="column_title" id="batch-column" name="report[report_columns_attributes][5][title]" size="30" type="text" value="Batch" disabled="">
          <input id="report_report_columns_attributes_5_method" name="report[report_columns_attributes][5][method]" type="hidden" value="batch" disabled="">
          <input class="position" id="report_report_columns_attributes_5_position" name="report[report_columns_attributes][5][position]" type="hidden" value="6" disabled="">
          <input class="destroy" id="report_report_columns_attributes_5__destroy" name="report[report_columns_attributes][5][_destroy]" type="hidden" value="1" disabled="">
          <a class="add button"></a>
          <a class="remove button"></a>
          <a class="mup button"></a>
          <a class="mud button"></a>
        </li>
      
        
        
        <li id="course-column" class="column-list">
          <label class="column-label">Course</label>
          <input class="column_title" id="course-column" name="report[report_columns_attributes][6][title]" size="30" type="text" value="Course" disabled="">
          <input id="report_report_columns_attributes_6_method" name="report[report_columns_attributes][6][method]" type="hidden" value="course" disabled="">
          <input class="position" id="report_report_columns_attributes_6_position" name="report[report_columns_attributes][6][position]" type="hidden" value="7" disabled="">
          <input class="destroy" id="report_report_columns_attributes_6__destroy" name="report[report_columns_attributes][6][_destroy]" type="hidden" value="1" disabled="">
          <a class="add button"></a>
          <a class="remove button"></a>
          <a class="mup button"></a>
          <a class="mud button"></a>
        </li>
      
        
        
        <li id="admission_no-column" class="column-list">
          <label class="column-label">Admission no</label>
          <input class="column_title" id="admission_no-column" name="report[report_columns_attributes][7][title]" size="30" type="text" value="Admission no" disabled="">
          <input id="report_report_columns_attributes_7_method" name="report[report_columns_attributes][7][method]" type="hidden" value="admission_no" disabled="">
          <input class="position" id="report_report_columns_attributes_7_position" name="report[report_columns_attributes][7][position]" type="hidden" value="8" disabled="">
          <input class="destroy" id="report_report_columns_attributes_7__destroy" name="report[report_columns_attributes][7][_destroy]" type="hidden" value="1" disabled="">
          <a class="add button"></a>
          <a class="remove button"></a>
          <a class="mup button"></a>
          <a class="mud button"></a>
        </li>
      
        
        
        <li id="first_name-column" class="column-list">
          <label class="column-label">First Name</label>
          <input class="column_title" id="first_name-column" name="report[report_columns_attributes][8][title]" size="30" type="text" value="First Name" disabled="">
          <input id="report_report_columns_attributes_8_method" name="report[report_columns_attributes][8][method]" type="hidden" value="first_name" disabled="">
          <input class="position" id="report_report_columns_attributes_8_position" name="report[report_columns_attributes][8][position]" type="hidden" value="9" disabled="">
          <input class="destroy" id="report_report_columns_attributes_8__destroy" name="report[report_columns_attributes][8][_destroy]" type="hidden" value="1" disabled="">
          <a class="add button"></a>
          <a class="remove button"></a>
          <a class="mup button"></a>
          <a class="mud button"></a>
        </li>
      
        
        
        <li id="middle_name-column" class="column-list">
          <label class="column-label">Middle Name</label>
          <input class="column_title" id="middle_name-column" name="report[report_columns_attributes][9][title]" size="30" type="text" value="Middle Name" disabled="">
          <input id="report_report_columns_attributes_9_method" name="report[report_columns_attributes][9][method]" type="hidden" value="middle_name" disabled="">
          <input class="position" id="report_report_columns_attributes_9_position" name="report[report_columns_attributes][9][position]" type="hidden" value="10" disabled="">
          <input class="destroy" id="report_report_columns_attributes_9__destroy" name="report[report_columns_attributes][9][_destroy]" type="hidden" value="1" disabled="">
          <a class="add button"></a>
          <a class="remove button"></a>
          <a class="mup button"></a>
          <a class="mud button"></a>
        </li>
      
        
        
        <li id="last_name-column" class="column-list">
          <label class="column-label">Last Name</label>
          <input class="column_title" id="last_name-column" name="report[report_columns_attributes][10][title]" size="30" type="text" value="Last Name" disabled="">
          <input id="report_report_columns_attributes_10_method" name="report[report_columns_attributes][10][method]" type="hidden" value="last_name" disabled="">
          <input class="position" id="report_report_columns_attributes_10_position" name="report[report_columns_attributes][10][position]" type="hidden" value="11" disabled="">
          <input class="destroy" id="report_report_columns_attributes_10__destroy" name="report[report_columns_attributes][10][_destroy]" type="hidden" value="1" disabled="">
          <a class="add button"></a>
          <a class="remove button"></a>
          <a class="mup button"></a>
          <a class="mud button"></a>
        </li>
      
        
        
        <li id="gender-column" class="column-list">
          <label class="column-label">Gender</label>
          <input class="column_title" id="gender-column" name="report[report_columns_attributes][11][title]" size="30" type="text" value="Gender" disabled="">
          <input id="report_report_columns_attributes_11_method" name="report[report_columns_attributes][11][method]" type="hidden" value="gender" disabled="">
          <input class="position" id="report_report_columns_attributes_11_position" name="report[report_columns_attributes][11][position]" type="hidden" value="12" disabled="">
          <input class="destroy" id="report_report_columns_attributes_11__destroy" name="report[report_columns_attributes][11][_destroy]" type="hidden" value="1" disabled="">
          <a class="add button"></a>
          <a class="remove button"></a>
          <a class="mup button"></a>
          <a class="mud button"></a>
        </li>
      
        
        
        <li id="blood_group-column" class="column-list">
          <label class="column-label">Blood Group</label>
          <input class="column_title" id="blood_group-column" name="report[report_columns_attributes][12][title]" size="30" type="text" value="Blood Group" disabled="">
          <input id="report_report_columns_attributes_12_method" name="report[report_columns_attributes][12][method]" type="hidden" value="blood_group" disabled="">
          <input class="position" id="report_report_columns_attributes_12_position" name="report[report_columns_attributes][12][position]" type="hidden" value="13" disabled="">
          <input class="destroy" id="report_report_columns_attributes_12__destroy" name="report[report_columns_attributes][12][_destroy]" type="hidden" value="1" disabled="">
          <a class="add button"></a>
          <a class="remove button"></a>
          <a class="mup button"></a>
          <a class="mud button"></a>
        </li>
      
        
        
        <li id="language-column" class="column-list">
          <label class="column-label">Language</label>
          <input class="column_title" id="language-column" name="report[report_columns_attributes][13][title]" size="30" type="text" value="Language" disabled="">
          <input id="report_report_columns_attributes_13_method" name="report[report_columns_attributes][13][method]" type="hidden" value="language" disabled="">
          <input class="position" id="report_report_columns_attributes_13_position" name="report[report_columns_attributes][13][position]" type="hidden" value="14" disabled="">
          <input class="destroy" id="report_report_columns_attributes_13__destroy" name="report[report_columns_attributes][13][_destroy]" type="hidden" value="1" disabled="">
          <a class="add button"></a>
          <a class="remove button"></a>
          <a class="mup button"></a>
          <a class="mud button"></a>
        </li>
      
        
        
        <li id="religion-column" class="column-list">
          <label class="column-label">Religion</label>
          <input class="column_title" id="religion-column" name="report[report_columns_attributes][14][title]" size="30" type="text" value="Religion" disabled="">
          <input id="report_report_columns_attributes_14_method" name="report[report_columns_attributes][14][method]" type="hidden" value="religion" disabled="">
          <input class="position" id="report_report_columns_attributes_14_position" name="report[report_columns_attributes][14][position]" type="hidden" value="15" disabled="">
          <input class="destroy" id="report_report_columns_attributes_14__destroy" name="report[report_columns_attributes][14][_destroy]" type="hidden" value="1" disabled="">
          <a class="add button"></a>
          <a class="remove button"></a>
          <a class="mup button"></a>
          <a class="mud button"></a>
        </li>
      
        
        
        <li id="city-column" class="column-list">
          <label class="column-label">City</label>
          <input class="column_title" id="city-column" name="report[report_columns_attributes][15][title]" size="30" type="text" value="City" disabled="">
          <input id="report_report_columns_attributes_15_method" name="report[report_columns_attributes][15][method]" type="hidden" value="city" disabled="">
          <input class="position" id="report_report_columns_attributes_15_position" name="report[report_columns_attributes][15][position]" type="hidden" value="16" disabled="">
          <input class="destroy" id="report_report_columns_attributes_15__destroy" name="report[report_columns_attributes][15][_destroy]" type="hidden" value="1" disabled="">
          <a class="add button"></a>
          <a class="remove button"></a>
          <a class="mup button"></a>
          <a class="mud button"></a>
        </li>
      
        
        
        <li id="state-column" class="column-list">
          <label class="column-label">State</label>
          <input class="column_title" id="state-column" name="report[report_columns_attributes][16][title]" size="30" type="text" value="State" disabled="">
          <input id="report_report_columns_attributes_16_method" name="report[report_columns_attributes][16][method]" type="hidden" value="state" disabled="">
          <input class="position" id="report_report_columns_attributes_16_position" name="report[report_columns_attributes][16][position]" type="hidden" value="17" disabled="">
          <input class="destroy" id="report_report_columns_attributes_16__destroy" name="report[report_columns_attributes][16][_destroy]" type="hidden" value="1" disabled="">
          <a class="add button"></a>
          <a class="remove button"></a>
          <a class="mup button"></a>
          <a class="mud button"></a>
        </li>
      
        
        
        <li id="immediate_contact-column" class="column-list">
          <label class="column-label">Immediate contact</label>
          <input class="column_title" id="immediate_contact-column" name="report[report_columns_attributes][17][title]" size="30" type="text" value="Immediate contact" disabled="">
          <input id="report_report_columns_attributes_17_method" name="report[report_columns_attributes][17][method]" type="hidden" value="immediate_contact" disabled="">
          <input class="position" id="report_report_columns_attributes_17_position" name="report[report_columns_attributes][17][position]" type="hidden" value="18" disabled="">
          <input class="destroy" id="report_report_columns_attributes_17__destroy" name="report[report_columns_attributes][17][_destroy]" type="hidden" value="1" disabled="">
          <a class="add button"></a>
          <a class="remove button"></a>
          <a class="mup button"></a>
          <a class="mud button"></a>
        </li>
      
        
        
        <li id="parent_first_name-column" class="column-list">
          <label class="column-label">Parent first name</label>
          <input class="column_title" id="parent_first_name-column" name="report[report_columns_attributes][18][title]" size="30" type="text" value="Parent first name" disabled="">
          <input id="report_report_columns_attributes_18_method" name="report[report_columns_attributes][18][method]" type="hidden" value="parent_first_name" disabled="">
          <input class="position" id="report_report_columns_attributes_18_position" name="report[report_columns_attributes][18][position]" type="hidden" value="19" disabled="">
          <input class="destroy" id="report_report_columns_attributes_18__destroy" name="report[report_columns_attributes][18][_destroy]" type="hidden" value="1" disabled="">
          <a class="add button"></a>
          <a class="remove button"></a>
          <a class="mup button"></a>
          <a class="mud button"></a>
        </li>
      
        
        
        <li id="parent_last_name-column" class="column-list">
          <label class="column-label">Parent last name</label>
          <input class="column_title" id="parent_last_name-column" name="report[report_columns_attributes][19][title]" size="30" type="text" value="Parent last name" disabled="">
          <input id="report_report_columns_attributes_19_method" name="report[report_columns_attributes][19][method]" type="hidden" value="parent_last_name" disabled="">
          <input class="position" id="report_report_columns_attributes_19_position" name="report[report_columns_attributes][19][position]" type="hidden" value="20" disabled="">
          <input class="destroy" id="report_report_columns_attributes_19__destroy" name="report[report_columns_attributes][19][_destroy]" type="hidden" value="1" disabled="">
          <a class="add button"></a>
          <a class="remove button"></a>
          <a class="mup button"></a>
          <a class="mud button"></a>
        </li>
      
        
        
        <li id="parent_relation-column" class="column-list">
          <label class="column-label">Parent relation</label>
          <input class="column_title" id="parent_relation-column" name="report[report_columns_attributes][20][title]" size="30" type="text" value="Parent relation" disabled="">
          <input id="report_report_columns_attributes_20_method" name="report[report_columns_attributes][20][method]" type="hidden" value="parent_relation" disabled="">
          <input class="position" id="report_report_columns_attributes_20_position" name="report[report_columns_attributes][20][position]" type="hidden" value="21" disabled="">
          <input class="destroy" id="report_report_columns_attributes_20__destroy" name="report[report_columns_attributes][20][_destroy]" type="hidden" value="1" disabled="">
          <a class="add button"></a>
          <a class="remove button"></a>
          <a class="mup button"></a>
          <a class="mud button"></a>
        </li>
      
        
        
        <li id="parent_dob-column" class="column-list">
          <label class="column-label">Parent date of birth</label>
          <input class="column_title" id="parent_dob-column" name="report[report_columns_attributes][21][title]" size="30" type="text" value="Parent date of birth" disabled="">
          <input id="report_report_columns_attributes_21_method" name="report[report_columns_attributes][21][method]" type="hidden" value="parent_dob" disabled="">
          <input class="position" id="report_report_columns_attributes_21_position" name="report[report_columns_attributes][21][position]" type="hidden" value="22" disabled="">
          <input class="destroy" id="report_report_columns_attributes_21__destroy" name="report[report_columns_attributes][21][_destroy]" type="hidden" value="1" disabled="">
          <a class="add button"></a>
          <a class="remove button"></a>
          <a class="mup button"></a>
          <a class="mud button"></a>
        </li>
      
        
        
        <li id="parent_education-column" class="column-list">
          <label class="column-label">Parent education</label>
          <input class="column_title" id="parent_education-column" name="report[report_columns_attributes][22][title]" size="30" type="text" value="Parent education" disabled="">
          <input id="report_report_columns_attributes_22_method" name="report[report_columns_attributes][22][method]" type="hidden" value="parent_education" disabled="">
          <input class="position" id="report_report_columns_attributes_22_position" name="report[report_columns_attributes][22][position]" type="hidden" value="23" disabled="">
          <input class="destroy" id="report_report_columns_attributes_22__destroy" name="report[report_columns_attributes][22][_destroy]" type="hidden" value="1" disabled="">
          <a class="add button"></a>
          <a class="remove button"></a>
          <a class="mup button"></a>
          <a class="mud button"></a>
        </li>
      
        
        
        <li id="parent_occupation-column" class="column-list">
          <label class="column-label">Parent occupation</label>
          <input class="column_title" id="parent_occupation-column" name="report[report_columns_attributes][23][title]" size="30" type="text" value="Parent occupation" disabled="">
          <input id="report_report_columns_attributes_23_method" name="report[report_columns_attributes][23][method]" type="hidden" value="parent_occupation" disabled="">
          <input class="position" id="report_report_columns_attributes_23_position" name="report[report_columns_attributes][23][position]" type="hidden" value="24" disabled="">
          <input class="destroy" id="report_report_columns_attributes_23__destroy" name="report[report_columns_attributes][23][_destroy]" type="hidden" value="1" disabled="">
          <a class="add button"></a>
          <a class="remove button"></a>
          <a class="mup button"></a>
          <a class="mud button"></a>
        </li>
      
        
        
        <li id="parent_income-column" class="column-list">
          <label class="column-label">Parent income</label>
          <input class="column_title" id="parent_income-column" name="report[report_columns_attributes][24][title]" size="30" type="text" value="Parent income" disabled="">
          <input id="report_report_columns_attributes_24_method" name="report[report_columns_attributes][24][method]" type="hidden" value="parent_income" disabled="">
          <input class="position" id="report_report_columns_attributes_24_position" name="report[report_columns_attributes][24][position]" type="hidden" value="25" disabled="">
          <input class="destroy" id="report_report_columns_attributes_24__destroy" name="report[report_columns_attributes][24][_destroy]" type="hidden" value="1" disabled="">
          <a class="add button"></a>
          <a class="remove button"></a>
          <a class="mup button"></a>
          <a class="mud button"></a>
        </li>
      
        
        
        <li id="parent_email-column" class="column-list">
          <label class="column-label">Parent email</label>
          <input class="column_title" id="parent_email-column" name="report[report_columns_attributes][25][title]" size="30" type="text" value="Parent email" disabled="">
          <input id="report_report_columns_attributes_25_method" name="report[report_columns_attributes][25][method]" type="hidden" value="parent_email" disabled="">
          <input class="position" id="report_report_columns_attributes_25_position" name="report[report_columns_attributes][25][position]" type="hidden" value="26" disabled="">
          <input class="destroy" id="report_report_columns_attributes_25__destroy" name="report[report_columns_attributes][25][_destroy]" type="hidden" value="1" disabled="">
          <a class="add button"></a>
          <a class="remove button"></a>
          <a class="mup button"></a>
          <a class="mud button"></a>
        </li>
      
        
        
        <li id="parent_office_address_line1-column" class="column-list">
          <label class="column-label">Parent office address 1</label>
          <input class="column_title" id="parent_office_address_line1-column" name="report[report_columns_attributes][26][title]" size="30" type="text" value="Parent office address 1" disabled="">
          <input id="report_report_columns_attributes_26_method" name="report[report_columns_attributes][26][method]" type="hidden" value="parent_office_address_line1" disabled="">
          <input class="position" id="report_report_columns_attributes_26_position" name="report[report_columns_attributes][26][position]" type="hidden" value="27" disabled="">
          <input class="destroy" id="report_report_columns_attributes_26__destroy" name="report[report_columns_attributes][26][_destroy]" type="hidden" value="1" disabled="">
          <a class="add button"></a>
          <a class="remove button"></a>
          <a class="mup button"></a>
          <a class="mud button"></a>
        </li>
      
        
        
        <li id="parent_office_address_line2-column" class="column-list">
          <label class="column-label">Parent office address 2</label>
          <input class="column_title" id="parent_office_address_line2-column" name="report[report_columns_attributes][27][title]" size="30" type="text" value="Parent office address 2" disabled="">
          <input id="report_report_columns_attributes_27_method" name="report[report_columns_attributes][27][method]" type="hidden" value="parent_office_address_line2" disabled="">
          <input class="position" id="report_report_columns_attributes_27_position" name="report[report_columns_attributes][27][position]" type="hidden" value="28" disabled="">
          <input class="destroy" id="report_report_columns_attributes_27__destroy" name="report[report_columns_attributes][27][_destroy]" type="hidden" value="1" disabled="">
          <a class="add button"></a>
          <a class="remove button"></a>
          <a class="mup button"></a>
          <a class="mud button"></a>
        </li>
      
        
        
        <li id="parent_city-column" class="column-list">
          <label class="column-label">Parent city</label>
          <input class="column_title" id="parent_city-column" name="report[report_columns_attributes][28][title]" size="30" type="text" value="Parent city" disabled="">
          <input id="report_report_columns_attributes_28_method" name="report[report_columns_attributes][28][method]" type="hidden" value="parent_city" disabled="">
          <input class="position" id="report_report_columns_attributes_28_position" name="report[report_columns_attributes][28][position]" type="hidden" value="29" disabled="">
          <input class="destroy" id="report_report_columns_attributes_28__destroy" name="report[report_columns_attributes][28][_destroy]" type="hidden" value="1" disabled="">
          <a class="add button"></a>
          <a class="remove button"></a>
          <a class="mup button"></a>
          <a class="mud button"></a>
        </li>
      
        
        
        <li id="parent_state-column" class="column-list">
          <label class="column-label">Parent city</label>
          <input class="column_title" id="parent_state-column" name="report[report_columns_attributes][29][title]" size="30" type="text" value="Parent city" disabled="">
          <input id="report_report_columns_attributes_29_method" name="report[report_columns_attributes][29][method]" type="hidden" value="parent_state" disabled="">
          <input class="position" id="report_report_columns_attributes_29_position" name="report[report_columns_attributes][29][position]" type="hidden" value="30" disabled="">
          <input class="destroy" id="report_report_columns_attributes_29__destroy" name="report[report_columns_attributes][29][_destroy]" type="hidden" value="1" disabled="">
          <a class="add button"></a>
          <a class="remove button"></a>
          <a class="mup button"></a>
          <a class="mud button"></a>
        </li>
      
        
        
        <li id="parent_office_phone1-column" class="column-list">
          <label class="column-label">Parent office phone</label>
          <input class="column_title" id="parent_office_phone1-column" name="report[report_columns_attributes][30][title]" size="30" type="text" value="Parent office phone" disabled="">
          <input id="report_report_columns_attributes_30_method" name="report[report_columns_attributes][30][method]" type="hidden" value="parent_office_phone1" disabled="">
          <input class="position" id="report_report_columns_attributes_30_position" name="report[report_columns_attributes][30][position]" type="hidden" value="31" disabled="">
          <input class="destroy" id="report_report_columns_attributes_30__destroy" name="report[report_columns_attributes][30][_destroy]" type="hidden" value="1" disabled="">
          <a class="add button"></a>
          <a class="remove button"></a>
          <a class="mup button"></a>
          <a class="mud button"></a>
        </li>
      
        
        
        <li id="parent_mobile_phone-column" class="column-list">
          <label class="column-label">Parent mobile phone</label>
          <input class="column_title" id="parent_mobile_phone-column" name="report[report_columns_attributes][31][title]" size="30" type="text" value="Parent mobile phone" disabled="">
          <input id="report_report_columns_attributes_31_method" name="report[report_columns_attributes][31][method]" type="hidden" value="parent_mobile_phone" disabled="">
          <input class="position" id="report_report_columns_attributes_31_position" name="report[report_columns_attributes][31][position]" type="hidden" value="32" disabled="">
          <input class="destroy" id="report_report_columns_attributes_31__destroy" name="report[report_columns_attributes][31][_destroy]" type="hidden" value="1" disabled="">
          <a class="add button"></a>
          <a class="remove button"></a>
          <a class="mup button"></a>
          <a class="mud button"></a>
        </li>
      

    </ul>
    <ul id="dest" class="report-columns-right">

    </ul>
  </div>
  <input class="submit_button" id="report_submit" name="commit" type="submit" value="Save">
</form>

 </div>

      <div class="extender"></div>
    </div>

  <!-- footer -->
  <?php include("include/footer.php")?>