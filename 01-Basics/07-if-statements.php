<?php
$condition = true;

$a = 5;
$b = 10;

if ($a < $b){
    echo "Condition 1 met";
} else if ($a == $b) {
    echo "Condition 2 met";
} else {
    echo "Condition 3 met";
}

# *** Ternary Operator ***
echo $condition ? "condition ternary met" : "condition ternary not met";