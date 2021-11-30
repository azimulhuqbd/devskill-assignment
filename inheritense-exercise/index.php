<?php

require_once 'Circle.php';
require_once 'Rectangle.php';
require_once 'Cylinder.php';
require_once 'Square.php';

$circle = new Circle(5);
$circle->displayInfo();
echo '<br>';

$rectangle = new Rectangle(5, 10);
$rectangle->displayInfo();
echo '<br>';

$cylinder = new Cylinder(5, 10);
$cylinder->displayInfo();
echo '<br>';

$square = new Square(5);
$square->displayInfo();
