<?php

abstract class Toy
{

    abstract function toySound();

    function sing()
    {
        echo "Im singing";
    }
    function speak()
    {
        echo "Im speaking";
    }
}

class Dog extends Toy
{

    public function toySound()
    {
        echo "Wof Wof";
    }
}
class Cat extends Toy
{

    public function toySound()
    {
        echo "Myaww";
    }
}
class Monster extends Toy
{
    public function toySound()
    {
        echo "Rrrrr";
    }
}

$cat = new Cat();
$cat->sing();
echo "<br>";
$cat->toySound();
echo "<hr>";
$dog = new Dog();
$dog->speak();
echo "<br>";
$dog->toySound();
echo "<hr>";
$monster = new Monster();
$monster->speak();
echo "<br>";
$monster->toySound();
echo "<hr>";
