<?php
class StaticClass
{
    static $a = 0;
    static function add()
    {
        echo self::$a + 3; //kod static umesto $this
    }

    static function pozdrav($txt = "Pozdrav")
    {
        echo "{$txt} korisniku klase.<br>";
    }
    public function pozz()
    {
        echo "Hello";
    }
}
class StaticClass2 extends StaticClass
{
    static function testA()
    {
        echo parent::$a;
    }
    static function testPozdrav()
    {
        echo parent::pozdrav();
    }
    public function pozz()
    {
        echo "----------<br>";
        echo parent::pozz();
        echo "<br>----------";
    }
}


echo StaticClass::$a . "<br>";
StaticClass::pozdrav();
StaticClass::pozdrav("Hello");

echo  "<br><br>";
echo StaticClass::$a . "<br>";
StaticClass::$a = 5;
echo StaticClass::$a . "<br>";
echo "Varijabla StaticClass2: " . StaticClass2::$a . "<br>";
StaticClass::add();

echo  "<br><br>";
StaticClass2::testA();
echo  "<br>";
StaticClass2::pozdrav();
echo  "<br>";

echo  "<br><br>";
$object = new StaticClass2;
$object->pozz();
