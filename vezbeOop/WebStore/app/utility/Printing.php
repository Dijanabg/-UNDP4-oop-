<?php

namespace Utility;

trait Printing
{
    public function print($type = "json")
    {
        if ($type == "json") {
            $izlaz = "";
            foreach ($this as $kljuc => $vrednost) {
                $izlaz .= "'$kljuc':$vrednost,\r\n";
            }
            return "{\r\n $izlaz}";
        }
    }
}
