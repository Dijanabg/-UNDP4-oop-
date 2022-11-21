<?php

interface Oblik
{
    public function povrsina();
}

class Krug implements Oblik
{
    private $precnik;
    const PI = 3.14;
    public function __construct($precnik)
    {
        $this->precnik = $precnik;
    }
    public function povrsina()
    {
        return $this->precnik * $this->precnik * self::PI;
    }
}
class Kvadrat implements Oblik
{
    private $stranica;

    public function __construct($stranica)
    {
        $this->stranica = $stranica;
    }
    public function povrsina()
    {
        return $this->stranica * $this->stranica;
    }
}
class Pravougaonik implements Oblik
{
    private $a;
    private $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
    public function povrsina()
    {
        return $this->a * $this->b;
    }
}
function racunajPovrsine(Oblik $oblik)
{
    echo $oblik->povrsina();
    echo "<br>";
}

racunajPovrsine(new Kvadrat(5));
racunajPovrsine(new Krug(3));
racunajPovrsine(new Pravougaonik(5, 2));
function povrsineOblika(Oblik ...$listaOblika)
{
    foreach ($listaOblika as $oblik) {
        echo $oblik->povrsina();
        echo "<br>";
    }
}

echo "Povrsine oblika <br>";
povrsineOblika(...[new Krug(3), new Kvadrat(4), new Pravougaonik(3, 4)]);
