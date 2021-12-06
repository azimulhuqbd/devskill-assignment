<?php
require_once 'Shape.php';

class Circle extends Shape {
    public $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        return pi() * pow($this->radius, 2);
    }

    public function getPerimeter() {
        return pi() * $this->radius * 2;
    }

    public function displayInfo() {
        echo get_class($this) . ' Radius: ' . $this->radius . '<br>';
        parent::displayInfo();
    }
}
