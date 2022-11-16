<?php

class Person
{
    private string $firstName1;
    private string $lastName1;

    public function getPersonName()
    {
        return $this->firstName1;
        return $this->lastName1;
    }

    public function setPersonName($firstName1, $lastName1)
    {
        $this->firstName1 = $firstName1;
        $this->lastName1 = $lastName1;
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
