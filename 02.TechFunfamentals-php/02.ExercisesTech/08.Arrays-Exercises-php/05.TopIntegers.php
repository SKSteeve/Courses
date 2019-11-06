<?php

$arr = explode(' ' , readline());
$count = count($arr);
$topIntegers = [];

for($i = 0; $i < $count; $i++)
{
    $top = true;
    for($j = $i + 1; $j < $count; $j++)
    {
        if($arr[$i] <= $arr[$j])
        {
            $top = false;
            break;
        }
    }
    if($top)
    {
        $topIntegers[] = $arr[$i];
    }
}

echo implode(' ' , $topIntegers);