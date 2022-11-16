<?php

//interfejs definise metode ali ne i telo metode
//klase implementiraju interfejse
//klasa mora da implementira sve metode interfejsa
//
//loose coupling

interface StudentBehavior
{
    function learn($examName);
    function goDrink($clubName);
}

class Student implements StudentBehavior
{
    public function learn($examName)
    {
        echo "Learnin " . $examName;
    }
    public function goDrink($clubName)
    {
        echo "Drinking in " . $clubName;
    }
}

$student1 = new Student();
$student1->learn('PHP');
echo '<br>';
$student1->goDrink('club');



abstract class DefoultPerson
{
    abstract function walk();
    function talk()
    {
        echo "I am talking";
    }
}
class Person extends DefoultPerson
{
    public function walk()
    {
    }
}
$defaultPerson = new Person("Mik");
