<?php

class Vehicle
{
    private $manufecturer;
    private $model;

    function setManufecturer($manufecturer)
    {
        $this->manufecturer = $manufecturer;
    }
    function getManufecturer()
    {
        return $this->manufecturer;
    }

    function setModel($model)
    {
        $this->model = $model;
    }
    function getModel($model)
    {
        return $this->$model;
    }
    function __construct()
    {
    }
}

class Truck extends Vehicle
{
    private $carrigeSize;

    function setCarrigeSize($carrigeSize)
    {
        $this->carrigeSize = $carrigeSize;
    }
    function getCarrigeSize()
    {
        return $this->carrigeSize;
    }
}

class Car extends Vehicle
{
    private $type;

    function setType($type)
    {
        $this->type = $type;
    }
    function getType()
    {
        return $this->type;
    }
}
$car = new Car();
$truck = new Truck();
$truck->setType("Volvo ");
// private atribute klase koje nasledjuju ne vide
// public atribute klase koje nasledjuju vide
// protected atribute vide klase koje nasledjuju, ali ne i ostali