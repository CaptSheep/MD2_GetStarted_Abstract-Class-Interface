<?php
include_once "Animals.php";
include_once "InterfaceClass/Edible.php";
class Chicken extends Animals implements Edible
{
    public function makeSound(): string
    {
        return "Chicken: cluck-cluck!";
    }

    public function howToEat(): string
    {
        return "could be fried";
    }
}