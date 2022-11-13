<?php

class Vehicle
{
    private $manufacturer;
    private $type;

    public function setManufacturer($newManufacturer)
    {
        $this->manufacturer = $newManufacturer;
    }


    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($newType)
    {
        if ($newType == 'car') {
            $this->type = $newType;
        } else $this->setDefaultType();
    }
    private function setDefaultType()
    {
        $this->type = 'undefined';
    }
}



class Student
{
    public $name;
    private $lastName;
    public $grade;

    public function __construct($firstName, $lastName)
    {
        $this->name = $firstName;
        $this->lastName = $lastName;
    }

    static function sayHi()
    {
        return "Hi there";
    }
    // public function __destruct()
    // {
    //     echo "Removed from memory";
    // }
    public function setName($newName)
    {
        $this->name = $newName;
    }

    public function doExam()
    {
        $this->grade = rand(1, 5);
    }

    public function getName()
    {
        return $this->name;
    }

    public function getStatus()
    {
        return $this->name . " " . $this->lastName . " " . $this->grade;
    }
}
