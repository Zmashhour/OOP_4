<?php

use Rectangle as GlobalRectangle;

class Person
{
    private string $name;
    private string $address;

    public function __construct(string $name, string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAddress(): string
    {
        return $this->address;
    }
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    public function toString(): string
    {
        return "Person[name= {$this->name}, address= {$this->address}]";
    }
}

class Student extends Person
{
    private string $program;
    private int $year;
    private float $fee;

    public function __construct(string $name, string $address, string $program, int $year, float $fee)
    {
        parent::__construct($name, $address);
        $this->program = $program;
        $this->year = $year;
        $this->fee = $fee;
    }

    public function getProgram(): string
    {
        return $this->program;
    }
    public function setProgram($program): void
    {
        $this->program = $program;
    }

    public function getYear(): int
    {
        return $this->year;
    }
    public function setYear($year): void
    {
        $this->year = $year;
    }

    public function getFee(): float
    {
        return $this->fee;
    }
    public function setFee($fee): void
    {
        $this->fee = $fee;
    }

    public function toString(): string
    {
        $p = parent::toString();
        return "student[{$p},program= {$this->program}, year= {$this->year}, fee= {$this->fee}]";
    }
}

class Staff extends Person
{
    private string $school;
    private float $pay;

    public function __construct(string $name, string $address, string $school, float $pay)
    {
        parent::__construct($name, $address);
        $this->school = $school;
        $this->pay = $pay;
    }

    public function getSchool(): string
    {
        return $this->school;
    }
    public function setSchool($school): void
    {
        $this->school = $school;
    }

    public function getpay(): float
    {
        return $this->pay;
    }
    public function setpay($pay): void
    {
        $this->pay = $pay;
    }

    public function toString(): string
    {
        $p = parent::toString();
        return "Staff[{$p}, school= {$this->school}, pay= {$this->pay}]";
    }
}

//problems 2, 4

abstract class Shape
{
    protected string $color;
    protected bool $filled;

    public function __construct()
    {
    }
    public function __construct1(string $color, bool $filled)
    {
        $this->color = $color;
        $this->filled = $filled;
    }

    public function getColor(): string
    {
        return $this->color;
    }
    public function setColor($color): void
    {
        $this->color = $color;
    }

    public function isFilled(): bool
    {
        return $this->filled;
    }
    public function setFilled(bool $filled): void
    {
        $this->filled = $filled;
    }

    abstract public function getArea(): float;

    abstract public function getPerimeter(): float;

    public function toString(): string
    {
        return "Shape[color= {$this->color}, filled= {$this->filled}]";
    }
}

class Circle extends Shape
{
    private float $radius;

    public function __construct()
    {
    }
    public function __construct_1(float $radius)
    {
        $this->radius = $radius;
    }
    public function __construct_2(float $radius, string $color, bool $filled)
    {
        $this->radius = $radius;
        parent::__construct1($color, $filled);
    }

    public function getRadius(): float
    {
        return $this->radius;
    }
    public function setRadius($radius): void
    {
        $this->radius = $radius;
    }

    public function getArea(): float
    {
        return pi() * $this->radius * $this->radius;
    }

    public function getPerimeter(): float
    {
        return 2 * pi() * $this->radius;
    }

    public function toString(): string
    {
        $p = parent::toString();
        return "Circle[{$p}, radius= {$this->radius}]";
    }
}

class Rectangle extends Shape
{
    private float $width = 1.0;
    private float $length = 1.0;

    public function __construct()
    {
    }
    public function __construct_1(float $width, float $length)
    {
        $this->width = $width;
        $this->length = $length;
    }
    public function __construct_2(float $width, float $length, string $color, bool $filled)
    {
        $this->width = $width;
        $this->length = $length;
        parent::__construct1($color, $filled);
    }

    public function getWidth(): float
    {
        return $this->width;
    }
    public function setWidth($width): void
    {
        $this->width = $width;
    }

    public function getLength(): float
    {
        return $this->length;
    }
    public function setLength(float $length): void
    {
        $this->length = $length;
    }

    public function getArea(): float
    {
        return $this->length * $this->width;
    }
    public function getPerimeter(): float
    {
        return 2 * ($this->length + $this->width);
    }

    public function toString(): string
    {
        $p = parent::toString();
        return "Rectangle[{$p}, width= {$this->width}, length= {$this->length}]";
    }
}

class Square extends Rectangle
{
    private float $side;
    public function __construct()
    {
    }
    public function __construct11(float $side)
    {
        $side = parent::getLength();
        $this->side = $side;
    }
    public function __construct22(float $side, string $color, bool $filled)
    {
        parent::__construct_2($side, $side, $color, $filled);
    }

    public function getSide(): float
    {
        return parent::getLength();
    }
    public function setSide($side): void
    {
        $this->side = $side;
    }

    public function setWidth($side): void
    {
        $this->side = $side;
    }
    public function setLength($side): void
    {
        $this->side = $side;
    }

    public function toString(): string
    {
        $p = parent::toString();
        return "Square[{$p}, width= {$this->side}, length= {$this->side}]";
    }
}

//3

class Animal
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function toString(): string
    {
        return "Animal[name= {$this->name}]";
    }
}
class Mammal extends Animal
{

    public function __construct(string $name)
    {
        parent::__construct($name);
    }
    public function toString(): string
    {
        $p = parent::toString();
        return "Mammal[{$p}]";
    }
}

class Cat extends Mammal
{
    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    public function greets(): void
    {
        echo "Meow";
    }

    public function toString(): string
    {
        $p = parent::toString();
        return "Cat[{$p}]";
    }
}

class Dog extends Mammal
{
    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    /*public function greets() : void {
        echo "Woof";
    }*/

    /*public function greets(Dog $another) : void {
        echo "Woooof";
    }*/

    // there is no methos overloading in php so we can do this insteed
    public function greets(Dog $another): void
    {
        if ($another) {
            echo "Woooof";
        } else {
            echo "Woof";
        }
    }

    public function toString(): string
    {
        $p = parent::toString();
        return "Dog[{$p}]";
    }
}
