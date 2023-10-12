<?php

/*
 * Inheritance
Allows us to transfer the properties and methods of one class
to another.

Using parent::
With parent::, we can access properties and methods with
the same names in our class and the derived class.
*/

namespace Inheritance;

class Hash{
    protected function md5Hash($string) { // protected can be inherited
        return md5($string)."HASH CLASS";
    }
    public function sha1Hash($string) {
        return sha1($string);
    }
}

class User extends Hash {
    public $username;
    public $password;


    /*
    * ***      PARENT      ***
    If the class has the same function, it's own function works.
    If we want to work inherited function, put parent::
    */
      protected function md5Hash($string) { // protected can be inherited
        return md5($string)."USER CLASS";
    }

    public function saveUser($username,$password){
        $this->username=$username;
        $this->password = parent::md5Hash($password);
    }

    public function showUser(){
        echo $this->username;
        echo "<br>";
        echo $this->password;

    }
}

$User = new User();
$User->saveUser('melihsarac',123);
$User->showUser();
