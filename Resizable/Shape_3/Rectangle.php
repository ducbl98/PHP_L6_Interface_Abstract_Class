<?php


namespace Shape_3;

include_once "../vendor/autoload.php";

use Interface_4\Resizeable;
use JetBrains\PhpStorm\Pure;

class Rectangle implements Resizeable
{
    public int|float $width;
    public int|float $height;

    /**
     * Rectangle constructor.
     * @param float|int $width
     * @param float|int $height
     */
    public function __construct(float|int $width, float|int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @return float|int
     */
    public function getWidth(): float|int
    {
        return $this->width;
    }

    /**
     * @param float|int $width
     */
    public function setWidth(float|int $width): void
    {
        $this->width = $width;
    }

    /**
     * @return float|int
     */
    public function getHeight(): float|int
    {
        return $this->height;
    }

    /**
     * @param float|int $height
     */
    public function setHeight(float|int $height): void
    {
        $this->height = $height;
    }

    public function getArea(): float|int
    {
        return $this->height * $this->width;
    }

    #[Pure] public function __toString(): string
    {
        return "Rectangle { Width :" . $this->width . " ,Height :" . $this->height . " ,Area :" . $this->getArea() . " }";
    }

    function resize(float|int $percent)
    {
        $newWidth = $this->width * (1 + $percent);
        $this->setWidth($newWidth);
    }
}