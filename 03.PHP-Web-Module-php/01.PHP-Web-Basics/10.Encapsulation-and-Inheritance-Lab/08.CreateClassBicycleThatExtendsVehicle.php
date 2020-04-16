<?php

include_once '07.ProtectingTheNumberOfDoorsSetter.php';

class Bicycle Extends Vehicle
{
    private $brand;
    private $model;
    private $year;
    private $forSkir = null;
    private $isRiding;

    public function __construct($numberDoors = null, $color = null, $brand, $model, $year, $forSkir = null)
    {

        parent::__construct($numberDoors, $color);
        $this->setDoors();
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->forSkir = $forSkir;
    }

    public function setDoors()
    {
        $this->numberDoors = 0;
    }

    public function Ride()
    {
        $this->isRiding = true;
    }

    public function Stop()
    {
        $this->isRiding = false;
    }

    public function __toString()
    {
        return $print = "
            <table>
                <tr>{$this->brand}</tr>
                <tr>{$this->model}</tr>
                <tr>{$this->year}</tr>
                <tr>{$this->forSkir}</tr>
                <tr>{$this->isRiding}</tr>
                <tr>{$this->getDoors()}</tr>
                <tr>{$this->getColor()}</tr>
            <table>
            ";

    }
}

$b1 = new Bicycle(4, 'green', 'suprem', 'rs', 1999);
$b1->Ride();
$b2 = new Bicycle(2, 'white', 'bmx', 's', 2005, true);
$b2->Stop();

echo $b1;