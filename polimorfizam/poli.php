<?php


abstract class Osoba{
    abstract public function pozdrav();
    }
class Srbin extends Osoba{
    public function pozdrav(){
        return "Zdravo!";
    }
}
class Englez extends Osoba{
    public function pozdrav(){
        return "Hello!";
    }
}
class Francuz extends Osoba{
    public function pozdrav(){
        return "Bonjour!";
    }
}
//******************** */
function pozdravi(Osoba $neko){
    echo $neko->pozdrav();
    echo "<br>";
}
//************************** */
$srb=new Srbin();
$eng=new Englez();
$fr=new Francuz();

pozdravi($srb);
class Amerikanac extends Osoba{
    public function pozdrav(){
        return "Hi!";
    }
}
pozdravi(new Amerikanac());


// echo $srb->pozdrav();
// echo "<br>";
// echo $eng->pozdrav();
// echo "<br>";
// echo $fr->pozdrav();
// echo "<br>";