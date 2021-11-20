<?php

require 'Vehicles/Car.php';

$mercedesCar = new Car('white', 5, 'fuel');

try {
    $mercedesCar->start();
} catch (Exception $e) {
    // Getting $e['message]:
    echo $e->getMessage() . PHP_EOL;
    // Releasing Park Brake
    $mercedesCar->setParkBrake(0);
} finally {
    echo "My car rolls like donut.";
}