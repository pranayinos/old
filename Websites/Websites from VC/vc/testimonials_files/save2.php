<?php

if(($_FILES[file][name]==""))
{
	echo "<h2>File Feild empty</h2>";
}
else
{
	echo "File name= " .$_FILES['file']['name'];
}


?>