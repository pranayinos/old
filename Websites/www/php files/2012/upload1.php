<?php
echo "File Name: ".$_FILES['userfile']['name']."<br>";
echo "tmp name: ".$_FILES['userfile']['tmp_name']."<br>";
echo "File Type: ".$_FILES['userfile']['type']."<br>";
echo "<br><br>";
$add="upload/".$_FILES['userfile']['name'];
if(move_uploaded_file($_FILES['userfile']['tmp_name'],$add))
{
echo "Successfully uploaded the image";
$img_folder = "upload/";
$directory = opendir('./upload/');
$path = $_SERVER['DOCUMENT_ROOT']."upload/";
while ($files=readdir($directory)) 
{ 
     
  $file_array[] = $files;

} 
foreach ($file_array as $files) 
{ 
 
if($files == ".." || $files == ".") 
{ 
continue; 
} 
echo "<tr><td>";
echo '<img src="'.$img_folder.$files.'" border=1 height=200px width=200px>';
echo "</td></tr>"; 
} 

}
else
{
echo "Failed to upload file Contact Site admin to fix the problem";
exit;
}
?>