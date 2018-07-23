<?php 
//student table be used
$student = new Main(); 
$newsRecordSet = $student->getdata('*',"student","","id DESC", "1");
//gaurdian table be used
$gaurdian = new Main(); 
$newsRecordSet1=$gaurdian->getdata('*',"gaurdian","","g_id DESC", "50");

//INSERT CODE IMPLEMENT 
  
 	if(isset($_POST['commit'])) // If the submit button was clicked
   	 {
      // employee payslip implemented by 8 nov 2012
			    $cols['stud_id'] =$_POST['id'];
			    $cols['guard_first_name'] =$_POST['parent_detail_first_name'];
			    $cols['guard_last_name'] =$_POST['parent_detail_last_name'];
			    $cols['guard_rel'] =$_POST['parent_detail_relation'];
			    $cols['guard_dob'] =$_POST['parent_detail_dob'];
				$cols['guard_edu'] =$_POST['parent_detail_education'];
				$cols['guard_occu'] =$_POST['parent_detail_occupation'];
				$cols['guard_income'] =$_POST['parent_detail_income'];
			    $cols['guard_email'] =$_POST['parent_detail_email'];
			    $cols['guard_off_add1'] =$_POST['parent_detail_office_address_line1'];
				$cols['guard_off_add2'] =$_POST['parent_detail_office_address_line2'];
				$cols['guard_city'] =$_POST['parent_detail_city'];
				$cols['guard_state'] =$_POST['parent_detail_state'];
				$cols['guard_country'] =$_POST['parent_detail_country_id'];
				$cols['guard_off_ph1'] =$_POST['parent_detail_office_phone1'];
				$cols['guard_off_ph2'] =$_POST['parent_detail_office_phone2'];
				$cols['guard_mobile_no'] =$_POST['parent_detail_mobile_phone'];
			   
			  
		  if($gaurdian->Inserttable($cols,"gaurdian"))
           {
				$msg="New  Gaurdian Added Succesfully";
				header("location:?page=add_previous_data&msg=$msg");			
		   }
		   else
		   {
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=add_guardian&error=$msg");
		   }		
	 }	


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0045)/configuration/settings -->
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
 <!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/add_guardian.css" media="screen" rel="stylesheet" type="text/css">
 <!--------- Start head ---------------->
  </head>
  <body>
        
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    

    <div id="content_wrapper">
      
      <!-- Side bar -->
   <?php include("include/sidebar2.php")?>
           
      <!-- end of side bar -->
<?php 
$student_adm_id=$_GET[id];
?>      
      <div id="content"> 
<div id="content-header">
<img alt="Admission_page_logo" src="../images/admission/admission_page_logo.jpg">
  <h1>Admission</h1>
  <h3>Add Guardian Details</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">
<!-- Insert the msg code ------------------------------------>
    <div class="msg" ><?php echo $_GET[msg]?></div>
    <div class="error" ><?php echo $_GET[error]?></div>
<!-- End the msg code --------------------------------------->


<form action="#" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value=""></div>

<div id="admission1_form">

