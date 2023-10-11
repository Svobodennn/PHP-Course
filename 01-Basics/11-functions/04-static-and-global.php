<?php

//               *** STATIC ***
// When a variable declared as static inside a function or method,
// it means that the variable retains its value between multiple calls
// to that function or method.
function foo() {
    static $number = 0;
    echo $number;
    $number++;
}

foo();
foo();
foo();
foo();


//               *** GLOBAL ***
$name = "Melih";
function writeName() {
    global $name; // accessed to variable out of the function block.
    echo $name;
}

writeName();