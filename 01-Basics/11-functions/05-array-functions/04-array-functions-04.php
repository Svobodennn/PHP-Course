<?php
echo "<pre>";

/*
 * current();
Returns the current element in an array.
*/

$arr = ["car", "bicycle", "motorcycle", "plane", "train"];
echo "current => ";
echo current($arr);
echo "<br>";

/*
 * next();
Advances the internal pointer of an array.
*/

echo "next => ";
echo next($arr);
echo "<br>";

/*
 * prev();
Reverts the internal array pointer.
*/

echo "prev => ";
echo prev($arr);
echo "<br>";

/*
 * end();
Sets the internal pointer of an array to the last element.
*/

echo "end => ";
echo end($arr);
echo "<br>";


/*
 * reset();
Positions the internal pointer of an array to the first element.
*/

echo "reset => ";
echo reset($arr);
echo "<br>";

/*
 * extract();
Imports variables from an array into the symbol table.
*/

echo "<br>";
$arr = ["one" => "car", "two" => "bicycle", "three" => "motorcycle", "plane", "train"];
echo "normal array => ";
print_r($arr);
echo "extract three => ";
extract($arr);
echo $three;


/*
 * asort();
Sorts the values of an array in ascending order while maintaining key associations.
*/

echo "<br>";
echo "asort => ";
asort($arr);
print_r($arr);

/*
 * arsort();
Sorts the values of an array in descending order while maintaining key associations.
*/

echo "<br>";
echo "arsort => ";
arsort($arr);
print_r($arr);

/*
 * ksort();
Sorts an array by keys in ascending order.
*/

echo "<br>";
echo "ksort => ";
ksort($arr);
print_r($arr);

/*
 * krsort();
Sorts an array by keys in descending order.
*/

echo "<br>";
echo "krsort => ";
krsort($arr);
print_r($arr);

