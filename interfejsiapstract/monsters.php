<?php
//Dogs can walk, bark, sit
//Cat can mjau, scratch and jump 
//Chicken can wakeUp

//Toy store sells SnoopyType
//GarfieldType whos a cat and MonsterType Dog Cat chicken who does all the behavior
//make interfaces and classes which implement this
interface DogsBehavior
{
    function walk();
    function bark();
    function sit();
}
interface CatsBehavior 
{
    function mjau();
    function scratch();
    function jump();
}
interface ChickenBehavior
{
    function wakeUp();
}

class Snoopie implements DogsBehavior
{

    public function walk()
    {
    }
    public function bark()
    {
    }
    public function sit()
    {
    }
}

class Garfield implements CatsBehavior
{

    public function mjau()
    {
    }
    public function scratch()
    {
    }
    public function jump()
    {
    }
}

class Monster implements DogsBehavior, CatsBehavior, ChickenBehavior
{

    public function walk()
    {
    }
    public function bark()
    {
    }
    public function sit()
    {
    }
    public function mjau()
    {
    }
    public function scratch()
    {
    }
    public function jump()
    {
    }
    public function wakeUp()
    {
    }
}
