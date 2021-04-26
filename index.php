<?php

require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'MotorWay.php';

$skate = new PedestrianWay();
$peugeot = new ResidentialWay();
$ford = new MotorWay();

$peugeot->addVehicle('bike');
$ford->addVehicle('car');
$skate->addVehicle('skateboard');

