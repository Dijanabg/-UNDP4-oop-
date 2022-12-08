<?php

class Pensioner extends Customer
{
    public static float $discount = 0.2;

    //T-property: static -> method: static
    //T-property: static -> method: non static
    //T-property: non static -> method: non static
    //F-property: non static -> method: static

    public static function getDiscount()
    {
        // $this->money;
        return self::$discount;
    }
    public function buy(Order $o)
    {
        if ($this->money < $o->getTotalPrice() * self::$discount)
            echo "You don't have enough money!";
        else {
            $this->money -= $o->getTotalPrice() * (1 - self::$discount);
            echo "$this->firstName has bought:<br>$o";
        }
    }
}
