<?php

/*
 * Static
Defining class properties or methods as static allows
them to be used without initializing the class.

Static methods are stored in RAM and are more efficient.

Because static methods are stored in RAM, when we restart
the class, we can access data that has been updated
statically.
*/

namespace Staticc;

class User
{
    public static $name;
    public $surname;

    public static function setName($name)
    {
        // can not use $this in static method, instead self::
        self::$name = $name;
        //self::$surname // is not static

        // access not static values
        $self = new self();
        $self->surname;

        echo $name;
    }

    public static function getName(){
        return self::$name;
    }
}

User::$name = "Melih"; // stored
User::setName("Melih Saraç");

// initialize class
$User = new User();
$User->surname = "Saraç";

// use stored value
echo $User::$name." ".$User->surname;

//access static values
User::setName('melih saaaraç');
echo User::getName();