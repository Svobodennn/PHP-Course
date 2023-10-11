<?php

/* *** DATA TYPES ***
  * String "Melih Saraç" 'Test' '3' "2"
  * Integer 100 255
  * Float(Double) 2.5
  * Boolean(true, false)
  * Array(arr) ['a','b'], array(1,2)
  * Object(obj)
  * NULL
*/

$a_bool = TRUE; // boolean || $a_str  = "Melih Saraç";  // string
$a_str = 'Google';  // string
$a_int = 27;     // integer
$a_obj = new stdClass(); // object
$a_null = null; // null
$a_array = ['1','2']; // array
$a_array2 = array(1,"2"); // array
$a_float = 1.5; // float
$a_bool = true; // boolean


echo gettype($a_bool)."<br>";
echo gettype($a_str)."<br>";
echo gettype($a_int);