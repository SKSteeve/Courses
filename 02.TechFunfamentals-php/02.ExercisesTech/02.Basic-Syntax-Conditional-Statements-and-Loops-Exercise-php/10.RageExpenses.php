<?php

$lostGames = intval(readline());
$headsetPrice = floatval(readline());
$mousePrice = floatval(readline());
$keyboardPrice = floatval(readline());
$displayPrice = floatval(readline());

$headset = 0;
$mouse = 0;
$keyboard = 0;
$display = 0;

for($i = 1; $i <= $lostGames; $i++)
{
    if($i % 2 == 0)
    {
        $headset++;
    }
    if($i % 3 == 0)
    {
        $mouse++;
    }
    if($i % 2 == 0 && $i % 3 == 0)
    {
        $keyboard++;
        if($keyboard % 2 == 0)
        {
            $display++;
        }
    }
}
$sumTrashed = $headset * $headsetPrice + $mouse * $mousePrice + $keyboard * $keyboardPrice + $display * $displayPrice;
echo "Rage expenses: " . number_format($sumTrashed , 2, '.' , '') . " lv.";