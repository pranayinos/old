<?php 
$config_setting = new Main(); // create a new news object
	$newsRecordSet = $config_setting->getdata('*',"school_setting","","", "");// set newsRecordSet to a 
	$record = $newsRecordSet->getNextRecord();
   if(isset($_POST['addNew_bt'])) // If the submit button was clicked
    {
           $cols['school_name'] =$_POST['configuration_institution_name'];
		   $cols['school_address'] =$_POST['configuration_institution_address'];
		   $cols['school_ph'] =$_POST['configuration_institution_phone_no'];
		   $cols['school_email'] =$_POST['configuration_institution_email'];
		   $cols['school_web'] =$_POST['configuration_institution_web'];		   
		   $cols['session_start'] =date("Y-m-d", strtotime($_POST['configuration_financial_year_start_date']));
		   $cols['session_end'] =date("Y-m-d", strtotime($_POST['configuration_financial_year_end_date']));
		   $cols['school_student_roll_pre'] =$_POST['school_student_roll_pre'];
		   
		   
		   if($config_setting->updateData($cols,"school_setting"))
        {
				$msg="New Category Added Succesfully";
				header("location:?page=configuration-settings&msg=$msg");			
		}
		else
		{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=configuration-settings&error=$msg");
		}		
	}
		?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="./css/general_settings.css" media="screen" rel="stylesheet" type="text/css">


<!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php include("include/sidebar6.php")?>
           
      <!-- end of side bar -->
      <div id="content"> 

<div id="content-header">
  <img alt="Show_settings" src="../images/show_settings.png">
  <h1>Configuration</h1>
  <h3>General Settings</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">

  
  

  <form action="?page=configuration-settings" enctype="multipart/form-data" method="post">
    <div class="box">
      <div class="label-field-pair">
        <label for="configuration_currency_type">School/College Name</label>
        <div class="text-input-bg">
          <input id="configuration_institution_name" name="configuration_institution_name" size="30" type="text" value="<?=$record[school_name]?>">
        </div>
      </div>
      <div class="label-field-pair">
        <label for="configuration_currency_type">School/College Address</label>
        <div class="text-input-bg">
          <input id="configuration_institution_address" name="configuration_institution_address" size="30" type="text" value="<?=$record[school_address]?>">
  
        </div>
      </div>
      <div class="label-field-pair">
        <label for="configuration_currency_type">School/College Phone</label>
        <div class="text-input-bg">
          <input id="configuration_institution_phone_no" name="configuration_institution_phone_no" size="30" type="text" value="<?=$record[school_ph]?>">
        </div>
      </div>
      <div class="label-field-pair">
        <label for="configuration_currency_type">E-mail Address</label>
        <div class="text-input-bg">
          <input id="configuration_institution_address" name="configuration_institution_email" size="30" type="text" value="<?=$record[school_email]?>">
  
        </div>
      </div>
      <div class="label-field-pair">
        <label for="configuration_currency_type">Web site url</label>
        <div class="text-input-bg">
          <input id="configuration_institution_address" name="configuration_institution_web" size="30" type="text" value="<?=$record[school_web]?>">
  
        </div>
      </div>
       <div class="label-field-pair">
        <label for="configuration_currency_type">Prefix Student Roll no</label>
        <div class="text-input-bg">
          <input id="school_student_roll_pre" name="school_student_roll_pre" size="30" type="text" value="<?=$record[school_student_roll_pre	]?>">
  
        </div>
      </div>
     <!-- <div class="label-field-pair">
        <label for="configuration_student_attendance_type">Student Attendance Type</label>
        <div class="text-input-bg">
          <select id="configuration_student_attendance_type" name="configuration_student_attendance_type"><option value="Daily" selected="selected">Daily</option>
<option value="SubjectWise">SubjectWise</option></select>
        </div>
      </div>-->
      <div class="label-field-pair">
        <label for="configuration_currency_type">Finance year start date</label>
        <div class="text-input-bg">
          <input id="configuration_financial_year_start_date" name="configuration_financial_year_start_date" readonly="readonly" type="text" value="<?=date("M-d-Y", strtotime($record['session_start']))?>"> <img alt="Calendar" class="calendar_date_select_popup_icon" onClick="new CalendarDateSelect( $(this).previous(), {popup:&#39;force&#39;, year_range:[1997, 2017]} );" src="../images/calendar_date_select/calendar.gif" style="border:0px; cursor:pointer;">
        </div>
      </div>
