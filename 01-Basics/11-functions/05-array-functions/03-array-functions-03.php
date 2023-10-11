<?php
echo "<pre>";
/*
 * in_array();
Searches for the presence of a value in an array.
*/

echo "in_array => ";
$arr = ["Melih", "Mammed", "Mahluk", "Svoboden"];
var_dump(in_array('Melih',$arr));

/*
 * array_shift();
Removes an element from the beginning of an array.
*/

echo "normal array => ";
print_r($arr);
echo "array_shift => ";
echo(array_shift($arr)."<br>");
echo "normal array => ";
print_r($arr);
/*
 * array_pop();
Removes the last element of an array.
*/

echo "<br>normal array => ";
print_r($arr);
echo "array_pop => ";
echo(array_shift($arr)."<br>");
echo "normal array => ";
print_r($arr);

/*
 * array_slice();
Returns a portion of an array.
*/

$arr = ["Melih", "Mammed", "Mahluk", "Svoboden"];
$new_arr = array_slice($arr,0,2,false);
echo "array_slice => ";
print_r($new_arr);
/*
 * array_sum();
Calculates the sum of values in an array.
*/

$numbers = range(1,10);
echo "array_sum => ";
print_r(array_sum($numbers));
echo "<br>";
/*
 * array_product();
Calculates the product of values in an array.
*/

echo "array_product => ";
print_r(array_product($numbers));

/*
 * array_unique();
Removes duplicate values from an array.
*/

echo "<br>";
$arr = ["Melih", "Mammed", "Mahluk", "Svoboden", "Svoboden", "Svoboden"];
echo "normal array => ";
print_r($arr);
echo "array_unique => ";
print_r(array_unique($arr));

/*
 * array_values();
Returns all the values of an array.
*/

echo "array_values => ";
print_r(array_values($arr));

/*
 * array_push();
Appends one or more elements to the end of an array.
*/

echo "<br>";
$arr = ["Melih", "Mammed", "Mahluk", "Svoboden"];
echo "normal array => ";
print_r($arr);
echo "array_push => ";
array_push($arr,1,2,3);
print_r($arr);

/*
 * array_unshift();
Prepends one or more elements to the beginning of an array.
*/

echo "<br>";
$arr = ["Melih", "Mammed", "Mahluk", "Svoboden"];
echo "normal array => ";
print_r($arr);
echo "array_unshift => ";
array_unshift($arr,1,2,3);
print_r($arr);

// or $arr[] = ### | $arr[index] = ###

/*
 * array_keys();
Returns all the keys of an array or a subset of keys.
*/

echo "array_keys => ";
print_r(array_keys($arr));