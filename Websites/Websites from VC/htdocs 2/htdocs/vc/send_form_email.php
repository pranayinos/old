<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>virtual concept</title>
</head>

<body>
<?php
if(isset($_POST['email'])) 
{         // EDIT THE 2 LINES BELOW AS REQUIRED    
$email_to = "info@virtualconcept.in";    
$email_subject = "Virtual Concept";
function died($error) 
{        // your error code can go here        
echo "We are very sorry, but there were error(s) found with the form you submitted. ";        
echo "These errors appear below.<br /><br />";        
echo $error."<br /><br />";        
echo "Please go back and fix these errors.<br /><br />";        
die();    
};     
if(!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['website']) || !isset($_POST['message'])) 
{        
died('We are sorry, but there appears to be a problem with the form you submitted.');           
}
 $name = $_POST['name']; // required    
$subject = "Mail From Contacts Page"; // required    
$email_from = $_POST['email']; // required    
$telephone = $_POST['website']; // not required    
$message = $_POST['message']; // required
$error_message = "";    
$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';  
if(!preg_match($email_exp,$email_from)) 
{    
$error_message .= 'The Email Address you entered does not appear to be valid.<br />';  
}
/*$string_exp = "/^[0-9]+$/";
if(!preg_match($string_exp,$telephone)) 
{    
$error_message .= 'The Telephone No. you entered does not appear to be valid.<br />';  
}
*/
$string_exp = "/^[A-Za-z .'-]+$/";  
if(!preg_match($string_exp,$name)) 
{    
$error_message .= 'The First Name you entered does not appear to be valid.<br />';  
}
/*if(!preg_match($string_exp,$subject)) 
{    
$error_message .= 'The Subject you entered does not appear to be valid.<br />';  
}
*/
if(strlen($message) < 2) 
{    
$error_message .= 'The Comments you entered do not appear to be valid.<br />';  
}
if(strlen($error_message) > 0) 
{    
died($error_message);  
}
$email_message = "Form details below.\n\n";
 function clean_string($string) 
{      
$bad = array("content-type","bcc:","to:","cc:","href");      
return str_replace($bad,"",$string);    
}
$email_message .= "First Name: ".clean_string($name)."\n";    
$email_message .= "Email: ".clean_string($email_from)."\n";    
$email_message .= "Telephone: ".clean_string($telephone)."\n";    
$email_message .= "Comments: ".clean_string($message)."\n";     
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
<!-- include your own success html here --> 
<div id="apDiv1" style="position:absolute; left:510px; top:200px; width:400px;	height:300px; z-index:1; font-family:Arial, Helvetica, sans-serif; font-size:10;"> <a 
href="../index.html"><img
 src="../images/logo.jpg" alt="logo" class="one" width="292" 
border="0" height="98"></a> <br /><br />Thank you for contacting us. We will be in touch with you very soon.</div>

<?php
}
?>
</body>
</html>
