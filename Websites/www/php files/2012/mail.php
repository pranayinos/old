<?php
ini_set("SMTP","mail.gmail.com");
ini_set("smtp_port","25");
ini_set('sendmail_from','anilsoni15@gmail.com');
function send_email($from, $to, $cc, $bcc, $subject, $message){
    
	$headers = "From: ".$from."\r\n";
	$headers .= "Reply-To: ".$from."\r\n";
	$headers .= "Return-Path: ".$from."\r\n";
	$headers .= "CC: ".$cc."\r\n";
	$headers .= "BCC: ".$to."\r\n";
	
	if (mail($to,$subject,$message,$headers) ) {
	   echo "email sent";
	} else {
	   echo "email could not be sent";
	}
}

$subject = "Hello!";
$message = "Hello! How are you today?";
send_email("anilsoni15@gmail.com", "anil@rcplindia.in", 
	"hrid06@gmail.com", "anilsoni15@gmail.com",
	$subject , 
	$message);
?>
