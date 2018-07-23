<hr size="5" width="100%" color="green"/>
<center><font color="maroon"> <h1>Welcome Date Demo</h1></font></center>
<hr size="5" width="100%" color="green"/>

<?php
     echo date("Y-m-d")."<br>";
	echo date("Y/m/d")."<br>";
	echo date("M d, Y")."<br>";
	echo date("F d, Y")."<br>";
	echo date("D M d, Y")."<br>";
	echo date("l F d, Y")."<br>";
	echo date("l F d, Y, h:i:s:A")."<br>";
	echo date("l F d, Y, h:i")."<br>";

echo "Current date". date('y-m-d h:i:s', strtotime('now'))."<br>";
echo "Next Date". date('y-m-d h:i:s', strtotime('+1 day'))."<br>";
echo "Next Monday date".date('y-m-d h:i:s', strtotime('next Monday'))."<br>";

?>