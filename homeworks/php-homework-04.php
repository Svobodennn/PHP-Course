<?php

class Shape
{
    public $sides;

    public function __construct($sides)
    {
        $this->sides = $sides;
    }

    public function calculatePerimeter()
    {

    }

    public function calculateArea()
    {

    }

}

class Rectangle extends Shape
{
    public function calculatePerimeter()
    {
        return 2 * ($this->sides[0] + $this->sides[1]);
    }

    public function calculateArea()
    {
        return $this->sides[0] * $this->sides[1];
    }
}

class Square extends Rectangle
{
    public function calculatePerimeter()
    {
        return $this->sides[0] * 4;
    }

    public function calculateArea()
    {
        return pow($this->sides[0], 2);

    }
}

class Triangle extends Shape
{
    public function calculatePerimeter()
    {
        return $this->sides[0] + $this->sides[1] + $this->sides[2];
    }

    public function calculateArea()
    {
        $perimeter = $this->calculatePerimeter();
        return
            bcsqrt((($perimeter / 2) * (($perimeter / 2) - $this->sides[0]) *
                (($perimeter / 2) - $this->sides[1]) *
                (($perimeter / 2) - $this->sides[2])),
                2);   //Formula for the area of a triangle with known three sides.
    }
}

$Rectangle = new Rectangle([25, 30]);
$Square = new Square([20]);
$Triangle = new Triangle([5, 12, 13]);

echo "Rectangle Heigt: <b>" . $Rectangle->sides[0] . "</b> Length: <b>" . $Rectangle->sides[1] . "</b> Perimeter: <b>" . $Rectangle->calculatePerimeter() . "</b> Area: <b>" . $Rectangle->calculateArea() . "</b><br><br>";
echo "Triangle Side Lengths: <b>" . $Triangle->sides[0] . ", " . $Triangle->sides[1] . ", " . $Triangle->sides[2] . "</b> Perimeter: <b>" . $Triangle->calculatePerimeter() . "</b> Area: <b>" . $Triangle->calculateArea() . "</b> <br><br>";
echo "Square Height: <b>" . $Square->sides[0] . "</b> Perimeter: <b>" . $Square->calculatePerimeter() . "</b> Area: <b>" . $Square->calculateArea() . "</b>";
