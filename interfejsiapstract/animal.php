<?php



abstract class Animals
{
    function walk()
    {
        echo "Walk on 4 legs.";
    }
    abstract function makeSound();
}

class Dog extends Animals
{
    public function makeSound()
    {
        echo "wof wof";
    }
}
class Cat extends Animals
{
    public function makeSound()
    {
        echo "Myaww";
    }
}

$dog = new Dog();
$dog->walk();
$dog->makeSound();
echo "<br>";
$cat = new Cat();
$cat->walk();
$cat->makesound();
