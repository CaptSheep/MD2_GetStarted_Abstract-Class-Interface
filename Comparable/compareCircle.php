<?php


include_once "Circle.php";
include_once "Comparable.php";

class compareCircle extends Circle implements Comparable
{

    public function compareTo($objNum2): int
    {
        // TODO: Implement compareTo() method.
        $circleTwoRadius = $objNum2->getRadius();
        if ($this->getRadius() > $circleTwoRadius) {
            return 1;
        } else if ($this->getRadius() < $circleTwoRadius) {
            return -1;
        } else {
            return 0;
        }
    }

}