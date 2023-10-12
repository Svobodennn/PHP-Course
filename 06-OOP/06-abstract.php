<?php

/*
 * Usage of Abstract (Abstraction)
Abstract classes contain abstract methods within them.
Classes derived from an abstract class must have the
abstract methods defined in the abstract class.
It is like a schema

 *Features

Can include abstract methods and constants.
Can include regular methods, properties, and constants.
Can be defined as public, protected, or private.
A single class can only be derived from one abstract
class.
*/

Namespace Abstractt;

abstract class Product{
    public $pName;
    public $pPrice;
    public $pTax;

    abstract public function productName($pName);
    abstract public function productPrice($pPrice);
    abstract public function productTax($pTax);

    public function addProduct(){
        //SAVE TO DB
        echo "Product name: ".$this->pName."<br>";
        echo "Product price: ".$this->pPrice."<br>";
        echo "Product tax: ".$this->pTax."<br>";
    }
}

class Drink extends Product { // generate>implement methods

    public function productName($pName)
    {
        $this->pName = $pName;
    }

    public function productPrice($pPrice)
    {
        $this->pPrice = $pPrice;
    }

    public function productTax($pTax)
    {
        $this->pTax = $pTax;
    }
}
class Textile extends Product{
    public function productName($pName)
    {
        $this->pName = $pName;
    }

    public function productPrice($pPrice)
    {
        $this->pPrice = $pPrice;
    }

    public function productTax($pTax)
    {
        $this->pTax = $pTax;
    }

}

$Drink = new Drink();

$Drink->productName('Cola');
$Drink->productPrice('30TL');
$Drink->productTax('8');

$Drink->addProduct();

$Textile = new Textile();
$Textile->productName('Pants');
$Textile->productPrice('430TL');
$Textile->productTax('18');

$Textile->addProduct();
