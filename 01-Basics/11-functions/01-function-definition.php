<?php

function name(){
    return "Melih";
}

$name = name();
echo $name;

function add(int $a,int $b=4): int
{
    return $a+$b;
}

echo add(5,10);


