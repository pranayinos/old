<?php $manage_users = new Main(); 
//$newslist = $add_books->getdata('*',"add_books","","book_number DESC", "1");
//$newsrecord = $newslist->getNextRecord();
//$bid=$newsrecord['book_number'];
	$email=$_GET['email'];
 if(isset($_POST['commit'])) // If the submit button was clicked
    {

      // news entry 
	 
	  
	  if($_POST['new_password']==$_POST['confirm_password'])
	  {
	    $post['password'] =$_POST['new_password'];
		
			   
		if($manage_users->updateData($post,"manage_users","email_id='$email'"))
        {
				$msg="Password is Succesfully Updated";
				header("location:?page=user_change_password&msg=$msg");			
		}
		else
		{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=user_change_password&error=$msg");
		}	
	  }
	  else
	  {
	  $msg="Error :  Password does not match, Please Re-Enter password";
			header("location:?page=user_change_password&error=$msg");
	  }
	  
			   
			   
			 
			   
			   
			   
			
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/user_change_password.css" media="screen" rel="stylesheet" type="text/css">
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
  <img alt="Edit_users_logo" src="../images/edit_users/edit_users_logo.jpg">
  <h1>Edit User</h1>
  <h3>Update user information</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">

  

  

  <div id="changepw-form">
    <form id="formID" name="formID" action="#" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="JlIkYIDIXJLopNbr6ueIAQEIfxLu5AqU1JforHBltL8="></div>
     <div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div>

      <div class="label-field-pair">
        <label for="course_section">New Password</label>
        <div class="text-input-bg"> <input id="user_new_password" name="new_password" size="30" type="password" class="validate[required]  text-input"> </div>
      </div>

      <div class="label-field-pair">
        <label for="course_grade">Confirm Password</label>
        <div class="text-input-bg"> <input id="user_confirm_password" name="confirm_password" size="30" type="password" class="validate[required]  text-input"> </div>
      </div>

      <div id="submit-button">
        <input class="user_submit_button" name="commit" type="submit" value="► Update">
      </div>

    </form>
  </div>

</div> </div>

      <div class="extender"></div>
    </div>

  
 
         <!-- footer -->
  <?php include("include/footer.php")?>