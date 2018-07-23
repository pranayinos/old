<?php 
//Department table be used
$emp_dept = new Main(); 
$newsRecordSet = $emp_dept->getdata('*',"emp_dept","","dept_code DESC", "50");
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/advanced_search.css" media="screen" rel="stylesheet" type="text/css">
 <!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
  <?php /*?> <?php include("include/sidebar5.php")?><?php */?>
           
      <!-- end of side bar -->
      
      <div id="content"> 
<div id="content-header">
  <img alt="Show_hr" src="../images/HR/show_hr.png">
  <h1>Employee</h1>
  <h3>Advanced Search</h3>
  <div id="app-back-button">
    <a href="/employee/advanced_search#" onclick="history.back(); return false;">
    <img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>
<div id="page-yield">

  <div id="search-form">
    <form action="#" method="get"><div><input id="search_order" name="search[order]" type="hidden"></div>
      <div class="label-field-pair">
        <label for="name">Name</label>
        <div class="text-input-bg">
          <input id="search_first_name_or_middle_name_or_last_name_like" name="search[first_name_or_middle_name_or_last_name_like]" size="30" type="text">
        </div>
      </div>
      <div class="label-field-pair">
        <label for="student_admission_no">Employee Number</label>
        <div class="text-input-bg">
          <input id="search_employee_number_equals" name="search[employee_number_equals]" size="30" type="text">
        </div>
      </div>
      <div class="label_field_pair">
        <label class="label_for_student">Gender</label>
        <div class="student_gender_value">
          <label class="label_for_gender">All</label>
          <input checked="checked" id="search_gender_equals_" name="search[gender_equals]" type="radio" value="">
          <label class="label_for_gender">Male</label>
          <input id="search_gender_equals_m" name="search[gender_equals]" type="radio" value="m">
          <label class="label_for_gender">Female</label>
          <input id="search_gender_equals_f" name="search[gender_equals]" type="radio" value="f">
        </div>
      </div>
      <div class="label-field-pair">
        <label for="student_admission_no">Blood Group</label>
        <div class="text-input-bg">
          <select id="search_blood_group_like" name="search[blood_group_like]"><option value="">Select</option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option></select>
        </div>
      </div>

      <div class="label-field-pair">
        <label for="student_admission_no">Marital Status</label>
        <div class="text-input-bg">
          <select id="search_marital_status_like" name="search[marital_status_like]"><option value="">Select</option>
<option value="single">Single</option>
<option value="married">Married</option>
<option value="divorced">Divorced</option></select>
        </div>
      </div>
      <div class="label-field-pair">
        <label for="student_admission_no">Country</label>
        <div class="text-input-bg">
          <select id="search_nationality_id_equals" name="search[nationality_id_equals]"><option value="">Select</option>
<option value="1">Afghanistan</option>
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
<option value="75">Iceland</option>
<option value="76">India</option>
<option value="77">Indonesia</option>
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
<option value="195">Zimbabwe</option></select>
        </div>
      </div>
      <div class="label-field-pair">
        <label for="student_admission_no">Category</label>
        <div class="text-input-bg">
          <select id="search_employee_category_id_equals" name="search[employee_category_id_equals]"><option value="">Select</option>
<option value="1">Fedena Admin</option>
<option value="2">Teaching staff</option>
<option value="3">Non-Teaching staff</option>
<option value="6">Security</option>
<option value="8">Lab Staff</option>
<option value="11">kandy</option></select>
        </div>
      </div>
      <div class="label-field-pair">
        <label for="student_admission_no">Department</label>
        <div class="text-input-bg">
          <select id="search_employee_department_id_equals" name="search[employee_department_id_equals]"><option value="">Select</option>
<option value="1">Fedena Admin</option>
<option value="2">Maths</option>
<option value="3">English</option>
<option value="4">Language</option>
<option value="7">Hindi</option>
<option value="8">Test 1</option>
<option value="10">Science</option>
<option value="11">Social</option>
<option value="12">Test 4</option>
<option value="13">communication</option>
<option value="14">commu</option>
<option value="15">Physical education</option>
<option value="16">sasank</option></select>
        </div>
      </div>
      <div class="label-field-pair">
        <label for="student_admission_no">Position</label>
        <div class="text-input-bg">
          <select id="search_employee_position_id_equals" name="search[employee_position_id_equals]"><option value="">Select</option>
