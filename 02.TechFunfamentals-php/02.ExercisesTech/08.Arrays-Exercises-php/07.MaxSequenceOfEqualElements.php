<?php

$arr = array_map('intval',explode(' ' , readline()));

$count = count($arr);
$bestScore = 0;
$bestElement = '';
for($i = 0; $i < $count; $i++)
{
    $repeats = 1;
    for($j = $i + 1; $j < $count; $j++)
    {
        if($arr[$i] === $arr[$j])
        {
            $repeats++;
        }
        else
        {
            break;
        }
    }
    if($repeats > $bestScore)
    {
        $bestScore = $repeats;
        $bestElement = $arr[$i];
    }
}

for($a = 0; $a < $bestScore; $a++)
{
    echo $bestElement . " ";
}