<?php
include_once "Shape.php";
include_once "Resizeable.php";

class Square extends Shape implements Resizeable
{
    public $side;
    public function __construct($name,$side)
    {
        parent::__construct($name);
        $this->side = $side;
    }
    public function calculateArea()
    {
        return pow($this->side,2);
    }

    public function calculatePerimeter()
    {
        return $this->side * 4;
    }

    public function resize($number)
    {
        // TODO: Implement resize() method.
        return $this->side + ($number* 0.01);
    }


}