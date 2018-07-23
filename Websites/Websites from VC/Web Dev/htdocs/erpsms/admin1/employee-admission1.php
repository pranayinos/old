<?php 
//Department  table be used
$emp_dept = new Main(); 
$newsRecordSet1 = $emp_dept->getdata('*',"emp_dept","","dept_code DESC", "50");
//Employee category table be used
$emp_category = new Main(); 
$newsRecordSet2 = $emp_category->getdata('*',"emp_category","","emp_cat_id DESC", "50");                    
//Employee postion
$emp_position = new Main(); 
$newsRecordSet3 = $emp_position->getdata('*',"emp_position","","emp_posn DESC", "50");
//Grade table be used
$emp_grade = new Main(); 
$newsRecordSet4 = $emp_grade->getdata('*',"emp_grade","","grade_name DESC", "50");
// Employee Admission 
$emp = new Main(); 
$newsRecordSet = $emp->getdata('*',"emp","","emp_no DESC", "50");  

/********  Select Employee  no and Increse employee number *******************************************/
$admno = $emp->getdata('MAX(emp_no) AS employee_employee_number',"emp","","","");// select Addmission  no
if ( ($rollrow = $admno->getNextRecord()) !== false )
 	$roll=$rollrow['employee_employee_number']+1;
/*****************End Employee no code **************************************************************/	
//INSERT CODE IMPLEMENT 
  
 	if(isset($_POST['commit'])) // If the submit button was clicked
   	 {
      // employee admission 5 OCT 2012
			   $cols['emp_join_date'] =date(("Y-m-d"), strtotime($_POST['employee_joining_date']));
			   $cols['emp_first_name'] =$_POST['employee_first_name'];
			   $cols['emp_mid_name'] =$_POST['employee_middle_name'];
			   $cols['emp_last_name'] =$_POST['employee_last_name'];
			   $cols['emp_email'] =$_POST['employee_email'];
			   $cols['emp_gender'] =$_POST['employee_gender'];
			   $cols['emp_dob'] =date(("Y-m-d"), strtotime($_POST['employee_date_of_birth']));
			   $cols['emp_dept_code'] =$_POST['employee_employee_department_id'];
			   $cols['emp_cat_type'] =$_POST['employee_employee_category_id'];
			   $cols['emp_cat_posn'] =$_POST['employee_employee_position_id'];
			   $cols['emp_grade'] =$_POST['employee_employee_grade_id'];
			   $cols['emp_job_title'] =$_POST['employee_job_title'];
			   $cols['emp_qualification'] =$_POST['employee_qualification'];
			   $cols['emp_exp_info'] =$_POST['employee_experience_detail'];
			   $cols['emp_total_exp_yr'] =$_POST['employee_experience_year'].' Year  '.$_POST['employee_experience_month'].' Month';
			   $cols['emp_status'] =$_POST['employee_status'];
			   $cols['emp_marital_status'] =$_POST['employee_marital_status'];
			   $cols['emp_children'] =$_POST['employee_children_count'];
			   $cols['emp_father_name'] =$_POST['employee_father_name'];
			   $cols['emp_mother_name'] =$_POST['employee_mother_name'];
			   $cols['emp_spouse_name'] =$_POST['emp_spouse_name'];
			   $cols['emp_bld_grp'] =$_POST['employee_blood_group'];
			   $cols['emp_natn'] =$_POST['employee_nationality_id'];
			  // $cols['emp_photo_ind'] =$_POST['employee_photo'];
			  
			  
		  if($emp->Inserttable($cols,"emp"))
           {
				$msg="News Employee Added Succesfully";
				header("location:?page=employee-admission1&msg=$msg");			
		   }
		   else
		   {
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=employee-admission1&error=$msg");
		   }		
	 }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/employee-admission1.css" media="screen" rel="stylesheet" type="text/css">

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
      <div id="full+content"> 

<div id="content-header">
  <img alt="Show_hr" src="../images/HR/show_hr.png">
  <h1>Employee admission</h1>
  <h3>Step - 1</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<!-- Insert the msg code ------------------------------------>
    <div class="msg"><?php echo $_GET[msg]?></div>
    <div class="error"><?php echo $_GET[error]?></div>
