<?php

abstract class Shape {
    private $color = 'red';

    public function __construct() {
    }

    abstract public function getArea();

    abstract public function getPerimeter();

    public function getColor() {
        return $this->color;
    }

    public function displayInfo() {
        echo get_class($this) . ' Color: ' . $this->getColor() . '<br>';
        echo get_class($this) . ' Area: ' . $this->getArea() . '<br>';
        echo get_class($this) . ' Perimeter: ' . $this->getPerimeter() . '<br>';
    }
}
