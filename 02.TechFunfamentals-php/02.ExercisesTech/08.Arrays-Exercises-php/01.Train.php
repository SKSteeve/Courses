<?php
$vagons = intval(readline());

$sum = 0;
$arr = [];

for($i = 0; $i < $vagons; $i++)
{
    $arr[] = intval(readline());
    $sum += $arr[$i];
}

echo implode(' ' , $arr) . PHP_EOL . $sum;
