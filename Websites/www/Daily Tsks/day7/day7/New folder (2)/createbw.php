<?php
/**
 * @author pranay soni
 * @copyright 2011
 */

$file='pic2.jpg';
header("content-type:image/jpeg");
list($width,$height)=getimagesize($file);
//echo "$width $height";
$source=imagecreatefromjpeg($file);
//CANVAS
$bwimage=imagecreate($width,$height);
for ($c;$c<256;$c++)
{
    $palette[$c]=imagecolorallocate($bwimage,$c,$c,$c);
}
function y($r,$g,$b)
{
    return(($r*0.400)+($g*0.250)+($b*0.300));
}
//Read picture pixel by pixel
for ($y=0;$y<$height;$y++)
{
    for($x=0;$x<$width;$x++)
    {
        
        $rgb=imagecolorat($source,$x,$y);
        $r=($rgb>>16)&0xFF;
        $g=($rgb>>8)&0xFF;
        $b=$rgb &0xFF;
        //this is where we actually use y to modify 
        //our rgb values
        $gs=y($r,$g,$b);
        imagesetpixel($bwimage,$x,$y,$palette[$gs]);
        
    }
}
imagejpeg($bwimage);
?>