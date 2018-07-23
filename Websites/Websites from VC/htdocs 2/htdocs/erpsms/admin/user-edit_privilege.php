<?php $manage_users = new Main(); 
//$newslist = $add_books->getdata('*',"add_books","","book_number DESC", "1");
//$newsrecord = $newslist->getNextRecord();
//$bid=$newsrecord['book_number'];
	$email=$_GET['email'];
 if(isset($_POST['commit'])) // If the submit button was clicked
    {

      // news entry 
	 
	  
	 
	  
	    $post['examination_control'] =$_POST['examination_control'];
		$post['enter_result'] =$_POST['enter_result'];
		$post['view_result'] =$_POST['view_result'];
		$post['admission'] =$_POST['admission'];
		$post['student_control'] =$_POST['students_control'];
		$post['manage_news'] =$_POST['manage_news'];
		$post['manage_timetable'] =$_POST['manage_timetable'];
		$post['student_attendance_view'] =$_POST['student_attendance_view'];
		$post['hr_basic'] =$_POST['hr_basics'];
		$post['add_new_batch'] =$_POST['add_new_batch'];
		$post['subject_master'] =$_POST['subject_master'];
		$post['event_management'] =$_POST['event_management'];
		$post['general_setting'] =$_POST['general_setting'];
		$post['payslip_power'] =$_POST['payslip_powers'];
		$post['employee_attendance'] =$_POST['employee_attendance'];
		$post['student_attendance_register'] =$_POST['student_attendance_register'];
		$post['time_table_view'] =$_POST['timetable_view'];
		$post['finance_control'] =$_POST['finance_control'];
		$post['employee_search'] =$_POST['employee_search'];
		
		
		
		
		
			   
		if($manage_users->updateData($post,"manage_users","email_id='$email'"))
        {
				$msg="Privilege is Succesfully Updated";
				header("location:?page=user-edit_privilege&msg=$msg");			
		}
		else
		{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=user-edit_privilege&error=$msg");
		}	
	  
	
	  
			   
			   
			 
			   
			   
			   
			
	}
	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/edit_privilege.css" media="screen" rel="stylesheet" type="text/css">
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
  <img alt="User_profile_logo" src="../images/user_profile//user_profile_logo.jpg">
  <h1>User Privileges</h1>
  <h3>Edit Privilege</h3>
  <div id="app-back-button">
    <a href="http://demo.fedena.com/user/edit_privilege/E2004#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>