<?php /*?><?php echo $newEndingDate = date("M-d-Y", strtotime(date("Y-m-d", strtotime($startDate)) . " + 1 year"));?><?php */?>
      <div class="label-field-pair">
        <label for="configuration_currency_type">Finance year end date</label>
        <div class="text-input-bg">
          <input id="configuration_financial_year_end_date" name="configuration_financial_year_end_date" readonly="readonly" type="text" value="<?=date("M-d-Y", strtotime($record[session_end]))?>"> <img alt="Calendar" class="calendar_date_select_popup_icon" onClick="new CalendarDateSelect( $(this).previous(), {popup:&#39;force&#39;, year_range:[1997, 2017]} );" src="../images/calendar_date_select/calendar.gif" style="border:0px; cursor:pointer;">
        </div>
      </div>

      <!--<div class="label-field-pair">
        <label for="configuration_student_attendance_type">Language </label>
        <div class="text-input-bg">
          <select id="configuration_locale" name="configuration_locale"><option value="de">Deutsch</option>
<option value="en" selected="selected">English</option>
<option value="es">Español</option>
<option value="pt">português</option>
<option value="ar">العربية</option>
<option value="mr">मराठी</option>
<option value="hi">हिंदी</option>
<option value="ja">日本の</option></select>
        </div>
      </div>

      <div class="label-field-pair">
        <label for="configuration_currency_type">Currency Type</label>
        <div class="text-input-bg">
          <input id="configuration_currency_type" name="configuration[currency_type]" size="30" type="text" value="$">
        </div>
      </div>
      <div class="label-field-pair">
        <label for="configuration_currency_type">Upload Logo</label>
        <div class="text-input-bg">
          <input id="school_detail_school_logo" name="school_detail[school_logo]" size="12" type="file">
        </div>
      </div>
      <div class="label-field-pair">
        <label for="configuration_currency_type">Network State</label>
        <div class="text-input-bg">
          <select id="configuration_network_state" name="configuration[network_state]"><option value="Online" selected="selected">Online</option>
<option value="Offline">Offline</option></select>
        </div>
      </div>
      <div class="grades">
        <div class="label-field-pair">
          <label for="configuration_grading_systems">Include Grading Systems</label>
        </div>
        <div class="fee_category_scroll">
          <div class="sel-list">
            Select: <a href="http://demo.fedena.org/configuration/settings#" onClick="$$(&#39;input.batches_box&#39;).each(function(checkbox) { checkbox.checked = true; });; return false;">All</a>,
            <a href="http://demo.fedena.org/configuration/settings#" onClick="$$(&#39;input.batches_box&#39;).each(function(checkbox) { checkbox.checked = false; });; return false;">None</a>
          </div>
          
            <div class="each_batch">
              <input name="configuration[cce]" type="hidden" value="0"><input checked="checked" class="batches_box" id="configuration_cce" name="configuration[cce]" type="checkbox" value="1"> <label for="configuration_cce">CCE</label>
            </div>
          
            <div class="each_batch">
              <input name="configuration[cwa]" type="hidden" value="0"><input class="batches_box" id="configuration_cwa" name="configuration[cwa]" type="checkbox" value="1"> <label for="configuration_cwa">CWA</label>
            </div>
          
            <div class="each_batch">
              <input name="configuration[gpa]" type="hidden" value="0"><input class="batches_box" id="configuration_gpa" name="configuration[gpa]" type="checkbox" value="1"> <label for="configuration_gpa">GPA</label>
            </div>
                           
        </div>
      </div>

      
        <div class="label-field-pair">
  <label for="configuration_currency_type">Moodle URL (eg: http://domain.com/moodle)</label>
  <div class="text-input-bg">
    <input id="configuration_moodle_url" name="configuration[moodle_url]" size="30" type="text" value="">
  </div>
</div>
      

      <div class="extender"></div>
      <br>
      
        <input name="configuration[admission_number_auto_increment]" type="hidden" value="0"><input checked="checked" id="configuration_admission_number_auto_increment" name="configuration[admission_number_auto_increment]" type="checkbox" value="1">Enable Auto increment Student admission no.
      
      <br>
      
        
          <input name="configuration[employee_number_auto_increment]" type="hidden" value="0"><input checked="checked" id="configuration_employee_number_auto_increment" name="configuration[employee_number_auto_increment]" type="checkbox" value="1"> Enable Auto increment Employee no. 
        
      
      <br>
      
        <input name="configuration[enable_news_comment_moderation]" type="hidden" value="0"><input id="configuration_enable_news_comment_moderation" name="configuration[enable_news_comment_moderation]" type="checkbox" value="1">Enable News Comment Moderation
      
   -->   
      <div id="submit-button">
        <input name="addNew_bt" type="submit" value="► Update">
      </div>
<div id="message"><div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div></div>
    

  </div></form>
</div>
 </div>

      <div class="extender">  </div>
    </div>
 <!-- footer -->
  <?php include("include/footer.php")?>
 