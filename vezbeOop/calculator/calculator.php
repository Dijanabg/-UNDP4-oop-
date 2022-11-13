<?php

class cal
{
    public $x;
    public $y;

    function add($x, $y)
    {
        echo "<b>Summation $x + $y is:</b> " . ($x + $y) . "<br/>";
    }

    function sub($x, $y)
    {
        echo "<b>Subtraction $x - $y is:</b>  " . ($x - $y) . "<br/>";
    }

    function mul($x, $y)
    {
        echo "<b>Multiplication $x * $y is:</b>  " . ($x * $y) . "<br/>";
    }

    function div($x, $y)
    {
        echo "<b>Division $x / $y is:</b>  " . ($x / $y) . "<br/>";
    }
}
