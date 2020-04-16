<?php

include_once '03.AddPaintMethodToVehicle.php';

class Car extends Vehicle
{
    protected $brand;
    protected $model;
    protected $year;

    public function __construct($numberDoors = null, $color = null, $brand, $model, $year)
    {
        parent::__construct($numberDoors, $color);
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }
}

$car = new Car(4,'Red','Audi','A4',2016);

var_dump($car);