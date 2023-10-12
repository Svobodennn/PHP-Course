<?php

/*
 * Final
Classes and methods defined as final cannot be
duplicated through inheritance.
*/


namespace Finall;
class One
{
    /*final*/ public function firstMethod() // final function
    {
        echo "First Method";
    }
}

/*final*/ class Two extends One // final class
{
    public function secondMethod()
    {
        echo "Second Method";
    }

    public function firstMethod() // can not extend final function
    {
        echo "First Method";
    }
}
class Three extends Two // can not extend to final class
{
    public function thirdMethod()
    {
        echo "Third Method";
    }
}

$Three = new Three();

$Three->firstMethod();
$Three->secondMethod();
$Three->thirdMethod();