<?php

/*
 * strlen($text);
 * mb_strlen($text) --> multibyte
Returns the length of the given text, which is the number of characters.
*/

$text = "     Melih SARAÇ 2023       ";
echo "strlen => ";
echo strlen($text);
echo "<br>";
echo "mb_strlen => ";
echo mb_strlen($text);
echo "<br>";

/*
 * explode($delimiter, $text);
Splits the given text into parts based on the specified delimiter character and returns them as an array.
*/

echo "explode => ";
$exploded = explode(" ", $text);
print_r($exploded);
echo "<br>";

/*
 * implode($delimiter, $array);
This function, unlike the explode() function, combines the values in an array using the specified delimiter.
*/

echo "implode => ";
echo implode("#", $exploded);
echo "<br>";

/*
 * str_split($text, $number);
 * mb_str_split --> multibyte
Divides the given text into an array by grouping it into sets of the specified number of characters. If the number is not specified, it divides the text letter by letter into an array.
*/

echo "str_split => ";
$splitted = str_split($text,3);
print_r($splitted);
echo "<br>";
echo "mb_split => ";
$splitted = mb_str_split($text,3);
print_r($splitted);
echo "<br>";

/*
 * ltrim($text), rtrim($text), trim($text);
Removes unnecessary spaces from the left (ltrim), right (rtrim), or both sides (trim) of the given text.
*/

echo "ltrim, rtrim, trim => ";
$trim_text = $text;
$trim_text = ltrim($trim_text);
echo strlen($trim_text);

echo "<br>";
$trim_text = $text;
$trim_text = rtrim($trim_text);
echo strlen($trim_text);

echo "<br>";
$trim_text = $text;
$trim_text = trim($trim_text);
echo strlen($trim_text);

echo "<br>";

/*
 * substr($text, $start, $length);
Returns a portion of the text starting from the specified position and with the desired length.
*/

echo "substr => ";
echo substr($text,9,10);
echo "<br>";

/*
 * strtolower($text), strtoupper($text);
Converts the given text to lowercase (strtolower) and uppercase (strtoupper), respectively.
*/

echo "strtolower => ";
echo strtolower($text);
echo "<br>";
echo "strtoupper => ";
echo strtoupper($text);
echo "<br>";

/*
 * mb_strtolower() and mb_strtoupper();
Converts the given text to lowercase and uppercase, respectively, without causing issues with special characters like Turkish characters.
*/

echo "mb_strtolower => ";
echo mb_strtolower($text);
echo "<br>";
echo "mb_strtoupper => ";
echo mb_strtoupper($text);
echo "<br>";

/*
 * ucfirst($text), ucwords($text);
These two functions respectively convert the first character of the given text (ucfirst) and the first character of each word in the text (ucwords) to uppercase.
*/

$lower_text = mb_strtolower($text);
echo "ucfirst => ";

echo ucfirst(trim($lower_text));
echo "<br>";
echo "ucwords => ";
echo ucwords($lower_text);
echo "<br>";

/*
 * str_replace($search, $replace, $text);
Replaces the source characters in the given text with the target characters. This function is case-sensitive.
*/

echo "str_replace => ";
$replaced_text = str_replace('Melih','Mammed',$text);
echo $replaced_text;
echo "<br>";

/*
 * nl2br($text);
Used in string expressions, it replaces the newline character (\n) with the HTML line break tag <br> in the source code.
*/

echo "nl2br => ";
echo "Hello\n World\t!";
echo "<br>";

/*
 * md5($text), sha1($text);
Returns the complex md5 and sha1 hashes corresponding to the given text, respectively.
*/
echo "md5 => ";
echo md5($text);
echo "<br>";
echo "sha1 => ";
echo sha1($text);
echo "<br>";

/*
 * strstr();
Returns the portion of a string that comes after the specified character in a string.
*/

echo "strstr => ";
echo strstr($text,'2');


