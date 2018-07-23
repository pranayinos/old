<?php
$student = new Main(); // create a new news object
	 $stud_registration = new Main();
	 $reg=$_GET[reg];
  
 	$field = $student->getdata('*',"stud_registration","std_reg_no='$reg'","", "");// set newsRecordSet to a 
	$field1 = $stud_registration->getdata('*',"stud_registration","","", "");// set newsRecordSet to a 
	$record = $field->getNextRecord();
	$catlist = $student->getdata('*',"category","","cat_id DESC", "50"); // Category 
$newsRecordSet = $student->getdata('batch.batch_id,batch.batch_code,batch.batch_time,batch.session,course.course_name,course.course_section_name',"course,batch","course.course_code = batch.batch_course_code","course_name ASC","");// Course




if($reg!="")
{
 
 echo ' <div class="student_admission_date">
          <label for="student_admission_date">Admission Date <span class="necessary-field">*</span> </label>
          <div class="text-input-bg-admission">
                    <input id="std_adm_date" name="std_adm_date" type="text" value=""> <img alt="Calendar" class="calendar_date_select_popup_icon" onClick="new CalendarDateSelect( $(this).previous(), {year_range:[1997, 2020]} );" src="./css/calendar.gif" style="border:0px; cursor:pointer;">
          </div>
        </div>

      </div>

         <div class="label-field-pair">
     <span class="span-sub-heading">Personal Details</span>
      <hr class="sub-heading">
      </div>

      <div class="label-field-pair">
        <label for="student_grade">First Name<span class="necessary-field">*</span> </label>
        <div class="text-input-bg">
  <input id="student_first_name" class="validate[required]  text-input" name="std_first_name"  size="30" type="text" title="" value='.$record [std_first_name].' />
        </div>
      </div>

      <div class="label-field-pair">
   		<label for="student_first_name">Middle Name<span class="necessary-field">*</span> </label>
        <div class="text-input-bg"><input id="student_middle_name" name="std_middle_name"    size="30" type="text" value='.$record [std_middle_name].'>
        </div>
      </div>

      <div class="label-field-pair">
        <label for="student_grade">Last Name<span class="necessary-field">*</span> </label>
        <div class="text-input-bg"><input id="student_last_name"  name="std_last_name"   size="30" type="text" title="" value='.$record [std_last_name].'>
        </div>
      </div>

      <div id="admission1_form_vertical_block_left">

        <div class="label-field-pair">
          <label for="student_grade">Course / batch <span class="necessary-field">*</span></label>
          <div class="text-input-bg">
          <select id="std_batch_code1" name="std_batch_code"  class="validate[required]" >
       
        <option value="">--Select--</option>';
             
 while( ($record1 = $newsRecordSet->getNextRecord()) !== false )
    { 

     
echo '<option value="'.$record1['batch_id'].'"> '.$record1['course_name'].' '.$record1['course_code'].' '.$record1['batch_code']." ".$record1['session'].' '.$record1['batch_time'].'</option>';
 }
      echo '    </select></div>
        </div>

       
        <div class="label-field-pair">
          <label for="student_date_of_birth">Date of Birth <span class="necessary-field">*</span> </label>
          <div class="text-input-bg">
            <input id="std_dob" name="std_dob" type="text"  value='.$record [std_dob].'> <img alt="Calendar" class="calendar_date_select_popup_icon" onClick="new CalendarDateSelect( $(this).previous(), {year_range:[1972, 2020]} );" src="css/calendar.gif" style="border:0px; cursor:pointer;">
          </div>
        </div>

        <div class="label_field_pair">
          <label class="label_for_student_gender" for="student_gender">Gender</label>
          <div class="student_gender_value">
            <label class="label_for_gender" for="student_gender_true"> Male</label>
            <input  id="student_gender_m" name="std_gender" type="radio" value="MALE" class="validate[required] radio">
            <label class="label_for_gender" for="student_gender_false">Female</label>
            <input id="student_gender_f" name="std_gender" type="radio" value="FEMALE" class="validate[required] radio">
          </div>
        </div>

        <div class="label-field-pair">
          <label class="label_for_student_gender" for="student_blood_group"></label>
          <div class="text-input-bg"></div>
        </div>

        <div class="label-field-pair">
          <label for="student_birth_place"><span class="label_for_student_gender">Blood Group</span></label>
          <div class="text-input-bg">
            <select id="std_blood_grp" name="std_blood_grp">
              <option value="">Unknown</option>
              <option value="A+">A+</option>
              <option value="A-">A-</option>
              <option value="B+">B+</option>
              <option value="B-">B-</option>
              <option value="O+">O+</option>
              <option value="O-">O-</option>
              <option value="AB+">AB+</option>
              <option value="AB-">AB-</option>
            </select>
            </div>
        </div>

        <div class="label-field-pair">
          <label for="student_birth_place">Birth Place</label>
          <div class="text-input-bg"><input id="std_birth_place"  name="std_birth_place" size="30" type="text" value='.$record [std_birth_place].'></div>
        </div>

        <div class="label-field-pair">
          <label for="student_nationality">Nationality</label>
          <div class="text-input-bg">
            <select id="std_nationality" name="std_nationality">
        <!--    <option value="1">Afghanistan</option>
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
-->
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
<option value="195">Zimbabwe</option>--></select>
          </div>
        </div>

        <div class="label-field-pair">
          <label for="student_birth_place">Mother Tongue</label>
          <div class="text-input-bg"><input id="std_mother_tng" name="std_mother_tng"  size="30" type="text" value='.$record [std_mother_tng].'></div>
        </div>

        <div class="label-field-pair">
        
         <label for="student_first_name">Category</label>
         <!-- <label for="student_category">Category</label>-->
        
          <div class="text-input-bg"><select id="std_category" name="std_category" title="Select Catagory Name" ><option value=""  selected="selected" >Select a Category</option>';
	
    while( ($catrecord = $catlist->getNextRecord()) !== false )
    { 
    
    echo '<option value="'.$catrecord['cat_id'].'"> '.$catrecord['category_description'].'</option>';
	}
	echo '</select><label id="err5">*</label>
</div>
        </div>

        <div class="label-field-pair">
          <label for="student_religion">Religion</label>
          <div class="text-input-bg"><input id="std_relgn" name="std_relgn"   size="30" type="text" value='.$record [std_relgn].'></div>
        </div>

      </div>

     <div class="label-field-pair">
     <span class="span-sub-heading">CONTACT Details</span>
      <hr class="sub-heading">
      </div>
      
        <div class="label-field-pair">
          <label for="student_city">Address Line1</label>
          <div class="text-input-bg"><input id="student_address_line1" name="std_add_1"  class="validate[required]  text-input"size="30" type="text"  value='.$record [std_add_1].'></div>
        </div>
        <div class="label-field-pair">
          <label for="student_city">Address Line2</label>
          <div class="text-input-bg"><input id="student_address_line2" name="std_add_2" size="30" type="text"  value='.$record [std_add_2].' ></div>
        </div>
        <div class="label-field-pair">
          <label for="student_city">City</label>
         <div class="text-input-bg"><input id="student_city" name="std_city" class="validate[required]  text-input" size="30" type="text" title="city where you live" value='.$record [std_city].'>
          <label id="err6"></label></div>
        </div>
        <div class="label-field-pair">
          <label for="student_state">State</label>
         <div class="text-input-bg"><input id="student_state" name="std_state" class="validate[required]  text-input" size="30" type="text" title="State where you live" value='.$record [std_state].'></div>
        </div>
        <div class="label-field-pair">
        <label for="student_pin_code">PIN code</label>
       <div class="text-input-bg"><input id="student_pin_code" name="std_pin" class="validate[required]  text-input" size="30" type="text" title="Pin code of your city" value='.$record [std_pin].'></div>
        </div>
        <div class="label-field-pair">
          <label for="student_country">Country</label>
          <div class="text-input-bg"> <select id="student_country_id" name="std_country">
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
<option value="195">Zimbabwe</option>--></select> </div>
        </div>

        <div class="label-field-pair">
          <label for="student_phone1">Phone</label>
          <div class="text-input-bg"><input id="student_phone1" name="std_phone" size="30" type="text" value='.$record [std_phone].'></div>
        </div>
        <div class="label-field-pair">
          <label for="student_phone2">Mobile</label>
          <div class="text-input-bg"><input id="student_phone2" name="std_mobile" size="30" type="text" 
          class="validate[required]  text-input" value='.$record [std_mobile].'></div>
        </div>
        <div class="label-field-pair">
       
          <label for="student_email">Email</label>
          <div class="text-input-bg"><input id="student_email" name="std_email" size="30" 
          type="text" value='.$record [std_email].' >
          </div>
        </div>
        
        <br>
      
         <div class="label-field-pair">
 <span class="span-sub-heading">Upload User Photo</span>
        <hr class="sub-heading">
      </div>
       
        <div class="label-field-pair">
          <label for="student_image_file">Upload User Photo (50KB max)</label>
          <div class="text-input-bg">
          <!--<input id="student_photo" name="std_photo_ind" size="12" type="file">-->
          <input id="file" name="file" size="12" type="file">
          </div>

        </div>
      </div>
      <div class="extender">

      </div>

  
      <input class="submit_button" name="addNew_bt" type="submit" title="submit form" value="► Save &amp; Proceed"  />';


}


