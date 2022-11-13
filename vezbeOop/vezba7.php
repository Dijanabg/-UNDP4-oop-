<?php
class sto
{
    public $noge = 0;
    static $ukupnoStolova = 0;
    public function __construct($noge = 4)
    {
        $this->noge = $noge;
        self::$ukupnoStolova++;
    }
    public function __destruct()
    {
        self::$ukupnoStolova--;
    }
}
$sto1 = new Sto(6);
echo "Sto1 ima nogu: " . $sto1->noge . "<br>";
echo "Ukupno stolova: " . Sto::$ukupnoStolova . "<br>";
$sto2 = new Sto(4);
echo "Sto2 ima nogu: " . $sto2->noge . "<br>";
echo "Ukupno stolova: " . Sto::$ukupnoStolova . "<br>";
