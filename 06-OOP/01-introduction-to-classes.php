<?php

/*
 * class
 * In PHP, a class is a blueprint for creating objects,
 * encapsulating data and methods for organizing and
 * structuring code.
 *
 *  this
 * "this" refers to the current object instance,
 * allowing you to access its properties and methods from
 * within the class.
 */

class User{
    // Proporties
    // Methods

    public $name = "Melih";
    const AGE = 22;
    public $total;
    public function writeName()
    {
        echo $this->name." Saraç"; // or return
    }

    public function add($num1, $num2){
        return $this->total = $num1 + $num2;
    }
}

# ***   STARTING A CLASS    ***
$User = new User(); // now we can access to User class' methods and proporties
$User->name = "Meliiih";
$User->writeName(); echo "<br>";

echo $User->add(10,20); echo "<br>";
# Accessing to constants(Doesn't need to start the class)
echo $User::AGE;

echo "<hr>";

class User2{
    public $name;
    public $surname;
    public $mail;
    public $age;

    public function addUser($name, $surname, $mail, $age){
        $this->name = $name;
        $this->surname = $surname;
        $this->mail = $mail;
        $this->age = $age;
    }
}

$User2 = new User2();

$User2->addUser('Melih','Saraç','melih.sarac@hotmail.com', 22);
echo "Hello, my name is ".$User2->name;
//echo $User2->surname;
//echo $User2->mail;
//echo $User2->age;
echo "<hr>";


/*
 * Accessibility

 * public
Accessible from anywhere.

 * private
Accessible only from within the class.

 * protected
Not accessible from outside.
Accessible within the class.
Can be used through inheritance.

Can be set getters and setters to access to proporties
*/

class User3{ // right click>generate>getter and setters
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return User3
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     * @return User3
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     * @return User3
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
        return $this;
    }

    public $name;
    private $surname;
    protected $mail;
}

$User3 = new User3();
//$User3->surname = 'test';  // Member has private visibility
//$User3->mail = 'test'; // Member has protected visibility
$User3->setName("Melih");
$User3->setSurname("Saraç");
$User3->setMail("melih.sarac@hotmail.com");

echo $User3->getName()." "
    .$User3->getSurname()." "
    .$User3->getMail();

