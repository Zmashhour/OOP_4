<?php


class Author{
    private string $name;
    private string $email;
    private string $gender;

    public function __construct(string $name, string $email, $gender){
        $this->name = $name;
        $this->email = $email;
        $this->gender = $gender;
    }
    
    public function getName() : string {
        return $this->name;
    }

    public function getEmail() : string {
        return $this->email;
    }

    public function setEmail($email) : void {
        $this->email = $email;
    }

    public function getGender() : string {
        return $this->gender;
    }

    public function toString(): string
    {
        return "Author [name= {$this->name}, email= {$this->email}, gender= {$this->gender}]";
    }

}
//$author = new Author("zeyad", "zoz@gmail.com", "m");
//echo $author->toString();

class Book{
    private string $name;
    private array $authors; 
    private float $price;
    private int $qty = 0;

    public function __construct(string $name, array $authors, float $price)
    {
        $this->name = $name;
        $this->authors = $authors;
        $this->price = $price;
    }

    public function __construct1(string $name, array $authors, float $price, int $qty)
    {
        $this->name = $name;
        $this->authors = $authors;
        $this->price = $price;
        $this->qty = $qty;
    }

    public function getName() : string {
        return $this->name;
    }
    
    public function getAuthor() : array {
        return $this->authors;
    }
    
    public function getPrice() : float {
        return $this->price;
    }

    public function setPrice($price) : void {
        $this->price = $price;
    }

    public function getQty() : int {
        return $this->qty;
    }

    public function setQty($qty) : void {
        $this->qty = $qty;
    }

    public function toString(): string
    {
        $authorStr = [];
        foreach ($this->authors as $author) {
            $authorStr[] = $author->getName();
        }
        $authorString = implode(", ", $authorStr);
        return "Book [name={$this->name}, authors={{$authorString}}, price={$this->price}, qty={$this->qty}]";
    }



}

$author1 = new Author("sayed", "sayed@gmail.com", "m");
$author2 = new Author("soska", "soska@gmail.com", "f");
$authors = [$author1, $author2];
$book = new Book("Sample Book", $authors, 19.99, 10);
echo $book->toString();


class Circle{
    private float $radius = 1.0;
    private string $color = 'red';

    public function __construct()
    {
        
    }
    public function __construct1(float $radius)
    {
        $this->radius = $radius;
    }
    public function __construct2(float $radius, string $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    public function getRadius() : float {
        return $this->radius;
    }
    public function setRadius($radius) : void {
        $this->radius = $radius;
    }

    public function getColor() : string {
        return $this->color;
    }
    public function setColor($color) : void {
        $this->color = $color;
    }

    public function getArea() : float {
        return pi() * $this->radius * $this->radius;
    }

    public function toString() : string {
        return "Circle[radius= {$this->radius}, color= {$this->color}]";
    }
}

class Cylinder extends Circle{
    private float $height = 1.0;
    
    public function __construct()
    {
    }
    public function __construct_1(float $radius)
    {
        parent::__construct($radius);
    }
    public function __construct_2(float $radius,float $height)
    {
        parent::__construct($radius);
        $this->height = $height;
    }
    public function __construct_3(float $radius, float $height, string $color)
    {
        parent::__construct2($radius,$color);
        $this->height = $height;
    }

    public function getHeight() : float {
        return $this->height;
    }
    public function setHeight($height) : void {
        $this->height = $height;
    }

    public function getVolume() : float {
        return $this->getArea() * $this->height;
    }
}
$c = new Cylinder(1,1);
echo $c->getVolume();