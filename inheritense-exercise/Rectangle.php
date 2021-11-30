<?php

require_once 'Shape.php';

class Rectangle extends Shape {
    public $width;
    public $height;

    public function __construct($width, $height) {
        parent::__construct();
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
        echo "Rectangle Perimeter: {$this->getPerimeter()} <br>";
        echo "Rectangle Area: {$this->getArea()} <br>";
    }
}
