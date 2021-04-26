<?php

require_once 'HighWay.php';

$currentVehiclesInMotorWay = [];

final class MotorWay extends HighWay
{
    public function __construct()
    {
        $this->setNbLane(4);
        $this->setMaxSpeed(130);        
    }

    public function addVehicle($typeVehicle) 
    {
        if ($typeVehicle == 'car' || $typeVehicle == 'moto'){
            $this->currentVehiclesInMotorWay[] = $typeVehicle;
            var_dump($this);
        } else {
            echo 'No autorized on motorway';
        }
    }
}    