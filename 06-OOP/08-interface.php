<?php
/*
 * Usage of Interface
Interfaces are similar to abstract classes.
Interfaces are used to specify methods that must be
implemented in a class.

 * Features

Can include abstract methods and constants.
Only public method definitions are allowed.
A class can implement multiple interfaces.
*/

interface A{
    public function a();
    public function b();
}

interface B{
    public function c();
    public function d();
}

interface BB extends A{
    public function e();
}

class C implements A,B {

    public function a()
    {
    }
    public function b()
    {
    }

    public function c()
    {
    }

    public function d()
    {
    }
}

class D implements BB{

    public function a()
    {
    }
    public function b()
    {
    }

    public function e()
    {
    }
}