//************************************************Test Report****************************************************************



$batch_id=$_GET[batch_id];

if($batch_id!="")
{
/*$newsRecord = $student->getdata('stud_id,std_reg_no,std_first_name,std_middle_name,std_last_name,std_batch_code',"stud_registration","std_batch_code = '$regbatch'and active=1","std_first_name ASC", "");*/
$newsRecord4 = $student->getdata('DISTINCT test_name,date',"test_record","batch_id =$batch_id and active=1 ","", "");

 
 

echo '  <select id="test_name" name="test_name" onChange=\'show2(this.value)\' />
       <option value="">Select Test Name </option>';
	   
/*$newsRecord = $student->getdata('*',"fees_master_category","fee_batch_id = '$discountbatch1'","", "");*/
	while(($record4 = $newsRecord4->getNextRecord()) !== false )
{
	//echo  $fee_pay_id=$stfeepayrecord['fee_pay_id'];
     $date=date(("d-m-Y"), strtotime($record4[date]));
echo '<option value="'.$record4[test_name].'"> '.$record4[test_name].'('.$date.')'.'</option>';
 }
echo '</select> ';
}









//************************************************Test Report****************************************************************


$test_name=$_GET[test_name];

if($test_name!="")
{
/*$newsRecord = $student->getdata('stud_id,std_reg_no,std_first_name,std_middle_name,std_last_name,std_batch_code',"stud_registration","std_batch_code = '$regbatch'and active=1","std_first_name ASC", "");*/
$newsRecord5 = $student->getdata('DISTINCT subject',"test_record","test_name ='$test_name'","", "");

 


echo '  <select id="subject" name="subject" onChange=\'show3(this.value)\' />
       <option value="">Select Department </option>';
	   
/*$newsRecord = $student->getdata('*',"fees_master_category","fee_batch_id = '$discountbatch1'","", "");*/
	while(($record5 = $newsRecord5->getNextRecord()) !== false )
{
	//echo  $fee_pay_id=$stfeepayrecord['fee_pay_id'];
     
echo '<option value="'.$record5[subject].'"> '.$record5[subject].'</option>';
 }
echo '</select> ';
}

