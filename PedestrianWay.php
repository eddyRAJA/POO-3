<?php

require_once 'HighWay.php';

$currentVehiclesInPedestrianWay = [];

final class PedestrianWay extends HighWay
{
    public function __construct()
    {
        $this->setNbLane(1);
        $this->setMaxSpeed(10);        
    }

    public function addVehicle($typeVehicle) 
    {
        if ($typeVehicle == 'bike' || $typeVehicle == 'skateboard'){
            $this->currentVehiclesInPedestrianWay[] = $typeVehicle;
            var_dump($this);
        } 
    }
}  