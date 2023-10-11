<?php

//          *** FOR ***
//for ($statement1;$statement2;$statement3){}

for ($i = 0; $i <= 10; $i++){
    echo $i;
}

$arr = [
    'Melih',
    'Mammed',
    'Mahluk',
    'Svoboden'
];

echo "<br>";
for ($i = 0; $i <= count($arr)-1; $i++) {
    echo $i." - ".$arr[$i]."| ";
}

//          *** FOREACH ***
//foreach ($array as $item) {}
//foreach ($array as $key => $item) {}

echo "<br>";
$arr1 = ['Melih', 'Mammed', 'Mahluk', 'Svoboden'];
foreach ($arr1 as $key => $item) {
    echo $key." - ".$item." ";
}
foreach ($arr1 as $index => $item) {
    echo $arr1[$index];
}


//          *** WHILE - DO WHILE ***
echo "<br>";
$i = 0;
while ($i <= 10){
    echo "Hello";
    $i++;
}

echo "<br>";
$i = 0;
do {
    echo "Gracias";
    $i--;
} while($i > 0);