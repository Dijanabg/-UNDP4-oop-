<?php

class Covek
{
    public $ime;
    public $prezime;
    public $zanimanje;
    public $godine;

    function __construct($ime, $prezime, $zanimanje, $godine)
    {
        $this->ime = $ime;
        $this->prezime = $prezime;
        $this->zanimanje = $zanimanje;
        $this->godine = $godine;
    }
    public function ispisi()
    {
        echo "Vase ime: " . $this->ime . "<br>Vase prezime: " . $this->prezime . "<br>Vase zanimanje: " . $this->zanimanje . "<br>Vase godine: " . $this->godine . "<br>";
    }
}
$osoba1 = new Covek("Petar", "Petrovic", "Pekar", 25);
echo $osoba1->ispisi();
echo "<br><br>";

class Zgrada
{
    public $vrata = 10;
    public $prozori = 20;
    public $spratovi = 5;
    function brojVrataIProzora()
    {
        return $this->vrata + $this->prozori;
    }
}
class Hotel extends Zgrada
{
}
$hotel1 = new Hotel();
$hotel1->ime = "Hotel Beograd";
echo "Ime hotela: " . $hotel1->ime . "<br>";
echo "Broj vrata: " . $hotel1->vrata . "<br>";
echo "Broj prozora: " . $hotel1->prozori . "<br>";
echo "Broj spratova: " . $hotel1->spratovi . "<br>";
echo "Broj vrata u prozora: " . $hotel1->brojVrataIProzora() . "<br>";
echo "Hotel je nasledio od: " . get_parent_class("Hotel") . "<br>";

echo "Zgrada je nasledila od Hotela: ";
echo is_subclass_of("Zgrada", "Hotel") ? "true" : "false";

echo "<br>Hotel je nasledio od Zgrade: ";
echo is_subclass_of("Hotel", "Zgrada") ? "true" : "false";
