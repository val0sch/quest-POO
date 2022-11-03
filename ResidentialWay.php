<?php
require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    protected $nbLane = 2;
    protected $maxSpeed = 50;

    public function addVehicle(Vehicle $vehicle)
    {

        if ($vehicle instanceof Car || $vehicle instanceof Truck || $vehicle instanceof Bicycle) {
            $this->setCurrentVehicles($vehicle);
        }
    }
}
