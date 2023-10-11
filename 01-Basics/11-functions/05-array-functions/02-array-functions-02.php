<?php

echo "<pre>";

/*
 * shuffle();
It shuffles an array, randomly rearranging its elements.
*/

$numbers = range(1,20); //, step: #
echo "normal => ";
print_r($numbers);


shuffle($numbers);
echo "shuffle => ";
print_r($numbers);



/*
 * array_combine();
It creates an associative array by using one array for keys and another array for values.
*/

$fruits = ['apple', 'grape', 'banana']; // will throw error if the arrays doesn't have the same length
$letters = ['a', 'b', 'c'];

echo "array_combine => ";
print_r(array_combine($fruits,$letters));


/*
 * array_count_values();
It counts all the values in an array.
*/

$fruits = ['apple', 'grape', 'banana', 'banana', 'banana'];
echo "array_count_values => ";
print_r(array_count_values($fruits));


/*
 * array_flip();
It exchanges the keys and values of an array.
*/

echo "array_flip => ";
print_r(array_flip($letters));


/*
 * array_key_exists();
It checks if a specified key or index exists in an array.
*/

echo "array_key_exists => ";
var_dump(array_key_exists('d',$letters));


/*
 * array_map();
It applies a callback function to the elements of one or more arrays.
*/

$numbers_array_map = array_map(function ($number){
    return $number + 21;
}, $numbers);

function cube($number) {
    return $number*$number*$number;
}

echo "array_map => ";
print_r($numbers_array_map);

$numbers_cube = array_map('cube',$numbers);
echo "array_map cube function => ";
print_r($numbers_cube);


/*
 * array_filter();
It filters the elements of an array through a callback function.
*/

$numbers = range(1,10);

$numbers_even = array_filter($numbers, function ($number){
    return $number %2 == 0 ? $number : false;
});

echo "array_filter even numbers => ";
print_r($numbers_even);

/*
 * array_merge();
It creates a new array by merging specified arrays one after the other.
*/

echo "array_merge => ";
print_r(array_merge($numbers,$fruits,$letters));

/*
 * array_rand();
It returns a specified number of random keys from an array.
*/

echo "array_rand => ";
print_r(array_rand($numbers,5));

/*
 * array_reverse();
It reverses and returns an array.*/

echo "array_reverse => ";
print_r(array_reverse($numbers));

/*
 * array_search();
It searches for a specified value in an array and returns the first corresponding key if found.
*/

echo "array_search => ";
echo array_search('banana', $fruits)."<br>";

echo "array_search => ";
echo array_search('banana', $fruits,true);
