<?php
include_once "Shape.php";
include_once "Colorable.php";
class Square implements Colorable
{
    public $side;
    public $color;


    public function __construct($side, $color)
    {
        $this->side = $side;
        $this->color = $color;
    }


    public function getSide()
    {
        return $this->side;
    }


    public function setSide($side): void
    {
        $this->side = $side;
    }


    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color): void
    {
        $this->color = $color;
    }



    public function howToColor()
    {
        echo  $this->color ." all four sides ";
    }

    public function getArea(): string
    {
        return  "Area is: " .pow($this->side,2);
    }
}