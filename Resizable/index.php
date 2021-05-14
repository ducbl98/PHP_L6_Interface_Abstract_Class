<?php

include_once "vendor/autoload.php";

use Shape_3\Circle;

$circle = new Circle(5);
$rectangle = new \Shape_3\Rectangle(5, 3);
$square = new \Shape_3\Square(5);
echo $circle . "<br>" . $rectangle . "<br>" . $square;
$circle->resize(0.2);
$rectangle->resize(0.2);
$square->resize(0.2);
echo "<br>".$circle . "<br>" . $rectangle . "<br>" . $square;