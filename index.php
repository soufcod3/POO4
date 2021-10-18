<?php
require_once 'vehicles/Bicycle.php';
require_once 'vehicles/Car.php';
require_once 'vehicles/Truck.php';
require_once 'vehicles/Skateboard.php';
require_once 'ways/MotorWay.php';
require_once 'ways/PedestrianWay.php';
require_once 'ways/ResidentialWay.php';

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