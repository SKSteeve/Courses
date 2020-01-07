<?php

$n = intval(readline());
$k = intval(readline());

$numbers = array_fill(0, $n, 0);
$numbers[0] = 1;

for ($currnetEl = 0; $currnetEl < count($numbers); $currnetEl++)
{
    $startIndex = max(0, $currnetEl - $k);
    $sum = 0;

    for ($i = $startIndex; $i <= $currnetEl; $i++)
    {
        $sum += $numbers[$i];
    }

    $numbers[$currnetEl] = $sum;
}

echo implode(" ", $numbers);