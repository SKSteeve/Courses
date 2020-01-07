<?php

$nameAge = [];
$nameSalary = [];
$namePosition = [];

$input = readline();

$pattAge = '/^\d+$/';
$pattSalary = '/\-?\d+\.\d+/'; //^-?(?:\d+|\d*\.\d+)$

while($input != "filter base")
{
    $items = explode(" -> ", $input);
    $name = $items[0];
    $unknown = $items[1];

    if(preg_match($pattAge, $unknown))
    {
        $nameAge[$name] = $unknown;
    }
    else if(preg_match($pattSalary, $unknown))
    {
        $unknown = number_format($unknown, 2, '.', '');
        $nameSalary[$name] = $unknown;
    }
    else
    {
        $namePosition[$name] = $unknown;
    }

    $input = readline();
}

$get = readline();

if($get == "Age")
{
    foreach ($nameAge as $name => $age)
    {
        echo "Name: $name" . PHP_EOL . "Age: $age" . PHP_EOL;
        echo "====================" . PHP_EOL;
    }
}
else if($get == "Salary")
{
    foreach ($nameSalary as $name => $salary)
    {
        echo "Name: $name" . PHP_EOL . "Salary: $salary" . PHP_EOL;
        echo "====================" . PHP_EOL;
    }
}
else
{
    foreach ($namePosition as $name => $position)
    {
        echo "Name: $name" . PHP_EOL . "Position: $position" . PHP_EOL;
        echo "====================" . PHP_EOL;
    }
}

/*
Isacc -> 34
Peter -> CEO
Isacc -> 4500.054321
George -> Cleaner
John -> Security
Nina -> Secretary
filter base
*/

/*
Ivan -> Chistach
Pesho -> Ohrana
Pesho -> 1323.0456
Ivan -> 732.404
Georgi -> 21
Georgi -> 21.02
filter base
Salary
*/