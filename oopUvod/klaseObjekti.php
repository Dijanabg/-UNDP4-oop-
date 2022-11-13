<?php
//Stvaranje objekta u PHP-u 
class person
{
    var $name;
    function setName($new_name)
    {
        $this->name = $new_name;
    }
    function getName()
    {
        return $this->name;
    }
}
//Atribut $this 
//je pseudovarijabla. To je referenca na objekt koji se poziva. 
//Stvaranje objekta u PHP-u

//Iz klase možete stvoriti onoliko objekata koliko želite. PHP vam omogućuje stvaranje objekta pomoću ključne riječi new. Također vam pruža dvije čarobne metode __construct() i __destruct() koje se izvršavaju kada se kreira novi objekt ili kada se postojeći objekt uništi. 
class person1
{
    public function __construct()
    {
        echo "The class " . __CLASS__ . " is created!";
    }
    public function __destruct()
    {
        echo "The class " . __CLASS__ . " Is destroyed";
    }
}
$john = new person();



//enkapsulacija
//Anyone who can access the class can access a public variable or method. This is by-default behavior of class members.
//To restrict the accessibility of the class members, you can declare them as private or protected.

//A protected variable or method can be accessed only by the class member of the same class or a child class.
class MyClass
{
    public $public = 'Public ';
    protected $protected = 'Protected ';
    private $private = 'Private ';
    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}
$obj = new MyClass();
$obj->printHello(); // Shows Public, Protected and Private
echo "<br/>";
echo $obj->public; // Works
echo $obj->protected; // Fatal Error
echo $obj->private; // Fatal Error





//Nasljedstvo

//OOP vam omogućuje stvaranje apstraktne klase visoke razine koja se naziva roditeljskom klasom koju može naslijediti više podređenih klasa kada je to potrebno. U PHP-u možete koristiti ključnu riječ extends za naslijeđivanje funkcionalnosti osnovne ili nadređene klase. 
class Animal
{

    public $name;

    public $breed;

    public function __construct($name, $breed)
    {

        $this->name = $name;

        $this->breed = $breed;
    }

    public function greet()
    {

        return "Hello ! My name is " . $this->name . " and I am a " . $this->breed . "<br>";
    }
} // class Animal
class Dog extends Animal
{

    public function play()
    {

        return $this->name . " loves to play.<br>";
    }
} //class Dog
$dog = new Dog("Max", "Labra");
echo $dog->greet();
echo $dog->play();



//Polimorfizam
//Polimorfizam opisuje obrazac u kojem klase mogu imati zajednički interface dok se ponašaju različito. U PHP-u interface je slično klasi osim što ne sadrži nikakav kod. interface je za definisanje naziva metoda i argumenata, ali ne i sadržaja metoda.

//Za deklaraciju interface, upotrijebite ključnu riječ interface i pripojen je klasi pomoću ključne riječi implements. Metode se mogu definirati u interface baš kao u klasi, osim što nemaju sadržaj unutar zagrada. 
interface My_Interface
{

    public function fun();
}
class MyClass1 implements My_Interface
{

    public function fun()
    {

        //code goes here.
    }
}
//Apstrakcija

//Apstraktnu klasu nije moguće instancirati i možete je samo naslijediti. Ako nasljeđujete od apstraktne klase, sve apstraktne metode u roditeljskoj klasi treba definirati dijete s istom vidljivošću. PHP vam ne dopušta da imate apstraktnu metodu unutar neapstraktne klase. 
?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            color: #333;
            font-size: 14px;
            padding: 100px;
        }
    </style>

<body>
    <div class="form_box shadow">
        <?php
        class Pet
        {

            var $name;
            function __construct($name)
            {
                $this->name = $name;
            }
        }
        interface Talkative
        {
            public function speak();
        }
        class Dog1 extends Pet implements Talkative
        {
            function speak()
            {
                return "Woof, woof!";
            }

            function fetch()
            {
                return 'Catching the stick <br>';
            }
        }
        class Cat extends Pet implements Talkative
        {
            function speak()
            {
                return "Meow...";
            }
        }
        $Pets = array(
            new Dog1('Max'),
            new Cat('Snow')
        );
        foreach ($Pets as $Pet) {
            print $Pet->name . " says: " . $Pet->speak() . '<br>';
            if ($Pet instanceof $Dog1)
                echo $Pet->fetch();
        }
        ?>
    </div>
</body>

</html>