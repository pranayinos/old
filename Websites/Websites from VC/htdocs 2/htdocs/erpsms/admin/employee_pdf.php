<?php
    $emp = new Main(); // create a new news object
   $roll=$_GET[id];
 	$field = $emp->getdata('*',"emp","emp_no='$roll'","", "");// set newsRecordSet to a 
	
	
 //update query in student_profile
    if(isset($_POST['updateNew_bt'])) // If the submit button was clicked
    {
   
	  		  				 $post['id']=$roll;
			 
						// $post['std_adm_date'] =date(("Y-m-d"), strtotime($_POST['std_adm_date']));
						   $post['std_first_name'] =$_POST['student_first_name'];
						   $post['std_middle_name'] =$_POST['student_middle_name'];
						   $post['std_last_name'] =$_POST['student_last_name'];	
						   //$post['std_batch_code'] =$_POST['std_batch_code'];
						   $post['std_dob'] =date(("Y-m-d"), strtotime($_POST['std_dob']));			   
						   $post['std_gender'] =$_POST['std_gender'];
						   $post['std_blood_grp'] =$_POST['std_blood_grp'];
						   $post['std_birth_place'] =$_POST['std_birth_place'];
						   $post['std_nationality'] =$_POST['std_nationality'];			   
						   $post['std_mother_tng'] =$_POST['std_mother_tng'];
						   $post['std_category'] =$_POST['std_category'];
						   $post['std_relgn'] =$_POST['std_relgn'];
						   $post['std_add_1'] =$_POST['student_address_line1'];
						   $post['std_add_2'] =$_POST['student_address_line2'];
						   $post['std_city'] =$_POST['student_city'];
						   $post['std_state'] =$_POST['student_state'];
						   $post['std_pin'] =$_POST['student_pin_code'];
						   $post['std_country'] =$_POST['student_country_id'];
						   $post['std_phone'] =$_POST['student_phone1'];
						   $post['std_mobile'] =$_POST['student_phone2'];
						   $post['std_email'] =$_POST['student_email'];
						   $post['std_photo_ind'] =$_POST['student_photo'];
			   			   
			  
			   
			      if($student->updateData($post,"student","id='$roll'"))
				 {
				   $msg="News updated Succesfully";
				header("location:?page=edit_student_profile&id=$roll&msg=$msg");			
		}
		else
		{
			$msg="Error :  Entry not done, Please check Values";
		header("location:?page=edit_student_profile&id=$roll&error=$msg");
		}		
	}
    ?>
   
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<?php /*?><?php         
	//<!------------------- supportive files ----------->	
include("include/support_file.php")?><?php */?>
</head>
<body>
    
    <!-- header menu --->
    <?php /*?><?php include("include/topmenu.php")?><?php */?>
    <!-- end header menu ----->
    
    <div id="content_wrapper">
    
               <!-- Side bar -->
  <?php /*?> <?php include("include/sidebar2.php")?><?php */?>
           
      <!-- end of side bar -->
      <div id="content"> 

<div id="content-header">
<!--<img alt="Admission_page_logo" src="../images/admission/admission_page_logo.jpg">-->
  <h1><center>
  </center></h1>
  <h3><center>
      Employee Details
  </center></h3>
  <div id="app-back-button">
   <!-- <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>-->
   <center> <input name="print" type="button" value="Print" onClick="window.print()" /></center> </div>
</div>


<div id="page-yield"> 
<form action="#" class="new_student" enctype="multipart/form-data" id="new_student" method="post">

