<?php


namespace Shape_3;

include_once "../vendor/autoload.php";

use JetBrains\PhpStorm\Pure;

class Square extends Rectangle
{
    #[Pure] public function __construct(float|int $width)
    {
        parent::__construct($width, $width);
    }

    public function getArea(): float|int
    {
        return pow($this->width, 2);
    }

    #[Pure] public function __toString(): string
    {
        return "Square { Width :" . $this->width . " ,Area :" . $this->getArea() . " }";
    }

    public function resize(float|int $percent)
    {
        $newEdge = $this->width * pow((1 + $percent), 0.5);
        $this->setWidth($newEdge);
    }
}