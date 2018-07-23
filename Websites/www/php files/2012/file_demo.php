<?php  
 /*header ("Content-type: image/png"); 
 $handle = ImageCreate (130, 50) or die ("Cannot Create image");
 $bg_color = ImageColorAllocate ($handle, 50, 100, 100);
 $txt_color = ImageColorAllocate ($handle, 0, 0, 0);
 
 ImageString($handle,5,5, 18, "Hpes education", $txt_color);
 ImagePng ($handle);*/
 /* 
 header ("Content-type: image/png"); 
 $handle = ImageCreate (130, 50) or die ("Cannot Create image"); 
 $bg_color = ImageColorAllocate ($handle, 255, 0, 0); 
 $txt_color = ImageColorAllocate ($handle, 0, 0, 0); 
 ImageTTFText($handle, 20, 15, 30, 40, $txt_color, "./Fonts/vijaya.ttf", "hello"); 
  ImagePng ($handle);*/
 /* 
  header ("Content-type: image/png"); 
 $handle = ImageCreate (130, 50) or die ("Cannot Create image"); 
 $bg_color = ImageColorAllocate ($handle, 255, 0, 0); 
 $txt_color = ImageColorAllocate ($handle, 255, 255, 255); 
 $line_color = ImageColorAllocate ($handle, 0, 0, 0); 
 for($i=0;$i<=129;$i=$i+5) 
 { 
 ImageLine($handle, 65, 0, $i, 50, $line_color); 
 } 
 ImageString ($handle, 5, 5, 18, "hello", $txt_color); 
 ImagePng ($handle);*/
 /*
 header('Content-type: image/png');
 $handle = imagecreate(200, 200);
 $background = imagecolorallocate($handle, 255, 255, 255);
$red = imagecolorallocate($handle, 255, 0, 0);
 $green = imagecolorallocate($handle, 0, 255, 0);
 $blue = imagecolorallocate($handle, 0, 0, 255);
 for ($i = 60; $i > 50; $i--)
 {    
 imagefilledarc($handle, 50, $i, 100, 50, 0, 90, $red, IMG_ARC_PIE);
 imagefilledarc($handle, 50, $i,100, 50, 90, 180, $green, IMG_ARC_PIE);
 imagefilledarc($handle, 50, $i, 100, 50, 180, 360 , $blue, IMG_ARC_PIE);
 } 
 imagepng($handle);
 */
 
 
 /*
  header ("Content-type: image/png"); 
 $handle = ImageCreate (130, 50) or die ("Cannot Create image"); 
 $bg_color = ImageColorAllocate ($handle, 255, 0, 0); 
 $txt_color = ImageColorAllocate ($handle, 255, 255, 255); 
 $line_color = ImageColorAllocate ($handle, 0, 0, 0); 
 imageellipse ($handle, 65, 25, 100, 40, $line_color); 
 ImageString ($handle, 5, 5, 18, "hello", $txt_color); 
 ImagePng ($handle);
 */
 
 header ("Content-type: image/png"); 
 $handle = ImageCreate (130, 50) or die ("Cannot Create image"); 
 $bg_color = ImageColorAllocate ($handle, 255, 0, 0); 
 $txt_color = ImageColorAllocate ($handle, 255, 255, 255); 
 $line_color = ImageColorAllocate ($handle, 0, 0, 0); 
 for($i=0;$i<=130;$i=$i+10) 
 { 
 imageellipse ($handle, $i, 25, 40, 40, $line_color); 
 } 
 ImageString ($handle, 5, 5, 18, "HPES Education", $txt_color); 
 ImagePng ($handle);
 ?>