<?php

abstract class HighWay
{
    protected array $currentVehicles = [];
    protected int $nbLane;
    protected int $maxSpeed;

    abstract public function addVehicle(Vehicle $vehicle);

    public function setNbLane($nbLane)
    {
        $this->nbLane = $nbLane;
    }

    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }

}