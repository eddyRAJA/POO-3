<?php


//  1 -CREATE ABSTRACT CLASS "HightWay"

abstract class HighWay
{
    protected int $nbLane;
    protected int $maxSpeed;

    //public string $type;



    abstract public function __construct();

    // 4 -ABSTRACT FUNCTION

    abstract function addVehicle($typeVehicle);
    
  
    // 2 -GETTETRS & SETTERS 
    
    /**
     * Get the value of nbLane
     */
    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    /**
     * Set the value of nbLane
     *
     * @return  self
     */
    public function setNbLane($nbLane)
    {
        $this->nbLane = $nbLane;

        return $this;
    }

    /**
     * Get the value of maxSpeed
     */
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    /**
     * Set the value of maxSpeed
     *
     * @return  self
     */
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;

        return $this;
    }


    /**
     * Get the value of currentVehicle
     */ 
    public function getCurrentVehicle()
    {
        return $this->currentVehicle;
    }

    /**
     * Set the value of currentVehicle
     *
     * @return  self
     */ 
    public function setCurrentVehicle(array $currentVehicles)
    {
        $this->currentVehicles = $currentVehicles;

        return $this;
    }
}