<?php 
while( ($record = $field->getNextRecord()) !== false )
    {
?><center>
  <table width="850" border="1" cellspacing="2" cellpadding="2" style="border:inset">
    <tr>
      <th scope="row">&nbsp;Employee Number</th>
      <td>&nbsp;<?=$record['emp_no'] ?></td>
    </tr>
    <tr>
      <th scope="row">&nbsp;Employee Name</th>
      <td>&nbsp;<?=$record['emp_first_name']?>&nbsp;<?=$record['emp_mid_name']?>&nbsp;<?=$record['emp_last_name']?></td>
    </tr>
    <tr>
      <th scope="row">Joining Date</th>
      <td>&nbsp;<?=$record['emp_join_date']?></td>
    </tr>
    <tr>
      <th scope="row">&nbsp;Category</th>
      <td>&nbsp;<?=$record['emp_cat_type']?></td>
    </tr>
    <tr>
      <th scope="row">&nbsp;Position</th>
      <td>&nbsp;<?=$record['emp_cat_posn']?></td>
    </tr>
    
    
    <tr>
      <th scope="row">&nbsp;Grade</th>
      <td>&nbsp;<?=$record['emp_grade']?></td>
       </tr>
    
    
     <tr>
      <th scope="row">&nbsp;Job Title</th>
      <td>&nbsp;<?=$record['emp_job_title']?></td>
    </tr>
     <tr>
      <th scope="row">&nbsp;Manager</th>
      <td>&nbsp;<?=$record['std_gender']?></td>
    </tr>
     <tr>
      <th scope="row">&nbsp;Gender</th>
      <td>&nbsp;<?=$record['emp_gender']?></td>
    </tr>
     <tr>
      <th scope="row">&nbsp;Status</th>
      <td>&nbsp;<?=$record['emp_marital_status'] ?></td>
    </tr>
     <tr>
      <th scope="row">&nbsp;Qualification</th>
      <td>&nbsp;<?=$record['emp_qualification'] ?>
</td>
    </tr>
     <tr>
      <th scope="row">&nbsp;Total Experience</th>
      <td>&nbsp;<?=$record['emp_total_exp_yr']?></td>
    </tr>
    
   
     <tr>
      <th scope="row">&nbsp;Experence Info</th>
      <td>&nbsp; <?=$record['emp_exp_info']?></td>
    </tr>
     <tr>
      <th scope="row">&nbsp;Date of Birth</th>
      <td>&nbsp;<?=$record['emp_dob']?></td>
    </tr>
      <tr>
      <th scope="row">&nbsp;Martial Status</th>
      <td>&nbsp;<?=$record['emp_marital_status']?></td>
    </tr>
     <tr>
      <th scope="row">&nbsp;No of Children</th>
      <td>&nbsp;<?=$record['emp_children']?></td>
    </tr>
     <tr>
      <th scope="row">&nbsp;Father Name</th>
      <td>&nbsp;<?=$record['emp_father_name']?></td>
    </tr>
     <tr>
      <th scope="row">&nbsp;Mothers Name</th>
      <td>&nbsp;<?=$record['emp_mother_name']?></td>
    </tr>
     <tr>
      <th scope="row">&nbsp;Blood Group</th>
      <td>&nbsp;<?=$record['emp_bld_grp']?></td>
    </tr>
      <tr>
      <th scope="row">&nbsp;Nationality</th>
      <td>&nbsp;India</td>
    </tr>
      <tr>
      <th scope="row">&nbsp;Phone</th>
      <td>&nbsp;<?=$record['std_phone']?></td>
    </tr>
      <tr>
      <th scope="row">&nbsp;Mobile</th>
      <td>&nbsp;<?=$record['std_mobile']?></td>
    </tr>
      <tr>
      <th scope="row">&nbsp;Email</th>
      <td>&nbsp;<?=$record['emp_email']?></td>
    </tr>
   </table>   

 
    <?php /*?><div id="admission1_form">

      <div id="necessary-field-notification"><em> Fields marked with <span class="necessary-field">*</span> must be filled.</em></div>

      <div id="autofill-area">

        <div class="student_admission_date">
          <label for="student_admission_no">Admission number <span class="necessary-field">*</span> </label>
          <div class="text-input-bg-admission">
            
      <input id="std_adm_no" name="std_adm_no" size="30" type="text" value="<?=$record['std_adm_no'] ?>" disabled="disabled">
            
          </div>
        </div>

        <div class="student_admission_date">
          <label for="student_admission_date">Admission Date <span class="necessary-field">*</span> </label>
          <div class="text-input-bg-admission">
          <input id="std_adm_date" name="std_adm_date" type="text" value="June  2, 2012" disabled="true"> <img alt="Calendar" class="calendar_date_select_popup_icon" onClick="new CalendarDateSelect( $(this).previous(), {year_range:[1997, 2017]} );" src="./css/calendar.gif" style="border:0px; cursor:pointer;">
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
  <input id="student_first_name" name="student_first_name" size="30" type="text" title=""
   value="<?=$record['std_first_name']?>"/>
        </div>
      </div>

      <div class="label-field-pair">
   		<label for="student_first_name">Middle Name<span class="necessary-field">*</span> </label>
        <div class="text-input-bg"><input id="student_middle_name" name="student_middle_name" size="30" type="text" value="<?=$record['std_middle_name']?>">
        </div>
      </div>

      <div class="label-field-pair">
        <label for="student_grade">Last Name<span class="necessary-field">*</span> </label>
        <div class="text-input-bg"><input id="student_last_name"  name="student_last_name" size="30" type="text"  value="<?=$record['std_last_name']?>">
        </div>
      </div>

      <div id="admission1_form_vertical_block_left">

        <div class="label-field-pair">
          <label for="student_grade">Course / batch <span class="necessary-field">*</span></label>
          <div class="text-input-bg">
          <select id="std_batch_code1" name="std_batch_code" disabled="disabled">
        
        <option value="" selected="selected"></option>
          <?php 
 while( ($record1 = $newsRecordSet->getNextRecord()) !== false )
    { 
?>
     
<option value="<?=$record1['batch_id']?>" selected="selected"> <?=$record1['course_name']." ".$record1['course_section_name'].'-'.$record1['batch_code']?></option>
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
            <input checked="checked" id="student_gender_m" name="student_gender_m" type="radio" value="MALE">
            <label class="label_for_gender" for="student_gender_false">Female</label>
            <input id="student_gender_f" name="std_gender" type="radio" value="FEMALE">
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
              <option value="<?=$record['std_blood_grp']?>" selected="selected"><?=$record['std_blood_grp']?></option>
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
          <div class="text-input-bg"><input id="std_birth_place" name="std_birth_place" size="30" type="text" 
          value="<?=$record['std_birth_place'] ?>"></div>
        </div>

        <div class="label-field-pair">
          <label for="student_nationality">Nationality</label>
          <div class="text-input-bg">
            <select id="std_nationality" name="std_nationality">
            <option value="<?=$record['std_nationality'] ?>" selected="selected"><?=$record['std_nationality'] ?></option>
        </select>
          </div>
        </div>

        <div class="label-field-pair">
          <label for="student_birth_place">Mother Tongue</label>
          <div class="text-input-bg"><input id="std_mother_tng" name="std_mother_tng" size="30" type="text" value="<?=$record['std_last_name']?>"></div>
        </div>

        <div class="label-field-pair">
        
         <label for="student_first_name">Category</label>
         <!-- <label for="student_category">Category</label>-->
        
          <div class="text-input-bg"><select id="std_category" name="std_category" title="Select Catagory Name" ><option value=""  selected="selected" >Select a Category</option>
	<?php 
    while( ($catrecord = $catlist->getNextRecord()) !== false )
    { 
    ?>
    <option value="<?=$catrecord['cat_id']?>" selected="selected"> <?=$catrecord['category_description']?></option>
	<?php }?>
	</select><label id="err5">*</label>
</div>
        </div>

        <div class="label-field-pair">
          <label for="student_religion">Religion</label>
         <div class="text-input-bg"><input id="std_relgn" name="std_relgn" size="30" type="text" value="<?=$record['std_relgn']?>"></div>
        </div>

      </div>

     <div class="label-field-pair">
     <span class="span-sub-heading">CONTACT Details</span>
      <hr class="sub-heading">
      </div>
      
        <div class="label-field-pair">
          <label for="student_city">Address Line1</label>
          <div class="text-input-bg"><input id="student_address_line1" name="student_address_line1" size="30" type="text"  value="<?=$record['std_add_1']?>"></div>
        </div>
        <div class="label-field-pair">
          <label for="student_city">Address Line2</label>
          <div class="text-input-bg"><input id="student_address_line2" name="student_address_line2" size="30" type="text" value="<?=$record['std_add_2']?>"></div>
        </div>
        <div class="label-field-pair">
          <label for="student_city">City</label>
         <div class="text-input-bg"><input id="student_city" name="student_city" size="30" type="text" title="city where you live"  value="<?=$record['std_city']?>">
          <label id="err6"></label></div>
        </div>
        <div class="label-field-pair">
          <label for="student_state">State</label>
         <div class="text-input-bg"><input id="student_state" name="student_state" size="30" type="text" title="State where you live"  value="<?=$record['std_state']?>"></div>
        </div>
        <div class="label-field-pair">
        <label for="student_pin_code">PIN code</label>
       <div class="text-input-bg"><input id="student_pin_code" name="student_pin_code" size="30" type="text" title="Pin code of your city"  value="<?=$record['std_pin']?>"></div>
        </div>
        <div class="label-field-pair">
          <label for="student_country">Country</label>
          <div class="text-input-bg"> <select id="student_country_id" name="student_country_id" >
         <option value="India" selected="selected">India</option>
		</select> </div>
        </div>

        <div class="label-field-pair">
          <label for="student_phone1">Phone</label>
          <div class="text-input-bg"><input id="student_phone1" name="student_phone1" size="30" type="text" title="" value="<?=$record['std_phone']?>"></div>
        </div>
        <div class="label-field-pair">
          <label for="student_phone2">Mobile</label>
          <div class="text-input-bg"><input id="student_phone2" name="student_phone2" size="30" type="text"  value="<?=$record['std_mobile']?>"></div>
        </div>
        <div class="label-field-pair">
       
          <label for="student_email">Email</label>
          <div class="text-input-bg"><input id="student_email" name="student_email" size="30" type="text" title=""  value="<?=$record['std_email']?>">
          </div>
        </div>
        
        <br>
      
         <div class="label-field-pair">
 <span class="span-sub-heading">Upload User Photo</span>
        <hr class="sub-heading">
      </div>
       
        <div class="label-field-pair">
          <label for="student_image_file">Upload User Photo (50KB max)</label>
          <div class="text-input-bg"><input id="student_photo" name="student_photo" size="12" type="file"></div>

        </div>
      </div>
      <div class="extender">

      </div>

   
      <input class="submit_button" name="updateNew_bt" type="submit" title="submit form" value="► Save &amp; Proceed"  />
 </form><?php */?>

<?php } // end if query?> 
<!--</div>
 </div>

      <div class="extender"></div>
    </div>-->

<!-- footer -->
 <?php /*?> <?php include("include/footer.php")?><?php */?>
           