<?php
/*
 * Method Chaining
In a class, methods can be chained by using the "->"
operator when methods return the class itself.

The underlying concept is that the method returns the
class itself, allowing for a chain of methods to be called
one after the other.
*/

class Operation{

    public $number1;
    public $number2;

    public $sum;
    public $difference;
    public $division;
    public $multiplication;

    public function add(){
        $this->sum=$this->number1+$this->number2;
        return $this;
    }
    public function subtract(){
        $this->difference = $this->number1-$this->number2;
        return $this;
    }
    public function multiply(){
        $this->multiplication = $this->number1*$this->number2;
        return $this;
    }
    public function divide(){
       $this->division = $this->number1/$this->number2;
        return $this;
    }

    public function show(){
        echo $this->sum."<br>";
        echo $this->difference."<br>";
        echo $this->multiplication."<br>";
        echo $this->division."<br>";
    }
}

$operation = new Operation();

$operation->number1 = 10;
$operation->number2 = 5;

$operation->add()->subtract()->divide()->multiply()->show();

