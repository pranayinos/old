<?php 
 // The file you are grayscaling 
 $file = '25.jpg'; 

 // This sets it to a .jpg, but you can change this to png or gif if that is what you are working with
 header('Content-type: image/jpeg'); 

 // Get the dimensions
 list($width, $height) = getimagesize($file); 

 // Define our source image 
 $source = imagecreatefromjpeg($file); 

 // Creating the Canvas 
 $bwimage= imagecreate($width, $height); 
 //Creates the 256 color palette
 for ($c=0;$c<256;$c++) 
 {
 $palette[$c] = imagecolorallocate($bwimage,$c,$c,$c);
 }

 //Creates yiq function
 function yiq($r,$g,$b) 
 {
 return (($r*0.299)+($g*0.587)+($b*0.114));
 } 
 //Reads the origonal colors pixel by pixel 
 for ($y=0;$y<$height;$y++) 
 {
 for ($x=0;$x<$width;$x++) 
 	{
 $rgb = imagecolorat($source,$x,$y);
 $r = ($rgb >> 16) & 0xFF;
 $g = ($rgb >> 8) & 0xFF;
 $b = $rgb & 0xFF;

 //This is where we actually use yiq to modify our rbg values, and then convert them to our grayscale palette
 $gs = yiq($r,$g,$b);
 imagesetpixel($bwimage,$x,$y,$palette[$gs]);
 }
 } 

 // Outputs a jpg image, but you can change this to png or gif if that is what you are working with
 imagejpeg($bwimage); 
 ?> 
