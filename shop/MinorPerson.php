<?php

class MinorPerson extends Customer
{
    public function buy(Order $o)
    {
        if ($this->forbiddenForMinorPerson($o))
            return "You are minor person and you cant buy wine!";
        else if ($this->money < $o->getTotalPrice())
            return "You dont have enough money!";
        else
            return "$this->firstName bought: <br> $o";
    }
    private function forbiddenForMinorPerson(Order $o)
    {
        foreach ($o->getProducts() as $product) {
            if ($product->getProductType() == "wine")
                return true;
        }
        return false;
    }
}
