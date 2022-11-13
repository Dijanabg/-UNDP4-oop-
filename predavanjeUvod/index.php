<?php
//Klasa - skup metoda i atrributa
//Objekat - jedna instanca klase



include('./commonClasses.php');

$draganasVehicle = new Vehicle();
$draganasVehicle->setManufacturer("Volvo");
$draganasVehicle->setType('car');
echo $draganasVehicle->getManufacturer();
echo $draganasVehicle->getType();
echo "<br>";
$milicasVehicle = new Vehicle();
$milicasVehicle->setManufacturer("BMW");
echo $milicasVehicle->getManufacturer();
echo "<br>";
echo "Hello World";
echo "<br>";
echo "<br>";

//class student

echo Student::sayHi();
echo "<br>";
$student1 = new Student('Dijana', 'Jovanovic');
// $student1->lastName = 'ilic';
echo $student1->doExam();
echo $student1->getStatus();
