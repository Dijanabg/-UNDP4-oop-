<?php

//user has a name
//laptop has a model
//laptop has a procesor
//procesor has a name
//display user, laptop and procesor he owns
class laptop
{
    public string $model;
    // public $procesor;
    public procesor $personsProcesor;
    function __construct($model)
    {
        $this->model = $model;
    }
    public function getModel()
    {
        return $this->model;
    }
    public function setModel($newModel)
    {
        $this->model = $newModel;
    }
}
class procesor
{
    public string $name;


    function __construct($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($newName)
    {
        $this->brand = $newName;
    }
}
class Person
{
    public string $name;
    public laptop $personsLaptop;
    public procesor $personsProcesor;

    function __construct($name)
    {
        $this->name = $name;
    }
    public function setName($newName)
    {
        $this->name = $newName;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setLaptop($newPersonsLaptop)
    {
        $this->personsLaptop = $newPersonsLaptop;
    }
    public function getLaptop()
    {
        return $this->personsLaptop;
    }
    public function setProcesor($newPersonsProcesor)
    {
        $this->personsProcesor = $newPersonsProcesor;
    }
    public function getProcesor()
    {
        return $this->personsProcesor;
    }
}
$laptopOne = new laptop('Apple');
$procesorOne = new Procesor('Intel');
// $watchOne->setBrandAndName('Watch','Watch2');
$user = new Person('Mario');
$user->setName('Luigi');
$user->setLaptop($laptopOne);
$user->setProcesor($procesorOne);
echo $user->getName() . ' has ' . $user->getLaptop()->getModel() . ' ' . $user->getProcesor()->getName();



//sretenov kod
// <?php
// class User
// {
// public string $name;
// public Laptop $laptop;

// function __construct($name)
// {
// $this->name = $name;
// }
// }
// class Laptop
// {
// public string $model;
// public Processor $processor;

// function __construct($model)
// {
// $this->model = $model;
// }
// }

// class Processor
// {
// public string $processor;

// public function __construct($name)
// {
// $this->processor = $name;
// }
// }

// $processor = new Processor('ax2');
// $laptop = new Laptop('Acer');
// $laptop->processor = $processor;
// $user = new User('Mario');
// $user->laptop = $laptop;

// echo $user->name .' '. $user->laptop->model .' '. $user->laptop->processor->processor;