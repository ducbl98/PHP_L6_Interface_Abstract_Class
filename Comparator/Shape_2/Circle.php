<?php


namespace Shape_2;


class Circle
{
    public float|int $radius;
    public string $name;

    /**
     * Circle constructor.
     * @param float|int $radius
     * @param string $name
     */
    public function __construct(string $name,float|int $radius)
    {
        $this->radius = $radius;
        $this->name = $name;
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

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

}