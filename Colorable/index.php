<?php
include_once "Shape.php";
include_once "Colorable.php";
include_once "Square.php";
include_once "Rectangle.php";

$square = new Square(4,"red");
$rectangle = new Rectangle("Rectangle",10,20);
//echo $square1->howToColor()."<br>";
//echo $square1->getArea();
$array = [];
$array[] = $square;
$array[] = $rectangle;

foreach ($array as $value){
    if ($value === $square){
        echo $value->howToColor()."<br>";
    }
    else if ( $value === $rectangle){
        echo $value->calculateArea();
    }
}