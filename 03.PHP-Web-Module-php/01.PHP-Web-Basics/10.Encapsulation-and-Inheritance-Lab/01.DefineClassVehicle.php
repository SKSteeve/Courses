<?php

class Vehicle
{
    private $numberDoors;
    private $color;

    public function __construct($numberDoors, $color)
    {
        $this->numberDoors = $numberDoors;
        $this->color = $color;
    }
}

$myVehicle = new Vehicle(4, 'orange');
print_r($myVehicle);