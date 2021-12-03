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
        return $this->getColor();
    }
}