<!-- End the msg code --------------------------------------->
<div id="page-yield">
  
  
    <p class="flash-msg">Employee number of last employee is E5</p>
  

  <form action="" enctype="multipart/form-data" method="post"><div style="margin:0;padding:0;display:inline">
  <input name="authenticity_token" type="hidden" value=""></div>
    
    <div id="admission1_form">

      <div id="necessary-field-notification"> Fields marked with <span class="necessary-field">*</span> must be filled.</div>
      <br /><br /> <br /><br /><span class="span-sub-heading">General Details</span>
      <hr class="sub-heading">
      <div class="label-field-pair">
        <label for="employee_id">Employee Number<span class="necessary-field">*</span> </label>
        <div class="text-input-bg">
          <?php $rollprefix="E" ?>
            <input id="employee_employee_number" name="employee_employee_number" size="30" type="text" value="<?=$rollprefix.$roll?>" readonly="readonly">
          </div>
      </div>
       <!--<hr class="label-underline">-->

      <div class="label-field-pair">
        <label for="employee_joining_date">Joining date</label>
        <div class="text-input-bg"><input id="employee_joining_date" name="employee_joining_date" readonly="readonly" type="text"> <img alt="Calendar" class="calendar_date_select_popup_icon" onClick="new CalendarDateSelect( $(this).previous(), {popup:&#39;force&#39;, year_range:[1987, 2012]} );" src="../images/calendar_date_select/calendar.gif" style="border:0px; cursor:pointer;"></div>
      </div>
       <!-- <hr class="label-underline">-->
     <div class="label-field-pair">
        <label for="employee_name">First Name<span class="necessary-field">*</span> </label>
        <div class="text-input-bg"><input id="employee_first_name" name="employee_first_name" size="30" type="text"></div>
      </div>
         <!-- <hr class="label-underline">-->
       <div class="label-field-pair">
        <label for="employee_name">Middle Name</label>
        <div class="text-input-bg"><input id="employee_middle_name" name="employee_middle_name" size="30" type="text"></div>
      </div>
         <!-- <hr class="label-underline">-->
       <div class="label-field-pair">
        <label for="employee_name">Last Name</label>
        <div class="text-input-bg"><input id="employee_last_name" name="employee_last_name" size="30" type="text"></div>
      </div>
         <!-- <hr class="label-underline">-->
       <div class="label-field-pair">
        <label>Email</label>
        <div class="text-input-bg"><input id="employee_email" name="employee_email" size="30" type="text"></div>
        <div class="extender"></div>
      </div>
         <!-- <hr class="label-underline">-->
       <div class="label_field_pair">
        <label class="label_for_employee_gender" for="master_student_gender">Gender</label>
        <div class="employee_gender_value">
          <label class="label_for_gender" for="master_student_gender_true">Male</label>
          <input checked="checked" id="employee_gender" name="employee_gender" type="radio" value="1">
		  <label class="label_for_gender" for="master_student_gender_false">Female</label>
          <input id="employee_gender" name="employee_gender" type="radio" value="0">
        </div>
      </div>
         <!-- <hr class="label-underline">-->
       <div class="label-field-pair">
        <label for="dob">Date of Birth<span class="necessary-field">*</span></label>
        <div class="text-input-bg"><input id="employee_date_of_birth" name="employee_date_of_birth" readonly="readonly" type="text" value=""> <img alt="Calendar" class="calendar_date_select_popup_icon" onClick="new CalendarDateSelect( $(this).previous(), {popup:&#39;force&#39;, year_range:[1947, 2012]} );" src="../images/calendar_date_select/calendar.gif" style="border:0px; cursor:pointer;"></div>
      </div>
       <!--  <!-- <hr class="label-underline">-->
       <div class="label-field-pair">
        <label for="employee_department">Department <span class="necessary-field">*</span></label>
        <div class="text-input-bg"><select id="employee_employee_department_id" name="employee_employee_department_id">
            <option value="">Select</option>
             <?php 
 while( ($record = $newsRecordSet1->getNextRecord()) !== false )
    { 
?>
     
<option value="<?=$record['dept_code']?>"><?=$record['dept_desc']?> </option>
<?php }?>
            </select>
            </div>
      </div>
       <!--  <!-- <hr class="label-underline">-->

      <div class="label-field-pair">
        <label for="employee_category">Category<span class="necessary-field">*</span> </label>
        <div class="text-input-bg"><select id="employee_employee_category_id" name="employee_employee_category_id" onChange="new Ajax.Request(&#39;/employee/update_positions&#39;, {asynchronous:true, evalScripts:true, parameters:&#39;category_id=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;JipL4+8ByrduGtXLkMOP/8nlXryeWMfTgndVfB7AK60=&#39;)})">
<option value="">Select</option>
  <?php 
 while( ($record = $newsRecordSet2->getNextRecord()) !== false )
    { 
?>
     
<option value="<?=$record['emp_cat_id']?>"><?=$record['emp_cat_type']?> </option>
<?php }?>
            </select>