<div class="label-field-pair">
<?php  //GET THE STUDENT_ADMISSION_ID IN  STUDENT TABLE
 while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { 
?>
        <label for="parent_detail_student_id">Student Admission no.</label>
        <div class="text_display"><?=$record['id']?></div>
        <input id="id" name="id" type="hidden" value="<?=$record['id']?>">
      </div>
      

      <br>    <br>    <br>
      <span class="span-sub-heading">Parent Personal Details</span>
      <hr class="sub-heading">

      <div class="label-field-pair">
        <label for="parent_detail_name">First Name<span class="necessary-field">*</span></label>
        <div class="text-input-bg"><input id="parent_detail_first_name" name="parent_detail_first_name" size="30" type="text"></div>
      </div>
      <div class="label-field-pair">
        <label for="parent_detail_name">Last Name</label>
        <div class="text-input-bg"><input id="parent_detail_last_name" name="parent_detail_last_name" size="30" type="text"></div>
      </div>

      <div class="label-field-pair">
        <label for="parent_detail_relation">Relation<span class="necessary-field">*</span></label>
        <div class="text-input-bg"><input id="parent_detail_relation" name="parent_detail_relation" size="30" type="text"></div>
      </div>

      <div class="label-field-pair">
        <label for="parent_detail_dob">Date of Birth</label>
        <div class="text-input-bg">
          <input id="parent_detail_dob" name="parent_detail_dob" type="text"> <img alt="Calendar" class="calendar_date_select_popup_icon" onClick="new CalendarDateSelect( $(this).previous(), {year_range:[1952, 1992]} );" src="../images/calendar_date_select/calendar.gif" style="border:0px; cursor:pointer;">
        </div>
      </div>

      <div class="label-field-pair">
        <label for="parent_detail_education">Education</label>
        <div class="text-input-bg"><input id="parent_detail_education" name="parent_detail_education" size="30" type="text"></div>
      </div>

      <div class="label-field-pair">
        <label for="parent_detail_occupation">Occupation</label>
        <div class="text-input-bg"><input id="parent_detail_occupation" name="parent_detail_occupation" size="30" type="text"></div>
      </div>

      <div class="label-field-pair">
        <label for="parent_detail_income">Income</label>
        <div class="text-input-bg"><input id="parent_detail_income" name="parent_detail_income" size="30" type="text"></div>
      </div>

      <div class="label-field-pair">
        <label for="parent_detail_email">Email</label>
        <div class="text-input-bg"><input id="parent_detail_email" name="parent_detail_email" size="30" type="text"></div>
      </div>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <span class="span-sub-heading">Parent - Contact Details</span>
      <hr class="sub-heading">
      <div class="label-field-pair">
        <label for="master_student_city">Office Address Line 1</label>
          
          <div class="text-input-bg"><input id="parent_detail_office_address_line1" name="parent_detail_office_address_line1" size="30" type="text" value=""></div>
      </div>

      <div class="label-field-pair">
        <label for="master_student_city">Office Address Line 2</label>
          
          <div class="text-input-bg"><input id="parent_detail_office_address_line2" name="parent_detail_office_address_line2" size="30" type="text" value=""></div>
      </div>

      <div class="label-field-pair">
        <label for="parent_detail_city">City</label>
          <div class="text-input-bg"><input id="parent_detail_city" name="parent_detail_city" size="30" type="text" value=""></div>
      </div>

      <div class="label-field-pair">
        <label for="parent_detail_state">State</label>
          <div class="text-input-bg"><input id="parent_detail_state" name="parent_detail_state" size="30" type="text" value=""></div>
      </div>

      <div class="label-field-pair">
        <label for="parent_detail_country">Country</label>
          <div class="text-input-bg"> <select id="parent_detail_country_id" name="parent_detail_country_id"><option value="1">Afghanistan</option>
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
<option value="76" selected="selected">India</option>
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
<option value="195">Zimbabwe</option></select> </div>
      </div>

      <div class="label-field-pair">
        <label for="parent_detail_office_phone1">Office phone 1</label>
        <div class="text-input-bg"><input id="parent_detail_office_phone1" name="parent_detail_office_phone1" size="30" type="text"></div>
      </div>

      <div class="label-field-pair">
        <label for="parent_detail_office_phone2">Office phone 2</label>
        <div class="text-input-bg"><input id="parent_detail_office_phone2" name="parent_detail_office_phone2" size="30" type="text"></div>
      </div>

      <div class="label-field-pair">
        <label for="parent_detail_mob_phone">Mobile Phone no.</label>
        <div class="text-input-bg"><input id="parent_detail_mobile_phone" name="parent_detail_mobile_phone" size="30" type="text"></div>
      </div>



    </div>

    <div class="extender">
    </div>
    <input class="submit_button3" name="commit" type="submit" value="► ADD">
    

  </form>
</div> 

		<a href="?page=add_previous_data&id=<?=$record['id']?>" class="submit_button3">Skip</a>
<?php }?>
 </div>

      <div class="extender"></div>
    </div>

         <!-- footer -->
  <?php include("include/footer.php")?>