<?php


namespace Shape_3;

include_once "../vendor/autoload.php";

use Interface_4\Resizeable;
use JetBrains\PhpStorm\Pure;

class Circle implements Resizeable
{
    public int|float $radius;

    /**
     * Circle constructor.
     * @param float|int $radius
     */
    public function __construct(float|int $radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return float|int
     */
    public function getRadius(): float|int
    {
        return $this->radius;
    }

    /**
     * @param float|int $radius
     */
    public function setRadius(float|int $radius): void
    {
        $this->radius = $radius;
    }

    public function getArea(): float|int
    {
        return pi() * pow($this->radius, 2);
    }

    #[Pure] public function __toString(): string
    {
        return "Circle { Radius :" . $this->radius . " ,Area :" . $this->getArea() . " }";
    }

    function resize(float|int $percent)
    {
        $newRadius = $this->radius * pow((1 + $percent), 0.5);
        $this->setRadius($newRadius);
    }
}