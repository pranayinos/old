<?php
if(isset($_POST['Send']))
{
$subject="Contact Virtual Concept";	
// Receive form's subject value into php $subject variable
$sender =$_REQUEST['yourname'];

// Receive form's message value into php $message variable
$mesg=$_REQUEST['message'];

// Receive form's sender name value into php $sender variable
$website=$_REQUEST['website'];

// Receive form's user email value into php $user_email variable
$user_email=$_REQUEST['email'];

// the email address where the message will be sent
$TO ="info@virtualconcept.in";
$message=" From: ".$sender;
$message=$message."\n message: \n".$mesg;
$message=$message."\n-----------------------------------------------------------------------------------\n sender email:".$user_email;
$message=$message."\n website:".$website."\n";

echo $message;
$send_email=mail($TO,$subject,$message,"From: $user_email","$user_email");

// To check email has been sent or not
if($send_email)
  {
  echo "Your E-mail has been sent !";
  }
   else
   {
   echo "E-mail sent was failed !";
   }

}
?>



<script>
	function fun(okk)
	{
		if(okk==1)
		{
			alert("Thanks for your feedback");


		}
		
	}
	
	function validateForm()
	{
		var x=document.forms["feedback"]["email"].value;
		var atpos=x.indexOf("@");
		var dotpos=x.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
		{
			alert("Not a valid e-mail address");
			return false;
		}
		
	}
    </script></head>

<body class="bg-cover">
            <div align="center", style="width:60%">	            
            
            <h2>Contact Form</h2>
		
					<form name="feedback"action="#" method="post" enctype="multipart/form-data" onsubmit="return validateForm()";>
					
						<fieldset>
						
												
						<label for="name" class="blocklabel">Your Name*</label>
						<p class=""><input name="yourname" class="input_bg" id="name" type="text" maxlength="50" required></p>
						
						
						<label for="email" class="blocklabel">E-Mail*</label>
						<p class=""><input name="email" class="input_bg" id="email" type="text" maxlength="127" required></p>
						
						
						<label for="website" class="blocklabel">Website</label>
						<p><input name="website" class="input_bg" id="website" type="text"></p>
						
						
						<label for="message" class="blocklabel">Your Message*</label>
						<p class=""><textarea name="message" class="textarea_bg" id="message" cols="20" rows="7"></textarea></p>
						
						
						<p>
						<input id="myemail" name="myemail" value="gsrthemes9@gmail.com" type="hidden">
						<input id="myblogname" name="myblogname" value="yourcompanyname.com" type="hidden">
						</p><div class="clearfix"></div>
						<input name="Send" value="SUBMIT" class="button medium align" id="send" type="submit"><p></p>
												
						</fieldset>
						
						</form> 
			</div>

</body></html>