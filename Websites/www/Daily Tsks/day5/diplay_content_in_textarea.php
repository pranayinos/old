<?php
if(isset($_POST['sub']))
{
    $a=str_split($_POST['t1']);
    if( array_search('.',$a))
    {
      $word= $_POST['t2'];
      if(file_exists($_POST['t1']))
      {
        $filename=$_POST['t1'];
        $str=file_get_contents($filename);
        ?>
        <textarea cols="100" rows="100"><?php
        echo $str;
        ?>
        </textarea>
        <?php
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
<center><h1>Search</h1><b ></b></b></center>
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