<?php
include_once "CircleComparator.php";
$circleOne = new Circle(5);
$circleTwo = new Circle(4);
$circleComparator = new  CircleComparator();
var_dump($circleComparator->compare($circleOne, $circleTwo));
