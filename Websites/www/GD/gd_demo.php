<?php
header("content type:image/png");
$handle=imagecreate(250,190) or die(" Cannot create Image");
$bg_color=imagecolorallocate($handle,200,12,23);
$txt_color=imagecolorallocate($handle,0,0,0);
imagestring($handle,12,78,56,"HPES",$txt_color);
imagettftext($handle,20,60,30,70,$txt_color,"./nina.ttf","hello");
$line_color=imagecolorallocate($handle,34,56,255);
for($i=0;$i<=123;$i+=5)
{
    imageline($handle,20,$i,78,89,$line_color);        
}

imagepng($handle);
?>