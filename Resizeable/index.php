<?php
include_once "Shape.php";
include_once "Circle.php";
include_once "Square.php";
include_once "Rectangle.php";
include_once "Resizeable.php";


$circle = new Circle("Circle", 5);
$circleResize = new Circle("CircleResize", $circle->resize(10));
echo $circle->show() . "<br>";
echo "Dien tich cua hinh tron truoc khi Resize la : " . $circle->calculateArea() . "<br>";
echo "Dien tich cua hinh tron sau khi Resize la :" . $circleResize->calculateArea() . "<br>";
echo "Chu vi cua hinh tron truoc khi Resize la : " . $circle->calculatePerimeter() . "<br>";
echo "Chu vi cua hinh tron sau khi Resize la : " . $circleResize->calculatePerimeter() . "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$rectangle = new Rectangle("Rectangle", 10, 20);
echo $rectangle->show() . "<br>";
$rectangleResize = new Rectangle("RectangleResize", $rectangle->resize(50), $rectangle->resize(50));
echo "Chu vi hinh chu nhat truoc khi Resize la :" . $rectangle->calculatePerimeter() . "<br>";
echo "Chu vi hinh chu nhat sau khi Resize la : " . $rectangleResize->calculatePerimeter() . "<br>";
echo " Dien tich hinh chu nhat truoc khi Resize la : " . $rectangle->calculateArea() . "<br>";
echo " Dien tich hinh chu nhat sau khi Resize la : " . $rectangleResize->calculateArea() . "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$square = new Square("Square", 10);
echo $square->show()."<br>";
$squareResize = new Square("SquareResize", $square->resize(50));
echo "Chu vi hinh vuong truoc khi Resize la : " . $square->calculatePerimeter() . "<br>";
echo "Chu vi hinh vuong sau khi Resize la : " . $squareResize->calculatePerimeter() . "<br>";
echo "Dien tich hinh vuong truoc khi Resize la : " . $square->calculateArea()."<br>";
echo "Dien tich hinh vuong sau khi Resize la : " . $squareResize->calculateArea()."<br>";