<option value="1">Fedena Admin</option>
<option value="2">Finance Manager</option>
<option value="3">HR manager</option>
<option value="4">Teacher</option>
<option value="5">Watchman</option>
<option value="6">Lab Assistant</option>
<option value="8">Lecturer</option>
<option value="9">prime</option>
<option value="10">mandan</option></select>
        </div>
      </div>
      <div class="label-field-pair">
        <label for="student_admission_no">Grade</label>
        <div class="text-input-bg">
          <select id="search_employee_grade_id_equals" name="search[employee_grade_id_equals]"><option value="">Select</option>
<option value="1">Fedena Admin</option>
<option value="2">A</option>
<option value="5">D</option>
<option value="6">C</option>
<option value="7">B</option>
<option value="8">g</option></select>
        </div>
      </div>

      <div class="label-field-pair">
        <label for="student_admission_no">Joining date
          <img align="absmiddle" alt="Loader" border="0" id="loader" src="file:///C|/Documents and Settings/Administrator/Desktop/advance_files/loader.gif" style="display: none;">
        </label>
        <div class="text-input-bg">
          <select id="adv_search_doj_option" name="adv_search[doj_option]" onchange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/employee/list_doj_year&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;doj_option=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;vVZvrA03/e9HcNeFwdks+4iFUL6BCWGJYEBigAzbCeQ=&#39;)})"><option value="">choose your option</option>
<option value="equal_to">equal to</option>
<option value="less_than">less than</option>
<option value="greater_than">greater than</option></select>
          <div id="doj_year">
            <select id="adv_search_doj_year" name="adv_search[doj_year]"><option value="">Select</option>
</select>
          </div>
          <div id="doj_year_hidden"></div>
        </div>
      </div>
      <div class="label-field-pair">
        <label for="student_admission_no">Date of Birth
          <img align="absmiddle" alt="Loader" border="0" id="loader" src="file:///C|/Documents and Settings/Administrator/Desktop/advance_files/loader.gif" style="display: none;">
        </label>
        <div class="text-input-bg">
          <select id="adv_search_dob_option" name="adv_search[dob_option]" onchange="Element.show(&#39;loader&#39;); new Ajax.Request(&#39;/employee/list_dob_year&#39;, {asynchronous:true, evalScripts:true, onSuccess:function(request){Element.hide(&#39;loader&#39;)}, parameters:&#39;dob_option=&#39;+value + &#39;&amp;authenticity_token=&#39; + encodeURIComponent(&#39;vVZvrA03/e9HcNeFwdks+4iFUL6BCWGJYEBigAzbCeQ=&#39;)})"><option value="">choose your option</option>
<option value="equal_to">equal to</option>
<option value="less_than">less than</option>
<option value="greater_than">greater than</option></select>
          <div id="dob_year">
            <select id="adv_search_dob_year" name="adv_search[dob_year]"><option value="">Select</option>
</select>
          </div>
          <div id="dob_year_hidden"></div>
        </div>
      </div>
      <div class="label_field_pair">
        <label class="label_for_student" for="student_gender">Status</label>
        <div class="student_gender_value">
          <label class="label_for_gender" for="student_gender_true">Present</label>
          <input id="search_status_equals_true" name="search[status_equals]" type="radio" value="true">
          <label class="label_for_gender" for="student_gender_false">Former</label>
          <input id="search_status_equals_false" name="search[status_equals]" type="radio" value="false">
          <label class="label_for_gender" for="student_gender_false">All</label>
          <input checked="checked" id="search_status_equals_" name="search[status_equals]" type="radio" value="">
        </div>
      </div>


      <input class="submit" id="search_submit" name="commit" type="submit" value="Search">
    </form>
  </div>



  
</div> </div>

       <div class="extender"></div>
    </div>


  <?php include("include/footer.php")?>
           