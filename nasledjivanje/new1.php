<?php



class Person
{
    protected string $firstName;
    protected string $lastName;
    protected Calculator $personsCalculator;
}
class Calculator
{
    public $model;
    public $type;
}
class Student extends Person
{
    protected $indexNumber;
}
$student = new student();
