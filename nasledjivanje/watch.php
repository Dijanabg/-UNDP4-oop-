<?php

class Watch
{
    private string $brand;
    private string $name;

    function __construct($brand, $name)
    {
        $this->brand = $brand;
        $this->name = $name;
    }
    public function getBrandAndName()
    {
        return $this->brand . ' ' . $this->name;
    }
    public function setBrandAndName($newBrand, $newName)
    {
        $this->brand = $newBrand;
        $this->name = $newName;
    }
}

class Person
{
    private string $name;
    private Watch $personsWatch;

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
    public function setWatch($newPersonsWatch)
    {
        $this->personsWatch = $newPersonsWatch;
    }
    public function getWatch()
    {
        return $this->personsWatch;
    }
}

$watchOne = new Watch('Cassio', 'Sat');
// $watchOne->setBrandAndName('Watch','Watch2');
$user = new Person('Mario');
$user->setName('Luigi');
$user->setWatch($watchOne);
echo $user->getName() . ' wears ' . $user->getWatch()->getBrandAndName();
