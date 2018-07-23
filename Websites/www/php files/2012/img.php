<table border="2" bgcolor="yellow"> 
<tr><th>My Friend </th></tr> 
<?php 
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
?> 
</table>