<?php

$a = 4;

switch ($a) {
    case 1:
        echo "First case";
        break;
    case 2:
        echo "Second case";
        break; // or continue;
    case 3:
    case 4:
        echo "Third and fourth case";
        break;
    default: // else
        echo "Default case";
}