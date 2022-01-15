<?php

include_once "Circle.php";
include_once "Comparator.php";

class CircleComparator implements Comparator
{

    function compare(object $circleOne, object $circleTwo): int
    {
        // TODO: Implement compare() method.
        $radius1 = $circleOne->getRadius();
        $radius2 = $circleTwo->getRadius();
        if ($radius1 > $radius2) {
            return 1;
        } elseif ($radius1 < $radius2) {
            return -1;
        } else {
            return 0;
        }
    }
}