<?php

$daysPlunder = intval(readline());
$dailyPlunder = intval(readline());
$expectedPlunder = floatval(readline());

$totalPlunder = 0;

for($i = 1; $i <= $daysPlunder; $i++)
{
    $totalPlunder += $dailyPlunder;

    if($i % 3 == 0)
    {
        $additionalPlunder = $dailyPlunder / 2;
        $totalPlunder += $additionalPlunder;
    }
    if($i % 5 == 0)
    {
        $losePlunder = $totalPlunder * 0.3;
        $totalPlunder -= $losePlunder;
    }
}

if($totalPlunder >= $expectedPlunder)
{
    printf("Ahoy! %.2f plunder gained.", $totalPlunder);
}
else
{
    $percentageLeft = number_format($totalPlunder * 100 / $expectedPlunder, 2, '.', '');
    echo "Collected only $percentageLeft% of the plunder.";
}