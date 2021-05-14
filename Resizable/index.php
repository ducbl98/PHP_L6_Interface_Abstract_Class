<?php

include_once "vendor/autoload.php";

use Shape_3\Circle;
use Shape_3\Rectangle;
use Shape_3\Square;

//$circle = new Circle(5);
//$rectangle = new Rectangle(5, 3);
//$square = new Square(5);
//echo $circle . "<br>" . $rectangle . "<br>" . $square;
//$circle->resize(0.2);
//$rectangle->resize(0.2);
//$square->resize(0.2);
//echo "<br>".$circle . "<br>" . $rectangle . "<br>" . $square;

$shapes=[new Circle(5),new Rectangle(5,3),new Square(5)];
foreach ($shapes as $shape){
    $shape->resize(0.2);
    echo $shape."<br>";
}