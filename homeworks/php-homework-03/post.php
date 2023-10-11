<?php

$number = (int)$_POST["number"];

function checkModulus($number)
{
    if ($number % 3 == 0)
        return "$number can be divided by 3";
    else {
        $closestMultiple = ceil($number / 3,) * 3;
        return "$number cannot be divided by 3. 
        The closest number that can be divided is $closestMultiple.";
    }
}

if (!$number) {
    echo "Value can not be empty.";
} else {
    $result = checkModulus($number);
    echo $result;
}