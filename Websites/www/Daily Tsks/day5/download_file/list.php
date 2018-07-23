<table border="3" bgcolor="lime">
<tr><th>File viewer</th></tr>
<?php
$directory=opendir('.\upload');
while($file=readdir($directory)) //check this line
{
    $file_array[]=$file;
    
}
foreach($file_array as $file)
{
    echo "<tr><td>";
    
}
if( $file=)
{
    
}

?>

</table>
