<?php
class Fruit
{
    public $name;
    public $color;
    //metode
    function set_name($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
        return $this->name;
    }
    function set_color($color)
    {
        $this->color = $color;
    }
    function get_color()
    {
        return $this->color;
    }
}
$apple = new Fruit($name, $color);
$apple->set_name('Apple');
$apple->set_color(' green');
$banana = new Fruit($name, $color);
$banana->set_name('Banana');
$banana->set_color('yelow');
echo "Name: " . $apple->get_name() . ", Color: " . $apple->get_color();
echo '<br>';
echo "Name: " . $banana->get_name() . ", Color: " . $banana->get_color();
//menjanje izvan klase
class Fruit1
{
    public $name;
}
$apple = new Fruit1();
$apple->name = "apple";
echo "<br><br>";
echo $apple->name;
//provera da li objekat pripada klasi
//instanceof
echo "<br><br>";
var_dump($apple instanceof Fruit);
echo "<br><br>";
var_dump($apple instanceof Fruit1);
