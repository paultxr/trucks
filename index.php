<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

var_dump(Car::ALLOWED_ENERGIES);

$bike = new Bicycle('blue', 1);
$cars = new Car ('blue',5,'diesel');
$truck = new Truck(100, 25, 'yellow', 3, "fuel");
echo $bike->forward();
var_dump($bike);
var_dump($cars);
echo $truck->isFull();
var_dump($truck);


echo $bike->forward();
echo $bike->getCurrentSpeed();
echo $bike->brake();
echo $bike->getCurrentSpeed();


echo "<br>";
echo "<br>";

echo $cars->forward();
echo $cars->getCurrentSpeed();
echo $cars->brake();
echo $cars->getCurrentSpeed(); 
