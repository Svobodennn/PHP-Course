<?php

/*      ***CONSTANTS***
 * Starts with a letter or underscore.
 * Can hold all data types except objects.
 * Cannot start with a number.
 * Can contain Turkish characters.
 * Traditionally, constant names are always written in uppercase.
*/

define('NAME', 'Melih');
const SURNAME = "SARAÇ";
const _AGE = 22;

echo NAME." ".SURNAME." "._AGE;
