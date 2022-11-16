<?php 

// cartoon caracter can walk and jump
abstract class Cartoons{
    function walk()
    {
        echo "I walk.";
    }
   function jump()
   {
        echo "I jump";
   }
    abstract function makeSound();
    abstract function cathPhrase();
}
interface Learn{
    public function reading();
    public function memorizing();

}
interface GoingBackToLife{
    public function reading();
    public function memorizing();

}

interface Play{
    function running();
    
}
class Simpsons extends Cartoons {
    protected $name; 
    public function __construct($name)
    {
        $this->name=$name;
    }
    public function setName($name){
        $this->name=$name;
    }
    public function getName()
    {
        return $this->name;
    }
    function makeSound()
    {
        echo "E nemam pojam";
    }
    function cathPhrase()
    {
        echo "D/'/oh!";
    }
}
class LoonieTunes extends Cartoons {
    protected $name; 
    public function __construct($name)
    {
        $this->name=$name;
    }
    public function setName($name){
        $this->name=$name;
    }
    public function getName()
    {
        return $this->name;
    }
    function makeSound()
    {
        echo "tiiiiiiiiiii";
    }
    function cathPhrase()
    {
        echo  "Th-th-th-that's all, folks!";
    }
}

 class Disney extends Cartoons {
    protected $name; 
    public function __construct($name)
    {
        $this->name=$name;
    }
    public function setName($name){
        $this->name=$name;
    }
    public function getName()
    {
        return $this->name;
    }
    function makeSound()
    {
        echo "lallalala";
    }
    function cathPhrase()
    {
        echo "I'd rather die tomorrow than live a hundred years without knowing you.";
    }
} 
class SchoolKids extends Simpsons implements Play,Learn{   
    public function reading()
    {
        echo "I read";
    }
    public function memorizing()
    {
        echo "I memooorizeee";
    }
    public function running()
    {
        echo "I run";
    }
}
class Rabbits extends Simpsons implements Play{
    
    public function running()
    {
        echo "I run";
    }
}
class Princesses extends Simpsons implements GoingBackToLife,Play,Learn{
    public function running()
    {
        echo "I run";
    }
    public function reading()
    {
        echo "I read";
    }
    public function memorizing()
    {
        echo "I memooorizeee";
    }
}
$bart=new SchoolKids("Bart");
echo $bart->getName().":<br>";
echo $bart->walk().' '.$bart->jump()."<br>";
echo "<br>".$bart->makeSound();

$bugsBanny=new Rabbits("Bug Banny");
echo $bugsBanny->running();


$cindarela=new Princesses("Cindarela");

// based on their type they make different sounds
// The Simpsons have their catch phrase, as well as Loonie Tunes and Disney characters
// SchoolKids are type of Simpsons, Rabbits are part of Loonie Tunes and princesses are part of the Disneys
// Learning is reading and memorizing
// Playing is running
// Going back to life is standingUp and shinning
// SchoolKids can play and learn, Rabits can play, princesses can do all
// make Bart, Bugs Bunny and Cinderella as instances