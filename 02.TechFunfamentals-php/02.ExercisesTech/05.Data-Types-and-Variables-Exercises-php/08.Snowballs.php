<?php

$numOfSnowballs = intval(readline());
$best = 0;
$bestSnow = 0;
$bestTime = 0;
$bestQuality = 0;
for($i = 1; $i <= $numOfSnowballs; $i++)
{
    $snowballSnow = intval(readline());
    $snowballTime = intval(readline());
    $snowballQuality = intval(readline());

    $snowballValue = ($snowballSnow / $snowballTime);
    $snowballValue = bcpow($snowballValue , $snowballQuality);

    if($best < $snowballValue)
    {
        $best = $snowballValue;
        $bestSnow = $snowballSnow;
        $bestTime = $snowballTime;
        $bestQuality = $snowballQuality;
    }
}
echo "$bestSnow : $bestTime = $best ($bestQuality)";