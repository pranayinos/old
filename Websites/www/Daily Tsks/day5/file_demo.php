<?php
// demo of fopen//fgetc//fgets one of 3 wil work in 1 time
$handle=fopen('hey.txt','r');
/*while(!feof($handle))
{
    echo fgetc($handle)."<br>";
}
echo"<br><br>";*/
while(!feof($handle))
{
    echo fgets($handle)."<br>";
}
echo"<br><br>";
while(!feof($handle))
{
    echo fgets($handle,5);
    echo"<br>";
}
fclose($handle);


// demo of opening file withot handler
//this will move 1 line as 1 element of array

//$line=file('hey.txt');
//print_r($line);


/* dmeo of writing in a file
$s="this is writing process";
$a=fwrite($handle,$s);
echo $a;
if($a==1)
while(!feof($handle))
{
    echo fgetc($handle)."<br>";
}
*/
/*$a=file_put_contents('hey.txt',"this is no end");
if($a=='1')
while(!feof($handle))
{
    echo "yooooooo".fgetc($handle)."<br>";
}*/
?>