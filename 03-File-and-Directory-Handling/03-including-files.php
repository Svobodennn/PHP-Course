<?php

/*
 * Including Files
There are functions in PHP used to include another script or any file into
a PHP page. These functions allow you to include another PHP file in a PHP page,
making the variables and functions from the included PHP file available for use.

These functions are:

include
include_once
require
require_once

They are used in the following ways:

include 'file.php';
include_once 'file.php';
require 'file.php';
require_once 'file.php';

In the case of require and require_once, if the file to be included cannot be found,
the program will produce a "FATAL ERROR" and stop execution. For include
and include_once, if the included file cannot be found, the program
will issue a "WARNING" but continue running.

Files included with require_once or include_once can only be included once.
*/

//$variable = include 'somefile.php'; // if this file returns something, the $arr will keep it.
//
//print_r($variable);