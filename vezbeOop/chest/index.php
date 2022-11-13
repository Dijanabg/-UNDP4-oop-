<?php
require "Lock.php";
require "Chest.php";


$chest = new Chest(new Lock);
$chest->close();
$chest->open();
