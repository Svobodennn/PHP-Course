<?php
/*
 * print_r();
This function prints the representation of a variable or an array to the screen.
*/

$arr = [1,2,3,4,5,6,7,8,9];

/*
 * var_dump();
This function displays information about a variable,
including its type and value. For arrays and objects,
it shows the complete structure along with the values
of its components.
*/



/*
 * implode();
It concatenates the elements of an array into a string.
*/

$arr_implode = implode(" ^-^ ", $arr);
echo "implode => ".$arr_implode."<br>";

/*
 * explode();
It splits a string into an array by a delimiter.
*/

$arr_explode = explode("-", $arr_implode);
echo "explode => ";
print_r($arr_explode);
echo "<br>";

/*
 * count();
It returns the number of elements in an array or the number of things in an object.
*/

echo "count => ".count($arr)."<br>";

/*
 * is_array();
It checks whether a variable contains an array or not.
*/

echo "is_array => ".is_array($arr)."<br>";