<?php
// 3d pie of pie1
header("content type:image/png");
$handle=imagecreate(250,190) or die(" Cannot create Image");
$bg_color=imagecolorallocate($handle,200,200,200);
$red=imagecolorallocate($handle,255,0,0);
$green=imagecolorallocate($handle,0,255,0);
$blue=imagecolorallocate($handle,0,0,255);
for($i=60;$i>50;$i--)
{
    imagefilledarc($handle,100,$i,200,100,0,120,$red,IMG_ARC_PIE);
imagefilledarc($handle,100,$i,200,100,120,230,$green,IMG_ARC_PIE);
imagefilledarc($handle,100,$i,200,100,230,360,$blue,IMG_ARC_PIE);
}
imagepng($handle);
?>