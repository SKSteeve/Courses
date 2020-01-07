<?php

$input = explode("|", readline());
$sumValues = 0;
$matrix = [];
$sorted=[];
$maxKee[]=0;

while ($input[0] != "Result")
{
    $item = [];
    foreach ($input as $item)
    {
        $item = preg_replace("/[^a-zA-Z0-9]+/", "", $input);
    }

    if ((ctype_upper($item[0])))
    {
        $matrix[$item[0]][$item[1]] = intval($item[2]);
    }
    else
    {
        $matrix[$item[1]][$item[0]] = intval($item[2]);
    }

    $input = explode("|", readline());
}
foreach ($matrix as $key => $arr)
{
    $sumValues = 0;
    $maxKey = 0;
    foreach ($arr as $keyArr => $valueArr)
    {
        $sumValues += $valueArr;
        $sorted[$key]=$sumValues;
        if ($valueArr>$maxKey)
        {
            $maxKey=$valueArr;
        }
        $keyR = array_search($maxKey, $arr);
        $maxKee[$key]=$keyR;
    }
}

arsort($sorted);

foreach ($sorted as $key => $value)
{
    echo "$key" . " => " . $value . PHP_EOL;
    echo "Most points scored by ".$maxKee[$key] . PHP_EOL;
}