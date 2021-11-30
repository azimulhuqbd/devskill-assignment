<?php
require_once 'Circle.php';

class Cylinder extends Circle {
    public $height;

    public function __construct($height, $radius) {
        parent::__construct($radius);
        // $this->radius = $radius;
        $this->height = $height;
    }

    public function getArea() {
        return parent::getArea() * 2 + parent::getPerimeter() * $this->height;
        // return 2 * pi() * $this->radius * ( $this->radius + $this->height );
    }

    public function displayInfo() {
        echo 'Cylinder Perimeter: ' . parent::getPerimeter() . '<br>';
        echo "Cylinder Area: {$this->getArea()} <br>";
    }
}
