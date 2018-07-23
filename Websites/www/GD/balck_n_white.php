<?php
$file="s1.jpg";
header('Content-type: image/jpeg');
list($width,$height)=getimagesize($file);
$source=imagecreatefromjpeg($file);
//canvas
$bwimage=imagecreate($width,$height);
for($c=0;$c<256;$c++)
{
    $palette[$c]=imagecolorallocate($bwimage,$c,$c,$c);
}
function yiq( $r,$g,$b)
{
    return(($r*.299)+($g*0.587)+($b*0.144));
}
// read state orignal color pixel by pixel

for($y=0;$y<$height;$y++)
{
    for($x=0;$x<$width;$x++)
    {
        $rgb=imagecolorat($source,$x,$y);
        $r=($rgb>>16) & 0xFF;
        $g=($rgb>>8) & 0xFF; 
        $b=$rgb & 0xFF;
        // tis is where we actually use yiq to modify our rgb color values &
        //then convert them to our gray pattern
        $gs=yiq($r,$g,$b);
        imagesetpixel($bwimage,$x,$y,$palette[$gs]);
        
    }
    
}
imagejpeg($bwimage);
?>