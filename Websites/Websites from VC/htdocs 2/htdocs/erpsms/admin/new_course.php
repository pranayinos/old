<?php
      $newadd = new Main(); // create a new news object

    if(isset($_POST['addNew_bt'])) // If the submit button was clicked
    {

       // Course entry
          $post['course_code'] =$_POST['course_code'];
          $post['course_name'] =$_POST['coursename'];      
          $post['course_section_name'] = $_POST['course_section_name']; 

      // batch entry 
         $batchpost['batch_code'] =$_POST['course_batches_name'];
          $batchpost['batch_course_code'] =$_POST['course_code'];      
          $batchpost['batch_start_date'] = date("Y-m-d", strtotime($_POST['batch_start_date'])); 
          $batchpost['batch_end_date'] = date("Y-m-d", strtotime($_POST['batch_end_date'])); 
       
        if($newadd->Inserttable($post,"course"))
        {
			 if($newadd->Inserttable($batchpost,"batch"))
			{
				$msg="New Course Added Succesfully";
				header("location:?page=manage_course&msg=$msg");
			}
			else
			{
				$msg="Error :  Entry not done, Please Check Entered Data";
				header("location:?page=manage_course&error=$msg");
			}
		}
		else
		{
			$msg="Error :  Course Is Already Exist";
			header("location:?page=manage_course&error=$msg");
		}


    }
?>

<!---Insert the code of 13 sep 2012 validation edit_master_fees  ---->
 <script type="text/javascript" src="js/all_validation.js"></script>
<!--- End the code of validation edit_master_fees               --->

  </head>
  <body>

  

  <div class="box" style="width:600px; padding-left:20px">

    <h2>New Course</h2>
    <div class="bread_crumb">
      <a href="?page=manage_course">Course</a> »
      New
    </div>


 <form id="myform" name="myform"  action="?page=new_course" class="new_course" enctype="multipart/form-data"  method="post" onsubmit="return validateForm8()">

      
<!--   <div class="label-field-pair">
        <div class="label-container1">Course name</div>
        <div class="input-container"><input id="course_name" name=course_name" size="30" type="text"></div>
      </div>-->
   
<div class="label-field-pair">
        <div class="label-container1">Course name</div>
        <div class="input-container"><input id="coursename" name="coursename" size="30" type="text"></div>
      </div>

      <div class="label-field-pair">
        <div class="label-container1">Section name</div>
        <div class="input-container"><input id="course_section_name" name="course_section_name" size="30" type="text"></div>
      </div>

      <div class="label-field-pair">
        <div class="label-container1">Course Code</div>
        <div class="input-container"><input id="course_code" name="course_code" size="30" type="text"></div>
      </div>
        <div class="label-field-pair">
      <h4>Initial Batch Details</h4>
</div>
      

        <div class="label-field-pair">
          <div class="label-container"><label for="course_batches_attributes_0_Name">Name</label></div>
          <div class="input-container"><input id="course_batches_name" name="course_batches_name" size="30" type="text"></div>
        </div>


        <div class="label-field-pair">
          <div class="label-container"><label for="course_batches_attributes_0_Start Date">Start date</label></div>
          <div class="input-container"><input id="batch_start_date" name="batch_start_date" type="text" value="12-06-2012"> <img alt="Calendar" class="calendar_date_select_popup_icon" onClick="new CalendarDateSelect( $(this).previous(), {year_range:10} );" src="./css/calendar.gif" style="border:0px; cursor:pointer;"></div>
        </div>

        <div class="label-field-pair">
          <div class="label-container"><label for="course_batches_attributes_0_End Date">End date</label></div>
          <div class="input-container"><input id="batch_end_date" name="batch_end_date" type="text" value="12-06-2013"> <img alt="Calendar" class="calendar_date_select_popup_icon" onClick="new CalendarDateSelect( $(this).previous(), {year_range:10} );" src="./css/calendar.gif" style="border:0px; cursor:pointer;"></div>
        </div>



      <input class="submit_button" name="addNew_bt" type="submit" value="► Save">

    </form>

    <div class="extender">    </div>
  </div>
