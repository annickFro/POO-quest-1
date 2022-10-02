<?php

class Car
{
    // props 
    private string $color;
    private int $currentSpeed;
    private int $nbSeats;
    private int $nbWheels=4;
    private string $energy;
    private int $energyLevel=0;
    

    // methods

    public function __construct (string $color, int $nbSeats, string $energy) 
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }
    
    public function getColor() : string 
    {
        return $this->color;
    }
    
    public function getCurrentSpeed() : int 
    {
        return $this->currentSpeed;
    }
    
    public function getNbSeats() : int 
    {
        return $this->nbSeats;
    }
    
    public function getNbWheels() : int 
    {
        return $this->nbWheels;
    }
    
    public function getEnergy() : string 
    {
        return $this->energy;
    }
    
    public function getEnergyLevel() : int 
    {
        return $this->energyLevel;
    }



    public function forward(): string
    {
        $this->currentSpeed = 15;
        return "Go !";
    }

    public function brake(): string
    {
    $sentence = "";
    while ($this->currentSpeed > 0) {
        $this->currentSpeed--;
        $sentence .= "Brake !!!";
    }
    $sentence .= "I'm stopped !";
    return $sentence;
    }

    public function start(): string
    {
        return "I am a car, I am started !";
    }

}