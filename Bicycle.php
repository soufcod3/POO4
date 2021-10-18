<?php
require_once 'Vehicle.php';

final class Bicycle extends Vehicle
{
    private string $vehicleType = "bike";
    
    public function __construct(string $color, int $nbWheels)
    {
        $this->color = $color;
        $this->nbWheels = $nbWheels;
    }
    // Methode qui retourne le type de véhicule, utile pour l'autorisation de circuler
    public function getVehicleType(): string
    {
        return $this->vehicleType;
    }
}