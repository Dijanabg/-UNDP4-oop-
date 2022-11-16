<?php


// Vehicle has doorStatus, hoodStatus and bootStatus
// Vechicle has methods openAllDoors, and shift random Door, get door status
// Driving depends on the fuel type and makes a sound
// Vehicle can be electric car and gasoline car
// electric car has battery capacity, gasoline car has fuelLevel
// you can ask for getRemainingMileage but it depends on fuel type



abstract class Vehicle{
    public bool $doorStatus;
    public bool $hoodStatus;
    public bool $bootStatus;
    function getDoorstatus(){
echo 'Door status'.$this->doorStatus;
    }
    function openAllDoors(){
        $this->doorStatus=true;
        $this->hoodStatus=true;
    }
    function shiftRandomDoors(){
$number=random_int(1,3);
if($number==1){
    $this->doorStatus=!$this->doorStatus;
}
    }
    abstract function makeSound();
    abstract function getRemainingMilage();
}
class ElectricCar extends Vehicle {
    public string $batteryCapacity;
    public function makeSound(){
    echo '....';
    }
   
    public function getRemainingMilage() {
        
    return $this ->batteryCapacity;
    }
    }
    
    class GasolineCar extends Vehicle {
        public string $gasCapacity;
        public function makeSound(){
        echo 'xxxx';
        }
       
        public function getRemainingMilage() {
            
        return $this ->gasCapacity;
        }
        
    }