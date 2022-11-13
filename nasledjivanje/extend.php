<?php

class User
{
    public string $firstAndLastName;

    public function getFirstAndLastName()
    {
        return $this->firstAndLastName;
    }


    public function setFirstAndLastName($firstAndLastName)
    {
        $this->firstAndLastName = $firstAndLastName;
    }
}

class Student extends User
{
    private $indexNumber;

    public function getIndexNumber()
    {
        return $this->indexNumber;
    }


    public function setIndexNumber($indexNumber)
    {
        $this->indexNumber = $indexNumber;
    }
    function __construct()
    {
    }
}

$student = new Student();
$student->setFirstAndLastName('super Mario');
$student->setIndexNumber('178/10/1');
echo $student->getFirstAndLastName() . " " . $student->getIndexNumber();