//************************************************Test Report****************************************************************

$subject=$_GET[subject];
if($subject!="")
{
$newsRecord6 = $student->getdata('*',"test_record","subject ='$subject'","adm_no ASC", "");

 echo '
<table id="listing" width="100%" cellpadding="1" cellspacing="1">
  <tbody><tr class="tr-head">
  <td>SL.No</td>
      <td>Addmission Number</td>
    <td>Student Name</td>
    <td>Subject</td>
    <td>Marks</td>
   
    
    
    
  </tr>';
   $i=0;   
   while( ($record6 = $newsRecord6->getNextRecord()) !== false )
    { 
		$adm_no=$record6['adm_no'];
		$catRecordSet = $student->getdata('*',"student","std_adm_no='$adm_no'","", ""); //category
		$catrecord = $catRecordSet->getNextRecord();
	$i++;  
	  echo '
    <tr class="tr-odd ">
	   <td class="col-3">'.$i.'</td>
   
       <td class="col-3">'.$record6[adm_no].'</td>
        <td class="col-3">'.$catrecord[std_first_name].' '.$catrecord[std_middle_name].' '.$catrecord[std_last_name].'</td>
        <td class="col-1">'.$record6[subject].'</td>      
      <td class="col-1">'.$record6[marks].'</td>
      
      
        
    </tr>';
	}  
 echo '</tbody></table>
 
 <a href="?page=test_pdf_report&subject='.$subject.'" class="submit_button" target="blank">Report</a>';
   
}

//************************************************Test Report****************************************************************

?>