</select></div>
      </div>
       <!--  <!-- <hr class="label-underline">-->
      <div class="label-field-pair">
        <label for="employee_position">Position <span class="necessary-field">*</span></label>
        <div class="text-input-bg"><div id="positions1"> 

<select id="employee_employee_position_id" name="employee_employee_position_id">
<option value="">Select</option>
 <?php 
 while( ($record = $newsRecordSet3->getNextRecord()) !== false )
    { 
?>
     
<option value="<?=$record['emp_posn_id']?>"><?=$record['emp_posn']?> </option>
<?php }?>
            </select>
</div></div>
      </div>
       <!-- <hr class="label-underline">-->
      <div class="label-field-pair">
        <label for="employee_grade">Grade</label>
        <div class="text-input-bg"><select id="employee_employee_grade_id" name="employee_employee_grade_id">
<option value="">Select</option>
<?php 
 while( ($record = $newsRecordSet4->getNextRecord()) !== false )
    { 
?>
     
<option value="<?=$record['grade_id']?>"><?=$record['grade_name']?> </option>
<?php }?>
</select></div>
      </div>
       <!-- <hr class="label-underline">-->
      <div class="label-field-pair">
        <label for="employee_job_title">Job Title</label>
        <div class="text-input-bg"><input id="employee_job_title" name="employee_job_title" size="30" type="text"></div>
      </div>
       <!-- <hr class="label-underline">-->
      <div class="label-field-pair">
        <label for="employee_qualification">Qualification</label>
        <div class="text-input-bg"><input id="employee_qualification" name="employee_qualification" size="30" type="text"></div>
      </div>
       <!-- <hr class="label-underline">-->
      <div class="label-field-pair-text-area">
        <label for="employee_experience"> Experience Info</label>
        <div class="textarea-input-bg"><textarea class="admission1-textarea" cols="27" id="employee_experience_detail" name="employee_experience_detail" rows="5"></textarea></div>
      </div>
       <!-- <hr class="label-underline">-->
      <div class="label-field-pair">
        <label for="employee_total-experience">Total Experience</label>
        <div class="text-input-bg"><select id="employee_experience_year" name="employee_experience_year"><option value="">Year</option>
<option value="0">0</option>
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
<option value="20">20</option></select>
          <select id="employee_experience_month" name="employee_experience_month"><option value="">Month</option>
<option value="0">0</option>
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
<option value="11">11</option></select></div>
      </div>
       <!-- <hr class="label-underline">-->
       <div class="label_field_pair">
        <label class="employee_status" for="employee_status">Status</label>

        <label class="label_for_status" for="employee_status_true">Active</label>
        <input checked="checked" id="employee_status" name="employee_status" type="radio" value="true">

        <label class="label_for_status" for="employee_status_false">Inactive</label>
        <input id="employee_status" name="employee_status" type="radio" value="false">
        
      </div>

     <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <span class="span-sub-heading">Personal Details</span>
      <hr class="sub-heading">
      <div class="label-field-pair">
        <label for="employee_martial_status">Marital Status</label>
        <div class="text-input-bg"><select id="employee_marital_status" name="employee_marital_status" onChange="hide_or_show_fields(this.value)"><option value="single">Single</option>
<option value="married">Married</option>
<option value="divorced">Divorced</option></select></div>
      </div>
       <!-- <hr class="label-underline">-->
      <div class="label-field-pair hide-on-single" style="display: none; ">
        <label for="children_count">No of children</label>
        <div class="text-input-bg"><input id="employee_children_count" name="employee_children_count" size="30" type="text"></div>
      </div>
      <hr class="label-underline hide-on-single" style="display: none; ">
      <div class="label-field-pair">
        <label for="employee_father">Father Name</label>
        <div class="text-input-bg"><input id="employee_father_name" name="employee_father_name" size="30" type="text"></div>
      </div>
       <!-- <hr class="label-underline">-->
      <div class="label-field-pair">
        <label for="employee_mother">Mother Name</label>
        <div class="text-input-bg"><input id="employee_mother_name" name="employee_mother_name" size="30" type="text"></div>
      </div>
       <!-- <hr class="label-underline">-->
      <div class="label-field-pair hide-on-single" style="display: none; ">
        <label for="employee_spouse">Spouse name</label>
        <div class="text-input-bg"><input id="employee_husband_name" name="employee_husband_name" size="30" type="text"></div>
      </div>
      <hr class="label-underline hide-on-single" style="display: none; ">
      <div class="label-field-pair">
        <label for="employee_blood">Blood Group</label>
        <div class="text-input-bg"><select id="employee_blood_group" name="employee_blood_group"><option value="Unknown">Unknown</option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option></select></div>
      </div>
       <!-- <hr class="label-underline">-->
      <div class="label-field-pair">
        <label for="employee_nationality">Nationality</label>
        <div class="text-input-bg"><select id="employee_nationality_id" name="employee_nationality_id">
