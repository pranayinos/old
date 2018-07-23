<?php   $student = new Main(); // create a new news object
$catlist = $student->getdata('*',"category","","cat_id DESC", "50"); // Category 
$newsRecordSet = $student->getdata('batch.batch_id,batch.batch_code,course.course_name,course.course_section_name',"course,batch","course.course_code = batch.batch_course_code","course_name ASC","");// Course
//$newsRecordbatch = $student->getdata('*',"batch","","id ASC","");// Course



/****  Select Roll no and Increse roll **/
$admno = $student->getdata('MAX(id) AS rollno',"student","","","");// select Addmission  no
if ( ($rollrow = $admno->getNextRecord()) !== false )
 	$roll=$rollrow['rollno']+1;
/**** select student roll prefix ********/
$rollpre = $student->getdata('school_student_roll_pre',"school_setting","","","");// Course

if ( ($rollprerow = $rollpre->getNextRecord()) !== false )
 	$rollprefix=$rollprerow['school_student_roll_pre'];
	
    if(isset($_POST['addNew_bt'])) // If the submit button was clicked
    {
      // batch entry 
			   $cols['std_adm_no'] =$_POST['std_adm_no'];
			   $cols['std_adm_date'] =date(("Y-m-d"), strtotime($_POST['std_adm_date']));
			   $cols['std_first_name'] =$_POST['std_first_name'];
			   $cols['std_middle_name'] =$_POST['std_middle_name'];
			   $cols['std_last_name'] =$_POST['std_last_name'];	
			   $cols['std_batch_code'] =$_POST['std_batch_code'];
			   $cols['std_dob'] =date(("Y-m-d"), strtotime($_POST['std_dob']));			   
			   $cols['std_gender'] =$_POST['std_gender'];
			   $cols['std_blood_grp'] =$_POST['std_blood_grp'];
			   $cols['std_birth_place'] =$_POST['std_birth_place'];
			   $cols['std_nationality'] =$_POST['std_nationality'];			   
			   $cols['std_mother_tng'] =$_POST['std_mother_tng'];
			   $cols['std_category'] =$_POST['std_category'];
			   $cols['std_relgn'] =$_POST['std_relgn'];
			   $cols['std_add_1'] =$_POST['std_add_1'];
			   $cols['std_add_2'] =$_POST['std_add_2'];
			   $cols['std_city'] =$_POST['std_city'];
			   $cols['std_state'] =$_POST['std_state'];
			   $cols['std_pin'] =$_POST['std_pin'];
			   $cols['std_country'] =$_POST['std_country'];
			   $cols['std_phone'] =$_POST['std_phone'];
			   $cols['std_mobile'] =$_POST['std_mobile'];
			   $cols['std_email'] =$_POST['std_email'];
			   $cols['std_photo_ind'] =$_POST['std_photo_ind'];
			   
		   
		   if($student->Inserttable($cols,"student"))
        {
				$msg="New Student Added Succesfully";
				header("location:?page=admission&msg=$msg");			
		}
		else
		{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=admission&error=$msg");
		}		
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<?php         
	//<!------------------- supportive files ----------->	
include("include/support_file.php")?>
<!--------- Start head ---------------->
<!-------------Insert the 25 aug  code of validation--------------------------------------------->
  
  	<script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#formID").validationEngine();
			
		});
	</script>
<!-------------End the code of validation--------------------------------------------->    

<!-------------Insert the 1 sep select option box  code of validation--------------------------------------------->

 	<script>
  function validateForm3()
{    //Servics validation
	if(document.forms["formID"]["std_batch_code"].value=="")
  	{
		
  	alert("Please Select the std_batch_code  ");
	document.forms["formID"]["std_batch_code"].focus();
 	 return false;
  	}
	
}		
	</script>  
<!-------------End the code of validation--------------------------------------------->  
 
    </head>

  <body>
    
    <!-- header menu --->
    <?php include("include/topmenu.php")?>
    <!-- end header menu ----->
    
    <div id="content_wrapper">
    
               <!-- Side bar -->
   <?php include("include/sidebar2.php")?>
           
      <!-- end of side bar -->
      <div id="content"> 

<div id="content-header">
<img alt="Admission_page_logo" src="../images/admission/admission_page_logo.jpg">
  <h1>Admission</h1>
  <h3>Step 1 - Student details</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a></div>
</div>

<div id="page-yield">
  

 <form id="formID" name="formID"  action="#" class="new_student" enctype="multipart/form-data"  method="post" onSubmit="return validateForm3()">
 <!-- <form name="myForm3" id="myForm3" action="insert2.php" method="post" enctype="multipart/form-data" onSubmit="return validateForm3()">-->

 <!--<form action="" class="new_student" enctype="multipart/form-data" id="new_student" id="new_student" method="post">-->
    

    <div id="admission1_form">
