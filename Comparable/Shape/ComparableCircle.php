<?php


namespace Shape;

include_once "../vendor/autoload.php";

use Interface_2\Comparable;

class ComparableCircle extends Circle implements Comparable
{

    public function compareTo($objTwo): int
    {
        $circleTwoRadius = $objTwo->getRadius();

        if ($this->getRadius() > $circleTwoRadius) {
            return 1;
        } else if ($this->getRadius() < $circleTwoRadius) {
            return -1;
        } else {
            return 0;
        }
    }
}