<?php
class A
{
  private  $var = "Anil";
    function fun()
    {
        echo self::$var;
    }
}
$obj = new A();
$obj->fun();


?>