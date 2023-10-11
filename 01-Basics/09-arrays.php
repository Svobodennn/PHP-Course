<?php
// Create an array:

$names = array();
$names1 = [];

// Append data to array:
$names = array('Melih', 'Mammed', 'Mahluk');

// Print an array:
echo "<pre>";
print_r($names);
echo $names[1];

var_dump($names);

// Append index name to array:
$names1 = [
    'name1' => 'Melih',
    'name2' => 'Mammed'
];

print_r($names1);
echo $names1['name1'];


//      *** MULTIDIMENSIONAL ARRAYS ***
$reptiles = [
    'Snake',
    'Lizard' => ['Geko', 'Chameleon']
];
$animals = [
    'Flying Animals'=> ['Eagle','Pigeon', 'Hawk'],
    'Reptiles' => $reptiles
];

print_r($animals);
echo $animals['Flying Animals'][1];
echo $animals['Reptiles']['Lizard'][1];