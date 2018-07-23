<hr width="100%" size="5" color="green"/>
<center><h1>Array Demo</h1> </center>
<hr width="100%" size="5" color="green"/>
<?php
function by_length($a, $b) {
$l_a = strlen ($a);
$l_b = strlen ($b);
return ($l_a > $l_b) ? 1 : 0;
}
$countries = array ("e" => "United States" ,
"d" => "United Kingdom",
"c" => "Canada",
"b" => "Costa Rica",
"a" => "Germany");
usort ($countries, "by_length");
while (list ($key, $val) = each ($countries)) {
echo "Element $key equals $val<BR>\n";
}

$ints = range (1, 25);
// Seed the random number generator:
shuffle ($ints);
while (list ( , $num) = each ($ints)) {
echo "$num<BR>\n";
}

echo array_sum($ints);

$states = array("UP","MP");
print "before unshift:<br />";
print_r($states);

array_unshift($states,"HP","RP");

print "<br />after unshift:<br />";
print_r($states);

?>