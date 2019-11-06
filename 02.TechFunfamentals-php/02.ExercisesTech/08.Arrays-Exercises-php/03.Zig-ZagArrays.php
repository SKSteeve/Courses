<?php

$n = intval(readline());
$zig = [];
$zag = [];
$count = 0;

for($i = 0; $i < $n; $i++)
{
    $arrReaded = [];
    $count++;
    $arrReaded = explode(' ' , readline());
    if($count % 2 == 0)
    {
        $zag[] = $arrReaded[0];
        $zig[] = $arrReaded[1];
    }
    else
    {
        $zig[] = $arrReaded[0];
        $zag[] = $arrReaded[1];
    }
}

echo implode(' ', $zig) . PHP_EOL . implode(' ' , $zag);