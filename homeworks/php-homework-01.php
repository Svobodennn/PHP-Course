<?php
function drawRectangle($number) {
    $row=1;
    
    while ($row <= $number) {
        
        for ($col=1;$col<=$row;$col++){
            echo "0 ";
        }
        
        echo "<br>";
        $row++;
    }
}

drawRectangle(15);