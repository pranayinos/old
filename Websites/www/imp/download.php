<?php
$path=$_SERVER['DOCUMENT_ROOT']."day7/upload/";
$fullpath=$path.$_GET['download_file'];
if($fd=fopen($fullpath,"r"))
{
    $fsize=filesize($fullpath);
    $path_parts=pathinfo($fullpath);
    $ext=strtolower($path_parts["extension"]);
    switch($ext)
    {
        case "jpeg":
        header ("Content-type:application/jpeg");
        header ("Content-disposition:attachement; filename=\"".$path_parts["basename"]);
        break;
        case "pdf":
        header ("Content-type:application/pdf");
        header ("Content-disposition:attachement; filename=\"".$path_parts["basename"]);
        break;
        case "txt":
        header ("Content-type:application/txt");
        header ("Content-disposition:attachement; filename=\"".$path_parts["basename"]);
        break;
        case "doc":
         header ("Content-type:application/doc");
        header ("Content-disposition:attachement; filename=\"".$path_parts["basename"]);
        break;
        default:
         header("Content-type:application/octet-stream");
         header("Content-disposition:filename=\"".$path_parts["basename"]);
    }

header ("Content-length:$fsize");
header ("Cache-control:private");
while(!feof($fd))
{
    $buffer=fread($fd,1024);
    echo $buffer;
    
}

fclose($fd);
exit;
}

?>