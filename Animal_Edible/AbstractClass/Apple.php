<?php
include_once "Fruit.php";
include_once "InterfaceClass/Edible.php";
class Apple extends Fruit
{

    public function howtoEat(): string
    {
        // TODO: Implement howtoEat() method.
        return "Apple could be slided";
    }
}