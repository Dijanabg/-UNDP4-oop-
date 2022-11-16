<?php


//vechicle can drive and shiftGears
//FlayingThing can fly and land
//sailingThing can float

//Implement Car, Helicopter, FlyingCar and HoverBoatCar
//instanciate one of each and call methods

interface VehicleBehavior
{
    function drive();
    function shiftGears();
}
interface FlyingThingBehavior
{
    function fly();
    function land();
}
interface sailingThing
{
    function float();
}

class Car implements VehicleBehavior
{
    public function drive()
    {
        echo "Car drive :)<br>";
    }
    public function shiftGears()
    {
    }
}
class Helicopter implements FlyingThingBehavior
{
    public function fly()
    {
        echo "Helicopter fly :) <br>";
    }
    public function land()
    {
        echo "Helicopter not flying anymore :) <br>";
    }
}
class FlyingCar implements FlyingThingBehavior, VehicleBehavior
{
    public function fly()
    {
    }
    public function land()
    {
    }
    public function drive()
    {
    }
    public function shiftGears()
    {
    }
}
class HoverBoatCar implements sailingThing, VehicleBehavior, FlyingThingBehavior
{
    public function float()
    {
    }
    public function drive()
    {
    }
    public function shiftGears()
    {
    }
    public function fly()
    {
    }
    public function land()
    {
    }
}
$car = new Car("Volvlo", "x25");
echo $car->drive();

$helicopter = new Helicopter();
echo $helicopter->fly();
