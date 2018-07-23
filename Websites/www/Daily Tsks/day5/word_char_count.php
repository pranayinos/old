<?php
if(isset($_POST['sub']))
{
    $a=str_split($_POST['t1']);
    if( array_search('.',$a))
    {
      
      if(file_exists($_POST['t1']))
      {
        $filename=$_POST['t1'];
        $str=file_get_contents($filename);    
        $charno=strlen($str);
        echo "<hr>"."No of characters in the given file is : ".$charno;
        $farr=explode(" ",$str);
        $wordno=count($farr);
        echo "<hr>"."No of words in the given file is : ".$wordno."<hr>";
      }
      else
      {
        echo "file does not exist";
      }
    }
    else
    {
        echo "file extension missing";
    }
}
else
{
?>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" >
<center><h1 color=fuchsia>Count Word and Character</h1><b ></b></b></center>
<hr size="3" width="75%" color="red" align="center" />
<br />
<br />
Enter File Name(with extension)<br />
<input type="text" name="t1" size="50"/>
<br />

<br /><br />
<center><input type="submit" name="sub" value="Enter" align="center" /></center>

</form>
<?php
}
?>
