<?php

/**
 * @author hpeduction
 * @copyright 2011
 */

$a=array("car1"=>"maruti","bike"=>"hero","aircraft"=>"plane");
usort($a);
foreach($a as $key=>$value)
{
    echo "$key"."=>"."$value ";
}
?>