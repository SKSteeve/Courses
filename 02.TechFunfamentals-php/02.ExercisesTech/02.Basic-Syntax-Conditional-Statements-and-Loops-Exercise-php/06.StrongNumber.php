<?php

$num = readline();
$totalSum = 0;
for($i = 0; $i < strlen($num); $i++)
{
    $sumFactoriels = 1;
    for($j = intval($num[$i]); $j >= 1 ; $j--)
    {
        $sumFactoriels *= $j;
    }
    $totalSum += $sumFactoriels;
}

if($totalSum == intval($num))
{
    echo "yes";
}
else
{
    echo "no";
}
