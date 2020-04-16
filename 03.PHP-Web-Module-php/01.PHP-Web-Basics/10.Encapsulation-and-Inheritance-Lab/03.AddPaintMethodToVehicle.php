<?php

class Vehicle
{
    private $numberDoors;
    protected $color;  //from private to protected on exercise 6 and after

    public function __construct($numberDoors = null, $color = null)
    {
        $this->setDoors($numberDoors);
        $this->setColor($color);
    }

    public function setDoors($numDoors)
    {
        $this->numberDoors = $numDoors;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getDoors()
    {
        return $this->numberDoors;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function paint($color)
    {
        $this->setColor($color);
    }

    public function __get($name)
    {
        if($name == 'numberDoors' && $this->numberDoors !== null) {
            return $this->numberDoors;
        }
        elseif ($name == 'numberDoors') {
            $this->setDoors(4);
            return $this->numberDoors;
        }
        echo "Property doesn't exist";
    }
}

/*
$myVehicle = new Vehicle(3, 'orange');
$myVehicle->paint('blue');
echo $myVehicle->getColor();
*/