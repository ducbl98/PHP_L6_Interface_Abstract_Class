<?php


namespace Fruit;

include_once "../vendor/autoload.php";

use Abstract_Class\Fruit;

class Apple extends Fruit
{

    public function howToEat(): string
    {
        return "Apple could be slided";
    }
}