<div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div>
      <div id="necessary-field-notification"><em> Fields marked with <span class="necessary-field">*</span> must be filled.</em></div>

      <div id="autofill-area">

        <div class="student_admission_date">
          <label for="student_admission_no">Admission number <span class="necessary-field">*</span> </label>
          <div class="text-input-bg-admission">
            
              <input id="std_adm_no" name="std_adm_no" size="30" type="text" value="<?=$rollprefix.$roll?>">
            
          </div>
        </div>

        <div class="student_admission_date">
          <label for="student_admission_date">Admission Date <span class="necessary-field">*</span> </label>
          <div class="text-input-bg-admission">
                    <input id="std_adm_date" name="std_adm_date" type="text" value="June  2, 2012"> <img alt="Calendar" class="calendar_date_select_popup_icon" onClick="new CalendarDateSelect( $(this).previous(), {year_range:[1997, 2017]} );" src="./css/calendar.gif" style="border:0px; cursor:pointer;">
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
  <input id="student_first_name" class="validate[required]  text-input" name="std_first_name"  size="30" type="text" title="" />
        </div>
      </div>

      <div class="label-field-pair">
   		<label for="student_first_name">Middle Name<span class="necessary-field">*</span> </label>
        <div class="text-input-bg"><input id="student_middle_name" name="std_middle_name"    size="30" type="text">
        </div>
      </div>

      <div class="label-field-pair">
        <label for="student_grade">Last Name<span class="necessary-field">*</span> </label>
        <div class="text-input-bg"><input id="student_last_name" class="validate[required]  text-input" name="std_last_name"   size="30" type="text" title="">
        </div>
      </div>

      <div id="admission1_form_vertical_block_left">

        <div class="label-field-pair">
          <label for="student_grade">Course / batch <span class="necessary-field">*</span></label>
          <div class="text-input-bg">
          <select id="std_batch_code1" name="std_batch_code"  class="validate[required]" >
        
        <option value=""></option>
          <?php 
 while( ($record = $newsRecordSet->getNextRecord()) !== false )
    { 
?>
     
<option value="<?=$record['batch_id']?>"> <?=$record['course_name']." ".$record['course_section_name'].'-'.$record['batch_code']?></option>
<?php }?>
          </select></div>
        </div>

       
        <div class="label-field-pair">
          <label for="student_date_of_birth">Date of Birth <span class="necessary-field">*</span> </label>
          <div class="text-input-bg">
            <input id="std_dob" name="std_dob" type="text" value="<?=date("M-d-Y")?>"> <img alt="Calendar" class="calendar_date_select_popup_icon" onClick="new CalendarDateSelect( $(this).previous(), {year_range:[1972, 2012]} );" src="css/calendar.gif" style="border:0px; cursor:pointer;">
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
          <div class="text-input-bg"><input id="std_birth_place" class="validate[required]  text-input" name="std_birth_place" size="30" type="text"></div>
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
<option value="76" selected="selected">India</option>
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
          <div class="text-input-bg"><input id="std_mother_tng" name="std_mother_tng" class="validate[required]  text-input" size="30" type="text"></div>
        </div>

        <div class="label-field-pair">
        
         <label for="student_first_name">Category</label>
         <!-- <label for="student_category">Category</label>-->
        
          <div class="text-input-bg"><select id="std_category" name="std_category" title="Select Catagory Name" ><option value=""  selected="selected" >Select a Category</option>
	<?php 
    while( ($catrecord = $catlist->getNextRecord()) !== false )
    { 
    ?>
    <option value="<?=$catrecord['cat_id']?>"> <?=$catrecord['category_description']?></option>
	<?php }?>
	</select><label id="err5">*</label>
</div>
        </div>

        <div class="label-field-pair">
          <label for="student_religion">Religion</label>
          <div class="text-input-bg"><input id="std_relgn" name="std_relgn"  class="validate[required]  text-input" size="30" type="text"></div>
        </div>

      </div>

     <div class="label-field-pair">
     <span class="span-sub-heading">CONTACT Details</span>
      <hr class="sub-heading">
      </div>
      
        <div class="label-field-pair">
          <label for="student_city">Address Line1</label>
          <div class="text-input-bg"><input id="student_address_line1" name="std_add_1"  class="validate[required]  text-input"size="30" type="text"></div>
        </div>
        <div class="label-field-pair">
          <label for="student_city">Address Line2</label>
          <div class="text-input-bg"><input id="student_address_line2" name="std_add_2" size="30" type="text" class="validate[required]  text-input"></div>
        </div>
        <div class="label-field-pair">
          <label for="student_city">City</label>
         <div class="text-input-bg"><input id="student_city" name="std_city" class="validate[required]  text-input" size="30" type="text" title="city where you live">
          <label id="err6"></label></div>
        </div>
        <div class="label-field-pair">
          <label for="student_state">State</label>
         <div class="text-input-bg"><input id="student_state" name="std_state" class="validate[required]  text-input" size="30" type="text" title="State where you live"></div>
        </div>
        <div class="label-field-pair">
        <label for="student_pin_code">PIN code</label>
       <div class="text-input-bg"><input id="student_pin_code" name="std_pin" class="validate[required]  text-input" size="30" type="text" title="Pin code of your city"></div>
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
          <div class="text-input-bg"><input id="student_phone1" name="std_phone" size="30" type="text" class="validate[required]  text-input"></div>
        </div>
        <div class="label-field-pair">
          <label for="student_phone2">Mobile</label>
          <div class="text-input-bg"><input id="student_phone2" name="std_mobile" size="30" type="text" 
          class="validate[required]  text-input"></div>
        </div>
        <div class="label-field-pair">
       
          <label for="student_email">Email</label>
          <div class="text-input-bg"><input id="student_email" name="std_email" size="30" 
          type="text" class="validate[required,custom[email]] text-input">
          </div>
        </div>
        
        <br>
      
         <div class="label-field-pair">
 <span class="span-sub-heading">Upload User Photo</span>
        <hr class="sub-heading">
      </div>
       
        <div class="label-field-pair">
          <label for="student_image_file">Upload User Photo (50KB max)</label>
          <div class="text-input-bg"><input id="student_photo" name="std_photo_ind" size="12" type="file"></div>

        </div>
      </div>
      <div class="extender">

      </div>

  
      <input class="submit_button" name="addNew_bt" type="submit" title="submit form" value="► Save &amp; Proceed"  />
 </form>

</div>
 </div>

      <div class="extender"></div>
    </div>

<!-- footer -->
  <?php include("include/footer.php")?>
           