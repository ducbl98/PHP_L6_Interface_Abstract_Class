<?php

namespace Animal;

include_once "../vendor/autoload.php";

use Abstract_Class\Animal;
use Interface_List\Edible;

class Chicken extends Animal implements Edible
{

    public function makeSound():string
    {
        return "Chicken: cluck-cluck!";
    }

    public function howToEat(): string
    {
        return "could be fried";
    }
}