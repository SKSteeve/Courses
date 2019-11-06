<?php

class Song
{
    private $typeList;
    private $name;
    private $time;

    public function __construct($typeListt, $namee, $timee)
    {
        $this->typeList = $typeListt;
        $this->name = $namee;
        $this->time = $timee;
    }

    public function getTypeList()
    {
        return $this->typeList;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getTime()
    {
        return $this->time;
    }
}


$numOfSongs = intval(readline());
$arraySongs = [];
for($i = 0; $i < $numOfSongs; $i++)
{
    $current = explode('_', readline());
    $type = $current[0];
    $name = $current[1];
    $time = $current[2];
    $song = new Song($type, $name, $time);
    $arraySongs[] = $song;
}

$filter = readline();

if($filter == "all")
{
    foreach ($arraySongs as $value)
    {
        echo $value->getName() . PHP_EOL;
    }
}
else
{
    foreach ($arraySongs as $value)
    {
        if($value->getTypeList() === $filter)
        {
            echo $value->getName() . PHP_EOL;
        }
    }
}





