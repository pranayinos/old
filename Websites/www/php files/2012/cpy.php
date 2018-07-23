<?php
//if(copy('a.txt','b.txt'))
//{
//   echo "file copy "; 
//}
$n_width=100; 
$n_height=100;

$tsrc="thimg/".$_FILES[userfile][name]; //echo $tsrc;
if (!($_FILES[userfile][type] =="image/jpeg" OR $_FILES[userfile][type]=="image/gif")){echo "Your uploaded file must be of JPG or GIF. Other file types are not allowed<BR>";
exit;}

if($_FILES['userfile']['type']=="image/jpeg"){
$im=ImageCreateFromJPEG($add); 
$width=ImageSx($im); // Original picture width is stored
$height=ImageSy($im); // Original picture height is stored
$newimage=imagecreatetruecolor($n_width,$n_height); 
imageCopyResized($newimage,$im,0,0,0,0,$n_width,$n_height,$width,$height);
ImageJpeg($newimage,$tsrc);

}


?>