<?php


namespace Fruit;

include_once "../vendor/autoload.php";

use Abstract_Class\Fruit;

class Orange extends Fruit
{

    public function howToEat(): string
    {
        return "Orange could be juiced";
    }
}