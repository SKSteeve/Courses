<?php
$num = intval(readline());
for ($i = 1; $i <= $num; $i++)
{
    $sum = 0;
    $currNum = $i;
    while ($i > 0)
    {
        $sum += $i % 10;
        $i = $i / 10;
    }
    $trueOrFalse = ($sum == 5) || ($sum == 7) || ($sum == 11);
    $trueOrFalseString = $trueOrFalse ? "True" : "False";
    echo sprintf("%d -> %s", $currNum, $trueOrFalseString) . PHP_EOL;
    $i = $currNum;
}
