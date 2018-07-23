<?php
$file="elena.jpg";
header("Content-type:image/jpg");
list($width,$height)=getimagesize($file);
$source=imagecreatefromjpeg($file);
$bwimage=imagecreate($width,$height);
echo "width=".$width."<br>"."height=".$height;
for($c=0;$c<256;$c++)
{
    $palette[$c]=imagecolorallocate($bwimage,$c,$c,$c);
}
function yiq($r,$g,$b)
{
    return(($r*0.399)+($g*0.589)+($b*0.150));
}
for($y=0;$y<$height;$y++)
{
    for($x=0;$x<$width;$x++)
    {
    $rgb=imagecolorat($source,$x,$y);
    $r=($rgb>>16) & 0xff;
    $g=($rgb>>8) & 0xff;
    $b=$rgb & 0xff;
    $gs=yiq($r,$g,$b);
    imagesetpixel($bwimage,$x,$y,$palette[$gs]);
    }
}
imagejpeg($bwimage);

?>