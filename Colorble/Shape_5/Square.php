<?php


namespace Shape_5;

include_once "../vendor/autoload.php";

use Interface_5\Colorable;
use JetBrains\PhpStorm\Pure;

class Square extends Rectangle implements Colorable
{
    #[Pure] public function __construct(string $name, int $width)
    {
        parent::__construct($name, $width, $width);
    }

    function howToColor()
    {
        echo "Color all four sides";
    }
}