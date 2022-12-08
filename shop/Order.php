<?php

require_once("Product.php");

class Order
{
    private $products;
    private int $totalPrice = 0;

    public function __construct()
    {
        $this->products = array();
        //$this->totalprice = $totalprice;
    }

    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function addProduct(Product $p, $quantity = 1)
    {
        if ($p->reduceAmount($quantity)) {
            $i = 0;
            while ($i < $quantity) {
                $this->products[] = $p;
                $this->totalPrice += $p->getPrice();
                $i++;
            }
            //$this->totalPrice += $p->getPrice() * $quantity;
        } else
            echo "There are no more {$p->getProductName()}s";

        // $this->products[] = $p; // za jedan proizvod
        // $p->reduceAmount();
        // $this->totalPrice += $p->getPrice();
    }
    public function __toString()
    {

        $str = "";
        $added = array(); //array of ids

        for ($i = 0; $i < count($this->products); $i++) {
            if ($this->products[$i] != NULL) {
                if (!$this->checkIfIsAdded($added, $this->products[$i])) {
                    $added[] = $this->products[$i]->getId();
                    $j = 0;
                    foreach ($this->products as $p) {
                        if ($p->getId() == $this->products[$i]->getId())
                            $j++;
                    }
                    $str .= "{$j}x{$this->products[$i]->getProductName()}<br>";
                }
            }
        }

        return $str;
    }
    public function removeProduct(Product $p, $quantity = 1)
    {
    }
    private function checkIfIsAdded($added, Product $p)
    {
        if (count($added) == 0)
            return false;

        foreach ($added as $id) {
            if ($id == $p->getId())
                return true;
        }
        return false;
    }
}
