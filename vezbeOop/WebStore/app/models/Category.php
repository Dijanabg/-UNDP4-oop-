<?php

namespace App\Models;

use App\Templates\ModelTemplate;
use Utility\Factory;

class Category extends ModelTemplate
{
    use Factory;
    protected $id;
    protected $name;
    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getModelName()
    {
        return "Category";
    }

    public function viewAll()
    {
    }

    public function add()
    {
    }

    public function remove()
    {
    }
    public function __toString()
    {
        return "" . $this->id;
    }
}
