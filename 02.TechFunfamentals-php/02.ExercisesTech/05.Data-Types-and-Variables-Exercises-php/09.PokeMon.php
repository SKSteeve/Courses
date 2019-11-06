<?php

$pokePower = intval(readline());
$distance = intval(readline());
$exhaustionFactor = intval(readline());

$poked = 0;
$half = $pokePower / 2.0;

while ($pokePower >= $distance)
{
    $poked++;
    $pokePower -= $distance;

    if ($half == $pokePower)
    {
        if ($exhaustionFactor > 0)
        {
            $pokePower /= $exhaustionFactor;
        }
    }
}
echo intval($pokePower) . PHP_EOL . $poked;