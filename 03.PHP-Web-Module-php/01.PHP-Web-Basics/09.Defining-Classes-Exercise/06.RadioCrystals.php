<?php

$input = explode(", ", readline());
$finalResult = array_shift($input);

foreach ($input as $startWeight)
{
    echo "Processing chunk $startWeight microns" . PHP_EOL;
    $count = 0;
    while (Cut($startWeight) >= $finalResult)
    {
        $count++;
        $startWeight = Cut($startWeight);
    }

    if ($count > 0)
    {
        echo "Cut x$count" . PHP_EOL;
        $startWeight = TransportingAndWashing($startWeight);
    }

    $count = 0;

    while (Lap($startWeight) >= $finalResult)
    {
        $count++;
        $startWeight = Lap($startWeight);
    }

    if ($count != 0)
    {
        echo "Lap x$count" . PHP_EOL;
        $startWeight = TransportingAndWashing($startWeight);
    }
    $count = 0;
    while (Grind($startWeight) >= $finalResult)
    {
        $count++;
        $startWeight = Grind($startWeight);
    }

    if ($count > 0)
    {
        echo "Grind x$count" . PHP_EOL;
        $startWeight = TransportingAndWashing($startWeight);
    }
    $count = 0;
    while (Etch($startWeight) >= $finalResult - 1)
    {
        $count++;
        $startWeight = Etch($startWeight);
    }
    if ($count > 0)
    {
        echo "Etch x$count" . PHP_EOL;
        $startWeight = TransportingAndWashing($startWeight);
    }

    if ($startWeight == $finalResult - 1)
    {
        $startWeight = Xray($startWeight);
        echo "X-ray x1" . PHP_EOL;
    }

    echo "Finished crystal $startWeight microns" . PHP_EOL;;
}

function TransportingAndWashing($a)
{
    echo "Transporting and washing" . PHP_EOL;
    return floor($a);
}

function Cut($a)
{
    $a /= 4;
    return $a;
}

function Lap($a)
{
    $a -= 0.2 * $a;
    return $a;
}

function Grind($a)
{
    $a -= 20;
    return $a;
}

function Etch($a)
{
    $a -= 2;
    return $a;
}

function Xray($a)
{
    $a += 1;
    return $a;
}