<!--<option value="1">Afghanistan</option>
<option value="2">Albania</option>
<option value="3">Algeria</option>
<option value="4">Andorra</option>
<option value="5">Angola</option>
<option value="6">Antigua &amp; Deps</option>
<option value="7">Argentina</option>
<option value="8">Armenia</option>
<option value="9">Australia</option>
<option value="10">Austria</option>
<option value="11">Azerbaijan</option>
<option value="12">Bahamas</option>
<option value="13">Bahrain</option>
<option value="14">Bangladesh</option>
<option value="15">Barbados</option>
<option value="16">Belarus</option>
<option value="17">Belgium</option>
<option value="18">Belize</option>
<option value="19">Benin</option>
<option value="20">Bhutan</option>
<option value="21">Bolivia</option>
<option value="22">Bosnia Herzegovina</option>
<option value="23">Botswana</option>
<option value="24">Brazil</option>
<option value="25">Brunei</option>
<option value="26">Bulgaria</option>
<option value="27">Burkina</option>
<option value="28">Burundi</option>
<option value="29">Cambodia</option>
<option value="30">Cameroon</option>
<option value="31">Canada</option>
<option value="32">Cape Verde</option>
<option value="33">Central African Rep</option>
<option value="34">Chad</option>
<option value="35">Chile</option>
<option value="36">China</option>
<option value="37">Colombia</option>
<option value="38">Comoros</option>
<option value="39">Congo</option>
<option value="40">Congo {Democratic Rep}</option>
<option value="41">Costa Rica</option>
<option value="42">Croatia</option>
<option value="43">Cuba</option>
<option value="44">Cyprus</option>
<option value="45">Czech Republic</option>
<option value="46">Denmark</option>
<option value="47">Djibouti</option>
<option value="48">Dominica</option>
<option value="49">Dominican Republic</option>
<option value="50">East Timor</option>
<option value="51">Ecuador</option>
<option value="52">Egypt</option>
<option value="53">El Salvador</option>
<option value="54">Equatorial Guinea</option>
<option value="55">Eritrea</option>
<option value="56">Estonia</option>
<option value="57">Ethiopia</option>
<option value="58">Fiji</option>
<option value="59">Finland</option>
<option value="60">France</option>
<option value="61">Gabon</option>
<option value="62">Gambia</option>
<option value="63">Georgia</option>
<option value="64">Germany</option>
<option value="65">Ghana</option>
<option value="66">Greece</option>
<option value="67">Grenada</option>
<option value="68">Guatemala</option>
<option value="69">Guinea</option>
<option value="70">Guinea-Bissau</option>
<option value="71">Guyana</option>
<option value="72">Haiti</option>
<option value="73">Honduras</option>
<option value="74">Hungary</option>
<option value="75">Iceland</option>-->
<option value="India" selected="selected">India</option>
<!--<option value="77">Indonesia</option>
<option value="78">Iran</option>
<option value="79">Iraq</option>
<option value="80">Ireland {Republic}</option>
<option value="81">Israel</option>
<option value="82">Italy</option>
<option value="83">Ivory Coast</option>
<option value="84">Jamaica</option>
<option value="85">Japan</option>
<option value="86">Jordan</option>
<option value="87">Kazakhstan</option>
<option value="88">Kenya</option>
<option value="89">Kiribati</option>
<option value="90">Korea North</option>
<option value="91">Korea South</option>
<option value="92">Kosovo</option>
<option value="93">Kuwait</option>
<option value="94">Kyrgyzstan</option>
<option value="95">Laos</option>
<option value="96">Latvia</option>
<option value="97">Lebanon</option>
<option value="98">Lesotho</option>
<option value="99">Liberia</option>
<option value="100">Libya</option>
<option value="101">Liechtenstein</option>
<option value="102">Lithuania</option>
<option value="103">Luxembourg</option>
<option value="104">Macedonia</option>
<option value="105">Madagascar</option>
<option value="106">Malawi</option>
<option value="107">Malaysia</option>
<option value="108">Maldives</option>
<option value="109">Mali</option>
<option value="110">Malta</option>
<option value="111">Montenegro</option>
<option value="112">Marshall Islands</option>
<option value="113">Mauritania</option>
<option value="114">Mauritius</option>
<option value="115">Mexico</option>
<option value="116">Micronesia</option>
<option value="117">Moldova</option>
<option value="118">Monaco</option>
<option value="119">Mongolia</option>
<option value="120">Morocco</option>
<option value="121">Mozambique</option>
<option value="122">Myanmar, {Burma}</option>
<option value="123">Namibia</option>
<option value="124">Nauru</option>
<option value="125">Nepal</option>
<option value="126">Netherlands</option>
<option value="127">New Zealand</option>
<option value="128">Nicaragua</option>
<option value="129">Niger</option>
<option value="130">Nigeria</option>
<option value="131">Norway</option>
<option value="132">Oman</option>
<option value="133">Pakistan</option>
<option value="134">Palau</option>
<option value="135">Panama</option>
<option value="136">Papua New Guinea</option>
<option value="137">Paraguay</option>
<option value="138">Peru</option>
<option value="139">Philippines</option>
<option value="140">Poland</option>
<option value="141">Portugal</option>
<option value="142">Qatar</option>
<option value="143">Romania</option>
<option value="144">Russian Federation</option>
<option value="145">Rwanda</option>
<option value="146">St Kitts &amp; Nevis</option>
<option value="147">St Lucia</option>
<option value="148">Saint Vincent &amp; the Grenadines</option>
<option value="149">Samoa</option>
<option value="150">San Marino</option>
<option value="151">Sao Tome &amp; Principe</option>
<option value="152">Saudi Arabia</option>
<option value="153">Senegal</option>
<option value="154">Serbia</option>
<option value="155">Seychelles</option>
<option value="156">Sierra Leone</option>
<option value="157">Singapore</option>
<option value="158">Slovakia</option>
<option value="159">Slovenia</option>
<option value="160">Solomon Islands</option>
<option value="161">Somalia</option>
<option value="162">South Africa</option>
<option value="163">Spain</option>
<option value="164">Sri Lanka</option>
<option value="165">Sudan</option>
<option value="166">Suriname</option>
<option value="167">Swaziland</option>
<option value="168">Sweden</option>
<option value="169">Switzerland</option>
<option value="170">Syria</option>
<option value="171">Taiwan</option>
<option value="172">Tajikistan</option>
<option value="173">Tanzania</option>
<option value="174">Thailand</option>
<option value="175">Togo</option>
<option value="176">Tonga</option>
<option value="177">Trinidad &amp; Tobago</option>
<option value="178">Tunisia</option>
<option value="179">Turkey</option>
<option value="180">Turkmenistan</option>
<option value="181">Tuvalu</option>
<option value="182">Uganda</option>
<option value="183">Ukraine</option>
<option value="184">United Arab Emirates</option>
<option value="185">United Kingdom</option>
<option value="186">United States</option>
<option value="187">Uruguay</option>
<option value="188">Uzbekistan</option>
<option value="189">Vanuatu</option>
<option value="190">Vatican City</option>
<option value="191">Venezuea</option>
<option value="192">Vietnam</option>
<option value="193">Yemen</option>
<option value="194">Zambia</option>
<option value="195">Zimbabwe</option>--></select></div>
      </div>
       <!-- <hr class="label-underline">-->
      <script>
        (function($){$.fn.filestyle=function(options){var settings={width:250};if(options){$.extend(settings,options);};return this.each(function(){var self=this;var wrapper=$("<div>").css({"width":settings.imagewidth+"px","height":settings.imageheight+"px","background":"url("+settings.image+") 0 0 no-repeat","background-position":"right","display":"inline","position":"absolute","overflow":"hidden"});var filename=$('<input class="file">').addClass($(self).attr("class")).css({"display":"inline","width":settings.width+"px"});$(self).before(filename);$(self).wrap(wrapper);$(self).css({"position":"relative","height":settings.imageheight+"px","width":settings.width+"px","display":"inline","cursor":"pointer","opacity":"0.0"});if($.browser.mozilla){if(/Win/.test(navigator.platform)){$(self).css("margin-left","-142px");}else{$(self).css("margin-left","-168px");};}else{$(self).css("margin-left",settings.imagewidth-settings.width+"px");};$(self).bind("change",function(){filename.val($(self).val());});});};})(jQuery);
      </script>

      <div class="label-field-pair">
        <label for="master_student_image_file">Upload User Photo</label>
        <div class="text-input-bg"><input id="employee_photo" name="employee_photo" size="12" type="file"></div>

      </div>

    </div>

    <input class="submit_button" name="commit" type="submit" value="► Save &amp; Proceed">
  </form>

</div>

 </div>

      <div class="extender"></div>
    </div>

    <!-- footer -->
  <?php include("include/footer.php")?>