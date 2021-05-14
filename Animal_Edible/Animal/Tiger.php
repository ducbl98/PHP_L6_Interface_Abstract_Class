<?php


namespace Animal;

include_once "../vendor/autoload.php";

use Abstract_Class\Animal;

class Tiger extends Animal
{

    public function makeSound():string
    {
        return "Tiger: roarer!";
    }
}