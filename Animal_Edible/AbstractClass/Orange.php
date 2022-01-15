<?php
include_once "InterfaceClass/Edible.php";
include_once "Fruit.php";
class Orange extends Fruit implements Edible
{

    public function howtoEat(): string
    {
        // TODO: Implement howtoEat() method.
        return "Orange could be juiced";
    }
}