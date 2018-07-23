<table border="2" bgcolor="yellow"> 
<tr><th>file viewer</th></tr> 
<?php 
$directory = opendir('.\upload'); 
while ($files=readdir($directory)) 
{ 
$file_array[] = $files; 
} 
foreach ($file_array as $files) 
{ 
echo "<tr><td>"; 
if($files == ".." || $files == ".") 
{ 
continue; 
} 

echo "<a href='download.php?download_file=$files '>$files</a>";
echo "</td></tr>"; 
} 
?> 
</table>