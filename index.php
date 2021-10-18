<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Skateboard.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$motorway = new MotorWay();
$street = new PedestrianWay();
$car = new Car('red', 5, 'fuel');
$bike = new Bicycle('grey', 3);
$truck = new Truck('yellow', 3, 'fuel', 5);
$skate = new Skateboard('green');

$street->addVehicle($car);
$street->addVehicle($bike);
$street->addVehicle($truck);
$street->addVehicle($skate);
$street->getVehicles();