<?php
$path = $_SERVER['DOCUMENT_ROOT']."2012/upload/";
$fullPath = $path.$_GET['download_file']; 
if($fd = fopen($fullPath,"r")) {
    $fsize = filesize($fullPath);
    $path_parts = pathinfo($fullPath);
    $ext = strtolower($path_parts["extension"]);    
    switch ($ext) {
        case "jpg":
        header("Content-type:application/jpg");
        header("Content-Disposition:attachment; filename=\"".$path_parts["basename"]."\"");
        break;
        case "pdf":
        header("Content-type:application/pdf");
        header("Content-Disposition:attachment; filename=\"".$path_parts["basename"]."\"");
        case "doc":
        header("Content-type: application/doc"); 
        header("Content-Disposition:attachment; filename=\"".$path_parts["basename"]."\"");
        case "txt":
        header("Content-type: application/txt"); 
        header("Content-Disposition:attachment; filename=\"".$path_parts["basename"]."\"");
         // use 'attachment' to force a download
        break;
        default;
        header("Content-type:application/octet-stream");
        header("Content-Disposition:filename=\"".$path_parts["basename"]."\"");
    }
    header("Content-length:$fsize");
    header("Cache-control:private"); 
    while(!feof($fd)) {
        $buffer = fread($fd,1024);
        echo $buffer;
    }
}
fclose ($fd);
exit;
?>
