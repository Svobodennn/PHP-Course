<?php
//      *** Anonymous Function ***
$add = function($s1,$s2) {
    return $s1+$s2;
};
echo $add(15,20);

// Can be used as callback function
$arr = [
    2,3,4,5,6
];
$dizi = array_map(function ($e){
    return 2*$e;
}, $arr);
print_r($arr);

$operations = [
    'add' => function($a,$b){ return $a+$b; },
    'subtract' => function($a,$b){ return $a-$b; },
    'multiply' => function($a,$b){ return $a*$b; },
    'divide' => function($a,$b){ return $a/$b; }
];

echo "<br>";
echo $operations['add'](3,4)."<br>";
echo $operations['divide'](3,4)."<br>";
echo $operations['subtract'](3,4)."<br>";
echo $operations['multiply'](3,4)."<br>";
