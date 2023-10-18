<?php

/*
 * JSON
JSON is a format used for data storage and data exchange.
JSON data can be stored in files with the .json extension.
The JSON format is a simpler and lighter alternative to XML (Extensible Markup Language) with similar functionalities.
Data is stored in a key-value format.
A JSON object starts and ends with {} curly braces.
It can contain two or more key-value pairs, separated by a comma.
Keys and values are separated by a colon, for example, {'name': 'Melih'}.
*/

echo json_encode(['name' => 'Melih']);

$arr = [
    'name' => 'Melih',
    'surname' => 'Saraç',
    'age' => 22
];
$obj ='{
    "name" : "Melih",
    "surname" : "Saraç",
    "age" : 22
}';

echo json_encode($arr);
echo "<hr>";
$arr2 = json_decode($obj/*,true --> makes it array*/);
echo "<pre>";
print_r($arr2);
echo $arr2->name;
echo "<hr>";

//json
$obj = file_get_contents('01-people.json');
echo $obj;
echo "<hr>";

//array
$arr = json_decode($obj,true);
echo $arr[0]['name'];
print_r($arr);