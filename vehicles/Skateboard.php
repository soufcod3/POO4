<?php
require_once 'Vehicle.php';

final class Skateboard extends Vehicle
{
    private string $vehicleType = "skateboard";

    public function __construct(string $color)
    {
        $this->color = $color;
    }
    
    // Methode qui retourne le type de véhicule, utile pour l'autorisation de circuler
    public function getVehicleType(): string
    {
        return $this->vehicleType;
    }
}