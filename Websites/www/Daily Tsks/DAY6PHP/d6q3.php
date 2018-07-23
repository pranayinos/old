<?php
class A {
    function example() {
        echo "I am the original function A::example().<br />\n";
    }
}

class B extends A {
    function example() {
        echo "I am the redefined function B::example().<br />\n";
        A::example();
    }
}

// there is no object of class A.
// this will print
//   I am the original function A::example().<br />
A::example();

// create an object of class B.
$b = new B;

// this will print 
//   I am the redefined function B::example().<br />
//   I am the original function A::example().<br />
$b->example();
?> 
