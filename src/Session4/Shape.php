<?php

class Shape
{
    public function draw($origin, $radius)
    {
        return "parent class draw method \n";
    }
}

class Circle extends Shape
{
    public function draw($origin, $radius)
    {
        if ($radius > 0) {
            echo parent::draw($origin, $radius);
            return true;
        }

        return false;
    }
}


$circleObj = new Circle();
var_dump($circleObj->draw(10, 50));