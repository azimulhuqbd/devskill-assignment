<?php
require_once 'Circle.php';

class Cylinder extends Circle {
    public $height;

    public function __construct($height, $radius) {
        parent::__construct($radius);
        $this->height = $height;
    }

    public function getArea() {
        return parent::getArea() * 2 + parent::getPerimeter() * $this->height;
    }

    public function displayInfo() {
        echo get_class($this) . ' Height: ' . $this->height . '<br>';
        parent::displayInfo($this->getArea()) . '<br>';
    }
}
