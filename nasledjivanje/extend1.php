<?php

class Person
{
    private string $firstName;
    private string $lastName;

    public function getPersonName()
    {
        return $this->firstName;
        return $this->lastName;
    }

    public function setPersonName($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
}

class Student extends Person
{
    public string $indexNumber;
    function __construct()
    {
    }
}

class Employee extends Person
{
    public string $employeeNumber;
    function __construct()
    {
    }
}
$student = new Student();
$student->setPersonName("Lilian", "lil");
$employee = new Employee();
$employee->setPersonName('super', 'Mario');
