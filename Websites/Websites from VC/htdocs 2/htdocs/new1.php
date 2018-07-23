<?php 
$name=$_POST['name'];
$email=$_POST['email'];
$msg=$_POST['msg'];

$body = <<<EOD
<br><hr width="60%"><br>
Name: $name <br>
Email: $email <br>
Message: $msg <br>
EOD;
$headers = "From: $email \r\n";
$headers .= "Content-type: text/html\r\n";

$success = mail("shashi.ku05@gmail.com", "Try sending mail", $body, $headers);

if($success)
{
	echo "<h2 align='center'> mail sent successfully </h2>";
}
else
{
	echo "<h2 align='center'> mail was not sent </h2>";
}

?>
<br>
<h1 align="center"> <?php echo $name ?></h1>
<h2 align="center"> <?php echo $email ?></h2>
<h3 align="center"> <?php echo $body ?></h3>
<h4 align="center"> <?php echo $headers ?></h4>