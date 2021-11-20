<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{

    private const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    private string $energy;
    private int $energyLevel;
    protected string $type = 'car';
    protected bool $hasParkBrake = true;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)){
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    // POO4 : updates Park Brake's state
    public function setParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function start(): string
    {
        // POO4 : throws an Exception
        if ($this->hasParkBrake) {
            throw new Exception("The park brake is ON !");
        }
        return "The car is starting !";
    }
}