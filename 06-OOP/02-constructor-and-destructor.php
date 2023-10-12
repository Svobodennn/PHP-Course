<?php

/*
 * The first method that runs when a class is instantiated is
 * the __construct() method, and the last method is
 * the __destruct() method.
 * They can get parameters.
*/
namespace ConstructorDestructor;
class User{
    private $name;
    private $surname;
    public function __construct($name, $surname) {
        $this->name = $name;
        $this->surname = $surname;
        echo "Constructor worked"."<br>";
    }

    public function __destruct(){
        echo "Destructor worked";
    }

    public function Hello(){
        echo "Hello ".$this->name." ".$this->surname."<br>";
    }
}

$User = new User('Melih','Saraç');
$User->Hello();

