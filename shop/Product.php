<?php

class Product
{
    protected int $id;
    protected string $productName;
    protected string $productType;
    protected float $price;
    protected int $amount;

    public function __construct($id, $productName, $productType, $price, $amount)
    {
        $this->id = $id;
        $this->productName = $productName;
        $this->productType = $productType;
        $this->price = $price;
        $this->amount = $amount;
    }
    public function getId()
    {
        return $this->id;
    }

    public function getProductName()
    {
        return $this->productName;
    }

    public function getProductType()
    {
        return $this->productType;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getAmount()
    {
        return $this->amount;
    }
    public function __toString()
    {
        return "Product: $this->productName with id: $this->id is type of $this->productType. Price of this product is {$this->price}din and its amount is $this->amount <br>";
    }

    public function reduceAmount($quantity)
    {
        if ($this->amount >= $quantity) {
            $this->amount -= $quantity;
            return true;
        } else {
            return false;
        }
    }
    public function addAmount($quantity)
    {
    }
}
