<?php

// mkdir --> Create new directory. True if succesfull, false if not
// rmdir --> Delete directory

$directory = '02-test-01';
if (file_exists($directory)) {
    echo "This directory exists";
} else {
    if (mkdir($directory, 0777, false)) { // if recursive true, can create directories under directories like A/B/C...
        echo "\nDirectory has been created";
    } else {
        echo "\nAn error has occurred";
    }
}

$result = rmdir($directory);
if ($result) {
    echo "\nDirectory has been deleted";
} else {
    echo "\nAn error has occured";
}

# ***   RENAMING    ***
rename('02-test-01','02-TEST-01');

# ***   MOVING  ***
rename('02-TEST-01','test/02-TEST-01');
rename('test/02-TEST-01','02-TEST-01'); //to main directory
