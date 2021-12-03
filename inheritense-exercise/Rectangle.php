<?php

require_once 'Shape.php';

class Rectangle extends Shape {
    public $width;
    public $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea() {
        return $this->width * $this->height;
    }

    public function getPerimeter() {
        return ($this->width + $this->height) * 2;
    }

    public function displayInfo() {
        echo get_class($this) . ' Color: ' . parent::displayInfo() . '<br>';
        echo get_class($this) . ' Width: ' . $this->width . '<br>';
        echo get_class($this) . ' Height: ' . $this->height . '<br>';
        echo get_class($this) . " Area: {$this->getArea()} <br>";
        echo get_class($this) . " Perimeter: {$this->getPerimeter()} <br>";
    }
}
