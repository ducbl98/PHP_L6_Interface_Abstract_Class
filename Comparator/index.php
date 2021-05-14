<?php

include_once "vendor/autoload.php";
use Shape_2\Circle;
use Shape_2\CircleComparator;

$circleOne = new Circle("circleOne", 6);
$circleTwo = new Circle("circleTwo", 4);
$circleComparator = new CircleComparator();
var_dump($circleComparator->compare($circleOne, $circleTwo));