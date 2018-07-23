<?php $manage_users = new Main(); 

// store session data

 if(isset($_POST['commit'])) // If the submit button was clicked
    {
      // news entry 
			   $cols['user_name'] =$_POST['user_name'];
			   $cols['first_name'] =$_POST['first_name'];
			   $cols['last_name'] =$_POST['last_name'];
			   $cols['password'] =$_POST['password'];
			   $cols['email_id'] =$_POST['email_id'];
			   
			   
			   
			   
			      if($manage_users->Inserttable($cols,"manage_users"))
        {
				$msg="User Record Added Succesfully";
				header("location:?page=user-create&msg=$msg");			
		}
		else
		{
			$msg="Error :  Entry not done, Please check Values";
			header("location:?page=user-create&error=$msg");
		}		
	}
	
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr1"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title><? echo $page_title ." | ". SITENAME ?></title>
<!-------------------- supportive files ----------->
<?php include("include/support_file.php")?>
<link href="css/create.css" media="screen" rel="stylesheet" type="text/css">
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
   <?php include("include/sidebar5.php")?><?php ?>
           
      <!-- end of side bar -->
      <div id="content"> 
<div id="content-header">
  <img alt="User_profile_logo" src="../images/user_profile/user_profile_logo.jpg">
  <h1>Create User</h1>
  <h3>Make new admin user</h3>
  <div id="app-back-button">
    <a href="#" onClick="history.back(); return false;"><img alt="Back" border="0" src="../images/buttons/back.png"></a>
  </div>
</div>

<div id="page-yield">

  

  <form name="formID" id="formID" action="#" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="JlIkYIDIXJLopNbr6ueIAQEIfxLu5AqU1JforHBltL8="></div>

     
       <div class="msg" ><?php echo $_GET[msg]?></div>
 <div class="error" ><?php echo $_GET[error]?></div>

    <div id="create_user_form">

      <div id="necessary-field-notification">Fields marked with <span class="necessary-field">*</span> must be filled.  (Only Admin User can be created)</div>

      <div class="label-field-pair">
        <label for="user_username">Username<span class="necessary-field">*</span></label>
        <div class="text-input-bg"><input id="user_username" name="user_name" size="30" type="text" class="validate[required]  text-input"></div>
      </div>

      <div class="label-field-pair">
        <label for="user_first_name">First Name<span class="necessary-field">*</span></label>
        <div class="text-input-bg"><input id="user_first_name" name="first_name" size="30" type="text" class="validate[required]  text-input"></div>
      </div>

      <div class="label-field-pair">
        <label for="user_last_name">Last Name</label>
        <div class="text-input-bg"><input id="user_last_name" name="last_name" size="30" type="text" class="validate[required]  text-input"></div>
      </div>

      <div class="label-field-pair">
        <label for="user_password">Password <span class="necessary-field">*</span></label>
        <div class="text-input-bg"><input id="user_password" name="password" size="30" type="password" class="validate[required]  text-input"></div>
      </div>

      <div class="label-field-pair">
        <label for="user_email">Email <span class="necessary-field">*</span></label>
        <div class="text-input-bg"><input id="user_email" name="email_id" size="30" type="text" class="validate[required,custom[email]] text-input"></div>
      </div>

      <input id="user_role" name="user[role]" type="hidden" value="Admin">
      <div class="extender"></div>

      <input class="user_submit_button" name="commit" type="submit" value="►Create">
      
    </div>

  </form>

</div> </div>

      <div class="extender"></div>
    </div>

   
         <!-- footer -->
  <?php include("include/footer.php")?>