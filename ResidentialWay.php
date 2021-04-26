<?php

require_once 'HighWay.php';

$currentVehiclesInResidentialWay = [];

final class ResidentialWay extends HighWay
{
   public function __construct()
    {
        $this->setNbLane(2);
        $this->setMaxSpeed(50);        
    }

    public function addVehicle($typeVehicle) 
    {
        if ($typeVehicle == 'car' || $typeVehicle == 'moto' || $typeVehicle == 'bike' || $typeVehicle == 'skateboard'){
            $this->currentVehiclesInResidentialWay[] = $typeVehicle;
            var_dump($this);
        } 
    }
}  