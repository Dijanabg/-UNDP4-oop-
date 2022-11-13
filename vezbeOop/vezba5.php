<?php

class SetovanjePrikazivanje
{
    private $a = 5;

    public function getA()
    {
        return $this->a;
    }

    public function setA($a)
    {
        $this->a = $a;
    }
}
$pristup = new SetovanjePrikazivanje;
//echo $pristup->a; //ne moze za private $a
echo $pristup->getA() . "<br>";
$pristup->setA(100);
echo $pristup->getA() . "<br>";
