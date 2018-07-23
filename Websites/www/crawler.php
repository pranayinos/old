<?php
class timer
{
	var $start;
	var $pause_time;

	
	function timer($start = 0)
	{
		if($start) { $this->start(); }
	}

	
	function start()
	{
		$this->start = $this->get_time();
		$this->pause_time = 0;
	}

	
		function pause()
	{
		$this->pause_time = $this->get_time();
	}
	function get($decimals = 8)
	{
		return round(($this->get_time() - $this->start),$decimals);
	}

	
	function get_time()
	{
		list($usec,$sec) = explode(' ', microtime());
		return ((float)$usec + (float)$sec);
	}
}

function get_all_strings_between($string,$start,$end)
{
//Returns an array of all values which are between two tags in a set of data
$strings = array();
$startPos = 0;
$i = 0;
//echo strlen($string)."\n";
while($startPos < strlen($string) && $matched = get_string_between(substr($string,$startPos),$start,$end))
{
if ($matched == null || $matched[1] == null || $matched[1] == '') break;
$startPos = $matched[0]+$startPos+1;
array_push($strings,$matched[1]);
$i++;
}
return $strings;
}

function get_string_between($string, $start, $end){
//$string = " ".$string;
$ini = strpos($string,$start);
if ($ini == 0) return null;
$ini += strlen($start);
$len = strpos($string,$end,$ini) - $ini;
return array($ini+$len,substr($string,$ini,$len));
}
?>

<?php
web_crawler(null);
 function  web_crawler($link) {
//echo microtime().'</br>';
//echo time()/(60 * 60*24*365);
$timer = new timer(1); 

$query_time = $timer->get();
if($link){
$cont=file_get_contents("http://www.thehindu.com");
}else
$cont=file_get_contents('http://www.thehindu.com');


$resultfiles = get_all_strings_between($cont,'href="','"');



echo "\n</br></br>";
$subject = "Some";
$cont=explode(" ",$cont);

$i=0;


$con=mysql_connect("localhost","root","");

if($con)
  echo "Connected to my sql</br>";
  
  if(mysql_select_db("testcrawler",$con))
  echo "Connected to database</br>";
  
$cont = array_unique($cont);

foreach($cont as $key){
$pattern = '/^[a-zA-Z]*$/';
preg_match($pattern, $key, $matches, PREG_OFFSET_CAPTURE);

$term= $matches[0][0];
if(strlen($term)>4){
echo $term."";

if($term)
                                     mysql_query("INSERT into tab_key (keywords) values ('$term')",$con);
echo "\t";}
}

print_r($items);


echo "</br></br>";


$resultfiles = array_unique($resultfiles);

foreach($resultfiles as $result){
  preg_match("@^(?:http://)?([^/]+)@i", $result, $matches);
  //preg_match_all("/<a(?:[^>]*)href=\"koolwap.in([^\"])\"(?:[^>]*)>(?:[^<]*)<\/a>/", $result, $matches);
if($matches && $result[0]!='#' ){
echo $result;
if($result)
                         mysql_query("insert into tab_lnk (links) values ('$result')",$con);                  
echo "</br>";}
}

$processing_time = $timer->get();




echo "";
echo '<b><i>Process Time =</i></b>'.$processing_time;

}

$i=1;
$result = mysql_query("SELECT * FROM tab_lnk");
while($row = mysql_fetch_array($result))
  {
  echo '<hr></br><b>Next link </b>'.$row['links']."</br>";
  echo "</br>";
  web_crawler($row['links']);
  $i++;
  if($i>5)exit();
  }
$con=mysql_connect("localhost","root","");
mysql_close($con);


?> 



