<?php

/*      *** Arithmetic Operators ***
  * Addition (+)
  * Subtraction (–)
  * Multiplication (*)
  * Division (/)
  * Modulus (%)
 */
$a = 3; $b = 4;

$c = (($a + $b) * $a) / ((($b * $a) - 5 ) % 3 );
echo $c;
echo "<br>";


/*      *** COMPARISON OPERATORS ***
  * $a == $b; // Equal
  * $a != $b; // Unequal
  * $a === $b; // Same
  * $a !== $b; // Different
  * $a < $b; // Smaller
  * $a > $b; // Bigger
  * $a <= $b; // Smaller or Equal
  * $a >= $b; // Bigger or Equal
  * $a <=> $b; // Spaceship
 *      --> a>b > 1 
 *      --> a<b > -1
 *      --> a==b > 0
 */


/*      *** INCREMENTAL OPERATORS ***
 * ++$a 
 * $a++
 * --$a
 * $a--
 * */

$a =3; $b = 5;
echo $a++; // prints the $a first, then increments it.
echo "<br>";
echo --$b; // decrements $b first, then prints it.


/*      *** CONCATENATION AND ASSIGNMENT OPERATORS ***
 *  = -> Assignment
 *  . -> Concatenation Assignment
 *  += -> Addition Assignment
 *  -= -> Substraction Assignment
 *  *= -> Multiply Assignment
 *  /= -> Division Assignment
 *  %= -> Modulus Assignment
 */

$a += $b;
echo "<br>";
echo $a;
echo "<br>";

echo "Hello".$a."World".$b."!";


/*      *** LOGICAL OPERATORS ***
 * && -> and
 * || -> or
 * ! -> not
 * xor -> true if either $a or $b is true, but not both.
*/