<div class="label_field_pair"><label>Set Privilege Asd </label></div><br/>
<div id="list_content">
  <div id="list">

    <div class="sel-list">
      Select: <a href="http://demo.fedena.com/user/edit_privilege/E2004#" onClick="$$(&#39;input.right&#39;).each(function(checkbox) { checkbox.checked = true; });; return false;">All</a>,
      <a href="http://demo.fedena.com/user/edit_privilege/E2004#" onClick="$$(&#39;input.right&#39;).each(function(checkbox) { checkbox.checked = false; });; return false;">None</a>
    </div>

    <form action="#" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="JlIkYIDIXJLopNbr6ueIAQEIfxLu5AqU1JforHBltL8="></div>
        <div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div>

        
        
        
          
        
        <div class="name_listodd"><li>
            <label><input class="right" id="user_privilege_ids_" name="examination_control" type="checkbox" value="1">
              <div class="att_list_names"> Examination Control </div> </label>
          </li></div>
      
        
        
        
          
        
        <div class="name_listeven"><li>
            <label><input class="right" id="user_privilege_ids_" name="enter_result" type="checkbox" value="1">
              <div class="att_list_names"> Enter Result </div> </label>
          </li></div>
      
        
        
        
          
        
        <div class="name_listodd"><li>
            <label><input class="right" id="user_privilege_ids_" name="view_result" type="checkbox" value="1">
              <div class="att_list_names"> View Result </div> </label>
          </li></div>
      
        
        
        
          
        
        <div class="name_listeven"><li>
            <label><input class="right" id="user_privilege_ids_" name="admission" type="checkbox" value="1">
              <div class="att_list_names"> Admission </div> </label>
          </li></div>
      
        
        
        
          
        
        <div class="name_listodd"><li>
            <label><input class="right" id="user_privilege_ids_" name="students_control" type="checkbox" value="1">
              <div class="att_list_names"> Students Control </div> </label>
          </li></div>
      
        
        
        
          
        
        <div class="name_listeven"><li>
            <label><input class="right" id="user_privilege_ids_" name="manage_news" type="checkbox" value="1">
              <div class="att_list_names"> Manage News </div> </label>
          </li></div>
      
        
        
        
          
        
        <div class="name_listodd"><li>
            <label><input class="right" id="user_privilege_ids_" name="manage_timetable" type="checkbox" value="1">
              <div class="att_list_names"> Manage Timetable </div> </label>
          </li></div>
      
        
        
        
          
        
        <div class="name_listeven"><li>
            <label><input class="right" id="user_privilege_ids_" name="student_attendance_view" type="checkbox" value="1">
              <div class="att_list_names"> Student Attendance View </div> </label>
          </li></div>
      
        
        
        
          
        
        <div class="name_listodd"><li>
            <label><input class="right" id="user_privilege_ids_" name="hr_basics" type="checkbox" value="1">
              <div class="att_list_names"> Hr Basics </div> </label>
          </li></div>
      
        
        
        
          
        
        <div class="name_listeven"><li>
            <label><input class="right" id="user_privilege_ids_" name="add_new_batch" type="checkbox" value="1">
              <div class="att_list_names"> Add New Batch </div> </label>
          </li></div>
      
        
        
        
          
        
        <div class="name_listodd"><li>
            <label><input class="right" id="user_privilege_ids_" name="subject_master" type="checkbox" value="1">
              <div class="att_list_names"> Subject Master </div> </label>
          </li></div>
      
        
        
        
          
        
        <div class="name_listeven"><li>
            <label><input class="right" id="user_privilege_ids_" name="event_management" type="checkbox" value="1">
              <div class="att_list_names"> Event Management </div> </label>
          </li></div>
      
        
        
        
          
        
        <div class="name_listodd"><li>
            <label><input class="right" id="user_privilege_ids_" name="general_setting" type="checkbox" value="1">
              <div class="att_list_names"> General Settings </div> </label>
          </li></div>
      
        
        
        
          
        
        <div class="name_listeven"><li>
            <label><input class="right" id="user_privilege_ids_" name="finance_control" type="checkbox" value="1">
              <div class="att_list_names"> Finance Control </div> </label>
          </li></div>
      
        
        
        
          
        
        <div class="name_listodd"><li>
            <label><input class="right" id="user_privilege_ids_" name="timetable_view" type="checkbox" value="1">
              <div class="att_list_names"> Timetable View </div> </label>
          </li></div>
      
        
        
        
          
        
        <div class="name_listeven"><li>
            <label><input class="right" id="user_privilege_ids_" name="student_attendance_register" type="checkbox" value="1">
              <div class="att_list_names"> Student Attendance Register </div> </label>
          </li></div>
      
        
        
        
          
        
        <div class="name_listodd"><li>
            <label><input class="right" id="user_privilege_ids_" name="employee_attendance" type="checkbox" value="1">
              <div class="att_list_names"> Employee attendance </div> </label>
          </li></div>
      
        
        
        
          
        
        <div class="name_listeven"><li>
            <label><input class="right" id="user_privilege_ids_" name="payslip_powers" type="checkbox" value="1">
              <div class="att_list_names"> Payslip Powers </div> </label>
          </li></div>
      
        
        
        
          
        
        <div class="name_listodd"><li>
            <label><input class="right" id="user_privilege_ids_" name="employee_search" type="checkbox" value="1">
              <div class="att_list_names"> Employee Search </div> </label>
          </li></div>
      
        
        
        
          
            
      <div class="user_submit_button1">
        <input name="commit" type="submit" value="► Update">
      </div>
    </form>
  </div>
</div>
 </div>

      <div class="extender"></div>
    </div>

 
         <!-- footer -->
  <?php include("include/footer.php")?>