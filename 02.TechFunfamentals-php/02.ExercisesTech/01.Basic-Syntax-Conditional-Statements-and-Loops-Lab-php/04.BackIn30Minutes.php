<?php

$hours = intval(readline());
$minutes = intval(readline());
$totalMins = $minutes + 30;

if($totalMins > 59)
{
    $hours++;
    $totalMins -= 60;
    if($hours >= 24)
    {
        $hours -= 24;
    }
}
if($totalMins < 10)
{
    echo "$hours:0$totalMins";
}
else
{
    echo "$hours:$totalMins";
}