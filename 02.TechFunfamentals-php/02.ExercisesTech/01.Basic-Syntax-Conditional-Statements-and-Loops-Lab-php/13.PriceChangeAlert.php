<?php

$numPrices = intval(readline());
$granica = floatval(readline());

$last = floatval(readline());
for ($i = 0; $i < $numPrices - 1; $i++)
{
    $price = floatval(readline());
    $div = ($price - $last) / $last;
    $SignDiff = abs($div) >= $granica;

    $change = "";
    if ($div == 0)
    {
        $change = "NO CHANGE: " . $price;
    }
    else if(!$SignDiff)
    {
        $change = sprintf("MINOR CHANGE: %f to %f (%.2f%%)", $last, $price, $div * 100);
    }
    else if($SignDiff && ($div > 0))
    {
        $change = sprintf("PRICE UP: %f to %f (%.2f%%)", $last, $price, $div * 100);
    }
    else if($SignDiff && ($div < 0))
    {
        $change = sprintf("PRICE DOWN: %f to %f (%.2f%%)", $last, $price, $div * 100);
    }
    echo $change . PHP_EOL;
    $last = $price;
}

