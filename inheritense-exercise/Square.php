<?php
require_once 'Rectangle.php';

class Square extends Rectangle {
    // public $side;
    public function __construct($side) {
        $this->side = $side;
    }

    public function displayInfo() {
        $area = $this->side * $this->side;
        $perimeter = $this->side * 4;
        echo "Squire Area: {$area} <br>";
        echo "Squire Perimeter: {$perimeter} <br>";
    }
}
