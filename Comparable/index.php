<?php

include_once "vendor/autoload.php";
use Shape\ComparableCircle;

$circleOne = new ComparableCircle('circleOne', 8);
$circleTwo = new ComparableCircle('circleTwo', 2);
$circleThree = new ComparableCircle('circleThree', 4);

$test = $circleOne->compareTo($circleTwo);
echo('Comparable: <br>');
echo $test;
