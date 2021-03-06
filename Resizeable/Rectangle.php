<?php
include_once "Shape.php";
include_once "Resizeable.php";
class Rectangle extends Shape implements Resizeable
{
    public $width;
    public $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;

    }

    public function calculateArea()
    {
        return $this->width * $this->height;
    }

    public function calculatePerimeter()
    {
        return ($this->width + $this->height) * 2;
    }

    public function resize($number): int
    {
        // TODO: Implement resize() method.
        return $this->width %= ($number);
        return $this->height %= ($number);
    }
}