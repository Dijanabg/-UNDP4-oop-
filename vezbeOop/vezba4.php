<?php
class Pristup
{
    public $a = 5;
    private $b = 6;
    protected $c = 7;
    public function showB()
    {
        echo 'Varijabla $b: ' . $this->b . "<br>";
    }
    public function showC()
    {
        echo 'Varijabla $c: ' . $this->c . "<br>";
    }
    public function helloSvima()
    {
        echo "Zdravo iz klase.<br>";
    }
    private function helloKlasi()
    {
        echo "Private: Zdravo iz klase.<br>";
    }
    protected function helloKlasiPodklasi()
    {
        echo "Protected: Zdravo iz klase.<br>";
    }

    public function helloOdSvih()
    {
        $output = $this->helloSvima();
        $output .= $this->helloKlasi();
        $output .= $this->helloKlasiPodklasi();

        echo $output;
    }
}
$pristup = new Pristup;
echo 'Varijabla $a: ' . $pristup->a . "<br>";
//echo 'Varijabla $b: ' . $pristup->b . "<br>"; //ne jer je private $b
//echo 'Varijabla $c: ' . $pristup->c . "<br>"; //ne jer je protected $c
$pristup->showB();
$pristup->showC();
$pristup->helloSvima();
//$pristup->helloKlasi();
//$pristup->helloKlasiPodklasi();
$pristup->helloOdSvih();
