<?php
class Fruit
{
    public $name;
    public $color;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    function get_name()
    {
        return $this->name;
    }
    function get_color()
    {
        return $this->color;
    }
}
$apple = new Fruit('Apple', "red");
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();
echo "<br>";

//Destruktor se poziva kada je objekt uništen ili skripta zaustavljena ili izašao. Ako stvorite a __destruct()funkciju, PHP će je automatski pozvati funkcija na kraju skripte. Primijetite da funkcija uništavanja počinje s dvije podvlake (__)!

//Primjer u nastavku ima funkciju __construct() koja se automatski poziva kada stvorite objekt iz klase, a funkcija __destruct() koja je automatski se poziva na kraju skripte: 
class Car
{
    public $name;
    public $color;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    function __destruct()
    {
        echo "The car is {$this->name}, color is {$this->color}.";
    }
}
$Renault = new Car('Reanult', 'Blue');
