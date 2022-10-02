<?php

class Bicycle
{
    // props 
    private string $color;
    private int $currentSpeed;
    private int $nbSeats;
    private int $nbWheels;

    // methods

    public function __construct (string $color, int $currentSpeed, int $nbSeats, int $nbWheels) 
    {
        $this->color = $color;
        $this->currentSpeed = $currentSpeed;
        $this->nbSeats = $nbSeats;
        $this->nbWheels = $nbWheels;
    }
    
    public function getColor() : string 
    {
        return $this->color;
    }
    public function setColor( string $color) : void 
    {
        $this->color = $color;
    }

    public function getCurrentSpeed() : int 
    {
        return $this->currentSpeed;
    }
    public function setCurrentSpeed( int $currentSpeed) : void 
    {
        $this->currentSpeed = $currentSpeed;
    }

    public function getNbSeats() : int 
    {
        return $this->nbSeats;
    }
    public function setNbSeats( int $nbSeats) : void 
    {
        $this->nbSeats = $nbSeats;
    }

    public function getNbWheels() : int 
    {
        return $this->nbWheels;
    }
    public function setNbWheels( int $nbWheels) : void 
    {
        $this->nbWheels = $nbWheels;
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

}