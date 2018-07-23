<?php
header("content type:image/png");
$handle=imagecreate(400,490) or die(" Cannot create Image");
$bg_color=imagecolorallocate($handle,200,200,200);
$line_color=imagecolorallocate($handle,0,230,34);
imageellipse($handle,150,200,300,150,$line_color);
imagepng($handle);
?>