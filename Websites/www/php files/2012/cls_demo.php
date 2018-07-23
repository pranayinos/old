<?php
class A
{
    function fun()
    {
        if (isset($this)) {
            echo '$this is defined (';
            echo get_class($this);
            echo ")<br>";
        } else {
            echo "\$this is not defined.<br>";
        }
    }
}
class B
{
    function bar()
    {
        A::fun();
    }
}

$a = new A();
$a->fun();
A::fun();
$b = new B();
$b->bar();
B::bar();
?> 