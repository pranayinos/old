<?php
session_start();
// using md5 to generate totally random string
$md5=md5(microtime()*mktime());
// md5 contains 32 character
// so trim it to 7 (desired no) characters

$string=substr($md5,4,7);
$captcha=imagecreatefrompng("./captcha.png");
$black=imagecolorallocate($captcha,250,0,0);
$line=imagecolorallocate($captcha,0,0,40);
imageline($captcha,0,0,40,35,$line);
imageline($captcha,40,0,60,55,$line);
imagestring($captcha,45,20,13,$string,$black);
$session['key']=md5($string);
header("Content-type: image/png");
echo imagepng($captcha);
?>