<?php
require_once "ICustomer.php";

class Customer implements ICustomer
{
    protected int $id;
    protected string $firstName;
    protected string $lastName;
    protected int $age;
    protected float $money;

    public function __construct($id, $firstName, $lastName, $age, $money)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->money = $money;
    }

    public function getMoney()
    {
        return $this->money;
    }

    public function buyProduct(Product $p, $quantity = 1)
    {
        if ($this->money < $p->getPrice() * $quantity) {
            echo "You don't have enough money.";
        } else {
            if ($p->reduceAmount($quantity))
                $this->money -= $p->getPrice() * $quantity;
            else
                echo "There is no more {$p->getProductName()}s in the store.";
        }
    }


    public function __toString()
    {
        return "Costumer with id: $this->id is called $this->firstName $this->lastName and is 
        $this->age years old, He went to the shop with {$this->money} din";
    }
    public function buy(Order $o)
    {
        if ($this->money < $o->getTotalPrice()) {
            echo "You dont have enough money!";
        } else {
            $this->money -= $o->getTotalPrice();
            echo "$this->firstName has bought:<br> $o";
        }
    }
}
