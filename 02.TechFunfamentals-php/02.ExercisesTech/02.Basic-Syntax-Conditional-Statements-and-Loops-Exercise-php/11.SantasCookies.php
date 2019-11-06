<?php

$numBatches = intval(readline());
$box = 0;
for($i = 1; $i <= $numBatches; $i++)
{
    $flourGrams = intval(readline());
    $sugarGrams = intval(readline());
    $cocoaGrams = intval(readline());

    $cupOfFlour = intval($flourGrams / 140);
    $smallSpoon = intval($cocoaGrams / 10);
    $bigSpoon = intval($sugarGrams / 20);

    if($cupOfFlour == 0 || $smallSpoon == 0 || $bigSpoon == 0)
    {
        echo "Ingredients are not enough for a box of cookies." . PHP_EOL;
        continue;
    }

    $minOfThis = intval(min($cupOfFlour, min($smallSpoon, $bigSpoon)));

    $cooks = intval(((140 + 10 + 20) * $minOfThis) / 25);

    $currBox = intval($cooks / 5);
    $box += $currBox;

    echo "Boxes of cookies: " . $currBox . PHP_EOL;
}
echo "Total boxes: " . $box;