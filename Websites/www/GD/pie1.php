<?php
header("content type:image/png");
$handle=imagecreate(500,500) or die(" Cannot create Image");
$bg_color=imagecolorallocate($handle,200,200,200);
$red=imagecolorallocate($handle,255,0,0);
$green=imagecolorallocate($handle,0,255,0);
$blue=imagecolorallocate($handle,0,0,255);
imagefilledarc($handle,200,300,400,400,0,120,$red,IMG_ARC_CHORD);
imagefilledarc($handle,200,300,400,400,120,230,$green,IMG_ARC_PIE);
imagefilledarc($handle,200,300,400,400,230,300,$blue,IMG_ARC_NOFILL);
imagefilledarc($handle,200,300,400,400,300,360,$blue,IMG_ARC_EDGED);
imagepng($handle);
?>