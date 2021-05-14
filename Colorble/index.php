<?php

include_once "vendor/autoload.php";

use Shape_5\Square;

$square = new Square("Square", 5);
echo $square->show()."<br>";
echo $square->howToColor()."<br>";
