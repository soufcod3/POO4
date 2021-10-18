<?php
require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    const ALLOWED_VEHICLES = [
        'car',
        'truck',
        'motorbike',
    ];
    protected int $nbLane = 4;
    protected int $maxSpeed = 130;

    public function addVehicle(Vehicle $vehicle): void
    {
        if (in_array($vehicle->getVehicleType(), self::ALLOWED_VEHICLES)) {
            array_push($this->currentVehicles, $vehicle->getVehicleType());
        } else {
            echo "Désolé, le véhicule '" . $vehicle->getVehicleType() . "' n'a pas le droit de circuler ici.<br>" . PHP_EOL;
        }
    }

    // Lorsque je type ce que la méthode me retourne avec ": string",  j'obtiens l'erreur "Return value of MotorWay::getVehicles() must be of the type string, none returned in..."
    public function getVehicles()
    {
        foreach ($this->currentVehicles as $vehicle) {
            echo "<li>" . $vehicle . "</li>" . PHP_EOL;
        }
    }

}