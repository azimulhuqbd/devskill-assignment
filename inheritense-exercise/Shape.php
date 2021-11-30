<?php

abstract class Shape {
    protected $color = 'red';

    public function __construct() {
    }

    public function getArea() {
    }

    abstract public function getPerimeter();

    abstract public function displayInfo();
}
