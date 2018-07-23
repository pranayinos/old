<hr width="100%" size="5" color="green"/>
<center><h1>Array Demo</h1> </center>
<hr width="100%" size="5" color="green"/>
<?php
$arr = array("Santosh"=>"Dotnet","Rahul"=>"J2EE","Harish"=>"Core Java");
sort($arr);
echo  "<h1>This is Sort Demo</h1>";
foreach($arr as $val)
{
    echo $val."<br>";
}
$name = array("b"=>"Rahul","c"=>"Hriday","a"=>"Santosh","d"=>"Parvesh");
ksort($name);
echo  "<h1>This is ksort Demo</h1>";
foreach($name as $key=>$val)
{
    echo $key."=>".$val."<br>";
}
$name_asort = array("A"=>"E","C"=>"G","D"=>"I","B"=>"H");
asort($name_asort);
echo  "<h1>This is asort Demo</h1>";
foreach($name_asort as $key=>$val)
{
    echo $key."=>".$val."<br>";
}
echo  "<h1>This is arsort Demo</h1>";
$countries = array ("e" => "United States" ,
"d" => "United Kingdom",
"c" => "Canada",
"b" => "Costa Rica",
"a" => "Germany");
arsort ($countries);
while (list ($key, $val) = each ($countries)) {
echo "Element $key equals $val<BR>\n";
}

$fname = array("b"=>"Rahul","c"=>"Hriday","a"=>"Santosh","d"=>"Parvesh");

$name1=array_reverse($fname);
echo  "<h1>This is array_reverse Demo</h1>";
foreach($name1 as $key=>$val)
{
    echo $key."=>".$val."<br>";
}
$a=array("a","b","c","d","e","f","g");
$b=array_slice($a,0,4);
echo  "<h1>This is array_slice Demo</h1>";
foreach($b as $key=>$val)
{
    echo $key."=>".$val."<br>";
}  
echo  "<h1>This is range Demo</h1>";
$num = range("a","z",2);
foreach($num as $val)
{
    echo $val."<br>";
}
echo  "<h1>This is array_walk Demo</h1>";
function myfun($s)
{
    echo "$s <br/>";
}
$arr1 = array(4,5,6,8);
array_walk($arr1,"myfun")
?>
